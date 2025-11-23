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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建私有域成功后返回私有域信息
 *
 * @method string getZoneId() 获取私有域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(string $ZoneId) 设置私有域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取私有域域名
 * @method void setDomain(string $Domain) 设置私有域域名
 * @method string getReason() 获取失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置失败原因
注意：此字段可能返回 null，表示取不到有效值。
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string 私有域ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var string 私有域域名
     */
    public $Domain;

    /**
     * @var string 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @param string $ZoneId 私有域ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 私有域域名
     * @param string $Reason 失败原因
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
