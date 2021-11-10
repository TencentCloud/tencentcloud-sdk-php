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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResidenceBookletOCR返回参数结构体
 *
 * @method string getHouseholdNumber() 获取户号
 * @method void setHouseholdNumber(string $HouseholdNumber) 设置户号
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getSex() 获取性别
 * @method void setSex(string $Sex) 设置性别
 * @method string getBirthPlace() 获取出生地
 * @method void setBirthPlace(string $BirthPlace) 设置出生地
 * @method string getNation() 获取民族
 * @method void setNation(string $Nation) 设置民族
 * @method string getNativePlace() 获取籍贯
 * @method void setNativePlace(string $NativePlace) 设置籍贯
 * @method string getBirthDate() 获取出生日期
 * @method void setBirthDate(string $BirthDate) 设置出生日期
 * @method string getIdCardNumber() 获取公民身份证件编号
 * @method void setIdCardNumber(string $IdCardNumber) 设置公民身份证件编号
 * @method string getEducationDegree() 获取文化程度
 * @method void setEducationDegree(string $EducationDegree) 设置文化程度
 * @method string getServicePlace() 获取服务处所
 * @method void setServicePlace(string $ServicePlace) 设置服务处所
 * @method string getHousehold() 获取户别
 * @method void setHousehold(string $Household) 设置户别
 * @method string getAddress() 获取住址
 * @method void setAddress(string $Address) 设置住址
 * @method string getSignature() 获取承办人签章文字
 * @method void setSignature(string $Signature) 设置承办人签章文字
 * @method string getIssueDate() 获取签发日期
 * @method void setIssueDate(string $IssueDate) 设置签发日期
 * @method string getHomePageNumber() 获取户主页编号
 * @method void setHomePageNumber(string $HomePageNumber) 设置户主页编号
 * @method string getHouseholderName() 获取户主姓名
 * @method void setHouseholderName(string $HouseholderName) 设置户主姓名
 * @method string getRelationship() 获取户主或与户主关系
 * @method void setRelationship(string $Relationship) 设置户主或与户主关系
 * @method string getOtherAddresses() 获取本市（县）其他住址
 * @method void setOtherAddresses(string $OtherAddresses) 设置本市（县）其他住址
 * @method string getReligiousBelief() 获取宗教信仰
 * @method void setReligiousBelief(string $ReligiousBelief) 设置宗教信仰
 * @method string getHeight() 获取身高
 * @method void setHeight(string $Height) 设置身高
 * @method string getBloodType() 获取血型
 * @method void setBloodType(string $BloodType) 设置血型
 * @method string getMaritalStatus() 获取婚姻状况
 * @method void setMaritalStatus(string $MaritalStatus) 设置婚姻状况
 * @method string getVeteranStatus() 获取兵役状况
 * @method void setVeteranStatus(string $VeteranStatus) 设置兵役状况
 * @method string getProfession() 获取职业
 * @method void setProfession(string $Profession) 设置职业
 * @method string getMoveToCityInformation() 获取何时由何地迁来本市(县)
 * @method void setMoveToCityInformation(string $MoveToCityInformation) 设置何时由何地迁来本市(县)
 * @method string getMoveToSiteInformation() 获取何时由何地迁来本址
 * @method void setMoveToSiteInformation(string $MoveToSiteInformation) 设置何时由何地迁来本址
 * @method string getRegistrationDate() 获取登记日期
 * @method void setRegistrationDate(string $RegistrationDate) 设置登记日期
 * @method string getFormerName() 获取曾用名
 * @method void setFormerName(string $FormerName) 设置曾用名
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ResidenceBookletOCRResponse extends AbstractModel
{
    /**
     * @var string 户号
     */
    public $HouseholdNumber;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 性别
     */
    public $Sex;

    /**
     * @var string 出生地
     */
    public $BirthPlace;

    /**
     * @var string 民族
     */
    public $Nation;

    /**
     * @var string 籍贯
     */
    public $NativePlace;

    /**
     * @var string 出生日期
     */
    public $BirthDate;

    /**
     * @var string 公民身份证件编号
     */
    public $IdCardNumber;

    /**
     * @var string 文化程度
     */
    public $EducationDegree;

    /**
     * @var string 服务处所
     */
    public $ServicePlace;

    /**
     * @var string 户别
     */
    public $Household;

    /**
     * @var string 住址
     */
    public $Address;

    /**
     * @var string 承办人签章文字
     */
    public $Signature;

    /**
     * @var string 签发日期
     */
    public $IssueDate;

    /**
     * @var string 户主页编号
     */
    public $HomePageNumber;

    /**
     * @var string 户主姓名
     */
    public $HouseholderName;

    /**
     * @var string 户主或与户主关系
     */
    public $Relationship;

    /**
     * @var string 本市（县）其他住址
     */
    public $OtherAddresses;

    /**
     * @var string 宗教信仰
     */
    public $ReligiousBelief;

    /**
     * @var string 身高
     */
    public $Height;

    /**
     * @var string 血型
     */
    public $BloodType;

    /**
     * @var string 婚姻状况
     */
    public $MaritalStatus;

    /**
     * @var string 兵役状况
     */
    public $VeteranStatus;

    /**
     * @var string 职业
     */
    public $Profession;

    /**
     * @var string 何时由何地迁来本市(县)
     */
    public $MoveToCityInformation;

    /**
     * @var string 何时由何地迁来本址
     */
    public $MoveToSiteInformation;

    /**
     * @var string 登记日期
     */
    public $RegistrationDate;

    /**
     * @var string 曾用名
     */
    public $FormerName;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $HouseholdNumber 户号
     * @param string $Name 姓名
     * @param string $Sex 性别
     * @param string $BirthPlace 出生地
     * @param string $Nation 民族
     * @param string $NativePlace 籍贯
     * @param string $BirthDate 出生日期
     * @param string $IdCardNumber 公民身份证件编号
     * @param string $EducationDegree 文化程度
     * @param string $ServicePlace 服务处所
     * @param string $Household 户别
     * @param string $Address 住址
     * @param string $Signature 承办人签章文字
     * @param string $IssueDate 签发日期
     * @param string $HomePageNumber 户主页编号
     * @param string $HouseholderName 户主姓名
     * @param string $Relationship 户主或与户主关系
     * @param string $OtherAddresses 本市（县）其他住址
     * @param string $ReligiousBelief 宗教信仰
     * @param string $Height 身高
     * @param string $BloodType 血型
     * @param string $MaritalStatus 婚姻状况
     * @param string $VeteranStatus 兵役状况
     * @param string $Profession 职业
     * @param string $MoveToCityInformation 何时由何地迁来本市(县)
     * @param string $MoveToSiteInformation 何时由何地迁来本址
     * @param string $RegistrationDate 登记日期
     * @param string $FormerName 曾用名
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("HouseholdNumber",$param) and $param["HouseholdNumber"] !== null) {
            $this->HouseholdNumber = $param["HouseholdNumber"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("BirthPlace",$param) and $param["BirthPlace"] !== null) {
            $this->BirthPlace = $param["BirthPlace"];
        }

        if (array_key_exists("Nation",$param) and $param["Nation"] !== null) {
            $this->Nation = $param["Nation"];
        }

        if (array_key_exists("NativePlace",$param) and $param["NativePlace"] !== null) {
            $this->NativePlace = $param["NativePlace"];
        }

        if (array_key_exists("BirthDate",$param) and $param["BirthDate"] !== null) {
            $this->BirthDate = $param["BirthDate"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("EducationDegree",$param) and $param["EducationDegree"] !== null) {
            $this->EducationDegree = $param["EducationDegree"];
        }

        if (array_key_exists("ServicePlace",$param) and $param["ServicePlace"] !== null) {
            $this->ServicePlace = $param["ServicePlace"];
        }

        if (array_key_exists("Household",$param) and $param["Household"] !== null) {
            $this->Household = $param["Household"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Signature",$param) and $param["Signature"] !== null) {
            $this->Signature = $param["Signature"];
        }

        if (array_key_exists("IssueDate",$param) and $param["IssueDate"] !== null) {
            $this->IssueDate = $param["IssueDate"];
        }

        if (array_key_exists("HomePageNumber",$param) and $param["HomePageNumber"] !== null) {
            $this->HomePageNumber = $param["HomePageNumber"];
        }

        if (array_key_exists("HouseholderName",$param) and $param["HouseholderName"] !== null) {
            $this->HouseholderName = $param["HouseholderName"];
        }

        if (array_key_exists("Relationship",$param) and $param["Relationship"] !== null) {
            $this->Relationship = $param["Relationship"];
        }

        if (array_key_exists("OtherAddresses",$param) and $param["OtherAddresses"] !== null) {
            $this->OtherAddresses = $param["OtherAddresses"];
        }

        if (array_key_exists("ReligiousBelief",$param) and $param["ReligiousBelief"] !== null) {
            $this->ReligiousBelief = $param["ReligiousBelief"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("BloodType",$param) and $param["BloodType"] !== null) {
            $this->BloodType = $param["BloodType"];
        }

        if (array_key_exists("MaritalStatus",$param) and $param["MaritalStatus"] !== null) {
            $this->MaritalStatus = $param["MaritalStatus"];
        }

        if (array_key_exists("VeteranStatus",$param) and $param["VeteranStatus"] !== null) {
            $this->VeteranStatus = $param["VeteranStatus"];
        }

        if (array_key_exists("Profession",$param) and $param["Profession"] !== null) {
            $this->Profession = $param["Profession"];
        }

        if (array_key_exists("MoveToCityInformation",$param) and $param["MoveToCityInformation"] !== null) {
            $this->MoveToCityInformation = $param["MoveToCityInformation"];
        }

        if (array_key_exists("MoveToSiteInformation",$param) and $param["MoveToSiteInformation"] !== null) {
            $this->MoveToSiteInformation = $param["MoveToSiteInformation"];
        }

        if (array_key_exists("RegistrationDate",$param) and $param["RegistrationDate"] !== null) {
            $this->RegistrationDate = $param["RegistrationDate"];
        }

        if (array_key_exists("FormerName",$param) and $param["FormerName"] !== null) {
            $this->FormerName = $param["FormerName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
