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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 统计信息
 *
 * @method integer getFirstTokenCostMs() 获取<p>首token耗时</p>
 * @method void setFirstTokenCostMs(integer $FirstTokenCostMs) 设置<p>首token耗时</p>
 * @method integer getInputTokens() 获取<p>输入token数量</p>
 * @method void setInputTokens(integer $InputTokens) 设置<p>输入token数量</p>
 * @method string getModelName() 获取<p>模型名称</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称</p>
 * @method integer getOutputTokens() 获取<p>输出token数量</p>
 * @method void setOutputTokens(integer $OutputTokens) 设置<p>输出token数量</p>
 * @method integer getTotalCostMs() 获取<p>推理总耗时</p>
 * @method void setTotalCostMs(integer $TotalCostMs) 设置<p>推理总耗时</p>
 * @method integer getTotalTokens() 获取<p>输入+输出总token</p>
 * @method void setTotalTokens(integer $TotalTokens) 设置<p>输入+输出总token</p>
 */
class Statistic extends AbstractModel
{
    /**
     * @var integer <p>首token耗时</p>
     */
    public $FirstTokenCostMs;

    /**
     * @var integer <p>输入token数量</p>
     */
    public $InputTokens;

    /**
     * @var string <p>模型名称</p>
     */
    public $ModelName;

    /**
     * @var integer <p>输出token数量</p>
     */
    public $OutputTokens;

    /**
     * @var integer <p>推理总耗时</p>
     */
    public $TotalCostMs;

    /**
     * @var integer <p>输入+输出总token</p>
     */
    public $TotalTokens;

    /**
     * @param integer $FirstTokenCostMs <p>首token耗时</p>
     * @param integer $InputTokens <p>输入token数量</p>
     * @param string $ModelName <p>模型名称</p>
     * @param integer $OutputTokens <p>输出token数量</p>
     * @param integer $TotalCostMs <p>推理总耗时</p>
     * @param integer $TotalTokens <p>输入+输出总token</p>
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
        if (array_key_exists("FirstTokenCostMs",$param) and $param["FirstTokenCostMs"] !== null) {
            $this->FirstTokenCostMs = $param["FirstTokenCostMs"];
        }

        if (array_key_exists("InputTokens",$param) and $param["InputTokens"] !== null) {
            $this->InputTokens = $param["InputTokens"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("OutputTokens",$param) and $param["OutputTokens"] !== null) {
            $this->OutputTokens = $param["OutputTokens"];
        }

        if (array_key_exists("TotalCostMs",$param) and $param["TotalCostMs"] !== null) {
            $this->TotalCostMs = $param["TotalCostMs"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }
    }
}
