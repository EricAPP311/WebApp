<x-layouts.app bodyClass="g-sidenav-show bg-gray-100" title="Profile">
    <x-layouts.navbars.sidebar activePage="profile"></x-layouts.navbars.sidebar>
    <main class="main-content position-relative border-radius-lg ">
        <x-layouts.navbars.navbar titlePage="Profile"></x-layouts.navbars.navbar>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        @include('profile.partials.update-profile-information-form')
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        @include('profile.partials.update-password-form')
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        @include('profile.partials.delete-user-form')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <x-layouts.footer></x-layouts.footer> --}}
        </div>
    </main>
    <x-layouts.plugin title="profile"></x-layouts.plugin>
</x-layouts.app>
