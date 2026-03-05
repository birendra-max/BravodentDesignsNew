<section itemscope itemtype="https://schema.org/Organization">

  <div class="fixed bottom-6 right-6 z-50">
    <button
      id="whatsappBtn"
      type="button"
      aria-label="Chat with BravoDent support"
      aria-expanded="false"
      aria-controls="whatsappPopup"
      class="bg-green-500 p-3 rounded-full shadow-lg flex items-center justify-center hover:bg-green-700 transition-all duration-300 focus:outline-none animate-bounce"
    >
      <img
        class="w-12 h-12"
        src="public/images/whatsapp.png"
        alt="Chat with BravoDent support"
        width="48"
        height="48"
        loading="lazy"
        decoding="async"
      >
    </button>
  </div>

  <div
    id="whatsappPopup"
    hidden
    role="dialog"
    aria-modal="true"
    aria-labelledby="chatPopupTitle"
    aria-describedby="chatPopupDesc"
    class="fixed inset-0 flex justify-center items-center md:justify-end z-50 bg-black bg-opacity-60"
  >
    <div class="bg-white p-2 rounded-lg w-[90vw] h-[65vh] md:w-[25vw] md:h-[60vh] flex flex-col shadow-xl relative md:mr-6 animate-slide-in border border-gray-300">

      <div class="flex items-center justify-between border-b bg-green-600 p-3 rounded-t-lg">
        <div class="flex items-center space-x-3">
          <div class="w-12 h-12 bg-white flex items-center justify-center rounded-full border shadow-lg">
            <img
              src="public/images/logo.png"
              alt="BravoDent Dental Services"
              class="w-12 h-8"
              width="48"
              height="32"
              loading="lazy"
              decoding="async"
            >
          </div>
          <div>
            <h2 id="chatPopupTitle" class="text-lg md:text-xl font-semibold text-white">BravoDent</h2>
            <p id="chatPopupDesc" class="text-green-200 text-sm font-medium">
              <span id="connectionStatus">Connecting...</span>
            </p>
          </div>
        </div>
        <button
          id="closePopup"
          type="button"
          aria-label="Close chat"
          class="text-white hover:text-red-400 focus:outline-none focus:ring-2 focus:ring-white rounded transition-all"
        >
          <img
            class="w-5 h-5"
            src="public/images/close.png"
            alt="Close"
            width="20"
            height="20"
            loading="lazy"
            decoding="async"
          >
        </button>
      </div>

      <div
        id="chatbox"
        role="log"
        aria-live="polite"
        aria-atomic="false"
        aria-label="Chat messages"
        class="flex flex-col space-y-3 flex-1 overflow-y-auto p-3 bg-gray-100 rounded-lg shadow-inner border mt-3"
        style="background-image: url('public/images/whatsapp_chat_bg.png'); background-size: cover; background-blend-mode: overlay;"
      ></div>

      <div class="flex items-center space-x-2 pt-2">
        <label for="wpMessage" class="sr-only">Type your message</label>
        <input
          type="text"
          id="wpMessage"
          name="message"
          placeholder="Type a message..."
          autocomplete="off"
          maxlength="500"
          aria-label="Type your message"
          aria-required="true"
          class="w-full p-3 border rounded-full text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 bg-gray-200 shadow-sm"
        >
        <button
          type="button"
          id="wpSendBtn"
          aria-label="Send message"
          class="bg-green-600 text-white p-3 rounded-full hover:bg-green-700 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-green-400 shadow-lg flex items-center justify-center"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 14l8-8 8 8"/>
          </svg>
        </button>
      </div>

    </div>
  </div>

</section>

<style>
  #whatsappPopup { display: none; }
  #whatsappPopup.is-open { display: flex; }

  @keyframes slide-in {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .animate-slide-in { animation: slide-in 0.3s ease-in-out; }

  @keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50%       { transform: translateY(-5px); }
  }
  .animate-bounce { animation: bounce 1.5s infinite; }

  .dot { animation: typing 1.5s infinite; }
  .dot:nth-child(2) { animation-delay: 0.2s; }
  .dot:nth-child(3) { animation-delay: 0.4s; }

  @keyframes typing {
    0%   { opacity: 0.3; }
    50%  { opacity: 1; }
    100% { opacity: 0.3; }
  }
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {

  let currentUserId = localStorage.getItem("bravodent_user_id");
  if (!currentUserId) {
    currentUserId = "user_" + Math.floor(Math.random() * 100000);
    localStorage.setItem("bravodent_user_id", currentUserId);
  }

  const whatsappBtn      = document.getElementById("whatsappBtn");
  const whatsappPopup    = document.getElementById("whatsappPopup");
  const closePopup       = document.getElementById("closePopup");
  const chatbox          = document.getElementById("chatbox");
  const wpMessage        = document.getElementById("wpMessage");
  const wpSendBtn        = document.getElementById("wpSendBtn");
  const connectionStatus = document.getElementById("connectionStatus");

  let socket;
  let welcomeShown = false;

  function openPopup() {
    whatsappPopup.removeAttribute("hidden");
    whatsappPopup.classList.add("is-open");
    whatsappBtn.setAttribute("aria-expanded", "true");
    whatsappBtn.classList.remove("animate-bounce");
    setTimeout(() => wpMessage.focus(), 300);
  }

  function closePopupFn() {
    whatsappPopup.setAttribute("hidden", "");
    whatsappPopup.classList.remove("is-open");
    whatsappBtn.setAttribute("aria-expanded", "false");
    whatsappBtn.classList.add("animate-bounce");
    whatsappBtn.focus();
  }

  whatsappBtn.addEventListener("click", openPopup);
  closePopup.addEventListener("click", closePopupFn);

  whatsappPopup.addEventListener("click", (e) => {
    if (e.target === whatsappPopup) closePopupFn();
  });

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && whatsappPopup.classList.contains("is-open")) {
      closePopupFn();
    }
  });

  wpMessage.addEventListener("keypress", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      sendMessage();
    }
  });

  wpSendBtn.addEventListener("click", sendMessage);

  function addBubble(text, type) {
    const bubble = document.createElement("div");
    bubble.setAttribute("role", "status");
    bubble.setAttribute(
      "aria-label",
      type === "sent" ? "You said: " + text : "Support replied: " + text
    );

    if (type === "sent") {
      bubble.className = "self-end bg-green-100 text-gray-800 p-3 rounded-xl rounded-br-none max-w-[80%] break-words text-sm shadow ml-auto";
    } else {
      bubble.className = "self-start bg-white text-gray-800 p-3 rounded-xl rounded-bl-none max-w-[80%] break-words text-sm shadow";
    }

    bubble.innerText = text;
    chatbox.appendChild(bubble);
    chatbox.scrollTop = chatbox.scrollHeight;
  }

  function showTyping() {
    chatbox.scrollTop = chatbox.scrollHeight;
  }

  function sendMessage() {
    const text = wpMessage.value.trim();
    if (!text) return;

    if (socket && socket.readyState === WebSocket.OPEN) {
      socket.send(JSON.stringify({
        type: "chat_from_user",
        user_id: currentUserId,
        message: text
      }));
      addBubble(text, "sent");
      wpMessage.value = "";
      wpMessage.focus();
    } else {
      connectionStatus.textContent = "Reconnecting...";
      connectWebSocket();
    }
  }

  function connectWebSocket() {
    socket = new WebSocket("wss://dentalserver.online/ws/");

    socket.onopen = function () {
      connectionStatus.textContent = "Online";

      socket.send(JSON.stringify({
        type: "register_user",
        user_id: currentUserId
      }));

      socket.send(JSON.stringify({
        type: "load_history",
        user_id: currentUserId
      }));
    };

    socket.onmessage = function (event) {
      let data;
      try {
        data = JSON.parse(event.data);
      } catch (e) {
        console.error("Invalid message from server:", e);
        return;
      }

      if (data.type === "chat_history") {
        chatbox.innerHTML = "";

        if (data.messages && data.messages.length > 0) {
          data.messages.forEach(msg => {
            addBubble(msg.message, msg.sender === "user" ? "sent" : "received");
          });
        } else {
          if (!welcomeShown) {
            addBubble("👋 Hi! Welcome to BravoDent. How can we help you today?", "received");
            welcomeShown = true;
          }
        }
        return;
      }

      if (data.type === "chat_to_user") {
        addBubble(data.message, "received");
      }
    };

    socket.onclose = function () {
      connectionStatus.textContent = "Reconnecting...";
      setTimeout(connectWebSocket, 3000);
    };

    socket.onerror = function () {
      connectionStatus.textContent = "Connection error";
      socket.close();
    };
  }

  connectWebSocket();

});
</script>