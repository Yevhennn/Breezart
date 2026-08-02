<style>
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
        border: 1px solid rgba(0, 0, 0, 0.05);
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
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
        border: 1px solid rgba(0, 0, 0, 0.05);
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
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .chatbot-typing .dot {
        width: 6px;
        height: 6px;
        background-color: #94a3b8;
        border-radius: 50%;
        animation: typing 1.4s infinite ease-in-out both;
    }

    .chatbot-typing .dot:nth-child(1) {
        animation-delay: -0.32s;
    }

    .chatbot-typing .dot:nth-child(2) {
        animation-delay: -0.16s;
    }

    @keyframes typing {
        0%, 80%, 100% {
            transform: scale(0);
        }

        40% {
            transform: scale(1);
        }
    }

    @media (max-width: 576px) {
        .chatbot-window {
            width: calc(100vw - 40px);
            right: -10px;
            bottom: 70px;
        }
    }
</style>
