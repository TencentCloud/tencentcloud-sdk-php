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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对 VolumeTemplate 的引用
 *
 * @method string getVolumeTemplateName() 获取<p>VolumeTemplate 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeTemplateName(string $VolumeTemplateName) 设置<p>VolumeTemplate 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReuseKey() 获取<p>复用键，可为字面量或 ${metadata.xxx}</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReuseKey(string $ReuseKey) 设置<p>复用键，可为字面量或 ${metadata.xxx}</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class VolumeTemplateRef extends AbstractModel
{
    /**
     * @var string <p>VolumeTemplate 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeTemplateName;

    /**
     * @var string <p>复用键，可为字面量或 ${metadata.xxx}</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReuseKey;

    /**
     * @param string $VolumeTemplateName <p>VolumeTemplate 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReuseKey <p>复用键，可为字面量或 ${metadata.xxx}</p>
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
        if (array_key_exists("VolumeTemplateName",$param) and $param["VolumeTemplateName"] !== null) {
            $this->VolumeTemplateName = $param["VolumeTemplateName"];
        }

        if (array_key_exists("ReuseKey",$param) and $param["ReuseKey"] !== null) {
            $this->ReuseKey = $param["ReuseKey"];
        }
    }
}
