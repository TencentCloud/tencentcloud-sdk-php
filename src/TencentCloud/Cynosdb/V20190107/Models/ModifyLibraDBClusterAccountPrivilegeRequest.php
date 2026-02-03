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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLibraDBClusterAccountPrivilege请求参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method InputAccount getAccount() 获取账号
 * @method void setAccount(InputAccount $Account) 设置账号
 * @method array getGlobalPrivileges() 获取全局权限
 * @method void setGlobalPrivileges(array $GlobalPrivileges) 设置全局权限
 * @method array getDatabasePrivileges() 获取数据库权限
 * @method void setDatabasePrivileges(array $DatabasePrivileges) 设置数据库权限
 * @method array getTablePrivileges() 获取表权限
 * @method void setTablePrivileges(array $TablePrivileges) 设置表权限
 */
class ModifyLibraDBClusterAccountPrivilegeRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var InputAccount 账号
     */
    public $Account;

    /**
     * @var array 全局权限
     */
    public $GlobalPrivileges;

    /**
     * @var array 数据库权限
     */
    public $DatabasePrivileges;

    /**
     * @var array 表权限
     */
    public $TablePrivileges;

    /**
     * @param string $ClusterId 集群id
     * @param InputAccount $Account 账号
     * @param array $GlobalPrivileges 全局权限
     * @param array $DatabasePrivileges 数据库权限
     * @param array $TablePrivileges 表权限
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

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = new InputAccount();
            $this->Account->deserialize($param["Account"]);
        }

        if (array_key_exists("GlobalPrivileges",$param) and $param["GlobalPrivileges"] !== null) {
            $this->GlobalPrivileges = $param["GlobalPrivileges"];
        }

        if (array_key_exists("DatabasePrivileges",$param) and $param["DatabasePrivileges"] !== null) {
            $this->DatabasePrivileges = [];
            foreach ($param["DatabasePrivileges"] as $key => $value){
                $obj = new DatabasePrivileges();
                $obj->deserialize($value);
                array_push($this->DatabasePrivileges, $obj);
            }
        }

        if (array_key_exists("TablePrivileges",$param) and $param["TablePrivileges"] !== null) {
            $this->TablePrivileges = [];
            foreach ($param["TablePrivileges"] as $key => $value){
                $obj = new TablePrivileges();
                $obj->deserialize($value);
                array_push($this->TablePrivileges, $obj);
            }
        }
    }
}
