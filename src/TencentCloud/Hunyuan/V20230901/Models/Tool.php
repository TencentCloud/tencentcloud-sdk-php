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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户指定模型使用的工具
 *
 * @method string getType() 获取工具类型，当前只支持function
 * @method void setType(string $Type) 设置工具类型，当前只支持function
 * @method ToolFunction getFunction() 获取具体要调用的function
 * @method void setFunction(ToolFunction $Function) 设置具体要调用的function
 */
class Tool extends AbstractModel
{
    /**
     * @var string 工具类型，当前只支持function
     */
    public $Type;

    /**
     * @var ToolFunction 具体要调用的function
     */
    public $Function;

    /**
     * @param string $Type 工具类型，当前只支持function
     * @param ToolFunction $Function 具体要调用的function
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

        if (array_key_exists("Function",$param) and $param["Function"] !== null) {
            $this->Function = new ToolFunction();
            $this->Function->deserialize($param["Function"]);
        }
    }
}
