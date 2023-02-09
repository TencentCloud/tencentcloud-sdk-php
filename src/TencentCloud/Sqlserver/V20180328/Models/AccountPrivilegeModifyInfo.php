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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库账号权限变更信息
 *
 * @method string getUserName() 获取数据库用户名
 * @method void setUserName(string $UserName) 设置数据库用户名
 * @method array getDBPrivileges() 获取账号权限变更信息
 * @method void setDBPrivileges(array $DBPrivileges) 设置账号权限变更信息
 * @method boolean getIsAdmin() 获取是否为管理员账户,当值为true 等价于基础版AccountType=L0，高可用AccountType=L1，当值为false时，表示删除管理员权限，默认false
 * @method void setIsAdmin(boolean $IsAdmin) 设置是否为管理员账户,当值为true 等价于基础版AccountType=L0，高可用AccountType=L1，当值为false时，表示删除管理员权限，默认false
 * @method string getAccountType() 获取账号类型，IsAdmin字段的扩展字段。 L0-超级权限(基础版独有),L1-高级权限,L2-特殊权限,L3-普通权限，默认L3
 * @method void setAccountType(string $AccountType) 设置账号类型，IsAdmin字段的扩展字段。 L0-超级权限(基础版独有),L1-高级权限,L2-特殊权限,L3-普通权限，默认L3
 */
class AccountPrivilegeModifyInfo extends AbstractModel
{
    /**
     * @var string 数据库用户名
     */
    public $UserName;

    /**
     * @var array 账号权限变更信息
     */
    public $DBPrivileges;

    /**
     * @var boolean 是否为管理员账户,当值为true 等价于基础版AccountType=L0，高可用AccountType=L1，当值为false时，表示删除管理员权限，默认false
     */
    public $IsAdmin;

    /**
     * @var string 账号类型，IsAdmin字段的扩展字段。 L0-超级权限(基础版独有),L1-高级权限,L2-特殊权限,L3-普通权限，默认L3
     */
    public $AccountType;

    /**
     * @param string $UserName 数据库用户名
     * @param array $DBPrivileges 账号权限变更信息
     * @param boolean $IsAdmin 是否为管理员账户,当值为true 等价于基础版AccountType=L0，高可用AccountType=L1，当值为false时，表示删除管理员权限，默认false
     * @param string $AccountType 账号类型，IsAdmin字段的扩展字段。 L0-超级权限(基础版独有),L1-高级权限,L2-特殊权限,L3-普通权限，默认L3
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("DBPrivileges",$param) and $param["DBPrivileges"] !== null) {
            $this->DBPrivileges = [];
            foreach ($param["DBPrivileges"] as $key => $value){
                $obj = new DBPrivilegeModifyInfo();
                $obj->deserialize($value);
                array_push($this->DBPrivileges, $obj);
            }
        }

        if (array_key_exists("IsAdmin",$param) and $param["IsAdmin"] !== null) {
            $this->IsAdmin = $param["IsAdmin"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }
    }
}
