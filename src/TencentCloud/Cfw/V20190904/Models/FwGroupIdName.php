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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防火墙(组)ID 和 名称
 *
 * @method string getFwGroupId() 获取防火墙(组)ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFwGroupId(string $FwGroupId) 设置防火墙(组)ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFwGroupName() 获取防火墙(组)名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFwGroupName(string $FwGroupName) 设置防火墙(组)名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class FwGroupIdName extends AbstractModel
{
    /**
     * @var string 防火墙(组)ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FwGroupId;

    /**
     * @var string 防火墙(组)名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FwGroupName;

    /**
     * @param string $FwGroupId 防火墙(组)ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FwGroupName 防火墙(组)名称
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
        if (array_key_exists("FwGroupId",$param) and $param["FwGroupId"] !== null) {
            $this->FwGroupId = $param["FwGroupId"];
        }

        if (array_key_exists("FwGroupName",$param) and $param["FwGroupName"] !== null) {
            $this->FwGroupName = $param["FwGroupName"];
        }
    }
}
