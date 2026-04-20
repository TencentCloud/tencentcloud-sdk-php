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
 * Ckafka配置
 *
 * @method boolean getSelfBuilt() 获取<p>是否为自建集群</p>
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置<p>是否为自建集群</p>
 * @method string getResource() 获取<p>ckafka集群实例Id</p>
 * @method void setResource(string $Resource) 设置<p>ckafka集群实例Id</p>
 * @method string getTopic() 获取<p>主题名，多个以“,”分隔</p>
 * @method void setTopic(string $Topic) 设置<p>主题名，多个以“,”分隔</p>
 * @method string getOffsetType() 获取<p>Offset类型，最开始位置earliest，最新位置latest，时间点位置timestamp</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffsetType(string $OffsetType) 设置<p>Offset类型，最开始位置earliest，最新位置latest，时间点位置timestamp</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTime() 获取<p>Offset类型为timestamp时必传，传时间戳，精确到秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(integer $StartTime) 设置<p>Offset类型为timestamp时必传，传时间戳，精确到秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceName() 获取<p>实例资源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceName(string $ResourceName) 设置<p>实例资源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getZoneId() 获取<p>可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(integer $ZoneId) 设置<p>可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicId() 获取<p>主题Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicId(string $TopicId) 设置<p>主题Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPartitionNum() 获取<p>Topic的分区数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionNum(integer $PartitionNum) 设置<p>Topic的分区数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableToleration() 获取<p>启用容错实例/开启死信队列</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableToleration(boolean $EnableToleration) 设置<p>启用容错实例/开启死信队列</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQpsLimit() 获取<p>Qps 限制</p>
 * @method void setQpsLimit(integer $QpsLimit) 设置<p>Qps 限制</p>
 * @method array getTableMappings() 获取<p>Table到Topic的路由，「分发到多个topic」开关打开时必传</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableMappings(array $TableMappings) 设置<p>Table到Topic的路由，「分发到多个topic」开关打开时必传</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUseTableMapping() 获取<p>「分发到多个topic」开关，默认为false</p>
 * @method void setUseTableMapping(boolean $UseTableMapping) 设置<p>「分发到多个topic」开关，默认为false</p>
 * @method boolean getUseAutoCreateTopic() 获取<p>使用的Topic是否需要自动创建（目前只支持SOURCE流入任务，如果不使用分发到多个topic，需要在Topic字段填写需要自动创建的topic名）</p>
 * @method void setUseAutoCreateTopic(boolean $UseAutoCreateTopic) 设置<p>使用的Topic是否需要自动创建（目前只支持SOURCE流入任务，如果不使用分发到多个topic，需要在Topic字段填写需要自动创建的topic名）</p>
 * @method string getCompressionType() 获取<p>写入Topic时是否进行压缩，不开启填&quot;none&quot;，开启的话，填写&quot;open&quot;。</p>
 * @method void setCompressionType(string $CompressionType) 设置<p>写入Topic时是否进行压缩，不开启填&quot;none&quot;，开启的话，填写&quot;open&quot;。</p>
 * @method integer getMsgMultiple() 获取<p>源topic消息1条扩增成msgMultiple条写入目标topic(该参数目前只有ckafka流入ckafka适用)</p>
 * @method void setMsgMultiple(integer $MsgMultiple) 设置<p>源topic消息1条扩增成msgMultiple条写入目标topic(该参数目前只有ckafka流入ckafka适用)</p>
 * @method string getConnectorSyncType() 获取<p>数据同步专用参数, 正常数据处理可为空, 实例级别同步: 仅同步元数据填写&quot;META_SYNC_INSTANCE_TYPE&quot;, 同步元数据及全部topic内消息的填写&quot;META_AND_DATA_SYNC_INSTANCE_TYPE&quot;; topic级别同步: 选中的源和目标topic中的消息(需要目标实例也包含该topic)填写&quot;DATA_SYNC_TYPE&quot;</p>
 * @method void setConnectorSyncType(string $ConnectorSyncType) 设置<p>数据同步专用参数, 正常数据处理可为空, 实例级别同步: 仅同步元数据填写&quot;META_SYNC_INSTANCE_TYPE&quot;, 同步元数据及全部topic内消息的填写&quot;META_AND_DATA_SYNC_INSTANCE_TYPE&quot;; topic级别同步: 选中的源和目标topic中的消息(需要目标实例也包含该topic)填写&quot;DATA_SYNC_TYPE&quot;</p>
 * @method boolean getKeepPartition() 获取<p>数据同步专用参数, 当通过时,希望下游的消息写入分区与上游的一致,则填true,但下游分区小于上游时,会报错; 不需要一致则为false, 默认为false</p>
 * @method void setKeepPartition(boolean $KeepPartition) 设置<p>数据同步专用参数, 当通过时,希望下游的消息写入分区与上游的一致,则填true,但下游分区小于上游时,会报错; 不需要一致则为false, 默认为false</p>
 * @method string getTopicRegularExpression() 获取<p>正则匹配Topic列表</p>
 * @method void setTopicRegularExpression(string $TopicRegularExpression) 设置<p>正则匹配Topic列表</p>
 * @method string getPrefix() 获取<p>Topic 前缀</p>
 * @method void setPrefix(string $Prefix) 设置<p>Topic 前缀</p>
 * @method string getSeparator() 获取<p>Topic前缀分隔符</p>
 * @method void setSeparator(string $Separator) 设置<p>Topic前缀分隔符</p>
 * @method array getTopicList() 获取<p>多选topic列表</p>
 * @method void setTopicList(array $TopicList) 设置<p>多选topic列表</p>
 */
class KafkaParam extends AbstractModel
{
    /**
     * @var boolean <p>是否为自建集群</p>
     */
    public $SelfBuilt;

    /**
     * @var string <p>ckafka集群实例Id</p>
     */
    public $Resource;

    /**
     * @var string <p>主题名，多个以“,”分隔</p>
     */
    public $Topic;

    /**
     * @var string <p>Offset类型，最开始位置earliest，最新位置latest，时间点位置timestamp</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OffsetType;

    /**
     * @var integer <p>Offset类型为timestamp时必传，传时间戳，精确到秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>实例资源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceName;

    /**
     * @var integer <p>可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var string <p>主题Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicId;

    /**
     * @var integer <p>Topic的分区数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionNum;

    /**
     * @var boolean <p>启用容错实例/开启死信队列</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableToleration;

    /**
     * @var integer <p>Qps 限制</p>
     */
    public $QpsLimit;

    /**
     * @var array <p>Table到Topic的路由，「分发到多个topic」开关打开时必传</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableMappings;

    /**
     * @var boolean <p>「分发到多个topic」开关，默认为false</p>
     */
    public $UseTableMapping;

    /**
     * @var boolean <p>使用的Topic是否需要自动创建（目前只支持SOURCE流入任务，如果不使用分发到多个topic，需要在Topic字段填写需要自动创建的topic名）</p>
     */
    public $UseAutoCreateTopic;

    /**
     * @var string <p>写入Topic时是否进行压缩，不开启填&quot;none&quot;，开启的话，填写&quot;open&quot;。</p>
     */
    public $CompressionType;

    /**
     * @var integer <p>源topic消息1条扩增成msgMultiple条写入目标topic(该参数目前只有ckafka流入ckafka适用)</p>
     */
    public $MsgMultiple;

    /**
     * @var string <p>数据同步专用参数, 正常数据处理可为空, 实例级别同步: 仅同步元数据填写&quot;META_SYNC_INSTANCE_TYPE&quot;, 同步元数据及全部topic内消息的填写&quot;META_AND_DATA_SYNC_INSTANCE_TYPE&quot;; topic级别同步: 选中的源和目标topic中的消息(需要目标实例也包含该topic)填写&quot;DATA_SYNC_TYPE&quot;</p>
     */
    public $ConnectorSyncType;

    /**
     * @var boolean <p>数据同步专用参数, 当通过时,希望下游的消息写入分区与上游的一致,则填true,但下游分区小于上游时,会报错; 不需要一致则为false, 默认为false</p>
     */
    public $KeepPartition;

    /**
     * @var string <p>正则匹配Topic列表</p>
     */
    public $TopicRegularExpression;

    /**
     * @var string <p>Topic 前缀</p>
     */
    public $Prefix;

    /**
     * @var string <p>Topic前缀分隔符</p>
     */
    public $Separator;

    /**
     * @var array <p>多选topic列表</p>
     */
    public $TopicList;

    /**
     * @param boolean $SelfBuilt <p>是否为自建集群</p>
     * @param string $Resource <p>ckafka集群实例Id</p>
     * @param string $Topic <p>主题名，多个以“,”分隔</p>
     * @param string $OffsetType <p>Offset类型，最开始位置earliest，最新位置latest，时间点位置timestamp</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTime <p>Offset类型为timestamp时必传，传时间戳，精确到秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceName <p>实例资源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ZoneId <p>可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicId <p>主题Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PartitionNum <p>Topic的分区数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableToleration <p>启用容错实例/开启死信队列</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QpsLimit <p>Qps 限制</p>
     * @param array $TableMappings <p>Table到Topic的路由，「分发到多个topic」开关打开时必传</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UseTableMapping <p>「分发到多个topic」开关，默认为false</p>
     * @param boolean $UseAutoCreateTopic <p>使用的Topic是否需要自动创建（目前只支持SOURCE流入任务，如果不使用分发到多个topic，需要在Topic字段填写需要自动创建的topic名）</p>
     * @param string $CompressionType <p>写入Topic时是否进行压缩，不开启填&quot;none&quot;，开启的话，填写&quot;open&quot;。</p>
     * @param integer $MsgMultiple <p>源topic消息1条扩增成msgMultiple条写入目标topic(该参数目前只有ckafka流入ckafka适用)</p>
     * @param string $ConnectorSyncType <p>数据同步专用参数, 正常数据处理可为空, 实例级别同步: 仅同步元数据填写&quot;META_SYNC_INSTANCE_TYPE&quot;, 同步元数据及全部topic内消息的填写&quot;META_AND_DATA_SYNC_INSTANCE_TYPE&quot;; topic级别同步: 选中的源和目标topic中的消息(需要目标实例也包含该topic)填写&quot;DATA_SYNC_TYPE&quot;</p>
     * @param boolean $KeepPartition <p>数据同步专用参数, 当通过时,希望下游的消息写入分区与上游的一致,则填true,但下游分区小于上游时,会报错; 不需要一致则为false, 默认为false</p>
     * @param string $TopicRegularExpression <p>正则匹配Topic列表</p>
     * @param string $Prefix <p>Topic 前缀</p>
     * @param string $Separator <p>Topic前缀分隔符</p>
     * @param array $TopicList <p>多选topic列表</p>
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

        if (array_key_exists("UseAutoCreateTopic",$param) and $param["UseAutoCreateTopic"] !== null) {
            $this->UseAutoCreateTopic = $param["UseAutoCreateTopic"];
        }

        if (array_key_exists("CompressionType",$param) and $param["CompressionType"] !== null) {
            $this->CompressionType = $param["CompressionType"];
        }

        if (array_key_exists("MsgMultiple",$param) and $param["MsgMultiple"] !== null) {
            $this->MsgMultiple = $param["MsgMultiple"];
        }

        if (array_key_exists("ConnectorSyncType",$param) and $param["ConnectorSyncType"] !== null) {
            $this->ConnectorSyncType = $param["ConnectorSyncType"];
        }

        if (array_key_exists("KeepPartition",$param) and $param["KeepPartition"] !== null) {
            $this->KeepPartition = $param["KeepPartition"];
        }

        if (array_key_exists("TopicRegularExpression",$param) and $param["TopicRegularExpression"] !== null) {
            $this->TopicRegularExpression = $param["TopicRegularExpression"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("Separator",$param) and $param["Separator"] !== null) {
            $this->Separator = $param["Separator"];
        }

        if (array_key_exists("TopicList",$param) and $param["TopicList"] !== null) {
            $this->TopicList = $param["TopicList"];
        }
    }
}
