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

class ExtensionCallLogResponse implements ArrayAccess {
  static $swaggerTypes = array(
      'records' => 'array[CallLogRecord]',
      'paging' => 'PagingInfo',
      'navigation' => 'NavigationInfo'
  );

  static $attributeMap = array(
      'records' => 'records',
      'paging' => 'paging',
      'navigation' => 'navigation'
  );

  
  public $records;
  /**
  * Information on paging
  * @var PagingInfo
  */
  public $paging;
  /**
  * Information on navigation
  * @var NavigationInfo
  */
  public $navigation;

  public function __construct(array $data = null) {
    $this->records = $data["records"];
    $this->paging = $data["paging"];
    $this->navigation = $data["navigation"];
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
