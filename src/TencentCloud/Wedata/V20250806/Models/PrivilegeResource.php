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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 权限资源模型
 *
 * @method string getResourceType() 获取资源类型 Catalog、Schema等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(string $ResourceType) 设置资源类型 Catalog、Schema等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceUri() 获取资源URI
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceUri(string $ResourceUri) 设置资源URI
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrivilegeResource extends AbstractModel
{
    /**
     * @var string 资源类型 Catalog、Schema等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var string 资源URI
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceUri;

    /**
     * @param string $ResourceType 资源类型 Catalog、Schema等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceUri 资源URI
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceUri",$param) and $param["ResourceUri"] !== null) {
            $this->ResourceUri = $param["ResourceUri"];
        }
    }
}
