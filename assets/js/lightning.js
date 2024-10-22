class Lightning {
    constructor(options) {
        Object.assign(this, options);

        this.size = 500;
        this.c = this.canvas;
        this.c.width = this.size;
        this.c.height = this.size;
        this.ctx = this.c.getContext("2d");

        this.center = {x: this.size / 2, y: 20};
        this.minSegmentHeight = 5;
        this.groundHeight = this.size - 20;
        this.color = "#2DACF3";
        this.roughness = 1.8;
        this.maxDifference = this.size / 8;

        this.ctx.globalCompositeOperation = "lighter";

        this.ctx.strokeStyle = this.color;
        this.ctx.shadowColor = this.color;

        this.ctx.fillStyle = this.color;
        this.ctx.fillRect(0, 0, this.size, this.size);
        this.ctx.fillStyle = "hsl(180, 80%, 80%)";

        setInterval(() => {
            this.render()
        }, 1000/30)
    }
    render = () => {
        this.ctx.shadowBlur = 0;
        this.ctx.globalCompositeOperation = "source-over";
        this.ctx.clearRect(0, 0, this.c.width, this.c.height);
        this.ctx.globalCompositeOperation = "lighter";
        this.ctx.shadowBlur = 15;
        var lightning = this.createLightning();
        this.ctx.beginPath();
        for (var i = 0; i < lightning.length; i++) {
            this.ctx.lineTo(lightning[i].x, lightning[i].y);
        }
        this.ctx.stroke();
    }
    createLightning = () => {
        var segmentHeight = this.groundHeight - this.center.y;
        var lightning = [];
        lightning.push({x: this.center.x, y: this.center.y});
        lightning.push({x: Math.random() * (this.size - 100) + 50, y: this.groundHeight + (Math.random() - 0.2) * 50});
        var currDiff = this.maxDifference;
        while (segmentHeight > this.minSegmentHeight) {
        var newSegments = [];
        for (var i = 0; i < lightning.length - 1; i++) {
            var start = lightning[i];
            var end = lightning[i + 1];
            var midX = (start.x + end.x) / 2;
            var newX = midX + (Math.random() * 2 - 1) * currDiff;
            newSegments.push(start, {x: newX, y: (start.y + end.y) / 2});
        }
        
        newSegments.push(lightning.pop());
        lightning = newSegments;
        
        currDiff /= this.roughness;
        segmentHeight /= 2;
        }
        return lightning;
    }
}

const lightnings = [...document.querySelectorAll('.lightning')].map((n, i) => new Lightning({
    canvas: n
}));