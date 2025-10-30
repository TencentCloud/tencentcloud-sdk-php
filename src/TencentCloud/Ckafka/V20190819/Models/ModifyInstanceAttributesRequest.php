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
 * ModifyInstanceAttributes请求参数结构体
 *
 * @method string getInstanceId() 获取ckafka集群实例Id,可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例Id,可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
 * @method integer getMsgRetentionTime() 获取实例日志的最长保留时间，单位分钟，最大90天，最小为1min
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) 设置实例日志的最长保留时间，单位分钟，最大90天，最小为1min
 * @method string getInstanceName() 获取ckafka集群实例Name
 * @method void setInstanceName(string $InstanceName) 设置ckafka集群实例Name
 * @method ModifyInstanceAttributesConfig getConfig() 获取实例配置
 * @method void setConfig(ModifyInstanceAttributesConfig $Config) 设置实例配置
 * @method DynamicRetentionTime getDynamicRetentionConfig() 获取动态消息保留策略配置
 * @method void setDynamicRetentionConfig(DynamicRetentionTime $DynamicRetentionConfig) 设置动态消息保留策略配置
 * @method integer getRebalanceTime() 获取用于修改升级版本或升配定时任务的执行时间，Unix时间戳，精确到秒
 * @method void setRebalanceTime(integer $RebalanceTime) 设置用于修改升级版本或升配定时任务的执行时间，Unix时间戳，精确到秒
 * @method integer getPublicNetwork() 获取公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写
 * @method void setPublicNetwork(integer $PublicNetwork) 设置公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写
 * @method DynamicDiskConfig getDynamicDiskConfig() 获取动态硬盘扩容策略配置
 * @method void setDynamicDiskConfig(DynamicDiskConfig $DynamicDiskConfig) 设置动态硬盘扩容策略配置
 * @method integer getMaxMessageByte() 获取实例级别单条消息大小（单位byte)  最大 12582912(不包含)  最小1024(不包含)
 * @method void setMaxMessageByte(integer $MaxMessageByte) 设置实例级别单条消息大小（单位byte)  最大 12582912(不包含)  最小1024(不包含)
 * @method integer getUncleanLeaderElectionEnable() 获取是否允许未同步的副本选为 leader: 1 开启  0 关闭
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) 设置是否允许未同步的副本选为 leader: 1 开启  0 关闭
 * @method integer getDeleteProtectionEnable() 获取实例删除保护开关: 1 开启  0 关闭
 * @method void setDeleteProtectionEnable(integer $DeleteProtectionEnable) 设置实例删除保护开关: 1 开启  0 关闭
 */
class ModifyInstanceAttributesRequest extends AbstractModel
{
    /**
     * @var string ckafka集群实例Id,可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
     */
    public $InstanceId;

    /**
     * @var integer 实例日志的最长保留时间，单位分钟，最大90天，最小为1min
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
     * @var integer 用于修改升级版本或升配定时任务的执行时间，Unix时间戳，精确到秒
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
     * @var integer 是否允许未同步的副本选为 leader: 1 开启  0 关闭
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer 实例删除保护开关: 1 开启  0 关闭
     */
    public $DeleteProtectionEnable;

    /**
     * @param string $InstanceId ckafka集群实例Id,可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
     * @param integer $MsgRetentionTime 实例日志的最长保留时间，单位分钟，最大90天，最小为1min
     * @param string $InstanceName ckafka集群实例Name
     * @param ModifyInstanceAttributesConfig $Config 实例配置
     * @param DynamicRetentionTime $DynamicRetentionConfig 动态消息保留策略配置
     * @param integer $RebalanceTime 用于修改升级版本或升配定时任务的执行时间，Unix时间戳，精确到秒
     * @param integer $PublicNetwork 公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写
     * @param DynamicDiskConfig $DynamicDiskConfig 动态硬盘扩容策略配置
     * @param integer $MaxMessageByte 实例级别单条消息大小（单位byte)  最大 12582912(不包含)  最小1024(不包含)
     * @param integer $UncleanLeaderElectionEnable 是否允许未同步的副本选为 leader: 1 开启  0 关闭
     * @param integer $DeleteProtectionEnable 实例删除保护开关: 1 开启  0 关闭
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

        if (array_key_exists("UncleanLeaderElectionEnable",$param) and $param["UncleanLeaderElectionEnable"] !== null) {
            $this->UncleanLeaderElectionEnable = $param["UncleanLeaderElectionEnable"];
        }

        if (array_key_exists("DeleteProtectionEnable",$param) and $param["DeleteProtectionEnable"] !== null) {
            $this->DeleteProtectionEnable = $param["DeleteProtectionEnable"];
        }
    }
}
