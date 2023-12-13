<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body dir="rtl">
<div class="main grid grid-cols-6 ">
<section class=" side-bar col-span-1 w-full min-h-screen bg-slate-100">
    <div class=' flex-row justify-center p-4 mt-32'>
        <div class=" w-full p-2  bg-sky-600 mx-auto my-4 rounded-lg text-white ">
        <i class="fa-solid fa-house ml-8 mr-3"></i>
الرئيسية
        </div>
        <div class=" w-full p-2 bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
        <i class="fa-regular fa-bell ml-8 mr-3"></i> الاشعارات
        </div>
        <div class=" w-full p-2  bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
        <i class="fa-solid fa-screwdriver-wrench ml-8 mr-3"></i>
        الأعمال 
        </div>
        <div class=" w-full p-2  bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
        <i class="fa-solid fa-chart-simple  ml-8 mr-3"></i>
        التحليلات
        </div>
    </div>
    </section>



    <section class=" col-span-5 w-full min-h-screen bg-sky-100 p-10">
    <div class=" mt-14">
       <h1 class=" text-sky-700 font-bold text-5xl ">   الإعدادت  </h1>
            
        <div class=" w-full mt-14 border-b-4 grid grid-cols-2">
            <a href="/account">
            <div class=" col-span-1 border-b-4 -mb-1 text-gray-400 font-semibold text-center hover:border-sky-500 hover:text-black duration-1000">معلومات الحساب</div>
            </a>
            <div class=" col-span-1 border-b-4 border-sky-700 -mb-1 text-black font-semibold text-center  hover:text-black duration-1000"> كلمة المرور </div>
        
        </div>
    </div>

<form action="" method="post">@csrf
    <div class=" flex flex-col justify-start  ml-10 mt-10" >
    <label for="password" class=" float-right  text-slate-600 mb-2"> كلمة المرور القديمة  </label>
        <input type="password" class=" border-2 rounded-lg w-2/5 h-10 p-4 focus:outline-sky-700" name="password">
    </div>


    <div class=" flex flex-col justify-start  ml-10 mt-10" >
    <label for="password" class=" float-right  text-slate-600 mb-2">  كلمة المرور الجديدة </label>
        <input type="password" class=" border-2 rounded-lg w-2/5 h-10 p-4 focus:outline-sky-700" name="password">
    </div>
    <div class=" flex flex-col justify-start  ml-10 mt-10" >
    <label for="password" class=" float-right  text-slate-600 mb-2"> تأكيد كلمة المرور </label>
        <input type="password" class=" border-2 rounded-lg w-2/5 h-10 p-4 focus:outline-sky-700" name="password">
    </div>




    <button type=" submit ">
<a href="" class=" rounded px-5 py-2.5 inline-block mt-10  overflow-hidden group bg-green-500 relative hover:bg-gradient-to-r hover:from-green-500 hover:to-green-400 text-white hover:ring-2 hover:ring-offset-2 hover:ring-green-400 transition-all ease-out duration-300">
<span class="absolute right-0 w-8  h-32  transition-all duration-1000 transform translate-x-12 bg-white opacity-10 rotate-12 group-hover:-translate-x-40 ease"></span>
<span class="relative"> حفظ </span>
</a>
</button>
</form>
    </section>
</div>
</body>
</html>