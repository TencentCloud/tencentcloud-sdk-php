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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddNodeResourceConfig请求参数结构体
 *
 * @method string getInstanceId() 获取集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置集群实例Id
 * @method string getResourceType() 获取节点类型 CORE TASK ROUTER
 * @method void setResourceType(string $ResourceType) 设置节点类型 CORE TASK ROUTER
 * @method Resource getResourceConfig() 获取资源详情
 * @method void setResourceConfig(Resource $ResourceConfig) 设置资源详情
 * @method integer getPayMode() 获取付费模式
 * @method void setPayMode(integer $PayMode) 设置付费模式
 * @method string getIsDefault() 获取是否默认配置,DEFAULT,BACKUP,不填默认不是默认配置
 * @method void setIsDefault(string $IsDefault) 设置是否默认配置,DEFAULT,BACKUP,不填默认不是默认配置
 * @method integer getZoneId() 获取地域ID
 * @method void setZoneId(integer $ZoneId) 设置地域ID
 * @method array getMultipleResourceConfig() 获取添加多个规格时，第1个规格详情在ResourceConfig参数，第2-n个在MultipleResourceConfig参数
 * @method void setMultipleResourceConfig(array $MultipleResourceConfig) 设置添加多个规格时，第1个规格详情在ResourceConfig参数，第2-n个在MultipleResourceConfig参数
 * @method string getResourceBaseType() 获取类型为ComputeResource和EMR以及默认，默认为EMR
 * @method void setResourceBaseType(string $ResourceBaseType) 设置类型为ComputeResource和EMR以及默认，默认为EMR
 * @method string getComputeResourceId() 获取计算资源id
 * @method void setComputeResourceId(string $ComputeResourceId) 设置计算资源id
 * @method string getHardwareResourceType() 获取硬件类型
 * @method void setHardwareResourceType(string $HardwareResourceType) 设置硬件类型
 */
class AddNodeResourceConfigRequest extends AbstractModel
{
    /**
     * @var string 集群实例Id
     */
    public $InstanceId;

    /**
     * @var string 节点类型 CORE TASK ROUTER
     */
    public $ResourceType;

    /**
     * @var Resource 资源详情
     */
    public $ResourceConfig;

    /**
     * @var integer 付费模式
     */
    public $PayMode;

    /**
     * @var string 是否默认配置,DEFAULT,BACKUP,不填默认不是默认配置
     */
    public $IsDefault;

    /**
     * @var integer 地域ID
     */
    public $ZoneId;

    /**
     * @var array 添加多个规格时，第1个规格详情在ResourceConfig参数，第2-n个在MultipleResourceConfig参数
     */
    public $MultipleResourceConfig;

    /**
     * @var string 类型为ComputeResource和EMR以及默认，默认为EMR
     */
    public $ResourceBaseType;

    /**
     * @var string 计算资源id
     */
    public $ComputeResourceId;

    /**
     * @var string 硬件类型
     */
    public $HardwareResourceType;

    /**
     * @param string $InstanceId 集群实例Id
     * @param string $ResourceType 节点类型 CORE TASK ROUTER
     * @param Resource $ResourceConfig 资源详情
     * @param integer $PayMode 付费模式
     * @param string $IsDefault 是否默认配置,DEFAULT,BACKUP,不填默认不是默认配置
     * @param integer $ZoneId 地域ID
     * @param array $MultipleResourceConfig 添加多个规格时，第1个规格详情在ResourceConfig参数，第2-n个在MultipleResourceConfig参数
     * @param string $ResourceBaseType 类型为ComputeResource和EMR以及默认，默认为EMR
     * @param string $ComputeResourceId 计算资源id
     * @param string $HardwareResourceType 硬件类型
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

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = new Resource();
            $this->ResourceConfig->deserialize($param["ResourceConfig"]);
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("MultipleResourceConfig",$param) and $param["MultipleResourceConfig"] !== null) {
            $this->MultipleResourceConfig = [];
            foreach ($param["MultipleResourceConfig"] as $key => $value){
                $obj = new Resource();
                $obj->deserialize($value);
                array_push($this->MultipleResourceConfig, $obj);
            }
        }

        if (array_key_exists("ResourceBaseType",$param) and $param["ResourceBaseType"] !== null) {
            $this->ResourceBaseType = $param["ResourceBaseType"];
        }

        if (array_key_exists("ComputeResourceId",$param) and $param["ComputeResourceId"] !== null) {
            $this->ComputeResourceId = $param["ComputeResourceId"];
        }

        if (array_key_exists("HardwareResourceType",$param) and $param["HardwareResourceType"] !== null) {
            $this->HardwareResourceType = $param["HardwareResourceType"];
        }
    }
}
