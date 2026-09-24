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
 * 站点级自定义变量配置，包括变量定义和变量运算。
 *
 * @method array getCustomVariables() 获取<p>站点级自定义变量列表。CustomVariable.Name 需要使用 user.zone. 作为前缀。变量按照数组顺序依次初始化，InitialValue 仅支持引用位于当前变量之前的变量，不支持引用当前变量自身或位于当前变量之后的变量。</p>
 * @method void setCustomVariables(array $CustomVariables) 设置<p>站点级自定义变量列表。CustomVariable.Name 需要使用 user.zone. 作为前缀。变量按照数组顺序依次初始化，InitialValue 仅支持引用位于当前变量之前的变量，不支持引用当前变量自身或位于当前变量之后的变量。</p>
 * @method array getCustomVariableOperations() 获取<p>站点级自定义变量运算规则。运算中支持引用已定义的站点级自定义变量。此列表当前只支持填写一项规则，多填无效。</p>
 * @method void setCustomVariableOperations(array $CustomVariableOperations) 设置<p>站点级自定义变量运算规则。运算中支持引用已定义的站点级自定义变量。此列表当前只支持填写一项规则，多填无效。</p>
 */
class ZoneCustomVariables extends AbstractModel
{
    /**
     * @var array <p>站点级自定义变量列表。CustomVariable.Name 需要使用 user.zone. 作为前缀。变量按照数组顺序依次初始化，InitialValue 仅支持引用位于当前变量之前的变量，不支持引用当前变量自身或位于当前变量之后的变量。</p>
     */
    public $CustomVariables;

    /**
     * @var array <p>站点级自定义变量运算规则。运算中支持引用已定义的站点级自定义变量。此列表当前只支持填写一项规则，多填无效。</p>
     */
    public $CustomVariableOperations;

    /**
     * @param array $CustomVariables <p>站点级自定义变量列表。CustomVariable.Name 需要使用 user.zone. 作为前缀。变量按照数组顺序依次初始化，InitialValue 仅支持引用位于当前变量之前的变量，不支持引用当前变量自身或位于当前变量之后的变量。</p>
     * @param array $CustomVariableOperations <p>站点级自定义变量运算规则。运算中支持引用已定义的站点级自定义变量。此列表当前只支持填写一项规则，多填无效。</p>
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
        if (array_key_exists("CustomVariables",$param) and $param["CustomVariables"] !== null) {
            $this->CustomVariables = [];
            foreach ($param["CustomVariables"] as $key => $value){
                $obj = new CustomVariable();
                $obj->deserialize($value);
                array_push($this->CustomVariables, $obj);
            }
        }

        if (array_key_exists("CustomVariableOperations",$param) and $param["CustomVariableOperations"] !== null) {
            $this->CustomVariableOperations = [];
            foreach ($param["CustomVariableOperations"] as $key => $value){
                $obj = new CustomVariableOperation();
                $obj->deserialize($value);
                array_push($this->CustomVariableOperations, $obj);
            }
        }
    }
}
