<?php



$schemas = [

    
    // ✅ Hero Section: One-time entry
    'hero_areas' => [
        'title' => ['label' => 'Title', 'type' => 'text'],                             // Left Title e.g., "Hi, I'm"
        'title2' => ['label' => 'Secondary Title', 'type' => 'text'],                  // Left Title2 e.g., "Ahmed"
        'description' => ['label' => 'Description', 'type' => 'textarea'],             // Middle Description
        'description2' => ['label' => 'Highlights (One per line)', 'type' => 'textarea'], // Right Column (multiple lines)
       
    ],

    // ✅ About Section: One-time entry
    // About Section
'about_section' => [
    'main_image'   => ['label' => 'Main Image', 'type' => 'file'],
    'title'        => ['label' => 'Title', 'type' => 'text'],
    'description'  => ['label' => 'Description', 'type' => 'textarea'],
    'title2'       => ['label' => 'Personal Info ', 'type' => 'textarea'],  // 🔄 Changed from text to textarea
    'description2' => ['label' => 'Skills ', 'type' => 'textarea'],
  'upload' => ['label' => ' Upload (PDF/ZIP)', 'type' => 'file'], 
],



    // Admin Users (Login/Signup)
    'admin_users' => [
        'name' => ['label' => 'Name', 'type' => 'text'],
        'email' => ['label' => 'Email', 'type' => 'email'],
        'password' => ['label' => 'Password', 'type' => 'password'],
    ],
];
// GitHub Contributions
$schemas['github_contribution'] = [
    'main_image' => ['label' => 'Main Image', 'type' => 'file'],
    'title' => ['label' => 'Title', 'type' => 'text'],
    'description' => ['label' => 'Description', 'type' => 'textarea'],
    'github_link' => ['label' => 'GitHub Link', 'type' => 'url'],
];
$schemas['skills'] = [
    'main_image' => ['label' => 'Main Image', 'type' => 'file'], // Optional preview image
    'title' => ['label' => 'Skill Title', 'type' => 'text'],
    'percentage' => ['label' => 'Percentage (%)', 'type' => 'number'],
    
];$schemas['projects'] = [
    'main_image'      => ['label' => 'Project Image', 'type' => 'file'],
    'title'           => ['label' => 'Project Title', 'type' => 'text'],
    'description'     => ['label' => 'Description', 'type' => 'textarea'],
    'android_link'    => ['label' => 'Android App (Play Store)', 'type' => 'text'],
    'ios_link'        => ['label' => 'iOS App (App Store)' , 'type' => 'text'],
    'attachment_file' => ['label' => 'Upload ZIP or File (Optional)', 'type' => 'file']
];

$schemas['contact_messages'] = [
    'name' => ['label' => 'First Name', 'type' => 'text'],
    'lastname' => ['label' => 'Last Name', 'type' => 'text'],
    'email' => ['label' => 'Email Address', 'type' => 'email'],
    'phone' => ['label' => 'Phone Number', 'type' => 'text'],
    'message' => ['label' => 'Message', 'type' => 'textarea'],
];
