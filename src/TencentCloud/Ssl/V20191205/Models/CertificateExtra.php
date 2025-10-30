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
 * @method string getDomainNumber() 获取证书可配置域名数量。
 * @method void setDomainNumber(string $DomainNumber) 设置证书可配置域名数量。
 * @method string getOriginCertificateId() 获取续费原证书 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginCertificateId(string $OriginCertificateId) 设置续费原证书 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReplacedBy() 获取重颁发证书原始 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplacedBy(string $ReplacedBy) 设置重颁发证书原始 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReplacedFor() 获取重颁发证书ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplacedFor(string $ReplacedFor) 设置重颁发证书ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRenewOrder() 获取续费证书 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewOrder(string $RenewOrder) 设置续费证书 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSMCert() 获取是否是国密证书
 * @method void setSMCert(integer $SMCert) 设置是否是国密证书
 * @method integer getCompanyType() 获取公司类型，取值：1（个人）；2（公司）
 * @method void setCompanyType(integer $CompanyType) 设置公司类型，取值：1（个人）；2（公司）
 */
class CertificateExtra extends AbstractModel
{
    /**
     * @var string 证书可配置域名数量。
     */
    public $DomainNumber;

    /**
     * @var string 续费原证书 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginCertificateId;

    /**
     * @var string 重颁发证书原始 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplacedBy;

    /**
     * @var string 重颁发证书ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplacedFor;

    /**
     * @var string 续费证书 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewOrder;

    /**
     * @var integer 是否是国密证书
     */
    public $SMCert;

    /**
     * @var integer 公司类型，取值：1（个人）；2（公司）
     */
    public $CompanyType;

    /**
     * @param string $DomainNumber 证书可配置域名数量。
     * @param string $OriginCertificateId 续费原证书 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReplacedBy 重颁发证书原始 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReplacedFor 重颁发证书ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RenewOrder 续费证书 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SMCert 是否是国密证书
     * @param integer $CompanyType 公司类型，取值：1（个人）；2（公司）
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
    }
}
