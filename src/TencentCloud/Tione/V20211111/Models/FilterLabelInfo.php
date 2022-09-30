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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片列表查询结果详情
 *
 * @method string getDatasetId() 获取数据集id
 * @method void setDatasetId(string $DatasetId) 设置数据集id
 * @method string getFileId() 获取文件ID
 * @method void setFileId(string $FileId) 设置文件ID
 * @method string getFileName() 获取文件路径
 * @method void setFileName(string $FileName) 设置文件路径
 * @method array getClassificationLabels() 获取分类标签结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassificationLabels(array $ClassificationLabels) 设置分类标签结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDetectionLabels() 获取检测标签结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectionLabels(array $DetectionLabels) 设置检测标签结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSegmentationLabels() 获取分割标签结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegmentationLabels(array $SegmentationLabels) 设置分割标签结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRGBPath() 获取RGB 图片路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRGBPath(string $RGBPath) 设置RGB 图片路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabelTemplateType() 获取标签模板类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelTemplateType(string $LabelTemplateType) 设置标签模板类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDownloadUrl() 获取下载url链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownloadUrl(string $DownloadUrl) 设置下载url链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDownloadThumbnailUrl() 获取缩略图下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownloadThumbnailUrl(string $DownloadThumbnailUrl) 设置缩略图下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDownloadRGBUrl() 获取分割结果图片下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownloadRGBUrl(string $DownloadRGBUrl) 设置分割结果图片下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrScene() 获取OCR场景
IDENTITY：识别
STRUCTURE：智能结构化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrScene(string $OcrScene) 设置OCR场景
IDENTITY：识别
STRUCTURE：智能结构化
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOcrLabels() 获取OCR场景标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrLabels(array $OcrLabels) 设置OCR场景标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrLabelInfo() 获取OCR场景标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrLabelInfo(string $OcrLabelInfo) 设置OCR场景标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTextClassificationLabelList() 获取文本分类场景标签结果，内容是json结构
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextClassificationLabelList(string $TextClassificationLabelList) 设置文本分类场景标签结果，内容是json结构
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRowText() 获取文本内容，返回50字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRowText(string $RowText) 设置文本内容，返回50字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getContentOmit() 获取文本内容是否完全返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentOmit(boolean $ContentOmit) 设置文本内容是否完全返回
注意：此字段可能返回 null，表示取不到有效值。
 */
class FilterLabelInfo extends AbstractModel
{
    /**
     * @var string 数据集id
     */
    public $DatasetId;

    /**
     * @var string 文件ID
     */
    public $FileId;

    /**
     * @var string 文件路径
     */
    public $FileName;

    /**
     * @var array 分类标签结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassificationLabels;

    /**
     * @var array 检测标签结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectionLabels;

    /**
     * @var array 分割标签结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegmentationLabels;

    /**
     * @var string RGB 图片路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RGBPath;

    /**
     * @var string 标签模板类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelTemplateType;

    /**
     * @var string 下载url链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownloadUrl;

    /**
     * @var string 缩略图下载链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownloadThumbnailUrl;

    /**
     * @var string 分割结果图片下载链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownloadRGBUrl;

    /**
     * @var string OCR场景
IDENTITY：识别
STRUCTURE：智能结构化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrScene;

    /**
     * @var array OCR场景标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrLabels;

    /**
     * @var string OCR场景标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrLabelInfo;

    /**
     * @var string 文本分类场景标签结果，内容是json结构
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextClassificationLabelList;

    /**
     * @var string 文本内容，返回50字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RowText;

    /**
     * @var boolean 文本内容是否完全返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentOmit;

    /**
     * @param string $DatasetId 数据集id
     * @param string $FileId 文件ID
     * @param string $FileName 文件路径
     * @param array $ClassificationLabels 分类标签结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DetectionLabels 检测标签结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SegmentationLabels 分割标签结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RGBPath RGB 图片路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LabelTemplateType 标签模板类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DownloadUrl 下载url链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DownloadThumbnailUrl 缩略图下载链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DownloadRGBUrl 分割结果图片下载链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrScene OCR场景
IDENTITY：识别
STRUCTURE：智能结构化
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OcrLabels OCR场景标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrLabelInfo OCR场景标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TextClassificationLabelList 文本分类场景标签结果，内容是json结构
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RowText 文本内容，返回50字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ContentOmit 文本内容是否完全返回
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("DatasetId",$param) and $param["DatasetId"] !== null) {
            $this->DatasetId = $param["DatasetId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("ClassificationLabels",$param) and $param["ClassificationLabels"] !== null) {
            $this->ClassificationLabels = $param["ClassificationLabels"];
        }

        if (array_key_exists("DetectionLabels",$param) and $param["DetectionLabels"] !== null) {
            $this->DetectionLabels = [];
            foreach ($param["DetectionLabels"] as $key => $value){
                $obj = new DetectionLabelInfo();
                $obj->deserialize($value);
                array_push($this->DetectionLabels, $obj);
            }
        }

        if (array_key_exists("SegmentationLabels",$param) and $param["SegmentationLabels"] !== null) {
            $this->SegmentationLabels = [];
            foreach ($param["SegmentationLabels"] as $key => $value){
                $obj = new SegmentationInfo();
                $obj->deserialize($value);
                array_push($this->SegmentationLabels, $obj);
            }
        }

        if (array_key_exists("RGBPath",$param) and $param["RGBPath"] !== null) {
            $this->RGBPath = $param["RGBPath"];
        }

        if (array_key_exists("LabelTemplateType",$param) and $param["LabelTemplateType"] !== null) {
            $this->LabelTemplateType = $param["LabelTemplateType"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("DownloadThumbnailUrl",$param) and $param["DownloadThumbnailUrl"] !== null) {
            $this->DownloadThumbnailUrl = $param["DownloadThumbnailUrl"];
        }

        if (array_key_exists("DownloadRGBUrl",$param) and $param["DownloadRGBUrl"] !== null) {
            $this->DownloadRGBUrl = $param["DownloadRGBUrl"];
        }

        if (array_key_exists("OcrScene",$param) and $param["OcrScene"] !== null) {
            $this->OcrScene = $param["OcrScene"];
        }

        if (array_key_exists("OcrLabels",$param) and $param["OcrLabels"] !== null) {
            $this->OcrLabels = [];
            foreach ($param["OcrLabels"] as $key => $value){
                $obj = new OcrLabelInfo();
                $obj->deserialize($value);
                array_push($this->OcrLabels, $obj);
            }
        }

        if (array_key_exists("OcrLabelInfo",$param) and $param["OcrLabelInfo"] !== null) {
            $this->OcrLabelInfo = $param["OcrLabelInfo"];
        }

        if (array_key_exists("TextClassificationLabelList",$param) and $param["TextClassificationLabelList"] !== null) {
            $this->TextClassificationLabelList = $param["TextClassificationLabelList"];
        }

        if (array_key_exists("RowText",$param) and $param["RowText"] !== null) {
            $this->RowText = $param["RowText"];
        }

        if (array_key_exists("ContentOmit",$param) and $param["ContentOmit"] !== null) {
            $this->ContentOmit = $param["ContentOmit"];
        }
    }
}
