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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 个人信息
 *
 * @method string getName() 获取姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGender() 获取性别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGender(string $Gender) 设置性别
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAge() 获取年龄
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAge(string $Age) 设置年龄
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIDCard() 获取身份证号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIDCard(string $IDCard) 设置身份证号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHealthCardNum() 获取健康卡号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCardNum(string $HealthCardNum) 设置健康卡号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSocialSecurityCardNum() 获取社保号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSocialSecurityCardNum(string $SocialSecurityCardNum) 设置社保号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBirthday() 获取出生日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirthday(string $Birthday) 设置出生日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEthnicity() 获取民族
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEthnicity(string $Ethnicity) 设置民族
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNationality() 获取国籍
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNationality(string $Nationality) 设置国籍
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMarried() 获取婚姻状况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMarried(string $Married) 设置婚姻状况
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProfession() 获取职业
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProfession(string $Profession) 设置职业
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEducationBackground() 获取教育程度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEducationBackground(string $EducationBackground) 设置教育程度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBirthPlace() 获取籍贯
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirthPlace(string $BirthPlace) 设置籍贯
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMedicalInsuranceType() 获取医保卡类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMedicalInsuranceType(string $MedicalInsuranceType) 设置医保卡类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLinkPhone() 获取联系电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkPhone(string $LinkPhone) 设置联系电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLinkAddress() 获取联系地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkAddress(string $LinkAddress) 设置联系地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKinsfolkName() 获取家属姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKinsfolkName(string $KinsfolkName) 设置家属姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKinsfolkRelation() 获取家属关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKinsfolkRelation(string $KinsfolkRelation) 设置家属关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKinsfolkPhone() 获取家属联系电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKinsfolkPhone(string $KinsfolkPhone) 设置家属联系电话
注意：此字段可能返回 null，表示取不到有效值。
 */
class PersonalInfo extends AbstractModel
{
    /**
     * @var string 姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 性别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gender;

    /**
     * @var string 年龄
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Age;

    /**
     * @var string 身份证号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IDCard;

    /**
     * @var string 健康卡号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCardNum;

    /**
     * @var string 社保号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SocialSecurityCardNum;

    /**
     * @var string 出生日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Birthday;

    /**
     * @var string 民族
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ethnicity;

    /**
     * @var string 国籍
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nationality;

    /**
     * @var string 婚姻状况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Married;

    /**
     * @var string 职业
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Profession;

    /**
     * @var string 教育程度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EducationBackground;

    /**
     * @var string 籍贯
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BirthPlace;

    /**
     * @var string 医保卡类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MedicalInsuranceType;

    /**
     * @var string 联系电话
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkPhone;

    /**
     * @var string 联系地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkAddress;

    /**
     * @var string 家属姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KinsfolkName;

    /**
     * @var string 家属关系
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KinsfolkRelation;

    /**
     * @var string 家属联系电话
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KinsfolkPhone;

    /**
     * @param string $Name 姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Gender 性别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Age 年龄
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IDCard 身份证号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HealthCardNum 健康卡号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SocialSecurityCardNum 社保号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Birthday 出生日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ethnicity 民族
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nationality 国籍
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Married 婚姻状况
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Profession 职业
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EducationBackground 教育程度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BirthPlace 籍贯
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MedicalInsuranceType 医保卡类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LinkPhone 联系电话
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LinkAddress 联系地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KinsfolkName 家属姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KinsfolkRelation 家属关系
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KinsfolkPhone 家属联系电话
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("IDCard",$param) and $param["IDCard"] !== null) {
            $this->IDCard = $param["IDCard"];
        }

        if (array_key_exists("HealthCardNum",$param) and $param["HealthCardNum"] !== null) {
            $this->HealthCardNum = $param["HealthCardNum"];
        }

        if (array_key_exists("SocialSecurityCardNum",$param) and $param["SocialSecurityCardNum"] !== null) {
            $this->SocialSecurityCardNum = $param["SocialSecurityCardNum"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Ethnicity",$param) and $param["Ethnicity"] !== null) {
            $this->Ethnicity = $param["Ethnicity"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("Married",$param) and $param["Married"] !== null) {
            $this->Married = $param["Married"];
        }

        if (array_key_exists("Profession",$param) and $param["Profession"] !== null) {
            $this->Profession = $param["Profession"];
        }

        if (array_key_exists("EducationBackground",$param) and $param["EducationBackground"] !== null) {
            $this->EducationBackground = $param["EducationBackground"];
        }

        if (array_key_exists("BirthPlace",$param) and $param["BirthPlace"] !== null) {
            $this->BirthPlace = $param["BirthPlace"];
        }

        if (array_key_exists("MedicalInsuranceType",$param) and $param["MedicalInsuranceType"] !== null) {
            $this->MedicalInsuranceType = $param["MedicalInsuranceType"];
        }

        if (array_key_exists("LinkPhone",$param) and $param["LinkPhone"] !== null) {
            $this->LinkPhone = $param["LinkPhone"];
        }

        if (array_key_exists("LinkAddress",$param) and $param["LinkAddress"] !== null) {
            $this->LinkAddress = $param["LinkAddress"];
        }

        if (array_key_exists("KinsfolkName",$param) and $param["KinsfolkName"] !== null) {
            $this->KinsfolkName = $param["KinsfolkName"];
        }

        if (array_key_exists("KinsfolkRelation",$param) and $param["KinsfolkRelation"] !== null) {
            $this->KinsfolkRelation = $param["KinsfolkRelation"];
        }

        if (array_key_exists("KinsfolkPhone",$param) and $param["KinsfolkPhone"] !== null) {
            $this->KinsfolkPhone = $param["KinsfolkPhone"];
        }
    }
}
