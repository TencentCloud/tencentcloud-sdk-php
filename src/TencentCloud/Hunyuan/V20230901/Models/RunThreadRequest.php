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
 * RunThread请求参数结构体
 *
 * @method string getThreadID() 获取会话 ID
 * @method void setThreadID(string $ThreadID) 设置会话 ID
 * @method string getAssistantID() 获取助手 ID（目前未使用，留空）
 * @method void setAssistantID(string $AssistantID) 设置助手 ID（目前未使用，留空）
 * @method string getModel() 获取模型名称，可选值包括 hunyuan-lite、hunyuan-standard、hunyuan-standard-256K、hunyuan-pro、 hunyuan-code、 hunyuan-role、 hunyuan-functioncall、 hunyuan-vision、 hunyuan-turbo。各模型介绍请阅读 [产品概述](https://cloud.tencent.com/document/product/1729/104753) 中的说明。注意：不同的模型计费不同，请根据 [购买指南](https://cloud.tencent.com/document/product/1729/97731) 按需调用。
 * @method void setModel(string $Model) 设置模型名称，可选值包括 hunyuan-lite、hunyuan-standard、hunyuan-standard-256K、hunyuan-pro、 hunyuan-code、 hunyuan-role、 hunyuan-functioncall、 hunyuan-vision、 hunyuan-turbo。各模型介绍请阅读 [产品概述](https://cloud.tencent.com/document/product/1729/104753) 中的说明。注意：不同的模型计费不同，请根据 [购买指南](https://cloud.tencent.com/document/product/1729/97731) 按需调用。
 * @method array getAdditionalMessages() 获取附加消息
 * @method void setAdditionalMessages(array $AdditionalMessages) 设置附加消息
 * @method float getTemperature() 获取说明：1. 影响模型输出多样性，模型已有默认参数，不传值时使用各模型推荐值，不推荐用户修改。2. 取值区间为 [0.0, 2.0]。较高的数值会使输出更加多样化和不可预测，而较低的数值会使其更加集中和确定。
 * @method void setTemperature(float $Temperature) 设置说明：1. 影响模型输出多样性，模型已有默认参数，不传值时使用各模型推荐值，不推荐用户修改。2. 取值区间为 [0.0, 2.0]。较高的数值会使输出更加多样化和不可预测，而较低的数值会使其更加集中和确定。
 * @method float getTopP() 获取说明：1. 影响输出文本的多样性。模型已有默认参数，不传值时使用各模型推荐值，不推荐用户修改。2. 取值区间为 [0.0, 1.0]。取值越大，生成文本的多样性越强。
 * @method void setTopP(float $TopP) 设置说明：1. 影响输出文本的多样性。模型已有默认参数，不传值时使用各模型推荐值，不推荐用户修改。2. 取值区间为 [0.0, 1.0]。取值越大，生成文本的多样性越强。
 * @method boolean getStream() 获取是否流式输出，当前只允许 true
 * @method void setStream(boolean $Stream) 设置是否流式输出，当前只允许 true
 * @method integer getMaxPromptTokens() 获取运行过程中可使用的 token 最大数量。
 * @method void setMaxPromptTokens(integer $MaxPromptTokens) 设置运行过程中可使用的 token 最大数量。
 * @method integer getMaxCompletionTokens() 获取运行过程中可使用的完成 token 的最大数量。
 * @method void setMaxCompletionTokens(integer $MaxCompletionTokens) 设置运行过程中可使用的完成 token 的最大数量。
 * @method array getTools() 获取可调用的工具列表，仅对 hunyuan-pro、hunyuan-turbo、hunyuan-functioncall 模型生效。
 * @method void setTools(array $Tools) 设置可调用的工具列表，仅对 hunyuan-pro、hunyuan-turbo、hunyuan-functioncall 模型生效。
 * @method string getToolChoice() 获取工具使用选项，可选值包括 none、auto、custom。说明：1. 仅对 hunyuan-pro、hunyuan-turbo、hunyuan-functioncall 模型生效。2. none：不调用工具；auto：模型自行选择生成回复或调用工具；custom：强制模型调用指定的工具。3. 未设置时，默认值为auto
 * @method void setToolChoice(string $ToolChoice) 设置工具使用选项，可选值包括 none、auto、custom。说明：1. 仅对 hunyuan-pro、hunyuan-turbo、hunyuan-functioncall 模型生效。2. none：不调用工具；auto：模型自行选择生成回复或调用工具；custom：强制模型调用指定的工具。3. 未设置时，默认值为auto
 */
class RunThreadRequest extends AbstractModel
{
    /**
     * @var string 会话 ID
     */
    public $ThreadID;

    /**
     * @var string 助手 ID（目前未使用，留空）
     */
    public $AssistantID;

    /**
     * @var string 模型名称，可选值包括 hunyuan-lite、hunyuan-standard、hunyuan-standard-256K、hunyuan-pro、 hunyuan-code、 hunyuan-role、 hunyuan-functioncall、 hunyuan-vision、 hunyuan-turbo。各模型介绍请阅读 [产品概述](https://cloud.tencent.com/document/product/1729/104753) 中的说明。注意：不同的模型计费不同，请根据 [购买指南](https://cloud.tencent.com/document/product/1729/97731) 按需调用。
     */
    public $Model;

    /**
     * @var array 附加消息
     */
    public $AdditionalMessages;

    /**
     * @var float 说明：1. 影响模型输出多样性，模型已有默认参数，不传值时使用各模型推荐值，不推荐用户修改。2. 取值区间为 [0.0, 2.0]。较高的数值会使输出更加多样化和不可预测，而较低的数值会使其更加集中和确定。
     */
    public $Temperature;

    /**
     * @var float 说明：1. 影响输出文本的多样性。模型已有默认参数，不传值时使用各模型推荐值，不推荐用户修改。2. 取值区间为 [0.0, 1.0]。取值越大，生成文本的多样性越强。
     */
    public $TopP;

    /**
     * @var boolean 是否流式输出，当前只允许 true
     */
    public $Stream;

    /**
     * @var integer 运行过程中可使用的 token 最大数量。
     */
    public $MaxPromptTokens;

    /**
     * @var integer 运行过程中可使用的完成 token 的最大数量。
     */
    public $MaxCompletionTokens;

    /**
     * @var array 可调用的工具列表，仅对 hunyuan-pro、hunyuan-turbo、hunyuan-functioncall 模型生效。
     */
    public $Tools;

    /**
     * @var string 工具使用选项，可选值包括 none、auto、custom。说明：1. 仅对 hunyuan-pro、hunyuan-turbo、hunyuan-functioncall 模型生效。2. none：不调用工具；auto：模型自行选择生成回复或调用工具；custom：强制模型调用指定的工具。3. 未设置时，默认值为auto
     */
    public $ToolChoice;

    /**
     * @param string $ThreadID 会话 ID
     * @param string $AssistantID 助手 ID（目前未使用，留空）
     * @param string $Model 模型名称，可选值包括 hunyuan-lite、hunyuan-standard、hunyuan-standard-256K、hunyuan-pro、 hunyuan-code、 hunyuan-role、 hunyuan-functioncall、 hunyuan-vision、 hunyuan-turbo。各模型介绍请阅读 [产品概述](https://cloud.tencent.com/document/product/1729/104753) 中的说明。注意：不同的模型计费不同，请根据 [购买指南](https://cloud.tencent.com/document/product/1729/97731) 按需调用。
     * @param array $AdditionalMessages 附加消息
     * @param float $Temperature 说明：1. 影响模型输出多样性，模型已有默认参数，不传值时使用各模型推荐值，不推荐用户修改。2. 取值区间为 [0.0, 2.0]。较高的数值会使输出更加多样化和不可预测，而较低的数值会使其更加集中和确定。
     * @param float $TopP 说明：1. 影响输出文本的多样性。模型已有默认参数，不传值时使用各模型推荐值，不推荐用户修改。2. 取值区间为 [0.0, 1.0]。取值越大，生成文本的多样性越强。
     * @param boolean $Stream 是否流式输出，当前只允许 true
     * @param integer $MaxPromptTokens 运行过程中可使用的 token 最大数量。
     * @param integer $MaxCompletionTokens 运行过程中可使用的完成 token 的最大数量。
     * @param array $Tools 可调用的工具列表，仅对 hunyuan-pro、hunyuan-turbo、hunyuan-functioncall 模型生效。
     * @param string $ToolChoice 工具使用选项，可选值包括 none、auto、custom。说明：1. 仅对 hunyuan-pro、hunyuan-turbo、hunyuan-functioncall 模型生效。2. none：不调用工具；auto：模型自行选择生成回复或调用工具；custom：强制模型调用指定的工具。3. 未设置时，默认值为auto
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
        if (array_key_exists("ThreadID",$param) and $param["ThreadID"] !== null) {
            $this->ThreadID = $param["ThreadID"];
        }

        if (array_key_exists("AssistantID",$param) and $param["AssistantID"] !== null) {
            $this->AssistantID = $param["AssistantID"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("AdditionalMessages",$param) and $param["AdditionalMessages"] !== null) {
            $this->AdditionalMessages = [];
            foreach ($param["AdditionalMessages"] as $key => $value){
                $obj = new ThreadAdditionalMessage();
                $obj->deserialize($value);
                array_push($this->AdditionalMessages, $obj);
            }
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = $param["TopP"];
        }

        if (array_key_exists("Stream",$param) and $param["Stream"] !== null) {
            $this->Stream = $param["Stream"];
        }

        if (array_key_exists("MaxPromptTokens",$param) and $param["MaxPromptTokens"] !== null) {
            $this->MaxPromptTokens = $param["MaxPromptTokens"];
        }

        if (array_key_exists("MaxCompletionTokens",$param) and $param["MaxCompletionTokens"] !== null) {
            $this->MaxCompletionTokens = $param["MaxCompletionTokens"];
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
    }
}
