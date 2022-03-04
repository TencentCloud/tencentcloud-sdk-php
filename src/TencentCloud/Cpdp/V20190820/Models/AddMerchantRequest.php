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
 * AddMerchant请求参数结构体
 *
 * @method string getOpenId() 获取收单系统分配的开放ID
 * @method void setOpenId(string $OpenId) 设置收单系统分配的开放ID
 * @method string getOpenKey() 获取收单系统分配的密钥
 * @method void setOpenKey(string $OpenKey) 设置收单系统分配的密钥
 * @method string getOutMerchantId() 获取机构商户主键（系统有唯一性校验），建议使用商户表的主键ID，防止重复添加商户
 * @method void setOutMerchantId(string $OutMerchantId) 设置机构商户主键（系统有唯一性校验），建议使用商户表的主键ID，防止重复添加商户
 * @method string getMerchantName() 获取商户名称，小微商户命名要符合“”商户_名字” （例如：商户_张三）
 * @method void setMerchantName(string $MerchantName) 设置商户名称，小微商户命名要符合“”商户_名字” （例如：商户_张三）
 * @method string getBusinessLicenseType() 获取营业执照类型（1三证合一，2非三证合一）
 * @method void setBusinessLicenseType(string $BusinessLicenseType) 设置营业执照类型（1三证合一，2非三证合一）
 * @method string getBusinessLicenseNo() 获取营业执照编号（系统有唯一性校验），（小微商户不效验，随意传要有值，公司/个体户必传）
 * @method void setBusinessLicenseNo(string $BusinessLicenseNo) 设置营业执照编号（系统有唯一性校验），（小微商户不效验，随意传要有值，公司/个体户必传）
 * @method string getBusinessLicensePicture() 获取营业执照图片【私密区】（系统返回的图片路径），（小微商户不效验，随意传要有值，公司/个体户必传）
 * @method void setBusinessLicensePicture(string $BusinessLicensePicture) 设置营业执照图片【私密区】（系统返回的图片路径），（小微商户不效验，随意传要有值，公司/个体户必传）
 * @method string getBusinessLicenseStartDate() 获取营业执照生效时间（yyyy-mm-dd），（小微商户不效验，随意传要有值，公司/个体户必传）
 * @method void setBusinessLicenseStartDate(string $BusinessLicenseStartDate) 设置营业执照生效时间（yyyy-mm-dd），（小微商户不效验，随意传要有值，公司/个体户必传）
 * @method string getBusinessLicenseEndDate() 获取营业执照过期时间（yyyy-mm-dd），（小微商户不效验，随意传要有值，公司/个体户必传）
 * @method void setBusinessLicenseEndDate(string $BusinessLicenseEndDate) 设置营业执照过期时间（yyyy-mm-dd），（小微商户不效验，随意传要有值，公司/个体户必传）
 * @method array getClassificationIds() 获取行业分类编号列表（第一个分类编号为主分类，后面的为二级分类）
 * @method void setClassificationIds(array $ClassificationIds) 设置行业分类编号列表（第一个分类编号为主分类，后面的为二级分类）
 * @method string getBrandName() 获取招牌名称
 * @method void setBrandName(string $BrandName) 设置招牌名称
 * @method string getTelephone() 获取联系电话
 * @method void setTelephone(string $Telephone) 设置联系电话
 * @method string getCityId() 获取城市编号
 * @method void setCityId(string $CityId) 设置城市编号
 * @method string getAddress() 获取详细地址，不含省市区县名称，长度需要大于5。
 * @method void setAddress(string $Address) 设置详细地址，不含省市区县名称，长度需要大于5。
 * @method string getOpenHours() 获取营业时间，多个以小写逗号分开(9:00-12:00,13:00-18:00)
 * @method void setOpenHours(string $OpenHours) 设置营业时间，多个以小写逗号分开(9:00-12:00,13:00-18:00)
 * @method string getAccountType() 获取结算账户类型（2对私，1对公）
 * @method void setAccountType(string $AccountType) 设置结算账户类型（2对私，1对公）
 * @method string getBankNo() 获取清算联行号，开户行行号
 * @method void setBankNo(string $BankNo) 设置清算联行号，开户行行号
 * @method string getBankName() 获取开户行名称
 * @method void setBankName(string $BankName) 设置开户行名称
 * @method string getAccountNo() 获取银行账号
 * @method void setAccountNo(string $AccountNo) 设置银行账号
 * @method string getAccountName() 获取银行户名
 * @method void setAccountName(string $AccountName) 设置银行户名
 * @method string getBossIdType() 获取法人证件类型（1居民身份证,2临时居民身份证,3居民户口簿,4护照,5港澳居民来往内地通行证,6回乡证,7军人证,8武警身份证,9其他法定文件）
 * @method void setBossIdType(string $BossIdType) 设置法人证件类型（1居民身份证,2临时居民身份证,3居民户口簿,4护照,5港澳居民来往内地通行证,6回乡证,7军人证,8武警身份证,9其他法定文件）
 * @method string getBossIdNo() 获取法人证件号码
 * @method void setBossIdNo(string $BossIdNo) 设置法人证件号码
 * @method string getBossName() 获取法人姓名
 * @method void setBossName(string $BossName) 设置法人姓名
 * @method string getBossSex() 获取法人性别（1男，2女）
 * @method void setBossSex(string $BossSex) 设置法人性别（1男，2女）
 * @method string getBossIdCountry() 获取法人证件国别/地区（中国CHN，香港HKG，澳门MAC，台湾CTN）
 * @method void setBossIdCountry(string $BossIdCountry) 设置法人证件国别/地区（中国CHN，香港HKG，澳门MAC，台湾CTN）
 * @method string getBossPositive() 获取法人身份证正面【私密区】（系统返回的图片路径）
 * @method void setBossPositive(string $BossPositive) 设置法人身份证正面【私密区】（系统返回的图片路径）
 * @method string getBossBack() 获取法人身份证背面【私密区】（系统返回的图片路径）
 * @method void setBossBack(string $BossBack) 设置法人身份证背面【私密区】（系统返回的图片路径）
 * @method string getBossStartDate() 获取法人证件生效时间（yyyy-mm-dd）
 * @method void setBossStartDate(string $BossStartDate) 设置法人证件生效时间（yyyy-mm-dd）
 * @method string getBossEndDate() 获取法人证件过期时间（yyyy-mm-dd）
 * @method void setBossEndDate(string $BossEndDate) 设置法人证件过期时间（yyyy-mm-dd）
 * @method string getLicencePicture() 获取许可证图片【私密区】，（小微商户不效验，随意传要有值，公司/个体户必传）
 * @method void setLicencePicture(string $LicencePicture) 设置许可证图片【私密区】，（小微商户不效验，随意传要有值，公司/个体户必传）
 * @method string getType() 获取商户类型：1-个体，2-小微，3-企业。不传默认为2-小微商户。
 * @method void setType(string $Type) 设置商户类型：1-个体，2-小微，3-企业。不传默认为2-小微商户。
 * @method string getOrganizationNo() 获取组织机构代码证号
 * @method void setOrganizationNo(string $OrganizationNo) 设置组织机构代码证号
 * @method string getOrganizationStartDate() 获取组织机构代码证生效时间（yyyy-mm-dd）
 * @method void setOrganizationStartDate(string $OrganizationStartDate) 设置组织机构代码证生效时间（yyyy-mm-dd）
 * @method string getOrganizationPicture() 获取组织机构代码证图片【私密区】
 * @method void setOrganizationPicture(string $OrganizationPicture) 设置组织机构代码证图片【私密区】
 * @method string getOrganizationEndDate() 获取组织机构代码证过期时间（yyyy-mm-dd）
 * @method void setOrganizationEndDate(string $OrganizationEndDate) 设置组织机构代码证过期时间（yyyy-mm-dd）
 * @method string getIntro() 获取商户简介
 * @method void setIntro(string $Intro) 设置商户简介
 * @method string getLogo() 获取商户logo【公共区】
 * @method void setLogo(string $Logo) 设置商户logo【公共区】
 * @method string getTag() 获取商户标记，自定义参数
 * @method void setTag(string $Tag) 设置商户标记，自定义参数
 * @method string getFinancialTelephone() 获取财务联系人电话
 * @method void setFinancialTelephone(string $FinancialTelephone) 设置财务联系人电话
 * @method string getFinancialContact() 获取财务联系人
 * @method void setFinancialContact(string $FinancialContact) 设置财务联系人
 * @method string getTaxRegistrationNo() 获取税务登记证号
 * @method void setTaxRegistrationNo(string $TaxRegistrationNo) 设置税务登记证号
 * @method string getTaxRegistrationPicture() 获取税务登记证图片【私密区】
 * @method void setTaxRegistrationPicture(string $TaxRegistrationPicture) 设置税务登记证图片【私密区】
 * @method string getTaxRegistrationStartDate() 获取税务登记证生效时间（yyyy-mm-dd）
 * @method void setTaxRegistrationStartDate(string $TaxRegistrationStartDate) 设置税务登记证生效时间（yyyy-mm-dd）
 * @method string getTaxRegistrationEndDate() 获取税务登记证过期时间（yyyy-mm-dd）
 * @method void setTaxRegistrationEndDate(string $TaxRegistrationEndDate) 设置税务登记证过期时间（yyyy-mm-dd）
 * @method string getAccountBoss() 获取结算账户人身份（1法人，2法人亲属），结算帐户为对私时必填
 * @method void setAccountBoss(string $AccountBoss) 设置结算账户人身份（1法人，2法人亲属），结算帐户为对私时必填
 * @method string getAccountManagerName() 获取客户经理姓名，必须为系统后台的管理员真实姓名
 * @method void setAccountManagerName(string $AccountManagerName) 设置客户经理姓名，必须为系统后台的管理员真实姓名
 * @method string getBossTelephone() 获取法人电话
 * @method void setBossTelephone(string $BossTelephone) 设置法人电话
 * @method string getBossJob() 获取法人职业
 * @method void setBossJob(string $BossJob) 设置法人职业
 * @method string getBossEmail() 获取法人邮箱
 * @method void setBossEmail(string $BossEmail) 设置法人邮箱
 * @method string getBossAddress() 获取法人住址
 * @method void setBossAddress(string $BossAddress) 设置法人住址
 * @method string getAccountIdType() 获取法人亲属证件类型（1居民身份证,2临时居民身份证,3居民户口簿,4护照,5港澳居民来往内地通行证,6回乡证,7军人证,8武警身份证,9其他法定文件）结算账户人身份为法人亲属时必填
 * @method void setAccountIdType(string $AccountIdType) 设置法人亲属证件类型（1居民身份证,2临时居民身份证,3居民户口簿,4护照,5港澳居民来往内地通行证,6回乡证,7军人证,8武警身份证,9其他法定文件）结算账户人身份为法人亲属时必填
 * @method string getAccountIdNo() 获取法人亲属证件号码
 * @method void setAccountIdNo(string $AccountIdNo) 设置法人亲属证件号码
 * @method string getLicencePictureTwo() 获取授权文件【私密区】
 * @method void setLicencePictureTwo(string $LicencePictureTwo) 设置授权文件【私密区】
 * @method string getOtherPictureOne() 获取其他资料1
 * @method void setOtherPictureOne(string $OtherPictureOne) 设置其他资料1
 * @method string getOtherPictureTwo() 获取其他资料2
 * @method void setOtherPictureTwo(string $OtherPictureTwo) 设置其他资料2
 * @method string getOtherPictureThree() 获取其他资料3
 * @method void setOtherPictureThree(string $OtherPictureThree) 设置其他资料3
 * @method string getOtherPictureFour() 获取其他资料4
 * @method void setOtherPictureFour(string $OtherPictureFour) 设置其他资料4
 * @method string getProfile() 获取沙箱环境填sandbox，正式环境不填
 * @method void setProfile(string $Profile) 设置沙箱环境填sandbox，正式环境不填
 */
class AddMerchantRequest extends AbstractModel
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
     * @var string 机构商户主键（系统有唯一性校验），建议使用商户表的主键ID，防止重复添加商户
     */
    public $OutMerchantId;

    /**
     * @var string 商户名称，小微商户命名要符合“”商户_名字” （例如：商户_张三）
     */
    public $MerchantName;

    /**
     * @var string 营业执照类型（1三证合一，2非三证合一）
     */
    public $BusinessLicenseType;

    /**
     * @var string 营业执照编号（系统有唯一性校验），（小微商户不效验，随意传要有值，公司/个体户必传）
     */
    public $BusinessLicenseNo;

    /**
     * @var string 营业执照图片【私密区】（系统返回的图片路径），（小微商户不效验，随意传要有值，公司/个体户必传）
     */
    public $BusinessLicensePicture;

    /**
     * @var string 营业执照生效时间（yyyy-mm-dd），（小微商户不效验，随意传要有值，公司/个体户必传）
     */
    public $BusinessLicenseStartDate;

    /**
     * @var string 营业执照过期时间（yyyy-mm-dd），（小微商户不效验，随意传要有值，公司/个体户必传）
     */
    public $BusinessLicenseEndDate;

    /**
     * @var array 行业分类编号列表（第一个分类编号为主分类，后面的为二级分类）
     */
    public $ClassificationIds;

    /**
     * @var string 招牌名称
     */
    public $BrandName;

    /**
     * @var string 联系电话
     */
    public $Telephone;

    /**
     * @var string 城市编号
     */
    public $CityId;

    /**
     * @var string 详细地址，不含省市区县名称，长度需要大于5。
     */
    public $Address;

    /**
     * @var string 营业时间，多个以小写逗号分开(9:00-12:00,13:00-18:00)
     */
    public $OpenHours;

    /**
     * @var string 结算账户类型（2对私，1对公）
     */
    public $AccountType;

    /**
     * @var string 清算联行号，开户行行号
     */
    public $BankNo;

    /**
     * @var string 开户行名称
     */
    public $BankName;

    /**
     * @var string 银行账号
     */
    public $AccountNo;

    /**
     * @var string 银行户名
     */
    public $AccountName;

    /**
     * @var string 法人证件类型（1居民身份证,2临时居民身份证,3居民户口簿,4护照,5港澳居民来往内地通行证,6回乡证,7军人证,8武警身份证,9其他法定文件）
     */
    public $BossIdType;

    /**
     * @var string 法人证件号码
     */
    public $BossIdNo;

    /**
     * @var string 法人姓名
     */
    public $BossName;

    /**
     * @var string 法人性别（1男，2女）
     */
    public $BossSex;

    /**
     * @var string 法人证件国别/地区（中国CHN，香港HKG，澳门MAC，台湾CTN）
     */
    public $BossIdCountry;

    /**
     * @var string 法人身份证正面【私密区】（系统返回的图片路径）
     */
    public $BossPositive;

    /**
     * @var string 法人身份证背面【私密区】（系统返回的图片路径）
     */
    public $BossBack;

    /**
     * @var string 法人证件生效时间（yyyy-mm-dd）
     */
    public $BossStartDate;

    /**
     * @var string 法人证件过期时间（yyyy-mm-dd）
     */
    public $BossEndDate;

    /**
     * @var string 许可证图片【私密区】，（小微商户不效验，随意传要有值，公司/个体户必传）
     */
    public $LicencePicture;

    /**
     * @var string 商户类型：1-个体，2-小微，3-企业。不传默认为2-小微商户。
     */
    public $Type;

    /**
     * @var string 组织机构代码证号
     */
    public $OrganizationNo;

    /**
     * @var string 组织机构代码证生效时间（yyyy-mm-dd）
     */
    public $OrganizationStartDate;

    /**
     * @var string 组织机构代码证图片【私密区】
     */
    public $OrganizationPicture;

    /**
     * @var string 组织机构代码证过期时间（yyyy-mm-dd）
     */
    public $OrganizationEndDate;

    /**
     * @var string 商户简介
     */
    public $Intro;

    /**
     * @var string 商户logo【公共区】
     */
    public $Logo;

    /**
     * @var string 商户标记，自定义参数
     */
    public $Tag;

    /**
     * @var string 财务联系人电话
     */
    public $FinancialTelephone;

    /**
     * @var string 财务联系人
     */
    public $FinancialContact;

    /**
     * @var string 税务登记证号
     */
    public $TaxRegistrationNo;

    /**
     * @var string 税务登记证图片【私密区】
     */
    public $TaxRegistrationPicture;

    /**
     * @var string 税务登记证生效时间（yyyy-mm-dd）
     */
    public $TaxRegistrationStartDate;

    /**
     * @var string 税务登记证过期时间（yyyy-mm-dd）
     */
    public $TaxRegistrationEndDate;

    /**
     * @var string 结算账户人身份（1法人，2法人亲属），结算帐户为对私时必填
     */
    public $AccountBoss;

    /**
     * @var string 客户经理姓名，必须为系统后台的管理员真实姓名
     */
    public $AccountManagerName;

    /**
     * @var string 法人电话
     */
    public $BossTelephone;

    /**
     * @var string 法人职业
     */
    public $BossJob;

    /**
     * @var string 法人邮箱
     */
    public $BossEmail;

    /**
     * @var string 法人住址
     */
    public $BossAddress;

    /**
     * @var string 法人亲属证件类型（1居民身份证,2临时居民身份证,3居民户口簿,4护照,5港澳居民来往内地通行证,6回乡证,7军人证,8武警身份证,9其他法定文件）结算账户人身份为法人亲属时必填
     */
    public $AccountIdType;

    /**
     * @var string 法人亲属证件号码
     */
    public $AccountIdNo;

    /**
     * @var string 授权文件【私密区】
     */
    public $LicencePictureTwo;

    /**
     * @var string 其他资料1
     */
    public $OtherPictureOne;

    /**
     * @var string 其他资料2
     */
    public $OtherPictureTwo;

    /**
     * @var string 其他资料3
     */
    public $OtherPictureThree;

    /**
     * @var string 其他资料4
     */
    public $OtherPictureFour;

    /**
     * @var string 沙箱环境填sandbox，正式环境不填
     */
    public $Profile;

    /**
     * @param string $OpenId 收单系统分配的开放ID
     * @param string $OpenKey 收单系统分配的密钥
     * @param string $OutMerchantId 机构商户主键（系统有唯一性校验），建议使用商户表的主键ID，防止重复添加商户
     * @param string $MerchantName 商户名称，小微商户命名要符合“”商户_名字” （例如：商户_张三）
     * @param string $BusinessLicenseType 营业执照类型（1三证合一，2非三证合一）
     * @param string $BusinessLicenseNo 营业执照编号（系统有唯一性校验），（小微商户不效验，随意传要有值，公司/个体户必传）
     * @param string $BusinessLicensePicture 营业执照图片【私密区】（系统返回的图片路径），（小微商户不效验，随意传要有值，公司/个体户必传）
     * @param string $BusinessLicenseStartDate 营业执照生效时间（yyyy-mm-dd），（小微商户不效验，随意传要有值，公司/个体户必传）
     * @param string $BusinessLicenseEndDate 营业执照过期时间（yyyy-mm-dd），（小微商户不效验，随意传要有值，公司/个体户必传）
     * @param array $ClassificationIds 行业分类编号列表（第一个分类编号为主分类，后面的为二级分类）
     * @param string $BrandName 招牌名称
     * @param string $Telephone 联系电话
     * @param string $CityId 城市编号
     * @param string $Address 详细地址，不含省市区县名称，长度需要大于5。
     * @param string $OpenHours 营业时间，多个以小写逗号分开(9:00-12:00,13:00-18:00)
     * @param string $AccountType 结算账户类型（2对私，1对公）
     * @param string $BankNo 清算联行号，开户行行号
     * @param string $BankName 开户行名称
     * @param string $AccountNo 银行账号
     * @param string $AccountName 银行户名
     * @param string $BossIdType 法人证件类型（1居民身份证,2临时居民身份证,3居民户口簿,4护照,5港澳居民来往内地通行证,6回乡证,7军人证,8武警身份证,9其他法定文件）
     * @param string $BossIdNo 法人证件号码
     * @param string $BossName 法人姓名
     * @param string $BossSex 法人性别（1男，2女）
     * @param string $BossIdCountry 法人证件国别/地区（中国CHN，香港HKG，澳门MAC，台湾CTN）
     * @param string $BossPositive 法人身份证正面【私密区】（系统返回的图片路径）
     * @param string $BossBack 法人身份证背面【私密区】（系统返回的图片路径）
     * @param string $BossStartDate 法人证件生效时间（yyyy-mm-dd）
     * @param string $BossEndDate 法人证件过期时间（yyyy-mm-dd）
     * @param string $LicencePicture 许可证图片【私密区】，（小微商户不效验，随意传要有值，公司/个体户必传）
     * @param string $Type 商户类型：1-个体，2-小微，3-企业。不传默认为2-小微商户。
     * @param string $OrganizationNo 组织机构代码证号
     * @param string $OrganizationStartDate 组织机构代码证生效时间（yyyy-mm-dd）
     * @param string $OrganizationPicture 组织机构代码证图片【私密区】
     * @param string $OrganizationEndDate 组织机构代码证过期时间（yyyy-mm-dd）
     * @param string $Intro 商户简介
     * @param string $Logo 商户logo【公共区】
     * @param string $Tag 商户标记，自定义参数
     * @param string $FinancialTelephone 财务联系人电话
     * @param string $FinancialContact 财务联系人
     * @param string $TaxRegistrationNo 税务登记证号
     * @param string $TaxRegistrationPicture 税务登记证图片【私密区】
     * @param string $TaxRegistrationStartDate 税务登记证生效时间（yyyy-mm-dd）
     * @param string $TaxRegistrationEndDate 税务登记证过期时间（yyyy-mm-dd）
     * @param string $AccountBoss 结算账户人身份（1法人，2法人亲属），结算帐户为对私时必填
     * @param string $AccountManagerName 客户经理姓名，必须为系统后台的管理员真实姓名
     * @param string $BossTelephone 法人电话
     * @param string $BossJob 法人职业
     * @param string $BossEmail 法人邮箱
     * @param string $BossAddress 法人住址
     * @param string $AccountIdType 法人亲属证件类型（1居民身份证,2临时居民身份证,3居民户口簿,4护照,5港澳居民来往内地通行证,6回乡证,7军人证,8武警身份证,9其他法定文件）结算账户人身份为法人亲属时必填
     * @param string $AccountIdNo 法人亲属证件号码
     * @param string $LicencePictureTwo 授权文件【私密区】
     * @param string $OtherPictureOne 其他资料1
     * @param string $OtherPictureTwo 其他资料2
     * @param string $OtherPictureThree 其他资料3
     * @param string $OtherPictureFour 其他资料4
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

        if (array_key_exists("OutMerchantId",$param) and $param["OutMerchantId"] !== null) {
            $this->OutMerchantId = $param["OutMerchantId"];
        }

        if (array_key_exists("MerchantName",$param) and $param["MerchantName"] !== null) {
            $this->MerchantName = $param["MerchantName"];
        }

        if (array_key_exists("BusinessLicenseType",$param) and $param["BusinessLicenseType"] !== null) {
            $this->BusinessLicenseType = $param["BusinessLicenseType"];
        }

        if (array_key_exists("BusinessLicenseNo",$param) and $param["BusinessLicenseNo"] !== null) {
            $this->BusinessLicenseNo = $param["BusinessLicenseNo"];
        }

        if (array_key_exists("BusinessLicensePicture",$param) and $param["BusinessLicensePicture"] !== null) {
            $this->BusinessLicensePicture = $param["BusinessLicensePicture"];
        }

        if (array_key_exists("BusinessLicenseStartDate",$param) and $param["BusinessLicenseStartDate"] !== null) {
            $this->BusinessLicenseStartDate = $param["BusinessLicenseStartDate"];
        }

        if (array_key_exists("BusinessLicenseEndDate",$param) and $param["BusinessLicenseEndDate"] !== null) {
            $this->BusinessLicenseEndDate = $param["BusinessLicenseEndDate"];
        }

        if (array_key_exists("ClassificationIds",$param) and $param["ClassificationIds"] !== null) {
            $this->ClassificationIds = $param["ClassificationIds"];
        }

        if (array_key_exists("BrandName",$param) and $param["BrandName"] !== null) {
            $this->BrandName = $param["BrandName"];
        }

        if (array_key_exists("Telephone",$param) and $param["Telephone"] !== null) {
            $this->Telephone = $param["Telephone"];
        }

        if (array_key_exists("CityId",$param) and $param["CityId"] !== null) {
            $this->CityId = $param["CityId"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("OpenHours",$param) and $param["OpenHours"] !== null) {
            $this->OpenHours = $param["OpenHours"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("BankNo",$param) and $param["BankNo"] !== null) {
            $this->BankNo = $param["BankNo"];
        }

        if (array_key_exists("BankName",$param) and $param["BankName"] !== null) {
            $this->BankName = $param["BankName"];
        }

        if (array_key_exists("AccountNo",$param) and $param["AccountNo"] !== null) {
            $this->AccountNo = $param["AccountNo"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("BossIdType",$param) and $param["BossIdType"] !== null) {
            $this->BossIdType = $param["BossIdType"];
        }

        if (array_key_exists("BossIdNo",$param) and $param["BossIdNo"] !== null) {
            $this->BossIdNo = $param["BossIdNo"];
        }

        if (array_key_exists("BossName",$param) and $param["BossName"] !== null) {
            $this->BossName = $param["BossName"];
        }

        if (array_key_exists("BossSex",$param) and $param["BossSex"] !== null) {
            $this->BossSex = $param["BossSex"];
        }

        if (array_key_exists("BossIdCountry",$param) and $param["BossIdCountry"] !== null) {
            $this->BossIdCountry = $param["BossIdCountry"];
        }

        if (array_key_exists("BossPositive",$param) and $param["BossPositive"] !== null) {
            $this->BossPositive = $param["BossPositive"];
        }

        if (array_key_exists("BossBack",$param) and $param["BossBack"] !== null) {
            $this->BossBack = $param["BossBack"];
        }

        if (array_key_exists("BossStartDate",$param) and $param["BossStartDate"] !== null) {
            $this->BossStartDate = $param["BossStartDate"];
        }

        if (array_key_exists("BossEndDate",$param) and $param["BossEndDate"] !== null) {
            $this->BossEndDate = $param["BossEndDate"];
        }

        if (array_key_exists("LicencePicture",$param) and $param["LicencePicture"] !== null) {
            $this->LicencePicture = $param["LicencePicture"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("OrganizationNo",$param) and $param["OrganizationNo"] !== null) {
            $this->OrganizationNo = $param["OrganizationNo"];
        }

        if (array_key_exists("OrganizationStartDate",$param) and $param["OrganizationStartDate"] !== null) {
            $this->OrganizationStartDate = $param["OrganizationStartDate"];
        }

        if (array_key_exists("OrganizationPicture",$param) and $param["OrganizationPicture"] !== null) {
            $this->OrganizationPicture = $param["OrganizationPicture"];
        }

        if (array_key_exists("OrganizationEndDate",$param) and $param["OrganizationEndDate"] !== null) {
            $this->OrganizationEndDate = $param["OrganizationEndDate"];
        }

        if (array_key_exists("Intro",$param) and $param["Intro"] !== null) {
            $this->Intro = $param["Intro"];
        }

        if (array_key_exists("Logo",$param) and $param["Logo"] !== null) {
            $this->Logo = $param["Logo"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("FinancialTelephone",$param) and $param["FinancialTelephone"] !== null) {
            $this->FinancialTelephone = $param["FinancialTelephone"];
        }

        if (array_key_exists("FinancialContact",$param) and $param["FinancialContact"] !== null) {
            $this->FinancialContact = $param["FinancialContact"];
        }

        if (array_key_exists("TaxRegistrationNo",$param) and $param["TaxRegistrationNo"] !== null) {
            $this->TaxRegistrationNo = $param["TaxRegistrationNo"];
        }

        if (array_key_exists("TaxRegistrationPicture",$param) and $param["TaxRegistrationPicture"] !== null) {
            $this->TaxRegistrationPicture = $param["TaxRegistrationPicture"];
        }

        if (array_key_exists("TaxRegistrationStartDate",$param) and $param["TaxRegistrationStartDate"] !== null) {
            $this->TaxRegistrationStartDate = $param["TaxRegistrationStartDate"];
        }

        if (array_key_exists("TaxRegistrationEndDate",$param) and $param["TaxRegistrationEndDate"] !== null) {
            $this->TaxRegistrationEndDate = $param["TaxRegistrationEndDate"];
        }

        if (array_key_exists("AccountBoss",$param) and $param["AccountBoss"] !== null) {
            $this->AccountBoss = $param["AccountBoss"];
        }

        if (array_key_exists("AccountManagerName",$param) and $param["AccountManagerName"] !== null) {
            $this->AccountManagerName = $param["AccountManagerName"];
        }

        if (array_key_exists("BossTelephone",$param) and $param["BossTelephone"] !== null) {
            $this->BossTelephone = $param["BossTelephone"];
        }

        if (array_key_exists("BossJob",$param) and $param["BossJob"] !== null) {
            $this->BossJob = $param["BossJob"];
        }

        if (array_key_exists("BossEmail",$param) and $param["BossEmail"] !== null) {
            $this->BossEmail = $param["BossEmail"];
        }

        if (array_key_exists("BossAddress",$param) and $param["BossAddress"] !== null) {
            $this->BossAddress = $param["BossAddress"];
        }

        if (array_key_exists("AccountIdType",$param) and $param["AccountIdType"] !== null) {
            $this->AccountIdType = $param["AccountIdType"];
        }

        if (array_key_exists("AccountIdNo",$param) and $param["AccountIdNo"] !== null) {
            $this->AccountIdNo = $param["AccountIdNo"];
        }

        if (array_key_exists("LicencePictureTwo",$param) and $param["LicencePictureTwo"] !== null) {
            $this->LicencePictureTwo = $param["LicencePictureTwo"];
        }

        if (array_key_exists("OtherPictureOne",$param) and $param["OtherPictureOne"] !== null) {
            $this->OtherPictureOne = $param["OtherPictureOne"];
        }

        if (array_key_exists("OtherPictureTwo",$param) and $param["OtherPictureTwo"] !== null) {
            $this->OtherPictureTwo = $param["OtherPictureTwo"];
        }

        if (array_key_exists("OtherPictureThree",$param) and $param["OtherPictureThree"] !== null) {
            $this->OtherPictureThree = $param["OtherPictureThree"];
        }

        if (array_key_exists("OtherPictureFour",$param) and $param["OtherPictureFour"] !== null) {
            $this->OtherPictureFour = $param["OtherPictureFour"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
