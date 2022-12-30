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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveDomainCertBindings, DescribeLiveDomainCertBindingsGray接口返回的域名证书信息
 *
 * @method string getDomainName() 获取域名。
 * @method void setDomainName(string $DomainName) 设置域名。
 * @method string getCertificateAlias() 获取证书备注。与CertName同义。
 * @method void setCertificateAlias(string $CertificateAlias) 设置证书备注。与CertName同义。
 * @method integer getCertType() 获取证书类型。
0：自有证书
1：腾讯云ssl托管证书
 * @method void setCertType(integer $CertType) 设置证书类型。
0：自有证书
1：腾讯云ssl托管证书
 * @method integer getStatus() 获取https状态。
1：已开启。
0：已关闭。
 * @method void setStatus(integer $Status) 设置https状态。
1：已开启。
0：已关闭。
 * @method string getCertExpireTime() 获取证书过期时间。
注：此字段为北京时间（UTC+8时区）。
 * @method void setCertExpireTime(string $CertExpireTime) 设置证书过期时间。
注：此字段为北京时间（UTC+8时区）。
 * @method integer getCertId() 获取证书Id。
 * @method void setCertId(integer $CertId) 设置证书Id。
 * @method string getCloudCertId() 获取腾讯云ssl的证书Id。
 * @method void setCloudCertId(string $CloudCertId) 设置腾讯云ssl的证书Id。
 * @method string getUpdateTime() 获取规则最后更新时间。
注：此字段为北京时间（UTC+8时区）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置规则最后更新时间。
注：此字段为北京时间（UTC+8时区）。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LiveDomainCertBindings extends AbstractModel
{
    /**
     * @var string 域名。
     */
    public $DomainName;

    /**
     * @var string 证书备注。与CertName同义。
     */
    public $CertificateAlias;

    /**
     * @var integer 证书类型。
0：自有证书
1：腾讯云ssl托管证书
     */
    public $CertType;

    /**
     * @var integer https状态。
1：已开启。
0：已关闭。
     */
    public $Status;

    /**
     * @var string 证书过期时间。
注：此字段为北京时间（UTC+8时区）。
     */
    public $CertExpireTime;

    /**
     * @var integer 证书Id。
     */
    public $CertId;

    /**
     * @var string 腾讯云ssl的证书Id。
     */
    public $CloudCertId;

    /**
     * @var string 规则最后更新时间。
注：此字段为北京时间（UTC+8时区）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $DomainName 域名。
     * @param string $CertificateAlias 证书备注。与CertName同义。
     * @param integer $CertType 证书类型。
0：自有证书
1：腾讯云ssl托管证书
     * @param integer $Status https状态。
1：已开启。
0：已关闭。
     * @param string $CertExpireTime 证书过期时间。
注：此字段为北京时间（UTC+8时区）。
     * @param integer $CertId 证书Id。
     * @param string $CloudCertId 腾讯云ssl的证书Id。
     * @param string $UpdateTime 规则最后更新时间。
注：此字段为北京时间（UTC+8时区）。
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("CertificateAlias",$param) and $param["CertificateAlias"] !== null) {
            $this->CertificateAlias = $param["CertificateAlias"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CertExpireTime",$param) and $param["CertExpireTime"] !== null) {
            $this->CertExpireTime = $param["CertExpireTime"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CloudCertId",$param) and $param["CloudCertId"] !== null) {
            $this->CloudCertId = $param["CloudCertId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
