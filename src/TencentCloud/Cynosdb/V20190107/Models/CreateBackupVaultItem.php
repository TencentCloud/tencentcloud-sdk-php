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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 保险箱信息
 *
 * @method string getVaultId() 获取保险箱id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVaultId(string $VaultId) 设置保险箱id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVaultRegion() 获取保险箱地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVaultRegion(string $VaultRegion) 设置保险箱地域
注意：此字段可能返回 null，表示取不到有效值。
 */
class CreateBackupVaultItem extends AbstractModel
{
    /**
     * @var string 保险箱id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VaultId;

    /**
     * @var string 保险箱地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VaultRegion;

    /**
     * @param string $VaultId 保险箱id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VaultRegion 保险箱地域
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
        if (array_key_exists("VaultId",$param) and $param["VaultId"] !== null) {
            $this->VaultId = $param["VaultId"];
        }

        if (array_key_exists("VaultRegion",$param) and $param["VaultRegion"] !== null) {
            $this->VaultRegion = $param["VaultRegion"];
        }
    }
}
