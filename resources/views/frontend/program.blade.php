@extends('frontend.master')
@section('program')
    <div class="container mb-5">
        <h3>Emergence of CADT</h3>
        <p>
            CADT is patronized by a group of philanthropists, activists and
            reputed corporate houses of Bangladesh in response of the
            greater societal responsibility. It aims to explore value-based
            knowledge and skills to devise human and social progress in line
            of the national and community development agenda. CADT manifests
            its major scope of work as follows.
        </p>
    </div>
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'firstTab')" id="defaultOpen">Understanding Quran for You (UQ4U)</button>
        <button class="tablinks" onclick="openTab(event, 'secondTab')">Rethinking Zakat for the Poor (Momota Kendro)</button>
        <button class="tablinks" onclick="openTab(event, 'thirdTab')">Nurturing the Way of Life (ALIPA)</button>
    </div>

    <div id="firstTab" class="tabcontent">
        <h3>Understanding Quran for You (UQ4U)</h3>
        <hr/>
        <p>
          <br>
            There is no research driven and second language acquisition-
            based learning to understand Al-Quran for Bangla speaking

            people. CADT is undertaking this challenging job first time ever
            in Bangladesh by developing a Cambridge inspired curriculum to
            help you to learn the tale of Allah (SWT) in Arabic, Bangla and
            English. It is not going to be a translated script rather than
            a toolkit to understand Al-Quran in the Quranic language. You
            do not need to have Arabic proficiency or, get admission in a
            course. You just need to recite this tailor-made script with
            Al-Quran side by side regularly and, you will make a difference
            soon, InShaAllah.
            CADT has developed the
            first draft script of
            para (juz) 1-5 till
            today. It is validated by
            a trial batch with more
            than 200 hours lesson
            practice. Recognizing
            the inspirational
            outcome, CADT is
            reviewing the draft to
            solidify the prototype
            to get feedback from the
            larger clientele.
            Considering the unique
            nature of the domain,
            CADT is investing
            resources to develop its
            own talent pool and
            infrastructure to
            optimize the expected result. CADT also have a plan to diversify
            its portfolio to achieve organizational sustainability by
            generating revenue and cultivating meaningful collaboration.</p>
    </div>

    <div id="secondTab" class="tabcontent">
        <h3>Rethinking Zakat for the Poor (Momota Kendro)</h3>
        <hr/>
        <p>The use of Zakat to alleviate poverty in Bangladesh is not
            fortified enough by the given process and evidence. The
            fulfilment of the Zakat purpose (Maqasid Al Shariah) is also
            unclear in the current practices.
            Counting the divine decree and issue set, CADT is testing a
            framework-based Zakat application (Momota Kendro) to design a
            market oriented and Islamic compliant model. It aims to define
            localized poverty alleviation, Zakat eligibility and, develop a
            family centred self-reliant model using Zakat.

            Currently, CADT is

            mobilizing nearly 400 male-
            female in three villages at

            Fultala, Khulna. They will
            invest their own two million
            taka with a growing Zakat
            fund over the next three

            years to become self-
            supporting families. CADT is

            raising a Zakat fund of 30
            million taka from the kind
            hearts who believe in
            rewards from Allah (SWT).
            Momota Kendro intends to
            demonstrate how to use Zakat
            following a verified,
            accountable and replicable
            set of process to change
            lives of Zakat eligible families. It will have an eloquent
            impact on the societal
            eco-system to make a just
            and hunger-free
            Bangladesh.
            CADT is also looking for
            co-operative and income
            generating ventures to
            shift paradigm from
            donation-based entity to
            self-independent CADT.</p>
    </div>

    <div id="thirdTab" class="tabcontent">
        <h3>Nurturing the Way of Life (ALIPA)</h3>
        <hr/>
        <p>The Academy of Leadership, Innovation and Practice Area (ALIPA)
            is the front-line platform to widening and deepening CADT’s
            scope of work across the country. The history of human race is
            nothing but a saga of helping each other. Being human, everyone
            should act for a cause of others. Allah (SWT) says in the holy
            Quran:
            ‘You are the best community ever raised for humanity-you
            encourage good, forbid evil, and believe in Allah..’ (Surah Al
            Imran, 3:110)
            ALIPA is planning to provide 3600 services on all types of
            Islamic applications and capacity building on Zakat, Waqf, Fiqh,
            Sukuk, Islamic Finance, Insurance, Capital Market, Shariah
            Review, Peace Building, Talent Grooming, Publications etc. CADT
            have a view to institutionalize and internationalize all of its
            innovations and learnings for the all walks of life.
            Currently, ALIPA is offering paid fellowship to the young
            graduates from all knowledge branches to equip them with new
            skills and worldview. ALIPA has a growing collection of books
            and reference kits on different subject matters to attract
            everyone’s interest.</p>
    </div>

<style>
    * {box-sizing: border-box}
    body {font-family: "Lato", sans-serif;}

    .tab {
        float: left;
        border: 1px solid #ccc;
        background-color: #dfe8eb;
        width: 30%;
        height: 400px;
        border-radius: 10px 0 0 10px;
    }

    .tab button {
        display: block;
        background-color: inherit;
        color: black;
        padding: 22px 16px;
        width: 90%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
        font-size: 17px;
        margin: 5%;
        border-radius: 4px;
    }

    .tab button:hover {
        background-color: #bee9f7;
    }

    .tab button.active {
        background-color: #6398a8;
    }

    .tabcontent {
        float: left;
        padding: 0px 12px;
        /*border: 1px solid #ccc;*/
        width: 70%;
        border-left: none;
        height: 400px;
        border-radius: 0 10px 10px 0;
    }
</style>
    <script>
        function openTab(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        document.getElementById("defaultOpen").click();
    </script>
@endsection()
