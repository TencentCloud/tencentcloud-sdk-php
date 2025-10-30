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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQTT 订阅关系
 *
 * @method string getTopicFilter() 获取topic 订阅
 * @method void setTopicFilter(string $TopicFilter) 设置topic 订阅
 * @method integer getQos() 获取服务质量等级
 * @method void setQos(integer $Qos) 设置服务质量等级
 */
class MQTTClientSubscription extends AbstractModel
{
    /**
     * @var string topic 订阅
     */
    public $TopicFilter;

    /**
     * @var integer 服务质量等级
     */
    public $Qos;

    /**
     * @param string $TopicFilter topic 订阅
     * @param integer $Qos 服务质量等级
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
        if (array_key_exists("TopicFilter",$param) and $param["TopicFilter"] !== null) {
            $this->TopicFilter = $param["TopicFilter"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }
    }
}
