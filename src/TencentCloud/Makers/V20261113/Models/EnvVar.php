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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境变量。Env 缺省或空数组表示全局，写入时展开为项目当前全部环境
 *
 * @method string getKey() 获取<p>变量名，最长 255</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置<p>变量名，最长 255</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取<p>变量值，最长 1000</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置<p>变量值，最长 1000</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取<p>变量 ID。创建时不传</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置<p>变量 ID。创建时不传</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取<p>备注，最长 255</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置<p>备注，最长 255</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEnv() 获取<p>生效环境 slug，例如 Production、Preview。同 Key 的多行环境不能重叠</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnv(array $Env) 设置<p>生效环境 slug，例如 Production、Preview。同 Key 的多行环境不能重叠</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class EnvVar extends AbstractModel
{
    /**
     * @var string <p>变量名，最长 255</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string <p>变量值，最长 1000</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var integer <p>变量 ID。创建时不传</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string <p>备注，最长 255</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var array <p>生效环境 slug，例如 Production、Preview。同 Key 的多行环境不能重叠</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Env;

    /**
     * @param string $Key <p>变量名，最长 255</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value <p>变量值，最长 1000</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id <p>变量 ID。创建时不传</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment <p>备注，最长 255</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Env <p>生效环境 slug，例如 Production、Preview。同 Key 的多行环境不能重叠</p>
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }
    }
}
