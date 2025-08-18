<!-- Popup Success Model -->
<div id="modelConfirm" class="fixed hidden inset-0 z-50 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4 flex items-center justify-center" 
     style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"
     aria-hidden="true" 
     role="dialog" 
     aria-modal="true" 
     aria-labelledby="successModalTitle"
     itemscope itemtype="https://schema.org/Message">
    
    <div class="relative max-w-md w-full bg-white rounded-lg shadow-xl p-8">
        <div class="absolute top-2 right-2">
            <button onclick="closeModal('modelConfirm')" type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-full p-2"
                aria-label="Close success notification">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <div class="text-center">
            <div class="mb-2 flex justify-center items-center">
                <img class="md:w-20 md:h-20 w-12 h-12 rounded-full border-4 border-indigo-600 shadow-lg" 
                     src="public/images/logo.png" 
                     alt="BravoDent Logo" 
                     width="80" 
                     height="80" 
                     loading="lazy"
                     itemprop="image">
            </div>
            <h3 id="successModalTitle" class="text-xl font-semibold text-gray-800 mb-4" itemprop="name">Success! ✅</h3>
            <p class="text-lg text-gray-600 mb-6" itemprop="text">
                Your request has been successfully submitted! <br> 
                We will get back to you shortly. <br> 
                Thank you for reaching out to Bravodent! 😊
            </p>
            <button onclick="closeModal('modelConfirm')" type="button"
                class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-full transition duration-200 ease-in-out"
                aria-label="Close success message"
                itemprop="potentialAction">
                Close
            </button>
        </div>
    </div>
</div>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Message",
  "name": "Success Notification",
  "description": "Your request has been successfully submitted! We will get back to you shortly. Thank you for reaching out to Bravodent!",
  "image": "public/images/logo.png",
  "url": "https://www.yourwebsite.com"
}
</script>