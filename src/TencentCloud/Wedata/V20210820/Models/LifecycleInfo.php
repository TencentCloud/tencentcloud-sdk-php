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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表生命周期相关信息
 *
 * @method integer getLifecycle() 获取生命周期值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifecycle(integer $Lifecycle) 设置生命周期值
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getColumns() 获取列名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumns(array $Columns) 设置列名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDateFormat() 获取日期格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDateFormat(array $DateFormat) 设置日期格式
注意：此字段可能返回 null，表示取不到有效值。
 */
class LifecycleInfo extends AbstractModel
{
    /**
     * @var integer 生命周期值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Lifecycle;

    /**
     * @var array 列名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Columns;

    /**
     * @var array 日期格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DateFormat;

    /**
     * @param integer $Lifecycle 生命周期值
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Columns 列名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DateFormat 日期格式
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
        if (array_key_exists("Lifecycle",$param) and $param["Lifecycle"] !== null) {
            $this->Lifecycle = $param["Lifecycle"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = $param["Columns"];
        }

        if (array_key_exists("DateFormat",$param) and $param["DateFormat"] !== null) {
            $this->DateFormat = $param["DateFormat"];
        }
    }
}
