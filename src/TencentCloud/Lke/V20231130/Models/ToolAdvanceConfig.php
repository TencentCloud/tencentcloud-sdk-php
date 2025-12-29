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
 * 工具高级设置
 *
 * @method boolean getEnableDirectResultReturn() 获取工具调用结果是否直接返回给用户
 * @method void setEnableDirectResultReturn(boolean $EnableDirectResultReturn) 设置工具调用结果是否直接返回给用户
 * @method integer getOutputType() 获取输出样式 1-文本 2-json 3-widget
 * @method void setOutputType(integer $OutputType) 设置输出样式 1-文本 2-json 3-widget
 * @method string getRawStructuredOutput() 获取原始结构化JSON输出
 * @method void setRawStructuredOutput(string $RawStructuredOutput) 设置原始结构化JSON输出
 * @method string getCustomTextOutputs() 获取自定义文本输出，多行展示
 * @method void setCustomTextOutputs(string $CustomTextOutputs) 设置自定义文本输出，多行展示
 * @method OutputWidgetConfig getOutputWidgetConfig() 获取Widget输出配置
 * @method void setOutputWidgetConfig(OutputWidgetConfig $OutputWidgetConfig) 设置Widget输出配置
 */
class ToolAdvanceConfig extends AbstractModel
{
    /**
     * @var boolean 工具调用结果是否直接返回给用户
     */
    public $EnableDirectResultReturn;

    /**
     * @var integer 输出样式 1-文本 2-json 3-widget
     */
    public $OutputType;

    /**
     * @var string 原始结构化JSON输出
     */
    public $RawStructuredOutput;

    /**
     * @var string 自定义文本输出，多行展示
     */
    public $CustomTextOutputs;

    /**
     * @var OutputWidgetConfig Widget输出配置
     */
    public $OutputWidgetConfig;

    /**
     * @param boolean $EnableDirectResultReturn 工具调用结果是否直接返回给用户
     * @param integer $OutputType 输出样式 1-文本 2-json 3-widget
     * @param string $RawStructuredOutput 原始结构化JSON输出
     * @param string $CustomTextOutputs 自定义文本输出，多行展示
     * @param OutputWidgetConfig $OutputWidgetConfig Widget输出配置
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
        if (array_key_exists("EnableDirectResultReturn",$param) and $param["EnableDirectResultReturn"] !== null) {
            $this->EnableDirectResultReturn = $param["EnableDirectResultReturn"];
        }

        if (array_key_exists("OutputType",$param) and $param["OutputType"] !== null) {
            $this->OutputType = $param["OutputType"];
        }

        if (array_key_exists("RawStructuredOutput",$param) and $param["RawStructuredOutput"] !== null) {
            $this->RawStructuredOutput = $param["RawStructuredOutput"];
        }

        if (array_key_exists("CustomTextOutputs",$param) and $param["CustomTextOutputs"] !== null) {
            $this->CustomTextOutputs = $param["CustomTextOutputs"];
        }

        if (array_key_exists("OutputWidgetConfig",$param) and $param["OutputWidgetConfig"] !== null) {
            $this->OutputWidgetConfig = new OutputWidgetConfig();
            $this->OutputWidgetConfig->deserialize($param["OutputWidgetConfig"]);
        }
    }
}
