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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能描述信息
 *
 * @method string getDescription() 获取智能描述。
 * @method void setDescription(string $Description) 设置智能描述。
 * @method float getConfidence() 获取智能描述的可信度，取值范围是 0 到 100。
 * @method void setConfidence(float $Confidence) 设置智能描述的可信度，取值范围是 0 到 100。
 * @method string getTitle() 获取智能描述标题
 * @method void setTitle(string $Title) 设置智能描述标题
 * @method array getKeywords() 获取智能描述关键词
 * @method void setKeywords(array $Keywords) 设置智能描述关键词
 * @method array getParagraphs() 获取分段结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParagraphs(array $Paragraphs) 设置分段结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMindMapUrl() 获取摘要思维导图地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMindMapUrl(string $MindMapUrl) 设置摘要思维导图地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMindMapPath() 获取摘要思维导图路径。
 * @method void setMindMapPath(string $MindMapPath) 设置摘要思维导图路径。
 * @method string getSubtitlePath() 获取视频字幕文件路径。
 * @method void setSubtitlePath(string $SubtitlePath) 设置视频字幕文件路径。
 * @method TaskOutputStorage getOutputStorage() 获取摘要文件存储位置。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置摘要文件存储位置。
 */
class MediaAiAnalysisDescriptionItem extends AbstractModel
{
    /**
     * @var string 智能描述。
     */
    public $Description;

    /**
     * @var float 智能描述的可信度，取值范围是 0 到 100。
     */
    public $Confidence;

    /**
     * @var string 智能描述标题
     */
    public $Title;

    /**
     * @var array 智能描述关键词
     */
    public $Keywords;

    /**
     * @var array 分段结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Paragraphs;

    /**
     * @var string 摘要思维导图地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MindMapUrl;

    /**
     * @var string 摘要思维导图路径。
     */
    public $MindMapPath;

    /**
     * @var string 视频字幕文件路径。
     */
    public $SubtitlePath;

    /**
     * @var TaskOutputStorage 摘要文件存储位置。
     */
    public $OutputStorage;

    /**
     * @param string $Description 智能描述。
     * @param float $Confidence 智能描述的可信度，取值范围是 0 到 100。
     * @param string $Title 智能描述标题
     * @param array $Keywords 智能描述关键词
     * @param array $Paragraphs 分段结果。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MindMapUrl 摘要思维导图地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MindMapPath 摘要思维导图路径。
     * @param string $SubtitlePath 视频字幕文件路径。
     * @param TaskOutputStorage $OutputStorage 摘要文件存储位置。
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Paragraphs",$param) and $param["Paragraphs"] !== null) {
            $this->Paragraphs = [];
            foreach ($param["Paragraphs"] as $key => $value){
                $obj = new AiParagraphInfo();
                $obj->deserialize($value);
                array_push($this->Paragraphs, $obj);
            }
        }

        if (array_key_exists("MindMapUrl",$param) and $param["MindMapUrl"] !== null) {
            $this->MindMapUrl = $param["MindMapUrl"];
        }

        if (array_key_exists("MindMapPath",$param) and $param["MindMapPath"] !== null) {
            $this->MindMapPath = $param["MindMapPath"];
        }

        if (array_key_exists("SubtitlePath",$param) and $param["SubtitlePath"] !== null) {
            $this->SubtitlePath = $param["SubtitlePath"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}
