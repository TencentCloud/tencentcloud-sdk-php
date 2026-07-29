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
 * 获取证书列表（DescribeCertificates）返回参数键为 Certificates 数组下，key为CertificateExtra 的内容。
 *
 * @method string getDomainNumber() 获取<p>证书可配置域名数量。</p>
 * @method void setDomainNumber(string $DomainNumber) 设置<p>证书可配置域名数量。</p>
 * @method string getOriginCertificateId() 获取<p>续费原证书 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginCertificateId(string $OriginCertificateId) 设置<p>续费原证书 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReplacedBy() 获取<p>重颁发证书原始 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplacedBy(string $ReplacedBy) 设置<p>重颁发证书原始 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReplacedFor() 获取<p>重颁发证书ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplacedFor(string $ReplacedFor) 设置<p>重颁发证书ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRenewOrder() 获取<p>续费证书 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewOrder(string $RenewOrder) 设置<p>续费证书 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSMCert() 获取<p>是否是国密证书</p>
 * @method void setSMCert(integer $SMCert) 设置<p>是否是国密证书</p>
 * @method integer getCompanyType() 获取<p>公司类型，取值：1（个人）；2（公司）</p>
 * @method void setCompanyType(integer $CompanyType) 设置<p>公司类型，取值：1（个人）；2（公司）</p>
 * @method string getServiceRenewCertificateId() 获取<p>下一张订阅服务续期证书ID</p>
 * @method void setServiceRenewCertificateId(string $ServiceRenewCertificateId) 设置<p>下一张订阅服务续期证书ID</p>
 * @method string getServiceOriginCertificateId() 获取<p>上一张订阅服务来源证书ID</p>
 * @method void setServiceOriginCertificateId(string $ServiceOriginCertificateId) 设置<p>上一张订阅服务来源证书ID</p>
 */
class CertificateExtra extends AbstractModel
{
    /**
     * @var string <p>证书可配置域名数量。</p>
     */
    public $DomainNumber;

    /**
     * @var string <p>续费原证书 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginCertificateId;

    /**
     * @var string <p>重颁发证书原始 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplacedBy;

    /**
     * @var string <p>重颁发证书ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplacedFor;

    /**
     * @var string <p>续费证书 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewOrder;

    /**
     * @var integer <p>是否是国密证书</p>
     */
    public $SMCert;

    /**
     * @var integer <p>公司类型，取值：1（个人）；2（公司）</p>
     */
    public $CompanyType;

    /**
     * @var string <p>下一张订阅服务续期证书ID</p>
     */
    public $ServiceRenewCertificateId;

    /**
     * @var string <p>上一张订阅服务来源证书ID</p>
     */
    public $ServiceOriginCertificateId;

    /**
     * @param string $DomainNumber <p>证书可配置域名数量。</p>
     * @param string $OriginCertificateId <p>续费原证书 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReplacedBy <p>重颁发证书原始 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReplacedFor <p>重颁发证书ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RenewOrder <p>续费证书 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SMCert <p>是否是国密证书</p>
     * @param integer $CompanyType <p>公司类型，取值：1（个人）；2（公司）</p>
     * @param string $ServiceRenewCertificateId <p>下一张订阅服务续期证书ID</p>
     * @param string $ServiceOriginCertificateId <p>上一张订阅服务来源证书ID</p>
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
        if (array_key_exists("DomainNumber",$param) and $param["DomainNumber"] !== null) {
            $this->DomainNumber = $param["DomainNumber"];
        }

        if (array_key_exists("OriginCertificateId",$param) and $param["OriginCertificateId"] !== null) {
            $this->OriginCertificateId = $param["OriginCertificateId"];
        }

        if (array_key_exists("ReplacedBy",$param) and $param["ReplacedBy"] !== null) {
            $this->ReplacedBy = $param["ReplacedBy"];
        }

        if (array_key_exists("ReplacedFor",$param) and $param["ReplacedFor"] !== null) {
            $this->ReplacedFor = $param["ReplacedFor"];
        }

        if (array_key_exists("RenewOrder",$param) and $param["RenewOrder"] !== null) {
            $this->RenewOrder = $param["RenewOrder"];
        }

        if (array_key_exists("SMCert",$param) and $param["SMCert"] !== null) {
            $this->SMCert = $param["SMCert"];
        }

        if (array_key_exists("CompanyType",$param) and $param["CompanyType"] !== null) {
            $this->CompanyType = $param["CompanyType"];
        }

        if (array_key_exists("ServiceRenewCertificateId",$param) and $param["ServiceRenewCertificateId"] !== null) {
            $this->ServiceRenewCertificateId = $param["ServiceRenewCertificateId"];
        }

        if (array_key_exists("ServiceOriginCertificateId",$param) and $param["ServiceOriginCertificateId"] !== null) {
            $this->ServiceOriginCertificateId = $param["ServiceOriginCertificateId"];
        }
    }
}
