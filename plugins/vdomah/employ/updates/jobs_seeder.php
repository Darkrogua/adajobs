<?php namespace Vdomah\Employ\Updates;

use RainLab\Location\Models\State;
use Seeder;
use Vdomah\Employ\Models\Job;
use Vdomah\Employ\Models\Skill;
use Vdomah\Employ\Models\Type;
use Vdomah\Employ\Models\Frequency;
use Vdomah\Employ\Models\Category;
use Vdomah\Employ\Models\Institution;
use Lovata\Buddies\Models\User;
use Lovata\Buddies\Models\Property;
use VojtaSvoboda\LocationTown\Models\Town;
use Carbon\Carbon;

class JobsSeeder extends Seeder
{
    public function run()
    {
        //$faker = \Faker\Factory::create();
        Job::truncate();
        Type::truncate();
        Category::truncate();
        Property::truncate();
        Town::truncate();
        Skill::truncate();
        Institution::truncate();

        $institutions = [
            'Princeton University', 'Harvard University', 'Columbia University', 'Massachusetts Institute of Technology', 'Yale University',
        ];

        foreach ($institutions as $institution) {
            Institution::create([
                'name' => $institution,
            ]);
        }

        $skills = [
            'programming', 'speaking', 'ironing', 'singing', 'sleeping',
        ];

        foreach ($skills as $skill) {
            Skill::create([
                'name' => $skill,
            ]);
        }

        $cities = array(
            '1' => array(
                'id' => '1',
                'parent' => '0',
                'name' => 'California',
            ),
            '2' => array(
                'id' => '2',
                'parent' => '0',
                'name' => 'Texas',
            ),
            '3' => array(
                'id' => '3',
                'parent' => '0',
                'name' => 'Florida',
            ),
            '4' => array(
                'id' => '4',
                'parent' => '1',
                'name' => 'Los Angeles',
            ),
            '5' => array(
                'id' => '5',
                'parent' => '1',
                'name' => 'San Francisco',
            ),
            '6' => array(
                'id' => '6',
                'parent' => '1',
                'name' => 'Sacramento',
            ),
            '7' => array(
                'id' => '7',
                'parent' => '2',
                'name' => 'Houston',
            ),
            '8' => array(
                'id' => '8',
                'parent' => '2',
                'name' => 'Dallas',
            ),
            '9' => array(
                'id' => '9',
                'parent' => '3',
                'name' => 'Miami',
            ),
            '10' => array(
                'id' => '10',
                'parent' => '3',
                'name' => 'Orlando',
            ),
        );

        foreach ($cities as $city) {
            if ($city['parent'] == 0) {
                $state = State::where('name', $city['name'])->first();
                foreach ($cities as $_city) {
                    if ($_city['parent'] > 0) {
                        if (!Town::where('name', $_city['name'])->first())
                        $town = Town::create([
                            'name' => $_city['name'],
                            'slug' => str_slug($_city['name']),
                            'state_id' => $state->id,
                            'is_enabled' => 1,
                        ]);
                    }
                }
            }
        }

        $towns = Town::lists('id');
        $institutions = Institution::lists('id');
        $skills = Skill::lists('id');

        $users = User::get();
        foreach ($users as $user) {
            shuffle($towns);
            shuffle($institutions);
            shuffle($skills);
            $user->city_id = array_pop($towns);
            $user->institution_id = array_pop($institutions);
            $user->skills()->sync(array_slice($skills, 0, 2));
            $user->save();
        }

        $properties = [
            [
                'active' => 1,
                'name' => 'Qualification',
                'slug' => 'qualification',
                'code' => 'qualification',
                'type' => 'input',
                'settings' => '{"tab":"Seeker","datepicker":"date","mediafinder":"file","list":[]}',
                'sort_order' => 1,
            ],
            [
                'active' => 1,
                'name' => 'Company Name',
                'slug' => 'company-name',
                'code' => 'company_name',
                'type' => 'input',
                'settings' => '{"tab":"Employer","datepicker":"date","mediafinder":"file","list":[]}',
                'sort_order' => 2,
            ],
        ];

        foreach ($properties as $property) {
            Property::create($property);
        }

        $categories = [
            'fulltime' => 'Public Service',
            'parttime' => 'Training',
            'temporary' => 'Security & Safety',
            'contract' => 'Banking',
            'internship' => 'Financial Services',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
        
        $types = [
            'fulltime' => 'Full-time',
            'parttime' => 'Part-time',
            'temporary' => 'Temporary',
            'contract' => 'Contract',
            'internship' => 'Internship',
        ];

        foreach ($types as $type) {
            Type::create([
                'name' => $type,
            ]);
        }
        
        $countries = [
            'AF'=>'AFGHANISTAN',
            'AL'=>'ALBANIA',
            'DZ'=>'ALGERIA',
            'AS'=>'AMERICAN SAMOA',
            'AD'=>'ANDORRA',
            'AO'=>'ANGOLA',
            'AI'=>'ANGUILLA',
            'AQ'=>'ANTARCTICA',
            'AG'=>'ANTIGUA AND BARBUDA',
            'AR'=>'ARGENTINA',
            'AM'=>'ARMENIA',
            'AW'=>'ARUBA',
            'AU'=>'AUSTRALIA',
            'AT'=>'AUSTRIA',
            'AZ'=>'AZERBAIJAN',
            'BS'=>'BAHAMAS',
            'BH'=>'BAHRAIN',
            'BD'=>'BANGLADESH',
            'BB'=>'BARBADOS',
            'BY'=>'BELARUS',
            'BE'=>'BELGIUM',
            'BZ'=>'BELIZE',
            'BJ'=>'BENIN',
            'BM'=>'BERMUDA',
            'BT'=>'BHUTAN',
            'BO'=>'BOLIVIA',
            'BA'=>'BOSNIA AND HERZEGOVINA',
            'BW'=>'BOTSWANA',
            'BV'=>'BOUVET ISLAND',
            'BR'=>'BRAZIL',
            'IO'=>'BRITISH INDIAN OCEAN TERRITORY',
            'BN'=>'BRUNEI DARUSSALAM',
            'BG'=>'BULGARIA',
            'BF'=>'BURKINA FASO',
            'BI'=>'BURUNDI',
            'KH'=>'CAMBODIA',
            'CM'=>'CAMEROON',
            'CA'=>'CANADA',
            'CV'=>'CAPE VERDE',
            'KY'=>'CAYMAN ISLANDS',
            'CF'=>'CENTRAL AFRICAN REPUBLIC',
            'TD'=>'CHAD',
            'CL'=>'CHILE',
            'CN'=>'CHINA',
            'CX'=>'CHRISTMAS ISLAND',
            'CC'=>'COCOS (KEELING) ISLANDS',
            'CO'=>'COLOMBIA',
            'KM'=>'COMOROS',
            'CG'=>'CONGO',
            'CD'=>'CONGO, THE DEMOCRATIC REPUBLIC OF THE',
            'CK'=>'COOK ISLANDS',
            'CR'=>'COSTA RICA',
            'CI'=>'COTE D IVOIRE',
            'HR'=>'CROATIA',
            'CU'=>'CUBA',
            'CY'=>'CYPRUS',
            'CZ'=>'CZECH REPUBLIC',
            'DK'=>'DENMARK',
            'DJ'=>'DJIBOUTI',
            'DM'=>'DOMINICA',
            'DO'=>'DOMINICAN REPUBLIC',
            'TP'=>'EAST TIMOR',
            'EC'=>'ECUADOR',
            'EG'=>'EGYPT',
            'SV'=>'EL SALVADOR',
            'GQ'=>'EQUATORIAL GUINEA',
            'ER'=>'ERITREA',
            'EE'=>'ESTONIA',
            'ET'=>'ETHIOPIA',
            'FK'=>'FALKLAND ISLANDS (MALVINAS)',
            'FO'=>'FAROE ISLANDS',
            'FJ'=>'FIJI',
            'FI'=>'FINLAND',
            'FR'=>'FRANCE',
            'GF'=>'FRENCH GUIANA',
            'PF'=>'FRENCH POLYNESIA',
            'TF'=>'FRENCH SOUTHERN TERRITORIES',
            'GA'=>'GABON',
            'GM'=>'GAMBIA',
            'GE'=>'GEORGIA',
            'DE'=>'GERMANY',
            'GH'=>'GHANA',
            'GI'=>'GIBRALTAR',
            'GR'=>'GREECE',
            'GL'=>'GREENLAND',
            'GD'=>'GRENADA',
            'GP'=>'GUADELOUPE',
            'GU'=>'GUAM',
            'GT'=>'GUATEMALA',
            'GN'=>'GUINEA',
            'GW'=>'GUINEA-BISSAU',
            'GY'=>'GUYANA',
            'HT'=>'HAITI',
            'HM'=>'HEARD ISLAND AND MCDONALD ISLANDS',
            'VA'=>'HOLY SEE (VATICAN CITY STATE)',
            'HN'=>'HONDURAS',
            'HK'=>'HONG KONG',
            'HU'=>'HUNGARY',
            'IS'=>'ICELAND',
            'IN'=>'INDIA',
            'ID'=>'INDONESIA',
            'IR'=>'IRAN, ISLAMIC REPUBLIC OF',
            'IQ'=>'IRAQ',
            'IE'=>'IRELAND',
            'IL'=>'ISRAEL',
            'IT'=>'ITALY',
            'JM'=>'JAMAICA',
            'JP'=>'JAPAN',
            'JO'=>'JORDAN',
            'KZ'=>'KAZAKSTAN',
            'KE'=>'KENYA',
            'KI'=>'KIRIBATI',
            'KP'=>'KOREA DEMOCRATIC PEOPLES REPUBLIC OF',
            'KR'=>'KOREA REPUBLIC OF',
            'KW'=>'KUWAIT',
            'KG'=>'KYRGYZSTAN',
            'LA'=>'LAO PEOPLES DEMOCRATIC REPUBLIC',
            'LV'=>'LATVIA',
            'LB'=>'LEBANON',
            'LS'=>'LESOTHO',
            'LR'=>'LIBERIA',
            'LY'=>'LIBYAN ARAB JAMAHIRIYA',
            'LI'=>'LIECHTENSTEIN',
            'LT'=>'LITHUANIA',
            'LU'=>'LUXEMBOURG',
            'MO'=>'MACAU',
            'MK'=>'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',
            'MG'=>'MADAGASCAR',
            'MW'=>'MALAWI',
            'MY'=>'MALAYSIA',
            'MV'=>'MALDIVES',
            'ML'=>'MALI',
            'MT'=>'MALTA',
            'MH'=>'MARSHALL ISLANDS',
            'MQ'=>'MARTINIQUE',
            'MR'=>'MAURITANIA',
            'MU'=>'MAURITIUS',
            'YT'=>'MAYOTTE',
            'MX'=>'MEXICO',
            'FM'=>'MICRONESIA, FEDERATED STATES OF',
            'MD'=>'MOLDOVA, REPUBLIC OF',
            'MC'=>'MONACO',
            'MN'=>'MONGOLIA',
            'MS'=>'MONTSERRAT',
            'MA'=>'MOROCCO',
            'MZ'=>'MOZAMBIQUE',
            'MM'=>'MYANMAR',
            'NA'=>'NAMIBIA',
            'NR'=>'NAURU',
            'NP'=>'NEPAL',
            'NL'=>'NETHERLANDS',
            'AN'=>'NETHERLANDS ANTILLES',
            'NC'=>'NEW CALEDONIA',
            'NZ'=>'NEW ZEALAND',
            'NI'=>'NICARAGUA',
            'NE'=>'NIGER',
            'NG'=>'NIGERIA',
            'NU'=>'NIUE',
            'NF'=>'NORFOLK ISLAND',
            'MP'=>'NORTHERN MARIANA ISLANDS',
            'NO'=>'NORWAY',
            'OM'=>'OMAN',
            'PK'=>'PAKISTAN',
            'PW'=>'PALAU',
            'PS'=>'PALESTINIAN TERRITORY, OCCUPIED',
            'PA'=>'PANAMA',
            'PG'=>'PAPUA NEW GUINEA',
            'PY'=>'PARAGUAY',
            'PE'=>'PERU',
            'PH'=>'PHILIPPINES',
            'PN'=>'PITCAIRN',
            'PL'=>'POLAND',
            'PT'=>'PORTUGAL',
            'PR'=>'PUERTO RICO',
            'QA'=>'QATAR',
            'RE'=>'REUNION',
            'RO'=>'ROMANIA',
            'RU'=>'RUSSIAN FEDERATION',
            'RW'=>'RWANDA',
            'SH'=>'SAINT HELENA',
            'KN'=>'SAINT KITTS AND NEVIS',
            'LC'=>'SAINT LUCIA',
            'PM'=>'SAINT PIERRE AND MIQUELON',
            'VC'=>'SAINT VINCENT AND THE GRENADINES',
            'WS'=>'SAMOA',
            'SM'=>'SAN MARINO',
            'ST'=>'SAO TOME AND PRINCIPE',
            'SA'=>'SAUDI ARABIA',
            'SN'=>'SENEGAL',
            'SC'=>'SEYCHELLES',
            'SL'=>'SIERRA LEONE',
            'SG'=>'SINGAPORE',
            'SK'=>'SLOVAKIA',
            'SI'=>'SLOVENIA',
            'SB'=>'SOLOMON ISLANDS',
            'SO'=>'SOMALIA',
            'ZA'=>'SOUTH AFRICA',
            'GS'=>'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS',
            'ES'=>'SPAIN',
            'LK'=>'SRI LANKA',
            'SD'=>'SUDAN',
            'SR'=>'SURINAME',
            'SJ'=>'SVALBARD AND JAN MAYEN',
            'SZ'=>'SWAZILAND',
            'SE'=>'SWEDEN',
            'CH'=>'SWITZERLAND',
            'SY'=>'SYRIAN ARAB REPUBLIC',
            'TW'=>'TAIWAN, PROVINCE OF CHINA',
            'TJ'=>'TAJIKISTAN',
            'TZ'=>'TANZANIA, UNITED REPUBLIC OF',
            'TH'=>'THAILAND',
            'TG'=>'TOGO',
            'TK'=>'TOKELAU',
            'TO'=>'TONGA',
            'TT'=>'TRINIDAD AND TOBAGO',
            'TN'=>'TUNISIA',
            'TR'=>'TURKEY',
            'TM'=>'TURKMENISTAN',
            'TC'=>'TURKS AND CAICOS ISLANDS',
            'TV'=>'TUVALU',
            'UG'=>'UGANDA',
            'UA'=>'UKRAINE',
            'AE'=>'UNITED ARAB EMIRATES',
            'GB'=>'UNITED KINGDOM',
            'US'=>'UNITED STATES',
            'UM'=>'UNITED STATES MINOR OUTLYING ISLANDS',
            'UY'=>'URUGUAY',
            'UZ'=>'UZBEKISTAN',
            'VU'=>'VANUATU',
            'VE'=>'VENEZUELA',
            'VN'=>'VIET NAM',
            'VG'=>'VIRGIN ISLANDS, BRITISH',
            'VI'=>'VIRGIN ISLANDS, U.S.',
            'WF'=>'WALLIS AND FUTUNA',
            'EH'=>'WESTERN SAHARA',
            'YE'=>'YEMEN',
            'YU'=>'YUGOSLAVIA',
            'ZM'=>'ZAMBIA',
            'ZW'=>'ZIMBABWE',
        ];
        $jobs = [];
        for ($i=0; $i<12; $i++) {
            shuffle($countries);
            $name = array_pop($countries);

            $types = Type::lists('id');
            shuffle($types);

            $frequencies = Frequency::lists('id');
            shuffle($frequencies);

            $jobs[] = Job::create([
                'name' => ucfirst(strtolower($name)),
                'slug' => str_slug($name),
                'description' => 'Lorem ipsum dolor sit amen',
                'user_id' => $users->count() ? $users->shuffle()->first()->id : 0,
                'type_id' => array_pop($types),
                'salary_min' => rand(100, 500),
                'salary_max' => rand(1000, 5000),
                'frequency_id' => array_pop($frequencies),
                'start_at' => Carbon::parse('+ ' . rand(5, 15) . ' days'),
                'created_at' => Carbon::parse('- ' . rand(0, 40) . ' days'),
            ]);
        }

        $categories = Category::lists('id');

        foreach ($jobs as $job) {
            shuffle($categories);
            $job->categories()->sync(array_slice($categories, 0, 2));
            $job->save();
        }
    }
}