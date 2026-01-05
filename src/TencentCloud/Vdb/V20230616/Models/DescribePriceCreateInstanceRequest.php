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
 * DescribePriceCreateInstance请求参数结构体
 *
 * @method string getInstanceType() 获取实例类型。
- base：免费测试版。
- single：单机版。
- cluster：高可用版。
 * @method void setInstanceType(string $InstanceType) 设置实例类型。
- base：免费测试版。
- single：单机版。
- cluster：高可用版。
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
 * @method integer getPayMode() 获取指定实例计费方式。
- 0：按量付费。
- 1：包年包月。
 * @method void setPayMode(integer $PayMode) 设置指定实例计费方式。
- 0：按量付费。
- 1：包年包月。
 * @method integer getGoodsNum() 获取购买实例数量。
 * @method void setGoodsNum(integer $GoodsNum) 设置购买实例数量。
 * @method integer getProductType() 获取产品版本，0-标准版，1-容量增强版
 * @method void setProductType(integer $ProductType) 设置产品版本，0-标准版，1-容量增强版
 * @method string getMode() 获取实例类型为高可用版，需指定可用区选项。
- two：两可用区。
- three：三可用区。
 * @method void setMode(string $Mode) 设置实例类型为高可用版，需指定可用区选项。
- two：两可用区。
- three：三可用区。
 * @method integer getPayPeriod() 获取若计费方式为包年包月，指定包年包月续费的时长。
- 单位：月。
- 取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36。默认为1。
 * @method void setPayPeriod(integer $PayPeriod) 设置若计费方式为包年包月，指定包年包月续费的时长。
- 单位：月。
- 取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36。默认为1。
 */
class DescribePriceCreateInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例类型。
- base：免费测试版。
- single：单机版。
- cluster：高可用版。
     */
    public $InstanceType;

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
     * @var integer 指定实例计费方式。
- 0：按量付费。
- 1：包年包月。
     */
    public $PayMode;

    /**
     * @var integer 购买实例数量。
     */
    public $GoodsNum;

    /**
     * @var integer 产品版本，0-标准版，1-容量增强版
     */
    public $ProductType;

    /**
     * @var string 实例类型为高可用版，需指定可用区选项。
- two：两可用区。
- three：三可用区。
     */
    public $Mode;

    /**
     * @var integer 若计费方式为包年包月，指定包年包月续费的时长。
- 单位：月。
- 取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36。默认为1。
     */
    public $PayPeriod;

    /**
     * @param string $InstanceType 实例类型。
- base：免费测试版。
- single：单机版。
- cluster：高可用版。
     * @param integer $Cpu 指定实例所需的 CPU 核数。实例类型不同，支持的 CPU 核数存在差异。
- 计算型： 1、2、4、8、16、24、32。
- 标准型： 1、2、4、8、12、16。
- 存储型： 1、2、4、6、8。
     * @param integer $Memory 指定实例所需的内存大小。单位：GB。选择具体规格，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
     * @param integer $DiskSize 指定实例所需的磁盘大小，单位：GB。选择具体规格，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
     * @param integer $WorkerNodeNum 指定实例所需配置的节点数量。选择方法，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
     * @param integer $PayMode 指定实例计费方式。
- 0：按量付费。
- 1：包年包月。
     * @param integer $GoodsNum 购买实例数量。
     * @param integer $ProductType 产品版本，0-标准版，1-容量增强版
     * @param string $Mode 实例类型为高可用版，需指定可用区选项。
- two：两可用区。
- three：三可用区。
     * @param integer $PayPeriod 若计费方式为包年包月，指定包年包月续费的时长。
- 单位：月。
- 取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36。默认为1。
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
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

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("PayPeriod",$param) and $param["PayPeriod"] !== null) {
            $this->PayPeriod = $param["PayPeriod"];
        }
    }
}
