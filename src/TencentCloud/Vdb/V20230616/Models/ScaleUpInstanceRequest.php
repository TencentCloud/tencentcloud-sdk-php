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
 * ScaleUpInstance请求参数结构体
 *
 * @method string getInstanceId() 获取指定需升级配置的实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置指定需升级配置的实例 ID。
 * @method float getCpu() 获取指定升级配置后的 CPU 核数。
- 节点规格可选项（CPU & 内存）必须 >= 当前配置。
- 可选择的规格信息，请参见[选择节点规格与数量](https://cloud.tencent.com/document/product/1709/113399)。
 * @method void setCpu(float $Cpu) 设置指定升级配置后的 CPU 核数。
- 节点规格可选项（CPU & 内存）必须 >= 当前配置。
- 可选择的规格信息，请参见[选择节点规格与数量](https://cloud.tencent.com/document/product/1709/113399)。
 * @method float getMemory() 获取指定升级配置后的内存大小，单位为：GB。
- 节点规格可选项（CPU & 内存）必须 >= 当前配置。
- 不同实例类型对 CPU 与内存资源的配置比例有不同的要求。例如，计算型实例，CPU 与内存的分配比例要求为 1:2。CPU 被指定为 4 核，那么内存则应被指定为 8GB。节点规格的详细信息，请参见[选择节点规格与数量](https://cloud.tencent.com/document/product/1709/113399)。

 * @method void setMemory(float $Memory) 设置指定升级配置后的内存大小，单位为：GB。
- 节点规格可选项（CPU & 内存）必须 >= 当前配置。
- 不同实例类型对 CPU 与内存资源的配置比例有不同的要求。例如，计算型实例，CPU 与内存的分配比例要求为 1:2。CPU 被指定为 4 核，那么内存则应被指定为 8GB。节点规格的详细信息，请参见[选择节点规格与数量](https://cloud.tencent.com/document/product/1709/113399)。

 * @method integer getStorageSize() 获取指定升级配置后的磁盘容量。
- 单位：GB。
- 取值范围为：[10,1000]。
- 取值必须为10的倍数。
 * @method void setStorageSize(integer $StorageSize) 设置指定升级配置后的磁盘容量。
- 单位：GB。
- 取值范围为：[10,1000]。
- 取值必须为10的倍数。
 * @method boolean getRunNow() 获取指定垂直扩容升级节点配置的时间。
- false：默认值，指在下一个维护时间段内执行升配节点规格的任务。实例列表中“状态”列将显示“待执行配置变更”，等到维护时间窗内启动任务。维护时间的更多信息，请参见维护时间窗。
- true：立即执行升级配置的任务，请确保此时没有重大业务操作。
 * @method void setRunNow(boolean $RunNow) 设置指定垂直扩容升级节点配置的时间。
- false：默认值，指在下一个维护时间段内执行升配节点规格的任务。实例列表中“状态”列将显示“待执行配置变更”，等到维护时间窗内启动任务。维护时间的更多信息，请参见维护时间窗。
- true：立即执行升级配置的任务，请确保此时没有重大业务操作。
 */
class ScaleUpInstanceRequest extends AbstractModel
{
    /**
     * @var string 指定需升级配置的实例 ID。
     */
    public $InstanceId;

    /**
     * @var float 指定升级配置后的 CPU 核数。
- 节点规格可选项（CPU & 内存）必须 >= 当前配置。
- 可选择的规格信息，请参见[选择节点规格与数量](https://cloud.tencent.com/document/product/1709/113399)。
     */
    public $Cpu;

    /**
     * @var float 指定升级配置后的内存大小，单位为：GB。
- 节点规格可选项（CPU & 内存）必须 >= 当前配置。
- 不同实例类型对 CPU 与内存资源的配置比例有不同的要求。例如，计算型实例，CPU 与内存的分配比例要求为 1:2。CPU 被指定为 4 核，那么内存则应被指定为 8GB。节点规格的详细信息，请参见[选择节点规格与数量](https://cloud.tencent.com/document/product/1709/113399)。

     */
    public $Memory;

    /**
     * @var integer 指定升级配置后的磁盘容量。
- 单位：GB。
- 取值范围为：[10,1000]。
- 取值必须为10的倍数。
     */
    public $StorageSize;

    /**
     * @var boolean 指定垂直扩容升级节点配置的时间。
- false：默认值，指在下一个维护时间段内执行升配节点规格的任务。实例列表中“状态”列将显示“待执行配置变更”，等到维护时间窗内启动任务。维护时间的更多信息，请参见维护时间窗。
- true：立即执行升级配置的任务，请确保此时没有重大业务操作。
     */
    public $RunNow;

    /**
     * @param string $InstanceId 指定需升级配置的实例 ID。
     * @param float $Cpu 指定升级配置后的 CPU 核数。
- 节点规格可选项（CPU & 内存）必须 >= 当前配置。
- 可选择的规格信息，请参见[选择节点规格与数量](https://cloud.tencent.com/document/product/1709/113399)。
     * @param float $Memory 指定升级配置后的内存大小，单位为：GB。
- 节点规格可选项（CPU & 内存）必须 >= 当前配置。
- 不同实例类型对 CPU 与内存资源的配置比例有不同的要求。例如，计算型实例，CPU 与内存的分配比例要求为 1:2。CPU 被指定为 4 核，那么内存则应被指定为 8GB。节点规格的详细信息，请参见[选择节点规格与数量](https://cloud.tencent.com/document/product/1709/113399)。

     * @param integer $StorageSize 指定升级配置后的磁盘容量。
- 单位：GB。
- 取值范围为：[10,1000]。
- 取值必须为10的倍数。
     * @param boolean $RunNow 指定垂直扩容升级节点配置的时间。
- false：默认值，指在下一个维护时间段内执行升配节点规格的任务。实例列表中“状态”列将显示“待执行配置变更”，等到维护时间窗内启动任务。维护时间的更多信息，请参见维护时间窗。
- true：立即执行升级配置的任务，请确保此时没有重大业务操作。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("RunNow",$param) and $param["RunNow"] !== null) {
            $this->RunNow = $param["RunNow"];
        }
    }
}
