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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 投递kafka配置项
 *
 * @method string getConfigId() 获取配置项id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigId(string $ConfigId) 设置配置项id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigName() 获取配置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigName(string $ConfigName) 设置配置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCollectPath() 获取采集路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectPath(array $CollectPath) 设置采集路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKafkaVIp() 获取kafka vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaVIp(string $KafkaVIp) 设置kafka vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKafkaVPort() 获取kafka vport
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaVPort(string $KafkaVPort) 设置kafka vport
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopic() 获取kafka topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopic(string $Topic) 设置kafka topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLineRule() 获取换行规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLineRule(string $LineRule) 设置换行规则
注意：此字段可能返回 null，表示取不到有效值。
 */
class KafkaDeliveryConfig extends AbstractModel
{
    /**
     * @var string 配置项id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigId;

    /**
     * @var string 配置名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigName;

    /**
     * @var array 采集路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollectPath;

    /**
     * @var string kafka vip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaVIp;

    /**
     * @var string kafka vport
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaVPort;

    /**
     * @var string kafka topic
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topic;

    /**
     * @var string 换行规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LineRule;

    /**
     * @param string $ConfigId 配置项id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigName 配置名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CollectPath 采集路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KafkaVIp kafka vip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KafkaVPort kafka vport
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Topic kafka topic
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LineRule 换行规则
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("CollectPath",$param) and $param["CollectPath"] !== null) {
            $this->CollectPath = $param["CollectPath"];
        }

        if (array_key_exists("KafkaVIp",$param) and $param["KafkaVIp"] !== null) {
            $this->KafkaVIp = $param["KafkaVIp"];
        }

        if (array_key_exists("KafkaVPort",$param) and $param["KafkaVPort"] !== null) {
            $this->KafkaVPort = $param["KafkaVPort"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("LineRule",$param) and $param["LineRule"] !== null) {
            $this->LineRule = $param["LineRule"];
        }
    }
}
