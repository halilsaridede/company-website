<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ManagerMessage;
use App\Models\SectionItem;
use App\Models\TeamMembers;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class HomepageController extends Controller
{
    public function index()
    {
        $lang = request()->server('HTTP_ACCEPT_LANGUAGE');
        if (str_contains($lang, 'tr-TR'))
            return Redirect::route('get.home.tr');

        return Redirect::route('get.home.en');
    }

    public function tr()
    {
        $educationSections = SectionItem::getByType(SectionItem::TYPE_EDUCATION);
        $projectSections = SectionItem::getByType(SectionItem::TYPE_PROJECT);
        $managementSections = SectionItem::getByType(SectionItem::TYPE_MANAGEMENT);
        $auditSections = SectionItem::getByType(SectionItem::TYPE_AUDIT);
        $argeSections = SectionItem::getByType(SectionItem::TYPE_ARGE);
        $organisationSections = SectionItem::getByType(SectionItem::TYPE_ORGANISATION);
        $sliders = Slider::all();
        $message = ManagerMessage::first();
        $teamMembers = TeamMembers::all();
        $lang = "tr";
        return view('tr', compact(
            'lang',
            'sliders',
            'message',
            'educationSections',
            'projectSections',
            'managementSections',
            'auditSections',
            'argeSections',
            'organisationSections',
            'teamMembers',
        ));
    }

    public function contact(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name_surname' => 'required',
            'email' => 'required|email',
            'info' => 'required',
            'message' => 'required',
        ],
            [
                'name_surname.required' => 'Lütfen adınızı ve soyadınızı giriniz.',
                'email.required' => 'Lütfen e-posta adresinizi giriniz.',
                'email.email' => 'Lütfen geçerli bir e-posta adresi giriniz.',
                'info.required' => 'Lütfen konu seçiniz.',
                'message.required' => 'Lütfen mesajınızı giriniz.',
            ]);

        if ($validate->fails())
            return redirect()
                ->back()
                ->withErrors($validate)
                ->withInput();
        
        else {
            $contact = Contact::addMessage($request->name_surname, $request->email,  $request->phone, $request->info, $request->message);
            if ($contact)
                return redirect()
                    ->back()
                    ->with('Başarılı', 'Mesajınız başarıyla gönderildi.');
        }

    }

    public function en()
    {
        $educationSections = SectionItem::getByType(SectionItem::TYPE_EDUCATION);
        $projectSections = SectionItem::getByType(SectionItem::TYPE_PROJECT);
        $managementSections = SectionItem::getByType(SectionItem::TYPE_MANAGEMENT);
        $auditSections = SectionItem::getByType(SectionItem::TYPE_AUDIT);
        $argeSections = SectionItem::getByType(SectionItem::TYPE_ARGE);
        $organisationSections = SectionItem::getByType(SectionItem::TYPE_ORGANISATION);
        $sliders = Slider::all();
        $message = ManagerMessage::first();
        $teamMembers = TeamMembers::all();
        $lang = "en";
        return view('en', compact(
            'lang',
            'sliders',
            'message',
            'educationSections',
            'projectSections',
            'managementSections',
            'auditSections',
            'argeSections',
            'organisationSections',
            'teamMembers',
        ));
    }
}
