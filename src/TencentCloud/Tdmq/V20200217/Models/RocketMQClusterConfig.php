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
 * RocketMQ集群配置
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
 * @method integer getMaxRetentionTime() 获取消息最大保留时间，以毫秒为单位
 * @method void setMaxRetentionTime(integer $MaxRetentionTime) 设置消息最大保留时间，以毫秒为单位
 * @method integer getMaxLatencyTime() 获取消息最长延时，以毫秒为单位
 * @method void setMaxLatencyTime(integer $MaxLatencyTime) 设置消息最长延时，以毫秒为单位
 * @method integer getMaxQueuesPerTopic() 获取单个主题最大队列数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxQueuesPerTopic(integer $MaxQueuesPerTopic) 设置单个主题最大队列数
注意：此字段可能返回 null，表示取不到有效值。
 */
class RocketMQClusterConfig extends AbstractModel
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
     * @var integer 消息最大保留时间，以毫秒为单位
     */
    public $MaxRetentionTime;

    /**
     * @var integer 消息最长延时，以毫秒为单位
     */
    public $MaxLatencyTime;

    /**
     * @var integer 单个主题最大队列数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxQueuesPerTopic;

    /**
     * @param integer $MaxTpsPerNamespace 单命名空间TPS上线
     * @param integer $MaxNamespaceNum 最大命名空间数量
     * @param integer $UsedNamespaceNum 已使用命名空间数量
     * @param integer $MaxTopicNum 最大Topic数量
     * @param integer $UsedTopicNum 已使用Topic数量
     * @param integer $MaxGroupNum 最大Group数量
     * @param integer $UsedGroupNum 已使用Group数量
     * @param integer $MaxRetentionTime 消息最大保留时间，以毫秒为单位
     * @param integer $MaxLatencyTime 消息最长延时，以毫秒为单位
     * @param integer $MaxQueuesPerTopic 单个主题最大队列数
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

        if (array_key_exists("MaxRetentionTime",$param) and $param["MaxRetentionTime"] !== null) {
            $this->MaxRetentionTime = $param["MaxRetentionTime"];
        }

        if (array_key_exists("MaxLatencyTime",$param) and $param["MaxLatencyTime"] !== null) {
            $this->MaxLatencyTime = $param["MaxLatencyTime"];
        }

        if (array_key_exists("MaxQueuesPerTopic",$param) and $param["MaxQueuesPerTopic"] !== null) {
            $this->MaxQueuesPerTopic = $param["MaxQueuesPerTopic"];
        }
    }
}
