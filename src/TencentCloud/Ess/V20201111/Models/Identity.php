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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主体信息
 *
 * @method string getCreditCode() 获取统一社会信用代码
 * @method void setCreditCode(string $CreditCode) 设置统一社会信用代码
 * @method string getOrgCode() 获取组织机构代码
 * @method void setOrgCode(string $OrgCode) 设置组织机构代码
 * @method string getRegNo() 获取营业执照注册编号
 * @method void setRegNo(string $RegNo) 设置营业执照注册编号
 * @method string getEntName() 获取企业名称
 * @method void setEntName(string $EntName) 设置企业名称
 * @method string getLegalRepName() 获取修改人法人代表姓名
 * @method void setLegalRepName(string $LegalRepName) 设置修改人法人代表姓名
 * @method string getOpState() 获取渠道经营状态
 * @method void setOpState(string $OpState) 设置渠道经营状态
 * @method string getOpFromDate() 获取经营期限自(格式YYYY-MM-DD)
 * @method void setOpFromDate(string $OpFromDate) 设置经营期限自(格式YYYY-MM-DD)
 * @method string getOpToDate() 获取经营期限至
 * @method void setOpToDate(string $OpToDate) 设置经营期限至
 * @method string getEstabDate() 获取成立日期(格式YYYY-MM-DD)
 * @method void setEstabDate(string $EstabDate) 设置成立日期(格式YYYY-MM-DD)
 * @method string getApprDate() 获取核准日期(格式YYYY-MM-DD)
 * @method void setApprDate(string $ApprDate) 设置核准日期(格式YYYY-MM-DD)
 * @method string getRevoDate() 获取吊销日期(格式YYYY-MM-DD)
 * @method void setRevoDate(string $RevoDate) 设置吊销日期(格式YYYY-MM-DD)
 * @method string getCancelDate() 获取注销日期(格式YYYY-MM-DD)
 * @method void setCancelDate(string $CancelDate) 设置注销日期(格式YYYY-MM-DD)
 * @method string getRegOrg() 获取登记机关
 * @method void setRegOrg(string $RegOrg) 设置登记机关
 * @method string getEntTypeCode() 获取企业类型编码
 * @method void setEntTypeCode(string $EntTypeCode) 设置企业类型编码
 * @method string getEntType() 获取企业类型
 * @method void setEntType(string $EntType) 设置企业类型
 * @method string getBizScope() 获取经营业务范围
 * @method void setBizScope(string $BizScope) 设置经营业务范围
 * @method string getLicenseBizItem() 获取许可经营项目
 * @method void setLicenseBizItem(string $LicenseBizItem) 设置许可经营项目
 * @method string getRegAreaCode() 获取注册地址行政编号
 * @method void setRegAreaCode(string $RegAreaCode) 设置注册地址行政编号
 * @method string getRegAddress() 获取注册地址
 * @method void setRegAddress(string $RegAddress) 设置注册地址
 * @method string getRegCapitalCurtype() 获取注册资本币种
 * @method void setRegCapitalCurtype(string $RegCapitalCurtype) 设置注册资本币种
 * @method string getRegCapital() 获取注册资本（万元）
 * @method void setRegCapital(string $RegCapital) 设置注册资本（万元）
 * @method string getPaidCapital() 获取实收资本（万元）
 * @method void setPaidCapital(string $PaidCapital) 设置实收资本（万元）
 * @method string getOriRegNo() 获取原注册号
 * @method void setOriRegNo(string $OriRegNo) 设置原注册号
 * @method string getEntNameEng() 获取企业英文名称
 * @method void setEntNameEng(string $EntNameEng) 设置企业英文名称
 * @method string getOriEntName() 获取曾用名
 * @method void setOriEntName(string $OriEntName) 设置曾用名
 * @method integer getOpStateCode() 获取企业经营状态枚举。常见值如下：
未定义的状态 = 0
正常  = 1
注销 = 2
吊销 = 3
吊销后注销 = 4
撤销 = 5
其他 = 99
 * @method void setOpStateCode(integer $OpStateCode) 设置企业经营状态枚举。常见值如下：
未定义的状态 = 0
正常  = 1
注销 = 2
吊销 = 3
吊销后注销 = 4
撤销 = 5
其他 = 99
 * @method string getSearchDate() 获取查询日期(格式YYYY-MM-DD)
 * @method void setSearchDate(string $SearchDate) 设置查询日期(格式YYYY-MM-DD)
 */
class Identity extends AbstractModel
{
    /**
     * @var string 统一社会信用代码
     */
    public $CreditCode;

    /**
     * @var string 组织机构代码
     */
    public $OrgCode;

    /**
     * @var string 营业执照注册编号
     */
    public $RegNo;

    /**
     * @var string 企业名称
     */
    public $EntName;

    /**
     * @var string 修改人法人代表姓名
     */
    public $LegalRepName;

    /**
     * @var string 渠道经营状态
     */
    public $OpState;

    /**
     * @var string 经营期限自(格式YYYY-MM-DD)
     */
    public $OpFromDate;

    /**
     * @var string 经营期限至
     */
    public $OpToDate;

    /**
     * @var string 成立日期(格式YYYY-MM-DD)
     */
    public $EstabDate;

    /**
     * @var string 核准日期(格式YYYY-MM-DD)
     */
    public $ApprDate;

    /**
     * @var string 吊销日期(格式YYYY-MM-DD)
     */
    public $RevoDate;

    /**
     * @var string 注销日期(格式YYYY-MM-DD)
     */
    public $CancelDate;

    /**
     * @var string 登记机关
     */
    public $RegOrg;

    /**
     * @var string 企业类型编码
     */
    public $EntTypeCode;

    /**
     * @var string 企业类型
     */
    public $EntType;

    /**
     * @var string 经营业务范围
     */
    public $BizScope;

    /**
     * @var string 许可经营项目
     */
    public $LicenseBizItem;

    /**
     * @var string 注册地址行政编号
     */
    public $RegAreaCode;

    /**
     * @var string 注册地址
     */
    public $RegAddress;

    /**
     * @var string 注册资本币种
     */
    public $RegCapitalCurtype;

    /**
     * @var string 注册资本（万元）
     */
    public $RegCapital;

    /**
     * @var string 实收资本（万元）
     */
    public $PaidCapital;

    /**
     * @var string 原注册号
     */
    public $OriRegNo;

    /**
     * @var string 企业英文名称
     */
    public $EntNameEng;

    /**
     * @var string 曾用名
     */
    public $OriEntName;

    /**
     * @var integer 企业经营状态枚举。常见值如下：
未定义的状态 = 0
正常  = 1
注销 = 2
吊销 = 3
吊销后注销 = 4
撤销 = 5
其他 = 99
     */
    public $OpStateCode;

    /**
     * @var string 查询日期(格式YYYY-MM-DD)
     */
    public $SearchDate;

    /**
     * @param string $CreditCode 统一社会信用代码
     * @param string $OrgCode 组织机构代码
     * @param string $RegNo 营业执照注册编号
     * @param string $EntName 企业名称
     * @param string $LegalRepName 修改人法人代表姓名
     * @param string $OpState 渠道经营状态
     * @param string $OpFromDate 经营期限自(格式YYYY-MM-DD)
     * @param string $OpToDate 经营期限至
     * @param string $EstabDate 成立日期(格式YYYY-MM-DD)
     * @param string $ApprDate 核准日期(格式YYYY-MM-DD)
     * @param string $RevoDate 吊销日期(格式YYYY-MM-DD)
     * @param string $CancelDate 注销日期(格式YYYY-MM-DD)
     * @param string $RegOrg 登记机关
     * @param string $EntTypeCode 企业类型编码
     * @param string $EntType 企业类型
     * @param string $BizScope 经营业务范围
     * @param string $LicenseBizItem 许可经营项目
     * @param string $RegAreaCode 注册地址行政编号
     * @param string $RegAddress 注册地址
     * @param string $RegCapitalCurtype 注册资本币种
     * @param string $RegCapital 注册资本（万元）
     * @param string $PaidCapital 实收资本（万元）
     * @param string $OriRegNo 原注册号
     * @param string $EntNameEng 企业英文名称
     * @param string $OriEntName 曾用名
     * @param integer $OpStateCode 企业经营状态枚举。常见值如下：
未定义的状态 = 0
正常  = 1
注销 = 2
吊销 = 3
吊销后注销 = 4
撤销 = 5
其他 = 99
     * @param string $SearchDate 查询日期(格式YYYY-MM-DD)
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
        if (array_key_exists("CreditCode",$param) and $param["CreditCode"] !== null) {
            $this->CreditCode = $param["CreditCode"];
        }

        if (array_key_exists("OrgCode",$param) and $param["OrgCode"] !== null) {
            $this->OrgCode = $param["OrgCode"];
        }

        if (array_key_exists("RegNo",$param) and $param["RegNo"] !== null) {
            $this->RegNo = $param["RegNo"];
        }

        if (array_key_exists("EntName",$param) and $param["EntName"] !== null) {
            $this->EntName = $param["EntName"];
        }

        if (array_key_exists("LegalRepName",$param) and $param["LegalRepName"] !== null) {
            $this->LegalRepName = $param["LegalRepName"];
        }

        if (array_key_exists("OpState",$param) and $param["OpState"] !== null) {
            $this->OpState = $param["OpState"];
        }

        if (array_key_exists("OpFromDate",$param) and $param["OpFromDate"] !== null) {
            $this->OpFromDate = $param["OpFromDate"];
        }

        if (array_key_exists("OpToDate",$param) and $param["OpToDate"] !== null) {
            $this->OpToDate = $param["OpToDate"];
        }

        if (array_key_exists("EstabDate",$param) and $param["EstabDate"] !== null) {
            $this->EstabDate = $param["EstabDate"];
        }

        if (array_key_exists("ApprDate",$param) and $param["ApprDate"] !== null) {
            $this->ApprDate = $param["ApprDate"];
        }

        if (array_key_exists("RevoDate",$param) and $param["RevoDate"] !== null) {
            $this->RevoDate = $param["RevoDate"];
        }

        if (array_key_exists("CancelDate",$param) and $param["CancelDate"] !== null) {
            $this->CancelDate = $param["CancelDate"];
        }

        if (array_key_exists("RegOrg",$param) and $param["RegOrg"] !== null) {
            $this->RegOrg = $param["RegOrg"];
        }

        if (array_key_exists("EntTypeCode",$param) and $param["EntTypeCode"] !== null) {
            $this->EntTypeCode = $param["EntTypeCode"];
        }

        if (array_key_exists("EntType",$param) and $param["EntType"] !== null) {
            $this->EntType = $param["EntType"];
        }

        if (array_key_exists("BizScope",$param) and $param["BizScope"] !== null) {
            $this->BizScope = $param["BizScope"];
        }

        if (array_key_exists("LicenseBizItem",$param) and $param["LicenseBizItem"] !== null) {
            $this->LicenseBizItem = $param["LicenseBizItem"];
        }

        if (array_key_exists("RegAreaCode",$param) and $param["RegAreaCode"] !== null) {
            $this->RegAreaCode = $param["RegAreaCode"];
        }

        if (array_key_exists("RegAddress",$param) and $param["RegAddress"] !== null) {
            $this->RegAddress = $param["RegAddress"];
        }

        if (array_key_exists("RegCapitalCurtype",$param) and $param["RegCapitalCurtype"] !== null) {
            $this->RegCapitalCurtype = $param["RegCapitalCurtype"];
        }

        if (array_key_exists("RegCapital",$param) and $param["RegCapital"] !== null) {
            $this->RegCapital = $param["RegCapital"];
        }

        if (array_key_exists("PaidCapital",$param) and $param["PaidCapital"] !== null) {
            $this->PaidCapital = $param["PaidCapital"];
        }

        if (array_key_exists("OriRegNo",$param) and $param["OriRegNo"] !== null) {
            $this->OriRegNo = $param["OriRegNo"];
        }

        if (array_key_exists("EntNameEng",$param) and $param["EntNameEng"] !== null) {
            $this->EntNameEng = $param["EntNameEng"];
        }

        if (array_key_exists("OriEntName",$param) and $param["OriEntName"] !== null) {
            $this->OriEntName = $param["OriEntName"];
        }

        if (array_key_exists("OpStateCode",$param) and $param["OpStateCode"] !== null) {
            $this->OpStateCode = $param["OpStateCode"];
        }

        if (array_key_exists("SearchDate",$param) and $param["SearchDate"] !== null) {
            $this->SearchDate = $param["SearchDate"];
        }
    }
}
