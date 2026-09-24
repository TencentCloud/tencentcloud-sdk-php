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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理服务的域名信息。
 *
 * @method string getDomain() 获取<p>域名名称。</p>
 * @method void setDomain(string $Domain) 设置<p>域名名称。</p>
 * @method string getStatus() 获取<p>域名状态。</p><p>枚举值：</p><ul><li>Online： 已生效；</li><li>Process： 部署中；</li><li>Offline： 已停用；</li><li>Init： 未生效，待激活站点。</li></ul>
 * @method void setStatus(string $Status) 设置<p>域名状态。</p><p>枚举值：</p><ul><li>Online： 已生效；</li><li>Process： 部署中；</li><li>Offline： 已停用；</li><li>Init： 未生效，待激活站点。</li></ul>
 * @method string getAuthSwitch() 获取<p>推理任务请求鉴权开关。</p><p>枚举值：</p><ul><li>Off： 关闭鉴权；</li><li>On： 开启鉴权。</li></ul><p>默认值：On。</p>
 * @method void setAuthSwitch(string $AuthSwitch) 设置<p>推理任务请求鉴权开关。</p><p>枚举值：</p><ul><li>Off： 关闭鉴权；</li><li>On： 开启鉴权。</li></ul><p>默认值：On。</p>
 * @method string getCname() 获取<p>CNAME 地址。</p><p>校验域名 CNAME 配置状态，请参考<a href="https://cloud.tencent.com/document/api/1552/94491"> CheckCnameStatus </a>接口。</p>
 * @method void setCname(string $Cname) 设置<p>CNAME 地址。</p><p>校验域名 CNAME 配置状态，请参考<a href="https://cloud.tencent.com/document/api/1552/94491"> CheckCnameStatus </a>接口。</p>
 * @method OwnershipVerification getOwnershipVerification() 获取<p>域名需进行归属权验证才能继续提供服务时，该对象会携带对应验证方式所需要的信息。</p><p>验证归属权，请参考<a href="https://cloud.tencent.com/document/api/1552/98879"> VerifyOwnership </a>接口。</p>
 * @method void setOwnershipVerification(OwnershipVerification $OwnershipVerification) 设置<p>域名需进行归属权验证才能继续提供服务时，该对象会携带对应验证方式所需要的信息。</p><p>验证归属权，请参考<a href="https://cloud.tencent.com/document/api/1552/98879"> VerifyOwnership </a>接口。</p>
 * @method HostsCertificate getCertificate() 获取<p>域名证书信息。</p><p>申请免费证书，请参考 <a href="https://cloud.tencent.com/document/api/1552/124807">ApplyFreeCertificate</a> 接口；<br>检查免费证书申请结果，请参考 <a href="https://cloud.tencent.com/document/api/1552/124806">CheckFreeCertificateVerification</a> 接口；<br>配置域名证书，请参考 <a href="https://cloud.tencent.com/document/api/1552/80764">ModifyHostsCertificate</a> 接口。</p>
 * @method void setCertificate(HostsCertificate $Certificate) 设置<p>域名证书信息。</p><p>申请免费证书，请参考 <a href="https://cloud.tencent.com/document/api/1552/124807">ApplyFreeCertificate</a> 接口；<br>检查免费证书申请结果，请参考 <a href="https://cloud.tencent.com/document/api/1552/124806">CheckFreeCertificateVerification</a> 接口；<br>配置域名证书，请参考 <a href="https://cloud.tencent.com/document/api/1552/80764">ModifyHostsCertificate</a> 接口。</p>
 * @method string getCreateTime() 获取<p>创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。</p>
 * @method string getUpdateTime() 获取<p>修改时间。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>修改时间。</p>
 */
class InferenceDomain extends AbstractModel
{
    /**
     * @var string <p>域名名称。</p>
     */
    public $Domain;

    /**
     * @var string <p>域名状态。</p><p>枚举值：</p><ul><li>Online： 已生效；</li><li>Process： 部署中；</li><li>Offline： 已停用；</li><li>Init： 未生效，待激活站点。</li></ul>
     */
    public $Status;

    /**
     * @var string <p>推理任务请求鉴权开关。</p><p>枚举值：</p><ul><li>Off： 关闭鉴权；</li><li>On： 开启鉴权。</li></ul><p>默认值：On。</p>
     */
    public $AuthSwitch;

    /**
     * @var string <p>CNAME 地址。</p><p>校验域名 CNAME 配置状态，请参考<a href="https://cloud.tencent.com/document/api/1552/94491"> CheckCnameStatus </a>接口。</p>
     */
    public $Cname;

    /**
     * @var OwnershipVerification <p>域名需进行归属权验证才能继续提供服务时，该对象会携带对应验证方式所需要的信息。</p><p>验证归属权，请参考<a href="https://cloud.tencent.com/document/api/1552/98879"> VerifyOwnership </a>接口。</p>
     */
    public $OwnershipVerification;

    /**
     * @var HostsCertificate <p>域名证书信息。</p><p>申请免费证书，请参考 <a href="https://cloud.tencent.com/document/api/1552/124807">ApplyFreeCertificate</a> 接口；<br>检查免费证书申请结果，请参考 <a href="https://cloud.tencent.com/document/api/1552/124806">CheckFreeCertificateVerification</a> 接口；<br>配置域名证书，请参考 <a href="https://cloud.tencent.com/document/api/1552/80764">ModifyHostsCertificate</a> 接口。</p>
     */
    public $Certificate;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>修改时间。</p>
     */
    public $UpdateTime;

    /**
     * @param string $Domain <p>域名名称。</p>
     * @param string $Status <p>域名状态。</p><p>枚举值：</p><ul><li>Online： 已生效；</li><li>Process： 部署中；</li><li>Offline： 已停用；</li><li>Init： 未生效，待激活站点。</li></ul>
     * @param string $AuthSwitch <p>推理任务请求鉴权开关。</p><p>枚举值：</p><ul><li>Off： 关闭鉴权；</li><li>On： 开启鉴权。</li></ul><p>默认值：On。</p>
     * @param string $Cname <p>CNAME 地址。</p><p>校验域名 CNAME 配置状态，请参考<a href="https://cloud.tencent.com/document/api/1552/94491"> CheckCnameStatus </a>接口。</p>
     * @param OwnershipVerification $OwnershipVerification <p>域名需进行归属权验证才能继续提供服务时，该对象会携带对应验证方式所需要的信息。</p><p>验证归属权，请参考<a href="https://cloud.tencent.com/document/api/1552/98879"> VerifyOwnership </a>接口。</p>
     * @param HostsCertificate $Certificate <p>域名证书信息。</p><p>申请免费证书，请参考 <a href="https://cloud.tencent.com/document/api/1552/124807">ApplyFreeCertificate</a> 接口；<br>检查免费证书申请结果，请参考 <a href="https://cloud.tencent.com/document/api/1552/124806">CheckFreeCertificateVerification</a> 接口；<br>配置域名证书，请参考 <a href="https://cloud.tencent.com/document/api/1552/80764">ModifyHostsCertificate</a> 接口。</p>
     * @param string $CreateTime <p>创建时间。</p>
     * @param string $UpdateTime <p>修改时间。</p>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AuthSwitch",$param) and $param["AuthSwitch"] !== null) {
            $this->AuthSwitch = $param["AuthSwitch"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("OwnershipVerification",$param) and $param["OwnershipVerification"] !== null) {
            $this->OwnershipVerification = new OwnershipVerification();
            $this->OwnershipVerification->deserialize($param["OwnershipVerification"]);
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new HostsCertificate();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
