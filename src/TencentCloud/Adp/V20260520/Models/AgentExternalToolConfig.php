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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 调用方执行的 Function Tool 配置
 *
 * @method string getType() 获取<p>工具类型</p><p>入参限制：目前仅支持 &quot;function&quot;</p>
 * @method void setType(string $Type) 设置<p>工具类型</p><p>入参限制：目前仅支持 &quot;function&quot;</p>
 * @method string getName() 获取<p>工具名称</p>
 * @method void setName(string $Name) 设置<p>工具名称</p>
 * @method string getDescription() 获取<p>工具描述</p>
 * @method void setDescription(string $Description) 设置<p>工具描述</p>
 * @method array getParameters() 获取<p>工具入参定义</p>
 * @method void setParameters(array $Parameters) 设置<p>工具入参定义</p>
 */
class AgentExternalToolConfig extends AbstractModel
{
    /**
     * @var string <p>工具类型</p><p>入参限制：目前仅支持 &quot;function&quot;</p>
     */
    public $Type;

    /**
     * @var string <p>工具名称</p>
     */
    public $Name;

    /**
     * @var string <p>工具描述</p>
     */
    public $Description;

    /**
     * @var array <p>工具入参定义</p>
     */
    public $Parameters;

    /**
     * @param string $Type <p>工具类型</p><p>入参限制：目前仅支持 &quot;function&quot;</p>
     * @param string $Name <p>工具名称</p>
     * @param string $Description <p>工具描述</p>
     * @param array $Parameters <p>工具入参定义</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new RequestParam();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }
    }
}
