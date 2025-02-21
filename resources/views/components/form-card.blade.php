<x-layout>

    <x-slot:title>
        homepage | bell
    </x-slot:title>

    {{-- <form action="" method="post">
        <div class="flex flex-col">
            @php
                $fields = [
                    'fullname' => "text",
                    'contact' => "number",
                    "state" => "select",
                    "dob" => "date",
                    "Password" => "password",
                    "Confirm Password" => "password",
                ];
            @endphp
            @foreach ($fields as $name => $type)
                    @if($type != "select")
                        <x-input type={{$type}} :name="$name"  />
                    @else
                        <x-select/>
                    @endif
            @endforeach

            <x-button color="red">Save Data</x-button>


        </div>
    </form>




    @section('credit')
        <p>this is my copyright</p>
    @endsection --}}

    <x-slot:footer>
        <p>this is my footer</p>
    </x-slot>


</x-layout>
