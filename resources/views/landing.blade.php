<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <script src="https://kit.fontawesome.com/110c64d119.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="flex">
        <div class="w-[50vw]  p-4 bg-white border  shadow-md sm:p-6 dark:bg-gray-800 dark:border-gray-700 h-screen">
            <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white mt-[20vh]">
                Just another little step
            </h5>
            <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Login to this platform as Admin or Adopter
            </p>
            <ul class="my-4 space-y-3">

                <li class="mt-[8vh]">
                    <a href="{{ url('/login') }}"
                        class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                        <i class="fa-solid fa-clipboard-user mr-[10px] fa-lg"></i>
                        <p>Admin</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/register') }}"
                        class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                        <i class="fa-solid fa-house-chimney-user mr-[10px] fa-md"></i>
                        <p>Adopter</p>
                    </a>
                </li>

            </ul>
            <div class="mt-[5vh]">
                <a href="https://www.peta.org/"
                    class="inline-flex items-center text-xs font-normal text-gray-500 hover:underline dark:text-gray-400">
                    <svg class="w-3 h-3 mr-2" aria-hidden="true" focusable="false" data-prefix="far"
                        data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z">
                        </path>
                    </svg>
                    This platform is licensed by PETA</a>
            </div>
        </div>
        <div class="bg-slate-700 h-screen w-[50vw]">
            <div class="ml-[30px]">
                <div class="flex justify-start">
                    <div class="flex mt-[20vh] items-center">
                        <i class="fa-solid fa-paw fa-xl" style="color: white;"></i>
                        <p class=" text-2xl text-white">Doppie</p>
                    </div>
                </div>
                <p class="font-semibold lg:text-5xl text-white mt-[10px] mb-[10px] text-base">Make your home even <span
                        style="color: yellow;">warmer</span> with another cute family <span
                        style="color:yellow;">member.</span></p>
                <p class="lg:text-xl text-base text-slate-300">There are so many untreated animals out there, we appreciate all good
                    things you do for these unlucky animals. Join the Dope family and adopt a friend!</p>
                    <div class="flex">
                <div class="flex -space-x-4 w-[25%] mt-[20px] border-slate-700 border-r-slate-400 border-2 p-2">
                    <img class="lg:w-10 lg:h-10 w-5 h-5 rounded-full border-2 border-white "
                        src="data:image/jpeg;base64,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" alt="">
                    <img class="lg:w-10 lg:h-10 w-5 h-5 rounded-full border-2 border-white "
                        src="data:image/jpeg;base64,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" alt="">
                    <img class="lg:w-10 lg:h-10 w-5 h-5 rounded-full border-2 border-white "
                        src="data:image/jpeg;base64,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" alt="">
                    </div>
                    <div class="mt-[35px] ml-[10px]">
                        <p class="text-slate-400">Over <span class="text-white underline">10k adoptions</span> per month</p>
                    </div>
                    </div>
            </div>
        </div>

        <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
</body>


</html>