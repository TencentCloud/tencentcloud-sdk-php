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
 * Topic配置
 *
 * @method string getResource() 获取<p>单独售卖Topic的Topic名称</p>
 * @method void setResource(string $Resource) 设置<p>单独售卖Topic的Topic名称</p>
 * @method string getOffsetType() 获取<p>Offset类型，最开始位置earliest，最新位置latest，时间点位置timestamp</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffsetType(string $OffsetType) 设置<p>Offset类型，最开始位置earliest，最新位置latest，时间点位置timestamp</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTime() 获取<p>Offset类型为timestamp时必传，传时间戳，精确到秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(integer $StartTime) 设置<p>Offset类型为timestamp时必传，传时间戳，精确到秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicId() 获取<p>Topic的TopicId【出参】</p>
 * @method void setTopicId(string $TopicId) 设置<p>Topic的TopicId【出参】</p>
 * @method string getCompressionType() 获取<p>写入Topic时是否进行压缩，不开启填&quot;none&quot;，开启的话，可选择&quot;gzip&quot;, &quot;snappy&quot;, &quot;lz4&quot;中的一个进行填写。</p>
 * @method void setCompressionType(string $CompressionType) 设置<p>写入Topic时是否进行压缩，不开启填&quot;none&quot;，开启的话，可选择&quot;gzip&quot;, &quot;snappy&quot;, &quot;lz4&quot;中的一个进行填写。</p>
 * @method boolean getUseAutoCreateTopic() 获取<p>使用的Topic是否需要自动创建（目前只支持SOURCE流入任务）</p>
 * @method void setUseAutoCreateTopic(boolean $UseAutoCreateTopic) 设置<p>使用的Topic是否需要自动创建（目前只支持SOURCE流入任务）</p>
 * @method integer getMsgMultiple() 获取<p>源topic消息1条扩增成msgMultiple条写入目标topic(该参数目前只有ckafka流入ckafka适用)</p>
 * @method void setMsgMultiple(integer $MsgMultiple) 设置<p>源topic消息1条扩增成msgMultiple条写入目标topic(该参数目前只有ckafka流入ckafka适用)</p>
 */
class TopicParam extends AbstractModel
{
    /**
     * @var string <p>单独售卖Topic的Topic名称</p>
     */
    public $Resource;

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
     * @var string <p>Topic的TopicId【出参】</p>
     */
    public $TopicId;

    /**
     * @var string <p>写入Topic时是否进行压缩，不开启填&quot;none&quot;，开启的话，可选择&quot;gzip&quot;, &quot;snappy&quot;, &quot;lz4&quot;中的一个进行填写。</p>
     */
    public $CompressionType;

    /**
     * @var boolean <p>使用的Topic是否需要自动创建（目前只支持SOURCE流入任务）</p>
     */
    public $UseAutoCreateTopic;

    /**
     * @var integer <p>源topic消息1条扩增成msgMultiple条写入目标topic(该参数目前只有ckafka流入ckafka适用)</p>
     */
    public $MsgMultiple;

    /**
     * @param string $Resource <p>单独售卖Topic的Topic名称</p>
     * @param string $OffsetType <p>Offset类型，最开始位置earliest，最新位置latest，时间点位置timestamp</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTime <p>Offset类型为timestamp时必传，传时间戳，精确到秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicId <p>Topic的TopicId【出参】</p>
     * @param string $CompressionType <p>写入Topic时是否进行压缩，不开启填&quot;none&quot;，开启的话，可选择&quot;gzip&quot;, &quot;snappy&quot;, &quot;lz4&quot;中的一个进行填写。</p>
     * @param boolean $UseAutoCreateTopic <p>使用的Topic是否需要自动创建（目前只支持SOURCE流入任务）</p>
     * @param integer $MsgMultiple <p>源topic消息1条扩增成msgMultiple条写入目标topic(该参数目前只有ckafka流入ckafka适用)</p>
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("OffsetType",$param) and $param["OffsetType"] !== null) {
            $this->OffsetType = $param["OffsetType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("CompressionType",$param) and $param["CompressionType"] !== null) {
            $this->CompressionType = $param["CompressionType"];
        }

        if (array_key_exists("UseAutoCreateTopic",$param) and $param["UseAutoCreateTopic"] !== null) {
            $this->UseAutoCreateTopic = $param["UseAutoCreateTopic"];
        }

        if (array_key_exists("MsgMultiple",$param) and $param["MsgMultiple"] !== null) {
            $this->MsgMultiple = $param["MsgMultiple"];
        }
    }
}
