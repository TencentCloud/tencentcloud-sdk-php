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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSqlApis请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getApiType() 获取GetUsers：获取用户列表；
GetDatabases：获取数据库列表；
GetTables：获取数据库表列表；
GetUserPrivilegesV2：获取用户下的权限，粒度到表级别；
DeleteUser：删除用户；
GetCatalog：获取Catalog列表；
 * @method void setApiType(string $ApiType) 设置GetUsers：获取用户列表；
GetDatabases：获取数据库列表；
GetTables：获取数据库表列表；
GetUserPrivilegesV2：获取用户下的权限，粒度到表级别；
DeleteUser：删除用户；
GetCatalog：获取Catalog列表；
 * @method string getUserName() 获取用户名称
 * @method void setUserName(string $UserName) 设置用户名称
 * @method string getWhiteHost() 获取用户链接来自的 IP
 * @method void setWhiteHost(string $WhiteHost) 设置用户链接来自的 IP
 * @method string getCatalog() 获取catalog名称
 * @method void setCatalog(string $Catalog) 设置catalog名称
 * @method array getCatalogs() 获取catalog集合
 * @method void setCatalogs(array $Catalogs) 设置catalog集合
 * @method string getDatabaseName() 获取数据库名
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名
 * @method string getTableName() 获取表名
 * @method void setTableName(string $TableName) 设置表名
 */
class DescribeSqlApisRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string GetUsers：获取用户列表；
GetDatabases：获取数据库列表；
GetTables：获取数据库表列表；
GetUserPrivilegesV2：获取用户下的权限，粒度到表级别；
DeleteUser：删除用户；
GetCatalog：获取Catalog列表；
     */
    public $ApiType;

    /**
     * @var string 用户名称
     */
    public $UserName;

    /**
     * @var string 用户链接来自的 IP
     */
    public $WhiteHost;

    /**
     * @var string catalog名称
     */
    public $Catalog;

    /**
     * @var array catalog集合
     */
    public $Catalogs;

    /**
     * @var string 数据库名
     */
    public $DatabaseName;

    /**
     * @var string 表名
     */
    public $TableName;

    /**
     * @param string $InstanceId 实例id
     * @param string $ApiType GetUsers：获取用户列表；
GetDatabases：获取数据库列表；
GetTables：获取数据库表列表；
GetUserPrivilegesV2：获取用户下的权限，粒度到表级别；
DeleteUser：删除用户；
GetCatalog：获取Catalog列表；
     * @param string $UserName 用户名称
     * @param string $WhiteHost 用户链接来自的 IP
     * @param string $Catalog catalog名称
     * @param array $Catalogs catalog集合
     * @param string $DatabaseName 数据库名
     * @param string $TableName 表名
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

        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("WhiteHost",$param) and $param["WhiteHost"] !== null) {
            $this->WhiteHost = $param["WhiteHost"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Catalogs",$param) and $param["Catalogs"] !== null) {
            $this->Catalogs = $param["Catalogs"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }
    }
}
