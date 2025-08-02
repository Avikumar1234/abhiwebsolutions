<!-- Floating Chatbot Button + Chat Box -->
<style>
    #chatbot-box {
        transition: all 0.3s ease;
        width: 350px;
        height: 500px;
        display: none;
        bottom: 90px;
        right: 30px;
        position: fixed;
        z-index: 9999;
    }

    #chatbot-icon {
        bottom: 30px;
        right: 30px;
        background-color: #4f46e5;
        color: white;
        width: 60px;
        height: 60px;
        border-radius: 9999px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        z-index: 10000;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        cursor: pointer;
    }
</style>

<!-- 🔵 Floating Assistant Icon -->
<div id="chatbot-icon"
     class="fixed bottom-6 right-6 bg-gradient-to-br from-indigo-500 to-purple-600 text-white p-3 rounded-full shadow-lg cursor-pointer z-50 hover:scale-110 transition">
    🤖
</div>

<!-- 🔵 Chatbot Box -->
<div id="chatbot-box"
     class="fixed bottom-20 right-6 w-72 bg-white border border-gray-300 rounded-xl shadow-xl hidden flex flex-col z-50">
    
    <!-- Header -->
    <div class="bg-indigo-600 text-white font-semibold text-sm px-4 py-2 rounded-t-xl flex justify-between items-center">
        <span>💬 Ask Abhiwebsolutions</span>
        <button onclick="document.getElementById('chatbot-box').classList.add('hidden')">✖️</button>
    </div>

    <!-- Messages -->
    <div id="chat-messages" class="flex-1 overflow-y-auto p-3 text-sm h-60 space-y-2 bg-gray-50">
        <div class="text-left text-gray-700">🤖: Hi! I'm here to help you about our services. Ask me anything!</div>
    </div>

    <!-- Input -->
    <form id="chat-form" class="flex items-center border-t border-gray-300 bg-white p-2">
        <input type="text" id="chat-input" placeholder="Type a message..."
               class="flex-1 px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none" />
        <button type="submit"
                class="ml-2 px-3 py-1 bg-indigo-600 text-white rounded hover:bg-indigo-700 text-sm">Send</button>
    </form>
</div>
<script>
    const icon = document.getElementById('chatbot-icon');
    const box = document.getElementById('chatbot-box');
    const form = document.getElementById('chat-form');
    const input = document.getElementById('chat-input');
    const messages = document.getElementById('chat-messages');

    let clearTimer;

    // Open chatbot on icon click
    icon.addEventListener('click', () => {
        box.classList.remove('hidden');
        resetClearTimer();
    });

    // Clear chat after 5 minutes
    const resetClearTimer = () => {
        clearTimeout(clearTimer);
        clearTimer = setTimeout(() => {
            messages.innerHTML = `<div class="text-left text-gray-700">🤖: Hi! I'm here to help you about our services. Ask me anything!</div>`;
        }, 300000); // 5 min = 300000 ms
    };

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const msg = input.value.trim();
        if (!msg) return;

        messages.innerHTML += `<div class="text-right text-blue-700">You: ${msg}</div>`;
        input.value = '';
        messages.scrollTop = messages.scrollHeight;

        let reply = "🤖: Sorry, I didn't understand that.";

        // Simple rule-based chatbot
        if (msg.toLowerCase().includes('service')) {
            reply = "🤖: We offer services like Logo Design, Website Design, Social Media Posters, and Reminder Cards.";
        } else if (msg.toLowerCase().includes('email')) {
            reply = "🤖: You can reach us at 📧 abhiwebsln@outlook.com";
        } else if (msg.toLowerCase().includes('phone') || msg.toLowerCase().includes('contact')) {
            reply = "🤖: You can call us at 📞 7379210635";
        } else if (msg.toLowerCase().includes('hello') || msg.toLowerCase().includes('hi')) {
            reply = "🤖: Hello! How can I help you today?";
        } else if (msg.toLowerCase().includes('bye')) {
            reply = "🤖: Goodbye! Feel free to ask anytime.";
        }

        setTimeout(() => {
            messages.innerHTML += `<div class="text-left text-gray-700">${reply}</div>`;
            messages.scrollTop = messages.scrollHeight;
        }, 400);

        resetClearTimer();
    });
</script>
