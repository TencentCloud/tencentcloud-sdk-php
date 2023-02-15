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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Whois联系信息
 *
 * @method WhoisContactAddress getAdmin() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdmin(WhoisContactAddress $Admin) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method WhoisContactAddress getBilling() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBilling(WhoisContactAddress $Billing) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method WhoisContactAddress getRegistrant() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistrant(WhoisContactAddress $Registrant) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method WhoisContactAddress getTech() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTech(WhoisContactAddress $Tech) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 */
class WhoisContact extends AbstractModel
{
    /**
     * @var WhoisContactAddress 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Admin;

    /**
     * @var WhoisContactAddress 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Billing;

    /**
     * @var WhoisContactAddress 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Registrant;

    /**
     * @var WhoisContactAddress 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tech;

    /**
     * @param WhoisContactAddress $Admin 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param WhoisContactAddress $Billing 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param WhoisContactAddress $Registrant 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param WhoisContactAddress $Tech 无
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
        if (array_key_exists("Admin",$param) and $param["Admin"] !== null) {
            $this->Admin = new WhoisContactAddress();
            $this->Admin->deserialize($param["Admin"]);
        }

        if (array_key_exists("Billing",$param) and $param["Billing"] !== null) {
            $this->Billing = new WhoisContactAddress();
            $this->Billing->deserialize($param["Billing"]);
        }

        if (array_key_exists("Registrant",$param) and $param["Registrant"] !== null) {
            $this->Registrant = new WhoisContactAddress();
            $this->Registrant->deserialize($param["Registrant"]);
        }

        if (array_key_exists("Tech",$param) and $param["Tech"] !== null) {
            $this->Tech = new WhoisContactAddress();
            $this->Tech->deserialize($param["Tech"]);
        }
    }
}
