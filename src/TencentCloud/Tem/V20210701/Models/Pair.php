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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 键值对
 *
 * @method string getKey() 获取键
 * @method void setKey(string $Key) 设置键
 * @method string getValue() 获取值
 * @method void setValue(string $Value) 设置值
 * @method string getType() 获取类型，default 为自定义，reserved 为系统变量，referenced 为引用配置项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型，default 为自定义，reserved 为系统变量，referenced 为引用配置项
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfig() 获取配置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfig(string $Config) 设置配置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecret() 获取加密配置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecret(string $Secret) 设置加密配置名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class Pair extends AbstractModel
{
    /**
     * @var string 键
     */
    public $Key;

    /**
     * @var string 值
     */
    public $Value;

    /**
     * @var string 类型，default 为自定义，reserved 为系统变量，referenced 为引用配置项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 配置名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Config;

    /**
     * @var string 加密配置名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Secret;

    /**
     * @param string $Key 键
     * @param string $Value 值
     * @param string $Type 类型，default 为自定义，reserved 为系统变量，referenced 为引用配置项
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Config 配置名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Secret 加密配置名称
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("Secret",$param) and $param["Secret"] !== null) {
            $this->Secret = $param["Secret"];
        }
    }
}
