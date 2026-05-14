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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUser请求参数结构体
 *
 * @method string getUserStoreId() 获取<p>用户目录ID</p>
 * @method void setUserStoreId(string $UserStoreId) 设置<p>用户目录ID</p>
 * @method string getPhoneNumber() 获取<p>手机号码</p>
 * @method void setPhoneNumber(string $PhoneNumber) 设置<p>手机号码</p>
 * @method string getEmail() 获取<p>邮箱</p>
 * @method void setEmail(string $Email) 设置<p>邮箱</p>
 * @method string getPassword() 获取<p>密码</p>
 * @method void setPassword(string $Password) 设置<p>密码</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getNickname() 获取<p>昵称</p>
 * @method void setNickname(string $Nickname) 设置<p>昵称</p>
 * @method string getAddress() 获取<p>地址</p>
 * @method void setAddress(string $Address) 设置<p>地址</p>
 * @method array getUserGroup() 获取<p>用户组ID</p>
 * @method void setUserGroup(array $UserGroup) 设置<p>用户组ID</p>
 * @method integer getBirthdate() 获取<p>生日</p>
 * @method void setBirthdate(integer $Birthdate) 设置<p>生日</p>
 * @method array getCustomizationAttributes() 获取<p>自定义属性</p>
 * @method void setCustomizationAttributes(array $CustomizationAttributes) 设置<p>自定义属性</p>
 * @method string getIndexedAttribute1() 获取<p>索引字段1</p>
 * @method void setIndexedAttribute1(string $IndexedAttribute1) 设置<p>索引字段1</p>
 * @method string getIndexedAttribute2() 获取<p>索引字段2</p>
 * @method void setIndexedAttribute2(string $IndexedAttribute2) 设置<p>索引字段2</p>
 * @method string getIndexedAttribute3() 获取<p>索引字段3</p>
 * @method void setIndexedAttribute3(string $IndexedAttribute3) 设置<p>索引字段3</p>
 * @method string getIndexedAttribute4() 获取<p>索引字段4</p>
 * @method void setIndexedAttribute4(string $IndexedAttribute4) 设置<p>索引字段4</p>
 * @method string getIndexedAttribute5() 获取<p>索引字段5</p>
 * @method void setIndexedAttribute5(string $IndexedAttribute5) 设置<p>索引字段5</p>
 * @method array getUserOrg() 获取<p>用户所属组织机构ID</p>
 * @method void setUserOrg(array $UserOrg) 设置<p>用户所属组织机构ID</p>
 */
class CreateUserRequest extends AbstractModel
{
    /**
     * @var string <p>用户目录ID</p>
     */
    public $UserStoreId;

    /**
     * @var string <p>手机号码</p>
     */
    public $PhoneNumber;

    /**
     * @var string <p>邮箱</p>
     */
    public $Email;

    /**
     * @var string <p>密码</p>
     */
    public $Password;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>昵称</p>
     */
    public $Nickname;

    /**
     * @var string <p>地址</p>
     */
    public $Address;

    /**
     * @var array <p>用户组ID</p>
     */
    public $UserGroup;

    /**
     * @var integer <p>生日</p>
     */
    public $Birthdate;

    /**
     * @var array <p>自定义属性</p>
     */
    public $CustomizationAttributes;

    /**
     * @var string <p>索引字段1</p>
     */
    public $IndexedAttribute1;

    /**
     * @var string <p>索引字段2</p>
     */
    public $IndexedAttribute2;

    /**
     * @var string <p>索引字段3</p>
     */
    public $IndexedAttribute3;

    /**
     * @var string <p>索引字段4</p>
     */
    public $IndexedAttribute4;

    /**
     * @var string <p>索引字段5</p>
     */
    public $IndexedAttribute5;

    /**
     * @var array <p>用户所属组织机构ID</p>
     */
    public $UserOrg;

    /**
     * @param string $UserStoreId <p>用户目录ID</p>
     * @param string $PhoneNumber <p>手机号码</p>
     * @param string $Email <p>邮箱</p>
     * @param string $Password <p>密码</p>
     * @param string $UserName <p>用户名</p>
     * @param string $Nickname <p>昵称</p>
     * @param string $Address <p>地址</p>
     * @param array $UserGroup <p>用户组ID</p>
     * @param integer $Birthdate <p>生日</p>
     * @param array $CustomizationAttributes <p>自定义属性</p>
     * @param string $IndexedAttribute1 <p>索引字段1</p>
     * @param string $IndexedAttribute2 <p>索引字段2</p>
     * @param string $IndexedAttribute3 <p>索引字段3</p>
     * @param string $IndexedAttribute4 <p>索引字段4</p>
     * @param string $IndexedAttribute5 <p>索引字段5</p>
     * @param array $UserOrg <p>用户所属组织机构ID</p>
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

        if (array_key_exists("UserOrg",$param) and $param["UserOrg"] !== null) {
            $this->UserOrg = $param["UserOrg"];
        }
    }
}
