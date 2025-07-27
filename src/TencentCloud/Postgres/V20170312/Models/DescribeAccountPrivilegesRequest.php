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
 * DescribeAccountPrivileges请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。	可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。	可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method string getUserName() 获取查询此账号对某数据库对象所拥有的权限信息。账号名可通过[DescribeAccounts](https://cloud.tencent.com/document/api/409/18109)接口获取
 * @method void setUserName(string $UserName) 设置查询此账号对某数据库对象所拥有的权限信息。账号名可通过[DescribeAccounts](https://cloud.tencent.com/document/api/409/18109)接口获取
 * @method array getDatabaseObjectSet() 获取要查询的数据库对象信息
 * @method void setDatabaseObjectSet(array $DatabaseObjectSet) 设置要查询的数据库对象信息
 */
class DescribeAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string 实例ID。	可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     */
    public $DBInstanceId;

    /**
     * @var string 查询此账号对某数据库对象所拥有的权限信息。账号名可通过[DescribeAccounts](https://cloud.tencent.com/document/api/409/18109)接口获取
     */
    public $UserName;

    /**
     * @var array 要查询的数据库对象信息
     */
    public $DatabaseObjectSet;

    /**
     * @param string $DBInstanceId 实例ID。	可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     * @param string $UserName 查询此账号对某数据库对象所拥有的权限信息。账号名可通过[DescribeAccounts](https://cloud.tencent.com/document/api/409/18109)接口获取
     * @param array $DatabaseObjectSet 要查询的数据库对象信息
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("DatabaseObjectSet",$param) and $param["DatabaseObjectSet"] !== null) {
            $this->DatabaseObjectSet = [];
            foreach ($param["DatabaseObjectSet"] as $key => $value){
                $obj = new DatabaseObject();
                $obj->deserialize($value);
                array_push($this->DatabaseObjectSet, $obj);
            }
        }
    }
}
