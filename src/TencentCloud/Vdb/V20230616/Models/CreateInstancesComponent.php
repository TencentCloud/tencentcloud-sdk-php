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
namespace TencentCloud\Vdb\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 组件设置列表
 *
 * @method string getComponent() 获取底层组件名，需要和产品模型中的保持一致
 * @method void setComponent(string $Component) 设置底层组件名，需要和产品模型中的保持一致
 * @method float getCpu() 获取组件cpu大小
 * @method void setCpu(float $Cpu) 设置组件cpu大小
 * @method float getMemory() 获取组件内存大小
 * @method void setMemory(float $Memory) 设置组件内存大小
 * @method integer getReplicaNum() 获取业务节点数
 * @method void setReplicaNum(integer $ReplicaNum) 设置业务节点数
 * @method string getName() 获取自定义组件名
 * @method void setName(string $Name) 设置自定义组件名
 * @method integer getStorageSize() 获取组件磁盘大小
 * @method void setStorageSize(integer $StorageSize) 设置组件磁盘大小
 * @method string getStorageType() 获取磁盘类型
 * @method void setStorageType(string $StorageType) 设置磁盘类型
 * @method string getParams() 获取组件额外参数，通过JSON提交
 * @method void setParams(string $Params) 设置组件额外参数，通过JSON提交
 */
class CreateInstancesComponent extends AbstractModel
{
    /**
     * @var string 底层组件名，需要和产品模型中的保持一致
     */
    public $Component;

    /**
     * @var float 组件cpu大小
     */
    public $Cpu;

    /**
     * @var float 组件内存大小
     */
    public $Memory;

    /**
     * @var integer 业务节点数
     */
    public $ReplicaNum;

    /**
     * @var string 自定义组件名
     */
    public $Name;

    /**
     * @var integer 组件磁盘大小
     */
    public $StorageSize;

    /**
     * @var string 磁盘类型
     */
    public $StorageType;

    /**
     * @var string 组件额外参数，通过JSON提交
     */
    public $Params;

    /**
     * @param string $Component 底层组件名，需要和产品模型中的保持一致
     * @param float $Cpu 组件cpu大小
     * @param float $Memory 组件内存大小
     * @param integer $ReplicaNum 业务节点数
     * @param string $Name 自定义组件名
     * @param integer $StorageSize 组件磁盘大小
     * @param string $StorageType 磁盘类型
     * @param string $Params 组件额外参数，通过JSON提交
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
        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }
    }
}
