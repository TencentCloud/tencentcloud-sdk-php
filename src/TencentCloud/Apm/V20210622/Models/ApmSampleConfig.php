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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 采样配置信息
 *
 * @method string getInstanceKey() 获取实例ID
 * @method void setInstanceKey(string $InstanceKey) 设置实例ID
 * @method string getServiceName() 获取服务名
 * @method void setServiceName(string $ServiceName) 设置服务名
 * @method string getSampleName() 获取采样名字
 * @method void setSampleName(string $SampleName) 设置采样名字
 * @method string getOperationName() 获取接口名
 * @method void setOperationName(string $OperationName) 设置接口名
 * @method integer getSpanNum() 获取采样的span数
 * @method void setSpanNum(integer $SpanNum) 设置采样的span数
 * @method integer getStatus() 获取采样配置开关 0 关 1 开
 * @method void setStatus(integer $Status) 设置采样配置开关 0 关 1 开
 * @method array getTags() 获取tags数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置tags数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSampleRate() 获取采样率
 * @method void setSampleRate(integer $SampleRate) 设置采样率
 * @method integer getOperationType() 获取0=精确匹配（默认）；1=前缀匹配；2=后缀匹配
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperationType(integer $OperationType) 设置0=精确匹配（默认）；1=前缀匹配；2=后缀匹配
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取配置Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置配置Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApmSampleConfig extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceKey;

    /**
     * @var string 服务名
     */
    public $ServiceName;

    /**
     * @var string 采样名字
     */
    public $SampleName;

    /**
     * @var string 接口名
     */
    public $OperationName;

    /**
     * @var integer 采样的span数
     */
    public $SpanNum;

    /**
     * @var integer 采样配置开关 0 关 1 开
     */
    public $Status;

    /**
     * @var array tags数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer 采样率
     */
    public $SampleRate;

    /**
     * @var integer 0=精确匹配（默认）；1=前缀匹配；2=后缀匹配
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperationType;

    /**
     * @var integer 配置Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @param string $InstanceKey 实例ID
     * @param string $ServiceName 服务名
     * @param string $SampleName 采样名字
     * @param string $OperationName 接口名
     * @param integer $SpanNum 采样的span数
     * @param integer $Status 采样配置开关 0 关 1 开
     * @param array $Tags tags数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SampleRate 采样率
     * @param integer $OperationType 0=精确匹配（默认）；1=前缀匹配；2=后缀匹配
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 配置Id
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
        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("SampleName",$param) and $param["SampleName"] !== null) {
            $this->SampleName = $param["SampleName"];
        }

        if (array_key_exists("OperationName",$param) and $param["OperationName"] !== null) {
            $this->OperationName = $param["OperationName"];
        }

        if (array_key_exists("SpanNum",$param) and $param["SpanNum"] !== null) {
            $this->SpanNum = $param["SpanNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new APMKVItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
