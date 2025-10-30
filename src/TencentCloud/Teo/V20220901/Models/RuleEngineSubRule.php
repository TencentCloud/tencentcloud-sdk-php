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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子规则。
 *
 * @method array getBranches() 获取子规则分支
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBranches(array $Branches) 设置子规则分支
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDescription() 获取规则注释。
 * @method void setDescription(array $Description) 设置规则注释。
 */
class RuleEngineSubRule extends AbstractModel
{
    /**
     * @var array 子规则分支
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Branches;

    /**
     * @var array 规则注释。
     */
    public $Description;

    /**
     * @param array $Branches 子规则分支
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Description 规则注释。
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
        if (array_key_exists("Branches",$param) and $param["Branches"] !== null) {
            $this->Branches = [];
            foreach ($param["Branches"] as $key => $value){
                $obj = new RuleBranch();
                $obj->deserialize($value);
                array_push($this->Branches, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
