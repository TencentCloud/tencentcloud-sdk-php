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
 * CreateUser请求参数结构体
 *
 * @method string getUserStoreId() 获取用户目录ID
 * @method void setUserStoreId(string $UserStoreId) 设置用户目录ID
 * @method string getPhoneNumber() 获取手机号码
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号码
 * @method string getEmail() 获取邮箱
 * @method void setEmail(string $Email) 设置邮箱
 * @method string getPassword() 获取密码
 * @method void setPassword(string $Password) 设置密码
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getNickname() 获取昵称
 * @method void setNickname(string $Nickname) 设置昵称
 * @method string getAddress() 获取地址
 * @method void setAddress(string $Address) 设置地址
 * @method array getUserGroup() 获取用户组ID
 * @method void setUserGroup(array $UserGroup) 设置用户组ID
 * @method integer getBirthdate() 获取生日
 * @method void setBirthdate(integer $Birthdate) 设置生日
 * @method array getCustomizationAttributes() 获取自定义属性
 * @method void setCustomizationAttributes(array $CustomizationAttributes) 设置自定义属性
 * @method string getIndexedAttribute1() 获取索引字段1
 * @method void setIndexedAttribute1(string $IndexedAttribute1) 设置索引字段1
 * @method string getIndexedAttribute2() 获取索引字段2
 * @method void setIndexedAttribute2(string $IndexedAttribute2) 设置索引字段2
 * @method string getIndexedAttribute3() 获取索引字段3
 * @method void setIndexedAttribute3(string $IndexedAttribute3) 设置索引字段3
 * @method string getIndexedAttribute4() 获取索引字段4
 * @method void setIndexedAttribute4(string $IndexedAttribute4) 设置索引字段4
 * @method string getIndexedAttribute5() 获取索引字段5
 * @method void setIndexedAttribute5(string $IndexedAttribute5) 设置索引字段5
 */
class CreateUserRequest extends AbstractModel
{
    /**
     * @var string 用户目录ID
     */
    public $UserStoreId;

    /**
     * @var string 手机号码
     */
    public $PhoneNumber;

    /**
     * @var string 邮箱
     */
    public $Email;

    /**
     * @var string 密码
     */
    public $Password;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 昵称
     */
    public $Nickname;

    /**
     * @var string 地址
     */
    public $Address;

    /**
     * @var array 用户组ID
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
     * @var string 索引字段1
     */
    public $IndexedAttribute1;

    /**
     * @var string 索引字段2
     */
    public $IndexedAttribute2;

    /**
     * @var string 索引字段3
     */
    public $IndexedAttribute3;

    /**
     * @var string 索引字段4
     */
    public $IndexedAttribute4;

    /**
     * @var string 索引字段5
     */
    public $IndexedAttribute5;

    /**
     * @param string $UserStoreId 用户目录ID
     * @param string $PhoneNumber 手机号码
     * @param string $Email 邮箱
     * @param string $Password 密码
     * @param string $UserName 用户名
     * @param string $Nickname 昵称
     * @param string $Address 地址
     * @param array $UserGroup 用户组ID
     * @param integer $Birthdate 生日
     * @param array $CustomizationAttributes 自定义属性
     * @param string $IndexedAttribute1 索引字段1
     * @param string $IndexedAttribute2 索引字段2
     * @param string $IndexedAttribute3 索引字段3
     * @param string $IndexedAttribute4 索引字段4
     * @param string $IndexedAttribute5 索引字段5
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
        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
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

        if (array_key_exists("IndexedAttribute1",$param) and $param["IndexedAttribute1"] !== null) {
            $this->IndexedAttribute1 = $param["IndexedAttribute1"];
        }

        if (array_key_exists("IndexedAttribute2",$param) and $param["IndexedAttribute2"] !== null) {
            $this->IndexedAttribute2 = $param["IndexedAttribute2"];
        }

        if (array_key_exists("IndexedAttribute3",$param) and $param["IndexedAttribute3"] !== null) {
            $this->IndexedAttribute3 = $param["IndexedAttribute3"];
        }

        if (array_key_exists("IndexedAttribute4",$param) and $param["IndexedAttribute4"] !== null) {
            $this->IndexedAttribute4 = $param["IndexedAttribute4"];
        }

        if (array_key_exists("IndexedAttribute5",$param) and $param["IndexedAttribute5"] !== null) {
            $this->IndexedAttribute5 = $param["IndexedAttribute5"];
        }
    }
}
