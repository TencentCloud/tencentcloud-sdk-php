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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 最新版本信息列表
 *
 * @method string getKafkaVersion() 获取ckafka集群实例版本
 * @method void setKafkaVersion(string $KafkaVersion) 设置ckafka集群实例版本
 * @method string getBrokerVersion() 获取broker版本号
 * @method void setBrokerVersion(string $BrokerVersion) 设置broker版本号
 */
class LatestBrokerVersion extends AbstractModel
{
    /**
     * @var string ckafka集群实例版本
     */
    public $KafkaVersion;

    /**
     * @var string broker版本号
     */
    public $BrokerVersion;

    /**
     * @param string $KafkaVersion ckafka集群实例版本
     * @param string $BrokerVersion broker版本号
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
        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }

        if (array_key_exists("BrokerVersion",$param) and $param["BrokerVersion"] !== null) {
            $this->BrokerVersion = $param["BrokerVersion"];
        }
    }
}
