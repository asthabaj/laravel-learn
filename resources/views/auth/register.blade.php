<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>
    
    <form method="POST" action="/register">
        @csrf
  
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">  
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <x-form-field>
                    <x-form-label for="fname">First Name</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="fname" id="fname"  required></x-form-input>
                        <x-form-error name="fname"></x-form-error>
                    </div>
                </x-form-field>
  
                <x-form-field>
                    <x-form-label for="lname">Last Name</x-form-label>
                      <div class="mt-2">
                          <x-form-input name="lname" id="lname" required></x-form-input>
                          <x-form-error name="lname"></x-form-error>
                      </div>
                  </x-form-field>

                  <x-form-field>
                    <x-form-label for="email">Email</x-form-label>
                      <div class="mt-2">
                          <x-form-input name="email" id="email" type="email" required></x-form-input>
                          <x-form-error name="email"></x-form-error>
                      </div>
                  </x-form-field>

                  <x-form-field>
                    <x-form-label for="password">Password</x-form-label>
                      <div class="mt-2">
                          <x-form-input name="password" id="password" type="password" required></x-form-input>
                          <x-form-error name="password"></x-form-error>
                      </div>
                  </x-form-field>

                  <x-form-field>
                    <x-form-label for="password_confirmation">Confirm password</x-form-label>
                      <div class="mt-2">
                          <x-form-input name="password_confirmation" id="password_confirmation" type="password" required></x-form-input>
                          <x-form-error name="password_confirmation"></x-form-error>
                      </div>
                  </x-form-field>
  
                    </div>
                </div>
  
                {{-- Uncomment the following section if you want to display all errors
                <div class="mt-10">
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500 italic">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                --}}
            </div>
        </div>
  
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="'/" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>
  </x-layout>
  