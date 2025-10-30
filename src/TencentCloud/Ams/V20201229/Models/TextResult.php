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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频文本内容审核结果
 *
 * @method string getLabel() 获取恶意标签，Normal：正常，Porn：色情，Abuse：谩骂，Ad：广告。
以及其他令人反感、不安全或不适宜的内容类型。

如音频中无复杂类型「TextResults」的返回则代表该音频中无相关违规内容；
 * @method void setLabel(string $Label) 设置恶意标签，Normal：正常，Porn：色情，Abuse：谩骂，Ad：广告。
以及其他令人反感、不安全或不适宜的内容类型。

如音频中无复杂类型「TextResults」的返回则代表该音频中无相关违规内容；
 * @method array getKeywords() 获取命中的关键词，为空则代表该违规内容出自于模型的判断；
 * @method void setKeywords(array $Keywords) 设置命中的关键词，为空则代表该违规内容出自于模型的判断；
 * @method string getLibId() 获取命中关键词库的库标识；
 * @method void setLibId(string $LibId) 设置命中关键词库的库标识；
 * @method string getLibName() 获取命中关键词库的名字；
 * @method void setLibName(string $LibName) 设置命中关键词库的名字；
 * @method integer getScore() 获取机器判断当前分类的置信度，取值范围：0~100。分数越高，表示越有可能属于当前分类。
（如：Porn 99，则该样本属于色情的置信度非常高。）
 * @method void setScore(integer $Score) 设置机器判断当前分类的置信度，取值范围：0~100。分数越高，表示越有可能属于当前分类。
（如：Porn 99，则该样本属于色情的置信度非常高。）
 * @method string getSuggestion() 获取建议您拿到判断结果后的执行操作。
建议值，Block：建议屏蔽，Review：建议复审，Pass：建议通过
 * @method void setSuggestion(string $Suggestion) 设置建议您拿到判断结果后的执行操作。
建议值，Block：建议屏蔽，Review：建议复审，Pass：建议通过
 * @method integer getLibType() 获取自定义词库的类型，自定义词库相关的信息可登录控制台中查看；
1：自定义黑白库；
2：公库；
 * @method void setLibType(integer $LibType) 设置自定义词库的类型，自定义词库相关的信息可登录控制台中查看；
1：自定义黑白库；
2：公库；
 * @method string getSubLabel() 获取该字段用于返回当前标签（Lable）下的二级标签。
 * @method void setSubLabel(string $SubLabel) 设置该字段用于返回当前标签（Lable）下的二级标签。
 * @method array getHitInfos() 获取该字段用于返回违规文本命中信息
 * @method void setHitInfos(array $HitInfos) 设置该字段用于返回违规文本命中信息
 */
class TextResult extends AbstractModel
{
    /**
     * @var string 恶意标签，Normal：正常，Porn：色情，Abuse：谩骂，Ad：广告。
以及其他令人反感、不安全或不适宜的内容类型。

如音频中无复杂类型「TextResults」的返回则代表该音频中无相关违规内容；
     */
    public $Label;

    /**
     * @var array 命中的关键词，为空则代表该违规内容出自于模型的判断；
     */
    public $Keywords;

    /**
     * @var string 命中关键词库的库标识；
     */
    public $LibId;

    /**
     * @var string 命中关键词库的名字；
     */
    public $LibName;

    /**
     * @var integer 机器判断当前分类的置信度，取值范围：0~100。分数越高，表示越有可能属于当前分类。
（如：Porn 99，则该样本属于色情的置信度非常高。）
     */
    public $Score;

    /**
     * @var string 建议您拿到判断结果后的执行操作。
建议值，Block：建议屏蔽，Review：建议复审，Pass：建议通过
     */
    public $Suggestion;

    /**
     * @var integer 自定义词库的类型，自定义词库相关的信息可登录控制台中查看；
1：自定义黑白库；
2：公库；
     */
    public $LibType;

    /**
     * @var string 该字段用于返回当前标签（Lable）下的二级标签。
     */
    public $SubLabel;

    /**
     * @var array 该字段用于返回违规文本命中信息
     */
    public $HitInfos;

    /**
     * @param string $Label 恶意标签，Normal：正常，Porn：色情，Abuse：谩骂，Ad：广告。
以及其他令人反感、不安全或不适宜的内容类型。

如音频中无复杂类型「TextResults」的返回则代表该音频中无相关违规内容；
     * @param array $Keywords 命中的关键词，为空则代表该违规内容出自于模型的判断；
     * @param string $LibId 命中关键词库的库标识；
     * @param string $LibName 命中关键词库的名字；
     * @param integer $Score 机器判断当前分类的置信度，取值范围：0~100。分数越高，表示越有可能属于当前分类。
（如：Porn 99，则该样本属于色情的置信度非常高。）
     * @param string $Suggestion 建议您拿到判断结果后的执行操作。
建议值，Block：建议屏蔽，Review：建议复审，Pass：建议通过
     * @param integer $LibType 自定义词库的类型，自定义词库相关的信息可登录控制台中查看；
1：自定义黑白库；
2：公库；
     * @param string $SubLabel 该字段用于返回当前标签（Lable）下的二级标签。
     * @param array $HitInfos 该字段用于返回违规文本命中信息
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("LibId",$param) and $param["LibId"] !== null) {
            $this->LibId = $param["LibId"];
        }

        if (array_key_exists("LibName",$param) and $param["LibName"] !== null) {
            $this->LibName = $param["LibName"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("LibType",$param) and $param["LibType"] !== null) {
            $this->LibType = $param["LibType"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("HitInfos",$param) and $param["HitInfos"] !== null) {
            $this->HitInfos = [];
            foreach ($param["HitInfos"] as $key => $value){
                $obj = new HitInfo();
                $obj->deserialize($value);
                array_push($this->HitInfos, $obj);
            }
        }
    }
}
