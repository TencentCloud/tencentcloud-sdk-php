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
 * RocketMQ专享集群实例配置
 *
 * @method integer getMaxTpsPerNamespace() 获取单命名空间TPS上线
 * @method void setMaxTpsPerNamespace(integer $MaxTpsPerNamespace) 设置单命名空间TPS上线
 * @method integer getMaxNamespaceNum() 获取最大命名空间数量
 * @method void setMaxNamespaceNum(integer $MaxNamespaceNum) 设置最大命名空间数量
 * @method integer getUsedNamespaceNum() 获取已使用命名空间数量
 * @method void setUsedNamespaceNum(integer $UsedNamespaceNum) 设置已使用命名空间数量
 * @method integer getMaxTopicNum() 获取最大Topic数量
 * @method void setMaxTopicNum(integer $MaxTopicNum) 设置最大Topic数量
 * @method integer getUsedTopicNum() 获取已使用Topic数量
 * @method void setUsedTopicNum(integer $UsedTopicNum) 设置已使用Topic数量
 * @method integer getMaxGroupNum() 获取最大Group数量
 * @method void setMaxGroupNum(integer $MaxGroupNum) 设置最大Group数量
 * @method integer getUsedGroupNum() 获取已使用Group数量
 * @method void setUsedGroupNum(integer $UsedGroupNum) 设置已使用Group数量
 * @method string getConfigDisplay() 获取集群类型
 * @method void setConfigDisplay(string $ConfigDisplay) 设置集群类型
 * @method integer getNodeCount() 获取集群节点数
 * @method void setNodeCount(integer $NodeCount) 设置集群节点数
 * @method array getNodeDistribution() 获取节点分布情况
 * @method void setNodeDistribution(array $NodeDistribution) 设置节点分布情况
 * @method array getTopicDistribution() 获取topic分布情况
 * @method void setTopicDistribution(array $TopicDistribution) 设置topic分布情况
 * @method integer getMaxQueuesPerTopic() 获取每个主题最大队列数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxQueuesPerTopic(integer $MaxQueuesPerTopic) 设置每个主题最大队列数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRetention() 获取最大可设置消息保留时间，小时为单位	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRetention(integer $MaxRetention) 设置最大可设置消息保留时间，小时为单位	
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinRetention() 获取最小可设置消息保留时间，小时为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinRetention(integer $MinRetention) 设置最小可设置消息保留时间，小时为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetention() 获取实例消息保留时间，小时为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetention(integer $Retention) 设置实例消息保留时间，小时为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTopicNumLowerLimit() 获取Topic个数最小配额，即免费额度，默认为集群规格单节点最小配额*节点个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicNumLowerLimit(integer $TopicNumLowerLimit) 设置Topic个数最小配额，即免费额度，默认为集群规格单节点最小配额*节点个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTopicNumUpperLimit() 获取Topic个数最大配额，默认为集群规格单节点最大配额*节点个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicNumUpperLimit(integer $TopicNumUpperLimit) 设置Topic个数最大配额，默认为集群规格单节点最大配额*节点个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSendReceiveRatio() 获取控制生产和消费消息的 TPS 占比，取值范围0～1，默认值为0.5
 * @method void setSendReceiveRatio(float $SendReceiveRatio) 设置控制生产和消费消息的 TPS 占比，取值范围0～1，默认值为0.5
 * @method integer getTpsLimit() 获取收发 TPS 峰值上限
 * @method void setTpsLimit(integer $TpsLimit) 设置收发 TPS 峰值上限
 * @method string getGeneralSkuCode() 获取通用集群规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGeneralSkuCode(string $GeneralSkuCode) 设置通用集群规格
注意：此字段可能返回 null，表示取不到有效值。
 */
class RocketMQInstanceConfig extends AbstractModel
{
    /**
     * @var integer 单命名空间TPS上线
     */
    public $MaxTpsPerNamespace;

    /**
     * @var integer 最大命名空间数量
     */
    public $MaxNamespaceNum;

    /**
     * @var integer 已使用命名空间数量
     */
    public $UsedNamespaceNum;

    /**
     * @var integer 最大Topic数量
     */
    public $MaxTopicNum;

    /**
     * @var integer 已使用Topic数量
     */
    public $UsedTopicNum;

    /**
     * @var integer 最大Group数量
     */
    public $MaxGroupNum;

    /**
     * @var integer 已使用Group数量
     */
    public $UsedGroupNum;

    /**
     * @var string 集群类型
     */
    public $ConfigDisplay;

    /**
     * @var integer 集群节点数
     */
    public $NodeCount;

    /**
     * @var array 节点分布情况
     */
    public $NodeDistribution;

    /**
     * @var array topic分布情况
     */
    public $TopicDistribution;

    /**
     * @var integer 每个主题最大队列数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxQueuesPerTopic;

    /**
     * @var integer 最大可设置消息保留时间，小时为单位	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRetention;

    /**
     * @var integer 最小可设置消息保留时间，小时为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinRetention;

    /**
     * @var integer 实例消息保留时间，小时为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Retention;

    /**
     * @var integer Topic个数最小配额，即免费额度，默认为集群规格单节点最小配额*节点个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicNumLowerLimit;

    /**
     * @var integer Topic个数最大配额，默认为集群规格单节点最大配额*节点个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicNumUpperLimit;

    /**
     * @var float 控制生产和消费消息的 TPS 占比，取值范围0～1，默认值为0.5
     */
    public $SendReceiveRatio;

    /**
     * @var integer 收发 TPS 峰值上限
     */
    public $TpsLimit;

    /**
     * @var string 通用集群规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GeneralSkuCode;

    /**
     * @param integer $MaxTpsPerNamespace 单命名空间TPS上线
     * @param integer $MaxNamespaceNum 最大命名空间数量
     * @param integer $UsedNamespaceNum 已使用命名空间数量
     * @param integer $MaxTopicNum 最大Topic数量
     * @param integer $UsedTopicNum 已使用Topic数量
     * @param integer $MaxGroupNum 最大Group数量
     * @param integer $UsedGroupNum 已使用Group数量
     * @param string $ConfigDisplay 集群类型
     * @param integer $NodeCount 集群节点数
     * @param array $NodeDistribution 节点分布情况
     * @param array $TopicDistribution topic分布情况
     * @param integer $MaxQueuesPerTopic 每个主题最大队列数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRetention 最大可设置消息保留时间，小时为单位	
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinRetention 最小可设置消息保留时间，小时为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Retention 实例消息保留时间，小时为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TopicNumLowerLimit Topic个数最小配额，即免费额度，默认为集群规格单节点最小配额*节点个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TopicNumUpperLimit Topic个数最大配额，默认为集群规格单节点最大配额*节点个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $SendReceiveRatio 控制生产和消费消息的 TPS 占比，取值范围0～1，默认值为0.5
     * @param integer $TpsLimit 收发 TPS 峰值上限
     * @param string $GeneralSkuCode 通用集群规格
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
        if (array_key_exists("MaxTpsPerNamespace",$param) and $param["MaxTpsPerNamespace"] !== null) {
            $this->MaxTpsPerNamespace = $param["MaxTpsPerNamespace"];
        }

        if (array_key_exists("MaxNamespaceNum",$param) and $param["MaxNamespaceNum"] !== null) {
            $this->MaxNamespaceNum = $param["MaxNamespaceNum"];
        }

        if (array_key_exists("UsedNamespaceNum",$param) and $param["UsedNamespaceNum"] !== null) {
            $this->UsedNamespaceNum = $param["UsedNamespaceNum"];
        }

        if (array_key_exists("MaxTopicNum",$param) and $param["MaxTopicNum"] !== null) {
            $this->MaxTopicNum = $param["MaxTopicNum"];
        }

        if (array_key_exists("UsedTopicNum",$param) and $param["UsedTopicNum"] !== null) {
            $this->UsedTopicNum = $param["UsedTopicNum"];
        }

        if (array_key_exists("MaxGroupNum",$param) and $param["MaxGroupNum"] !== null) {
            $this->MaxGroupNum = $param["MaxGroupNum"];
        }

        if (array_key_exists("UsedGroupNum",$param) and $param["UsedGroupNum"] !== null) {
            $this->UsedGroupNum = $param["UsedGroupNum"];
        }

        if (array_key_exists("ConfigDisplay",$param) and $param["ConfigDisplay"] !== null) {
            $this->ConfigDisplay = $param["ConfigDisplay"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("NodeDistribution",$param) and $param["NodeDistribution"] !== null) {
            $this->NodeDistribution = [];
            foreach ($param["NodeDistribution"] as $key => $value){
                $obj = new InstanceNodeDistribution();
                $obj->deserialize($value);
                array_push($this->NodeDistribution, $obj);
            }
        }

        if (array_key_exists("TopicDistribution",$param) and $param["TopicDistribution"] !== null) {
            $this->TopicDistribution = [];
            foreach ($param["TopicDistribution"] as $key => $value){
                $obj = new RocketMQTopicDistribution();
                $obj->deserialize($value);
                array_push($this->TopicDistribution, $obj);
            }
        }

        if (array_key_exists("MaxQueuesPerTopic",$param) and $param["MaxQueuesPerTopic"] !== null) {
            $this->MaxQueuesPerTopic = $param["MaxQueuesPerTopic"];
        }

        if (array_key_exists("MaxRetention",$param) and $param["MaxRetention"] !== null) {
            $this->MaxRetention = $param["MaxRetention"];
        }

        if (array_key_exists("MinRetention",$param) and $param["MinRetention"] !== null) {
            $this->MinRetention = $param["MinRetention"];
        }

        if (array_key_exists("Retention",$param) and $param["Retention"] !== null) {
            $this->Retention = $param["Retention"];
        }

        if (array_key_exists("TopicNumLowerLimit",$param) and $param["TopicNumLowerLimit"] !== null) {
            $this->TopicNumLowerLimit = $param["TopicNumLowerLimit"];
        }

        if (array_key_exists("TopicNumUpperLimit",$param) and $param["TopicNumUpperLimit"] !== null) {
            $this->TopicNumUpperLimit = $param["TopicNumUpperLimit"];
        }

        if (array_key_exists("SendReceiveRatio",$param) and $param["SendReceiveRatio"] !== null) {
            $this->SendReceiveRatio = $param["SendReceiveRatio"];
        }

        if (array_key_exists("TpsLimit",$param) and $param["TpsLimit"] !== null) {
            $this->TpsLimit = $param["TpsLimit"];
        }

        if (array_key_exists("GeneralSkuCode",$param) and $param["GeneralSkuCode"] !== null) {
            $this->GeneralSkuCode = $param["GeneralSkuCode"];
        }
    }
}
