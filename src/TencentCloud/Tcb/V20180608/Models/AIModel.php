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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 模型信息
 *
 * @method string getModel() 获取模型名
 * @method void setModel(string $Model) 设置模型名
 * @method boolean getEnableMCP() 获取是否开启MCP
 * @method void setEnableMCP(boolean $EnableMCP) 设置是否开启MCP
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 */
class AIModel extends AbstractModel
{
    /**
     * @var string 模型名
     */
    public $Model;

    /**
     * @var boolean 是否开启MCP
     */
    public $EnableMCP;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @param string $Model 模型名
     * @param boolean $EnableMCP 是否开启MCP
     * @param array $Tags 标签
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("EnableMCP",$param) and $param["EnableMCP"] !== null) {
            $this->EnableMCP = $param["EnableMCP"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
