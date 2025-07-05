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
 * ApplyCertificate请求参数结构体
 *
 * @method string getDvAuthMethod() 获取证书域名验证方式：
DNS_AUTO： 自动添加域名DNS验证， 需用户域名解析托管在『[云解析DNS](https://console.cloud.tencent.com/cns)』，且与申请证书归属同一个腾讯云账号
DNS：手动添加域名DNS验证，需用户手动去域名解析服务商添加验证值
FILE：手动添加域名文件验证。 需要用户手动在域名站点根目录添加指定路径文件进行文件验证， http&https任一通过即可；且域名站点需海外CA机构能访问， 具体访问白名单为：64.78.193.238，216.168.247.9，216.168.249.9，54.189.196.217
 * @method void setDvAuthMethod(string $DvAuthMethod) 设置证书域名验证方式：
DNS_AUTO： 自动添加域名DNS验证， 需用户域名解析托管在『[云解析DNS](https://console.cloud.tencent.com/cns)』，且与申请证书归属同一个腾讯云账号
DNS：手动添加域名DNS验证，需用户手动去域名解析服务商添加验证值
FILE：手动添加域名文件验证。 需要用户手动在域名站点根目录添加指定路径文件进行文件验证， http&https任一通过即可；且域名站点需海外CA机构能访问， 具体访问白名单为：64.78.193.238，216.168.247.9，216.168.249.9，54.189.196.217
 * @method string getDomainName() 获取证书绑定的域名。
 * @method void setDomainName(string $DomainName) 设置证书绑定的域名。
 * @method integer getProjectId() 获取证书关联的项目 ID。 默认为0（默认项目）
 * @method void setProjectId(integer $ProjectId) 设置证书关联的项目 ID。 默认为0（默认项目）
 * @method string getPackageType() 获取证书类型， 可不传，目前仅支持类型83。83 = TrustAsia C1 DV Free。
 * @method void setPackageType(string $PackageType) 设置证书类型， 可不传，目前仅支持类型83。83 = TrustAsia C1 DV Free。
 * @method string getContactEmail() 获取证书订单关联邮箱。默认为腾讯云账号邮箱， 不存在则关联固定邮箱
 * @method void setContactEmail(string $ContactEmail) 设置证书订单关联邮箱。默认为腾讯云账号邮箱， 不存在则关联固定邮箱
 * @method string getContactPhone() 获取证书关联手机号码，  不存在则关联固定手机号码
 * @method void setContactPhone(string $ContactPhone) 设置证书关联手机号码，  不存在则关联固定手机号码
 * @method string getValidityPeriod() 获取证书有效期，默认3（月），目前仅支持3个月。
 * @method void setValidityPeriod(string $ValidityPeriod) 设置证书有效期，默认3（月），目前仅支持3个月。
 * @method string getCsrEncryptAlgo() 获取加密算法，取值为ECC、RSA， 默认为RSA
 * @method void setCsrEncryptAlgo(string $CsrEncryptAlgo) 设置加密算法，取值为ECC、RSA， 默认为RSA
 * @method string getCsrKeyParameter() 获取密钥对参数，RSA仅支持2048。ECC仅支持prime256v1。加密算法选择ECC时，此参数必填
 * @method void setCsrKeyParameter(string $CsrKeyParameter) 设置密钥对参数，RSA仅支持2048。ECC仅支持prime256v1。加密算法选择ECC时，此参数必填
 * @method string getCsrKeyPassword() 获取私钥密码， 目前仅使用在生成jks、pfx格式证书时密码； 其他格式私钥证书未加密
 * @method void setCsrKeyPassword(string $CsrKeyPassword) 设置私钥密码， 目前仅使用在生成jks、pfx格式证书时密码； 其他格式私钥证书未加密
 * @method string getAlias() 获取证书别名
 * @method void setAlias(string $Alias) 设置证书别名
 * @method string getOldCertificateId() 获取旧证书 ID，用于证书续费（证书有效期在30天内，且未过期），会建立续费关系， 可用于托管； 不传则表示新申请证书
 * @method void setOldCertificateId(string $OldCertificateId) 设置旧证书 ID，用于证书续费（证书有效期在30天内，且未过期），会建立续费关系， 可用于托管； 不传则表示新申请证书
 * @method string getPackageId() 获取权益包ID，用于免费证书扩容包使用， 免费证书扩容包已下线
 * @method void setPackageId(string $PackageId) 设置权益包ID，用于免费证书扩容包使用， 免费证书扩容包已下线
 * @method boolean getDeleteDnsAutoRecord() 获取签发后是否删除自动域名验证记录， 默认为否；仅域名为DNS_AUTO验证类型支持传参
 * @method void setDeleteDnsAutoRecord(boolean $DeleteDnsAutoRecord) 设置签发后是否删除自动域名验证记录， 默认为否；仅域名为DNS_AUTO验证类型支持传参
 * @method array getDnsNames() 获取证书绑定的其他域名，待开放。目前不支持此参数
 * @method void setDnsNames(array $DnsNames) 设置证书绑定的其他域名，待开放。目前不支持此参数
 */
class ApplyCertificateRequest extends AbstractModel
{
    /**
     * @var string 证书域名验证方式：
DNS_AUTO： 自动添加域名DNS验证， 需用户域名解析托管在『[云解析DNS](https://console.cloud.tencent.com/cns)』，且与申请证书归属同一个腾讯云账号
DNS：手动添加域名DNS验证，需用户手动去域名解析服务商添加验证值
FILE：手动添加域名文件验证。 需要用户手动在域名站点根目录添加指定路径文件进行文件验证， http&https任一通过即可；且域名站点需海外CA机构能访问， 具体访问白名单为：64.78.193.238，216.168.247.9，216.168.249.9，54.189.196.217
     */
    public $DvAuthMethod;

    /**
     * @var string 证书绑定的域名。
     */
    public $DomainName;

    /**
     * @var integer 证书关联的项目 ID。 默认为0（默认项目）
     */
    public $ProjectId;

    /**
     * @var string 证书类型， 可不传，目前仅支持类型83。83 = TrustAsia C1 DV Free。
     */
    public $PackageType;

    /**
     * @var string 证书订单关联邮箱。默认为腾讯云账号邮箱， 不存在则关联固定邮箱
     */
    public $ContactEmail;

    /**
     * @var string 证书关联手机号码，  不存在则关联固定手机号码
     */
    public $ContactPhone;

    /**
     * @var string 证书有效期，默认3（月），目前仅支持3个月。
     */
    public $ValidityPeriod;

    /**
     * @var string 加密算法，取值为ECC、RSA， 默认为RSA
     */
    public $CsrEncryptAlgo;

    /**
     * @var string 密钥对参数，RSA仅支持2048。ECC仅支持prime256v1。加密算法选择ECC时，此参数必填
     */
    public $CsrKeyParameter;

    /**
     * @var string 私钥密码， 目前仅使用在生成jks、pfx格式证书时密码； 其他格式私钥证书未加密
     */
    public $CsrKeyPassword;

    /**
     * @var string 证书别名
     */
    public $Alias;

    /**
     * @var string 旧证书 ID，用于证书续费（证书有效期在30天内，且未过期），会建立续费关系， 可用于托管； 不传则表示新申请证书
     */
    public $OldCertificateId;

    /**
     * @var string 权益包ID，用于免费证书扩容包使用， 免费证书扩容包已下线
     */
    public $PackageId;

    /**
     * @var boolean 签发后是否删除自动域名验证记录， 默认为否；仅域名为DNS_AUTO验证类型支持传参
     */
    public $DeleteDnsAutoRecord;

    /**
     * @var array 证书绑定的其他域名，待开放。目前不支持此参数
     */
    public $DnsNames;

    /**
     * @param string $DvAuthMethod 证书域名验证方式：
DNS_AUTO： 自动添加域名DNS验证， 需用户域名解析托管在『[云解析DNS](https://console.cloud.tencent.com/cns)』，且与申请证书归属同一个腾讯云账号
DNS：手动添加域名DNS验证，需用户手动去域名解析服务商添加验证值
FILE：手动添加域名文件验证。 需要用户手动在域名站点根目录添加指定路径文件进行文件验证， http&https任一通过即可；且域名站点需海外CA机构能访问， 具体访问白名单为：64.78.193.238，216.168.247.9，216.168.249.9，54.189.196.217
     * @param string $DomainName 证书绑定的域名。
     * @param integer $ProjectId 证书关联的项目 ID。 默认为0（默认项目）
     * @param string $PackageType 证书类型， 可不传，目前仅支持类型83。83 = TrustAsia C1 DV Free。
     * @param string $ContactEmail 证书订单关联邮箱。默认为腾讯云账号邮箱， 不存在则关联固定邮箱
     * @param string $ContactPhone 证书关联手机号码，  不存在则关联固定手机号码
     * @param string $ValidityPeriod 证书有效期，默认3（月），目前仅支持3个月。
     * @param string $CsrEncryptAlgo 加密算法，取值为ECC、RSA， 默认为RSA
     * @param string $CsrKeyParameter 密钥对参数，RSA仅支持2048。ECC仅支持prime256v1。加密算法选择ECC时，此参数必填
     * @param string $CsrKeyPassword 私钥密码， 目前仅使用在生成jks、pfx格式证书时密码； 其他格式私钥证书未加密
     * @param string $Alias 证书别名
     * @param string $OldCertificateId 旧证书 ID，用于证书续费（证书有效期在30天内，且未过期），会建立续费关系， 可用于托管； 不传则表示新申请证书
     * @param string $PackageId 权益包ID，用于免费证书扩容包使用， 免费证书扩容包已下线
     * @param boolean $DeleteDnsAutoRecord 签发后是否删除自动域名验证记录， 默认为否；仅域名为DNS_AUTO验证类型支持传参
     * @param array $DnsNames 证书绑定的其他域名，待开放。目前不支持此参数
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
        if (array_key_exists("DvAuthMethod",$param) and $param["DvAuthMethod"] !== null) {
            $this->DvAuthMethod = $param["DvAuthMethod"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("ContactEmail",$param) and $param["ContactEmail"] !== null) {
            $this->ContactEmail = $param["ContactEmail"];
        }

        if (array_key_exists("ContactPhone",$param) and $param["ContactPhone"] !== null) {
            $this->ContactPhone = $param["ContactPhone"];
        }

        if (array_key_exists("ValidityPeriod",$param) and $param["ValidityPeriod"] !== null) {
            $this->ValidityPeriod = $param["ValidityPeriod"];
        }

        if (array_key_exists("CsrEncryptAlgo",$param) and $param["CsrEncryptAlgo"] !== null) {
            $this->CsrEncryptAlgo = $param["CsrEncryptAlgo"];
        }

        if (array_key_exists("CsrKeyParameter",$param) and $param["CsrKeyParameter"] !== null) {
            $this->CsrKeyParameter = $param["CsrKeyParameter"];
        }

        if (array_key_exists("CsrKeyPassword",$param) and $param["CsrKeyPassword"] !== null) {
            $this->CsrKeyPassword = $param["CsrKeyPassword"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            $this->OldCertificateId = $param["OldCertificateId"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("DeleteDnsAutoRecord",$param) and $param["DeleteDnsAutoRecord"] !== null) {
            $this->DeleteDnsAutoRecord = $param["DeleteDnsAutoRecord"];
        }

        if (array_key_exists("DnsNames",$param) and $param["DnsNames"] !== null) {
            $this->DnsNames = $param["DnsNames"];
        }
    }
}
