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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检索范围配置
 *
 * @method string getCondition() 获取检索条件and/or
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCondition(string $Condition) 设置检索条件and/or
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApiVarAttrInfos() 获取自定义变量和标签关系数据	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiVarAttrInfos(array $ApiVarAttrInfos) 设置自定义变量和标签关系数据	
注意：此字段可能返回 null，表示取不到有效值。
 */
class SearchRange extends AbstractModel
{
    /**
     * @var string 检索条件and/or
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Condition;

    /**
     * @var array 自定义变量和标签关系数据	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiVarAttrInfos;

    /**
     * @param string $Condition 检索条件and/or
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApiVarAttrInfos 自定义变量和标签关系数据	
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
        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("ApiVarAttrInfos",$param) and $param["ApiVarAttrInfos"] !== null) {
            $this->ApiVarAttrInfos = [];
            foreach ($param["ApiVarAttrInfos"] as $key => $value){
                $obj = new ApiVarAttrInfo();
                $obj->deserialize($value);
                array_push($this->ApiVarAttrInfos, $obj);
            }
        }
    }
}
