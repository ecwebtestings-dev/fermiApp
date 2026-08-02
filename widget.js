const container = document.getElementById("ai-widget-container");

container.innerHTML = `
<button id="ai-widget-button" title="Ask fermi Ai"><img src="Images/ai-assistant.png" alt="AI" width=40,height=40,></button>
<div id="ai-widget-panel">
    
    <div id="ai-widget-messages"></div>
    <div id="ai-widget-input-area">
        <input type="text" id="ai-widget-input" placeholder="Ask about FERMI services..." />
        <button id="ai-widget-send"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
    </div>
</div>
`;

const button = document.getElementById("ai-widget-button");
const panel = document.getElementById("ai-widget-panel");
const messagesContainer = document.getElementById("ai-widget-messages");
const input = document.getElementById("ai-widget-input");
const send = document.getElementById("ai-widget-send");

let isOpen = false;

button.addEventListener("click", () => {
    if (!isOpen) {
        panel.style.display = "flex";
        isOpen = true;
        setTimeout(() => input.focus(), 300);
        // Show welcome message if no messages
        if (!messagesContainer.children.length) {
            setTimeout(() => {
                addMessage("assistant", "👋 Hello! I'm the FERMI AI Assistant. How can I help you with our security, electrical, or IT services today?");
            }, 500);
        }
    } else {
        panel.style.display = "none";
        isOpen = false;
    }
});

// Close on escape key
document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && isOpen) {
        panel.style.display = "none";
        isOpen = false;
    }
});

function addMessage(role, text, escalation = false) {
    const msg = document.createElement("div");
    msg.classList.add("message", role);
    
    if (role === "assistant" && text === "Typing…") {
        msg.innerHTML = `<div class="typing-indicator"><span></span><span></span><span></span></div>`;
        // Add a data attribute to identify typing indicator
        msg.setAttribute('data-typing', 'true');
    } else {
        msg.innerHTML = text.replace(/\n/g, "<br>");
    }

    if (escalation) {
        msg.innerHTML += `
        <div class="contact">
            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px; padding: 5px">
                <i class="fas fa-phone-alt" style="color: #ff6600; font-size: 0.8rem;"></i>
                <span style="font-size: 0.8rem;">+256 754 130 885</span>
            </div>
            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;  padding: 5px">
                <i class="fas fa-envelope" style="color: #ff6600; font-size: 0.8rem;"></i>
                <span style="font-size: 0.8rem;">fermielectritech@gmail.com</span>
            </div>
            <div style="display: flex; align-items: center; gap: 8px;">
                <i class="fab fa-whatsapp" style="color: #25D366; font-size: 0.8rem;  padding: 5px"></i>
                <a href="https://wa.me/256701705888" target="_blank" style="color: #ff6600; font-size: 0.8rem;">Chat on WhatsApp</a>
            </div>
        </div>`;
    }

    messagesContainer.appendChild(msg);
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
}

async function sendMessage() {
    const text = input.value.trim();
    if (!text) return;

    addMessage("user", text);
    input.value = "";
    addMessage("assistant", "Typing…");

    try {
        const res = await fetch("fermi_ai.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ prompt: text })
        });
        const data = await res.json();
        
        // Find and remove the typing indicator message (using data attribute)
        const typingMessage = messagesContainer.querySelector('.message.assistant[data-typing="true"]');
        if (typingMessage) {
            typingMessage.remove();
        }
        
        addMessage("assistant", data.reply, data.escalation);
    } catch {
        // Find and remove the typing indicator message (using data attribute)
        const typingMessage = messagesContainer.querySelector('.message.assistant[data-typing="true"]');
        if (typingMessage) {
            typingMessage.remove();
        }
        addMessage("assistant", "Sorry, I'm having trouble connecting. Please try again.");
    }
}

send.addEventListener("click", sendMessage);
input.addEventListener("keypress", e => {
    if (e.key === "Enter") sendMessage();
});