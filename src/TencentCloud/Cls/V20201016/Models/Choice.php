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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回的回复, 支持多个
 *
 * @method string getFinishReason() 获取<p>结束标志位，可能为 stop、 sensitive或者tool_calls。<br>stop 表示输出正常结束。<br>sensitive 表示安全审核未通过。<br>tool_calls 标识函数调用。</p><p>注意：<br>可能会出现部分内容已输出，但中间某一段响应中的 FinishReason 值为 sensitive，此时说明安全审核未通过。如果业务场景有实时文字上屏的需求，需要自行撤回已上屏的内容，并建议自定义替换为一条提示语，如 “这个问题我不方便回答，不如我们换个话题试试”，以保障终端体验。</p>
 * @method void setFinishReason(string $FinishReason) 设置<p>结束标志位，可能为 stop、 sensitive或者tool_calls。<br>stop 表示输出正常结束。<br>sensitive 表示安全审核未通过。<br>tool_calls 标识函数调用。</p><p>注意：<br>可能会出现部分内容已输出，但中间某一段响应中的 FinishReason 值为 sensitive，此时说明安全审核未通过。如果业务场景有实时文字上屏的需求，需要自行撤回已上屏的内容，并建议自定义替换为一条提示语，如 “这个问题我不方便回答，不如我们换个话题试试”，以保障终端体验。</p>
 * @method Delta getDelta() 获取<p>增量返回值，流式调用时使用该字段。</p>
 * @method void setDelta(Delta $Delta) 设置<p>增量返回值，流式调用时使用该字段。</p>
 * @method Message getMessage() 获取<p>返回值，非流式调用时使用该字段。</p>
 * @method void setMessage(Message $Message) 设置<p>返回值，非流式调用时使用该字段。</p>
 * @method integer getIndex() 获取<p>索引值，流式调用时使用该字段。</p>
 * @method void setIndex(integer $Index) 设置<p>索引值，流式调用时使用该字段。</p>
 */
class Choice extends AbstractModel
{
    /**
     * @var string <p>结束标志位，可能为 stop、 sensitive或者tool_calls。<br>stop 表示输出正常结束。<br>sensitive 表示安全审核未通过。<br>tool_calls 标识函数调用。</p><p>注意：<br>可能会出现部分内容已输出，但中间某一段响应中的 FinishReason 值为 sensitive，此时说明安全审核未通过。如果业务场景有实时文字上屏的需求，需要自行撤回已上屏的内容，并建议自定义替换为一条提示语，如 “这个问题我不方便回答，不如我们换个话题试试”，以保障终端体验。</p>
     */
    public $FinishReason;

    /**
     * @var Delta <p>增量返回值，流式调用时使用该字段。</p>
     */
    public $Delta;

    /**
     * @var Message <p>返回值，非流式调用时使用该字段。</p>
     */
    public $Message;

    /**
     * @var integer <p>索引值，流式调用时使用该字段。</p>
     */
    public $Index;

    /**
     * @param string $FinishReason <p>结束标志位，可能为 stop、 sensitive或者tool_calls。<br>stop 表示输出正常结束。<br>sensitive 表示安全审核未通过。<br>tool_calls 标识函数调用。</p><p>注意：<br>可能会出现部分内容已输出，但中间某一段响应中的 FinishReason 值为 sensitive，此时说明安全审核未通过。如果业务场景有实时文字上屏的需求，需要自行撤回已上屏的内容，并建议自定义替换为一条提示语，如 “这个问题我不方便回答，不如我们换个话题试试”，以保障终端体验。</p>
     * @param Delta $Delta <p>增量返回值，流式调用时使用该字段。</p>
     * @param Message $Message <p>返回值，非流式调用时使用该字段。</p>
     * @param integer $Index <p>索引值，流式调用时使用该字段。</p>
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
        if (array_key_exists("FinishReason",$param) and $param["FinishReason"] !== null) {
            $this->FinishReason = $param["FinishReason"];
        }

        if (array_key_exists("Delta",$param) and $param["Delta"] !== null) {
            $this->Delta = new Delta();
            $this->Delta->deserialize($param["Delta"]);
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = new Message();
            $this->Message->deserialize($param["Message"]);
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
