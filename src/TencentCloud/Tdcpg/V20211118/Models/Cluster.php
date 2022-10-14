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
 * 集群信息
 *
 * @method string getClusterId() 获取集群ID，集群的唯一标识
 * @method void setClusterId(string $ClusterId) 设置集群ID，集群的唯一标识
 * @method string getClusterName() 获取集群名字，不修改时默认和集群ID相同
 * @method void setClusterName(string $ClusterName) 设置集群名字，不修改时默认和集群ID相同
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getDBVersion() 获取TDSQL-C PostgreSQL 合入的社区版本号
 * @method void setDBVersion(string $DBVersion) 设置TDSQL-C PostgreSQL 合入的社区版本号
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method string getStatus() 获取集群状态。目前包括
 - creating ：创建中
 - running : 运行中
 - isolating : 隔离中
 - isolated : 已隔离
 - recovering : 恢复中
 - deleting : 删除中
 - deleted : 已删除
 * @method void setStatus(string $Status) 设置集群状态。目前包括
 - creating ：创建中
 - running : 运行中
 - isolating : 隔离中
 - isolated : 已隔离
 - recovering : 恢复中
 - deleting : 删除中
 - deleted : 已删除
 * @method string getStatusDesc() 获取集群状态中文含义
 * @method void setStatusDesc(string $StatusDesc) 设置集群状态中文含义
 * @method string getCreateTime() 获取集群创建时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
 * @method void setCreateTime(string $CreateTime) 设置集群创建时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
 * @method float getStorageUsed() 获取存储当前使用量，单位GiB
 * @method void setStorageUsed(float $StorageUsed) 设置存储当前使用量，单位GiB
 * @method integer getStorageLimit() 获取存储最大使用量，单位GiB
 * @method void setStorageLimit(integer $StorageLimit) 设置存储最大使用量，单位GiB
 * @method string getPayMode() 获取付费模式：
 - PREPAID : 预付费，即包年包月
 - POSTPAID_BY_HOUR : 按小时结算后付费
 * @method void setPayMode(string $PayMode) 设置付费模式：
 - PREPAID : 预付费，即包年包月
 - POSTPAID_BY_HOUR : 按小时结算后付费
 * @method string getPayPeriodEndTime() 获取预付费集群到期时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
 * @method void setPayPeriodEndTime(string $PayPeriodEndTime) 设置预付费集群到期时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
 * @method integer getAutoRenewFlag() 获取预付费集群自动续费标签
 - 0 : 到期不自动续费
 - 1 : 到期自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置预付费集群自动续费标签
 - 0 : 到期不自动续费
 - 1 : 到期自动续费
 * @method string getDBCharset() 获取数据库字符集
 * @method void setDBCharset(string $DBCharset) 设置数据库字符集
 * @method integer getInstanceCount() 获取集群内实例的数量
 * @method void setInstanceCount(integer $InstanceCount) 设置集群内实例的数量
 * @method array getEndpointSet() 获取集群内访问点信息
 * @method void setEndpointSet(array $EndpointSet) 设置集群内访问点信息
 * @method string getDBMajorVersion() 获取TDSQL-C PostgreSQL 合入的社区主要版本号
 * @method void setDBMajorVersion(string $DBMajorVersion) 设置TDSQL-C PostgreSQL 合入的社区主要版本号
 * @method string getDBKernelVersion() 获取TDSQL-C PostgreSQL 内核版本号
 * @method void setDBKernelVersion(string $DBKernelVersion) 设置TDSQL-C PostgreSQL 内核版本号
 * @method string getStoragePayMode() 获取存储付费模式
 - PREPAID：预付费，即包年包月
 - POSTPAID_BY_HOUR：按小时后付费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoragePayMode(string $StoragePayMode) 设置存储付费模式
 - PREPAID：预付费，即包年包月
 - POSTPAID_BY_HOUR：按小时后付费
注意：此字段可能返回 null，表示取不到有效值。
 */
class Cluster extends AbstractModel
{
    /**
     * @var string 集群ID，集群的唯一标识
     */
    public $ClusterId;

    /**
     * @var string 集群名字，不修改时默认和集群ID相同
     */
    public $ClusterName;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string TDSQL-C PostgreSQL 合入的社区版本号
     */
    public $DBVersion;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var string 集群状态。目前包括
 - creating ：创建中
 - running : 运行中
 - isolating : 隔离中
 - isolated : 已隔离
 - recovering : 恢复中
 - deleting : 删除中
 - deleted : 已删除
     */
    public $Status;

    /**
     * @var string 集群状态中文含义
     */
    public $StatusDesc;

    /**
     * @var string 集群创建时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
     */
    public $CreateTime;

    /**
     * @var float 存储当前使用量，单位GiB
     */
    public $StorageUsed;

    /**
     * @var integer 存储最大使用量，单位GiB
     */
    public $StorageLimit;

    /**
     * @var string 付费模式：
 - PREPAID : 预付费，即包年包月
 - POSTPAID_BY_HOUR : 按小时结算后付费
     */
    public $PayMode;

    /**
     * @var string 预付费集群到期时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
     */
    public $PayPeriodEndTime;

    /**
     * @var integer 预付费集群自动续费标签
 - 0 : 到期不自动续费
 - 1 : 到期自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var string 数据库字符集
     */
    public $DBCharset;

    /**
     * @var integer 集群内实例的数量
     */
    public $InstanceCount;

    /**
     * @var array 集群内访问点信息
     */
    public $EndpointSet;

    /**
     * @var string TDSQL-C PostgreSQL 合入的社区主要版本号
     */
    public $DBMajorVersion;

    /**
     * @var string TDSQL-C PostgreSQL 内核版本号
     */
    public $DBKernelVersion;

    /**
     * @var string 存储付费模式
 - PREPAID：预付费，即包年包月
 - POSTPAID_BY_HOUR：按小时后付费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoragePayMode;

    /**
     * @param string $ClusterId 集群ID，集群的唯一标识
     * @param string $ClusterName 集群名字，不修改时默认和集群ID相同
     * @param string $Region 地域
     * @param string $Zone 可用区
     * @param string $DBVersion TDSQL-C PostgreSQL 合入的社区版本号
     * @param integer $ProjectId 项目ID
     * @param string $Status 集群状态。目前包括
 - creating ：创建中
 - running : 运行中
 - isolating : 隔离中
 - isolated : 已隔离
 - recovering : 恢复中
 - deleting : 删除中
 - deleted : 已删除
     * @param string $StatusDesc 集群状态中文含义
     * @param string $CreateTime 集群创建时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
     * @param float $StorageUsed 存储当前使用量，单位GiB
     * @param integer $StorageLimit 存储最大使用量，单位GiB
     * @param string $PayMode 付费模式：
 - PREPAID : 预付费，即包年包月
 - POSTPAID_BY_HOUR : 按小时结算后付费
     * @param string $PayPeriodEndTime 预付费集群到期时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
     * @param integer $AutoRenewFlag 预付费集群自动续费标签
 - 0 : 到期不自动续费
 - 1 : 到期自动续费
     * @param string $DBCharset 数据库字符集
     * @param integer $InstanceCount 集群内实例的数量
     * @param array $EndpointSet 集群内访问点信息
     * @param string $DBMajorVersion TDSQL-C PostgreSQL 合入的社区主要版本号
     * @param string $DBKernelVersion TDSQL-C PostgreSQL 内核版本号
     * @param string $StoragePayMode 存储付费模式
 - PREPAID：预付费，即包年包月
 - POSTPAID_BY_HOUR：按小时后付费
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("StorageUsed",$param) and $param["StorageUsed"] !== null) {
            $this->StorageUsed = $param["StorageUsed"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayPeriodEndTime",$param) and $param["PayPeriodEndTime"] !== null) {
            $this->PayPeriodEndTime = $param["PayPeriodEndTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("DBCharset",$param) and $param["DBCharset"] !== null) {
            $this->DBCharset = $param["DBCharset"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("EndpointSet",$param) and $param["EndpointSet"] !== null) {
            $this->EndpointSet = [];
            foreach ($param["EndpointSet"] as $key => $value){
                $obj = new Endpoint();
                $obj->deserialize($value);
                array_push($this->EndpointSet, $obj);
            }
        }

        if (array_key_exists("DBMajorVersion",$param) and $param["DBMajorVersion"] !== null) {
            $this->DBMajorVersion = $param["DBMajorVersion"];
        }

        if (array_key_exists("DBKernelVersion",$param) and $param["DBKernelVersion"] !== null) {
            $this->DBKernelVersion = $param["DBKernelVersion"];
        }

        if (array_key_exists("StoragePayMode",$param) and $param["StoragePayMode"] !== null) {
            $this->StoragePayMode = $param["StoragePayMode"];
        }
    }
}
