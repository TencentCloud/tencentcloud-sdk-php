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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大模型安全按小时账单分项费用
 *
 * @method string getPromptAttackFee() 获取提示词攻击防护费用（元）
 * @method void setPromptAttackFee(string $PromptAttackFee) 设置提示词攻击防护费用（元）
 * @method string getContentTextFee() 获取内容合规检测（文本）费用（元）
 * @method void setContentTextFee(string $ContentTextFee) 设置内容合规检测（文本）费用（元）
 * @method string getContentImageFee() 获取内容合规检测（图片）费用（元）
 * @method void setContentImageFee(string $ContentImageFee) 设置内容合规检测（图片）费用（元）
 * @method string getSensitiveDataFee() 获取敏感数据检测费用（元）
 * @method void setSensitiveDataFee(string $SensitiveDataFee) 设置敏感数据检测费用（元）
 */
class LLMBillItemFee extends AbstractModel
{
    /**
     * @var string 提示词攻击防护费用（元）
     */
    public $PromptAttackFee;

    /**
     * @var string 内容合规检测（文本）费用（元）
     */
    public $ContentTextFee;

    /**
     * @var string 内容合规检测（图片）费用（元）
     */
    public $ContentImageFee;

    /**
     * @var string 敏感数据检测费用（元）
     */
    public $SensitiveDataFee;

    /**
     * @param string $PromptAttackFee 提示词攻击防护费用（元）
     * @param string $ContentTextFee 内容合规检测（文本）费用（元）
     * @param string $ContentImageFee 内容合规检测（图片）费用（元）
     * @param string $SensitiveDataFee 敏感数据检测费用（元）
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
        if (array_key_exists("PromptAttackFee",$param) and $param["PromptAttackFee"] !== null) {
            $this->PromptAttackFee = $param["PromptAttackFee"];
        }

        if (array_key_exists("ContentTextFee",$param) and $param["ContentTextFee"] !== null) {
            $this->ContentTextFee = $param["ContentTextFee"];
        }

        if (array_key_exists("ContentImageFee",$param) and $param["ContentImageFee"] !== null) {
            $this->ContentImageFee = $param["ContentImageFee"];
        }

        if (array_key_exists("SensitiveDataFee",$param) and $param["SensitiveDataFee"] !== null) {
            $this->SensitiveDataFee = $param["SensitiveDataFee"];
        }
    }
}
