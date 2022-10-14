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
 * CreateCluster请求参数结构体
 *
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getMasterUserPassword() 获取数据库用户密码，必须满足 8-64个字符，至少包含 大写字母、小写字母、数字和符号~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/中的任意三种
 * @method void setMasterUserPassword(string $MasterUserPassword) 设置数据库用户密码，必须满足 8-64个字符，至少包含 大写字母、小写字母、数字和符号~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/中的任意三种
 * @method integer getCPU() 获取CPU核数。取值参考文档【购买指南】
 * @method void setCPU(integer $CPU) 设置CPU核数。取值参考文档【购买指南】
 * @method integer getMemory() 获取内存大小，单位GiB。取值参考文档【购买指南】
 * @method void setMemory(integer $Memory) 设置内存大小，单位GiB。取值参考文档【购买指南】
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getSubnetId() 获取已配置的私有网络中的子网ID
 * @method void setSubnetId(string $SubnetId) 设置已配置的私有网络中的子网ID
 * @method string getPayMode() 获取实例付费模式
 - PREPAID：预付费，即包年包月
 - POSTPAID_BY_HOUR：按小时后付费
 * @method void setPayMode(string $PayMode) 设置实例付费模式
 - PREPAID：预付费，即包年包月
 - POSTPAID_BY_HOUR：按小时后付费
 * @method string getClusterName() 获取集群名，1-60个字符，可以包含中文、英文、数字和符号"-"、"_"、"."。不输入此参数时默认与ClusterId保持一致
 * @method void setClusterName(string $ClusterName) 设置集群名，1-60个字符，可以包含中文、英文、数字和符号"-"、"_"、"."。不输入此参数时默认与ClusterId保持一致
 * @method string getDBVersion() 获取TDSQL-C PostgreSQL 合入的社区版本号。
支持入参值为：10.17。当输入该参数时，会基于此版本号创建对应的最新DBKernelVersion数据库内核。
注：该参数与DBMajorVersion、DBKernelVersion只能传递一个，且需要传递一个。
 * @method void setDBVersion(string $DBVersion) 设置TDSQL-C PostgreSQL 合入的社区版本号。
支持入参值为：10.17。当输入该参数时，会基于此版本号创建对应的最新DBKernelVersion数据库内核。
注：该参数与DBMajorVersion、DBKernelVersion只能传递一个，且需要传递一个。
 * @method integer getProjectId() 获取项目Id，默认为0表示默认项目
 * @method void setProjectId(integer $ProjectId) 设置项目Id，默认为0表示默认项目
 * @method integer getPort() 获取连接数据库时，Endpoint使用的端口。取值范围为[1,65534]，默认值为5432
 * @method void setPort(integer $Port) 设置连接数据库时，Endpoint使用的端口。取值范围为[1,65534]，默认值为5432
 * @method integer getInstanceCount() 获取集群下实例数量。取值范围为[1,4]，默认值为1
 * @method void setInstanceCount(integer $InstanceCount) 设置集群下实例数量。取值范围为[1,4]，默认值为1
 * @method integer getPeriod() 获取购买时长，单位：月。取值范围为[1,60]，默认值为1。
只有当PayMode为PREPAID时生效。
 * @method void setPeriod(integer $Period) 设置购买时长，单位：月。取值范围为[1,60]，默认值为1。
只有当PayMode为PREPAID时生效。
 * @method integer getAutoRenewFlag() 获取是否自动续费，0-不 1-是。默认值为0，只有当PayMode为PREPAID时生效。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置是否自动续费，0-不 1-是。默认值为0，只有当PayMode为PREPAID时生效。
 * @method string getDBMajorVersion() 获取TDSQL-C PostgreSQL 合入的社区主要版本号。
支持入参值为：10。当输入该参数时，会基于此版本号创建对应的最新DBKernelVersion数据库内核。
注：该参数和DBVersion、DBKernelVersion只能传递一个，且需要传递一个。
 * @method void setDBMajorVersion(string $DBMajorVersion) 设置TDSQL-C PostgreSQL 合入的社区主要版本号。
支持入参值为：10。当输入该参数时，会基于此版本号创建对应的最新DBKernelVersion数据库内核。
注：该参数和DBVersion、DBKernelVersion只能传递一个，且需要传递一个。
 * @method string getDBKernelVersion() 获取TDSQL-C PostgreSQL 内核版本号。
支持入参值为：v10.17_r1.4。当输入该参数时，会创建此版本号对应的数据库内核。
注：该参数和DBVersion、DBMajorVersion只能传递一个，且需要传递一个。
 * @method void setDBKernelVersion(string $DBKernelVersion) 设置TDSQL-C PostgreSQL 内核版本号。
支持入参值为：v10.17_r1.4。当输入该参数时，会创建此版本号对应的数据库内核。
注：该参数和DBVersion、DBMajorVersion只能传递一个，且需要传递一个。
 * @method string getStoragePayMode() 获取存储付费模式
 - PREPAID：预付费，即包年包月
 - POSTPAID_BY_HOUR：按小时后付费
默认为POSTPAID_BY_HOUR，实例付费模式为按小时付费时，存储付费模式不支持包年包月
 * @method void setStoragePayMode(string $StoragePayMode) 设置存储付费模式
 - PREPAID：预付费，即包年包月
 - POSTPAID_BY_HOUR：按小时后付费
默认为POSTPAID_BY_HOUR，实例付费模式为按小时付费时，存储付费模式不支持包年包月
 * @method integer getStorage() 获取存储最大使用量，单位GB。取值参考文档【购买指南】。存储使用预付费模式时必须设置，存储使用按小时后付费时不可设置
 * @method void setStorage(integer $Storage) 设置存储最大使用量，单位GB。取值参考文档【购买指南】。存储使用预付费模式时必须设置，存储使用按小时后付费时不可设置
 */
class CreateClusterRequest extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 数据库用户密码，必须满足 8-64个字符，至少包含 大写字母、小写字母、数字和符号~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/中的任意三种
     */
    public $MasterUserPassword;

    /**
     * @var integer CPU核数。取值参考文档【购买指南】
     */
    public $CPU;

    /**
     * @var integer 内存大小，单位GiB。取值参考文档【购买指南】
     */
    public $Memory;

    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 已配置的私有网络中的子网ID
     */
    public $SubnetId;

    /**
     * @var string 实例付费模式
 - PREPAID：预付费，即包年包月
 - POSTPAID_BY_HOUR：按小时后付费
     */
    public $PayMode;

    /**
     * @var string 集群名，1-60个字符，可以包含中文、英文、数字和符号"-"、"_"、"."。不输入此参数时默认与ClusterId保持一致
     */
    public $ClusterName;

    /**
     * @var string TDSQL-C PostgreSQL 合入的社区版本号。
支持入参值为：10.17。当输入该参数时，会基于此版本号创建对应的最新DBKernelVersion数据库内核。
注：该参数与DBMajorVersion、DBKernelVersion只能传递一个，且需要传递一个。
     */
    public $DBVersion;

    /**
     * @var integer 项目Id，默认为0表示默认项目
     */
    public $ProjectId;

    /**
     * @var integer 连接数据库时，Endpoint使用的端口。取值范围为[1,65534]，默认值为5432
     */
    public $Port;

    /**
     * @var integer 集群下实例数量。取值范围为[1,4]，默认值为1
     */
    public $InstanceCount;

    /**
     * @var integer 购买时长，单位：月。取值范围为[1,60]，默认值为1。
只有当PayMode为PREPAID时生效。
     */
    public $Period;

    /**
     * @var integer 是否自动续费，0-不 1-是。默认值为0，只有当PayMode为PREPAID时生效。
     */
    public $AutoRenewFlag;

    /**
     * @var string TDSQL-C PostgreSQL 合入的社区主要版本号。
支持入参值为：10。当输入该参数时，会基于此版本号创建对应的最新DBKernelVersion数据库内核。
注：该参数和DBVersion、DBKernelVersion只能传递一个，且需要传递一个。
     */
    public $DBMajorVersion;

    /**
     * @var string TDSQL-C PostgreSQL 内核版本号。
支持入参值为：v10.17_r1.4。当输入该参数时，会创建此版本号对应的数据库内核。
注：该参数和DBVersion、DBMajorVersion只能传递一个，且需要传递一个。
     */
    public $DBKernelVersion;

    /**
     * @var string 存储付费模式
 - PREPAID：预付费，即包年包月
 - POSTPAID_BY_HOUR：按小时后付费
默认为POSTPAID_BY_HOUR，实例付费模式为按小时付费时，存储付费模式不支持包年包月
     */
    public $StoragePayMode;

    /**
     * @var integer 存储最大使用量，单位GB。取值参考文档【购买指南】。存储使用预付费模式时必须设置，存储使用按小时后付费时不可设置
     */
    public $Storage;

    /**
     * @param string $Zone 可用区
     * @param string $MasterUserPassword 数据库用户密码，必须满足 8-64个字符，至少包含 大写字母、小写字母、数字和符号~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/中的任意三种
     * @param integer $CPU CPU核数。取值参考文档【购买指南】
     * @param integer $Memory 内存大小，单位GiB。取值参考文档【购买指南】
     * @param string $VpcId 私有网络ID
     * @param string $SubnetId 已配置的私有网络中的子网ID
     * @param string $PayMode 实例付费模式
 - PREPAID：预付费，即包年包月
 - POSTPAID_BY_HOUR：按小时后付费
     * @param string $ClusterName 集群名，1-60个字符，可以包含中文、英文、数字和符号"-"、"_"、"."。不输入此参数时默认与ClusterId保持一致
     * @param string $DBVersion TDSQL-C PostgreSQL 合入的社区版本号。
支持入参值为：10.17。当输入该参数时，会基于此版本号创建对应的最新DBKernelVersion数据库内核。
注：该参数与DBMajorVersion、DBKernelVersion只能传递一个，且需要传递一个。
     * @param integer $ProjectId 项目Id，默认为0表示默认项目
     * @param integer $Port 连接数据库时，Endpoint使用的端口。取值范围为[1,65534]，默认值为5432
     * @param integer $InstanceCount 集群下实例数量。取值范围为[1,4]，默认值为1
     * @param integer $Period 购买时长，单位：月。取值范围为[1,60]，默认值为1。
只有当PayMode为PREPAID时生效。
     * @param integer $AutoRenewFlag 是否自动续费，0-不 1-是。默认值为0，只有当PayMode为PREPAID时生效。
     * @param string $DBMajorVersion TDSQL-C PostgreSQL 合入的社区主要版本号。
支持入参值为：10。当输入该参数时，会基于此版本号创建对应的最新DBKernelVersion数据库内核。
注：该参数和DBVersion、DBKernelVersion只能传递一个，且需要传递一个。
     * @param string $DBKernelVersion TDSQL-C PostgreSQL 内核版本号。
支持入参值为：v10.17_r1.4。当输入该参数时，会创建此版本号对应的数据库内核。
注：该参数和DBVersion、DBMajorVersion只能传递一个，且需要传递一个。
     * @param string $StoragePayMode 存储付费模式
 - PREPAID：预付费，即包年包月
 - POSTPAID_BY_HOUR：按小时后付费
默认为POSTPAID_BY_HOUR，实例付费模式为按小时付费时，存储付费模式不支持包年包月
     * @param integer $Storage 存储最大使用量，单位GB。取值参考文档【购买指南】。存储使用预付费模式时必须设置，存储使用按小时后付费时不可设置
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

        if (array_key_exists("MasterUserPassword",$param) and $param["MasterUserPassword"] !== null) {
            $this->MasterUserPassword = $param["MasterUserPassword"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
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

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }
    }
}
