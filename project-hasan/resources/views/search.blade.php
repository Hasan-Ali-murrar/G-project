<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body dir="rtl">
    <nav class="sticky inset-0 z-10 block h-max w-full max-w-full rounded-none border border-white/80 bg-white bg-opacity-80 py-2 px-4 text-white shadow-md backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
        <div class="flex items-center text-gray-900">
          <a
            href="#"
            class="mr-4 block cursor-pointer py-1.5 font-sans text-base font-medium leading-relaxed text-inherit antialiased"
          >
            Material Tailwind
          </a>
          <ul class="ml-auto mr-auto hidden items-center gap-6 lg:flex">
            <li class="block p-1 font-sans text-lg font-bold leading-normal text-inherit antialiased hover:text-sky-700 duration-700">
              <a class="flex items-center" href="#">
                تواصل معنا
              </a>
            </li>
            <li class="block p-1 font-sans text-lg font-bold leading-normal text-inherit antialiased  hover:text-sky-700 duration-700">
              <a class="flex items-center" href="#">
                الرئيسية
              </a>
            </li>
            <li class="block p-1 font-sans text-lg font-bold leading-normal text-inherit antialiased  hover:text-sky-700 duration-700">
              <a class="flex items-center" href="#">
                من نحن
              </a>
            </li>
            <li class="block p-1 font-sans text-lg font-bold leading-normal text-inherit antialiased  hover:text-sky-700 duration-700">
              <a class="flex items-center" href="#">
                خدماتنا
              </a>
            </li>
          </ul>
          <div class="flex">
            <button
              class="middle none center mr-3 rounded-lg bg-sky-700 py-3 px-6 font-sans text-md font-bold uppercase text-white shadow-md shadow-sky-500/20 transition-all hover:shadow-lg hover:shadow-sky-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              data-ripple-light="true"
            >
              إنشاء حساب
            </button>
            <a href="/login">
          <button
          class="middle none center mr-3 rounded-lg border border-sky-700 py-3 px-6 font-sans text-md font-bold uppercase text-sky-700 transition-all hover:opacity-75 focus:ring focus:ring-sky-400 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
          data-ripple-dark="true"
        >
          تسجيل الدخول
        </button>
      </a>
          <button
            class="middle none relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] rounded-lg text-center font-sans text-xs font-medium uppercase text-blue-gray-500 transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden"
            data-collapse-target="sticky-navar"
          >
            <span class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 transform">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                stroke="currentColor"
                strokeWidth="2"
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  d="M4 6h16M4 12h16M4 18h16"
                ></path>
              </svg>
            </span>
          </button>
        </div>
        
       
      </nav>
    
      <div class="  rounded-lg border-4 border-sky-100 bg-white mt-14 p-10 w-6/12 mx-auto ">


<h1 class=" text-3xl mb-6">  تصفح و ابحث عن العديد من الخدمات و العاملين  </h1>






<div class=" inline-block">
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">المدينة</label>
<select id="countries" class="bg-gray-50 w-44 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block  p-2.5 d">
  <option selected>اختر مدينة</option>
  <option value="US">United States</option>
  <option value="CA">Canada</option>
  <option value="FR">France</option>
  <option value="DE">Germany</option>
</select>
</div>
<div class=" inline-block mr-10">
<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">    نوع الخدمة  </label>
<select id="countries" class="bg-gray-50 border w-44 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block  p-2.5  ">
  <option selected>اختر الخدمة</option>
  <option value="US">United States</option>
  <option value="CA">Canada</option>
  <option value="FR">France</option>
  <option value="DE">Germany</option>
</select>
</div>
<div class=" inline-block mr-4">
<label  class=" block mb-2 text-sm font-medium text-gray-900 "> خانة البحث</label>
<input type="search" class=" border-2 rounded-lg w-56 h-10 bg-gray-50  p-4 focus:outline-sky-700" name="search" >


</div>
<div class="  mt-10">
  <button
  class="middle none center mr-3 rounded-lg bg-sky-700 py-3 px-6 font-sans text-md font-bold uppercase text-white shadow-md shadow-sky-500/20 transition-all hover:shadow-lg hover:shadow-sky-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
  data-ripple-light="true"
>
<span class="material-symbols-outlined">
  search
  </span>
</button>
</div>
      </div>



<section class=" grid grid-cols-2">




<div class=" bg-white w-10/12 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10 grid grid-cols-3 grid-rows-3 col-span-1">
  
 <div class=" col-span-1  grid grid-cols-2 grid-rows-2 ">
 <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4  ">
person
</span>
<div class=" col-span-1 ">
  اسم الناشر
</div>
<div class="col-span-1">
أمجد شبانة
</div>
 </div>
<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
handyman
</span>
<div class="col-span-1">
   الخدمة
</div>
<div class="col-span-1">
   كهرباء
</div>
</div>

<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4">
location_on
</span>
<div class="col-span-1">
  الموقع
</div>
<div class="col-span-1">
   الخليل
</div>
</div>



<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
  تاريخ النشر
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>
<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
موعد العمل
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>

<button class=" col-span-1 bg-sky-700 text-white rounded p-1 text-sm h-10 w-20 mx-auto mt-6">تقديم عرض</button>
</div>


<div class=" bg-white w-10/12 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10 grid grid-cols-3 grid-rows-3 col-span-1">
 <div class=" col-span-1  grid grid-cols-2 grid-rows-2 ">
 <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4  ">
person
</span>
<div class=" col-span-1 ">
  اسم الناشر
</div>
<div class="col-span-1">
أمجد شبانة
</div>
 </div>
<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
handyman
</span>
<div class="col-span-1">
   الخدمة
</div>
<div class="col-span-1">
   كهرباء
</div>
</div>

<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4">
location_on
</span>
<div class="col-span-1">
  الموقع
</div>
<div class="col-span-1">
   الخليل
</div>
</div>



<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
  تاريخ النشر
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>
<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
موعد العمل
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>

<button class=" col-span-1 bg-sky-700 text-white rounded p-1 text-sm h-10 w-20 mx-auto mt-6">تقديم عرض</button>
</div>
<div class=" bg-white w-10/12 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10 grid grid-cols-3 grid-rows-3 col-span-1">
 <div class=" col-span-1  grid grid-cols-2 grid-rows-2 ">
 <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4  ">
person
</span>
<div class=" col-span-1 ">
  اسم الناشر
</div>
<div class="col-span-1">
أمجد شبانة
</div>
 </div>
<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
handyman
</span>
<div class="col-span-1">
   الخدمة
</div>
<div class="col-span-1">
   كهرباء
</div>
</div>

<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4">
location_on
</span>
<div class="col-span-1">
  الموقع
</div>
<div class="col-span-1">
   الخليل
</div>
</div>



<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
  تاريخ النشر
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>
<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
موعد العمل
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>

<button class=" col-span-1 bg-sky-700 text-white rounded p-1 text-sm h-10 w-20 mx-auto mt-6">تقديم عرض</button>
</div>
<div class=" bg-white w-10/12 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10 grid grid-cols-3 grid-rows-3 col-span-1">
 <div class=" col-span-1  grid grid-cols-2 grid-rows-2 ">
 <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4  ">
person
</span>
<div class=" col-span-1 ">
  اسم الناشر
</div>
<div class="col-span-1">
أمجد شبانة
</div>
 </div>
<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
handyman
</span>
<div class="col-span-1">
   الخدمة
</div>
<div class="col-span-1">
   كهرباء
</div>
</div>

<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4">
location_on
</span>
<div class="col-span-1">
  الموقع
</div>
<div class="col-span-1">
   الخليل
</div>
</div>



<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
  تاريخ النشر
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>
<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
موعد العمل
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>

<button class=" col-span-1 bg-sky-700 text-white rounded p-1 text-sm h-10 w-20 mx-auto mt-6">تقديم عرض</button>
</div>
<div class=" bg-white w-10/12 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10 grid grid-cols-3 grid-rows-3 col-span-1">
 <div class=" col-span-1  grid grid-cols-2 grid-rows-2 ">
 <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4  ">
person
</span>
<div class=" col-span-1 ">
  اسم الناشر
</div>
<div class="col-span-1">
أمجد شبانة
</div>
 </div>
<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
handyman
</span>
<div class="col-span-1">
   الخدمة
</div>
<div class="col-span-1">
   كهرباء
</div>
</div>

<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4">
location_on
</span>
<div class="col-span-1">
  الموقع
</div>
<div class="col-span-1">
   الخليل
</div>
</div>



<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
  تاريخ النشر
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>
<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
موعد العمل
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>

<button class=" col-span-1 bg-sky-700 text-white rounded p-1 text-sm h-10 w-20 mx-auto mt-6">تقديم عرض</button>
</div>
<div class=" bg-white w-10/12 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10 grid grid-cols-3 grid-rows-3 col-span-1">
 <div class=" col-span-1  grid grid-cols-2 grid-rows-2 ">
 <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4  ">
person
</span>
<div class=" col-span-1 ">
  اسم الناشر
</div>
<div class="col-span-1">
أمجد شبانة
</div>
 </div>
<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
handyman
</span>
<div class="col-span-1">
   الخدمة
</div>
<div class="col-span-1">
   كهرباء
</div>
</div>

<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4">
location_on
</span>
<div class="col-span-1">
  الموقع
</div>
<div class="col-span-1">
   الخليل
</div>
</div>



<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
  تاريخ النشر
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>
<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
موعد العمل
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>

<button class=" col-span-1 bg-sky-700 text-white rounded p-1 text-sm h-10 w-20 mx-auto mt-6">تقديم عرض</button>
</div>

</section>










</body>
</html>