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
 * ModifyApmSampleConfig请求参数结构体
 *
 * @method string getInstanceId() 获取业务系统ID
 * @method void setInstanceId(string $InstanceId) 设置业务系统ID
 * @method string getSampleName() 获取采样规则名
 * @method void setSampleName(string $SampleName) 设置采样规则名
 * @method integer getSampleRate() 获取采样率
 * @method void setSampleRate(integer $SampleRate) 设置采样率
 * @method string getServiceName() 获取应用名，生效于所有应用则填空
 * @method void setServiceName(string $ServiceName) 设置应用名，生效于所有应用则填空
 * @method string getOperationName() 获取接口名
 * @method void setOperationName(string $OperationName) 设置接口名
 * @method array getTags() 获取采样tag
 * @method void setTags(array $Tags) 设置采样tag
 * @method integer getStatus() 获取采样开关 0关 1开 2删除
 * @method void setStatus(integer $Status) 设置采样开关 0关 1开 2删除
 * @method integer getId() 获取配置Id
 * @method void setId(integer $Id) 设置配置Id
 * @method integer getOperationType() 获取0=精确匹配（默认）；1=前缀匹配；2=后缀匹配
 * @method void setOperationType(integer $OperationType) 设置0=精确匹配（默认）；1=前缀匹配；2=后缀匹配
 */
class ModifyApmSampleConfigRequest extends AbstractModel
{
    /**
     * @var string 业务系统ID
     */
    public $InstanceId;

    /**
     * @var string 采样规则名
     */
    public $SampleName;

    /**
     * @var integer 采样率
     */
    public $SampleRate;

    /**
     * @var string 应用名，生效于所有应用则填空
     */
    public $ServiceName;

    /**
     * @var string 接口名
     */
    public $OperationName;

    /**
     * @var array 采样tag
     */
    public $Tags;

    /**
     * @var integer 采样开关 0关 1开 2删除
     */
    public $Status;

    /**
     * @var integer 配置Id
     */
    public $Id;

    /**
     * @var integer 0=精确匹配（默认）；1=前缀匹配；2=后缀匹配
     */
    public $OperationType;

    /**
     * @param string $InstanceId 业务系统ID
     * @param string $SampleName 采样规则名
     * @param integer $SampleRate 采样率
     * @param string $ServiceName 应用名，生效于所有应用则填空
     * @param string $OperationName 接口名
     * @param array $Tags 采样tag
     * @param integer $Status 采样开关 0关 1开 2删除
     * @param integer $Id 配置Id
     * @param integer $OperationType 0=精确匹配（默认）；1=前缀匹配；2=后缀匹配
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SampleName",$param) and $param["SampleName"] !== null) {
            $this->SampleName = $param["SampleName"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("OperationName",$param) and $param["OperationName"] !== null) {
            $this->OperationName = $param["OperationName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new APMKVItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }
    }
}
