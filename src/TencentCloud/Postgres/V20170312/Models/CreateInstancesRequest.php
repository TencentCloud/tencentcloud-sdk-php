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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstances请求参数结构体
 *
 * @method string getSpecCode() 获取售卖规格ID。该参数可以通过调用DescribeProductConfig的返回值中的SpecCode字段来获取。
 * @method void setSpecCode(string $SpecCode) 设置售卖规格ID。该参数可以通过调用DescribeProductConfig的返回值中的SpecCode字段来获取。
 * @method integer getStorage() 获取实例容量大小，单位：GB。
 * @method void setStorage(integer $Storage) 设置实例容量大小，单位：GB。
 * @method integer getInstanceCount() 获取一次性购买的实例数量。取值1-10。
 * @method void setInstanceCount(integer $InstanceCount) 设置一次性购买的实例数量。取值1-10。
 * @method integer getPeriod() 获取购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值，按量计费模式下该参数传1。
 * @method void setPeriod(integer $Period) 设置购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值，按量计费模式下该参数传1。
 * @method string getZone() 获取可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。
 * @method void setZone(string $Zone) 设置可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。
 * @method string getCharset() 获取实例字符集，目前只支持：UTF8、LATIN1。
 * @method void setCharset(string $Charset) 设置实例字符集，目前只支持：UTF8、LATIN1。
 * @method string getAdminName() 获取实例根账号用户名。
 * @method void setAdminName(string $AdminName) 设置实例根账号用户名。
 * @method string getAdminPassword() 获取实例根账号用户名对应的密码。
 * @method void setAdminPassword(string $AdminPassword) 设置实例根账号用户名对应的密码。
 * @method integer getProjectId() 获取项目ID。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。
 * @method string getDBVersion() 获取PostgreSQL版本。当输入该参数时，会基于此版本创建对应的最新内核版本号实例。该参数和DBMajorVersion、DBKernelVersion至少需要传递一个。
 * @method void setDBVersion(string $DBVersion) 设置PostgreSQL版本。当输入该参数时，会基于此版本创建对应的最新内核版本号实例。该参数和DBMajorVersion、DBKernelVersion至少需要传递一个。
 * @method string getInstanceChargeType() 获取实例计费类型。目前支持：PREPAID（预付费，即包年包月），POSTPAID_BY_HOUR（后付费，即按量计费）。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费类型。目前支持：PREPAID（预付费，即包年包月），POSTPAID_BY_HOUR（后付费，即按量计费）。
 * @method integer getAutoVoucher() 获取是否自动使用代金券。1（是），0（否），默认不使用。
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券。1（是），0（否），默认不使用。
 * @method array getVoucherIds() 获取代金券ID列表，目前仅支持指定一张代金券。
 * @method void setVoucherIds(array $VoucherIds) 设置代金券ID列表，目前仅支持指定一张代金券。
 * @method string getVpcId() 获取私有网络ID。
 * @method void setVpcId(string $VpcId) 设置私有网络ID。
 * @method string getSubnetId() 获取已配置的私有网络中的子网ID。
 * @method void setSubnetId(string $SubnetId) 设置已配置的私有网络中的子网ID。
 * @method integer getAutoRenewFlag() 获取续费标记：0-正常续费（默认）；1-自动续费。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置续费标记：0-正常续费（默认）；1-自动续费。
 * @method integer getActivityId() 获取活动ID。
 * @method void setActivityId(integer $ActivityId) 设置活动ID。
 * @method string getName() 获取实例名。
 * @method void setName(string $Name) 设置实例名。
 * @method integer getNeedSupportIpv6() 获取是否需要支持Ipv6，1：是，0：否（默认）。
 * @method void setNeedSupportIpv6(integer $NeedSupportIpv6) 设置是否需要支持Ipv6，1：是，0：否（默认）。
 * @method array getTagList() 获取实例需要绑定的Tag信息，默认为空。
 * @method void setTagList(array $TagList) 设置实例需要绑定的Tag信息，默认为空。
 * @method array getSecurityGroupIds() 获取安全组ID。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组ID。
 * @method string getDBMajorVersion() 获取PostgreSQL主要版本。目前支持10，11，12，13这几个版本。当输入该参数时，会基于此版本创建对应的最新内核版本号实例。该参数和DBVersion、DBKernelVersion至少需要传递一个。
 * @method void setDBMajorVersion(string $DBMajorVersion) 设置PostgreSQL主要版本。目前支持10，11，12，13这几个版本。当输入该参数时，会基于此版本创建对应的最新内核版本号实例。该参数和DBVersion、DBKernelVersion至少需要传递一个。
 * @method string getDBKernelVersion() 获取PostgreSQL内核版本。当输入该参数时，会创建该内核版本号实例。该参数和DBVersion、DBMajorVersion至少需要传递一个。
 * @method void setDBKernelVersion(string $DBKernelVersion) 设置PostgreSQL内核版本。当输入该参数时，会创建该内核版本号实例。该参数和DBVersion、DBMajorVersion至少需要传递一个。
 * @method array getDBNodeSet() 获取实例节点信息，购买跨可用区实例时填写。
 * @method void setDBNodeSet(array $DBNodeSet) 设置实例节点信息，购买跨可用区实例时填写。
 * @method integer getNeedSupportTDE() 获取是否需要支持数据透明加密，1：是，0：否（默认）。
 * @method void setNeedSupportTDE(integer $NeedSupportTDE) 设置是否需要支持数据透明加密，1：是，0：否（默认）。
 * @method string getKMSKeyId() 获取自定义密钥的KeyId，若选择自定义密匙加密，则需要传入自定义密匙的KeyId，KeyId是CMK的唯一标识。
 * @method void setKMSKeyId(string $KMSKeyId) 设置自定义密钥的KeyId，若选择自定义密匙加密，则需要传入自定义密匙的KeyId，KeyId是CMK的唯一标识。
 * @method string getKMSRegion() 获取使用KMS服务的地域，KMSRegion为空默认使用本地域的KMS，本地域不支持的情况下需自选其他KMS支持的地域。
 * @method void setKMSRegion(string $KMSRegion) 设置使用KMS服务的地域，KMSRegion为空默认使用本地域的KMS，本地域不支持的情况下需自选其他KMS支持的地域。
 * @method string getDBEngine() 获取数据库引擎，支持：
1、postgresql（云数据库PostgreSQL）；
2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；
如不指定默认使用postgresql。
 * @method void setDBEngine(string $DBEngine) 设置数据库引擎，支持：
1、postgresql（云数据库PostgreSQL）；
2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；
如不指定默认使用postgresql。
 * @method string getDBEngineConfig() 获取数据库引擎的配置信息，配置格式如下：
{"$key1":"$value1", "$key2":"$value2"}

各引擎支持如下：
1、mssql_compatible引擎：
migrationMode：数据库模式，可选参数，可取值：single-db（单数据库模式），multi-db（多数据库模式）。默认为single-db。
defaultLocale：排序区域规则，可选参数，在初始化后不可修改，默认为en_US，可选值如下：
"af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN"。
serverCollationName：排序规则名称，可选参数，在初始化后不可修改，默认为sql_latin1_general_cp1_ci_as，可选值如下：
"bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as"。
 * @method void setDBEngineConfig(string $DBEngineConfig) 设置数据库引擎的配置信息，配置格式如下：
{"$key1":"$value1", "$key2":"$value2"}

各引擎支持如下：
1、mssql_compatible引擎：
migrationMode：数据库模式，可选参数，可取值：single-db（单数据库模式），multi-db（多数据库模式）。默认为single-db。
defaultLocale：排序区域规则，可选参数，在初始化后不可修改，默认为en_US，可选值如下：
"af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN"。
serverCollationName：排序规则名称，可选参数，在初始化后不可修改，默认为sql_latin1_general_cp1_ci_as，可选值如下：
"bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as"。
 */
class CreateInstancesRequest extends AbstractModel
{
    /**
     * @var string 售卖规格ID。该参数可以通过调用DescribeProductConfig的返回值中的SpecCode字段来获取。
     */
    public $SpecCode;

    /**
     * @var integer 实例容量大小，单位：GB。
     */
    public $Storage;

    /**
     * @var integer 一次性购买的实例数量。取值1-10。
     */
    public $InstanceCount;

    /**
     * @var integer 购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值，按量计费模式下该参数传1。
     */
    public $Period;

    /**
     * @var string 可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。
     */
    public $Zone;

    /**
     * @var string 实例字符集，目前只支持：UTF8、LATIN1。
     */
    public $Charset;

    /**
     * @var string 实例根账号用户名。
     */
    public $AdminName;

    /**
     * @var string 实例根账号用户名对应的密码。
     */
    public $AdminPassword;

    /**
     * @var integer 项目ID。
     */
    public $ProjectId;

    /**
     * @var string PostgreSQL版本。当输入该参数时，会基于此版本创建对应的最新内核版本号实例。该参数和DBMajorVersion、DBKernelVersion至少需要传递一个。
     */
    public $DBVersion;

    /**
     * @var string 实例计费类型。目前支持：PREPAID（预付费，即包年包月），POSTPAID_BY_HOUR（后付费，即按量计费）。
     */
    public $InstanceChargeType;

    /**
     * @var integer 是否自动使用代金券。1（是），0（否），默认不使用。
     */
    public $AutoVoucher;

    /**
     * @var array 代金券ID列表，目前仅支持指定一张代金券。
     */
    public $VoucherIds;

    /**
     * @var string 私有网络ID。
     */
    public $VpcId;

    /**
     * @var string 已配置的私有网络中的子网ID。
     */
    public $SubnetId;

    /**
     * @var integer 续费标记：0-正常续费（默认）；1-自动续费。
     */
    public $AutoRenewFlag;

    /**
     * @var integer 活动ID。
     */
    public $ActivityId;

    /**
     * @var string 实例名。
     */
    public $Name;

    /**
     * @var integer 是否需要支持Ipv6，1：是，0：否（默认）。
     */
    public $NeedSupportIpv6;

    /**
     * @var array 实例需要绑定的Tag信息，默认为空。
     */
    public $TagList;

    /**
     * @var array 安全组ID。
     */
    public $SecurityGroupIds;

    /**
     * @var string PostgreSQL主要版本。目前支持10，11，12，13这几个版本。当输入该参数时，会基于此版本创建对应的最新内核版本号实例。该参数和DBVersion、DBKernelVersion至少需要传递一个。
     */
    public $DBMajorVersion;

    /**
     * @var string PostgreSQL内核版本。当输入该参数时，会创建该内核版本号实例。该参数和DBVersion、DBMajorVersion至少需要传递一个。
     */
    public $DBKernelVersion;

    /**
     * @var array 实例节点信息，购买跨可用区实例时填写。
     */
    public $DBNodeSet;

    /**
     * @var integer 是否需要支持数据透明加密，1：是，0：否（默认）。
     */
    public $NeedSupportTDE;

    /**
     * @var string 自定义密钥的KeyId，若选择自定义密匙加密，则需要传入自定义密匙的KeyId，KeyId是CMK的唯一标识。
     */
    public $KMSKeyId;

    /**
     * @var string 使用KMS服务的地域，KMSRegion为空默认使用本地域的KMS，本地域不支持的情况下需自选其他KMS支持的地域。
     */
    public $KMSRegion;

    /**
     * @var string 数据库引擎，支持：
1、postgresql（云数据库PostgreSQL）；
2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；
如不指定默认使用postgresql。
     */
    public $DBEngine;

    /**
     * @var string 数据库引擎的配置信息，配置格式如下：
{"$key1":"$value1", "$key2":"$value2"}

各引擎支持如下：
1、mssql_compatible引擎：
migrationMode：数据库模式，可选参数，可取值：single-db（单数据库模式），multi-db（多数据库模式）。默认为single-db。
defaultLocale：排序区域规则，可选参数，在初始化后不可修改，默认为en_US，可选值如下：
"af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN"。
serverCollationName：排序规则名称，可选参数，在初始化后不可修改，默认为sql_latin1_general_cp1_ci_as，可选值如下：
"bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as"。
     */
    public $DBEngineConfig;

    /**
     * @param string $SpecCode 售卖规格ID。该参数可以通过调用DescribeProductConfig的返回值中的SpecCode字段来获取。
     * @param integer $Storage 实例容量大小，单位：GB。
     * @param integer $InstanceCount 一次性购买的实例数量。取值1-10。
     * @param integer $Period 购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值，按量计费模式下该参数传1。
     * @param string $Zone 可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。
     * @param string $Charset 实例字符集，目前只支持：UTF8、LATIN1。
     * @param string $AdminName 实例根账号用户名。
     * @param string $AdminPassword 实例根账号用户名对应的密码。
     * @param integer $ProjectId 项目ID。
     * @param string $DBVersion PostgreSQL版本。当输入该参数时，会基于此版本创建对应的最新内核版本号实例。该参数和DBMajorVersion、DBKernelVersion至少需要传递一个。
     * @param string $InstanceChargeType 实例计费类型。目前支持：PREPAID（预付费，即包年包月），POSTPAID_BY_HOUR（后付费，即按量计费）。
     * @param integer $AutoVoucher 是否自动使用代金券。1（是），0（否），默认不使用。
     * @param array $VoucherIds 代金券ID列表，目前仅支持指定一张代金券。
     * @param string $VpcId 私有网络ID。
     * @param string $SubnetId 已配置的私有网络中的子网ID。
     * @param integer $AutoRenewFlag 续费标记：0-正常续费（默认）；1-自动续费。
     * @param integer $ActivityId 活动ID。
     * @param string $Name 实例名。
     * @param integer $NeedSupportIpv6 是否需要支持Ipv6，1：是，0：否（默认）。
     * @param array $TagList 实例需要绑定的Tag信息，默认为空。
     * @param array $SecurityGroupIds 安全组ID。
     * @param string $DBMajorVersion PostgreSQL主要版本。目前支持10，11，12，13这几个版本。当输入该参数时，会基于此版本创建对应的最新内核版本号实例。该参数和DBVersion、DBKernelVersion至少需要传递一个。
     * @param string $DBKernelVersion PostgreSQL内核版本。当输入该参数时，会创建该内核版本号实例。该参数和DBVersion、DBMajorVersion至少需要传递一个。
     * @param array $DBNodeSet 实例节点信息，购买跨可用区实例时填写。
     * @param integer $NeedSupportTDE 是否需要支持数据透明加密，1：是，0：否（默认）。
     * @param string $KMSKeyId 自定义密钥的KeyId，若选择自定义密匙加密，则需要传入自定义密匙的KeyId，KeyId是CMK的唯一标识。
     * @param string $KMSRegion 使用KMS服务的地域，KMSRegion为空默认使用本地域的KMS，本地域不支持的情况下需自选其他KMS支持的地域。
     * @param string $DBEngine 数据库引擎，支持：
1、postgresql（云数据库PostgreSQL）；
2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；
如不指定默认使用postgresql。
     * @param string $DBEngineConfig 数据库引擎的配置信息，配置格式如下：
{"$key1":"$value1", "$key2":"$value2"}

各引擎支持如下：
1、mssql_compatible引擎：
migrationMode：数据库模式，可选参数，可取值：single-db（单数据库模式），multi-db（多数据库模式）。默认为single-db。
defaultLocale：排序区域规则，可选参数，在初始化后不可修改，默认为en_US，可选值如下：
"af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN"。
serverCollationName：排序规则名称，可选参数，在初始化后不可修改，默认为sql_latin1_general_cp1_ci_as，可选值如下：
"bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as"。
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
        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("AdminName",$param) and $param["AdminName"] !== null) {
            $this->AdminName = $param["AdminName"];
        }

        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            $this->AdminPassword = $param["AdminPassword"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NeedSupportIpv6",$param) and $param["NeedSupportIpv6"] !== null) {
            $this->NeedSupportIpv6 = $param["NeedSupportIpv6"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("DBMajorVersion",$param) and $param["DBMajorVersion"] !== null) {
            $this->DBMajorVersion = $param["DBMajorVersion"];
        }

        if (array_key_exists("DBKernelVersion",$param) and $param["DBKernelVersion"] !== null) {
            $this->DBKernelVersion = $param["DBKernelVersion"];
        }

        if (array_key_exists("DBNodeSet",$param) and $param["DBNodeSet"] !== null) {
            $this->DBNodeSet = [];
            foreach ($param["DBNodeSet"] as $key => $value){
                $obj = new DBNode();
                $obj->deserialize($value);
                array_push($this->DBNodeSet, $obj);
            }
        }

        if (array_key_exists("NeedSupportTDE",$param) and $param["NeedSupportTDE"] !== null) {
            $this->NeedSupportTDE = $param["NeedSupportTDE"];
        }

        if (array_key_exists("KMSKeyId",$param) and $param["KMSKeyId"] !== null) {
            $this->KMSKeyId = $param["KMSKeyId"];
        }

        if (array_key_exists("KMSRegion",$param) and $param["KMSRegion"] !== null) {
            $this->KMSRegion = $param["KMSRegion"];
        }

        if (array_key_exists("DBEngine",$param) and $param["DBEngine"] !== null) {
            $this->DBEngine = $param["DBEngine"];
        }

        if (array_key_exists("DBEngineConfig",$param) and $param["DBEngineConfig"] !== null) {
            $this->DBEngineConfig = $param["DBEngineConfig"];
        }
    }
}
