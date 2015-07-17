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

class NotificationDeliveryMode implements ArrayAccess {
  static $swaggerTypes = array(
      'transport_type' => 'string',
      'encryption' => 'string',
      'address' => 'string',
      'subscriber_key' => 'string',
      'secret_key' => 'string',
      'encryption_algorithm' => 'string',
      'encryption_key' => 'string'
  );

  static $attributeMap = array(
      'transport_type' => 'transportType',
      'encryption' => 'encryption',
      'address' => 'address',
      'subscriber_key' => 'subscriberKey',
      'secret_key' => 'secretKey',
      'encryption_algorithm' => 'encryptionAlgorithm',
      'encryption_key' => 'encryptionKey'
  );

  
  /**
  * Notifications transportation provider name. 'APNS' (Apple Push Notifications Service)
  * @var string
  */
  public $transport_type;
  /**
  * Optional parameter. Specifies if the message will be encrypted or not. For APNS transport type the value is always  false 
  * @var string
  */
  public $encryption;
  /**
  * PubNub channel name. For APNS transport type - internal identifier of a device  device_token 
  * @var string
  */
  public $address;
  /**
  * PubNub subscriber credentials required to subscribe to the channel
  * @var string
  */
  public $subscriber_key;
  /**
  * PubNub subscriber credentials required to subscribe to the channel. Optional (for PubNub transport type only)
  * @var string
  */
  public $secret_key;
  /**
  * Encryption algorithm 'AES' (for PubNub transport type only)
  * @var string
  */
  public $encryption_algorithm;
  /**
  * Key for notification message decryption (for PubNub transport type only)
  * @var string
  */
  public $encryption_key;

  public function __construct(array $data = null) {
    $this->transport_type = $data["transport_type"];
    $this->encryption = $data["encryption"];
    $this->address = $data["address"];
    $this->subscriber_key = $data["subscriber_key"];
    $this->secret_key = $data["secret_key"];
    $this->encryption_algorithm = $data["encryption_algorithm"];
    $this->encryption_key = $data["encryption_key"];
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
