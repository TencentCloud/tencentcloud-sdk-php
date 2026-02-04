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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 条件筛选
 *
 * @method array getGroups() 获取条件组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroups(array $Groups) 设置条件组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRelateOption() 获取条件关系 or/and
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelateOption(string $RelateOption) 设置条件关系 or/and
注意：此字段可能返回 null，表示取不到有效值。
 */
class RulePayload extends AbstractModel
{
    /**
     * @var array 条件组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Groups;

    /**
     * @var string 条件关系 or/and
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelateOption;

    /**
     * @param array $Groups 条件组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RelateOption 条件关系 or/and
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
        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = [];
            foreach ($param["Groups"] as $key => $value){
                $obj = new RulePayloadItem();
                $obj->deserialize($value);
                array_push($this->Groups, $obj);
            }
        }

        if (array_key_exists("RelateOption",$param) and $param["RelateOption"] !== null) {
            $this->RelateOption = $param["RelateOption"];
        }
    }
}
