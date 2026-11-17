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
 * DNS 归属校验记录
 *
 * @method string getRecordType() 获取<p>记录类型，TXT</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordType(string $RecordType) 设置<p>记录类型，TXT</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubdomain() 获取<p>主机记录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubdomain(string $Subdomain) 设置<p>主机记录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordValue() 获取<p>记录值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordValue(string $RecordValue) 设置<p>记录值</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DnsVerification extends AbstractModel
{
    /**
     * @var string <p>记录类型，TXT</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordType;

    /**
     * @var string <p>主机记录</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Subdomain;

    /**
     * @var string <p>记录值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordValue;

    /**
     * @param string $RecordType <p>记录类型，TXT</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Subdomain <p>主机记录</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordValue <p>记录值</p>
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
        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("Subdomain",$param) and $param["Subdomain"] !== null) {
            $this->Subdomain = $param["Subdomain"];
        }

        if (array_key_exists("RecordValue",$param) and $param["RecordValue"] !== null) {
            $this->RecordValue = $param["RecordValue"];
        }
    }
}
