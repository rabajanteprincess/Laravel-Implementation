<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resume - Princess A. Rabajante</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Montserrat", sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
        line-height: 1.6;
      }

      .resume {
        width: 90%;
        max-width: 800px;
        margin: 30px auto;
        padding: 30px;
        background-color: #fff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        transition: transform 0.3s ease;
      }

      .resume:hover {
        transform: translateY(-5px);
      }

      header h1 {
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 5px;
        color: #2c3e50;
      }

      .contact-info {
        text-align: center;
        font-size: 1rem;
        color: #7f8c8d;
        margin-bottom: 40px;
      }

      .contact-info a {
        color: #2980b9;
        text-decoration: none;
        transition: color 0.3s;
      }

      .contact-info a:hover {
        color: #1abc9c;
      }

      h2 {
        font-size: 1.75rem;
        color: #2c3e50;
        border-bottom: 2px solid #3498db;
        padding-bottom: 0.5rem;
        margin-bottom: 20px;
      }

      section {
        margin-bottom: 40px;
      }

      .objective p {
        font-size: 1.1rem;
        color: #34495e;
        line-height: 1.8;
      }

      .skills ul {
        list-style-type: none;
        padding: 0;
      }

      .skills ul li {
        font-size: 1.1rem;
        color: #34495e;
        background-color: #ecf0f1;
        padding: 10px;
        margin-bottom: 10px;
        border-left: 5px solid #3498db;
        border-radius: 4px;
      }

      .education-item {
        margin-bottom: 20px;
      }

      .education-item h3 {
        font-size: 1.3rem;
        color: #2980b9;
        margin-bottom: 5px;
      }

      .education-item p {
        font-size: 1.1rem;
        color: #34495e;
      }

      .personal-info ul {
        list-style-type: none;
        padding: 0;
      }

      .personal-info ul li {
        font-size: 1.1rem;
        color: #34495e;
        margin-bottom: 10px;
      }

      .personal-info ul li strong {
        color: #2c3e50;
      }

      @media (max-width: 768px) {
        .resume {
          width: 95%;
          padding: 20px;
        }

        header h1 {
          font-size: 2rem;
        }

        h2 {
          font-size: 1.5rem;
        }
      }
    </style>
  </head>
  <body>
    <div class="resume">
      <header>

        @foreach($info as $infos)
            <h1>{{ $infos->name }}</h1>
        @endforeach

        <p class="contact-info">
            @foreach($info as $infos)
                {{ $infos->address }}
            @endforeach
        |
        <a href="tel:09503573147">
            @foreach($info as $infos)
                {{ $infos->phone }}
            @endforeach
        </a>
        |
          <a href="mailto:rabajanteprincess@gmail.com">
            @foreach($info as $infos)
                {{ $infos->email }}
            @endforeach
        </a>
        </p>
      </header>

      <section class="objective">
        <h2>Objective</h2>
        <p>
            @foreach($objectives as $obj)
                {{ $obj->obj }}
            @endforeach
        </p>
      </section>

      <section class="skills">
        <h2>Skills</h2>
        <ul>
            @foreach($skills as $skill)
                <li>{{ $skill->skill }}</li>
            @endforeach
        </ul>
      </section>

      <section class="education">
        <h2>Educational Background</h2>
            @foreach($educations as $educ)
            <div class="education-item">
                <h3>{{ $educ->school }}</h3>
                <p>
                    @if ($educ->course)
                        {{ $educ->course }}<br />
                    @endif
                    {{ $educ->address }}<br />
                    {{ $educ->year }}
                </p>
            </div>
            @endforeach
      </section>

      <section class="personal-info">
        <h2>Personal Information</h2>
            <ul class="personal-info">
                @foreach($info as $infos)
                    <li><strong>Birthday:</strong>&nbsp;&nbsp;{{$infos->birthday }}</li>
                    <li><strong>Age:</strong>&nbsp;&nbsp;{{ $infos->age }}</li>
                    <li><strong>Place of Birth:</strong>&nbsp;&nbsp;{{ $infos->placeOfBirth }}</li>
                    <li><strong>Gender:</strong>&nbsp;&nbsp;{{ $infos->gender }}</li>
                    <li><strong>Civil Status:</strong>&nbsp;&nbsp;{{ $infos->civil }}</li>
                    <li><strong>Religion:</strong>&nbsp;&nbsp;{{ $infos->religion }}</li>
                    <li><strong>Height:</strong>&nbsp;&nbsp;{{ $infos->height }}</li>
                    <li><strong>Weight:</strong>&nbsp;&nbsp;{{ $infos->weight }}</li>
                @endforeach
            </ul>
      </section>
    </div>
  </body>
</html>
