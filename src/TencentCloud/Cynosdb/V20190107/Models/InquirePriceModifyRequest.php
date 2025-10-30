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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceModify请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method integer getCpu() 获取CPU核数
 * @method void setCpu(integer $Cpu) 设置CPU核数
 * @method integer getMemory() 获取内存大小
 * @method void setMemory(integer $Memory) 设置内存大小
 * @method integer getStorageLimit() 获取存储大小，存储资源变配：ClusterId,StorageLimit
 * @method void setStorageLimit(integer $StorageLimit) 设置存储大小，存储资源变配：ClusterId,StorageLimit
 * @method string getInstanceId() 获取实例ID，计算资源变配必传: ClusterId,InstanceId,Cpu,Memory 
 * @method void setInstanceId(string $InstanceId) 设置实例ID，计算资源变配必传: ClusterId,InstanceId,Cpu,Memory 
 * @method string getDeviceType() 获取实例设备类型
 * @method void setDeviceType(string $DeviceType) 设置实例设备类型
 * @method float getCcu() 获取serverless实例ccu大小
 * @method void setCcu(float $Ccu) 设置serverless实例ccu大小
 */
class InquirePriceModifyRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var integer CPU核数
     */
    public $Cpu;

    /**
     * @var integer 内存大小
     */
    public $Memory;

    /**
     * @var integer 存储大小，存储资源变配：ClusterId,StorageLimit
     */
    public $StorageLimit;

    /**
     * @var string 实例ID，计算资源变配必传: ClusterId,InstanceId,Cpu,Memory 
     */
    public $InstanceId;

    /**
     * @var string 实例设备类型
     */
    public $DeviceType;

    /**
     * @var float serverless实例ccu大小
     */
    public $Ccu;

    /**
     * @param string $ClusterId 集群ID
     * @param integer $Cpu CPU核数
     * @param integer $Memory 内存大小
     * @param integer $StorageLimit 存储大小，存储资源变配：ClusterId,StorageLimit
     * @param string $InstanceId 实例ID，计算资源变配必传: ClusterId,InstanceId,Cpu,Memory 
     * @param string $DeviceType 实例设备类型
     * @param float $Ccu serverless实例ccu大小
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Ccu",$param) and $param["Ccu"] !== null) {
            $this->Ccu = $param["Ccu"];
        }
    }
}
