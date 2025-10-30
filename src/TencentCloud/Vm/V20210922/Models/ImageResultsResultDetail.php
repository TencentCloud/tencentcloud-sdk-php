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
 * 具体场景下的图片识别结果
 *
 * @method string getName() 获取任务名称
 * @method void setName(string $Name) 设置任务名称
 * @method string getText() 获取OCR识别文本
 * @method void setText(string $Text) 设置OCR识别文本
 * @method ImageResultsResultDetailLocation getLocation() 获取位置信息
 * @method void setLocation(ImageResultsResultDetailLocation $Location) 设置位置信息
 * @method string getLabel() 获取标签
 * @method void setLabel(string $Label) 设置标签
 * @method string getLibId() 获取库ID
 * @method void setLibId(string $LibId) 设置库ID
 * @method string getLibName() 获取库名称
 * @method void setLibName(string $LibName) 设置库名称
 * @method array getKeywords() 获取命中的关键词
 * @method void setKeywords(array $Keywords) 设置命中的关键词
 * @method string getSuggestion() 获取建议
 * @method void setSuggestion(string $Suggestion) 设置建议
 * @method integer getScore() 获取得分
 * @method void setScore(integer $Score) 设置得分
 * @method string getSubLabelCode() 获取子标签码
 * @method void setSubLabelCode(string $SubLabelCode) 设置子标签码
 * @method string getSubLabel() 获取子标签
 * @method void setSubLabel(string $SubLabel) 设置子标签
 * @method array getOcrHitInfos() 获取Ocr文本命中信息
 * @method void setOcrHitInfos(array $OcrHitInfos) 设置Ocr文本命中信息
 */
class ImageResultsResultDetail extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $Name;

    /**
     * @var string OCR识别文本
     */
    public $Text;

    /**
     * @var ImageResultsResultDetailLocation 位置信息
     */
    public $Location;

    /**
     * @var string 标签
     */
    public $Label;

    /**
     * @var string 库ID
     */
    public $LibId;

    /**
     * @var string 库名称
     */
    public $LibName;

    /**
     * @var array 命中的关键词
     */
    public $Keywords;

    /**
     * @var string 建议
     */
    public $Suggestion;

    /**
     * @var integer 得分
     */
    public $Score;

    /**
     * @var string 子标签码
     */
    public $SubLabelCode;

    /**
     * @var string 子标签
     */
    public $SubLabel;

    /**
     * @var array Ocr文本命中信息
     */
    public $OcrHitInfos;

    /**
     * @param string $Name 任务名称
     * @param string $Text OCR识别文本
     * @param ImageResultsResultDetailLocation $Location 位置信息
     * @param string $Label 标签
     * @param string $LibId 库ID
     * @param string $LibName 库名称
     * @param array $Keywords 命中的关键词
     * @param string $Suggestion 建议
     * @param integer $Score 得分
     * @param string $SubLabelCode 子标签码
     * @param string $SubLabel 子标签
     * @param array $OcrHitInfos Ocr文本命中信息
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new ImageResultsResultDetailLocation();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("LibId",$param) and $param["LibId"] !== null) {
            $this->LibId = $param["LibId"];
        }

        if (array_key_exists("LibName",$param) and $param["LibName"] !== null) {
            $this->LibName = $param["LibName"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("SubLabelCode",$param) and $param["SubLabelCode"] !== null) {
            $this->SubLabelCode = $param["SubLabelCode"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("OcrHitInfos",$param) and $param["OcrHitInfos"] !== null) {
            $this->OcrHitInfos = [];
            foreach ($param["OcrHitInfos"] as $key => $value){
                $obj = new OcrHitInfo();
                $obj->deserialize($value);
                array_push($this->OcrHitInfos, $obj);
            }
        }
    }
}
