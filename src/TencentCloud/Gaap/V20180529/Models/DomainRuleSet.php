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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 按照域名分类的7层监听器转发规则信息
 *
 * @method string getDomain() 获取转发规则域名。
 * @method void setDomain(string $Domain) 设置转发规则域名。
 * @method array getRuleSet() 获取该域名对应的转发规则列表。
 * @method void setRuleSet(array $RuleSet) 设置该域名对应的转发规则列表。
 * @method string getCertificateId() 获取该域名对应的服务器证书ID，值为default时，表示使用默认证书（监听器配置的证书）。
 * @method void setCertificateId(string $CertificateId) 设置该域名对应的服务器证书ID，值为default时，表示使用默认证书（监听器配置的证书）。
 * @method string getCertificateAlias() 获取该域名对应服务器证书名称。
 * @method void setCertificateAlias(string $CertificateAlias) 设置该域名对应服务器证书名称。
 * @method string getClientCertificateId() 获取该域名对应的客户端证书ID，值为default时，表示使用默认证书（监听器配置的证书）。
 * @method void setClientCertificateId(string $ClientCertificateId) 设置该域名对应的客户端证书ID，值为default时，表示使用默认证书（监听器配置的证书）。
 * @method string getClientCertificateAlias() 获取该域名对应客户端证书名称。
 * @method void setClientCertificateAlias(string $ClientCertificateAlias) 设置该域名对应客户端证书名称。
 * @method string getBasicAuthConfId() 获取该域名对应基础认证配置ID。
 * @method void setBasicAuthConfId(string $BasicAuthConfId) 设置该域名对应基础认证配置ID。
 * @method integer getBasicAuth() 获取基础认证开关，其中：
0，表示未开启；
1，表示已开启。
 * @method void setBasicAuth(integer $BasicAuth) 设置基础认证开关，其中：
0，表示未开启；
1，表示已开启。
 * @method string getBasicAuthConfAlias() 获取该域名对应基础认证配置名称。
 * @method void setBasicAuthConfAlias(string $BasicAuthConfAlias) 设置该域名对应基础认证配置名称。
 * @method string getRealServerCertificateId() 获取该域名对应源站认证证书ID。
 * @method void setRealServerCertificateId(string $RealServerCertificateId) 设置该域名对应源站认证证书ID。
 * @method integer getRealServerAuth() 获取源站认证开关，其中：
0，表示未开启；
1，表示已开启。
 * @method void setRealServerAuth(integer $RealServerAuth) 设置源站认证开关，其中：
0，表示未开启；
1，表示已开启。
 * @method string getRealServerCertificateAlias() 获取该域名对应源站认证证书名称。
 * @method void setRealServerCertificateAlias(string $RealServerCertificateAlias) 设置该域名对应源站认证证书名称。
 * @method string getGaapCertificateId() 获取该域名对应通道认证证书ID。
 * @method void setGaapCertificateId(string $GaapCertificateId) 设置该域名对应通道认证证书ID。
 * @method integer getGaapAuth() 获取通道认证开关，其中：
0，表示未开启；
1，表示已开启。
 * @method void setGaapAuth(integer $GaapAuth) 设置通道认证开关，其中：
0，表示未开启；
1，表示已开启。
 * @method string getGaapCertificateAlias() 获取该域名对应通道认证证书名称。
 * @method void setGaapCertificateAlias(string $GaapCertificateAlias) 设置该域名对应通道认证证书名称。
 * @method string getRealServerCertificateDomain() 获取源站认证域名。
 * @method void setRealServerCertificateDomain(string $RealServerCertificateDomain) 设置源站认证域名。
 * @method array getPolyClientCertificateAliasInfo() 获取多客户端证书时，返回多个证书的id和别名
 * @method void setPolyClientCertificateAliasInfo(array $PolyClientCertificateAliasInfo) 设置多客户端证书时，返回多个证书的id和别名
 * @method array getPolyRealServerCertificateAliasInfo() 获取多源站证书时，返回多个证书的id和别名
 * @method void setPolyRealServerCertificateAliasInfo(array $PolyRealServerCertificateAliasInfo) 设置多源站证书时，返回多个证书的id和别名
 * @method integer getDomainStatus() 获取域名的状态。
0表示运行中，
1表示变更中，
2表示删除中。
 * @method void setDomainStatus(integer $DomainStatus) 设置域名的状态。
0表示运行中，
1表示变更中，
2表示删除中。
 * @method string getBanStatus() 获取封禁解封状态：BANNED表示已封禁，RECOVER表示已解封或未封禁，BANNING表示封禁中，RECOVERING表示解封中，BAN_FAILED表示封禁失败，RECOVER_FAILED表示解封失败。
 * @method void setBanStatus(string $BanStatus) 设置封禁解封状态：BANNED表示已封禁，RECOVER表示已解封或未封禁，BANNING表示封禁中，RECOVERING表示解封中，BAN_FAILED表示封禁失败，RECOVER_FAILED表示解封失败。
 * @method integer getHttp3Supported() 获取Http3特性标识，其中：
0表示关闭；
1表示启用。
 * @method void setHttp3Supported(integer $Http3Supported) 设置Http3特性标识，其中：
0表示关闭；
1表示启用。
 * @method boolean getIsDefaultServer() 获取是否为默认域名
 * @method void setIsDefaultServer(boolean $IsDefaultServer) 设置是否为默认域名
 * @method string getTLSCiphers() 获取TLS套件包
 * @method void setTLSCiphers(string $TLSCiphers) 设置TLS套件包
 * @method array getTLSSupportVersion() 获取TLS版本
 * @method void setTLSSupportVersion(array $TLSSupportVersion) 设置TLS版本
 */
class DomainRuleSet extends AbstractModel
{
    /**
     * @var string 转发规则域名。
     */
    public $Domain;

    /**
     * @var array 该域名对应的转发规则列表。
     */
    public $RuleSet;

    /**
     * @var string 该域名对应的服务器证书ID，值为default时，表示使用默认证书（监听器配置的证书）。
     */
    public $CertificateId;

    /**
     * @var string 该域名对应服务器证书名称。
     */
    public $CertificateAlias;

    /**
     * @var string 该域名对应的客户端证书ID，值为default时，表示使用默认证书（监听器配置的证书）。
     */
    public $ClientCertificateId;

    /**
     * @var string 该域名对应客户端证书名称。
     */
    public $ClientCertificateAlias;

    /**
     * @var string 该域名对应基础认证配置ID。
     */
    public $BasicAuthConfId;

    /**
     * @var integer 基础认证开关，其中：
0，表示未开启；
1，表示已开启。
     */
    public $BasicAuth;

    /**
     * @var string 该域名对应基础认证配置名称。
     */
    public $BasicAuthConfAlias;

    /**
     * @var string 该域名对应源站认证证书ID。
     */
    public $RealServerCertificateId;

    /**
     * @var integer 源站认证开关，其中：
0，表示未开启；
1，表示已开启。
     */
    public $RealServerAuth;

    /**
     * @var string 该域名对应源站认证证书名称。
     */
    public $RealServerCertificateAlias;

    /**
     * @var string 该域名对应通道认证证书ID。
     */
    public $GaapCertificateId;

    /**
     * @var integer 通道认证开关，其中：
0，表示未开启；
1，表示已开启。
     */
    public $GaapAuth;

    /**
     * @var string 该域名对应通道认证证书名称。
     */
    public $GaapCertificateAlias;

    /**
     * @var string 源站认证域名。
     */
    public $RealServerCertificateDomain;

    /**
     * @var array 多客户端证书时，返回多个证书的id和别名
     */
    public $PolyClientCertificateAliasInfo;

    /**
     * @var array 多源站证书时，返回多个证书的id和别名
     */
    public $PolyRealServerCertificateAliasInfo;

    /**
     * @var integer 域名的状态。
0表示运行中，
1表示变更中，
2表示删除中。
     */
    public $DomainStatus;

    /**
     * @var string 封禁解封状态：BANNED表示已封禁，RECOVER表示已解封或未封禁，BANNING表示封禁中，RECOVERING表示解封中，BAN_FAILED表示封禁失败，RECOVER_FAILED表示解封失败。
     */
    public $BanStatus;

    /**
     * @var integer Http3特性标识，其中：
0表示关闭；
1表示启用。
     */
    public $Http3Supported;

    /**
     * @var boolean 是否为默认域名
     */
    public $IsDefaultServer;

    /**
     * @var string TLS套件包
     */
    public $TLSCiphers;

    /**
     * @var array TLS版本
     */
    public $TLSSupportVersion;

    /**
     * @param string $Domain 转发规则域名。
     * @param array $RuleSet 该域名对应的转发规则列表。
     * @param string $CertificateId 该域名对应的服务器证书ID，值为default时，表示使用默认证书（监听器配置的证书）。
     * @param string $CertificateAlias 该域名对应服务器证书名称。
     * @param string $ClientCertificateId 该域名对应的客户端证书ID，值为default时，表示使用默认证书（监听器配置的证书）。
     * @param string $ClientCertificateAlias 该域名对应客户端证书名称。
     * @param string $BasicAuthConfId 该域名对应基础认证配置ID。
     * @param integer $BasicAuth 基础认证开关，其中：
0，表示未开启；
1，表示已开启。
     * @param string $BasicAuthConfAlias 该域名对应基础认证配置名称。
     * @param string $RealServerCertificateId 该域名对应源站认证证书ID。
     * @param integer $RealServerAuth 源站认证开关，其中：
0，表示未开启；
1，表示已开启。
     * @param string $RealServerCertificateAlias 该域名对应源站认证证书名称。
     * @param string $GaapCertificateId 该域名对应通道认证证书ID。
     * @param integer $GaapAuth 通道认证开关，其中：
0，表示未开启；
1，表示已开启。
     * @param string $GaapCertificateAlias 该域名对应通道认证证书名称。
     * @param string $RealServerCertificateDomain 源站认证域名。
     * @param array $PolyClientCertificateAliasInfo 多客户端证书时，返回多个证书的id和别名
     * @param array $PolyRealServerCertificateAliasInfo 多源站证书时，返回多个证书的id和别名
     * @param integer $DomainStatus 域名的状态。
0表示运行中，
1表示变更中，
2表示删除中。
     * @param string $BanStatus 封禁解封状态：BANNED表示已封禁，RECOVER表示已解封或未封禁，BANNING表示封禁中，RECOVERING表示解封中，BAN_FAILED表示封禁失败，RECOVER_FAILED表示解封失败。
     * @param integer $Http3Supported Http3特性标识，其中：
0表示关闭；
1表示启用。
     * @param boolean $IsDefaultServer 是否为默认域名
     * @param string $TLSCiphers TLS套件包
     * @param array $TLSSupportVersion TLS版本
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RuleSet",$param) and $param["RuleSet"] !== null) {
            $this->RuleSet = [];
            foreach ($param["RuleSet"] as $key => $value){
                $obj = new RuleInfo();
                $obj->deserialize($value);
                array_push($this->RuleSet, $obj);
            }
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("CertificateAlias",$param) and $param["CertificateAlias"] !== null) {
            $this->CertificateAlias = $param["CertificateAlias"];
        }

        if (array_key_exists("ClientCertificateId",$param) and $param["ClientCertificateId"] !== null) {
            $this->ClientCertificateId = $param["ClientCertificateId"];
        }

        if (array_key_exists("ClientCertificateAlias",$param) and $param["ClientCertificateAlias"] !== null) {
            $this->ClientCertificateAlias = $param["ClientCertificateAlias"];
        }

        if (array_key_exists("BasicAuthConfId",$param) and $param["BasicAuthConfId"] !== null) {
            $this->BasicAuthConfId = $param["BasicAuthConfId"];
        }

        if (array_key_exists("BasicAuth",$param) and $param["BasicAuth"] !== null) {
            $this->BasicAuth = $param["BasicAuth"];
        }

        if (array_key_exists("BasicAuthConfAlias",$param) and $param["BasicAuthConfAlias"] !== null) {
            $this->BasicAuthConfAlias = $param["BasicAuthConfAlias"];
        }

        if (array_key_exists("RealServerCertificateId",$param) and $param["RealServerCertificateId"] !== null) {
            $this->RealServerCertificateId = $param["RealServerCertificateId"];
        }

        if (array_key_exists("RealServerAuth",$param) and $param["RealServerAuth"] !== null) {
            $this->RealServerAuth = $param["RealServerAuth"];
        }

        if (array_key_exists("RealServerCertificateAlias",$param) and $param["RealServerCertificateAlias"] !== null) {
            $this->RealServerCertificateAlias = $param["RealServerCertificateAlias"];
        }

        if (array_key_exists("GaapCertificateId",$param) and $param["GaapCertificateId"] !== null) {
            $this->GaapCertificateId = $param["GaapCertificateId"];
        }

        if (array_key_exists("GaapAuth",$param) and $param["GaapAuth"] !== null) {
            $this->GaapAuth = $param["GaapAuth"];
        }

        if (array_key_exists("GaapCertificateAlias",$param) and $param["GaapCertificateAlias"] !== null) {
            $this->GaapCertificateAlias = $param["GaapCertificateAlias"];
        }

        if (array_key_exists("RealServerCertificateDomain",$param) and $param["RealServerCertificateDomain"] !== null) {
            $this->RealServerCertificateDomain = $param["RealServerCertificateDomain"];
        }

        if (array_key_exists("PolyClientCertificateAliasInfo",$param) and $param["PolyClientCertificateAliasInfo"] !== null) {
            $this->PolyClientCertificateAliasInfo = [];
            foreach ($param["PolyClientCertificateAliasInfo"] as $key => $value){
                $obj = new CertificateAliasInfo();
                $obj->deserialize($value);
                array_push($this->PolyClientCertificateAliasInfo, $obj);
            }
        }

        if (array_key_exists("PolyRealServerCertificateAliasInfo",$param) and $param["PolyRealServerCertificateAliasInfo"] !== null) {
            $this->PolyRealServerCertificateAliasInfo = [];
            foreach ($param["PolyRealServerCertificateAliasInfo"] as $key => $value){
                $obj = new CertificateAliasInfo();
                $obj->deserialize($value);
                array_push($this->PolyRealServerCertificateAliasInfo, $obj);
            }
        }

        if (array_key_exists("DomainStatus",$param) and $param["DomainStatus"] !== null) {
            $this->DomainStatus = $param["DomainStatus"];
        }

        if (array_key_exists("BanStatus",$param) and $param["BanStatus"] !== null) {
            $this->BanStatus = $param["BanStatus"];
        }

        if (array_key_exists("Http3Supported",$param) and $param["Http3Supported"] !== null) {
            $this->Http3Supported = $param["Http3Supported"];
        }

        if (array_key_exists("IsDefaultServer",$param) and $param["IsDefaultServer"] !== null) {
            $this->IsDefaultServer = $param["IsDefaultServer"];
        }

        if (array_key_exists("TLSCiphers",$param) and $param["TLSCiphers"] !== null) {
            $this->TLSCiphers = $param["TLSCiphers"];
        }

        if (array_key_exists("TLSSupportVersion",$param) and $param["TLSSupportVersion"] !== null) {
            $this->TLSSupportVersion = $param["TLSSupportVersion"];
        }
    }
}
