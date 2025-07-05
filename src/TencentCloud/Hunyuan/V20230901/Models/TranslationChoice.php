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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 翻译接口返回的回复，支持多个
 *
 * @method string getFinishReason() 获取结束标志位，可能为 stop、 sensitive。
stop 表示输出正常结束。
sensitive 只在开启流式输出审核时会出现，表示安全审核未通过。
 * @method void setFinishReason(string $FinishReason) 设置结束标志位，可能为 stop、 sensitive。
stop 表示输出正常结束。
sensitive 只在开启流式输出审核时会出现，表示安全审核未通过。
 * @method integer getIndex() 获取索引值，流式调用时使用该字段。
 * @method void setIndex(integer $Index) 设置索引值，流式调用时使用该字段。
 * @method TranslationDelta getDelta() 获取增量返回值，流式调用时使用该字段。
 * @method void setDelta(TranslationDelta $Delta) 设置增量返回值，流式调用时使用该字段。
 * @method TranslationMessage getMessage() 获取返回值，非流式调用时使用该字段。
 * @method void setMessage(TranslationMessage $Message) 设置返回值，非流式调用时使用该字段。
 */
class TranslationChoice extends AbstractModel
{
    /**
     * @var string 结束标志位，可能为 stop、 sensitive。
stop 表示输出正常结束。
sensitive 只在开启流式输出审核时会出现，表示安全审核未通过。
     */
    public $FinishReason;

    /**
     * @var integer 索引值，流式调用时使用该字段。
     */
    public $Index;

    /**
     * @var TranslationDelta 增量返回值，流式调用时使用该字段。
     */
    public $Delta;

    /**
     * @var TranslationMessage 返回值，非流式调用时使用该字段。
     */
    public $Message;

    /**
     * @param string $FinishReason 结束标志位，可能为 stop、 sensitive。
stop 表示输出正常结束。
sensitive 只在开启流式输出审核时会出现，表示安全审核未通过。
     * @param integer $Index 索引值，流式调用时使用该字段。
     * @param TranslationDelta $Delta 增量返回值，流式调用时使用该字段。
     * @param TranslationMessage $Message 返回值，非流式调用时使用该字段。
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

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Delta",$param) and $param["Delta"] !== null) {
            $this->Delta = new TranslationDelta();
            $this->Delta->deserialize($param["Delta"]);
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = new TranslationMessage();
            $this->Message->deserialize($param["Message"]);
        }
    }
}
