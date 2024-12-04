<?php if ($_SESSION['user'] ?? false) : ?>
    <div x-data="{chatOpen:false}" id="chat-container">
        <div class="fixed bottom-4 right-4">
            <button @click="chatOpen=!chatOpen" x-ref="chatButton" id="chat-button" class="bg-neutral-800 hover:bg-black text-white rounded-full p-4 shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                </svg>
            </button>
        </div>
        <?php require base_path("Http/views/messages/chatbox.php") ?>
    </div>
<?php endif; ?>