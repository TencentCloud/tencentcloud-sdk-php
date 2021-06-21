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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDefaultAlarmThreshold请求参数结构体
 *
 * @method DefaultAlarmThreshold getDefaultAlarmConfig() 获取默认告警阈值配置
 * @method void setDefaultAlarmConfig(DefaultAlarmThreshold $DefaultAlarmConfig) 设置默认告警阈值配置
 * @method string getInstanceType() 获取产品类型，取值[
bgp(表示高防包产品)
bgpip(表示高防IP产品)
]
 * @method void setInstanceType(string $InstanceType) 设置产品类型，取值[
bgp(表示高防包产品)
bgpip(表示高防IP产品)
]
 */
class CreateDefaultAlarmThresholdRequest extends AbstractModel
{
    /**
     * @var DefaultAlarmThreshold 默认告警阈值配置
     */
    public $DefaultAlarmConfig;

    /**
     * @var string 产品类型，取值[
bgp(表示高防包产品)
bgpip(表示高防IP产品)
]
     */
    public $InstanceType;

    /**
     * @param DefaultAlarmThreshold $DefaultAlarmConfig 默认告警阈值配置
     * @param string $InstanceType 产品类型，取值[
bgp(表示高防包产品)
bgpip(表示高防IP产品)
]
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
        if (array_key_exists("DefaultAlarmConfig",$param) and $param["DefaultAlarmConfig"] !== null) {
            $this->DefaultAlarmConfig = new DefaultAlarmThreshold();
            $this->DefaultAlarmConfig->deserialize($param["DefaultAlarmConfig"]);
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
