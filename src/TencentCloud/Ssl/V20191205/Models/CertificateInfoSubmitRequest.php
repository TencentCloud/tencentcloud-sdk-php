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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CertificateInfoSubmit请求参数结构体
 *
 * @method string getCertId() 获取待提交资料的付费证书 ID。	
 * @method void setCertId(string $CertId) 设置待提交资料的付费证书 ID。	
 * @method string getGenCsrType() 获取此字段必传。 CSR 生成方式， 取值为：
- online：腾讯云提交的填写的参数信息生成CSR和私钥，并由腾讯云加密存储
- parse：自行生成CSR和私钥，并通过上传CSR申请证书
 * @method void setGenCsrType(string $GenCsrType) 设置此字段必传。 CSR 生成方式， 取值为：
- online：腾讯云提交的填写的参数信息生成CSR和私钥，并由腾讯云加密存储
- parse：自行生成CSR和私钥，并通过上传CSR申请证书
 * @method string getCertCommonName() 获取证书绑定的通用名称， 若是上传的CSR，则该域名需与CSR解析的通用名称一致
 * @method void setCertCommonName(string $CertCommonName) 设置证书绑定的通用名称， 若是上传的CSR，则该域名需与CSR解析的通用名称一致
 * @method integer getCompanyType() 获取组织信息类型， 取值范围：
1（个人）：仅DV类型证书可设置为1， 个人类型证书组织信息字段可不传：Org开头，Admin开头，Tech开头
2（公司）：所有类型证书都可设置为2， 按需传组织信息字段
 * @method void setCompanyType(integer $CompanyType) 设置组织信息类型， 取值范围：
1（个人）：仅DV类型证书可设置为1， 个人类型证书组织信息字段可不传：Org开头，Admin开头，Tech开头
2（公司）：所有类型证书都可设置为2， 按需传组织信息字段
 * @method string getCompanyId() 获取公司ID，在 [腾讯云控制台](https://console.cloud.tencent.com/ssl/info) 可进行查看，若无满足的公司信息， 则本参数传0 ； 若存在满足当前订单的公司信息， 可以根据 [DescribeCompanies](https://cloud.tencent.com/document/product/400/90375) 查看公司ID； 若传了公司ID，则Org开头的参数可不传


 * @method void setCompanyId(string $CompanyId) 设置公司ID，在 [腾讯云控制台](https://console.cloud.tencent.com/ssl/info) 可进行查看，若无满足的公司信息， 则本参数传0 ； 若存在满足当前订单的公司信息， 可以根据 [DescribeCompanies](https://cloud.tencent.com/document/product/400/90375) 查看公司ID； 若传了公司ID，则Org开头的参数可不传


 * @method string getOrgIdType() 获取公司证件类型，取值范围：
TYDMZ（统一社会信用代码 ）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
OTHERS（其他）
 * @method void setOrgIdType(string $OrgIdType) 设置公司证件类型，取值范围：
TYDMZ（统一社会信用代码 ）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
OTHERS（其他）
 * @method string getOrgIdNumber() 获取公司证件号码，取值范围：
TYDMZ（统一社会信用代码 ）：11532xxxxxxxx24820

 * @method void setOrgIdNumber(string $OrgIdNumber) 设置公司证件号码，取值范围：
TYDMZ（统一社会信用代码 ）：11532xxxxxxxx24820

 * @method string getAdminIdType() 获取管理人证件类型，取值范围：
SFZ（身份证）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
HZ（护照）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
 * @method void setAdminIdType(string $AdminIdType) 设置管理人证件类型，取值范围：
SFZ（身份证）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
HZ（护照）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
 * @method string getAdminIdNumber() 获取管理人证件号码，仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段， 取值范围：
SFZ（身份证）：110000xxxxxxxx1242
HZ（护照）:EFxxxxxxx
 * @method void setAdminIdNumber(string $AdminIdNumber) 设置管理人证件号码，仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段， 取值范围：
SFZ（身份证）：110000xxxxxxxx1242
HZ（护照）:EFxxxxxxx
 * @method string getTechIdType() 获取联系人证件类型，取值范围：
SFZ（身份证）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
HZ（护照）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
 * @method void setTechIdType(string $TechIdType) 设置联系人证件类型，取值范围：
SFZ（身份证）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
HZ（护照）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
 * @method string getTechIdNumber() 获取联系人证件号码，仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段，取值范围：
SFZ（身份证）：110000xxxxxxxx1242
HZ（护照）:EFxxxxxxx
 * @method void setTechIdNumber(string $TechIdNumber) 设置联系人证件号码，仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段，取值范围：
SFZ（身份证）：110000xxxxxxxx1242
HZ（护照）:EFxxxxxxx
 * @method string getCsr() 获取上传的 CSR 内容。
若GenCsrType为parse， 则此字段必传。
 * @method void setCsr(string $Csr) 设置上传的 CSR 内容。
若GenCsrType为parse， 则此字段必传。
 * @method array getDnsNames() 获取证书绑定的其他域名， 单域名、泛域名证书无需提供。 多域名、多泛域名必填
 * @method void setDnsNames(array $DnsNames) 设置证书绑定的其他域名， 单域名、泛域名证书无需提供。 多域名、多泛域名必填
 * @method string getKeyPass() 获取私钥密码， 目前仅使用在生成jks、pfx格式证书时密码； 其他格式私钥证书未加密	
 * @method void setKeyPass(string $KeyPass) 设置私钥密码， 目前仅使用在生成jks、pfx格式证书时密码； 其他格式私钥证书未加密	
 * @method string getOrgOrganization() 获取公司名称。若没有传CompanyId或者ManagerId， 则此字段必传
 * @method void setOrgOrganization(string $OrgOrganization) 设置公司名称。若没有传CompanyId或者ManagerId， 则此字段必传
 * @method string getOrgDivision() 获取部门名称。若没有传CompanyId或者ManagerId， 则此字段必传
 * @method void setOrgDivision(string $OrgDivision) 设置部门名称。若没有传CompanyId或者ManagerId， 则此字段必传
 * @method string getOrgAddress() 获取公司详细地址。若没有传CompanyId或者ManagerId， 则此字段必传
 * @method void setOrgAddress(string $OrgAddress) 设置公司详细地址。若没有传CompanyId或者ManagerId， 则此字段必传
 * @method string getOrgCountry() 获取国家名称，如中国：CN 。若没有传CompanyId或者ManagerId， 则此字段必传
 * @method void setOrgCountry(string $OrgCountry) 设置国家名称，如中国：CN 。若没有传CompanyId或者ManagerId， 则此字段必传
 * @method string getOrgCity() 获取公司所在城市。若没有传CompanyId或者ManagerId， 则此字段必传
 * @method void setOrgCity(string $OrgCity) 设置公司所在城市。若没有传CompanyId或者ManagerId， 则此字段必传
 * @method string getOrgRegion() 获取公司所在省份。若没有传CompanyId或者ManagerId， 则此字段必传
 * @method void setOrgRegion(string $OrgRegion) 设置公司所在省份。若没有传CompanyId或者ManagerId， 则此字段必传
 * @method string getOrgPhoneArea() 获取公司所属区号。若没有传CompanyId或者ManagerId， 则此字段必传
如：021。  手机号码传 86
 * @method void setOrgPhoneArea(string $OrgPhoneArea) 设置公司所属区号。若没有传CompanyId或者ManagerId， 则此字段必传
如：021。  手机号码传 86
 * @method string getOrgPhoneNumber() 获取公司所属号码。若没有传CompanyId或者ManagerId， 则此字段必传
 * @method void setOrgPhoneNumber(string $OrgPhoneNumber) 设置公司所属号码。若没有传CompanyId或者ManagerId， 则此字段必传
 * @method string getVerifyType() 获取证书域名验证方式：
DNS_AUTO： 自动添加域名DNS验证， 需用户域名解析托管在『[云解析DNS](https://console.cloud.tencent.com/cns)』，且与申请证书归属同一个腾讯云账号
DNS：手动添加域名DNS验证，需用户手动去域名解析服务商添加验证值
FILE：手动添加域名文件验证。 需要用户手动在域名站点根目录添加指定路径文件进行文件验证， http&https任一通过即可；且域名站点需海外CA机构能访问， 具体访问白名单为：64.78.193.238，216.168.247.9，216.168.249.9，54.189.196.217
 * @method void setVerifyType(string $VerifyType) 设置证书域名验证方式：
DNS_AUTO： 自动添加域名DNS验证， 需用户域名解析托管在『[云解析DNS](https://console.cloud.tencent.com/cns)』，且与申请证书归属同一个腾讯云账号
DNS：手动添加域名DNS验证，需用户手动去域名解析服务商添加验证值
FILE：手动添加域名文件验证。 需要用户手动在域名站点根目录添加指定路径文件进行文件验证， http&https任一通过即可；且域名站点需海外CA机构能访问， 具体访问白名单为：64.78.193.238，216.168.247.9，216.168.249.9，54.189.196.217
 * @method string getAdminFirstName() 获取管理人名。若没有传ManagerId， 则此字段必传
 * @method void setAdminFirstName(string $AdminFirstName) 设置管理人名。若没有传ManagerId， 则此字段必传
 * @method string getAdminLastName() 获取管理人姓。若没有传ManagerId， 则此字段必传
 * @method void setAdminLastName(string $AdminLastName) 设置管理人姓。若没有传ManagerId， 则此字段必传
 * @method string getAdminPhone() 获取管理人手机号码。若没有传ManagerId， 则此字段必传
 * @method void setAdminPhone(string $AdminPhone) 设置管理人手机号码。若没有传ManagerId， 则此字段必传
 * @method string getAdminEmail() 获取管理人邮箱地址。若没有传ManagerId， 则此字段必传
 * @method void setAdminEmail(string $AdminEmail) 设置管理人邮箱地址。若没有传ManagerId， 则此字段必传
 * @method string getAdminTitle() 获取管理人职位。若没有传ManagerId， 则此字段必传
 * @method void setAdminTitle(string $AdminTitle) 设置管理人职位。若没有传ManagerId， 则此字段必传
 * @method string getTechFirstName() 获取联系人名。若没有传ManagerId， 则此字段必传
 * @method void setTechFirstName(string $TechFirstName) 设置联系人名。若没有传ManagerId， 则此字段必传
 * @method string getTechLastName() 获取联系人姓。若没有传ManagerId， 则此字段必传
 * @method void setTechLastName(string $TechLastName) 设置联系人姓。若没有传ManagerId， 则此字段必传
 * @method string getContactEmail() 获取联系人邮箱地址。CompanyType为1时， 此字段必传
 * @method void setContactEmail(string $ContactEmail) 设置联系人邮箱地址。CompanyType为1时， 此字段必传
 * @method integer getAutoRenewFlag() 获取是否开启自动续费： 0， 不开启；  1， 开启； 默认为0
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置是否开启自动续费： 0， 不开启；  1， 开启； 默认为0
 * @method string getCsrKeyParameter() 获取密钥对参数，RSA支持2048，4096。ECC仅支持prime256v1。当 CSR 生成方式为online的时候，此参数必填。

 * @method void setCsrKeyParameter(string $CsrKeyParameter) 设置密钥对参数，RSA支持2048，4096。ECC仅支持prime256v1。当 CSR 生成方式为online的时候，此参数必填。

 * @method string getCsrEncryptAlgo() 获取加密算法，取值为ECC、RSA， 默认为RSA。当 CSR 生成方式为online的时候，此参数必填。
 * @method void setCsrEncryptAlgo(string $CsrEncryptAlgo) 设置加密算法，取值为ECC、RSA， 默认为RSA。当 CSR 生成方式为online的时候，此参数必填。
 * @method string getManagerId() 获取管理人ID，在 [腾讯云控制台](https://console.cloud.tencent.com/ssl/info) 可进行查看，若无满足的管理人信息， 则本参数传0 ； 若存在满足当前订单的管理人信息， 可以根据 [DescribeManagers](https://cloud.tencent.com/document/product/400/52672) 查看管理人ID； 若传了管理人ID，则Org开头、Admin开头、Tech开头的参数可不传； 管理人ID会包含公司信息

 * @method void setManagerId(string $ManagerId) 设置管理人ID，在 [腾讯云控制台](https://console.cloud.tencent.com/ssl/info) 可进行查看，若无满足的管理人信息， 则本参数传0 ； 若存在满足当前订单的管理人信息， 可以根据 [DescribeManagers](https://cloud.tencent.com/document/product/400/52672) 查看管理人ID； 若传了管理人ID，则Org开头、Admin开头、Tech开头的参数可不传； 管理人ID会包含公司信息

 * @method string getTechPhone() 获取联系人电话。若没有传ManagerId， 则此字段必传
 * @method void setTechPhone(string $TechPhone) 设置联系人电话。若没有传ManagerId， 则此字段必传
 * @method string getTechEmail() 获取联系人邮箱
 * @method void setTechEmail(string $TechEmail) 设置联系人邮箱
 * @method string getTechTitle() 获取联系人职位。若没有传ManagerId， 则此字段必传
 * @method void setTechTitle(string $TechTitle) 设置联系人职位。若没有传ManagerId， 则此字段必传
 * @method integer getType() 获取证书类型
 * @method void setType(integer $Type) 设置证书类型
 * @method string getCaType() 获取只针对Dnspod系列证书有效，ca机构类型可为sectigo和digicert
 * @method void setCaType(string $CaType) 设置只针对Dnspod系列证书有效，ca机构类型可为sectigo和digicert
 * @method string getSignAlgo() 获取签名算法
 * @method void setSignAlgo(string $SignAlgo) 设置签名算法
 * @method boolean getUseCrossSignRoot() 获取是否使用交叉根证书
 * @method void setUseCrossSignRoot(boolean $UseCrossSignRoot) 设置是否使用交叉根证书
 */
class CertificateInfoSubmitRequest extends AbstractModel
{
    /**
     * @var string 待提交资料的付费证书 ID。	
     */
    public $CertId;

    /**
     * @var string 此字段必传。 CSR 生成方式， 取值为：
- online：腾讯云提交的填写的参数信息生成CSR和私钥，并由腾讯云加密存储
- parse：自行生成CSR和私钥，并通过上传CSR申请证书
     */
    public $GenCsrType;

    /**
     * @var string 证书绑定的通用名称， 若是上传的CSR，则该域名需与CSR解析的通用名称一致
     */
    public $CertCommonName;

    /**
     * @var integer 组织信息类型， 取值范围：
1（个人）：仅DV类型证书可设置为1， 个人类型证书组织信息字段可不传：Org开头，Admin开头，Tech开头
2（公司）：所有类型证书都可设置为2， 按需传组织信息字段
     */
    public $CompanyType;

    /**
     * @var string 公司ID，在 [腾讯云控制台](https://console.cloud.tencent.com/ssl/info) 可进行查看，若无满足的公司信息， 则本参数传0 ； 若存在满足当前订单的公司信息， 可以根据 [DescribeCompanies](https://cloud.tencent.com/document/product/400/90375) 查看公司ID； 若传了公司ID，则Org开头的参数可不传


     */
    public $CompanyId;

    /**
     * @var string 公司证件类型，取值范围：
TYDMZ（统一社会信用代码 ）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
OTHERS（其他）
     */
    public $OrgIdType;

    /**
     * @var string 公司证件号码，取值范围：
TYDMZ（统一社会信用代码 ）：11532xxxxxxxx24820

     */
    public $OrgIdNumber;

    /**
     * @var string 管理人证件类型，取值范围：
SFZ（身份证）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
HZ（护照）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
     */
    public $AdminIdType;

    /**
     * @var string 管理人证件号码，仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段， 取值范围：
SFZ（身份证）：110000xxxxxxxx1242
HZ（护照）:EFxxxxxxx
     */
    public $AdminIdNumber;

    /**
     * @var string 联系人证件类型，取值范围：
SFZ（身份证）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
HZ（护照）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
     */
    public $TechIdType;

    /**
     * @var string 联系人证件号码，仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段，取值范围：
SFZ（身份证）：110000xxxxxxxx1242
HZ（护照）:EFxxxxxxx
     */
    public $TechIdNumber;

    /**
     * @var string 上传的 CSR 内容。
若GenCsrType为parse， 则此字段必传。
     */
    public $Csr;

    /**
     * @var array 证书绑定的其他域名， 单域名、泛域名证书无需提供。 多域名、多泛域名必填
     */
    public $DnsNames;

    /**
     * @var string 私钥密码， 目前仅使用在生成jks、pfx格式证书时密码； 其他格式私钥证书未加密	
     */
    public $KeyPass;

    /**
     * @var string 公司名称。若没有传CompanyId或者ManagerId， 则此字段必传
     */
    public $OrgOrganization;

    /**
     * @var string 部门名称。若没有传CompanyId或者ManagerId， 则此字段必传
     */
    public $OrgDivision;

    /**
     * @var string 公司详细地址。若没有传CompanyId或者ManagerId， 则此字段必传
     */
    public $OrgAddress;

    /**
     * @var string 国家名称，如中国：CN 。若没有传CompanyId或者ManagerId， 则此字段必传
     */
    public $OrgCountry;

    /**
     * @var string 公司所在城市。若没有传CompanyId或者ManagerId， 则此字段必传
     */
    public $OrgCity;

    /**
     * @var string 公司所在省份。若没有传CompanyId或者ManagerId， 则此字段必传
     */
    public $OrgRegion;

    /**
     * @var string 公司所属区号。若没有传CompanyId或者ManagerId， 则此字段必传
如：021。  手机号码传 86
     */
    public $OrgPhoneArea;

    /**
     * @var string 公司所属号码。若没有传CompanyId或者ManagerId， 则此字段必传
     */
    public $OrgPhoneNumber;

    /**
     * @var string 证书域名验证方式：
DNS_AUTO： 自动添加域名DNS验证， 需用户域名解析托管在『[云解析DNS](https://console.cloud.tencent.com/cns)』，且与申请证书归属同一个腾讯云账号
DNS：手动添加域名DNS验证，需用户手动去域名解析服务商添加验证值
FILE：手动添加域名文件验证。 需要用户手动在域名站点根目录添加指定路径文件进行文件验证， http&https任一通过即可；且域名站点需海外CA机构能访问， 具体访问白名单为：64.78.193.238，216.168.247.9，216.168.249.9，54.189.196.217
     */
    public $VerifyType;

    /**
     * @var string 管理人名。若没有传ManagerId， 则此字段必传
     */
    public $AdminFirstName;

    /**
     * @var string 管理人姓。若没有传ManagerId， 则此字段必传
     */
    public $AdminLastName;

    /**
     * @var string 管理人手机号码。若没有传ManagerId， 则此字段必传
     */
    public $AdminPhone;

    /**
     * @var string 管理人邮箱地址。若没有传ManagerId， 则此字段必传
     */
    public $AdminEmail;

    /**
     * @var string 管理人职位。若没有传ManagerId， 则此字段必传
     */
    public $AdminTitle;

    /**
     * @var string 联系人名。若没有传ManagerId， 则此字段必传
     */
    public $TechFirstName;

    /**
     * @var string 联系人姓。若没有传ManagerId， 则此字段必传
     */
    public $TechLastName;

    /**
     * @var string 联系人邮箱地址。CompanyType为1时， 此字段必传
     */
    public $ContactEmail;

    /**
     * @var integer 是否开启自动续费： 0， 不开启；  1， 开启； 默认为0
     */
    public $AutoRenewFlag;

    /**
     * @var string 密钥对参数，RSA支持2048，4096。ECC仅支持prime256v1。当 CSR 生成方式为online的时候，此参数必填。

     */
    public $CsrKeyParameter;

    /**
     * @var string 加密算法，取值为ECC、RSA， 默认为RSA。当 CSR 生成方式为online的时候，此参数必填。
     */
    public $CsrEncryptAlgo;

    /**
     * @var string 管理人ID，在 [腾讯云控制台](https://console.cloud.tencent.com/ssl/info) 可进行查看，若无满足的管理人信息， 则本参数传0 ； 若存在满足当前订单的管理人信息， 可以根据 [DescribeManagers](https://cloud.tencent.com/document/product/400/52672) 查看管理人ID； 若传了管理人ID，则Org开头、Admin开头、Tech开头的参数可不传； 管理人ID会包含公司信息

     */
    public $ManagerId;

    /**
     * @var string 联系人电话。若没有传ManagerId， 则此字段必传
     */
    public $TechPhone;

    /**
     * @var string 联系人邮箱
     */
    public $TechEmail;

    /**
     * @var string 联系人职位。若没有传ManagerId， 则此字段必传
     */
    public $TechTitle;

    /**
     * @var integer 证书类型
     */
    public $Type;

    /**
     * @var string 只针对Dnspod系列证书有效，ca机构类型可为sectigo和digicert
     */
    public $CaType;

    /**
     * @var string 签名算法
     */
    public $SignAlgo;

    /**
     * @var boolean 是否使用交叉根证书
     */
    public $UseCrossSignRoot;

    /**
     * @param string $CertId 待提交资料的付费证书 ID。	
     * @param string $GenCsrType 此字段必传。 CSR 生成方式， 取值为：
- online：腾讯云提交的填写的参数信息生成CSR和私钥，并由腾讯云加密存储
- parse：自行生成CSR和私钥，并通过上传CSR申请证书
     * @param string $CertCommonName 证书绑定的通用名称， 若是上传的CSR，则该域名需与CSR解析的通用名称一致
     * @param integer $CompanyType 组织信息类型， 取值范围：
1（个人）：仅DV类型证书可设置为1， 个人类型证书组织信息字段可不传：Org开头，Admin开头，Tech开头
2（公司）：所有类型证书都可设置为2， 按需传组织信息字段
     * @param string $CompanyId 公司ID，在 [腾讯云控制台](https://console.cloud.tencent.com/ssl/info) 可进行查看，若无满足的公司信息， 则本参数传0 ； 若存在满足当前订单的公司信息， 可以根据 [DescribeCompanies](https://cloud.tencent.com/document/product/400/90375) 查看公司ID； 若传了公司ID，则Org开头的参数可不传


     * @param string $OrgIdType 公司证件类型，取值范围：
TYDMZ（统一社会信用代码 ）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
OTHERS（其他）
     * @param string $OrgIdNumber 公司证件号码，取值范围：
TYDMZ（统一社会信用代码 ）：11532xxxxxxxx24820

     * @param string $AdminIdType 管理人证件类型，取值范围：
SFZ（身份证）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
HZ（护照）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
     * @param string $AdminIdNumber 管理人证件号码，仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段， 取值范围：
SFZ（身份证）：110000xxxxxxxx1242
HZ（护照）:EFxxxxxxx
     * @param string $TechIdType 联系人证件类型，取值范围：
SFZ（身份证）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
HZ（护照）：仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段
     * @param string $TechIdNumber 联系人证件号码，仅CFCA类型证书需要使用本字段， 其他类型证书不需要使用本字段，取值范围：
SFZ（身份证）：110000xxxxxxxx1242
HZ（护照）:EFxxxxxxx
     * @param string $Csr 上传的 CSR 内容。
若GenCsrType为parse， 则此字段必传。
     * @param array $DnsNames 证书绑定的其他域名， 单域名、泛域名证书无需提供。 多域名、多泛域名必填
     * @param string $KeyPass 私钥密码， 目前仅使用在生成jks、pfx格式证书时密码； 其他格式私钥证书未加密	
     * @param string $OrgOrganization 公司名称。若没有传CompanyId或者ManagerId， 则此字段必传
     * @param string $OrgDivision 部门名称。若没有传CompanyId或者ManagerId， 则此字段必传
     * @param string $OrgAddress 公司详细地址。若没有传CompanyId或者ManagerId， 则此字段必传
     * @param string $OrgCountry 国家名称，如中国：CN 。若没有传CompanyId或者ManagerId， 则此字段必传
     * @param string $OrgCity 公司所在城市。若没有传CompanyId或者ManagerId， 则此字段必传
     * @param string $OrgRegion 公司所在省份。若没有传CompanyId或者ManagerId， 则此字段必传
     * @param string $OrgPhoneArea 公司所属区号。若没有传CompanyId或者ManagerId， 则此字段必传
如：021。  手机号码传 86
     * @param string $OrgPhoneNumber 公司所属号码。若没有传CompanyId或者ManagerId， 则此字段必传
     * @param string $VerifyType 证书域名验证方式：
DNS_AUTO： 自动添加域名DNS验证， 需用户域名解析托管在『[云解析DNS](https://console.cloud.tencent.com/cns)』，且与申请证书归属同一个腾讯云账号
DNS：手动添加域名DNS验证，需用户手动去域名解析服务商添加验证值
FILE：手动添加域名文件验证。 需要用户手动在域名站点根目录添加指定路径文件进行文件验证， http&https任一通过即可；且域名站点需海外CA机构能访问， 具体访问白名单为：64.78.193.238，216.168.247.9，216.168.249.9，54.189.196.217
     * @param string $AdminFirstName 管理人名。若没有传ManagerId， 则此字段必传
     * @param string $AdminLastName 管理人姓。若没有传ManagerId， 则此字段必传
     * @param string $AdminPhone 管理人手机号码。若没有传ManagerId， 则此字段必传
     * @param string $AdminEmail 管理人邮箱地址。若没有传ManagerId， 则此字段必传
     * @param string $AdminTitle 管理人职位。若没有传ManagerId， 则此字段必传
     * @param string $TechFirstName 联系人名。若没有传ManagerId， 则此字段必传
     * @param string $TechLastName 联系人姓。若没有传ManagerId， 则此字段必传
     * @param string $ContactEmail 联系人邮箱地址。CompanyType为1时， 此字段必传
     * @param integer $AutoRenewFlag 是否开启自动续费： 0， 不开启；  1， 开启； 默认为0
     * @param string $CsrKeyParameter 密钥对参数，RSA支持2048，4096。ECC仅支持prime256v1。当 CSR 生成方式为online的时候，此参数必填。

     * @param string $CsrEncryptAlgo 加密算法，取值为ECC、RSA， 默认为RSA。当 CSR 生成方式为online的时候，此参数必填。
     * @param string $ManagerId 管理人ID，在 [腾讯云控制台](https://console.cloud.tencent.com/ssl/info) 可进行查看，若无满足的管理人信息， 则本参数传0 ； 若存在满足当前订单的管理人信息， 可以根据 [DescribeManagers](https://cloud.tencent.com/document/product/400/52672) 查看管理人ID； 若传了管理人ID，则Org开头、Admin开头、Tech开头的参数可不传； 管理人ID会包含公司信息

     * @param string $TechPhone 联系人电话。若没有传ManagerId， 则此字段必传
     * @param string $TechEmail 联系人邮箱
     * @param string $TechTitle 联系人职位。若没有传ManagerId， 则此字段必传
     * @param integer $Type 证书类型
     * @param string $CaType 只针对Dnspod系列证书有效，ca机构类型可为sectigo和digicert
     * @param string $SignAlgo 签名算法
     * @param boolean $UseCrossSignRoot 是否使用交叉根证书
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("GenCsrType",$param) and $param["GenCsrType"] !== null) {
            $this->GenCsrType = $param["GenCsrType"];
        }

        if (array_key_exists("CertCommonName",$param) and $param["CertCommonName"] !== null) {
            $this->CertCommonName = $param["CertCommonName"];
        }

        if (array_key_exists("CompanyType",$param) and $param["CompanyType"] !== null) {
            $this->CompanyType = $param["CompanyType"];
        }

        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("OrgIdType",$param) and $param["OrgIdType"] !== null) {
            $this->OrgIdType = $param["OrgIdType"];
        }

        if (array_key_exists("OrgIdNumber",$param) and $param["OrgIdNumber"] !== null) {
            $this->OrgIdNumber = $param["OrgIdNumber"];
        }

        if (array_key_exists("AdminIdType",$param) and $param["AdminIdType"] !== null) {
            $this->AdminIdType = $param["AdminIdType"];
        }

        if (array_key_exists("AdminIdNumber",$param) and $param["AdminIdNumber"] !== null) {
            $this->AdminIdNumber = $param["AdminIdNumber"];
        }

        if (array_key_exists("TechIdType",$param) and $param["TechIdType"] !== null) {
            $this->TechIdType = $param["TechIdType"];
        }

        if (array_key_exists("TechIdNumber",$param) and $param["TechIdNumber"] !== null) {
            $this->TechIdNumber = $param["TechIdNumber"];
        }

        if (array_key_exists("Csr",$param) and $param["Csr"] !== null) {
            $this->Csr = $param["Csr"];
        }

        if (array_key_exists("DnsNames",$param) and $param["DnsNames"] !== null) {
            $this->DnsNames = $param["DnsNames"];
        }

        if (array_key_exists("KeyPass",$param) and $param["KeyPass"] !== null) {
            $this->KeyPass = $param["KeyPass"];
        }

        if (array_key_exists("OrgOrganization",$param) and $param["OrgOrganization"] !== null) {
            $this->OrgOrganization = $param["OrgOrganization"];
        }

        if (array_key_exists("OrgDivision",$param) and $param["OrgDivision"] !== null) {
            $this->OrgDivision = $param["OrgDivision"];
        }

        if (array_key_exists("OrgAddress",$param) and $param["OrgAddress"] !== null) {
            $this->OrgAddress = $param["OrgAddress"];
        }

        if (array_key_exists("OrgCountry",$param) and $param["OrgCountry"] !== null) {
            $this->OrgCountry = $param["OrgCountry"];
        }

        if (array_key_exists("OrgCity",$param) and $param["OrgCity"] !== null) {
            $this->OrgCity = $param["OrgCity"];
        }

        if (array_key_exists("OrgRegion",$param) and $param["OrgRegion"] !== null) {
            $this->OrgRegion = $param["OrgRegion"];
        }

        if (array_key_exists("OrgPhoneArea",$param) and $param["OrgPhoneArea"] !== null) {
            $this->OrgPhoneArea = $param["OrgPhoneArea"];
        }

        if (array_key_exists("OrgPhoneNumber",$param) and $param["OrgPhoneNumber"] !== null) {
            $this->OrgPhoneNumber = $param["OrgPhoneNumber"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }

        if (array_key_exists("AdminFirstName",$param) and $param["AdminFirstName"] !== null) {
            $this->AdminFirstName = $param["AdminFirstName"];
        }

        if (array_key_exists("AdminLastName",$param) and $param["AdminLastName"] !== null) {
            $this->AdminLastName = $param["AdminLastName"];
        }

        if (array_key_exists("AdminPhone",$param) and $param["AdminPhone"] !== null) {
            $this->AdminPhone = $param["AdminPhone"];
        }

        if (array_key_exists("AdminEmail",$param) and $param["AdminEmail"] !== null) {
            $this->AdminEmail = $param["AdminEmail"];
        }

        if (array_key_exists("AdminTitle",$param) and $param["AdminTitle"] !== null) {
            $this->AdminTitle = $param["AdminTitle"];
        }

        if (array_key_exists("TechFirstName",$param) and $param["TechFirstName"] !== null) {
            $this->TechFirstName = $param["TechFirstName"];
        }

        if (array_key_exists("TechLastName",$param) and $param["TechLastName"] !== null) {
            $this->TechLastName = $param["TechLastName"];
        }

        if (array_key_exists("ContactEmail",$param) and $param["ContactEmail"] !== null) {
            $this->ContactEmail = $param["ContactEmail"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("CsrKeyParameter",$param) and $param["CsrKeyParameter"] !== null) {
            $this->CsrKeyParameter = $param["CsrKeyParameter"];
        }

        if (array_key_exists("CsrEncryptAlgo",$param) and $param["CsrEncryptAlgo"] !== null) {
            $this->CsrEncryptAlgo = $param["CsrEncryptAlgo"];
        }

        if (array_key_exists("ManagerId",$param) and $param["ManagerId"] !== null) {
            $this->ManagerId = $param["ManagerId"];
        }

        if (array_key_exists("TechPhone",$param) and $param["TechPhone"] !== null) {
            $this->TechPhone = $param["TechPhone"];
        }

        if (array_key_exists("TechEmail",$param) and $param["TechEmail"] !== null) {
            $this->TechEmail = $param["TechEmail"];
        }

        if (array_key_exists("TechTitle",$param) and $param["TechTitle"] !== null) {
            $this->TechTitle = $param["TechTitle"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CaType",$param) and $param["CaType"] !== null) {
            $this->CaType = $param["CaType"];
        }

        if (array_key_exists("SignAlgo",$param) and $param["SignAlgo"] !== null) {
            $this->SignAlgo = $param["SignAlgo"];
        }

        if (array_key_exists("UseCrossSignRoot",$param) and $param["UseCrossSignRoot"] !== null) {
            $this->UseCrossSignRoot = $param["UseCrossSignRoot"];
        }
    }
}
