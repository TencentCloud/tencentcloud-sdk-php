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
 * 商户明细响应对象
 *
 * @method string getCity() 获取城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCity(string $City) 设置城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaxCollectionPicture() 获取税务登记证图片【私密区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaxCollectionPicture(string $TaxCollectionPicture) 设置税务登记证图片【私密区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBossIdNo() 获取法人证件号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBossIdNo(string $BossIdNo) 设置法人证件号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountIdNo() 获取法人亲属证件号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountIdNo(string $AccountIdNo) 设置法人亲属证件号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOtherPictureThree() 获取其他资料3
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtherPictureThree(string $OtherPictureThree) 设置其他资料3
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountIdType() 获取法人亲属证件类型（1居民身份证,2临时居民身份证,3居民户口簿,4护照,5港澳居民来往内地通行证,6回乡证,7军人证,8武警身份证,9其他法定文件）结算账户人身份为法人亲属时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountIdType(string $AccountIdType) 设置法人亲属证件类型（1居民身份证,2临时居民身份证,3居民户口簿,4护照,5港澳居民来往内地通行证,6回乡证,7军人证,8武警身份证,9其他法定文件）结算账户人身份为法人亲属时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取商户状态（0未审核，1已审核，2审核未通过，3待审核，4已删除，5初审通过）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置商户状态（0未审核，1已审核，2审核未通过，3待审核，4已删除，5初审通过）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessLicensePicture() 获取营业执照图片【私密区】（系统返回的图片路径）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessLicensePicture(string $BusinessLicensePicture) 设置营业执照图片【私密区】（系统返回的图片路径）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrandName() 获取品牌名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrandName(string $BrandName) 设置品牌名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBossPositive() 获取法人身份证正面【私密区】（系统返回的图片路径）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBossPositive(string $BossPositive) 设置法人身份证正面【私密区】（系统返回的图片路径）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppCount() 获取开通应用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppCount(string $AppCount) 设置开通应用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBossBack() 获取法人身份证背面【私密区】（系统返回的图片路径）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBossBack(string $BossBack) 设置法人身份证背面【私密区】（系统返回的图片路径）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationCodePicture() 获取组织机构代码证图片【私密区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationCodePicture(string $OrganizationCodePicture) 设置组织机构代码证图片【私密区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessLicenseEndDate() 获取营业执照过期时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessLicenseEndDate(string $BusinessLicenseEndDate) 设置营业执照过期时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationCodeNo() 获取组织机构代码证号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationCodeNo(string $OrganizationCodeNo) 设置组织机构代码证号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentNo() 获取机构编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentNo(string $AgentNo) 设置机构编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProvince() 获取省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvince(string $Province) 设置省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBossStartDate() 获取法人证件生效时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBossStartDate(string $BossStartDate) 设置法人证件生效时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBankNo() 获取清算联行号，开户行行号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBankNo(string $BankNo) 设置清算联行号，开户行行号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaxCollectionStartDate() 获取税务登记证生效时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaxCollectionStartDate(string $TaxCollectionStartDate) 设置税务登记证生效时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessLicenseStartDate() 获取营业执照生效时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessLicenseStartDate(string $BusinessLicenseStartDate) 设置营业执照生效时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountManagerId() 获取客户经理用户编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountManagerId(string $AccountManagerId) 设置客户经理用户编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClassificationIds() 获取分类编号(多个以小写逗号分开)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassificationIds(string $ClassificationIds) 设置分类编号(多个以小写逗号分开)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessLicenseType() 获取营业执照类型（1三证合一，2非三证合一）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessLicenseType(string $BusinessLicenseType) 设置营业执照类型（1三证合一，2非三证合一）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBossEndDate() 获取法人证件过期时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBossEndDate(string $BossEndDate) 设置法人证件过期时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessLicenseNo() 获取营业执照编号（系统有唯一性校验）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessLicenseNo(string $BusinessLicenseNo) 设置营业执照编号（系统有唯一性校验）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentName() 获取机构名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentName(string $AgentName) 设置机构名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIntro() 获取商户简介
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntro(string $Intro) 设置商户简介
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBossIdType() 获取法人证件类型（1居民身份证,2临时居民身份证,3居民户口簿,4护照,5港澳居民来往内地通行证,6回乡证,7军人证,8武警身份证,9其他法定文件）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBossIdType(string $BossIdType) 设置法人证件类型（1居民身份证,2临时居民身份证,3居民户口簿,4护照,5港澳居民来往内地通行证,6回乡证,7军人证,8武警身份证,9其他法定文件）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddTime() 获取添加时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddTime(string $AddTime) 设置添加时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShopCount() 获取门店数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShopCount(string $ShopCount) 设置门店数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountBoss() 获取结算账户人身份（1法人，2法人亲属），结算帐户为对私时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountBoss(string $AccountBoss) 设置结算账户人身份（1法人，2法人亲属），结算帐户为对私时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClassificationNames() 获取分类名称(多个以小写逗号分开)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassificationNames(string $ClassificationNames) 设置分类名称(多个以小写逗号分开)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBossTelephone() 获取法人电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBossTelephone(string $BossTelephone) 设置法人电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountManagerName() 获取客户经理姓名，必须为系统后台的管理员真实姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountManagerName(string $AccountManagerName) 设置客户经理姓名，必须为系统后台的管理员真实姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTerminalCount() 获取终端数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTerminalCount(string $TerminalCount) 设置终端数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取审核备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置审核备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFinancialContact() 获取财务联系人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinancialContact(string $FinancialContact) 设置财务联系人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMerchantName() 获取商户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMerchantName(string $MerchantName) 设置商户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBossSex() 获取法人性别（1男，2女）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBossSex(string $BossSex) 设置法人性别（1男，2女）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMerchantNo() 获取商户编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMerchantNo(string $MerchantNo) 设置商户编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBossAddress() 获取法人住址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBossAddress(string $BossAddress) 设置法人住址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCountry() 获取县/区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountry(string $Country) 设置县/区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取详细地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置详细地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBossJob() 获取法人职业
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBossJob(string $BossJob) 设置法人职业
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLicencePicture() 获取许可证图片【私密区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLicencePicture(string $LicencePicture) 设置许可证图片【私密区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationCodeEndDate() 获取组织机构代码证过期时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationCodeEndDate(string $OrganizationCodeEndDate) 设置组织机构代码证过期时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOpenHours() 获取营业时间，多个以小写逗号分开(9:00-12:00,13:00-18:00)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenHours(string $OpenHours) 设置营业时间，多个以小写逗号分开(9:00-12:00,13:00-18:00)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOtherPictureTwo() 获取其他资料2
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtherPictureTwo(string $OtherPictureTwo) 设置其他资料2
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOtherPictureOne() 获取其他资料1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtherPictureOne(string $OtherPictureOne) 设置其他资料1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountName() 获取银行户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountName(string $AccountName) 设置银行户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContractCount() 获取合同数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContractCount(string $ContractCount) 设置合同数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLicencePictureTwo() 获取授权文件【私密区】（当结算帐户身份为法人亲属时必传）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLicencePictureTwo(string $LicencePictureTwo) 设置授权文件【私密区】（当结算帐户身份为法人亲属时必传）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountNo() 获取银行账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountNo(string $AccountNo) 设置银行账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBossEmail() 获取法人邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBossEmail(string $BossEmail) 设置法人邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountType() 获取结算账户类型（2对私，1对公）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountType(string $AccountType) 设置结算账户类型（2对私，1对公）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaxCollectionEndDate() 获取税务登记证过期时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaxCollectionEndDate(string $TaxCollectionEndDate) 设置税务登记证过期时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBankName() 获取开户行名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBankName(string $BankName) 设置开户行名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTelephone() 获取联系电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTelephone(string $Telephone) 设置联系电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutMerchantId() 获取外部商户主键编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutMerchantId(string $OutMerchantId) 设置外部商户主键编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCityId() 获取城市编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCityId(string $CityId) 设置城市编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBossIdCount() 获取法人证件国别/地区（中国CHN，香港HKG，澳门MAC，台湾CTN）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBossIdCount(string $BossIdCount) 设置法人证件国别/地区（中国CHN，香港HKG，澳门MAC，台湾CTN）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTag() 获取商户标记，自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(string $Tag) 设置商户标记，自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFinancialTelephone() 获取财务联系人电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinancialTelephone(string $FinancialTelephone) 设置财务联系人电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBossName() 获取法人姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBossName(string $BossName) 设置法人姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationCodeStartDate() 获取组织机构代码证生效时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationCodeStartDate(string $OrganizationCodeStartDate) 设置组织机构代码证生效时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogo() 获取商户logo【公共区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogo(string $Logo) 设置商户logo【公共区】
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOtherPictureFour() 获取其他资料4
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtherPictureFour(string $OtherPictureFour) 设置其他资料4
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaxCollectionNo() 获取税务登记证号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaxCollectionNo(string $TaxCollectionNo) 设置税务登记证号
注意：此字段可能返回 null，表示取不到有效值。
 */
class ViewMerchantResult extends AbstractModel
{
    /**
     * @var string 城市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $City;

    /**
     * @var string 税务登记证图片【私密区】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaxCollectionPicture;

    /**
     * @var string 法人证件号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BossIdNo;

    /**
     * @var string 法人亲属证件号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountIdNo;

    /**
     * @var string 其他资料3
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtherPictureThree;

    /**
     * @var string 法人亲属证件类型（1居民身份证,2临时居民身份证,3居民户口簿,4护照,5港澳居民来往内地通行证,6回乡证,7军人证,8武警身份证,9其他法定文件）结算账户人身份为法人亲属时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountIdType;

    /**
     * @var string 商户状态（0未审核，1已审核，2审核未通过，3待审核，4已删除，5初审通过）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 营业执照图片【私密区】（系统返回的图片路径）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessLicensePicture;

    /**
     * @var string 品牌名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrandName;

    /**
     * @var string 法人身份证正面【私密区】（系统返回的图片路径）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BossPositive;

    /**
     * @var string 开通应用数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppCount;

    /**
     * @var string 法人身份证背面【私密区】（系统返回的图片路径）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BossBack;

    /**
     * @var string 组织机构代码证图片【私密区】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationCodePicture;

    /**
     * @var string 营业执照过期时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessLicenseEndDate;

    /**
     * @var string 组织机构代码证号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationCodeNo;

    /**
     * @var string 机构编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentNo;

    /**
     * @var string 省份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Province;

    /**
     * @var string 法人证件生效时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BossStartDate;

    /**
     * @var string 更新时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 清算联行号，开户行行号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BankNo;

    /**
     * @var string 税务登记证生效时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaxCollectionStartDate;

    /**
     * @var string 营业执照生效时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessLicenseStartDate;

    /**
     * @var string 客户经理用户编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountManagerId;

    /**
     * @var string 分类编号(多个以小写逗号分开)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassificationIds;

    /**
     * @var string 营业执照类型（1三证合一，2非三证合一）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessLicenseType;

    /**
     * @var string 法人证件过期时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BossEndDate;

    /**
     * @var string 营业执照编号（系统有唯一性校验）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessLicenseNo;

    /**
     * @var string 机构名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentName;

    /**
     * @var string 商户简介
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Intro;

    /**
     * @var string 法人证件类型（1居民身份证,2临时居民身份证,3居民户口簿,4护照,5港澳居民来往内地通行证,6回乡证,7军人证,8武警身份证,9其他法定文件）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BossIdType;

    /**
     * @var string 添加时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddTime;

    /**
     * @var string 门店数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShopCount;

    /**
     * @var string 结算账户人身份（1法人，2法人亲属），结算帐户为对私时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountBoss;

    /**
     * @var string 分类名称(多个以小写逗号分开)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassificationNames;

    /**
     * @var string 法人电话
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BossTelephone;

    /**
     * @var string 客户经理姓名，必须为系统后台的管理员真实姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountManagerName;

    /**
     * @var string 终端数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TerminalCount;

    /**
     * @var string 审核备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 财务联系人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinancialContact;

    /**
     * @var string 商户名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MerchantName;

    /**
     * @var string 法人性别（1男，2女）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BossSex;

    /**
     * @var string 商户编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MerchantNo;

    /**
     * @var string 法人住址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BossAddress;

    /**
     * @var string 县/区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Country;

    /**
     * @var string 详细地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string 法人职业
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BossJob;

    /**
     * @var string 许可证图片【私密区】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LicencePicture;

    /**
     * @var string 组织机构代码证过期时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationCodeEndDate;

    /**
     * @var string 营业时间，多个以小写逗号分开(9:00-12:00,13:00-18:00)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenHours;

    /**
     * @var string 其他资料2
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtherPictureTwo;

    /**
     * @var string 其他资料1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtherPictureOne;

    /**
     * @var string 银行户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountName;

    /**
     * @var string 合同数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContractCount;

    /**
     * @var string 授权文件【私密区】（当结算帐户身份为法人亲属时必传）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LicencePictureTwo;

    /**
     * @var string 银行账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountNo;

    /**
     * @var string 法人邮箱
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BossEmail;

    /**
     * @var string 结算账户类型（2对私，1对公）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountType;

    /**
     * @var string 税务登记证过期时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaxCollectionEndDate;

    /**
     * @var string 开户行名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BankName;

    /**
     * @var string 联系电话
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Telephone;

    /**
     * @var string 外部商户主键编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutMerchantId;

    /**
     * @var string 城市编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CityId;

    /**
     * @var string 法人证件国别/地区（中国CHN，香港HKG，澳门MAC，台湾CTN）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BossIdCount;

    /**
     * @var string 商户标记，自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @var string 财务联系人电话
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinancialTelephone;

    /**
     * @var string 法人姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BossName;

    /**
     * @var string 组织机构代码证生效时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationCodeStartDate;

    /**
     * @var string 商户logo【公共区】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Logo;

    /**
     * @var string 其他资料4
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtherPictureFour;

    /**
     * @var string 税务登记证号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaxCollectionNo;

    /**
     * @param string $City 城市
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaxCollectionPicture 税务登记证图片【私密区】
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BossIdNo 法人证件号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountIdNo 法人亲属证件号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OtherPictureThree 其他资料3
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountIdType 法人亲属证件类型（1居民身份证,2临时居民身份证,3居民户口簿,4护照,5港澳居民来往内地通行证,6回乡证,7军人证,8武警身份证,9其他法定文件）结算账户人身份为法人亲属时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 商户状态（0未审核，1已审核，2审核未通过，3待审核，4已删除，5初审通过）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessLicensePicture 营业执照图片【私密区】（系统返回的图片路径）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrandName 品牌名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BossPositive 法人身份证正面【私密区】（系统返回的图片路径）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppCount 开通应用数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BossBack 法人身份证背面【私密区】（系统返回的图片路径）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationCodePicture 组织机构代码证图片【私密区】
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessLicenseEndDate 营业执照过期时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationCodeNo 组织机构代码证号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentNo 机构编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Province 省份
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BossStartDate 法人证件生效时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BankNo 清算联行号，开户行行号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaxCollectionStartDate 税务登记证生效时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessLicenseStartDate 营业执照生效时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountManagerId 客户经理用户编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClassificationIds 分类编号(多个以小写逗号分开)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessLicenseType 营业执照类型（1三证合一，2非三证合一）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BossEndDate 法人证件过期时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessLicenseNo 营业执照编号（系统有唯一性校验）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentName 机构名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Intro 商户简介
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BossIdType 法人证件类型（1居民身份证,2临时居民身份证,3居民户口簿,4护照,5港澳居民来往内地通行证,6回乡证,7军人证,8武警身份证,9其他法定文件）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddTime 添加时间（yyyy-mm-dd hh:ii:ss）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShopCount 门店数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountBoss 结算账户人身份（1法人，2法人亲属），结算帐户为对私时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClassificationNames 分类名称(多个以小写逗号分开)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BossTelephone 法人电话
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountManagerName 客户经理姓名，必须为系统后台的管理员真实姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TerminalCount 终端数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 审核备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FinancialContact 财务联系人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MerchantName 商户名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BossSex 法人性别（1男，2女）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MerchantNo 商户编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BossAddress 法人住址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Country 县/区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address 详细地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BossJob 法人职业
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LicencePicture 许可证图片【私密区】
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationCodeEndDate 组织机构代码证过期时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OpenHours 营业时间，多个以小写逗号分开(9:00-12:00,13:00-18:00)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OtherPictureTwo 其他资料2
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OtherPictureOne 其他资料1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountName 银行户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContractCount 合同数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LicencePictureTwo 授权文件【私密区】（当结算帐户身份为法人亲属时必传）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountNo 银行账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BossEmail 法人邮箱
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountType 结算账户类型（2对私，1对公）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaxCollectionEndDate 税务登记证过期时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BankName 开户行名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Telephone 联系电话
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutMerchantId 外部商户主键编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CityId 城市编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BossIdCount 法人证件国别/地区（中国CHN，香港HKG，澳门MAC，台湾CTN）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tag 商户标记，自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FinancialTelephone 财务联系人电话
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BossName 法人姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationCodeStartDate 组织机构代码证生效时间（yyyy-mm-dd）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Logo 商户logo【公共区】
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OtherPictureFour 其他资料4
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaxCollectionNo 税务登记证号
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

        if (array_key_exists("TaxCollectionPicture",$param) and $param["TaxCollectionPicture"] !== null) {
            $this->TaxCollectionPicture = $param["TaxCollectionPicture"];
        }

        if (array_key_exists("BossIdNo",$param) and $param["BossIdNo"] !== null) {
            $this->BossIdNo = $param["BossIdNo"];
        }

        if (array_key_exists("AccountIdNo",$param) and $param["AccountIdNo"] !== null) {
            $this->AccountIdNo = $param["AccountIdNo"];
        }

        if (array_key_exists("OtherPictureThree",$param) and $param["OtherPictureThree"] !== null) {
            $this->OtherPictureThree = $param["OtherPictureThree"];
        }

        if (array_key_exists("AccountIdType",$param) and $param["AccountIdType"] !== null) {
            $this->AccountIdType = $param["AccountIdType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BusinessLicensePicture",$param) and $param["BusinessLicensePicture"] !== null) {
            $this->BusinessLicensePicture = $param["BusinessLicensePicture"];
        }

        if (array_key_exists("BrandName",$param) and $param["BrandName"] !== null) {
            $this->BrandName = $param["BrandName"];
        }

        if (array_key_exists("BossPositive",$param) and $param["BossPositive"] !== null) {
            $this->BossPositive = $param["BossPositive"];
        }

        if (array_key_exists("AppCount",$param) and $param["AppCount"] !== null) {
            $this->AppCount = $param["AppCount"];
        }

        if (array_key_exists("BossBack",$param) and $param["BossBack"] !== null) {
            $this->BossBack = $param["BossBack"];
        }

        if (array_key_exists("OrganizationCodePicture",$param) and $param["OrganizationCodePicture"] !== null) {
            $this->OrganizationCodePicture = $param["OrganizationCodePicture"];
        }

        if (array_key_exists("BusinessLicenseEndDate",$param) and $param["BusinessLicenseEndDate"] !== null) {
            $this->BusinessLicenseEndDate = $param["BusinessLicenseEndDate"];
        }

        if (array_key_exists("OrganizationCodeNo",$param) and $param["OrganizationCodeNo"] !== null) {
            $this->OrganizationCodeNo = $param["OrganizationCodeNo"];
        }

        if (array_key_exists("AgentNo",$param) and $param["AgentNo"] !== null) {
            $this->AgentNo = $param["AgentNo"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("BossStartDate",$param) and $param["BossStartDate"] !== null) {
            $this->BossStartDate = $param["BossStartDate"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("BankNo",$param) and $param["BankNo"] !== null) {
            $this->BankNo = $param["BankNo"];
        }

        if (array_key_exists("TaxCollectionStartDate",$param) and $param["TaxCollectionStartDate"] !== null) {
            $this->TaxCollectionStartDate = $param["TaxCollectionStartDate"];
        }

        if (array_key_exists("BusinessLicenseStartDate",$param) and $param["BusinessLicenseStartDate"] !== null) {
            $this->BusinessLicenseStartDate = $param["BusinessLicenseStartDate"];
        }

        if (array_key_exists("AccountManagerId",$param) and $param["AccountManagerId"] !== null) {
            $this->AccountManagerId = $param["AccountManagerId"];
        }

        if (array_key_exists("ClassificationIds",$param) and $param["ClassificationIds"] !== null) {
            $this->ClassificationIds = $param["ClassificationIds"];
        }

        if (array_key_exists("BusinessLicenseType",$param) and $param["BusinessLicenseType"] !== null) {
            $this->BusinessLicenseType = $param["BusinessLicenseType"];
        }

        if (array_key_exists("BossEndDate",$param) and $param["BossEndDate"] !== null) {
            $this->BossEndDate = $param["BossEndDate"];
        }

        if (array_key_exists("BusinessLicenseNo",$param) and $param["BusinessLicenseNo"] !== null) {
            $this->BusinessLicenseNo = $param["BusinessLicenseNo"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("Intro",$param) and $param["Intro"] !== null) {
            $this->Intro = $param["Intro"];
        }

        if (array_key_exists("BossIdType",$param) and $param["BossIdType"] !== null) {
            $this->BossIdType = $param["BossIdType"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("ShopCount",$param) and $param["ShopCount"] !== null) {
            $this->ShopCount = $param["ShopCount"];
        }

        if (array_key_exists("AccountBoss",$param) and $param["AccountBoss"] !== null) {
            $this->AccountBoss = $param["AccountBoss"];
        }

        if (array_key_exists("ClassificationNames",$param) and $param["ClassificationNames"] !== null) {
            $this->ClassificationNames = $param["ClassificationNames"];
        }

        if (array_key_exists("BossTelephone",$param) and $param["BossTelephone"] !== null) {
            $this->BossTelephone = $param["BossTelephone"];
        }

        if (array_key_exists("AccountManagerName",$param) and $param["AccountManagerName"] !== null) {
            $this->AccountManagerName = $param["AccountManagerName"];
        }

        if (array_key_exists("TerminalCount",$param) and $param["TerminalCount"] !== null) {
            $this->TerminalCount = $param["TerminalCount"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("FinancialContact",$param) and $param["FinancialContact"] !== null) {
            $this->FinancialContact = $param["FinancialContact"];
        }

        if (array_key_exists("MerchantName",$param) and $param["MerchantName"] !== null) {
            $this->MerchantName = $param["MerchantName"];
        }

        if (array_key_exists("BossSex",$param) and $param["BossSex"] !== null) {
            $this->BossSex = $param["BossSex"];
        }

        if (array_key_exists("MerchantNo",$param) and $param["MerchantNo"] !== null) {
            $this->MerchantNo = $param["MerchantNo"];
        }

        if (array_key_exists("BossAddress",$param) and $param["BossAddress"] !== null) {
            $this->BossAddress = $param["BossAddress"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("BossJob",$param) and $param["BossJob"] !== null) {
            $this->BossJob = $param["BossJob"];
        }

        if (array_key_exists("LicencePicture",$param) and $param["LicencePicture"] !== null) {
            $this->LicencePicture = $param["LicencePicture"];
        }

        if (array_key_exists("OrganizationCodeEndDate",$param) and $param["OrganizationCodeEndDate"] !== null) {
            $this->OrganizationCodeEndDate = $param["OrganizationCodeEndDate"];
        }

        if (array_key_exists("OpenHours",$param) and $param["OpenHours"] !== null) {
            $this->OpenHours = $param["OpenHours"];
        }

        if (array_key_exists("OtherPictureTwo",$param) and $param["OtherPictureTwo"] !== null) {
            $this->OtherPictureTwo = $param["OtherPictureTwo"];
        }

        if (array_key_exists("OtherPictureOne",$param) and $param["OtherPictureOne"] !== null) {
            $this->OtherPictureOne = $param["OtherPictureOne"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("ContractCount",$param) and $param["ContractCount"] !== null) {
            $this->ContractCount = $param["ContractCount"];
        }

        if (array_key_exists("LicencePictureTwo",$param) and $param["LicencePictureTwo"] !== null) {
            $this->LicencePictureTwo = $param["LicencePictureTwo"];
        }

        if (array_key_exists("AccountNo",$param) and $param["AccountNo"] !== null) {
            $this->AccountNo = $param["AccountNo"];
        }

        if (array_key_exists("BossEmail",$param) and $param["BossEmail"] !== null) {
            $this->BossEmail = $param["BossEmail"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("TaxCollectionEndDate",$param) and $param["TaxCollectionEndDate"] !== null) {
            $this->TaxCollectionEndDate = $param["TaxCollectionEndDate"];
        }

        if (array_key_exists("BankName",$param) and $param["BankName"] !== null) {
            $this->BankName = $param["BankName"];
        }

        if (array_key_exists("Telephone",$param) and $param["Telephone"] !== null) {
            $this->Telephone = $param["Telephone"];
        }

        if (array_key_exists("OutMerchantId",$param) and $param["OutMerchantId"] !== null) {
            $this->OutMerchantId = $param["OutMerchantId"];
        }

        if (array_key_exists("CityId",$param) and $param["CityId"] !== null) {
            $this->CityId = $param["CityId"];
        }

        if (array_key_exists("BossIdCount",$param) and $param["BossIdCount"] !== null) {
            $this->BossIdCount = $param["BossIdCount"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("FinancialTelephone",$param) and $param["FinancialTelephone"] !== null) {
            $this->FinancialTelephone = $param["FinancialTelephone"];
        }

        if (array_key_exists("BossName",$param) and $param["BossName"] !== null) {
            $this->BossName = $param["BossName"];
        }

        if (array_key_exists("OrganizationCodeStartDate",$param) and $param["OrganizationCodeStartDate"] !== null) {
            $this->OrganizationCodeStartDate = $param["OrganizationCodeStartDate"];
        }

        if (array_key_exists("Logo",$param) and $param["Logo"] !== null) {
            $this->Logo = $param["Logo"];
        }

        if (array_key_exists("OtherPictureFour",$param) and $param["OtherPictureFour"] !== null) {
            $this->OtherPictureFour = $param["OtherPictureFour"];
        }

        if (array_key_exists("TaxCollectionNo",$param) and $param["TaxCollectionNo"] !== null) {
            $this->TaxCollectionNo = $param["TaxCollectionNo"];
        }
    }
}
