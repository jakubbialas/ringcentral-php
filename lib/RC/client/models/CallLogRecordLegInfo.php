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

class CallLogRecordLegInfo implements ArrayAccess {
  static $swaggerTypes = array(
      'duration' => 'int',
      'type' => 'string',
      'direction' => 'string',
      'action' => 'string',
      'result' => 'string',
      'from' => 'CallLogCallerInfo',
      'to' => 'CallLogCallerInfo',
      'transport' => 'string',
      'recording' => 'RecordingInfo',
      'billing' => 'string',
      'leg_type' => 'string'
  );

  static $attributeMap = array(
      'duration' => 'duration',
      'type' => 'type',
      'direction' => 'direction',
      'action' => 'action',
      'result' => 'result',
      'from' => 'from',
      'to' => 'to',
      'transport' => 'transport',
      'recording' => 'recording',
      'billing' => 'billing',
      'leg_type' => 'legType'
  );

  
  /**
  * Call duration in seconds
  * @var int
  */
  public $duration;
  /**
  * Call type
  * @var string
  */
  public $type;
  /**
  * Call direction
  * @var string
  */
  public $direction;
  /**
  * Action description of the call operation.
  * @var string
  */
  public $action;
  /**
  * Status description of the call operation.
  * @var string
  */
  public $result;
  /**
  * Caller information
  * @var CallLogCallerInfo
  */
  public $from;
  /**
  * Callee information
  * @var CallLogCallerInfo
  */
  public $to;
  /**
  * Call transport
  * @var string
  */
  public $transport;
  /**
  * Call recording data. Returned if the call is recorded
  * @var RecordingInfo
  */
  public $recording;
  /**
  * Information on costs
  * @var string
  */
  public $billing;
  /**
  * Leg type
  * @var string
  */
  public $leg_type;

  public function __construct(array $data = null) {
    $this->duration = $data["duration"];
    $this->type = $data["type"];
    $this->direction = $data["direction"];
    $this->action = $data["action"];
    $this->result = $data["result"];
    $this->from = $data["from"];
    $this->to = $data["to"];
    $this->transport = $data["transport"];
    $this->recording = $data["recording"];
    $this->billing = $data["billing"];
    $this->leg_type = $data["leg_type"];
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
