module.exports = {
  fn: (heading, subheading, section) => {
    return `
      <div class="grid grid-cols-4 items-center text-left border-b hover:opacity-50 py-2 mb-4 cursor-pointer transition duration-300 ease-in-out"
         style="border-color: var(--color__${section})"
         x-ref="${section}_link"
         role="button" tabindex="0"
         @click="openSection('${section}')"
         @keydown.space="openSection('${section}')"
         @keydown.enter="openSection('${section}')"
         @mouseenter.once="fetch('${section}')">

        <div class="row-span-2 relative text-center pl-2">
          ${icon.bg()}
          ${icon.fg(section)}
          ${icon.letter(heading)}
        </div>

        <h3 class="col-span-3 pl-4 font-bold">${heading}</h3>
        <span class="col-span-3 pl-4 text-sm text-gray-500">${subheading}</span>

      </div>
    `
  },
}

const icon = {
  bg: () => `
    <span class="absolute inset-0">
      <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: 120%; fill: #d6deeb;">
        <path d="M49.5,-70.7C62.5,-58.7,70.3,-42,76.1,-24.6C81.9,-7.2,85.8,11,80.7,26.1C75.6,41.2,61.5,53.3,46.6,61.5C31.6,69.7,15.8,74.1,0.4,73.5C-15,73,-30.1,67.6,-43.9,59C-57.8,50.4,-70.4,38.7,-76.1,24.1C-81.7,9.5,-80.3,-8.1,-73.9,-22.9C-67.6,-37.7,-56.3,-49.9,-43.2,-61.8C-30,-73.8,-15,-85.5,1.6,-87.8C18.3,-90,36.5,-82.7,49.5,-70.7Z" transform="translate(100 100)" />
      </svg>
    </span>
  `,
  fg: (section) => `
    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="relative w-12 h-12 mx-auto mt-2" style="left: -4px;">
      <path fill="var(--color__${section})" d="M62.3,-51.9C75.2,-33.5,76.4,-7.9,70.1,14.6C63.9,37.1,50.2,56.5,32.4,63.8C14.5,71.1,-7.6,66.3,-28.4,57C-49.2,47.7,-68.8,33.9,-74,15.6C-79.2,-2.7,-70,-25.6,-55.2,-44.3C-40.5,-63.1,-20.2,-77.8,2.2,-79.6C24.7,-81.4,49.4,-70.2,62.3,-51.9Z" transform="translate(100 100)" />
    </svg>
  `,
  letter: (heading) => `
    <span class="absolute inset-0 text-3xl font-bold text-center text-white leading-loose">${heading.substr(0, 1)}</span>
  `,
}
