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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetNodeResourceConfigDefault请求参数结构体
 *
 * @method string getInstanceId() 获取集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置集群实例Id
 * @method integer getResourceConfigId() 获取配置Id
 * @method void setResourceConfigId(integer $ResourceConfigId) 设置配置Id
 * @method string getResourceType() 获取规格节点类型 CORE TASK ROUTER
 * @method void setResourceType(string $ResourceType) 设置规格节点类型 CORE TASK ROUTER
 * @method string getResourceBaseType() 获取类型为ComputeResource和EMR以及默认，默认为EMR
 * @method void setResourceBaseType(string $ResourceBaseType) 设置类型为ComputeResource和EMR以及默认，默认为EMR
 * @method string getComputeResourceId() 获取计算资源id
 * @method void setComputeResourceId(string $ComputeResourceId) 设置计算资源id
 * @method string getHardwareResourceType() 获取硬件类型
 * @method void setHardwareResourceType(string $HardwareResourceType) 设置硬件类型
 */
class SetNodeResourceConfigDefaultRequest extends AbstractModel
{
    /**
     * @var string 集群实例Id
     */
    public $InstanceId;

    /**
     * @var integer 配置Id
     */
    public $ResourceConfigId;

    /**
     * @var string 规格节点类型 CORE TASK ROUTER
     */
    public $ResourceType;

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
     * @param integer $ResourceConfigId 配置Id
     * @param string $ResourceType 规格节点类型 CORE TASK ROUTER
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

        if (array_key_exists("ResourceConfigId",$param) and $param["ResourceConfigId"] !== null) {
            $this->ResourceConfigId = $param["ResourceConfigId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
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
