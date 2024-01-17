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
 * 数据质量自定义规则时的sql表达式解析对象
 *
 * @method array getTableExpressions() 获取sql表达式表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableExpressions(array $TableExpressions) 设置sql表达式表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParamExpressions() 获取sql表达式字段名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamExpressions(array $ParamExpressions) 设置sql表达式字段名
注意：此字段可能返回 null，表示取不到有效值。
 */
class SqlExpression extends AbstractModel
{
    /**
     * @var array sql表达式表名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableExpressions;

    /**
     * @var array sql表达式字段名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamExpressions;

    /**
     * @param array $TableExpressions sql表达式表名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ParamExpressions sql表达式字段名
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
        if (array_key_exists("TableExpressions",$param) and $param["TableExpressions"] !== null) {
            $this->TableExpressions = [];
            foreach ($param["TableExpressions"] as $key => $value){
                $obj = new SqlExpressionTable();
                $obj->deserialize($value);
                array_push($this->TableExpressions, $obj);
            }
        }

        if (array_key_exists("ParamExpressions",$param) and $param["ParamExpressions"] !== null) {
            $this->ParamExpressions = $param["ParamExpressions"];
        }
    }
}
