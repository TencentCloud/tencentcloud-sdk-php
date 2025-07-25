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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUpgradePrice请求参数结构体
 *
 * @method string getInstanceId() 获取待升级的实例ID。形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例详情获得。
 * @method void setInstanceId(string $InstanceId) 设置待升级的实例ID。形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例详情获得。
 * @method integer getMemory() 获取内存大小，单位：GB，可以通过 DescribeDBInstanceSpecs
 查询实例规格获得。
 * @method void setMemory(integer $Memory) 设置内存大小，单位：GB，可以通过 DescribeDBInstanceSpecs
 查询实例规格获得。
 * @method integer getStorage() 获取存储空间大小，单位：GB，可以通过 DescribeDBInstanceSpecs
 查询实例规格获得不同内存大小对应的磁盘规格下限和上限。
 * @method void setStorage(integer $Storage) 设置存储空间大小，单位：GB，可以通过 DescribeDBInstanceSpecs
 查询实例规格获得不同内存大小对应的磁盘规格下限和上限。
 * @method integer getNodeCount() 获取新节点数，传0表示节点数不变
 * @method void setNodeCount(integer $NodeCount) 设置新节点数，传0表示节点数不变
 * @method string getAmountUnit() 获取价格金额单位，不传默认单位为分，取值：  
* pent：分
* microPent：微分
 * @method void setAmountUnit(string $AmountUnit) 设置价格金额单位，不传默认单位为分，取值：  
* pent：分
* microPent：微分
 */
class DescribeUpgradePriceRequest extends AbstractModel
{
    /**
     * @var string 待升级的实例ID。形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例详情获得。
     */
    public $InstanceId;

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
     * @var integer 新节点数，传0表示节点数不变
     */
    public $NodeCount;

    /**
     * @var string 价格金额单位，不传默认单位为分，取值：  
* pent：分
* microPent：微分
     */
    public $AmountUnit;

    /**
     * @param string $InstanceId 待升级的实例ID。形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例详情获得。
     * @param integer $Memory 内存大小，单位：GB，可以通过 DescribeDBInstanceSpecs
 查询实例规格获得。
     * @param integer $Storage 存储空间大小，单位：GB，可以通过 DescribeDBInstanceSpecs
 查询实例规格获得不同内存大小对应的磁盘规格下限和上限。
     * @param integer $NodeCount 新节点数，传0表示节点数不变
     * @param string $AmountUnit 价格金额单位，不传默认单位为分，取值：  
* pent：分
* microPent：微分
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

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("AmountUnit",$param) and $param["AmountUnit"] !== null) {
            $this->AmountUnit = $param["AmountUnit"];
        }
    }
}
