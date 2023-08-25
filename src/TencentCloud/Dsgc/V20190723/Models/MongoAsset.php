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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * mongo的资产统计结果
 *
 * @method integer getDbNums() 获取DB总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbNums(integer $DbNums) 设置DB总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveDbNums() 获取敏感DB数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveDbNums(integer $SensitiveDbNums) 设置敏感DB数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getColNums() 获取集合数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColNums(integer $ColNums) 设置集合数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveColNums() 获取敏感集合的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveColNums(integer $SensitiveColNums) 设置敏感集合的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFieldNums() 获取字段数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldNums(integer $FieldNums) 设置字段数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveFieldNums() 获取敏感的字段数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveFieldNums(integer $SensitiveFieldNums) 设置敏感的字段数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class MongoAsset extends AbstractModel
{
    /**
     * @var integer DB总数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbNums;

    /**
     * @var integer 敏感DB数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveDbNums;

    /**
     * @var integer 集合数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColNums;

    /**
     * @var integer 敏感集合的数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveColNums;

    /**
     * @var integer 字段数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldNums;

    /**
     * @var integer 敏感的字段数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveFieldNums;

    /**
     * @param integer $DbNums DB总数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveDbNums 敏感DB数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ColNums 集合数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveColNums 敏感集合的数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FieldNums 字段数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveFieldNums 敏感的字段数量
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
        if (array_key_exists("DbNums",$param) and $param["DbNums"] !== null) {
            $this->DbNums = $param["DbNums"];
        }

        if (array_key_exists("SensitiveDbNums",$param) and $param["SensitiveDbNums"] !== null) {
            $this->SensitiveDbNums = $param["SensitiveDbNums"];
        }

        if (array_key_exists("ColNums",$param) and $param["ColNums"] !== null) {
            $this->ColNums = $param["ColNums"];
        }

        if (array_key_exists("SensitiveColNums",$param) and $param["SensitiveColNums"] !== null) {
            $this->SensitiveColNums = $param["SensitiveColNums"];
        }

        if (array_key_exists("FieldNums",$param) and $param["FieldNums"] !== null) {
            $this->FieldNums = $param["FieldNums"];
        }

        if (array_key_exists("SensitiveFieldNums",$param) and $param["SensitiveFieldNums"] !== null) {
            $this->SensitiveFieldNums = $param["SensitiveFieldNums"];
        }
    }
}
