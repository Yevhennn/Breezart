<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('chatbot-toggle');
        const closeBtn = document.getElementById('chatbot-close');
        const windowEl = document.getElementById('chatbot-window');
        const messagesEl = document.getElementById('chatbot-messages');
        const inputEl = document.getElementById('chatbot-input');
        const sendBtn = document.getElementById('chatbot-send');

        toggleBtn.addEventListener('click', () => {
            windowEl.classList.toggle('d-none');
            if (!windowEl.classList.contains('d-none')) {
                inputEl.focus();
            }
        });

        closeBtn.addEventListener('click', () => {
            windowEl.classList.add('d-none');
        });

        const sendMessage = async () => {
            const text = inputEl.value.trim();
            if (!text) return;

            appendMessage(text, 'user-message');
            inputEl.value = '';
            sendBtn.disabled = true;

            const typingId = showTyping();

            try {
                const response = await fetch('/chatbot/ask', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ message: text })
                });

                removeTyping(typingId);

                if (response.ok) {
                    const data = await response.json();
                    appendMessage(data.message, 'bot-message');
                } else {
                    appendMessage('Произошла ошибка связи с сервером. Попробуйте еще раз или напишите в WhatsApp.', 'bot-message');
                }
            } catch (error) {
                removeTyping(typingId);
                appendMessage('Ошибка подключения. Проверьте интернет соединение.', 'bot-message');
            } finally {
                sendBtn.disabled = false;
                inputEl.focus();
            }
        };

        sendBtn.addEventListener('click', sendMessage);
        inputEl.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        function appendMessage(text, className) {
            const div = document.createElement('div');
            div.className = `chatbot-message ${className}`;
            div.innerHTML = text.replace(/\n/g, '<br>');
            messagesEl.appendChild(div);
            messagesEl.scrollTop = messagesEl.scrollHeight;
        }

        function showTyping() {
            const id = 'typing-' + Date.now();
            const div = document.createElement('div');
            div.id = id;
            div.className = 'chatbot-typing';
            div.innerHTML = '<div class="dot"></div><div class="dot"></div><div class="dot"></div>';
            messagesEl.appendChild(div);
            messagesEl.scrollTop = messagesEl.scrollHeight;
            return id;
        }

        function removeTyping(id) {
            const el = document.getElementById(id);
            if (el) el.remove();
        }
    });
</script>
