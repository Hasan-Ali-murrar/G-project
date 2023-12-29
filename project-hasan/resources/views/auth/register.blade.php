<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" dir="rtl">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('الاسم')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('الايميل')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('كلمة المرور')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('تأكيد كلمة المرور')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!--Phone--->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('رقم الهاتف')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required
                autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>
        <!--Image--->
        <div class="mt-4">
            <x-input-label for="image" :value="__('الصورة الشخصية')" />
            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required
                autocomplete="image" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>
        <!--City-->
        <div class="mt-4">
            <x-input-label for="cities" :value="__('المدينة')" />
            <select id="cities" name="city_id" :value="old('city_id')" required class="block mt-1 w-full"
                autocomplete="city_id">
                @foreach($cities as $city)
                <option value="{{$city->id}}" id="city_id" name="city_id" >{{$city->city_name}}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('city_id')" class="mt-2" />
        </div>
        
        <!--address-->
        <div class="mt-4">
            <x-input-label for="address" :value="__('العنوان')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required
                autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!--Services-->
        <div class="mt-4">
            <x-input-label for="services" :value="__('الخدمة التي ستقدمها')" />
            <select id="services" name="service_id" :value="old('service_id')" required class="block mt-1 w-full"
                autocomplete="service_id">
                @foreach($services as $service)
                <option value="{{$service->id}}" id="service_id" name="service_id">{{$service->service_name}}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('service_id')" class="mt-2" />
        </div>  

            <!--service_desc-->
            
        <div class="mt-4">
            <x-input-label for="service_desc" :value="__('تفاصيل الخدمة')" />
            <x-text-input id="service_desc" class="block mt-1 w-full" type="text" name="service_desc" :value="old('service_desc')" required
                autocomplete="service_desc" />
            <x-input-error :messages="$errors->get('service_desc')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('لدي حساب سابقا?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('انشاء حساب') }}
            </x-primary-button>
        </div>

    </form>
</x-guest-layout>