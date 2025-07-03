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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateUserStatus请求参数结构体
 *
 * @method string getZoneId() 获取空间 ID。
 * @method void setZoneId(string $ZoneId) 设置空间 ID。
 * @method string getUserId() 获取用户 ID。
 * @method void setUserId(string $UserId) 设置用户 ID。
 * @method string getNewUserStatus() 获取用户的状态。取值：  Enabled：启用。 Disabled：禁用。
 * @method void setNewUserStatus(string $NewUserStatus) 设置用户的状态。取值：  Enabled：启用。 Disabled：禁用。
 */
class UpdateUserStatusRequest extends AbstractModel
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
     * @var string 用户的状态。取值：  Enabled：启用。 Disabled：禁用。
     */
    public $NewUserStatus;

    /**
     * @param string $ZoneId 空间 ID。
     * @param string $UserId 用户 ID。
     * @param string $NewUserStatus 用户的状态。取值：  Enabled：启用。 Disabled：禁用。
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

        if (array_key_exists("NewUserStatus",$param) and $param["NewUserStatus"] !== null) {
            $this->NewUserStatus = $param["NewUserStatus"];
        }
    }
}
