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
 * 数据处理规则失败处理
 *
 * @method string getType() 获取类型，DLQ死信队列，IGNORE_ERROR保留，DROP废弃
 * @method void setType(string $Type) 设置类型，DLQ死信队列，IGNORE_ERROR保留，DROP废弃
 * @method KafkaParam getKafkaParam() 获取Ckafka类型死信队列
 * @method void setKafkaParam(KafkaParam $KafkaParam) 设置Ckafka类型死信队列
 * @method integer getRetryInterval() 获取重试间隔
 * @method void setRetryInterval(integer $RetryInterval) 设置重试间隔
 * @method integer getMaxRetryAttempts() 获取重试次数
 * @method void setMaxRetryAttempts(integer $MaxRetryAttempts) 设置重试次数
 * @method TopicParam getTopicParam() 获取DIP Topic类型死信队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicParam(TopicParam $TopicParam) 设置DIP Topic类型死信队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDlqType() 获取死信队列类型，CKAFKA，TOPIC
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDlqType(string $DlqType) 设置死信队列类型，CKAFKA，TOPIC
注意：此字段可能返回 null，表示取不到有效值。
 */
class FailureParam extends AbstractModel
{
    /**
     * @var string 类型，DLQ死信队列，IGNORE_ERROR保留，DROP废弃
     */
    public $Type;

    /**
     * @var KafkaParam Ckafka类型死信队列
     */
    public $KafkaParam;

    /**
     * @var integer 重试间隔
     */
    public $RetryInterval;

    /**
     * @var integer 重试次数
     */
    public $MaxRetryAttempts;

    /**
     * @var TopicParam DIP Topic类型死信队列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicParam;

    /**
     * @var string 死信队列类型，CKAFKA，TOPIC
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DlqType;

    /**
     * @param string $Type 类型，DLQ死信队列，IGNORE_ERROR保留，DROP废弃
     * @param KafkaParam $KafkaParam Ckafka类型死信队列
     * @param integer $RetryInterval 重试间隔
     * @param integer $MaxRetryAttempts 重试次数
     * @param TopicParam $TopicParam DIP Topic类型死信队列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DlqType 死信队列类型，CKAFKA，TOPIC
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("KafkaParam",$param) and $param["KafkaParam"] !== null) {
            $this->KafkaParam = new KafkaParam();
            $this->KafkaParam->deserialize($param["KafkaParam"]);
        }

        if (array_key_exists("RetryInterval",$param) and $param["RetryInterval"] !== null) {
            $this->RetryInterval = $param["RetryInterval"];
        }

        if (array_key_exists("MaxRetryAttempts",$param) and $param["MaxRetryAttempts"] !== null) {
            $this->MaxRetryAttempts = $param["MaxRetryAttempts"];
        }

        if (array_key_exists("TopicParam",$param) and $param["TopicParam"] !== null) {
            $this->TopicParam = new TopicParam();
            $this->TopicParam->deserialize($param["TopicParam"]);
        }

        if (array_key_exists("DlqType",$param) and $param["DlqType"] !== null) {
            $this->DlqType = $param["DlqType"];
        }
    }
}
