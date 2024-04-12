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
 * ChatStd请求参数结构体
 *
 * @method array getMessages() 获取聊天上下文信息。
说明：
1. 长度最多为 40，按对话时间从旧到新在数组中排列。
2. Message 的 Role 当前可选值：user、assistant。其中，user 和 assistant 需交替出现（一问一答），以 user 提问开始和结束，且 Content 不能为空。Role 的顺序示例：[user assistant user assistant user ...]。
3. Messages 中 Content 总长度不超过 16000 Token，超过则会截断最前面的内容，只保留尾部内容。建议不超过 4000 Token。

 * @method void setMessages(array $Messages) 设置聊天上下文信息。
说明：
1. 长度最多为 40，按对话时间从旧到新在数组中排列。
2. Message 的 Role 当前可选值：user、assistant。其中，user 和 assistant 需交替出现（一问一答），以 user 提问开始和结束，且 Content 不能为空。Role 的顺序示例：[user assistant user assistant user ...]。
3. Messages 中 Content 总长度不超过 16000 Token，超过则会截断最前面的内容，只保留尾部内容。建议不超过 4000 Token。

 * @method float getTopP() 获取说明：
1. 影响输出文本的多样性，取值越大，生成文本的多样性越强。
2. 默认 1.0，取值区间为 [0.0, 1.0]。
3. 非必要不建议使用，不合理的取值会影响效果。
 * @method void setTopP(float $TopP) 设置说明：
1. 影响输出文本的多样性，取值越大，生成文本的多样性越强。
2. 默认 1.0，取值区间为 [0.0, 1.0]。
3. 非必要不建议使用，不合理的取值会影响效果。
 * @method float getTemperature() 获取说明：
1. 较高的数值会使输出更加随机，而较低的数值会使其更加集中和确定。
2. 默认 1.0，取值区间为 [0.0，2.0]。
3. 非必要不建议使用，不合理的取值会影响效果。
 * @method void setTemperature(float $Temperature) 设置说明：
1. 较高的数值会使输出更加随机，而较低的数值会使其更加集中和确定。
2. 默认 1.0，取值区间为 [0.0，2.0]。
3. 非必要不建议使用，不合理的取值会影响效果。
 * @method boolean getStream() 获取流式调用开关。
说明：
1. 未传值时默认为流式调用。
2. 流式调用时以 SSE 协议增量返回结果。
3. 非流式调用时接口响应耗时较长，非必要不建议使用。
4. 非流式调用时只返回一次最终结果，调用方式与普通 HTTP 请求无异。
 * @method void setStream(boolean $Stream) 设置流式调用开关。
说明：
1. 未传值时默认为流式调用。
2. 流式调用时以 SSE 协议增量返回结果。
3. 非流式调用时接口响应耗时较长，非必要不建议使用。
4. 非流式调用时只返回一次最终结果，调用方式与普通 HTTP 请求无异。
 * @method boolean getStreamModeration() 获取流式输出审核开关。
说明：
1. 当 Stream 字段值为 true 时，该字段有效。
2. 未传值时默认不使用流式输出审核。
3. 如果值为 true，将对输出内容进行分段审核，审核通过的内容流式输出返回。如果出现审核不过，响应中的 finish_reason 值为 sensitive。
4. 如果值为 false，则需要审核完所有输出内容后再返回结果。

注意：
当选择流式输出审核时，可能会出现部分内容已输出，但中间某一段响应中的 finish_reason 值为 sensitive，此时说明安全审核未通过。如果业务场景有实时文字上屏的需求，需要自行撤回已上屏的内容，并建议自定义替换为一条提示语，如 “这个问题我不方便回答，不如我们换个话题试试”，以保障终端体验。
 * @method void setStreamModeration(boolean $StreamModeration) 设置流式输出审核开关。
说明：
1. 当 Stream 字段值为 true 时，该字段有效。
2. 未传值时默认不使用流式输出审核。
3. 如果值为 true，将对输出内容进行分段审核，审核通过的内容流式输出返回。如果出现审核不过，响应中的 finish_reason 值为 sensitive。
4. 如果值为 false，则需要审核完所有输出内容后再返回结果。

注意：
当选择流式输出审核时，可能会出现部分内容已输出，但中间某一段响应中的 finish_reason 值为 sensitive，此时说明安全审核未通过。如果业务场景有实时文字上屏的需求，需要自行撤回已上屏的内容，并建议自定义替换为一条提示语，如 “这个问题我不方便回答，不如我们换个话题试试”，以保障终端体验。
 */
class ChatStdRequest extends AbstractModel
{
    /**
     * @var array 聊天上下文信息。
说明：
1. 长度最多为 40，按对话时间从旧到新在数组中排列。
2. Message 的 Role 当前可选值：user、assistant。其中，user 和 assistant 需交替出现（一问一答），以 user 提问开始和结束，且 Content 不能为空。Role 的顺序示例：[user assistant user assistant user ...]。
3. Messages 中 Content 总长度不超过 16000 Token，超过则会截断最前面的内容，只保留尾部内容。建议不超过 4000 Token。

     */
    public $Messages;

    /**
     * @var float 说明：
1. 影响输出文本的多样性，取值越大，生成文本的多样性越强。
2. 默认 1.0，取值区间为 [0.0, 1.0]。
3. 非必要不建议使用，不合理的取值会影响效果。
     */
    public $TopP;

    /**
     * @var float 说明：
1. 较高的数值会使输出更加随机，而较低的数值会使其更加集中和确定。
2. 默认 1.0，取值区间为 [0.0，2.0]。
3. 非必要不建议使用，不合理的取值会影响效果。
     */
    public $Temperature;

    /**
     * @var boolean 流式调用开关。
说明：
1. 未传值时默认为流式调用。
2. 流式调用时以 SSE 协议增量返回结果。
3. 非流式调用时接口响应耗时较长，非必要不建议使用。
4. 非流式调用时只返回一次最终结果，调用方式与普通 HTTP 请求无异。
     */
    public $Stream;

    /**
     * @var boolean 流式输出审核开关。
说明：
1. 当 Stream 字段值为 true 时，该字段有效。
2. 未传值时默认不使用流式输出审核。
3. 如果值为 true，将对输出内容进行分段审核，审核通过的内容流式输出返回。如果出现审核不过，响应中的 finish_reason 值为 sensitive。
4. 如果值为 false，则需要审核完所有输出内容后再返回结果。

注意：
当选择流式输出审核时，可能会出现部分内容已输出，但中间某一段响应中的 finish_reason 值为 sensitive，此时说明安全审核未通过。如果业务场景有实时文字上屏的需求，需要自行撤回已上屏的内容，并建议自定义替换为一条提示语，如 “这个问题我不方便回答，不如我们换个话题试试”，以保障终端体验。
     */
    public $StreamModeration;

    /**
     * @param array $Messages 聊天上下文信息。
说明：
1. 长度最多为 40，按对话时间从旧到新在数组中排列。
2. Message 的 Role 当前可选值：user、assistant。其中，user 和 assistant 需交替出现（一问一答），以 user 提问开始和结束，且 Content 不能为空。Role 的顺序示例：[user assistant user assistant user ...]。
3. Messages 中 Content 总长度不超过 16000 Token，超过则会截断最前面的内容，只保留尾部内容。建议不超过 4000 Token。

     * @param float $TopP 说明：
1. 影响输出文本的多样性，取值越大，生成文本的多样性越强。
2. 默认 1.0，取值区间为 [0.0, 1.0]。
3. 非必要不建议使用，不合理的取值会影响效果。
     * @param float $Temperature 说明：
1. 较高的数值会使输出更加随机，而较低的数值会使其更加集中和确定。
2. 默认 1.0，取值区间为 [0.0，2.0]。
3. 非必要不建议使用，不合理的取值会影响效果。
     * @param boolean $Stream 流式调用开关。
说明：
1. 未传值时默认为流式调用。
2. 流式调用时以 SSE 协议增量返回结果。
3. 非流式调用时接口响应耗时较长，非必要不建议使用。
4. 非流式调用时只返回一次最终结果，调用方式与普通 HTTP 请求无异。
     * @param boolean $StreamModeration 流式输出审核开关。
说明：
1. 当 Stream 字段值为 true 时，该字段有效。
2. 未传值时默认不使用流式输出审核。
3. 如果值为 true，将对输出内容进行分段审核，审核通过的内容流式输出返回。如果出现审核不过，响应中的 finish_reason 值为 sensitive。
4. 如果值为 false，则需要审核完所有输出内容后再返回结果。

注意：
当选择流式输出审核时，可能会出现部分内容已输出，但中间某一段响应中的 finish_reason 值为 sensitive，此时说明安全审核未通过。如果业务场景有实时文字上屏的需求，需要自行撤回已上屏的内容，并建议自定义替换为一条提示语，如 “这个问题我不方便回答，不如我们换个话题试试”，以保障终端体验。
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

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = $param["TopP"];
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("Stream",$param) and $param["Stream"] !== null) {
            $this->Stream = $param["Stream"];
        }

        if (array_key_exists("StreamModeration",$param) and $param["StreamModeration"] !== null) {
            $this->StreamModeration = $param["StreamModeration"];
        }
    }
}
