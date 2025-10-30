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
 * Pod计费信息
 *
 * @method string getStartTime() 获取Pod计费开始时间
 * @method void setStartTime(string $StartTime) 设置Pod计费开始时间
 * @method string getUid() 获取Pod的Uid
 * @method void setUid(string $Uid) 设置Pod的Uid
 * @method float getCpu() 获取Pod的CPU
 * @method void setCpu(float $Cpu) 设置Pod的CPU
 * @method float getMemory() 获取Pod的内存
 * @method void setMemory(float $Memory) 设置Pod的内存
 * @method string getType() 获取Pod类型：intel、amd、v100、t4、a10\*gnv4、a10\*gnv4v等。
 * @method void setType(string $Type) 设置Pod类型：intel、amd、v100、t4、a10\*gnv4、a10\*gnv4v等。
 * @method string getGpu() 获取Pod是GPU时，表示GPU卡数
 * @method void setGpu(string $Gpu) 设置Pod是GPU时，表示GPU卡数
 * @method string getChargeType() 获取计费类型
PREPAID：Pod调度到包月超级节点
POSTPAID_BY_HOUR：按量计费
RESERVED_INSTANCE：上个周期被预留券抵扣
SPOT：竞价实例
TPOD：特惠实例
 * @method void setChargeType(string $ChargeType) 设置计费类型
PREPAID：Pod调度到包月超级节点
POSTPAID_BY_HOUR：按量计费
RESERVED_INSTANCE：上个周期被预留券抵扣
SPOT：竞价实例
TPOD：特惠实例
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getName() 获取Pod名称
 * @method void setName(string $Name) 设置Pod名称
 */
class PodChargeInfo extends AbstractModel
{
    /**
     * @var string Pod计费开始时间
     */
    public $StartTime;

    /**
     * @var string Pod的Uid
     */
    public $Uid;

    /**
     * @var float Pod的CPU
     */
    public $Cpu;

    /**
     * @var float Pod的内存
     */
    public $Memory;

    /**
     * @var string Pod类型：intel、amd、v100、t4、a10\*gnv4、a10\*gnv4v等。
     */
    public $Type;

    /**
     * @var string Pod是GPU时，表示GPU卡数
     */
    public $Gpu;

    /**
     * @var string 计费类型
PREPAID：Pod调度到包月超级节点
POSTPAID_BY_HOUR：按量计费
RESERVED_INSTANCE：上个周期被预留券抵扣
SPOT：竞价实例
TPOD：特惠实例
     */
    public $ChargeType;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string Pod名称
     */
    public $Name;

    /**
     * @param string $StartTime Pod计费开始时间
     * @param string $Uid Pod的Uid
     * @param float $Cpu Pod的CPU
     * @param float $Memory Pod的内存
     * @param string $Type Pod类型：intel、amd、v100、t4、a10\*gnv4、a10\*gnv4v等。
     * @param string $Gpu Pod是GPU时，表示GPU卡数
     * @param string $ChargeType 计费类型
PREPAID：Pod调度到包月超级节点
POSTPAID_BY_HOUR：按量计费
RESERVED_INSTANCE：上个周期被预留券抵扣
SPOT：竞价实例
TPOD：特惠实例
     * @param string $Namespace 命名空间
     * @param string $Name Pod名称
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
