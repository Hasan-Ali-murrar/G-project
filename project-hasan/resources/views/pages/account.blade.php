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
            
            <div class=" col-span-1 border-b-4 -mb-1 border-sky-700 font-semibold text-center">معلومات الحساب</div>
            <a href=" /passwordpage ">
            <div class=" col-span-1 border-b-4 -mb-1 text-gray-400 font-semibold text-center hover:border-sky-500 hover:text-black duration-1000"> كلمة المرور </div>
        </a>
        </div>
    </div>
<form action="" method="post">@csrf
    
    <div class="mt-24 ml-10 text-slate-600  inline-flex justify-center items-center ">

    <div class=" ml-3 "> صورة الحساب </div><div class="rounded-full bg-sky-300 h-24 w-24  "></div>
   <div class=" flex-col ">
   <button class=" mr-10 mt-2 block ">
    <a href="" class=" rounded px-5 py-2.5 overflow-hidden group bg-sky-600 relative hover:bg-gradient-to-r hover:from-sky-500 hover:to-sky-400 text-white hover:ring-2 hover:ring-offset-2 hover:ring-sky-400 transition-all ease-out duration-300">
<span class="absolute right-0 w-8 h-32  transition-all duration-1000 transform translate-x-12 bg-white opacity-10 rotate-12 group-hover:-translate-x-40 ease"></span>
<span class="relative">  تعديل  </span>
</a></button>

    <button class=" mr-10 mt-6 ">
    <a href="" class=" rounded px-5 py-2.5 overflow-hidden group bg-red-600 relative hover:bg-gradient-to-r hover:from-red-500 hover:to-red-400 text-white hover:ring-2 hover:ring-offset-2 hover:ring-red-400 transition-all ease-out duration-300">
<span class="absolute right-0 w-8 h-32  transition-all duration-1000 transform translate-x-12 bg-white opacity-10 rotate-12 group-hover:-translate-x-40 ease"></span>
<span class="relative">  حذف  </span>
</a></button>

</div>

    </div>

    <div class=" flex flex-col justify-start  ml-10 mt-10" >
    <label for="fullname" class=" float-right  text-slate-600 mb-2"> الأسم الكامل</label>
        <input type="text" class=" border-2 rounded-lg w-2/5 h-10 p-4 focus:outline-sky-700" name="fullname">
    </div>

    <div class=" flex flex-col  justify-start  ml-10 mt-10" >
    <label for="email" class=" float-right  text-slate-600 mb-2"> البريد الاكتروني</label>
        <input type="email" class=" border-2 rounded-lg w-2/5 h-10 p-4 focus:outline-sky-700" name="email">
    </div>

    <div class=" flex flex-col justify-start  ml-10 mt-10" >
    <label for="pnumber" class=" float-right  text-slate-600 mb-2"> رقم الهاتف </label>
        <input type="tel" class=" border-2 rounded-lg w-2/5 h-10 p-4 focus:outline-sky-700" name="pnumber">
    </div>

    <div class=" flex flex-col justify-start  ml-10 mt-10" >
    <label for="city" class=" float-right  text-slate-600 mb-2"> المدينة</label>
    <select data-te-select-init class="border-2  w-2/5 h-10 p-4  " name=" city ">
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="4">Four</option>
  <option value="5">Five</option>
  <option value="6">Six</option>
  <option value="7">Seven</option>
  <option value="8">Eight</option>
</select>
    </div>
    <div class=" flex flex-col justify-start  ml-10 mt-10" >
    <label for="service" class=" float-right  text-slate-600 mb-2"> الخدمة </label>
    <select data-te-select-init class="border-2  w-2/5 h-10 p-4  " name=" service ">
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="4">Four</option>
  <option value="5">Five</option>
  <option value="6">Six</option>
  <option value="7">Seven</option>
  <option value="8">Eight</option>
</select>


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