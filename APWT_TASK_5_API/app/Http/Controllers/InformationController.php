<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function teams()
    {
        $team = array
        (
            'name'=>'',
            'designation'=>'',
            'facebook'=>'',
            'linkedin'=>'',
            'picture'=>''
            
        );

        $all_team_member = array();

        $team['name'] = 'Syed Syfuzzaman';
        $team['designation'] = 'Chairman';
        $team['facebook'] = '#';
        $team['linkedin'] = '#';
        $team['picture'] = 'assets/img/team/ador.jpg';

        $all_team_member[0] = $team;

        $team['name'] = 'Md. Mahim Talukder';
        $team['designation'] = 'Chief Executive Officer';
        $team['facebook'] = '#';
        $team['linkedin'] = '#';
        $team['picture'] = 'assets/img/team/mahim.jpg';

        $all_team_member[1] = $team;

        $team['name'] = 'Ashraful Islam Adhir';
        $team['designation'] = 'Managing Director Admin';
        $team['facebook'] = '#';
        $team['linkedin'] = '#';
        $team['picture'] = 'assets/img/team/adhir.jpg';

        $all_team_member[2] = $team;

        $team['name'] = 'Zarif Amir Sanad';
        $team['designation'] = 'Managing Director Project';
        $team['facebook'] = '#';
        $team['linkedin'] = '#';
        $team['picture'] = 'assets/img/team/sanad.jpg';

        $all_team_member[3] = $team;

        return view('teams')->with('all_team_member', $all_team_member);
    }

    public function service()
    {
        $service = array
        (
            'name'=>'',
            'description'=>'',
            'link'=>'',
            'picture'=>''
            
        );

        $all_service = array();

        $service['name'] = 'Check Website Url';
        $service['description'] = 'Cyber security is important because it encompasses everything that relates to protecting our data from cyber attackers who want to steal this information and use it to cause harm.';
        $service['link'] = '#';
        $service['picture'] = 'assets/img/safety-icon/icon-1.png';

        $all_service[0] = $service;

        $service['name'] = 'Check Emails Before Opening Them';
        $service['description'] = 'Cyber security is important because it encompasses everything that relates to protecting our data from cyber attackers who want to steal this information and use it to cause harm.';
        $service['link'] = '#';
        $service['picture'] = 'assets/img/safety-icon/icon-2.png';

        $all_service[1] = $service;

        $service['name'] = 'Remember To Log Off';
        $service['description'] = 'Cyber security is important because it encompasses everything that relates to protecting our data from cyber attackers who want to steal this information and use it to cause harm.';
        $service['link'] = '#';
        $service['picture'] = 'assets/img/safety-icon/icon-3.png';

        $all_service[2] = $service;

        $service['name'] = 'Choose Strong Passwords';
        $service['description'] = 'Cyber security is important because it encompasses everything that relates to protecting our data from cyber attackers who want to steal this information and use it to cause harm.';
        $service['link'] = '#';
        $service['picture'] = 'assets/img/safety-icon/icon-4.png';

        $all_service[3] = $service;

        $service['name'] = 'Shop Safety In Trusted Websites';
        $service['description'] = 'Cyber security is important because it encompasses everything that relates to protecting our data from cyber attackers who want to steal this information and use it to cause harm.';
        $service['link'] = '#';
        $service['picture'] = 'assets/img/safety-icon/icon-5.png';

        $all_service[4] = $service;

        $service['name'] = 'Update Your Antivirus';
        $service['description'] = 'Cyber security is important because it encompasses everything that relates to protecting our data from cyber attackers who want to steal this information and use it to cause harm.';
        $service['link'] = '#';
        $service['picture'] = 'assets/img/safety-icon/icon-6.png';

        $all_service[5] = $service;

        return view('product.service')->with('all_service', $all_service);
    }
}
