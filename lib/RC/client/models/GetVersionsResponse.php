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

class GetVersionsResponse implements ArrayAccess {
  static $swaggerTypes = array(
      'uri' => 'string',
      'api_versions' => 'array[VersionInfo]',
      'server_version' => 'string',
      'server_revision' => 'string'
  );

  static $attributeMap = array(
      'uri' => 'uri',
      'api_versions' => 'apiVersions',
      'server_version' => 'serverVersion',
      'server_revision' => 'serverRevision'
  );

  
  /**
  * Сanonical URI of the API version
  * @var string
  */
  public $uri;
  public $api_versions;
  /**
  * Server version
  * @var string
  */
  public $server_version;
  /**
  * Server revision
  * @var string
  */
  public $server_revision;

  public function __construct(array $data = null) {
    $this->uri = $data["uri"];
    $this->api_versions = $data["api_versions"];
    $this->server_version = $data["server_version"];
    $this->server_revision = $data["server_revision"];
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
