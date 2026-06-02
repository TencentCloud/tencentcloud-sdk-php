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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VersionDTO
 *
 * @method string getVersion() 获取Version版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置Version版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetPath() 获取目标路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetPath(string $TargetPath) 设置目标路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class VersionDTO extends AbstractModel
{
    /**
     * @var string Version版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 目标路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetPath;

    /**
     * @param string $Version Version版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetPath 目标路径
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("TargetPath",$param) and $param["TargetPath"] !== null) {
            $this->TargetPath = $param["TargetPath"];
        }
    }
}
