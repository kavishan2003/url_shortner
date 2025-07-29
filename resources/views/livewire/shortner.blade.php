<div>
    <div class="w-full max-w-2xl mx-auto p-4 ">
        <div class="text-center mb-8">

            <h1 class="mb-2 md:text-4xl font-bold tracking-tighter text-6xl text-gray-900"><i
                    class="fa-solid fa-link fa-rotate-by" style="color: #3860ff; --fa-rotate-angle: 180deg;"></i> URL
                Shortening Built
                for
                Developers</h1>

            <p class="text-lg  text-gray-500">Boost your campaigns with smarter short links.</p>
        </div>
        <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg">
            <form id="shortener-form">
                {{-- @csrf --}}
                <div>
                    <label for="url-to-shorten" class="block text-sm font-medium text-gray-700 mb-1">URL to
                        shorten</label>
                    <input type="url" name="url" id="url-to-shorten" value=""
                        class="mt-1 block w-full px-4 py-3 bg-white border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <label for="error" id="url-error"
                        class="hidden block text-sm font-medium text-red-600 mb-1">Please enter a valid URL</label>
                    @error('url')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700">UTM Parameters (optional)</label>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-2">
                        <input type="text" id="utm_source" placeholder="utm_source"
                            class="block w-full px-4 py-3 bg-white border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <input type="text" id="utm_medium" placeholder="utm_medium"
                            class="block w-full px-4 py-3 bg-white border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <input type="text" id="utm_campaign" placeholder="utm_campaign"
                            class="block w-full px-4 py-3 bg-white border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>

                <div
                    class="mt-8 flex flex-col sm:flex-row items-center sm:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                    <button type="submit" id="shorten-btn"
                        class="w-full sm:w-auto flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                        </svg>
                        Shorten URL
                    </button>
                    <button type="button" id="clear-btn"
                        class="w-full sm:w-auto flex items-center justify-center px-6 py-3 border border-gray-300 text-base font-medium rounded-md shadow-sm text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Clear
                    </button>
                </div>
            </form>

            <div id="result-section" class="hidden mt-8 bg-green-50 p-4 sm:p-6 rounded-lg border border-green-200">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-green-600 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                    </svg>
                    <p class="text-lg font-semibold text-green-800">Here's your short link!</p>
                </div>
                <div class="mt-4 bg-white p-4 rounded-md border border-gray-200">
                    <label class="block text-sm font-medium text-gray-500">Copy the link</label>
                    <div class="flex items-center justify-between mt-1">
                        <a href="https://" target="_blank" id="short-link"
                            class="text-indigo-600 font-semibold truncate hover:underline"></a>
                        <div class="flex items-center space-x-2 ml-2">
                            <button id="copy-btn" title="Copy to clipboard"
                                class="p-2 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m9.375 0-9.375 0" />
                                </svg>
                            </button>
                            <a href="https://" target="_blank" title="Open in new tab" id="newTab"
                                class="p-2 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-4.5 0V6.75A.75.75 0 0 1 14.25 6h1.5a.75.75 0 0 1 .75.75v1.5m-4.5 0h4.5m-4.5 0a.75.75 0 0 1-.75-.75V6.75a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 .75.75v1.5m-1.5 0h-1.5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <span id="copy-feedback" class="text-sm text-green-600 mt-2 hidden">Copied!</span>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const shortenerForm = document.getElementById('shortener-form');
        const clearBtn = document.getElementById('clear-btn');
        const resultSection = document.getElementById('result-section');
        const copyBtn = document.getElementById('copy-btn');
        const shortLink = document.getElementById('short-link');
        const copyFeedback = document.getElementById('copy-feedback');
        const url = document.getElementById('url-to-shorten');
        const newTab = document.getElementById('newTab');
        const urlError = document.getElementById('url-error');



        clearBtn.addEventListener('click', function() {
            shortenerForm.reset();
            resultSection.classList.add('hidden');
            copyFeedback.classList.add('hidden');
        });

        copyBtn.addEventListener('click', function() {
            navigator.clipboard.writeText(shortLink.href).then(function() {
                copyFeedback.classList.remove('hidden');
                setTimeout(() => {
                    copyFeedback.classList.add('hidden');
                }, 2000);
            }, function(err) {
                console.error('Could not copy text: ', err);
            });
        });
        document.getElementById("shorten-btn").addEventListener("click", function(event) {
            event.preventDefault();
            // alert('hit');
            const urlValue = url.value;
            // console.log(urlValue);

            if (urlValue == '') {
                urlError.textContent = "URL cannot be empty.";
                urlError.classList.remove('hidden');
                return;
            }

            if (!isValidURL(urlValue)) {
                urlError.textContent = "Please enter a valid URL.";
                urlError.classList.remove('hidden');
                e.preventDefault();
                return;
            }
            console.log(urlValue);

            console.log('called')

            fetch(`http://127.0.0.1:8000/url-shortner?url=${urlValue}`).then(response => response
                    .json())
                .then(data => {
                    console.log(data)
                    const shortUrl = data.short;
                    shortLink.href = shortUrl;
                    newTab.href = shortUrl;
                    shortLink.textContent = shortUrl;
                    resultSection.classList.remove('hidden');
                })
        });

        function isValidURL(string) {
            try {
                new URL(string);
                return true;
            } catch (_) {
                return false;
            }
        }

    });
</script>
