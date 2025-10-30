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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChatCompletions请求参数结构体
 *
 * @method array getMessages() 获取会话内容，按对话时间从旧到新在数组中排列，长度受模型窗口大小限制。
 * @method void setMessages(array $Messages) 设置会话内容，按对话时间从旧到新在数组中排列，长度受模型窗口大小限制。
 * @method string getModelName() 获取模型名称，可选模型列表：hunyuan-turbo，hunyuan-large，hunyuan-large-longcontext，hunyuan-standard，hunyuan-standard-256K，deepseek-r1，deepseek-v3，deepseek-r1-distill-qwen-32b。
 * @method void setModelName(string $ModelName) 设置模型名称，可选模型列表：hunyuan-turbo，hunyuan-large，hunyuan-large-longcontext，hunyuan-standard，hunyuan-standard-256K，deepseek-r1，deepseek-v3，deepseek-r1-distill-qwen-32b。
 * @method boolean getStream() 获取是否以流式接口的形式返回数据，默认true。
 * @method void setStream(boolean $Stream) 设置是否以流式接口的形式返回数据，默认true。
 * @method float getTopP() 获取取值区间为[0.0, 1.0], 非必要不建议使用, 不合理的取值会影响效果 。
 * @method void setTopP(float $TopP) 设置取值区间为[0.0, 1.0], 非必要不建议使用, 不合理的取值会影响效果 。
 * @method float getTemperature() 获取取值区间为[0.0, 2.0], 非必要不建议使用, 不合理的取值会影响效果 。
 * @method void setTemperature(float $Temperature) 设置取值区间为[0.0, 2.0], 非必要不建议使用, 不合理的取值会影响效果 。
 * @method boolean getOnlineSearch() 获取是否开启联网搜索。默认为 false。
 * @method void setOnlineSearch(boolean $OnlineSearch) 设置是否开启联网搜索。默认为 false。
 * @method OnlineSearchOptions getOnlineSearchOptions() 获取当 OnlineSearch 为 true 时，指定的搜索引擎，默认为 bing。
 * @method void setOnlineSearchOptions(OnlineSearchOptions $OnlineSearchOptions) 设置当 OnlineSearch 为 true 时，指定的搜索引擎，默认为 bing。
 * @method array getTools() 获取可调用的工具列表，当前支持模型：hunyuan-turbo, deepseek-v3。
 * @method void setTools(array $Tools) 设置可调用的工具列表，当前支持模型：hunyuan-turbo, deepseek-v3。
 * @method string getToolChoice() 获取工具使用选项，可选值包括 none、auto、custom。说明：1. 仅对 hunyuan-turbo、deepseek-v3 模型生效。2. none：不调用工具；auto：模型自行选择生成回复或调用工具；custom：强制模型调用指定的工具。3. 未设置时，默认值为auto
 * @method void setToolChoice(string $ToolChoice) 设置工具使用选项，可选值包括 none、auto、custom。说明：1. 仅对 hunyuan-turbo、deepseek-v3 模型生效。2. none：不调用工具；auto：模型自行选择生成回复或调用工具；custom：强制模型调用指定的工具。3. 未设置时，默认值为auto
 * @method Tool getCustomTool() 获取强制模型调用指定的工具，当参数ToolChoice为custom时，此参数为必填
 * @method void setCustomTool(Tool $CustomTool) 设置强制模型调用指定的工具，当参数ToolChoice为custom时，此参数为必填
 */
class ChatCompletionsRequest extends AbstractModel
{
    /**
     * @var array 会话内容，按对话时间从旧到新在数组中排列，长度受模型窗口大小限制。
     */
    public $Messages;

    /**
     * @var string 模型名称，可选模型列表：hunyuan-turbo，hunyuan-large，hunyuan-large-longcontext，hunyuan-standard，hunyuan-standard-256K，deepseek-r1，deepseek-v3，deepseek-r1-distill-qwen-32b。
     */
    public $ModelName;

    /**
     * @var boolean 是否以流式接口的形式返回数据，默认true。
     */
    public $Stream;

    /**
     * @var float 取值区间为[0.0, 1.0], 非必要不建议使用, 不合理的取值会影响效果 。
     */
    public $TopP;

    /**
     * @var float 取值区间为[0.0, 2.0], 非必要不建议使用, 不合理的取值会影响效果 。
     */
    public $Temperature;

    /**
     * @var boolean 是否开启联网搜索。默认为 false。
     */
    public $OnlineSearch;

    /**
     * @var OnlineSearchOptions 当 OnlineSearch 为 true 时，指定的搜索引擎，默认为 bing。
     */
    public $OnlineSearchOptions;

    /**
     * @var array 可调用的工具列表，当前支持模型：hunyuan-turbo, deepseek-v3。
     */
    public $Tools;

    /**
     * @var string 工具使用选项，可选值包括 none、auto、custom。说明：1. 仅对 hunyuan-turbo、deepseek-v3 模型生效。2. none：不调用工具；auto：模型自行选择生成回复或调用工具；custom：强制模型调用指定的工具。3. 未设置时，默认值为auto
     */
    public $ToolChoice;

    /**
     * @var Tool 强制模型调用指定的工具，当参数ToolChoice为custom时，此参数为必填
     */
    public $CustomTool;

    /**
     * @param array $Messages 会话内容，按对话时间从旧到新在数组中排列，长度受模型窗口大小限制。
     * @param string $ModelName 模型名称，可选模型列表：hunyuan-turbo，hunyuan-large，hunyuan-large-longcontext，hunyuan-standard，hunyuan-standard-256K，deepseek-r1，deepseek-v3，deepseek-r1-distill-qwen-32b。
     * @param boolean $Stream 是否以流式接口的形式返回数据，默认true。
     * @param float $TopP 取值区间为[0.0, 1.0], 非必要不建议使用, 不合理的取值会影响效果 。
     * @param float $Temperature 取值区间为[0.0, 2.0], 非必要不建议使用, 不合理的取值会影响效果 。
     * @param boolean $OnlineSearch 是否开启联网搜索。默认为 false。
     * @param OnlineSearchOptions $OnlineSearchOptions 当 OnlineSearch 为 true 时，指定的搜索引擎，默认为 bing。
     * @param array $Tools 可调用的工具列表，当前支持模型：hunyuan-turbo, deepseek-v3。
     * @param string $ToolChoice 工具使用选项，可选值包括 none、auto、custom。说明：1. 仅对 hunyuan-turbo、deepseek-v3 模型生效。2. none：不调用工具；auto：模型自行选择生成回复或调用工具；custom：强制模型调用指定的工具。3. 未设置时，默认值为auto
     * @param Tool $CustomTool 强制模型调用指定的工具，当参数ToolChoice为custom时，此参数为必填
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
        if (array_key_exists("Messages",$param) and $param["Messages"] !== null) {
            $this->Messages = [];
            foreach ($param["Messages"] as $key => $value){
                $obj = new Message();
                $obj->deserialize($value);
                array_push($this->Messages, $obj);
            }
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("Stream",$param) and $param["Stream"] !== null) {
            $this->Stream = $param["Stream"];
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = $param["TopP"];
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("OnlineSearch",$param) and $param["OnlineSearch"] !== null) {
            $this->OnlineSearch = $param["OnlineSearch"];
        }

        if (array_key_exists("OnlineSearchOptions",$param) and $param["OnlineSearchOptions"] !== null) {
            $this->OnlineSearchOptions = new OnlineSearchOptions();
            $this->OnlineSearchOptions->deserialize($param["OnlineSearchOptions"]);
        }

        if (array_key_exists("Tools",$param) and $param["Tools"] !== null) {
            $this->Tools = [];
            foreach ($param["Tools"] as $key => $value){
                $obj = new Tool();
                $obj->deserialize($value);
                array_push($this->Tools, $obj);
            }
        }

        if (array_key_exists("ToolChoice",$param) and $param["ToolChoice"] !== null) {
            $this->ToolChoice = $param["ToolChoice"];
        }

        if (array_key_exists("CustomTool",$param) and $param["CustomTool"] !== null) {
            $this->CustomTool = new Tool();
            $this->CustomTool->deserialize($param["CustomTool"]);
        }
    }
}
