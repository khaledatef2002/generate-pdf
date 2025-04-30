<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <title>Job Application</title>
    <link href="{{ $asset_path }}/front/libs/bootstrap/css/bootstrap.rtl.min.css" rel="stylesheet" type="text/css" />
    <style>
        @page {
            margin: 30px;
            border-width: 4px;
            border-color: black;
            border-style: double solid double solid;
        }
        body {
            font-family: sans-serif;
            font-size: 12px;
            line-height: 1.5;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #444;
            padding: 5px;
        }
        .section-title {
            background-color: #f2f2f2;
            font-weight: bold;
            padding: 5px;
            margin-top: 15px;
        }
        .info-table td {
            border: none;
            padding: 3px 5px;
        }
        header
        {
            border-bottom: 4px solid black;
        }
    </style>
</head>
<body>
    <header class="d-flex justify-content-between align-items-center px-4">
        <div>
            <h1 class="fs-4 fw-bold">نموذج طلب توظيف بشركه بروكلين لاداره المطاعم</h1>
            <p class="mb-0 fw-bold fs-6">
                التاريخ: {{ $job_application->created_at_formatted }}
            </p>
        </div>
        <img src="{{ $asset_path . "/storage/" . $settings->logo }}" style="height: 90px;">
    </header>

    <table>
        @if ($job_application->image)
            <tr>
                <td colspan="2" class="border-end-0"></td>
                <td colspan="4" class="border-start-0">
                    <div class="d-flex justify-content-center gap-5 align-items-center fw-bold ps-5">
                        <span>معلومات شخصية</span>
                        <span>Personal Information</span>
                    </div>
                </td>
            </tr>
        @endif
        <tr>
            @if ($job_application->image)
                <td colspan="2" rowspan="6" width="20%" class="text-center fw-bold">
                    <div>
                        <img src="{{ $asset_path . "/storage/" . $job_application->image }}" style="width: 100%;">
                    </div>
                </td>
            @else
                <td colspan="2" rowspan="5" width="20%" class="text-center fw-bold">
                    <span class="d-block">معلومات شخصية</span>
                    <span class="d-block">Personal Information</span>
                </td>
            @endif
            <td colspan="2" width="40%">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold">تاريخ الميلاد:</span>
                    <span>{{ $job_application->date_of_birth }}</span>
                    <span class="fw-bold" dir="ltr">Date of birth:</span>
                </div>
            </td>
            <td colspan="2" width="40%">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold">الاسم:</span>
                    <span>{{ $job_application->name }}</span>
                    <span class="fw-bold" dir="ltr">Name:</span>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" width="40%">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold">الجنسية:</span>
                    <span>@lang('front.' . $job_application->nationality)</span>
                    <span class="fw-bold" dir="ltr">Nationality:</span>
                </div>
            </td>
            <td colspan="2" width="40%">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold">المدينة:</span>
                    <span class="text-center px-1">@lang('front.' . $job_application->city)</span>
                    <span class="fw-bold" dir="ltr">City:</span>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" width="40%">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold">الديانة:</span>
                    <span>@lang('front.' . $job_application->religion)</span>
                    <span class="fw-bold" dir="ltr">Religion:</span>
                </div>
            </td>
            <td colspan="2" width="40%">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold">العنوان:</span>
                    <span class="text-center px-1">{{ $job_application->address }}</span>
                    <span class="fw-bold" dir="ltr">Address:</span>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" width="40%">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold">الحالة الاجتماعية:</span>
                    <span>@lang('front.' . $job_application->social_status)</span>
                    <span class="fw-bold" dir="ltr">Social status:</span>
                </div>
            </td>
            <td colspan="2" width="40%">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold">رقم الهاتف:</span>
                    <span>{{ $job_application->phone_number }}</span>
                    <span class="fw-bold" dir="ltr">Home Tel. #.:</span>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" width="40%">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold">عدد الأطفال:</span>
                    <span>{{ @$job_application->no_of_childs }}</span>
                    <span class="fw-bold" dir="ltr">No. of Children:</span>
                </div>
            </td>
            <td colspan="2" width="40%">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold">الموقف من الخدمة العسكريه:</span>
                    <span>@lang('front.' . $job_application->military_service)</span>
                    <span class="fw-bold" dir="ltr">Military service:</span>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <div class="d-flex justify-content-center gap-5 fw-bold ps-3">
                    <span>التعليم</span>
                    <span>Education</span>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="4" class="fw-bold text-center">
                <span class="d-block">المؤهلات / السنة الدراسية وتاريخ الحصول عليها</span>
                <span class="d-block">Qualifications obtained & date of certification</span>
            </td>
            <td colspan="2" class="fw-bold text-center">
                <span class="d-block">أسماء المدارس والكليات والجامعات</span>
                <span class="d-block">Name of School / College / University</span>
            </td>
            @foreach ($job_application->educations as $education)
                <tr>
                    <td colspan="4" class="text-center">{{ $education->qualifications }} - {{ $education->date_of_completion }}</td>
                    <td colspan="2" class="text-center">{{ $education->name }}</td>
                </tr>
            @endforeach
            @for ($i = 2 - count($job_application->educations); $i > 0; $i--)
                <tr>
                    <td colspan="4" class="text-center py-2"></td>
                    <td colspan="2" class="text-center py-2"></td>
                </tr>
            @endfor
        </tr>
        <tr>
            <td colspan="2" class="border-end-0 pe-5 ps-5"></td>
            <td colspan="4" class="border-start-0">
                <div class="d-flex justify-content-center gap-5 fw-bold ps-3">
                    <span class="me-5">اللغات</span>
                    <span>Language</span>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="6">
                <span class="d-block fw-bold">يرجى توضيح اللغوي باستقدام عبارة - ممتاز - جيد جدا - جيد - مقبول - ضعيف</span>
                <span class="d-block text-end fw-bold">Please indicate you proficiency by marking A,B,C or D under each heading. A-native language or bi-lingual standard. B-Fluent Knowledge acquired during long residence, extensive use or wide reading. C-userful working knowledge, for Travel routine correspondence, etc. D-slight knowledge.</span>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="fw-bold border-top-0">قراءة</td>
            <td class="fw-bold border-top-0">Reading</td>
            <td class="fw-bold border-top-0">استيعاب</td>
            <td class="fw-bold border-top-0">Comprehension</td>
            <td class="fw-bold border-top-0">كتابة</td>
            <td class="fw-bold border-top-0">Written</td>
            <td class="fw-bold border-top-0">تحدث</td>
            <td class="fw-bold border-top-0">Spoken</td>
            <td class="fw-bold border-top-0">اللغة</td>
            <td class="fw-bold border-top-0">Language</td>
        </tr>
        <tr>
            <td colspan="2" class="text-center">@lang('front.' . $job_application->english_reading)</td>

            <td colspan="2" class="text-center">@lang('front.' . $job_application->english_comprehension)</td>

            <td colspan="2" class="text-center">@lang('front.' . $job_application->english_written)</td>

            <td colspan="2" class="text-center">@lang('front.' . $job_application->english_spoken)</td>

            <td class="fw-bold">إنجليزي</td>
            <td class="fw-bold">English</td>
        </tr>
        <tr>
            <td colspan="2" class="text-center">@lang('front.' . $job_application->english_reading)</td>

            <td colspan="2" class="text-center">@lang('front.' . $job_application->english_comprehension)</td>

            <td colspan="2" class="text-center">@lang('front.' . $job_application->english_written)</td>

            <td colspan="2" class="text-center">@lang('front.' . $job_application->english_spoken)</td>

            <td class="fw-bold">عربي</td>
            <td class="fw-bold">Arabic</td>
        </tr>
    </table>
    <table class="border-top-2">
        <tr>
            <td colspan="5" class="border-start-0">
                <div class="d-flex justify-content-center gap-5 fw-bold">
                    <span class="me-5">الخبرات العملية</span>
                    <span>Work Experince</span>
                </div>
            </td>
        </tr>
        <tr class="fw-bold text-center">
            <td>
                <span class="d-block">Company Name</span>
                <span class="d-block">اسم الشركة</span>
            </td>
            <td>
                <span class="d-block">Working Duration</span>
                <span class="d-block">مدة العمل داخل الشركة</span>
            </td>
            <td>
                <span class="d-block">Monthly Salary</span>
                <span class="d-block">الراتب الشهري</span>
            </td>
            <td>
                <span class="d-block">Position</span>
                <span class="d-block">المسمى الوظيفي</span>
            </td>
            <td>
                <span class="d-block">Reason for Leaving</span>
                <span class="d-block">سبب ترك العمل</span>
            </td>
        </tr>
        @foreach (@$job_application->workExperiences ?? [] as $experience)
                <tr>
                    <td>{{ $experince->company_name }}</td>
                    <td>{{ $experince->working_duration }}</td>
                    <td>{{ $experince->monthly_salary }}</td>
                    <td>{{ $experince->position }}</td>
                    <td>{{ $experince->reason_for_leaving }}</td>
                </tr>
            @endforeach
            @for ($i = 4 - count(@$job_application->workExperiences ?? []); $i > 0; $i--)
                <tr>
                    <td class="text-center py-2"></td>
                    <td class="text-center py-2"></td>
                    <td class="text-center py-2"></td>
                    <td class="text-center py-2"></td>
                    <td class="text-center py-2"></td>
                </tr>
            @endfor
    </table>
    <table class="border-top-2">
        <tr>
            <td colspan="6" class="border-start-0">
                <div class="d-flex justify-content-center gap-5 fw-bold">
                    <span class="me-5">معلومات عامة</span>
                    <span>General Information</span>
                </div>
            </td>
        </tr>
        <tr class="fw-bold text-center">
            <td colspan="3" style="width: 50%">
                <div class="d-flex align-items-center justify-content-between gap-2">
                    <div>
                        {{ $job_application->expected_salary }}
                    </div>
                    <div class="d-flex flex-column text-end">
                        <span class="fw-bold">الراتب الشهري المتوقع</span>
                        <span class="fw-bold">Total salary range expected?</span>
                    </div>
                </div>
            </td>
            <td colspan="3" style="width: 50%">
                <div class="d-flex align-items-center justify-content-between gap-2">
                    <div>
                        {{ $job_application->position }}
                    </div>
                    <div class="d-flex flex-column text-end">
                        <span class="d-block fw-bold text-end">الوظيفة المتقدم لها؟</span>
                        <span class="d-block fw-bold text-end" dir="ltr">What type of position are you applying for?</span>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="{{ $job_application->do_you_have_health_certificate ? '3' : '6' }}">
                <div class="d-flex align-items-center justify-content-between gap-2">
                    <div>
                        {{ $job_application->do_you_have_health_certificate ? 'نعم' : 'لا' }}
                    </div>
                    <div class="d-flex flex-column text-end">
                        <span class="fw-bold">هل لديك شهادة صحية سارية</span>
                        <span class="fw-bold">Do you have a recent medical certificate?</span>
                    </div>
                </div>
            </td>
            @if ($job_application->do_you_have_health_certificate)
                <td colspan="3">
                    <div class="d-flex align-items-center justify-content-between gap-2">
                        <div>
                            {{ $job_application->health_certificate_date }}
                        </div>
                        <div class="d-flex flex-column text-end">
                            <span class="d-block fw-bold text-end">تاريخ الشهادة الصحية</span>
                            <span class="d-block fw-bold text-end" dir="ltr">Date of medical certificate</span>
                        </div>
                    </div>
                </td>
            @endif
        </tr>
        <tr>
            <td colspan="{{ !$job_application->ready_to_start ? '3' : '6' }}">
                <div class="d-flex align-items-center justify-content-between gap-2">
                    <div>
                        {{ $job_application->ready_to_start ? 'نعم' : 'لا' }}
                    </div>
                    <div class="d-flex flex-column text-end">
                        <span class="fw-bold">هل لديك الاستعداد لمباشرة العمل العمل</span>
                        <span class="fw-bold">Are you ready to work immediately</span>
                    </div>
                </div>
            </td>
            @if (!$job_application->ready_to_start)
                <td colspan="3">
                    <div class="d-flex align-items-center justify-content-between gap-2">
                        <div>
                            @lang('front.' . $job_application->starting_duration)
                        </div>
                        <div class="d-flex flex-column text-end">
                            <span class="d-block fw-bold text-end">مدة الاستعداد</span>
                            <span class="d-block fw-bold text-end" dir="ltr">Starting duration</span>
                        </div>
                    </div>
                </td>
            @endif
        </tr>
        <tr>
            <td colspan="6">
                <div class="d-flex align-items-center justify-content-between gap-2">
                    <div>
                        {{ $job_application->work_in_any_place ? 'نعم' : 'لا' }}
                    </div>
                    <div class="d-flex flex-column text-end">
                        <span class="fw-bold">هل توافق على العمل في اي محافظة</span>
                        <span class="fw-bold">Do you agree to work anywhere?</span>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="{{ $job_application->any_health_problems ? '3' : '6' }}">
                <div class="d-flex align-items-center justify-content-between gap-2">
                    <div>
                        {{ $job_application->any_health_problems ? 'نعم' : 'لا' }}
                    </div>
                    <div class="d-flex flex-column text-end">
                        <span class="fw-bold">هل لديك اي مشكلة صحية</span>
                        <span class="fw-bold">Do you have any health issues</span>
                    </div>
                </div>
            </td>
            @if ($job_application->any_health_problems)
                <td colspan="3">
                    <div class="d-flex align-items-center justify-content-between gap-2">
                        <div>
                            @lang('front.' . $job_application->health_problem)
                        </div>
                        <div class="d-flex flex-column text-end">
                            <span class="d-block fw-bold text-end">المشاكل الصحية</span>
                            <span class="d-block fw-bold text-end" dir="ltr">Health issues</span>
                        </div>
                    </div>
                </td>
            @endif
        </tr>
    </table>
</body>
</html>
