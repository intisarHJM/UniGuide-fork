<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\University;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { //will be fed to the DB
            $universities = [
            [   'name' => 'Bahrain Polytechnic',
                'overview'=>'Bahrain Polytechnic is a government university that is located in Isa Town, it is focused on providing professional education to prepare students for the work environment',
                'requirements' => 'To be accepted in Bahrain Polytechnic the applicant must pass the initial admissions test which examines Maths and English levels, then if passed they need to provide IELTS with a minimum of 4 for foundation admissions or 4.5 for undergraduate admissions or equivalent ',
                'University_fees' => '2 BHD per credit for Bahraini students. A full time student takes 60 credits per semester therefore 120BD.',
                'available_scholarships' => 'Fee exemption for students in need',
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'images/poly2.jpg'
            ],
            [   'name' => 'Royal College of Surgeons in Ireland',
                'overview'=>'RCSI Bahrain is a private university located in Muharraq, it is specialized in providing high quality healthcare education including medicine and nursing programs.',
                'requirements' => ' Applicant must demonstrate strong academic performance and provide IELTS score of at least 6.5 overall. Relevant experience in healthcare settings and voluntary experience is required.',
                'University_fees' => ' Medicine: 14,900 BHD/year  (Bahraini students), 18,600 BHD  (Non-Bahraini students). Nursing: 4,500 BHD/year  (Bahraini students),  5,700  (Non-Bahraini students)',
                'available_scholarships' => 'RCSI offers merit based scholerships. Medicine Scholarships provides up to  one-third disscount on tution fees, while Nursing scholarship covers the gull tuitoin fees. Applocats must meet a high academic requirements, submit a 200 word essay and attend an interview.',
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'images/RCSI2.jpg'
            ],
            [
                'name' => 'Gulf University',
                'overview'=>'Gulf university is a private university located in Sanad, it is focused on providing a flexible schedule to give an opportunity for employees to complete their studies.',
                'requirements' => ' Applicant must take an initial admission tests, it has a flexible acceptance policy.',
                'University_fees' => ' Fees defers depending on the major. A 100 BHD/Hour or 180BHD/Hour.',
                'available_scholarships' => 'Gulf University provides a GPA-Based scholarships that offers tuition fee discounts. Students must maintain a GPA more than 2.33, Scholarships apply to credit hour fees only and do not cover additional costs such as application or exam fees.',
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'images/GULF.jpg'
            ],
            [
                'name' => 'University of Technology',
                'overview'=>'UTB is a private university previously known as AMA and is located in Salmabad.',
                'requirements' => ' Applicant must take an initial admission test, an IELTS score of 5.0 or its equivalent and a minimum GPA of 60%.',
                'University_fees' => 'Tuition fees: 75 BHD per credit. Registration fees: 50 BHD/semester. Technology Fees: 30 BHD/semester.',
                'available_scholarships' => 'UTB provides three scholarships. First is a GPA-Based scholarships that offers tuition fee discounts up to 30% the GPA must stay 3.5 and above. Second is a corporate based for the staff and their children and it goes up to 25%. Third is athletics scholarships and it is determined after the universities approval.',
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'images/UTB2.jpg'
            ],
            [
                'name' => 'American University of Bahrain',
                'overview'=>'The American University of Bahrain is a private university ans is located in Riffa, it is a comprehensive purpose-built, American-model co-educational University. The university offers a holistic educational experience for students and a unique curriculum that fosters interaction and collaboration among students, faculty, and the professional community.',
                'requirements' => 'Applicants can be accepted with full, conditional, or provisional admission, depending on their academic background and the documents they send in. To get full admission, you have to meet all of the academic and document requirements. You can get conditional admission until you send in the missing documents. Students who show promise but may need to finish foundation or English programs can get provisional admission. Applicants must send in a high school transcript, proof of English proficiency, and any other documents that are needed.',
                'University_fees' => 'Tuition fees: 200 BHD per credit. Students activities fees: 110 BHD/semester. Technology Fees: 50 BHD/semester. Seat reservation deposit: 600 BHD/semester and it is deduced from the tuition fees.',
                'available_scholarships' => 'AUBH offers a range of scholarships, such as full scholarships for top Bahraini students, academic scholarships based on GPA, and talent-based awards for leadership, sports, or community service. The school also gives discounts to siblings and alumni scholarship for their students who wish to finish their masters. Depending on eligibility and performance, scholarship coverage can be anywhere from partial to full tuition.',
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'images/AUBH2.jpg'
            ],

            [
                'name' => 'Arabian Gulf University',
                'overview'=>'Arabian Gulf University is a public university located in Manama,specialized in providing high quality education in medicine, health sciences, education, and technology programs for students across the Gulf region.',
                'requirements' => 'To be accepted at Arabian Gulf University, applicants must be GCC citizens nominated by the Ministry of Education or Higher Education, complete the application process with all required documents, successfully pass the personal interview, and be medically fit. Non-GCC Arab residents in GCC countries may apply through the fee-paying system and must pay the required tuition fees before the beginning of studies.',
                'University_fees' => 'Medicine (M.D.): 18,300 BHD/year with a 5% annual increase. Nursing: 4,000 BHD/year.',
                'available_scholarships' => 'Scholarship opportunities for Bahraini students in Medicine and Nursing at AGU are usually available through the Ministry of Education or GCC-funded seats. GCC scholarship students must apply through their Ministry of Education, while self-funded students can apply directly through the university.',
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'images/AGU.jpg'
            ],
            [
                'name' => 'Royal University for Women',
                'overview' => 'Royal University for Women is a private university located in Riffa, dedicated to providing high-quality education for women in fields such as art and design, business, law, engineering, technology, and digital media.',
                'requirements' => 'To be accepted at Royal University for Women, applicants must demonstrate English language proficiency through IELTS with a minimum score of 5.5, TOEFL, or the university placement test. Some programs may require interviews, portfolios, or additional documents. Applicants to Business programs must achieve at least 60% in Mathematics, while Architecture applicants from the scientific stream must achieve at least 60% in Mathematics and Physics.',
                'University_fees' => 'Art and Design programs: 180 BHD per credit hour. Architecture and Digital Media programs: 190 BHD per credit hour. Business programs: 160 BHD per credit hour. Law programs: 180 BHD per credit hour. Information Technology programs: 170 BHD per credit hour.',
                'available_scholarships' => 'Royal University for Women offers limited financial aid and partial tuition scholarships for outstanding students. Applicants with a secondary school average of 85% or above may apply for scholarships. Scholarships are awarded based on academic performance, financial need, and approval by the scholarship committee.',
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'images/RUW.jpg'

            ],
            [
                'name' => 'Ahlia University',
                'overview' => 'Ahlia University is a private university located in Manama, offering high-quality education in arts, business, engineering, information technology, medical and health sciences, media, and design programs.',
                'requirements' => 'To be accepted at Ahlia University, applicants must meet the minimum admission requirements depending on the selected program and demonstrate English language proficiency through IELTS, TOEFL, or the university placement test. Some programs may require personal interviews, aptitude tests, portfolios, or medical fitness forms. Medical and health science programs require students from the scientific stream with a minimum average of 80% and successful completion of an interview.',
                'University_fees' => 'Application fee: 20 BHD. Registration fee: 200 BHD. Undergraduate tuition fees vary depending on the program and course level, ranging from 300 BHD to 390 BHD per course. Physiotherapy program fees range from 4,100 BHD to 6,040 BHD per year, while Nutrition and Dietetics program fees range from 3,600 BHD to 5,550 BHD per year.',
                'available_scholarships' => 'Ahlia University offers scholarships and financial aid for students based on academic achievement and special categories. Students with a high school average of 95% or above may receive a 50% scholarship, 90% or above may receive 25%, and 80% or above may receive 20%. Special scholarships are also available for orphans and students with special needs.',
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'images/AU.jpg'
            ],
            [

                'name' => 'Applied Science University',
                'overview' => 'Applied Science University is a private university located in Sitra, offering academic programs in business, law, computer science, engineering, design, and arts with a focus on practical and applied education.',
                'requirements' => 'To be accepted at Applied Science University, applicants must achieve a minimum average of 60%. Applicants with lower averages may still be considered in special cases such as athletes, artists representing Bahrain, or students with work experience. Applicants must complete the university English placement test unless they achieve IELTS 5.0 or TOEFL 450 or above. Some programs such as Law, Design, and Engineering may require interviews, aptitude assessments, or remedial courses depending on the selected major.',
                'University_fees' => 'Tuition fees vary depending on the selected program and department. Engineering programs include Electrical and Electronic Engineering, Mechanical Engineering, Architectural Engineering, and Civil Engineering. Civil and Architectural Engineering programs are validated by London South Bank University (LSBU) in the UK and provide dual certification opportunities.',
                'available_scholarships' => 'Applied Science University may offer scholarships and financial support for outstanding students based on academic achievement and university policies. Students with strong academic performance and special talents may qualify for financial assistance or partial tuition support.',
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'images/ASU.jpg'

            ],
            [

            'name' => 'University of Bahrain',
            'overview'=>'The University of Bahrain (UoB) is a public university established in 1986 and is the largest higher-education institution in the Kingdom of Bahrain, serving over 30,000 students across multiple campuses and nine colleges in fields such as engineering, business, IT, law, and health sciences.',
            'requirements' => 'Applicants must hold a secondary school certificate or its equivalent with a minimum cumulative GPA of 70%, obtained within the last year, and must not be enrolled in any other higher‑education institution; they may also need to take aptitude tests or interviews depending on the program.',
            'University_fees' => 'Undergraduate tuition is heavily subsidized for Bahraini nationals and typically starts around 250 BHD per year, while international students generally pay significantly higher fees, often starting around 2,200 BHD per year depending on the program.',
            'available_scholarships' => 'The University of Bahrain awards fully funded study‑abroad missions for selected Bahraini students and staff, covering tuition, monthly stipends, travel, insurance, and related costs; recipients must be Bahraini nationals, meet academic and professional criteria, and serve at the university for a period at least equal to or double the mission duration depending on category.',
            'created_at' => now(),
            'updated_at' => now(),
            'image' => 'images/UoB.jpg'

            ],
            [
            'name' => 'Bahrain Institute of Banking and Finance',
            'overview' => 'The Bahrain Institute of Banking and Finance (BIBF) is a leading specialized institute in Bahrain that offers British accredited degrees in banking, finance, economics, and management through partnerships with renowned UK universities such as the University of London, Bangor University, and the University of Strathclyde, along with professional programs in Islamic banking, insurance, FinTech, and digital transformation.',
            'requirements' => 'Applicants typically need a good secondary school GPA (often above 80%), a strong English language score on IELTS or TOEFL due to full English instruction following British standards, and may be required to pass an entrance exam or personal interview conducted by the institute.',
            'University_fees' => 'Annual tuition fees at BIBF are among the highest in Bahrain, ranging approximately from 3,500 to 4,500 BHD per year depending on the UK partner university and the number of modules; additional registration and textbook fees are paid to the British partner universities, while professional courses (such as CFA or ACCA-linked programs) have separate fees that vary by duration and certification level.',
            'available_scholarships' => 'BIBF offers partial merit based scholarships for high achieving students, and several Bahraini banks sponsor employees or their children to study there, along with access to an international UK accredited degree and a world class Bloomberg equipped Dealing Room for practical trading experience.',
            'created_at' => now(),
            'updated_at' => now(),
            'image' => 'images/BIBF.jpg'
            ],[
            'name' => 'Kingdom University',
            'overview' => 'Kingdom University (KU) is a leading private university in Bahrain, founded in 2001, offering accredited bachelor\'s and master\'s programs in engineering, architecture, business, law, and information technology on a modern campus in Riffa, with a focus on practical, career-oriented education and international standards.',
            'requirements' => 'Applicants must hold a secondary school certificate or equivalent recognized by the Bahraini Ministry of Education, with a minimum required GPA (often around 70-80% depending on the program), provide original transcripts, and meet English language requirements through IELTS, TOEFL, or KU\'s internal test; some programs may require additional documents or interviews.',
            'University_fees' => 'Annual tuition at Kingdom University varies by program and level, typically ranging from about 1,500 to 3,000 BHD per year for most undergraduate programs after partial scholarships, with higher fees for some engineering and business tracks; additional services such as registration and facilities are charged separately, and payment can be split into flexible installments over the semester.',
            'available_scholarships' => 'Kingdom University offers partial merit-based scholarships (around 25-40% off tuition) for high achieving students in several programs, along with flexible payment plans and extra discounts for alumni, making private university education in Bahrain more accessible.',
            'created_at' => now(),
            'updated_at' => now(),
            'image' => 'images/KU.jpg'
        ],[
            'name' => 'British University of Bahrain',
            'overview' => 'The British University of Bahrain (BUB) is a private university offering UK accredited bachelor\'s degrees awarded by the University of Salford, Manchester, in fields such as business, accounting, law, engineering, computer science, architecture, interior design, and psychology, with recognition from the Higher Education Council of Bahrain and other regional ministries.',
            'requirements' => 'Applicants must have completed secondary education or an equivalent 12 year schooling system, meet the minimum GPA and subject requirements, and provide English language proficiency (IELTS/TOEFL or internal test) since instruction follows British standards and is delivered in English.',
            'University_fees' => 'Annual tuition for most UK degree bachelor programs is around 7,000 BHD per year, paid in two or four instalments, with a one time registration fee of 250 BHD and an application fee of 50 BHD; fees are fully inclusive of tuition, facilities, and registration with the University of Salford, with no extra “hidden” charges.',
            'available_scholarships' => 'BUB offers academic bursaries and scholarships (up to about 25-30% off tuition) for high achieving Bahraini and GCC students, as well as partnership scholarships with foundations such as AlMabarrah AlKhalifia, along with flexible payment plans and prompt payment discounts.',
            'created_at' => now(),
            'updated_at' => now(),
            'image' => 'images/BUBH.jpg'
        ],[
        'name' => 'Arab Open University',
        'overview' => 'The Arab Open University (AOU) is a regional open university system with a branch in Bahrain, offering accredited bachelor and postgraduate programs in business, English, computer studies including IT, Cyber Security, AI, and Data Science, and education, using a flexible open learning model with blended online and in person support.',
        'requirements' => 'Applicants must hold a recognized secondary school certificate or equivalent accredited by the Bahraini Ministry of Education, meet the minimum GPA and subject requirements for the chosen program, and pass an English language placement test or provide an accepted English proficiency score such as IELTS or TOEFL for English taught programs.',
        'University_fees' => 'Total tuition for a four year bachelor program such as Business Administration is typically around 5,100 to 5,200 BHD for the full degree, paid across eight semesters, plus additional one time fees for orientation, registration, application, and graduation, with exact amounts depending on the specific program and course credit charges.',
        'available_scholarships' => 'AOU Bahrain offers various fee reduction schemes and bursaries for high achieving students, partnership support programs, and flexible payment plans to spread the tuition cost over semesters, helping make distance and open learning programs more accessible in Bahrain.',
        'created_at' => now(),
        'updated_at' => now(),
        'image' => 'images/AOU.jpg'
    ]

                ];

        foreach($universities as $uni){
            University::updateOrCreate(['name'=> $uni ['name']],$uni);
        }

    }
}
