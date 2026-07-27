<div id="chatbot-container" class="chatbot-container">
    <!-- Chatbot Toggle Button -->
    <button id="chatbot-toggle" class="chatbot-toggle">
        <i class="bi bi-chat-dots-fill"></i>
    </button>

    <!-- Chatbot Window -->
    <div id="chatbot-window" class="chatbot-window d-none">
        <div class="chatbot-header">
            <div class="chatbot-header-title">
                <i class="bi bi-robot me-2"></i> Breezart Assistant
            </div>
            <button id="chatbot-close" class="chatbot-close">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
        <div id="chatbot-messages" class="chatbot-messages">
            <div class="chatbot-message bot-message">
                Привет! Я умный помощник компании Breezart. Готов ответить на ваши вопросы по кондиционерам, установке и ценам.
            </div>
        </div>
        <div class="chatbot-input-container">
            <input type="text" id="chatbot-input" class="chatbot-input" placeholder="Введите ваш вопрос..." autocomplete="off">
            <button id="chatbot-send" class="chatbot-send">
                <i class="bi bi-send-fill"></i>
            </button>
        </div>
    </div>
</div>

<style>
    /* Chatbot Styles */
    .chatbot-container {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 1050;
        font-family: 'Inter', sans-serif;
    }

    .chatbot-toggle {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: var(--primary-color, #2563eb);
        color: white;
        border: none;
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.4);
        font-size: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .chatbot-toggle:hover {
        transform: scale(1.1);
        background-color: var(--secondary-color, #1d4ed8);
    }

    .chatbot-window {
        position: absolute;
        bottom: 80px;
        right: 0;
        width: 350px;
        height: 500px;
        background-color: white;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        display: flex;
        flex-direction: column;
        overflow: hidden;
        transition: opacity 0.3s ease, transform 0.3s ease;
        border: 1px solid rgba(0,0,0,0.05);
    }

    .chatbot-window.d-none {
        display: none !important;
        opacity: 0;
        transform: translateY(20px);
    }

    .chatbot-header {
        background-color: var(--primary-color, #2563eb);
        color: white;
        padding: 16px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-weight: 600;
        font-size: 16px;
    }

    .chatbot-header-title {
        display: flex;
        align-items: center;
    }

    .chatbot-close {
        background: none;
        border: none;
        color: white;
        font-size: 20px;
        cursor: pointer;
        opacity: 0.8;
        transition: opacity 0.2s;
    }

    .chatbot-close:hover {
        opacity: 1;
    }

    .chatbot-messages {
        flex-grow: 1;
        padding: 16px;
        overflow-y: auto;
        display: flex;
        flex-direction: column;
        gap: 12px;
        background-color: #f8fafc;
    }

    .chatbot-message {
        max-width: 85%;
        padding: 12px 16px;
        border-radius: 16px;
        font-size: 14px;
        line-height: 1.5;
        word-wrap: break-word;
    }

    .bot-message {
        background-color: white;
        color: #1e293b;
        align-self: flex-start;
        border-bottom-left-radius: 4px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        border: 1px solid rgba(0,0,0,0.05);
    }

    .user-message {
        background-color: var(--primary-color, #2563eb);
        color: white;
        align-self: flex-end;
        border-bottom-right-radius: 4px;
        box-shadow: 0 2px 4px rgba(37, 99, 235, 0.2);
    }

    .chatbot-input-container {
        padding: 12px;
        background-color: white;
        border-top: 1px solid #e2e8f0;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .chatbot-input {
        flex-grow: 1;
        padding: 10px 16px;
        border: 1px solid #e2e8f0;
        border-radius: 20px;
        outline: none;
        font-size: 14px;
        transition: border-color 0.2s;
    }

    .chatbot-input:focus {
        border-color: var(--primary-color, #2563eb);
    }

    .chatbot-send {
        background-color: var(--primary-color, #2563eb);
        color: white;
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .chatbot-send:hover {
        background-color: var(--secondary-color, #1d4ed8);
    }

    .chatbot-send:disabled {
        background-color: #94a3b8;
        cursor: not-allowed;
    }

    .chatbot-typing {
        display: flex;
        gap: 4px;
        padding: 12px 16px;
        background-color: white;
        border-radius: 16px;
        border-bottom-left-radius: 4px;
        align-self: flex-start;
        width: fit-content;
        border: 1px solid rgba(0,0,0,0.05);
    }

    .chatbot-typing .dot {
        width: 6px;
        height: 6px;
        background-color: #94a3b8;
        border-radius: 50%;
        animation: typing 1.4s infinite ease-in-out both;
    }

    .chatbot-typing .dot:nth-child(1) { animation-delay: -0.32s; }
    .chatbot-typing .dot:nth-child(2) { animation-delay: -0.16s; }

    @keyframes typing {
        0%, 80%, 100% { transform: scale(0); }
        40% { transform: scale(1); }
    }

    /* Mobile responsiveness */
    @media (max-width: 576px) {
        .chatbot-window {
            width: calc(100vw - 40px);
            right: -10px;
            bottom: 70px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.getElementById('chatbot-toggle');
    const closeBtn = document.getElementById('chatbot-close');
    const windowEl = document.getElementById('chatbot-window');
    const messagesEl = document.getElementById('chatbot-messages');
    const inputEl = document.getElementById('chatbot-input');
    const sendBtn = document.getElementById('chatbot-send');

    // Toggle Chat
    toggleBtn.addEventListener('click', () => {
        windowEl.classList.toggle('d-none');
        if (!windowEl.classList.contains('d-none')) {
            inputEl.focus();
        }
    });

    closeBtn.addEventListener('click', () => {
        windowEl.classList.add('d-none');
    });

    // Send Message
    const sendMessage = async () => {
        const text = inputEl.value.trim();
        if (!text) return;

        // Add user message
        appendMessage(text, 'user-message');
        inputEl.value = '';
        sendBtn.disabled = true;

        // Show typing indicator
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
        // Simple line break to br conversion
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
