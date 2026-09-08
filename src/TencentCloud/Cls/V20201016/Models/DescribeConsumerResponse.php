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
 * DescribeConsumer返回参数结构体
 *
 * @method boolean getEffective() 获取<p>投递任务是否生效</p>
 * @method void setEffective(boolean $Effective) 设置<p>投递任务是否生效</p>
 * @method boolean getNeedContent() 获取<p>是否投递日志的元数据信息</p>
 * @method void setNeedContent(boolean $NeedContent) 设置<p>是否投递日志的元数据信息</p>
 * @method ConsumerContent getContent() 获取<p>如果需要投递元数据信息，元数据信息的描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(ConsumerContent $Content) 设置<p>如果需要投递元数据信息，元数据信息的描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Ckafka getCkafka() 获取<p>CKafka的描述</p>
 * @method void setCkafka(Ckafka $Ckafka) 设置<p>CKafka的描述</p>
 * @method integer getCompression() 获取<p>压缩方式[0:NONE；2:SNAPPY；3:LZ4]</p>
 * @method void setCompression(integer $Compression) 设置<p>压缩方式[0:NONE；2:SNAPPY；3:LZ4]</p>
 * @method integer getCreateTime() 获取<p>任务创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>任务创建时间</p>
 * @method string getRoleArn() 获取<p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
 * @method void setRoleArn(string $RoleArn) 设置<p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
 * @method string getExternalId() 获取<p>外部ID</p>
 * @method void setExternalId(string $ExternalId) 设置<p>外部ID</p>
 * @method integer getTaskStatus() 获取<p>任务运行状态。支持<code>0</code>,<code>1</code>,<code>2</code>  - <code>0</code>: 停止 - <code>1</code>: 运行中 - <code>2</code>: 异常</p>
 * @method void setTaskStatus(integer $TaskStatus) 设置<p>任务运行状态。支持<code>0</code>,<code>1</code>,<code>2</code>  - <code>0</code>: 停止 - <code>1</code>: 运行中 - <code>2</code>: 异常</p>
 * @method AdvancedConsumerConfiguration getAdvancedConfig() 获取<p>高级配置</p>
 * @method void setAdvancedConfig(AdvancedConsumerConfiguration $AdvancedConfig) 设置<p>高级配置</p>
 * @method string getDSLFilter() 获取<p>日志预过滤-数据写入 ckafka 的原始数据进行预过滤处理</p>
 * @method void setDSLFilter(string $DSLFilter) 设置<p>日志预过滤-数据写入 ckafka 的原始数据进行预过滤处理</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeConsumerResponse extends AbstractModel
{
    /**
     * @var boolean <p>投递任务是否生效</p>
     */
    public $Effective;

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
     * @var Ckafka <p>CKafka的描述</p>
     */
    public $Ckafka;

    /**
     * @var integer <p>压缩方式[0:NONE；2:SNAPPY；3:LZ4]</p>
     */
    public $Compression;

    /**
     * @var integer <p>任务创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
     */
    public $RoleArn;

    /**
     * @var string <p>外部ID</p>
     */
    public $ExternalId;

    /**
     * @var integer <p>任务运行状态。支持<code>0</code>,<code>1</code>,<code>2</code>  - <code>0</code>: 停止 - <code>1</code>: 运行中 - <code>2</code>: 异常</p>
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
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $Effective <p>投递任务是否生效</p>
     * @param boolean $NeedContent <p>是否投递日志的元数据信息</p>
     * @param ConsumerContent $Content <p>如果需要投递元数据信息，元数据信息的描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Ckafka $Ckafka <p>CKafka的描述</p>
     * @param integer $Compression <p>压缩方式[0:NONE；2:SNAPPY；3:LZ4]</p>
     * @param integer $CreateTime <p>任务创建时间</p>
     * @param string $RoleArn <p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
     * @param string $ExternalId <p>外部ID</p>
     * @param integer $TaskStatus <p>任务运行状态。支持<code>0</code>,<code>1</code>,<code>2</code>  - <code>0</code>: 停止 - <code>1</code>: 运行中 - <code>2</code>: 异常</p>
     * @param AdvancedConsumerConfiguration $AdvancedConfig <p>高级配置</p>
     * @param string $DSLFilter <p>日志预过滤-数据写入 ckafka 的原始数据进行预过滤处理</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Effective",$param) and $param["Effective"] !== null) {
            $this->Effective = $param["Effective"];
        }

        if (array_key_exists("NeedContent",$param) and $param["NeedContent"] !== null) {
            $this->NeedContent = $param["NeedContent"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new ConsumerContent();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("Ckafka",$param) and $param["Ckafka"] !== null) {
            $this->Ckafka = new Ckafka();
            $this->Ckafka->deserialize($param["Ckafka"]);
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
