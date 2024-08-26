<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* Ensures padding and border are included in element's total width and height */
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.2;
            padding: 10px;
            /* Padding around the entire body */
            margin: 25px;
            /* Margin around the entire body */
        }

        table.personal-info {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            /* Spacing below the table */
        }

        .personal-info-left {
            vertical-align: top;
            padding-right: 20px;
            /* Space between the left and right sections */
            width: 70%;
            /* Adjust this to control the width of the left section */
        }

        .personal-info-right {
            vertical-align: top;
            text-align: right;
            /* Aligns content (including the image) to the right */
            width: 30%;
            /* Adjust this to control the width of the right section */
        }

        .personal-info-right img {
            width: 150px;
            /* Fixed width for the image */
            height: 150px;
            /* Fixed height for the image */
            object-fit: cover;
            /* Ensures the image covers the area without distortion */
        }


        h2,
        h3,
        h4 {
            margin-bottom: 6px;
            /* Spacing below headings */
        }

        p {
            margin-bottom: 2px;
            /* Spacing below paragraphs */
        }

        ul {
            margin-left: 20px;
            /* Indentation for list items */
            margin-bottom: 10px;
            /* Spacing below lists */
        }

        li {
            margin-bottom: 5px;
            /* Spacing below list items */
        }

        section {
            padding-bottom: 5px;
        }
    </style>
</head>

<body>
    <?php
    \Log::debug('Image Path:', ['path' => $resume->personal_detail->image]);
    // $image = base64_encode(file_get_contents(public_path('/upload/personal_detail_images/1808265388153857.jpeg')));
    ?>

    <table class="personal-info">
        <tr>
            <td class="personal-info-left">
                <h2>{{ $resume->name }}</h2>
                <p><strong>Phone:</strong> {{ $resume->personal_detail->phone }}</p>
                <p><strong>Email:</strong> {{ $resume->email }}</p>
                <p><strong>Address:</strong> {{ $resume->personal_detail->address }}</p>
                <p><strong>Website:</strong> <a
                        href="{{ $resume->personal_detail->website }}">{{ $resume->personal_detail->website }}</a></p>
            </td>
            <td class="personal-info-right">
                <img src="{{ $image }}" alt="Passport Photo">
            </td>
        </tr>
    </table>

    <section>
        <h3>SUMMARY</h3>
        {!! $resume->personal_detail->summary !!}
    </section>
    <hr style="border: 0.5px solid black;">

    <section>
        <h3>EDUCATION</h3>
        <table>
            @foreach ($resume->educations as $education)
                <tr>
                    <td style="width: 30%; vertical-align: top;">
                        <p>{{ \Carbon\Carbon::parse($education->start_date)->format('d-m-Y') }} -
                            {{ $education->is_role == 1 ? 'Finished' : \Carbon\Carbon::parse($education->end_date)->format('d-m-Y') }}
                        </p>
                    </td>
                    <td>
                        <h4>{{ $education->institution }}</h4>
                        <p>{{ $education->course }}</p>
                        {!! $education->course_highlight !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
    <hr style="border: 0.5px solid black;">

    <section>
        <h3>WORK EXPERIENCES</h3>
        <table>
            @foreach ($resume->work_experiences as $work_experience)
                <tr>
                    <td style="width: 30%; vertical-align: top;">
                        <p>{{ \Carbon\Carbon::parse($work_experience->start_date)->format('d-m-Y') }} -
                            {{ $work_experience->is_role == 1 ? 'Present' : \Carbon\Carbon::parse($work_experience->end_date)->format('d-m-Y') }}
                        </p>
                    </td>
                    <td>
                        <h4>{{ $work_experience->company_name }}</h4>
                        <p>{{ $work_experience->position }}</p>
                        {!! $work_experience->description !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
    <hr style="border: 0.5px solid black;">

    <section>
        <h3>SKILLS</h3>
        <table style="width: 100%;">
            @foreach ($resume->skills as $skill)
                <tr>
                    <td style="width: 30%; vertical-align: top;">
                        &nbsp;
                    </td>
                    <td style="width: 20%;">
                        {{ $skill->language }}
                    </td>
                    <td>
                        <div style="background-color: black; height: 10px; width: {{ $skill->level }}%;"></div>
                    </td>
                </tr>
            @endforeach
        </table>

    </section>
    <hr style="border: 0.5px solid black;">

    <section>
        <h3>LANGUAGES</h3>
        <table style="width: 100%;">
            @foreach ($resume->languages as $language)
                <tr>
                    <td style="width: 30%; vertical-align: top;">
                        &nbsp;
                    </td>
                    <td style="width: 20%;">
                        {{ $language->name }}
                    </td>
                    <td>
                        @if ($language->level > 90)
                            Native Speaker
                        @elseif($language->level > 80)
                            Highly Proficient
                        @else
                            Proficient
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
    <hr style="border: 0.5px solid black;">
    <section>
        <h3>REFERENCES</h3>
        <table style="width: 100%;">
            <tr>
                <td style="width: 30%; vertical-align: top;">
                    &nbsp;
                </td>
                @foreach ($resume->references as $reference)
                    <td>
                        <strong>{{ $reference->name }}</strong> <br>
                        {{ $reference->position }} <br>
                        {{ $reference->email }} <br>
                        {{ $reference->phone }}
                    </td>
                @endforeach
            </tr>
        </table>
    </section>



</body>

</html>
