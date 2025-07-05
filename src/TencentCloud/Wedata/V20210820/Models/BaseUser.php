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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基础用户信息
 *
 * @method string getUserId() 获取有云的UIN，全局唯一
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置有云的UIN，全局唯一
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取用户全局唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户全局唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取用户显示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置用户显示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhoneNum() 获取电话号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneNum(string $PhoneNum) 设置电话号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEmail() 获取邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmail(string $Email) 设置邮箱
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaseUser extends AbstractModel
{
    /**
     * @var string 有云的UIN，全局唯一
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 用户全局唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 用户显示名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var string 电话号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneNum;

    /**
     * @var string 邮箱
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Email;

    /**
     * @param string $UserId 有云的UIN，全局唯一
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 用户全局唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName 用户显示名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PhoneNum 电话号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Email 邮箱
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

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }
    }
}
