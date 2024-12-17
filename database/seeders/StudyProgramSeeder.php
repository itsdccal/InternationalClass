<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StudyProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            [
                'study_program_Name' => 'PENDIDIKAN DOKTER - S1',
                'ID_Faculty' => 3,
                'study_program_Image' => $this->storeImage('FK-unhas.png'),
                'study_program_Description' =>
                    "The Medical Education program provides comprehensive training with a curriculum to develop professional medical practitioners. Students gain knowledge, skills, and attitudes through theoretical studies and clinical training.",
                'degree' => 'Undergraduate',
                'classrooms' => 20,
                'lecturers' => 50,
                'national_accreditation' => 'A',
                'international_accreditation' => 'WFME',
                'approval_sk' => 'SK123',
                'opening_year' => 1985,
                'manager_name' => 'Dr. John Doe',
                'manager_contact' => '081234567890',
                'ukt_fee' => 15000000,
                'ipi_fee' => 10000000,
                'international_exposure' => 'Student Exchange Program',
            ],
            [
                'study_program_Name' => 'PENDIDIKAN DOKTER GIGI - S1',
                'ID_Faculty' => 10,
                'study_program_Image' => $this->storeImage('doktergigi.png'),
                'study_program_Description' =>
                    "The Dentistry Education program develops skilled professionals to diagnose, treat, and prevent oral diseases. The curriculum combines academic excellence with clinical practice for high-quality oral healthcare.",
                'degree' => 'Undergraduate',
                'classrooms' => 10,
                'lecturers' => 30,
                'national_accreditation' => 'A',
                'international_accreditation' => 'FDI',
                'approval_sk' => 'SK124',
                'opening_year' => 1990,
                'manager_name' => 'Dr. Jane Smith',
                'manager_contact' => '081234567891',
                'ukt_fee' => 14000000,
                'ipi_fee' => 9000000,
                'international_exposure' => 'Joint Research Projects',
            ],
            [
                'study_program_Name' => 'ILMU KEPERAWATAN - S1',
                'ID_Faculty' => 15,
                'study_program_Image' => $this->storeImage('keperawatan.png'),
                'study_program_Description' =>
                    "The Nursing Science program trains compassionate, competent nurses to provide care for individuals, families, and communities. It emphasizes health sciences, nursing ethics, and practical experiences in healthcare settings.",
                'degree' => 'Undergraduate',
                'classrooms' => 15,
                'lecturers' => 35,
                'national_accreditation' => 'A',
                'international_accreditation' => 'ICN',
                'approval_sk' => 'SK125',
                'opening_year' => 1995,
                'manager_name' => 'Dr. Ahmad Fauzan',
                'manager_contact' => '081234567892',
                'ukt_fee' => 12000000,
                'ipi_fee' => 8000000,
                'international_exposure' => 'Clinical Internship Abroad',
            ],
            [
                'study_program_Name' => 'KESEHATAN MASYARAKAT - S1',
                'ID_Faculty' => 11,
                'study_program_Image' => $this->storeImage('kesmas.png'),
                'study_program_Description' =>
                    "The Public Health program educates future leaders to tackle global health challenges. The curriculum covers epidemiology, health promotion, environmental health, and policy, equipping students to improve population health.",
                'degree' => 'Undergraduate',
                'classrooms' => 20,
                'lecturers' => 40,
                'national_accreditation' => 'A',
                'international_accreditation' => 'ASPHER',
                'approval_sk' => 'SK126',
                'opening_year' => 1998,
                'manager_name' => 'Dr. Siti Aisyah',
                'manager_contact' => '081234567893',
                'ukt_fee' => 13000000,
                'ipi_fee' => 8500000,
                'international_exposure' => 'Global Health Exchange',
            ],
            [
                'study_program_Name' => 'TEKNIK SIPIL - S1',
                'ID_Faculty' => 4,
                'study_program_Image' => $this->storeImage('sipil.png'),
                'study_program_Description' =>
                    "The Civil Engineering program offers robust training in designing, constructing, and maintaining infrastructure. Students study structural analysis, geotechnical engineering, and sustainable practices, preparing for urban development projects.",
                'degree' => 'Undergraduate',
                'classrooms' => 25,
                'lecturers' => 45,
                'national_accreditation' => 'A',
                'international_accreditation' => 'ABET',
                'approval_sk' => 'SK127',
                'opening_year' => 1975,
                'manager_name' => 'Prof. Bambang Sutrisno',
                'manager_contact' => '081234567894',
                'ukt_fee' => 11000000,
                'ipi_fee' => 7500000,
                'international_exposure' => 'Dual Degree Program',
            ],
            [
                'study_program_Name' => 'TEKNIK INFORMATIKA - S1',
                'ID_Faculty' => 4,
                'study_program_Image' => $this->storeImage('infor.png'),
                'study_program_Description' =>
                    "The Informatics Engineering program is designed to prepare students for careers in the ever-evolving field of information technology. With a strong focus on software development, artificial intelligence, and cybersecurity, the program equips graduates with the technical expertise and problem-solving skills needed to excel in the tech industry.",
                'degree' => 'Undergraduate',
                'classrooms' => 30,
                'lecturers' => 50,
                'national_accreditation' => 'A',
                'international_accreditation' => 'ABET',
                'approval_sk' => 'SK128',
                'opening_year' => 2000,
                'manager_name' => 'Dr. Dian Kurniawan',
                'manager_contact' => '081234567895',
                'ukt_fee' => 12500000,
                'ipi_fee' => 9000000,
                'international_exposure' => 'Tech Innovation Partnership',
            ],[
                'study_program_Name' => 'TEKNIK ARSITEKTUR - S1',
                'ID_Faculty' => 4,
                'study_program_Image' => $this->storeImage('arsitektur.png'),
                'study_program_Description' =>
                    'The Architecture program focuses on designing and constructing buildings and structures. Students explore architectural theory, history, and technology, preparing for careers in sustainable designs that integrate functionality, aesthetics, and environmental considerations.',
                'degree' => 'Undergraduate',
                'classrooms' => 20,
                'lecturers' => 30,
                'national_accreditation' => 'A',
                'international_accreditation' => 'None',
                'approval_sk' => 'SK129',
                'opening_year' => 1985,
                'manager_name' => 'Prof. Ahmad Zaki',
                'manager_contact' => '081234567896',
                'ukt_fee' => 13000000,
                'ipi_fee' => 8500000,
                'international_exposure' => 'Design Competition Abroad',
            ],
            [
                'study_program_Name' => 'TEKNIK GEOLOGI - S1',
                'ID_Faculty' => 4,
                'study_program_Image' => $this->storeImage('geo.png'),
                'study_program_Description' =>
                    'The Geology program trains students to study Earth’s structure and processes. It covers mineralogy, petrology, sedimentology, and geophysics, preparing graduates to explore resources and address environmental challenges with a focus on sustainability.',
                'degree' => 'Undergraduate',
                'classrooms' => 15,
                'lecturers' => 25,
                'national_accreditation' => 'A',
                'international_accreditation' => 'None',
                'approval_sk' => 'SK130',
                'opening_year' => 1990,
                'manager_name' => 'Dr. Yudi Santoso',
                'manager_contact' => '081234567897',
                'ukt_fee' => 11000000,
                'ipi_fee' => 7000000,
                'international_exposure' => 'Field Research Partnership',
            ],
            [
                'study_program_Name' => 'ILMU HUKUM - S1',
                'ID_Faculty' => 2,
                'study_program_Image' => $this->storeImage('FH-UNHAS-10.png'),
                'study_program_Description' =>
                    'The Law program provides an understanding of legal principles and practices. It prepares students for careers in litigation, corporate law, public policy, and more. The curriculum emphasizes ethical reasoning, critical thinking, and international law, covering civil, criminal, and constitutional law.',
                'degree' => 'Undergraduate',
                'classrooms' => 25,
                'lecturers' => 40,
                'national_accreditation' => 'A',
                'international_accreditation' => 'None',
                'approval_sk' => 'SK131',
                'opening_year' => 1970,
                'manager_name' => 'Prof. Dian Sulastri',
                'manager_contact' => '081234567898',
                'ukt_fee' => 14000000,
                'ipi_fee' => 9500000,
                'international_exposure' => 'Moot Court Competitions',
            ],
            [
                'study_program_Name' => 'ILMU HUBUNGAN INTERNASIONAL - S1',
                'ID_Faculty' => 5,
                'study_program_Image' => $this->storeImage('hi.png'),
                'study_program_Description' =>
                    'The International Relations program covers political, economic, and cultural interactions between nations, focusing on diplomacy, human rights, and conflict resolution, preparing students for careers in government, NGOs, or international business.',
                'degree' => 'Undergraduate',
                'classrooms' => 20,
                'lecturers' => 35,
                'national_accreditation' => 'A',
                'international_accreditation' => 'None',
                'approval_sk' => 'SK132',
                'opening_year' => 1995,
                'manager_name' => 'Dr. Fatma Hidayat',
                'manager_contact' => '081234567899',
                'ukt_fee' => 13000000,
                'ipi_fee' => 8500000,
                'international_exposure' => 'Global Forum Participation',
            ],
            [
                'study_program_Name' => 'ILMU KOMUNIKASI - S1',
                'ID_Faculty' => 5,
                'study_program_Image' => $this->storeImage('ilkom.png'),
                'study_program_Description' =>
                    'The Communication Studies program covers communication theory, media studies, journalism, and public relations. Students develop skills in writing, speaking, and media production for careers in media, advertising, corporate communication, and public relations.',
                'degree' => 'Undergraduate',
                'classrooms' => 18,
                'lecturers' => 28,
                'national_accreditation' => 'A',
                'international_accreditation' => 'None',
                'approval_sk' => 'SK133',
                'opening_year' => 1998,
                'manager_name' => 'Dr. Rina Amalia',
                'manager_contact' => '081234567800',
                'ukt_fee' => 12500000,
                'ipi_fee' => 8200000,
                'international_exposure' => 'Media Training Workshops',
            ],
            [
                'study_program_Name' => 'MANAJEMEN - S1',
                'ID_Faculty' => 1,
                'study_program_Image' => $this->storeImage('Fakultas-Ekonomi-dan-Bisnis.png'),
                'study_program_Description' =>
                    'The Management program equips students with skills to lead and manage organizations. It covers organizational behavior, strategy, HR management, and finance, preparing students for leadership roles in various industries.',
                'degree' => 'Undergraduate',
                'classrooms' => 30,
                'lecturers' => 50,
                'national_accreditation' => 'A',
                'international_accreditation' => 'AACSB',
                'approval_sk' => 'SK134',
                'opening_year' => 1975,
                'manager_name' => 'Dr. Agus Setiawan',
                'manager_contact' => '081234567801',
                'ukt_fee' => 12000000,
                'ipi_fee' => 9000000,
                'international_exposure' => 'Business Case Competitions',
            ],
            [
                'study_program_Name' => 'AKUTANSI - S1',
                'ID_Faculty' => 1,
                'study_program_Image' => $this->storeImage('Fakultas-Ekonomi-dan-Bisnis.png'),
                'study_program_Description' =>
                    'The Accounting program teaches financial and managerial accounting principles, including reporting, auditing, taxation, and systems. It prepares students for careers in accounting, finance, and business analysis, emphasizing ethics and decision-making.',
                'degree' => 'Undergraduate',
                'classrooms' => 25,
                'lecturers' => 45,
                'national_accreditation' => 'A',
                'international_accreditation' => 'IFAC',
                'approval_sk' => 'SK135',
                'opening_year' => 1980,
                'manager_name' => 'Dr. Budi Prasetyo',
                'manager_contact' => '081234567802',
                'ukt_fee' => 12500000,
                'ipi_fee' => 8500000,
                'international_exposure' => 'Financial Reporting Training',
            ],
            [
                'study_program_Name' => 'SISTEM INFORMASI - S1',
                'ID_Faculty' => 8,
                'study_program_Image' => $this->storeImage('Fakultas-Ekonomi-dan-Bisnis.png'),
                'study_program_Description' =>
                    '(PRODI TESTING) The Information Systems program focuses on integrating business and technology. It provides a strong foundation in systems analysis, database management, and IT governance, preparing students for careers in business technology management.',
                'degree' => 'Undergraduate',
                'classrooms' => 20,
                'lecturers' => 40,
                'national_accreditation' => 'A',
                'international_accreditation' => 'AACSB',
                'approval_sk' => 'SK136',
                'opening_year' => 2010,
                'manager_name' => 'Dr. Rika Susanti',
                'manager_contact' => '081234567803',
                'ukt_fee' => 11000000,
                'ipi_fee' => 7500000,
                'international_exposure' => 'Industry Collaboration Projects',
            ],
        ];

        DB::table('study_programs')->insert($programs);
    }
    private function storeImage($fileName)
    {
        $sourcePath = public_path("images/studyprogram/$fileName");
        

        if (file_exists($sourcePath)) {
            Storage::disk('public')->putFileAs('images/studyprogram', $sourcePath, $fileName);

            return 'images/studyprogram/'.$fileName;
        }

        return null; 
    }
}
