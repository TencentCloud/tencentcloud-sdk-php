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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SaaS型WAF域名详情
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getDomainId() 获取域名唯一ID
 * @method void setDomainId(string $DomainId) 设置域名唯一ID
 * @method string getInstanceId() 获取域名所属实例唯一ID
 * @method void setInstanceId(string $InstanceId) 设置域名所属实例唯一ID
 * @method string getEdition() 获取域名所属实例类型
 * @method void setEdition(string $Edition) 设置域名所属实例类型
 * @method string getInstanceName() 获取域名所属实例名
 * @method void setInstanceName(string $InstanceName) 设置域名所属实例名
 * @method string getCert() 获取证书
 * @method void setCert(string $Cert) 设置证书
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getEngine() 获取规则引擎和AI引擎防护模式联合状态。
1:初始状态,规则引擎拦截&&AI引擎未操作开关状态
10：规则引擎观察&&AI引擎关闭模式 
11：规则引擎观察&&AI引擎观察模式 
12：规则引擎观察&&AI引擎拦截模式 
20：规则引擎拦截&&AI引擎关闭模式 
21：规则引擎拦截&&AI引擎观察模式 
22：规则引擎拦截&&AI引擎拦截模式
 * @method void setEngine(integer $Engine) 设置规则引擎和AI引擎防护模式联合状态。
1:初始状态,规则引擎拦截&&AI引擎未操作开关状态
10：规则引擎观察&&AI引擎关闭模式 
11：规则引擎观察&&AI引擎观察模式 
12：规则引擎观察&&AI引擎拦截模式 
20：规则引擎拦截&&AI引擎关闭模式 
21：规则引擎拦截&&AI引擎观察模式 
22：规则引擎拦截&&AI引擎拦截模式
 * @method integer getHttpsRewrite() 获取是否开启HTTP强制跳转到HTTPS。
0：不强制跳转
1：开启强制跳转
 * @method void setHttpsRewrite(integer $HttpsRewrite) 设置是否开启HTTP强制跳转到HTTPS。
0：不强制跳转
1：开启强制跳转
 * @method string getHttpsUpstreamPort() 获取HTTPS回源端口
 * @method void setHttpsUpstreamPort(string $HttpsUpstreamPort) 设置HTTPS回源端口
 * @method integer getIsCdn() 获取waf前是否部署有七层代理服务。
0：没有部署代理服务
1：有部署代理服务，waf将使用XFF获取客户端IP
2：有部署代理服务，waf将使用remote_addr获取客户端IP
3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP
 * @method void setIsCdn(integer $IsCdn) 设置waf前是否部署有七层代理服务。
0：没有部署代理服务
1：有部署代理服务，waf将使用XFF获取客户端IP
2：有部署代理服务，waf将使用remote_addr获取客户端IP
3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP
 * @method integer getIsGray() 获取是否开启灰度，已废弃。
 * @method void setIsGray(integer $IsGray) 设置是否开启灰度，已废弃。
 * @method integer getIsHttp2() 获取是否开启HTTP2，需要开启HTTPS协议支持。
0：关闭
1：开启
 * @method void setIsHttp2(integer $IsHttp2) 设置是否开启HTTP2，需要开启HTTPS协议支持。
0：关闭
1：开启
 * @method integer getIsWebsocket() 获取是否开启WebSocket支持。
0：关闭
1：开启
 * @method void setIsWebsocket(integer $IsWebsocket) 设置是否开启WebSocket支持。
0：关闭
1：开启
 * @method integer getLoadBalance() 获取回源负载均衡策略。
0：轮询
1：IP hash
2：加权轮询
 * @method void setLoadBalance(integer $LoadBalance) 设置回源负载均衡策略。
0：轮询
1：IP hash
2：加权轮询
 * @method integer getMode() 获取防护模式。
0：观察模式
1：拦截模式
 * @method void setMode(integer $Mode) 设置防护模式。
0：观察模式
1：拦截模式
 * @method string getPrivateKey() 获取自有证书的私钥
 * @method void setPrivateKey(string $PrivateKey) 设置自有证书的私钥
 * @method string getSSLId() 获取CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
 * @method void setSSLId(string $SSLId) 设置CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
 * @method string getUpstreamDomain() 获取域名回源时的回源域名。UpstreamType为1时，需要填充此字段
 * @method void setUpstreamDomain(string $UpstreamDomain) 设置域名回源时的回源域名。UpstreamType为1时，需要填充此字段
 * @method integer getUpstreamType() 获取回源类型。
0：通过IP回源
1：通过域名回源
 * @method void setUpstreamType(integer $UpstreamType) 设置回源类型。
0：通过IP回源
1：通过域名回源
 * @method array getSrcList() 获取IP回源时的回源IP列表。UpstreamType为0时，需要填充此字段
 * @method void setSrcList(array $SrcList) 设置IP回源时的回源IP列表。UpstreamType为0时，需要填充此字段
 * @method array getPorts() 获取域名端口配置
 * @method void setPorts(array $Ports) 设置域名端口配置
 * @method integer getCertType() 获取证书类型。
0：仅配置HTTP监听端口，没有证书
1：证书来源为自有证书
2：证书来源为托管证书
 * @method void setCertType(integer $CertType) 设置证书类型。
0：仅配置HTTP监听端口，没有证书
1：证书来源为自有证书
2：证书来源为托管证书
 * @method string getUpstreamScheme() 获取服务配置有HTTPS端口时，HTTPS的回源协议。
http：使用http协议回源，和HttpsUpstreamPort配合使用
https：使用https协议回源
 * @method void setUpstreamScheme(string $UpstreamScheme) 设置服务配置有HTTPS端口时，HTTPS的回源协议。
http：使用http协议回源，和HttpsUpstreamPort配合使用
https：使用https协议回源
 * @method integer getCls() 获取日志包是否开启。
0：关闭
1：开启
 * @method void setCls(integer $Cls) 设置日志包是否开启。
0：关闭
1：开启
 * @method string getCname() 获取接入Cname，SaaS型域名使用此Cname进行接入
 * @method void setCname(string $Cname) 设置接入Cname，SaaS型域名使用此Cname进行接入
 * @method integer getIsKeepAlive() 获取是否开启长连接。
0： 短连接
1： 长连接
 * @method void setIsKeepAlive(integer $IsKeepAlive) 设置是否开启长连接。
0： 短连接
1： 长连接
 * @method integer getActiveCheck() 获取是否开启主动健康检测。
0：不开启
1：开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActiveCheck(integer $ActiveCheck) 设置是否开启主动健康检测。
0：不开启
1：开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTLSVersion() 获取TLS版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTLSVersion(integer $TLSVersion) 设置TLS版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCiphers() 获取自定义的加密套件列表。CipherTemplate为3时需要填此字段，表示自定义的加密套件，值通过DescribeCiphersDetail接口获取。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCiphers(array $Ciphers) 设置自定义的加密套件列表。CipherTemplate为3时需要填此字段，表示自定义的加密套件，值通过DescribeCiphersDetail接口获取。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCipherTemplate() 获取加密套件模板。
0：不支持选择，使用默认模板  
1：通用型模板 
2：安全型模板
3：自定义模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCipherTemplate(integer $CipherTemplate) 设置加密套件模板。
0：不支持选择，使用默认模板  
1：通用型模板 
2：安全型模板
3：自定义模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProxyReadTimeout() 获取WAF与源站的读超时时间，默认300s。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyReadTimeout(integer $ProxyReadTimeout) 设置WAF与源站的读超时时间，默认300s。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProxySendTimeout() 获取WAF与源站的写超时时间，默认300s。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxySendTimeout(integer $ProxySendTimeout) 设置WAF与源站的写超时时间，默认300s。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSniType() 获取WAF回源时的SNI类型。
0：关闭SNI，不配置client_hello中的server_name
1：开启SNI，client_hello中的server_name为防护域名
2：开启SNI，SNI为域名回源时的源站域名
3：开启SNI，SNI为自定义域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSniType(integer $SniType) 设置WAF回源时的SNI类型。
0：关闭SNI，不配置client_hello中的server_name
1：开启SNI，client_hello中的server_name为防护域名
2：开启SNI，SNI为域名回源时的源站域名
3：开启SNI，SNI为自定义域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSniHost() 获取SniType为3时，需要填此参数，表示自定义的SNI；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSniHost(string $SniHost) 设置SniType为3时，需要填此参数，表示自定义的SNI；
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWeights() 获取回源IP权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeights(array $Weights) 设置回源IP权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIpHeaders() 获取IsCdn=3时，表示自定义header
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpHeaders(array $IpHeaders) 设置IsCdn=3时，表示自定义header
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getXFFReset() 获取是否开启XFF重置。
0：关闭
1：开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setXFFReset(integer $XFFReset) 设置是否开启XFF重置。
0：关闭
1：开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNote() 获取域名备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNote(string $Note) 设置域名备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpstreamHost() 获取自定义回源Host。默认为空字符串，表示使用防护域名作为回源Host。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamHost(string $UpstreamHost) 设置自定义回源Host。默认为空字符串，表示使用防护域名作为回源Host。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLevel() 获取防护规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(string $Level) 设置防护规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProxyBuffer() 获取是否开启缓存 0-关闭 1-开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyBuffer(integer $ProxyBuffer) 设置是否开启缓存 0-关闭 1-开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGmType() 获取国密选项。0：不开启国密 1：在原有TLS选项的基础上追加支持国密 2：开启国密并仅支持国密客户端访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGmType(integer $GmType) 设置国密选项。0：不开启国密 1：在原有TLS选项的基础上追加支持国密 2：开启国密并仅支持国密客户端访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGmCertType() 获取国密证书类型。0：无国密证书 1：证书来源为自有国密证书 2：证书来源为托管国密证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGmCertType(integer $GmCertType) 设置国密证书类型。0：无国密证书 1：证书来源为自有国密证书 2：证书来源为托管国密证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGmCert() 获取GmCertType为1时，需要填充此参数，表示自有国密证书的证书链
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGmCert(string $GmCert) 设置GmCertType为1时，需要填充此参数，表示自有国密证书的证书链
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGmPrivateKey() 获取GmCertType为1时，需要填充此参数，表示自有国密证书的私钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGmPrivateKey(string $GmPrivateKey) 设置GmCertType为1时，需要填充此参数，表示自有国密证书的私钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGmEncCert() 获取GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGmEncCert(string $GmEncCert) 设置GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGmEncPrivateKey() 获取GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书的私钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGmEncPrivateKey(string $GmEncPrivateKey) 设置GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书的私钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGmSSLId() 获取GmCertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGmSSLId(string $GmSSLId) 设置GmCertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取域名标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置域名标签
注意：此字段可能返回 null，表示取不到有效值。
 */
class DomainsPartInfo extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 域名唯一ID
     */
    public $DomainId;

    /**
     * @var string 域名所属实例唯一ID
     */
    public $InstanceId;

    /**
     * @var string 域名所属实例类型
     */
    public $Edition;

    /**
     * @var string 域名所属实例名
     */
    public $InstanceName;

    /**
     * @var string 证书
     */
    public $Cert;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 规则引擎和AI引擎防护模式联合状态。
1:初始状态,规则引擎拦截&&AI引擎未操作开关状态
10：规则引擎观察&&AI引擎关闭模式 
11：规则引擎观察&&AI引擎观察模式 
12：规则引擎观察&&AI引擎拦截模式 
20：规则引擎拦截&&AI引擎关闭模式 
21：规则引擎拦截&&AI引擎观察模式 
22：规则引擎拦截&&AI引擎拦截模式
     */
    public $Engine;

    /**
     * @var integer 是否开启HTTP强制跳转到HTTPS。
0：不强制跳转
1：开启强制跳转
     */
    public $HttpsRewrite;

    /**
     * @var string HTTPS回源端口
     */
    public $HttpsUpstreamPort;

    /**
     * @var integer waf前是否部署有七层代理服务。
0：没有部署代理服务
1：有部署代理服务，waf将使用XFF获取客户端IP
2：有部署代理服务，waf将使用remote_addr获取客户端IP
3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP
     */
    public $IsCdn;

    /**
     * @var integer 是否开启灰度，已废弃。
     */
    public $IsGray;

    /**
     * @var integer 是否开启HTTP2，需要开启HTTPS协议支持。
0：关闭
1：开启
     */
    public $IsHttp2;

    /**
     * @var integer 是否开启WebSocket支持。
0：关闭
1：开启
     */
    public $IsWebsocket;

    /**
     * @var integer 回源负载均衡策略。
0：轮询
1：IP hash
2：加权轮询
     */
    public $LoadBalance;

    /**
     * @var integer 防护模式。
0：观察模式
1：拦截模式
     */
    public $Mode;

    /**
     * @var string 自有证书的私钥
     */
    public $PrivateKey;

    /**
     * @var string CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
     */
    public $SSLId;

    /**
     * @var string 域名回源时的回源域名。UpstreamType为1时，需要填充此字段
     */
    public $UpstreamDomain;

    /**
     * @var integer 回源类型。
0：通过IP回源
1：通过域名回源
     */
    public $UpstreamType;

    /**
     * @var array IP回源时的回源IP列表。UpstreamType为0时，需要填充此字段
     */
    public $SrcList;

    /**
     * @var array 域名端口配置
     */
    public $Ports;

    /**
     * @var integer 证书类型。
0：仅配置HTTP监听端口，没有证书
1：证书来源为自有证书
2：证书来源为托管证书
     */
    public $CertType;

    /**
     * @var string 服务配置有HTTPS端口时，HTTPS的回源协议。
http：使用http协议回源，和HttpsUpstreamPort配合使用
https：使用https协议回源
     */
    public $UpstreamScheme;

    /**
     * @var integer 日志包是否开启。
0：关闭
1：开启
     */
    public $Cls;

    /**
     * @var string 接入Cname，SaaS型域名使用此Cname进行接入
     */
    public $Cname;

    /**
     * @var integer 是否开启长连接。
0： 短连接
1： 长连接
     */
    public $IsKeepAlive;

    /**
     * @var integer 是否开启主动健康检测。
0：不开启
1：开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActiveCheck;

    /**
     * @var integer TLS版本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TLSVersion;

    /**
     * @var array 自定义的加密套件列表。CipherTemplate为3时需要填此字段，表示自定义的加密套件，值通过DescribeCiphersDetail接口获取。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ciphers;

    /**
     * @var integer 加密套件模板。
0：不支持选择，使用默认模板  
1：通用型模板 
2：安全型模板
3：自定义模板
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CipherTemplate;

    /**
     * @var integer WAF与源站的读超时时间，默认300s。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyReadTimeout;

    /**
     * @var integer WAF与源站的写超时时间，默认300s。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxySendTimeout;

    /**
     * @var integer WAF回源时的SNI类型。
0：关闭SNI，不配置client_hello中的server_name
1：开启SNI，client_hello中的server_name为防护域名
2：开启SNI，SNI为域名回源时的源站域名
3：开启SNI，SNI为自定义域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SniType;

    /**
     * @var string SniType为3时，需要填此参数，表示自定义的SNI；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SniHost;

    /**
     * @var array 回源IP权重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weights;

    /**
     * @var array IsCdn=3时，表示自定义header
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpHeaders;

    /**
     * @var integer 是否开启XFF重置。
0：关闭
1：开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $XFFReset;

    /**
     * @var string 域名备注信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Note;

    /**
     * @var string 自定义回源Host。默认为空字符串，表示使用防护域名作为回源Host。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamHost;

    /**
     * @var string 防护规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var integer 是否开启缓存 0-关闭 1-开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyBuffer;

    /**
     * @var integer 国密选项。0：不开启国密 1：在原有TLS选项的基础上追加支持国密 2：开启国密并仅支持国密客户端访问
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GmType;

    /**
     * @var integer 国密证书类型。0：无国密证书 1：证书来源为自有国密证书 2：证书来源为托管国密证书
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GmCertType;

    /**
     * @var string GmCertType为1时，需要填充此参数，表示自有国密证书的证书链
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GmCert;

    /**
     * @var string GmCertType为1时，需要填充此参数，表示自有国密证书的私钥
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GmPrivateKey;

    /**
     * @var string GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GmEncCert;

    /**
     * @var string GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书的私钥
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GmEncPrivateKey;

    /**
     * @var string GmCertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GmSSLId;

    /**
     * @var array 域名标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @param string $Domain 域名
     * @param string $DomainId 域名唯一ID
     * @param string $InstanceId 域名所属实例唯一ID
     * @param string $Edition 域名所属实例类型
     * @param string $InstanceName 域名所属实例名
     * @param string $Cert 证书
     * @param string $CreateTime 创建时间
     * @param integer $Engine 规则引擎和AI引擎防护模式联合状态。
1:初始状态,规则引擎拦截&&AI引擎未操作开关状态
10：规则引擎观察&&AI引擎关闭模式 
11：规则引擎观察&&AI引擎观察模式 
12：规则引擎观察&&AI引擎拦截模式 
20：规则引擎拦截&&AI引擎关闭模式 
21：规则引擎拦截&&AI引擎观察模式 
22：规则引擎拦截&&AI引擎拦截模式
     * @param integer $HttpsRewrite 是否开启HTTP强制跳转到HTTPS。
0：不强制跳转
1：开启强制跳转
     * @param string $HttpsUpstreamPort HTTPS回源端口
     * @param integer $IsCdn waf前是否部署有七层代理服务。
0：没有部署代理服务
1：有部署代理服务，waf将使用XFF获取客户端IP
2：有部署代理服务，waf将使用remote_addr获取客户端IP
3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP
     * @param integer $IsGray 是否开启灰度，已废弃。
     * @param integer $IsHttp2 是否开启HTTP2，需要开启HTTPS协议支持。
0：关闭
1：开启
     * @param integer $IsWebsocket 是否开启WebSocket支持。
0：关闭
1：开启
     * @param integer $LoadBalance 回源负载均衡策略。
0：轮询
1：IP hash
2：加权轮询
     * @param integer $Mode 防护模式。
0：观察模式
1：拦截模式
     * @param string $PrivateKey 自有证书的私钥
     * @param string $SSLId CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
     * @param string $UpstreamDomain 域名回源时的回源域名。UpstreamType为1时，需要填充此字段
     * @param integer $UpstreamType 回源类型。
0：通过IP回源
1：通过域名回源
     * @param array $SrcList IP回源时的回源IP列表。UpstreamType为0时，需要填充此字段
     * @param array $Ports 域名端口配置
     * @param integer $CertType 证书类型。
0：仅配置HTTP监听端口，没有证书
1：证书来源为自有证书
2：证书来源为托管证书
     * @param string $UpstreamScheme 服务配置有HTTPS端口时，HTTPS的回源协议。
http：使用http协议回源，和HttpsUpstreamPort配合使用
https：使用https协议回源
     * @param integer $Cls 日志包是否开启。
0：关闭
1：开启
     * @param string $Cname 接入Cname，SaaS型域名使用此Cname进行接入
     * @param integer $IsKeepAlive 是否开启长连接。
0： 短连接
1： 长连接
     * @param integer $ActiveCheck 是否开启主动健康检测。
0：不开启
1：开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TLSVersion TLS版本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Ciphers 自定义的加密套件列表。CipherTemplate为3时需要填此字段，表示自定义的加密套件，值通过DescribeCiphersDetail接口获取。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CipherTemplate 加密套件模板。
0：不支持选择，使用默认模板  
1：通用型模板 
2：安全型模板
3：自定义模板
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProxyReadTimeout WAF与源站的读超时时间，默认300s。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProxySendTimeout WAF与源站的写超时时间，默认300s。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SniType WAF回源时的SNI类型。
0：关闭SNI，不配置client_hello中的server_name
1：开启SNI，client_hello中的server_name为防护域名
2：开启SNI，SNI为域名回源时的源站域名
3：开启SNI，SNI为自定义域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SniHost SniType为3时，需要填此参数，表示自定义的SNI；
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Weights 回源IP权重
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IpHeaders IsCdn=3时，表示自定义header
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $XFFReset 是否开启XFF重置。
0：关闭
1：开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Note 域名备注信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpstreamHost 自定义回源Host。默认为空字符串，表示使用防护域名作为回源Host。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Level 防护规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProxyBuffer 是否开启缓存 0-关闭 1-开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GmType 国密选项。0：不开启国密 1：在原有TLS选项的基础上追加支持国密 2：开启国密并仅支持国密客户端访问
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GmCertType 国密证书类型。0：无国密证书 1：证书来源为自有国密证书 2：证书来源为托管国密证书
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GmCert GmCertType为1时，需要填充此参数，表示自有国密证书的证书链
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GmPrivateKey GmCertType为1时，需要填充此参数，表示自有国密证书的私钥
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GmEncCert GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GmEncPrivateKey GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书的私钥
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GmSSLId GmCertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels 域名标签
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Cert",$param) and $param["Cert"] !== null) {
            $this->Cert = $param["Cert"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("HttpsRewrite",$param) and $param["HttpsRewrite"] !== null) {
            $this->HttpsRewrite = $param["HttpsRewrite"];
        }

        if (array_key_exists("HttpsUpstreamPort",$param) and $param["HttpsUpstreamPort"] !== null) {
            $this->HttpsUpstreamPort = $param["HttpsUpstreamPort"];
        }

        if (array_key_exists("IsCdn",$param) and $param["IsCdn"] !== null) {
            $this->IsCdn = $param["IsCdn"];
        }

        if (array_key_exists("IsGray",$param) and $param["IsGray"] !== null) {
            $this->IsGray = $param["IsGray"];
        }

        if (array_key_exists("IsHttp2",$param) and $param["IsHttp2"] !== null) {
            $this->IsHttp2 = $param["IsHttp2"];
        }

        if (array_key_exists("IsWebsocket",$param) and $param["IsWebsocket"] !== null) {
            $this->IsWebsocket = $param["IsWebsocket"];
        }

        if (array_key_exists("LoadBalance",$param) and $param["LoadBalance"] !== null) {
            $this->LoadBalance = $param["LoadBalance"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("SSLId",$param) and $param["SSLId"] !== null) {
            $this->SSLId = $param["SSLId"];
        }

        if (array_key_exists("UpstreamDomain",$param) and $param["UpstreamDomain"] !== null) {
            $this->UpstreamDomain = $param["UpstreamDomain"];
        }

        if (array_key_exists("UpstreamType",$param) and $param["UpstreamType"] !== null) {
            $this->UpstreamType = $param["UpstreamType"];
        }

        if (array_key_exists("SrcList",$param) and $param["SrcList"] !== null) {
            $this->SrcList = $param["SrcList"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = [];
            foreach ($param["Ports"] as $key => $value){
                $obj = new PortInfo();
                $obj->deserialize($value);
                array_push($this->Ports, $obj);
            }
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("UpstreamScheme",$param) and $param["UpstreamScheme"] !== null) {
            $this->UpstreamScheme = $param["UpstreamScheme"];
        }

        if (array_key_exists("Cls",$param) and $param["Cls"] !== null) {
            $this->Cls = $param["Cls"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("IsKeepAlive",$param) and $param["IsKeepAlive"] !== null) {
            $this->IsKeepAlive = $param["IsKeepAlive"];
        }

        if (array_key_exists("ActiveCheck",$param) and $param["ActiveCheck"] !== null) {
            $this->ActiveCheck = $param["ActiveCheck"];
        }

        if (array_key_exists("TLSVersion",$param) and $param["TLSVersion"] !== null) {
            $this->TLSVersion = $param["TLSVersion"];
        }

        if (array_key_exists("Ciphers",$param) and $param["Ciphers"] !== null) {
            $this->Ciphers = $param["Ciphers"];
        }

        if (array_key_exists("CipherTemplate",$param) and $param["CipherTemplate"] !== null) {
            $this->CipherTemplate = $param["CipherTemplate"];
        }

        if (array_key_exists("ProxyReadTimeout",$param) and $param["ProxyReadTimeout"] !== null) {
            $this->ProxyReadTimeout = $param["ProxyReadTimeout"];
        }

        if (array_key_exists("ProxySendTimeout",$param) and $param["ProxySendTimeout"] !== null) {
            $this->ProxySendTimeout = $param["ProxySendTimeout"];
        }

        if (array_key_exists("SniType",$param) and $param["SniType"] !== null) {
            $this->SniType = $param["SniType"];
        }

        if (array_key_exists("SniHost",$param) and $param["SniHost"] !== null) {
            $this->SniHost = $param["SniHost"];
        }

        if (array_key_exists("Weights",$param) and $param["Weights"] !== null) {
            $this->Weights = $param["Weights"];
        }

        if (array_key_exists("IpHeaders",$param) and $param["IpHeaders"] !== null) {
            $this->IpHeaders = $param["IpHeaders"];
        }

        if (array_key_exists("XFFReset",$param) and $param["XFFReset"] !== null) {
            $this->XFFReset = $param["XFFReset"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("UpstreamHost",$param) and $param["UpstreamHost"] !== null) {
            $this->UpstreamHost = $param["UpstreamHost"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("ProxyBuffer",$param) and $param["ProxyBuffer"] !== null) {
            $this->ProxyBuffer = $param["ProxyBuffer"];
        }

        if (array_key_exists("GmType",$param) and $param["GmType"] !== null) {
            $this->GmType = $param["GmType"];
        }

        if (array_key_exists("GmCertType",$param) and $param["GmCertType"] !== null) {
            $this->GmCertType = $param["GmCertType"];
        }

        if (array_key_exists("GmCert",$param) and $param["GmCert"] !== null) {
            $this->GmCert = $param["GmCert"];
        }

        if (array_key_exists("GmPrivateKey",$param) and $param["GmPrivateKey"] !== null) {
            $this->GmPrivateKey = $param["GmPrivateKey"];
        }

        if (array_key_exists("GmEncCert",$param) and $param["GmEncCert"] !== null) {
            $this->GmEncCert = $param["GmEncCert"];
        }

        if (array_key_exists("GmEncPrivateKey",$param) and $param["GmEncPrivateKey"] !== null) {
            $this->GmEncPrivateKey = $param["GmEncPrivateKey"];
        }

        if (array_key_exists("GmSSLId",$param) and $param["GmSSLId"] !== null) {
            $this->GmSSLId = $param["GmSSLId"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }
    }
}
