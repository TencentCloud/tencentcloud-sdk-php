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
 * DescribeCertificate返回参数结构体
 *
 * @method string getOwnerUin() 获取<p>用户 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置<p>用户 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取<p>项目 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>项目 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrom() 获取<p>证书来源：<br>trustasia：亚洲诚信，<br>upload：用户上传。<br>wosign：沃通<br>sheca：上海CA</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrom(string $From) 设置<p>证书来源：<br>trustasia：亚洲诚信，<br>upload：用户上传。<br>wosign：沃通<br>sheca：上海CA</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertificateType() 获取<p>证书类型：CA = 客户端证书，SVR = 服务器证书。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificateType(string $CertificateType) 设置<p>证书类型：CA = 客户端证书，SVR = 服务器证书。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageType() 获取<p>证书套餐类型：<br>null：用户上传证书（没有套餐类型），<br>2：TrustAsia TLS RSA CA，<br>3：SecureSite 增强型企业版（EV Pro），<br>4：SecureSite 增强型（EV），<br>5：SecureSite 企业型专业版（OV Pro），<br>6：SecureSite 企业型（OV），<br>7：SecureSite 企业型（OV）通配符，<br>8：Geotrust 增强型（EV），<br>9：Geotrust 企业型（OV），<br>10：Geotrust 企业型（OV）通配符，<br>11：TrustAsia 域名型多域名 SSL 证书，<br>12：TrustAsia 域名型（DV）通配符，<br>13：TrustAsia 企业型通配符（OV）SSL 证书（D3），<br>14：TrustAsia 企业型（OV）SSL 证书（D3），<br>15：TrustAsia 企业型多域名 （OV）SSL 证书（D3），<br>16：TrustAsia 增强型 （EV）SSL 证书（D3），<br>17：TrustAsia 增强型多域名（EV）SSL 证书（D3），<br>18：GlobalSign 企业型（OV）SSL 证书，<br>19：GlobalSign 企业型通配符 （OV）SSL 证书，<br>20：GlobalSign 增强型 （EV）SSL 证书，<br>21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3），<br>22：GlobalSign 企业型多域名（OV）SSL 证书，<br>23：GlobalSign 企业型通配符多域名（OV）SSL 证书，<br>24：GlobalSign 增强型多域名（EV）SSL 证书，<br>25：Wotrus 域名型证书，<br>26：Wotrus 域名型多域名证书，<br>27：Wotrus 域名型通配符证书，<br>28：Wotrus 企业型证书，<br>29：Wotrus 企业型多域名证书，<br>30：Wotrus 企业型通配符证书，<br>31：Wotrus 增强型证书，<br>32：Wotrus 增强型多域名证书，<br>33：WoTrus-国密域名型证书，<br>34：WoTrus-国密域名型证书（多域名），<br>35：WoTrus-国密域名型证书（通配符），<br>37：WoTrus-国密企业型证书，<br>38：WoTrus-国密企业型证书（多域名），<br>39：WoTrus-国密企业型证书（通配符），<br>40：WoTrus-国密增强型证书，<br>41：WoTrus-国密增强型证书（多域名），<br>42：TrustAsia-域名型证书（通配符多域名），<br>43：DNSPod-企业型(OV)SSL证书<br>44：DNSPod-企业型(OV)通配符SSL证书<br>45：DNSPod-企业型(OV)多域名SSL证书<br>46：DNSPod-增强型(EV)SSL证书<br>47：DNSPod-增强型(EV)多域名SSL证书<br>48：DNSPod-域名型(DV)SSL证书<br>49：DNSPod-域名型(DV)通配符SSL证书<br>50：DNSPod-域名型(DV)多域名SSL证书<br>51：DNSPod（国密）-企业型(OV)SSL证书<br>52：DNSPod（国密）-企业型(OV)通配符SSL证书<br>53：DNSPod（国密）-企业型(OV)多域名SSL证书<br>54：DNSPod（国密）-域名型(DV)SSL证书<br>55：DNSPod（国密）-域名型(DV)通配符SSL证书<br>56：DNSPod（国密）-域名型(DV)多域名SSL证书<br>57：SecureSite 企业型专业版多域名(OV Pro)<br>58：SecureSite 企业型多域名(OV)<br>59：SecureSite 增强型专业版多域名(EV Pro)<br>60：SecureSite 增强型多域名(EV)<br>61：Geotrust 增强型多域名(EV)<br>75：SecureSite 企业型(OV)<br>76：SecureSite 企业型(OV)通配符<br>77：SecureSite 增强型(EV)<br>78：Geotrust 企业型(OV)<br>79：Geotrust 企业型(OV)通配符<br>80：Geotrust 增强型(EV)<br>81：GlobalSign 企业型（OV）SSL证书<br>82：GlobalSign 企业型通配符 （OV）SSL证书<br>83：TrustAsia C1 DV Free<br>85：GlobalSign 增强型 （EV）SSL证书<br>88：GlobalSign 企业型通配符多域名 （OV）SSL证书<br>89：GlobalSign 企业型多域名 （OV）SSL证书<br>90：GlobalSign 增强型多域名（EV） SSL证书<br>91：Geotrust 增强型多域名(EV)<br>92：SecureSite 企业型专业版多域名(OV Pro)<br>93：SecureSite 企业型多域名(OV)<br>94：SecureSite 增强型专业版多域名(EV Pro)<br>95：SecureSite 增强型多域名(EV)<br>96：SecureSite 增强型专业版(EV Pro)<br>97：SecureSite 企业型专业版(OV Pro)<br>98：CFCA 企业型(OV)SSL证书<br>99：CFCA 企业型多域名(OV)SSL证书<br>100：CFCA 企业型通配符(OV)SSL证书<br>101：CFCA 增强型(EV)SSL证书</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageType(string $PackageType) 设置<p>证书套餐类型：<br>null：用户上传证书（没有套餐类型），<br>2：TrustAsia TLS RSA CA，<br>3：SecureSite 增强型企业版（EV Pro），<br>4：SecureSite 增强型（EV），<br>5：SecureSite 企业型专业版（OV Pro），<br>6：SecureSite 企业型（OV），<br>7：SecureSite 企业型（OV）通配符，<br>8：Geotrust 增强型（EV），<br>9：Geotrust 企业型（OV），<br>10：Geotrust 企业型（OV）通配符，<br>11：TrustAsia 域名型多域名 SSL 证书，<br>12：TrustAsia 域名型（DV）通配符，<br>13：TrustAsia 企业型通配符（OV）SSL 证书（D3），<br>14：TrustAsia 企业型（OV）SSL 证书（D3），<br>15：TrustAsia 企业型多域名 （OV）SSL 证书（D3），<br>16：TrustAsia 增强型 （EV）SSL 证书（D3），<br>17：TrustAsia 增强型多域名（EV）SSL 证书（D3），<br>18：GlobalSign 企业型（OV）SSL 证书，<br>19：GlobalSign 企业型通配符 （OV）SSL 证书，<br>20：GlobalSign 增强型 （EV）SSL 证书，<br>21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3），<br>22：GlobalSign 企业型多域名（OV）SSL 证书，<br>23：GlobalSign 企业型通配符多域名（OV）SSL 证书，<br>24：GlobalSign 增强型多域名（EV）SSL 证书，<br>25：Wotrus 域名型证书，<br>26：Wotrus 域名型多域名证书，<br>27：Wotrus 域名型通配符证书，<br>28：Wotrus 企业型证书，<br>29：Wotrus 企业型多域名证书，<br>30：Wotrus 企业型通配符证书，<br>31：Wotrus 增强型证书，<br>32：Wotrus 增强型多域名证书，<br>33：WoTrus-国密域名型证书，<br>34：WoTrus-国密域名型证书（多域名），<br>35：WoTrus-国密域名型证书（通配符），<br>37：WoTrus-国密企业型证书，<br>38：WoTrus-国密企业型证书（多域名），<br>39：WoTrus-国密企业型证书（通配符），<br>40：WoTrus-国密增强型证书，<br>41：WoTrus-国密增强型证书（多域名），<br>42：TrustAsia-域名型证书（通配符多域名），<br>43：DNSPod-企业型(OV)SSL证书<br>44：DNSPod-企业型(OV)通配符SSL证书<br>45：DNSPod-企业型(OV)多域名SSL证书<br>46：DNSPod-增强型(EV)SSL证书<br>47：DNSPod-增强型(EV)多域名SSL证书<br>48：DNSPod-域名型(DV)SSL证书<br>49：DNSPod-域名型(DV)通配符SSL证书<br>50：DNSPod-域名型(DV)多域名SSL证书<br>51：DNSPod（国密）-企业型(OV)SSL证书<br>52：DNSPod（国密）-企业型(OV)通配符SSL证书<br>53：DNSPod（国密）-企业型(OV)多域名SSL证书<br>54：DNSPod（国密）-域名型(DV)SSL证书<br>55：DNSPod（国密）-域名型(DV)通配符SSL证书<br>56：DNSPod（国密）-域名型(DV)多域名SSL证书<br>57：SecureSite 企业型专业版多域名(OV Pro)<br>58：SecureSite 企业型多域名(OV)<br>59：SecureSite 增强型专业版多域名(EV Pro)<br>60：SecureSite 增强型多域名(EV)<br>61：Geotrust 增强型多域名(EV)<br>75：SecureSite 企业型(OV)<br>76：SecureSite 企业型(OV)通配符<br>77：SecureSite 增强型(EV)<br>78：Geotrust 企业型(OV)<br>79：Geotrust 企业型(OV)通配符<br>80：Geotrust 增强型(EV)<br>81：GlobalSign 企业型（OV）SSL证书<br>82：GlobalSign 企业型通配符 （OV）SSL证书<br>83：TrustAsia C1 DV Free<br>85：GlobalSign 增强型 （EV）SSL证书<br>88：GlobalSign 企业型通配符多域名 （OV）SSL证书<br>89：GlobalSign 企业型多域名 （OV）SSL证书<br>90：GlobalSign 增强型多域名（EV） SSL证书<br>91：Geotrust 增强型多域名(EV)<br>92：SecureSite 企业型专业版多域名(OV Pro)<br>93：SecureSite 企业型多域名(OV)<br>94：SecureSite 增强型专业版多域名(EV Pro)<br>95：SecureSite 增强型多域名(EV)<br>96：SecureSite 增强型专业版(EV Pro)<br>97：SecureSite 企业型专业版(OV Pro)<br>98：CFCA 企业型(OV)SSL证书<br>99：CFCA 企业型多域名(OV)SSL证书<br>100：CFCA 企业型通配符(OV)SSL证书<br>101：CFCA 增强型(EV)SSL证书</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductZhName() 获取<p>证书产品名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductZhName(string $ProductZhName) 设置<p>证书产品名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取<p>域名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置<p>域名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlias() 获取<p>备注名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlias(string $Alias) 设置<p>备注名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 自动添加DNS记录，5 = 企业证书，待提交资料，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 证书已退款。 15 = 证书迁移中</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 自动添加DNS记录，5 = 企业证书，待提交资料，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 证书已退款。 15 = 证书迁移中</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusMsg() 获取<p>状态信息。 取值范围：<br>//通用状态信息<br>1、PRE-REVIEWING：预审核中<br>2、LEGAL-REVIEWING：法务审核中<br>3、CA-REVIEWING：CA审核中<br>4、PENDING-DCV：域名验证中<br>5、WAIT-ISSUE：等待签发（域名验证已通过）<br>//证书审核失败状态信息<br>1、订单审核失败<br>2、CA审核失败，域名未通过安全审查<br>3、域名验证超时，订单自动关闭，请您重新进行证书申请<br>4、证书资料未通过证书CA机构审核，审核人员会致电您证书预留的联系方式，请您留意来电。后续可通过“修改资料”重新提交资料<br>待持续完善</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusMsg(string $StatusMsg) 设置<p>状态信息。 取值范围：<br>//通用状态信息<br>1、PRE-REVIEWING：预审核中<br>2、LEGAL-REVIEWING：法务审核中<br>3、CA-REVIEWING：CA审核中<br>4、PENDING-DCV：域名验证中<br>5、WAIT-ISSUE：等待签发（域名验证已通过）<br>//证书审核失败状态信息<br>1、订单审核失败<br>2、CA审核失败，域名未通过安全审查<br>3、域名验证超时，订单自动关闭，请您重新进行证书申请<br>4、证书资料未通过证书CA机构审核，审核人员会致电您证书预留的联系方式，请您留意来电。后续可通过“修改资料”重新提交资料<br>待持续完善</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVerifyType() 获取<p>验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，DNS_PROXY = DNS代理验证。FILE_PROXY = 文件代理验证</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifyType(string $VerifyType) 设置<p>验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，DNS_PROXY = DNS代理验证。FILE_PROXY = 文件代理验证</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulnerabilityStatus() 获取<p>漏洞扫描状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulnerabilityStatus(string $VulnerabilityStatus) 设置<p>漏洞扫描状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertBeginTime() 获取<p>证书生效时间。时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertBeginTime(string $CertBeginTime) 设置<p>证书生效时间。时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertEndTime() 获取<p>证书失效时间。时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertEndTime(string $CertEndTime) 设置<p>证书失效时间。时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValidityPeriod() 获取<p>证书有效期：单位(月)。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValidityPeriod(string $ValidityPeriod) 设置<p>证书有效期：单位(月)。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInsertTime() 获取<p>申请时间。时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInsertTime(string $InsertTime) 设置<p>申请时间。时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderId() 获取<p>订单 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderId(string $OrderId) 设置<p>订单 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CertificateExtra getCertificateExtra() 获取<p>证书扩展信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificateExtra(CertificateExtra $CertificateExtra) 设置<p>证书扩展信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DvAuthDetail getDvAuthDetail() 获取<p>DV 认证信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvAuthDetail(DvAuthDetail $DvAuthDetail) 设置<p>DV 认证信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulnerabilityReport() 获取<p>漏洞扫描评估报告。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulnerabilityReport(string $VulnerabilityReport) 设置<p>漏洞扫描评估报告。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertificateId() 获取<p>证书 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificateId(string $CertificateId) 设置<p>证书 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageTypeName() 获取<p>证书类型名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageTypeName(string $PackageTypeName) 设置<p>证书类型名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusName() 获取<p>状态描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusName(string $StatusName) 设置<p>状态描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubjectAltName() 获取<p>证书包含的多个域名（包含主域名）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubjectAltName(array $SubjectAltName) 设置<p>证书包含的多个域名（包含主域名）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsVip() 获取<p>是否为 VIP 客户。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsVip(boolean $IsVip) 设置<p>是否为 VIP 客户。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsWildcard() 获取<p>是否为泛域名证书。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsWildcard(boolean $IsWildcard) 设置<p>是否为泛域名证书。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDv() 获取<p>是否为 DV 版证书。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDv(boolean $IsDv) 设置<p>是否为 DV 版证书。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsVulnerability() 获取<p>是否启用了漏洞扫描功能。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsVulnerability(boolean $IsVulnerability) 设置<p>是否启用了漏洞扫描功能。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRenewAble() 获取<p>是否可重颁发证书。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewAble(boolean $RenewAble) 设置<p>是否可重颁发证书。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SubmittedData getSubmittedData() 获取<p>提交的资料信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmittedData(SubmittedData $SubmittedData) 设置<p>提交的资料信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeployable() 获取<p>是否可部署。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployable(boolean $Deployable) 设置<p>是否可部署。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCAEncryptAlgorithms() 获取<p>CA证书的所有加密方式。仅证书类型CertificateType为CA有效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCAEncryptAlgorithms(array $CAEncryptAlgorithms) 设置<p>CA证书的所有加密方式。仅证书类型CertificateType为CA有效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCACommonNames() 获取<p>CA证书的所有通用名称。仅证书类型CertificateType为CA有效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCACommonNames(array $CACommonNames) 设置<p>CA证书的所有通用名称。仅证书类型CertificateType为CA有效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCAEndTimes() 获取<p>CA证书所有的到期时间。仅证书类型CertificateType为CA有效，时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCAEndTimes(array $CAEndTimes) 设置<p>CA证书所有的到期时间。仅证书类型CertificateType为CA有效，时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDvRevokeAuthDetail() 获取<p>DV证书吊销验证值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvRevokeAuthDetail(array $DvRevokeAuthDetail) 设置<p>DV证书吊销验证值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getResubmitAble() 获取<p>是否可重新提交。</p><p>默认值：false</p>
 * @method void setResubmitAble(boolean $ResubmitAble) 设置<p>是否可重新提交。</p><p>默认值：false</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCertificateResponse extends AbstractModel
{
    /**
     * @var string <p>用户 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string <p>项目 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>证书来源：<br>trustasia：亚洲诚信，<br>upload：用户上传。<br>wosign：沃通<br>sheca：上海CA</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $From;

    /**
     * @var string <p>证书类型：CA = 客户端证书，SVR = 服务器证书。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificateType;

    /**
     * @var string <p>证书套餐类型：<br>null：用户上传证书（没有套餐类型），<br>2：TrustAsia TLS RSA CA，<br>3：SecureSite 增强型企业版（EV Pro），<br>4：SecureSite 增强型（EV），<br>5：SecureSite 企业型专业版（OV Pro），<br>6：SecureSite 企业型（OV），<br>7：SecureSite 企业型（OV）通配符，<br>8：Geotrust 增强型（EV），<br>9：Geotrust 企业型（OV），<br>10：Geotrust 企业型（OV）通配符，<br>11：TrustAsia 域名型多域名 SSL 证书，<br>12：TrustAsia 域名型（DV）通配符，<br>13：TrustAsia 企业型通配符（OV）SSL 证书（D3），<br>14：TrustAsia 企业型（OV）SSL 证书（D3），<br>15：TrustAsia 企业型多域名 （OV）SSL 证书（D3），<br>16：TrustAsia 增强型 （EV）SSL 证书（D3），<br>17：TrustAsia 增强型多域名（EV）SSL 证书（D3），<br>18：GlobalSign 企业型（OV）SSL 证书，<br>19：GlobalSign 企业型通配符 （OV）SSL 证书，<br>20：GlobalSign 增强型 （EV）SSL 证书，<br>21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3），<br>22：GlobalSign 企业型多域名（OV）SSL 证书，<br>23：GlobalSign 企业型通配符多域名（OV）SSL 证书，<br>24：GlobalSign 增强型多域名（EV）SSL 证书，<br>25：Wotrus 域名型证书，<br>26：Wotrus 域名型多域名证书，<br>27：Wotrus 域名型通配符证书，<br>28：Wotrus 企业型证书，<br>29：Wotrus 企业型多域名证书，<br>30：Wotrus 企业型通配符证书，<br>31：Wotrus 增强型证书，<br>32：Wotrus 增强型多域名证书，<br>33：WoTrus-国密域名型证书，<br>34：WoTrus-国密域名型证书（多域名），<br>35：WoTrus-国密域名型证书（通配符），<br>37：WoTrus-国密企业型证书，<br>38：WoTrus-国密企业型证书（多域名），<br>39：WoTrus-国密企业型证书（通配符），<br>40：WoTrus-国密增强型证书，<br>41：WoTrus-国密增强型证书（多域名），<br>42：TrustAsia-域名型证书（通配符多域名），<br>43：DNSPod-企业型(OV)SSL证书<br>44：DNSPod-企业型(OV)通配符SSL证书<br>45：DNSPod-企业型(OV)多域名SSL证书<br>46：DNSPod-增强型(EV)SSL证书<br>47：DNSPod-增强型(EV)多域名SSL证书<br>48：DNSPod-域名型(DV)SSL证书<br>49：DNSPod-域名型(DV)通配符SSL证书<br>50：DNSPod-域名型(DV)多域名SSL证书<br>51：DNSPod（国密）-企业型(OV)SSL证书<br>52：DNSPod（国密）-企业型(OV)通配符SSL证书<br>53：DNSPod（国密）-企业型(OV)多域名SSL证书<br>54：DNSPod（国密）-域名型(DV)SSL证书<br>55：DNSPod（国密）-域名型(DV)通配符SSL证书<br>56：DNSPod（国密）-域名型(DV)多域名SSL证书<br>57：SecureSite 企业型专业版多域名(OV Pro)<br>58：SecureSite 企业型多域名(OV)<br>59：SecureSite 增强型专业版多域名(EV Pro)<br>60：SecureSite 增强型多域名(EV)<br>61：Geotrust 增强型多域名(EV)<br>75：SecureSite 企业型(OV)<br>76：SecureSite 企业型(OV)通配符<br>77：SecureSite 增强型(EV)<br>78：Geotrust 企业型(OV)<br>79：Geotrust 企业型(OV)通配符<br>80：Geotrust 增强型(EV)<br>81：GlobalSign 企业型（OV）SSL证书<br>82：GlobalSign 企业型通配符 （OV）SSL证书<br>83：TrustAsia C1 DV Free<br>85：GlobalSign 增强型 （EV）SSL证书<br>88：GlobalSign 企业型通配符多域名 （OV）SSL证书<br>89：GlobalSign 企业型多域名 （OV）SSL证书<br>90：GlobalSign 增强型多域名（EV） SSL证书<br>91：Geotrust 增强型多域名(EV)<br>92：SecureSite 企业型专业版多域名(OV Pro)<br>93：SecureSite 企业型多域名(OV)<br>94：SecureSite 增强型专业版多域名(EV Pro)<br>95：SecureSite 增强型多域名(EV)<br>96：SecureSite 增强型专业版(EV Pro)<br>97：SecureSite 企业型专业版(OV Pro)<br>98：CFCA 企业型(OV)SSL证书<br>99：CFCA 企业型多域名(OV)SSL证书<br>100：CFCA 企业型通配符(OV)SSL证书<br>101：CFCA 增强型(EV)SSL证书</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageType;

    /**
     * @var string <p>证书产品名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductZhName;

    /**
     * @var string <p>域名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var string <p>备注名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alias;

    /**
     * @var integer <p>证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 自动添加DNS记录，5 = 企业证书，待提交资料，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 证书已退款。 15 = 证书迁移中</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>状态信息。 取值范围：<br>//通用状态信息<br>1、PRE-REVIEWING：预审核中<br>2、LEGAL-REVIEWING：法务审核中<br>3、CA-REVIEWING：CA审核中<br>4、PENDING-DCV：域名验证中<br>5、WAIT-ISSUE：等待签发（域名验证已通过）<br>//证书审核失败状态信息<br>1、订单审核失败<br>2、CA审核失败，域名未通过安全审查<br>3、域名验证超时，订单自动关闭，请您重新进行证书申请<br>4、证书资料未通过证书CA机构审核，审核人员会致电您证书预留的联系方式，请您留意来电。后续可通过“修改资料”重新提交资料<br>待持续完善</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusMsg;

    /**
     * @var string <p>验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，DNS_PROXY = DNS代理验证。FILE_PROXY = 文件代理验证</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifyType;

    /**
     * @var string <p>漏洞扫描状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
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
     * @var string <p>证书有效期：单位(月)。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValidityPeriod;

    /**
     * @var string <p>申请时间。时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InsertTime;

    /**
     * @var string <p>订单 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderId;

    /**
     * @var CertificateExtra <p>证书扩展信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificateExtra;

    /**
     * @var DvAuthDetail <p>DV 认证信息。</p>
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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificateId;

    /**
     * @var string <p>证书类型名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageTypeName;

    /**
     * @var string <p>状态描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusName;

    /**
     * @var array <p>证书包含的多个域名（包含主域名）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubjectAltName;

    /**
     * @var boolean <p>是否为 VIP 客户。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsVip;

    /**
     * @var boolean <p>是否为泛域名证书。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsWildcard;

    /**
     * @var boolean <p>是否为 DV 版证书。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDv;

    /**
     * @var boolean <p>是否启用了漏洞扫描功能。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsVulnerability;

    /**
     * @var boolean <p>是否可重颁发证书。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewAble;

    /**
     * @var SubmittedData <p>提交的资料信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubmittedData;

    /**
     * @var boolean <p>是否可部署。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Deployable;

    /**
     * @var array <p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array <p>CA证书的所有加密方式。仅证书类型CertificateType为CA有效</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CAEncryptAlgorithms;

    /**
     * @var array <p>CA证书的所有通用名称。仅证书类型CertificateType为CA有效</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CACommonNames;

    /**
     * @var array <p>CA证书所有的到期时间。仅证书类型CertificateType为CA有效，时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CAEndTimes;

    /**
     * @var array <p>DV证书吊销验证值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DvRevokeAuthDetail;

    /**
     * @var boolean <p>是否可重新提交。</p><p>默认值：false</p>
     */
    public $ResubmitAble;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $OwnerUin <p>用户 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId <p>项目 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $From <p>证书来源：<br>trustasia：亚洲诚信，<br>upload：用户上传。<br>wosign：沃通<br>sheca：上海CA</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertificateType <p>证书类型：CA = 客户端证书，SVR = 服务器证书。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageType <p>证书套餐类型：<br>null：用户上传证书（没有套餐类型），<br>2：TrustAsia TLS RSA CA，<br>3：SecureSite 增强型企业版（EV Pro），<br>4：SecureSite 增强型（EV），<br>5：SecureSite 企业型专业版（OV Pro），<br>6：SecureSite 企业型（OV），<br>7：SecureSite 企业型（OV）通配符，<br>8：Geotrust 增强型（EV），<br>9：Geotrust 企业型（OV），<br>10：Geotrust 企业型（OV）通配符，<br>11：TrustAsia 域名型多域名 SSL 证书，<br>12：TrustAsia 域名型（DV）通配符，<br>13：TrustAsia 企业型通配符（OV）SSL 证书（D3），<br>14：TrustAsia 企业型（OV）SSL 证书（D3），<br>15：TrustAsia 企业型多域名 （OV）SSL 证书（D3），<br>16：TrustAsia 增强型 （EV）SSL 证书（D3），<br>17：TrustAsia 增强型多域名（EV）SSL 证书（D3），<br>18：GlobalSign 企业型（OV）SSL 证书，<br>19：GlobalSign 企业型通配符 （OV）SSL 证书，<br>20：GlobalSign 增强型 （EV）SSL 证书，<br>21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3），<br>22：GlobalSign 企业型多域名（OV）SSL 证书，<br>23：GlobalSign 企业型通配符多域名（OV）SSL 证书，<br>24：GlobalSign 增强型多域名（EV）SSL 证书，<br>25：Wotrus 域名型证书，<br>26：Wotrus 域名型多域名证书，<br>27：Wotrus 域名型通配符证书，<br>28：Wotrus 企业型证书，<br>29：Wotrus 企业型多域名证书，<br>30：Wotrus 企业型通配符证书，<br>31：Wotrus 增强型证书，<br>32：Wotrus 增强型多域名证书，<br>33：WoTrus-国密域名型证书，<br>34：WoTrus-国密域名型证书（多域名），<br>35：WoTrus-国密域名型证书（通配符），<br>37：WoTrus-国密企业型证书，<br>38：WoTrus-国密企业型证书（多域名），<br>39：WoTrus-国密企业型证书（通配符），<br>40：WoTrus-国密增强型证书，<br>41：WoTrus-国密增强型证书（多域名），<br>42：TrustAsia-域名型证书（通配符多域名），<br>43：DNSPod-企业型(OV)SSL证书<br>44：DNSPod-企业型(OV)通配符SSL证书<br>45：DNSPod-企业型(OV)多域名SSL证书<br>46：DNSPod-增强型(EV)SSL证书<br>47：DNSPod-增强型(EV)多域名SSL证书<br>48：DNSPod-域名型(DV)SSL证书<br>49：DNSPod-域名型(DV)通配符SSL证书<br>50：DNSPod-域名型(DV)多域名SSL证书<br>51：DNSPod（国密）-企业型(OV)SSL证书<br>52：DNSPod（国密）-企业型(OV)通配符SSL证书<br>53：DNSPod（国密）-企业型(OV)多域名SSL证书<br>54：DNSPod（国密）-域名型(DV)SSL证书<br>55：DNSPod（国密）-域名型(DV)通配符SSL证书<br>56：DNSPod（国密）-域名型(DV)多域名SSL证书<br>57：SecureSite 企业型专业版多域名(OV Pro)<br>58：SecureSite 企业型多域名(OV)<br>59：SecureSite 增强型专业版多域名(EV Pro)<br>60：SecureSite 增强型多域名(EV)<br>61：Geotrust 增强型多域名(EV)<br>75：SecureSite 企业型(OV)<br>76：SecureSite 企业型(OV)通配符<br>77：SecureSite 增强型(EV)<br>78：Geotrust 企业型(OV)<br>79：Geotrust 企业型(OV)通配符<br>80：Geotrust 增强型(EV)<br>81：GlobalSign 企业型（OV）SSL证书<br>82：GlobalSign 企业型通配符 （OV）SSL证书<br>83：TrustAsia C1 DV Free<br>85：GlobalSign 增强型 （EV）SSL证书<br>88：GlobalSign 企业型通配符多域名 （OV）SSL证书<br>89：GlobalSign 企业型多域名 （OV）SSL证书<br>90：GlobalSign 增强型多域名（EV） SSL证书<br>91：Geotrust 增强型多域名(EV)<br>92：SecureSite 企业型专业版多域名(OV Pro)<br>93：SecureSite 企业型多域名(OV)<br>94：SecureSite 增强型专业版多域名(EV Pro)<br>95：SecureSite 增强型多域名(EV)<br>96：SecureSite 增强型专业版(EV Pro)<br>97：SecureSite 企业型专业版(OV Pro)<br>98：CFCA 企业型(OV)SSL证书<br>99：CFCA 企业型多域名(OV)SSL证书<br>100：CFCA 企业型通配符(OV)SSL证书<br>101：CFCA 增强型(EV)SSL证书</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductZhName <p>证书产品名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain <p>域名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Alias <p>备注名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 自动添加DNS记录，5 = 企业证书，待提交资料，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 证书已退款。 15 = 证书迁移中</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusMsg <p>状态信息。 取值范围：<br>//通用状态信息<br>1、PRE-REVIEWING：预审核中<br>2、LEGAL-REVIEWING：法务审核中<br>3、CA-REVIEWING：CA审核中<br>4、PENDING-DCV：域名验证中<br>5、WAIT-ISSUE：等待签发（域名验证已通过）<br>//证书审核失败状态信息<br>1、订单审核失败<br>2、CA审核失败，域名未通过安全审查<br>3、域名验证超时，订单自动关闭，请您重新进行证书申请<br>4、证书资料未通过证书CA机构审核，审核人员会致电您证书预留的联系方式，请您留意来电。后续可通过“修改资料”重新提交资料<br>待持续完善</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VerifyType <p>验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，DNS_PROXY = DNS代理验证。FILE_PROXY = 文件代理验证</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulnerabilityStatus <p>漏洞扫描状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertBeginTime <p>证书生效时间。时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertEndTime <p>证书失效时间。时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValidityPeriod <p>证书有效期：单位(月)。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InsertTime <p>申请时间。时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderId <p>订单 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CertificateExtra $CertificateExtra <p>证书扩展信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DvAuthDetail $DvAuthDetail <p>DV 认证信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulnerabilityReport <p>漏洞扫描评估报告。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertificateId <p>证书 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageTypeName <p>证书类型名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusName <p>状态描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubjectAltName <p>证书包含的多个域名（包含主域名）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsVip <p>是否为 VIP 客户。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsWildcard <p>是否为泛域名证书。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDv <p>是否为 DV 版证书。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsVulnerability <p>是否启用了漏洞扫描功能。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RenewAble <p>是否可重颁发证书。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SubmittedData $SubmittedData <p>提交的资料信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Deployable <p>是否可部署。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CAEncryptAlgorithms <p>CA证书的所有加密方式。仅证书类型CertificateType为CA有效</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CACommonNames <p>CA证书的所有通用名称。仅证书类型CertificateType为CA有效</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CAEndTimes <p>CA证书所有的到期时间。仅证书类型CertificateType为CA有效，时区为GMT+8:00</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DvRevokeAuthDetail <p>DV证书吊销验证值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ResubmitAble <p>是否可重新提交。</p><p>默认值：false</p>
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

        if (array_key_exists("PackageTypeName",$param) and $param["PackageTypeName"] !== null) {
            $this->PackageTypeName = $param["PackageTypeName"];
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

        if (array_key_exists("RenewAble",$param) and $param["RenewAble"] !== null) {
            $this->RenewAble = $param["RenewAble"];
        }

        if (array_key_exists("SubmittedData",$param) and $param["SubmittedData"] !== null) {
            $this->SubmittedData = new SubmittedData();
            $this->SubmittedData->deserialize($param["SubmittedData"]);
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

        if (array_key_exists("CAEncryptAlgorithms",$param) and $param["CAEncryptAlgorithms"] !== null) {
            $this->CAEncryptAlgorithms = $param["CAEncryptAlgorithms"];
        }

        if (array_key_exists("CACommonNames",$param) and $param["CACommonNames"] !== null) {
            $this->CACommonNames = $param["CACommonNames"];
        }

        if (array_key_exists("CAEndTimes",$param) and $param["CAEndTimes"] !== null) {
            $this->CAEndTimes = $param["CAEndTimes"];
        }

        if (array_key_exists("DvRevokeAuthDetail",$param) and $param["DvRevokeAuthDetail"] !== null) {
            $this->DvRevokeAuthDetail = [];
            foreach ($param["DvRevokeAuthDetail"] as $key => $value){
                $obj = new DvAuths();
                $obj->deserialize($value);
                array_push($this->DvRevokeAuthDetail, $obj);
            }
        }

        if (array_key_exists("ResubmitAble",$param) and $param["ResubmitAble"] !== null) {
            $this->ResubmitAble = $param["ResubmitAble"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
