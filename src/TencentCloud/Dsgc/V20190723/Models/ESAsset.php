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
 * es的资产统计结果
 *
 * @method integer getIndexNums() 获取索引总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexNums(integer $IndexNums) 设置索引总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveIndexNums() 获取敏感索引的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveIndexNums(integer $SensitiveIndexNums) 设置敏感索引的数量
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
class ESAsset extends AbstractModel
{
    /**
     * @var integer 索引总数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexNums;

    /**
     * @var integer 敏感索引的数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveIndexNums;

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
     * @param integer $IndexNums 索引总数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveIndexNums 敏感索引的数量
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
        if (array_key_exists("IndexNums",$param) and $param["IndexNums"] !== null) {
            $this->IndexNums = $param["IndexNums"];
        }

        if (array_key_exists("SensitiveIndexNums",$param) and $param["SensitiveIndexNums"] !== null) {
            $this->SensitiveIndexNums = $param["SensitiveIndexNums"];
        }

        if (array_key_exists("FieldNums",$param) and $param["FieldNums"] !== null) {
            $this->FieldNums = $param["FieldNums"];
        }

        if (array_key_exists("SensitiveFieldNums",$param) and $param["SensitiveFieldNums"] !== null) {
            $this->SensitiveFieldNums = $param["SensitiveFieldNums"];
        }
    }
}
