<section itemscope itemtype="https://schema.org/Organization">
    <!-- Floating WhatsApp Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <button id="whatsappBtn" aria-label="Chat with BravoDent on WhatsApp" class="bg-green-500 p-3 rounded-full shadow-lg flex items-center justify-center hover:bg-green-700 transition-all duration-300 focus:outline-none animate-bounce">
            <img class="w-12 h-12" src="public/images/whatsapp.png" alt="Chat with BravoDent on WhatsApp" width="48" height="48" loading="lazy">
        </button>
    </div>

    <!-- WhatsApp Chat Popup -->
    <div id="whatsappPopup" class="hidden fixed inset-0 flex justify-center items-center md:justify-end z-50 bg-black bg-opacity-60 transition-opacity" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="chatPopupTitle">
        <div class="bg-white p-5 rounded-lg w-[90vw] h-[65vh] md:w-[25vw] md:h-[60vh] flex flex-col shadow-xl relative md:mr-6 animate-slide-in border border-gray-300">

            <!-- Header -->
            <div class="flex items-center justify-between border-b pb-3 bg-green-600 p-3 rounded-t-lg">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-white flex items-center justify-center rounded-full border shadow-lg">
                        <img src="public/images/logo.png" alt="BravoDent Dental Services" class="w-12 h-8" width="48" height="32" loading="lazy">
                    </div>
                    <div>
                        <h1 id="chatPopupTitle" class="text-lg md:text-xl font-semibold text-white">BravoDent</h1>
                        <span class="text-green-200 text-sm font-medium">Online</span>
                    </div>
                </div>
                <button id="closePopup" aria-label="Close WhatsApp chat" class="text-white hover:text-red-400 focus:outline-none transition-all">
                    <img class="w-5 h-5" src="public/images/close.png" alt="Close chat" width="20" height="20" loading="lazy">
                </button>
            </div>

            <!-- Chat Box -->
            <div id="chatbox" class="flex flex-col space-y-3 flex-1 overflow-y-auto p-3 bg-gray-100 rounded-lg shadow-inner border mt-3" style="background-image: url('public/images/whatsapp_chat_bg.png'); background-size: cover; background-blend-mode: overlay;" itemprop="description"></div>

            <!-- Typing Indicator -->
            <div id="typingIndicator" class="hidden flex items-center space-x-2 p-2 text-gray-500" aria-live="polite">
                <span class="dot bg-gray-500 w-2 h-2 rounded-full"></span>
                <span class="dot bg-gray-500 w-2 h-2 rounded-full"></span>
                <span class="dot bg-gray-500 w-2 h-2 rounded-full"></span>
            </div>

            <!-- Message Input Form -->
            <form id="whatsappForm" class="flex items-center space-x-2 mt-3 border-t pt-3 bg-white p-2 rounded-b-lg shadow-md" itemscope itemtype="https://schema.org/Message">
                <input type="text" id="message" name="message" placeholder="Type a message..." class="w-full p-3 border rounded-full text-gray-700 focus:outline-none focus:ring-green-500 focus:border-green-500 bg-gray-200 shadow-sm" required aria-label="Type your message">

                <a href="https://wa.me/7982687110" id="sendmessage" aria-label="Send message via WhatsApp" class="bg-green-600 text-white p-3 rounded-full hover:bg-green-700 transition-all duration-300 focus:outline-none shadow-lg flex items-center justify-center" itemprop="potentialAction">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 14l8-8 8 8"></path>
                    </svg>
                </a>
            </form>
        </div>
    </div>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "BravoDent",
  "url": "https://www.yourwebsite.com",
  "logo": "https://www.yourwebsite.com/public/images/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+7982687110",
    "contactType": "customer service",
    "areaServed": "Global",
    "availableLanguage": "English",
    "contactOption": "WhatsApp"
  },
  "sameAs": [
    "https://wa.me/7982687110"
  ]
}
</script>

<script>
    const chatMessages = [
        "Welcome to BravoDent! 👋",
        "Hello! Thanks for reaching out. How may I help you today? 😊",
        "For quick assistance, you can also connect with our team directly on WhatsApp.",
        "👉 Connect on - <a href='https://wa.me/7982687110' class='text-green-600 font-bold'>WhatsApp</a> | <a href='mailto:bravodent@bravodentdesigns.com' class='text-blue-600 font-bold'>Email</a>",
        "Let us know how we can assist you! 🚀"
    ];

    document.getElementById('whatsappBtn').addEventListener('click', function() {
        document.getElementById('whatsappPopup').classList.remove('hidden');
        document.getElementById('whatsappPopup').setAttribute('aria-hidden', 'false');
        document.getElementById('whatsappPopup').classList.add('fade-in');
        showMessagesSequentially();
    });

    document.getElementById('closePopup').addEventListener('click', function() {
        document.getElementById('whatsappPopup').classList.add('hidden');
        document.getElementById('whatsappPopup').setAttribute('aria-hidden', 'true');
    });

    document.getElementById('whatsappForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const message = document.getElementById('message').value.trim();
        if (!message) return;

        // Append message to chatbox
        appendMessage(message, 'self-end bg-green-500 text-white');

        // Dynamically update WhatsApp link
        const sendMessageLink = document.getElementById('sendmessage');
        const encodedMessage = encodeURIComponent(message);
        sendMessageLink.href = `https://wa.me/7982687110?text=${encodedMessage}`;

        // Open WhatsApp chat in new tab
        window.open(sendMessageLink.href, '_blank');

        // Clear input after sending
        document.getElementById('message').value = '';
    });

    function showMessagesSequentially() {
        const chatbox = document.getElementById('chatbox');
        chatbox.innerHTML = '';
        chatMessages.forEach((message, index) => {
            setTimeout(() => {
                document.getElementById('typingIndicator').classList.remove('hidden');
                setTimeout(() => {
                    appendMessage(message, 'self-start bg-gray-200 text-gray-900');
                    document.getElementById('typingIndicator').classList.add('hidden');
                }, 1000);
            }, index * 5000);
        });
    }

    function appendMessage(message, classes) {
        const chatbox = document.getElementById('chatbox');
        const messageElement = document.createElement('div');
        messageElement.className = `rounded-lg p-3 max-w-xs text-sm font-medium ${classes}`;
        messageElement.innerHTML = message;
        chatbox.appendChild(messageElement);
        chatbox.scrollTop = chatbox.scrollHeight;
    }
</script>

<style>
    @keyframes slide-in {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-slide-in {
        animation: slide-in 0.3s ease-in-out;
    }

    @keyframes fade-in {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .fade-in {
        animation: fade-in 0.3s ease-in-out;
    }

    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-5px);
        }
    }

    .animate-bounce {
        animation: bounce 1.5s infinite;
    }

    .dot {
        animation: typing 1.5s infinite;
    }

    @keyframes typing {
        0% {
            opacity: 0.3;
        }
        50% {
            opacity: 1;
        }
        100% {
            opacity: 0.3;
        }
    }
</style>