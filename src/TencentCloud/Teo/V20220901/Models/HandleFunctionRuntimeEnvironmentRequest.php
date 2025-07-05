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
 * HandleFunctionRuntimeEnvironment请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getFunctionId() 获取函数 ID。
 * @method void setFunctionId(string $FunctionId) 设置函数 ID。
 * @method string getOperation() 获取操作类型，取值有：
<li>setEnvironmentVariable：设置环境变量，当环境变量存在时为修改行为，否则为添加行为；</li>
<li>deleteEnvironmentVariable：删除环境变量变量；</li>
<li>clearEnvironmentVariable：清空环境变量变量；</li>
<li>resetEnvironmentVariable：重置环境变量变量。</li>
 * @method void setOperation(string $Operation) 设置操作类型，取值有：
<li>setEnvironmentVariable：设置环境变量，当环境变量存在时为修改行为，否则为添加行为；</li>
<li>deleteEnvironmentVariable：删除环境变量变量；</li>
<li>clearEnvironmentVariable：清空环境变量变量；</li>
<li>resetEnvironmentVariable：重置环境变量变量。</li>
 * @method array getEnvironmentVariables() 获取环境变量列表，函数运行环境最多支持 64 个变量。当 Operation 取值为 setEnvironmentVariable、deleteEnvironmentVariable、resetEnvironmentVariable 时必填。
 * @method void setEnvironmentVariables(array $EnvironmentVariables) 设置环境变量列表，函数运行环境最多支持 64 个变量。当 Operation 取值为 setEnvironmentVariable、deleteEnvironmentVariable、resetEnvironmentVariable 时必填。
 */
class HandleFunctionRuntimeEnvironmentRequest extends AbstractModel
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
<li>setEnvironmentVariable：设置环境变量，当环境变量存在时为修改行为，否则为添加行为；</li>
<li>deleteEnvironmentVariable：删除环境变量变量；</li>
<li>clearEnvironmentVariable：清空环境变量变量；</li>
<li>resetEnvironmentVariable：重置环境变量变量。</li>
     */
    public $Operation;

    /**
     * @var array 环境变量列表，函数运行环境最多支持 64 个变量。当 Operation 取值为 setEnvironmentVariable、deleteEnvironmentVariable、resetEnvironmentVariable 时必填。
     */
    public $EnvironmentVariables;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $FunctionId 函数 ID。
     * @param string $Operation 操作类型，取值有：
<li>setEnvironmentVariable：设置环境变量，当环境变量存在时为修改行为，否则为添加行为；</li>
<li>deleteEnvironmentVariable：删除环境变量变量；</li>
<li>clearEnvironmentVariable：清空环境变量变量；</li>
<li>resetEnvironmentVariable：重置环境变量变量。</li>
     * @param array $EnvironmentVariables 环境变量列表，函数运行环境最多支持 64 个变量。当 Operation 取值为 setEnvironmentVariable、deleteEnvironmentVariable、resetEnvironmentVariable 时必填。
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

        if (array_key_exists("EnvironmentVariables",$param) and $param["EnvironmentVariables"] !== null) {
            $this->EnvironmentVariables = [];
            foreach ($param["EnvironmentVariables"] as $key => $value){
                $obj = new FunctionEnvironmentVariable();
                $obj->deserialize($value);
                array_push($this->EnvironmentVariables, $obj);
            }
        }
    }
}
