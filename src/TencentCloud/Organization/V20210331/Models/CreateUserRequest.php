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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUser请求参数结构体
 *
 * @method string getZoneId() 获取空间 ID。
 * @method void setZoneId(string $ZoneId) 设置空间 ID。
 * @method string getUserName() 获取用户名称。空间内必须唯一。不支持修改。  格式：包含数字、英文字母和特殊符号+ = , . @ - _ 。  长度：最大 64 个字符
 * @method void setUserName(string $UserName) 设置用户名称。空间内必须唯一。不支持修改。  格式：包含数字、英文字母和特殊符号+ = , . @ - _ 。  长度：最大 64 个字符
 * @method string getFirstName() 获取用户的姓。  长度：最大 64 个字符。
 * @method void setFirstName(string $FirstName) 设置用户的姓。  长度：最大 64 个字符。
 * @method string getLastName() 获取用户的名。  长度：最大 64 个字符。
 * @method void setLastName(string $LastName) 设置用户的名。  长度：最大 64 个字符。
 * @method string getDisplayName() 获取用户的显示名称。  长度：最大 256 个字符。
 * @method void setDisplayName(string $DisplayName) 设置用户的显示名称。  长度：最大 256 个字符。
 * @method string getDescription() 获取用户的描述。  长度：最大 1024 个字符。
 * @method void setDescription(string $Description) 设置用户的描述。  长度：最大 1024 个字符。
 * @method string getEmail() 获取用户的电子邮箱。目录内必须唯一。  长度：最大 128 个字符。
 * @method void setEmail(string $Email) 设置用户的电子邮箱。目录内必须唯一。  长度：最大 128 个字符。
 * @method string getUserStatus() 获取用户的状态。取值：  Enabled（默认值）：启用。 Disabled：禁用。
 * @method void setUserStatus(string $UserStatus) 设置用户的状态。取值：  Enabled（默认值）：启用。 Disabled：禁用。
 * @method string getUserType() 获取用户类型  Manual：手动创建，Synchronized：外部导入
 * @method void setUserType(string $UserType) 设置用户类型  Manual：手动创建，Synchronized：外部导入
 */
class CreateUserRequest extends AbstractModel
{
    /**
     * @var string 空间 ID。
     */
    public $ZoneId;

    /**
     * @var string 用户名称。空间内必须唯一。不支持修改。  格式：包含数字、英文字母和特殊符号+ = , . @ - _ 。  长度：最大 64 个字符
     */
    public $UserName;

    /**
     * @var string 用户的姓。  长度：最大 64 个字符。
     */
    public $FirstName;

    /**
     * @var string 用户的名。  长度：最大 64 个字符。
     */
    public $LastName;

    /**
     * @var string 用户的显示名称。  长度：最大 256 个字符。
     */
    public $DisplayName;

    /**
     * @var string 用户的描述。  长度：最大 1024 个字符。
     */
    public $Description;

    /**
     * @var string 用户的电子邮箱。目录内必须唯一。  长度：最大 128 个字符。
     */
    public $Email;

    /**
     * @var string 用户的状态。取值：  Enabled（默认值）：启用。 Disabled：禁用。
     */
    public $UserStatus;

    /**
     * @var string 用户类型  Manual：手动创建，Synchronized：外部导入
     */
    public $UserType;

    /**
     * @param string $ZoneId 空间 ID。
     * @param string $UserName 用户名称。空间内必须唯一。不支持修改。  格式：包含数字、英文字母和特殊符号+ = , . @ - _ 。  长度：最大 64 个字符
     * @param string $FirstName 用户的姓。  长度：最大 64 个字符。
     * @param string $LastName 用户的名。  长度：最大 64 个字符。
     * @param string $DisplayName 用户的显示名称。  长度：最大 256 个字符。
     * @param string $Description 用户的描述。  长度：最大 1024 个字符。
     * @param string $Email 用户的电子邮箱。目录内必须唯一。  长度：最大 128 个字符。
     * @param string $UserStatus 用户的状态。取值：  Enabled（默认值）：启用。 Disabled：禁用。
     * @param string $UserType 用户类型  Manual：手动创建，Synchronized：外部导入
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("FirstName",$param) and $param["FirstName"] !== null) {
            $this->FirstName = $param["FirstName"];
        }

        if (array_key_exists("LastName",$param) and $param["LastName"] !== null) {
            $this->LastName = $param["LastName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("UserStatus",$param) and $param["UserStatus"] !== null) {
            $this->UserStatus = $param["UserStatus"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }
    }
}
