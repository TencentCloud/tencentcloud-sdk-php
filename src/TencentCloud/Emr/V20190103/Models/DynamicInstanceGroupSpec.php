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
 * @method string getName() 获取group 名称
 * @method void setName(string $Name) 设置group 名称
 * @method integer getPodCount() 获取pod 数量
 * @method void setPodCount(integer $PodCount) 设置pod 数量
 * @method integer getMinNodes() 获取最小节点数
 * @method void setMinNodes(integer $MinNodes) 设置最小节点数
 * @method integer getMaxNodes() 获取最大节点数
 * @method void setMaxNodes(integer $MaxNodes) 设置最大节点数
 * @method boolean getStorageConfigEnabled() 获取 是否开启存储配置
 * @method void setStorageConfigEnabled(boolean $StorageConfigEnabled) 设置 是否开启存储配置
 * @method string getGroupType() 获取headGroup:head;
workerGroup:worker
 * @method void setGroupType(string $GroupType) 设置headGroup:head;
workerGroup:worker
 * @method integer getCpu() 获取CPU 核数
 * @method void setCpu(integer $Cpu) 设置CPU 核数
 * @method integer getMemSize() 获取内存(GB)
 * @method void setMemSize(integer $MemSize) 设置内存(GB)
 * @method string getGpuType() 获取GPU类型
 * @method void setGpuType(string $GpuType) 设置GPU类型
 * @method integer getGpu() 获取GPU核数
 * @method void setGpu(integer $Gpu) 设置GPU核数
 * @method string getResourceLabels() 获取资源标签
 * @method void setResourceLabels(string $ResourceLabels) 设置资源标签
 * @method array getEnv() 获取环境变量
 * @method void setEnv(array $Env) 设置环境变量
 * @method array getLabels() 获取标签
 * @method void setLabels(array $Labels) 设置标签
 * @method array getTolerations() 获取容忍度
 * @method void setTolerations(array $Tolerations) 设置容忍度
 * @method string getScheduler() 获取调度策略
 * @method void setScheduler(string $Scheduler) 设置调度策略
 * @method PersistentVolume getPersistentVolume() 获取卷目录
 * @method void setPersistentVolume(PersistentVolume $PersistentVolume) 设置卷目录
 */
class DynamicInstanceGroupSpec extends AbstractModel
{
    /**
     * @var string group 名称
     */
    public $Name;

    /**
     * @var integer pod 数量
     */
    public $PodCount;

    /**
     * @var integer 最小节点数
     */
    public $MinNodes;

    /**
     * @var integer 最大节点数
     */
    public $MaxNodes;

    /**
     * @var boolean  是否开启存储配置
     */
    public $StorageConfigEnabled;

    /**
     * @var string headGroup:head;
workerGroup:worker
     */
    public $GroupType;

    /**
     * @var integer CPU 核数
     */
    public $Cpu;

    /**
     * @var integer 内存(GB)
     */
    public $MemSize;

    /**
     * @var string GPU类型
     */
    public $GpuType;

    /**
     * @var integer GPU核数
     */
    public $Gpu;

    /**
     * @var string 资源标签
     */
    public $ResourceLabels;

    /**
     * @var array 环境变量
     */
    public $Env;

    /**
     * @var array 标签
     */
    public $Labels;

    /**
     * @var array 容忍度
     */
    public $Tolerations;

    /**
     * @var string 调度策略
     */
    public $Scheduler;

    /**
     * @var PersistentVolume 卷目录
     */
    public $PersistentVolume;

    /**
     * @param string $Name group 名称
     * @param integer $PodCount pod 数量
     * @param integer $MinNodes 最小节点数
     * @param integer $MaxNodes 最大节点数
     * @param boolean $StorageConfigEnabled  是否开启存储配置
     * @param string $GroupType headGroup:head;
workerGroup:worker
     * @param integer $Cpu CPU 核数
     * @param integer $MemSize 内存(GB)
     * @param string $GpuType GPU类型
     * @param integer $Gpu GPU核数
     * @param string $ResourceLabels 资源标签
     * @param array $Env 环境变量
     * @param array $Labels 标签
     * @param array $Tolerations 容忍度
     * @param string $Scheduler 调度策略
     * @param PersistentVolume $PersistentVolume 卷目录
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
    }
}
