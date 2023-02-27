<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="dist/output.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <title>Danuarta Profile Website | Welcome!</title>
  </head>
  <body>
    <header class="absolute top-0 left-0 w-full flex items-center z-10">
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-4">
            <a href="#profile" class="font-bold text-lg text-tr block py-6">Danuarta Dwi</a>
          </div>
          <div class="flex items-center px-4">
            <button id="hamb" name="hamb" type="button" class="block absolute right-4 lg:hidden">
              <span class="hamb-line transition duration-300 ease-in-out origin-top-left"></span>
              <span class="hamb-line transition duration-300 ease-in-out"></span>
              <span class="hamb-line transition duration-300 ease-in-out origin-top-left"></span>
            </button>
            <nav id="nav-menu" class="hidden absolute py-5 bg-sc shadow-lg rounded-md max-w-[250px] w-full top-full right-2 lg:block lg:bg-transparent lg:static lg:max-w-full lg:shadow-none lg:rounded-none">
              <ul class="block lg:flex">
                <li class="group">
                  <a href="#profile" class="text-base text-tx py-2 mx-8 flex group-hover:text-tr transition duration-200 ease-in-out">Profile</a>
                </li>
                <li class="group">
                  <a href="#about" class="text-base text-tx py-2 mx-8 flex group-hover:text-tr transition duration-200 ease-in-out">About</a>
                </li>
                <li class="group">
                  <a href="#projects" class="text-base text-tx py-2 mx-8 flex group-hover:text-tr transition duration-200 ease-in-out">Projects</a>
                </li>
                <li class="group">
                  <a href="#contact" class="text-base text-tx py-2 mx-8 flex group-hover:text-tr transition duration-200 ease-in-out">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <section id="profile" class="pt-36">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 lg:w-1/2">
            <h1 class="text-base font-thin text-tr md:text-xl mb-2">Hello!, I'm <span class="block font-extrabold text-4xl lg:text-5xl"> Danuarta Dwi </span></h1>
            <h2 class="font-medium text-tx mb-5 lg:text-2xl">Programmer & Gamer</h2>
            <p class="font-medium text-tx2 mb-10 leading-relaxed">
              An undergraduate student who has strong interest to frontend especially UI/UX Design
            </p>
            <a href="mailto:danuarta70@gmail.com" class="text-base font-semibold text-tx bg-tr py-3 px-6 rounded-md hover:shadow-inner hover:opacity-80 transition duration-300 ease-in-out">Email Me</a>
          </div>
          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative mt-10 lg-mt-9 lg:right-0">
              <img src="dist/img/danu.png" alt="Danuarta Dwi" class="max-w-full mx-auto" />
              <span class="absolute bottom-20 -z-10 left-1/2 -translate-x-1/2 md:scale-100 lg:scale-[1.6]">
                <svg id="visual" viewBox="0 0 250 300" width="250" height="270" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                  <defs>
                    <filter id="blur1" x="-10%" y="-10%" width="120%" height="120%">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                      <feGaussianBlur stdDeviation="167" result="effect1_foregroundBlur"></feGaussianBlur>
                    </filter>
                  </defs>
                  <rect width="675" height="900" fill="#430011"></rect>
                  <g filter="url(#blur1)">
                    <circle cx="47" cy="171" fill="#DA0037" r="371"></circle>
                    <circle cx="15" cy="393" fill="#430011" r="371"></circle>
                    <circle cx="607" cy="214" fill="#DA0037" r="371"></circle>
                    <circle cx="353" cy="331" fill="#DA0037" r="371"></circle>
                    <circle cx="221" cy="38" fill="#430011" r="371"></circle>
                    <circle cx="596" cy="525" fill="#DA0037" r="371"></circle>
                  </g>
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="about" class="pt-36 pb-32">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 mb-10 lg:w-1/2">
            <h4 class="font-bold uppercase text-tr text-lg mb-3">About Me</h4>
            <h2 class="font-bold text-tx text-2xl mb-5 max-w-xl lg:text-3xl">A learner who has high motivation to learn something new</h2>
            <p class="font-medium text-base text-tx2 max-w-xl lg:text-lg">Excellent analytical and problem-solving skills and a strong ability to work with a team</p>
          </div>
          <div class="w-full px-4 lg:w-1/2">
            <h3 class="font-semibold text-tx text-xl mb-4 lg:text-3xl lg:pt-10">Connect with ME</h3>
            <p class="font-medium text-base text-tx2 mb-6 lg:text-lg">You guys can contact me from all my social media. We can play any games together</p>
            <div class="flex items-center">
              <a href="https://www.instagram.com/danuarta.dys" target="_blank" class="w-9 h-9 mr-3 rounded-md flex justify-center border p-1 border-sc hover:border-tx hover:bg-tx text-tx2 hover:text-tr">
                <svg role="img" widht="4" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Instagram</title>
                  <path
                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                  />
                </svg>
              </a>
              <a href="https://wa.me/+6282111949815" target="_blank" class="w-9 h-9 mr-3 rounded-md flex justify-center border p-1 border-sc hover:border-tx hover:bg-tx text-tx2 hover:text-tr">
                <svg role="img" widht="4" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>WhatsApp</title>
                  <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"
                  />
                </svg>
              </a>
              <a href="https://github.com/Vaiyolent" target="_blank" class="w-9 h-9 mr-3 rounded-md flex justify-center border p-1 border-sc hover:border-tx hover:bg-tx text-tx2 hover:text-tr">
                <svg role="img" widht="4" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>GitHub</title>
                  <path
                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                  />
                </svg>
              </a>
              <a href="https://www.linkedin.com/in/danuartadys" target="_blank" class="w-9 h-9 mr-3 rounded-md flex justify-center border p-1 border-sc hover:border-tx hover:bg-tx text-tx2 hover:text-tr">
                <svg role="img" widht="4" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>LinkedIn</title>
                  <path
                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                  />
                </svg>
              </a>
              <a href="https://open.spotify.com/user/31uviptsnqru3g7wgz6yr23i3kym" target="_blank" class="w-9 h-9 mr-3 rounded-md flex justify-center border p-1 border-sc hover:border-tx hover:bg-tx text-tx2 hover:text-tr">
                <svg role="img" widht="4" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Spotify</title>
                  <path
                    d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="projects" class="pt-36 pb-32 bg-bg2">
      <div class="container">
        <div class="w-full px-4">
          <div class="nax-w-xl mx-auto text-center mb-16">
            <h4 class="font-bold uppercase text-tr text-lg mb-3">Portofolio</h4>
            <h2 class="font-bold text-tx text-2xl mb-5 lg:text-3xl">My Projects</h2>
          </div>
        </div>
        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md-overflow-hidden">
              <img src="dist/img/projects/1.jpg" alt="Redesain Samsat Ceria" width="w-full" />
            </div>
            <h3 class="font-semibold text-xl text-tx mt-5 mb-3">Redesign Samsat Ceria</h3>
            <p class="font-medium text-base text-tx2">Application for a Pay Code application to pay Motor Vehicle Tax in the Banten Province Region, this payment code is used as a BNI Virtual Account</p>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md-overflow-hidden">
              <img src="dist/img/projects/2.jpg" alt="Landing Page Ronaldo" width="w-full" />
            </div>
            <h3 class="font-semibold text-xl text-tx mt-5 mb-3">Ronaldo Landing Page</h3>
            <p class="font-medium text-base text-tx2">This is one of my task and basically this is made with bootstrap</p>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md-overflow-hidden">
              <img src="dist/img/projects/3.jpg" alt="Aplikasi Calculator Android" width="w-full" />
            </div>
            <h3 class="font-semibold text-xl text-tx mt-5 mb-3">Calculator Android Application</h3>
            <p class="font-medium text-base text-tx2">This is another my task that use Android Studio to made it. I used reference ios calculator while design it</p>
          </div>
        </div>
      </div>
    </section>
    <footer id="contact" class="bg-bg pt-24 pb-6">
      <div class="container">
        <div class="w-full px-4 mb-12">
          <h3 class="font-semibold text-tx text-xl mb-2">Get in touch</h3>
          <p class="font-medium text-base text-tx2 mb-7">For business inquiry please send email to <a href="mailto:danuarta70@gmail.com" class="hover:text-tr transition duration-300 ease-in-out">danuarta70@gmail.com</a></p>
          <div class="flex">
            <a href="https://www.instagram.com/danuarta.dys" target="_blank" class="w-9 h-9 mr-3 rounded-md flex justify-center border p-1 border-sc hover:border-tx hover:bg-tx text-tx2 hover:text-tr">
              <svg role="img" widht="4" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Instagram</title>
                <path
                  d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                />
              </svg>
            </a>
            <a href="https://wa.me/+6282111949815" target="_blank" class="w-9 h-9 mr-3 rounded-md flex justify-center border p-1 border-sc hover:border-tx hover:bg-tx text-tx2 hover:text-tr">
              <svg role="img" widht="4" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>WhatsApp</title>
                <path
                  d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"
                />
              </svg>
            </a>
            <a href="https://github.com/Vaiyolent" target="_blank" class="w-9 h-9 mr-3 rounded-md flex justify-center border p-1 border-sc hover:border-tx hover:bg-tx text-tx2 hover:text-tr">
              <svg role="img" widht="4" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>GitHub</title>
                <path
                  d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                />
              </svg>
            </a>
            <a href="https://www.linkedin.com/in/danuartadys" target="_blank" class="w-9 h-9 mr-3 rounded-md flex justify-center border p-1 border-sc hover:border-tx hover:bg-tx text-tx2 hover:text-tr">
              <svg role="img" widht="4" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>LinkedIn</title>
                <path
                  d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                />
              </svg>
            </a>
            <a href="https://open.spotify.com/user/31uviptsnqru3g7wgz6yr23i3kym" target="_blank" class="w-9 h-9 mr-3 rounded-md flex justify-center border p-1 border-sc hover:border-tx hover:bg-tx text-tx2 hover:text-tr">
              <svg role="img" widht="4" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Spotify</title>
                <path
                  d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"
                />
              </svg>
            </a>
          </div>
        </div>
        <div class="w-full pt-10 border-t border-sc2">
          <p class="font-medium text-xs text-tx2 text-center">This website made by <a href="https://www.instagram.com/danuarta.dys" class="hover:text-tr transition duration-300 ease-in-out">me</a></p>
        </div>
      </div>
    </footer>
    <script src="dist/js/script.js"></script>
  </body>
</html>
