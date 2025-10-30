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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserNewPrivilege请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getCluster() 获取cluster名称
 * @method void setCluster(string $Cluster) 设置cluster名称
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method boolean getAllDatabase() 获取是否所有数据库表
 * @method void setAllDatabase(boolean $AllDatabase) 设置是否所有数据库表
 * @method array getGlobalPrivileges() 获取全局权限
 * @method void setGlobalPrivileges(array $GlobalPrivileges) 设置全局权限
 * @method array getDatabasePrivilegeList() 获取数据库表权限
 * @method void setDatabasePrivilegeList(array $DatabasePrivilegeList) 设置数据库表权限
 */
class ModifyUserNewPrivilegeRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string cluster名称
     */
    public $Cluster;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var boolean 是否所有数据库表
     */
    public $AllDatabase;

    /**
     * @var array 全局权限
     */
    public $GlobalPrivileges;

    /**
     * @var array 数据库表权限
     */
    public $DatabasePrivilegeList;

    /**
     * @param string $InstanceId 实例id
     * @param string $Cluster cluster名称
     * @param string $UserName 用户名
     * @param boolean $AllDatabase 是否所有数据库表
     * @param array $GlobalPrivileges 全局权限
     * @param array $DatabasePrivilegeList 数据库表权限
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

        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("AllDatabase",$param) and $param["AllDatabase"] !== null) {
            $this->AllDatabase = $param["AllDatabase"];
        }

        if (array_key_exists("GlobalPrivileges",$param) and $param["GlobalPrivileges"] !== null) {
            $this->GlobalPrivileges = $param["GlobalPrivileges"];
        }

        if (array_key_exists("DatabasePrivilegeList",$param) and $param["DatabasePrivilegeList"] !== null) {
            $this->DatabasePrivilegeList = [];
            foreach ($param["DatabasePrivilegeList"] as $key => $value){
                $obj = new DatabasePrivilegeInfo();
                $obj->deserialize($value);
                array_push($this->DatabasePrivilegeList, $obj);
            }
        }
    }
}
