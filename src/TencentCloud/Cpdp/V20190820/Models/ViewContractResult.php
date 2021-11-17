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
 * 合同明细响应对象
 *
 * @method string getPaymentTag() 获取支付标签（唯一性）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentTag(string $PaymentTag) 设置支付标签（唯一性）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCity() 获取城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCity(string $City) 设置城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentNo() 获取机构编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentNo(string $AgentNo) 设置机构编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContractOptionFour() 获取合同选项值4
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContractOptionFour(string $ContractOptionFour) 设置合同选项值4
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContractOptionTwo() 获取合同选项值2
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContractOptionTwo(string $ContractOptionTwo) 设置合同选项值2
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取合同状态（0未审核，1已审核，2审核未通过，3待审核，4已删除，5初审通过）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置合同状态（0未审核，1已审核，2审核未通过，3待审核，4已删除，5初审通过）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentId() 获取支付方式编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentId(string $PaymentId) 设置支付方式编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFee() 获取商户签约扣率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFee(string $Fee) 设置商户签约扣率
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentOptionFive() 获取合同选项名称5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentOptionFive(string $PaymentOptionFive) 设置合同选项名称5
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutContractId() 获取机构合同主键
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutContractId(string $OutContractId) 设置机构合同主键
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelExtJson() 获取不同的支付方式对于进件有不同的个性化需求，支付方式字段都是以双下划写开头的字段名称，请以支付方式规定的格式传值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelExtJson(string $ChannelExtJson) 设置不同的支付方式对于进件有不同的个性化需求，支付方式字段都是以双下划写开头的字段名称，请以支付方式规定的格式传值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContractOptionFive() 获取合同选项值5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContractOptionFive(string $ContractOptionFive) 设置合同选项值5
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProvince() 获取省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvince(string $Province) 设置省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartDate() 获取生效日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartDate(string $StartDate) 设置生效日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取详细地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置详细地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndDate() 获取过期日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndDate(string $EndDate) 设置过期日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContractOptionSix() 获取合同选项值6
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContractOptionSix(string $ContractOptionSix) 设置合同选项值6
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentOptionSeven() 获取合同选项名称7
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentOptionSeven(string $PaymentOptionSeven) 设置合同选项名称7
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPictureTwo() 获取合同照片补充【私密区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPictureTwo(string $PictureTwo) 设置合同照片补充【私密区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMerchantNo() 获取商户编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMerchantNo(string $MerchantNo) 设置商户编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentName() 获取机构名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentName(string $AgentName) 设置机构名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContractOptionOther() 获取合同选项值8
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContractOptionOther(string $ContractOptionOther) 设置合同选项值8
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContractOptionThree() 获取合同选项值3
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContractOptionThree(string $ContractOptionThree) 设置合同选项值3
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCountry() 获取县/区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountry(string $Country) 设置县/区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShopCount() 获取合同关联的门店数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShopCount(string $ShopCount) 设置合同关联的门店数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentOptionThree() 获取合同选项名称3
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentOptionThree(string $PaymentOptionThree) 设置合同选项名称3
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentClassificationName() 获取支付方式行业名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentClassificationName(string $PaymentClassificationName) 设置支付方式行业名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContractOptionSeven() 获取合同选项值7
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContractOptionSeven(string $ContractOptionSeven) 设置合同选项值7
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentOptionFour() 获取合同选项名称4
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentOptionFour(string $PaymentOptionFour) 设置合同选项名称4
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentClassificationLimit() 获取商户签约扣率封顶值（分为单位）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentClassificationLimit(string $PaymentClassificationLimit) 设置商户签约扣率封顶值（分为单位）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取审核备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置审核备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentOptionSix() 获取合同选项名称6
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentOptionSix(string $PaymentOptionSix) 设置合同选项名称6
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMerchantName() 获取品牌名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMerchantName(string $MerchantName) 设置品牌名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContractOptionOne() 获取合同选项值1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContractOptionOne(string $ContractOptionOne) 设置合同选项值1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentOptionOther() 获取合同选项名称8
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentOptionOther(string $PaymentOptionOther) 设置合同选项名称8
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentOptionTwo() 获取合同选项名称2
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentOptionTwo(string $PaymentOptionTwo) 设置合同选项名称2
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentOptionOne() 获取合同选项名称1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentOptionOne(string $PaymentOptionOne) 设置合同选项名称1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContactTelephone() 获取联系人电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContactTelephone(string $ContactTelephone) 设置联系人电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContact() 获取联系人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContact(string $Contact) 设置联系人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSignDate() 获取签约日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignDate(string $SignDate) 设置签约日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentOptionNine() 获取合同选项名称9
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentOptionNine(string $PaymentOptionNine) 设置合同选项名称9
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentName() 获取付款方式名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentName(string $PaymentName) 设置付款方式名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentInternalName() 获取付款方式名称（内部名称）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentInternalName(string $PaymentInternalName) 设置付款方式名称（内部名称）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContractOptionTen() 获取合同选项值10
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContractOptionTen(string $ContractOptionTen) 设置合同选项值10
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCode() 获取合同编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置合同编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPictureOne() 获取合同照片【私密区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPictureOne(string $PictureOne) 设置合同照片【私密区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSignMan() 获取签约人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignMan(string $SignMan) 设置签约人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelNo() 获取渠道号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelNo(string $ChannelNo) 设置渠道号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddTime() 获取添加时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddTime(string $AddTime) 设置添加时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAutoSign() 获取是否自动续签（1是，0否）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoSign(string $AutoSign) 设置是否自动续签（1是，0否）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContractOptionNine() 获取合同选项值9
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContractOptionNine(string $ContractOptionNine) 设置合同选项值9
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCityId() 获取城市编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCityId(string $CityId) 设置城市编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentType() 获取交易类型（多个以小写逗号分开，0现金，1刷卡，2主扫，3被扫，4JSPAY，5预授权）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentType(string $PaymentType) 设置交易类型（多个以小写逗号分开，0现金，1刷卡，2主扫，3被扫，4JSPAY，5预授权）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentClassificationId() 获取支付方式行业编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentClassificationId(string $PaymentClassificationId) 设置支付方式行业编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrandName() 获取品牌名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrandName(string $BrandName) 设置品牌名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentOptionTen() 获取合同选项名称10
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentOptionTen(string $PaymentOptionTen) 设置合同选项名称10
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContractId() 获取合同主键
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContractId(string $ContractId) 设置合同主键
注意：此字段可能返回 null，表示取不到有效值。
 */
class ViewContractResult extends AbstractModel
{
    /**
     * @var string 支付标签（唯一性）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentTag;

    /**
     * @var string 城市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $City;

    /**
     * @var string 机构编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentNo;

    /**
     * @var string 合同选项值4
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContractOptionFour;

    /**
     * @var string 合同选项值2
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContractOptionTwo;

    /**
     * @var string 合同状态（0未审核，1已审核，2审核未通过，3待审核，4已删除，5初审通过）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 支付方式编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentId;

    /**
     * @var string 商户签约扣率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fee;

    /**
     * @var string 合同选项名称5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentOptionFive;

    /**
     * @var string 机构合同主键
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutContractId;

    /**
     * @var string 不同的支付方式对于进件有不同的个性化需求，支付方式字段都是以双下划写开头的字段名称，请以支付方式规定的格式传值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelExtJson;

    /**
     * @var string 合同选项值5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContractOptionFive;

    /**
     * @var string 省份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Province;

    /**
     * @var string 生效日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartDate;

    /**
     * @var string 详细地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string 过期日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndDate;

    /**
     * @var string 合同选项值6
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContractOptionSix;

    /**
     * @var string 合同选项名称7
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentOptionSeven;

    /**
     * @var string 合同照片补充【私密区】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PictureTwo;

    /**
     * @var string 商户编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MerchantNo;

    /**
     * @var string 机构名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentName;

    /**
     * @var string 合同选项值8
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContractOptionOther;

    /**
     * @var string 合同选项值3
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContractOptionThree;

    /**
     * @var string 县/区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Country;

    /**
     * @var string 合同关联的门店数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShopCount;

    /**
     * @var string 合同选项名称3
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentOptionThree;

    /**
     * @var string 支付方式行业名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentClassificationName;

    /**
     * @var string 合同选项值7
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContractOptionSeven;

    /**
     * @var string 合同选项名称4
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentOptionFour;

    /**
     * @var string 商户签约扣率封顶值（分为单位）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentClassificationLimit;

    /**
     * @var string 审核备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 合同选项名称6
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentOptionSix;

    /**
     * @var string 品牌名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MerchantName;

    /**
     * @var string 合同选项值1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContractOptionOne;

    /**
     * @var string 合同选项名称8
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentOptionOther;

    /**
     * @var string 合同选项名称2
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentOptionTwo;

    /**
     * @var string 合同选项名称1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentOptionOne;

    /**
     * @var string 更新时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 联系人电话
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContactTelephone;

    /**
     * @var string 联系人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Contact;

    /**
     * @var string 签约日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SignDate;

    /**
     * @var string 合同选项名称9
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentOptionNine;

    /**
     * @var string 付款方式名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentName;

    /**
     * @var string 付款方式名称（内部名称）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentInternalName;

    /**
     * @var string 合同选项值10
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContractOptionTen;

    /**
     * @var string 合同编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 合同照片【私密区】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PictureOne;

    /**
     * @var string 签约人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SignMan;

    /**
     * @var string 渠道号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelNo;

    /**
     * @var string 添加时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddTime;

    /**
     * @var string 是否自动续签（1是，0否）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoSign;

    /**
     * @var string 合同选项值9
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContractOptionNine;

    /**
     * @var string 城市编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CityId;

    /**
     * @var string 交易类型（多个以小写逗号分开，0现金，1刷卡，2主扫，3被扫，4JSPAY，5预授权）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentType;

    /**
     * @var string 支付方式行业编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentClassificationId;

    /**
     * @var string 品牌名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrandName;

    /**
     * @var string 合同选项名称10
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentOptionTen;

    /**
     * @var string 合同主键
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContractId;

    /**
     * @param string $PaymentTag 支付标签（唯一性）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $City 城市
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentNo 机构编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContractOptionFour 合同选项值4
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContractOptionTwo 合同选项值2
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 合同状态（0未审核，1已审核，2审核未通过，3待审核，4已删除，5初审通过）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentId 支付方式编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Fee 商户签约扣率
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentOptionFive 合同选项名称5
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutContractId 机构合同主键
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelExtJson 不同的支付方式对于进件有不同的个性化需求，支付方式字段都是以双下划写开头的字段名称，请以支付方式规定的格式传值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContractOptionFive 合同选项值5
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Province 省份
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartDate 生效日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address 详细地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndDate 过期日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContractOptionSix 合同选项值6
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentOptionSeven 合同选项名称7
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PictureTwo 合同照片补充【私密区】
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MerchantNo 商户编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentName 机构名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContractOptionOther 合同选项值8
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContractOptionThree 合同选项值3
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Country 县/区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShopCount 合同关联的门店数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentOptionThree 合同选项名称3
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentClassificationName 支付方式行业名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContractOptionSeven 合同选项值7
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentOptionFour 合同选项名称4
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentClassificationLimit 商户签约扣率封顶值（分为单位）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 审核备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentOptionSix 合同选项名称6
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MerchantName 品牌名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContractOptionOne 合同选项值1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentOptionOther 合同选项名称8
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentOptionTwo 合同选项名称2
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentOptionOne 合同选项名称1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContactTelephone 联系人电话
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Contact 联系人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SignDate 签约日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentOptionNine 合同选项名称9
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentName 付款方式名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentInternalName 付款方式名称（内部名称）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContractOptionTen 合同选项值10
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Code 合同编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PictureOne 合同照片【私密区】
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SignMan 签约人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelNo 渠道号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddTime 添加时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AutoSign 是否自动续签（1是，0否）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContractOptionNine 合同选项值9
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CityId 城市编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentType 交易类型（多个以小写逗号分开，0现金，1刷卡，2主扫，3被扫，4JSPAY，5预授权）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentClassificationId 支付方式行业编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrandName 品牌名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentOptionTen 合同选项名称10
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContractId 合同主键
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
        if (array_key_exists("PaymentTag",$param) and $param["PaymentTag"] !== null) {
            $this->PaymentTag = $param["PaymentTag"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("AgentNo",$param) and $param["AgentNo"] !== null) {
            $this->AgentNo = $param["AgentNo"];
        }

        if (array_key_exists("ContractOptionFour",$param) and $param["ContractOptionFour"] !== null) {
            $this->ContractOptionFour = $param["ContractOptionFour"];
        }

        if (array_key_exists("ContractOptionTwo",$param) and $param["ContractOptionTwo"] !== null) {
            $this->ContractOptionTwo = $param["ContractOptionTwo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PaymentId",$param) and $param["PaymentId"] !== null) {
            $this->PaymentId = $param["PaymentId"];
        }

        if (array_key_exists("Fee",$param) and $param["Fee"] !== null) {
            $this->Fee = $param["Fee"];
        }

        if (array_key_exists("PaymentOptionFive",$param) and $param["PaymentOptionFive"] !== null) {
            $this->PaymentOptionFive = $param["PaymentOptionFive"];
        }

        if (array_key_exists("OutContractId",$param) and $param["OutContractId"] !== null) {
            $this->OutContractId = $param["OutContractId"];
        }

        if (array_key_exists("ChannelExtJson",$param) and $param["ChannelExtJson"] !== null) {
            $this->ChannelExtJson = $param["ChannelExtJson"];
        }

        if (array_key_exists("ContractOptionFive",$param) and $param["ContractOptionFive"] !== null) {
            $this->ContractOptionFive = $param["ContractOptionFive"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("ContractOptionSix",$param) and $param["ContractOptionSix"] !== null) {
            $this->ContractOptionSix = $param["ContractOptionSix"];
        }

        if (array_key_exists("PaymentOptionSeven",$param) and $param["PaymentOptionSeven"] !== null) {
            $this->PaymentOptionSeven = $param["PaymentOptionSeven"];
        }

        if (array_key_exists("PictureTwo",$param) and $param["PictureTwo"] !== null) {
            $this->PictureTwo = $param["PictureTwo"];
        }

        if (array_key_exists("MerchantNo",$param) and $param["MerchantNo"] !== null) {
            $this->MerchantNo = $param["MerchantNo"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("ContractOptionOther",$param) and $param["ContractOptionOther"] !== null) {
            $this->ContractOptionOther = $param["ContractOptionOther"];
        }

        if (array_key_exists("ContractOptionThree",$param) and $param["ContractOptionThree"] !== null) {
            $this->ContractOptionThree = $param["ContractOptionThree"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("ShopCount",$param) and $param["ShopCount"] !== null) {
            $this->ShopCount = $param["ShopCount"];
        }

        if (array_key_exists("PaymentOptionThree",$param) and $param["PaymentOptionThree"] !== null) {
            $this->PaymentOptionThree = $param["PaymentOptionThree"];
        }

        if (array_key_exists("PaymentClassificationName",$param) and $param["PaymentClassificationName"] !== null) {
            $this->PaymentClassificationName = $param["PaymentClassificationName"];
        }

        if (array_key_exists("ContractOptionSeven",$param) and $param["ContractOptionSeven"] !== null) {
            $this->ContractOptionSeven = $param["ContractOptionSeven"];
        }

        if (array_key_exists("PaymentOptionFour",$param) and $param["PaymentOptionFour"] !== null) {
            $this->PaymentOptionFour = $param["PaymentOptionFour"];
        }

        if (array_key_exists("PaymentClassificationLimit",$param) and $param["PaymentClassificationLimit"] !== null) {
            $this->PaymentClassificationLimit = $param["PaymentClassificationLimit"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PaymentOptionSix",$param) and $param["PaymentOptionSix"] !== null) {
            $this->PaymentOptionSix = $param["PaymentOptionSix"];
        }

        if (array_key_exists("MerchantName",$param) and $param["MerchantName"] !== null) {
            $this->MerchantName = $param["MerchantName"];
        }

        if (array_key_exists("ContractOptionOne",$param) and $param["ContractOptionOne"] !== null) {
            $this->ContractOptionOne = $param["ContractOptionOne"];
        }

        if (array_key_exists("PaymentOptionOther",$param) and $param["PaymentOptionOther"] !== null) {
            $this->PaymentOptionOther = $param["PaymentOptionOther"];
        }

        if (array_key_exists("PaymentOptionTwo",$param) and $param["PaymentOptionTwo"] !== null) {
            $this->PaymentOptionTwo = $param["PaymentOptionTwo"];
        }

        if (array_key_exists("PaymentOptionOne",$param) and $param["PaymentOptionOne"] !== null) {
            $this->PaymentOptionOne = $param["PaymentOptionOne"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ContactTelephone",$param) and $param["ContactTelephone"] !== null) {
            $this->ContactTelephone = $param["ContactTelephone"];
        }

        if (array_key_exists("Contact",$param) and $param["Contact"] !== null) {
            $this->Contact = $param["Contact"];
        }

        if (array_key_exists("SignDate",$param) and $param["SignDate"] !== null) {
            $this->SignDate = $param["SignDate"];
        }

        if (array_key_exists("PaymentOptionNine",$param) and $param["PaymentOptionNine"] !== null) {
            $this->PaymentOptionNine = $param["PaymentOptionNine"];
        }

        if (array_key_exists("PaymentName",$param) and $param["PaymentName"] !== null) {
            $this->PaymentName = $param["PaymentName"];
        }

        if (array_key_exists("PaymentInternalName",$param) and $param["PaymentInternalName"] !== null) {
            $this->PaymentInternalName = $param["PaymentInternalName"];
        }

        if (array_key_exists("ContractOptionTen",$param) and $param["ContractOptionTen"] !== null) {
            $this->ContractOptionTen = $param["ContractOptionTen"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("PictureOne",$param) and $param["PictureOne"] !== null) {
            $this->PictureOne = $param["PictureOne"];
        }

        if (array_key_exists("SignMan",$param) and $param["SignMan"] !== null) {
            $this->SignMan = $param["SignMan"];
        }

        if (array_key_exists("ChannelNo",$param) and $param["ChannelNo"] !== null) {
            $this->ChannelNo = $param["ChannelNo"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("AutoSign",$param) and $param["AutoSign"] !== null) {
            $this->AutoSign = $param["AutoSign"];
        }

        if (array_key_exists("ContractOptionNine",$param) and $param["ContractOptionNine"] !== null) {
            $this->ContractOptionNine = $param["ContractOptionNine"];
        }

        if (array_key_exists("CityId",$param) and $param["CityId"] !== null) {
            $this->CityId = $param["CityId"];
        }

        if (array_key_exists("PaymentType",$param) and $param["PaymentType"] !== null) {
            $this->PaymentType = $param["PaymentType"];
        }

        if (array_key_exists("PaymentClassificationId",$param) and $param["PaymentClassificationId"] !== null) {
            $this->PaymentClassificationId = $param["PaymentClassificationId"];
        }

        if (array_key_exists("BrandName",$param) and $param["BrandName"] !== null) {
            $this->BrandName = $param["BrandName"];
        }

        if (array_key_exists("PaymentOptionTen",$param) and $param["PaymentOptionTen"] !== null) {
            $this->PaymentOptionTen = $param["PaymentOptionTen"];
        }

        if (array_key_exists("ContractId",$param) and $param["ContractId"] !== null) {
            $this->ContractId = $param["ContractId"];
        }
    }
}
