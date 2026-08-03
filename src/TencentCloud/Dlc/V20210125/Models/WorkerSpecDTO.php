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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * worker组规格
 *
 * @method string getName() 获取<p>worker名称</p>
 * @method void setName(string $Name) 设置<p>worker名称</p>
 * @method integer getPodCpu() 获取<p>Pod CPU核数</p>
 * @method void setPodCpu(integer $PodCpu) 设置<p>Pod CPU核数</p>
 * @method integer getPodMem() 获取<p>Pod 内存大小</p>
 * @method void setPodMem(integer $PodMem) 设置<p>Pod 内存大小</p>
 * @method string getGpuType() 获取<p>GPU类型</p>
 * @method void setGpuType(string $GpuType) 设置<p>GPU类型</p>
 * @method integer getGpuNum() 获取<p>GPU数量</p>
 * @method void setGpuNum(integer $GpuNum) 设置<p>GPU数量</p>
 * @method array getEnvs() 获取<p>环境变量列表</p>
 * @method void setEnvs(array $Envs) 设置<p>环境变量列表</p>
 * @method array getLabels() 获取<p>标签列表</p>
 * @method void setLabels(array $Labels) 设置<p>标签列表</p>
 * @method array getResourcesLabels() 获取<p>资源标签列表（用于追加到 headGroupSpec/workerGroupSpec 的 resources map 中，对应 Ray/K8s 的自定义资源声明），Value 必须为字符串形式的整数</p>
 * @method void setResourcesLabels(array $ResourcesLabels) 设置<p>资源标签列表（用于追加到 headGroupSpec/workerGroupSpec 的 resources map 中，对应 Ray/K8s 的自定义资源声明），Value 必须为字符串形式的整数</p>
 * @method integer getMinPodNum() 获取<p>最小Pod数量</p>
 * @method void setMinPodNum(integer $MinPodNum) 设置<p>最小Pod数量</p>
 * @method integer getMaxPodNum() 获取<p>最大Pod数量</p>
 * @method void setMaxPodNum(integer $MaxPodNum) 设置<p>最大Pod数量</p>
 * @method boolean getEnableAutoScaling() 获取<p>是否开启弹性伸缩（true=开启，false/null=关闭）。开启后按 MinPodNum/MaxPodNum 弹性伸缩，关闭则按固定副本数运行</p>
 * @method void setEnableAutoScaling(boolean $EnableAutoScaling) 设置<p>是否开启弹性伸缩（true=开启，false/null=关闭）。开启后按 MinPodNum/MaxPodNum 弹性伸缩，关闭则按固定副本数运行</p>
 * @method string getResourceType() 获取<p>资源类型,CPU,GPU</p>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型,CPU,GPU</p>
 * @method string getInstanceType() 获取<p>机型，例如X40/T20</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>机型，例如X40/T20</p>
 * @method integer getSpec() 获取<p>规格数量</p>
 * @method void setSpec(integer $Spec) 设置<p>规格数量</p>
 * @method string getBillingItem() 获取<p>资源ID(唯一)</p>
 * @method void setBillingItem(string $BillingItem) 设置<p>资源ID(唯一)</p>
 */
class WorkerSpecDTO extends AbstractModel
{
    /**
     * @var string <p>worker名称</p>
     */
    public $Name;

    /**
     * @var integer <p>Pod CPU核数</p>
     */
    public $PodCpu;

    /**
     * @var integer <p>Pod 内存大小</p>
     */
    public $PodMem;

    /**
     * @var string <p>GPU类型</p>
     */
    public $GpuType;

    /**
     * @var integer <p>GPU数量</p>
     */
    public $GpuNum;

    /**
     * @var array <p>环境变量列表</p>
     */
    public $Envs;

    /**
     * @var array <p>标签列表</p>
     */
    public $Labels;

    /**
     * @var array <p>资源标签列表（用于追加到 headGroupSpec/workerGroupSpec 的 resources map 中，对应 Ray/K8s 的自定义资源声明），Value 必须为字符串形式的整数</p>
     */
    public $ResourcesLabels;

    /**
     * @var integer <p>最小Pod数量</p>
     */
    public $MinPodNum;

    /**
     * @var integer <p>最大Pod数量</p>
     */
    public $MaxPodNum;

    /**
     * @var boolean <p>是否开启弹性伸缩（true=开启，false/null=关闭）。开启后按 MinPodNum/MaxPodNum 弹性伸缩，关闭则按固定副本数运行</p>
     */
    public $EnableAutoScaling;

    /**
     * @var string <p>资源类型,CPU,GPU</p>
     */
    public $ResourceType;

    /**
     * @var string <p>机型，例如X40/T20</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>规格数量</p>
     */
    public $Spec;

    /**
     * @var string <p>资源ID(唯一)</p>
     */
    public $BillingItem;

    /**
     * @param string $Name <p>worker名称</p>
     * @param integer $PodCpu <p>Pod CPU核数</p>
     * @param integer $PodMem <p>Pod 内存大小</p>
     * @param string $GpuType <p>GPU类型</p>
     * @param integer $GpuNum <p>GPU数量</p>
     * @param array $Envs <p>环境变量列表</p>
     * @param array $Labels <p>标签列表</p>
     * @param array $ResourcesLabels <p>资源标签列表（用于追加到 headGroupSpec/workerGroupSpec 的 resources map 中，对应 Ray/K8s 的自定义资源声明），Value 必须为字符串形式的整数</p>
     * @param integer $MinPodNum <p>最小Pod数量</p>
     * @param integer $MaxPodNum <p>最大Pod数量</p>
     * @param boolean $EnableAutoScaling <p>是否开启弹性伸缩（true=开启，false/null=关闭）。开启后按 MinPodNum/MaxPodNum 弹性伸缩，关闭则按固定副本数运行</p>
     * @param string $ResourceType <p>资源类型,CPU,GPU</p>
     * @param string $InstanceType <p>机型，例如X40/T20</p>
     * @param integer $Spec <p>规格数量</p>
     * @param string $BillingItem <p>资源ID(唯一)</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PodCpu",$param) and $param["PodCpu"] !== null) {
            $this->PodCpu = $param["PodCpu"];
        }

        if (array_key_exists("PodMem",$param) and $param["PodMem"] !== null) {
            $this->PodMem = $param["PodMem"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("GpuNum",$param) and $param["GpuNum"] !== null) {
            $this->GpuNum = $param["GpuNum"];
        }

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new Env();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("ResourcesLabels",$param) and $param["ResourcesLabels"] !== null) {
            $this->ResourcesLabels = [];
            foreach ($param["ResourcesLabels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->ResourcesLabels, $obj);
            }
        }

        if (array_key_exists("MinPodNum",$param) and $param["MinPodNum"] !== null) {
            $this->MinPodNum = $param["MinPodNum"];
        }

        if (array_key_exists("MaxPodNum",$param) and $param["MaxPodNum"] !== null) {
            $this->MaxPodNum = $param["MaxPodNum"];
        }

        if (array_key_exists("EnableAutoScaling",$param) and $param["EnableAutoScaling"] !== null) {
            $this->EnableAutoScaling = $param["EnableAutoScaling"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("BillingItem",$param) and $param["BillingItem"] !== null) {
            $this->BillingItem = $param["BillingItem"];
        }
    }
}
