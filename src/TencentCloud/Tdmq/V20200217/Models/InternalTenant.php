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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 面向运营端的虚拟集群信息
 *
 * @method string getTenantId() 获取虚拟集群ID
 * @method void setTenantId(string $TenantId) 设置虚拟集群ID
 * @method string getTenantName() 获取虚拟集群名称
 * @method void setTenantName(string $TenantName) 设置虚拟集群名称
 * @method string getCustomerUin() 获取客户UIN
 * @method void setCustomerUin(string $CustomerUin) 设置客户UIN
 * @method string getCustomerAppId() 获取客户的APPID
 * @method void setCustomerAppId(string $CustomerAppId) 设置客户的APPID
 * @method string getClusterName() 获取物理集群名称
 * @method void setClusterName(string $ClusterName) 设置物理集群名称
 * @method string getType() 获取集群协议类型，支持的值为TDMQ，ROCKETMQ，AMQP，CMQ
 * @method void setType(string $Type) 设置集群协议类型，支持的值为TDMQ，ROCKETMQ，AMQP，CMQ
 * @method integer getMaxNamespaces() 获取命名空间配额
 * @method void setMaxNamespaces(integer $MaxNamespaces) 设置命名空间配额
 * @method integer getUsedNamespaces() 获取已使用命名空间配额
 * @method void setUsedNamespaces(integer $UsedNamespaces) 设置已使用命名空间配额
 * @method integer getMaxTopics() 获取Topic配额
 * @method void setMaxTopics(integer $MaxTopics) 设置Topic配额
 * @method integer getUsedTopics() 获取已使用Topic配额
 * @method void setUsedTopics(integer $UsedTopics) 设置已使用Topic配额
 * @method integer getMaxPartitions() 获取Topic分区数配额
 * @method void setMaxPartitions(integer $MaxPartitions) 设置Topic分区数配额
 * @method integer getUsedPartitions() 获取已使用Topic分区数配额
 * @method void setUsedPartitions(integer $UsedPartitions) 设置已使用Topic分区数配额
 * @method integer getMaxMsgBacklogSize() 获取存储配额, byte为单位
 * @method void setMaxMsgBacklogSize(integer $MaxMsgBacklogSize) 设置存储配额, byte为单位
 * @method integer getMaxPublishTps() 获取命名空间最大生产TPS
 * @method void setMaxPublishTps(integer $MaxPublishTps) 设置命名空间最大生产TPS
 * @method integer getMaxRetention() 获取消息最大保留时间，秒为单位
 * @method void setMaxRetention(integer $MaxRetention) 设置消息最大保留时间，秒为单位
 * @method integer getCreateTime() 获取创建时间，毫秒为单位
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，毫秒为单位
 * @method integer getUpdateTime() 获取修改时间，毫秒为单位
 * @method void setUpdateTime(integer $UpdateTime) 设置修改时间，毫秒为单位
 * @method integer getMaxDispatchTps() 获取命名空间最大消费TPS
 * @method void setMaxDispatchTps(integer $MaxDispatchTps) 设置命名空间最大消费TPS
 * @method integer getMaxDispatchRateInBytes() 获取命名空间最大消费带宽，byte为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxDispatchRateInBytes(integer $MaxDispatchRateInBytes) 设置命名空间最大消费带宽，byte为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxPublishRateInBytes() 获取命名空间最大生产带宽，byte为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxPublishRateInBytes(integer $MaxPublishRateInBytes) 设置命名空间最大生产带宽，byte为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRetentionSizeInMB() 获取消息最大保留空间，MB为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRetentionSizeInMB(integer $MaxRetentionSizeInMB) 设置消息最大保留空间，MB为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPublicAccessEnabled() 获取public Access Enabled
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicAccessEnabled(boolean $PublicAccessEnabled) 设置public Access Enabled
注意：此字段可能返回 null，表示取不到有效值。
 */
class InternalTenant extends AbstractModel
{
    /**
     * @var string 虚拟集群ID
     */
    public $TenantId;

    /**
     * @var string 虚拟集群名称
     */
    public $TenantName;

    /**
     * @var string 客户UIN
     */
    public $CustomerUin;

    /**
     * @var string 客户的APPID
     */
    public $CustomerAppId;

    /**
     * @var string 物理集群名称
     */
    public $ClusterName;

    /**
     * @var string 集群协议类型，支持的值为TDMQ，ROCKETMQ，AMQP，CMQ
     */
    public $Type;

    /**
     * @var integer 命名空间配额
     */
    public $MaxNamespaces;

    /**
     * @var integer 已使用命名空间配额
     */
    public $UsedNamespaces;

    /**
     * @var integer Topic配额
     */
    public $MaxTopics;

    /**
     * @var integer 已使用Topic配额
     */
    public $UsedTopics;

    /**
     * @var integer Topic分区数配额
     */
    public $MaxPartitions;

    /**
     * @var integer 已使用Topic分区数配额
     */
    public $UsedPartitions;

    /**
     * @var integer 存储配额, byte为单位
     */
    public $MaxMsgBacklogSize;

    /**
     * @var integer 命名空间最大生产TPS
     */
    public $MaxPublishTps;

    /**
     * @var integer 消息最大保留时间，秒为单位
     */
    public $MaxRetention;

    /**
     * @var integer 创建时间，毫秒为单位
     */
    public $CreateTime;

    /**
     * @var integer 修改时间，毫秒为单位
     */
    public $UpdateTime;

    /**
     * @var integer 命名空间最大消费TPS
     */
    public $MaxDispatchTps;

    /**
     * @var integer 命名空间最大消费带宽，byte为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxDispatchRateInBytes;

    /**
     * @var integer 命名空间最大生产带宽，byte为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxPublishRateInBytes;

    /**
     * @var integer 消息最大保留空间，MB为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRetentionSizeInMB;

    /**
     * @var boolean public Access Enabled
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicAccessEnabled;

    /**
     * @param string $TenantId 虚拟集群ID
     * @param string $TenantName 虚拟集群名称
     * @param string $CustomerUin 客户UIN
     * @param string $CustomerAppId 客户的APPID
     * @param string $ClusterName 物理集群名称
     * @param string $Type 集群协议类型，支持的值为TDMQ，ROCKETMQ，AMQP，CMQ
     * @param integer $MaxNamespaces 命名空间配额
     * @param integer $UsedNamespaces 已使用命名空间配额
     * @param integer $MaxTopics Topic配额
     * @param integer $UsedTopics 已使用Topic配额
     * @param integer $MaxPartitions Topic分区数配额
     * @param integer $UsedPartitions 已使用Topic分区数配额
     * @param integer $MaxMsgBacklogSize 存储配额, byte为单位
     * @param integer $MaxPublishTps 命名空间最大生产TPS
     * @param integer $MaxRetention 消息最大保留时间，秒为单位
     * @param integer $CreateTime 创建时间，毫秒为单位
     * @param integer $UpdateTime 修改时间，毫秒为单位
     * @param integer $MaxDispatchTps 命名空间最大消费TPS
     * @param integer $MaxDispatchRateInBytes 命名空间最大消费带宽，byte为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxPublishRateInBytes 命名空间最大生产带宽，byte为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRetentionSizeInMB 消息最大保留空间，MB为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $PublicAccessEnabled public Access Enabled
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("TenantName",$param) and $param["TenantName"] !== null) {
            $this->TenantName = $param["TenantName"];
        }

        if (array_key_exists("CustomerUin",$param) and $param["CustomerUin"] !== null) {
            $this->CustomerUin = $param["CustomerUin"];
        }

        if (array_key_exists("CustomerAppId",$param) and $param["CustomerAppId"] !== null) {
            $this->CustomerAppId = $param["CustomerAppId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MaxNamespaces",$param) and $param["MaxNamespaces"] !== null) {
            $this->MaxNamespaces = $param["MaxNamespaces"];
        }

        if (array_key_exists("UsedNamespaces",$param) and $param["UsedNamespaces"] !== null) {
            $this->UsedNamespaces = $param["UsedNamespaces"];
        }

        if (array_key_exists("MaxTopics",$param) and $param["MaxTopics"] !== null) {
            $this->MaxTopics = $param["MaxTopics"];
        }

        if (array_key_exists("UsedTopics",$param) and $param["UsedTopics"] !== null) {
            $this->UsedTopics = $param["UsedTopics"];
        }

        if (array_key_exists("MaxPartitions",$param) and $param["MaxPartitions"] !== null) {
            $this->MaxPartitions = $param["MaxPartitions"];
        }

        if (array_key_exists("UsedPartitions",$param) and $param["UsedPartitions"] !== null) {
            $this->UsedPartitions = $param["UsedPartitions"];
        }

        if (array_key_exists("MaxMsgBacklogSize",$param) and $param["MaxMsgBacklogSize"] !== null) {
            $this->MaxMsgBacklogSize = $param["MaxMsgBacklogSize"];
        }

        if (array_key_exists("MaxPublishTps",$param) and $param["MaxPublishTps"] !== null) {
            $this->MaxPublishTps = $param["MaxPublishTps"];
        }

        if (array_key_exists("MaxRetention",$param) and $param["MaxRetention"] !== null) {
            $this->MaxRetention = $param["MaxRetention"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("MaxDispatchTps",$param) and $param["MaxDispatchTps"] !== null) {
            $this->MaxDispatchTps = $param["MaxDispatchTps"];
        }

        if (array_key_exists("MaxDispatchRateInBytes",$param) and $param["MaxDispatchRateInBytes"] !== null) {
            $this->MaxDispatchRateInBytes = $param["MaxDispatchRateInBytes"];
        }

        if (array_key_exists("MaxPublishRateInBytes",$param) and $param["MaxPublishRateInBytes"] !== null) {
            $this->MaxPublishRateInBytes = $param["MaxPublishRateInBytes"];
        }

        if (array_key_exists("MaxRetentionSizeInMB",$param) and $param["MaxRetentionSizeInMB"] !== null) {
            $this->MaxRetentionSizeInMB = $param["MaxRetentionSizeInMB"];
        }

        if (array_key_exists("PublicAccessEnabled",$param) and $param["PublicAccessEnabled"] !== null) {
            $this->PublicAccessEnabled = $param["PublicAccessEnabled"];
        }
    }
}
