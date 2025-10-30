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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 行列权限配置
 *
 * @method string getRulerInfo() 获取行列权限规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRulerInfo(string $RulerInfo) 设置行列权限规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagValueList() 获取标签值列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagValueList(array $TagValueList) 设置标签值列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class RowColumnConfig extends AbstractModel
{
    /**
     * @var string 行列权限规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RulerInfo;

    /**
     * @var array 标签值列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagValueList;

    /**
     * @param string $RulerInfo 行列权限规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagValueList 标签值列表
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
        if (array_key_exists("RulerInfo",$param) and $param["RulerInfo"] !== null) {
            $this->RulerInfo = $param["RulerInfo"];
        }

        if (array_key_exists("TagValueList",$param) and $param["TagValueList"] !== null) {
            $this->TagValueList = [];
            foreach ($param["TagValueList"] as $key => $value){
                $obj = new RowColumnTagValue();
                $obj->deserialize($value);
                array_push($this->TagValueList, $obj);
            }
        }
    }
}
