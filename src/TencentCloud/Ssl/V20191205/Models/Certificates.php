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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取证书列表（DescribeCertificates）返回参数键为 Certificates 的内容。
 *
 * @method string getOwnerUin() 获取用户 UIN。
 * @method void setOwnerUin(string $OwnerUin) 设置用户 UIN。
 * @method string getProjectId() 获取项目 ID。
 * @method void setProjectId(string $ProjectId) 设置项目 ID。
 * @method string getFrom() 获取证书来源：
trustasia：亚洲诚信，
upload：用户上传。
wosign：沃通
sheca：上海CA
 * @method void setFrom(string $From) 设置证书来源：
trustasia：亚洲诚信，
upload：用户上传。
wosign：沃通
sheca：上海CA
 * @method string getPackageType() 获取证书套餐类型：
null：用户上传证书（没有套餐类型），
2：TrustAsia TLS RSA CA， 
3：SecureSite 增强型企业版（EV Pro）， 
4：SecureSite 增强型（EV）， 
5：SecureSite 企业型专业版（OV Pro），
6：SecureSite 企业型（OV）， 
7：SecureSite 企业型（OV）通配符， 
8：Geotrust 增强型（EV）， 
9：Geotrust 企业型（OV）， 
10：Geotrust 企业型（OV）通配符， 
11：TrustAsia 域名型多域名 SSL 证书， 
12：TrustAsia 域名型（DV）通配符， 
13：TrustAsia 企业型通配符（OV）SSL 证书（D3）， 
14：TrustAsia 企业型（OV）SSL 证书（D3）， 
15：TrustAsia 企业型多域名 （OV）SSL 证书（D3）， 
16：TrustAsia 增强型 （EV）SSL 证书（D3）， 
17：TrustAsia 增强型多域名（EV）SSL 证书（D3）， 
18：GlobalSign 企业型（OV）SSL 证书， 
19：GlobalSign 企业型通配符 （OV）SSL 证书， 
20：GlobalSign 增强型 （EV）SSL 证书， 
21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3）， 
22：GlobalSign 企业型多域名（OV）SSL 证书， 
23：GlobalSign 企业型通配符多域名（OV）SSL 证书，
24：GlobalSign 增强型多域名（EV）SSL 证书，
25：Wotrus 域名型证书，
26：Wotrus 域名型多域名证书，
27：Wotrus 域名型通配符证书，
28：Wotrus 企业型证书，
29：Wotrus 企业型多域名证书，
30：Wotrus 企业型通配符证书，
31：Wotrus 增强型证书，
32：Wotrus 增强型多域名证书，
33：WoTrus-国密域名型证书，
34：WoTrus-国密域名型证书（多域名），
35：WoTrus-国密域名型证书（通配符），
37：WoTrus-国密企业型证书，
38：WoTrus-国密企业型证书（多域名），
39：WoTrus-国密企业型证书（通配符），
40：WoTrus-国密增强型证书，
41：WoTrus-国密增强型证书（多域名），
42：TrustAsia-域名型证书（通配符多域名），
43：DNSPod-企业型(OV)SSL证书
44：DNSPod-企业型(OV)通配符SSL证书
45：DNSPod-企业型(OV)多域名SSL证书
46：DNSPod-增强型(EV)SSL证书
47：DNSPod-增强型(EV)多域名SSL证书
48：DNSPod-域名型(DV)SSL证书
49：DNSPod-域名型(DV)通配符SSL证书
50：DNSPod-域名型(DV)多域名SSL证书
51：DNSPod（国密）-企业型(OV)SSL证书
52：DNSPod（国密）-企业型(OV)通配符SSL证书
53：DNSPod（国密）-企业型(OV)多域名SSL证书
54：DNSPod（国密）-域名型(DV)SSL证书
55：DNSPod（国密）-域名型(DV)通配符SSL证书
56：DNSPod（国密）-域名型(DV)多域名SSL证书
57：SecureSite 企业型专业版多域名(OV Pro)
58：SecureSite 企业型多域名(OV)
59：SecureSite 增强型专业版多域名(EV Pro)
60：SecureSite 增强型多域名(EV)
61：Geotrust 增强型多域名(EV)
75：SecureSite 企业型(OV)
76：SecureSite 企业型(OV)通配符
77：SecureSite 增强型(EV)
78：Geotrust 企业型(OV)
79：Geotrust 企业型(OV)通配符
80：Geotrust 增强型(EV)
81：GlobalSign 企业型（OV）SSL证书
82：GlobalSign 企业型通配符 （OV）SSL证书
83：TrustAsia C1 DV Free
85：GlobalSign 增强型 （EV）SSL证书
88：GlobalSign 企业型通配符多域名 （OV）SSL证书
89：GlobalSign 企业型多域名 （OV）SSL证书
90：GlobalSign 增强型多域名（EV） SSL证书
91：Geotrust 增强型多域名(EV)
92：SecureSite 企业型专业版多域名(OV Pro)
93：SecureSite 企业型多域名(OV)
94：SecureSite 增强型专业版多域名(EV Pro)
95：SecureSite 增强型多域名(EV)
96：SecureSite 增强型专业版(EV Pro)
97：SecureSite 企业型专业版(OV Pro)
98：CFCA 企业型(OV)SSL证书
99：CFCA 企业型多域名(OV)SSL证书
100：CFCA 企业型通配符(OV)SSL证书
101：CFCA 增强型(EV)SSL证书
 * @method void setPackageType(string $PackageType) 设置证书套餐类型：
null：用户上传证书（没有套餐类型），
2：TrustAsia TLS RSA CA， 
3：SecureSite 增强型企业版（EV Pro）， 
4：SecureSite 增强型（EV）， 
5：SecureSite 企业型专业版（OV Pro），
6：SecureSite 企业型（OV）， 
7：SecureSite 企业型（OV）通配符， 
8：Geotrust 增强型（EV）， 
9：Geotrust 企业型（OV）， 
10：Geotrust 企业型（OV）通配符， 
11：TrustAsia 域名型多域名 SSL 证书， 
12：TrustAsia 域名型（DV）通配符， 
13：TrustAsia 企业型通配符（OV）SSL 证书（D3）， 
14：TrustAsia 企业型（OV）SSL 证书（D3）， 
15：TrustAsia 企业型多域名 （OV）SSL 证书（D3）， 
16：TrustAsia 增强型 （EV）SSL 证书（D3）， 
17：TrustAsia 增强型多域名（EV）SSL 证书（D3）， 
18：GlobalSign 企业型（OV）SSL 证书， 
19：GlobalSign 企业型通配符 （OV）SSL 证书， 
20：GlobalSign 增强型 （EV）SSL 证书， 
21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3）， 
22：GlobalSign 企业型多域名（OV）SSL 证书， 
23：GlobalSign 企业型通配符多域名（OV）SSL 证书，
24：GlobalSign 增强型多域名（EV）SSL 证书，
25：Wotrus 域名型证书，
26：Wotrus 域名型多域名证书，
27：Wotrus 域名型通配符证书，
28：Wotrus 企业型证书，
29：Wotrus 企业型多域名证书，
30：Wotrus 企业型通配符证书，
31：Wotrus 增强型证书，
32：Wotrus 增强型多域名证书，
33：WoTrus-国密域名型证书，
34：WoTrus-国密域名型证书（多域名），
35：WoTrus-国密域名型证书（通配符），
37：WoTrus-国密企业型证书，
38：WoTrus-国密企业型证书（多域名），
39：WoTrus-国密企业型证书（通配符），
40：WoTrus-国密增强型证书，
41：WoTrus-国密增强型证书（多域名），
42：TrustAsia-域名型证书（通配符多域名），
43：DNSPod-企业型(OV)SSL证书
44：DNSPod-企业型(OV)通配符SSL证书
45：DNSPod-企业型(OV)多域名SSL证书
46：DNSPod-增强型(EV)SSL证书
47：DNSPod-增强型(EV)多域名SSL证书
48：DNSPod-域名型(DV)SSL证书
49：DNSPod-域名型(DV)通配符SSL证书
50：DNSPod-域名型(DV)多域名SSL证书
51：DNSPod（国密）-企业型(OV)SSL证书
52：DNSPod（国密）-企业型(OV)通配符SSL证书
53：DNSPod（国密）-企业型(OV)多域名SSL证书
54：DNSPod（国密）-域名型(DV)SSL证书
55：DNSPod（国密）-域名型(DV)通配符SSL证书
56：DNSPod（国密）-域名型(DV)多域名SSL证书
57：SecureSite 企业型专业版多域名(OV Pro)
58：SecureSite 企业型多域名(OV)
59：SecureSite 增强型专业版多域名(EV Pro)
60：SecureSite 增强型多域名(EV)
61：Geotrust 增强型多域名(EV)
75：SecureSite 企业型(OV)
76：SecureSite 企业型(OV)通配符
77：SecureSite 增强型(EV)
78：Geotrust 企业型(OV)
79：Geotrust 企业型(OV)通配符
80：Geotrust 增强型(EV)
81：GlobalSign 企业型（OV）SSL证书
82：GlobalSign 企业型通配符 （OV）SSL证书
83：TrustAsia C1 DV Free
85：GlobalSign 增强型 （EV）SSL证书
88：GlobalSign 企业型通配符多域名 （OV）SSL证书
89：GlobalSign 企业型多域名 （OV）SSL证书
90：GlobalSign 增强型多域名（EV） SSL证书
91：Geotrust 增强型多域名(EV)
92：SecureSite 企业型专业版多域名(OV Pro)
93：SecureSite 企业型多域名(OV)
94：SecureSite 增强型专业版多域名(EV Pro)
95：SecureSite 增强型多域名(EV)
96：SecureSite 增强型专业版(EV Pro)
97：SecureSite 企业型专业版(OV Pro)
98：CFCA 企业型(OV)SSL证书
99：CFCA 企业型多域名(OV)SSL证书
100：CFCA 企业型通配符(OV)SSL证书
101：CFCA 增强型(EV)SSL证书
 * @method string getCertificateType() 获取证书类型：CA = 客户端证书，SVR = 服务器证书。
 * @method void setCertificateType(string $CertificateType) 设置证书类型：CA = 客户端证书，SVR = 服务器证书。
 * @method string getProductZhName() 获取证书产品名称
 * @method void setProductZhName(string $ProductZhName) 设置证书产品名称
 * @method string getDomain() 获取主域名。
 * @method void setDomain(string $Domain) 设置主域名。
 * @method string getAlias() 获取备注名称。
 * @method void setAlias(string $Alias) 设置备注名称。
 * @method integer getStatus() 获取证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 自动添加DNS记录，5 = 企业证书，待提交资料，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 证书已退款。 15 = 证书迁移中
 * @method void setStatus(integer $Status) 设置证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 自动添加DNS记录，5 = 企业证书，待提交资料，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 证书已退款。 15 = 证书迁移中
 * @method CertificateExtra getCertificateExtra() 获取证书扩展信息。
 * @method void setCertificateExtra(CertificateExtra $CertificateExtra) 设置证书扩展信息。
 * @method string getVulnerabilityStatus() 获取漏洞扫描状态：INACTIVE = 未开启，ACTIVE = 已开启
 * @method void setVulnerabilityStatus(string $VulnerabilityStatus) 设置漏洞扫描状态：INACTIVE = 未开启，ACTIVE = 已开启
 * @method string getStatusMsg() 获取状态信息。
 * @method void setStatusMsg(string $StatusMsg) 设置状态信息。
 * @method string getVerifyType() 获取验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，DNS_PROXY = DNS代理验证。FILE_PROXY = 文件代理验证
 * @method void setVerifyType(string $VerifyType) 设置验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，DNS_PROXY = DNS代理验证。FILE_PROXY = 文件代理验证
 * @method string getCertBeginTime() 获取证书生效时间。
 * @method void setCertBeginTime(string $CertBeginTime) 设置证书生效时间。
 * @method string getCertEndTime() 获取证书过期时间。
 * @method void setCertEndTime(string $CertEndTime) 设置证书过期时间。
 * @method string getValidityPeriod() 获取证书有效期，单位（月）。
 * @method void setValidityPeriod(string $ValidityPeriod) 设置证书有效期，单位（月）。
 * @method string getInsertTime() 获取创建时间。
 * @method void setInsertTime(string $InsertTime) 设置创建时间。
 * @method string getCertificateId() 获取证书 ID。
 * @method void setCertificateId(string $CertificateId) 设置证书 ID。
 * @method array getSubjectAltName() 获取证书包含的多个域名（包含主域名）。
 * @method void setSubjectAltName(array $SubjectAltName) 设置证书包含的多个域名（包含主域名）。
 * @method string getPackageTypeName() 获取证书类型名称。
 * @method void setPackageTypeName(string $PackageTypeName) 设置证书类型名称。
 * @method string getStatusName() 获取状态名称。
 * @method void setStatusName(string $StatusName) 设置状态名称。
 * @method boolean getIsVip() 获取是否为 VIP 客户。
 * @method void setIsVip(boolean $IsVip) 设置是否为 VIP 客户。
 * @method boolean getIsDv() 获取是否为 DV 版证书。
 * @method void setIsDv(boolean $IsDv) 设置是否为 DV 版证书。
 * @method boolean getIsWildcard() 获取是否为泛域名证书。
 * @method void setIsWildcard(boolean $IsWildcard) 设置是否为泛域名证书。
 * @method boolean getIsVulnerability() 获取是否启用了漏洞扫描功能。
 * @method void setIsVulnerability(boolean $IsVulnerability) 设置是否启用了漏洞扫描功能。
 * @method boolean getRenewAble() 获取是否可续费。
 * @method void setRenewAble(boolean $RenewAble) 设置是否可续费。
 * @method ProjectInfo getProjectInfo() 获取项目信息。
 * @method void setProjectInfo(ProjectInfo $ProjectInfo) 设置项目信息。
 * @method array getBoundResource() 获取关联的云资源，暂不可用
 * @method void setBoundResource(array $BoundResource) 设置关联的云资源，暂不可用
 * @method boolean getDeployable() 获取是否可部署。
 * @method void setDeployable(boolean $Deployable) 设置是否可部署。
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method boolean getIsIgnore() 获取是否已忽略到期通知
 * @method void setIsIgnore(boolean $IsIgnore) 设置是否已忽略到期通知
 * @method boolean getIsSM() 获取是否国密证书
 * @method void setIsSM(boolean $IsSM) 设置是否国密证书
 * @method string getEncryptAlgorithm() 获取证书算法
 * @method void setEncryptAlgorithm(string $EncryptAlgorithm) 设置证书算法
 * @method array getCAEncryptAlgorithms() 获取上传CA证书的加密算法
 * @method void setCAEncryptAlgorithms(array $CAEncryptAlgorithms) 设置上传CA证书的加密算法
 * @method array getCAEndTimes() 获取上传CA证书的过期时间
 * @method void setCAEndTimes(array $CAEndTimes) 设置上传CA证书的过期时间
 * @method array getCACommonNames() 获取上传CA证书的通用名称
 * @method void setCACommonNames(array $CACommonNames) 设置上传CA证书的通用名称
 * @method PreAuditInfo getPreAuditInfo() 获取证书预审核信息
 * @method void setPreAuditInfo(PreAuditInfo $PreAuditInfo) 设置证书预审核信息
 * @method integer getAutoRenewFlag() 获取是否自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置是否自动续费
 * @method integer getHostingStatus() 获取托管状态，0，托管中，5，资源替换中， 10， 托管完成， -1未托管 
 * @method void setHostingStatus(integer $HostingStatus) 设置托管状态，0，托管中，5，资源替换中， 10， 托管完成， -1未托管 
 * @method string getHostingCompleteTime() 获取托管完成时间
 * @method void setHostingCompleteTime(string $HostingCompleteTime) 设置托管完成时间
 * @method string getHostingRenewCertId() 获取托管新证书ID
 * @method void setHostingRenewCertId(string $HostingRenewCertId) 设置托管新证书ID
 * @method string getHasRenewOrder() 获取存在的续费证书ID
 * @method void setHasRenewOrder(string $HasRenewOrder) 设置存在的续费证书ID
 * @method boolean getReplaceOriCertIsDelete() 获取重颁发证书原证书是否删除
 * @method void setReplaceOriCertIsDelete(boolean $ReplaceOriCertIsDelete) 设置重颁发证书原证书是否删除
 * @method boolean getIsExpiring() 获取是否即将过期， 证书即将到期的30天内为即将过期
 * @method void setIsExpiring(boolean $IsExpiring) 设置是否即将过期， 证书即将到期的30天内为即将过期
 * @method string getDVAuthDeadline() 获取DV证书添加验证截止时间
 * @method void setDVAuthDeadline(string $DVAuthDeadline) 设置DV证书添加验证截止时间
 * @method string getValidationPassedTime() 获取域名验证通过时间
 * @method void setValidationPassedTime(string $ValidationPassedTime) 设置域名验证通过时间
 * @method array getCertSANs() 获取证书关联的多域名
 * @method void setCertSANs(array $CertSANs) 设置证书关联的多域名
 * @method string getAwaitingValidationMsg() 获取域名验证驳回信息
 * @method void setAwaitingValidationMsg(string $AwaitingValidationMsg) 设置域名验证驳回信息
 * @method boolean getAllowDownload() 获取是否允许下载
 * @method void setAllowDownload(boolean $AllowDownload) 设置是否允许下载
 * @method boolean getIsDNSPODResolve() 获取证书域名是否全部在DNSPOD托管解析
 * @method void setIsDNSPODResolve(boolean $IsDNSPODResolve) 设置证书域名是否全部在DNSPOD托管解析
 * @method boolean getIsPackage() 获取是否是权益点购买的证书
 * @method void setIsPackage(boolean $IsPackage) 设置是否是权益点购买的证书
 * @method boolean getKeyPasswordCustomFlag() 获取是否存在私钥密码
 * @method void setKeyPasswordCustomFlag(boolean $KeyPasswordCustomFlag) 设置是否存在私钥密码
 * @method SupportDownloadType getSupportDownloadType() 获取支持下载的WEB服务器类型： nginx、apache、iis、tomcat、jks、root、other
 * @method void setSupportDownloadType(SupportDownloadType $SupportDownloadType) 设置支持下载的WEB服务器类型： nginx、apache、iis、tomcat、jks、root、other
 * @method string getCertRevokedTime() 获取证书吊销完成时间
 * @method void setCertRevokedTime(string $CertRevokedTime) 设置证书吊销完成时间
 * @method array getHostingResourceTypes() 获取托管资源类型列表
 * @method void setHostingResourceTypes(array $HostingResourceTypes) 设置托管资源类型列表
 * @method HostingConfig getHostingConfig() 获取托管配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostingConfig(HostingConfig $HostingConfig) 设置托管配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsHostingUploadRenewCert() 获取是否是上传托管续费证书
 * @method void setIsHostingUploadRenewCert(boolean $IsHostingUploadRenewCert) 设置是否是上传托管续费证书
 */
class Certificates extends AbstractModel
{
    /**
     * @var string 用户 UIN。
     */
    public $OwnerUin;

    /**
     * @var string 项目 ID。
     */
    public $ProjectId;

    /**
     * @var string 证书来源：
trustasia：亚洲诚信，
upload：用户上传。
wosign：沃通
sheca：上海CA
     */
    public $From;

    /**
     * @var string 证书套餐类型：
null：用户上传证书（没有套餐类型），
2：TrustAsia TLS RSA CA， 
3：SecureSite 增强型企业版（EV Pro）， 
4：SecureSite 增强型（EV）， 
5：SecureSite 企业型专业版（OV Pro），
6：SecureSite 企业型（OV）， 
7：SecureSite 企业型（OV）通配符， 
8：Geotrust 增强型（EV）， 
9：Geotrust 企业型（OV）， 
10：Geotrust 企业型（OV）通配符， 
11：TrustAsia 域名型多域名 SSL 证书， 
12：TrustAsia 域名型（DV）通配符， 
13：TrustAsia 企业型通配符（OV）SSL 证书（D3）， 
14：TrustAsia 企业型（OV）SSL 证书（D3）， 
15：TrustAsia 企业型多域名 （OV）SSL 证书（D3）， 
16：TrustAsia 增强型 （EV）SSL 证书（D3）， 
17：TrustAsia 增强型多域名（EV）SSL 证书（D3）， 
18：GlobalSign 企业型（OV）SSL 证书， 
19：GlobalSign 企业型通配符 （OV）SSL 证书， 
20：GlobalSign 增强型 （EV）SSL 证书， 
21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3）， 
22：GlobalSign 企业型多域名（OV）SSL 证书， 
23：GlobalSign 企业型通配符多域名（OV）SSL 证书，
24：GlobalSign 增强型多域名（EV）SSL 证书，
25：Wotrus 域名型证书，
26：Wotrus 域名型多域名证书，
27：Wotrus 域名型通配符证书，
28：Wotrus 企业型证书，
29：Wotrus 企业型多域名证书，
30：Wotrus 企业型通配符证书，
31：Wotrus 增强型证书，
32：Wotrus 增强型多域名证书，
33：WoTrus-国密域名型证书，
34：WoTrus-国密域名型证书（多域名），
35：WoTrus-国密域名型证书（通配符），
37：WoTrus-国密企业型证书，
38：WoTrus-国密企业型证书（多域名），
39：WoTrus-国密企业型证书（通配符），
40：WoTrus-国密增强型证书，
41：WoTrus-国密增强型证书（多域名），
42：TrustAsia-域名型证书（通配符多域名），
43：DNSPod-企业型(OV)SSL证书
44：DNSPod-企业型(OV)通配符SSL证书
45：DNSPod-企业型(OV)多域名SSL证书
46：DNSPod-增强型(EV)SSL证书
47：DNSPod-增强型(EV)多域名SSL证书
48：DNSPod-域名型(DV)SSL证书
49：DNSPod-域名型(DV)通配符SSL证书
50：DNSPod-域名型(DV)多域名SSL证书
51：DNSPod（国密）-企业型(OV)SSL证书
52：DNSPod（国密）-企业型(OV)通配符SSL证书
53：DNSPod（国密）-企业型(OV)多域名SSL证书
54：DNSPod（国密）-域名型(DV)SSL证书
55：DNSPod（国密）-域名型(DV)通配符SSL证书
56：DNSPod（国密）-域名型(DV)多域名SSL证书
57：SecureSite 企业型专业版多域名(OV Pro)
58：SecureSite 企业型多域名(OV)
59：SecureSite 增强型专业版多域名(EV Pro)
60：SecureSite 增强型多域名(EV)
61：Geotrust 增强型多域名(EV)
75：SecureSite 企业型(OV)
76：SecureSite 企业型(OV)通配符
77：SecureSite 增强型(EV)
78：Geotrust 企业型(OV)
79：Geotrust 企业型(OV)通配符
80：Geotrust 增强型(EV)
81：GlobalSign 企业型（OV）SSL证书
82：GlobalSign 企业型通配符 （OV）SSL证书
83：TrustAsia C1 DV Free
85：GlobalSign 增强型 （EV）SSL证书
88：GlobalSign 企业型通配符多域名 （OV）SSL证书
89：GlobalSign 企业型多域名 （OV）SSL证书
90：GlobalSign 增强型多域名（EV） SSL证书
91：Geotrust 增强型多域名(EV)
92：SecureSite 企业型专业版多域名(OV Pro)
93：SecureSite 企业型多域名(OV)
94：SecureSite 增强型专业版多域名(EV Pro)
95：SecureSite 增强型多域名(EV)
96：SecureSite 增强型专业版(EV Pro)
97：SecureSite 企业型专业版(OV Pro)
98：CFCA 企业型(OV)SSL证书
99：CFCA 企业型多域名(OV)SSL证书
100：CFCA 企业型通配符(OV)SSL证书
101：CFCA 增强型(EV)SSL证书
     */
    public $PackageType;

    /**
     * @var string 证书类型：CA = 客户端证书，SVR = 服务器证书。
     */
    public $CertificateType;

    /**
     * @var string 证书产品名称
     */
    public $ProductZhName;

    /**
     * @var string 主域名。
     */
    public $Domain;

    /**
     * @var string 备注名称。
     */
    public $Alias;

    /**
     * @var integer 证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 自动添加DNS记录，5 = 企业证书，待提交资料，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 证书已退款。 15 = 证书迁移中
     */
    public $Status;

    /**
     * @var CertificateExtra 证书扩展信息。
     */
    public $CertificateExtra;

    /**
     * @var string 漏洞扫描状态：INACTIVE = 未开启，ACTIVE = 已开启
     */
    public $VulnerabilityStatus;

    /**
     * @var string 状态信息。
     */
    public $StatusMsg;

    /**
     * @var string 验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，DNS_PROXY = DNS代理验证。FILE_PROXY = 文件代理验证
     */
    public $VerifyType;

    /**
     * @var string 证书生效时间。
     */
    public $CertBeginTime;

    /**
     * @var string 证书过期时间。
     */
    public $CertEndTime;

    /**
     * @var string 证书有效期，单位（月）。
     */
    public $ValidityPeriod;

    /**
     * @var string 创建时间。
     */
    public $InsertTime;

    /**
     * @var string 证书 ID。
     */
    public $CertificateId;

    /**
     * @var array 证书包含的多个域名（包含主域名）。
     */
    public $SubjectAltName;

    /**
     * @var string 证书类型名称。
     */
    public $PackageTypeName;

    /**
     * @var string 状态名称。
     */
    public $StatusName;

    /**
     * @var boolean 是否为 VIP 客户。
     */
    public $IsVip;

    /**
     * @var boolean 是否为 DV 版证书。
     */
    public $IsDv;

    /**
     * @var boolean 是否为泛域名证书。
     */
    public $IsWildcard;

    /**
     * @var boolean 是否启用了漏洞扫描功能。
     */
    public $IsVulnerability;

    /**
     * @var boolean 是否可续费。
     */
    public $RenewAble;

    /**
     * @var ProjectInfo 项目信息。
     */
    public $ProjectInfo;

    /**
     * @var array 关联的云资源，暂不可用
     */
    public $BoundResource;

    /**
     * @var boolean 是否可部署。
     */
    public $Deployable;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var boolean 是否已忽略到期通知
     */
    public $IsIgnore;

    /**
     * @var boolean 是否国密证书
     */
    public $IsSM;

    /**
     * @var string 证书算法
     */
    public $EncryptAlgorithm;

    /**
     * @var array 上传CA证书的加密算法
     */
    public $CAEncryptAlgorithms;

    /**
     * @var array 上传CA证书的过期时间
     */
    public $CAEndTimes;

    /**
     * @var array 上传CA证书的通用名称
     */
    public $CACommonNames;

    /**
     * @var PreAuditInfo 证书预审核信息
     */
    public $PreAuditInfo;

    /**
     * @var integer 是否自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var integer 托管状态，0，托管中，5，资源替换中， 10， 托管完成， -1未托管 
     */
    public $HostingStatus;

    /**
     * @var string 托管完成时间
     */
    public $HostingCompleteTime;

    /**
     * @var string 托管新证书ID
     */
    public $HostingRenewCertId;

    /**
     * @var string 存在的续费证书ID
     */
    public $HasRenewOrder;

    /**
     * @var boolean 重颁发证书原证书是否删除
     */
    public $ReplaceOriCertIsDelete;

    /**
     * @var boolean 是否即将过期， 证书即将到期的30天内为即将过期
     */
    public $IsExpiring;

    /**
     * @var string DV证书添加验证截止时间
     */
    public $DVAuthDeadline;

    /**
     * @var string 域名验证通过时间
     */
    public $ValidationPassedTime;

    /**
     * @var array 证书关联的多域名
     */
    public $CertSANs;

    /**
     * @var string 域名验证驳回信息
     */
    public $AwaitingValidationMsg;

    /**
     * @var boolean 是否允许下载
     */
    public $AllowDownload;

    /**
     * @var boolean 证书域名是否全部在DNSPOD托管解析
     */
    public $IsDNSPODResolve;

    /**
     * @var boolean 是否是权益点购买的证书
     */
    public $IsPackage;

    /**
     * @var boolean 是否存在私钥密码
     */
    public $KeyPasswordCustomFlag;

    /**
     * @var SupportDownloadType 支持下载的WEB服务器类型： nginx、apache、iis、tomcat、jks、root、other
     */
    public $SupportDownloadType;

    /**
     * @var string 证书吊销完成时间
     */
    public $CertRevokedTime;

    /**
     * @var array 托管资源类型列表
     */
    public $HostingResourceTypes;

    /**
     * @var HostingConfig 托管配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostingConfig;

    /**
     * @var boolean 是否是上传托管续费证书
     */
    public $IsHostingUploadRenewCert;

    /**
     * @param string $OwnerUin 用户 UIN。
     * @param string $ProjectId 项目 ID。
     * @param string $From 证书来源：
trustasia：亚洲诚信，
upload：用户上传。
wosign：沃通
sheca：上海CA
     * @param string $PackageType 证书套餐类型：
null：用户上传证书（没有套餐类型），
2：TrustAsia TLS RSA CA， 
3：SecureSite 增强型企业版（EV Pro）， 
4：SecureSite 增强型（EV）， 
5：SecureSite 企业型专业版（OV Pro），
6：SecureSite 企业型（OV）， 
7：SecureSite 企业型（OV）通配符， 
8：Geotrust 增强型（EV）， 
9：Geotrust 企业型（OV）， 
10：Geotrust 企业型（OV）通配符， 
11：TrustAsia 域名型多域名 SSL 证书， 
12：TrustAsia 域名型（DV）通配符， 
13：TrustAsia 企业型通配符（OV）SSL 证书（D3）， 
14：TrustAsia 企业型（OV）SSL 证书（D3）， 
15：TrustAsia 企业型多域名 （OV）SSL 证书（D3）， 
16：TrustAsia 增强型 （EV）SSL 证书（D3）， 
17：TrustAsia 增强型多域名（EV）SSL 证书（D3）， 
18：GlobalSign 企业型（OV）SSL 证书， 
19：GlobalSign 企业型通配符 （OV）SSL 证书， 
20：GlobalSign 增强型 （EV）SSL 证书， 
21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3）， 
22：GlobalSign 企业型多域名（OV）SSL 证书， 
23：GlobalSign 企业型通配符多域名（OV）SSL 证书，
24：GlobalSign 增强型多域名（EV）SSL 证书，
25：Wotrus 域名型证书，
26：Wotrus 域名型多域名证书，
27：Wotrus 域名型通配符证书，
28：Wotrus 企业型证书，
29：Wotrus 企业型多域名证书，
30：Wotrus 企业型通配符证书，
31：Wotrus 增强型证书，
32：Wotrus 增强型多域名证书，
33：WoTrus-国密域名型证书，
34：WoTrus-国密域名型证书（多域名），
35：WoTrus-国密域名型证书（通配符），
37：WoTrus-国密企业型证书，
38：WoTrus-国密企业型证书（多域名），
39：WoTrus-国密企业型证书（通配符），
40：WoTrus-国密增强型证书，
41：WoTrus-国密增强型证书（多域名），
42：TrustAsia-域名型证书（通配符多域名），
43：DNSPod-企业型(OV)SSL证书
44：DNSPod-企业型(OV)通配符SSL证书
45：DNSPod-企业型(OV)多域名SSL证书
46：DNSPod-增强型(EV)SSL证书
47：DNSPod-增强型(EV)多域名SSL证书
48：DNSPod-域名型(DV)SSL证书
49：DNSPod-域名型(DV)通配符SSL证书
50：DNSPod-域名型(DV)多域名SSL证书
51：DNSPod（国密）-企业型(OV)SSL证书
52：DNSPod（国密）-企业型(OV)通配符SSL证书
53：DNSPod（国密）-企业型(OV)多域名SSL证书
54：DNSPod（国密）-域名型(DV)SSL证书
55：DNSPod（国密）-域名型(DV)通配符SSL证书
56：DNSPod（国密）-域名型(DV)多域名SSL证书
57：SecureSite 企业型专业版多域名(OV Pro)
58：SecureSite 企业型多域名(OV)
59：SecureSite 增强型专业版多域名(EV Pro)
60：SecureSite 增强型多域名(EV)
61：Geotrust 增强型多域名(EV)
75：SecureSite 企业型(OV)
76：SecureSite 企业型(OV)通配符
77：SecureSite 增强型(EV)
78：Geotrust 企业型(OV)
79：Geotrust 企业型(OV)通配符
80：Geotrust 增强型(EV)
81：GlobalSign 企业型（OV）SSL证书
82：GlobalSign 企业型通配符 （OV）SSL证书
83：TrustAsia C1 DV Free
85：GlobalSign 增强型 （EV）SSL证书
88：GlobalSign 企业型通配符多域名 （OV）SSL证书
89：GlobalSign 企业型多域名 （OV）SSL证书
90：GlobalSign 增强型多域名（EV） SSL证书
91：Geotrust 增强型多域名(EV)
92：SecureSite 企业型专业版多域名(OV Pro)
93：SecureSite 企业型多域名(OV)
94：SecureSite 增强型专业版多域名(EV Pro)
95：SecureSite 增强型多域名(EV)
96：SecureSite 增强型专业版(EV Pro)
97：SecureSite 企业型专业版(OV Pro)
98：CFCA 企业型(OV)SSL证书
99：CFCA 企业型多域名(OV)SSL证书
100：CFCA 企业型通配符(OV)SSL证书
101：CFCA 增强型(EV)SSL证书
     * @param string $CertificateType 证书类型：CA = 客户端证书，SVR = 服务器证书。
     * @param string $ProductZhName 证书产品名称
     * @param string $Domain 主域名。
     * @param string $Alias 备注名称。
     * @param integer $Status 证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 自动添加DNS记录，5 = 企业证书，待提交资料，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 证书已退款。 15 = 证书迁移中
     * @param CertificateExtra $CertificateExtra 证书扩展信息。
     * @param string $VulnerabilityStatus 漏洞扫描状态：INACTIVE = 未开启，ACTIVE = 已开启
     * @param string $StatusMsg 状态信息。
     * @param string $VerifyType 验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，DNS_PROXY = DNS代理验证。FILE_PROXY = 文件代理验证
     * @param string $CertBeginTime 证书生效时间。
     * @param string $CertEndTime 证书过期时间。
     * @param string $ValidityPeriod 证书有效期，单位（月）。
     * @param string $InsertTime 创建时间。
     * @param string $CertificateId 证书 ID。
     * @param array $SubjectAltName 证书包含的多个域名（包含主域名）。
     * @param string $PackageTypeName 证书类型名称。
     * @param string $StatusName 状态名称。
     * @param boolean $IsVip 是否为 VIP 客户。
     * @param boolean $IsDv 是否为 DV 版证书。
     * @param boolean $IsWildcard 是否为泛域名证书。
     * @param boolean $IsVulnerability 是否启用了漏洞扫描功能。
     * @param boolean $RenewAble 是否可续费。
     * @param ProjectInfo $ProjectInfo 项目信息。
     * @param array $BoundResource 关联的云资源，暂不可用
     * @param boolean $Deployable 是否可部署。
     * @param array $Tags 标签列表
     * @param boolean $IsIgnore 是否已忽略到期通知
     * @param boolean $IsSM 是否国密证书
     * @param string $EncryptAlgorithm 证书算法
     * @param array $CAEncryptAlgorithms 上传CA证书的加密算法
     * @param array $CAEndTimes 上传CA证书的过期时间
     * @param array $CACommonNames 上传CA证书的通用名称
     * @param PreAuditInfo $PreAuditInfo 证书预审核信息
     * @param integer $AutoRenewFlag 是否自动续费
     * @param integer $HostingStatus 托管状态，0，托管中，5，资源替换中， 10， 托管完成， -1未托管 
     * @param string $HostingCompleteTime 托管完成时间
     * @param string $HostingRenewCertId 托管新证书ID
     * @param string $HasRenewOrder 存在的续费证书ID
     * @param boolean $ReplaceOriCertIsDelete 重颁发证书原证书是否删除
     * @param boolean $IsExpiring 是否即将过期， 证书即将到期的30天内为即将过期
     * @param string $DVAuthDeadline DV证书添加验证截止时间
     * @param string $ValidationPassedTime 域名验证通过时间
     * @param array $CertSANs 证书关联的多域名
     * @param string $AwaitingValidationMsg 域名验证驳回信息
     * @param boolean $AllowDownload 是否允许下载
     * @param boolean $IsDNSPODResolve 证书域名是否全部在DNSPOD托管解析
     * @param boolean $IsPackage 是否是权益点购买的证书
     * @param boolean $KeyPasswordCustomFlag 是否存在私钥密码
     * @param SupportDownloadType $SupportDownloadType 支持下载的WEB服务器类型： nginx、apache、iis、tomcat、jks、root、other
     * @param string $CertRevokedTime 证书吊销完成时间
     * @param array $HostingResourceTypes 托管资源类型列表
     * @param HostingConfig $HostingConfig 托管配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsHostingUploadRenewCert 是否是上传托管续费证书
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
        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("ProductZhName",$param) and $param["ProductZhName"] !== null) {
            $this->ProductZhName = $param["ProductZhName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CertificateExtra",$param) and $param["CertificateExtra"] !== null) {
            $this->CertificateExtra = new CertificateExtra();
            $this->CertificateExtra->deserialize($param["CertificateExtra"]);
        }

        if (array_key_exists("VulnerabilityStatus",$param) and $param["VulnerabilityStatus"] !== null) {
            $this->VulnerabilityStatus = $param["VulnerabilityStatus"];
        }

        if (array_key_exists("StatusMsg",$param) and $param["StatusMsg"] !== null) {
            $this->StatusMsg = $param["StatusMsg"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }

        if (array_key_exists("CertBeginTime",$param) and $param["CertBeginTime"] !== null) {
            $this->CertBeginTime = $param["CertBeginTime"];
        }

        if (array_key_exists("CertEndTime",$param) and $param["CertEndTime"] !== null) {
            $this->CertEndTime = $param["CertEndTime"];
        }

        if (array_key_exists("ValidityPeriod",$param) and $param["ValidityPeriod"] !== null) {
            $this->ValidityPeriod = $param["ValidityPeriod"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("SubjectAltName",$param) and $param["SubjectAltName"] !== null) {
            $this->SubjectAltName = $param["SubjectAltName"];
        }

        if (array_key_exists("PackageTypeName",$param) and $param["PackageTypeName"] !== null) {
            $this->PackageTypeName = $param["PackageTypeName"];
        }

        if (array_key_exists("StatusName",$param) and $param["StatusName"] !== null) {
            $this->StatusName = $param["StatusName"];
        }

        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("IsDv",$param) and $param["IsDv"] !== null) {
            $this->IsDv = $param["IsDv"];
        }

        if (array_key_exists("IsWildcard",$param) and $param["IsWildcard"] !== null) {
            $this->IsWildcard = $param["IsWildcard"];
        }

        if (array_key_exists("IsVulnerability",$param) and $param["IsVulnerability"] !== null) {
            $this->IsVulnerability = $param["IsVulnerability"];
        }

        if (array_key_exists("RenewAble",$param) and $param["RenewAble"] !== null) {
            $this->RenewAble = $param["RenewAble"];
        }

        if (array_key_exists("ProjectInfo",$param) and $param["ProjectInfo"] !== null) {
            $this->ProjectInfo = new ProjectInfo();
            $this->ProjectInfo->deserialize($param["ProjectInfo"]);
        }

        if (array_key_exists("BoundResource",$param) and $param["BoundResource"] !== null) {
            $this->BoundResource = $param["BoundResource"];
        }

        if (array_key_exists("Deployable",$param) and $param["Deployable"] !== null) {
            $this->Deployable = $param["Deployable"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("IsIgnore",$param) and $param["IsIgnore"] !== null) {
            $this->IsIgnore = $param["IsIgnore"];
        }

        if (array_key_exists("IsSM",$param) and $param["IsSM"] !== null) {
            $this->IsSM = $param["IsSM"];
        }

        if (array_key_exists("EncryptAlgorithm",$param) and $param["EncryptAlgorithm"] !== null) {
            $this->EncryptAlgorithm = $param["EncryptAlgorithm"];
        }

        if (array_key_exists("CAEncryptAlgorithms",$param) and $param["CAEncryptAlgorithms"] !== null) {
            $this->CAEncryptAlgorithms = $param["CAEncryptAlgorithms"];
        }

        if (array_key_exists("CAEndTimes",$param) and $param["CAEndTimes"] !== null) {
            $this->CAEndTimes = $param["CAEndTimes"];
        }

        if (array_key_exists("CACommonNames",$param) and $param["CACommonNames"] !== null) {
            $this->CACommonNames = $param["CACommonNames"];
        }

        if (array_key_exists("PreAuditInfo",$param) and $param["PreAuditInfo"] !== null) {
            $this->PreAuditInfo = new PreAuditInfo();
            $this->PreAuditInfo->deserialize($param["PreAuditInfo"]);
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("HostingStatus",$param) and $param["HostingStatus"] !== null) {
            $this->HostingStatus = $param["HostingStatus"];
        }

        if (array_key_exists("HostingCompleteTime",$param) and $param["HostingCompleteTime"] !== null) {
            $this->HostingCompleteTime = $param["HostingCompleteTime"];
        }

        if (array_key_exists("HostingRenewCertId",$param) and $param["HostingRenewCertId"] !== null) {
            $this->HostingRenewCertId = $param["HostingRenewCertId"];
        }

        if (array_key_exists("HasRenewOrder",$param) and $param["HasRenewOrder"] !== null) {
            $this->HasRenewOrder = $param["HasRenewOrder"];
        }

        if (array_key_exists("ReplaceOriCertIsDelete",$param) and $param["ReplaceOriCertIsDelete"] !== null) {
            $this->ReplaceOriCertIsDelete = $param["ReplaceOriCertIsDelete"];
        }

        if (array_key_exists("IsExpiring",$param) and $param["IsExpiring"] !== null) {
            $this->IsExpiring = $param["IsExpiring"];
        }

        if (array_key_exists("DVAuthDeadline",$param) and $param["DVAuthDeadline"] !== null) {
            $this->DVAuthDeadline = $param["DVAuthDeadline"];
        }

        if (array_key_exists("ValidationPassedTime",$param) and $param["ValidationPassedTime"] !== null) {
            $this->ValidationPassedTime = $param["ValidationPassedTime"];
        }

        if (array_key_exists("CertSANs",$param) and $param["CertSANs"] !== null) {
            $this->CertSANs = $param["CertSANs"];
        }

        if (array_key_exists("AwaitingValidationMsg",$param) and $param["AwaitingValidationMsg"] !== null) {
            $this->AwaitingValidationMsg = $param["AwaitingValidationMsg"];
        }

        if (array_key_exists("AllowDownload",$param) and $param["AllowDownload"] !== null) {
            $this->AllowDownload = $param["AllowDownload"];
        }

        if (array_key_exists("IsDNSPODResolve",$param) and $param["IsDNSPODResolve"] !== null) {
            $this->IsDNSPODResolve = $param["IsDNSPODResolve"];
        }

        if (array_key_exists("IsPackage",$param) and $param["IsPackage"] !== null) {
            $this->IsPackage = $param["IsPackage"];
        }

        if (array_key_exists("KeyPasswordCustomFlag",$param) and $param["KeyPasswordCustomFlag"] !== null) {
            $this->KeyPasswordCustomFlag = $param["KeyPasswordCustomFlag"];
        }

        if (array_key_exists("SupportDownloadType",$param) and $param["SupportDownloadType"] !== null) {
            $this->SupportDownloadType = new SupportDownloadType();
            $this->SupportDownloadType->deserialize($param["SupportDownloadType"]);
        }

        if (array_key_exists("CertRevokedTime",$param) and $param["CertRevokedTime"] !== null) {
            $this->CertRevokedTime = $param["CertRevokedTime"];
        }

        if (array_key_exists("HostingResourceTypes",$param) and $param["HostingResourceTypes"] !== null) {
            $this->HostingResourceTypes = $param["HostingResourceTypes"];
        }

        if (array_key_exists("HostingConfig",$param) and $param["HostingConfig"] !== null) {
            $this->HostingConfig = new HostingConfig();
            $this->HostingConfig->deserialize($param["HostingConfig"]);
        }

        if (array_key_exists("IsHostingUploadRenewCert",$param) and $param["IsHostingUploadRenewCert"] !== null) {
            $this->IsHostingUploadRenewCert = $param["IsHostingUploadRenewCert"];
        }
    }
}
