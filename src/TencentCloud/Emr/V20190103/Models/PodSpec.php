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
 * 扩容容器资源时的资源描述
 *
 * @method string getResourceProviderIdentifier() 获取外部资源提供者的标识符，例如"cls-a1cd23fa"。
 * @method void setResourceProviderIdentifier(string $ResourceProviderIdentifier) 设置外部资源提供者的标识符，例如"cls-a1cd23fa"。
 * @method string getResourceProviderType() 获取外部资源提供者类型，例如"tke",当前仅支持"tke"。
 * @method void setResourceProviderType(string $ResourceProviderType) 设置外部资源提供者类型，例如"tke",当前仅支持"tke"。
 * @method string getNodeType() 获取资源的用途，即节点类型，当前仅支持"TASK"。
 * @method void setNodeType(string $NodeType) 设置资源的用途，即节点类型，当前仅支持"TASK"。
 * @method integer getCpu() 获取CPU核数。
 * @method void setCpu(integer $Cpu) 设置CPU核数。
 * @method integer getMemory() 获取内存大小，单位为GB。
 * @method void setMemory(integer $Memory) 设置内存大小，单位为GB。
 * @method array getDataVolumes() 获取资源对宿主机的挂载点，指定的挂载点对应了宿主机的路径，该挂载点在Pod中作为数据存储目录使用。
 * @method void setDataVolumes(array $DataVolumes) 设置资源对宿主机的挂载点，指定的挂载点对应了宿主机的路径，该挂载点在Pod中作为数据存储目录使用。
 */
class PodSpec extends AbstractModel
{
    /**
     * @var string 外部资源提供者的标识符，例如"cls-a1cd23fa"。
     */
    public $ResourceProviderIdentifier;

    /**
     * @var string 外部资源提供者类型，例如"tke",当前仅支持"tke"。
     */
    public $ResourceProviderType;

    /**
     * @var string 资源的用途，即节点类型，当前仅支持"TASK"。
     */
    public $NodeType;

    /**
     * @var integer CPU核数。
     */
    public $Cpu;

    /**
     * @var integer 内存大小，单位为GB。
     */
    public $Memory;

    /**
     * @var array 资源对宿主机的挂载点，指定的挂载点对应了宿主机的路径，该挂载点在Pod中作为数据存储目录使用。
     */
    public $DataVolumes;

    /**
     * @param string $ResourceProviderIdentifier 外部资源提供者的标识符，例如"cls-a1cd23fa"。
     * @param string $ResourceProviderType 外部资源提供者类型，例如"tke",当前仅支持"tke"。
     * @param string $NodeType 资源的用途，即节点类型，当前仅支持"TASK"。
     * @param integer $Cpu CPU核数。
     * @param integer $Memory 内存大小，单位为GB。
     * @param array $DataVolumes 资源对宿主机的挂载点，指定的挂载点对应了宿主机的路径，该挂载点在Pod中作为数据存储目录使用。
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
        if (array_key_exists("ResourceProviderIdentifier",$param) and $param["ResourceProviderIdentifier"] !== null) {
            $this->ResourceProviderIdentifier = $param["ResourceProviderIdentifier"];
        }

        if (array_key_exists("ResourceProviderType",$param) and $param["ResourceProviderType"] !== null) {
            $this->ResourceProviderType = $param["ResourceProviderType"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("DataVolumes",$param) and $param["DataVolumes"] !== null) {
            $this->DataVolumes = $param["DataVolumes"];
        }
    }
}
