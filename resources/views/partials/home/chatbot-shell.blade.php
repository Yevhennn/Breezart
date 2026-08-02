<div id="chatbot-container" class="chatbot-container">
    <button id="chatbot-toggle" class="chatbot-toggle">
        <i class="bi bi-chat-dots-fill"></i>
    </button>

    <div id="chatbot-window" class="chatbot-window d-none">
        @include('partials.home.chatbot-header')
        @include('partials.home.chatbot-messages')
        @include('partials.home.chatbot-input')
    </div>
</div>
