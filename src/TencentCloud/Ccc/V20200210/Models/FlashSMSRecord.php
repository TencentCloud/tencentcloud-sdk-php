<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 闪信记录
 *
 * @method string getSessionId() 获取会话 ID
 * @method void setSessionId(string $SessionId) 设置会话 ID
 * @method string getDeliveryNumber() 获取闪信投递号码（被叫）
 * @method void setDeliveryNumber(string $DeliveryNumber) 设置闪信投递号码（被叫）
 * @method string getServingNumber() 获取呼叫关联的系统号码
 * @method void setServingNumber(string $ServingNumber) 设置呼叫关联的系统号码
 * @method integer getDeliveryStatus() 获取投递状态，1 表示成功，其他表示失败
 * @method void setDeliveryStatus(integer $DeliveryStatus) 设置投递状态，1 表示成功，其他表示失败
 * @method string getDeliveryMessage() 获取投递失败原因
 * @method void setDeliveryMessage(string $DeliveryMessage) 设置投递失败原因
 * @method integer getDeliveryTimestamp() 获取投递时间戳，Unix 秒级时间戳
 * @method void setDeliveryTimestamp(integer $DeliveryTimestamp) 设置投递时间戳，Unix 秒级时间戳
 * @method integer getArriveTimestamp() 获取送达时间（送达成功），Unix 秒级时间戳
 * @method void setArriveTimestamp(integer $ArriveTimestamp) 设置送达时间（送达成功），Unix 秒级时间戳
 */
class FlashSMSRecord extends AbstractModel
{
    /**
     * @var string 会话 ID
     */
    public $SessionId;

    /**
     * @var string 闪信投递号码（被叫）
     */
    public $DeliveryNumber;

    /**
     * @var string 呼叫关联的系统号码
     */
    public $ServingNumber;

    /**
     * @var integer 投递状态，1 表示成功，其他表示失败
     */
    public $DeliveryStatus;

    /**
     * @var string 投递失败原因
     */
    public $DeliveryMessage;

    /**
     * @var integer 投递时间戳，Unix 秒级时间戳
     */
    public $DeliveryTimestamp;

    /**
     * @var integer 送达时间（送达成功），Unix 秒级时间戳
     */
    public $ArriveTimestamp;

    /**
     * @param string $SessionId 会话 ID
     * @param string $DeliveryNumber 闪信投递号码（被叫）
     * @param string $ServingNumber 呼叫关联的系统号码
     * @param integer $DeliveryStatus 投递状态，1 表示成功，其他表示失败
     * @param string $DeliveryMessage 投递失败原因
     * @param integer $DeliveryTimestamp 投递时间戳，Unix 秒级时间戳
     * @param integer $ArriveTimestamp 送达时间（送达成功），Unix 秒级时间戳
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("DeliveryNumber",$param) and $param["DeliveryNumber"] !== null) {
            $this->DeliveryNumber = $param["DeliveryNumber"];
        }

        if (array_key_exists("ServingNumber",$param) and $param["ServingNumber"] !== null) {
            $this->ServingNumber = $param["ServingNumber"];
        }

        if (array_key_exists("DeliveryStatus",$param) and $param["DeliveryStatus"] !== null) {
            $this->DeliveryStatus = $param["DeliveryStatus"];
        }

        if (array_key_exists("DeliveryMessage",$param) and $param["DeliveryMessage"] !== null) {
            $this->DeliveryMessage = $param["DeliveryMessage"];
        }

        if (array_key_exists("DeliveryTimestamp",$param) and $param["DeliveryTimestamp"] !== null) {
            $this->DeliveryTimestamp = $param["DeliveryTimestamp"];
        }

        if (array_key_exists("ArriveTimestamp",$param) and $param["ArriveTimestamp"] !== null) {
            $this->ArriveTimestamp = $param["ArriveTimestamp"];
        }
    }
}
