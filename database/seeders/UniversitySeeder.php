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
                'name' => 'University of Bahrain',
                'overview'=>'university in sekeer',
                'requirements' => '',
                'University_fees' => '',
                'available_scholarships' => '',
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'images/UoB.jpg'
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

            ]

         ];

        foreach($universities as $uni){
            University::updateOrCreate(['name'=> $uni ['name']],$uni);
        }

    }
}
