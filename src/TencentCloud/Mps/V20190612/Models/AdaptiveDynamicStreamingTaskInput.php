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
 * 对视频转自适应码流的输入参数类型
 *
 * @method integer getDefinition() 获取转自适应码流模板 ID。
 * @method void setDefinition(integer $Definition) 设置转自适应码流模板 ID。
 * @method array getWatermarkSet() 获取水印列表，支持多张图片或文字水印，最大可支持 10 张。
 * @method void setWatermarkSet(array $WatermarkSet) 设置水印列表，支持多张图片或文字水印，最大可支持 10 张。
 * @method TaskOutputStorage getOutputStorage() 获取转自适应码流后文件的目标存储，不填则继承上层的 OutputStorage 值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置转自适应码流后文件的目标存储，不填则继承上层的 OutputStorage 值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputObjectPath() 获取转自适应码流后，manifest 文件的输出路径，可以为相对路径或者绝对路径。
若需定义输出路径，路径需以`.{format}`结尾。变量名请参考 [文件名变量说明](https://cloud.tencent.com/document/product/862/37039)。
相对路径示例：
<li>文件名_{变量名}.{format}</li>
<li>文件名.{format}</li>
绝对路径示例：
<li>/自定义路径/文件名_{变量名}.{format}</li>
如果不填，则默认为相对路径：{inputName}_adaptiveDynamicStreaming_{definition}.{format}。
 * @method void setOutputObjectPath(string $OutputObjectPath) 设置转自适应码流后，manifest 文件的输出路径，可以为相对路径或者绝对路径。
若需定义输出路径，路径需以`.{format}`结尾。变量名请参考 [文件名变量说明](https://cloud.tencent.com/document/product/862/37039)。
相对路径示例：
<li>文件名_{变量名}.{format}</li>
<li>文件名.{format}</li>
绝对路径示例：
<li>/自定义路径/文件名_{变量名}.{format}</li>
如果不填，则默认为相对路径：{inputName}_adaptiveDynamicStreaming_{definition}.{format}。
 * @method string getSubStreamObjectName() 获取转自适应码流后，子流文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：`{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}`。
 * @method void setSubStreamObjectName(string $SubStreamObjectName) 设置转自适应码流后，子流文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：`{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}`。
 * @method string getSegmentObjectName() 获取转自适应码流（仅 HLS）后，分片文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：`{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}`。
 * @method void setSegmentObjectName(string $SegmentObjectName) 设置转自适应码流（仅 HLS）后，分片文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：`{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}`。
 * @method array getAddOnSubtitles() 获取要插入的字幕文件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddOnSubtitles(array $AddOnSubtitles) 设置要插入的字幕文件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DrmInfo getDrmInfo() 获取Drm信息。
 * @method void setDrmInfo(DrmInfo $DrmInfo) 设置Drm信息。
 * @method string getDefinitionType() 获取自适应转码模板类型：
Common：音视频类型
PureAudio：纯音频类型
 * @method void setDefinitionType(string $DefinitionType) 设置自适应转码模板类型：
Common：音视频类型
PureAudio：纯音频类型
 */
class AdaptiveDynamicStreamingTaskInput extends AbstractModel
{
    /**
     * @var integer 转自适应码流模板 ID。
     */
    public $Definition;

    /**
     * @var array 水印列表，支持多张图片或文字水印，最大可支持 10 张。
     */
    public $WatermarkSet;

    /**
     * @var TaskOutputStorage 转自适应码流后文件的目标存储，不填则继承上层的 OutputStorage 值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputStorage;

    /**
     * @var string 转自适应码流后，manifest 文件的输出路径，可以为相对路径或者绝对路径。
若需定义输出路径，路径需以`.{format}`结尾。变量名请参考 [文件名变量说明](https://cloud.tencent.com/document/product/862/37039)。
相对路径示例：
<li>文件名_{变量名}.{format}</li>
<li>文件名.{format}</li>
绝对路径示例：
<li>/自定义路径/文件名_{变量名}.{format}</li>
如果不填，则默认为相对路径：{inputName}_adaptiveDynamicStreaming_{definition}.{format}。
     */
    public $OutputObjectPath;

    /**
     * @var string 转自适应码流后，子流文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：`{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}`。
     */
    public $SubStreamObjectName;

    /**
     * @var string 转自适应码流（仅 HLS）后，分片文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：`{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}`。
     */
    public $SegmentObjectName;

    /**
     * @var array 要插入的字幕文件。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddOnSubtitles;

    /**
     * @var DrmInfo Drm信息。
     */
    public $DrmInfo;

    /**
     * @var string 自适应转码模板类型：
Common：音视频类型
PureAudio：纯音频类型
     */
    public $DefinitionType;

    /**
     * @param integer $Definition 转自适应码流模板 ID。
     * @param array $WatermarkSet 水印列表，支持多张图片或文字水印，最大可支持 10 张。
     * @param TaskOutputStorage $OutputStorage 转自适应码流后文件的目标存储，不填则继承上层的 OutputStorage 值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputObjectPath 转自适应码流后，manifest 文件的输出路径，可以为相对路径或者绝对路径。
若需定义输出路径，路径需以`.{format}`结尾。变量名请参考 [文件名变量说明](https://cloud.tencent.com/document/product/862/37039)。
相对路径示例：
<li>文件名_{变量名}.{format}</li>
<li>文件名.{format}</li>
绝对路径示例：
<li>/自定义路径/文件名_{变量名}.{format}</li>
如果不填，则默认为相对路径：{inputName}_adaptiveDynamicStreaming_{definition}.{format}。
     * @param string $SubStreamObjectName 转自适应码流后，子流文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：`{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}`。
     * @param string $SegmentObjectName 转自适应码流（仅 HLS）后，分片文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：`{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}`。
     * @param array $AddOnSubtitles 要插入的字幕文件。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DrmInfo $DrmInfo Drm信息。
     * @param string $DefinitionType 自适应转码模板类型：
Common：音视频类型
PureAudio：纯音频类型
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("WatermarkSet",$param) and $param["WatermarkSet"] !== null) {
            $this->WatermarkSet = [];
            foreach ($param["WatermarkSet"] as $key => $value){
                $obj = new WatermarkInput();
                $obj->deserialize($value);
                array_push($this->WatermarkSet, $obj);
            }
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputObjectPath",$param) and $param["OutputObjectPath"] !== null) {
            $this->OutputObjectPath = $param["OutputObjectPath"];
        }

        if (array_key_exists("SubStreamObjectName",$param) and $param["SubStreamObjectName"] !== null) {
            $this->SubStreamObjectName = $param["SubStreamObjectName"];
        }

        if (array_key_exists("SegmentObjectName",$param) and $param["SegmentObjectName"] !== null) {
            $this->SegmentObjectName = $param["SegmentObjectName"];
        }

        if (array_key_exists("AddOnSubtitles",$param) and $param["AddOnSubtitles"] !== null) {
            $this->AddOnSubtitles = [];
            foreach ($param["AddOnSubtitles"] as $key => $value){
                $obj = new AddOnSubtitle();
                $obj->deserialize($value);
                array_push($this->AddOnSubtitles, $obj);
            }
        }

        if (array_key_exists("DrmInfo",$param) and $param["DrmInfo"] !== null) {
            $this->DrmInfo = new DrmInfo();
            $this->DrmInfo->deserialize($param["DrmInfo"]);
        }

        if (array_key_exists("DefinitionType",$param) and $param["DefinitionType"] !== null) {
            $this->DefinitionType = $param["DefinitionType"];
        }
    }
}
