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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 展示机构下用户的属性搜索条件。
 *
 * @method string getUserName() 获取用户名，长度限制：64个字符。
 * @method void setUserName(string $UserName) 设置用户名，长度限制：64个字符。
 * @method string getPhone() 获取用户手机号。
 * @method void setPhone(string $Phone) 设置用户手机号。
 * @method string getEmail() 获取用户邮箱。
 * @method void setEmail(string $Email) 设置用户邮箱。
 * @method string getStatus() 获取用户状态，取值 NORMAL （正常）、FREEZE （已冻结）、LOCKED （已锁定）或 NOT_ENABLED （未启用）。
 * @method void setStatus(string $Status) 设置用户状态，取值 NORMAL （正常）、FREEZE （已冻结）、LOCKED （已锁定）或 NOT_ENABLED （未启用）。
 * @method string getCreationTime() 获取用户创建时间，遵循 ISO 8601 标准。
 * @method void setCreationTime(string $CreationTime) 设置用户创建时间，遵循 ISO 8601 标准。
 * @method string getLastUpdateTime() 获取用户上次更新时间。
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置用户上次更新时间。
 * @method string getKeyword() 获取名称匹配搜索，匹配范围包括：用户名称、用户手机号。
 * @method void setKeyword(string $Keyword) 设置名称匹配搜索，匹配范围包括：用户名称、用户手机号。
 */
class ListUsersInOrgNodeSearchCriteria extends AbstractModel
{
    /**
     * @var string 用户名，长度限制：64个字符。
     */
    public $UserName;

    /**
     * @var string 用户手机号。
     */
    public $Phone;

    /**
     * @var string 用户邮箱。
     */
    public $Email;

    /**
     * @var string 用户状态，取值 NORMAL （正常）、FREEZE （已冻结）、LOCKED （已锁定）或 NOT_ENABLED （未启用）。
     */
    public $Status;

    /**
     * @var string 用户创建时间，遵循 ISO 8601 标准。
     */
    public $CreationTime;

    /**
     * @var string 用户上次更新时间。
     */
    public $LastUpdateTime;

    /**
     * @var string 名称匹配搜索，匹配范围包括：用户名称、用户手机号。
     */
    public $Keyword;

    /**
     * @param string $UserName 用户名，长度限制：64个字符。
     * @param string $Phone 用户手机号。
     * @param string $Email 用户邮箱。
     * @param string $Status 用户状态，取值 NORMAL （正常）、FREEZE （已冻结）、LOCKED （已锁定）或 NOT_ENABLED （未启用）。
     * @param string $CreationTime 用户创建时间，遵循 ISO 8601 标准。
     * @param string $LastUpdateTime 用户上次更新时间。
     * @param string $Keyword 名称匹配搜索，匹配范围包括：用户名称、用户手机号。
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

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
