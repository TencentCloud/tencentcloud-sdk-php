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
 * AddShop请求参数结构体
 *
 * @method string getOpenId() 获取收单系统分配的开放ID
 * @method void setOpenId(string $OpenId) 设置收单系统分配的开放ID
 * @method string getOpenKey() 获取收单系统分配的密钥
 * @method void setOpenKey(string $OpenKey) 设置收单系统分配的密钥
 * @method string getOutShopId() 获取机构门店主键（系统有唯一性校验），建议使用门店表的主键ID，防止重复添加门店
 * @method void setOutShopId(string $OutShopId) 设置机构门店主键（系统有唯一性校验），建议使用门店表的主键ID，防止重复添加门店
 * @method string getShopName() 获取门店简称（例如：南山店）
 * @method void setShopName(string $ShopName) 设置门店简称（例如：南山店）
 * @method string getShopFullName() 获取门店全称（例如：江山小厨（南山店））
 * @method void setShopFullName(string $ShopFullName) 设置门店全称（例如：江山小厨（南山店））
 * @method string getMerchantNo() 获取商户编号
 * @method void setMerchantNo(string $MerchantNo) 设置商户编号
 * @method string getTelephone() 获取门店电话
 * @method void setTelephone(string $Telephone) 设置门店电话
 * @method string getOpenHours() 获取营业时间，多个以小写逗号分开(9:00-12:00,13:00-18:00)
 * @method void setOpenHours(string $OpenHours) 设置营业时间，多个以小写逗号分开(9:00-12:00,13:00-18:00)
 * @method string getCityId() 获取门店所在的城市编码
 * @method void setCityId(string $CityId) 设置门店所在的城市编码
 * @method string getAddress() 获取门店详细地址，不含省市区县名称
 * @method void setAddress(string $Address) 设置门店详细地址，不含省市区县名称
 * @method string getPictureOne() 获取整体门面（含招牌）图片【公共区】
 * @method void setPictureOne(string $PictureOne) 设置整体门面（含招牌）图片【公共区】
 * @method string getPictureTwo() 获取整体门面（含招牌）图片【公共区】
 * @method void setPictureTwo(string $PictureTwo) 设置整体门面（含招牌）图片【公共区】
 * @method string getPictureThree() 获取店内环境图片【公共区】
 * @method void setPictureThree(string $PictureThree) 设置店内环境图片【公共区】
 * @method string getFinancialTelephone() 获取负责人手机号码
 * @method void setFinancialTelephone(string $FinancialTelephone) 设置负责人手机号码
 * @method string getContact() 获取门店负责人
 * @method void setContact(string $Contact) 设置门店负责人
 * @method string getLatitude() 获取百度地图纬度
 * @method void setLatitude(string $Latitude) 设置百度地图纬度
 * @method string getLatitudeTwo() 获取高德地图纬度
 * @method void setLatitudeTwo(string $LatitudeTwo) 设置高德地图纬度
 * @method string getLongitude() 获取百度地图经度
 * @method void setLongitude(string $Longitude) 设置百度地图经度
 * @method string getLongitudeTwo() 获取高德地图经度
 * @method void setLongitudeTwo(string $LongitudeTwo) 设置高德地图经度
 * @method string getOtherPicture() 获取其他照片【公共区】
 * @method void setOtherPicture(string $OtherPicture) 设置其他照片【公共区】
 * @method string getProfile() 获取沙箱环境填sandbox，正式环境不填
 * @method void setProfile(string $Profile) 设置沙箱环境填sandbox，正式环境不填
 */
class AddShopRequest extends AbstractModel
{
    /**
     * @var string 收单系统分配的开放ID
     */
    public $OpenId;

    /**
     * @var string 收单系统分配的密钥
     */
    public $OpenKey;

    /**
     * @var string 机构门店主键（系统有唯一性校验），建议使用门店表的主键ID，防止重复添加门店
     */
    public $OutShopId;

    /**
     * @var string 门店简称（例如：南山店）
     */
    public $ShopName;

    /**
     * @var string 门店全称（例如：江山小厨（南山店））
     */
    public $ShopFullName;

    /**
     * @var string 商户编号
     */
    public $MerchantNo;

    /**
     * @var string 门店电话
     */
    public $Telephone;

    /**
     * @var string 营业时间，多个以小写逗号分开(9:00-12:00,13:00-18:00)
     */
    public $OpenHours;

    /**
     * @var string 门店所在的城市编码
     */
    public $CityId;

    /**
     * @var string 门店详细地址，不含省市区县名称
     */
    public $Address;

    /**
     * @var string 整体门面（含招牌）图片【公共区】
     */
    public $PictureOne;

    /**
     * @var string 整体门面（含招牌）图片【公共区】
     */
    public $PictureTwo;

    /**
     * @var string 店内环境图片【公共区】
     */
    public $PictureThree;

    /**
     * @var string 负责人手机号码
     */
    public $FinancialTelephone;

    /**
     * @var string 门店负责人
     */
    public $Contact;

    /**
     * @var string 百度地图纬度
     */
    public $Latitude;

    /**
     * @var string 高德地图纬度
     */
    public $LatitudeTwo;

    /**
     * @var string 百度地图经度
     */
    public $Longitude;

    /**
     * @var string 高德地图经度
     */
    public $LongitudeTwo;

    /**
     * @var string 其他照片【公共区】
     */
    public $OtherPicture;

    /**
     * @var string 沙箱环境填sandbox，正式环境不填
     */
    public $Profile;

    /**
     * @param string $OpenId 收单系统分配的开放ID
     * @param string $OpenKey 收单系统分配的密钥
     * @param string $OutShopId 机构门店主键（系统有唯一性校验），建议使用门店表的主键ID，防止重复添加门店
     * @param string $ShopName 门店简称（例如：南山店）
     * @param string $ShopFullName 门店全称（例如：江山小厨（南山店））
     * @param string $MerchantNo 商户编号
     * @param string $Telephone 门店电话
     * @param string $OpenHours 营业时间，多个以小写逗号分开(9:00-12:00,13:00-18:00)
     * @param string $CityId 门店所在的城市编码
     * @param string $Address 门店详细地址，不含省市区县名称
     * @param string $PictureOne 整体门面（含招牌）图片【公共区】
     * @param string $PictureTwo 整体门面（含招牌）图片【公共区】
     * @param string $PictureThree 店内环境图片【公共区】
     * @param string $FinancialTelephone 负责人手机号码
     * @param string $Contact 门店负责人
     * @param string $Latitude 百度地图纬度
     * @param string $LatitudeTwo 高德地图纬度
     * @param string $Longitude 百度地图经度
     * @param string $LongitudeTwo 高德地图经度
     * @param string $OtherPicture 其他照片【公共区】
     * @param string $Profile 沙箱环境填sandbox，正式环境不填
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
        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("OpenKey",$param) and $param["OpenKey"] !== null) {
            $this->OpenKey = $param["OpenKey"];
        }

        if (array_key_exists("OutShopId",$param) and $param["OutShopId"] !== null) {
            $this->OutShopId = $param["OutShopId"];
        }

        if (array_key_exists("ShopName",$param) and $param["ShopName"] !== null) {
            $this->ShopName = $param["ShopName"];
        }

        if (array_key_exists("ShopFullName",$param) and $param["ShopFullName"] !== null) {
            $this->ShopFullName = $param["ShopFullName"];
        }

        if (array_key_exists("MerchantNo",$param) and $param["MerchantNo"] !== null) {
            $this->MerchantNo = $param["MerchantNo"];
        }

        if (array_key_exists("Telephone",$param) and $param["Telephone"] !== null) {
            $this->Telephone = $param["Telephone"];
        }

        if (array_key_exists("OpenHours",$param) and $param["OpenHours"] !== null) {
            $this->OpenHours = $param["OpenHours"];
        }

        if (array_key_exists("CityId",$param) and $param["CityId"] !== null) {
            $this->CityId = $param["CityId"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("PictureOne",$param) and $param["PictureOne"] !== null) {
            $this->PictureOne = $param["PictureOne"];
        }

        if (array_key_exists("PictureTwo",$param) and $param["PictureTwo"] !== null) {
            $this->PictureTwo = $param["PictureTwo"];
        }

        if (array_key_exists("PictureThree",$param) and $param["PictureThree"] !== null) {
            $this->PictureThree = $param["PictureThree"];
        }

        if (array_key_exists("FinancialTelephone",$param) and $param["FinancialTelephone"] !== null) {
            $this->FinancialTelephone = $param["FinancialTelephone"];
        }

        if (array_key_exists("Contact",$param) and $param["Contact"] !== null) {
            $this->Contact = $param["Contact"];
        }

        if (array_key_exists("Latitude",$param) and $param["Latitude"] !== null) {
            $this->Latitude = $param["Latitude"];
        }

        if (array_key_exists("LatitudeTwo",$param) and $param["LatitudeTwo"] !== null) {
            $this->LatitudeTwo = $param["LatitudeTwo"];
        }

        if (array_key_exists("Longitude",$param) and $param["Longitude"] !== null) {
            $this->Longitude = $param["Longitude"];
        }

        if (array_key_exists("LongitudeTwo",$param) and $param["LongitudeTwo"] !== null) {
            $this->LongitudeTwo = $param["LongitudeTwo"];
        }

        if (array_key_exists("OtherPicture",$param) and $param["OtherPicture"] !== null) {
            $this->OtherPicture = $param["OtherPicture"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
