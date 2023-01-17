<?php

namespace Database\Seeders;

use App\Models\ManagerMessage;
use App\Models\SectionItem;
use App\Models\Slider;
use Illuminate\Database\Seeder;

class DataDumpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::insert([
            "location" => "1",
            "path" => "assets/images/slider/1.jpg",
            "tr_title" => "Proje",
            "en_title" => "Project"
        ]);

        Slider::insert([
            "location" => "2",
            "path" => "assets/images/slider/2.jpg",
            "tr_title" => "Yönetim",
            "en_title" => "Management"
        ]);

        Slider::insert([
            "location" => "3",
            "path" => "assets/images/slider/3.jpg",
            "tr_title" => "Denetim",
            "en_title" => "Audit"
        ]);

        Slider::insert([
            "location" => "4",
            "path" => "assets/images/slider/4.jpg",
            "tr_title" => "Eğitim",
            "en_title" => "Education"
        ]);

        ManagerMessage::insert([
            "tr_message" => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>",
            "en_message" => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>",
            "name" => "CEO Name Surname",
        ]);

        SectionItem::create([
            "type" => 1,
            "tr_text" => "Proje yönetimi",
            "en_text" => "Project management"
        ]);

        SectionItem::create([
            "type" => 1,
            "tr_text" => "İş geliştirme",
            "en_text" => "Business development"
        ]);

        SectionItem::create([
            "type" => 1,
            "tr_text" => "Müşterek üretim çözümleri",
            "en_text" => "Co-production solutions"
        ]);

        SectionItem::create([
            "type" => 1,
            "tr_text" => "Ortaklıklar kurulması",
            "en_text" => "Establishing partnerships"
        ]);

        SectionItem::create([
            "type" => 1,
            "tr_text" => "Sanayi katılımı",
            "en_text" => "Industry participation"
        ]);
        SectionItem::create([
            "type" => 1,
            "tr_text" => "Halkla ilişkiler ve imaj yaratmak",
            "en_text" => "Public relations and image creation"
        ]);
        SectionItem::create([
            "type" => 1,
            "tr_text" => "Tanıtım Hizmetleri",
            "en_text" => "Promotion Services"
        ]);

        SectionItem::create([
            "type" => 2,
            "tr_text" => "Kalite ve yönetim sistemleri",
            "en_text" => "Quality and management systems"
        ]);

        SectionItem::create([
            "type" => 2,
            "tr_text" => "Kurumsal ve bireysel gelişim eğitimleri",
            "en_text" => "Institutional and individual development trainings"
        ]);

        SectionItem::create([
            "type" => 2,
            "tr_text" => "Resmi ve Sivil Toplum Kuruluşları ile işbirliği yaparak halk eğitimine yönelik konferanslar,paneller,sempozyumlar düzenleme",
            "en_text" => "Organizing conferences, panels, symposiums for public education in cooperation with official and non-governmental organizations"
        ]);

        SectionItem::create([
            "type" => 2,
            "tr_text" => "Eğitim danışmanlığı",
            "en_text" => "Education consultancy"
        ]);

        SectionItem::create([
            "type" => 3,
            "tr_text" => "İş yönetimi",
            "en_text" => "Work management"
        ]);

        SectionItem::create([
            "type" => 3,
            "tr_text" => "İnsan kaynakları yönetimi",
            "en_text" => "Human Resources Management"
        ]);

        SectionItem::create([
            "type" => 3,
            "tr_text" => "Kurumsal yönetim",
            "en_text" => "Corporate governance"
        ]);

        SectionItem::create([
            "type" => 3,
            "tr_text" => "Performans yönetimi",
            "en_text" => "Performance management"
        ]);

        SectionItem::create([
            "type" => 3,
            "tr_text" => "Verimlilik yönetimi",
            "en_text" => "Productivity management"
        ]);

        SectionItem::create([
            "type" => 3,
            "tr_text" => "Müsteri ilişkileri yönetimi",
            "en_text" => "Customer relations management"
        ]);

        SectionItem::create([
            "type" => 3,
            "tr_text" => "İsraf yönetimi",
            "en_text" => "Waste management"
        ]);

        SectionItem::create([
            "type" => 3,
            "tr_text" => "Stres yönetimi",
            "en_text" => "Stress management"
        ]);

        SectionItem::create([
            "type" => 4,
            "tr_text" => "Kurum içi denetim",
            "en_text" => "Internal audit"
        ]);

        SectionItem::create([
            "type" => 4,
            "tr_text" => "Risk değerlendirme faaliyetleri ve raporlamalar",
            "en_text" => "Risk assessment activities and reporting"
        ]);

        SectionItem::create([
            "type" => 4,
            "tr_text" => "Bilgi güvenliği denetimi",
            "en_text" => "Information security audit"
        ]);

        SectionItem::create([
            "type" => 4,
            "tr_text" => "Proses ve alt proses denetimleri",
            "en_text" => "Process and sub-process controls"
        ]);

        SectionItem::create([
            "type" => 4,
            "tr_text" => "Verimlilik denetimi",
            "en_text" => "Efficiency audit"
        ]);

        SectionItem::create([
            "type" => 4,
            "tr_text" => "Performans denetimi",
            "en_text" => "Performance audit"
        ]);

        SectionItem::create([
            "type" => 4,
            "tr_text" => "Otomasyon denetimi",
            "en_text" => "Automation control"
        ]);

        SectionItem::create([
            "type" => 5,
            "tr_text" => "Pazar Araştırmaları",
            "en_text" => "Market Research"
        ]);

        SectionItem::create([
            "type" => 5,
            "tr_text" => "Pazara giriş,pazarda genişleme,pazara hakim olma stratejileri oluşturma",
            "en_text" => "Establishing market entry, market expansion, market dominance strategies"
        ]);

        SectionItem::create([
            "type" => 5,
            "tr_text" => "Hedef firma, kurum, kuruluş analizleri",
            "en_text" => "Target firm, institution, organization analysis"
        ]);

        SectionItem::create([
            "type" => 5,
            "tr_text" => "Periyodik Pazar/sektör/konu/ürün üzerine özel ilgi sahalarına yönelik bilgilendirme",
            "en_text" => "Periodic briefing on areas of special interest on the market/sector/subject/product"
        ]);

        SectionItem::create([
            "type" => 5,
            "tr_text" => "Tedarik sistemleri araştırma ve raporlama",
            "en_text" => "Supply systems research and reporting"
        ]);

        SectionItem::create([
            "type" => 5,
            "tr_text" => "Rakip firma faaliyetlerinin araştırılması ve raporlama",
            "en_text" => "Researching and reporting competitor company activities"
        ]);

        SectionItem::create([
            "type" => 5,
            "tr_text" => "Belirlenen konularda raporlama",
            "en_text" => "Reporting on determined topics"
        ]);

        SectionItem::create([
            "type" => 5,
            "tr_text" => "İhaleler (İhale öncesi hazırlıklar,teklif dosyası hazırlama,teklif değerlendirme,sözleşme,teslimat,kabul,ödeme süreçlerinin yönetimi.)",
            "en_text" => "Tenders (Pre-tender preparations, bid file preparation, bid evaluation, contract, delivery, acceptance, management of payment processes.)"
        ]);

        SectionItem::create([
            "type" => 6,
            "tr_text" => "Kariyer planlama",
            "en_text" => "Career planning"
        ]);

        SectionItem::create([
            "type" => 6,
            "tr_text" => "Koçluk",
            "en_text" => "Coaching"
        ]);
        
        SectionItem::create([
            "type" => 6,
            "tr_text" => "Konsantrasyon",
            "en_text" => "Concentration"
        ]);
        
        SectionItem::create([
            "type" => 6,
            "tr_text" => "Mesleki gelişim",
            "en_text" => "Professional development"
        ]);
    }
}
