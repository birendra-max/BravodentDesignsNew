<?php

namespace App\Controllers;

use App\Libraries\MailServices;
use Config\Database;

class Home extends BaseController
{
    public function index()
    {
        return view('inc/header') . view('Home') . view('inc/footer');
    }

    public function about()
    {
        return view('inc/header') . view('About') . view('inc/footer');
    }

    public function prodService()
    {
        return view('inc/header') . view('prodservice') . view('inc/footer');
    }

    public function workflow()
    {
        return view('inc/header') . view('workflow') . view('inc/footer');
    }

    public function join_ourtTeam()
    {
        return view('inc/header') . view('join_our_team') . view('inc/footer');
    }

    public function contactUs()
    {
        return view('inc/header') . view('constactUs') . view('inc/footer');
    }

    public function  faq()
    {
        return view('inc/header') . view('faq') . view('inc/footer');
    }

    public function pp()
    {
        return view('inc/header') . view('privacypolicy') . view('inc/footer');
    }

    public function tc()
    {
        return view('inc/header') . view('termsconditions') . view('inc/footer');
    }

    public function blogs()
    {
        return view('inc/header') . view('blogs') . view('inc/footer');
    }

    public function contact_us()
    {
        // Only allow POST requests
        if ($this->request->getMethod() !== 'POST') {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Invalid request method.',
            ]);
        }

        // Get raw JSON input
        $json = $this->request->getBody();
        $formData = json_decode($json, true);

        if (empty($formData)) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Invalid JSON data received.',
            ]);
        }

        $name    = $formData['name'] ?? '';
        $email   = $formData['email'] ?? '';
        $phone   = $formData['phone'] ?? '';
        $message = $formData['message'] ?? '';
        $nowDate = date('Y-m-d');

        if (empty($name) || empty($email) || empty($phone) || empty($message)) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'All fields are required.',
            ]);
        }

        // Insert directly using DB connection (without model)
        $db = Database::connect();
        $sql = "INSERT INTO contact_us (name, email, phone, message) VALUES (?, ?, ?, ?)";
        $query = $db->query($sql, [$name, $email, $phone, $message]);

        if (!$query) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Failed to insert data.',
            ]);
        }

        // Email sending via MailServices
        $mailService = new MailServices();

        // 1. Send thank-you email to user
        $userSubject = 'Thanks for Contacting Us';
        $userHtml = '
            <div class="max-w-3xl mx-auto mt-8 bg-white p-8 rounded-lg shadow-md">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-gray-800">Hi ' . esc($name) . ', Welcome to BravoDent.com!</h1>
                </div>
                <div class="mb-4">
                    <p class="text-gray-700">Thanks for reaching out to us. Your message is important, and we\'ll respond as soon as possible.</p>
                </div>
                <div class="text-center mt-8">
                    <p class="text-gray-600">Best regards,<br>BravoDent.com</p>
                </div>
            </div>';
        $userText = "Thanks for reaching out to us. Your message is important, and we'll respond as soon as possible.\n\nBest regards,\nBravoDent.com";

        $resp = $mailService->sendEmail($email, $name, $userSubject, $userHtml, $userText);

        if ($resp !== true) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Failed to send confirmation email.',
            ]);
        }

        // 2. Notify admin
        $adminSubject = 'New Contact Form Submission';
        $adminHtml = '
            <div class="max-w-3xl mx-auto mt-8 bg-white p-8 rounded-lg shadow-md">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-gray-800">New Contact Form Submission</h1>
                </div>
                <div class="mb-4">
                    <p class="text-gray-700">A new contact form submission has been received:</p>
                    <ul class="text-gray-700">
                        <li><strong>Date:</strong> ' . esc($nowDate) . '</li>
                        <li><strong>Full Name:</strong> ' . esc($name) . '</li>
                        <li><strong>Email:</strong> ' . esc($email) . '</li>
                        <li><strong>Phone:</strong> ' . esc($phone) . '</li>
                        <li><strong>Message:</strong> ' . esc($message) . '</li>
                    </ul>
                </div>
                <div class="text-center mt-8">
                    <p class="text-gray-600">Please follow up with the user at your earliest convenience.<br>Best regards,<br>BravoDent.com Notification System</p>
                </div>
            </div>';
        $adminText = "New Contact Form Submission\n\nDate: $nowDate\nName: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

        // $adminResp = $mailService->sendEmail('info@bravodentdesigns.com', 'BravoDent Design', $adminSubject, $adminHtml, $adminText);

        $adminResp = $mailService->sendEmail('birendrapradhan112@gmail.com', 'Birendra Kumar Pradhan', $adminSubject, $adminHtml, $adminText);

        if ($adminResp !== true) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Failed to notify admin.',
            ]);
        }

        // ✅ Success response
        return $this->response->setJSON([
            'status'  => 'success',
            'message' => 'Your request has been successfully submitted!',
        ]);
    }


    public function sample_request()
    {
        // Only allow POST requests
        if ($this->request->getMethod() !== 'POST') {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Invalid request method.',
            ]);
        }

        // Read JSON
        $json = $this->request->getBody();
        $formData = json_decode($json, true);

        if (empty($formData)) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Invalid or missing JSON data.',
            ]);
        }

        // Extract fields
        $name        = $formData['name'] ?? '';
        $email       = $formData['email'] ?? '';
        $phone       = $formData['phone'] ?? '';
        $countryCode = $formData['country-code'] ?? '';
        $clinic      = $formData['clinic'] ?? '';
        $country     = $formData['country'] ?? '';

        $phone = $countryCode . $phone;

        // Services
        $services = [];
        for ($i = 1; $i <= 10; $i++) {
            if (!empty($formData['service' . $i])) {
                $services[] = esc($formData['service' . $i]);
            }
        }
        $services_string = implode(", ", $services);

        // Other fields
        $contact_value          = $formData['contact-value'] ?? '';
        $occlusion_value        = $formData['occlusion-value'] ?? '';
        $anatomy                = $formData['anatomy'] ?? '';
        $pontic_types           = $formData['pontic-types'] ?? '';
        $design_types           = $formData['design-types'] ?? '';
        $additional_requirements = $formData['additional-requirements'] ?? '';

        // Needs
        $needs = [];
        for ($i = 1; $i <= 3; $i++) {
            if (!empty($formData['need' . $i])) {
                $needs[] = esc($formData['need' . $i]);
            }
        }
        $needs_string = implode(", ", $needs);

        $user_permission = isset($formData['user_permission']) && $formData['user_permission'] === 'on' ? "yes" : "no";

        $now_date = date('Y-m-d');

        // DB insert without model
        $db = Database::connect();
        $sql = "INSERT INTO request_sample_case (
                    date, full_name, email, phone, lab_clinic_name, country_name, services,
                    contact_value, occlusion_value, anatomy, pontic_types, design_types,
                    additional_requirements, dental_professionals_choose, user_permission_for_storing_data
                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $query = $db->query($sql, [
            $now_date,
            $name,
            $email,
            $phone,
            $clinic,
            $country,
            $services_string,
            $contact_value,
            $occlusion_value,
            $anatomy,
            $pontic_types,
            $design_types,
            $additional_requirements,
            $needs_string,
            $user_permission
        ]);

        if (!$query) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Error inserting data.',
            ]);
        }

        // Init Mail Service
        $mailService = new MailServices();

        // 1. Send confirmation mail to user
        $userSubject = "Thanks for Contacting Us";
        $userHtml = '
            <div class="max-w-3xl mx-auto mt-8 bg-white p-8 rounded-lg shadow-md">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-gray-800">Hi ' . esc($name) . ', Welcome to BravoDent.com!</h1>
                </div>
                <div class="mb-4">
                    <p class="text-gray-700">Thank you for reaching out to us. Your request for a new account setup and trial will be processed as soon as possible.</p>
                </div>
                <div class="text-center mt-8">
                    <p class="text-gray-600">Best regards,<br>BravoDent.com</p>
                </div>
            </div>';
        $userText = "Thank you for reaching out to us. Your request for a new account setup and trial will be processed as soon as possible.\n\nBest regards,\nBravoDent Team";

        $resp = $mailService->sendEmail($email, $name, $userSubject, $userHtml, $userText);
        if ($resp !== true) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Failed to send confirmation email.',
            ]);
        }

        // 2. Notify Admin
        $adminSubject = "New Account Set Up Form Submission";
        $adminHtml = '
            <div class="max-w-3xl mx-auto mt-8 bg-white p-8 rounded-lg shadow-md">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-gray-800">New User Account Setup Form Submission</h1>
                </div>
                <div class="mb-4">
                    <p class="text-gray-700">A new user details form submission has been received:</p>
                    <ul class="text-gray-700">
                        <li><strong>Date:</strong> ' . esc($now_date) . '</li>
                        <li><strong>Full Name:</strong> ' . esc($name) . '</li>
                        <li><strong>Email:</strong> ' . esc($email) . '</li>
                        <li><strong>Phone:</strong> ' . esc($phone) . '</li>
                        <li><strong>Lab/Clinic Name:</strong> ' . esc($clinic) . '</li>
                        <li><strong>Country Name:</strong> ' . esc($country) . '</li>
                        <li><strong>Services:</strong> ' . esc($services_string) . '</li>
                        <li><strong>Contact Value:</strong> ' . esc($contact_value) . '</li>
                        <li><strong>Occlusion Value:</strong> ' . esc($occlusion_value) . '</li>
                        <li><strong>Anatomy:</strong> ' . esc($anatomy) . '</li>
                        <li><strong>Pontic Types:</strong> ' . esc($pontic_types) . '</li>
                        <li><strong>Design Types:</strong> ' . esc($design_types) . '</li>
                        <li><strong>Additional Requirements:</strong> ' . esc($additional_requirements) . '</li>
                        <li><strong>Dental Professionals Choose:</strong> ' . esc($needs_string) . '</li>
                        <li><strong>User Permission for Storing Data:</strong> ' . esc($user_permission) . '</li>
                    </ul>
                </div>
                <div class="text-center mt-8">
                    <p class="text-gray-600">Please follow up with the user at your earliest convenience.<br>Best regards,<br>BravoDent.com Notification System</p>
                </div>
            </div>';
        $adminText = "New Account Setup Form Submission\n\nDate: $now_date\nName: $name\nEmail: $email\nPhone: $phone\nClinic: $clinic\nCountry: $country\nServices: $services_string\nContact Value: $contact_value\nOcclusion Value: $occlusion_value\nAnatomy: $anatomy\nPontic Types: $pontic_types\nDesign Types: $design_types\nAdditional Requirements: $additional_requirements\nNeeds: $needs_string\nPermission: $user_permission";

        // $adminResp = $mailService->sendEmail('info@bravodentdesigns.com', 'BravoDent Design', $adminSubject, $adminHtml, $adminText);
        $adminResp = $mailService->sendEmail('birendrapradhan112@gmail.com', 'Birendra Kumar Pradhan', $adminSubject, $adminHtml, $adminText);

        if ($adminResp !== true) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Failed to notify admin.',
            ]);
        }

        // ✅ Success
        return $this->response->setJSON([
            'status'  => 'success',
            'message' => 'Your request has been successfully submitted!',
        ]);
    }
}
