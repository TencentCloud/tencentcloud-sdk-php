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
 * DescribeCertificateDetail返回参数结构体
 *
 * @method string getOwnerUin() 获取证书所属用户主账号 UIN。
 * @method void setOwnerUin(string $OwnerUin) 设置证书所属用户主账号 UIN。
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
 * @method string getCertificateType() 获取证书类型：CA = 客户端证书，SVR = 服务器证书。
 * @method void setCertificateType(string $CertificateType) 设置证书类型：CA = 客户端证书，SVR = 服务器证书。
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
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductZhName() 获取证书产品名称
 * @method void setProductZhName(string $ProductZhName) 设置证书产品名称
 * @method string getDomain() 获取证书绑定通用名称域名。
 * @method void setDomain(string $Domain) 设置证书绑定通用名称域名。
 * @method string getAlias() 获取备注名称。
 * @method void setAlias(string $Alias) 设置备注名称。
 * @method integer getStatus() 获取证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 自动添加DNS记录，5 = 企业证书，待提交资料，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 证书已退款。 15 = 证书迁移中
 * @method void setStatus(integer $Status) 设置证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 自动添加DNS记录，5 = 企业证书，待提交资料，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 证书已退款。 15 = 证书迁移中
 * @method string getStatusMsg() 获取状态信息。 取值范围：
//通用状态信息
1、PRE-REVIEWING：预审核中
2、LEGAL-REVIEWING：法务审核中
3、CA-REVIEWING：CA审核中
4、PENDING-DCV：域名验证中
5、WAIT-ISSUE：等待签发（域名验证已通过）
//证书审核失败状态信息
1、订单审核失败
2、CA审核失败，域名未通过安全审查
3、域名验证超时，订单自动关闭，请您重新进行证书申请
4、证书资料未通过证书CA机构审核，审核人员会致电您证书预留的联系方式，请您留意来电。后续可通过“修改资料”重新提交资料
待持续完善
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusMsg(string $StatusMsg) 设置状态信息。 取值范围：
//通用状态信息
1、PRE-REVIEWING：预审核中
2、LEGAL-REVIEWING：法务审核中
3、CA-REVIEWING：CA审核中
4、PENDING-DCV：域名验证中
5、WAIT-ISSUE：等待签发（域名验证已通过）
//证书审核失败状态信息
1、订单审核失败
2、CA审核失败，域名未通过安全审查
3、域名验证超时，订单自动关闭，请您重新进行证书申请
4、证书资料未通过证书CA机构审核，审核人员会致电您证书预留的联系方式，请您留意来电。后续可通过“修改资料”重新提交资料
待持续完善
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVerifyType() 获取验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，EMAIL = 邮件验证。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifyType(string $VerifyType) 设置验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，EMAIL = 邮件验证。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulnerabilityStatus() 获取漏洞扫描状态。
 * @method void setVulnerabilityStatus(string $VulnerabilityStatus) 设置漏洞扫描状态。
 * @method string getCertBeginTime() 获取证书生效时间。时区为GMT+8:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertBeginTime(string $CertBeginTime) 设置证书生效时间。时区为GMT+8:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertEndTime() 获取证书失效时间。时区为GMT+8:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertEndTime(string $CertEndTime) 设置证书失效时间。时区为GMT+8:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValidityPeriod() 获取证书有效期：单位（月）。
 * @method void setValidityPeriod(string $ValidityPeriod) 设置证书有效期：单位（月）。
 * @method string getInsertTime() 获取证书申请时间。时区为GMT+8:00
 * @method void setInsertTime(string $InsertTime) 设置证书申请时间。时区为GMT+8:00
 * @method string getOrderId() 获取CA订单 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderId(string $OrderId) 设置CA订单 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CertificateExtra getCertificateExtra() 获取证书扩展信息。
 * @method void setCertificateExtra(CertificateExtra $CertificateExtra) 设置证书扩展信息。
 * @method string getCertificatePrivateKey() 获取私钥证书， 国密证书则为签名证书中的私钥证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificatePrivateKey(string $CertificatePrivateKey) 设置私钥证书， 国密证书则为签名证书中的私钥证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertificatePublicKey() 获取公钥证书， 国密则为签名证书中的公钥证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificatePublicKey(string $CertificatePublicKey) 设置公钥证书， 国密则为签名证书中的公钥证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method DvAuthDetail getDvAuthDetail() 获取证书域名验证信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvAuthDetail(DvAuthDetail $DvAuthDetail) 设置证书域名验证信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulnerabilityReport() 获取漏洞扫描评估报告。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulnerabilityReport(string $VulnerabilityReport) 设置漏洞扫描评估报告。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertificateId() 获取证书 ID。
 * @method void setCertificateId(string $CertificateId) 设置证书 ID。
 * @method string getTypeName() 获取证书类型名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeName(string $TypeName) 设置证书类型名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusName() 获取状态描述。
 * @method void setStatusName(string $StatusName) 设置状态描述。
 * @method array getSubjectAltName() 获取证书包含的多个域名（不包含主域名，主域名使用Domain字段）
 * @method void setSubjectAltName(array $SubjectAltName) 设置证书包含的多个域名（不包含主域名，主域名使用Domain字段）
 * @method boolean getIsVip() 获取是否为付费证书。
 * @method void setIsVip(boolean $IsVip) 设置是否为付费证书。
 * @method boolean getIsWildcard() 获取是否为泛域名证书。
 * @method void setIsWildcard(boolean $IsWildcard) 设置是否为泛域名证书。
 * @method boolean getIsDv() 获取是否为 DV 版证书。
 * @method void setIsDv(boolean $IsDv) 设置是否为 DV 版证书。
 * @method boolean getIsVulnerability() 获取是否启用了漏洞扫描功能。
 * @method void setIsVulnerability(boolean $IsVulnerability) 设置是否启用了漏洞扫描功能。
 * @method SubmittedData getSubmittedData() 获取付费证书提交的资料信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmittedData(SubmittedData $SubmittedData) 设置付费证书提交的资料信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRenewAble() 获取是否可续费。
 * @method void setRenewAble(boolean $RenewAble) 设置是否可续费。
 * @method boolean getDeployable() 获取是否可部署。
 * @method void setDeployable(boolean $Deployable) 设置是否可部署。
 * @method array getTags() 获取关联标签列表。
 * @method void setTags(array $Tags) 设置关联标签列表。
 * @method RootCertificates getRootCert() 获取根证书。
 * @method void setRootCert(RootCertificates $RootCert) 设置根证书。
 * @method string getEncryptCert() 获取国密加密证书公钥， 仅国密证书有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncryptCert(string $EncryptCert) 设置国密加密证书公钥， 仅国密证书有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEncryptPrivateKey() 获取国密加密私钥证书， 仅国密证书有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncryptPrivateKey(string $EncryptPrivateKey) 设置国密加密私钥证书， 仅国密证书有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertFingerprint() 获取签名证书 SHA1指纹
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertFingerprint(string $CertFingerprint) 设置签名证书 SHA1指纹
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEncryptCertFingerprint() 获取加密证书 SHA1指纹 （国密证书特有）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncryptCertFingerprint(string $EncryptCertFingerprint) 设置加密证书 SHA1指纹 （国密证书特有）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEncryptAlgorithm() 获取证书加密算法（国密证书特有）
 * @method void setEncryptAlgorithm(string $EncryptAlgorithm) 设置证书加密算法（国密证书特有）
 * @method array getDvRevokeAuthDetail() 获取DV证书吊销验证值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvRevokeAuthDetail(array $DvRevokeAuthDetail) 设置DV证书吊销验证值
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCertChainInfo() 获取证书链信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertChainInfo(array $CertChainInfo) 设置证书链信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDomainType() 获取证书域名类型， 1（单域名）；2（多域名）；3（泛域名）；4（多泛域名）
 * @method void setDomainType(integer $DomainType) 设置证书域名类型， 1（单域名）；2（多域名）；3（泛域名）；4（多泛域名）
 * @method string getCertType() 获取证书类型，DV（域名型）；OV（企业型）；EV（增强型）
 * @method void setCertType(string $CertType) 设置证书类型，DV（域名型）；OV（企业型）；EV（增强型）
 * @method boolean getUseCrossSignRoot() 获取是否使用交叉根
 * @method void setUseCrossSignRoot(boolean $UseCrossSignRoot) 设置是否使用交叉根
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCertificateDetailResponse extends AbstractModel
{
    /**
     * @var string 证书所属用户主账号 UIN。
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
     * @var string 证书类型：CA = 客户端证书，SVR = 服务器证书。
     */
    public $CertificateType;

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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageType;

    /**
     * @var string 证书产品名称
     */
    public $ProductZhName;

    /**
     * @var string 证书绑定通用名称域名。
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
     * @var string 状态信息。 取值范围：
//通用状态信息
1、PRE-REVIEWING：预审核中
2、LEGAL-REVIEWING：法务审核中
3、CA-REVIEWING：CA审核中
4、PENDING-DCV：域名验证中
5、WAIT-ISSUE：等待签发（域名验证已通过）
//证书审核失败状态信息
1、订单审核失败
2、CA审核失败，域名未通过安全审查
3、域名验证超时，订单自动关闭，请您重新进行证书申请
4、证书资料未通过证书CA机构审核，审核人员会致电您证书预留的联系方式，请您留意来电。后续可通过“修改资料”重新提交资料
待持续完善
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusMsg;

    /**
     * @var string 验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，EMAIL = 邮件验证。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifyType;

    /**
     * @var string 漏洞扫描状态。
     */
    public $VulnerabilityStatus;

    /**
     * @var string 证书生效时间。时区为GMT+8:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertBeginTime;

    /**
     * @var string 证书失效时间。时区为GMT+8:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertEndTime;

    /**
     * @var string 证书有效期：单位（月）。
     */
    public $ValidityPeriod;

    /**
     * @var string 证书申请时间。时区为GMT+8:00
     */
    public $InsertTime;

    /**
     * @var string CA订单 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderId;

    /**
     * @var CertificateExtra 证书扩展信息。
     */
    public $CertificateExtra;

    /**
     * @var string 私钥证书， 国密证书则为签名证书中的私钥证书
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificatePrivateKey;

    /**
     * @var string 公钥证书， 国密则为签名证书中的公钥证书
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificatePublicKey;

    /**
     * @var DvAuthDetail 证书域名验证信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DvAuthDetail;

    /**
     * @var string 漏洞扫描评估报告。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulnerabilityReport;

    /**
     * @var string 证书 ID。
     */
    public $CertificateId;

    /**
     * @var string 证书类型名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeName;

    /**
     * @var string 状态描述。
     */
    public $StatusName;

    /**
     * @var array 证书包含的多个域名（不包含主域名，主域名使用Domain字段）
     */
    public $SubjectAltName;

    /**
     * @var boolean 是否为付费证书。
     */
    public $IsVip;

    /**
     * @var boolean 是否为泛域名证书。
     */
    public $IsWildcard;

    /**
     * @var boolean 是否为 DV 版证书。
     */
    public $IsDv;

    /**
     * @var boolean 是否启用了漏洞扫描功能。
     */
    public $IsVulnerability;

    /**
     * @var SubmittedData 付费证书提交的资料信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubmittedData;

    /**
     * @var boolean 是否可续费。
     */
    public $RenewAble;

    /**
     * @var boolean 是否可部署。
     */
    public $Deployable;

    /**
     * @var array 关联标签列表。
     */
    public $Tags;

    /**
     * @var RootCertificates 根证书。
     */
    public $RootCert;

    /**
     * @var string 国密加密证书公钥， 仅国密证书有值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EncryptCert;

    /**
     * @var string 国密加密私钥证书， 仅国密证书有值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EncryptPrivateKey;

    /**
     * @var string 签名证书 SHA1指纹
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertFingerprint;

    /**
     * @var string 加密证书 SHA1指纹 （国密证书特有）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EncryptCertFingerprint;

    /**
     * @var string 证书加密算法（国密证书特有）
     */
    public $EncryptAlgorithm;

    /**
     * @var array DV证书吊销验证值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DvRevokeAuthDetail;

    /**
     * @var array 证书链信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertChainInfo;

    /**
     * @var integer 证书域名类型， 1（单域名）；2（多域名）；3（泛域名）；4（多泛域名）
     */
    public $DomainType;

    /**
     * @var string 证书类型，DV（域名型）；OV（企业型）；EV（增强型）
     */
    public $CertType;

    /**
     * @var boolean 是否使用交叉根
     */
    public $UseCrossSignRoot;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $OwnerUin 证书所属用户主账号 UIN。
     * @param string $ProjectId 项目 ID。
     * @param string $From 证书来源：
trustasia：亚洲诚信，
upload：用户上传。
wosign：沃通
sheca：上海CA
     * @param string $CertificateType 证书类型：CA = 客户端证书，SVR = 服务器证书。
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
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductZhName 证书产品名称
     * @param string $Domain 证书绑定通用名称域名。
     * @param string $Alias 备注名称。
     * @param integer $Status 证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 自动添加DNS记录，5 = 企业证书，待提交资料，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 证书已退款。 15 = 证书迁移中
     * @param string $StatusMsg 状态信息。 取值范围：
//通用状态信息
1、PRE-REVIEWING：预审核中
2、LEGAL-REVIEWING：法务审核中
3、CA-REVIEWING：CA审核中
4、PENDING-DCV：域名验证中
5、WAIT-ISSUE：等待签发（域名验证已通过）
//证书审核失败状态信息
1、订单审核失败
2、CA审核失败，域名未通过安全审查
3、域名验证超时，订单自动关闭，请您重新进行证书申请
4、证书资料未通过证书CA机构审核，审核人员会致电您证书预留的联系方式，请您留意来电。后续可通过“修改资料”重新提交资料
待持续完善
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VerifyType 验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，EMAIL = 邮件验证。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulnerabilityStatus 漏洞扫描状态。
     * @param string $CertBeginTime 证书生效时间。时区为GMT+8:00
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertEndTime 证书失效时间。时区为GMT+8:00
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValidityPeriod 证书有效期：单位（月）。
     * @param string $InsertTime 证书申请时间。时区为GMT+8:00
     * @param string $OrderId CA订单 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CertificateExtra $CertificateExtra 证书扩展信息。
     * @param string $CertificatePrivateKey 私钥证书， 国密证书则为签名证书中的私钥证书
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertificatePublicKey 公钥证书， 国密则为签名证书中的公钥证书
注意：此字段可能返回 null，表示取不到有效值。
     * @param DvAuthDetail $DvAuthDetail 证书域名验证信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulnerabilityReport 漏洞扫描评估报告。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertificateId 证书 ID。
     * @param string $TypeName 证书类型名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusName 状态描述。
     * @param array $SubjectAltName 证书包含的多个域名（不包含主域名，主域名使用Domain字段）
     * @param boolean $IsVip 是否为付费证书。
     * @param boolean $IsWildcard 是否为泛域名证书。
     * @param boolean $IsDv 是否为 DV 版证书。
     * @param boolean $IsVulnerability 是否启用了漏洞扫描功能。
     * @param SubmittedData $SubmittedData 付费证书提交的资料信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RenewAble 是否可续费。
     * @param boolean $Deployable 是否可部署。
     * @param array $Tags 关联标签列表。
     * @param RootCertificates $RootCert 根证书。
     * @param string $EncryptCert 国密加密证书公钥， 仅国密证书有值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EncryptPrivateKey 国密加密私钥证书， 仅国密证书有值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertFingerprint 签名证书 SHA1指纹
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EncryptCertFingerprint 加密证书 SHA1指纹 （国密证书特有）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EncryptAlgorithm 证书加密算法（国密证书特有）
     * @param array $DvRevokeAuthDetail DV证书吊销验证值
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CertChainInfo 证书链信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DomainType 证书域名类型， 1（单域名）；2（多域名）；3（泛域名）；4（多泛域名）
     * @param string $CertType 证书类型，DV（域名型）；OV（企业型）；EV（增强型）
     * @param boolean $UseCrossSignRoot 是否使用交叉根
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
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

        if (array_key_exists("StatusMsg",$param) and $param["StatusMsg"] !== null) {
            $this->StatusMsg = $param["StatusMsg"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }

        if (array_key_exists("VulnerabilityStatus",$param) and $param["VulnerabilityStatus"] !== null) {
            $this->VulnerabilityStatus = $param["VulnerabilityStatus"];
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

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("CertificateExtra",$param) and $param["CertificateExtra"] !== null) {
            $this->CertificateExtra = new CertificateExtra();
            $this->CertificateExtra->deserialize($param["CertificateExtra"]);
        }

        if (array_key_exists("CertificatePrivateKey",$param) and $param["CertificatePrivateKey"] !== null) {
            $this->CertificatePrivateKey = $param["CertificatePrivateKey"];
        }

        if (array_key_exists("CertificatePublicKey",$param) and $param["CertificatePublicKey"] !== null) {
            $this->CertificatePublicKey = $param["CertificatePublicKey"];
        }

        if (array_key_exists("DvAuthDetail",$param) and $param["DvAuthDetail"] !== null) {
            $this->DvAuthDetail = new DvAuthDetail();
            $this->DvAuthDetail->deserialize($param["DvAuthDetail"]);
        }

        if (array_key_exists("VulnerabilityReport",$param) and $param["VulnerabilityReport"] !== null) {
            $this->VulnerabilityReport = $param["VulnerabilityReport"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("StatusName",$param) and $param["StatusName"] !== null) {
            $this->StatusName = $param["StatusName"];
        }

        if (array_key_exists("SubjectAltName",$param) and $param["SubjectAltName"] !== null) {
            $this->SubjectAltName = $param["SubjectAltName"];
        }

        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("IsWildcard",$param) and $param["IsWildcard"] !== null) {
            $this->IsWildcard = $param["IsWildcard"];
        }

        if (array_key_exists("IsDv",$param) and $param["IsDv"] !== null) {
            $this->IsDv = $param["IsDv"];
        }

        if (array_key_exists("IsVulnerability",$param) and $param["IsVulnerability"] !== null) {
            $this->IsVulnerability = $param["IsVulnerability"];
        }

        if (array_key_exists("SubmittedData",$param) and $param["SubmittedData"] !== null) {
            $this->SubmittedData = new SubmittedData();
            $this->SubmittedData->deserialize($param["SubmittedData"]);
        }

        if (array_key_exists("RenewAble",$param) and $param["RenewAble"] !== null) {
            $this->RenewAble = $param["RenewAble"];
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

        if (array_key_exists("RootCert",$param) and $param["RootCert"] !== null) {
            $this->RootCert = new RootCertificates();
            $this->RootCert->deserialize($param["RootCert"]);
        }

        if (array_key_exists("EncryptCert",$param) and $param["EncryptCert"] !== null) {
            $this->EncryptCert = $param["EncryptCert"];
        }

        if (array_key_exists("EncryptPrivateKey",$param) and $param["EncryptPrivateKey"] !== null) {
            $this->EncryptPrivateKey = $param["EncryptPrivateKey"];
        }

        if (array_key_exists("CertFingerprint",$param) and $param["CertFingerprint"] !== null) {
            $this->CertFingerprint = $param["CertFingerprint"];
        }

        if (array_key_exists("EncryptCertFingerprint",$param) and $param["EncryptCertFingerprint"] !== null) {
            $this->EncryptCertFingerprint = $param["EncryptCertFingerprint"];
        }

        if (array_key_exists("EncryptAlgorithm",$param) and $param["EncryptAlgorithm"] !== null) {
            $this->EncryptAlgorithm = $param["EncryptAlgorithm"];
        }

        if (array_key_exists("DvRevokeAuthDetail",$param) and $param["DvRevokeAuthDetail"] !== null) {
            $this->DvRevokeAuthDetail = [];
            foreach ($param["DvRevokeAuthDetail"] as $key => $value){
                $obj = new DvAuths();
                $obj->deserialize($value);
                array_push($this->DvRevokeAuthDetail, $obj);
            }
        }

        if (array_key_exists("CertChainInfo",$param) and $param["CertChainInfo"] !== null) {
            $this->CertChainInfo = [];
            foreach ($param["CertChainInfo"] as $key => $value){
                $obj = new CertBasicInfo();
                $obj->deserialize($value);
                array_push($this->CertChainInfo, $obj);
            }
        }

        if (array_key_exists("DomainType",$param) and $param["DomainType"] !== null) {
            $this->DomainType = $param["DomainType"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("UseCrossSignRoot",$param) and $param["UseCrossSignRoot"] !== null) {
            $this->UseCrossSignRoot = $param["UseCrossSignRoot"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
