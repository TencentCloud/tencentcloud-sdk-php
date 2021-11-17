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
 * 门店明细响应对象
 *
 * @method string getCity() 获取城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCity(string $City) 设置城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShopName() 获取门店简称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShopName(string $ShopName) 设置门店简称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatitude() 获取百度地图纬度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatitude(string $Latitude) 设置百度地图纬度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrandName() 获取品牌名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrandName(string $BrandName) 设置品牌名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppCount() 获取开通应用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppCount(string $AppCount) 设置开通应用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContactTelephone() 获取负责人手机号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContactTelephone(string $ContactTelephone) 设置负责人手机号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMerchantName() 获取商户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMerchantName(string $MerchantName) 设置商户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProvince() 获取省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvince(string $Province) 设置省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCounty() 获取县/区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCounty(string $County) 设置县/区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTerminalCount() 获取终端数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTerminalCount(string $TerminalCount) 设置终端数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPictureTwo() 获取收银台图片【公共区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPictureTwo(string $PictureTwo) 设置收银台图片【公共区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatitudeTwo() 获取高德地图纬度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatitudeTwo(string $LatitudeTwo) 设置高德地图纬度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentName() 获取机构名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentName(string $AgentName) 设置机构名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPictureFour() 获取其他照片【公共区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPictureFour(string $PictureFour) 设置其他照片【公共区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLongitudeTwo() 获取高德地图经度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLongitudeTwo(string $LongitudeTwo) 设置高德地图经度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取门店状态（0未审核，1已审核，2审核未通过，3待审核，4已删除，5初审通过）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置门店状态（0未审核，1已审核，2审核未通过，3待审核，4已删除，5初审通过）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取审核备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置审核备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentNo() 获取机构编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentNo(string $AgentNo) 设置机构编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMerchantNo() 获取商户编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMerchantNo(string $MerchantNo) 设置商户编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddTime() 获取添加时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddTime(string $AddTime) 设置添加时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取详细地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置详细地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLongitude() 获取百度地图经度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLongitude(string $Longitude) 设置百度地图经度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShopNo() 获取门店编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShopNo(string $ShopNo) 设置门店编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShopFullName() 获取门店全称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShopFullName(string $ShopFullName) 设置门店全称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContact() 获取门店负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContact(string $Contact) 设置门店负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPictureThree() 获取店内环境图片【公共区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPictureThree(string $PictureThree) 设置店内环境图片【公共区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPictureOne() 获取整体门面（含招牌）图片【公共区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPictureOne(string $PictureOne) 设置整体门面（含招牌）图片【公共区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTelephone() 获取门店电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTelephone(string $Telephone) 设置门店电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutShopId() 获取机构门店主键
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutShopId(string $OutShopId) 设置机构门店主键
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCityId() 获取城市编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCityId(string $CityId) 设置城市编码
注意：此字段可能返回 null，表示取不到有效值。
 */
class ViewShopResult extends AbstractModel
{
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
     * @var string 百度地图纬度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Latitude;

    /**
     * @var string 品牌名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrandName;

    /**
     * @var string 开通应用数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppCount;

    /**
     * @var string 负责人手机号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContactTelephone;

    /**
     * @var string 商户名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MerchantName;

    /**
     * @var string 省份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Province;

    /**
     * @var string 县/区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $County;

    /**
     * @var string 更新时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 终端数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TerminalCount;

    /**
     * @var string 收银台图片【公共区】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PictureTwo;

    /**
     * @var string 高德地图纬度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatitudeTwo;

    /**
     * @var string 机构名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentName;

    /**
     * @var string 其他照片【公共区】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PictureFour;

    /**
     * @var string 高德地图经度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LongitudeTwo;

    /**
     * @var string 门店状态（0未审核，1已审核，2审核未通过，3待审核，4已删除，5初审通过）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 审核备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 机构编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentNo;

    /**
     * @var string 商户编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MerchantNo;

    /**
     * @var string 添加时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddTime;

    /**
     * @var string 详细地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string 百度地图经度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Longitude;

    /**
     * @var string 门店编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShopNo;

    /**
     * @var string 门店全称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShopFullName;

    /**
     * @var string 门店负责人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Contact;

    /**
     * @var string 店内环境图片【公共区】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PictureThree;

    /**
     * @var string 整体门面（含招牌）图片【公共区】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PictureOne;

    /**
     * @var string 门店电话
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Telephone;

    /**
     * @var string 机构门店主键
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutShopId;

    /**
     * @var string 城市编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CityId;

    /**
     * @param string $City 城市
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShopName 门店简称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Latitude 百度地图纬度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrandName 品牌名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppCount 开通应用数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContactTelephone 负责人手机号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MerchantName 商户名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Province 省份
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $County 县/区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TerminalCount 终端数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PictureTwo 收银台图片【公共区】
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatitudeTwo 高德地图纬度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentName 机构名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PictureFour 其他照片【公共区】
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LongitudeTwo 高德地图经度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 门店状态（0未审核，1已审核，2审核未通过，3待审核，4已删除，5初审通过）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 审核备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentNo 机构编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MerchantNo 商户编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddTime 添加时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address 详细地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Longitude 百度地图经度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShopNo 门店编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShopFullName 门店全称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Contact 门店负责人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PictureThree 店内环境图片【公共区】
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PictureOne 整体门面（含招牌）图片【公共区】
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Telephone 门店电话
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutShopId 机构门店主键
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CityId 城市编码
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

        if (array_key_exists("ShopName",$param) and $param["ShopName"] !== null) {
            $this->ShopName = $param["ShopName"];
        }

        if (array_key_exists("Latitude",$param) and $param["Latitude"] !== null) {
            $this->Latitude = $param["Latitude"];
        }

        if (array_key_exists("BrandName",$param) and $param["BrandName"] !== null) {
            $this->BrandName = $param["BrandName"];
        }

        if (array_key_exists("AppCount",$param) and $param["AppCount"] !== null) {
            $this->AppCount = $param["AppCount"];
        }

        if (array_key_exists("ContactTelephone",$param) and $param["ContactTelephone"] !== null) {
            $this->ContactTelephone = $param["ContactTelephone"];
        }

        if (array_key_exists("MerchantName",$param) and $param["MerchantName"] !== null) {
            $this->MerchantName = $param["MerchantName"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("County",$param) and $param["County"] !== null) {
            $this->County = $param["County"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TerminalCount",$param) and $param["TerminalCount"] !== null) {
            $this->TerminalCount = $param["TerminalCount"];
        }

        if (array_key_exists("PictureTwo",$param) and $param["PictureTwo"] !== null) {
            $this->PictureTwo = $param["PictureTwo"];
        }

        if (array_key_exists("LatitudeTwo",$param) and $param["LatitudeTwo"] !== null) {
            $this->LatitudeTwo = $param["LatitudeTwo"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("PictureFour",$param) and $param["PictureFour"] !== null) {
            $this->PictureFour = $param["PictureFour"];
        }

        if (array_key_exists("LongitudeTwo",$param) and $param["LongitudeTwo"] !== null) {
            $this->LongitudeTwo = $param["LongitudeTwo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AgentNo",$param) and $param["AgentNo"] !== null) {
            $this->AgentNo = $param["AgentNo"];
        }

        if (array_key_exists("MerchantNo",$param) and $param["MerchantNo"] !== null) {
            $this->MerchantNo = $param["MerchantNo"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Longitude",$param) and $param["Longitude"] !== null) {
            $this->Longitude = $param["Longitude"];
        }

        if (array_key_exists("ShopNo",$param) and $param["ShopNo"] !== null) {
            $this->ShopNo = $param["ShopNo"];
        }

        if (array_key_exists("ShopFullName",$param) and $param["ShopFullName"] !== null) {
            $this->ShopFullName = $param["ShopFullName"];
        }

        if (array_key_exists("Contact",$param) and $param["Contact"] !== null) {
            $this->Contact = $param["Contact"];
        }

        if (array_key_exists("PictureThree",$param) and $param["PictureThree"] !== null) {
            $this->PictureThree = $param["PictureThree"];
        }

        if (array_key_exists("PictureOne",$param) and $param["PictureOne"] !== null) {
            $this->PictureOne = $param["PictureOne"];
        }

        if (array_key_exists("Telephone",$param) and $param["Telephone"] !== null) {
            $this->Telephone = $param["Telephone"];
        }

        if (array_key_exists("OutShopId",$param) and $param["OutShopId"] !== null) {
            $this->OutShopId = $param["OutShopId"];
        }

        if (array_key_exists("CityId",$param) and $param["CityId"] !== null) {
            $this->CityId = $param["CityId"];
        }
    }
}
