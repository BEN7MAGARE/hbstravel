<!-- form main starts -->
<div class="form-main">
    <div class="container">
        <div class="form-content">
            <h3 class="form-title text-center d-inline white">Find a Place</h3>
    @include('widgets.alerts')

            <form action="{{ route('search.api') }}" method="post" id="searchPlacesForm">
                @csrf
                <div class="row" style="position: relative;">

                    <div class="form-group col-md-3">
                        <div class="input-box">
                            {{-- <i class="fa fa-search"></i> --}}

                            {{-- <input type="text" class="form-control form-control-lg" id="searchparam" list="searchList" placeholder="Enter country, city, or hotel name here">
                            <datalist id="searchList" style="width: 100%;">
                                <option value="1">Travel has helped us to understand</option>
                            </datalist> --}}
                            <select id="searchcountries" class="form-control form-control-lg" name="country_code"></select>
                        </div>
                    </div>

                    <div class="form-group col-md-2">
                        <div class="input-box">
                            <i class="fa fa-calendar"></i>
                            <input class="form-control form-control-lg" value="{{ old('checkIn') }}"id="date-range0" name="checkIn"
                                placeholder="Depart Date">
                        </div>
                    </div>

                    <div class="form-group col-md-2">
                        <div class="input-box">
                            <i class="fa fa-calendar"></i>
                            <input class="form-control form-control-lg" id="date-range1" value="{{ old("checkOut") }}" name="checkOut"
                                placeholder="Return Date">
                        </div>
                    </div>

                    <div id="Adults1" class="form-group col-md-2" style="display: block;">
                        <div class="input-box">
                            <i class="fa fa-male"></i>
                            <select required id="adultsInput1" class="form-control form-control-lg" name="adults">
                                <option value="" disabled selected>Adults</option>
                                @for ($i = 1; $i <= 10; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div id="Children1" class="form-group col-md-2" style="display: block;">
                        <div class="input-box">
                            <i class="fa fa-child"></i>
                            <select id="childrenInput1" class="form-control form-control-lg" name="children">
                                <option value="" disabled selected>Children</option>
                                @for ($i = 0; $i <= 10; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-1">
                        <button type="submit" class="nir-btn">Find</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
