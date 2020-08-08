module.exports = {
  fn: (heading) => {
    console.log(heading)
    return `
      <section class="flex items-center justify-between">

        <div class="flex items-center justify-center rounded-full bg-blue-100 w-8 h-8 leading-none shadow-sm cursor-pointer text-gray-600 hover:text-gray-700">
          <button @click="closeWhateverIsOpen()" class="focus:button-outline">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current">
              <path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/>
            </svg>
          </button>
        </div>

        <h2 class="font-bold">${heading}</h2>

        <div class="flex items-center justify-center rounded-full bg-blue-100 w-8 h-8 leading-none shadow-sm cursor-pointer text-gray-600 hover:text-gray-700">
          <button @click="toggleSettings()" class="focus:button-outline">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-6 h-6 fill-current">
              <path d="M3.94 6.5L2.22 3.64l1.42-1.42L6.5 3.94c.52-.3 1.1-.54 1.7-.7L9 0h2l.8 3.24c.6.16 1.18.4 1.7.7l2.86-1.72 1.42 1.42-1.72 2.86c.3.52.54 1.1.7 1.7L20 9v2l-3.24.8c-.16.6-.4 1.18-.7 1.7l1.72 2.86-1.42 1.42-2.86-1.72c-.52.3-1.1.54-1.7.7L11 20H9l-.8-3.24c-.6-.16-1.18-.4-1.7-.7l-2.86 1.72-1.42-1.42 1.72-2.86c-.3-.52-.54-1.1-.7-1.7L0 11V9l3.24-.8c.16-.6.4-1.18.7-1.7zM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
          </button>
        </div>
      </section>
    `
  }
}
