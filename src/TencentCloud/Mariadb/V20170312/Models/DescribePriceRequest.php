<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrice请求参数结构体
 *
 * @method string getZone() 获取欲新购实例的可用区ID。
 * @method void setZone(string $Zone) 设置欲新购实例的可用区ID。
 * @method integer getNodeCount() 获取实例节点个数，可以通过 DescribeDBInstanceSpecs
 查询实例规格获得。
 * @method void setNodeCount(integer $NodeCount) 设置实例节点个数，可以通过 DescribeDBInstanceSpecs
 查询实例规格获得。
 * @method integer getMemory() 获取内存大小，单位：GB，可以通过 DescribeDBInstanceSpecs
 查询实例规格获得。
 * @method void setMemory(integer $Memory) 设置内存大小，单位：GB，可以通过 DescribeDBInstanceSpecs
 查询实例规格获得。
 * @method integer getStorage() 获取存储空间大小，单位：GB，可以通过 DescribeDBInstanceSpecs
 查询实例规格获得不同内存大小对应的磁盘规格下限和上限。
 * @method void setStorage(integer $Storage) 设置存储空间大小，单位：GB，可以通过 DescribeDBInstanceSpecs
 查询实例规格获得不同内存大小对应的磁盘规格下限和上限。
 * @method integer getPeriod() 获取欲购买的时长，单位：月。
 * @method void setPeriod(integer $Period) 设置欲购买的时长，单位：月。
 * @method integer getCount() 获取欲购买的数量，默认查询购买1个实例的价格。
 * @method void setCount(integer $Count) 设置欲购买的数量，默认查询购买1个实例的价格。
 * @method string getPaymode() 获取付费类型。postpaid：按量付费   prepaid：预付费
 * @method void setPaymode(string $Paymode) 设置付费类型。postpaid：按量付费   prepaid：预付费
 * @method string getAmountUnit() 获取价格金额单位，不传默认单位为分，取值：  
* pent：分
* microPent：微分
 * @method void setAmountUnit(string $AmountUnit) 设置价格金额单位，不传默认单位为分，取值：  
* pent：分
* microPent：微分
 * @method string getCpuType() 获取Cpu类型，如：英特尔：Intel/AMD，海光：Hygon，默认Intel/AMD
 * @method void setCpuType(string $CpuType) 设置Cpu类型，如：英特尔：Intel/AMD，海光：Hygon，默认Intel/AMD
 */
class DescribePriceRequest extends AbstractModel
{
    /**
     * @var string 欲新购实例的可用区ID。
     */
    public $Zone;

    /**
     * @var integer 实例节点个数，可以通过 DescribeDBInstanceSpecs
 查询实例规格获得。
     */
    public $NodeCount;

    /**
     * @var integer 内存大小，单位：GB，可以通过 DescribeDBInstanceSpecs
 查询实例规格获得。
     */
    public $Memory;

    /**
     * @var integer 存储空间大小，单位：GB，可以通过 DescribeDBInstanceSpecs
 查询实例规格获得不同内存大小对应的磁盘规格下限和上限。
     */
    public $Storage;

    /**
     * @var integer 欲购买的时长，单位：月。
     */
    public $Period;

    /**
     * @var integer 欲购买的数量，默认查询购买1个实例的价格。
     */
    public $Count;

    /**
     * @var string 付费类型。postpaid：按量付费   prepaid：预付费
     */
    public $Paymode;

    /**
     * @var string 价格金额单位，不传默认单位为分，取值：  
* pent：分
* microPent：微分
     */
    public $AmountUnit;

    /**
     * @var string Cpu类型，如：英特尔：Intel/AMD，海光：Hygon，默认Intel/AMD
     */
    public $CpuType;

    /**
     * @param string $Zone 欲新购实例的可用区ID。
     * @param integer $NodeCount 实例节点个数，可以通过 DescribeDBInstanceSpecs
 查询实例规格获得。
     * @param integer $Memory 内存大小，单位：GB，可以通过 DescribeDBInstanceSpecs
 查询实例规格获得。
     * @param integer $Storage 存储空间大小，单位：GB，可以通过 DescribeDBInstanceSpecs
 查询实例规格获得不同内存大小对应的磁盘规格下限和上限。
     * @param integer $Period 欲购买的时长，单位：月。
     * @param integer $Count 欲购买的数量，默认查询购买1个实例的价格。
     * @param string $Paymode 付费类型。postpaid：按量付费   prepaid：预付费
     * @param string $AmountUnit 价格金额单位，不传默认单位为分，取值：  
* pent：分
* microPent：微分
     * @param string $CpuType Cpu类型，如：英特尔：Intel/AMD，海光：Hygon，默认Intel/AMD
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Paymode",$param) and $param["Paymode"] !== null) {
            $this->Paymode = $param["Paymode"];
        }

        if (array_key_exists("AmountUnit",$param) and $param["AmountUnit"] !== null) {
            $this->AmountUnit = $param["AmountUnit"];
        }

        if (array_key_exists("CpuType",$param) and $param["CpuType"] !== null) {
            $this->CpuType = $param["CpuType"];
        }
    }
}
