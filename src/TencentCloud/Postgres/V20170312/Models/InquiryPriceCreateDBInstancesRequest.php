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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceCreateDBInstances请求参数结构体
 *
 * @method string getZone() 获取可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。
 * @method void setZone(string $Zone) 设置可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。
 * @method string getSpecCode() 获取规格ID。该参数可以通过调用DescribeProductConfig接口的返回值中的SpecCode字段来获取。
 * @method void setSpecCode(string $SpecCode) 设置规格ID。该参数可以通过调用DescribeProductConfig接口的返回值中的SpecCode字段来获取。
 * @method integer getStorage() 获取存储容量大小，单位：GB。
 * @method void setStorage(integer $Storage) 设置存储容量大小，单位：GB。
 * @method integer getInstanceCount() 获取实例数量。目前最大数量不超过100，如需一次性创建更多实例，请联系客服支持。
 * @method void setInstanceCount(integer $InstanceCount) 设置实例数量。目前最大数量不超过100，如需一次性创建更多实例，请联系客服支持。
 * @method integer getPeriod() 获取购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值。
 * @method void setPeriod(integer $Period) 设置购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值。
 * @method integer getPid() 获取【弃字段，不再生效】，计费ID。该参数可以通过调用DescribeProductConfig接口的返回值中的Pid字段来获取。
 * @method void setPid(integer $Pid) 设置【弃字段，不再生效】，计费ID。该参数可以通过调用DescribeProductConfig接口的返回值中的Pid字段来获取。
 * @method string getInstanceChargeType() 获取实例计费类型。目前只支持：PREPAID（预付费，即包年包月）。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费类型。目前只支持：PREPAID（预付费，即包年包月）。
 * @method string getInstanceType() 获取实例类型，默认primary，支持如下：
primary（双机高可用（一主一从））
readonly（只读实例）
 * @method void setInstanceType(string $InstanceType) 设置实例类型，默认primary，支持如下：
primary（双机高可用（一主一从））
readonly（只读实例）
 * @method string getDBEngine() 获取DB引擎，默认postgresql，支持如下：
postgresql（云数据库PostgreSQL）
mssql_compatible（MSSQL兼容-云数据库PostgreSQL）
 * @method void setDBEngine(string $DBEngine) 设置DB引擎，默认postgresql，支持如下：
postgresql（云数据库PostgreSQL）
mssql_compatible（MSSQL兼容-云数据库PostgreSQL）
 */
class InquiryPriceCreateDBInstancesRequest extends AbstractModel
{
    /**
     * @var string 可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。
     */
    public $Zone;

    /**
     * @var string 规格ID。该参数可以通过调用DescribeProductConfig接口的返回值中的SpecCode字段来获取。
     */
    public $SpecCode;

    /**
     * @var integer 存储容量大小，单位：GB。
     */
    public $Storage;

    /**
     * @var integer 实例数量。目前最大数量不超过100，如需一次性创建更多实例，请联系客服支持。
     */
    public $InstanceCount;

    /**
     * @var integer 购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值。
     */
    public $Period;

    /**
     * @var integer 【弃字段，不再生效】，计费ID。该参数可以通过调用DescribeProductConfig接口的返回值中的Pid字段来获取。
     */
    public $Pid;

    /**
     * @var string 实例计费类型。目前只支持：PREPAID（预付费，即包年包月）。
     */
    public $InstanceChargeType;

    /**
     * @var string 实例类型，默认primary，支持如下：
primary（双机高可用（一主一从））
readonly（只读实例）
     */
    public $InstanceType;

    /**
     * @var string DB引擎，默认postgresql，支持如下：
postgresql（云数据库PostgreSQL）
mssql_compatible（MSSQL兼容-云数据库PostgreSQL）
     */
    public $DBEngine;

    /**
     * @param string $Zone 可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。
     * @param string $SpecCode 规格ID。该参数可以通过调用DescribeProductConfig接口的返回值中的SpecCode字段来获取。
     * @param integer $Storage 存储容量大小，单位：GB。
     * @param integer $InstanceCount 实例数量。目前最大数量不超过100，如需一次性创建更多实例，请联系客服支持。
     * @param integer $Period 购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值。
     * @param integer $Pid 【弃字段，不再生效】，计费ID。该参数可以通过调用DescribeProductConfig接口的返回值中的Pid字段来获取。
     * @param string $InstanceChargeType 实例计费类型。目前只支持：PREPAID（预付费，即包年包月）。
     * @param string $InstanceType 实例类型，默认primary，支持如下：
primary（双机高可用（一主一从））
readonly（只读实例）
     * @param string $DBEngine DB引擎，默认postgresql，支持如下：
postgresql（云数据库PostgreSQL）
mssql_compatible（MSSQL兼容-云数据库PostgreSQL）
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
    }
}
