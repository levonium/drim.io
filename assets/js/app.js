document.addEventListener('DOMContentLoaded', function () {
  const contactsWrapper = document.querySelector('.contacts')

  document.querySelectorAll('[href="#contact"]').forEach((link) => {
    link.addEventListener('click', (e) => {
      e.preventDefault()
      const name = 'levon'
      const domain = 'drim.io'
      const username = 'levondev'
      contactsWrapper.innerHTML = `
        <section id="contacts" aria-label="Get in touch"  class="h-screen bg-linear-135 sm:bg-linear-105 from-[#fff1be] from-28% via-[#ee87cb] via-70% to-[#b060ff] backdrop-blur-sm rounded-lg">
          <div class="w-full h-full flex items-center justify-center">
              <div class="text-center">
                  <span class="block px-6 text-lg sm:text-2xl">
                      Email is probably the best way to reach me.
                  </span>
                  <span class="text-[12vw] font-bold text-slate-800">
                      ${name}@${domain}
                  </span>
                  <span class="block mt-16 text-lg sm:text-xl">
                    Or you can start a chat on Telegram
                  </span>
                  <a href="https://t.me/${username}" target="_blank"
                    class="inline-block mt-8 text-lg sm:text-3xl font-bold text-brand-600 hover:text-brand-500">
                    <span class="sr-only">Telegram Chat Link</span>
                    <svg class="block size-12 mx-auto" viewBox="0 0 240 240" aria-hidden="true">
                      <circle cx="120" cy="120" r="120" fill="currentColor"></circle>
                      <path fill="#fff" d="M81.229,128.772l14.237,39.406s1.78,3.687,3.686,3.687,30.255-29.492,30.255-29.492l31.525-60.89L81.737,118.6Z"></path>
                      <path fill="#fff" d="M100.106,138.878l-2.733,29.046s-1.144,8.9,7.754,0,17.415-15.763,17.415-15.763"></path>
                      <path fill="#fff" d="M81.486,130.178,52.2,120.636s-3.5-1.42-2.373-4.64c.232-.664.7-1.229,2.1-2.2,6.489-4.523,120.106-45.36,120.106-45.36s3.208-1.081,5.1-.362a2.766,2.766,0,0,1,1.885,2.055,9.357,9.357,0,0,1,.254,2.585c-.009.752-.1,1.449-.169,2.542-.692,11.165-21.4,94.493-21.4,94.493s-1.239,4.876-5.678,5.043A8.13,8.13,0,0,1,146.1,172.5c-8.711-7.493-38.819-27.727-45.472-32.177a1.27,1.27,0,0,1-.546-.9c-.093-.469.417-1.05.417-1.05s52.426-46.6,53.821-51.492c.108-.379-.3-.566-.848-.4-3.482,1.281-63.844,39.4-70.506,43.607A3.21,3.21,0,0,1,81.486,130.178Z"></path>
                    </svg>
                  </a>
              </div>
          </div>
      </section>`
      contactsWrapper.scrollIntoView({ behavior: 'smooth' })
    })
  })

  // if the contactsWrapper is out of the viewport, empty its content
  const observer = new IntersectionObserver(
    (entries) => {
      if (!entries[0].isIntersecting) {
        contactsWrapper.innerHTML = ''
      }
    },
    { threshold: [0] }
  )
  observer.observe(contactsWrapper)

  window.addEventListener('scroll', () => {
    const winScroll =
      document.body.scrollTop || document.documentElement.scrollTop
    const height =
      document.documentElement.scrollHeight -
      document.documentElement.clientHeight
    const scrolled = (winScroll / height) * 100
    document.getElementById('progress-bar').style.width = scrolled + '%'
  })
})
