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
namespace TencentCloud\Tdcpg\V20211118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群下的实例信息
 *
 * @method string getInstanceId() 获取实例ID，集群下唯一
 * @method void setInstanceId(string $InstanceId) 设置实例ID，集群下唯一
 * @method string getInstanceName() 获取实例名字，默认和实例ID一致
 * @method void setInstanceName(string $InstanceName) 设置实例名字，默认和实例ID一致
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getEndpointId() 获取实例所在的访问点ID
 * @method void setEndpointId(string $EndpointId) 设置实例所在的访问点ID
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getDBVersion() 获取数据库版本
 * @method void setDBVersion(string $DBVersion) 设置数据库版本
 * @method string getStatus() 获取实例状态
 * @method void setStatus(string $Status) 设置实例状态
 * @method string getStatusDesc() 获取实例状态中文含义
 * @method void setStatusDesc(string $StatusDesc) 设置实例状态中文含义
 * @method string getCreateTime() 获取实例创建时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
 * @method void setCreateTime(string $CreateTime) 设置实例创建时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
 * @method string getPayMode() 获取付费模式：
- PREPAID : 预付费
- POSTPAID_BY_HOUR : 按小时结算后付费

同一集群下付费模式需要保持一致。
 * @method void setPayMode(string $PayMode) 设置付费模式：
- PREPAID : 预付费
- POSTPAID_BY_HOUR : 按小时结算后付费

同一集群下付费模式需要保持一致。
 * @method string getPayPeriodEndTime() 获取实例到期时间。同一集群下到期时间需要保持一致。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
 * @method void setPayPeriodEndTime(string $PayPeriodEndTime) 设置实例到期时间。同一集群下到期时间需要保持一致。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
 * @method integer getCPU() 获取CPU核数
 * @method void setCPU(integer $CPU) 设置CPU核数
 * @method integer getMemory() 获取内存大小，单位GiB
 * @method void setMemory(integer $Memory) 设置内存大小，单位GiB
 * @method string getInstanceType() 获取实例类型
 - RW：读写实例
 - RO：只读实例
 * @method void setInstanceType(string $InstanceType) 设置实例类型
 - RW：读写实例
 - RO：只读实例
 * @method string getDBMajorVersion() 获取TDSQL-C PostgreSQL 合入的社区主要版本号
 * @method void setDBMajorVersion(string $DBMajorVersion) 设置TDSQL-C PostgreSQL 合入的社区主要版本号
 * @method string getDBKernelVersion() 获取TDSQL-C PostgreSQL 内核版本号
 * @method void setDBKernelVersion(string $DBKernelVersion) 设置TDSQL-C PostgreSQL 内核版本号
 */
class Instance extends AbstractModel
{
    /**
     * @var string 实例ID，集群下唯一
     */
    public $InstanceId;

    /**
     * @var string 实例名字，默认和实例ID一致
     */
    public $InstanceName;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 实例所在的访问点ID
     */
    public $EndpointId;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 数据库版本
     */
    public $DBVersion;

    /**
     * @var string 实例状态
     */
    public $Status;

    /**
     * @var string 实例状态中文含义
     */
    public $StatusDesc;

    /**
     * @var string 实例创建时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
     */
    public $CreateTime;

    /**
     * @var string 付费模式：
- PREPAID : 预付费
- POSTPAID_BY_HOUR : 按小时结算后付费

同一集群下付费模式需要保持一致。
     */
    public $PayMode;

    /**
     * @var string 实例到期时间。同一集群下到期时间需要保持一致。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
     */
    public $PayPeriodEndTime;

    /**
     * @var integer CPU核数
     */
    public $CPU;

    /**
     * @var integer 内存大小，单位GiB
     */
    public $Memory;

    /**
     * @var string 实例类型
 - RW：读写实例
 - RO：只读实例
     */
    public $InstanceType;

    /**
     * @var string TDSQL-C PostgreSQL 合入的社区主要版本号
     */
    public $DBMajorVersion;

    /**
     * @var string TDSQL-C PostgreSQL 内核版本号
     */
    public $DBKernelVersion;

    /**
     * @param string $InstanceId 实例ID，集群下唯一
     * @param string $InstanceName 实例名字，默认和实例ID一致
     * @param string $ClusterId 集群ID
     * @param string $EndpointId 实例所在的访问点ID
     * @param string $Region 地域
     * @param string $Zone 可用区
     * @param string $DBVersion 数据库版本
     * @param string $Status 实例状态
     * @param string $StatusDesc 实例状态中文含义
     * @param string $CreateTime 实例创建时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
     * @param string $PayMode 付费模式：
- PREPAID : 预付费
- POSTPAID_BY_HOUR : 按小时结算后付费

同一集群下付费模式需要保持一致。
     * @param string $PayPeriodEndTime 实例到期时间。同一集群下到期时间需要保持一致。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
     * @param integer $CPU CPU核数
     * @param integer $Memory 内存大小，单位GiB
     * @param string $InstanceType 实例类型
 - RW：读写实例
 - RO：只读实例
     * @param string $DBMajorVersion TDSQL-C PostgreSQL 合入的社区主要版本号
     * @param string $DBKernelVersion TDSQL-C PostgreSQL 内核版本号
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("EndpointId",$param) and $param["EndpointId"] !== null) {
            $this->EndpointId = $param["EndpointId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayPeriodEndTime",$param) and $param["PayPeriodEndTime"] !== null) {
            $this->PayPeriodEndTime = $param["PayPeriodEndTime"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("DBMajorVersion",$param) and $param["DBMajorVersion"] !== null) {
            $this->DBMajorVersion = $param["DBMajorVersion"];
        }

        if (array_key_exists("DBKernelVersion",$param) and $param["DBKernelVersion"] !== null) {
            $this->DBKernelVersion = $param["DBKernelVersion"];
        }
    }
}
