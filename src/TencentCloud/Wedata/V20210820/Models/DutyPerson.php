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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 值班人员
 *
 * @method string getUserId() 获取值班人子账号id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置值班人子账号id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取值班人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置值班人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUserId() 获取值班人员主账号用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUserId(string $OwnerUserId) 设置值班人员主账号用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTenantId() 获取值班人tenantId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantId(integer $TenantId) 设置值班人tenantId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddTime() 获取2023-11-02 08:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddTime(string $AddTime) 设置2023-11-02 08:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParams() 获取扩展字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(string $Params) 设置扩展字段
注意：此字段可能返回 null，表示取不到有效值。
 */
class DutyPerson extends AbstractModel
{
    /**
     * @var string 值班人子账号id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 值班人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 值班人员主账号用户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUserId;

    /**
     * @var integer 值班人tenantId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantId;

    /**
     * @var string 2023-11-02 08:00:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddTime;

    /**
     * @var string 扩展字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @param string $UserId 值班人子账号id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 值班人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUserId 值班人员主账号用户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TenantId 值班人tenantId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddTime 2023-11-02 08:00:00
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Params 扩展字段
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("OwnerUserId",$param) and $param["OwnerUserId"] !== null) {
            $this->OwnerUserId = $param["OwnerUserId"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }
    }
}
