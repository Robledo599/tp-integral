// Función para agregar un mensaje al chat
function addMessage(message) {
    const chatMessages = document.getElementById('chat-messages');
    const messageDiv = document.createElement('div');
    messageDiv.textContent = message;
    chatMessages.appendChild(messageDiv);
  }
  
  // Manejar el envío del formulario
  const chatForm = document.getElementById('chat-form');
  chatForm.addEventListener('submit', function (e) {
    e.preventDefault();
    const messageInput = document.getElementById('message-input');
    const message = messageInput.value.trim();
  
    if (message !== '') {
      addMessage(message);
      messageInput.value = '';
    }
  });
  
  // Ejemplo: Agregar un mensaje inicial al cargar la página
  addMessage('¡Bienvenido al chat de la comunidad!');
  