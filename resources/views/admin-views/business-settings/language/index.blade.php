@extends('layouts.admin.app')

@section('title', translate('Language'))

@push('css_or_js')
@endpush

@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="d-flex flex-wrap gap-2 align-items-center mb-4">
            <h2 class="h1 mb-0 d-flex align-items-center gap-2">
                <img width="20" class="avatar-img" src="{{asset('public/assets/admin/img/icons/lang.png')}}" alt="">
                <span class="page-header-title">
                    {{translate('system_setup')}}
                </span>
            </h2>
        </div>
        <!-- End Page Header -->

        <!-- Inline Menu -->
        @include('admin-views.business-settings.partials._system-settings-inline-menu')

        <div class="row">
            <div class="col-md-12">
                <div class="alert alert--danger alert-danger mb-3" role="alert">
                    <i class="tio-info alert--icon"></i> <strong>{{translate('Note :')}}</strong> {{translate('changing_some_settings_will_take_time_to_show_effect_please_clear_session_or_wait_for_60_minutes_else_browse_from_incognito_mode')}}
                </div>


                <form class="card mb-3" action="{{route('admin.business-settings.web-app.system-setup.language.add-new')}}" method="post"
                        style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="recipient-name"
                                            class="col-form-label">{{translate('language')}} </label>
                                    <input type="text" class="form-control" id="recipient-name" name="name" placeholder="{{translate('Ex: English')}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">{{translate('country_code')}}</label>
                                    <select class="form-control js-select2-custom" name="code" style="width: 100%">
                                        <option selected disabled>---{{translate('select_contry_code')}}---</option>
                                        <option value="af">Afrikaans</option>
                                        <option value="sq">Albanian - shqip</option>
                                        <option value="am">Amharic - ????????????</option>
                                        <option value="ar">Arabic - ??????????????</option>
                                        <option value="an">Aragonese - aragon??s</option>
                                        <option value="hy">Armenian - ??????????????</option>
                                        <option value="ast">Asturian - asturianu</option>
                                        <option value="az">Azerbaijani - az??rbaycan dili</option>
                                        <option value="eu">Basque - euskara</option>
                                        <option value="be">Belarusian - ????????????????????</option>
                                        <option value="bn">Bengali - ???????????????</option>
                                        <option value="bs">Bosnian - bosanski</option>
                                        <option value="br">Breton - brezhoneg</option>
                                        <option value="bg">Bulgarian - ??????????????????</option>
                                        <option value="ca">Catalan - catal??</option>
                                        <option value="ckb">Central Kurdish - ?????????? (???????????????? ????????????)</option>
                                        <option value="zh">Chinese - ??????</option>
                                        <option value="zh-HK">Chinese (Hong Kong) - ??????????????????</option>
                                        <option value="zh-CN">Chinese (Simplified) - ??????????????????</option>
                                        <option value="zh-TW">Chinese (Traditional) - ??????????????????</option>
                                        <option value="co">Corsican</option>
                                        <option value="hr">Croatian - hrvatski</option>
                                        <option value="cs">Czech - ??e??tina</option>
                                        <option value="da">Danish - dansk</option>
                                        <option value="nl">Dutch - Nederlands</option>
                                        <option value="en-AU">English (Australia)</option>
                                        <option value="en-CA">English (Canada)</option>
                                        <option value="en-IN">English (India)</option>
                                        <option value="en-NZ">English (New Zealand)</option>
                                        <option value="en-ZA">English (South Africa)</option>
                                        <option value="en-GB">English (United Kingdom)</option>
                                        <option value="en-US">English (United States)</option>
                                        <option value="eo">Esperanto - esperanto</option>
                                        <option value="et">Estonian - eesti</option>
                                        <option value="fo">Faroese - f??royskt</option>
                                        <option value="fil">Filipino</option>
                                        <option value="fi">Finnish - suomi</option>
                                        <option value="fr">French - fran??ais</option>
                                        <option value="fr-CA">French (Canada) - fran??ais (Canada)</option>
                                        <option value="fr-FR">French (France) - fran??ais (France)</option>
                                        <option value="fr-CH">French (Switzerland) - fran??ais (Suisse)</option>
                                        <option value="gl">Galician - galego</option>
                                        <option value="ka">Georgian - ?????????????????????</option>
                                        <option value="de">German - Deutsch</option>
                                        <option value="de-AT">German (Austria) - Deutsch (??sterreich)</option>
                                        <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                                        <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                                        <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                                        <option value="el">Greek - ????????????????</option>
                                        <option value="gn">Guarani</option>
                                        <option value="gu">Gujarati - ?????????????????????</option>
                                        <option value="ha">Hausa</option>
                                        <option value="haw">Hawaiian - ????lelo Hawai??i</option>
                                        <option value="he">Hebrew - ??????????</option>
                                        <option value="hi">Hindi - ??????????????????</option>
                                        <option value="hu">Hungarian - magyar</option>
                                        <option value="is">Icelandic - ??slenska</option>
                                        <option value="id">Indonesian - Indonesia</option>
                                        <option value="ia">Interlingua</option>
                                        <option value="ga">Irish - Gaeilge</option>
                                        <option value="it">Italian - italiano</option>
                                        <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                                        <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                                        <option value="ja">Japanese - ?????????</option>
                                        <option value="kn">Kannada - ???????????????</option>
                                        <option value="kk">Kazakh - ?????????? ????????</option>
                                        <option value="km">Khmer - ???????????????</option>
                                        <option value="ko">Korean - ?????????</option>
                                        <option value="ku">Kurdish - Kurd??</option>
                                        <option value="ky">Kyrgyz - ????????????????</option>
                                        <option value="lo">Lao - ?????????</option>
                                        <option value="la">Latin</option>
                                        <option value="lv">Latvian - latvie??u</option>
                                        <option value="ln">Lingala - ling??la</option>
                                        <option value="lt">Lithuanian - lietuvi??</option>
                                        <option value="mk">Macedonian - ????????????????????</option>
                                        <option value="ms">Malay - Bahasa Melayu</option>
                                        <option value="ml">Malayalam - ??????????????????</option>
                                        <option value="mt">Maltese - Malti</option>
                                        <option value="mr">Marathi - ???????????????</option>
                                        <option value="mn">Mongolian - ????????????</option>
                                        <option value="ne">Nepali - ??????????????????</option>
                                        <option value="no">Norwegian - norsk</option>
                                        <option value="nb">Norwegian Bokm??l - norsk bokm??l</option>
                                        <option value="nn">Norwegian Nynorsk - nynorsk</option>
                                        <option value="oc">Occitan</option>
                                        <option value="or">Oriya - ???????????????</option>
                                        <option value="om">Oromo - Oromoo</option>
                                        <option value="ps">Pashto - ????????</option>
                                        <option value="fa">Persian - ??????????</option>
                                        <option value="pl">Polish - polski</option>
                                        <option value="pt">Portuguese - portugu??s</option>
                                        <option value="pt-BR">Portuguese (Brazil) - portugu??s (Brasil)</option>
                                        <option value="pt-PT">Portuguese (Portugal) - portugu??s (Portugal)</option>
                                        <option value="pa">Punjabi - ??????????????????</option>
                                        <option value="qu">Quechua</option>
                                        <option value="ro">Romanian - rom??n??</option>
                                        <option value="mo">Romanian (Moldova) - rom??n?? (Moldova)</option>
                                        <option value="rm">Romansh - rumantsch</option>
                                        <option value="ru">Russian - ??????????????</option>
                                        <option value="gd">Scottish Gaelic</option>
                                        <option value="sr">Serbian - ????????????</option>
                                        <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                                        <option value="sn">Shona - chiShona</option>
                                        <option value="sd">Sindhi</option>
                                        <option value="si">Sinhala - ???????????????</option>
                                        <option value="sk">Slovak - sloven??ina</option>
                                        <option value="sl">Slovenian - sloven????ina</option>
                                        <option value="so">Somali - Soomaali</option>
                                        <option value="st">Southern Sotho</option>
                                        <option value="es">Spanish - espa??ol</option>
                                        <option value="es-AR">Spanish (Argentina) - espa??ol (Argentina)</option>
                                        <option value="es-419">Spanish (Latin America) - espa??ol (Latinoam??rica)</option>
                                        <option value="es-MX">Spanish (Mexico) - espa??ol (M??xico)</option>
                                        <option value="es-ES">Spanish (Spain) - espa??ol (Espa??a)</option>
                                        <option value="es-US">Spanish (United States) - espa??ol (Estados Unidos)</option>
                                        <option value="su">Sundanese</option>
                                        <option value="sw">Swahili - Kiswahili</option>
                                        <option value="sv">Swedish - svenska</option>
                                        <option value="tg">Tajik - ????????????</option>
                                        <option value="ta">Tamil - ???????????????</option>
                                        <option value="tt">Tatar</option>
                                        <option value="te">Telugu - ??????????????????</option>
                                        <option value="th">Thai - ?????????</option>
                                        <option value="ti">Tigrinya - ????????????</option>
                                        <option value="to">Tongan - lea fakatonga</option>
                                        <option value="tr">Turkish - T??rk??e</option>
                                        <option value="tk">Turkmen</option>
                                        <option value="tw">Twi</option>
                                        <option value="uk">Ukrainian - ????????????????????</option>
                                        <option value="ur">Urdu - ????????</option>
                                        <option value="ug">Uyghur</option>
                                        <option value="uz">Uzbek - o???zbek</option>
                                        <option value="vi">Vietnamese - Ti???ng Vi???t</option>
                                        <option value="wa">Walloon - wa</option>
                                        <option value="cy">Welsh - Cymraeg</option>
                                        <option value="fy">Western Frisian</option>
                                        <option value="xh">Xhosa</option>
                                        <option value="yi">Yiddish</option>
                                        <option value="yo">Yoruba - ??d?? Yor??b??</option>
                                        <option value="zu">Zulu - isiZulu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="btn--container">
                            <button type="reset" class="btn btn-secondary">{{translate('reset')}}</button>
                            <button type="submit" class="btn btn-primary">{{translate('Submit')}} <i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </form>

                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-borderless table-hover table-thead-bordered table-nowrap table-align-middle card-table" style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-top-0">{{ translate('SL')}}</th>
                                        {{--<th class="border-top-0">{{translate('Id')}}</th>--}}
                                        <th class="border-top-0" style="width: 25%">{{translate('name')}}</th>
                                        <th class="border-top-0" style="width: 15%">{{translate('Code')}}</th>
                                        <th class="border-top-0" style="width: 15%">{{translate('status')}}</th>
                                        <th class="border-top-0" style="width: 15%">{{translate('default_Status')}}</th>
                                        <th class="border-top-0" style="width: 20%">{{translate('action')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php($language = App\CentralLogics\Helpers::get_business_settings('language'))
                                @if(isset($language) && array_key_exists('code', $language[0]))
                                    @foreach($language as $key =>$data)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            {{--<td>{{$data['id']}}</td>--}}
                                            <td>{{$data['name']}}
                                            </td>
                                            <td>{{$data['code']}}</td>
                                            <td>
                                                <label class="switcher">
                                                    <input type="checkbox"
                                                           onclick="updateStatus('{{route('admin.business-settings.web-app.system-setup.language.update-status')}}','{{$data['code']}}','{{$data['default']}}')"
                                                           class="switcher_input" {{$data['status']==1?'checked':''}}>
                                                    <span class="switcher_control"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="switcher">
                                                    <input type="checkbox"
                                                           onclick="window.location.href ='{{route('admin.business-settings.web-app.system-setup.language.update-default-status', ['code'=>$data['code']])}}'"
                                                           class="switcher_input" {{ ((array_key_exists('default', $data) && $data['default']==true) ? 'checked': ((array_key_exists('default', $data) && $data['default']==false) ? '' : 'disabled')) }}>
                                                    <span class="switcher_control"></span>
                                                </label>
                                            </td>
                                            <td class="">
                                                <div class="d-flex justify-content-start align-items-center gap-2 flex-wrap">
                                                    <a class="btn btn-sm btn-outline-success"
                                                    href="{{route('admin.business-settings.web-app.system-setup.language.translate',[$data['code']])}}">{{translate('Translate')}}</a>
                                                    @if($data['code']!='en')
                                                        <a class="btn btn-sm btn-outline-info px-3" data-toggle="modal"
                                                            data-target="#lang-modal-update-{{$data['code']}}">
                                                            <i class="tio-edit"></i>
                                                        </a>
                                                        @if($data['default'] != true)
                                                            <button class="btn btn-sm btn-outline-primary px-3" id="delete"
                                                                onclick="delete_language('{{ route('admin.business-settings.web-app.system-setup.language.delete',[$data['code']]) }}')">
                                                                <i class="tio-delete-outlined"></i>
                                                            </button>
                                                        @endif
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(isset($language) && array_key_exists('code', $language[0]))
            @foreach($language as $key =>$data)
                <div class="modal fade" id="lang-modal-update-{{$data['code']}}" tabindex="-1" role="dialog"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"
                                    id="exampleModalLabel">{{translate('new_language')}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{route('admin.business-settings.web-app.system-setup.language.update')}}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="recipient-name"
                                                       class="col-form-label">{{translate('language')}} </label>
                                                <input type="text" class="form-control" value="{{$data['name']}}"
                                                       name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" value="{{$data['status']}}" name="status">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">{{translate('close')}}</button>
                                    <button type="submit"
                                            class="btn btn-primary">{{translate('update')}}
                                        <i
                                            class="fa fa-plus"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection

@push('script')
    <!-- Page level custom scripts -->
    <script>
        function updateStatus(route, code, default_status) {
            if(code == 'en') {
                Swal.fire({
                    title: '{{ translate("You can not change the status of English language") }}',
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: 'Okay',
                    denyButtonText: `cancel`,
                }).then((result) => {
                    location.reload();
                })
            } else if(default_status == 1) {
                Swal.fire({
                    title: '{{ translate("You can not change the status of default language") }}',
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: 'Okay',
                    denyButtonText: `cancel`,
                }).then((result) => {
                    location.reload();
                })
            } else {
                $.get({
                    url: route,
                    data: {
                        code: code,
                    },
                    success: function (data) {
                        location.reload();
                    }
                });
            }
        }
    </script>

    <script>
        function delete_language(route) {
            Swal.fire({
                title: '{{translate('Are you sure to delete this')}}?',
                text: "{{translate('You will not be able to revert this')}}!",
                showCancelButton: true,
                confirmButtonColor: '#FC6A57',
                cancelButtonColor: 'secondary',
                confirmButtonText: '{{translate('Yes, delete it')}}!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    window.location.href = route;
                }
            })
        }
    </script>

@endpush

@push('script_2')
    <script>
        $(document).on('ready', function () {
            $('.js-select2-custom').each(function () {
                var select2 = $.HSCore.components.HSSelect2.init($(this));
            });
        });
    </script>
@endpush
