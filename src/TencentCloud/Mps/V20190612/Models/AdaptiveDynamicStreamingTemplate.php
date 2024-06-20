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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转自适应码流模板详情
 *
 * @method integer getDefinition() 获取转自适应码流模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置转自适应码流模板唯一标识。
 * @method string getType() 获取模板类型，取值范围：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
 * @method void setType(string $Type) 设置模板类型，取值范围：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
 * @method string getName() 获取转自适应码流模板名称。
 * @method void setName(string $Name) 设置转自适应码流模板名称。
 * @method string getComment() 获取转自适应码流模板描述信息。
 * @method void setComment(string $Comment) 设置转自适应码流模板描述信息。
 * @method string getFormat() 获取转自适应码流格式，取值范围：
<li>HLS，</li>
<li>MPEG-DASH。</li>
 * @method void setFormat(string $Format) 设置转自适应码流格式，取值范围：
<li>HLS，</li>
<li>MPEG-DASH。</li>
 * @method array getStreamInfos() 获取转自适应码流输入流参数信息，最多输入10路流。
 * @method void setStreamInfos(array $StreamInfos) 设置转自适应码流输入流参数信息，最多输入10路流。
 * @method integer getDisableHigherVideoBitrate() 获取是否禁止视频低码率转高码率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
 * @method void setDisableHigherVideoBitrate(integer $DisableHigherVideoBitrate) 设置是否禁止视频低码率转高码率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
 * @method integer getDisableHigherVideoResolution() 获取是否禁止视频分辨率转高分辨率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
 * @method void setDisableHigherVideoResolution(integer $DisableHigherVideoResolution) 设置是否禁止视频分辨率转高分辨率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
 * @method string getCreateTime() 获取模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setCreateTime(string $CreateTime) 设置模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getUpdateTime() 获取模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setUpdateTime(string $UpdateTime) 设置模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method integer getPureAudio() 获取是否为纯音频，0表示视频，1表示纯音频
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPureAudio(integer $PureAudio) 设置是否为纯音频，0表示视频，1表示纯音频
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSegmentType() 获取hls 分片类型，可选值：
<li>ts-segment：HLS+TS 切片</li>
<li>ts-byterange：HLS+TS byte range</li>
<li>mp4-segment：HLS+MP4 切片</li>
<li>mp4-byterange：HLS+MP4 byte range</li>
<li>ts-packed-audio：TS+Packed Audio</li>
<li>mp4-packed-audio：MP4+Packed Audio</li>
默认值：ts-segment

注：自适应码流的hls分片格式已此字段为准
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegmentType(string $SegmentType) 设置hls 分片类型，可选值：
<li>ts-segment：HLS+TS 切片</li>
<li>ts-byterange：HLS+TS byte range</li>
<li>mp4-segment：HLS+MP4 切片</li>
<li>mp4-byterange：HLS+MP4 byte range</li>
<li>ts-packed-audio：TS+Packed Audio</li>
<li>mp4-packed-audio：MP4+Packed Audio</li>
默认值：ts-segment

注：自适应码流的hls分片格式已此字段为准
注意：此字段可能返回 null，表示取不到有效值。
 */
class AdaptiveDynamicStreamingTemplate extends AbstractModel
{
    /**
     * @var integer 转自适应码流模板唯一标识。
     */
    public $Definition;

    /**
     * @var string 模板类型，取值范围：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
     */
    public $Type;

    /**
     * @var string 转自适应码流模板名称。
     */
    public $Name;

    /**
     * @var string 转自适应码流模板描述信息。
     */
    public $Comment;

    /**
     * @var string 转自适应码流格式，取值范围：
<li>HLS，</li>
<li>MPEG-DASH。</li>
     */
    public $Format;

    /**
     * @var array 转自适应码流输入流参数信息，最多输入10路流。
     */
    public $StreamInfos;

    /**
     * @var integer 是否禁止视频低码率转高码率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
     */
    public $DisableHigherVideoBitrate;

    /**
     * @var integer 是否禁止视频分辨率转高分辨率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
     */
    public $DisableHigherVideoResolution;

    /**
     * @var string 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $CreateTime;

    /**
     * @var string 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $UpdateTime;

    /**
     * @var integer 是否为纯音频，0表示视频，1表示纯音频
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PureAudio;

    /**
     * @var string hls 分片类型，可选值：
<li>ts-segment：HLS+TS 切片</li>
<li>ts-byterange：HLS+TS byte range</li>
<li>mp4-segment：HLS+MP4 切片</li>
<li>mp4-byterange：HLS+MP4 byte range</li>
<li>ts-packed-audio：TS+Packed Audio</li>
<li>mp4-packed-audio：MP4+Packed Audio</li>
默认值：ts-segment

注：自适应码流的hls分片格式已此字段为准
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegmentType;

    /**
     * @param integer $Definition 转自适应码流模板唯一标识。
     * @param string $Type 模板类型，取值范围：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
     * @param string $Name 转自适应码流模板名称。
     * @param string $Comment 转自适应码流模板描述信息。
     * @param string $Format 转自适应码流格式，取值范围：
<li>HLS，</li>
<li>MPEG-DASH。</li>
     * @param array $StreamInfos 转自适应码流输入流参数信息，最多输入10路流。
     * @param integer $DisableHigherVideoBitrate 是否禁止视频低码率转高码率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
     * @param integer $DisableHigherVideoResolution 是否禁止视频分辨率转高分辨率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
     * @param string $CreateTime 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $UpdateTime 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param integer $PureAudio 是否为纯音频，0表示视频，1表示纯音频
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SegmentType hls 分片类型，可选值：
<li>ts-segment：HLS+TS 切片</li>
<li>ts-byterange：HLS+TS byte range</li>
<li>mp4-segment：HLS+MP4 切片</li>
<li>mp4-byterange：HLS+MP4 byte range</li>
<li>ts-packed-audio：TS+Packed Audio</li>
<li>mp4-packed-audio：MP4+Packed Audio</li>
默认值：ts-segment

注：自适应码流的hls分片格式已此字段为准
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("StreamInfos",$param) and $param["StreamInfos"] !== null) {
            $this->StreamInfos = [];
            foreach ($param["StreamInfos"] as $key => $value){
                $obj = new AdaptiveStreamTemplate();
                $obj->deserialize($value);
                array_push($this->StreamInfos, $obj);
            }
        }

        if (array_key_exists("DisableHigherVideoBitrate",$param) and $param["DisableHigherVideoBitrate"] !== null) {
            $this->DisableHigherVideoBitrate = $param["DisableHigherVideoBitrate"];
        }

        if (array_key_exists("DisableHigherVideoResolution",$param) and $param["DisableHigherVideoResolution"] !== null) {
            $this->DisableHigherVideoResolution = $param["DisableHigherVideoResolution"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("PureAudio",$param) and $param["PureAudio"] !== null) {
            $this->PureAudio = $param["PureAudio"];
        }

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }
    }
}
