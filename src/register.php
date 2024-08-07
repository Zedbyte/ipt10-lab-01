<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blaze Register 🔥</title>
    <meta name="description" content="PHP Registration Form"/>
    <link rel="shortcut icon" href="../asset/Great-Dane.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="../public/styles.css">

    <!-- Tailwind -->
    <link rel="stylesheet" href="../public/tailwind.css">
    <link rel="stylesheet" href="../public/output.css">

    <!-- Montserrat -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>
<body class="h-24 bg-gradient-to-r from-slate-900 via-gray-900 to-slate-900 min-h-screen font-[Montserrat] ">
    <!-- Parent Container -->
    <div class="grid grid-cols-12 h-screen md:py-3">
        <!-- Registration Form -->
        <div class="flex flex-col justify-center items-center bg-white md:rounded-e-[1.8rem;] shadow-xl col-span-12 md:col-span-6 py-20 md:py-0">
            <div class="md:block relative mb-0 sm:mb-10 md:mb-0">
                <img class="w-31 h-32" src="https://lh5.googleusercontent.com/proxy/BJBc_TLsXY7nN3IJlMRBjgS6I_ZLgGxfQS-pHFscev-KrWvBUe5OYM6wNs_yLtgd6RhbI9zx4h2KaSVhsrVoAXlf9AQoF3u6guoIyV8hrg" alt="">
            </div>
            <div class="flex flex-col justify-center items-center rounded-2xl space-y-10 w-8/12 h-5/6">
                <h1 class="text-lg md:text-4xl font-semibold">Create an account</h1>
                <form action="summary.php" method="POST" class="space-y-5 inline-flex flex-col w-8/12">
                    <div class="inline-flex flex-col">
                        <label for="name" class=" text-slate-400 text-xs font-medium tracking-wide mb-1">NAME <span class="text-red-500">*</span></label>
                        <input placeholder="Complete Name" type="text" id="name" name="name" required class="text-slate-900 px-5 font-medium py-2 rounded-md border-none focus:outline-none bg-slate-200 ring-1 ring-gray-300">
                    </div>

                    <div class="inline-flex flex-col">
                        <label for="birthdate" class=" text-slate-400 text-xs font-medium tracking-wide mb-1">Date of Birth</label>
                        <input type="date" id="birthdate" name="birthdate" class="text-slate-900 px-5 font-medium py-2 rounded-md border-none focus:outline-none bg-slate-200 ring-1 ring-gray-300">
                    </div>

                    <div class="inline-flex flex-col">
                        <label class=" text-slate-400 text-xs font-medium tracking-wide mb-1">Sex</label>
                        <div id="sex" name="sex" class="text-slate-900 font-medium grid grid-cols-2 gap-2 rounded-md p-1">
                            <span class="border-2  border-blue-500 rounded-xl">
                                <input type="radio" id="male" name="sex" value="Male" class="peer hidden">
                                <label for="male" class="block cursor-pointer select-none rounded-lg p-2 text-center peer-checked:bg-blue-500 hover:bg-blue-200 transition-all delay-75 peer-checked:font-bold peer-checked:text-white">Male</label>
                            </span>
                            <span class="border-2  border-red-500 rounded-xl">
                                <input type="radio" id="female" name="sex" value="Female" class="peer hidden">
                                <label for="female" class="block cursor-pointer select-none rounded-lg p-2 text-center peer-checked:bg-red-500 hover:bg-red-200 transition-all delay-75 peer-checked:font-bold peer-checked:text-white">Female</label>
                            </span>
                        </div>
                    </div>

                    <div class="inline-flex flex-col">
                        <label for="email" class=" text-slate-400 text-xs font-medium tracking-wide mb-1">Email <span class="text-red-500">*</span></label>
                        <input placeholder="E-mail" type="email" id="email" name="email" required class="text-slate-900 px-5 font-medium py-2 rounded-md border-none focus:outline-none bg-slate-200 ring-1 ring-gray-300">
                    </div>
                    
                    <div class="inline-flex flex-col">
                        <label for="address" class=" text-slate-400 text-xs font-medium tracking-wide mb-1">Address</label>
                        <textarea placeholder="Address" id="address" name="address" class="text-slate-900 px-5 font-medium py-2 rounded-md border-none focus:outline-none bg-slate-200 ring-1 ring-gray-300"></textarea>
                    </div>

                    <div class="inline-flex flex-col md:grid grid-cols-1 md:grid-cols-12 gap-5">
                        <div class="inline-flex flex-col col-span-12 md:col-span-5">
                            <label for="department" class=" text-slate-400 text-xs font-medium tracking-wide mb-1">College Department</label>
                            <select id="department" name="department" class="h-full text-slate-900 px-5 font-medium py-2 rounded-md border-none focus:outline-none bg-slate-200 ring-1 ring-gray-300">
                                <option value="" selected disabled hidden>Department</option>
                                <option value="CBAA">CBAA</option>
                                <option value="CCJE">CCJE</option>
                                <option value="COE">COE</option>
                                <option value="CCS">CCS</option>
                                <option value="CON">CON</option>
                            </select>
                        </div>

                        <div class="inline-flex flex-col col-span-12 md:col-span-7">
                            <label for="program" class=" text-slate-400 text-xs font-medium tracking-wide mb-1">Program</label>
                            <input placeholder="Program" type="text" id="program" name="program" class="text-slate-900 px-5 font-medium py-2 rounded-md border-none focus:outline-none bg-slate-200 ring-1 ring-gray-300">
                        </div>
                    </div>

                    <div class="inline-flex flex-col">
                        <label for="mobile" class=" text-slate-400 text-xs font-medium tracking-wide mb-1">Mobile Number</label>
                        <input placeholder="Mobile" type="text" id="mobile" name="mobile" class="text-slate-900 px-5 font-medium py-2 rounded-md border-none focus:outline-none bg-slate-200 ring-1 ring-gray-300">
                    </div>

                    <div class="flex justify-evenly">
                        <button type="reset" class="hover:font-medium w-2/6 md:px-5 py-3 bg-red-300 hover:bg-red-500 transition all delay-50 rounded-md">Reset</button>
                        <button type="submit" class="hover:font-medium w-2/6 md:px-5 py-3 bg-green-300 hover:bg-green-500 transition all delay-50 rounded-md">Submit</button>
                    </div>

                </form>

            </div>
        </div>

        <!-- Design -->
        <div class="md:col-span-6 py-11 px-11 hidden md:flex justify-center items-center">
            <div class="flex rounded-lg h-[98%] w-11/12 border-slate-800 border-2 bg-slate-800 relative overflow-hidden">
                <img src="../asset/Great-Dane-orig.jpg" alt="Great_Dane_Logo" class="absolute inset-0 w-full h-full object-cover transform transition-transform duration-2000 ease-out hover:scale-125">
                <div class="absolute inset-0 flex flex-col justify-center items-center text-content">
                    <h3 class="text-slate-500 text-2xl">Developed:</h3>
                    <h1 class="text-white text-4xl">Mark Jerome Santos</h1>
                    <h2 class="text-slate-300 text-3xl">BSIT-3A</h2>
                    <br>
                    <p class="text-slate-500 text-lg italic">PHP</p>
                    <p class="text-slate-500 text-lg italic">Tailwind</p>

                    <br>
                    <a href="https://github.com/Zedbyte/ipt10-lab-01.git" class="font-medium text-blue-300 hover:underline">Check my repository!</a>
                </div>
            </div>
        </div>

    </div>
</body>
</html>