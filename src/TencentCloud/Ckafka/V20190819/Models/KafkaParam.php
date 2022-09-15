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
 * Ckafka配置
 *
 * @method boolean getSelfBuilt() 获取是否为自建集群
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置是否为自建集群
 * @method string getResource() 获取实例资源
 * @method void setResource(string $Resource) 设置实例资源
 * @method string getTopic() 获取Topic名称，多个以“,”分隔
 * @method void setTopic(string $Topic) 设置Topic名称，多个以“,”分隔
 * @method string getOffsetType() 获取Offset类型，最开始位置earliest，最新位置latest，时间点位置timestamp
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffsetType(string $OffsetType) 设置Offset类型，最开始位置earliest，最新位置latest，时间点位置timestamp
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTime() 获取Offset类型为timestamp时必传，传时间戳，精确到秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(integer $StartTime) 设置Offset类型为timestamp时必传，传时间戳，精确到秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceName() 获取实例资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceName(string $ResourceName) 设置实例资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getZoneId() 获取Zone ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(integer $ZoneId) 设置Zone ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicId() 获取Topic的Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicId(string $TopicId) 设置Topic的Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPartitionNum() 获取Topic的分区数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionNum(integer $PartitionNum) 设置Topic的分区数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableToleration() 获取启用容错实例/开启死信队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableToleration(boolean $EnableToleration) 设置启用容错实例/开启死信队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQpsLimit() 获取Qps 限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQpsLimit(integer $QpsLimit) 设置Qps 限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTableMappings() 获取Table到Topic的路由，「分发到多个topic」开关打开时必传
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableMappings(array $TableMappings) 设置Table到Topic的路由，「分发到多个topic」开关打开时必传
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUseTableMapping() 获取「分发到多个topic」开关，默认为false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseTableMapping(boolean $UseTableMapping) 设置「分发到多个topic」开关，默认为false
注意：此字段可能返回 null，表示取不到有效值。
 */
class KafkaParam extends AbstractModel
{
    /**
     * @var boolean 是否为自建集群
     */
    public $SelfBuilt;

    /**
     * @var string 实例资源
     */
    public $Resource;

    /**
     * @var string Topic名称，多个以“,”分隔
     */
    public $Topic;

    /**
     * @var string Offset类型，最开始位置earliest，最新位置latest，时间点位置timestamp
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OffsetType;

    /**
     * @var integer Offset类型为timestamp时必传，传时间戳，精确到秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 实例资源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceName;

    /**
     * @var integer Zone ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var string Topic的Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicId;

    /**
     * @var integer Topic的分区数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionNum;

    /**
     * @var boolean 启用容错实例/开启死信队列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableToleration;

    /**
     * @var integer Qps 限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QpsLimit;

    /**
     * @var array Table到Topic的路由，「分发到多个topic」开关打开时必传
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableMappings;

    /**
     * @var boolean 「分发到多个topic」开关，默认为false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseTableMapping;

    /**
     * @param boolean $SelfBuilt 是否为自建集群
     * @param string $Resource 实例资源
     * @param string $Topic Topic名称，多个以“,”分隔
     * @param string $OffsetType Offset类型，最开始位置earliest，最新位置latest，时间点位置timestamp
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTime Offset类型为timestamp时必传，传时间戳，精确到秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceName 实例资源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ZoneId Zone ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicId Topic的Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PartitionNum Topic的分区数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableToleration 启用容错实例/开启死信队列
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QpsLimit Qps 限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TableMappings Table到Topic的路由，「分发到多个topic」开关打开时必传
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UseTableMapping 「分发到多个topic」开关，默认为false
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
        if (array_key_exists("SelfBuilt",$param) and $param["SelfBuilt"] !== null) {
            $this->SelfBuilt = $param["SelfBuilt"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("OffsetType",$param) and $param["OffsetType"] !== null) {
            $this->OffsetType = $param["OffsetType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("EnableToleration",$param) and $param["EnableToleration"] !== null) {
            $this->EnableToleration = $param["EnableToleration"];
        }

        if (array_key_exists("QpsLimit",$param) and $param["QpsLimit"] !== null) {
            $this->QpsLimit = $param["QpsLimit"];
        }

        if (array_key_exists("TableMappings",$param) and $param["TableMappings"] !== null) {
            $this->TableMappings = [];
            foreach ($param["TableMappings"] as $key => $value){
                $obj = new TableMapping();
                $obj->deserialize($value);
                array_push($this->TableMappings, $obj);
            }
        }

        if (array_key_exists("UseTableMapping",$param) and $param["UseTableMapping"] !== null) {
            $this->UseTableMapping = $param["UseTableMapping"];
        }
    }
}
