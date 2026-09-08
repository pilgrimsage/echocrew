<?php

namespace App\Controllers;

use App\Models\EnquiryModel;

class Enquiry extends BaseController
{
    public function store()
    {
        // Honeypot: bots fill hidden fields, people do not.
        if ($this->request->getPost('ec_website') !== null && $this->request->getPost('ec_website') !== '') {
            return redirect()->to(base_url() . '#contact');
        }

        $rules = [
            'name'    => ['label' => 'Name',    'rules' => 'required|min_length[2]|max_length[120]'],
            'email'   => ['label' => 'Email',   'rules' => 'required|valid_email|max_length[180]'],
            'message' => ['label' => 'Project description', 'rules' => 'required|min_length[20]|max_length[5000]'],
        ];

        if (! $this->validate($rules)) {
            return redirect()->to(base_url() . '#contact')
                ->withInput()
                ->with('ec_errors', $this->validator->getErrors())
                ->with('ec_error', 'Some details are missing. Check the highlighted fields and send again.');
        }

        (new EnquiryModel())->insert([
            'name'              => $this->request->getPost('name'),
            'company'           => $this->request->getPost('company'),
            'email'             => $this->request->getPost('email'),
            'phone'             => $this->request->getPost('phone'),
            'service'           => $this->request->getPost('service'),
            'current_system'    => $this->request->getPost('current_system'),
            'budget'            => $this->request->getPost('budget'),
            'timeline'          => $this->request->getPost('timeline'),
            'preferred_contact' => $this->request->getPost('preferred_contact'),
            'message'           => $this->request->getPost('message'),
        ]);

        return redirect()->to(base_url() . '#contact')
            ->with('ec_success', 'Enquiry received. We will read the detail and reply on your preferred contact method.');
    }
}
