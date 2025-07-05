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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUser请求参数结构体
 *
 * @method string getLibraryId() 获取媒体库 ID。
 * @method void setLibraryId(string $LibraryId) 设置媒体库 ID。
 * @method UserFilter getFilter() 获取用于唯一查找用户的过滤器。
 * @method void setFilter(UserFilter $Filter) 设置用于唯一查找用户的过滤器。
 * @method string getRole() 获取用户角色，当只支持 user。
 * @method void setRole(string $Role) 设置用户角色，当只支持 user。
 * @method boolean getEnabled() 获取是否启用。
 * @method void setEnabled(boolean $Enabled) 设置是否启用。
 * @method string getCountryCode() 获取手机号国家码，不传默认为 null，此时无法使用该登录方式进行登录。
 * @method void setCountryCode(string $CountryCode) 设置手机号国家码，不传默认为 null，此时无法使用该登录方式进行登录。
 * @method string getPhoneNumber() 获取手机号码，不传默认为 null，此时无法使用该登录方式进行登录。如果与同一媒体库内已有手机号重复则报错。CountryCode 和 PhoneNumber 必须同时传入或同时不传入。
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号码，不传默认为 null，此时无法使用该登录方式进行登录。如果与同一媒体库内已有手机号重复则报错。CountryCode 和 PhoneNumber 必须同时传入或同时不传入。
 * @method string getEmail() 获取邮箱，不传默认为 null，此时无法使用该登录方式进行登录。如果与同一媒体库内已有邮箱重复则报错。
 * @method void setEmail(string $Email) 设置邮箱，不传默认为 null，此时无法使用该登录方式进行登录。如果与同一媒体库内已有邮箱重复则报错。
 * @method string getAccountName() 获取账号，不传默认为 null，此时无法使用该登录方式进行登录。如果与同一媒体库内已有账号重复则报错。只能使用大小写字母、数字、中划线、下划线、小数点，长度不超过 50 个字符。
 * @method void setAccountName(string $AccountName) 设置账号，不传默认为 null，此时无法使用该登录方式进行登录。如果与同一媒体库内已有账号重复则报错。只能使用大小写字母、数字、中划线、下划线、小数点，长度不超过 50 个字符。
 * @method string getAccountPassword() 获取密码的 base64 形式，不传默认为 null，此时无法使用该登录方式进行登录。AccountName 和 AccountPassword 必须同时传入或同时不传入。
 * @method void setAccountPassword(string $AccountPassword) 设置密码的 base64 形式，不传默认为 null，此时无法使用该登录方式进行登录。AccountName 和 AccountPassword 必须同时传入或同时不传入。
 * @method string getAccountUserId() 获取第三方账号 ID，用于关联第三方账号体系，不传默认为 null，此时无法使用该登录方式进行登录。如果与同一媒体库内已有第三方账号重复则报错。只能使用大小写字母、数字、中划线、下划线、小数点，长度不超过 200 个字符。
 * @method void setAccountUserId(string $AccountUserId) 设置第三方账号 ID，用于关联第三方账号体系，不传默认为 null，此时无法使用该登录方式进行登录。如果与同一媒体库内已有第三方账号重复则报错。只能使用大小写字母、数字、中划线、下划线、小数点，长度不超过 200 个字符。
 * @method string getComment() 获取备注。不超过 255 个字符。
 * @method void setComment(string $Comment) 设置备注。不超过 255 个字符。
 * @method string getNickname() 获取昵称。不超过 100 个字符。
 * @method void setNickname(string $Nickname) 设置昵称。不超过 100 个字符。
 * @method string getAvatar() 获取用户头像地址。不超过 255 个字符。
 * @method void setAvatar(string $Avatar) 设置用户头像地址。不超过 255 个字符。
 * @method string getCustomize() 获取自定义信息。不超过 255 个字符。
 * @method void setCustomize(string $Customize) 设置自定义信息。不超过 255 个字符。
 */
class ModifyUserRequest extends AbstractModel
{
    /**
     * @var string 媒体库 ID。
     */
    public $LibraryId;

    /**
     * @var UserFilter 用于唯一查找用户的过滤器。
     */
    public $Filter;

    /**
     * @var string 用户角色，当只支持 user。
     */
    public $Role;

    /**
     * @var boolean 是否启用。
     */
    public $Enabled;

    /**
     * @var string 手机号国家码，不传默认为 null，此时无法使用该登录方式进行登录。
     */
    public $CountryCode;

    /**
     * @var string 手机号码，不传默认为 null，此时无法使用该登录方式进行登录。如果与同一媒体库内已有手机号重复则报错。CountryCode 和 PhoneNumber 必须同时传入或同时不传入。
     */
    public $PhoneNumber;

    /**
     * @var string 邮箱，不传默认为 null，此时无法使用该登录方式进行登录。如果与同一媒体库内已有邮箱重复则报错。
     */
    public $Email;

    /**
     * @var string 账号，不传默认为 null，此时无法使用该登录方式进行登录。如果与同一媒体库内已有账号重复则报错。只能使用大小写字母、数字、中划线、下划线、小数点，长度不超过 50 个字符。
     */
    public $AccountName;

    /**
     * @var string 密码的 base64 形式，不传默认为 null，此时无法使用该登录方式进行登录。AccountName 和 AccountPassword 必须同时传入或同时不传入。
     */
    public $AccountPassword;

    /**
     * @var string 第三方账号 ID，用于关联第三方账号体系，不传默认为 null，此时无法使用该登录方式进行登录。如果与同一媒体库内已有第三方账号重复则报错。只能使用大小写字母、数字、中划线、下划线、小数点，长度不超过 200 个字符。
     */
    public $AccountUserId;

    /**
     * @var string 备注。不超过 255 个字符。
     */
    public $Comment;

    /**
     * @var string 昵称。不超过 100 个字符。
     */
    public $Nickname;

    /**
     * @var string 用户头像地址。不超过 255 个字符。
     */
    public $Avatar;

    /**
     * @var string 自定义信息。不超过 255 个字符。
     */
    public $Customize;

    /**
     * @param string $LibraryId 媒体库 ID。
     * @param UserFilter $Filter 用于唯一查找用户的过滤器。
     * @param string $Role 用户角色，当只支持 user。
     * @param boolean $Enabled 是否启用。
     * @param string $CountryCode 手机号国家码，不传默认为 null，此时无法使用该登录方式进行登录。
     * @param string $PhoneNumber 手机号码，不传默认为 null，此时无法使用该登录方式进行登录。如果与同一媒体库内已有手机号重复则报错。CountryCode 和 PhoneNumber 必须同时传入或同时不传入。
     * @param string $Email 邮箱，不传默认为 null，此时无法使用该登录方式进行登录。如果与同一媒体库内已有邮箱重复则报错。
     * @param string $AccountName 账号，不传默认为 null，此时无法使用该登录方式进行登录。如果与同一媒体库内已有账号重复则报错。只能使用大小写字母、数字、中划线、下划线、小数点，长度不超过 50 个字符。
     * @param string $AccountPassword 密码的 base64 形式，不传默认为 null，此时无法使用该登录方式进行登录。AccountName 和 AccountPassword 必须同时传入或同时不传入。
     * @param string $AccountUserId 第三方账号 ID，用于关联第三方账号体系，不传默认为 null，此时无法使用该登录方式进行登录。如果与同一媒体库内已有第三方账号重复则报错。只能使用大小写字母、数字、中划线、下划线、小数点，长度不超过 200 个字符。
     * @param string $Comment 备注。不超过 255 个字符。
     * @param string $Nickname 昵称。不超过 100 个字符。
     * @param string $Avatar 用户头像地址。不超过 255 个字符。
     * @param string $Customize 自定义信息。不超过 255 个字符。
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

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new UserFilter();
            $this->Filter->deserialize($param["Filter"]);
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

        if (array_key_exists("AccountPassword",$param) and $param["AccountPassword"] !== null) {
            $this->AccountPassword = $param["AccountPassword"];
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
    }
}
