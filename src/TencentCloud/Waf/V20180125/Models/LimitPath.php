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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 限流Path
 *
 * @method string getPath() 获取限流路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置限流路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取匹配方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置匹配方式
注意：此字段可能返回 null，表示取不到有效值。
 */
class LimitPath extends AbstractModel
{
    /**
     * @var string 限流路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string 匹配方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @param string $Path 限流路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 匹配方式
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
