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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SeriesInfo类型
 *
 * @method array getColumns() 获取数据列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumns(array $Columns) 设置数据列
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValues() 获取数据值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置数据值
注意：此字段可能返回 null，表示取不到有效值。
 */
class SeriesInfo extends AbstractModel
{
    /**
     * @var array 数据列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Columns;

    /**
     * @var array 数据值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @param array $Columns 数据列
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Values 数据值
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
        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = $param["Columns"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
