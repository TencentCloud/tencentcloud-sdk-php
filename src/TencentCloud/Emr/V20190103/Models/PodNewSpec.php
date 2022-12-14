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
 * @method string getNodeFlag() 获取资源的用途，即节点类型，当前仅支持"TASK"。
 * @method void setNodeFlag(string $NodeFlag) 设置资源的用途，即节点类型，当前仅支持"TASK"。
 * @method integer getCpu() 获取CPU核数。
 * @method void setCpu(integer $Cpu) 设置CPU核数。
 * @method integer getMemory() 获取内存大小，单位为GB。
 * @method void setMemory(integer $Memory) 设置内存大小，单位为GB。
 * @method string getCpuType() 获取Eks集群-CPU类型，当前支持"intel"和"amd"
 * @method void setCpuType(string $CpuType) 设置Eks集群-CPU类型，当前支持"intel"和"amd"
 * @method array getPodVolumes() 获取Pod节点数据目录挂载信息。
 * @method void setPodVolumes(array $PodVolumes) 设置Pod节点数据目录挂载信息。
 * @method boolean getEnableDynamicSpecFlag() 获取是否浮动规格，默认否
<li>true：代表是</li>
<li>false：代表否</li>
 * @method void setEnableDynamicSpecFlag(boolean $EnableDynamicSpecFlag) 设置是否浮动规格，默认否
<li>true：代表是</li>
<li>false：代表否</li>
 * @method DynamicPodSpec getDynamicPodSpec() 获取浮动规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDynamicPodSpec(DynamicPodSpec $DynamicPodSpec) 设置浮动规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取代表vpc网络唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置代表vpc网络唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取代表vpc子网唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置代表vpc子网唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodName() 获取pod name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodName(string $PodName) 设置pod name
注意：此字段可能返回 null，表示取不到有效值。
 */
class PodNewSpec extends AbstractModel
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
    public $NodeFlag;

    /**
     * @var integer CPU核数。
     */
    public $Cpu;

    /**
     * @var integer 内存大小，单位为GB。
     */
    public $Memory;

    /**
     * @var string Eks集群-CPU类型，当前支持"intel"和"amd"
     */
    public $CpuType;

    /**
     * @var array Pod节点数据目录挂载信息。
     */
    public $PodVolumes;

    /**
     * @var boolean 是否浮动规格，默认否
<li>true：代表是</li>
<li>false：代表否</li>
     */
    public $EnableDynamicSpecFlag;

    /**
     * @var DynamicPodSpec 浮动规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DynamicPodSpec;

    /**
     * @var string 代表vpc网络唯一id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 代表vpc子网唯一id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string pod name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodName;

    /**
     * @param string $ResourceProviderIdentifier 外部资源提供者的标识符，例如"cls-a1cd23fa"。
     * @param string $ResourceProviderType 外部资源提供者类型，例如"tke",当前仅支持"tke"。
     * @param string $NodeFlag 资源的用途，即节点类型，当前仅支持"TASK"。
     * @param integer $Cpu CPU核数。
     * @param integer $Memory 内存大小，单位为GB。
     * @param string $CpuType Eks集群-CPU类型，当前支持"intel"和"amd"
     * @param array $PodVolumes Pod节点数据目录挂载信息。
     * @param boolean $EnableDynamicSpecFlag 是否浮动规格，默认否
<li>true：代表是</li>
<li>false：代表否</li>
     * @param DynamicPodSpec $DynamicPodSpec 浮动规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 代表vpc网络唯一id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 代表vpc子网唯一id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodName pod name
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
        if (array_key_exists("ResourceProviderIdentifier",$param) and $param["ResourceProviderIdentifier"] !== null) {
            $this->ResourceProviderIdentifier = $param["ResourceProviderIdentifier"];
        }

        if (array_key_exists("ResourceProviderType",$param) and $param["ResourceProviderType"] !== null) {
            $this->ResourceProviderType = $param["ResourceProviderType"];
        }

        if (array_key_exists("NodeFlag",$param) and $param["NodeFlag"] !== null) {
            $this->NodeFlag = $param["NodeFlag"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("CpuType",$param) and $param["CpuType"] !== null) {
            $this->CpuType = $param["CpuType"];
        }

        if (array_key_exists("PodVolumes",$param) and $param["PodVolumes"] !== null) {
            $this->PodVolumes = [];
            foreach ($param["PodVolumes"] as $key => $value){
                $obj = new PodVolume();
                $obj->deserialize($value);
                array_push($this->PodVolumes, $obj);
            }
        }

        if (array_key_exists("EnableDynamicSpecFlag",$param) and $param["EnableDynamicSpecFlag"] !== null) {
            $this->EnableDynamicSpecFlag = $param["EnableDynamicSpecFlag"];
        }

        if (array_key_exists("DynamicPodSpec",$param) and $param["DynamicPodSpec"] !== null) {
            $this->DynamicPodSpec = new DynamicPodSpec();
            $this->DynamicPodSpec->deserialize($param["DynamicPodSpec"]);
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }
    }
}
