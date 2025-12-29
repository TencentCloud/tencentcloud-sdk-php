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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent输出配置
 *
 * @method integer getOutputType() 获取输出类型，1-文本 2-json 3-widget
 * @method void setOutputType(integer $OutputType) 设置输出类型，1-文本 2-json 3-widget
 * @method array getStructuredOutputParams() 获取Json结构化输出参数列表
 * @method void setStructuredOutputParams(array $StructuredOutputParams) 设置Json结构化输出参数列表
 * @method string getWidgetId() 获取widget id
 * @method void setWidgetId(string $WidgetId) 设置widget id
 */
class AgentOutputConfig extends AbstractModel
{
    /**
     * @var integer 输出类型，1-文本 2-json 3-widget
     */
    public $OutputType;

    /**
     * @var array Json结构化输出参数列表
     */
    public $StructuredOutputParams;

    /**
     * @var string widget id
     */
    public $WidgetId;

    /**
     * @param integer $OutputType 输出类型，1-文本 2-json 3-widget
     * @param array $StructuredOutputParams Json结构化输出参数列表
     * @param string $WidgetId widget id
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
        if (array_key_exists("OutputType",$param) and $param["OutputType"] !== null) {
            $this->OutputType = $param["OutputType"];
        }

        if (array_key_exists("StructuredOutputParams",$param) and $param["StructuredOutputParams"] !== null) {
            $this->StructuredOutputParams = [];
            foreach ($param["StructuredOutputParams"] as $key => $value){
                $obj = new ParameterConfig();
                $obj->deserialize($value);
                array_push($this->StructuredOutputParams, $obj);
            }
        }

        if (array_key_exists("WidgetId",$param) and $param["WidgetId"] !== null) {
            $this->WidgetId = $param["WidgetId"];
        }
    }
}
