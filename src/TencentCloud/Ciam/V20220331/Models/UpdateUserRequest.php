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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateUser请求参数结构体
 *
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method string getUserStoreId() 获取用户目录ID
 * @method void setUserStoreId(string $UserStoreId) 设置用户目录ID
 * @method string getUserName() 获取用户名称
 * @method void setUserName(string $UserName) 设置用户名称
 * @method string getPhoneNumber() 获取手机号码
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号码
 * @method string getEmail() 获取邮箱
 * @method void setEmail(string $Email) 设置邮箱
 * @method string getNickname() 获取昵称
 * @method void setNickname(string $Nickname) 设置昵称
 * @method string getAddress() 获取地址
 * @method void setAddress(string $Address) 设置地址
 * @method array getUserGroup() 获取用户组
 * @method void setUserGroup(array $UserGroup) 设置用户组
 * @method integer getBirthdate() 获取生日
 * @method void setBirthdate(integer $Birthdate) 设置生日
 * @method array getCustomizationAttributes() 获取自定义属性
 * @method void setCustomizationAttributes(array $CustomizationAttributes) 设置自定义属性
 */
class UpdateUserRequest extends AbstractModel
{
    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var string 用户目录ID
     */
    public $UserStoreId;

    /**
     * @var string 用户名称
     */
    public $UserName;

    /**
     * @var string 手机号码
     */
    public $PhoneNumber;

    /**
     * @var string 邮箱
     */
    public $Email;

    /**
     * @var string 昵称
     */
    public $Nickname;

    /**
     * @var string 地址
     */
    public $Address;

    /**
     * @var array 用户组
     */
    public $UserGroup;

    /**
     * @var integer 生日
     */
    public $Birthdate;

    /**
     * @var array 自定义属性
     */
    public $CustomizationAttributes;

    /**
     * @param string $UserId 用户ID
     * @param string $UserStoreId 用户目录ID
     * @param string $UserName 用户名称
     * @param string $PhoneNumber 手机号码
     * @param string $Email 邮箱
     * @param string $Nickname 昵称
     * @param string $Address 地址
     * @param array $UserGroup 用户组
     * @param integer $Birthdate 生日
     * @param array $CustomizationAttributes 自定义属性
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

        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("Birthdate",$param) and $param["Birthdate"] !== null) {
            $this->Birthdate = $param["Birthdate"];
        }

        if (array_key_exists("CustomizationAttributes",$param) and $param["CustomizationAttributes"] !== null) {
            $this->CustomizationAttributes = [];
            foreach ($param["CustomizationAttributes"] as $key => $value){
                $obj = new MemberMap();
                $obj->deserialize($value);
                array_push($this->CustomizationAttributes, $obj);
            }
        }
    }
}
