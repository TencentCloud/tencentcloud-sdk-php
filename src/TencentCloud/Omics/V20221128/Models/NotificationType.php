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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通知类型
 *
 * @method boolean getStationMessage() 获取腾讯健康组学平台站点信息。
 * @method void setStationMessage(boolean $StationMessage) 设置腾讯健康组学平台站点信息。
 * @method array getEmail() 获取邮箱列表。
 * @method void setEmail(array $Email) 设置邮箱列表。
 * @method boolean getCurrentUserEmail() 获取当前用户邮箱。
 * @method void setCurrentUserEmail(boolean $CurrentUserEmail) 设置当前用户邮箱。
 */
class NotificationType extends AbstractModel
{
    /**
     * @var boolean 腾讯健康组学平台站点信息。
     */
    public $StationMessage;

    /**
     * @var array 邮箱列表。
     */
    public $Email;

    /**
     * @var boolean 当前用户邮箱。
     */
    public $CurrentUserEmail;

    /**
     * @param boolean $StationMessage 腾讯健康组学平台站点信息。
     * @param array $Email 邮箱列表。
     * @param boolean $CurrentUserEmail 当前用户邮箱。
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
        if (array_key_exists("StationMessage",$param) and $param["StationMessage"] !== null) {
            $this->StationMessage = $param["StationMessage"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("CurrentUserEmail",$param) and $param["CurrentUserEmail"] !== null) {
            $this->CurrentUserEmail = $param["CurrentUserEmail"];
        }
    }
}
