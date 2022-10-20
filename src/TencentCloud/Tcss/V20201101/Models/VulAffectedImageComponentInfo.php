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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 受漏洞影响的组件信息
 *
 * @method string getName() 获取组件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置组件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取组件版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置组件版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFixedVersion() 获取组件修复版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFixedVersion(string $FixedVersion) 设置组件修复版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取组件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置组件路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class VulAffectedImageComponentInfo extends AbstractModel
{
    /**
     * @var string 组件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 组件版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 组件修复版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FixedVersion;

    /**
     * @var string 组件路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @param string $Name 组件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 组件版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FixedVersion 组件修复版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path 组件路径
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("FixedVersion",$param) and $param["FixedVersion"] !== null) {
            $this->FixedVersion = $param["FixedVersion"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
