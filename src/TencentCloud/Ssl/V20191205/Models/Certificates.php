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
 * 获取证书列表（DescribeCertificates）返回参数键为 Certificates 的内容。
 *
 * @method string getOwnerUin() 获取<p>用户 UIN。</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>用户 UIN。</p>
 * @method string getProjectId() 获取<p>项目 ID。</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目 ID。</p>
 * @method string getFrom() 获取<p>证书来源：trustasia：亚洲诚信，upload：用户上传。wosign：沃通sheca：上海CA</p>
 * @method void setFrom(string $From) 设置<p>证书来源：trustasia：亚洲诚信，upload：用户上传。wosign：沃通sheca：上海CA</p>
 * @method string getPackageType() 获取<p>证书套餐类型：null：用户上传证书（没有套餐类型），2：TrustAsia TLS RSA CA， 3：SecureSite 增强型企业版（EV Pro）， 4：SecureSite 增强型（EV）， 5：SecureSite 企业型专业版（OV Pro），6：SecureSite 企业型（OV）， 7：SecureSite 企业型（OV）通配符， 8：Geotrust 增强型（EV）， 9：Geotrust 企业型（OV）， 10：Geotrust 企业型（OV）通配符， 11：TrustAsia 域名型多域名 SSL 证书， 12：TrustAsia 域名型（DV）通配符， 13：TrustAsia 企业型通配符（OV）SSL 证书（D3）， 14：TrustAsia 企业型（OV）SSL 证书（D3）， 15：TrustAsia 企业型多域名 （OV）SSL 证书（D3）， 16：TrustAsia 增强型 （EV）SSL 证书（D3）， 17：TrustAsia 增强型多域名（EV）SSL 证书（D3）， 18：GlobalSign 企业型（OV）SSL 证书， 19：GlobalSign 企业型通配符 （OV）SSL 证书， 20：GlobalSign 增强型 （EV）SSL 证书， 21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3）， 22：GlobalSign 企业型多域名（OV）SSL 证书， 23：GlobalSign 企业型通配符多域名（OV）SSL 证书，24：GlobalSign 增强型多域名（EV）SSL 证书，25：Wotrus 域名型证书，26：Wotrus 域名型多域名证书，27：Wotrus 域名型通配符证书，28：Wotrus 企业型证书，29：Wotrus 企业型多域名证书，30：Wotrus 企业型通配符证书，31：Wotrus 增强型证书，32：Wotrus 增强型多域名证书，33：WoTrus-国密域名型证书，34：WoTrus-国密域名型证书（多域名），35：WoTrus-国密域名型证书（通配符），37：WoTrus-国密企业型证书，38：WoTrus-国密企业型证书（多域名），39：WoTrus-国密企业型证书（通配符），40：WoTrus-国密增强型证书，41：WoTrus-国密增强型证书（多域名），42：TrustAsia-域名型证书（通配符多域名），43：DNSPod-企业型(OV)SSL证书44：DNSPod-企业型(OV)通配符SSL证书45：DNSPod-企业型(OV)多域名SSL证书46：DNSPod-增强型(EV)SSL证书47：DNSPod-增强型(EV)多域名SSL证书48：DNSPod-域名型(DV)SSL证书49：DNSPod-域名型(DV)通配符SSL证书50：DNSPod-域名型(DV)多域名SSL证书51：DNSPod（国密）-企业型(OV)SSL证书52：DNSPod（国密）-企业型(OV)通配符SSL证书53：DNSPod（国密）-企业型(OV)多域名SSL证书54：DNSPod（国密）-域名型(DV)SSL证书55：DNSPod（国密）-域名型(DV)通配符SSL证书56：DNSPod（国密）-域名型(DV)多域名SSL证书57：SecureSite 企业型专业版多域名(OV Pro)58：SecureSite 企业型多域名(OV)59：SecureSite 增强型专业版多域名(EV Pro)60：SecureSite 增强型多域名(EV)61：Geotrust 增强型多域名(EV)75：SecureSite 企业型(OV)76：SecureSite 企业型(OV)通配符77：SecureSite 增强型(EV)78：Geotrust 企业型(OV)79：Geotrust 企业型(OV)通配符80：Geotrust 增强型(EV)81：GlobalSign 企业型（OV）SSL证书82：GlobalSign 企业型通配符 （OV）SSL证书83：TrustAsia C1 DV Free85：GlobalSign 增强型 （EV）SSL证书88：GlobalSign 企业型通配符多域名 （OV）SSL证书89：GlobalSign 企业型多域名 （OV）SSL证书90：GlobalSign 增强型多域名（EV） SSL证书91：Geotrust 增强型多域名(EV)92：SecureSite 企业型专业版多域名(OV Pro)93：SecureSite 企业型多域名(OV)94：SecureSite 增强型专业版多域名(EV Pro)95：SecureSite 增强型多域名(EV)96：SecureSite 增强型专业版(EV Pro)97：SecureSite 企业型专业版(OV Pro)98：CFCA 企业型(OV)SSL证书99：CFCA 企业型多域名(OV)SSL证书100：CFCA 企业型通配符(OV)SSL证书101：CFCA 增强型(EV)SSL证书</p>
 * @method void setPackageType(string $PackageType) 设置<p>证书套餐类型：null：用户上传证书（没有套餐类型），2：TrustAsia TLS RSA CA， 3：SecureSite 增强型企业版（EV Pro）， 4：SecureSite 增强型（EV）， 5：SecureSite 企业型专业版（OV Pro），6：SecureSite 企业型（OV）， 7：SecureSite 企业型（OV）通配符， 8：Geotrust 增强型（EV）， 9：Geotrust 企业型（OV）， 10：Geotrust 企业型（OV）通配符， 11：TrustAsia 域名型多域名 SSL 证书， 12：TrustAsia 域名型（DV）通配符， 13：TrustAsia 企业型通配符（OV）SSL 证书（D3）， 14：TrustAsia 企业型（OV）SSL 证书（D3）， 15：TrustAsia 企业型多域名 （OV）SSL 证书（D3）， 16：TrustAsia 增强型 （EV）SSL 证书（D3）， 17：TrustAsia 增强型多域名（EV）SSL 证书（D3）， 18：GlobalSign 企业型（OV）SSL 证书， 19：GlobalSign 企业型通配符 （OV）SSL 证书， 20：GlobalSign 增强型 （EV）SSL 证书， 21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3）， 22：GlobalSign 企业型多域名（OV）SSL 证书， 23：GlobalSign 企业型通配符多域名（OV）SSL 证书，24：GlobalSign 增强型多域名（EV）SSL 证书，25：Wotrus 域名型证书，26：Wotrus 域名型多域名证书，27：Wotrus 域名型通配符证书，28：Wotrus 企业型证书，29：Wotrus 企业型多域名证书，30：Wotrus 企业型通配符证书，31：Wotrus 增强型证书，32：Wotrus 增强型多域名证书，33：WoTrus-国密域名型证书，34：WoTrus-国密域名型证书（多域名），35：WoTrus-国密域名型证书（通配符），37：WoTrus-国密企业型证书，38：WoTrus-国密企业型证书（多域名），39：WoTrus-国密企业型证书（通配符），40：WoTrus-国密增强型证书，41：WoTrus-国密增强型证书（多域名），42：TrustAsia-域名型证书（通配符多域名），43：DNSPod-企业型(OV)SSL证书44：DNSPod-企业型(OV)通配符SSL证书45：DNSPod-企业型(OV)多域名SSL证书46：DNSPod-增强型(EV)SSL证书47：DNSPod-增强型(EV)多域名SSL证书48：DNSPod-域名型(DV)SSL证书49：DNSPod-域名型(DV)通配符SSL证书50：DNSPod-域名型(DV)多域名SSL证书51：DNSPod（国密）-企业型(OV)SSL证书52：DNSPod（国密）-企业型(OV)通配符SSL证书53：DNSPod（国密）-企业型(OV)多域名SSL证书54：DNSPod（国密）-域名型(DV)SSL证书55：DNSPod（国密）-域名型(DV)通配符SSL证书56：DNSPod（国密）-域名型(DV)多域名SSL证书57：SecureSite 企业型专业版多域名(OV Pro)58：SecureSite 企业型多域名(OV)59：SecureSite 增强型专业版多域名(EV Pro)60：SecureSite 增强型多域名(EV)61：Geotrust 增强型多域名(EV)75：SecureSite 企业型(OV)76：SecureSite 企业型(OV)通配符77：SecureSite 增强型(EV)78：Geotrust 企业型(OV)79：Geotrust 企业型(OV)通配符80：Geotrust 增强型(EV)81：GlobalSign 企业型（OV）SSL证书82：GlobalSign 企业型通配符 （OV）SSL证书83：TrustAsia C1 DV Free85：GlobalSign 增强型 （EV）SSL证书88：GlobalSign 企业型通配符多域名 （OV）SSL证书89：GlobalSign 企业型多域名 （OV）SSL证书90：GlobalSign 增强型多域名（EV） SSL证书91：Geotrust 增强型多域名(EV)92：SecureSite 企业型专业版多域名(OV Pro)93：SecureSite 企业型多域名(OV)94：SecureSite 增强型专业版多域名(EV Pro)95：SecureSite 增强型多域名(EV)96：SecureSite 增强型专业版(EV Pro)97：SecureSite 企业型专业版(OV Pro)98：CFCA 企业型(OV)SSL证书99：CFCA 企业型多域名(OV)SSL证书100：CFCA 企业型通配符(OV)SSL证书101：CFCA 增强型(EV)SSL证书</p>
 * @method string getCertificateType() 获取<p>证书类型：CA = 客户端证书，SVR = 服务器证书。</p>
 * @method void setCertificateType(string $CertificateType) 设置<p>证书类型：CA = 客户端证书，SVR = 服务器证书。</p>
 * @method string getProductZhName() 获取<p>证书产品名称</p>
 * @method void setProductZhName(string $ProductZhName) 设置<p>证书产品名称</p>
 * @method string getDomain() 获取<p>主域名。</p>
 * @method void setDomain(string $Domain) 设置<p>主域名。</p>
 * @method string getAlias() 获取<p>备注名称。</p>
 * @method void setAlias(string $Alias) 设置<p>备注名称。</p>
 * @method integer getStatus() 获取<p>证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 自动添加DNS记录，5 = 企业证书，待提交资料，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 证书已退款。 15 = 证书迁移中</p>
 * @method void setStatus(integer $Status) 设置<p>证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 自动添加DNS记录，5 = 企业证书，待提交资料，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 证书已退款。 15 = 证书迁移中</p>
 * @method CertificateExtra getCertificateExtra() 获取<p>证书扩展信息。</p>
 * @method void setCertificateExtra(CertificateExtra $CertificateExtra) 设置<p>证书扩展信息。</p>
 * @method string getVulnerabilityStatus() 获取<p>漏洞扫描状态：INACTIVE = 未开启，ACTIVE = 已开启</p>
 * @method void setVulnerabilityStatus(string $VulnerabilityStatus) 设置<p>漏洞扫描状态：INACTIVE = 未开启，ACTIVE = 已开启</p>
 * @method string getStatusMsg() 获取<p>状态信息。</p>
 * @method void setStatusMsg(string $StatusMsg) 设置<p>状态信息。</p>
 * @method string getVerifyType() 获取<p>验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，DNS_PROXY = DNS代理验证。FILE_PROXY = 文件代理验证</p>
 * @method void setVerifyType(string $VerifyType) 设置<p>验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，DNS_PROXY = DNS代理验证。FILE_PROXY = 文件代理验证</p>
 * @method string getCertBeginTime() 获取<p>证书生效时间。时区为GMT+8:00</p>
 * @method void setCertBeginTime(string $CertBeginTime) 设置<p>证书生效时间。时区为GMT+8:00</p>
 * @method string getCertEndTime() 获取<p>证书过期时间。时区为GMT+8:00</p>
 * @method void setCertEndTime(string $CertEndTime) 设置<p>证书过期时间。时区为GMT+8:00</p>
 * @method string getValidityPeriod() 获取<p>证书有效期，单位（月）。</p>
 * @method void setValidityPeriod(string $ValidityPeriod) 设置<p>证书有效期，单位（月）。</p>
 * @method string getInsertTime() 获取<p>创建时间。时区为GMT+8:00</p>
 * @method void setInsertTime(string $InsertTime) 设置<p>创建时间。时区为GMT+8:00</p>
 * @method string getCertificateId() 获取<p>证书 ID。</p>
 * @method void setCertificateId(string $CertificateId) 设置<p>证书 ID。</p>
 * @method array getSubjectAltName() 获取<p>证书包含的多个域名（包含主域名）。</p>
 * @method void setSubjectAltName(array $SubjectAltName) 设置<p>证书包含的多个域名（包含主域名）。</p>
 * @method string getPackageTypeName() 获取<p>证书类型名称。</p>
 * @method void setPackageTypeName(string $PackageTypeName) 设置<p>证书类型名称。</p>
 * @method string getStatusName() 获取<p>状态名称。</p>
 * @method void setStatusName(string $StatusName) 设置<p>状态名称。</p>
 * @method boolean getIsVip() 获取<p>是否为 VIP 客户。</p>
 * @method void setIsVip(boolean $IsVip) 设置<p>是否为 VIP 客户。</p>
 * @method boolean getIsDv() 获取<p>是否为 DV 版证书。</p>
 * @method void setIsDv(boolean $IsDv) 设置<p>是否为 DV 版证书。</p>
 * @method boolean getIsWildcard() 获取<p>是否为泛域名证书。</p>
 * @method void setIsWildcard(boolean $IsWildcard) 设置<p>是否为泛域名证书。</p>
 * @method boolean getIsVulnerability() 获取<p>是否启用了漏洞扫描功能。</p>
 * @method void setIsVulnerability(boolean $IsVulnerability) 设置<p>是否启用了漏洞扫描功能。</p>
 * @method boolean getRenewAble() 获取<p>是否可续费。</p>
 * @method void setRenewAble(boolean $RenewAble) 设置<p>是否可续费。</p>
 * @method ProjectInfo getProjectInfo() 获取<p>项目信息。</p>
 * @method void setProjectInfo(ProjectInfo $ProjectInfo) 设置<p>项目信息。</p>
 * @method array getBoundResource() 获取<p>关联的云资源，暂不可用</p>
 * @method void setBoundResource(array $BoundResource) 设置<p>关联的云资源，暂不可用</p>
 * @method boolean getDeployable() 获取<p>是否可部署。</p>
 * @method void setDeployable(boolean $Deployable) 设置<p>是否可部署。</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 * @method boolean getIsIgnore() 获取<p>是否已忽略到期通知</p>
 * @method void setIsIgnore(boolean $IsIgnore) 设置<p>是否已忽略到期通知</p>
 * @method boolean getIsSM() 获取<p>是否国密证书</p>
 * @method void setIsSM(boolean $IsSM) 设置<p>是否国密证书</p>
 * @method string getEncryptAlgorithm() 获取<p>证书算法</p>
 * @method void setEncryptAlgorithm(string $EncryptAlgorithm) 设置<p>证书算法</p>
 * @method array getCAEncryptAlgorithms() 获取<p>上传CA证书的加密算法</p>
 * @method void setCAEncryptAlgorithms(array $CAEncryptAlgorithms) 设置<p>上传CA证书的加密算法</p>
 * @method array getCAEndTimes() 获取<p>上传CA证书的过期时间</p>
 * @method void setCAEndTimes(array $CAEndTimes) 设置<p>上传CA证书的过期时间</p>
 * @method array getCACommonNames() 获取<p>上传CA证书的通用名称</p>
 * @method void setCACommonNames(array $CACommonNames) 设置<p>上传CA证书的通用名称</p>
 * @method PreAuditInfo getPreAuditInfo() 获取<p>证书预审核信息</p>
 * @method void setPreAuditInfo(PreAuditInfo $PreAuditInfo) 设置<p>证书预审核信息</p>
 * @method integer getAutoRenewFlag() 获取<p>是否自动续费</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>是否自动续费</p>
 * @method integer getHostingStatus() 获取<p>托管状态，0，托管中，5，资源替换中， 10， 托管完成， -1未托管 </p>
 * @method void setHostingStatus(integer $HostingStatus) 设置<p>托管状态，0，托管中，5，资源替换中， 10， 托管完成， -1未托管 </p>
 * @method string getHostingCompleteTime() 获取<p>托管完成时间</p>
 * @method void setHostingCompleteTime(string $HostingCompleteTime) 设置<p>托管完成时间</p>
 * @method string getHostingRenewCertId() 获取<p>托管新证书ID</p>
 * @method void setHostingRenewCertId(string $HostingRenewCertId) 设置<p>托管新证书ID</p>
 * @method string getHasRenewOrder() 获取<p>存在的续费证书ID</p>
 * @method void setHasRenewOrder(string $HasRenewOrder) 设置<p>存在的续费证书ID</p>
 * @method boolean getReplaceOriCertIsDelete() 获取<p>重颁发证书原证书是否删除</p>
 * @method void setReplaceOriCertIsDelete(boolean $ReplaceOriCertIsDelete) 设置<p>重颁发证书原证书是否删除</p>
 * @method boolean getIsExpiring() 获取<p>是否即将过期， 证书即将到期的30天内为即将过期</p>
 * @method void setIsExpiring(boolean $IsExpiring) 设置<p>是否即将过期， 证书即将到期的30天内为即将过期</p>
 * @method string getDVAuthDeadline() 获取<p>DV证书添加验证截止时间，时区为GMT+8:00</p>
 * @method void setDVAuthDeadline(string $DVAuthDeadline) 设置<p>DV证书添加验证截止时间，时区为GMT+8:00</p>
 * @method string getValidationPassedTime() 获取<p>域名验证通过时间，时区为GMT+8:00</p>
 * @method void setValidationPassedTime(string $ValidationPassedTime) 设置<p>域名验证通过时间，时区为GMT+8:00</p>
 * @method array getCertSANs() 获取<p>证书关联的多域名</p>
 * @method void setCertSANs(array $CertSANs) 设置<p>证书关联的多域名</p>
 * @method string getAwaitingValidationMsg() 获取<p>域名验证驳回信息</p>
 * @method void setAwaitingValidationMsg(string $AwaitingValidationMsg) 设置<p>域名验证驳回信息</p>
 * @method boolean getAllowDownload() 获取<p>是否允许下载</p>
 * @method void setAllowDownload(boolean $AllowDownload) 设置<p>是否允许下载</p>
 * @method boolean getIsDNSPODResolve() 获取<p>证书域名是否全部在DNSPOD托管解析</p>
 * @method void setIsDNSPODResolve(boolean $IsDNSPODResolve) 设置<p>证书域名是否全部在DNSPOD托管解析</p>
 * @method boolean getIsPackage() 获取<p>是否是权益点购买的证书</p>
 * @method void setIsPackage(boolean $IsPackage) 设置<p>是否是权益点购买的证书</p>
 * @method boolean getKeyPasswordCustomFlag() 获取<p>是否存在私钥密码</p>
 * @method void setKeyPasswordCustomFlag(boolean $KeyPasswordCustomFlag) 设置<p>是否存在私钥密码</p>
 * @method SupportDownloadType getSupportDownloadType() 获取<p>支持下载的WEB服务器类型： nginx、apache、iis、tomcat、jks、root、other</p>
 * @method void setSupportDownloadType(SupportDownloadType $SupportDownloadType) 设置<p>支持下载的WEB服务器类型： nginx、apache、iis、tomcat、jks、root、other</p>
 * @method string getCertRevokedTime() 获取<p>证书吊销完成时间，时区为GMT+8:00</p>
 * @method void setCertRevokedTime(string $CertRevokedTime) 设置<p>证书吊销完成时间，时区为GMT+8:00</p>
 * @method array getHostingResourceTypes() 获取<p>托管资源类型列表</p>
 * @method void setHostingResourceTypes(array $HostingResourceTypes) 设置<p>托管资源类型列表</p>
 * @method HostingConfig getHostingConfig() 获取<p>托管配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostingConfig(HostingConfig $HostingConfig) 设置<p>托管配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsHostingUploadRenewCert() 获取<p>是否是上传托管续费证书</p>
 * @method void setIsHostingUploadRenewCert(boolean $IsHostingUploadRenewCert) 设置<p>是否是上传托管续费证书</p>
 * @method string getServiceId() 获取<p>订阅服务ID</p>
 * @method void setServiceId(string $ServiceId) 设置<p>订阅服务ID</p>
 * @method string getServiceStatus() 获取<p>订阅服务状态</p>枚举值：<ul><li> initing： 未激活</li><li> running： 生效中</li><li> expired： 已过期</li><li> refunded： 已退款</li><li> nearExpire： 即将到期</li></ul>
 * @method void setServiceStatus(string $ServiceStatus) 设置<p>订阅服务状态</p>枚举值：<ul><li> initing： 未激活</li><li> running： 生效中</li><li> expired： 已过期</li><li> refunded： 已退款</li><li> nearExpire： 即将到期</li></ul>
 * @method string getCertServiceBeginTime() 获取<p>订阅服务开始时间</p>
 * @method void setCertServiceBeginTime(string $CertServiceBeginTime) 设置<p>订阅服务开始时间</p>
 * @method string getCertServiceEndTime() 获取<p>订阅服务结束时间</p>
 * @method void setCertServiceEndTime(string $CertServiceEndTime) 设置<p>订阅服务结束时间</p>
 */
class Certificates extends AbstractModel
{
    /**
     * @var string <p>用户 UIN。</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>项目 ID。</p>
     */
    public $ProjectId;

    /**
     * @var string <p>证书来源：trustasia：亚洲诚信，upload：用户上传。wosign：沃通sheca：上海CA</p>
     */
    public $From;

    /**
     * @var string <p>证书套餐类型：null：用户上传证书（没有套餐类型），2：TrustAsia TLS RSA CA， 3：SecureSite 增强型企业版（EV Pro）， 4：SecureSite 增强型（EV）， 5：SecureSite 企业型专业版（OV Pro），6：SecureSite 企业型（OV）， 7：SecureSite 企业型（OV）通配符， 8：Geotrust 增强型（EV）， 9：Geotrust 企业型（OV）， 10：Geotrust 企业型（OV）通配符， 11：TrustAsia 域名型多域名 SSL 证书， 12：TrustAsia 域名型（DV）通配符， 13：TrustAsia 企业型通配符（OV）SSL 证书（D3）， 14：TrustAsia 企业型（OV）SSL 证书（D3）， 15：TrustAsia 企业型多域名 （OV）SSL 证书（D3）， 16：TrustAsia 增强型 （EV）SSL 证书（D3）， 17：TrustAsia 增强型多域名（EV）SSL 证书（D3）， 18：GlobalSign 企业型（OV）SSL 证书， 19：GlobalSign 企业型通配符 （OV）SSL 证书， 20：GlobalSign 增强型 （EV）SSL 证书， 21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3）， 22：GlobalSign 企业型多域名（OV）SSL 证书， 23：GlobalSign 企业型通配符多域名（OV）SSL 证书，24：GlobalSign 增强型多域名（EV）SSL 证书，25：Wotrus 域名型证书，26：Wotrus 域名型多域名证书，27：Wotrus 域名型通配符证书，28：Wotrus 企业型证书，29：Wotrus 企业型多域名证书，30：Wotrus 企业型通配符证书，31：Wotrus 增强型证书，32：Wotrus 增强型多域名证书，33：WoTrus-国密域名型证书，34：WoTrus-国密域名型证书（多域名），35：WoTrus-国密域名型证书（通配符），37：WoTrus-国密企业型证书，38：WoTrus-国密企业型证书（多域名），39：WoTrus-国密企业型证书（通配符），40：WoTrus-国密增强型证书，41：WoTrus-国密增强型证书（多域名），42：TrustAsia-域名型证书（通配符多域名），43：DNSPod-企业型(OV)SSL证书44：DNSPod-企业型(OV)通配符SSL证书45：DNSPod-企业型(OV)多域名SSL证书46：DNSPod-增强型(EV)SSL证书47：DNSPod-增强型(EV)多域名SSL证书48：DNSPod-域名型(DV)SSL证书49：DNSPod-域名型(DV)通配符SSL证书50：DNSPod-域名型(DV)多域名SSL证书51：DNSPod（国密）-企业型(OV)SSL证书52：DNSPod（国密）-企业型(OV)通配符SSL证书53：DNSPod（国密）-企业型(OV)多域名SSL证书54：DNSPod（国密）-域名型(DV)SSL证书55：DNSPod（国密）-域名型(DV)通配符SSL证书56：DNSPod（国密）-域名型(DV)多域名SSL证书57：SecureSite 企业型专业版多域名(OV Pro)58：SecureSite 企业型多域名(OV)59：SecureSite 增强型专业版多域名(EV Pro)60：SecureSite 增强型多域名(EV)61：Geotrust 增强型多域名(EV)75：SecureSite 企业型(OV)76：SecureSite 企业型(OV)通配符77：SecureSite 增强型(EV)78：Geotrust 企业型(OV)79：Geotrust 企业型(OV)通配符80：Geotrust 增强型(EV)81：GlobalSign 企业型（OV）SSL证书82：GlobalSign 企业型通配符 （OV）SSL证书83：TrustAsia C1 DV Free85：GlobalSign 增强型 （EV）SSL证书88：GlobalSign 企业型通配符多域名 （OV）SSL证书89：GlobalSign 企业型多域名 （OV）SSL证书90：GlobalSign 增强型多域名（EV） SSL证书91：Geotrust 增强型多域名(EV)92：SecureSite 企业型专业版多域名(OV Pro)93：SecureSite 企业型多域名(OV)94：SecureSite 增强型专业版多域名(EV Pro)95：SecureSite 增强型多域名(EV)96：SecureSite 增强型专业版(EV Pro)97：SecureSite 企业型专业版(OV Pro)98：CFCA 企业型(OV)SSL证书99：CFCA 企业型多域名(OV)SSL证书100：CFCA 企业型通配符(OV)SSL证书101：CFCA 增强型(EV)SSL证书</p>
     */
    public $PackageType;

    /**
     * @var string <p>证书类型：CA = 客户端证书，SVR = 服务器证书。</p>
     */
    public $CertificateType;

    /**
     * @var string <p>证书产品名称</p>
     */
    public $ProductZhName;

    /**
     * @var string <p>主域名。</p>
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
     * @var CertificateExtra <p>证书扩展信息。</p>
     */
    public $CertificateExtra;

    /**
     * @var string <p>漏洞扫描状态：INACTIVE = 未开启，ACTIVE = 已开启</p>
     */
    public $VulnerabilityStatus;

    /**
     * @var string <p>状态信息。</p>
     */
    public $StatusMsg;

    /**
     * @var string <p>验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，DNS_PROXY = DNS代理验证。FILE_PROXY = 文件代理验证</p>
     */
    public $VerifyType;

    /**
     * @var string <p>证书生效时间。时区为GMT+8:00</p>
     */
    public $CertBeginTime;

    /**
     * @var string <p>证书过期时间。时区为GMT+8:00</p>
     */
    public $CertEndTime;

    /**
     * @var string <p>证书有效期，单位（月）。</p>
     */
    public $ValidityPeriod;

    /**
     * @var string <p>创建时间。时区为GMT+8:00</p>
     */
    public $InsertTime;

    /**
     * @var string <p>证书 ID。</p>
     */
    public $CertificateId;

    /**
     * @var array <p>证书包含的多个域名（包含主域名）。</p>
     */
    public $SubjectAltName;

    /**
     * @var string <p>证书类型名称。</p>
     */
    public $PackageTypeName;

    /**
     * @var string <p>状态名称。</p>
     */
    public $StatusName;

    /**
     * @var boolean <p>是否为 VIP 客户。</p>
     */
    public $IsVip;

    /**
     * @var boolean <p>是否为 DV 版证书。</p>
     */
    public $IsDv;

    /**
     * @var boolean <p>是否为泛域名证书。</p>
     */
    public $IsWildcard;

    /**
     * @var boolean <p>是否启用了漏洞扫描功能。</p>
     */
    public $IsVulnerability;

    /**
     * @var boolean <p>是否可续费。</p>
     */
    public $RenewAble;

    /**
     * @var ProjectInfo <p>项目信息。</p>
     */
    public $ProjectInfo;

    /**
     * @var array <p>关联的云资源，暂不可用</p>
     */
    public $BoundResource;

    /**
     * @var boolean <p>是否可部署。</p>
     */
    public $Deployable;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @var boolean <p>是否已忽略到期通知</p>
     */
    public $IsIgnore;

    /**
     * @var boolean <p>是否国密证书</p>
     */
    public $IsSM;

    /**
     * @var string <p>证书算法</p>
     */
    public $EncryptAlgorithm;

    /**
     * @var array <p>上传CA证书的加密算法</p>
     */
    public $CAEncryptAlgorithms;

    /**
     * @var array <p>上传CA证书的过期时间</p>
     */
    public $CAEndTimes;

    /**
     * @var array <p>上传CA证书的通用名称</p>
     */
    public $CACommonNames;

    /**
     * @var PreAuditInfo <p>证书预审核信息</p>
     */
    public $PreAuditInfo;

    /**
     * @var integer <p>是否自动续费</p>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>托管状态，0，托管中，5，资源替换中， 10， 托管完成， -1未托管 </p>
     */
    public $HostingStatus;

    /**
     * @var string <p>托管完成时间</p>
     */
    public $HostingCompleteTime;

    /**
     * @var string <p>托管新证书ID</p>
     */
    public $HostingRenewCertId;

    /**
     * @var string <p>存在的续费证书ID</p>
     */
    public $HasRenewOrder;

    /**
     * @var boolean <p>重颁发证书原证书是否删除</p>
     */
    public $ReplaceOriCertIsDelete;

    /**
     * @var boolean <p>是否即将过期， 证书即将到期的30天内为即将过期</p>
     */
    public $IsExpiring;

    /**
     * @var string <p>DV证书添加验证截止时间，时区为GMT+8:00</p>
     */
    public $DVAuthDeadline;

    /**
     * @var string <p>域名验证通过时间，时区为GMT+8:00</p>
     */
    public $ValidationPassedTime;

    /**
     * @var array <p>证书关联的多域名</p>
     */
    public $CertSANs;

    /**
     * @var string <p>域名验证驳回信息</p>
     */
    public $AwaitingValidationMsg;

    /**
     * @var boolean <p>是否允许下载</p>
     */
    public $AllowDownload;

    /**
     * @var boolean <p>证书域名是否全部在DNSPOD托管解析</p>
     */
    public $IsDNSPODResolve;

    /**
     * @var boolean <p>是否是权益点购买的证书</p>
     */
    public $IsPackage;

    /**
     * @var boolean <p>是否存在私钥密码</p>
     */
    public $KeyPasswordCustomFlag;

    /**
     * @var SupportDownloadType <p>支持下载的WEB服务器类型： nginx、apache、iis、tomcat、jks、root、other</p>
     */
    public $SupportDownloadType;

    /**
     * @var string <p>证书吊销完成时间，时区为GMT+8:00</p>
     */
    public $CertRevokedTime;

    /**
     * @var array <p>托管资源类型列表</p>
     */
    public $HostingResourceTypes;

    /**
     * @var HostingConfig <p>托管配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostingConfig;

    /**
     * @var boolean <p>是否是上传托管续费证书</p>
     */
    public $IsHostingUploadRenewCert;

    /**
     * @var string <p>订阅服务ID</p>
     */
    public $ServiceId;

    /**
     * @var string <p>订阅服务状态</p>枚举值：<ul><li> initing： 未激活</li><li> running： 生效中</li><li> expired： 已过期</li><li> refunded： 已退款</li><li> nearExpire： 即将到期</li></ul>
     */
    public $ServiceStatus;

    /**
     * @var string <p>订阅服务开始时间</p>
     */
    public $CertServiceBeginTime;

    /**
     * @var string <p>订阅服务结束时间</p>
     */
    public $CertServiceEndTime;

    /**
     * @param string $OwnerUin <p>用户 UIN。</p>
     * @param string $ProjectId <p>项目 ID。</p>
     * @param string $From <p>证书来源：trustasia：亚洲诚信，upload：用户上传。wosign：沃通sheca：上海CA</p>
     * @param string $PackageType <p>证书套餐类型：null：用户上传证书（没有套餐类型），2：TrustAsia TLS RSA CA， 3：SecureSite 增强型企业版（EV Pro）， 4：SecureSite 增强型（EV）， 5：SecureSite 企业型专业版（OV Pro），6：SecureSite 企业型（OV）， 7：SecureSite 企业型（OV）通配符， 8：Geotrust 增强型（EV）， 9：Geotrust 企业型（OV）， 10：Geotrust 企业型（OV）通配符， 11：TrustAsia 域名型多域名 SSL 证书， 12：TrustAsia 域名型（DV）通配符， 13：TrustAsia 企业型通配符（OV）SSL 证书（D3）， 14：TrustAsia 企业型（OV）SSL 证书（D3）， 15：TrustAsia 企业型多域名 （OV）SSL 证书（D3）， 16：TrustAsia 增强型 （EV）SSL 证书（D3）， 17：TrustAsia 增强型多域名（EV）SSL 证书（D3）， 18：GlobalSign 企业型（OV）SSL 证书， 19：GlobalSign 企业型通配符 （OV）SSL 证书， 20：GlobalSign 增强型 （EV）SSL 证书， 21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3）， 22：GlobalSign 企业型多域名（OV）SSL 证书， 23：GlobalSign 企业型通配符多域名（OV）SSL 证书，24：GlobalSign 增强型多域名（EV）SSL 证书，25：Wotrus 域名型证书，26：Wotrus 域名型多域名证书，27：Wotrus 域名型通配符证书，28：Wotrus 企业型证书，29：Wotrus 企业型多域名证书，30：Wotrus 企业型通配符证书，31：Wotrus 增强型证书，32：Wotrus 增强型多域名证书，33：WoTrus-国密域名型证书，34：WoTrus-国密域名型证书（多域名），35：WoTrus-国密域名型证书（通配符），37：WoTrus-国密企业型证书，38：WoTrus-国密企业型证书（多域名），39：WoTrus-国密企业型证书（通配符），40：WoTrus-国密增强型证书，41：WoTrus-国密增强型证书（多域名），42：TrustAsia-域名型证书（通配符多域名），43：DNSPod-企业型(OV)SSL证书44：DNSPod-企业型(OV)通配符SSL证书45：DNSPod-企业型(OV)多域名SSL证书46：DNSPod-增强型(EV)SSL证书47：DNSPod-增强型(EV)多域名SSL证书48：DNSPod-域名型(DV)SSL证书49：DNSPod-域名型(DV)通配符SSL证书50：DNSPod-域名型(DV)多域名SSL证书51：DNSPod（国密）-企业型(OV)SSL证书52：DNSPod（国密）-企业型(OV)通配符SSL证书53：DNSPod（国密）-企业型(OV)多域名SSL证书54：DNSPod（国密）-域名型(DV)SSL证书55：DNSPod（国密）-域名型(DV)通配符SSL证书56：DNSPod（国密）-域名型(DV)多域名SSL证书57：SecureSite 企业型专业版多域名(OV Pro)58：SecureSite 企业型多域名(OV)59：SecureSite 增强型专业版多域名(EV Pro)60：SecureSite 增强型多域名(EV)61：Geotrust 增强型多域名(EV)75：SecureSite 企业型(OV)76：SecureSite 企业型(OV)通配符77：SecureSite 增强型(EV)78：Geotrust 企业型(OV)79：Geotrust 企业型(OV)通配符80：Geotrust 增强型(EV)81：GlobalSign 企业型（OV）SSL证书82：GlobalSign 企业型通配符 （OV）SSL证书83：TrustAsia C1 DV Free85：GlobalSign 增强型 （EV）SSL证书88：GlobalSign 企业型通配符多域名 （OV）SSL证书89：GlobalSign 企业型多域名 （OV）SSL证书90：GlobalSign 增强型多域名（EV） SSL证书91：Geotrust 增强型多域名(EV)92：SecureSite 企业型专业版多域名(OV Pro)93：SecureSite 企业型多域名(OV)94：SecureSite 增强型专业版多域名(EV Pro)95：SecureSite 增强型多域名(EV)96：SecureSite 增强型专业版(EV Pro)97：SecureSite 企业型专业版(OV Pro)98：CFCA 企业型(OV)SSL证书99：CFCA 企业型多域名(OV)SSL证书100：CFCA 企业型通配符(OV)SSL证书101：CFCA 增强型(EV)SSL证书</p>
     * @param string $CertificateType <p>证书类型：CA = 客户端证书，SVR = 服务器证书。</p>
     * @param string $ProductZhName <p>证书产品名称</p>
     * @param string $Domain <p>主域名。</p>
     * @param string $Alias <p>备注名称。</p>
     * @param integer $Status <p>证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 自动添加DNS记录，5 = 企业证书，待提交资料，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函，13 = 免费证书待提交资料。14 = 证书已退款。 15 = 证书迁移中</p>
     * @param CertificateExtra $CertificateExtra <p>证书扩展信息。</p>
     * @param string $VulnerabilityStatus <p>漏洞扫描状态：INACTIVE = 未开启，ACTIVE = 已开启</p>
     * @param string $StatusMsg <p>状态信息。</p>
     * @param string $VerifyType <p>验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，DNS_PROXY = DNS代理验证。FILE_PROXY = 文件代理验证</p>
     * @param string $CertBeginTime <p>证书生效时间。时区为GMT+8:00</p>
     * @param string $CertEndTime <p>证书过期时间。时区为GMT+8:00</p>
     * @param string $ValidityPeriod <p>证书有效期，单位（月）。</p>
     * @param string $InsertTime <p>创建时间。时区为GMT+8:00</p>
     * @param string $CertificateId <p>证书 ID。</p>
     * @param array $SubjectAltName <p>证书包含的多个域名（包含主域名）。</p>
     * @param string $PackageTypeName <p>证书类型名称。</p>
     * @param string $StatusName <p>状态名称。</p>
     * @param boolean $IsVip <p>是否为 VIP 客户。</p>
     * @param boolean $IsDv <p>是否为 DV 版证书。</p>
     * @param boolean $IsWildcard <p>是否为泛域名证书。</p>
     * @param boolean $IsVulnerability <p>是否启用了漏洞扫描功能。</p>
     * @param boolean $RenewAble <p>是否可续费。</p>
     * @param ProjectInfo $ProjectInfo <p>项目信息。</p>
     * @param array $BoundResource <p>关联的云资源，暂不可用</p>
     * @param boolean $Deployable <p>是否可部署。</p>
     * @param array $Tags <p>标签列表</p>
     * @param boolean $IsIgnore <p>是否已忽略到期通知</p>
     * @param boolean $IsSM <p>是否国密证书</p>
     * @param string $EncryptAlgorithm <p>证书算法</p>
     * @param array $CAEncryptAlgorithms <p>上传CA证书的加密算法</p>
     * @param array $CAEndTimes <p>上传CA证书的过期时间</p>
     * @param array $CACommonNames <p>上传CA证书的通用名称</p>
     * @param PreAuditInfo $PreAuditInfo <p>证书预审核信息</p>
     * @param integer $AutoRenewFlag <p>是否自动续费</p>
     * @param integer $HostingStatus <p>托管状态，0，托管中，5，资源替换中， 10， 托管完成， -1未托管 </p>
     * @param string $HostingCompleteTime <p>托管完成时间</p>
     * @param string $HostingRenewCertId <p>托管新证书ID</p>
     * @param string $HasRenewOrder <p>存在的续费证书ID</p>
     * @param boolean $ReplaceOriCertIsDelete <p>重颁发证书原证书是否删除</p>
     * @param boolean $IsExpiring <p>是否即将过期， 证书即将到期的30天内为即将过期</p>
     * @param string $DVAuthDeadline <p>DV证书添加验证截止时间，时区为GMT+8:00</p>
     * @param string $ValidationPassedTime <p>域名验证通过时间，时区为GMT+8:00</p>
     * @param array $CertSANs <p>证书关联的多域名</p>
     * @param string $AwaitingValidationMsg <p>域名验证驳回信息</p>
     * @param boolean $AllowDownload <p>是否允许下载</p>
     * @param boolean $IsDNSPODResolve <p>证书域名是否全部在DNSPOD托管解析</p>
     * @param boolean $IsPackage <p>是否是权益点购买的证书</p>
     * @param boolean $KeyPasswordCustomFlag <p>是否存在私钥密码</p>
     * @param SupportDownloadType $SupportDownloadType <p>支持下载的WEB服务器类型： nginx、apache、iis、tomcat、jks、root、other</p>
     * @param string $CertRevokedTime <p>证书吊销完成时间，时区为GMT+8:00</p>
     * @param array $HostingResourceTypes <p>托管资源类型列表</p>
     * @param HostingConfig $HostingConfig <p>托管配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsHostingUploadRenewCert <p>是否是上传托管续费证书</p>
     * @param string $ServiceId <p>订阅服务ID</p>
     * @param string $ServiceStatus <p>订阅服务状态</p>枚举值：<ul><li> initing： 未激活</li><li> running： 生效中</li><li> expired： 已过期</li><li> refunded： 已退款</li><li> nearExpire： 即将到期</li></ul>
     * @param string $CertServiceBeginTime <p>订阅服务开始时间</p>
     * @param string $CertServiceEndTime <p>订阅服务结束时间</p>
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

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceStatus",$param) and $param["ServiceStatus"] !== null) {
            $this->ServiceStatus = $param["ServiceStatus"];
        }

        if (array_key_exists("CertServiceBeginTime",$param) and $param["CertServiceBeginTime"] !== null) {
            $this->CertServiceBeginTime = $param["CertServiceBeginTime"];
        }

        if (array_key_exists("CertServiceEndTime",$param) and $param["CertServiceEndTime"] !== null) {
            $this->CertServiceEndTime = $param["CertServiceEndTime"];
        }
    }
}
