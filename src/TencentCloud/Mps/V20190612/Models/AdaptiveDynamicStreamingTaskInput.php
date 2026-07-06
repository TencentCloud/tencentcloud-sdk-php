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
 * @method integer getDefinition() 获取<p>转自适应码流模板 ID。</p>
 * @method void setDefinition(integer $Definition) 设置<p>转自适应码流模板 ID。</p>
 * @method array getWatermarkSet() 获取<p>水印列表，支持多张图片或文字水印，最大可支持 10 张。</p>
 * @method void setWatermarkSet(array $WatermarkSet) 设置<p>水印列表，支持多张图片或文字水印，最大可支持 10 张。</p>
 * @method BlindWatermarkInput getBlindWatermark() 获取<p>数字水印参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlindWatermark(BlindWatermarkInput $BlindWatermark) 设置<p>数字水印参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskOutputStorage getOutputStorage() 获取<p>转自适应码流后文件的目标存储，不填则继承上层的 OutputStorage 值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置<p>转自适应码流后文件的目标存储，不填则继承上层的 OutputStorage 值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputObjectPath() 获取<p>转自适应码流后，manifest 文件的输出路径，可以为相对路径或者绝对路径。<br>若需定义输出路径，路径需以<code>.{format}</code>结尾。变量名请参考 <a href="https://cloud.tencent.com/document/product/862/37039">文件名变量说明</a>。<br>相对路径示例：</p><li>文件名_{变量名}.{format}</li><li>文件名.{format}</li>绝对路径示例：<li>/自定义路径/文件名_{变量名}.{format}</li>如果不填，则默认为相对路径：{inputName}_adaptiveDynamicStreaming_{definition}.{format}。
 * @method void setOutputObjectPath(string $OutputObjectPath) 设置<p>转自适应码流后，manifest 文件的输出路径，可以为相对路径或者绝对路径。<br>若需定义输出路径，路径需以<code>.{format}</code>结尾。变量名请参考 <a href="https://cloud.tencent.com/document/product/862/37039">文件名变量说明</a>。<br>相对路径示例：</p><li>文件名_{变量名}.{format}</li><li>文件名.{format}</li>绝对路径示例：<li>/自定义路径/文件名_{变量名}.{format}</li>如果不填，则默认为相对路径：{inputName}_adaptiveDynamicStreaming_{definition}.{format}。
 * @method string getSubStreamObjectName() 获取<p>转自适应码流后，子流文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：<code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}</code>。</p>
 * @method void setSubStreamObjectName(string $SubStreamObjectName) 设置<p>转自适应码流后，子流文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：<code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}</code>。</p>
 * @method string getSegmentObjectName() 获取<p>转自适应码流（仅 HLS）后，分片文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：<code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}</code>。</p>
 * @method void setSegmentObjectName(string $SegmentObjectName) 设置<p>转自适应码流（仅 HLS）后，分片文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：<code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}</code>。</p>
 * @method array getAddOnSubtitles() 获取<p>外挂字幕功能，指定要插入的字幕文件。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddOnSubtitles(array $AddOnSubtitles) 设置<p>外挂字幕功能，指定要插入的字幕文件。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DrmInfo getDrmInfo() 获取<p>Drm信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDrmInfo(DrmInfo $DrmInfo) 设置<p>Drm信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefinitionType() 获取<p>自适应转码模板类型：<br>Common：音视频类型<br>PureAudio：纯音频类型</p>
 * @method void setDefinitionType(string $DefinitionType) 设置<p>自适应转码模板类型：<br>Common：音视频类型<br>PureAudio：纯音频类型</p>
 * @method SubtitleTemplate getSubtitleTemplate() 获取<p>硬字幕（压制字幕）功能，指定字幕来源、字体大小、位置等字幕参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubtitleTemplate(SubtitleTemplate $SubtitleTemplate) 设置<p>硬字幕（压制字幕）功能，指定字幕来源、字体大小、位置等字幕参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStdExtInfo() 获取<p>转码参数扩展字段</p>
 * @method void setStdExtInfo(string $StdExtInfo) 设置<p>转码参数扩展字段</p>
 * @method array getKeyPTSList() 获取<p>指定pts时间的帧设为关键帧，并切片。单位毫秒（允许相对偏差&lt;=1ms）。当同时指定gop和切片时长时，会共同作用。注意需开启RawPts，保持帧率随源，并确保传入的pts时间在源中是有对应帧的。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyPTSList(array $KeyPTSList) 设置<p>指定pts时间的帧设为关键帧，并切片。单位毫秒（允许相对偏差&lt;=1ms）。当同时指定gop和切片时长时，会共同作用。注意需开启RawPts，保持帧率随源，并确保传入的pts时间在源中是有对应帧的。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAddOnAudios() 获取<p>外挂音频功能，指定要插入的音频文件。</p>
 * @method void setAddOnAudios(array $AddOnAudios) 设置<p>外挂音频功能，指定要插入的音频文件。</p>
 */
class AdaptiveDynamicStreamingTaskInput extends AbstractModel
{
    /**
     * @var integer <p>转自适应码流模板 ID。</p>
     */
    public $Definition;

    /**
     * @var array <p>水印列表，支持多张图片或文字水印，最大可支持 10 张。</p>
     */
    public $WatermarkSet;

    /**
     * @var BlindWatermarkInput <p>数字水印参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlindWatermark;

    /**
     * @var TaskOutputStorage <p>转自适应码流后文件的目标存储，不填则继承上层的 OutputStorage 值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputStorage;

    /**
     * @var string <p>转自适应码流后，manifest 文件的输出路径，可以为相对路径或者绝对路径。<br>若需定义输出路径，路径需以<code>.{format}</code>结尾。变量名请参考 <a href="https://cloud.tencent.com/document/product/862/37039">文件名变量说明</a>。<br>相对路径示例：</p><li>文件名_{变量名}.{format}</li><li>文件名.{format}</li>绝对路径示例：<li>/自定义路径/文件名_{变量名}.{format}</li>如果不填，则默认为相对路径：{inputName}_adaptiveDynamicStreaming_{definition}.{format}。
     */
    public $OutputObjectPath;

    /**
     * @var string <p>转自适应码流后，子流文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：<code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}</code>。</p>
     */
    public $SubStreamObjectName;

    /**
     * @var string <p>转自适应码流（仅 HLS）后，分片文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：<code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}</code>。</p>
     */
    public $SegmentObjectName;

    /**
     * @var array <p>外挂字幕功能，指定要插入的字幕文件。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddOnSubtitles;

    /**
     * @var DrmInfo <p>Drm信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DrmInfo;

    /**
     * @var string <p>自适应转码模板类型：<br>Common：音视频类型<br>PureAudio：纯音频类型</p>
     */
    public $DefinitionType;

    /**
     * @var SubtitleTemplate <p>硬字幕（压制字幕）功能，指定字幕来源、字体大小、位置等字幕参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubtitleTemplate;

    /**
     * @var string <p>转码参数扩展字段</p>
     */
    public $StdExtInfo;

    /**
     * @var array <p>指定pts时间的帧设为关键帧，并切片。单位毫秒（允许相对偏差&lt;=1ms）。当同时指定gop和切片时长时，会共同作用。注意需开启RawPts，保持帧率随源，并确保传入的pts时间在源中是有对应帧的。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyPTSList;

    /**
     * @var array <p>外挂音频功能，指定要插入的音频文件。</p>
     */
    public $AddOnAudios;

    /**
     * @param integer $Definition <p>转自适应码流模板 ID。</p>
     * @param array $WatermarkSet <p>水印列表，支持多张图片或文字水印，最大可支持 10 张。</p>
     * @param BlindWatermarkInput $BlindWatermark <p>数字水印参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskOutputStorage $OutputStorage <p>转自适应码流后文件的目标存储，不填则继承上层的 OutputStorage 值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputObjectPath <p>转自适应码流后，manifest 文件的输出路径，可以为相对路径或者绝对路径。<br>若需定义输出路径，路径需以<code>.{format}</code>结尾。变量名请参考 <a href="https://cloud.tencent.com/document/product/862/37039">文件名变量说明</a>。<br>相对路径示例：</p><li>文件名_{变量名}.{format}</li><li>文件名.{format}</li>绝对路径示例：<li>/自定义路径/文件名_{变量名}.{format}</li>如果不填，则默认为相对路径：{inputName}_adaptiveDynamicStreaming_{definition}.{format}。
     * @param string $SubStreamObjectName <p>转自适应码流后，子流文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：<code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}</code>。</p>
     * @param string $SegmentObjectName <p>转自适应码流（仅 HLS）后，分片文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：<code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}</code>。</p>
     * @param array $AddOnSubtitles <p>外挂字幕功能，指定要插入的字幕文件。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DrmInfo $DrmInfo <p>Drm信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefinitionType <p>自适应转码模板类型：<br>Common：音视频类型<br>PureAudio：纯音频类型</p>
     * @param SubtitleTemplate $SubtitleTemplate <p>硬字幕（压制字幕）功能，指定字幕来源、字体大小、位置等字幕参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StdExtInfo <p>转码参数扩展字段</p>
     * @param array $KeyPTSList <p>指定pts时间的帧设为关键帧，并切片。单位毫秒（允许相对偏差&lt;=1ms）。当同时指定gop和切片时长时，会共同作用。注意需开启RawPts，保持帧率随源，并确保传入的pts时间在源中是有对应帧的。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AddOnAudios <p>外挂音频功能，指定要插入的音频文件。</p>
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

        if (array_key_exists("BlindWatermark",$param) and $param["BlindWatermark"] !== null) {
            $this->BlindWatermark = new BlindWatermarkInput();
            $this->BlindWatermark->deserialize($param["BlindWatermark"]);
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

        if (array_key_exists("SubtitleTemplate",$param) and $param["SubtitleTemplate"] !== null) {
            $this->SubtitleTemplate = new SubtitleTemplate();
            $this->SubtitleTemplate->deserialize($param["SubtitleTemplate"]);
        }

        if (array_key_exists("StdExtInfo",$param) and $param["StdExtInfo"] !== null) {
            $this->StdExtInfo = $param["StdExtInfo"];
        }

        if (array_key_exists("KeyPTSList",$param) and $param["KeyPTSList"] !== null) {
            $this->KeyPTSList = $param["KeyPTSList"];
        }

        if (array_key_exists("AddOnAudios",$param) and $param["AddOnAudios"] !== null) {
            $this->AddOnAudios = [];
            foreach ($param["AddOnAudios"] as $key => $value){
                $obj = new AddOnAudio();
                $obj->deserialize($value);
                array_push($this->AddOnAudios, $obj);
            }
        }
    }
}
