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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户ID和用户名
 *
 * @method string getUserId() 获取<p>用户ID</p>
 * @method void setUserId(string $UserId) 设置<p>用户ID</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getEmail() 获取<p>邮箱</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmail(string $Email) 设置<p>邮箱</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhoneNumber() 获取<p>手机号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneNumber(string $PhoneNumber) 设置<p>手机号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAreaCode() 获取<p>手机号区号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAreaCode(string $AreaCode) 设置<p>手机号区号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppUserId() 获取<p>企微账号id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppUserId(string $AppUserId) 设置<p>企微账号id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppUserName() 获取<p>企微账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppUserName(string $AppUserName) 设置<p>企微账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLarkOpenId() 获取<p>飞书OpenId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLarkOpenId(string $LarkOpenId) 设置<p>飞书OpenId</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string <p>用户ID</p>
     */
    public $UserId;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>邮箱</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Email;

    /**
     * @var string <p>手机号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneNumber;

    /**
     * @var string <p>手机号区号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AreaCode;

    /**
     * @var string <p>企微账号id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppUserId;

    /**
     * @var string <p>企微账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppUserName;

    /**
     * @var string <p>飞书OpenId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LarkOpenId;

    /**
     * @param string $UserId <p>用户ID</p>
     * @param string $UserName <p>用户名</p>
     * @param string $Email <p>邮箱</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PhoneNumber <p>手机号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AreaCode <p>手机号区号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppUserId <p>企微账号id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppUserName <p>企微账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LarkOpenId <p>飞书OpenId</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("AreaCode",$param) and $param["AreaCode"] !== null) {
            $this->AreaCode = $param["AreaCode"];
        }

        if (array_key_exists("AppUserId",$param) and $param["AppUserId"] !== null) {
            $this->AppUserId = $param["AppUserId"];
        }

        if (array_key_exists("AppUserName",$param) and $param["AppUserName"] !== null) {
            $this->AppUserName = $param["AppUserName"];
        }

        if (array_key_exists("LarkOpenId",$param) and $param["LarkOpenId"] !== null) {
            $this->LarkOpenId = $param["LarkOpenId"];
        }
    }
}
