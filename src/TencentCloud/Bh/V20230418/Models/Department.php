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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 部门信息
 *
 * @method string getId() 获取部门ID
 * @method void setId(string $Id) 设置部门ID
 * @method string getName() 获取部门名称，1 - 256个字符
 * @method void setName(string $Name) 设置部门名称，1 - 256个字符
 * @method array getManagers() 获取部门管理员账号ID
 * @method void setManagers(array $Managers) 设置部门管理员账号ID
 * @method array getManagerUsers() 获取管理员用户
 * @method void setManagerUsers(array $ManagerUsers) 设置管理员用户
 */
class Department extends AbstractModel
{
    /**
     * @var string 部门ID
     */
    public $Id;

    /**
     * @var string 部门名称，1 - 256个字符
     */
    public $Name;

    /**
     * @var array 部门管理员账号ID
     */
    public $Managers;

    /**
     * @var array 管理员用户
     */
    public $ManagerUsers;

    /**
     * @param string $Id 部门ID
     * @param string $Name 部门名称，1 - 256个字符
     * @param array $Managers 部门管理员账号ID
     * @param array $ManagerUsers 管理员用户
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Managers",$param) and $param["Managers"] !== null) {
            $this->Managers = $param["Managers"];
        }

        if (array_key_exists("ManagerUsers",$param) and $param["ManagerUsers"] !== null) {
            $this->ManagerUsers = [];
            foreach ($param["ManagerUsers"] as $key => $value){
                $obj = new DepartmentManagerUser();
                $obj->deserialize($value);
                array_push($this->ManagerUsers, $obj);
            }
        }
    }
}
