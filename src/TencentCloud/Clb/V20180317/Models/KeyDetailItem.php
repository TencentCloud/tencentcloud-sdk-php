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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Key 详情
 *
 * @method string getKeyId() 获取Key 业务 ID
 * @method void setKeyId(string $KeyId) 设置Key 业务 ID
 * @method string getCreatedAt() 获取Key 创建时间（ISO 8601）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置Key 创建时间（ISO 8601）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取Key 显示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置Key 显示名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class KeyDetailItem extends AbstractModel
{
    /**
     * @var string Key 业务 ID
     */
    public $KeyId;

    /**
     * @var string Key 创建时间（ISO 8601）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string Key 显示名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @param string $KeyId Key 业务 ID
     * @param string $CreatedAt Key 创建时间（ISO 8601）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name Key 显示名称
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
