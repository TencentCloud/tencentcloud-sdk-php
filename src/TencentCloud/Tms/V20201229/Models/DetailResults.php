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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文本审核返回的详细结果
 *
 * @method string getLabel() 获取<p>该字段用于返回检测结果所对应的全部恶意标签。<br>返回值：<strong>Normal</strong>：正常，<strong>Porn</strong>：色情，<strong>Abuse</strong>：谩骂，<strong>Ad</strong>：广告；以及其他令人反感、不安全或不适宜的内容类型。</p>
 * @method void setLabel(string $Label) 设置<p>该字段用于返回检测结果所对应的全部恶意标签。<br>返回值：<strong>Normal</strong>：正常，<strong>Porn</strong>：色情，<strong>Abuse</strong>：谩骂，<strong>Ad</strong>：广告；以及其他令人反感、不安全或不适宜的内容类型。</p>
 * @method string getSuggestion() 获取<p>该字段用于返回对应当前标签的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：<strong>Block</strong>：建议屏蔽，<strong>Review</strong> ：建议人工复审，<strong>Pass</strong>：建议通过</p>
 * @method void setSuggestion(string $Suggestion) 设置<p>该字段用于返回对应当前标签的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：<strong>Block</strong>：建议屏蔽，<strong>Review</strong> ：建议人工复审，<strong>Pass</strong>：建议通过</p>
 * @method array getKeywords() 获取<p>该字段用于返回检测文本命中的关键词信息，用于标注文本违规的具体原因（如：<em>加我微信</em>）。该参数可能会有多个返回值，代表命中的多个关键词；如返回值为空且Score不为空，则代表识别结果所对应的恶意标签（Label）是来自于语义模型判断的返回值。</p>
 * @method void setKeywords(array $Keywords) 设置<p>该字段用于返回检测文本命中的关键词信息，用于标注文本违规的具体原因（如：<em>加我微信</em>）。该参数可能会有多个返回值，代表命中的多个关键词；如返回值为空且Score不为空，则代表识别结果所对应的恶意标签（Label）是来自于语义模型判断的返回值。</p>
 * @method integer getScore() 获取<p>该字段用于返回当前标签（Label）下的置信度，取值范围：0（<strong>置信度最低</strong>）-100（<strong>置信度最高</strong> ），越高代表文本越有可能属于当前返回的标签；如：<em>色情 99</em>，则表明该文本非常有可能属于色情内容；<em>色情 0</em>，则表明该文本不属于色情内容。</p>
 * @method void setScore(integer $Score) 设置<p>该字段用于返回当前标签（Label）下的置信度，取值范围：0（<strong>置信度最低</strong>）-100（<strong>置信度最高</strong> ），越高代表文本越有可能属于当前返回的标签；如：<em>色情 99</em>，则表明该文本非常有可能属于色情内容；<em>色情 0</em>，则表明该文本不属于色情内容。</p>
 * @method integer getLibType() 获取<p>该字段用于返回自定义关键词对应的词库类型，取值为<strong>1</strong>（黑白库）和<strong>2</strong>（自定义关键词库），若未配置自定义关键词库,则默认值为1（黑白库匹配）。</p>
 * @method void setLibType(integer $LibType) 设置<p>该字段用于返回自定义关键词对应的词库类型，取值为<strong>1</strong>（黑白库）和<strong>2</strong>（自定义关键词库），若未配置自定义关键词库,则默认值为1（黑白库匹配）。</p>
 * @method string getLibId() 获取<p>该字段用于返回自定义库的ID，以方便自定义库管理和配置。</p>
 * @method void setLibId(string $LibId) 设置<p>该字段用于返回自定义库的ID，以方便自定义库管理和配置。</p>
 * @method string getLibName() 获取<p>该字段用于返回自定义库的名称,以方便自定义库管理和配置。</p>
 * @method void setLibName(string $LibName) 设置<p>该字段用于返回自定义库的名称,以方便自定义库管理和配置。</p>
 * @method string getSubLabel() 获取<p>该字段用于返回当前标签（Label）下的二级标签。</p>
 * @method void setSubLabel(string $SubLabel) 设置<p>该字段用于返回当前标签（Label）下的二级标签。</p>
 * @method array getTags() 获取<p>该字段用于返回当前一级标签（Label）下的关键词、子标签及分数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>该字段用于返回当前一级标签（Label）下的关键词、子标签及分数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHitInfos() 获取<p>该字段用于返回违规文本命中信息</p>
 * @method void setHitInfos(array $HitInfos) 设置<p>该字段用于返回违规文本命中信息</p>
 */
class DetailResults extends AbstractModel
{
    /**
     * @var string <p>该字段用于返回检测结果所对应的全部恶意标签。<br>返回值：<strong>Normal</strong>：正常，<strong>Porn</strong>：色情，<strong>Abuse</strong>：谩骂，<strong>Ad</strong>：广告；以及其他令人反感、不安全或不适宜的内容类型。</p>
     */
    public $Label;

    /**
     * @var string <p>该字段用于返回对应当前标签的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：<strong>Block</strong>：建议屏蔽，<strong>Review</strong> ：建议人工复审，<strong>Pass</strong>：建议通过</p>
     */
    public $Suggestion;

    /**
     * @var array <p>该字段用于返回检测文本命中的关键词信息，用于标注文本违规的具体原因（如：<em>加我微信</em>）。该参数可能会有多个返回值，代表命中的多个关键词；如返回值为空且Score不为空，则代表识别结果所对应的恶意标签（Label）是来自于语义模型判断的返回值。</p>
     */
    public $Keywords;

    /**
     * @var integer <p>该字段用于返回当前标签（Label）下的置信度，取值范围：0（<strong>置信度最低</strong>）-100（<strong>置信度最高</strong> ），越高代表文本越有可能属于当前返回的标签；如：<em>色情 99</em>，则表明该文本非常有可能属于色情内容；<em>色情 0</em>，则表明该文本不属于色情内容。</p>
     */
    public $Score;

    /**
     * @var integer <p>该字段用于返回自定义关键词对应的词库类型，取值为<strong>1</strong>（黑白库）和<strong>2</strong>（自定义关键词库），若未配置自定义关键词库,则默认值为1（黑白库匹配）。</p>
     */
    public $LibType;

    /**
     * @var string <p>该字段用于返回自定义库的ID，以方便自定义库管理和配置。</p>
     */
    public $LibId;

    /**
     * @var string <p>该字段用于返回自定义库的名称,以方便自定义库管理和配置。</p>
     */
    public $LibName;

    /**
     * @var string <p>该字段用于返回当前标签（Label）下的二级标签。</p>
     */
    public $SubLabel;

    /**
     * @var array <p>该字段用于返回当前一级标签（Label）下的关键词、子标签及分数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array <p>该字段用于返回违规文本命中信息</p>
     */
    public $HitInfos;

    /**
     * @param string $Label <p>该字段用于返回检测结果所对应的全部恶意标签。<br>返回值：<strong>Normal</strong>：正常，<strong>Porn</strong>：色情，<strong>Abuse</strong>：谩骂，<strong>Ad</strong>：广告；以及其他令人反感、不安全或不适宜的内容类型。</p>
     * @param string $Suggestion <p>该字段用于返回对应当前标签的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：<strong>Block</strong>：建议屏蔽，<strong>Review</strong> ：建议人工复审，<strong>Pass</strong>：建议通过</p>
     * @param array $Keywords <p>该字段用于返回检测文本命中的关键词信息，用于标注文本违规的具体原因（如：<em>加我微信</em>）。该参数可能会有多个返回值，代表命中的多个关键词；如返回值为空且Score不为空，则代表识别结果所对应的恶意标签（Label）是来自于语义模型判断的返回值。</p>
     * @param integer $Score <p>该字段用于返回当前标签（Label）下的置信度，取值范围：0（<strong>置信度最低</strong>）-100（<strong>置信度最高</strong> ），越高代表文本越有可能属于当前返回的标签；如：<em>色情 99</em>，则表明该文本非常有可能属于色情内容；<em>色情 0</em>，则表明该文本不属于色情内容。</p>
     * @param integer $LibType <p>该字段用于返回自定义关键词对应的词库类型，取值为<strong>1</strong>（黑白库）和<strong>2</strong>（自定义关键词库），若未配置自定义关键词库,则默认值为1（黑白库匹配）。</p>
     * @param string $LibId <p>该字段用于返回自定义库的ID，以方便自定义库管理和配置。</p>
     * @param string $LibName <p>该字段用于返回自定义库的名称,以方便自定义库管理和配置。</p>
     * @param string $SubLabel <p>该字段用于返回当前标签（Label）下的二级标签。</p>
     * @param array $Tags <p>该字段用于返回当前一级标签（Label）下的关键词、子标签及分数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HitInfos <p>该字段用于返回违规文本命中信息</p>
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

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("LibType",$param) and $param["LibType"] !== null) {
            $this->LibType = $param["LibType"];
        }

        if (array_key_exists("LibId",$param) and $param["LibId"] !== null) {
            $this->LibId = $param["LibId"];
        }

        if (array_key_exists("LibName",$param) and $param["LibName"] !== null) {
            $this->LibName = $param["LibName"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
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
