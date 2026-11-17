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
 * 大模型安全按小时账单明细行
 *
 * @method string getTimeRange() 获取小时区间，如00:00-01:00
 * @method void setTimeRange(string $TimeRange) 设置小时区间，如00:00-01:00
 * @method integer getPromptAttackUsage() 获取提示词攻击防护计量值（token）
 * @method void setPromptAttackUsage(integer $PromptAttackUsage) 设置提示词攻击防护计量值（token）
 * @method integer getContentTextUsage() 获取内容合规检测（文本）计量值（token）
 * @method void setContentTextUsage(integer $ContentTextUsage) 设置内容合规检测（文本）计量值（token）
 * @method integer getContentImageUsage() 获取内容合规检测（图片）计量值（张）
 * @method void setContentImageUsage(integer $ContentImageUsage) 设置内容合规检测（图片）计量值（张）
 * @method integer getSensitiveDataUsage() 获取敏感数据检测计量值（token）
 * @method void setSensitiveDataUsage(integer $SensitiveDataUsage) 设置敏感数据检测计量值（token）
 * @method string getPromptAttackFee() 获取该小时提示词攻击防护费用（元）
 * @method void setPromptAttackFee(string $PromptAttackFee) 设置该小时提示词攻击防护费用（元）
 * @method string getContentTextFee() 获取该小时内容合规检测（文本）费用（元）
 * @method void setContentTextFee(string $ContentTextFee) 设置该小时内容合规检测（文本）费用（元）
 * @method string getContentImageFee() 获取该小时内容合规检测（图片）费用（元）
 * @method void setContentImageFee(string $ContentImageFee) 设置该小时内容合规检测（图片）费用（元）
 * @method string getSensitiveDataFee() 获取该小时敏感数据检测费用（元）
 * @method void setSensitiveDataFee(string $SensitiveDataFee) 设置该小时敏感数据检测费用（元）
 * @method string getTotalFee() 获取该小时账单总额（元，净费用）
 * @method void setTotalFee(string $TotalFee) 设置该小时账单总额（元，净费用）
 */
class LLMHourBillDetailItem extends AbstractModel
{
    /**
     * @var string 小时区间，如00:00-01:00
     */
    public $TimeRange;

    /**
     * @var integer 提示词攻击防护计量值（token）
     */
    public $PromptAttackUsage;

    /**
     * @var integer 内容合规检测（文本）计量值（token）
     */
    public $ContentTextUsage;

    /**
     * @var integer 内容合规检测（图片）计量值（张）
     */
    public $ContentImageUsage;

    /**
     * @var integer 敏感数据检测计量值（token）
     */
    public $SensitiveDataUsage;

    /**
     * @var string 该小时提示词攻击防护费用（元）
     */
    public $PromptAttackFee;

    /**
     * @var string 该小时内容合规检测（文本）费用（元）
     */
    public $ContentTextFee;

    /**
     * @var string 该小时内容合规检测（图片）费用（元）
     */
    public $ContentImageFee;

    /**
     * @var string 该小时敏感数据检测费用（元）
     */
    public $SensitiveDataFee;

    /**
     * @var string 该小时账单总额（元，净费用）
     */
    public $TotalFee;

    /**
     * @param string $TimeRange 小时区间，如00:00-01:00
     * @param integer $PromptAttackUsage 提示词攻击防护计量值（token）
     * @param integer $ContentTextUsage 内容合规检测（文本）计量值（token）
     * @param integer $ContentImageUsage 内容合规检测（图片）计量值（张）
     * @param integer $SensitiveDataUsage 敏感数据检测计量值（token）
     * @param string $PromptAttackFee 该小时提示词攻击防护费用（元）
     * @param string $ContentTextFee 该小时内容合规检测（文本）费用（元）
     * @param string $ContentImageFee 该小时内容合规检测（图片）费用（元）
     * @param string $SensitiveDataFee 该小时敏感数据检测费用（元）
     * @param string $TotalFee 该小时账单总额（元，净费用）
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
        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }

        if (array_key_exists("PromptAttackUsage",$param) and $param["PromptAttackUsage"] !== null) {
            $this->PromptAttackUsage = $param["PromptAttackUsage"];
        }

        if (array_key_exists("ContentTextUsage",$param) and $param["ContentTextUsage"] !== null) {
            $this->ContentTextUsage = $param["ContentTextUsage"];
        }

        if (array_key_exists("ContentImageUsage",$param) and $param["ContentImageUsage"] !== null) {
            $this->ContentImageUsage = $param["ContentImageUsage"];
        }

        if (array_key_exists("SensitiveDataUsage",$param) and $param["SensitiveDataUsage"] !== null) {
            $this->SensitiveDataUsage = $param["SensitiveDataUsage"];
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

        if (array_key_exists("TotalFee",$param) and $param["TotalFee"] !== null) {
            $this->TotalFee = $param["TotalFee"];
        }
    }
}
