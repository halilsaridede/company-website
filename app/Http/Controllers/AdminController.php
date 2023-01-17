<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ManagerMessage;
use App\Models\TeamMembers;
use App\Models\SectionItem;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function update(Request $request)
    {
    }

    public function sliderMessage(Request $request)
    {
        $message = ManagerMessage::first();
        return view('admin.message.index', compact('message'));
    }

    public function sliderMessageUpdate(Request $request)
    {
        ManagerMessage::saveMessage($request->tr_message, $request->en_message, $request->name);
        return Redirect::route('get.admin.message');
    }

    public function section($typeId)
    {
        $sections = SectionItem::where('type', $typeId)->get();
        return view('admin.section.index', compact('typeId', 'sections'));
    }

    public function sectionUpdate(Request $request)
    {
        SectionItem::removeSectionsByType($request->type);
        for ($i = 0; $i < count($request->tr_texts); $i++) {
            SectionItem::addSectionItem($request->type, $request->tr_texts[$i], $request->en_texts[$i]);
        }
        return Redirect::route('get.admin.section', ["typeId" => $request->type]);
    }

    public function slider(Request $request)
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    public function sliderUpdate(Request $request)
    {
        $file1Path = "";
        $file2Path = "";
        $file3Path = "";
        $file4Path = "";

        if ($request->exists('file1')) {
            $ext   = $request->file('file1')->getClientOriginalExtension();
            $uploadedFile = '1.' . $ext;
            $request->file('file1')->storeAs('', $uploadedFile, 'slider_uploads');
            $file1Path = "assets/images/slider/" . $uploadedFile;
        } else {
            $item1 = Slider::where("location", 1)->first();
            if (!is_null($item1))
                $file1Path = $item1->path;
        }
        if ($request->exists('file2')) {
            $ext   = $request->file('file2')->getClientOriginalExtension();
            $uploadedFile = '2.' . $ext;
            $request->file('file2')->storeAs('', $uploadedFile, 'slider_uploads');
            $file2Path = "assets/images/slider/" . $uploadedFile;
        } else {
            $item2 = Slider::where("location", 2)->first();
            if (!is_null($item2))
                $file2Path = $item2->path;
        }
        if ($request->exists('file3')) {
            $ext   = $request->file('file3')->getClientOriginalExtension();
            $uploadedFile = '3.' . $ext;
            $request->file('file3')->storeAs('', $uploadedFile, 'slider_uploads');
            $file3Path = "assets/images/slider/" . $uploadedFile;
        } else {
            $item3 = Slider::where("location", 3)->first();
            if (!is_null($item3))
                $file3Path = $item3->path;
        }
        if ($request->exists('file4')) {
            $ext   = $request->file('file4')->getClientOriginalExtension();
            $uploadedFile = '4.' . $ext;
            $request->file('file4')->storeAs('', $uploadedFile, 'slider_uploads');
            $file4Path = "assets/images/slider/" . $uploadedFile;
        } else {
            $item4 = Slider::where("location", 4)->first();
            if (!is_null($item4))
                $file4Path = $item4->path;
        }

        Slider::addSlider(
            1,
            $file1Path,
            $request->get('file1_tr_header'),
            $request->get('file1_tr_description'),
            $request->get('file1_en_header'),
            $request->get('file1_en_description')
        );

        Slider::addSlider(
            2,
            $file2Path,
            $request->get('file2_tr_header'),
            $request->get('file2_tr_description'),
            $request->get('file2_en_header'),
            $request->get('file2_en_description')
        );

        Slider::addSlider(
            3,
            $file3Path,
            $request->get('file3_tr_header'),
            $request->get('file3_tr_description'),
            $request->get('file3_en_header'),
            $request->get('file3_en_description')
        );

        Slider::addSlider(
            4,
            $file4Path,
            $request->get('file4_tr_header'),
            $request->get('file4_tr_description'),
            $request->get('file4_en_header'),
            $request->get('file4_en_description')
        );

        return Redirect::route('get.admin.slider');
    }

    public function contact(Request $request)
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function contactDelete ($id)
    {
        Contact::deleteMessage($id);
        return Redirect::route('get.admin.contact');
    }

    public function teamMembers(Request $request)
    {
        $members = TeamMembers::all();
        return view('admin.team-members.index', compact('members'));
    }


    public function teamMembersUpdate(Request $request)
    {
        $file = "";
        $arrayTrial = [];

        $teamMembersAlls = TeamMembers::all();
        foreach ($teamMembersAlls as $teamMembersAll) {
            $arrayTrial[] = $teamMembersAll->path;
        }

        if ($request->hasFile('path')) {
            $files = $request->file('path');
            foreach($files as $fileItem){
                $filename = $fileItem->getClientOriginalName();
                $extension = $fileItem->getClientOriginalExtension();
                $fileName = Str::random(5)."-".date('his')."-".Str::random(3).".".$extension;
                $file = "assets/images/member/" . $fileName;
                $arrayTrial[] = $file;
                $fileItem->storeAs('', $fileName, 'member_uploads');
            }
        } 

        $teamMembersAlls = TeamMembers::all();
        foreach ($teamMembersAlls as $teamMembersAll) {
            // !is_null($teamMembersAll->path) && $teamMembersAll->image;
            if (!is_null($teamMembersAll)) {
                $teamMembersAll->delete();
            }
            // $teamMembersAll->delete();
        }
        for ($i = 0; $i < count($request->name_surname); $i++) {
            TeamMembers::addTeamMembers($arrayTrial[$i] ?? null, $request->name_surname[$i], $request->en_task[$i], $request->tr_task[$i], 
            $request->facebook[$i], $request->twitter[$i], $request->linkedin[$i]);
        }
        return Redirect::route('get.admin.team-members');
    }
}
