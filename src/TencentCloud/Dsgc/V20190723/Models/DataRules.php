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
 * 敏感数据识别规则集
 *
 * @method string getOperator() 获取操作符；只能取and, or的其中一种
 * @method void setOperator(string $Operator) 设置操作符；只能取and, or的其中一种
 * @method array getContents() 获取规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContents(array $Contents) 设置规则
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataRules extends AbstractModel
{
    /**
     * @var string 操作符；只能取and, or的其中一种
     */
    public $Operator;

    /**
     * @var array 规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Contents;

    /**
     * @param string $Operator 操作符；只能取and, or的其中一种
     * @param array $Contents 规则
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Contents",$param) and $param["Contents"] !== null) {
            $this->Contents = [];
            foreach ($param["Contents"] as $key => $value){
                $obj = new DataRule();
                $obj->deserialize($value);
                array_push($this->Contents, $obj);
            }
        }
    }
}
