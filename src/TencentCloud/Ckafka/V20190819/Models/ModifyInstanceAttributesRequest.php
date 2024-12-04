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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceAttributes请求参数结构体
 *
 * @method string getInstanceId() 获取ckafka集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例Id
 * @method integer getMsgRetentionTime() 获取实例日志的最长保留时间，单位分钟，最大90天，0代表不开启日志保留时间回收策略
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) 设置实例日志的最长保留时间，单位分钟，最大90天，0代表不开启日志保留时间回收策略
 * @method string getInstanceName() 获取ckafka集群实例Name
 * @method void setInstanceName(string $InstanceName) 设置ckafka集群实例Name
 * @method ModifyInstanceAttributesConfig getConfig() 获取实例配置
 * @method void setConfig(ModifyInstanceAttributesConfig $Config) 设置实例配置
 * @method DynamicRetentionTime getDynamicRetentionConfig() 获取动态消息保留策略配置
 * @method void setDynamicRetentionConfig(DynamicRetentionTime $DynamicRetentionConfig) 设置动态消息保留策略配置
 * @method integer getRebalanceTime() 获取升配Rebalance时间 参数已废弃,忽略不填!!!
 * @method void setRebalanceTime(integer $RebalanceTime) 设置升配Rebalance时间 参数已废弃,忽略不填!!!
 * @method integer getPublicNetwork() 获取公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写
 * @method void setPublicNetwork(integer $PublicNetwork) 设置公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写
 * @method DynamicDiskConfig getDynamicDiskConfig() 获取动态硬盘扩容策略配置
 * @method void setDynamicDiskConfig(DynamicDiskConfig $DynamicDiskConfig) 设置动态硬盘扩容策略配置
 * @method integer getMaxMessageByte() 获取实例级别单条消息大小（单位byte)  最大 12582912(不包含)  最小1024(不包含)
 * @method void setMaxMessageByte(integer $MaxMessageByte) 设置实例级别单条消息大小（单位byte)  最大 12582912(不包含)  最小1024(不包含)
 */
class ModifyInstanceAttributesRequest extends AbstractModel
{
    /**
     * @var string ckafka集群实例Id
     */
    public $InstanceId;

    /**
     * @var integer 实例日志的最长保留时间，单位分钟，最大90天，0代表不开启日志保留时间回收策略
     */
    public $MsgRetentionTime;

    /**
     * @var string ckafka集群实例Name
     */
    public $InstanceName;

    /**
     * @var ModifyInstanceAttributesConfig 实例配置
     */
    public $Config;

    /**
     * @var DynamicRetentionTime 动态消息保留策略配置
     */
    public $DynamicRetentionConfig;

    /**
     * @var integer 升配Rebalance时间 参数已废弃,忽略不填!!!
     */
    public $RebalanceTime;

    /**
     * @var integer 公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写
     */
    public $PublicNetwork;

    /**
     * @var DynamicDiskConfig 动态硬盘扩容策略配置
     * @deprecated
     */
    public $DynamicDiskConfig;

    /**
     * @var integer 实例级别单条消息大小（单位byte)  最大 12582912(不包含)  最小1024(不包含)
     */
    public $MaxMessageByte;

    /**
     * @param string $InstanceId ckafka集群实例Id
     * @param integer $MsgRetentionTime 实例日志的最长保留时间，单位分钟，最大90天，0代表不开启日志保留时间回收策略
     * @param string $InstanceName ckafka集群实例Name
     * @param ModifyInstanceAttributesConfig $Config 实例配置
     * @param DynamicRetentionTime $DynamicRetentionConfig 动态消息保留策略配置
     * @param integer $RebalanceTime 升配Rebalance时间 参数已废弃,忽略不填!!!
     * @param integer $PublicNetwork 公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写
     * @param DynamicDiskConfig $DynamicDiskConfig 动态硬盘扩容策略配置
     * @param integer $MaxMessageByte 实例级别单条消息大小（单位byte)  最大 12582912(不包含)  最小1024(不包含)
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MsgRetentionTime",$param) and $param["MsgRetentionTime"] !== null) {
            $this->MsgRetentionTime = $param["MsgRetentionTime"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new ModifyInstanceAttributesConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("DynamicRetentionConfig",$param) and $param["DynamicRetentionConfig"] !== null) {
            $this->DynamicRetentionConfig = new DynamicRetentionTime();
            $this->DynamicRetentionConfig->deserialize($param["DynamicRetentionConfig"]);
        }

        if (array_key_exists("RebalanceTime",$param) and $param["RebalanceTime"] !== null) {
            $this->RebalanceTime = $param["RebalanceTime"];
        }

        if (array_key_exists("PublicNetwork",$param) and $param["PublicNetwork"] !== null) {
            $this->PublicNetwork = $param["PublicNetwork"];
        }

        if (array_key_exists("DynamicDiskConfig",$param) and $param["DynamicDiskConfig"] !== null) {
            $this->DynamicDiskConfig = new DynamicDiskConfig();
            $this->DynamicDiskConfig->deserialize($param["DynamicDiskConfig"]);
        }

        if (array_key_exists("MaxMessageByte",$param) and $param["MaxMessageByte"] !== null) {
            $this->MaxMessageByte = $param["MaxMessageByte"];
        }
    }
}
