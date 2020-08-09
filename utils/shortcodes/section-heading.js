module.exports = {
  fn: (heading, section) => {
    return `<h2 class="mb-4 text-xl text-white bg-${section} font-bold uppercase transform -rotate-1 py-1 -skew-x-12 scale-90"
      style="text-shadow: 0 2px #1a202c;">${heading}</h2>`
  },
}
