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
namespace TencentCloud\Irp\V20220324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 画像信息
 *
 * @method array getUserIdList() 获取用户id列表
 * @method void setUserIdList(array $UserIdList) 设置用户id列表
 * @method string getAppId() 获取如果"userIdType"是10则必传，在微信开放平台上查看appId
 * @method void setAppId(string $AppId) 设置如果"userIdType"是10则必传，在微信开放平台上查看appId
 * @method integer getAge() 获取用户年龄，值域在 0-200
 * @method void setAge(integer $Age) 设置用户年龄，值域在 0-200
 * @method integer getGender() 获取用户性别：0-未知，1-男， 2-女
 * @method void setGender(integer $Gender) 设置用户性别：0-未知，1-男， 2-女
 * @method string getDegree() 获取用户学历 ：小学，初中，高中，大专，本科，硕士，博士
 * @method void setDegree(string $Degree) 设置用户学历 ：小学，初中，高中，大专，本科，硕士，博士
 * @method string getSchool() 获取用户毕业学校全称
 * @method void setSchool(string $School) 设置用户毕业学校全称
 * @method string getOccupation() 获取用户职业，保证业务的唯一性
 * @method void setOccupation(string $Occupation) 设置用户职业，保证业务的唯一性
 * @method string getIndustry() 获取用户所属行业，保证业务的唯一性
 * @method void setIndustry(string $Industry) 设置用户所属行业，保证业务的唯一性
 * @method string getResidentCountry() 获取用户常驻国家，统一用简写，比如中国则填写CN
 * @method void setResidentCountry(string $ResidentCountry) 设置用户常驻国家，统一用简写，比如中国则填写CN
 * @method string getResidentProvince() 获取用户常驻省份
 * @method void setResidentProvince(string $ResidentProvince) 设置用户常驻省份
 * @method string getResidentCity() 获取用户常驻城市
 * @method void setResidentCity(string $ResidentCity) 设置用户常驻城市
 * @method string getResidentDistrict() 获取用户常驻区县
 * @method void setResidentDistrict(string $ResidentDistrict) 设置用户常驻区县
 * @method string getPhoneMd5() 获取用户手机的MD5值
 * @method void setPhoneMd5(string $PhoneMd5) 设置用户手机的MD5值
 * @method string getPhoneImei() 获取用户手机的IMEI号
 * @method void setPhoneImei(string $PhoneImei) 设置用户手机的IMEI号
 * @method string getIdfa() 获取设备idfa信息
 * @method void setIdfa(string $Idfa) 设置设备idfa信息
 * @method integer getRegisterTimestamp() 获取用户注册时间，秒级时间戳（1639624786）
 * @method void setRegisterTimestamp(integer $RegisterTimestamp) 设置用户注册时间，秒级时间戳（1639624786）
 * @method string getMembershipLevel() 获取用户会员等级
 * @method void setMembershipLevel(string $MembershipLevel) 设置用户会员等级
 * @method integer getLastLoginTimestamp() 获取用户上一次登录时间，秒级时间戳（1639624786）
 * @method void setLastLoginTimestamp(integer $LastLoginTimestamp) 设置用户上一次登录时间，秒级时间戳（1639624786）
 * @method string getLastLoginIp() 获取用户上一次登录的ip
 * @method void setLastLoginIp(string $LastLoginIp) 设置用户上一次登录的ip
 * @method integer getLastModifyTimestamp() 获取用户信息的最后修改时间戳，秒级时间戳（1639624786）
 * @method void setLastModifyTimestamp(integer $LastModifyTimestamp) 设置用户信息的最后修改时间戳，秒级时间戳（1639624786）
 * @method array getTagInfoList() 获取用户标签
 * @method void setTagInfoList(array $TagInfoList) 设置用户标签
 * @method array getAuthorInfoList() 获取用户关注作者列表
 * @method void setAuthorInfoList(array $AuthorInfoList) 设置用户关注作者列表
 * @method array getDislikeInfoList() 获取用户不喜欢列表
 * @method void setDislikeInfoList(array $DislikeInfoList) 设置用户不喜欢列表
 * @method string getExtension() 获取json字符串，用于画像数据的扩展
 * @method void setExtension(string $Extension) 设置json字符串，用于画像数据的扩展
 * @method string getOaid() 获取设备oaid信息
 * @method void setOaid(string $Oaid) 设置设备oaid信息
 * @method string getAndroidId() 获取设备AndroidId信息
 * @method void setAndroidId(string $AndroidId) 设置设备AndroidId信息
 */
class PortraitInfo extends AbstractModel
{
    /**
     * @var array 用户id列表
     */
    public $UserIdList;

    /**
     * @var string 如果"userIdType"是10则必传，在微信开放平台上查看appId
     */
    public $AppId;

    /**
     * @var integer 用户年龄，值域在 0-200
     */
    public $Age;

    /**
     * @var integer 用户性别：0-未知，1-男， 2-女
     */
    public $Gender;

    /**
     * @var string 用户学历 ：小学，初中，高中，大专，本科，硕士，博士
     */
    public $Degree;

    /**
     * @var string 用户毕业学校全称
     */
    public $School;

    /**
     * @var string 用户职业，保证业务的唯一性
     */
    public $Occupation;

    /**
     * @var string 用户所属行业，保证业务的唯一性
     */
    public $Industry;

    /**
     * @var string 用户常驻国家，统一用简写，比如中国则填写CN
     */
    public $ResidentCountry;

    /**
     * @var string 用户常驻省份
     */
    public $ResidentProvince;

    /**
     * @var string 用户常驻城市
     */
    public $ResidentCity;

    /**
     * @var string 用户常驻区县
     */
    public $ResidentDistrict;

    /**
     * @var string 用户手机的MD5值
     */
    public $PhoneMd5;

    /**
     * @var string 用户手机的IMEI号
     */
    public $PhoneImei;

    /**
     * @var string 设备idfa信息
     */
    public $Idfa;

    /**
     * @var integer 用户注册时间，秒级时间戳（1639624786）
     */
    public $RegisterTimestamp;

    /**
     * @var string 用户会员等级
     */
    public $MembershipLevel;

    /**
     * @var integer 用户上一次登录时间，秒级时间戳（1639624786）
     */
    public $LastLoginTimestamp;

    /**
     * @var string 用户上一次登录的ip
     */
    public $LastLoginIp;

    /**
     * @var integer 用户信息的最后修改时间戳，秒级时间戳（1639624786）
     */
    public $LastModifyTimestamp;

    /**
     * @var array 用户标签
     */
    public $TagInfoList;

    /**
     * @var array 用户关注作者列表
     */
    public $AuthorInfoList;

    /**
     * @var array 用户不喜欢列表
     */
    public $DislikeInfoList;

    /**
     * @var string json字符串，用于画像数据的扩展
     */
    public $Extension;

    /**
     * @var string 设备oaid信息
     */
    public $Oaid;

    /**
     * @var string 设备AndroidId信息
     */
    public $AndroidId;

    /**
     * @param array $UserIdList 用户id列表
     * @param string $AppId 如果"userIdType"是10则必传，在微信开放平台上查看appId
     * @param integer $Age 用户年龄，值域在 0-200
     * @param integer $Gender 用户性别：0-未知，1-男， 2-女
     * @param string $Degree 用户学历 ：小学，初中，高中，大专，本科，硕士，博士
     * @param string $School 用户毕业学校全称
     * @param string $Occupation 用户职业，保证业务的唯一性
     * @param string $Industry 用户所属行业，保证业务的唯一性
     * @param string $ResidentCountry 用户常驻国家，统一用简写，比如中国则填写CN
     * @param string $ResidentProvince 用户常驻省份
     * @param string $ResidentCity 用户常驻城市
     * @param string $ResidentDistrict 用户常驻区县
     * @param string $PhoneMd5 用户手机的MD5值
     * @param string $PhoneImei 用户手机的IMEI号
     * @param string $Idfa 设备idfa信息
     * @param integer $RegisterTimestamp 用户注册时间，秒级时间戳（1639624786）
     * @param string $MembershipLevel 用户会员等级
     * @param integer $LastLoginTimestamp 用户上一次登录时间，秒级时间戳（1639624786）
     * @param string $LastLoginIp 用户上一次登录的ip
     * @param integer $LastModifyTimestamp 用户信息的最后修改时间戳，秒级时间戳（1639624786）
     * @param array $TagInfoList 用户标签
     * @param array $AuthorInfoList 用户关注作者列表
     * @param array $DislikeInfoList 用户不喜欢列表
     * @param string $Extension json字符串，用于画像数据的扩展
     * @param string $Oaid 设备oaid信息
     * @param string $AndroidId 设备AndroidId信息
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
        if (array_key_exists("UserIdList",$param) and $param["UserIdList"] !== null) {
            $this->UserIdList = [];
            foreach ($param["UserIdList"] as $key => $value){
                $obj = new UserIdInfo();
                $obj->deserialize($value);
                array_push($this->UserIdList, $obj);
            }
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Degree",$param) and $param["Degree"] !== null) {
            $this->Degree = $param["Degree"];
        }

        if (array_key_exists("School",$param) and $param["School"] !== null) {
            $this->School = $param["School"];
        }

        if (array_key_exists("Occupation",$param) and $param["Occupation"] !== null) {
            $this->Occupation = $param["Occupation"];
        }

        if (array_key_exists("Industry",$param) and $param["Industry"] !== null) {
            $this->Industry = $param["Industry"];
        }

        if (array_key_exists("ResidentCountry",$param) and $param["ResidentCountry"] !== null) {
            $this->ResidentCountry = $param["ResidentCountry"];
        }

        if (array_key_exists("ResidentProvince",$param) and $param["ResidentProvince"] !== null) {
            $this->ResidentProvince = $param["ResidentProvince"];
        }

        if (array_key_exists("ResidentCity",$param) and $param["ResidentCity"] !== null) {
            $this->ResidentCity = $param["ResidentCity"];
        }

        if (array_key_exists("ResidentDistrict",$param) and $param["ResidentDistrict"] !== null) {
            $this->ResidentDistrict = $param["ResidentDistrict"];
        }

        if (array_key_exists("PhoneMd5",$param) and $param["PhoneMd5"] !== null) {
            $this->PhoneMd5 = $param["PhoneMd5"];
        }

        if (array_key_exists("PhoneImei",$param) and $param["PhoneImei"] !== null) {
            $this->PhoneImei = $param["PhoneImei"];
        }

        if (array_key_exists("Idfa",$param) and $param["Idfa"] !== null) {
            $this->Idfa = $param["Idfa"];
        }

        if (array_key_exists("RegisterTimestamp",$param) and $param["RegisterTimestamp"] !== null) {
            $this->RegisterTimestamp = $param["RegisterTimestamp"];
        }

        if (array_key_exists("MembershipLevel",$param) and $param["MembershipLevel"] !== null) {
            $this->MembershipLevel = $param["MembershipLevel"];
        }

        if (array_key_exists("LastLoginTimestamp",$param) and $param["LastLoginTimestamp"] !== null) {
            $this->LastLoginTimestamp = $param["LastLoginTimestamp"];
        }

        if (array_key_exists("LastLoginIp",$param) and $param["LastLoginIp"] !== null) {
            $this->LastLoginIp = $param["LastLoginIp"];
        }

        if (array_key_exists("LastModifyTimestamp",$param) and $param["LastModifyTimestamp"] !== null) {
            $this->LastModifyTimestamp = $param["LastModifyTimestamp"];
        }

        if (array_key_exists("TagInfoList",$param) and $param["TagInfoList"] !== null) {
            $this->TagInfoList = [];
            foreach ($param["TagInfoList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagInfoList, $obj);
            }
        }

        if (array_key_exists("AuthorInfoList",$param) and $param["AuthorInfoList"] !== null) {
            $this->AuthorInfoList = [];
            foreach ($param["AuthorInfoList"] as $key => $value){
                $obj = new AuthorInfo();
                $obj->deserialize($value);
                array_push($this->AuthorInfoList, $obj);
            }
        }

        if (array_key_exists("DislikeInfoList",$param) and $param["DislikeInfoList"] !== null) {
            $this->DislikeInfoList = [];
            foreach ($param["DislikeInfoList"] as $key => $value){
                $obj = new DislikeInfo();
                $obj->deserialize($value);
                array_push($this->DislikeInfoList, $obj);
            }
        }

        if (array_key_exists("Extension",$param) and $param["Extension"] !== null) {
            $this->Extension = $param["Extension"];
        }

        if (array_key_exists("Oaid",$param) and $param["Oaid"] !== null) {
            $this->Oaid = $param["Oaid"];
        }

        if (array_key_exists("AndroidId",$param) and $param["AndroidId"] !== null) {
            $this->AndroidId = $param["AndroidId"];
        }
    }
}
