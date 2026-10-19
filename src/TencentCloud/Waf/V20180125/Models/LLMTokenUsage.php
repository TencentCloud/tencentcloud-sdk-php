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
 * LLM实例当天4个计费模块的token消耗量及近7天趋势（均为实例维度）
 *
 * @method integer getPromptUsage() 获取<p>今日提示词攻击防护 token 消耗量</p>
 * @method void setPromptUsage(integer $PromptUsage) 设置<p>今日提示词攻击防护 token 消耗量</p>
 * @method integer getContentTextUsage() 获取<p>今日内容安全文本检测 token 消耗量</p>
 * @method void setContentTextUsage(integer $ContentTextUsage) 设置<p>今日内容安全文本检测 token 消耗量</p>
 * @method integer getSensitiveDataUsage() 获取<p>今日敏感数据检测 token 消耗量</p>
 * @method void setSensitiveDataUsage(integer $SensitiveDataUsage) 设置<p>今日敏感数据检测 token 消耗量</p>
 * @method integer getContentImageUsage() 获取<p>今日图片送检量（单位：张）</p>
 * @method void setContentImageUsage(integer $ContentImageUsage) 设置<p>今日图片送检量（单位：张）</p>
 * @method array getTokenTrend() 获取<p>该实例近7天token总量趋势（按天，缺失日期补0）</p>
 * @method void setTokenTrend(array $TokenTrend) 设置<p>该实例近7天token总量趋势（按天，缺失日期补0）</p>
 * @method array getImageTrend() 获取<p>该实例近7天图片送检趋势（按天，缺失日期补0）</p>
 * @method void setImageTrend(array $ImageTrend) 设置<p>该实例近7天图片送检趋势（按天，缺失日期补0）</p>
 */
class LLMTokenUsage extends AbstractModel
{
    /**
     * @var integer <p>今日提示词攻击防护 token 消耗量</p>
     */
    public $PromptUsage;

    /**
     * @var integer <p>今日内容安全文本检测 token 消耗量</p>
     */
    public $ContentTextUsage;

    /**
     * @var integer <p>今日敏感数据检测 token 消耗量</p>
     */
    public $SensitiveDataUsage;

    /**
     * @var integer <p>今日图片送检量（单位：张）</p>
     */
    public $ContentImageUsage;

    /**
     * @var array <p>该实例近7天token总量趋势（按天，缺失日期补0）</p>
     */
    public $TokenTrend;

    /**
     * @var array <p>该实例近7天图片送检趋势（按天，缺失日期补0）</p>
     */
    public $ImageTrend;

    /**
     * @param integer $PromptUsage <p>今日提示词攻击防护 token 消耗量</p>
     * @param integer $ContentTextUsage <p>今日内容安全文本检测 token 消耗量</p>
     * @param integer $SensitiveDataUsage <p>今日敏感数据检测 token 消耗量</p>
     * @param integer $ContentImageUsage <p>今日图片送检量（单位：张）</p>
     * @param array $TokenTrend <p>该实例近7天token总量趋势（按天，缺失日期补0）</p>
     * @param array $ImageTrend <p>该实例近7天图片送检趋势（按天，缺失日期补0）</p>
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
        if (array_key_exists("PromptUsage",$param) and $param["PromptUsage"] !== null) {
            $this->PromptUsage = $param["PromptUsage"];
        }

        if (array_key_exists("ContentTextUsage",$param) and $param["ContentTextUsage"] !== null) {
            $this->ContentTextUsage = $param["ContentTextUsage"];
        }

        if (array_key_exists("SensitiveDataUsage",$param) and $param["SensitiveDataUsage"] !== null) {
            $this->SensitiveDataUsage = $param["SensitiveDataUsage"];
        }

        if (array_key_exists("ContentImageUsage",$param) and $param["ContentImageUsage"] !== null) {
            $this->ContentImageUsage = $param["ContentImageUsage"];
        }

        if (array_key_exists("TokenTrend",$param) and $param["TokenTrend"] !== null) {
            $this->TokenTrend = [];
            foreach ($param["TokenTrend"] as $key => $value){
                $obj = new LLMTokenTrendItem();
                $obj->deserialize($value);
                array_push($this->TokenTrend, $obj);
            }
        }

        if (array_key_exists("ImageTrend",$param) and $param["ImageTrend"] !== null) {
            $this->ImageTrend = [];
            foreach ($param["ImageTrend"] as $key => $value){
                $obj = new LLMImageTrendItem();
                $obj->deserialize($value);
                array_push($this->ImageTrend, $obj);
            }
        }
    }
}
