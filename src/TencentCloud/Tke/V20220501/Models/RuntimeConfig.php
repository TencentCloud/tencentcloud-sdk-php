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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运行时配置
 *
 * @method string getRuntimeType() 获取运行时类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntimeType(string $RuntimeType) 设置运行时类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuntimeVersion() 获取运行时版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntimeVersion(string $RuntimeVersion) 设置运行时版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuntimeRootDir() 获取运行时根目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntimeRootDir(string $RuntimeRootDir) 设置运行时根目录
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuntimeConfig extends AbstractModel
{
    /**
     * @var string 运行时类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuntimeType;

    /**
     * @var string 运行时版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuntimeVersion;

    /**
     * @var string 运行时根目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuntimeRootDir;

    /**
     * @param string $RuntimeType 运行时类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuntimeVersion 运行时版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuntimeRootDir 运行时根目录
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
        if (array_key_exists("RuntimeType",$param) and $param["RuntimeType"] !== null) {
            $this->RuntimeType = $param["RuntimeType"];
        }

        if (array_key_exists("RuntimeVersion",$param) and $param["RuntimeVersion"] !== null) {
            $this->RuntimeVersion = $param["RuntimeVersion"];
        }

        if (array_key_exists("RuntimeRootDir",$param) and $param["RuntimeRootDir"] !== null) {
            $this->RuntimeRootDir = $param["RuntimeRootDir"];
        }
    }
}
