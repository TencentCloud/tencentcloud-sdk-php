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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pulsar专业版集群规格信息
 *
 * @method string getSpecName() 获取集群规格名称
 * @method void setSpecName(string $SpecName) 设置集群规格名称
 * @method integer getMaxTps() 获取峰值tps
 * @method void setMaxTps(integer $MaxTps) 设置峰值tps
 * @method integer getMaxBandWidth() 获取峰值带宽。单位：mbps
 * @method void setMaxBandWidth(integer $MaxBandWidth) 设置峰值带宽。单位：mbps
 * @method integer getMaxNamespaces() 获取最大命名空间个数
 * @method void setMaxNamespaces(integer $MaxNamespaces) 设置最大命名空间个数
 * @method integer getMaxTopics() 获取可以创建的最大主题数
 * @method void setMaxTopics(integer $MaxTopics) 设置可以创建的最大主题数
 * @method integer getScalableTps() 获取规格外弹性TPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScalableTps(integer $ScalableTps) 设置规格外弹性TPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxPartitions() 获取32或者128
当前集群topic的最大分区数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxPartitions(integer $MaxPartitions) 设置32或者128
当前集群topic的最大分区数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxDelayedMessages() 获取最大延迟消息数量。0代表没有限制	
 * @method void setMaxDelayedMessages(integer $MaxDelayedMessages) 设置最大延迟消息数量。0代表没有限制	
 * @method integer getMaxTopicsPartitioned() 获取可以创建的最大主题分区数
 * @method void setMaxTopicsPartitioned(integer $MaxTopicsPartitioned) 设置可以创建的最大主题分区数
 * @method integer getBrokerMaxConnections() 获取单broker最大链接数
 * @method void setBrokerMaxConnections(integer $BrokerMaxConnections) 设置单broker最大链接数
 * @method integer getBrokerMaxConnectionsPerIp() 获取单IP最大链接数
 * @method void setBrokerMaxConnectionsPerIp(integer $BrokerMaxConnectionsPerIp) 设置单IP最大链接数
 * @method integer getMaximumElasticStorage() 获取弹性存储集群最大存储规格；固定存储该值为0
 * @method void setMaximumElasticStorage(integer $MaximumElasticStorage) 设置弹性存储集群最大存储规格；固定存储该值为0
 */
class PulsarProClusterSpecInfo extends AbstractModel
{
    /**
     * @var string 集群规格名称
     */
    public $SpecName;

    /**
     * @var integer 峰值tps
     */
    public $MaxTps;

    /**
     * @var integer 峰值带宽。单位：mbps
     */
    public $MaxBandWidth;

    /**
     * @var integer 最大命名空间个数
     */
    public $MaxNamespaces;

    /**
     * @var integer 可以创建的最大主题数
     */
    public $MaxTopics;

    /**
     * @var integer 规格外弹性TPS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScalableTps;

    /**
     * @var integer 32或者128
当前集群topic的最大分区数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxPartitions;

    /**
     * @var integer 最大延迟消息数量。0代表没有限制	
     */
    public $MaxDelayedMessages;

    /**
     * @var integer 可以创建的最大主题分区数
     */
    public $MaxTopicsPartitioned;

    /**
     * @var integer 单broker最大链接数
     */
    public $BrokerMaxConnections;

    /**
     * @var integer 单IP最大链接数
     */
    public $BrokerMaxConnectionsPerIp;

    /**
     * @var integer 弹性存储集群最大存储规格；固定存储该值为0
     */
    public $MaximumElasticStorage;

    /**
     * @param string $SpecName 集群规格名称
     * @param integer $MaxTps 峰值tps
     * @param integer $MaxBandWidth 峰值带宽。单位：mbps
     * @param integer $MaxNamespaces 最大命名空间个数
     * @param integer $MaxTopics 可以创建的最大主题数
     * @param integer $ScalableTps 规格外弹性TPS
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxPartitions 32或者128
当前集群topic的最大分区数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxDelayedMessages 最大延迟消息数量。0代表没有限制	
     * @param integer $MaxTopicsPartitioned 可以创建的最大主题分区数
     * @param integer $BrokerMaxConnections 单broker最大链接数
     * @param integer $BrokerMaxConnectionsPerIp 单IP最大链接数
     * @param integer $MaximumElasticStorage 弹性存储集群最大存储规格；固定存储该值为0
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
        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("MaxTps",$param) and $param["MaxTps"] !== null) {
            $this->MaxTps = $param["MaxTps"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("MaxNamespaces",$param) and $param["MaxNamespaces"] !== null) {
            $this->MaxNamespaces = $param["MaxNamespaces"];
        }

        if (array_key_exists("MaxTopics",$param) and $param["MaxTopics"] !== null) {
            $this->MaxTopics = $param["MaxTopics"];
        }

        if (array_key_exists("ScalableTps",$param) and $param["ScalableTps"] !== null) {
            $this->ScalableTps = $param["ScalableTps"];
        }

        if (array_key_exists("MaxPartitions",$param) and $param["MaxPartitions"] !== null) {
            $this->MaxPartitions = $param["MaxPartitions"];
        }

        if (array_key_exists("MaxDelayedMessages",$param) and $param["MaxDelayedMessages"] !== null) {
            $this->MaxDelayedMessages = $param["MaxDelayedMessages"];
        }

        if (array_key_exists("MaxTopicsPartitioned",$param) and $param["MaxTopicsPartitioned"] !== null) {
            $this->MaxTopicsPartitioned = $param["MaxTopicsPartitioned"];
        }

        if (array_key_exists("BrokerMaxConnections",$param) and $param["BrokerMaxConnections"] !== null) {
            $this->BrokerMaxConnections = $param["BrokerMaxConnections"];
        }

        if (array_key_exists("BrokerMaxConnectionsPerIp",$param) and $param["BrokerMaxConnectionsPerIp"] !== null) {
            $this->BrokerMaxConnectionsPerIp = $param["BrokerMaxConnectionsPerIp"];
        }

        if (array_key_exists("MaximumElasticStorage",$param) and $param["MaximumElasticStorage"] !== null) {
            $this->MaximumElasticStorage = $param["MaximumElasticStorage"];
        }
    }
}
