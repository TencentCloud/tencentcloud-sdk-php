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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAccountUser请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method string getUserName() 获取新账号名称。其格式要求如下：<ul><li>字符范围[1,32]。</li><li>可输入[A,Z]、[a,z]、[1,9]范围的字符以及下划线“_”与短划线“-”。</li></ul>
 * @method void setUserName(string $UserName) 设置新账号名称。其格式要求如下：<ul><li>字符范围[1,32]。</li><li>可输入[A,Z]、[a,z]、[1,9]范围的字符以及下划线“_”与短划线“-”。</li></ul>
 * @method string getPassword() 获取新账号密码。密码复杂度要求如下：<ul><li>字符长度范围[8,32]。</li><li>至少包含字母、数字和特殊字符（叹号“!”、at"@"、井号“#”、百分号“%”、插入符“^”、星号“*”、小括号“()”、下划线“_”）中的两种。</li></ul>
 * @method void setPassword(string $Password) 设置新账号密码。密码复杂度要求如下：<ul><li>字符长度范围[8,32]。</li><li>至少包含字母、数字和特殊字符（叹号“!”、at"@"、井号“#”、百分号“%”、插入符“^”、星号“*”、小括号“()”、下划线“_”）中的两种。</li></ul>
 * @method string getMongoUserPassword() 获取mongouser 账号对应的密码。mongouser 为系统默认账号，即为创建实例时，设置的密码。
 * @method void setMongoUserPassword(string $MongoUserPassword) 设置mongouser 账号对应的密码。mongouser 为系统默认账号，即为创建实例时，设置的密码。
 * @method string getUserDesc() 获取账号备注信息。
 * @method void setUserDesc(string $UserDesc) 设置账号备注信息。
 * @method array getAuthRole() 获取账号的读写权限信息。
 * @method void setAuthRole(array $AuthRole) 设置账号的读写权限信息。
 */
class CreateAccountUserRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 新账号名称。其格式要求如下：<ul><li>字符范围[1,32]。</li><li>可输入[A,Z]、[a,z]、[1,9]范围的字符以及下划线“_”与短划线“-”。</li></ul>
     */
    public $UserName;

    /**
     * @var string 新账号密码。密码复杂度要求如下：<ul><li>字符长度范围[8,32]。</li><li>至少包含字母、数字和特殊字符（叹号“!”、at"@"、井号“#”、百分号“%”、插入符“^”、星号“*”、小括号“()”、下划线“_”）中的两种。</li></ul>
     */
    public $Password;

    /**
     * @var string mongouser 账号对应的密码。mongouser 为系统默认账号，即为创建实例时，设置的密码。
     */
    public $MongoUserPassword;

    /**
     * @var string 账号备注信息。
     */
    public $UserDesc;

    /**
     * @var array 账号的读写权限信息。
     */
    public $AuthRole;

    /**
     * @param string $InstanceId 实例 ID。例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     * @param string $UserName 新账号名称。其格式要求如下：<ul><li>字符范围[1,32]。</li><li>可输入[A,Z]、[a,z]、[1,9]范围的字符以及下划线“_”与短划线“-”。</li></ul>
     * @param string $Password 新账号密码。密码复杂度要求如下：<ul><li>字符长度范围[8,32]。</li><li>至少包含字母、数字和特殊字符（叹号“!”、at"@"、井号“#”、百分号“%”、插入符“^”、星号“*”、小括号“()”、下划线“_”）中的两种。</li></ul>
     * @param string $MongoUserPassword mongouser 账号对应的密码。mongouser 为系统默认账号，即为创建实例时，设置的密码。
     * @param string $UserDesc 账号备注信息。
     * @param array $AuthRole 账号的读写权限信息。
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("MongoUserPassword",$param) and $param["MongoUserPassword"] !== null) {
            $this->MongoUserPassword = $param["MongoUserPassword"];
        }

        if (array_key_exists("UserDesc",$param) and $param["UserDesc"] !== null) {
            $this->UserDesc = $param["UserDesc"];
        }

        if (array_key_exists("AuthRole",$param) and $param["AuthRole"] !== null) {
            $this->AuthRole = [];
            foreach ($param["AuthRole"] as $key => $value){
                $obj = new Auth();
                $obj->deserialize($value);
                array_push($this->AuthRole, $obj);
            }
        }
    }
}
