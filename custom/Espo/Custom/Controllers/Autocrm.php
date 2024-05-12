<?php

namespace Espo\Custom\Controllers;

class Autocrm extends \Espo\Core\Templates\Controllers\Base
{
    public function actionFindContactsByEmail($params, $data, $request)
    {
        if (!$request->isGet()) {
            throw new \Espo\Core\Exceptions\BadRequest();
        }

        $email = $request->get('email');

        if (empty($email)) {
            throw new \Espo\Core\Exceptions\BadRequest("Email is required.");
        }

        $service = $this->getService('Contact');
        $contacts = $service->findContactsByEmail($email);

        return "akhil";
    }
}