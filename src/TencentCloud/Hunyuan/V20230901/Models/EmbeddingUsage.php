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
 * token 使用计数。
 *
 * @method integer getPromptTokens() 获取输入Token数。
 * @method void setPromptTokens(integer $PromptTokens) 设置输入Token数。
 * @method integer getTotalTokens() 获取总Token数。
 * @method void setTotalTokens(integer $TotalTokens) 设置总Token数。
 */
class EmbeddingUsage extends AbstractModel
{
    /**
     * @var integer 输入Token数。
     */
    public $PromptTokens;

    /**
     * @var integer 总Token数。
     */
    public $TotalTokens;

    /**
     * @param integer $PromptTokens 输入Token数。
     * @param integer $TotalTokens 总Token数。
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

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }
    }
}
