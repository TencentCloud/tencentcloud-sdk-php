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
 * 规则变量替换
 *
 * @method array getWhereConfig() 获取where变量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWhereConfig(array $WhereConfig) 设置where变量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTableConfig() 获取库表变量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableConfig(array $TableConfig) 设置库表变量
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleFieldConfig extends AbstractModel
{
    /**
     * @var array where变量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WhereConfig;

    /**
     * @var array 库表变量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableConfig;

    /**
     * @param array $WhereConfig where变量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TableConfig 库表变量
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
        if (array_key_exists("WhereConfig",$param) and $param["WhereConfig"] !== null) {
            $this->WhereConfig = [];
            foreach ($param["WhereConfig"] as $key => $value){
                $obj = new FieldConfig();
                $obj->deserialize($value);
                array_push($this->WhereConfig, $obj);
            }
        }

        if (array_key_exists("TableConfig",$param) and $param["TableConfig"] !== null) {
            $this->TableConfig = [];
            foreach ($param["TableConfig"] as $key => $value){
                $obj = new TableConfig();
                $obj->deserialize($value);
                array_push($this->TableConfig, $obj);
            }
        }
    }
}
