<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body dir="rtl">
<div class=" mx-auto mt-0 border-b-2 fixed w-full pt-10 text-center bg-white ">
    
    <nav class="border-gray-200 mr-[35rem] mb-4">
    <div class="container mx-auto flex flex-wrap items-center justify-between">
       
        <div class="hidden md:block w-full md:w-auto" id="mobile-menu">
        <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
            <li>
            <a href="/search" class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:text-blue-700 md:p-0 rounded focus:outline-none" aria-current="page">البحث </a>
            </li>
            <li class=" mr-10">
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-gray-700 mr-10 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">الحساب <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y  divide-gray-100 rounded shadow my-4 w-44">
                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="/account" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">اعدادات الحساب</a>
                    </li>
                    <li>
                        <a href="/passwordpage" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">كلمة المرور</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">احصائيات</a>
                    </li>
                    </ul>
                    <div class="py-1">
                    <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">تسجيل الخروج</a>
                    </div>
                </div>
                
            </li>
         
            <li>
            <a href="#" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">اضافة طلب</a>
            </li>
            <li>
            <a href="#" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">طلباتي</a>
            </li>
            
        </ul>
        </div>
    </div>
    </nav>

</div>

<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
<!-- Header End -->
<div class="main grid grid-cols-6 ">
    <section class=" side-bar col-span-1 w-full min-h-screen bg-slate-100">
    <div class=' flex-row justify-center p-4 mt-32'>
    <div class=" w-full p-2 bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
        <i class="fa-solid fa-house ml-8 mr-3"></i>
<a href="/account">الرئيسية</a>
        </div>
        <a href="/notes">
        <div class=" w-full p-2 bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
        <i class="fa-regular fa-bell ml-8 mr-3"></i>  الاشعارات  
        </div></a>
        
        <div class=" w-full p-2  bg-sky-600 mx-auto my-4 rounded-lg text-white ">
        <i class="fa-solid fa-screwdriver-wrench ml-8 mr-3"></i>
الأعمال
        </div>
        <div class=" w-full p-2  bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
        <i class="fa-solid fa-chart-simple  ml-8 mr-3"></i>
        التحليلات
        </div>
    </div>
    </section>

    
<!-- Main Content Start -->


        <div class="w-full mt-[10rem] mr-[10rem] my-10 bg-white shadow-lg col-span-3 rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="block text-gray-700 text-xl font-bold mb-2">إدخال الأعمال السابقة</h2>
            
            <form action="#" method="post">
                <!-- Project Description -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="project-description">
                        وصف المشروع
                    </label>
                    <textarea id="project-description" name="project-description" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
                </div>

                <!-- Image Upload -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="project-image">
                        رفع صورة
                    </label>
                    <input type="file" id="project-image" name="project-image" class="shadow border rounded w-full py-2 px-3 text-sky-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>

                <!-- Completion Date -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="completion-date">
                        تاريخ الإنهاء
                    </label>
                    <input type="date" id="completion-date" name="completion-date" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-between">
                    <button class="bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        إرسال
                    </button>
                </div>
            </form>
        </div>
    
</body>
</html>