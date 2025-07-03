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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Whois联系信息地址
 *
 * @method string getCity() 获取城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCity(string $City) 设置城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCountry() 获取国家
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountry(string $Country) 设置国家
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEmail() 获取电子邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmail(string $Email) 设置电子邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFax() 获取传真
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFax(string $Fax) 设置传真
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFaxExt() 获取传真分机号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFaxExt(string $FaxExt) 设置传真分机号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHandle() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHandle(string $Handle) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganization() 获取组织机构
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganization(string $Organization) 设置组织机构
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhone() 获取电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhone(string $Phone) 设置电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPostalCode() 获取邮编
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostalCode(string $PostalCode) 设置邮编
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取省份/州
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置省份/州
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStreet() 获取街道地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreet(string $Street) 设置街道地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class WhoisContactAddress extends AbstractModel
{
    /**
     * @var string 城市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $City;

    /**
     * @var string 国家
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Country;

    /**
     * @var string 电子邮箱
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Email;

    /**
     * @var string 传真
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fax;

    /**
     * @var string 传真分机号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FaxExt;

    /**
     * @var string 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Handle;

    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 组织机构
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Organization;

    /**
     * @var string 电话
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Phone;

    /**
     * @var string 邮编
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostalCode;

    /**
     * @var string 省份/州
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 街道地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Street;

    /**
     * @param string $City 城市
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Country 国家
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Email 电子邮箱
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Fax 传真
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FaxExt 传真分机号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Handle 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Organization 组织机构
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Phone 电话
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PostalCode 邮编
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 省份/州
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Street 街道地址
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
        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Fax",$param) and $param["Fax"] !== null) {
            $this->Fax = $param["Fax"];
        }

        if (array_key_exists("FaxExt",$param) and $param["FaxExt"] !== null) {
            $this->FaxExt = $param["FaxExt"];
        }

        if (array_key_exists("Handle",$param) and $param["Handle"] !== null) {
            $this->Handle = $param["Handle"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = $param["Organization"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("PostalCode",$param) and $param["PostalCode"] !== null) {
            $this->PostalCode = $param["PostalCode"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Street",$param) and $param["Street"] !== null) {
            $this->Street = $param["Street"];
        }
    }
}
