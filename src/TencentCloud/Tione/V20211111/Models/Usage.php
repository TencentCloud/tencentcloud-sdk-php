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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大模型生成Token统计
 *
 * @method integer getCompletionTokens() 获取生成的token数目
 * @method void setCompletionTokens(integer $CompletionTokens) 设置生成的token数目
 * @method integer getPromptTokens() 获取输入的token数目
 * @method void setPromptTokens(integer $PromptTokens) 设置输入的token数目
 * @method integer getTotalTokens() 获取总共token数目
 * @method void setTotalTokens(integer $TotalTokens) 设置总共token数目
 */
class Usage extends AbstractModel
{
    /**
     * @var integer 生成的token数目
     */
    public $CompletionTokens;

    /**
     * @var integer 输入的token数目
     */
    public $PromptTokens;

    /**
     * @var integer 总共token数目
     */
    public $TotalTokens;

    /**
     * @param integer $CompletionTokens 生成的token数目
     * @param integer $PromptTokens 输入的token数目
     * @param integer $TotalTokens 总共token数目
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
        if (array_key_exists("CompletionTokens",$param) and $param["CompletionTokens"] !== null) {
            $this->CompletionTokens = $param["CompletionTokens"];
        }

        if (array_key_exists("PromptTokens",$param) and $param["PromptTokens"] !== null) {
            $this->PromptTokens = $param["PromptTokens"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }
    }
}
