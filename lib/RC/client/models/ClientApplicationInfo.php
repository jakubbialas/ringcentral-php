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

class ClientApplicationInfo implements ArrayAccess {
  static $swaggerTypes = array(
      'detected' => 'boolean',
      'user_agent' => 'string',
      'app_id' => 'string',
      'app_name' => 'string',
      'app_version' => 'string',
      'app_platform' => 'string',
      'app_platform_version' => 'string',
      'locale' => 'string'
  );

  static $attributeMap = array(
      'detected' => 'detected',
      'user_agent' => 'userAgent',
      'app_id' => 'appId',
      'app_name' => 'appName',
      'app_version' => 'appVersion',
      'app_platform' => 'appPlatform',
      'app_platform_version' => 'appPlatformVersion',
      'locale' => 'locale'
  );

  
  /**
  * 'true', if the server succeeded detecting application info, sufficient to return provisioning info
  * @var boolean
  */
  public $detected;
  /**
  * The value of 'User-Agent' header, as it was passed in request
  * @var string
  */
  public $user_agent;
  /**
  * Application identifier (from authorisation session)
  * @var string
  */
  public $app_id;
  /**
  * Application name (from authorization session, but must match 'User-Agent')
  * @var string
  */
  public $app_name;
  /**
  * Application version (parsed from 'User-Agent')
  * @var string
  */
  public $app_version;
  /**
  * Application platform operation system (parsed from 'User-Agent': Windows, MacOS, Android, iOS
  * @var string
  */
  public $app_platform;
  /**
  * Application platform operation system version (parsed from 'User-Agent')
  * @var string
  */
  public $app_platform_version;
  /**
  * Locale, parsed from 'Accept-Language'. Currently en-GB and en-US locales are supported. The default value is en-US
  * @var string
  */
  public $locale;

  public function __construct(array $data = null) {
    $this->detected = $data["detected"];
    $this->user_agent = $data["user_agent"];
    $this->app_id = $data["app_id"];
    $this->app_name = $data["app_name"];
    $this->app_version = $data["app_version"];
    $this->app_platform = $data["app_platform"];
    $this->app_platform_version = $data["app_platform_version"];
    $this->locale = $data["locale"];
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
