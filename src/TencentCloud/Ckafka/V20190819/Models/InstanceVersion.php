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
 * @method string getKafkaVersion() 获取<p>ckafka集群实例版本</p>
 * @method void setKafkaVersion(string $KafkaVersion) 设置<p>ckafka集群实例版本</p>
 * @method string getCurBrokerVersion() 获取<p>broker版本信息</p>
 * @method void setCurBrokerVersion(string $CurBrokerVersion) 设置<p>broker版本信息</p>
 * @method array getLatestBrokerVersion() 获取<p>最新版本信息</p>
 * @method void setLatestBrokerVersion(array $LatestBrokerVersion) 设置<p>最新版本信息</p>
 * @method boolean getAllowUpgradeHighVersion() 获取<p>允许跨大版本内核升级</p>
 * @method void setAllowUpgradeHighVersion(boolean $AllowUpgradeHighVersion) 设置<p>允许跨大版本内核升级</p>
 * @method array getHighVersionSet() 获取<p>允许升级的大版本</p>
 * @method void setHighVersionSet(array $HighVersionSet) 设置<p>允许升级的大版本</p>
 * @method boolean getAllowAutoDeleteTimestamp() 获取<p>允许小版本号配置自动删除消费者组</p>
 * @method void setAllowAutoDeleteTimestamp(boolean $AllowAutoDeleteTimestamp) 设置<p>允许小版本号配置自动删除消费者组</p>
 * @method boolean getAllowModifyTxnIdExpiration() 获取<p>允许修改事务ID过期时间配置</p>
 * @method void setAllowModifyTxnIdExpiration(boolean $AllowModifyTxnIdExpiration) 设置<p>允许修改事务ID过期时间配置</p>
 */
class InstanceVersion extends AbstractModel
{
    /**
     * @var string <p>ckafka集群实例版本</p>
     */
    public $KafkaVersion;

    /**
     * @var string <p>broker版本信息</p>
     */
    public $CurBrokerVersion;

    /**
     * @var array <p>最新版本信息</p>
     */
    public $LatestBrokerVersion;

    /**
     * @var boolean <p>允许跨大版本内核升级</p>
     */
    public $AllowUpgradeHighVersion;

    /**
     * @var array <p>允许升级的大版本</p>
     */
    public $HighVersionSet;

    /**
     * @var boolean <p>允许小版本号配置自动删除消费者组</p>
     */
    public $AllowAutoDeleteTimestamp;

    /**
     * @var boolean <p>允许修改事务ID过期时间配置</p>
     */
    public $AllowModifyTxnIdExpiration;

    /**
     * @param string $KafkaVersion <p>ckafka集群实例版本</p>
     * @param string $CurBrokerVersion <p>broker版本信息</p>
     * @param array $LatestBrokerVersion <p>最新版本信息</p>
     * @param boolean $AllowUpgradeHighVersion <p>允许跨大版本内核升级</p>
     * @param array $HighVersionSet <p>允许升级的大版本</p>
     * @param boolean $AllowAutoDeleteTimestamp <p>允许小版本号配置自动删除消费者组</p>
     * @param boolean $AllowModifyTxnIdExpiration <p>允许修改事务ID过期时间配置</p>
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

        if (array_key_exists("AllowModifyTxnIdExpiration",$param) and $param["AllowModifyTxnIdExpiration"] !== null) {
            $this->AllowModifyTxnIdExpiration = $param["AllowModifyTxnIdExpiration"];
        }
    }
}
