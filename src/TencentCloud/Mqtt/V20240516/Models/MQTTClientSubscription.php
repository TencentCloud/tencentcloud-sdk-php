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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQTT 订阅关系
 *
 * @method string getTopicFilter() 获取topic 订阅
 * @method void setTopicFilter(string $TopicFilter) 设置topic 订阅
 * @method integer getQos() 获取服务质量等级
0: 至多一次
1: 至少一次
2: 恰好一次
 * @method void setQos(integer $Qos) 设置服务质量等级
0: 至多一次
1: 至少一次
2: 恰好一次
 * @method integer getLag() 获取堆积数量
 * @method void setLag(integer $Lag) 设置堆积数量
 * @method integer getInflight() 获取投递未确认数量
 * @method void setInflight(integer $Inflight) 设置投递未确认数量
 * @method array getUserProperties() 获取用户属性
 * @method void setUserProperties(array $UserProperties) 设置用户属性
 */
class MQTTClientSubscription extends AbstractModel
{
    /**
     * @var string topic 订阅
     */
    public $TopicFilter;

    /**
     * @var integer 服务质量等级
0: 至多一次
1: 至少一次
2: 恰好一次
     */
    public $Qos;

    /**
     * @var integer 堆积数量
     */
    public $Lag;

    /**
     * @var integer 投递未确认数量
     */
    public $Inflight;

    /**
     * @var array 用户属性
     */
    public $UserProperties;

    /**
     * @param string $TopicFilter topic 订阅
     * @param integer $Qos 服务质量等级
0: 至多一次
1: 至少一次
2: 恰好一次
     * @param integer $Lag 堆积数量
     * @param integer $Inflight 投递未确认数量
     * @param array $UserProperties 用户属性
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

        if (array_key_exists("Lag",$param) and $param["Lag"] !== null) {
            $this->Lag = $param["Lag"];
        }

        if (array_key_exists("Inflight",$param) and $param["Inflight"] !== null) {
            $this->Inflight = $param["Inflight"];
        }

        if (array_key_exists("UserProperties",$param) and $param["UserProperties"] !== null) {
            $this->UserProperties = [];
            foreach ($param["UserProperties"] as $key => $value){
                $obj = new SubscriptionUserProperty();
                $obj->deserialize($value);
                array_push($this->UserProperties, $obj);
            }
        }
    }
}
