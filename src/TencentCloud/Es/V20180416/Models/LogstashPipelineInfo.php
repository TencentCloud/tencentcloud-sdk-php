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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Logstash管道信息
 *
 * @method string getPipelineId() 获取管道ID
 * @method void setPipelineId(string $PipelineId) 设置管道ID
 * @method string getPipelineDesc() 获取管道描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPipelineDesc(string $PipelineDesc) 设置管道描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfig() 获取管道配置内容
 * @method void setConfig(string $Config) 设置管道配置内容
 * @method integer getStatus() 获取管道状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置管道状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWorkers() 获取管道的Worker数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkers(integer $Workers) 设置管道的Worker数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBatchSize() 获取管道批处理大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchSize(integer $BatchSize) 设置管道批处理大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBatchDelay() 获取管道批处理延迟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchDelay(integer $BatchDelay) 设置管道批处理延迟
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueueType() 获取管道缓冲队列类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueType(string $QueueType) 设置管道缓冲队列类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueueMaxBytes() 获取管道缓冲队列大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueMaxBytes(string $QueueMaxBytes) 设置管道缓冲队列大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQueueCheckPointWrites() 获取管道缓冲队列检查点写入数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueCheckPointWrites(integer $QueueCheckPointWrites) 设置管道缓冲队列检查点写入数
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogstashPipelineInfo extends AbstractModel
{
    /**
     * @var string 管道ID
     */
    public $PipelineId;

    /**
     * @var string 管道描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PipelineDesc;

    /**
     * @var string 管道配置内容
     */
    public $Config;

    /**
     * @var integer 管道状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 管道的Worker数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Workers;

    /**
     * @var integer 管道批处理大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchSize;

    /**
     * @var integer 管道批处理延迟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchDelay;

    /**
     * @var string 管道缓冲队列类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueType;

    /**
     * @var string 管道缓冲队列大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueMaxBytes;

    /**
     * @var integer 管道缓冲队列检查点写入数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueCheckPointWrites;

    /**
     * @param string $PipelineId 管道ID
     * @param string $PipelineDesc 管道描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Config 管道配置内容
     * @param integer $Status 管道状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Workers 管道的Worker数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BatchSize 管道批处理大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BatchDelay 管道批处理延迟
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueueType 管道缓冲队列类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueueMaxBytes 管道缓冲队列大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QueueCheckPointWrites 管道缓冲队列检查点写入数
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
        if (array_key_exists("PipelineId",$param) and $param["PipelineId"] !== null) {
            $this->PipelineId = $param["PipelineId"];
        }

        if (array_key_exists("PipelineDesc",$param) and $param["PipelineDesc"] !== null) {
            $this->PipelineDesc = $param["PipelineDesc"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Workers",$param) and $param["Workers"] !== null) {
            $this->Workers = $param["Workers"];
        }

        if (array_key_exists("BatchSize",$param) and $param["BatchSize"] !== null) {
            $this->BatchSize = $param["BatchSize"];
        }

        if (array_key_exists("BatchDelay",$param) and $param["BatchDelay"] !== null) {
            $this->BatchDelay = $param["BatchDelay"];
        }

        if (array_key_exists("QueueType",$param) and $param["QueueType"] !== null) {
            $this->QueueType = $param["QueueType"];
        }

        if (array_key_exists("QueueMaxBytes",$param) and $param["QueueMaxBytes"] !== null) {
            $this->QueueMaxBytes = $param["QueueMaxBytes"];
        }

        if (array_key_exists("QueueCheckPointWrites",$param) and $param["QueueCheckPointWrites"] !== null) {
            $this->QueueCheckPointWrites = $param["QueueCheckPointWrites"];
        }
    }
}
