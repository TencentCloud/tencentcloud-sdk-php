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
 * 批量修改topic参数
 *
 * @method string getTopicName() 获取topic名称
 * @method void setTopicName(string $TopicName) 设置topic名称
 * @method integer getPartitionNum() 获取分区数
 * @method void setPartitionNum(integer $PartitionNum) 设置分区数
 * @method string getNote() 获取备注
 * @method void setNote(string $Note) 设置备注
 * @method integer getReplicaNum() 获取副本数
 * @method void setReplicaNum(integer $ReplicaNum) 设置副本数
 * @method string getCleanUpPolicy() 获取消息删除策略，可以选择delete 或者compact
 * @method void setCleanUpPolicy(string $CleanUpPolicy) 设置消息删除策略，可以选择delete 或者compact
 * @method integer getMinInsyncReplicas() 获取当producer设置request.required.acks为-1时，min.insync.replicas指定replicas的最小数目
 * @method void setMinInsyncReplicas(integer $MinInsyncReplicas) 设置当producer设置request.required.acks为-1时，min.insync.replicas指定replicas的最小数目
 * @method boolean getUncleanLeaderElectionEnable() 获取是否允许非ISR的副本成为Leader
 * @method void setUncleanLeaderElectionEnable(boolean $UncleanLeaderElectionEnable) 设置是否允许非ISR的副本成为Leader
 * @method integer getRetentionMs() 获取topic维度的消息保留时间（毫秒）范围1 分钟到90 天
 * @method void setRetentionMs(integer $RetentionMs) 设置topic维度的消息保留时间（毫秒）范围1 分钟到90 天
 * @method integer getRetentionBytes() 获取topic维度的消息保留大小，范围1 MB到1024 GB
 * @method void setRetentionBytes(integer $RetentionBytes) 设置topic维度的消息保留大小，范围1 MB到1024 GB
 * @method integer getSegmentMs() 获取Segment分片滚动的时长（毫秒），范围1 到90 天
 * @method void setSegmentMs(integer $SegmentMs) 设置Segment分片滚动的时长（毫秒），范围1 到90 天
 * @method integer getMaxMessageBytes() 获取批次的消息大小，范围1 KB到12 MB
 * @method void setMaxMessageBytes(integer $MaxMessageBytes) 设置批次的消息大小，范围1 KB到12 MB
 */
class BatchModifyTopicInfo extends AbstractModel
{
    /**
     * @var string topic名称
     */
    public $TopicName;

    /**
     * @var integer 分区数
     */
    public $PartitionNum;

    /**
     * @var string 备注
     */
    public $Note;

    /**
     * @var integer 副本数
     */
    public $ReplicaNum;

    /**
     * @var string 消息删除策略，可以选择delete 或者compact
     */
    public $CleanUpPolicy;

    /**
     * @var integer 当producer设置request.required.acks为-1时，min.insync.replicas指定replicas的最小数目
     */
    public $MinInsyncReplicas;

    /**
     * @var boolean 是否允许非ISR的副本成为Leader
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer topic维度的消息保留时间（毫秒）范围1 分钟到90 天
     */
    public $RetentionMs;

    /**
     * @var integer topic维度的消息保留大小，范围1 MB到1024 GB
     */
    public $RetentionBytes;

    /**
     * @var integer Segment分片滚动的时长（毫秒），范围1 到90 天
     */
    public $SegmentMs;

    /**
     * @var integer 批次的消息大小，范围1 KB到12 MB
     */
    public $MaxMessageBytes;

    /**
     * @param string $TopicName topic名称
     * @param integer $PartitionNum 分区数
     * @param string $Note 备注
     * @param integer $ReplicaNum 副本数
     * @param string $CleanUpPolicy 消息删除策略，可以选择delete 或者compact
     * @param integer $MinInsyncReplicas 当producer设置request.required.acks为-1时，min.insync.replicas指定replicas的最小数目
     * @param boolean $UncleanLeaderElectionEnable 是否允许非ISR的副本成为Leader
     * @param integer $RetentionMs topic维度的消息保留时间（毫秒）范围1 分钟到90 天
     * @param integer $RetentionBytes topic维度的消息保留大小，范围1 MB到1024 GB
     * @param integer $SegmentMs Segment分片滚动的时长（毫秒），范围1 到90 天
     * @param integer $MaxMessageBytes 批次的消息大小，范围1 KB到12 MB
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }

        if (array_key_exists("CleanUpPolicy",$param) and $param["CleanUpPolicy"] !== null) {
            $this->CleanUpPolicy = $param["CleanUpPolicy"];
        }

        if (array_key_exists("MinInsyncReplicas",$param) and $param["MinInsyncReplicas"] !== null) {
            $this->MinInsyncReplicas = $param["MinInsyncReplicas"];
        }

        if (array_key_exists("UncleanLeaderElectionEnable",$param) and $param["UncleanLeaderElectionEnable"] !== null) {
            $this->UncleanLeaderElectionEnable = $param["UncleanLeaderElectionEnable"];
        }

        if (array_key_exists("RetentionMs",$param) and $param["RetentionMs"] !== null) {
            $this->RetentionMs = $param["RetentionMs"];
        }

        if (array_key_exists("RetentionBytes",$param) and $param["RetentionBytes"] !== null) {
            $this->RetentionBytes = $param["RetentionBytes"];
        }

        if (array_key_exists("SegmentMs",$param) and $param["SegmentMs"] !== null) {
            $this->SegmentMs = $param["SegmentMs"];
        }

        if (array_key_exists("MaxMessageBytes",$param) and $param["MaxMessageBytes"] !== null) {
            $this->MaxMessageBytes = $param["MaxMessageBytes"];
        }
    }
}
