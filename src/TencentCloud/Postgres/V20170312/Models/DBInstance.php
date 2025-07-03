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
 * 描述实例的详细信息
 *
 * @method string getRegion() 获取实例所属地域，如: ap-guangzhou，对应RegionSet的Region字段。
 * @method void setRegion(string $Region) 设置实例所属地域，如: ap-guangzhou，对应RegionSet的Region字段。
 * @method string getZone() 获取实例所属可用区， 如：ap-guangzhou-3，对应ZoneSet的Zone字段。
 * @method void setZone(string $Zone) 设置实例所属可用区， 如：ap-guangzhou-3，对应ZoneSet的Zone字段。
 * @method string getVpcId() 获取私有网络ID，形如vpc-e6w23k31。有效的VpcId可通过登录控制台查询；也可以调用接口 [DescribeVpcs](https://cloud.tencent.com/document/api/215/15778) ，从接口返回中的unVpcId字段获取。
 * @method void setVpcId(string $VpcId) 设置私有网络ID，形如vpc-e6w23k31。有效的VpcId可通过登录控制台查询；也可以调用接口 [DescribeVpcs](https://cloud.tencent.com/document/api/215/15778) ，从接口返回中的unVpcId字段获取。
 * @method string getSubnetId() 获取私有网络子网ID，形如subnet-51lcif9y。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 [DescribeSubnets ](https://cloud.tencent.com/document/api/215/15784)，从接口返回中的unSubnetId字段获取。
 * @method void setSubnetId(string $SubnetId) 设置私有网络子网ID，形如subnet-51lcif9y。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 [DescribeSubnets ](https://cloud.tencent.com/document/api/215/15784)，从接口返回中的unSubnetId字段获取。
 * @method string getDBInstanceId() 获取实例ID。
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。
 * @method string getDBInstanceName() 获取实例名称。
 * @method void setDBInstanceName(string $DBInstanceName) 设置实例名称。
 * @method string getDBInstanceStatus() 获取实例状态，分别为：applying（申请中）、init(待初始化)、initing(初始化中)、running(运行中)、limited run（受限运行）、isolating（隔离中）、isolated（已隔离）、disisolating（解隔离中）、recycling（回收中）、recycled（已回收）、job running（任务执行中）、offline（下线）、migrating（迁移中）、expanding（扩容中）、waitSwitch（等待切换）、switching（切换中）、readonly（只读）、restarting（重启中）、network changing（网络变更中）、upgrading（内核版本升级中）、audit-switching（审计状态变更中）、primary-switching（主备切换中）、offlining(下线中)、deployment changing（可用区变更中）、cloning（恢复数据中）、parameter modifying（参数修改中）、log-switching（日志状态变更中）、restoring（恢复中）、expanding（变配中）
 * @method void setDBInstanceStatus(string $DBInstanceStatus) 设置实例状态，分别为：applying（申请中）、init(待初始化)、initing(初始化中)、running(运行中)、limited run（受限运行）、isolating（隔离中）、isolated（已隔离）、disisolating（解隔离中）、recycling（回收中）、recycled（已回收）、job running（任务执行中）、offline（下线）、migrating（迁移中）、expanding（扩容中）、waitSwitch（等待切换）、switching（切换中）、readonly（只读）、restarting（重启中）、network changing（网络变更中）、upgrading（内核版本升级中）、audit-switching（审计状态变更中）、primary-switching（主备切换中）、offlining(下线中)、deployment changing（可用区变更中）、cloning（恢复数据中）、parameter modifying（参数修改中）、log-switching（日志状态变更中）、restoring（恢复中）、expanding（变配中）
 * @method integer getDBInstanceMemory() 获取实例分配的内存大小，单位：GB
 * @method void setDBInstanceMemory(integer $DBInstanceMemory) 设置实例分配的内存大小，单位：GB
 * @method integer getDBInstanceStorage() 获取实例分配的存储空间大小，单位：GB
 * @method void setDBInstanceStorage(integer $DBInstanceStorage) 设置实例分配的存储空间大小，单位：GB
 * @method integer getDBInstanceCpu() 获取实例分配的CPU数量，单位：个
 * @method void setDBInstanceCpu(integer $DBInstanceCpu) 设置实例分配的CPU数量，单位：个
 * @method string getDBInstanceClass() 获取售卖规格ID
 * @method void setDBInstanceClass(string $DBInstanceClass) 设置售卖规格ID
 * @method string getDBMajorVersion() 获取PostgreSQL大版本号，版本信息可从[DescribeDBVersions](https://cloud.tencent.com/document/api/409/89018)获取，目前支持10，11，12，13，14，15这几个大版本。
 * @method void setDBMajorVersion(string $DBMajorVersion) 设置PostgreSQL大版本号，版本信息可从[DescribeDBVersions](https://cloud.tencent.com/document/api/409/89018)获取，目前支持10，11，12，13，14，15这几个大版本。
 * @method string getDBVersion() 获取PostgreSQL社区大版本+小版本号，如12.4，版本信息可从[DescribeDBVersions](https://cloud.tencent.com/document/api/409/89018)获取。
 * @method void setDBVersion(string $DBVersion) 设置PostgreSQL社区大版本+小版本号，如12.4，版本信息可从[DescribeDBVersions](https://cloud.tencent.com/document/api/409/89018)获取。
 * @method string getDBKernelVersion() 获取PostgreSQL内核版本号，如v12.7_r1.8，版本信息可从[DescribeDBVersions](https://cloud.tencent.com/document/api/409/89018)获取。
 * @method void setDBKernelVersion(string $DBKernelVersion) 设置PostgreSQL内核版本号，如v12.7_r1.8，版本信息可从[DescribeDBVersions](https://cloud.tencent.com/document/api/409/89018)获取。
 * @method string getDBInstanceType() 获取实例类型，类型有：
<li>primary：主实例</li>
<li>readonly：只读实例</li>
<li>guard：灾备实例</li>
<li>temp：临时实例</li>
 * @method void setDBInstanceType(string $DBInstanceType) 设置实例类型，类型有：
<li>primary：主实例</li>
<li>readonly：只读实例</li>
<li>guard：灾备实例</li>
<li>temp：临时实例</li>
 * @method string getDBInstanceVersion() 获取实例版本，目前只支持standard（双机高可用版, 一主一从）。
 * @method void setDBInstanceVersion(string $DBInstanceVersion) 设置实例版本，目前只支持standard（双机高可用版, 一主一从）。
 * @method string getDBCharset() 获取实例字符集，目前只支持：
<li> UTF8</li>
<li> LATIN1</li>
 * @method void setDBCharset(string $DBCharset) 设置实例字符集，目前只支持：
<li> UTF8</li>
<li> LATIN1</li>
 * @method string getCreateTime() 获取实例创建时间。
 * @method void setCreateTime(string $CreateTime) 设置实例创建时间。
 * @method string getUpdateTime() 获取实例执行最后一次更新的时间。
 * @method void setUpdateTime(string $UpdateTime) 设置实例执行最后一次更新的时间。
 * @method string getExpireTime() 获取实例到期时间。
 * @method void setExpireTime(string $ExpireTime) 设置实例到期时间。
 * @method string getIsolatedTime() 获取实例隔离时间。
 * @method void setIsolatedTime(string $IsolatedTime) 设置实例隔离时间。
 * @method string getPayType() 获取计费模式：
<li>prepaid：包年包月,预付费</li>
<li>postpaid：按量计费，后付费</li>
 * @method void setPayType(string $PayType) 设置计费模式：
<li>prepaid：包年包月,预付费</li>
<li>postpaid：按量计费，后付费</li>
 * @method integer getAutoRenew() 获取是否自动续费：
<li>0：手动续费</li>
<li>1：自动续费</li>
默认值：0
 * @method void setAutoRenew(integer $AutoRenew) 设置是否自动续费：
<li>0：手动续费</li>
<li>1：自动续费</li>
默认值：0
 * @method array getDBInstanceNetInfo() 获取实例网络连接信息。
 * @method void setDBInstanceNetInfo(array $DBInstanceNetInfo) 设置实例网络连接信息。
 * @method string getType() 获取机器类型。
 * @method void setType(string $Type) 设置机器类型。
 * @method integer getAppId() 获取用户的AppId。
 * @method void setAppId(integer $AppId) 设置用户的AppId。
 * @method integer getUid() 获取实例的Uid。
 * @method void setUid(integer $Uid) 设置实例的Uid。
 * @method integer getProjectId() 获取项目ID。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。
 * @method array getTagList() 获取实例绑定的标签信息。
 * @method void setTagList(array $TagList) 设置实例绑定的标签信息。
 * @method string getMasterDBInstanceId() 获取主实例信息，仅在实例为只读实例时返回。
 * @method void setMasterDBInstanceId(string $MasterDBInstanceId) 设置主实例信息，仅在实例为只读实例时返回。
 * @method integer getReadOnlyInstanceNum() 获取只读实例数量。
 * @method void setReadOnlyInstanceNum(integer $ReadOnlyInstanceNum) 设置只读实例数量。
 * @method string getStatusInReadonlyGroup() 获取只读实例在只读组中的状态。
 * @method void setStatusInReadonlyGroup(string $StatusInReadonlyGroup) 设置只读实例在只读组中的状态。
 * @method string getOfflineTime() 获取下线时间。
 * @method void setOfflineTime(string $OfflineTime) 设置下线时间。
 * @method array getDBNodeSet() 获取实例的节点信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDBNodeSet(array $DBNodeSet) 设置实例的节点信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsSupportTDE() 获取实例是否支持TDE数据加密：
<li>0：不支持</li>
<li>1：支持</li>
默认值：0
TDE数据加密可参考[数据透明加密概述](https://cloud.tencent.com/document/product/409/71748)
 * @method void setIsSupportTDE(integer $IsSupportTDE) 设置实例是否支持TDE数据加密：
<li>0：不支持</li>
<li>1：支持</li>
默认值：0
TDE数据加密可参考[数据透明加密概述](https://cloud.tencent.com/document/product/409/71748)
 * @method string getDBEngine() 获取数据库引擎，支持：
<li>postgresql：云数据库PostgreSQL</li>
<li>mssql_compatible：MSSQL兼容-云数据库PostgreSQL</li>
默认值：postgresql
 * @method void setDBEngine(string $DBEngine) 设置数据库引擎，支持：
<li>postgresql：云数据库PostgreSQL</li>
<li>mssql_compatible：MSSQL兼容-云数据库PostgreSQL</li>
默认值：postgresql
 * @method string getDBEngineConfig() 获取数据库引擎的配置信息，配置格式如下：
{"$key1":"$value1", "$key2":"$value2"}
各引擎支持如下：
mssql_compatible引擎：
<li>migrationMode：数据库模式，可选参数，可取值：single-db（单数据库模式），multi-db（多数据库模式）。默认为single-db。</li>
<li>defaultLocale：排序区域规则，可选参数，在初始化后不可修改，默认为en_US，可选值如下：
"af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN"。</li>
<li>serverCollationName：排序规则名称，可选参数，在初始化后不可修改，默认为sql_latin1_general_cp1_ci_as，可选值如下："bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as"。</li>
 * @method void setDBEngineConfig(string $DBEngineConfig) 设置数据库引擎的配置信息，配置格式如下：
{"$key1":"$value1", "$key2":"$value2"}
各引擎支持如下：
mssql_compatible引擎：
<li>migrationMode：数据库模式，可选参数，可取值：single-db（单数据库模式），multi-db（多数据库模式）。默认为single-db。</li>
<li>defaultLocale：排序区域规则，可选参数，在初始化后不可修改，默认为en_US，可选值如下：
"af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN"。</li>
<li>serverCollationName：排序规则名称，可选参数，在初始化后不可修改，默认为sql_latin1_general_cp1_ci_as，可选值如下："bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as"。</li>
 * @method array getNetworkAccessList() 获取实例网络信息列表（此字段已废弃）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkAccessList(array $NetworkAccessList) 设置实例网络信息列表（此字段已废弃）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSupportIpv6() 获取实例是否支持Ipv6：
<li>0：否</li>
<li>1：是</li>
默认值：0
 * @method void setSupportIpv6(integer $SupportIpv6) 设置实例是否支持Ipv6：
<li>0：否</li>
<li>1：是</li>
默认值：0
 */
class DBInstance extends AbstractModel
{
    /**
     * @var string 实例所属地域，如: ap-guangzhou，对应RegionSet的Region字段。
     */
    public $Region;

    /**
     * @var string 实例所属可用区， 如：ap-guangzhou-3，对应ZoneSet的Zone字段。
     */
    public $Zone;

    /**
     * @var string 私有网络ID，形如vpc-e6w23k31。有效的VpcId可通过登录控制台查询；也可以调用接口 [DescribeVpcs](https://cloud.tencent.com/document/api/215/15778) ，从接口返回中的unVpcId字段获取。
     */
    public $VpcId;

    /**
     * @var string 私有网络子网ID，形如subnet-51lcif9y。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 [DescribeSubnets ](https://cloud.tencent.com/document/api/215/15784)，从接口返回中的unSubnetId字段获取。
     */
    public $SubnetId;

    /**
     * @var string 实例ID。
     */
    public $DBInstanceId;

    /**
     * @var string 实例名称。
     */
    public $DBInstanceName;

    /**
     * @var string 实例状态，分别为：applying（申请中）、init(待初始化)、initing(初始化中)、running(运行中)、limited run（受限运行）、isolating（隔离中）、isolated（已隔离）、disisolating（解隔离中）、recycling（回收中）、recycled（已回收）、job running（任务执行中）、offline（下线）、migrating（迁移中）、expanding（扩容中）、waitSwitch（等待切换）、switching（切换中）、readonly（只读）、restarting（重启中）、network changing（网络变更中）、upgrading（内核版本升级中）、audit-switching（审计状态变更中）、primary-switching（主备切换中）、offlining(下线中)、deployment changing（可用区变更中）、cloning（恢复数据中）、parameter modifying（参数修改中）、log-switching（日志状态变更中）、restoring（恢复中）、expanding（变配中）
     */
    public $DBInstanceStatus;

    /**
     * @var integer 实例分配的内存大小，单位：GB
     */
    public $DBInstanceMemory;

    /**
     * @var integer 实例分配的存储空间大小，单位：GB
     */
    public $DBInstanceStorage;

    /**
     * @var integer 实例分配的CPU数量，单位：个
     */
    public $DBInstanceCpu;

    /**
     * @var string 售卖规格ID
     */
    public $DBInstanceClass;

    /**
     * @var string PostgreSQL大版本号，版本信息可从[DescribeDBVersions](https://cloud.tencent.com/document/api/409/89018)获取，目前支持10，11，12，13，14，15这几个大版本。
     */
    public $DBMajorVersion;

    /**
     * @var string PostgreSQL社区大版本+小版本号，如12.4，版本信息可从[DescribeDBVersions](https://cloud.tencent.com/document/api/409/89018)获取。
     */
    public $DBVersion;

    /**
     * @var string PostgreSQL内核版本号，如v12.7_r1.8，版本信息可从[DescribeDBVersions](https://cloud.tencent.com/document/api/409/89018)获取。
     */
    public $DBKernelVersion;

    /**
     * @var string 实例类型，类型有：
<li>primary：主实例</li>
<li>readonly：只读实例</li>
<li>guard：灾备实例</li>
<li>temp：临时实例</li>
     */
    public $DBInstanceType;

    /**
     * @var string 实例版本，目前只支持standard（双机高可用版, 一主一从）。
     */
    public $DBInstanceVersion;

    /**
     * @var string 实例字符集，目前只支持：
<li> UTF8</li>
<li> LATIN1</li>
     */
    public $DBCharset;

    /**
     * @var string 实例创建时间。
     */
    public $CreateTime;

    /**
     * @var string 实例执行最后一次更新的时间。
     */
    public $UpdateTime;

    /**
     * @var string 实例到期时间。
     */
    public $ExpireTime;

    /**
     * @var string 实例隔离时间。
     */
    public $IsolatedTime;

    /**
     * @var string 计费模式：
<li>prepaid：包年包月,预付费</li>
<li>postpaid：按量计费，后付费</li>
     */
    public $PayType;

    /**
     * @var integer 是否自动续费：
<li>0：手动续费</li>
<li>1：自动续费</li>
默认值：0
     */
    public $AutoRenew;

    /**
     * @var array 实例网络连接信息。
     */
    public $DBInstanceNetInfo;

    /**
     * @var string 机器类型。
     */
    public $Type;

    /**
     * @var integer 用户的AppId。
     */
    public $AppId;

    /**
     * @var integer 实例的Uid。
     */
    public $Uid;

    /**
     * @var integer 项目ID。
     */
    public $ProjectId;

    /**
     * @var array 实例绑定的标签信息。
     */
    public $TagList;

    /**
     * @var string 主实例信息，仅在实例为只读实例时返回。
     */
    public $MasterDBInstanceId;

    /**
     * @var integer 只读实例数量。
     */
    public $ReadOnlyInstanceNum;

    /**
     * @var string 只读实例在只读组中的状态。
     */
    public $StatusInReadonlyGroup;

    /**
     * @var string 下线时间。
     */
    public $OfflineTime;

    /**
     * @var array 实例的节点信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DBNodeSet;

    /**
     * @var integer 实例是否支持TDE数据加密：
<li>0：不支持</li>
<li>1：支持</li>
默认值：0
TDE数据加密可参考[数据透明加密概述](https://cloud.tencent.com/document/product/409/71748)
     */
    public $IsSupportTDE;

    /**
     * @var string 数据库引擎，支持：
<li>postgresql：云数据库PostgreSQL</li>
<li>mssql_compatible：MSSQL兼容-云数据库PostgreSQL</li>
默认值：postgresql
     */
    public $DBEngine;

    /**
     * @var string 数据库引擎的配置信息，配置格式如下：
{"$key1":"$value1", "$key2":"$value2"}
各引擎支持如下：
mssql_compatible引擎：
<li>migrationMode：数据库模式，可选参数，可取值：single-db（单数据库模式），multi-db（多数据库模式）。默认为single-db。</li>
<li>defaultLocale：排序区域规则，可选参数，在初始化后不可修改，默认为en_US，可选值如下：
"af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN"。</li>
<li>serverCollationName：排序规则名称，可选参数，在初始化后不可修改，默认为sql_latin1_general_cp1_ci_as，可选值如下："bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as"。</li>
     */
    public $DBEngineConfig;

    /**
     * @var array 实例网络信息列表（此字段已废弃）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkAccessList;

    /**
     * @var integer 实例是否支持Ipv6：
<li>0：否</li>
<li>1：是</li>
默认值：0
     */
    public $SupportIpv6;

    /**
     * @param string $Region 实例所属地域，如: ap-guangzhou，对应RegionSet的Region字段。
     * @param string $Zone 实例所属可用区， 如：ap-guangzhou-3，对应ZoneSet的Zone字段。
     * @param string $VpcId 私有网络ID，形如vpc-e6w23k31。有效的VpcId可通过登录控制台查询；也可以调用接口 [DescribeVpcs](https://cloud.tencent.com/document/api/215/15778) ，从接口返回中的unVpcId字段获取。
     * @param string $SubnetId 私有网络子网ID，形如subnet-51lcif9y。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 [DescribeSubnets ](https://cloud.tencent.com/document/api/215/15784)，从接口返回中的unSubnetId字段获取。
     * @param string $DBInstanceId 实例ID。
     * @param string $DBInstanceName 实例名称。
     * @param string $DBInstanceStatus 实例状态，分别为：applying（申请中）、init(待初始化)、initing(初始化中)、running(运行中)、limited run（受限运行）、isolating（隔离中）、isolated（已隔离）、disisolating（解隔离中）、recycling（回收中）、recycled（已回收）、job running（任务执行中）、offline（下线）、migrating（迁移中）、expanding（扩容中）、waitSwitch（等待切换）、switching（切换中）、readonly（只读）、restarting（重启中）、network changing（网络变更中）、upgrading（内核版本升级中）、audit-switching（审计状态变更中）、primary-switching（主备切换中）、offlining(下线中)、deployment changing（可用区变更中）、cloning（恢复数据中）、parameter modifying（参数修改中）、log-switching（日志状态变更中）、restoring（恢复中）、expanding（变配中）
     * @param integer $DBInstanceMemory 实例分配的内存大小，单位：GB
     * @param integer $DBInstanceStorage 实例分配的存储空间大小，单位：GB
     * @param integer $DBInstanceCpu 实例分配的CPU数量，单位：个
     * @param string $DBInstanceClass 售卖规格ID
     * @param string $DBMajorVersion PostgreSQL大版本号，版本信息可从[DescribeDBVersions](https://cloud.tencent.com/document/api/409/89018)获取，目前支持10，11，12，13，14，15这几个大版本。
     * @param string $DBVersion PostgreSQL社区大版本+小版本号，如12.4，版本信息可从[DescribeDBVersions](https://cloud.tencent.com/document/api/409/89018)获取。
     * @param string $DBKernelVersion PostgreSQL内核版本号，如v12.7_r1.8，版本信息可从[DescribeDBVersions](https://cloud.tencent.com/document/api/409/89018)获取。
     * @param string $DBInstanceType 实例类型，类型有：
<li>primary：主实例</li>
<li>readonly：只读实例</li>
<li>guard：灾备实例</li>
<li>temp：临时实例</li>
     * @param string $DBInstanceVersion 实例版本，目前只支持standard（双机高可用版, 一主一从）。
     * @param string $DBCharset 实例字符集，目前只支持：
<li> UTF8</li>
<li> LATIN1</li>
     * @param string $CreateTime 实例创建时间。
     * @param string $UpdateTime 实例执行最后一次更新的时间。
     * @param string $ExpireTime 实例到期时间。
     * @param string $IsolatedTime 实例隔离时间。
     * @param string $PayType 计费模式：
<li>prepaid：包年包月,预付费</li>
<li>postpaid：按量计费，后付费</li>
     * @param integer $AutoRenew 是否自动续费：
<li>0：手动续费</li>
<li>1：自动续费</li>
默认值：0
     * @param array $DBInstanceNetInfo 实例网络连接信息。
     * @param string $Type 机器类型。
     * @param integer $AppId 用户的AppId。
     * @param integer $Uid 实例的Uid。
     * @param integer $ProjectId 项目ID。
     * @param array $TagList 实例绑定的标签信息。
     * @param string $MasterDBInstanceId 主实例信息，仅在实例为只读实例时返回。
     * @param integer $ReadOnlyInstanceNum 只读实例数量。
     * @param string $StatusInReadonlyGroup 只读实例在只读组中的状态。
     * @param string $OfflineTime 下线时间。
     * @param array $DBNodeSet 实例的节点信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsSupportTDE 实例是否支持TDE数据加密：
<li>0：不支持</li>
<li>1：支持</li>
默认值：0
TDE数据加密可参考[数据透明加密概述](https://cloud.tencent.com/document/product/409/71748)
     * @param string $DBEngine 数据库引擎，支持：
<li>postgresql：云数据库PostgreSQL</li>
<li>mssql_compatible：MSSQL兼容-云数据库PostgreSQL</li>
默认值：postgresql
     * @param string $DBEngineConfig 数据库引擎的配置信息，配置格式如下：
{"$key1":"$value1", "$key2":"$value2"}
各引擎支持如下：
mssql_compatible引擎：
<li>migrationMode：数据库模式，可选参数，可取值：single-db（单数据库模式），multi-db（多数据库模式）。默认为single-db。</li>
<li>defaultLocale：排序区域规则，可选参数，在初始化后不可修改，默认为en_US，可选值如下：
"af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN"。</li>
<li>serverCollationName：排序规则名称，可选参数，在初始化后不可修改，默认为sql_latin1_general_cp1_ci_as，可选值如下："bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as"。</li>
     * @param array $NetworkAccessList 实例网络信息列表（此字段已废弃）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SupportIpv6 实例是否支持Ipv6：
<li>0：否</li>
<li>1：是</li>
默认值：0
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("DBInstanceName",$param) and $param["DBInstanceName"] !== null) {
            $this->DBInstanceName = $param["DBInstanceName"];
        }

        if (array_key_exists("DBInstanceStatus",$param) and $param["DBInstanceStatus"] !== null) {
            $this->DBInstanceStatus = $param["DBInstanceStatus"];
        }

        if (array_key_exists("DBInstanceMemory",$param) and $param["DBInstanceMemory"] !== null) {
            $this->DBInstanceMemory = $param["DBInstanceMemory"];
        }

        if (array_key_exists("DBInstanceStorage",$param) and $param["DBInstanceStorage"] !== null) {
            $this->DBInstanceStorage = $param["DBInstanceStorage"];
        }

        if (array_key_exists("DBInstanceCpu",$param) and $param["DBInstanceCpu"] !== null) {
            $this->DBInstanceCpu = $param["DBInstanceCpu"];
        }

        if (array_key_exists("DBInstanceClass",$param) and $param["DBInstanceClass"] !== null) {
            $this->DBInstanceClass = $param["DBInstanceClass"];
        }

        if (array_key_exists("DBMajorVersion",$param) and $param["DBMajorVersion"] !== null) {
            $this->DBMajorVersion = $param["DBMajorVersion"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("DBKernelVersion",$param) and $param["DBKernelVersion"] !== null) {
            $this->DBKernelVersion = $param["DBKernelVersion"];
        }

        if (array_key_exists("DBInstanceType",$param) and $param["DBInstanceType"] !== null) {
            $this->DBInstanceType = $param["DBInstanceType"];
        }

        if (array_key_exists("DBInstanceVersion",$param) and $param["DBInstanceVersion"] !== null) {
            $this->DBInstanceVersion = $param["DBInstanceVersion"];
        }

        if (array_key_exists("DBCharset",$param) and $param["DBCharset"] !== null) {
            $this->DBCharset = $param["DBCharset"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("DBInstanceNetInfo",$param) and $param["DBInstanceNetInfo"] !== null) {
            $this->DBInstanceNetInfo = [];
            foreach ($param["DBInstanceNetInfo"] as $key => $value){
                $obj = new DBInstanceNetInfo();
                $obj->deserialize($value);
                array_push($this->DBInstanceNetInfo, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("MasterDBInstanceId",$param) and $param["MasterDBInstanceId"] !== null) {
            $this->MasterDBInstanceId = $param["MasterDBInstanceId"];
        }

        if (array_key_exists("ReadOnlyInstanceNum",$param) and $param["ReadOnlyInstanceNum"] !== null) {
            $this->ReadOnlyInstanceNum = $param["ReadOnlyInstanceNum"];
        }

        if (array_key_exists("StatusInReadonlyGroup",$param) and $param["StatusInReadonlyGroup"] !== null) {
            $this->StatusInReadonlyGroup = $param["StatusInReadonlyGroup"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("DBNodeSet",$param) and $param["DBNodeSet"] !== null) {
            $this->DBNodeSet = [];
            foreach ($param["DBNodeSet"] as $key => $value){
                $obj = new DBNode();
                $obj->deserialize($value);
                array_push($this->DBNodeSet, $obj);
            }
        }

        if (array_key_exists("IsSupportTDE",$param) and $param["IsSupportTDE"] !== null) {
            $this->IsSupportTDE = $param["IsSupportTDE"];
        }

        if (array_key_exists("DBEngine",$param) and $param["DBEngine"] !== null) {
            $this->DBEngine = $param["DBEngine"];
        }

        if (array_key_exists("DBEngineConfig",$param) and $param["DBEngineConfig"] !== null) {
            $this->DBEngineConfig = $param["DBEngineConfig"];
        }

        if (array_key_exists("NetworkAccessList",$param) and $param["NetworkAccessList"] !== null) {
            $this->NetworkAccessList = [];
            foreach ($param["NetworkAccessList"] as $key => $value){
                $obj = new NetworkAccess();
                $obj->deserialize($value);
                array_push($this->NetworkAccessList, $obj);
            }
        }

        if (array_key_exists("SupportIpv6",$param) and $param["SupportIpv6"] !== null) {
            $this->SupportIpv6 = $param["SupportIpv6"];
        }
    }
}
