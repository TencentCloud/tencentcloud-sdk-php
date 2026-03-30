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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大模型原子能力审核明细
 *
 * @method string getLabelName() 获取<p>命中的标签名</p>
 * @method void setLabelName(string $LabelName) 设置<p>命中的标签名</p>
 * @method string getReason() 获取<p>命中标签的原因</p>
 * @method void setReason(string $Reason) 设置<p>命中标签的原因</p>
 * @method array getTargetText() 获取<p>命中的文本内容</p>
 * @method void setTargetText(array $TargetText) 设置<p>命中的文本内容</p>
 * @method string getSuggestion() 获取<p>违规建议</p>
 * @method void setSuggestion(string $Suggestion) 设置<p>违规建议</p>
 */
class VideoLLMDetail extends AbstractModel
{
    /**
     * @var string <p>命中的标签名</p>
     */
    public $LabelName;

    /**
     * @var string <p>命中标签的原因</p>
     */
    public $Reason;

    /**
     * @var array <p>命中的文本内容</p>
     */
    public $TargetText;

    /**
     * @var string <p>违规建议</p>
     */
    public $Suggestion;

    /**
     * @param string $LabelName <p>命中的标签名</p>
     * @param string $Reason <p>命中标签的原因</p>
     * @param array $TargetText <p>命中的文本内容</p>
     * @param string $Suggestion <p>违规建议</p>
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
        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("TargetText",$param) and $param["TargetText"] !== null) {
            $this->TargetText = $param["TargetText"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }
    }
}
