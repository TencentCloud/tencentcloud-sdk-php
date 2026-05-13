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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库账号权限信息
 *
 * @method integer getUseDefaultPrivilege() 获取使用默认权限。0-未使用；1-只读权限，即SELECT权限；2-全部权限，即global级别全部权限。
 * @method void setUseDefaultPrivilege(integer $UseDefaultPrivilege) 设置使用默认权限。0-未使用；1-只读权限，即SELECT权限；2-全部权限，即global级别全部权限。
 * @method array getGlobalPrivileges() 获取全局权限数组。
 * @method void setGlobalPrivileges(array $GlobalPrivileges) 设置全局权限数组。
 * @method array getDatabasePrivilegesList() 获取数据库权限数组。
 * @method void setDatabasePrivilegesList(array $DatabasePrivilegesList) 设置数据库权限数组。
 * @method array getTablePrivileges() 获取数据库中的表权限数组。
 * @method void setTablePrivileges(array $TablePrivileges) 设置数据库中的表权限数组。
 * @method array getColumnPrivileges() 获取数据库表中的列权限数组。
 * @method void setColumnPrivileges(array $ColumnPrivileges) 设置数据库表中的列权限数组。
 */
class DspmDbAccountPrivilege extends AbstractModel
{
    /**
     * @var integer 使用默认权限。0-未使用；1-只读权限，即SELECT权限；2-全部权限，即global级别全部权限。
     */
    public $UseDefaultPrivilege;

    /**
     * @var array 全局权限数组。
     */
    public $GlobalPrivileges;

    /**
     * @var array 数据库权限数组。
     */
    public $DatabasePrivilegesList;

    /**
     * @var array 数据库中的表权限数组。
     */
    public $TablePrivileges;

    /**
     * @var array 数据库表中的列权限数组。
     */
    public $ColumnPrivileges;

    /**
     * @param integer $UseDefaultPrivilege 使用默认权限。0-未使用；1-只读权限，即SELECT权限；2-全部权限，即global级别全部权限。
     * @param array $GlobalPrivileges 全局权限数组。
     * @param array $DatabasePrivilegesList 数据库权限数组。
     * @param array $TablePrivileges 数据库中的表权限数组。
     * @param array $ColumnPrivileges 数据库表中的列权限数组。
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
        if (array_key_exists("UseDefaultPrivilege",$param) and $param["UseDefaultPrivilege"] !== null) {
            $this->UseDefaultPrivilege = $param["UseDefaultPrivilege"];
        }

        if (array_key_exists("GlobalPrivileges",$param) and $param["GlobalPrivileges"] !== null) {
            $this->GlobalPrivileges = $param["GlobalPrivileges"];
        }

        if (array_key_exists("DatabasePrivilegesList",$param) and $param["DatabasePrivilegesList"] !== null) {
            $this->DatabasePrivilegesList = [];
            foreach ($param["DatabasePrivilegesList"] as $key => $value){
                $obj = new DspmDatabasePrivilege();
                $obj->deserialize($value);
                array_push($this->DatabasePrivilegesList, $obj);
            }
        }

        if (array_key_exists("TablePrivileges",$param) and $param["TablePrivileges"] !== null) {
            $this->TablePrivileges = [];
            foreach ($param["TablePrivileges"] as $key => $value){
                $obj = new DspmTablePrivilege();
                $obj->deserialize($value);
                array_push($this->TablePrivileges, $obj);
            }
        }

        if (array_key_exists("ColumnPrivileges",$param) and $param["ColumnPrivileges"] !== null) {
            $this->ColumnPrivileges = [];
            foreach ($param["ColumnPrivileges"] as $key => $value){
                $obj = new DspmColumnPrivilege();
                $obj->deserialize($value);
                array_push($this->ColumnPrivileges, $obj);
            }
        }
    }
}
