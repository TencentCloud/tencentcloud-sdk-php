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
namespace TencentCloud\Irp\V20220805\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 信息流用户信息
 *
 * @method string getUserId() 获取用户唯一ID，客户自定义用户ID，作为一个用户的唯一标识
 * @method void setUserId(string $UserId) 设置用户唯一ID，客户自定义用户ID，作为一个用户的唯一标识
 * @method array getUserIdList() 获取用户设备ID数组，可传入用户的多个类型ID，详见UserIdInfo结构体，建议补齐，<b>用于构建用户画像信息</b>
 * @method void setUserIdList(array $UserIdList) 设置用户设备ID数组，可传入用户的多个类型ID，详见UserIdInfo结构体，建议补齐，<b>用于构建用户画像信息</b>
 * @method string getTags() 获取用户标签，多个标签用英文冒号联接，<b>用作特征，强烈建议</b>
 * @method void setTags(string $Tags) 设置用户标签，多个标签用英文冒号联接，<b>用作特征，强烈建议</b>
 * @method array getDislikeInfoList() 获取过滤列表，<b>会在推荐结果里过滤掉这类内容</b>
 * @method void setDislikeInfoList(array $DislikeInfoList) 设置过滤列表，<b>会在推荐结果里过滤掉这类内容</b>
 * @method integer getAge() 获取用户年龄
 * @method void setAge(integer $Age) 设置用户年龄
 * @method integer getGender() 获取用户性别： 0 - 未知 1 - 男 2 - 女
 * @method void setGender(integer $Gender) 设置用户性别： 0 - 未知 1 - 男 2 - 女
 * @method string getDegree() 获取用户学历 ：小学，初中，高中，大专，本科，硕士，博士
 * @method void setDegree(string $Degree) 设置用户学历 ：小学，初中，高中，大专，本科，硕士，博士
 * @method string getSchool() 获取用户毕业学校全称
 * @method void setSchool(string $School) 设置用户毕业学校全称
 * @method string getOccupation() 获取用户职业
 * @method void setOccupation(string $Occupation) 设置用户职业
 * @method string getIndustry() 获取用户所属行业
 * @method void setIndustry(string $Industry) 设置用户所属行业
 * @method string getResidentCountry() 获取用户常驻国家，ISO 3166-1 alpha-2编码，参考<a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">ISO 3166-1 alpha-2</a>，中国：“CN”
 * @method void setResidentCountry(string $ResidentCountry) 设置用户常驻国家，ISO 3166-1 alpha-2编码，参考<a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">ISO 3166-1 alpha-2</a>，中国：“CN”
 * @method string getResidentProvince() 获取用户常驻省份，ISO 3166-2行政区编码，如中国参考<a href="https://zh.wikipedia.org/wiki/ISO_3166-2:CN" target="_blank">ISO_3166-2:CN</a>，广东省：“CN-GD”
 * @method void setResidentProvince(string $ResidentProvince) 设置用户常驻省份，ISO 3166-2行政区编码，如中国参考<a href="https://zh.wikipedia.org/wiki/ISO_3166-2:CN" target="_blank">ISO_3166-2:CN</a>，广东省：“CN-GD”
 * @method string getResidentCity() 获取用户常驻城市，统一用国家最新标准地区行政编码，如：<a href="https://www.mca.gov.cn/article/sj/xzqh/2020/" target="_blank">2020年行政区编码</a>，
 * @method void setResidentCity(string $ResidentCity) 设置用户常驻城市，统一用国家最新标准地区行政编码，如：<a href="https://www.mca.gov.cn/article/sj/xzqh/2020/" target="_blank">2020年行政区编码</a>，
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
 * @method string getExtension() 获取json字符串，用于画像数据的扩展，需要base64加密
 * @method void setExtension(string $Extension) 设置json字符串，用于画像数据的扩展，需要base64加密
 */
class FeedUserInfo extends AbstractModel
{
    /**
     * @var string 用户唯一ID，客户自定义用户ID，作为一个用户的唯一标识
     */
    public $UserId;

    /**
     * @var array 用户设备ID数组，可传入用户的多个类型ID，详见UserIdInfo结构体，建议补齐，<b>用于构建用户画像信息</b>
     */
    public $UserIdList;

    /**
     * @var string 用户标签，多个标签用英文冒号联接，<b>用作特征，强烈建议</b>
     */
    public $Tags;

    /**
     * @var array 过滤列表，<b>会在推荐结果里过滤掉这类内容</b>
     */
    public $DislikeInfoList;

    /**
     * @var integer 用户年龄
     */
    public $Age;

    /**
     * @var integer 用户性别： 0 - 未知 1 - 男 2 - 女
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
     * @var string 用户职业
     */
    public $Occupation;

    /**
     * @var string 用户所属行业
     */
    public $Industry;

    /**
     * @var string 用户常驻国家，ISO 3166-1 alpha-2编码，参考<a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">ISO 3166-1 alpha-2</a>，中国：“CN”
     */
    public $ResidentCountry;

    /**
     * @var string 用户常驻省份，ISO 3166-2行政区编码，如中国参考<a href="https://zh.wikipedia.org/wiki/ISO_3166-2:CN" target="_blank">ISO_3166-2:CN</a>，广东省：“CN-GD”
     */
    public $ResidentProvince;

    /**
     * @var string 用户常驻城市，统一用国家最新标准地区行政编码，如：<a href="https://www.mca.gov.cn/article/sj/xzqh/2020/" target="_blank">2020年行政区编码</a>，
     */
    public $ResidentCity;

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
     * @var string json字符串，用于画像数据的扩展，需要base64加密
     */
    public $Extension;

    /**
     * @param string $UserId 用户唯一ID，客户自定义用户ID，作为一个用户的唯一标识
     * @param array $UserIdList 用户设备ID数组，可传入用户的多个类型ID，详见UserIdInfo结构体，建议补齐，<b>用于构建用户画像信息</b>
     * @param string $Tags 用户标签，多个标签用英文冒号联接，<b>用作特征，强烈建议</b>
     * @param array $DislikeInfoList 过滤列表，<b>会在推荐结果里过滤掉这类内容</b>
     * @param integer $Age 用户年龄
     * @param integer $Gender 用户性别： 0 - 未知 1 - 男 2 - 女
     * @param string $Degree 用户学历 ：小学，初中，高中，大专，本科，硕士，博士
     * @param string $School 用户毕业学校全称
     * @param string $Occupation 用户职业
     * @param string $Industry 用户所属行业
     * @param string $ResidentCountry 用户常驻国家，ISO 3166-1 alpha-2编码，参考<a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">ISO 3166-1 alpha-2</a>，中国：“CN”
     * @param string $ResidentProvince 用户常驻省份，ISO 3166-2行政区编码，如中国参考<a href="https://zh.wikipedia.org/wiki/ISO_3166-2:CN" target="_blank">ISO_3166-2:CN</a>，广东省：“CN-GD”
     * @param string $ResidentCity 用户常驻城市，统一用国家最新标准地区行政编码，如：<a href="https://www.mca.gov.cn/article/sj/xzqh/2020/" target="_blank">2020年行政区编码</a>，
     * @param integer $RegisterTimestamp 用户注册时间，秒级时间戳（1639624786）
     * @param string $MembershipLevel 用户会员等级
     * @param integer $LastLoginTimestamp 用户上一次登录时间，秒级时间戳（1639624786）
     * @param string $LastLoginIp 用户上一次登录的ip
     * @param integer $LastModifyTimestamp 用户信息的最后修改时间戳，秒级时间戳（1639624786）
     * @param string $Extension json字符串，用于画像数据的扩展，需要base64加密
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

        if (array_key_exists("UserIdList",$param) and $param["UserIdList"] !== null) {
            $this->UserIdList = [];
            foreach ($param["UserIdList"] as $key => $value){
                $obj = new UserIdInfo();
                $obj->deserialize($value);
                array_push($this->UserIdList, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("DislikeInfoList",$param) and $param["DislikeInfoList"] !== null) {
            $this->DislikeInfoList = [];
            foreach ($param["DislikeInfoList"] as $key => $value){
                $obj = new DislikeInfo();
                $obj->deserialize($value);
                array_push($this->DislikeInfoList, $obj);
            }
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

        if (array_key_exists("Extension",$param) and $param["Extension"] !== null) {
            $this->Extension = $param["Extension"];
        }
    }
}
