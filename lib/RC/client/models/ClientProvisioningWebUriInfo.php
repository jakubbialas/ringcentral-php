<?php
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */

//namespace SwaggerClient\models;
namespace RC\client\models;

use \ArrayAccess;

class ClientProvisioningWebUriInfo implements ArrayAccess {
  static $swaggerTypes = array(
      'app_download' => 'string',
      'app_download_file' => 'string',
      'express_setup_mobile' => 'string',
      'meetings_app_download' => 'string',
      'mobile_web_billing' => 'string',
      'mobile_web_call_handling' => 'string',
      'mobile_web_international_calling' => 'string',
      'mobile_web_notifications' => 'string',
      'mobile_web_phone_system' => 'string',
      'mobile_web_reporting' => 'string',
      'mobile_web_reset_password' => 'string',
      'mobile_web_tell_a_friend' => 'string',
      'mobile_web_trial_upgrade' => 'string',
      'mobile_web_user_settings' => 'string',
      'service_web_billing' => 'string',
      'service_web_home' => 'string',
      'service_web_phone_system' => 'string',
      'service_web_reset_password' => 'string',
      'service_web_tell_a_friend' => 'string',
      'service_web_user_settings' => 'string',
      'sign_up' => 'string',
      'support' => 'string'
  );

  static $attributeMap = array(
      'app_download' => 'appDownload',
      'app_download_file' => 'appDownloadFile',
      'express_setup_mobile' => 'expressSetupMobile',
      'meetings_app_download' => 'meetingsAppDownload',
      'mobile_web_billing' => 'mobileWebBilling',
      'mobile_web_call_handling' => 'mobileWebCallHandling',
      'mobile_web_international_calling' => 'mobileWebInternationalCalling',
      'mobile_web_notifications' => 'mobileWebNotifications',
      'mobile_web_phone_system' => 'mobileWebPhoneSystem',
      'mobile_web_reporting' => 'mobileWebReporting',
      'mobile_web_reset_password' => 'mobileWebResetPassword',
      'mobile_web_tell_a_friend' => 'mobileWebTellAFriend',
      'mobile_web_trial_upgrade' => 'mobileWebTrialUpgrade',
      'mobile_web_user_settings' => 'mobileWebUserSettings',
      'service_web_billing' => 'serviceWebBilling',
      'service_web_home' => 'serviceWebHome',
      'service_web_phone_system' => 'serviceWebPhoneSystem',
      'service_web_reset_password' => 'serviceWebResetPassword',
      'service_web_tell_a_friend' => 'serviceWebTellAFriend',
      'service_web_user_settings' => 'serviceWebUserSettings',
      'sign_up' => 'signUp',
      'support' => 'support'
  );

  
  /**
  * Link to web page with the application description. Returned if the application needs to be updated, together with the appVersionUpgrade hint
  * @var string
  */
  public $app_download;
  /**
  * Link to the application distributive package. Returned if the application needs to be updated, together with the appVersionUpgrade hint
  * @var string
  */
  public $app_download_file;
  /**
  * Link to express setup page (mobile application)
  * @var string
  */
  public $express_setup_mobile;
  /**
  * Link to the RC Meetings application distributive package
  * @var string
  */
  public $meetings_app_download;
  /**
  * Link to billing page (mobile application)
  * @var string
  */
  public $mobile_web_billing;
  /**
  * Link to call handling page (mobile application)
  * @var string
  */
  public $mobile_web_call_handling;
  /**
  * Link to international calling page (mobile application)
  * @var string
  */
  public $mobile_web_international_calling;
  /**
  * Link to notifications page (mobile application)
  * @var string
  */
  public $mobile_web_notifications;
  /**
  * Link to phone system settings page (mobile application)
  * @var string
  */
  public $mobile_web_phone_system;
  /**
  * Link to reports page (mobile application)
  * @var string
  */
  public $mobile_web_reporting;
  /**
  * Link to reset password page (mobile application)
  * @var string
  */
  public $mobile_web_reset_password;
  /**
  * Link to  Tell A Friend  page (mobile application)
  * @var string
  */
  public $mobile_web_tell_a_friend;
  /**
  * Link to upgrade trial account (mobile application)
  * @var string
  */
  public $mobile_web_trial_upgrade;
  /**
  * Link to user settings page (mobile application)
  * @var string
  */
  public $mobile_web_user_settings;
  /**
  * Link to billing page (web application)
  * @var string
  */
  public $service_web_billing;
  /**
  * Link to home page (web application)
  * @var string
  */
  public $service_web_home;
  /**
  * Link to phone system settings page (web application)
  * @var string
  */
  public $service_web_phone_system;
  /**
  * Link to reset password page (web application)
  * @var string
  */
  public $service_web_reset_password;
  /**
  * Link to  Tell A Friend  page (web application)
  * @var string
  */
  public $service_web_tell_a_friend;
  /**
  * Link to user settings page (web application)
  * @var string
  */
  public $service_web_user_settings;
  /**
  * Link to sign up page (web application)
  * @var string
  */
  public $sign_up;
  /**
  * Link to support page (web application)
  * @var string
  */
  public $support;

  public function __construct(array $data = null) {
    $this->app_download = $data["app_download"];
    $this->app_download_file = $data["app_download_file"];
    $this->express_setup_mobile = $data["express_setup_mobile"];
    $this->meetings_app_download = $data["meetings_app_download"];
    $this->mobile_web_billing = $data["mobile_web_billing"];
    $this->mobile_web_call_handling = $data["mobile_web_call_handling"];
    $this->mobile_web_international_calling = $data["mobile_web_international_calling"];
    $this->mobile_web_notifications = $data["mobile_web_notifications"];
    $this->mobile_web_phone_system = $data["mobile_web_phone_system"];
    $this->mobile_web_reporting = $data["mobile_web_reporting"];
    $this->mobile_web_reset_password = $data["mobile_web_reset_password"];
    $this->mobile_web_tell_a_friend = $data["mobile_web_tell_a_friend"];
    $this->mobile_web_trial_upgrade = $data["mobile_web_trial_upgrade"];
    $this->mobile_web_user_settings = $data["mobile_web_user_settings"];
    $this->service_web_billing = $data["service_web_billing"];
    $this->service_web_home = $data["service_web_home"];
    $this->service_web_phone_system = $data["service_web_phone_system"];
    $this->service_web_reset_password = $data["service_web_reset_password"];
    $this->service_web_tell_a_friend = $data["service_web_tell_a_friend"];
    $this->service_web_user_settings = $data["service_web_user_settings"];
    $this->sign_up = $data["sign_up"];
    $this->support = $data["support"];
  }

  public function offsetExists($offset) {
    return isset($this->$offset);
  }

  public function offsetGet($offset) {
    return $this->$offset;
  }

  public function offsetSet($offset, $value) {
    $this->$offset = $value;
  }

  public function offsetUnset($offset) {
    unset($this->$offset);
  }
}
