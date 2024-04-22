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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消耗量
 *
 * @method integer getTotalPages() 获取文档页数
 * @method void setTotalPages(integer $TotalPages) 设置文档页数
 * @method integer getInputTokens() 获取输入token数
 * @method void setInputTokens(integer $InputTokens) 设置输入token数
 * @method integer getOutputTokens() 获取输出token数
 * @method void setOutputTokens(integer $OutputTokens) 设置输出token数
 * @method integer getTotalTokens() 获取总token数
 * @method void setTotalTokens(integer $TotalTokens) 设置总token数
 */
class Usage extends AbstractModel
{
    /**
     * @var integer 文档页数
     */
    public $TotalPages;

    /**
     * @var integer 输入token数
     */
    public $InputTokens;

    /**
     * @var integer 输出token数
     */
    public $OutputTokens;

    /**
     * @var integer 总token数
     */
    public $TotalTokens;

    /**
     * @param integer $TotalPages 文档页数
     * @param integer $InputTokens 输入token数
     * @param integer $OutputTokens 输出token数
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
        if (array_key_exists("TotalPages",$param) and $param["TotalPages"] !== null) {
            $this->TotalPages = $param["TotalPages"];
        }

        if (array_key_exists("InputTokens",$param) and $param["InputTokens"] !== null) {
            $this->InputTokens = $param["InputTokens"];
        }

        if (array_key_exists("OutputTokens",$param) and $param["OutputTokens"] !== null) {
            $this->OutputTokens = $param["OutputTokens"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }
    }
}
