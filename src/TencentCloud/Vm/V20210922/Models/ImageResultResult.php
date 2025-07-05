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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片输出结果的子结果
 *
 * @method string getScene() 获取场景
Porn 色情
Sexy 性感
Polity 政治
Illegal 违法
Abuse 谩骂
Terror 暴恐
Ad 广告
 * @method void setScene(string $Scene) 设置场景
Porn 色情
Sexy 性感
Polity 政治
Illegal 违法
Abuse 谩骂
Terror 暴恐
Ad 广告
 * @method integer getHitFlag() 获取是否命中
0 未命中
1 命中
 * @method void setHitFlag(integer $HitFlag) 设置是否命中
0 未命中
1 命中
 * @method string getSuggestion() 获取审核建议，可选值：
Pass 通过，
Review 建议人审，
Block 确认违规
 * @method void setSuggestion(string $Suggestion) 设置审核建议，可选值：
Pass 通过，
Review 建议人审，
Block 确认违规
 * @method string getLabel() 获取标签
 * @method void setLabel(string $Label) 设置标签
 * @method string getSubLabel() 获取子标签
 * @method void setSubLabel(string $SubLabel) 设置子标签
 * @method integer getScore() 获取分数
 * @method void setScore(integer $Score) 设置分数
 * @method array getNames() 获取人物名称列表，如未识别，则为null
 * @method void setNames(array $Names) 设置人物名称列表，如未识别，则为null
 * @method string getText() 获取图片OCR文本
 * @method void setText(string $Text) 设置图片OCR文本
 * @method array getDetails() 获取其他详情
 * @method void setDetails(array $Details) 设置其他详情
 * @method string getHitType() 获取审核命中类型
 * @method void setHitType(string $HitType) 设置审核命中类型
 */
class ImageResultResult extends AbstractModel
{
    /**
     * @var string 场景
Porn 色情
Sexy 性感
Polity 政治
Illegal 违法
Abuse 谩骂
Terror 暴恐
Ad 广告
     */
    public $Scene;

    /**
     * @var integer 是否命中
0 未命中
1 命中
     */
    public $HitFlag;

    /**
     * @var string 审核建议，可选值：
Pass 通过，
Review 建议人审，
Block 确认违规
     */
    public $Suggestion;

    /**
     * @var string 标签
     */
    public $Label;

    /**
     * @var string 子标签
     */
    public $SubLabel;

    /**
     * @var integer 分数
     */
    public $Score;

    /**
     * @var array 人物名称列表，如未识别，则为null
     */
    public $Names;

    /**
     * @var string 图片OCR文本
     */
    public $Text;

    /**
     * @var array 其他详情
     */
    public $Details;

    /**
     * @var string 审核命中类型
     */
    public $HitType;

    /**
     * @param string $Scene 场景
Porn 色情
Sexy 性感
Polity 政治
Illegal 违法
Abuse 谩骂
Terror 暴恐
Ad 广告
     * @param integer $HitFlag 是否命中
0 未命中
1 命中
     * @param string $Suggestion 审核建议，可选值：
Pass 通过，
Review 建议人审，
Block 确认违规
     * @param string $Label 标签
     * @param string $SubLabel 子标签
     * @param integer $Score 分数
     * @param array $Names 人物名称列表，如未识别，则为null
     * @param string $Text 图片OCR文本
     * @param array $Details 其他详情
     * @param string $HitType 审核命中类型
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

        if (array_key_exists("HitFlag",$param) and $param["HitFlag"] !== null) {
            $this->HitFlag = $param["HitFlag"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new ImageResultsResultDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }

        if (array_key_exists("HitType",$param) and $param["HitType"] !== null) {
            $this->HitType = $param["HitType"];
        }
    }
}
