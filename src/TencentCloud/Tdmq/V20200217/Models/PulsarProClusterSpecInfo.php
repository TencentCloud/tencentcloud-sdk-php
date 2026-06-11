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
 * @method string getSpecName() 获取<p>集群规格名称</p>
 * @method void setSpecName(string $SpecName) 设置<p>集群规格名称</p>
 * @method integer getMaxTps() 获取<p>峰值tps</p>
 * @method void setMaxTps(integer $MaxTps) 设置<p>峰值tps</p>
 * @method integer getMaxBandWidth() 获取<p>峰值带宽。单位：mbps</p>
 * @method void setMaxBandWidth(integer $MaxBandWidth) 设置<p>峰值带宽。单位：mbps</p>
 * @method integer getMaxNamespaces() 获取<p>最大命名空间个数</p>
 * @method void setMaxNamespaces(integer $MaxNamespaces) 设置<p>最大命名空间个数</p>
 * @method integer getMaxTopics() 获取<p>可以创建的最大主题数</p>
 * @method void setMaxTopics(integer $MaxTopics) 设置<p>可以创建的最大主题数</p>
 * @method integer getScalableTps() 获取<p>规格外弹性TPS</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScalableTps(integer $ScalableTps) 设置<p>规格外弹性TPS</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxPartitions() 获取<p>32或者128<br>当前集群topic的最大分区数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxPartitions(integer $MaxPartitions) 设置<p>32或者128<br>当前集群topic的最大分区数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxDelayedMessages() 获取<p>最大延迟消息数量。0代表没有限制</p>
 * @method void setMaxDelayedMessages(integer $MaxDelayedMessages) 设置<p>最大延迟消息数量。0代表没有限制</p>
 * @method integer getMaxTopicsPartitioned() 获取<p>可以创建的最大主题分区数</p>
 * @method void setMaxTopicsPartitioned(integer $MaxTopicsPartitioned) 设置<p>可以创建的最大主题分区数</p>
 * @method integer getBrokerMaxConnections() 获取<p>单broker最大链接数</p>
 * @method void setBrokerMaxConnections(integer $BrokerMaxConnections) 设置<p>单broker最大链接数</p>
 * @method integer getBrokerMaxConnectionsPerIp() 获取<p>单IP最大链接数</p>
 * @method void setBrokerMaxConnectionsPerIp(integer $BrokerMaxConnectionsPerIp) 设置<p>单IP最大链接数</p>
 * @method integer getMaximumElasticStorage() 获取<p>弹性存储集群最大存储规格；固定存储该值为0</p>
 * @method void setMaximumElasticStorage(integer $MaximumElasticStorage) 设置<p>弹性存储集群最大存储规格；固定存储该值为0</p>
 * @method integer getTotalTps() 获取<p>当前集群可使用的全量TPS，包括弹性TPS</p>
 * @method void setTotalTps(integer $TotalTps) 设置<p>当前集群可使用的全量TPS，包括弹性TPS</p>
 */
class PulsarProClusterSpecInfo extends AbstractModel
{
    /**
     * @var string <p>集群规格名称</p>
     */
    public $SpecName;

    /**
     * @var integer <p>峰值tps</p>
     */
    public $MaxTps;

    /**
     * @var integer <p>峰值带宽。单位：mbps</p>
     */
    public $MaxBandWidth;

    /**
     * @var integer <p>最大命名空间个数</p>
     */
    public $MaxNamespaces;

    /**
     * @var integer <p>可以创建的最大主题数</p>
     */
    public $MaxTopics;

    /**
     * @var integer <p>规格外弹性TPS</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScalableTps;

    /**
     * @var integer <p>32或者128<br>当前集群topic的最大分区数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxPartitions;

    /**
     * @var integer <p>最大延迟消息数量。0代表没有限制</p>
     */
    public $MaxDelayedMessages;

    /**
     * @var integer <p>可以创建的最大主题分区数</p>
     */
    public $MaxTopicsPartitioned;

    /**
     * @var integer <p>单broker最大链接数</p>
     */
    public $BrokerMaxConnections;

    /**
     * @var integer <p>单IP最大链接数</p>
     */
    public $BrokerMaxConnectionsPerIp;

    /**
     * @var integer <p>弹性存储集群最大存储规格；固定存储该值为0</p>
     */
    public $MaximumElasticStorage;

    /**
     * @var integer <p>当前集群可使用的全量TPS，包括弹性TPS</p>
     */
    public $TotalTps;

    /**
     * @param string $SpecName <p>集群规格名称</p>
     * @param integer $MaxTps <p>峰值tps</p>
     * @param integer $MaxBandWidth <p>峰值带宽。单位：mbps</p>
     * @param integer $MaxNamespaces <p>最大命名空间个数</p>
     * @param integer $MaxTopics <p>可以创建的最大主题数</p>
     * @param integer $ScalableTps <p>规格外弹性TPS</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxPartitions <p>32或者128<br>当前集群topic的最大分区数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxDelayedMessages <p>最大延迟消息数量。0代表没有限制</p>
     * @param integer $MaxTopicsPartitioned <p>可以创建的最大主题分区数</p>
     * @param integer $BrokerMaxConnections <p>单broker最大链接数</p>
     * @param integer $BrokerMaxConnectionsPerIp <p>单IP最大链接数</p>
     * @param integer $MaximumElasticStorage <p>弹性存储集群最大存储规格；固定存储该值为0</p>
     * @param integer $TotalTps <p>当前集群可使用的全量TPS，包括弹性TPS</p>
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

        if (array_key_exists("TotalTps",$param) and $param["TotalTps"] !== null) {
            $this->TotalTps = $param["TotalTps"];
        }
    }
}
