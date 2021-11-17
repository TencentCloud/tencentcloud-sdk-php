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
 * 合同可关联门店响应对象
 *
 * @method string getProvince() 获取省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvince(string $Province) 设置省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCityId() 获取城市编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCityId(string $CityId) 设置城市编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShopName() 获取门店简称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShopName(string $ShopName) 设置门店简称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTerminalCount() 获取终端数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTerminalCount(string $TerminalCount) 设置终端数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCity() 获取城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCity(string $City) 设置城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShopStatus() 获取门店状态（0未审核，1已审核，2审核未通过，3待审核，4已删除，5初审通过）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShopStatus(string $ShopStatus) 设置门店状态（0未审核，1已审核，2审核未通过，3待审核，4已删除，5初审通过）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAliPayOnline() 获取若是支付宝合同，支付宝上线状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliPayOnline(string $AliPayOnline) 设置若是支付宝合同，支付宝上线状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShopNo() 获取门店编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShopNo(string $ShopNo) 设置门店编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCountry() 获取县/区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountry(string $Country) 设置县/区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAliPayStatus() 获取若是支付宝合同，支付宝审核状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliPayStatus(string $AliPayStatus) 设置若是支付宝合同，支付宝审核状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsChecked() 获取为空或者0表示未关联，大于0表示已关联
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsChecked(string $IsChecked) 设置为空或者0表示未关联，大于0表示已关联
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取详细地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置详细地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAliPayDesc() 获取若是支付宝合同，支付宝审核描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliPayDesc(string $AliPayDesc) 设置若是支付宝合同，支付宝审核描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryContractRelateShopResult extends AbstractModel
{
    /**
     * @var string 省份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Province;

    /**
     * @var string 城市编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CityId;

    /**
     * @var string 门店简称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShopName;

    /**
     * @var string 终端数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TerminalCount;

    /**
     * @var string 城市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $City;

    /**
     * @var string 门店状态（0未审核，1已审核，2审核未通过，3待审核，4已删除，5初审通过）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShopStatus;

    /**
     * @var string 若是支付宝合同，支付宝上线状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AliPayOnline;

    /**
     * @var string 门店编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShopNo;

    /**
     * @var string 县/区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Country;

    /**
     * @var string 若是支付宝合同，支付宝审核状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AliPayStatus;

    /**
     * @var string 为空或者0表示未关联，大于0表示已关联
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsChecked;

    /**
     * @var string 详细地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string 若是支付宝合同，支付宝审核描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AliPayDesc;

    /**
     * @param string $Province 省份
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CityId 城市编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShopName 门店简称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TerminalCount 终端数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $City 城市
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShopStatus 门店状态（0未审核，1已审核，2审核未通过，3待审核，4已删除，5初审通过）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AliPayOnline 若是支付宝合同，支付宝上线状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShopNo 门店编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Country 县/区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AliPayStatus 若是支付宝合同，支付宝审核状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsChecked 为空或者0表示未关联，大于0表示已关联
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address 详细地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AliPayDesc 若是支付宝合同，支付宝审核描述
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

        if (array_key_exists("CityId",$param) and $param["CityId"] !== null) {
            $this->CityId = $param["CityId"];
        }

        if (array_key_exists("ShopName",$param) and $param["ShopName"] !== null) {
            $this->ShopName = $param["ShopName"];
        }

        if (array_key_exists("TerminalCount",$param) and $param["TerminalCount"] !== null) {
            $this->TerminalCount = $param["TerminalCount"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("ShopStatus",$param) and $param["ShopStatus"] !== null) {
            $this->ShopStatus = $param["ShopStatus"];
        }

        if (array_key_exists("AliPayOnline",$param) and $param["AliPayOnline"] !== null) {
            $this->AliPayOnline = $param["AliPayOnline"];
        }

        if (array_key_exists("ShopNo",$param) and $param["ShopNo"] !== null) {
            $this->ShopNo = $param["ShopNo"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("AliPayStatus",$param) and $param["AliPayStatus"] !== null) {
            $this->AliPayStatus = $param["AliPayStatus"];
        }

        if (array_key_exists("IsChecked",$param) and $param["IsChecked"] !== null) {
            $this->IsChecked = $param["IsChecked"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("AliPayDesc",$param) and $param["AliPayDesc"] !== null) {
            $this->AliPayDesc = $param["AliPayDesc"];
        }
    }
}
