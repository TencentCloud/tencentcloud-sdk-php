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
 * CreateAccount请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。
 * @method string getUserName() 获取创建的账号名称。
 * @method void setUserName(string $UserName) 设置创建的账号名称。
 * @method string getPassword() 获取账号对应的密码。
 * @method void setPassword(string $Password) 设置账号对应的密码。
 * @method string getType() 获取账号类型。当前支持normal、tencentDBSuper两个输入。normal指代普通用户，tencentDBSuper为拥有pg_tencentdb_superuser角色的账号。
 * @method void setType(string $Type) 设置账号类型。当前支持normal、tencentDBSuper两个输入。normal指代普通用户，tencentDBSuper为拥有pg_tencentdb_superuser角色的账号。
 * @method string getRemark() 获取账号备注。
 * @method void setRemark(string $Remark) 设置账号备注。
 */
class CreateAccountRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $DBInstanceId;

    /**
     * @var string 创建的账号名称。
     */
    public $UserName;

    /**
     * @var string 账号对应的密码。
     */
    public $Password;

    /**
     * @var string 账号类型。当前支持normal、tencentDBSuper两个输入。normal指代普通用户，tencentDBSuper为拥有pg_tencentdb_superuser角色的账号。
     */
    public $Type;

    /**
     * @var string 账号备注。
     */
    public $Remark;

    /**
     * @param string $DBInstanceId 实例ID。
     * @param string $UserName 创建的账号名称。
     * @param string $Password 账号对应的密码。
     * @param string $Type 账号类型。当前支持normal、tencentDBSuper两个输入。normal指代普通用户，tencentDBSuper为拥有pg_tencentdb_superuser角色的账号。
     * @param string $Remark 账号备注。
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

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
