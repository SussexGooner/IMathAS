<?php
namespace IMSGlobal\LTI;

interface Database {
    public function find_registration_by_issuer($iss, $client_id);
    public function find_deployment($platform_id, $deployment_id);
}

?>
