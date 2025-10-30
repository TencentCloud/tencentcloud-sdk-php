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
 * UpdateUser请求参数结构体
 *
 * @method string getZoneId() 获取空间 ID。
 * @method void setZoneId(string $ZoneId) 设置空间 ID。
 * @method string getUserId() 获取用户 ID。
 * @method void setUserId(string $UserId) 设置用户 ID。
 * @method string getNewFirstName() 获取用户的名。
 * @method void setNewFirstName(string $NewFirstName) 设置用户的名。
 * @method string getNewLastName() 获取用户的姓。
 * @method void setNewLastName(string $NewLastName) 设置用户的姓。
 * @method string getNewDisplayName() 获取用户的显示名称。
 * @method void setNewDisplayName(string $NewDisplayName) 设置用户的显示名称。
 * @method string getNewDescription() 获取用户的描述。
 * @method void setNewDescription(string $NewDescription) 设置用户的描述。
 * @method string getNewEmail() 获取用户的电子邮箱。
 * @method void setNewEmail(string $NewEmail) 设置用户的电子邮箱。
 */
class UpdateUserRequest extends AbstractModel
{
    /**
     * @var string 空间 ID。
     */
    public $ZoneId;

    /**
     * @var string 用户 ID。
     */
    public $UserId;

    /**
     * @var string 用户的名。
     */
    public $NewFirstName;

    /**
     * @var string 用户的姓。
     */
    public $NewLastName;

    /**
     * @var string 用户的显示名称。
     */
    public $NewDisplayName;

    /**
     * @var string 用户的描述。
     */
    public $NewDescription;

    /**
     * @var string 用户的电子邮箱。
     */
    public $NewEmail;

    /**
     * @param string $ZoneId 空间 ID。
     * @param string $UserId 用户 ID。
     * @param string $NewFirstName 用户的名。
     * @param string $NewLastName 用户的姓。
     * @param string $NewDisplayName 用户的显示名称。
     * @param string $NewDescription 用户的描述。
     * @param string $NewEmail 用户的电子邮箱。
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

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("NewFirstName",$param) and $param["NewFirstName"] !== null) {
            $this->NewFirstName = $param["NewFirstName"];
        }

        if (array_key_exists("NewLastName",$param) and $param["NewLastName"] !== null) {
            $this->NewLastName = $param["NewLastName"];
        }

        if (array_key_exists("NewDisplayName",$param) and $param["NewDisplayName"] !== null) {
            $this->NewDisplayName = $param["NewDisplayName"];
        }

        if (array_key_exists("NewDescription",$param) and $param["NewDescription"] !== null) {
            $this->NewDescription = $param["NewDescription"];
        }

        if (array_key_exists("NewEmail",$param) and $param["NewEmail"] !== null) {
            $this->NewEmail = $param["NewEmail"];
        }
    }
}
