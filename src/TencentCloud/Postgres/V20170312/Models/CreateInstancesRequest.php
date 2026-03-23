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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstances请求参数结构体
 *
 * @method string getZone() 获取<p>实例所属主可用区， 如：ap-guangzhou-3；若需要支持多可用区，在DBNodeSet.N字段中进行添加主可用区和备可用区信息；<br>可用区信息可以通过调用 <a href="https://cloud.tencent.com/document/api/409/16769">DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
 * @method void setZone(string $Zone) 设置<p>实例所属主可用区， 如：ap-guangzhou-3；若需要支持多可用区，在DBNodeSet.N字段中进行添加主可用区和备可用区信息；<br>可用区信息可以通过调用 <a href="https://cloud.tencent.com/document/api/409/16769">DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
 * @method string getSpecCode() 获取<p>售卖规格码。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/409/89019">DescribeClasses</a>的返回值中的SpecCode字段来获取。</p>
 * @method void setSpecCode(string $SpecCode) 设置<p>售卖规格码。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/409/89019">DescribeClasses</a>的返回值中的SpecCode字段来获取。</p>
 * @method integer getStorage() 获取<p>实例磁盘容量大小，单位：GB。该参数的设置步长为10。</p>
 * @method void setStorage(integer $Storage) 设置<p>实例磁盘容量大小，单位：GB。该参数的设置步长为10。</p>
 * @method integer getInstanceCount() 获取<p>购买实例数量，取值范围：[1-10]。一次性购买支持最大数量10个，若超过该数量，可进行多次调用进行购买。</p>
 * @method void setInstanceCount(integer $InstanceCount) 设置<p>购买实例数量，取值范围：[1-10]。一次性购买支持最大数量10个，若超过该数量，可进行多次调用进行购买。</p>
 * @method integer getPeriod() 获取<p>购买时长，单位：月。</p><li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li><li>后付费：只支持1</li>
 * @method void setPeriod(integer $Period) 设置<p>购买时长，单位：月。</p><li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li><li>后付费：只支持1</li>
 * @method string getCharset() 获取<p>实例字符集，目前只支持：</p><li> UTF8</li><li> LATIN1</li>
 * @method void setCharset(string $Charset) 设置<p>实例字符集，目前只支持：</p><li> UTF8</li><li> LATIN1</li>
 * @method string getAdminName() 获取<p>实例根账号用户名，具体规范如下：</p><li>用户名需要1-16个字符，只能由字母、数字或下划线组成</li><li>不能为postgres</li><li>不能由数字和pg_开头</li><li>所有规则均不区分大小写</li>
 * @method void setAdminName(string $AdminName) 设置<p>实例根账号用户名，具体规范如下：</p><li>用户名需要1-16个字符，只能由字母、数字或下划线组成</li><li>不能为postgres</li><li>不能由数字和pg_开头</li><li>所有规则均不区分大小写</li>
 * @method string getAdminPassword() 获取<p>实例根账号用户名对应的密码，长度8 ~ 32位，推荐使用12位以上的密码;不能以&quot; / &quot;开头;<br>必须包含以下四项，字符种类:</p><li>小写字母： [a ~ z]</li><li>大写字母：[A ～ Z]</li><li>数字：0 - 9</li><li>特殊字符：()`~!@#$%^&amp;*-+=_|{}[]:;'&lt;&gt;,.?/</li>
 * @method void setAdminPassword(string $AdminPassword) 设置<p>实例根账号用户名对应的密码，长度8 ~ 32位，推荐使用12位以上的密码;不能以&quot; / &quot;开头;<br>必须包含以下四项，字符种类:</p><li>小写字母： [a ~ z]</li><li>大写字母：[A ～ Z]</li><li>数字：0 - 9</li><li>特殊字符：()`~!@#$%^&amp;*-+=_|{}[]:;'&lt;&gt;,.?/</li>
 * @method string getDBMajorVersion() 获取<p>PostgreSQL大版本号（该参数当前必传），版本信息可从<a href="https://cloud.tencent.com/document/api/409/89018">DescribeDBVersions</a>获取。目前支持10，11，12，13，14，15这几个大版本，详情见<a href="https://cloud.tencent.com/document/product/409/67018">内核版本概述</a>。<br>输入该参数时，会基于此大版本号创建对应的最新小版本的最新内核版本号实例。</p>
 * @method void setDBMajorVersion(string $DBMajorVersion) 设置<p>PostgreSQL大版本号（该参数当前必传），版本信息可从<a href="https://cloud.tencent.com/document/api/409/89018">DescribeDBVersions</a>获取。目前支持10，11，12，13，14，15这几个大版本，详情见<a href="https://cloud.tencent.com/document/product/409/67018">内核版本概述</a>。<br>输入该参数时，会基于此大版本号创建对应的最新小版本的最新内核版本号实例。</p>
 * @method string getDBVersion() 获取<p>PostgreSQL社区大版本+小版本号。<br>一般场景不推荐传入该参数。如需指定，只能传当前大版本号下最新小版本号。</p>
 * @method void setDBVersion(string $DBVersion) 设置<p>PostgreSQL社区大版本+小版本号。<br>一般场景不推荐传入该参数。如需指定，只能传当前大版本号下最新小版本号。</p>
 * @method string getDBKernelVersion() 获取<p>PostgreSQL内核版本号。<br>一般场景不推荐传入该参数。如需指定，只能传当前大版本号下最新内核版本号。</p>
 * @method void setDBKernelVersion(string $DBKernelVersion) 设置<p>PostgreSQL内核版本号。<br>一般场景不推荐传入该参数。如需指定，只能传当前大版本号下最新内核版本号。</p>
 * @method string getInstanceChargeType() 获取<p>实例计费类型，目前支持：</p><li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：后付费，即按量计费</li>默认值：PREPAID
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>实例计费类型，目前支持：</p><li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：后付费，即按量计费</li>默认值：PREPAID
 * @method string getVpcId() 获取<p>私有网络ID，形如vpc-xxxxxxxx（该参数当前必传）。有效的VpcId可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/1372">DescribeVpcEx</a> ，从接口返回中的unVpcId字段获取。</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID，形如vpc-xxxxxxxx（该参数当前必传）。有效的VpcId可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/1372">DescribeVpcEx</a> ，从接口返回中的unVpcId字段获取。</p>
 * @method string getSubnetId() 获取<p>私有网络子网ID，形如subnet-xxxxxxxx（该参数当前必传）。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets </a>，从接口返回中的unSubnetId字段获取。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>私有网络子网ID，形如subnet-xxxxxxxx（该参数当前必传）。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets </a>，从接口返回中的unSubnetId字段获取。</p>
 * @method array getDBNodeSet() 获取<p>实例节点部署信息，支持多可用区部署时需要指定每个节点的部署可用区信息。<br>可用区信息可以通过调用 <a href="https://cloud.tencent.com/document/api/409/16769">DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
 * @method void setDBNodeSet(array $DBNodeSet) 设置<p>实例节点部署信息，支持多可用区部署时需要指定每个节点的部署可用区信息。<br>可用区信息可以通过调用 <a href="https://cloud.tencent.com/document/api/409/16769">DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
 * @method integer getAutoRenewFlag() 获取<p>续费标记：</p><li>0：手动续费</li><li>1：自动续费</li>默认值：0
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>续费标记：</p><li>0：手动续费</li><li>1：自动续费</li>默认值：0
 * @method integer getAutoVoucher() 获取<p>是否自动使用代金券：</p><li>0：否</li><li>1：是</li>默认值：0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置<p>是否自动使用代金券：</p><li>0：否</li><li>1：是</li>默认值：0
 * @method array getVoucherIds() 获取<p>代金券ID列表，目前仅支持指定一张代金券。</p>
 * @method void setVoucherIds(array $VoucherIds) 设置<p>代金券ID列表，目前仅支持指定一张代金券。</p>
 * @method integer getProjectId() 获取<p>项目ID。默认取之为0，表示归属默认项目。</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID。默认取之为0，表示归属默认项目。</p>
 * @method integer getActivityId() 获取<p>活动ID。</p>
 * @method void setActivityId(integer $ActivityId) 设置<p>活动ID。</p>
 * @method string getName() 获取<p>实例名称，仅支持长度小于60的中文/英文/数字/&quot;_&quot;/&quot;-&quot;，不指定实例名称则默认显示&quot;未命名&quot;。</p>
 * @method void setName(string $Name) 设置<p>实例名称，仅支持长度小于60的中文/英文/数字/&quot;_&quot;/&quot;-&quot;，不指定实例名称则默认显示&quot;未命名&quot;。</p>
 * @method array getTagList() 获取<p>实例需要绑定的Tag信息，默认为空；可以通过调用 <a href="https://cloud.tencent.com/document/api/651/35316">DescribeTags</a> 返回值中的 Tags 字段来获取。</p>
 * @method void setTagList(array $TagList) 设置<p>实例需要绑定的Tag信息，默认为空；可以通过调用 <a href="https://cloud.tencent.com/document/api/651/35316">DescribeTags</a> 返回值中的 Tags 字段来获取。</p>
 * @method array getSecurityGroupIds() 获取<p>实例所属安全组，该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>实例所属安全组，该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。</p>
 * @method integer getNeedSupportTDE() 获取<p>是否需要支持数据透明加密：</p><li>0：否</li><li>1：是</li>默认值：0参考[数据透明加密概述](https://cloud.tencent.com/document/product/409/71748)
 * @method void setNeedSupportTDE(integer $NeedSupportTDE) 设置<p>是否需要支持数据透明加密：</p><li>0：否</li><li>1：是</li>默认值：0参考[数据透明加密概述](https://cloud.tencent.com/document/product/409/71748)
 * @method string getKMSKeyId() 获取<p>自定义密钥的KeyId，若选择自定义密匙加密，则需要传入自定义密匙的KeyId，KeyId是CMK的唯一标识。<br>KeyId创建获取相关参考<a href="https://cloud.tencent.com/document/product/409/71749">开启透明数据加密</a></p>
 * @method void setKMSKeyId(string $KMSKeyId) 设置<p>自定义密钥的KeyId，若选择自定义密匙加密，则需要传入自定义密匙的KeyId，KeyId是CMK的唯一标识。<br>KeyId创建获取相关参考<a href="https://cloud.tencent.com/document/product/409/71749">开启透明数据加密</a></p>
 * @method string getKMSRegion() 获取<p>使用KMS服务的地域，KMSRegion为空默认使用本地域的KMS，本地域不支持的情况下需自选其他KMS支持的地域。<br>KMSRegion相关介绍参考<a href="https://cloud.tencent.com/document/product/409/71749">开启透明数据加密</a></p>
 * @method void setKMSRegion(string $KMSRegion) 设置<p>使用KMS服务的地域，KMSRegion为空默认使用本地域的KMS，本地域不支持的情况下需自选其他KMS支持的地域。<br>KMSRegion相关介绍参考<a href="https://cloud.tencent.com/document/product/409/71749">开启透明数据加密</a></p>
 * @method string getKMSClusterId() 获取<p>指定KMS服务的集群，KMSClusterId为空使用默认集群的KMS，若选择指定KMS集群，则需要传入KMSClusterId。 KMSClusterId相关介绍参考开启透明数据加密</p>
 * @method void setKMSClusterId(string $KMSClusterId) 设置<p>指定KMS服务的集群，KMSClusterId为空使用默认集群的KMS，若选择指定KMS集群，则需要传入KMSClusterId。 KMSClusterId相关介绍参考开启透明数据加密</p>
 * @method string getDBEngine() 获取<p>数据库引擎，支持：</p><li>postgresql：云数据库PostgreSQL</li><li>mssql_compatible：MSSQL兼容-云数据库PostgreSQL</li>默认值：postgresql
 * @method void setDBEngine(string $DBEngine) 设置<p>数据库引擎，支持：</p><li>postgresql：云数据库PostgreSQL</li><li>mssql_compatible：MSSQL兼容-云数据库PostgreSQL</li>默认值：postgresql
 * @method string getDBEngineConfig() 获取<p>数据库引擎的配置信息，配置格式如下：<br>{&quot;$key1&quot;:&quot;$value1&quot;, &quot;$key2&quot;:&quot;$value2&quot;}<br>各引擎支持如下：<br>mssql_compatible引擎：</p><li>migrationMode：数据库模式，可选参数，可取值：single-db（单数据库模式），multi-db（多数据库模式）。默认为single-db。</li><li>defaultLocale：排序区域规则，可选参数，在初始化后不可修改，默认为en_US，可选值如下："af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN"。</li><li>serverCollationName：排序规则名称，可选参数，在初始化后不可修改，默认为sql_latin1_general_cp1_ci_as，可选值如下："bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as"。</li>
 * @method void setDBEngineConfig(string $DBEngineConfig) 设置<p>数据库引擎的配置信息，配置格式如下：<br>{&quot;$key1&quot;:&quot;$value1&quot;, &quot;$key2&quot;:&quot;$value2&quot;}<br>各引擎支持如下：<br>mssql_compatible引擎：</p><li>migrationMode：数据库模式，可选参数，可取值：single-db（单数据库模式），multi-db（多数据库模式）。默认为single-db。</li><li>defaultLocale：排序区域规则，可选参数，在初始化后不可修改，默认为en_US，可选值如下："af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN"。</li><li>serverCollationName：排序规则名称，可选参数，在初始化后不可修改，默认为sql_latin1_general_cp1_ci_as，可选值如下："bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as"。</li>
 * @method string getSyncMode() 获取<p>主从同步方式，支持： </p><li>Semi-sync：半同步</li><li>Async：异步</li>主实例默认值：Semi-sync只读实例默认值：Async
 * @method void setSyncMode(string $SyncMode) 设置<p>主从同步方式，支持： </p><li>Semi-sync：半同步</li><li>Async：异步</li>主实例默认值：Semi-sync只读实例默认值：Async
 * @method integer getNeedSupportIpv6() 获取<p>是否需要支持Ipv6：</p><li>0：否</li><li>1：是</li>默认值：0
 * @method void setNeedSupportIpv6(integer $NeedSupportIpv6) 设置<p>是否需要支持Ipv6：</p><li>0：否</li><li>1：是</li>默认值：0
 * @method boolean getDeletionProtection() 获取<p>实例是否开启删除保护: true-开启删除保护；false-关闭删除保护。</p>
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置<p>实例是否开启删除保护: true-开启删除保护；false-关闭删除保护。</p>
 * @method string getStorageType() 获取<p>实例存储类型，可选值：PHYSICAL_LOCAL_SSD：物理机本地ssd硬盘 CLOUD_PREMIUM：高性能云硬盘 CLOUD_SSD：ssd云硬盘 CLOUD_HSSD：增强型ssd云硬盘</p>
 * @method void setStorageType(string $StorageType) 设置<p>实例存储类型，可选值：PHYSICAL_LOCAL_SSD：物理机本地ssd硬盘 CLOUD_PREMIUM：高性能云硬盘 CLOUD_SSD：ssd云硬盘 CLOUD_HSSD：增强型ssd云硬盘</p>
 */
class CreateInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>实例所属主可用区， 如：ap-guangzhou-3；若需要支持多可用区，在DBNodeSet.N字段中进行添加主可用区和备可用区信息；<br>可用区信息可以通过调用 <a href="https://cloud.tencent.com/document/api/409/16769">DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
     */
    public $Zone;

    /**
     * @var string <p>售卖规格码。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/409/89019">DescribeClasses</a>的返回值中的SpecCode字段来获取。</p>
     */
    public $SpecCode;

    /**
     * @var integer <p>实例磁盘容量大小，单位：GB。该参数的设置步长为10。</p>
     */
    public $Storage;

    /**
     * @var integer <p>购买实例数量，取值范围：[1-10]。一次性购买支持最大数量10个，若超过该数量，可进行多次调用进行购买。</p>
     */
    public $InstanceCount;

    /**
     * @var integer <p>购买时长，单位：月。</p><li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li><li>后付费：只支持1</li>
     */
    public $Period;

    /**
     * @var string <p>实例字符集，目前只支持：</p><li> UTF8</li><li> LATIN1</li>
     */
    public $Charset;

    /**
     * @var string <p>实例根账号用户名，具体规范如下：</p><li>用户名需要1-16个字符，只能由字母、数字或下划线组成</li><li>不能为postgres</li><li>不能由数字和pg_开头</li><li>所有规则均不区分大小写</li>
     */
    public $AdminName;

    /**
     * @var string <p>实例根账号用户名对应的密码，长度8 ~ 32位，推荐使用12位以上的密码;不能以&quot; / &quot;开头;<br>必须包含以下四项，字符种类:</p><li>小写字母： [a ~ z]</li><li>大写字母：[A ～ Z]</li><li>数字：0 - 9</li><li>特殊字符：()`~!@#$%^&amp;*-+=_|{}[]:;'&lt;&gt;,.?/</li>
     */
    public $AdminPassword;

    /**
     * @var string <p>PostgreSQL大版本号（该参数当前必传），版本信息可从<a href="https://cloud.tencent.com/document/api/409/89018">DescribeDBVersions</a>获取。目前支持10，11，12，13，14，15这几个大版本，详情见<a href="https://cloud.tencent.com/document/product/409/67018">内核版本概述</a>。<br>输入该参数时，会基于此大版本号创建对应的最新小版本的最新内核版本号实例。</p>
     */
    public $DBMajorVersion;

    /**
     * @var string <p>PostgreSQL社区大版本+小版本号。<br>一般场景不推荐传入该参数。如需指定，只能传当前大版本号下最新小版本号。</p>
     */
    public $DBVersion;

    /**
     * @var string <p>PostgreSQL内核版本号。<br>一般场景不推荐传入该参数。如需指定，只能传当前大版本号下最新内核版本号。</p>
     */
    public $DBKernelVersion;

    /**
     * @var string <p>实例计费类型，目前支持：</p><li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：后付费，即按量计费</li>默认值：PREPAID
     */
    public $InstanceChargeType;

    /**
     * @var string <p>私有网络ID，形如vpc-xxxxxxxx（该参数当前必传）。有效的VpcId可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/1372">DescribeVpcEx</a> ，从接口返回中的unVpcId字段获取。</p>
     */
    public $VpcId;

    /**
     * @var string <p>私有网络子网ID，形如subnet-xxxxxxxx（该参数当前必传）。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets </a>，从接口返回中的unSubnetId字段获取。</p>
     */
    public $SubnetId;

    /**
     * @var array <p>实例节点部署信息，支持多可用区部署时需要指定每个节点的部署可用区信息。<br>可用区信息可以通过调用 <a href="https://cloud.tencent.com/document/api/409/16769">DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
     */
    public $DBNodeSet;

    /**
     * @var integer <p>续费标记：</p><li>0：手动续费</li><li>1：自动续费</li>默认值：0
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>是否自动使用代金券：</p><li>0：否</li><li>1：是</li>默认值：0
     */
    public $AutoVoucher;

    /**
     * @var array <p>代金券ID列表，目前仅支持指定一张代金券。</p>
     */
    public $VoucherIds;

    /**
     * @var integer <p>项目ID。默认取之为0，表示归属默认项目。</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>活动ID。</p>
     */
    public $ActivityId;

    /**
     * @var string <p>实例名称，仅支持长度小于60的中文/英文/数字/&quot;_&quot;/&quot;-&quot;，不指定实例名称则默认显示&quot;未命名&quot;。</p>
     */
    public $Name;

    /**
     * @var array <p>实例需要绑定的Tag信息，默认为空；可以通过调用 <a href="https://cloud.tencent.com/document/api/651/35316">DescribeTags</a> 返回值中的 Tags 字段来获取。</p>
     */
    public $TagList;

    /**
     * @var array <p>实例所属安全组，该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。</p>
     */
    public $SecurityGroupIds;

    /**
     * @var integer <p>是否需要支持数据透明加密：</p><li>0：否</li><li>1：是</li>默认值：0参考[数据透明加密概述](https://cloud.tencent.com/document/product/409/71748)
     */
    public $NeedSupportTDE;

    /**
     * @var string <p>自定义密钥的KeyId，若选择自定义密匙加密，则需要传入自定义密匙的KeyId，KeyId是CMK的唯一标识。<br>KeyId创建获取相关参考<a href="https://cloud.tencent.com/document/product/409/71749">开启透明数据加密</a></p>
     */
    public $KMSKeyId;

    /**
     * @var string <p>使用KMS服务的地域，KMSRegion为空默认使用本地域的KMS，本地域不支持的情况下需自选其他KMS支持的地域。<br>KMSRegion相关介绍参考<a href="https://cloud.tencent.com/document/product/409/71749">开启透明数据加密</a></p>
     */
    public $KMSRegion;

    /**
     * @var string <p>指定KMS服务的集群，KMSClusterId为空使用默认集群的KMS，若选择指定KMS集群，则需要传入KMSClusterId。 KMSClusterId相关介绍参考开启透明数据加密</p>
     */
    public $KMSClusterId;

    /**
     * @var string <p>数据库引擎，支持：</p><li>postgresql：云数据库PostgreSQL</li><li>mssql_compatible：MSSQL兼容-云数据库PostgreSQL</li>默认值：postgresql
     */
    public $DBEngine;

    /**
     * @var string <p>数据库引擎的配置信息，配置格式如下：<br>{&quot;$key1&quot;:&quot;$value1&quot;, &quot;$key2&quot;:&quot;$value2&quot;}<br>各引擎支持如下：<br>mssql_compatible引擎：</p><li>migrationMode：数据库模式，可选参数，可取值：single-db（单数据库模式），multi-db（多数据库模式）。默认为single-db。</li><li>defaultLocale：排序区域规则，可选参数，在初始化后不可修改，默认为en_US，可选值如下："af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN"。</li><li>serverCollationName：排序规则名称，可选参数，在初始化后不可修改，默认为sql_latin1_general_cp1_ci_as，可选值如下："bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as"。</li>
     */
    public $DBEngineConfig;

    /**
     * @var string <p>主从同步方式，支持： </p><li>Semi-sync：半同步</li><li>Async：异步</li>主实例默认值：Semi-sync只读实例默认值：Async
     */
    public $SyncMode;

    /**
     * @var integer <p>是否需要支持Ipv6：</p><li>0：否</li><li>1：是</li>默认值：0
     */
    public $NeedSupportIpv6;

    /**
     * @var boolean <p>实例是否开启删除保护: true-开启删除保护；false-关闭删除保护。</p>
     */
    public $DeletionProtection;

    /**
     * @var string <p>实例存储类型，可选值：PHYSICAL_LOCAL_SSD：物理机本地ssd硬盘 CLOUD_PREMIUM：高性能云硬盘 CLOUD_SSD：ssd云硬盘 CLOUD_HSSD：增强型ssd云硬盘</p>
     */
    public $StorageType;

    /**
     * @param string $Zone <p>实例所属主可用区， 如：ap-guangzhou-3；若需要支持多可用区，在DBNodeSet.N字段中进行添加主可用区和备可用区信息；<br>可用区信息可以通过调用 <a href="https://cloud.tencent.com/document/api/409/16769">DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
     * @param string $SpecCode <p>售卖规格码。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/409/89019">DescribeClasses</a>的返回值中的SpecCode字段来获取。</p>
     * @param integer $Storage <p>实例磁盘容量大小，单位：GB。该参数的设置步长为10。</p>
     * @param integer $InstanceCount <p>购买实例数量，取值范围：[1-10]。一次性购买支持最大数量10个，若超过该数量，可进行多次调用进行购买。</p>
     * @param integer $Period <p>购买时长，单位：月。</p><li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li><li>后付费：只支持1</li>
     * @param string $Charset <p>实例字符集，目前只支持：</p><li> UTF8</li><li> LATIN1</li>
     * @param string $AdminName <p>实例根账号用户名，具体规范如下：</p><li>用户名需要1-16个字符，只能由字母、数字或下划线组成</li><li>不能为postgres</li><li>不能由数字和pg_开头</li><li>所有规则均不区分大小写</li>
     * @param string $AdminPassword <p>实例根账号用户名对应的密码，长度8 ~ 32位，推荐使用12位以上的密码;不能以&quot; / &quot;开头;<br>必须包含以下四项，字符种类:</p><li>小写字母： [a ~ z]</li><li>大写字母：[A ～ Z]</li><li>数字：0 - 9</li><li>特殊字符：()`~!@#$%^&amp;*-+=_|{}[]:;'&lt;&gt;,.?/</li>
     * @param string $DBMajorVersion <p>PostgreSQL大版本号（该参数当前必传），版本信息可从<a href="https://cloud.tencent.com/document/api/409/89018">DescribeDBVersions</a>获取。目前支持10，11，12，13，14，15这几个大版本，详情见<a href="https://cloud.tencent.com/document/product/409/67018">内核版本概述</a>。<br>输入该参数时，会基于此大版本号创建对应的最新小版本的最新内核版本号实例。</p>
     * @param string $DBVersion <p>PostgreSQL社区大版本+小版本号。<br>一般场景不推荐传入该参数。如需指定，只能传当前大版本号下最新小版本号。</p>
     * @param string $DBKernelVersion <p>PostgreSQL内核版本号。<br>一般场景不推荐传入该参数。如需指定，只能传当前大版本号下最新内核版本号。</p>
     * @param string $InstanceChargeType <p>实例计费类型，目前支持：</p><li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：后付费，即按量计费</li>默认值：PREPAID
     * @param string $VpcId <p>私有网络ID，形如vpc-xxxxxxxx（该参数当前必传）。有效的VpcId可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/1372">DescribeVpcEx</a> ，从接口返回中的unVpcId字段获取。</p>
     * @param string $SubnetId <p>私有网络子网ID，形如subnet-xxxxxxxx（该参数当前必传）。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets </a>，从接口返回中的unSubnetId字段获取。</p>
     * @param array $DBNodeSet <p>实例节点部署信息，支持多可用区部署时需要指定每个节点的部署可用区信息。<br>可用区信息可以通过调用 <a href="https://cloud.tencent.com/document/api/409/16769">DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
     * @param integer $AutoRenewFlag <p>续费标记：</p><li>0：手动续费</li><li>1：自动续费</li>默认值：0
     * @param integer $AutoVoucher <p>是否自动使用代金券：</p><li>0：否</li><li>1：是</li>默认值：0
     * @param array $VoucherIds <p>代金券ID列表，目前仅支持指定一张代金券。</p>
     * @param integer $ProjectId <p>项目ID。默认取之为0，表示归属默认项目。</p>
     * @param integer $ActivityId <p>活动ID。</p>
     * @param string $Name <p>实例名称，仅支持长度小于60的中文/英文/数字/&quot;_&quot;/&quot;-&quot;，不指定实例名称则默认显示&quot;未命名&quot;。</p>
     * @param array $TagList <p>实例需要绑定的Tag信息，默认为空；可以通过调用 <a href="https://cloud.tencent.com/document/api/651/35316">DescribeTags</a> 返回值中的 Tags 字段来获取。</p>
     * @param array $SecurityGroupIds <p>实例所属安全组，该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。</p>
     * @param integer $NeedSupportTDE <p>是否需要支持数据透明加密：</p><li>0：否</li><li>1：是</li>默认值：0参考[数据透明加密概述](https://cloud.tencent.com/document/product/409/71748)
     * @param string $KMSKeyId <p>自定义密钥的KeyId，若选择自定义密匙加密，则需要传入自定义密匙的KeyId，KeyId是CMK的唯一标识。<br>KeyId创建获取相关参考<a href="https://cloud.tencent.com/document/product/409/71749">开启透明数据加密</a></p>
     * @param string $KMSRegion <p>使用KMS服务的地域，KMSRegion为空默认使用本地域的KMS，本地域不支持的情况下需自选其他KMS支持的地域。<br>KMSRegion相关介绍参考<a href="https://cloud.tencent.com/document/product/409/71749">开启透明数据加密</a></p>
     * @param string $KMSClusterId <p>指定KMS服务的集群，KMSClusterId为空使用默认集群的KMS，若选择指定KMS集群，则需要传入KMSClusterId。 KMSClusterId相关介绍参考开启透明数据加密</p>
     * @param string $DBEngine <p>数据库引擎，支持：</p><li>postgresql：云数据库PostgreSQL</li><li>mssql_compatible：MSSQL兼容-云数据库PostgreSQL</li>默认值：postgresql
     * @param string $DBEngineConfig <p>数据库引擎的配置信息，配置格式如下：<br>{&quot;$key1&quot;:&quot;$value1&quot;, &quot;$key2&quot;:&quot;$value2&quot;}<br>各引擎支持如下：<br>mssql_compatible引擎：</p><li>migrationMode：数据库模式，可选参数，可取值：single-db（单数据库模式），multi-db（多数据库模式）。默认为single-db。</li><li>defaultLocale：排序区域规则，可选参数，在初始化后不可修改，默认为en_US，可选值如下："af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN"。</li><li>serverCollationName：排序规则名称，可选参数，在初始化后不可修改，默认为sql_latin1_general_cp1_ci_as，可选值如下："bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as"。</li>
     * @param string $SyncMode <p>主从同步方式，支持： </p><li>Semi-sync：半同步</li><li>Async：异步</li>主实例默认值：Semi-sync只读实例默认值：Async
     * @param integer $NeedSupportIpv6 <p>是否需要支持Ipv6：</p><li>0：否</li><li>1：是</li>默认值：0
     * @param boolean $DeletionProtection <p>实例是否开启删除保护: true-开启删除保护；false-关闭删除保护。</p>
     * @param string $StorageType <p>实例存储类型，可选值：PHYSICAL_LOCAL_SSD：物理机本地ssd硬盘 CLOUD_PREMIUM：高性能云硬盘 CLOUD_SSD：ssd云硬盘 CLOUD_HSSD：增强型ssd云硬盘</p>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
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

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("AdminName",$param) and $param["AdminName"] !== null) {
            $this->AdminName = $param["AdminName"];
        }

        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            $this->AdminPassword = $param["AdminPassword"];
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

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DBNodeSet",$param) and $param["DBNodeSet"] !== null) {
            $this->DBNodeSet = [];
            foreach ($param["DBNodeSet"] as $key => $value){
                $obj = new DBNode();
                $obj->deserialize($value);
                array_push($this->DBNodeSet, $obj);
            }
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("NeedSupportTDE",$param) and $param["NeedSupportTDE"] !== null) {
            $this->NeedSupportTDE = $param["NeedSupportTDE"];
        }

        if (array_key_exists("KMSKeyId",$param) and $param["KMSKeyId"] !== null) {
            $this->KMSKeyId = $param["KMSKeyId"];
        }

        if (array_key_exists("KMSRegion",$param) and $param["KMSRegion"] !== null) {
            $this->KMSRegion = $param["KMSRegion"];
        }

        if (array_key_exists("KMSClusterId",$param) and $param["KMSClusterId"] !== null) {
            $this->KMSClusterId = $param["KMSClusterId"];
        }

        if (array_key_exists("DBEngine",$param) and $param["DBEngine"] !== null) {
            $this->DBEngine = $param["DBEngine"];
        }

        if (array_key_exists("DBEngineConfig",$param) and $param["DBEngineConfig"] !== null) {
            $this->DBEngineConfig = $param["DBEngineConfig"];
        }

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }

        if (array_key_exists("NeedSupportIpv6",$param) and $param["NeedSupportIpv6"] !== null) {
            $this->NeedSupportIpv6 = $param["NeedSupportIpv6"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
