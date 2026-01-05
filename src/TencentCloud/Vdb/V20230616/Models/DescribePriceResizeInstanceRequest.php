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
 * DescribePriceResizeInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getCpu() 获取指定实例所需的 CPU 核数。实例类型不同，支持的 CPU 核数存在差异。
- 计算型： 1、2、4、8、16、24、32。
- 标准型： 1、2、4、8、12、16。
- 存储型： 1、2、4、6、8。
 * @method void setCpu(integer $Cpu) 设置指定实例所需的 CPU 核数。实例类型不同，支持的 CPU 核数存在差异。
- 计算型： 1、2、4、8、16、24、32。
- 标准型： 1、2、4、8、12、16。
- 存储型： 1、2、4、6、8。
 * @method integer getMemory() 获取指定实例所需的内存大小。单位：GB。选择具体规格，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
 * @method void setMemory(integer $Memory) 设置指定实例所需的内存大小。单位：GB。选择具体规格，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
 * @method integer getDiskSize() 获取指定实例所需的磁盘大小，单位：GB。选择具体规格，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
 * @method void setDiskSize(integer $DiskSize) 设置指定实例所需的磁盘大小，单位：GB。选择具体规格，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
 * @method integer getWorkerNodeNum() 获取指定实例所需配置的节点数量。选择方法，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
 * @method void setWorkerNodeNum(integer $WorkerNodeNum) 设置指定实例所需配置的节点数量。选择方法，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
 */
class DescribePriceResizeInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 指定实例所需的 CPU 核数。实例类型不同，支持的 CPU 核数存在差异。
- 计算型： 1、2、4、8、16、24、32。
- 标准型： 1、2、4、8、12、16。
- 存储型： 1、2、4、6、8。
     */
    public $Cpu;

    /**
     * @var integer 指定实例所需的内存大小。单位：GB。选择具体规格，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
     */
    public $Memory;

    /**
     * @var integer 指定实例所需的磁盘大小，单位：GB。选择具体规格，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
     */
    public $DiskSize;

    /**
     * @var integer 指定实例所需配置的节点数量。选择方法，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
     */
    public $WorkerNodeNum;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $Cpu 指定实例所需的 CPU 核数。实例类型不同，支持的 CPU 核数存在差异。
- 计算型： 1、2、4、8、16、24、32。
- 标准型： 1、2、4、8、12、16。
- 存储型： 1、2、4、6、8。
     * @param integer $Memory 指定实例所需的内存大小。单位：GB。选择具体规格，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
     * @param integer $DiskSize 指定实例所需的磁盘大小，单位：GB。选择具体规格，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
     * @param integer $WorkerNodeNum 指定实例所需配置的节点数量。选择方法，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
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

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("WorkerNodeNum",$param) and $param["WorkerNodeNum"] !== null) {
            $this->WorkerNodeNum = $param["WorkerNodeNum"];
        }
    }
}
