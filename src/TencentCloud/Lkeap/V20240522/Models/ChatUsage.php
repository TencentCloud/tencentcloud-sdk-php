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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消耗量
 *
 * @method integer getPromptTokens() 获取输入token数
 * @method void setPromptTokens(integer $PromptTokens) 设置输入token数
 * @method integer getCompletionTokens() 获取输出token数
 * @method void setCompletionTokens(integer $CompletionTokens) 设置输出token数
 * @method integer getTotalTokens() 获取总token数
 * @method void setTotalTokens(integer $TotalTokens) 设置总token数
 */
class ChatUsage extends AbstractModel
{
    /**
     * @var integer 输入token数
     */
    public $PromptTokens;

    /**
     * @var integer 输出token数
     */
    public $CompletionTokens;

    /**
     * @var integer 总token数
     */
    public $TotalTokens;

    /**
     * @param integer $PromptTokens 输入token数
     * @param integer $CompletionTokens 输出token数
     * @param integer $TotalTokens 总token数
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
        if (array_key_exists("PromptTokens",$param) and $param["PromptTokens"] !== null) {
            $this->PromptTokens = $param["PromptTokens"];
        }

        if (array_key_exists("CompletionTokens",$param) and $param["CompletionTokens"] !== null) {
            $this->CompletionTokens = $param["CompletionTokens"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }
    }
}
