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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceCreateDBInstances请求参数结构体
 *
 * @method string getZone() 获取<p>可用区名称。该参数可以通过调用<a href="https://cloud.tencent.com/document/product/409/16769"> DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
 * @method void setZone(string $Zone) 设置<p>可用区名称。该参数可以通过调用<a href="https://cloud.tencent.com/document/product/409/16769"> DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
 * @method string getSpecCode() 获取<p>规格ID。该参数可以通过调用<a href="https://cloud.tencent.com/document/product/409/89019">DescribeClasses</a>接口的返回值中的SpecCode字段来获取。</p>
 * @method void setSpecCode(string $SpecCode) 设置<p>规格ID。该参数可以通过调用<a href="https://cloud.tencent.com/document/product/409/89019">DescribeClasses</a>接口的返回值中的SpecCode字段来获取。</p>
 * @method integer getStorage() 获取<p>存储容量大小，单位：GB。该参数的设置步长为10。</p>
 * @method void setStorage(integer $Storage) 设置<p>存储容量大小，单位：GB。该参数的设置步长为10。</p>
 * @method integer getInstanceCount() 获取<p>实例数量。目前最大数量不超过100，如需一次性创建更多实例，请联系客服支持。</p>
 * @method void setInstanceCount(integer $InstanceCount) 设置<p>实例数量。目前最大数量不超过100，如需一次性创建更多实例，请联系客服支持。</p>
 * @method integer getPeriod() 获取<p>购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值。</p>
 * @method void setPeriod(integer $Period) 设置<p>购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值。</p>
 * @method integer getPid() 获取<p>【弃字段，不再生效】，计费ID。该参数可以通过调用DescribeProductConfig接口的返回值中的Pid字段来获取。</p>
 * @method void setPid(integer $Pid) 设置<p>【弃字段，不再生效】，计费ID。该参数可以通过调用DescribeProductConfig接口的返回值中的Pid字段来获取。</p>
 * @method string getInstanceChargeType() 获取<p>实例计费类型。目前支持：PREPAID（预付费，即包年包月）和 POSTPAID（按量计费）。<br>默认值：PREPAID</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>实例计费类型。目前支持：PREPAID（预付费，即包年包月）和 POSTPAID（按量计费）。<br>默认值：PREPAID</p>
 * @method string getInstanceType() 获取<p>实例类型，默认primary，支持如下：<br>primary（双机高可用（一主一从））<br>readonly（只读实例）</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型，默认primary，支持如下：<br>primary（双机高可用（一主一从））<br>readonly（只读实例）</p>
 * @method string getDBEngine() 获取<p>DB引擎，默认postgresql，支持如下：<br>postgresql（云数据库PostgreSQL）<br>mssql_compatible（MSSQL兼容-云数据库PostgreSQL）</p>
 * @method void setDBEngine(string $DBEngine) 设置<p>DB引擎，默认postgresql，支持如下：<br>postgresql（云数据库PostgreSQL）<br>mssql_compatible（MSSQL兼容-云数据库PostgreSQL）</p>
 * @method string getStorageType() 获取<p>实例存储类型，可选值：PHYSICAL_LOCAL_SSD：物理机本地ssd硬盘 CLOUD_PREMIUM：高性能云硬盘 CLOUD_SSD：ssd云硬盘 CLOUD_HSSD：增强型ssd云硬盘</p>
 * @method void setStorageType(string $StorageType) 设置<p>实例存储类型，可选值：PHYSICAL_LOCAL_SSD：物理机本地ssd硬盘 CLOUD_PREMIUM：高性能云硬盘 CLOUD_SSD：ssd云硬盘 CLOUD_HSSD：增强型ssd云硬盘</p>
 */
class InquiryPriceCreateDBInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>可用区名称。该参数可以通过调用<a href="https://cloud.tencent.com/document/product/409/16769"> DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
     */
    public $Zone;

    /**
     * @var string <p>规格ID。该参数可以通过调用<a href="https://cloud.tencent.com/document/product/409/89019">DescribeClasses</a>接口的返回值中的SpecCode字段来获取。</p>
     */
    public $SpecCode;

    /**
     * @var integer <p>存储容量大小，单位：GB。该参数的设置步长为10。</p>
     */
    public $Storage;

    /**
     * @var integer <p>实例数量。目前最大数量不超过100，如需一次性创建更多实例，请联系客服支持。</p>
     */
    public $InstanceCount;

    /**
     * @var integer <p>购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值。</p>
     */
    public $Period;

    /**
     * @var integer <p>【弃字段，不再生效】，计费ID。该参数可以通过调用DescribeProductConfig接口的返回值中的Pid字段来获取。</p>
     */
    public $Pid;

    /**
     * @var string <p>实例计费类型。目前支持：PREPAID（预付费，即包年包月）和 POSTPAID（按量计费）。<br>默认值：PREPAID</p>
     */
    public $InstanceChargeType;

    /**
     * @var string <p>实例类型，默认primary，支持如下：<br>primary（双机高可用（一主一从））<br>readonly（只读实例）</p>
     */
    public $InstanceType;

    /**
     * @var string <p>DB引擎，默认postgresql，支持如下：<br>postgresql（云数据库PostgreSQL）<br>mssql_compatible（MSSQL兼容-云数据库PostgreSQL）</p>
     */
    public $DBEngine;

    /**
     * @var string <p>实例存储类型，可选值：PHYSICAL_LOCAL_SSD：物理机本地ssd硬盘 CLOUD_PREMIUM：高性能云硬盘 CLOUD_SSD：ssd云硬盘 CLOUD_HSSD：增强型ssd云硬盘</p>
     */
    public $StorageType;

    /**
     * @param string $Zone <p>可用区名称。该参数可以通过调用<a href="https://cloud.tencent.com/document/product/409/16769"> DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
     * @param string $SpecCode <p>规格ID。该参数可以通过调用<a href="https://cloud.tencent.com/document/product/409/89019">DescribeClasses</a>接口的返回值中的SpecCode字段来获取。</p>
     * @param integer $Storage <p>存储容量大小，单位：GB。该参数的设置步长为10。</p>
     * @param integer $InstanceCount <p>实例数量。目前最大数量不超过100，如需一次性创建更多实例，请联系客服支持。</p>
     * @param integer $Period <p>购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值。</p>
     * @param integer $Pid <p>【弃字段，不再生效】，计费ID。该参数可以通过调用DescribeProductConfig接口的返回值中的Pid字段来获取。</p>
     * @param string $InstanceChargeType <p>实例计费类型。目前支持：PREPAID（预付费，即包年包月）和 POSTPAID（按量计费）。<br>默认值：PREPAID</p>
     * @param string $InstanceType <p>实例类型，默认primary，支持如下：<br>primary（双机高可用（一主一从））<br>readonly（只读实例）</p>
     * @param string $DBEngine <p>DB引擎，默认postgresql，支持如下：<br>postgresql（云数据库PostgreSQL）<br>mssql_compatible（MSSQL兼容-云数据库PostgreSQL）</p>
     * @param string $StorageType <p>实例存储类型，可选值：PHYSICAL_LOCAL_SSD：物理机本地ssd硬盘 CLOUD_PREMIUM：高性能云硬盘 CLOUD_SSD：ssd云硬盘 CLOUD_HSSD：增强型ssd云硬盘</p>
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

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("DBEngine",$param) and $param["DBEngine"] !== null) {
            $this->DBEngine = $param["DBEngine"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
