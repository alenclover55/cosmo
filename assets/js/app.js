const socket = io.connect(':8443'); var options = { startVal: $('#userBalance').html(), decimalPlaces: 2, separator: ''}; const worker = new Worker('../../api/worker.js'); function loader(){return{state:!0,destroy(){setTimeout(()=>{this.state=!1},500)}}}function btn(){return{timeout:null,loader:!1,eventClick(e){clearTimeout(this.timeout),this.loader||(this.loader=!0,this.timeout=setTimeout(()=>{this.loader=!1},e))}}}function parseDecimals(e){for(var t=(e+="").split("."),n=t[0],o=t.length>1?"."+t[1]:"",i=/(\d+)(\d{3})/;i.test(n);)n=n.replace(i,"$1 $2");return n+o}document.addEventListener("click",function(e){e.target.classList.contains("maskedLink")&&(document.location.href=e.target.dataset.href)}),$(document).ready(function(){toastr.options={closeButton:!1,debug:!1,newestOnTop:!1,progressBar:!0,positionClass:"toast-top-center",preventDuplicates:!0,onclick:null,showDuration:"100",hideDuration:"300",timeOut:"5000",extendedTimeOut:"500",showEasing:"swing",hideEasing:"linear",showMethod:"fadeIn",hideMethod:"fadeOut","escapeHtml ":!0};tippy(document.querySelectorAll(".tooltip"),{animation:"scale-subtle"})}),document.addEventListener("mousewheel",function(e){(e.ctrlKey||e.metaKey)&&(e.preventDefault(),e.stopImmediatePropagation())},{passive:!1}),document.addEventListener("gesturestart",function(e){e.preventDefault(),e.stopImmediatePropagation()},{passive:!1}),document.addEventListener("keydown",function(e){(e.ctrlKey||e.metaKey)&&(189!=e.keyCode&&187!=e.keyCode||(e.preventDefault(),e.stopImmediatePropagation()))},{passive:!1});