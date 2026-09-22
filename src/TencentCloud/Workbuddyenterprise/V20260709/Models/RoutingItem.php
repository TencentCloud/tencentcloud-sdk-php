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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 路由项
 *
 * @method string getVersionId() 获取版本 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(string $VersionId) 设置版本 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getWeight() 获取权重，(0, 1] 之间的浮点百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(float $Weight) 设置权重，(0, 1] 之间的浮点百分比
注意：此字段可能返回 null，表示取不到有效值。
 */
class RoutingItem extends AbstractModel
{
    /**
     * @var string 版本 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionId;

    /**
     * @var float 权重，(0, 1] 之间的浮点百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @param string $VersionId 版本 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Weight 权重，(0, 1] 之间的浮点百分比
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
