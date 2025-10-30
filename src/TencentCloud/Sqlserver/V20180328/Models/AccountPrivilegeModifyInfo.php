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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库账号权限变更信息
 *
 * @method string getUserName() 获取数据库用户名
 * @method void setUserName(string $UserName) 设置数据库用户名
 * @method array getDBPrivileges() 获取账号权限变更信息。参数DBPrivileges和AccAllDB只能二选一
 * @method void setDBPrivileges(array $DBPrivileges) 设置账号权限变更信息。参数DBPrivileges和AccAllDB只能二选一
 * @method boolean getIsAdmin() 获取表示是否为管理员账户，当值为true，表示是 管理员。若实例 是 单节点，则管理员所在的 账号类型为超级权限账号 ，即AccountType=L0；若实例 是 双节点，则管理员所在的 账号类型为高级权限账号，即AccountType=L1；当值为false，表示 不是管理员，则账号类型为普通账号，即AccountType=L3
 * @method void setIsAdmin(boolean $IsAdmin) 设置表示是否为管理员账户，当值为true，表示是 管理员。若实例 是 单节点，则管理员所在的 账号类型为超级权限账号 ，即AccountType=L0；若实例 是 双节点，则管理员所在的 账号类型为高级权限账号，即AccountType=L1；当值为false，表示 不是管理员，则账号类型为普通账号，即AccountType=L3
 * @method string getAccountType() 获取账号类型，IsAdmin字段的扩展字段。 L0-超级权限(基础版独有),L1-高级权限,L2-特殊权限,L3-普通权限，默认L3
 * @method void setAccountType(string $AccountType) 设置账号类型，IsAdmin字段的扩展字段。 L0-超级权限(基础版独有),L1-高级权限,L2-特殊权限,L3-普通权限，默认L3
 * @method SelectAllDB getAccAllDB() 获取全量修改指定账号下的所有DB权限，只支持特殊权限账号和普通权限账号。参数DBPrivileges和AccAllDB只能二选一
 * @method void setAccAllDB(SelectAllDB $AccAllDB) 设置全量修改指定账号下的所有DB权限，只支持特殊权限账号和普通权限账号。参数DBPrivileges和AccAllDB只能二选一
 */
class AccountPrivilegeModifyInfo extends AbstractModel
{
    /**
     * @var string 数据库用户名
     */
    public $UserName;

    /**
     * @var array 账号权限变更信息。参数DBPrivileges和AccAllDB只能二选一
     */
    public $DBPrivileges;

    /**
     * @var boolean 表示是否为管理员账户，当值为true，表示是 管理员。若实例 是 单节点，则管理员所在的 账号类型为超级权限账号 ，即AccountType=L0；若实例 是 双节点，则管理员所在的 账号类型为高级权限账号，即AccountType=L1；当值为false，表示 不是管理员，则账号类型为普通账号，即AccountType=L3
     */
    public $IsAdmin;

    /**
     * @var string 账号类型，IsAdmin字段的扩展字段。 L0-超级权限(基础版独有),L1-高级权限,L2-特殊权限,L3-普通权限，默认L3
     */
    public $AccountType;

    /**
     * @var SelectAllDB 全量修改指定账号下的所有DB权限，只支持特殊权限账号和普通权限账号。参数DBPrivileges和AccAllDB只能二选一
     */
    public $AccAllDB;

    /**
     * @param string $UserName 数据库用户名
     * @param array $DBPrivileges 账号权限变更信息。参数DBPrivileges和AccAllDB只能二选一
     * @param boolean $IsAdmin 表示是否为管理员账户，当值为true，表示是 管理员。若实例 是 单节点，则管理员所在的 账号类型为超级权限账号 ，即AccountType=L0；若实例 是 双节点，则管理员所在的 账号类型为高级权限账号，即AccountType=L1；当值为false，表示 不是管理员，则账号类型为普通账号，即AccountType=L3
     * @param string $AccountType 账号类型，IsAdmin字段的扩展字段。 L0-超级权限(基础版独有),L1-高级权限,L2-特殊权限,L3-普通权限，默认L3
     * @param SelectAllDB $AccAllDB 全量修改指定账号下的所有DB权限，只支持特殊权限账号和普通权限账号。参数DBPrivileges和AccAllDB只能二选一
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

        if (array_key_exists("AccAllDB",$param) and $param["AccAllDB"] !== null) {
            $this->AccAllDB = new SelectAllDB();
            $this->AccAllDB->deserialize($param["AccAllDB"]);
        }
    }
}
