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
 * @method string getOwnerUin() 获取<p>证书所属用户主账号 UIN。</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>证书所属用户主账号 UIN。</p>
 * @method string getProjectId() 获取<p>项目 ID。</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目 ID。</p>
 * @method string getFrom() 获取<p>证书来源：<br>trustasia：亚洲诚信，<br>upload：用户上传。<br>wosign：沃通<br>sheca：上海CA</p>
 * @method void setFrom(string $From) 设置<p>证书来源：<br>trustasia：亚洲诚信，<br>upload：用户上传。<br>wosign：沃通<br>sheca：上海CA</p>
 * @method string getCertificateType() 获取<p>证书类型：CA = 客户端证书，SVR = 服务器证书。</p>
 * @method void setCertificateType(string $CertificateType) 设置<p>证书类型：CA = 客户端证书，SVR = 服务器证书。</p>
 * @method string getPackageType() 获取<p>证书套餐类型：<br>null：用户上传证书（没有套餐类型），<br>2：TrustAsia TLS RSA CA，<br>3：SecureSite 增强型企业版（EV Pro），<br>4：SecureSite 增强型（EV），<br>5：SecureSite 企业型专业版（OV Pro），<br>6：SecureSite 企业型（OV），<br>7：SecureSite 企业型（OV）通配符，<br>8：Geotrust 增强型（EV），<br>9：Geotrust 企业型（OV），<br>10：Geotrust 企业型（OV）通配符，<br>11：TrustAsia 域名型多域名 SSL 证书，<br>12：TrustAsia 域名型（DV）通配符，<br>13：TrustAsia 企业型通配符（OV）SSL 证书（D3），<br>14：TrustAsia 企业型（OV）SSL 证书（D3），<br>15：TrustAsia 企业型多域名 （OV）SSL 证书（D3），<br>16：TrustAsia 增强型 （EV）SSL 证书（D3），<br>17：TrustAsia 增强型多域名（EV）SSL 证书（D3），<br>18：GlobalSign 企业型（OV）SSL 证书，<br>19：GlobalSign 企业型通配符 （OV）SSL 证书，<br>20：GlobalSign 增强型 （EV）SSL 证书，<br>21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3），<br>22：GlobalSign 企业型多域名（OV）SSL 证书，<br>23：GlobalSign 企业型通配符多域名（OV）SSL 证书，<br>24：GlobalSign 增强型多域名（EV）SSL 证书，<br>25：Wotrus 域名型证书，<br>26：Wotrus 域名型多域名证书，<br>27：Wotrus 域名型通配符证书，<br>28：Wotrus 企业型证书，<br>29：Wotrus 企业型多域名证书，<br>30：Wotrus 企业型通配符证书，<br>31：Wotrus 增强型证书，<br>32：Wotrus 增强型多域名证书，<br>33：WoTrus-国密域名型证书，<br>34：WoTrus-国密域名型证书（多域名），<br>35：WoTrus-国密域名型证书（通配符），<br>37：WoTrus-国密企业型证书，<br>38：WoTrus-国密企业型证书（多域名），<br>39：WoTrus-国密企业型证书（通配符），<br>40：WoTrus-国密增强型证书，<br>41：WoTrus-国密增强型证书（多域名），<br>42：TrustAsia-域名型证书（通配符多域名），<br>43：DNSPod-企业型(OV)SSL证书<br>44：DNSPod-企业型(OV)通配符SSL证书<br>45：DNSPod-企业型(OV)多域名SSL证书<br>46：DNSPod-增强型(EV)SSL证书<br>47：DNSPod-增强型(EV)多域名SSL证书<br>48：DNSPod-域名型(DV)SSL证书<br>49：DNSPod-域名型(DV)通配符SSL证书<br>50：DNSPod-域名型(DV)多域名SSL证书<br>51：DNSPod（国密）-企业型(OV)SSL证书<br>52：DNSPod（国密）-企业型(OV)通配符SSL证书<br>53：DNSPod（国密）-企业型(OV)多域名SSL证书<br>54：DNSPod（国密）-域名型(DV)SSL证书<br>55：DNSPod（国密）-域名型(DV)通配符SSL证书<br>56：DNSPod（国密）-域名型(DV)多域名SSL证书<br>57：SecureSite 企业型专业版多域名(OV Pro)<br>58：SecureSite 企业型多域名(OV)<br>59：SecureSite 增强型专业版多域名(EV Pro)<br>60：SecureSite 增强型多域名(EV)<br>61：Geotrust 增强型多域名(EV)<br>75：SecureSite 企业型(OV)<br>76：SecureSite 企业型(OV)通配符<br>77：SecureSite 增强型(EV)<br>78：Geotrust 企业型(OV)<br>79：Geotrust 企业型(OV)通配符<br>80：Geotrust 增强型(EV)<br>81：GlobalSign 企业型（OV）SSL证书<br>82：GlobalSign 企业型通配符 （OV）SSL证书<br>83：TrustAsia C1 DV Free<br>85：GlobalSign 增强型 （EV）SSL证书<br>88：GlobalSign 企业型通配符多域名 （OV）SSL证书<br>89：GlobalSign 企业型多域名 （OV）SSL证书<br>90：GlobalSign 增强型多域名（EV） SSL证书<br>91：Geotrust 增强型多域名(EV)<br>92：SecureSite 企业型专业版多域名(OV Pro)<br>93：SecureSite 企业型多域名(OV)<br>94：SecureSite 增强型专业版多域名(EV Pro)<br>95：SecureSite 增强型多域名(EV)<br>96：SecureSite 增强型专业版(EV Pro)<br>97：SecureSite 企业型专业版(OV Pro)<br>98：CFCA 企业型(OV)SSL证书<br>99：CFCA 企业型多域名(OV)SSL证书<br>100：CFCA 企业型通配符(OV)SSL证书<br>101：CFCA 增强型(EV)SSL证书</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageType(string $PackageType) 设置<p>证书套餐类型：<br>null：用户上传证书（没有套餐类型），<br>2：TrustAsia TLS RSA CA，<br>3：SecureSite 增强型企业版（EV Pro），<br>4：SecureSite 增强型（EV），<br>5：SecureSite 企业型专业版（OV Pro），<br>6：SecureSite 企业型（OV），<br>7：SecureSite 企业型（OV）通配符，<br>8：Geotrust 增强型（EV），<br>9：Geotrust 企业型（OV），<br>10：Geotrust 企业型（OV）通配符，<br>11：TrustAsia 域名型多域名 SSL 证书，<br>12：TrustAsia 域名型（DV）通配符，<br>13：TrustAsia 企业型通配符（OV）SSL 证书（D3），<br>14：TrustAsia 企业型（OV）SSL 证书（D3），<br>15：TrustAsia 企业型多域名 （OV）SSL 证书（D3），<br>16：TrustAsia 增强型 （EV）SSL 证书（D3），<br>17：TrustAsia 增强型多域名（EV）SSL 证书（D3），<br>18：GlobalSign 企业型（OV）SSL 证书，<br>19：GlobalSign 企业型通配符 （OV）SSL 证书，<br>20：GlobalSign 增强型 （EV）SSL 证书，<br>21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3），<br>22：GlobalSign 企业型多域名（OV）SSL 证书，<br>23：GlobalSign 企业型通配符多域名（OV）SSL 证书，<br>24：GlobalSign 增强型多域名（EV）SSL 证书，<br>25：Wotrus 域名型证书，<br>26：Wotrus 域名型多域名证书，<br>27：Wotrus 域名型通配符证书，<br>28：Wotrus 企业型证书，<br>29：Wotrus 企业型多域名证书，<br>30：Wotrus 企业型通配符证书，<br>31：Wotrus 增强型证书，<br>32：Wotrus 增强型多域名证书，<br>33：WoTrus-国密域名型证书，<br>34：WoTrus-国密域名型证书（多域名），<br>35：WoTrus-国密域名型证书（通配符），<br>37：WoTrus-国密企业型证书，<br>38：WoTrus-国密企业型证书（多域名），<br>39：WoTrus-国密企业型证书（通配符），<br>40：WoTrus-国密增强型证书，<br>41：WoTrus-国密增强型证书（多域名），<br>42：TrustAsia-域名型证书（通配符多域名），<br>43：DNSPod-企业型(OV)SSL证书<br>44：DNSPod-企业型(OV)通配符SSL证书<br>45：DNSPod-企业型(OV)多域名SSL证书<br>46：DNSPod-增强型(EV)SSL证书<br>47：DNSPod-增强型(EV)多域名SSL证书<br>48：DNSPod-域名型(DV)SSL证书<br>49：DNSPod-域名型(DV)通配符SSL证书<br>50：DNSPod-域名型(DV)多域名SSL证书<br>51：DNSPod（国密）-企业型(OV)SSL证书<br>52：DNSPod（国密）-企业型(OV)通配符SSL证书<br>53：DNSPod（国密）-企业型(OV)多域名SSL证书<br>54：DNSPod（国密）-域名型(DV)SSL证书<br>55：DNSPod（国密）-域名型(DV)通配符SSL证书<br>56：DNSPod（国密）-域名型(DV)多域名SSL证书<br>57：SecureSite 企业型专业版多域名(OV Pro)<br>58：SecureSite 企业型多域名(OV)<br>59：SecureSite 增强型专业版多域名(EV Pro)<br>60：SecureSite 增强型多域名(EV)<br>61：Geotrust 增强型多域名(EV)<br>75：SecureSite 企业型(OV)<br>76：SecureSite 企业型(OV)通配符<br>77：SecureSite 增强型(EV)<br>78：Geotrust 企业型(OV)<br>79：Geotrust 企业型(OV)通配符<br>80：Geotrust 增强型(EV)<br>81：GlobalSign 企业型（OV）SSL证书<br>82：GlobalSign 企业型通配符 （OV）SSL证书<br>83：TrustAsia C1 DV Free<br>85：GlobalSign 增强型 （EV）SSL证书<br>88：GlobalSign 企业型通配符多域名 （OV）SSL证书<br>89：GlobalSign 企业型多域名 （OV）SSL证书<br>90：GlobalSign 增强型多域名（EV） SSL证书<br>91：Geotrust 增强型多域名(EV)<br>92：SecureSite 企业型专业版多域名(OV Pro)<br>93：SecureSite 企业型多域名(OV)<br>94：SecureSite 增强型专业版多域名(EV Pro)<br>95：SecureSite 增强型多域名(EV)<br>96：SecureSite 增强型专业版(EV Pro)<br>97：SecureSite 企业型专业版(OV Pro)<br>98：CFCA 企业型(OV)SSL证书<br>99：CFCA 企业型多域名(OV)SSL证书<br>100：CFCA 企业型通配符(OV)SSL证书<br>101：CFCA 增强型(EV)SSL证书</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductZhName() 获取<p>证书产品名称</p>
 * @method void setProductZhName(string $ProductZhName) 设置<p>证书产品名称</p>
 * @method string getDomain() 获取<p>证书绑定通用名称域名。</p>
 * @method void setDomain(string $Domain) 设置<p>证书绑定通用名称域名。</p>
 * @method string getAlias() 获取<p>备注名称。</p>
 * @method void setAlias(string $Alias) 设置<p>备注名称。</p>
 * @method integer getStatus() 获取<p>证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 自动添加DNS记录，5 = 企业证书，待提交资料，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 证书已退款。 15 = 证书迁移中</p>
 * @method void setStatus(integer $Status) 设置<p>证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 自动添加DNS记录，5 = 企业证书，待提交资料，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 证书已退款。 15 = 证书迁移中</p>
 * @method string getStatusMsg() 获取<p>状态信息。 取值范围：<br>//通用状态信息<br>1、PRE-REVIEWING：预审核中<br>2、LEGAL-REVIEWING：法务审核中<br>3、CA-REVIEWING：CA审核中<br>4、PENDING-DCV：域名验证中<br>5、WAIT-ISSUE：等待签发（域名验证已通过）<br>//证书审核失败状态信息<br>1、订单审核失败<br>2、CA审核失败，域名未通过安全审查<br>3、域名验证超时，订单自动关闭，请您重新进行证书申请<br>4、证书资料未通过证书CA机构审核，审核人员会致电您证书预留的联系方式，请您留意来电。后续可通过“修改资料”重新提交资料<br>待持续完善</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusMsg(string $StatusMsg) 设置<p>状态信息。 取值范围：<br>//通用状态信息<br>1、PRE-REVIEWING：预审核中<br>2、LEGAL-REVIEWING：法务审核中<br>3、CA-REVIEWING：CA审核中<br>4、PENDING-DCV：域名验证中<br>5、WAIT-ISSUE：等待签发（域名验证已通过）<br>//证书审核失败状态信息<br>1、订单审核失败<br>2、CA审核失败，域名未通过安全审查<br>3、域名验证超时，订单自动关闭，请您重新进行证书申请<br>4、证书资料未通过证书CA机构审核，审核人员会致电您证书预留的联系方式，请您留意来电。后续可通过“修改资料”重新提交资料<br>待持续完善</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVerifyType() 获取<p>验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，EMAIL = 邮件验证。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifyType(string $VerifyType) 设置<p>验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，EMAIL = 邮件验证。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulnerabilityStatus() 获取<p>漏洞扫描状态。</p>
 * @method void setVulnerabilityStatus(string $VulnerabilityStatus) 设置<p>漏洞扫描状态。</p>
 * @method string getCertBeginTime() 获取<p>证书生效时间。时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertBeginTime(string $CertBeginTime) 设置<p>证书生效时间。时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertEndTime() 获取<p>证书失效时间。时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertEndTime(string $CertEndTime) 设置<p>证书失效时间。时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValidityPeriod() 获取<p>证书有效期：单位（月）。</p>
 * @method void setValidityPeriod(string $ValidityPeriod) 设置<p>证书有效期：单位（月）。</p>
 * @method string getInsertTime() 获取<p>证书申请时间。时区为GMT+8:00</p>
 * @method void setInsertTime(string $InsertTime) 设置<p>证书申请时间。时区为GMT+8:00</p>
 * @method string getOrderId() 获取<p>CA订单 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderId(string $OrderId) 设置<p>CA订单 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CertificateExtra getCertificateExtra() 获取<p>证书扩展信息。</p>
 * @method void setCertificateExtra(CertificateExtra $CertificateExtra) 设置<p>证书扩展信息。</p>
 * @method string getCertificatePrivateKey() 获取<p>私钥证书， 国密证书则为签名证书中的私钥证书</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificatePrivateKey(string $CertificatePrivateKey) 设置<p>私钥证书， 国密证书则为签名证书中的私钥证书</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertificatePublicKey() 获取<p>公钥证书， 国密则为签名证书中的公钥证书</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificatePublicKey(string $CertificatePublicKey) 设置<p>公钥证书， 国密则为签名证书中的公钥证书</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DvAuthDetail getDvAuthDetail() 获取<p>证书域名验证信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvAuthDetail(DvAuthDetail $DvAuthDetail) 设置<p>证书域名验证信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulnerabilityReport() 获取<p>漏洞扫描评估报告。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulnerabilityReport(string $VulnerabilityReport) 设置<p>漏洞扫描评估报告。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertificateId() 获取<p>证书 ID。</p>
 * @method void setCertificateId(string $CertificateId) 设置<p>证书 ID。</p>
 * @method string getTypeName() 获取<p>证书类型名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeName(string $TypeName) 设置<p>证书类型名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusName() 获取<p>状态描述。</p>
 * @method void setStatusName(string $StatusName) 设置<p>状态描述。</p>
 * @method array getSubjectAltName() 获取<p>证书包含的多个域名（不包含主域名，主域名使用Domain字段）</p>
 * @method void setSubjectAltName(array $SubjectAltName) 设置<p>证书包含的多个域名（不包含主域名，主域名使用Domain字段）</p>
 * @method boolean getIsVip() 获取<p>是否为付费证书。</p>
 * @method void setIsVip(boolean $IsVip) 设置<p>是否为付费证书。</p>
 * @method boolean getIsWildcard() 获取<p>是否为泛域名证书。</p>
 * @method void setIsWildcard(boolean $IsWildcard) 设置<p>是否为泛域名证书。</p>
 * @method boolean getIsDv() 获取<p>是否为 DV 版证书。</p>
 * @method void setIsDv(boolean $IsDv) 设置<p>是否为 DV 版证书。</p>
 * @method boolean getIsVulnerability() 获取<p>是否启用了漏洞扫描功能。</p>
 * @method void setIsVulnerability(boolean $IsVulnerability) 设置<p>是否启用了漏洞扫描功能。</p>
 * @method SubmittedData getSubmittedData() 获取<p>付费证书提交的资料信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmittedData(SubmittedData $SubmittedData) 设置<p>付费证书提交的资料信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRenewAble() 获取<p>是否可续费。</p>
 * @method void setRenewAble(boolean $RenewAble) 设置<p>是否可续费。</p>
 * @method boolean getDeployable() 获取<p>是否可部署。</p>
 * @method void setDeployable(boolean $Deployable) 设置<p>是否可部署。</p>
 * @method array getTags() 获取<p>关联标签列表。</p>
 * @method void setTags(array $Tags) 设置<p>关联标签列表。</p>
 * @method RootCertificates getRootCert() 获取<p>根证书。</p>
 * @method void setRootCert(RootCertificates $RootCert) 设置<p>根证书。</p>
 * @method string getEncryptCert() 获取<p>国密加密证书公钥， 仅国密证书有值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncryptCert(string $EncryptCert) 设置<p>国密加密证书公钥， 仅国密证书有值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEncryptPrivateKey() 获取<p>国密加密私钥证书， 仅国密证书有值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncryptPrivateKey(string $EncryptPrivateKey) 设置<p>国密加密私钥证书， 仅国密证书有值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertFingerprint() 获取<p>签名证书 SHA1指纹</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertFingerprint(string $CertFingerprint) 设置<p>签名证书 SHA1指纹</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEncryptCertFingerprint() 获取<p>加密证书 SHA1指纹 （国密证书特有）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncryptCertFingerprint(string $EncryptCertFingerprint) 设置<p>加密证书 SHA1指纹 （国密证书特有）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEncryptAlgorithm() 获取<p>证书加密算法（国密证书特有）</p>
 * @method void setEncryptAlgorithm(string $EncryptAlgorithm) 设置<p>证书加密算法（国密证书特有）</p>
 * @method array getDvRevokeAuthDetail() 获取<p>DV证书吊销验证值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvRevokeAuthDetail(array $DvRevokeAuthDetail) 设置<p>DV证书吊销验证值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCertChainInfo() 获取<p>证书链信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertChainInfo(array $CertChainInfo) 设置<p>证书链信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDomainType() 获取<p>证书域名类型， 1（单域名）；2（多域名）；3（泛域名）；4（多泛域名）</p>
 * @method void setDomainType(integer $DomainType) 设置<p>证书域名类型， 1（单域名）；2（多域名）；3（泛域名）；4（多泛域名）</p>
 * @method string getCertType() 获取<p>证书类型，DV（域名型）；OV（企业型）；EV（增强型）</p>
 * @method void setCertType(string $CertType) 设置<p>证书类型，DV（域名型）；OV（企业型）；EV（增强型）</p>
 * @method boolean getUseCrossSignRoot() 获取<p>是否使用交叉根</p>
 * @method void setUseCrossSignRoot(boolean $UseCrossSignRoot) 设置<p>是否使用交叉根</p>
 * @method integer getHostingStatus() 获取<p>托管状态，0代表托管中，5代表资源替换中， 10代表托管完成， -1代表未托管</p>
 * @method void setHostingStatus(integer $HostingStatus) 设置<p>托管状态，0代表托管中，5代表资源替换中， 10代表托管完成， -1代表未托管</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCertificateDetailResponse extends AbstractModel
{
    /**
     * @var string <p>证书所属用户主账号 UIN。</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>项目 ID。</p>
     */
    public $ProjectId;

    /**
     * @var string <p>证书来源：<br>trustasia：亚洲诚信，<br>upload：用户上传。<br>wosign：沃通<br>sheca：上海CA</p>
     */
    public $From;

    /**
     * @var string <p>证书类型：CA = 客户端证书，SVR = 服务器证书。</p>
     */
    public $CertificateType;

    /**
     * @var string <p>证书套餐类型：<br>null：用户上传证书（没有套餐类型），<br>2：TrustAsia TLS RSA CA，<br>3：SecureSite 增强型企业版（EV Pro），<br>4：SecureSite 增强型（EV），<br>5：SecureSite 企业型专业版（OV Pro），<br>6：SecureSite 企业型（OV），<br>7：SecureSite 企业型（OV）通配符，<br>8：Geotrust 增强型（EV），<br>9：Geotrust 企业型（OV），<br>10：Geotrust 企业型（OV）通配符，<br>11：TrustAsia 域名型多域名 SSL 证书，<br>12：TrustAsia 域名型（DV）通配符，<br>13：TrustAsia 企业型通配符（OV）SSL 证书（D3），<br>14：TrustAsia 企业型（OV）SSL 证书（D3），<br>15：TrustAsia 企业型多域名 （OV）SSL 证书（D3），<br>16：TrustAsia 增强型 （EV）SSL 证书（D3），<br>17：TrustAsia 增强型多域名（EV）SSL 证书（D3），<br>18：GlobalSign 企业型（OV）SSL 证书，<br>19：GlobalSign 企业型通配符 （OV）SSL 证书，<br>20：GlobalSign 增强型 （EV）SSL 证书，<br>21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3），<br>22：GlobalSign 企业型多域名（OV）SSL 证书，<br>23：GlobalSign 企业型通配符多域名（OV）SSL 证书，<br>24：GlobalSign 增强型多域名（EV）SSL 证书，<br>25：Wotrus 域名型证书，<br>26：Wotrus 域名型多域名证书，<br>27：Wotrus 域名型通配符证书，<br>28：Wotrus 企业型证书，<br>29：Wotrus 企业型多域名证书，<br>30：Wotrus 企业型通配符证书，<br>31：Wotrus 增强型证书，<br>32：Wotrus 增强型多域名证书，<br>33：WoTrus-国密域名型证书，<br>34：WoTrus-国密域名型证书（多域名），<br>35：WoTrus-国密域名型证书（通配符），<br>37：WoTrus-国密企业型证书，<br>38：WoTrus-国密企业型证书（多域名），<br>39：WoTrus-国密企业型证书（通配符），<br>40：WoTrus-国密增强型证书，<br>41：WoTrus-国密增强型证书（多域名），<br>42：TrustAsia-域名型证书（通配符多域名），<br>43：DNSPod-企业型(OV)SSL证书<br>44：DNSPod-企业型(OV)通配符SSL证书<br>45：DNSPod-企业型(OV)多域名SSL证书<br>46：DNSPod-增强型(EV)SSL证书<br>47：DNSPod-增强型(EV)多域名SSL证书<br>48：DNSPod-域名型(DV)SSL证书<br>49：DNSPod-域名型(DV)通配符SSL证书<br>50：DNSPod-域名型(DV)多域名SSL证书<br>51：DNSPod（国密）-企业型(OV)SSL证书<br>52：DNSPod（国密）-企业型(OV)通配符SSL证书<br>53：DNSPod（国密）-企业型(OV)多域名SSL证书<br>54：DNSPod（国密）-域名型(DV)SSL证书<br>55：DNSPod（国密）-域名型(DV)通配符SSL证书<br>56：DNSPod（国密）-域名型(DV)多域名SSL证书<br>57：SecureSite 企业型专业版多域名(OV Pro)<br>58：SecureSite 企业型多域名(OV)<br>59：SecureSite 增强型专业版多域名(EV Pro)<br>60：SecureSite 增强型多域名(EV)<br>61：Geotrust 增强型多域名(EV)<br>75：SecureSite 企业型(OV)<br>76：SecureSite 企业型(OV)通配符<br>77：SecureSite 增强型(EV)<br>78：Geotrust 企业型(OV)<br>79：Geotrust 企业型(OV)通配符<br>80：Geotrust 增强型(EV)<br>81：GlobalSign 企业型（OV）SSL证书<br>82：GlobalSign 企业型通配符 （OV）SSL证书<br>83：TrustAsia C1 DV Free<br>85：GlobalSign 增强型 （EV）SSL证书<br>88：GlobalSign 企业型通配符多域名 （OV）SSL证书<br>89：GlobalSign 企业型多域名 （OV）SSL证书<br>90：GlobalSign 增强型多域名（EV） SSL证书<br>91：Geotrust 增强型多域名(EV)<br>92：SecureSite 企业型专业版多域名(OV Pro)<br>93：SecureSite 企业型多域名(OV)<br>94：SecureSite 增强型专业版多域名(EV Pro)<br>95：SecureSite 增强型多域名(EV)<br>96：SecureSite 增强型专业版(EV Pro)<br>97：SecureSite 企业型专业版(OV Pro)<br>98：CFCA 企业型(OV)SSL证书<br>99：CFCA 企业型多域名(OV)SSL证书<br>100：CFCA 企业型通配符(OV)SSL证书<br>101：CFCA 增强型(EV)SSL证书</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageType;

    /**
     * @var string <p>证书产品名称</p>
     */
    public $ProductZhName;

    /**
     * @var string <p>证书绑定通用名称域名。</p>
     */
    public $Domain;

    /**
     * @var string <p>备注名称。</p>
     */
    public $Alias;

    /**
     * @var integer <p>证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 自动添加DNS记录，5 = 企业证书，待提交资料，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 证书已退款。 15 = 证书迁移中</p>
     */
    public $Status;

    /**
     * @var string <p>状态信息。 取值范围：<br>//通用状态信息<br>1、PRE-REVIEWING：预审核中<br>2、LEGAL-REVIEWING：法务审核中<br>3、CA-REVIEWING：CA审核中<br>4、PENDING-DCV：域名验证中<br>5、WAIT-ISSUE：等待签发（域名验证已通过）<br>//证书审核失败状态信息<br>1、订单审核失败<br>2、CA审核失败，域名未通过安全审查<br>3、域名验证超时，订单自动关闭，请您重新进行证书申请<br>4、证书资料未通过证书CA机构审核，审核人员会致电您证书预留的联系方式，请您留意来电。后续可通过“修改资料”重新提交资料<br>待持续完善</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusMsg;

    /**
     * @var string <p>验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，EMAIL = 邮件验证。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifyType;

    /**
     * @var string <p>漏洞扫描状态。</p>
     */
    public $VulnerabilityStatus;

    /**
     * @var string <p>证书生效时间。时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertBeginTime;

    /**
     * @var string <p>证书失效时间。时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertEndTime;

    /**
     * @var string <p>证书有效期：单位（月）。</p>
     */
    public $ValidityPeriod;

    /**
     * @var string <p>证书申请时间。时区为GMT+8:00</p>
     */
    public $InsertTime;

    /**
     * @var string <p>CA订单 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderId;

    /**
     * @var CertificateExtra <p>证书扩展信息。</p>
     */
    public $CertificateExtra;

    /**
     * @var string <p>私钥证书， 国密证书则为签名证书中的私钥证书</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificatePrivateKey;

    /**
     * @var string <p>公钥证书， 国密则为签名证书中的公钥证书</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificatePublicKey;

    /**
     * @var DvAuthDetail <p>证书域名验证信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DvAuthDetail;

    /**
     * @var string <p>漏洞扫描评估报告。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulnerabilityReport;

    /**
     * @var string <p>证书 ID。</p>
     */
    public $CertificateId;

    /**
     * @var string <p>证书类型名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeName;

    /**
     * @var string <p>状态描述。</p>
     */
    public $StatusName;

    /**
     * @var array <p>证书包含的多个域名（不包含主域名，主域名使用Domain字段）</p>
     */
    public $SubjectAltName;

    /**
     * @var boolean <p>是否为付费证书。</p>
     */
    public $IsVip;

    /**
     * @var boolean <p>是否为泛域名证书。</p>
     */
    public $IsWildcard;

    /**
     * @var boolean <p>是否为 DV 版证书。</p>
     */
    public $IsDv;

    /**
     * @var boolean <p>是否启用了漏洞扫描功能。</p>
     */
    public $IsVulnerability;

    /**
     * @var SubmittedData <p>付费证书提交的资料信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubmittedData;

    /**
     * @var boolean <p>是否可续费。</p>
     */
    public $RenewAble;

    /**
     * @var boolean <p>是否可部署。</p>
     */
    public $Deployable;

    /**
     * @var array <p>关联标签列表。</p>
     */
    public $Tags;

    /**
     * @var RootCertificates <p>根证书。</p>
     */
    public $RootCert;

    /**
     * @var string <p>国密加密证书公钥， 仅国密证书有值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EncryptCert;

    /**
     * @var string <p>国密加密私钥证书， 仅国密证书有值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EncryptPrivateKey;

    /**
     * @var string <p>签名证书 SHA1指纹</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertFingerprint;

    /**
     * @var string <p>加密证书 SHA1指纹 （国密证书特有）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EncryptCertFingerprint;

    /**
     * @var string <p>证书加密算法（国密证书特有）</p>
     */
    public $EncryptAlgorithm;

    /**
     * @var array <p>DV证书吊销验证值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DvRevokeAuthDetail;

    /**
     * @var array <p>证书链信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertChainInfo;

    /**
     * @var integer <p>证书域名类型， 1（单域名）；2（多域名）；3（泛域名）；4（多泛域名）</p>
     */
    public $DomainType;

    /**
     * @var string <p>证书类型，DV（域名型）；OV（企业型）；EV（增强型）</p>
     */
    public $CertType;

    /**
     * @var boolean <p>是否使用交叉根</p>
     */
    public $UseCrossSignRoot;

    /**
     * @var integer <p>托管状态，0代表托管中，5代表资源替换中， 10代表托管完成， -1代表未托管</p>
     */
    public $HostingStatus;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $OwnerUin <p>证书所属用户主账号 UIN。</p>
     * @param string $ProjectId <p>项目 ID。</p>
     * @param string $From <p>证书来源：<br>trustasia：亚洲诚信，<br>upload：用户上传。<br>wosign：沃通<br>sheca：上海CA</p>
     * @param string $CertificateType <p>证书类型：CA = 客户端证书，SVR = 服务器证书。</p>
     * @param string $PackageType <p>证书套餐类型：<br>null：用户上传证书（没有套餐类型），<br>2：TrustAsia TLS RSA CA，<br>3：SecureSite 增强型企业版（EV Pro），<br>4：SecureSite 增强型（EV），<br>5：SecureSite 企业型专业版（OV Pro），<br>6：SecureSite 企业型（OV），<br>7：SecureSite 企业型（OV）通配符，<br>8：Geotrust 增强型（EV），<br>9：Geotrust 企业型（OV），<br>10：Geotrust 企业型（OV）通配符，<br>11：TrustAsia 域名型多域名 SSL 证书，<br>12：TrustAsia 域名型（DV）通配符，<br>13：TrustAsia 企业型通配符（OV）SSL 证书（D3），<br>14：TrustAsia 企业型（OV）SSL 证书（D3），<br>15：TrustAsia 企业型多域名 （OV）SSL 证书（D3），<br>16：TrustAsia 增强型 （EV）SSL 证书（D3），<br>17：TrustAsia 增强型多域名（EV）SSL 证书（D3），<br>18：GlobalSign 企业型（OV）SSL 证书，<br>19：GlobalSign 企业型通配符 （OV）SSL 证书，<br>20：GlobalSign 增强型 （EV）SSL 证书，<br>21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3），<br>22：GlobalSign 企业型多域名（OV）SSL 证书，<br>23：GlobalSign 企业型通配符多域名（OV）SSL 证书，<br>24：GlobalSign 增强型多域名（EV）SSL 证书，<br>25：Wotrus 域名型证书，<br>26：Wotrus 域名型多域名证书，<br>27：Wotrus 域名型通配符证书，<br>28：Wotrus 企业型证书，<br>29：Wotrus 企业型多域名证书，<br>30：Wotrus 企业型通配符证书，<br>31：Wotrus 增强型证书，<br>32：Wotrus 增强型多域名证书，<br>33：WoTrus-国密域名型证书，<br>34：WoTrus-国密域名型证书（多域名），<br>35：WoTrus-国密域名型证书（通配符），<br>37：WoTrus-国密企业型证书，<br>38：WoTrus-国密企业型证书（多域名），<br>39：WoTrus-国密企业型证书（通配符），<br>40：WoTrus-国密增强型证书，<br>41：WoTrus-国密增强型证书（多域名），<br>42：TrustAsia-域名型证书（通配符多域名），<br>43：DNSPod-企业型(OV)SSL证书<br>44：DNSPod-企业型(OV)通配符SSL证书<br>45：DNSPod-企业型(OV)多域名SSL证书<br>46：DNSPod-增强型(EV)SSL证书<br>47：DNSPod-增强型(EV)多域名SSL证书<br>48：DNSPod-域名型(DV)SSL证书<br>49：DNSPod-域名型(DV)通配符SSL证书<br>50：DNSPod-域名型(DV)多域名SSL证书<br>51：DNSPod（国密）-企业型(OV)SSL证书<br>52：DNSPod（国密）-企业型(OV)通配符SSL证书<br>53：DNSPod（国密）-企业型(OV)多域名SSL证书<br>54：DNSPod（国密）-域名型(DV)SSL证书<br>55：DNSPod（国密）-域名型(DV)通配符SSL证书<br>56：DNSPod（国密）-域名型(DV)多域名SSL证书<br>57：SecureSite 企业型专业版多域名(OV Pro)<br>58：SecureSite 企业型多域名(OV)<br>59：SecureSite 增强型专业版多域名(EV Pro)<br>60：SecureSite 增强型多域名(EV)<br>61：Geotrust 增强型多域名(EV)<br>75：SecureSite 企业型(OV)<br>76：SecureSite 企业型(OV)通配符<br>77：SecureSite 增强型(EV)<br>78：Geotrust 企业型(OV)<br>79：Geotrust 企业型(OV)通配符<br>80：Geotrust 增强型(EV)<br>81：GlobalSign 企业型（OV）SSL证书<br>82：GlobalSign 企业型通配符 （OV）SSL证书<br>83：TrustAsia C1 DV Free<br>85：GlobalSign 增强型 （EV）SSL证书<br>88：GlobalSign 企业型通配符多域名 （OV）SSL证书<br>89：GlobalSign 企业型多域名 （OV）SSL证书<br>90：GlobalSign 增强型多域名（EV） SSL证书<br>91：Geotrust 增强型多域名(EV)<br>92：SecureSite 企业型专业版多域名(OV Pro)<br>93：SecureSite 企业型多域名(OV)<br>94：SecureSite 增强型专业版多域名(EV Pro)<br>95：SecureSite 增强型多域名(EV)<br>96：SecureSite 增强型专业版(EV Pro)<br>97：SecureSite 企业型专业版(OV Pro)<br>98：CFCA 企业型(OV)SSL证书<br>99：CFCA 企业型多域名(OV)SSL证书<br>100：CFCA 企业型通配符(OV)SSL证书<br>101：CFCA 增强型(EV)SSL证书</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductZhName <p>证书产品名称</p>
     * @param string $Domain <p>证书绑定通用名称域名。</p>
     * @param string $Alias <p>备注名称。</p>
     * @param integer $Status <p>证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 自动添加DNS记录，5 = 企业证书，待提交资料，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 证书已退款。 15 = 证书迁移中</p>
     * @param string $StatusMsg <p>状态信息。 取值范围：<br>//通用状态信息<br>1、PRE-REVIEWING：预审核中<br>2、LEGAL-REVIEWING：法务审核中<br>3、CA-REVIEWING：CA审核中<br>4、PENDING-DCV：域名验证中<br>5、WAIT-ISSUE：等待签发（域名验证已通过）<br>//证书审核失败状态信息<br>1、订单审核失败<br>2、CA审核失败，域名未通过安全审查<br>3、域名验证超时，订单自动关闭，请您重新进行证书申请<br>4、证书资料未通过证书CA机构审核，审核人员会致电您证书预留的联系方式，请您留意来电。后续可通过“修改资料”重新提交资料<br>待持续完善</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VerifyType <p>验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，EMAIL = 邮件验证。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulnerabilityStatus <p>漏洞扫描状态。</p>
     * @param string $CertBeginTime <p>证书生效时间。时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertEndTime <p>证书失效时间。时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValidityPeriod <p>证书有效期：单位（月）。</p>
     * @param string $InsertTime <p>证书申请时间。时区为GMT+8:00</p>
     * @param string $OrderId <p>CA订单 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CertificateExtra $CertificateExtra <p>证书扩展信息。</p>
     * @param string $CertificatePrivateKey <p>私钥证书， 国密证书则为签名证书中的私钥证书</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertificatePublicKey <p>公钥证书， 国密则为签名证书中的公钥证书</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DvAuthDetail $DvAuthDetail <p>证书域名验证信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulnerabilityReport <p>漏洞扫描评估报告。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertificateId <p>证书 ID。</p>
     * @param string $TypeName <p>证书类型名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusName <p>状态描述。</p>
     * @param array $SubjectAltName <p>证书包含的多个域名（不包含主域名，主域名使用Domain字段）</p>
     * @param boolean $IsVip <p>是否为付费证书。</p>
     * @param boolean $IsWildcard <p>是否为泛域名证书。</p>
     * @param boolean $IsDv <p>是否为 DV 版证书。</p>
     * @param boolean $IsVulnerability <p>是否启用了漏洞扫描功能。</p>
     * @param SubmittedData $SubmittedData <p>付费证书提交的资料信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RenewAble <p>是否可续费。</p>
     * @param boolean $Deployable <p>是否可部署。</p>
     * @param array $Tags <p>关联标签列表。</p>
     * @param RootCertificates $RootCert <p>根证书。</p>
     * @param string $EncryptCert <p>国密加密证书公钥， 仅国密证书有值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EncryptPrivateKey <p>国密加密私钥证书， 仅国密证书有值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertFingerprint <p>签名证书 SHA1指纹</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EncryptCertFingerprint <p>加密证书 SHA1指纹 （国密证书特有）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EncryptAlgorithm <p>证书加密算法（国密证书特有）</p>
     * @param array $DvRevokeAuthDetail <p>DV证书吊销验证值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CertChainInfo <p>证书链信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DomainType <p>证书域名类型， 1（单域名）；2（多域名）；3（泛域名）；4（多泛域名）</p>
     * @param string $CertType <p>证书类型，DV（域名型）；OV（企业型）；EV（增强型）</p>
     * @param boolean $UseCrossSignRoot <p>是否使用交叉根</p>
     * @param integer $HostingStatus <p>托管状态，0代表托管中，5代表资源替换中， 10代表托管完成， -1代表未托管</p>
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

        if (array_key_exists("HostingStatus",$param) and $param["HostingStatus"] !== null) {
            $this->HostingStatus = $param["HostingStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
