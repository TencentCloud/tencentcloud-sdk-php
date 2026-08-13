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
 * 七层加速规则，执行顺序由数组顺序决定。
 *
 * @method string getRuleName() 获取<p>规则名称。名称长度限制不超过 255 个字符。</p>
 * @method void setRuleName(string $RuleName) 设置<p>规则名称。名称长度限制不超过 255 个字符。</p>
 * @method array getDescription() 获取<p>规则注释。可以填写多个注释。</p>
 * @method void setDescription(array $Description) 设置<p>规则注释。可以填写多个注释。</p>
 * @method array getBranches() 获取<p>子规则分支。此列表当前只支持填写一项规则，多填无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBranches(array $Branches) 设置<p>子规则分支。此列表当前只支持填写一项规则，多填无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConfigGroupRuleEngineItem extends AbstractModel
{
    /**
     * @var string <p>规则名称。名称长度限制不超过 255 个字符。</p>
     */
    public $RuleName;

    /**
     * @var array <p>规则注释。可以填写多个注释。</p>
     */
    public $Description;

    /**
     * @var array <p>子规则分支。此列表当前只支持填写一项规则，多填无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Branches;

    /**
     * @param string $RuleName <p>规则名称。名称长度限制不超过 255 个字符。</p>
     * @param array $Description <p>规则注释。可以填写多个注释。</p>
     * @param array $Branches <p>子规则分支。此列表当前只支持填写一项规则，多填无效。</p>
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Branches",$param) and $param["Branches"] !== null) {
            $this->Branches = [];
            foreach ($param["Branches"] as $key => $value){
                $obj = new RuleBranch();
                $obj->deserialize($value);
                array_push($this->Branches, $obj);
            }
        }
    }
}
