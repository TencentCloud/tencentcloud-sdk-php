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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预留券的使用率信息
 *
 * @method float getRate() 获取使用率
 * @method void setRate(float $Rate) 设置使用率
 * @method integer getNum() 获取预留券数量
 * @method void setNum(integer $Num) 设置预留券数量
 * @method float getCPU() 获取核数
 * @method void setCPU(float $CPU) 设置核数
 * @method float getMemory() 获取内存，单位：GiB
 * @method void setMemory(float $Memory) 设置内存，单位：GiB
 * @method string getType() 获取 预留券类型, common：CPU通用，amd：AMD专用，windows-common: Windows容器 CPU通用，windows-amd：Windows容器 AMD专用，sa4，sa5，s7，s8，t4，v100，l20，l40，a10\*gnv4，a10\*gnv4v，a10\*pnv4
 * @method void setType(string $Type) 设置 预留券类型, common：CPU通用，amd：AMD专用，windows-common: Windows容器 CPU通用，windows-amd：Windows容器 AMD专用，sa4，sa5，s7，s8，t4，v100，l20，l40，a10\*gnv4，a10\*gnv4v，a10\*pnv4
 * @method string getGpuNum() 获取GPU 卡数
 * @method void setGpuNum(string $GpuNum) 设置GPU 卡数
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getClusterId() 获取集群 ID
 * @method void setClusterId(string $ClusterId) 设置集群 ID
 * @method string getNodeName() 获取节点 ID
 * @method void setNodeName(string $NodeName) 设置节点 ID
 * @method integer getPodNum() 获取Pod 数量
 * @method void setPodNum(integer $PodNum) 设置Pod 数量
 */
class ReservedInstanceUtilizationRate extends AbstractModel
{
    /**
     * @var float 使用率
     */
    public $Rate;

    /**
     * @var integer 预留券数量
     */
    public $Num;

    /**
     * @var float 核数
     */
    public $CPU;

    /**
     * @var float 内存，单位：GiB
     */
    public $Memory;

    /**
     * @var string  预留券类型, common：CPU通用，amd：AMD专用，windows-common: Windows容器 CPU通用，windows-amd：Windows容器 AMD专用，sa4，sa5，s7，s8，t4，v100，l20，l40，a10\*gnv4，a10\*gnv4v，a10\*pnv4
     */
    public $Type;

    /**
     * @var string GPU 卡数
     */
    public $GpuNum;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 集群 ID
     */
    public $ClusterId;

    /**
     * @var string 节点 ID
     */
    public $NodeName;

    /**
     * @var integer Pod 数量
     */
    public $PodNum;

    /**
     * @param float $Rate 使用率
     * @param integer $Num 预留券数量
     * @param float $CPU 核数
     * @param float $Memory 内存，单位：GiB
     * @param string $Type  预留券类型, common：CPU通用，amd：AMD专用，windows-common: Windows容器 CPU通用，windows-amd：Windows容器 AMD专用，sa4，sa5，s7，s8，t4，v100，l20，l40，a10\*gnv4，a10\*gnv4v，a10\*pnv4
     * @param string $GpuNum GPU 卡数
     * @param string $Zone 可用区
     * @param string $ClusterId 集群 ID
     * @param string $NodeName 节点 ID
     * @param integer $PodNum Pod 数量
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
        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("GpuNum",$param) and $param["GpuNum"] !== null) {
            $this->GpuNum = $param["GpuNum"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("PodNum",$param) and $param["PodNum"] !== null) {
            $this->PodNum = $param["PodNum"];
        }
    }
}
