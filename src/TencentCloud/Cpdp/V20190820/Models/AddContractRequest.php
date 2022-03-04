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
 * AddContract请求参数结构体
 *
 * @method string getOpenId() 获取收单系统分配的开放ID
 * @method void setOpenId(string $OpenId) 设置收单系统分配的开放ID
 * @method string getOpenKey() 获取收单系统分配的密钥
 * @method void setOpenKey(string $OpenKey) 设置收单系统分配的密钥
 * @method string getOutContractId() 获取机构合同主键（系统有唯一性校验），建议使用合同表的主键ID，防止重复添加合同
 * @method void setOutContractId(string $OutContractId) 设置机构合同主键（系统有唯一性校验），建议使用合同表的主键ID，防止重复添加合同
 * @method string getCode() 获取合同编号（系统有唯一性校验）
 * @method void setCode(string $Code) 设置合同编号（系统有唯一性校验）
 * @method string getPaymentId() 获取支付方式编号
 * @method void setPaymentId(string $PaymentId) 设置支付方式编号
 * @method string getPaymentClassificationId() 获取支付方式行业分类编号
 * @method void setPaymentClassificationId(string $PaymentClassificationId) 设置支付方式行业分类编号
 * @method string getPaymentClassificationLimit() 获取封顶值（分为单位，无封顶填0）
 * @method void setPaymentClassificationLimit(string $PaymentClassificationLimit) 设置封顶值（分为单位，无封顶填0）
 * @method string getMerchantNo() 获取商户编号
 * @method void setMerchantNo(string $MerchantNo) 设置商户编号
 * @method string getFee() 获取签约扣率百分比（如：0.32）
 * @method void setFee(string $Fee) 设置签约扣率百分比（如：0.32）
 * @method string getStartDate() 获取合同生效日期（yyyy-mm-dd）
 * @method void setStartDate(string $StartDate) 设置合同生效日期（yyyy-mm-dd）
 * @method string getEndDate() 获取合同过期日期（yyyy-mm-dd）
 * @method void setEndDate(string $EndDate) 设置合同过期日期（yyyy-mm-dd）
 * @method string getSignMan() 获取合同签约人
 * @method void setSignMan(string $SignMan) 设置合同签约人
 * @method string getSignName() 获取签购单名称，建议使用商户招牌名称
 * @method void setSignName(string $SignName) 设置签购单名称，建议使用商户招牌名称
 * @method string getSignDate() 获取合同签署日期（yyyy-mm-dd）
 * @method void setSignDate(string $SignDate) 设置合同签署日期（yyyy-mm-dd）
 * @method string getAutoSign() 获取是否自动续签（1是，0否）
 * @method void setAutoSign(string $AutoSign) 设置是否自动续签（1是，0否）
 * @method string getContact() 获取联系人
 * @method void setContact(string $Contact) 设置联系人
 * @method string getContactTelephone() 获取联系人电话
 * @method void setContactTelephone(string $ContactTelephone) 设置联系人电话
 * @method string getPictureOne() 获取合同照片【私密区】
 * @method void setPictureOne(string $PictureOne) 设置合同照片【私密区】
 * @method string getPictureTwo() 获取合同照片【私密区】
 * @method void setPictureTwo(string $PictureTwo) 设置合同照片【私密区】
 * @method string getChannelExtJson() 获取渠道扩展字段，json格式
 * @method void setChannelExtJson(string $ChannelExtJson) 设置渠道扩展字段，json格式
 * @method string getProfile() 获取沙箱环境填sandbox，正式环境不填
 * @method void setProfile(string $Profile) 设置沙箱环境填sandbox，正式环境不填
 * @method string getPaymentOptionOne() 获取合同选项1（不同支付方式规则不一样，请以支付方式规定的格式传值）
 * @method void setPaymentOptionOne(string $PaymentOptionOne) 设置合同选项1（不同支付方式规则不一样，请以支付方式规定的格式传值）
 * @method string getPaymentOptionTwo() 获取合同选项2（不同支付方式规则不一样，请以支付方式规定的格式传值）
 * @method void setPaymentOptionTwo(string $PaymentOptionTwo) 设置合同选项2（不同支付方式规则不一样，请以支付方式规定的格式传值）
 * @method string getPaymentOptionThree() 获取合同选项3（不同支付方式规则不一样，请以支付方式规定的格式传值）
 * @method void setPaymentOptionThree(string $PaymentOptionThree) 设置合同选项3（不同支付方式规则不一样，请以支付方式规定的格式传值）
 * @method string getPaymentOptionFour() 获取合同选项4（不同支付方式规则不一样，请以支付方式规定的格式传值）
 * @method void setPaymentOptionFour(string $PaymentOptionFour) 设置合同选项4（不同支付方式规则不一样，请以支付方式规定的格式传值）
 * @method string getPaymentOptionFive() 获取合同证书选项1（不同支付方式规则不一样，请以支付方式规定的格式传值）
 * @method void setPaymentOptionFive(string $PaymentOptionFive) 设置合同证书选项1（不同支付方式规则不一样，请以支付方式规定的格式传值）
 * @method string getPaymentOptionSix() 获取合同证书选项2（不同支付方式规则不一样，请以支付方式规定的格式传值）
 * @method void setPaymentOptionSix(string $PaymentOptionSix) 设置合同证书选项2（不同支付方式规则不一样，请以支付方式规定的格式传值）
 * @method string getPaymentOptionSeven() 获取合同选项5（不同支付方式规则不一样，请以支付方式规定的格式传值）
 * @method void setPaymentOptionSeven(string $PaymentOptionSeven) 设置合同选项5（不同支付方式规则不一样，请以支付方式规定的格式传值）
 * @method string getPaymentOptionOther() 获取合同选项6（不同支付方式规则不一样，请以支付方式规定的格式传值）
 * @method void setPaymentOptionOther(string $PaymentOptionOther) 设置合同选项6（不同支付方式规则不一样，请以支付方式规定的格式传值）
 * @method string getPaymentOptionTen() 获取合同选项8
 * @method void setPaymentOptionTen(string $PaymentOptionTen) 设置合同选项8
 * @method string getPaymentOptionNine() 获取合同选项7（不同支付方式规则不一样，请以支付方式规定的格式传值）
 * @method void setPaymentOptionNine(string $PaymentOptionNine) 设置合同选项7（不同支付方式规则不一样，请以支付方式规定的格式传值）
 */
class AddContractRequest extends AbstractModel
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
     * @var string 机构合同主键（系统有唯一性校验），建议使用合同表的主键ID，防止重复添加合同
     */
    public $OutContractId;

    /**
     * @var string 合同编号（系统有唯一性校验）
     */
    public $Code;

    /**
     * @var string 支付方式编号
     */
    public $PaymentId;

    /**
     * @var string 支付方式行业分类编号
     */
    public $PaymentClassificationId;

    /**
     * @var string 封顶值（分为单位，无封顶填0）
     */
    public $PaymentClassificationLimit;

    /**
     * @var string 商户编号
     */
    public $MerchantNo;

    /**
     * @var string 签约扣率百分比（如：0.32）
     */
    public $Fee;

    /**
     * @var string 合同生效日期（yyyy-mm-dd）
     */
    public $StartDate;

    /**
     * @var string 合同过期日期（yyyy-mm-dd）
     */
    public $EndDate;

    /**
     * @var string 合同签约人
     */
    public $SignMan;

    /**
     * @var string 签购单名称，建议使用商户招牌名称
     */
    public $SignName;

    /**
     * @var string 合同签署日期（yyyy-mm-dd）
     */
    public $SignDate;

    /**
     * @var string 是否自动续签（1是，0否）
     */
    public $AutoSign;

    /**
     * @var string 联系人
     */
    public $Contact;

    /**
     * @var string 联系人电话
     */
    public $ContactTelephone;

    /**
     * @var string 合同照片【私密区】
     */
    public $PictureOne;

    /**
     * @var string 合同照片【私密区】
     */
    public $PictureTwo;

    /**
     * @var string 渠道扩展字段，json格式
     */
    public $ChannelExtJson;

    /**
     * @var string 沙箱环境填sandbox，正式环境不填
     */
    public $Profile;

    /**
     * @var string 合同选项1（不同支付方式规则不一样，请以支付方式规定的格式传值）
     */
    public $PaymentOptionOne;

    /**
     * @var string 合同选项2（不同支付方式规则不一样，请以支付方式规定的格式传值）
     */
    public $PaymentOptionTwo;

    /**
     * @var string 合同选项3（不同支付方式规则不一样，请以支付方式规定的格式传值）
     */
    public $PaymentOptionThree;

    /**
     * @var string 合同选项4（不同支付方式规则不一样，请以支付方式规定的格式传值）
     */
    public $PaymentOptionFour;

    /**
     * @var string 合同证书选项1（不同支付方式规则不一样，请以支付方式规定的格式传值）
     */
    public $PaymentOptionFive;

    /**
     * @var string 合同证书选项2（不同支付方式规则不一样，请以支付方式规定的格式传值）
     */
    public $PaymentOptionSix;

    /**
     * @var string 合同选项5（不同支付方式规则不一样，请以支付方式规定的格式传值）
     */
    public $PaymentOptionSeven;

    /**
     * @var string 合同选项6（不同支付方式规则不一样，请以支付方式规定的格式传值）
     */
    public $PaymentOptionOther;

    /**
     * @var string 合同选项8
     */
    public $PaymentOptionTen;

    /**
     * @var string 合同选项7（不同支付方式规则不一样，请以支付方式规定的格式传值）
     */
    public $PaymentOptionNine;

    /**
     * @param string $OpenId 收单系统分配的开放ID
     * @param string $OpenKey 收单系统分配的密钥
     * @param string $OutContractId 机构合同主键（系统有唯一性校验），建议使用合同表的主键ID，防止重复添加合同
     * @param string $Code 合同编号（系统有唯一性校验）
     * @param string $PaymentId 支付方式编号
     * @param string $PaymentClassificationId 支付方式行业分类编号
     * @param string $PaymentClassificationLimit 封顶值（分为单位，无封顶填0）
     * @param string $MerchantNo 商户编号
     * @param string $Fee 签约扣率百分比（如：0.32）
     * @param string $StartDate 合同生效日期（yyyy-mm-dd）
     * @param string $EndDate 合同过期日期（yyyy-mm-dd）
     * @param string $SignMan 合同签约人
     * @param string $SignName 签购单名称，建议使用商户招牌名称
     * @param string $SignDate 合同签署日期（yyyy-mm-dd）
     * @param string $AutoSign 是否自动续签（1是，0否）
     * @param string $Contact 联系人
     * @param string $ContactTelephone 联系人电话
     * @param string $PictureOne 合同照片【私密区】
     * @param string $PictureTwo 合同照片【私密区】
     * @param string $ChannelExtJson 渠道扩展字段，json格式
     * @param string $Profile 沙箱环境填sandbox，正式环境不填
     * @param string $PaymentOptionOne 合同选项1（不同支付方式规则不一样，请以支付方式规定的格式传值）
     * @param string $PaymentOptionTwo 合同选项2（不同支付方式规则不一样，请以支付方式规定的格式传值）
     * @param string $PaymentOptionThree 合同选项3（不同支付方式规则不一样，请以支付方式规定的格式传值）
     * @param string $PaymentOptionFour 合同选项4（不同支付方式规则不一样，请以支付方式规定的格式传值）
     * @param string $PaymentOptionFive 合同证书选项1（不同支付方式规则不一样，请以支付方式规定的格式传值）
     * @param string $PaymentOptionSix 合同证书选项2（不同支付方式规则不一样，请以支付方式规定的格式传值）
     * @param string $PaymentOptionSeven 合同选项5（不同支付方式规则不一样，请以支付方式规定的格式传值）
     * @param string $PaymentOptionOther 合同选项6（不同支付方式规则不一样，请以支付方式规定的格式传值）
     * @param string $PaymentOptionTen 合同选项8
     * @param string $PaymentOptionNine 合同选项7（不同支付方式规则不一样，请以支付方式规定的格式传值）
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

        if (array_key_exists("OutContractId",$param) and $param["OutContractId"] !== null) {
            $this->OutContractId = $param["OutContractId"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("PaymentId",$param) and $param["PaymentId"] !== null) {
            $this->PaymentId = $param["PaymentId"];
        }

        if (array_key_exists("PaymentClassificationId",$param) and $param["PaymentClassificationId"] !== null) {
            $this->PaymentClassificationId = $param["PaymentClassificationId"];
        }

        if (array_key_exists("PaymentClassificationLimit",$param) and $param["PaymentClassificationLimit"] !== null) {
            $this->PaymentClassificationLimit = $param["PaymentClassificationLimit"];
        }

        if (array_key_exists("MerchantNo",$param) and $param["MerchantNo"] !== null) {
            $this->MerchantNo = $param["MerchantNo"];
        }

        if (array_key_exists("Fee",$param) and $param["Fee"] !== null) {
            $this->Fee = $param["Fee"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("SignMan",$param) and $param["SignMan"] !== null) {
            $this->SignMan = $param["SignMan"];
        }

        if (array_key_exists("SignName",$param) and $param["SignName"] !== null) {
            $this->SignName = $param["SignName"];
        }

        if (array_key_exists("SignDate",$param) and $param["SignDate"] !== null) {
            $this->SignDate = $param["SignDate"];
        }

        if (array_key_exists("AutoSign",$param) and $param["AutoSign"] !== null) {
            $this->AutoSign = $param["AutoSign"];
        }

        if (array_key_exists("Contact",$param) and $param["Contact"] !== null) {
            $this->Contact = $param["Contact"];
        }

        if (array_key_exists("ContactTelephone",$param) and $param["ContactTelephone"] !== null) {
            $this->ContactTelephone = $param["ContactTelephone"];
        }

        if (array_key_exists("PictureOne",$param) and $param["PictureOne"] !== null) {
            $this->PictureOne = $param["PictureOne"];
        }

        if (array_key_exists("PictureTwo",$param) and $param["PictureTwo"] !== null) {
            $this->PictureTwo = $param["PictureTwo"];
        }

        if (array_key_exists("ChannelExtJson",$param) and $param["ChannelExtJson"] !== null) {
            $this->ChannelExtJson = $param["ChannelExtJson"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("PaymentOptionOne",$param) and $param["PaymentOptionOne"] !== null) {
            $this->PaymentOptionOne = $param["PaymentOptionOne"];
        }

        if (array_key_exists("PaymentOptionTwo",$param) and $param["PaymentOptionTwo"] !== null) {
            $this->PaymentOptionTwo = $param["PaymentOptionTwo"];
        }

        if (array_key_exists("PaymentOptionThree",$param) and $param["PaymentOptionThree"] !== null) {
            $this->PaymentOptionThree = $param["PaymentOptionThree"];
        }

        if (array_key_exists("PaymentOptionFour",$param) and $param["PaymentOptionFour"] !== null) {
            $this->PaymentOptionFour = $param["PaymentOptionFour"];
        }

        if (array_key_exists("PaymentOptionFive",$param) and $param["PaymentOptionFive"] !== null) {
            $this->PaymentOptionFive = $param["PaymentOptionFive"];
        }

        if (array_key_exists("PaymentOptionSix",$param) and $param["PaymentOptionSix"] !== null) {
            $this->PaymentOptionSix = $param["PaymentOptionSix"];
        }

        if (array_key_exists("PaymentOptionSeven",$param) and $param["PaymentOptionSeven"] !== null) {
            $this->PaymentOptionSeven = $param["PaymentOptionSeven"];
        }

        if (array_key_exists("PaymentOptionOther",$param) and $param["PaymentOptionOther"] !== null) {
            $this->PaymentOptionOther = $param["PaymentOptionOther"];
        }

        if (array_key_exists("PaymentOptionTen",$param) and $param["PaymentOptionTen"] !== null) {
            $this->PaymentOptionTen = $param["PaymentOptionTen"];
        }

        if (array_key_exists("PaymentOptionNine",$param) and $param["PaymentOptionNine"] !== null) {
            $this->PaymentOptionNine = $param["PaymentOptionNine"];
        }
    }
}
