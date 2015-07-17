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

class CreateFaxMessageRequest implements ArrayAccess {
  static $swaggerTypes = array(
      'to' => 'MessageStoreCallerInfo',
      'resolution' => 'string',
      'cover_page_text' => 'string',
      'original_message_id' => 'string'
  );

  static $attributeMap = array(
      'to' => 'to',
      'resolution' => 'resolution',
      'cover_page_text' => 'coverPageText',
      'original_message_id' => 'originalMessageId'
  );

  
  /**
  * Recipient information. Phone number property is mandatory. Optional for resend fax request
  * @var MessageStoreCallerInfo
  */
  public $to;
  /**
  * Fax resolution
  * @var string
  */
  public $resolution;
  /**
  * Optional. Cover page text, entered by the fax sender and printed on the cover page. Maximum length is limited to 1024 symbols
  * @var string
  */
  public $cover_page_text;
  /**
  * Internal identifier of the original fax message which needs to be resent. Supported for resend fax request
  * @var string
  */
  public $original_message_id;

  public function __construct(array $data = null) {
    $this->to = $data["to"];
    $this->resolution = $data["resolution"];
    $this->cover_page_text = $data["cover_page_text"];
    $this->original_message_id = $data["original_message_id"];
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
