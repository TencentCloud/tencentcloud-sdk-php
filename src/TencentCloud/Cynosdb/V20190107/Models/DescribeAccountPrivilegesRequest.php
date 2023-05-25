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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccountPrivileges请求参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getAccountName() 获取账户名
 * @method void setAccountName(string $AccountName) 设置账户名
 * @method string getHost() 获取主机
 * @method void setHost(string $Host) 设置主机
 * @method string getDb() 获取数据库名，为*时，忽略Type/TableName, 表示修改用户全局权限；
 * @method void setDb(string $Db) 设置数据库名，为*时，忽略Type/TableName, 表示修改用户全局权限；
 * @method string getType() 获取指定数据库下的对象类型，可选"table"，"*"
 * @method void setType(string $Type) 设置指定数据库下的对象类型，可选"table"，"*"
 * @method string getTableName() 获取当Type="table"时，用来指定表名
 * @method void setTableName(string $TableName) 设置当Type="table"时，用来指定表名
 */
class DescribeAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 账户名
     */
    public $AccountName;

    /**
     * @var string 主机
     */
    public $Host;

    /**
     * @var string 数据库名，为*时，忽略Type/TableName, 表示修改用户全局权限；
     */
    public $Db;

    /**
     * @var string 指定数据库下的对象类型，可选"table"，"*"
     */
    public $Type;

    /**
     * @var string 当Type="table"时，用来指定表名
     */
    public $TableName;

    /**
     * @param string $ClusterId 集群id
     * @param string $AccountName 账户名
     * @param string $Host 主机
     * @param string $Db 数据库名，为*时，忽略Type/TableName, 表示修改用户全局权限；
     * @param string $Type 指定数据库下的对象类型，可选"table"，"*"
     * @param string $TableName 当Type="table"时，用来指定表名
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

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }
    }
}
