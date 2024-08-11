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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUser返回参数结构体
 *
 * @method string getLibraryId() 获取用户所在的媒体库 ID。
 * @method void setLibraryId(string $LibraryId) 设置用户所在的媒体库 ID。
 * @method string getUserId() 获取用户 ID。
 * @method void setUserId(string $UserId) 设置用户 ID。
 * @method string getCreationTime() 获取用户创建时间。
 * @method void setCreationTime(string $CreationTime) 设置用户创建时间。
 * @method string getRole() 获取用户角色.
 * @method void setRole(string $Role) 设置用户角色.
 * @method boolean getEnabled() 获取是否启用。
 * @method void setEnabled(boolean $Enabled) 设置是否启用。
 * @method string getCountryCode() 获取手机号国家码，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountryCode(string $CountryCode) 设置手机号国家码，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhoneNumber() 获取手机号码，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号码，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEmail() 获取邮箱，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmail(string $Email) 设置邮箱，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountName() 获取账号，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountName(string $AccountName) 设置账号，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountUserId() 获取第三方账号 ID，用于关联第三方账号体系，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountUserId(string $AccountUserId) 设置第三方账号 ID，用于关联第三方账号体系，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取备注。
 * @method void setComment(string $Comment) 设置备注。
 * @method string getNickname() 获取昵称。
 * @method void setNickname(string $Nickname) 设置昵称。
 * @method string getAvatar() 获取用户头像地址。
 * @method void setAvatar(string $Avatar) 设置用户头像地址。
 * @method string getCustomize() 获取自定义信息。
 * @method void setCustomize(string $Customize) 设置自定义信息。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyUserResponse extends AbstractModel
{
    /**
     * @var string 用户所在的媒体库 ID。
     */
    public $LibraryId;

    /**
     * @var string 用户 ID。
     */
    public $UserId;

    /**
     * @var string 用户创建时间。
     */
    public $CreationTime;

    /**
     * @var string 用户角色.
     */
    public $Role;

    /**
     * @var boolean 是否启用。
     */
    public $Enabled;

    /**
     * @var string 手机号国家码，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CountryCode;

    /**
     * @var string 手机号码，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneNumber;

    /**
     * @var string 邮箱，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Email;

    /**
     * @var string 账号，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountName;

    /**
     * @var string 第三方账号 ID，用于关联第三方账号体系，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountUserId;

    /**
     * @var string 备注。
     */
    public $Comment;

    /**
     * @var string 昵称。
     */
    public $Nickname;

    /**
     * @var string 用户头像地址。
     */
    public $Avatar;

    /**
     * @var string 自定义信息。
     */
    public $Customize;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $LibraryId 用户所在的媒体库 ID。
     * @param string $UserId 用户 ID。
     * @param string $CreationTime 用户创建时间。
     * @param string $Role 用户角色.
     * @param boolean $Enabled 是否启用。
     * @param string $CountryCode 手机号国家码，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PhoneNumber 手机号码，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Email 邮箱，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountName 账号，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountUserId 第三方账号 ID，用于关联第三方账号体系，如未指定则为 null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment 备注。
     * @param string $Nickname 昵称。
     * @param string $Avatar 用户头像地址。
     * @param string $Customize 自定义信息。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("LibraryId",$param) and $param["LibraryId"] !== null) {
            $this->LibraryId = $param["LibraryId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("AccountUserId",$param) and $param["AccountUserId"] !== null) {
            $this->AccountUserId = $param["AccountUserId"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("Customize",$param) and $param["Customize"] !== null) {
            $this->Customize = $param["Customize"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
