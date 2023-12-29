<div class="mt-4">
            <x-input-label for="cities" :value="__('City')" />
            <select id="cities" name="cities" :value="old('cities')" required class="block mt-1 w-full" autocomplete="cities">
            @foreach($cities as $city)       
            <option value={{$city->id}} >{{$city->city_name}}</option>
            @endforeach
            </select>