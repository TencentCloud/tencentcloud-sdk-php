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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 处置建议-条目
 *
 * @method string getAction() 获取处置动作
 * @method void setAction(string $Action) 设置处置动作
 * @method string getTarget() 获取处置对象
 * @method void setTarget(string $Target) 设置处置对象
 * @method string getPriority() 获取处置优先级
 * @method void setPriority(string $Priority) 设置处置优先级
 * @method string getSuggestion() 获取处置建议
 * @method void setSuggestion(string $Suggestion) 设置处置建议
 */
class DisposalSuggestionItem extends AbstractModel
{
    /**
     * @var string 处置动作
     */
    public $Action;

    /**
     * @var string 处置对象
     */
    public $Target;

    /**
     * @var string 处置优先级
     */
    public $Priority;

    /**
     * @var string 处置建议
     */
    public $Suggestion;

    /**
     * @param string $Action 处置动作
     * @param string $Target 处置对象
     * @param string $Priority 处置优先级
     * @param string $Suggestion 处置建议
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }
    }
}
