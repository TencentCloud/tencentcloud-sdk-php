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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 例外规则的生效范围。
 *
 * @method string getType() 获取例外规则类型。其中complete模式代表全量数据进行例外，partial模式代表可选择指定模块指定字段进行例外，该字段取值有：
<li>complete：完全跳过模式；</li>
<li>partial：部分跳过模式。</li>
 * @method void setType(string $Type) 设置例外规则类型。其中complete模式代表全量数据进行例外，partial模式代表可选择指定模块指定字段进行例外，该字段取值有：
<li>complete：完全跳过模式；</li>
<li>partial：部分跳过模式。</li>
 * @method array getModules() 获取生效的模块，该字段取值有：
<li>waf：托管规则；</li>
<li>cc：速率限制规则；</li>
<li>bot：Bot防护。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModules(array $Modules) 设置生效的模块，该字段取值有：
<li>waf：托管规则；</li>
<li>cc：速率限制规则；</li>
<li>bot：Bot防护。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPartialModules() 获取跳过部分规则ID的例外规则详情。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartialModules(array $PartialModules) 设置跳过部分规则ID的例外规则详情。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSkipConditions() 获取跳过具体字段不去扫描的例外规则详情。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkipConditions(array $SkipConditions) 设置跳过具体字段不去扫描的例外规则详情。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExceptUserRuleScope extends AbstractModel
{
    /**
     * @var string 例外规则类型。其中complete模式代表全量数据进行例外，partial模式代表可选择指定模块指定字段进行例外，该字段取值有：
<li>complete：完全跳过模式；</li>
<li>partial：部分跳过模式。</li>
     */
    public $Type;

    /**
     * @var array 生效的模块，该字段取值有：
<li>waf：托管规则；</li>
<li>cc：速率限制规则；</li>
<li>bot：Bot防护。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Modules;

    /**
     * @var array 跳过部分规则ID的例外规则详情。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartialModules;

    /**
     * @var array 跳过具体字段不去扫描的例外规则详情。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkipConditions;

    /**
     * @param string $Type 例外规则类型。其中complete模式代表全量数据进行例外，partial模式代表可选择指定模块指定字段进行例外，该字段取值有：
<li>complete：完全跳过模式；</li>
<li>partial：部分跳过模式。</li>
     * @param array $Modules 生效的模块，该字段取值有：
<li>waf：托管规则；</li>
<li>cc：速率限制规则；</li>
<li>bot：Bot防护。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PartialModules 跳过部分规则ID的例外规则详情。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SkipConditions 跳过具体字段不去扫描的例外规则详情。如果为null，默认使用历史配置。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Modules",$param) and $param["Modules"] !== null) {
            $this->Modules = $param["Modules"];
        }

        if (array_key_exists("PartialModules",$param) and $param["PartialModules"] !== null) {
            $this->PartialModules = [];
            foreach ($param["PartialModules"] as $key => $value){
                $obj = new PartialModule();
                $obj->deserialize($value);
                array_push($this->PartialModules, $obj);
            }
        }

        if (array_key_exists("SkipConditions",$param) and $param["SkipConditions"] !== null) {
            $this->SkipConditions = [];
            foreach ($param["SkipConditions"] as $key => $value){
                $obj = new SkipCondition();
                $obj->deserialize($value);
                array_push($this->SkipConditions, $obj);
            }
        }
    }
}
