document.querySelector('.ball').addEventListener('click', (e) => {
    e.target.classList.toggle('ball-move')
    document.body.classList.toggle('dark')
  })

    document.querySelector('#mode').addEventListener('click', (e) => {
      e.target.classList.toggle('ball-move')
      document.querySelector("footer").classList.toggle('modo-footer')
    })

    document.querySelector('#mode').addEventListener('click', (e) => {
      e.target.classList.toggle('ball-move')
      document.querySelector(".bg-degrade").classList.toggle('modo-bg-degrade')
    })

    document.querySelector('#mode').addEventListener('click', (e) => {
      e.target.classList.toggle('ball-move')
      document.querySelector(".incentivo").classList.toggle('modo')
    })
