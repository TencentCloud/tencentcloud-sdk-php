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
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PublishMsg请求参数结构体
 *
 * @method string getTopic() 获取Topic
 * @method void setTopic(string $Topic) 设置Topic
 * @method string getMessage() 获取消息内容
 * @method void setMessage(string $Message) 设置消息内容
 * @method integer getQos() 获取Qos(目前QoS支持0与1)
 * @method void setQos(integer $Qos) 设置Qos(目前QoS支持0与1)
 */
class PublishMsgRequest extends AbstractModel
{
    /**
     * @var string Topic
     */
    public $Topic;

    /**
     * @var string 消息内容
     */
    public $Message;

    /**
     * @var integer Qos(目前QoS支持0与1)
     */
    public $Qos;

    /**
     * @param string $Topic Topic
     * @param string $Message 消息内容
     * @param integer $Qos Qos(目前QoS支持0与1)
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
        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }
    }
}
