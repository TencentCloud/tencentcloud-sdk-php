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
 * 实例版本信息
 *
 * @method string getKafkaVersion() 获取ckafka集群实例版本
 * @method void setKafkaVersion(string $KafkaVersion) 设置ckafka集群实例版本
 * @method string getCurBrokerVersion() 获取broker版本信息
 * @method void setCurBrokerVersion(string $CurBrokerVersion) 设置broker版本信息
 * @method array getLatestBrokerVersion() 获取最新版本信息
 * @method void setLatestBrokerVersion(array $LatestBrokerVersion) 设置最新版本信息
 * @method boolean getAllowUpgradeHighVersion() 获取允许跨大版本内核升级
 * @method void setAllowUpgradeHighVersion(boolean $AllowUpgradeHighVersion) 设置允许跨大版本内核升级
 * @method array getHighVersionSet() 获取允许升级的大版本
 * @method void setHighVersionSet(array $HighVersionSet) 设置允许升级的大版本
 * @method boolean getAllowAutoDeleteTimestamp() 获取允许小版本号配置自动删除消费者组
 * @method void setAllowAutoDeleteTimestamp(boolean $AllowAutoDeleteTimestamp) 设置允许小版本号配置自动删除消费者组
 */
class InstanceVersion extends AbstractModel
{
    /**
     * @var string ckafka集群实例版本
     */
    public $KafkaVersion;

    /**
     * @var string broker版本信息
     */
    public $CurBrokerVersion;

    /**
     * @var array 最新版本信息
     */
    public $LatestBrokerVersion;

    /**
     * @var boolean 允许跨大版本内核升级
     */
    public $AllowUpgradeHighVersion;

    /**
     * @var array 允许升级的大版本
     */
    public $HighVersionSet;

    /**
     * @var boolean 允许小版本号配置自动删除消费者组
     */
    public $AllowAutoDeleteTimestamp;

    /**
     * @param string $KafkaVersion ckafka集群实例版本
     * @param string $CurBrokerVersion broker版本信息
     * @param array $LatestBrokerVersion 最新版本信息
     * @param boolean $AllowUpgradeHighVersion 允许跨大版本内核升级
     * @param array $HighVersionSet 允许升级的大版本
     * @param boolean $AllowAutoDeleteTimestamp 允许小版本号配置自动删除消费者组
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

        if (array_key_exists("CurBrokerVersion",$param) and $param["CurBrokerVersion"] !== null) {
            $this->CurBrokerVersion = $param["CurBrokerVersion"];
        }

        if (array_key_exists("LatestBrokerVersion",$param) and $param["LatestBrokerVersion"] !== null) {
            $this->LatestBrokerVersion = [];
            foreach ($param["LatestBrokerVersion"] as $key => $value){
                $obj = new LatestBrokerVersion();
                $obj->deserialize($value);
                array_push($this->LatestBrokerVersion, $obj);
            }
        }

        if (array_key_exists("AllowUpgradeHighVersion",$param) and $param["AllowUpgradeHighVersion"] !== null) {
            $this->AllowUpgradeHighVersion = $param["AllowUpgradeHighVersion"];
        }

        if (array_key_exists("HighVersionSet",$param) and $param["HighVersionSet"] !== null) {
            $this->HighVersionSet = $param["HighVersionSet"];
        }

        if (array_key_exists("AllowAutoDeleteTimestamp",$param) and $param["AllowAutoDeleteTimestamp"] !== null) {
            $this->AllowAutoDeleteTimestamp = $param["AllowAutoDeleteTimestamp"];
        }
    }
}
