function support() {
    return {
        tickets: [
            {
                id: now(),
                theme: 'Вариант с ответом админа',
                date: new Date().toLocaleString(),
                closed: false,
                messages: [
                    {
                        message: 'Здравствуйте! Подскажите пожалуйста, я пополнил баланс через QIWI, но мне деньги не зачислили... Мой Id операции: #89912',
                        date: new Date().toLocaleString(),
                        avatar: 'https://sun9-4.userapi.com/impg/cswkRLf0py7zse17L2CCE6ySLqAPLXKXhGMxBg/Rj8bBKDgVyc.jpg?size=768x1024&quality=95&sign=178dbf6ef199013a1f18ece7d274d5a0&type=album',
                        isAgent: false,
                    },
                    {
                        message: 'А всё, зачислили, у меня просто инет тупанул',
                        date: new Date().toLocaleString(),
                        avatar: 'https://sun9-4.userapi.com/impg/cswkRLf0py7zse17L2CCE6ySLqAPLXKXhGMxBg/Rj8bBKDgVyc.jpg?size=768x1024&quality=95&sign=178dbf6ef199013a1f18ece7d274d5a0&type=album',
                        isAgent: false,
                    },
                    {
                        message: 'Здравствуйте! Я так понимаю, вы решили свой вопрос? Если нет, пожалуйста, задайте свой вопрос корректно.',
                        date: new Date().toLocaleString(),
                        avatar: 'assets/images/ava.svg',
                        isAgent: true,
                    },
                    {
                        message: 'Простите, вы здесь?',
                        date: new Date().toLocaleString(),
                        avatar: 'assets/images/ava.svg',
                        isAgent: true,
                    },
                    {
                        message: 'Я закрываю тикет.',
                        date: new Date().toLocaleString(),
                        avatar: 'assets/images/ava.svg',
                        isAgent: true,
                    },
                ]
            },
            {
                id: now(),
                theme: 'Вариант с закрытым состоянием тикета',
                date: new Date().toLocaleString(),
                closed: true,
                messages: [
                    {
                        message: 'Здравствуйте! Вы пидорас',
                        date: new Date().toLocaleString(),
                        avatar: 'https://sun9-4.userapi.com/impg/cswkRLf0py7zse17L2CCE6ySLqAPLXKXhGMxBg/Rj8bBKDgVyc.jpg?size=768x1024&quality=95&sign=178dbf6ef199013a1f18ece7d274d5a0&type=album',
                        isAgent: false,
                    },
                ]
            },
        ],
        ticketSelect: null,
        theme: '',
        message: '',
        createTicket() {
            if(this.theme) {
                if(this.theme.length >= 12) {
                    if(this.message) {
                        this.tickets.push({
                            id: now(),
                            theme: this.theme,
                            date: new Date().toLocaleString(),
                            closed: false,
                            messages: [
                                {
                                    message: this.message,
                                    date: new Date().toLocaleString(),
                                    avatar: 'https://sun9-4.userapi.com/impg/cswkRLf0py7zse17L2CCE6ySLqAPLXKXhGMxBg/Rj8bBKDgVyc.jpg?size=768x1024&quality=95&sign=178dbf6ef199013a1f18ece7d274d5a0&type=album',
                                    isAgent: false, 
                                }
                            ]
                        })

                        closePopup('popup--support');
                    } else {
                        toastr.error(
                            '<div class=toast__wrapper>' +
                                '<img class=toast__image src=assets/images/error.svg>' +
                                '<div class=toast__content>' +
                                    '<span class=toast__title>Ошибка</span>' +
                                    '<p class=toast__msg>Введите ваше сообщение</p>' +
                                '</div>' +
                            '</div>'
                        );
                    }
                } else {
                    toastr.error(
                        '<div class=toast__wrapper>' +
                            '<img class=toast__image src=assets/images/error.svg>' +
                            '<div class=toast__content>' +
                                '<span class=toast__title>Ошибка</span>' +
                                '<p class=toast__msg>Минимальное кол-во символов темы обращения: 12</p>' +
                            '</div>' +
                        '</div>'
                    );
                }
            } else {
                toastr.error(
                    '<div class=toast__wrapper>' +
                        '<img class=toast__image src=assets/images/error.svg>' +
                        '<div class=toast__content>' +
                            '<span class=toast__title>Ошибка</span>' +
                            '<p class=toast__msg>Введите тему обращения</p>' +
                        '</div>' +
                    '</div>'
                );
            }
        },
        selectTicket(data) {
            this.ticketSelect = data
        },
        sendMessage(message, idx) {
            if (message) {
                this.tickets.map(item => item.id === idx ? item.messages.push({
                    message: message,
                    date: new Date().toLocaleString(),
                    avatar: 'https://sun9-4.userapi.com/impg/cswkRLf0py7zse17L2CCE6ySLqAPLXKXhGMxBg/Rj8bBKDgVyc.jpg?size=768x1024&quality=95&sign=178dbf6ef199013a1f18ece7d274d5a0&type=album',
                    isAgent: false,
                }) : '');
                let event = new Event("scrollbarupdate")
                window.dispatchEvent(event)
            } else {
                toastr.error(
                    '<div class=toast__wrapper>' +
                        '<img class=toast__image src=assets/images/error.svg>' +
                        '<div class=toast__content>' +
                            '<span class=toast__title>Ошибка</span>' +
                            '<p class=toast__msg>Введите ваше сообщение</p>' +
                        '</div>' +
                    '</div>'
                );
            }
        },
        closeTicket(idx) {
            this.tickets.map(item => item.id === idx ? item.closed = true : '')
        }
    }
}