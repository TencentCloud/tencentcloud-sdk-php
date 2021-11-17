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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取门店OpenId响应对象
 *
 * @method string getProvince() 获取省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvince(string $Province) 设置省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCity() 获取城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCity(string $City) 设置城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShopName() 获取门店简称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShopName(string $ShopName) 设置门店简称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMerchantNo() 获取商户编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMerchantNo(string $MerchantNo) 设置商户编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCityId() 获取城市编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCityId(string $CityId) 设置城市编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOpenId() 获取open_id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenId(string $OpenId) 设置open_id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTelephone() 获取门店电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTelephone(string $Telephone) 设置门店电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShopNo() 获取门店编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShopNo(string $ShopNo) 设置门店编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCounty() 获取县/区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCounty(string $County) 设置县/区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShopFullName() 获取门店全称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShopFullName(string $ShopFullName) 设置门店全称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrandName() 获取品牌名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrandName(string $BrandName) 设置品牌名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取详细地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置详细地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOpenKey() 获取open_key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenKey(string $OpenKey) 设置open_key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMerchantName() 获取商户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMerchantName(string $MerchantName) 设置商户名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryShopOpenIdResult extends AbstractModel
{
    /**
     * @var string 省份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Province;

    /**
     * @var string 城市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $City;

    /**
     * @var string 门店简称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShopName;

    /**
     * @var string 商户编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MerchantNo;

    /**
     * @var string 城市编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CityId;

    /**
     * @var string open_id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenId;

    /**
     * @var string 门店电话
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Telephone;

    /**
     * @var string 门店编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShopNo;

    /**
     * @var string 县/区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $County;

    /**
     * @var string 门店全称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShopFullName;

    /**
     * @var string 品牌名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrandName;

    /**
     * @var string 详细地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string open_key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenKey;

    /**
     * @var string 商户名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MerchantName;

    /**
     * @param string $Province 省份
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $City 城市
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShopName 门店简称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MerchantNo 商户编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CityId 城市编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OpenId open_id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Telephone 门店电话
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShopNo 门店编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $County 县/区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShopFullName 门店全称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrandName 品牌名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address 详细地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OpenKey open_key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MerchantName 商户名称
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
        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("ShopName",$param) and $param["ShopName"] !== null) {
            $this->ShopName = $param["ShopName"];
        }

        if (array_key_exists("MerchantNo",$param) and $param["MerchantNo"] !== null) {
            $this->MerchantNo = $param["MerchantNo"];
        }

        if (array_key_exists("CityId",$param) and $param["CityId"] !== null) {
            $this->CityId = $param["CityId"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("Telephone",$param) and $param["Telephone"] !== null) {
            $this->Telephone = $param["Telephone"];
        }

        if (array_key_exists("ShopNo",$param) and $param["ShopNo"] !== null) {
            $this->ShopNo = $param["ShopNo"];
        }

        if (array_key_exists("County",$param) and $param["County"] !== null) {
            $this->County = $param["County"];
        }

        if (array_key_exists("ShopFullName",$param) and $param["ShopFullName"] !== null) {
            $this->ShopFullName = $param["ShopFullName"];
        }

        if (array_key_exists("BrandName",$param) and $param["BrandName"] !== null) {
            $this->BrandName = $param["BrandName"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("OpenKey",$param) and $param["OpenKey"] !== null) {
            $this->OpenKey = $param["OpenKey"];
        }

        if (array_key_exists("MerchantName",$param) and $param["MerchantName"] !== null) {
            $this->MerchantName = $param["MerchantName"];
        }
    }
}
