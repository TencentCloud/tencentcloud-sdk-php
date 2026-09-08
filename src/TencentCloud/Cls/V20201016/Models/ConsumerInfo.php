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
 * @method string getConsumerId() 获取<p>投递规则ID</p>
 * @method void setConsumerId(string $ConsumerId) 设置<p>投递规则ID</p>
 * @method string getTopicId() 获取<p>日志主题ID</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题ID</p>
 * @method boolean getEffective() 获取<p>投递任务是否生效</p>
 * @method void setEffective(boolean $Effective) 设置<p>投递任务是否生效</p>
 * @method Ckafka getCkafka() 获取<p>CKafka的描述</p>
 * @method void setCkafka(Ckafka $Ckafka) 设置<p>CKafka的描述</p>
 * @method boolean getNeedContent() 获取<p>是否投递日志的元数据信息</p>
 * @method void setNeedContent(boolean $NeedContent) 设置<p>是否投递日志的元数据信息</p>
 * @method ConsumerContent getContent() 获取<p>如果需要投递元数据信息，元数据信息的描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(ConsumerContent $Content) 设置<p>如果需要投递元数据信息，元数据信息的描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCompression() 获取<p>压缩方式[0:NONE；2:SNAPPY；3:LZ4]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompression(integer $Compression) 设置<p>压缩方式[0:NONE；2:SNAPPY；3:LZ4]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取<p>投递任务创建毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置<p>投递任务创建毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleArn() 获取<p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleArn(string $RoleArn) 设置<p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalId() 获取<p>外部ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalId(string $ExternalId) 设置<p>外部ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskStatus() 获取<p>任务运行状态。支持<code>0</code>,<code>1</code>,<code>2</code> - <code>0</code>: 停止 - <code>1</code>: 运行中 - <code>2</code>: 异常</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskStatus(integer $TaskStatus) 设置<p>任务运行状态。支持<code>0</code>,<code>1</code>,<code>2</code> - <code>0</code>: 停止 - <code>1</code>: 运行中 - <code>2</code>: 异常</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvancedConsumerConfiguration getAdvancedConfig() 获取<p>高级配置</p>
 * @method void setAdvancedConfig(AdvancedConsumerConfiguration $AdvancedConfig) 设置<p>高级配置</p>
 * @method string getDSLFilter() 获取<p>日志预过滤-数据写入 ckafka 的原始数据进行预过滤处理</p>
 * @method void setDSLFilter(string $DSLFilter) 设置<p>日志预过滤-数据写入 ckafka 的原始数据进行预过滤处理</p>
 */
class ConsumerInfo extends AbstractModel
{
    /**
     * @var string <p>投递规则ID</p>
     */
    public $ConsumerId;

    /**
     * @var string <p>日志主题ID</p>
     */
    public $TopicId;

    /**
     * @var boolean <p>投递任务是否生效</p>
     */
    public $Effective;

    /**
     * @var Ckafka <p>CKafka的描述</p>
     */
    public $Ckafka;

    /**
     * @var boolean <p>是否投递日志的元数据信息</p>
     */
    public $NeedContent;

    /**
     * @var ConsumerContent <p>如果需要投递元数据信息，元数据信息的描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var integer <p>压缩方式[0:NONE；2:SNAPPY；3:LZ4]</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Compression;

    /**
     * @var integer <p>投递任务创建毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleArn;

    /**
     * @var string <p>外部ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalId;

    /**
     * @var integer <p>任务运行状态。支持<code>0</code>,<code>1</code>,<code>2</code> - <code>0</code>: 停止 - <code>1</code>: 运行中 - <code>2</code>: 异常</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskStatus;

    /**
     * @var AdvancedConsumerConfiguration <p>高级配置</p>
     */
    public $AdvancedConfig;

    /**
     * @var string <p>日志预过滤-数据写入 ckafka 的原始数据进行预过滤处理</p>
     */
    public $DSLFilter;

    /**
     * @param string $ConsumerId <p>投递规则ID</p>
     * @param string $TopicId <p>日志主题ID</p>
     * @param boolean $Effective <p>投递任务是否生效</p>
     * @param Ckafka $Ckafka <p>CKafka的描述</p>
     * @param boolean $NeedContent <p>是否投递日志的元数据信息</p>
     * @param ConsumerContent $Content <p>如果需要投递元数据信息，元数据信息的描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Compression <p>压缩方式[0:NONE；2:SNAPPY；3:LZ4]</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime <p>投递任务创建毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleArn <p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalId <p>外部ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskStatus <p>任务运行状态。支持<code>0</code>,<code>1</code>,<code>2</code> - <code>0</code>: 停止 - <code>1</code>: 运行中 - <code>2</code>: 异常</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvancedConsumerConfiguration $AdvancedConfig <p>高级配置</p>
     * @param string $DSLFilter <p>日志预过滤-数据写入 ckafka 的原始数据进行预过滤处理</p>
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

        if (array_key_exists("DSLFilter",$param) and $param["DSLFilter"] !== null) {
            $this->DSLFilter = $param["DSLFilter"];
        }
    }
}
