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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 内容理解结果明细
 *
 * @method string getScene() 获取<p>该字段在内容理解回调事件中可直接忽略，仅在第三方审核时存在，检出违规的模型场景，枚举值：Ad/Porn/Abuse/Illegal/Polity/Terror/Sexy/Moan/Custom</p>
 * @method void setScene(string $Scene) 设置<p>该字段在内容理解回调事件中可直接忽略，仅在第三方审核时存在，检出违规的模型场景，枚举值：Ad/Porn/Abuse/Illegal/Polity/Terror/Sexy/Moan/Custom</p>
 * @method string getLabel() 获取<p>Normal：正常文本  Ad:广告 Porn：色情 Abuse：谩骂 Illegal: 违禁 Polity: 涉政 Terror: 暴恐 Sexy: 性感 Moan: 呻吟/娇喘 QRCode: 二维码 Custom: 自定义</p>
 * @method void setLabel(string $Label) 设置<p>Normal：正常文本  Ad:广告 Porn：色情 Abuse：谩骂 Illegal: 违禁 Polity: 涉政 Terror: 暴恐 Sexy: 性感 Moan: 呻吟/娇喘 QRCode: 二维码 Custom: 自定义</p>
 * @method string getSubLabel() 获取<p>二级标签</p>
 * @method void setSubLabel(string $SubLabel) 设置<p>二级标签</p>
 * @method integer getSuggest() 获取<p>处理建议</p>
 * @method void setSuggest(integer $Suggest) 设置<p>处理建议</p>
 * @method string getLibName() 获取<p>自定义词库名</p>
 * @method void setLibName(string $LibName) 设置<p>自定义词库名</p>
 * @method array getKeywords() 获取<p>命中的关键词</p>
 * @method void setKeywords(array $Keywords) 设置<p>命中的关键词</p>
 * @method string getDesc() 获取<p>中文二级标签。</p>
 * @method void setDesc(string $Desc) 设置<p>中文二级标签。</p>
 * @method integer getScore() 获取<p>置信度分值</p>
 * @method void setScore(integer $Score) 设置<p>置信度分值</p>
 * @method integer getSeverity() 获取<p>违规严重程度: 0-不区分 1-轻度 2-严重</p>
 * @method void setSeverity(integer $Severity) 设置<p>违规严重程度: 0-不区分 1-轻度 2-严重</p>
 * @method string getSeverityDesc() 获取<p>违规严重程度描述 仅名单内sdkappid返回 负面表达,正面或中性表达,语义模糊</p>
 * @method void setSeverityDesc(string $SeverityDesc) 设置<p>违规严重程度描述 仅名单内sdkappid返回 负面表达,正面或中性表达,语义模糊</p>
 * @method AudioSegments getAudioSegments() 获取<p>音频切片位置信息</p>
 * @method void setAudioSegments(AudioSegments $AudioSegments) 设置<p>音频切片位置信息</p>
 * @method ImageLocation getImageLocation() 获取<p>图片命中坐标信息。</p>
 * @method void setImageLocation(ImageLocation $ImageLocation) 设置<p>图片命中坐标信息。</p>
 */
class ModerationCheckDetail extends AbstractModel
{
    /**
     * @var string <p>该字段在内容理解回调事件中可直接忽略，仅在第三方审核时存在，检出违规的模型场景，枚举值：Ad/Porn/Abuse/Illegal/Polity/Terror/Sexy/Moan/Custom</p>
     */
    public $Scene;

    /**
     * @var string <p>Normal：正常文本  Ad:广告 Porn：色情 Abuse：谩骂 Illegal: 违禁 Polity: 涉政 Terror: 暴恐 Sexy: 性感 Moan: 呻吟/娇喘 QRCode: 二维码 Custom: 自定义</p>
     */
    public $Label;

    /**
     * @var string <p>二级标签</p>
     */
    public $SubLabel;

    /**
     * @var integer <p>处理建议</p>
     */
    public $Suggest;

    /**
     * @var string <p>自定义词库名</p>
     */
    public $LibName;

    /**
     * @var array <p>命中的关键词</p>
     */
    public $Keywords;

    /**
     * @var string <p>中文二级标签。</p>
     */
    public $Desc;

    /**
     * @var integer <p>置信度分值</p>
     */
    public $Score;

    /**
     * @var integer <p>违规严重程度: 0-不区分 1-轻度 2-严重</p>
     */
    public $Severity;

    /**
     * @var string <p>违规严重程度描述 仅名单内sdkappid返回 负面表达,正面或中性表达,语义模糊</p>
     */
    public $SeverityDesc;

    /**
     * @var AudioSegments <p>音频切片位置信息</p>
     */
    public $AudioSegments;

    /**
     * @var ImageLocation <p>图片命中坐标信息。</p>
     */
    public $ImageLocation;

    /**
     * @param string $Scene <p>该字段在内容理解回调事件中可直接忽略，仅在第三方审核时存在，检出违规的模型场景，枚举值：Ad/Porn/Abuse/Illegal/Polity/Terror/Sexy/Moan/Custom</p>
     * @param string $Label <p>Normal：正常文本  Ad:广告 Porn：色情 Abuse：谩骂 Illegal: 违禁 Polity: 涉政 Terror: 暴恐 Sexy: 性感 Moan: 呻吟/娇喘 QRCode: 二维码 Custom: 自定义</p>
     * @param string $SubLabel <p>二级标签</p>
     * @param integer $Suggest <p>处理建议</p>
     * @param string $LibName <p>自定义词库名</p>
     * @param array $Keywords <p>命中的关键词</p>
     * @param string $Desc <p>中文二级标签。</p>
     * @param integer $Score <p>置信度分值</p>
     * @param integer $Severity <p>违规严重程度: 0-不区分 1-轻度 2-严重</p>
     * @param string $SeverityDesc <p>违规严重程度描述 仅名单内sdkappid返回 负面表达,正面或中性表达,语义模糊</p>
     * @param AudioSegments $AudioSegments <p>音频切片位置信息</p>
     * @param ImageLocation $ImageLocation <p>图片命中坐标信息。</p>
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
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("Suggest",$param) and $param["Suggest"] !== null) {
            $this->Suggest = $param["Suggest"];
        }

        if (array_key_exists("LibName",$param) and $param["LibName"] !== null) {
            $this->LibName = $param["LibName"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("SeverityDesc",$param) and $param["SeverityDesc"] !== null) {
            $this->SeverityDesc = $param["SeverityDesc"];
        }

        if (array_key_exists("AudioSegments",$param) and $param["AudioSegments"] !== null) {
            $this->AudioSegments = new AudioSegments();
            $this->AudioSegments->deserialize($param["AudioSegments"]);
        }

        if (array_key_exists("ImageLocation",$param) and $param["ImageLocation"] !== null) {
            $this->ImageLocation = new ImageLocation();
            $this->ImageLocation->deserialize($param["ImageLocation"]);
        }
    }
}
