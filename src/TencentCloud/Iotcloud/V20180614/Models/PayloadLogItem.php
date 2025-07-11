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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 内容日志项
 *
 * @method string getUin() 获取账号id
 * @method void setUin(string $Uin) 设置账号id
 * @method string getProductID() 获取产品id
 * @method void setProductID(string $ProductID) 设置产品id
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getSrcType() 获取来源类型
 * @method void setSrcType(string $SrcType) 设置来源类型
 * @method string getSrcName() 获取来源名称
 * @method void setSrcName(string $SrcName) 设置来源名称
 * @method string getTopic() 获取消息topic
 * @method void setTopic(string $Topic) 设置消息topic
 * @method string getPayloadFmtType() 获取内容格式类型
 * @method void setPayloadFmtType(string $PayloadFmtType) 设置内容格式类型
 * @method string getPayload() 获取内容信息
 * @method void setPayload(string $Payload) 设置内容信息
 * @method string getRequestID() 获取请求ID
 * @method void setRequestID(string $RequestID) 设置请求ID
 * @method string getDateTime() 获取日期时间
 * @method void setDateTime(string $DateTime) 设置日期时间
 */
class PayloadLogItem extends AbstractModel
{
    /**
     * @var string 账号id
     */
    public $Uin;

    /**
     * @var string 产品id
     */
    public $ProductID;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 来源类型
     */
    public $SrcType;

    /**
     * @var string 来源名称
     */
    public $SrcName;

    /**
     * @var string 消息topic
     */
    public $Topic;

    /**
     * @var string 内容格式类型
     */
    public $PayloadFmtType;

    /**
     * @var string 内容信息
     */
    public $Payload;

    /**
     * @var string 请求ID
     */
    public $RequestID;

    /**
     * @var string 日期时间
     */
    public $DateTime;

    /**
     * @param string $Uin 账号id
     * @param string $ProductID 产品id
     * @param string $DeviceName 设备名称
     * @param string $SrcType 来源类型
     * @param string $SrcName 来源名称
     * @param string $Topic 消息topic
     * @param string $PayloadFmtType 内容格式类型
     * @param string $Payload 内容信息
     * @param string $RequestID 请求ID
     * @param string $DateTime 日期时间
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ProductID",$param) and $param["ProductID"] !== null) {
            $this->ProductID = $param["ProductID"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("SrcType",$param) and $param["SrcType"] !== null) {
            $this->SrcType = $param["SrcType"];
        }

        if (array_key_exists("SrcName",$param) and $param["SrcName"] !== null) {
            $this->SrcName = $param["SrcName"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("PayloadFmtType",$param) and $param["PayloadFmtType"] !== null) {
            $this->PayloadFmtType = $param["PayloadFmtType"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("RequestID",$param) and $param["RequestID"] !== null) {
            $this->RequestID = $param["RequestID"];
        }

        if (array_key_exists("DateTime",$param) and $param["DateTime"] !== null) {
            $this->DateTime = $param["DateTime"];
        }
    }
}
