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
 * ModifyFunctionComponentBindings请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getFunctionId() 获取函数 ID。
 * @method void setFunctionId(string $FunctionId) 设置函数 ID。
 * @method string getOperation() 获取操作类型，取值有：
<li>bind：绑定组件；</li>
<li>bind-override：绑定组件。若绑定已存在则为重绑定行为，否则为绑定行为；</li>
<li>unbind：解绑组件；</li>
<li>rebind：重置绑定关系。清空所有现有绑定，并设置为传入的绑定列表。若传入空列表，则清空所有绑定。</li>

 * @method void setOperation(string $Operation) 设置操作类型，取值有：
<li>bind：绑定组件；</li>
<li>bind-override：绑定组件。若绑定已存在则为重绑定行为，否则为绑定行为；</li>
<li>unbind：解绑组件；</li>
<li>rebind：重置绑定关系。清空所有现有绑定，并设置为传入的绑定列表。若传入空列表，则清空所有绑定。</li>

 * @method array getFunctionComponentBindings() 获取操作的函数组件绑定列表。当 Operation 为 rebind 且传入空列表时，表示清空所有绑定。
 * @method void setFunctionComponentBindings(array $FunctionComponentBindings) 设置操作的函数组件绑定列表。当 Operation 为 rebind 且传入空列表时，表示清空所有绑定。
 */
class ModifyFunctionComponentBindingsRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 函数 ID。
     */
    public $FunctionId;

    /**
     * @var string 操作类型，取值有：
<li>bind：绑定组件；</li>
<li>bind-override：绑定组件。若绑定已存在则为重绑定行为，否则为绑定行为；</li>
<li>unbind：解绑组件；</li>
<li>rebind：重置绑定关系。清空所有现有绑定，并设置为传入的绑定列表。若传入空列表，则清空所有绑定。</li>

     */
    public $Operation;

    /**
     * @var array 操作的函数组件绑定列表。当 Operation 为 rebind 且传入空列表时，表示清空所有绑定。
     */
    public $FunctionComponentBindings;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $FunctionId 函数 ID。
     * @param string $Operation 操作类型，取值有：
<li>bind：绑定组件；</li>
<li>bind-override：绑定组件。若绑定已存在则为重绑定行为，否则为绑定行为；</li>
<li>unbind：解绑组件；</li>
<li>rebind：重置绑定关系。清空所有现有绑定，并设置为传入的绑定列表。若传入空列表，则清空所有绑定。</li>

     * @param array $FunctionComponentBindings 操作的函数组件绑定列表。当 Operation 为 rebind 且传入空列表时，表示清空所有绑定。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("FunctionComponentBindings",$param) and $param["FunctionComponentBindings"] !== null) {
            $this->FunctionComponentBindings = [];
            foreach ($param["FunctionComponentBindings"] as $key => $value){
                $obj = new FunctionComponentBinding();
                $obj->deserialize($value);
                array_push($this->FunctionComponentBindings, $obj);
            }
        }
    }
}
