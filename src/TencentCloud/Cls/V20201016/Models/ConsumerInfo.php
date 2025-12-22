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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 投递规则
 *
 * @method string getConsumerId() 获取投递规则ID
 * @method void setConsumerId(string $ConsumerId) 设置投递规则ID
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method boolean getEffective() 获取投递任务是否生效
 * @method void setEffective(boolean $Effective) 设置投递任务是否生效
 * @method Ckafka getCkafka() 获取CKafka的描述
 * @method void setCkafka(Ckafka $Ckafka) 设置CKafka的描述
 * @method boolean getNeedContent() 获取是否投递日志的元数据信息
 * @method void setNeedContent(boolean $NeedContent) 设置是否投递日志的元数据信息
 * @method ConsumerContent getContent() 获取如果需要投递元数据信息，元数据信息的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(ConsumerContent $Content) 设置如果需要投递元数据信息，元数据信息的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCompression() 获取压缩方式[0:NONE；2:SNAPPY；3:LZ4]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompression(integer $Compression) 设置压缩方式[0:NONE；2:SNAPPY；3:LZ4]
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取投递任务创建毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置投递任务创建毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleArn() 获取角色访问描述名 [创建角色](https://cloud.tencent.com/document/product/598/19381)	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleArn(string $RoleArn) 设置角色访问描述名 [创建角色](https://cloud.tencent.com/document/product/598/19381)	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalId() 获取外部ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalId(string $ExternalId) 设置外部ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskStatus() 获取任务运行状态。支持`0`,`1`,`2` - `0`: 停止 - `1`: 运行中 - `2`: 异常	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskStatus(integer $TaskStatus) 设置任务运行状态。支持`0`,`1`,`2` - `0`: 停止 - `1`: 运行中 - `2`: 异常	
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvancedConsumerConfiguration getAdvancedConfig() 获取高级配置
 * @method void setAdvancedConfig(AdvancedConsumerConfiguration $AdvancedConfig) 设置高级配置
 */
class ConsumerInfo extends AbstractModel
{
    /**
     * @var string 投递规则ID
     */
    public $ConsumerId;

    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var boolean 投递任务是否生效
     */
    public $Effective;

    /**
     * @var Ckafka CKafka的描述
     */
    public $Ckafka;

    /**
     * @var boolean 是否投递日志的元数据信息
     */
    public $NeedContent;

    /**
     * @var ConsumerContent 如果需要投递元数据信息，元数据信息的描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var integer 压缩方式[0:NONE；2:SNAPPY；3:LZ4]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Compression;

    /**
     * @var integer 投递任务创建毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 角色访问描述名 [创建角色](https://cloud.tencent.com/document/product/598/19381)	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleArn;

    /**
     * @var string 外部ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalId;

    /**
     * @var integer 任务运行状态。支持`0`,`1`,`2` - `0`: 停止 - `1`: 运行中 - `2`: 异常	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskStatus;

    /**
     * @var AdvancedConsumerConfiguration 高级配置
     */
    public $AdvancedConfig;

    /**
     * @param string $ConsumerId 投递规则ID
     * @param string $TopicId 日志主题ID
     * @param boolean $Effective 投递任务是否生效
     * @param Ckafka $Ckafka CKafka的描述
     * @param boolean $NeedContent 是否投递日志的元数据信息
     * @param ConsumerContent $Content 如果需要投递元数据信息，元数据信息的描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Compression 压缩方式[0:NONE；2:SNAPPY；3:LZ4]
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 投递任务创建毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleArn 角色访问描述名 [创建角色](https://cloud.tencent.com/document/product/598/19381)	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalId 外部ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskStatus 任务运行状态。支持`0`,`1`,`2` - `0`: 停止 - `1`: 运行中 - `2`: 异常	
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvancedConsumerConfiguration $AdvancedConfig 高级配置
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
        if (array_key_exists("ConsumerId",$param) and $param["ConsumerId"] !== null) {
            $this->ConsumerId = $param["ConsumerId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Effective",$param) and $param["Effective"] !== null) {
            $this->Effective = $param["Effective"];
        }

        if (array_key_exists("Ckafka",$param) and $param["Ckafka"] !== null) {
            $this->Ckafka = new Ckafka();
            $this->Ckafka->deserialize($param["Ckafka"]);
        }

        if (array_key_exists("NeedContent",$param) and $param["NeedContent"] !== null) {
            $this->NeedContent = $param["NeedContent"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new ConsumerContent();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = $param["Compression"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("ExternalId",$param) and $param["ExternalId"] !== null) {
            $this->ExternalId = $param["ExternalId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("AdvancedConfig",$param) and $param["AdvancedConfig"] !== null) {
            $this->AdvancedConfig = new AdvancedConsumerConfiguration();
            $this->AdvancedConfig->deserialize($param["AdvancedConfig"]);
        }
    }
}
