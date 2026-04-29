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
 * 创建DynamicInstance提交的表单数据中的group部分
 *
 * @method string getGroupType() 获取<p>资源组类型</p>
 * @method void setGroupType(string $GroupType) 设置<p>资源组类型</p>
 * @method string getGroupName() 获取<p>资源组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>资源组名称</p>
 * @method integer getPodCpu() 获取<p>pod cpu核数</p>
 * @method void setPodCpu(integer $PodCpu) 设置<p>pod cpu核数</p>
 * @method integer getPodMem() 获取<p>pod mem大小（GB）</p>
 * @method void setPodMem(integer $PodMem) 设置<p>pod mem大小（GB）</p>
 * @method string getPodGpuType() 获取<p>pod gpu类型</p>
 * @method void setPodGpuType(string $PodGpuType) 设置<p>pod gpu类型</p>
 * @method integer getPodGpu() 获取<p>pod gpu块数</p>
 * @method void setPodGpu(integer $PodGpu) 设置<p>pod gpu块数</p>
 * @method integer getPodNum() 获取<p>pod个数</p>
 * @method void setPodNum(integer $PodNum) 设置<p>pod个数</p>
 * @method integer getMinPodNum() 获取<p>pod弹性最小个数</p>
 * @method void setMinPodNum(integer $MinPodNum) 设置<p>pod弹性最小个数</p>
 * @method integer getMaxPodNum() 获取<p>pod弹性最大个数，当MaxPodNum &gt; MinPodNum时，默认表示开启弹性扩缩容，将在范围内扩缩容</p>
 * @method void setMaxPodNum(integer $MaxPodNum) 设置<p>pod弹性最大个数，当MaxPodNum &gt; MinPodNum时，默认表示开启弹性扩缩容，将在范围内扩缩容</p>
 * @method boolean getSupportPV() 获取<p>是否支持存储配置</p>
 * @method void setSupportPV(boolean $SupportPV) 设置<p>是否支持存储配置</p>
 * @method array getCBSVolumes() 获取<p>cbs存储卷列表</p>
 * @method void setCBSVolumes(array $CBSVolumes) 设置<p>cbs存储卷列表</p>
 * @method array getCFSVolumes() 获取<p>cfs存储卷列表</p>
 * @method void setCFSVolumes(array $CFSVolumes) 设置<p>cfs存储卷列表</p>
 * @method array getCOSVolumes() 获取<p>cos存储卷列表</p>
 * @method void setCOSVolumes(array $COSVolumes) 设置<p>cos存储卷列表</p>
 * @method array getVolumeMounts() 获取<p>挂载卷列表</p>
 * @method void setVolumeMounts(array $VolumeMounts) 设置<p>挂载卷列表</p>
 * @method array getLabels() 获取<p>pod标签</p>
 * @method void setLabels(array $Labels) 设置<p>pod标签</p>
 * @method array getTolerations() 获取<p>Tolerations定义</p>
 * @method void setTolerations(array $Tolerations) 设置<p>Tolerations定义</p>
 * @method array getEnvs() 获取<p>环境变量</p>
 * @method void setEnvs(array $Envs) 设置<p>环境变量</p>
 * @method string getSchedulingPolicy() 获取<p>节点调度策略</p>
 * @method void setSchedulingPolicy(string $SchedulingPolicy) 设置<p>节点调度策略</p>
 * @method string getResourceLabel() 获取<p>资源标签</p>
 * @method void setResourceLabel(string $ResourceLabel) 设置<p>资源标签</p>
 * @method string getPodGpuResourceKey() 获取<p>GPU资源厂商key</p>
 * @method void setPodGpuResourceKey(string $PodGpuResourceKey) 设置<p>GPU资源厂商key</p>
 * @method array getCFSTurboVolumes() 获取<p>CFS Turbo 挂载列表</p>
 * @method void setCFSTurboVolumes(array $CFSTurboVolumes) 设置<p>CFS Turbo 挂载列表</p>
 */
class DynamicInstanceGroup extends AbstractModel
{
    /**
     * @var string <p>资源组类型</p>
     */
    public $GroupType;

    /**
     * @var string <p>资源组名称</p>
     */
    public $GroupName;

    /**
     * @var integer <p>pod cpu核数</p>
     */
    public $PodCpu;

    /**
     * @var integer <p>pod mem大小（GB）</p>
     */
    public $PodMem;

    /**
     * @var string <p>pod gpu类型</p>
     */
    public $PodGpuType;

    /**
     * @var integer <p>pod gpu块数</p>
     */
    public $PodGpu;

    /**
     * @var integer <p>pod个数</p>
     */
    public $PodNum;

    /**
     * @var integer <p>pod弹性最小个数</p>
     */
    public $MinPodNum;

    /**
     * @var integer <p>pod弹性最大个数，当MaxPodNum &gt; MinPodNum时，默认表示开启弹性扩缩容，将在范围内扩缩容</p>
     */
    public $MaxPodNum;

    /**
     * @var boolean <p>是否支持存储配置</p>
     */
    public $SupportPV;

    /**
     * @var array <p>cbs存储卷列表</p>
     */
    public $CBSVolumes;

    /**
     * @var array <p>cfs存储卷列表</p>
     */
    public $CFSVolumes;

    /**
     * @var array <p>cos存储卷列表</p>
     */
    public $COSVolumes;

    /**
     * @var array <p>挂载卷列表</p>
     */
    public $VolumeMounts;

    /**
     * @var array <p>pod标签</p>
     */
    public $Labels;

    /**
     * @var array <p>Tolerations定义</p>
     */
    public $Tolerations;

    /**
     * @var array <p>环境变量</p>
     */
    public $Envs;

    /**
     * @var string <p>节点调度策略</p>
     */
    public $SchedulingPolicy;

    /**
     * @var string <p>资源标签</p>
     */
    public $ResourceLabel;

    /**
     * @var string <p>GPU资源厂商key</p>
     */
    public $PodGpuResourceKey;

    /**
     * @var array <p>CFS Turbo 挂载列表</p>
     */
    public $CFSTurboVolumes;

    /**
     * @param string $GroupType <p>资源组类型</p>
     * @param string $GroupName <p>资源组名称</p>
     * @param integer $PodCpu <p>pod cpu核数</p>
     * @param integer $PodMem <p>pod mem大小（GB）</p>
     * @param string $PodGpuType <p>pod gpu类型</p>
     * @param integer $PodGpu <p>pod gpu块数</p>
     * @param integer $PodNum <p>pod个数</p>
     * @param integer $MinPodNum <p>pod弹性最小个数</p>
     * @param integer $MaxPodNum <p>pod弹性最大个数，当MaxPodNum &gt; MinPodNum时，默认表示开启弹性扩缩容，将在范围内扩缩容</p>
     * @param boolean $SupportPV <p>是否支持存储配置</p>
     * @param array $CBSVolumes <p>cbs存储卷列表</p>
     * @param array $CFSVolumes <p>cfs存储卷列表</p>
     * @param array $COSVolumes <p>cos存储卷列表</p>
     * @param array $VolumeMounts <p>挂载卷列表</p>
     * @param array $Labels <p>pod标签</p>
     * @param array $Tolerations <p>Tolerations定义</p>
     * @param array $Envs <p>环境变量</p>
     * @param string $SchedulingPolicy <p>节点调度策略</p>
     * @param string $ResourceLabel <p>资源标签</p>
     * @param string $PodGpuResourceKey <p>GPU资源厂商key</p>
     * @param array $CFSTurboVolumes <p>CFS Turbo 挂载列表</p>
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
        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("PodCpu",$param) and $param["PodCpu"] !== null) {
            $this->PodCpu = $param["PodCpu"];
        }

        if (array_key_exists("PodMem",$param) and $param["PodMem"] !== null) {
            $this->PodMem = $param["PodMem"];
        }

        if (array_key_exists("PodGpuType",$param) and $param["PodGpuType"] !== null) {
            $this->PodGpuType = $param["PodGpuType"];
        }

        if (array_key_exists("PodGpu",$param) and $param["PodGpu"] !== null) {
            $this->PodGpu = $param["PodGpu"];
        }

        if (array_key_exists("PodNum",$param) and $param["PodNum"] !== null) {
            $this->PodNum = $param["PodNum"];
        }

        if (array_key_exists("MinPodNum",$param) and $param["MinPodNum"] !== null) {
            $this->MinPodNum = $param["MinPodNum"];
        }

        if (array_key_exists("MaxPodNum",$param) and $param["MaxPodNum"] !== null) {
            $this->MaxPodNum = $param["MaxPodNum"];
        }

        if (array_key_exists("SupportPV",$param) and $param["SupportPV"] !== null) {
            $this->SupportPV = $param["SupportPV"];
        }

        if (array_key_exists("CBSVolumes",$param) and $param["CBSVolumes"] !== null) {
            $this->CBSVolumes = [];
            foreach ($param["CBSVolumes"] as $key => $value){
                $obj = new CBSVolume();
                $obj->deserialize($value);
                array_push($this->CBSVolumes, $obj);
            }
        }

        if (array_key_exists("CFSVolumes",$param) and $param["CFSVolumes"] !== null) {
            $this->CFSVolumes = [];
            foreach ($param["CFSVolumes"] as $key => $value){
                $obj = new CFSVolume();
                $obj->deserialize($value);
                array_push($this->CFSVolumes, $obj);
            }
        }

        if (array_key_exists("COSVolumes",$param) and $param["COSVolumes"] !== null) {
            $this->COSVolumes = [];
            foreach ($param["COSVolumes"] as $key => $value){
                $obj = new COSVolume();
                $obj->deserialize($value);
                array_push($this->COSVolumes, $obj);
            }
        }

        if (array_key_exists("VolumeMounts",$param) and $param["VolumeMounts"] !== null) {
            $this->VolumeMounts = [];
            foreach ($param["VolumeMounts"] as $key => $value){
                $obj = new VolumeMount();
                $obj->deserialize($value);
                array_push($this->VolumeMounts, $obj);
            }
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new TkeLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Tolerations",$param) and $param["Tolerations"] !== null) {
            $this->Tolerations = [];
            foreach ($param["Tolerations"] as $key => $value){
                $obj = new Toleration();
                $obj->deserialize($value);
                array_push($this->Tolerations, $obj);
            }
        }

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new NameValue();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("SchedulingPolicy",$param) and $param["SchedulingPolicy"] !== null) {
            $this->SchedulingPolicy = $param["SchedulingPolicy"];
        }

        if (array_key_exists("ResourceLabel",$param) and $param["ResourceLabel"] !== null) {
            $this->ResourceLabel = $param["ResourceLabel"];
        }

        if (array_key_exists("PodGpuResourceKey",$param) and $param["PodGpuResourceKey"] !== null) {
            $this->PodGpuResourceKey = $param["PodGpuResourceKey"];
        }

        if (array_key_exists("CFSTurboVolumes",$param) and $param["CFSTurboVolumes"] !== null) {
            $this->CFSTurboVolumes = [];
            foreach ($param["CFSTurboVolumes"] as $key => $value){
                $obj = new CFSTurboVolume();
                $obj->deserialize($value);
                array_push($this->CFSTurboVolumes, $obj);
            }
        }
    }
}
