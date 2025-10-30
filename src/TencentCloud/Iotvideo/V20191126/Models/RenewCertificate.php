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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 刷新证书信息
 *
 * @method CertificateInfo getTempCertificate() 获取刷新证书信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTempCertificate(CertificateInfo $TempCertificate) 设置刷新证书信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class RenewCertificate extends AbstractModel
{
    /**
     * @var CertificateInfo 刷新证书信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TempCertificate;

    /**
     * @param CertificateInfo $TempCertificate 刷新证书信息
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
        if (array_key_exists("TempCertificate",$param) and $param["TempCertificate"] !== null) {
            $this->TempCertificate = new CertificateInfo();
            $this->TempCertificate->deserialize($param["TempCertificate"]);
        }
    }
}
