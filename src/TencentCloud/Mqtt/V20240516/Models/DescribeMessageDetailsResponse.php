<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMessageDetails返回参数结构体
 *
 * @method string getBody() 获取消息体
 * @method void setBody(string $Body) 设置消息体
 * @method array getUserProperties() 获取用户自定义属性
 * @method void setUserProperties(array $UserProperties) 设置用户自定义属性
 * @method integer getStoreTimestamp() 获取消息存储时间，毫秒级时间戳。
 * @method void setStoreTimestamp(integer $StoreTimestamp) 设置消息存储时间，毫秒级时间戳。
 * @method string getMessageId() 获取消息ID
 * @method void setMessageId(string $MessageId) 设置消息ID
 * @method string getClientId() 获取生产者地址
 * @method void setClientId(string $ClientId) 设置生产者地址
 * @method string getQos() 获取Topic
 * @method void setQos(string $Qos) 设置Topic
 * @method string getOriginTopic() 获取源topic
 * @method void setOriginTopic(string $OriginTopic) 设置源topic
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMessageDetailsResponse extends AbstractModel
{
    /**
     * @var string 消息体
     */
    public $Body;

    /**
     * @var array 用户自定义属性
     */
    public $UserProperties;

    /**
     * @var integer 消息存储时间，毫秒级时间戳。
     */
    public $StoreTimestamp;

    /**
     * @var string 消息ID
     */
    public $MessageId;

    /**
     * @var string 生产者地址
     */
    public $ClientId;

    /**
     * @var string Topic
     */
    public $Qos;

    /**
     * @var string 源topic
     */
    public $OriginTopic;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Body 消息体
     * @param array $UserProperties 用户自定义属性
     * @param integer $StoreTimestamp 消息存储时间，毫秒级时间戳。
     * @param string $MessageId 消息ID
     * @param string $ClientId 生产者地址
     * @param string $Qos Topic
     * @param string $OriginTopic 源topic
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("UserProperties",$param) and $param["UserProperties"] !== null) {
            $this->UserProperties = [];
            foreach ($param["UserProperties"] as $key => $value){
                $obj = new UserProperty();
                $obj->deserialize($value);
                array_push($this->UserProperties, $obj);
            }
        }

        if (array_key_exists("StoreTimestamp",$param) and $param["StoreTimestamp"] !== null) {
            $this->StoreTimestamp = $param["StoreTimestamp"];
        }

        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }

        if (array_key_exists("OriginTopic",$param) and $param["OriginTopic"] !== null) {
            $this->OriginTopic = $param["OriginTopic"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
