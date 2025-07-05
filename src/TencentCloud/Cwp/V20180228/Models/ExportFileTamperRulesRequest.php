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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportFileTamperRules请求参数结构体
 *
 * @method array getFilters() 获取过滤条件。
<li>RuleCategory- string- 规则类别  0=系统规则，1=用户规则</li>
<li>Name- String - 规则名称</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>RuleCategory- string- 规则类别  0=系统规则，1=用户规则</li>
<li>Name- String - 规则名称</li>
 */
class ExportFileTamperRulesRequest extends AbstractModel
{
    /**
     * @var array 过滤条件。
<li>RuleCategory- string- 规则类别  0=系统规则，1=用户规则</li>
<li>Name- String - 规则名称</li>
     */
    public $Filters;

    /**
     * @param array $Filters 过滤条件。
<li>RuleCategory- string- 规则类别  0=系统规则，1=用户规则</li>
<li>Name- String - 规则名称</li>
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
