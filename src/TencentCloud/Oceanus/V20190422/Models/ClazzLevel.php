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
 * {
"Clazz": "c1", // java类全路径
"Level": "WARN" // 日志级别  TRACE，DEBUG、INFO、WARN、ERROR
}
 *
 * @method string getClazz() 获取java类全路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClazz(string $Clazz) 设置java类全路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLevel() 获取日志级别  TRACE，DEBUG、INFO、WARN、ERROR
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(string $Level) 设置日志级别  TRACE，DEBUG、INFO、WARN、ERROR
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClazzLevel extends AbstractModel
{
    /**
     * @var string java类全路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Clazz;

    /**
     * @var string 日志级别  TRACE，DEBUG、INFO、WARN、ERROR
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @param string $Clazz java类全路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Level 日志级别  TRACE，DEBUG、INFO、WARN、ERROR
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
        if (array_key_exists("Clazz",$param) and $param["Clazz"] !== null) {
            $this->Clazz = $param["Clazz"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }
    }
}
