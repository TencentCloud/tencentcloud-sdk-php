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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据处理——数据处理参数
 *
 * @method string getKey() 获取数据处理KEY
 * @method void setKey(string $Key) 设置数据处理KEY
 * @method string getOperate() 获取操作，DATE系统预设-时间戳，CUSTOMIZE自定义，MAPPING映射，JSONPATH
 * @method void setOperate(string $Operate) 设置操作，DATE系统预设-时间戳，CUSTOMIZE自定义，MAPPING映射，JSONPATH
 * @method string getSchemeType() 获取数据类型，ORIGINAL原始，STRING，INT64，FLOAT64，BOOLEAN，MAP，ARRAY
 * @method void setSchemeType(string $SchemeType) 设置数据类型，ORIGINAL原始，STRING，INT64，FLOAT64，BOOLEAN，MAP，ARRAY
 * @method string getValue() 获取数据处理VALUE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置数据处理VALUE
注意：此字段可能返回 null，表示取不到有效值。
 * @method ValueParam getValueOperate() 获取VALUE处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueOperate(ValueParam $ValueOperate) 设置VALUE处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginalValue() 获取原始VALUE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalValue(string $OriginalValue) 设置原始VALUE
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValueOperates() 获取VALUE处理链
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueOperates(array $ValueOperates) 设置VALUE处理链
注意：此字段可能返回 null，表示取不到有效值。
 */
class SMTParam extends AbstractModel
{
    /**
     * @var string 数据处理KEY
     */
    public $Key;

    /**
     * @var string 操作，DATE系统预设-时间戳，CUSTOMIZE自定义，MAPPING映射，JSONPATH
     */
    public $Operate;

    /**
     * @var string 数据类型，ORIGINAL原始，STRING，INT64，FLOAT64，BOOLEAN，MAP，ARRAY
     */
    public $SchemeType;

    /**
     * @var string 数据处理VALUE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var ValueParam VALUE处理
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueOperate;

    /**
     * @var string 原始VALUE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalValue;

    /**
     * @var array VALUE处理链
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueOperates;

    /**
     * @param string $Key 数据处理KEY
     * @param string $Operate 操作，DATE系统预设-时间戳，CUSTOMIZE自定义，MAPPING映射，JSONPATH
     * @param string $SchemeType 数据类型，ORIGINAL原始，STRING，INT64，FLOAT64，BOOLEAN，MAP，ARRAY
     * @param string $Value 数据处理VALUE
注意：此字段可能返回 null，表示取不到有效值。
     * @param ValueParam $ValueOperate VALUE处理
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginalValue 原始VALUE
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ValueOperates VALUE处理链
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

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("SchemeType",$param) and $param["SchemeType"] !== null) {
            $this->SchemeType = $param["SchemeType"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ValueOperate",$param) and $param["ValueOperate"] !== null) {
            $this->ValueOperate = new ValueParam();
            $this->ValueOperate->deserialize($param["ValueOperate"]);
        }

        if (array_key_exists("OriginalValue",$param) and $param["OriginalValue"] !== null) {
            $this->OriginalValue = $param["OriginalValue"];
        }

        if (array_key_exists("ValueOperates",$param) and $param["ValueOperates"] !== null) {
            $this->ValueOperates = [];
            foreach ($param["ValueOperates"] as $key => $value){
                $obj = new ValueParam();
                $obj->deserialize($value);
                array_push($this->ValueOperates, $obj);
            }
        }
    }
}
