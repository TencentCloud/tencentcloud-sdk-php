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
 * DynamicInstanceGroupSpec
 *
 * @method string getName() 获取<p>group 名称</p>
 * @method void setName(string $Name) 设置<p>group 名称</p>
 * @method integer getPodCount() 获取<p>pod 数量</p>
 * @method void setPodCount(integer $PodCount) 设置<p>pod 数量</p>
 * @method integer getMinNodes() 获取<p>最小节点数</p>
 * @method void setMinNodes(integer $MinNodes) 设置<p>最小节点数</p>
 * @method integer getMaxNodes() 获取<p>最大节点数</p>
 * @method void setMaxNodes(integer $MaxNodes) 设置<p>最大节点数</p>
 * @method boolean getStorageConfigEnabled() 获取<p>是否开启存储配置</p>
 * @method void setStorageConfigEnabled(boolean $StorageConfigEnabled) 设置<p>是否开启存储配置</p>
 * @method string getGroupType() 获取<p>headGroup:head;<br>workerGroup:worker</p>
 * @method void setGroupType(string $GroupType) 设置<p>headGroup:head;<br>workerGroup:worker</p>
 * @method integer getCpu() 获取<p>CPU 核数</p>
 * @method void setCpu(integer $Cpu) 设置<p>CPU 核数</p>
 * @method integer getMemSize() 获取<p>内存(GB)</p>
 * @method void setMemSize(integer $MemSize) 设置<p>内存(GB)</p>
 * @method string getGpuType() 获取<p>GPU类型</p>
 * @method void setGpuType(string $GpuType) 设置<p>GPU类型</p>
 * @method integer getGpu() 获取<p>GPU核数</p>
 * @method void setGpu(integer $Gpu) 设置<p>GPU核数</p>
 * @method string getResourceLabels() 获取<p>资源标签</p>
 * @method void setResourceLabels(string $ResourceLabels) 设置<p>资源标签</p>
 * @method array getEnv() 获取<p>环境变量</p>
 * @method void setEnv(array $Env) 设置<p>环境变量</p>
 * @method array getLabels() 获取<p>标签</p>
 * @method void setLabels(array $Labels) 设置<p>标签</p>
 * @method array getTolerations() 获取<p>容忍度</p>
 * @method void setTolerations(array $Tolerations) 设置<p>容忍度</p>
 * @method string getScheduler() 获取<p>调度策略</p>
 * @method void setScheduler(string $Scheduler) 设置<p>调度策略</p>
 * @method PersistentVolume getPersistentVolume() 获取<p>卷目录</p>
 * @method void setPersistentVolume(PersistentVolume $PersistentVolume) 设置<p>卷目录</p>
 * @method string getPreStartCommand() 获取<p>前置启动命令</p>
 * @method void setPreStartCommand(string $PreStartCommand) 设置<p>前置启动命令</p>
 * @method string getRayStartParams() 获取<p>RayStart启动参数</p>
 * @method void setRayStartParams(string $RayStartParams) 设置<p>RayStart启动参数</p>
 */
class DynamicInstanceGroupSpec extends AbstractModel
{
    /**
     * @var string <p>group 名称</p>
     */
    public $Name;

    /**
     * @var integer <p>pod 数量</p>
     */
    public $PodCount;

    /**
     * @var integer <p>最小节点数</p>
     */
    public $MinNodes;

    /**
     * @var integer <p>最大节点数</p>
     */
    public $MaxNodes;

    /**
     * @var boolean <p>是否开启存储配置</p>
     */
    public $StorageConfigEnabled;

    /**
     * @var string <p>headGroup:head;<br>workerGroup:worker</p>
     */
    public $GroupType;

    /**
     * @var integer <p>CPU 核数</p>
     */
    public $Cpu;

    /**
     * @var integer <p>内存(GB)</p>
     */
    public $MemSize;

    /**
     * @var string <p>GPU类型</p>
     */
    public $GpuType;

    /**
     * @var integer <p>GPU核数</p>
     */
    public $Gpu;

    /**
     * @var string <p>资源标签</p>
     */
    public $ResourceLabels;

    /**
     * @var array <p>环境变量</p>
     */
    public $Env;

    /**
     * @var array <p>标签</p>
     */
    public $Labels;

    /**
     * @var array <p>容忍度</p>
     */
    public $Tolerations;

    /**
     * @var string <p>调度策略</p>
     */
    public $Scheduler;

    /**
     * @var PersistentVolume <p>卷目录</p>
     */
    public $PersistentVolume;

    /**
     * @var string <p>前置启动命令</p>
     */
    public $PreStartCommand;

    /**
     * @var string <p>RayStart启动参数</p>
     */
    public $RayStartParams;

    /**
     * @param string $Name <p>group 名称</p>
     * @param integer $PodCount <p>pod 数量</p>
     * @param integer $MinNodes <p>最小节点数</p>
     * @param integer $MaxNodes <p>最大节点数</p>
     * @param boolean $StorageConfigEnabled <p>是否开启存储配置</p>
     * @param string $GroupType <p>headGroup:head;<br>workerGroup:worker</p>
     * @param integer $Cpu <p>CPU 核数</p>
     * @param integer $MemSize <p>内存(GB)</p>
     * @param string $GpuType <p>GPU类型</p>
     * @param integer $Gpu <p>GPU核数</p>
     * @param string $ResourceLabels <p>资源标签</p>
     * @param array $Env <p>环境变量</p>
     * @param array $Labels <p>标签</p>
     * @param array $Tolerations <p>容忍度</p>
     * @param string $Scheduler <p>调度策略</p>
     * @param PersistentVolume $PersistentVolume <p>卷目录</p>
     * @param string $PreStartCommand <p>前置启动命令</p>
     * @param string $RayStartParams <p>RayStart启动参数</p>
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

        if (array_key_exists("PodCount",$param) and $param["PodCount"] !== null) {
            $this->PodCount = $param["PodCount"];
        }

        if (array_key_exists("MinNodes",$param) and $param["MinNodes"] !== null) {
            $this->MinNodes = $param["MinNodes"];
        }

        if (array_key_exists("MaxNodes",$param) and $param["MaxNodes"] !== null) {
            $this->MaxNodes = $param["MaxNodes"];
        }

        if (array_key_exists("StorageConfigEnabled",$param) and $param["StorageConfigEnabled"] !== null) {
            $this->StorageConfigEnabled = $param["StorageConfigEnabled"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("ResourceLabels",$param) and $param["ResourceLabels"] !== null) {
            $this->ResourceLabels = $param["ResourceLabels"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = [];
            foreach ($param["Env"] as $key => $value){
                $obj = new NameValue();
                $obj->deserialize($value);
                array_push($this->Env, $obj);
            }
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new NameValue();
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

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("PersistentVolume",$param) and $param["PersistentVolume"] !== null) {
            $this->PersistentVolume = new PersistentVolume();
            $this->PersistentVolume->deserialize($param["PersistentVolume"]);
        }

        if (array_key_exists("PreStartCommand",$param) and $param["PreStartCommand"] !== null) {
            $this->PreStartCommand = $param["PreStartCommand"];
        }

        if (array_key_exists("RayStartParams",$param) and $param["RayStartParams"] !== null) {
            $this->RayStartParams = $param["RayStartParams"];
        }
    }
}
