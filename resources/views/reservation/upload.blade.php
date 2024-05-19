<x-layouts.app bodyClass="g-sidenav-show bg-gray-100" title="Import Reservation">
    <x-layouts.navbars.sidebar activePage="reservation"></x-layouts.navbars.sidebar>
    <main class="main-content position-relative border-radius-lg ">
        <x-layouts.navbars.navbar titlePage="Import Reservation"></x-layouts.navbars.navbar>
        <div class="container-fluid py-7">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Form Import Reservation Excel File</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <form action="{{ route('reservation.import') }}" method="post"
                                enctype="multipart/form-data" class="p-2">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="file" name="file_import"
                                            class="form-control @error('file_import') is-invalid @enderror">
                                        @error('file_import')
                                            <div class="invalid-feedback">
                                                <small>
                                                    {{ $message }}
                                                </small>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-3">
                                        <a href="{{ route('reservation.index') }}" type="button"
                                            class="btn btn-secondary btn-sm">Cancel</a>
                                        <button class="btn btn-success btn-sm" type="submit">Import File</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <x-layouts.footer></x-layouts.footer> --}}
        </div>
    </main>
    <x-layouts.plugin title="import reservation"></x-layouts.plugin>

</x-layouts.app>
