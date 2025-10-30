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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 虚拟机实例相关的参数配置
 *
 * @method array getImportMode() 获取实例导入方式，可多个，公有云为 ["R", "M"]，独立版的取值仅有 "M" 脚本模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImportMode(array $ImportMode) 设置实例导入方式，可多个，公有云为 ["R", "M"]，独立版的取值仅有 "M" 脚本模式
注意：此字段可能返回 null，表示取不到有效值。
 */
class VmInstanceResourceConfig extends AbstractModel
{
    /**
     * @var array 实例导入方式，可多个，公有云为 ["R", "M"]，独立版的取值仅有 "M" 脚本模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImportMode;

    /**
     * @param array $ImportMode 实例导入方式，可多个，公有云为 ["R", "M"]，独立版的取值仅有 "M" 脚本模式
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
        if (array_key_exists("ImportMode",$param) and $param["ImportMode"] !== null) {
            $this->ImportMode = $param["ImportMode"];
        }
    }
}
