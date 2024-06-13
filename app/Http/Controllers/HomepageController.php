<?php

namespace App\Http\Controllers;
use App\Lib\DomainAge;
use App\Lib\WhoisLocup;
use DateTime;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homePage(){
        $domain = null;
        $exatDomain = null;
        if (isset($_GET['domain'])) {
            $domain = $_GET['domain'];
            $exatDomain = $this->extractDomainName($domain);
        }
        // $result = parse_url($domain);

        if ($exatDomain) {
            $domainage = new DomainAge();
            $look = new WhoisLocup();

            // print_r($look->whoislookup('binarywebtools.com'));
            $whoisinfo = $look->whoislookup($exatDomain);
            $age = $domainage->age($exatDomain);


            $rows = explode("\n", $whoisinfo);
            $arr = array();
            foreach ($rows as $row) {
                $posOfFirstColon = strpos($row, ":");
                $arr[substr($row, 0, $posOfFirstColon)] = trim(substr($row, $posOfFirstColon + 1));
            }

            // return $whoisinfo;


            // return view('frontend.domain-page', compact('arr', 'age', 'exatDomain'));
            return view('domain-page', compact('arr', 'age', 'exatDomain'));
        } else {
            return view('homepage', compact('exatDomain'));
        }




    }

    function extractDomainName($url)
    {
        // Remove http:// or https:// from the URL
        $url = preg_replace('#^https?://#', '', $url);

        // Extract the domain name using regular expression
        preg_match('/^(?:[a-z]+\:\/\/)?(?:[a-z]+\.)?([a-z0-9\-]+\.[a-z]+)/i', $url, $matches);

        if (isset($matches[1])) {
            return $matches[1]; // Return the extracted domain name
        } else {
            return false; // Invalid URL or unable to extract domain name
        }
    }
}
