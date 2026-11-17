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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名归属校验信息
 *
 * @method DnsVerification getDnsVerification() 获取<p>DNS 校验</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDnsVerification(DnsVerification $DnsVerification) 设置<p>DNS 校验</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileVerification getFileVerification() 获取<p>文件校验</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileVerification(FileVerification $FileVerification) 设置<p>文件校验</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method NsVerification getNsVerification() 获取<p>NS 校验</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNsVerification(NsVerification $NsVerification) 设置<p>NS 校验</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class OwnershipVerification extends AbstractModel
{
    /**
     * @var DnsVerification <p>DNS 校验</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DnsVerification;

    /**
     * @var FileVerification <p>文件校验</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileVerification;

    /**
     * @var NsVerification <p>NS 校验</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NsVerification;

    /**
     * @param DnsVerification $DnsVerification <p>DNS 校验</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileVerification $FileVerification <p>文件校验</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param NsVerification $NsVerification <p>NS 校验</p>
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
        if (array_key_exists("DnsVerification",$param) and $param["DnsVerification"] !== null) {
            $this->DnsVerification = new DnsVerification();
            $this->DnsVerification->deserialize($param["DnsVerification"]);
        }

        if (array_key_exists("FileVerification",$param) and $param["FileVerification"] !== null) {
            $this->FileVerification = new FileVerification();
            $this->FileVerification->deserialize($param["FileVerification"]);
        }

        if (array_key_exists("NsVerification",$param) and $param["NsVerification"] !== null) {
            $this->NsVerification = new NsVerification();
            $this->NsVerification->deserialize($param["NsVerification"]);
        }
    }
}
