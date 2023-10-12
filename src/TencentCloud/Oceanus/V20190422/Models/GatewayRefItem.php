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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Gateway引用资源信息
 *
 * @method string getWorkspaceId() 获取空间唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspaceId(string $WorkspaceId) 设置空间唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceId() 获取资源唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置资源唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVersion() 获取版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(integer $Version) 设置版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取引用类型，0:用户资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置引用类型，0:用户资源
注意：此字段可能返回 null，表示取不到有效值。
 */
class GatewayRefItem extends AbstractModel
{
    /**
     * @var string 空间唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspaceId;

    /**
     * @var string 资源唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var integer 版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var integer 引用类型，0:用户资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @param string $WorkspaceId 空间唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceId 资源唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Version 版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 引用类型，0:用户资源
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
