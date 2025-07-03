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
 * CreateAdaptiveDynamicStreamingTemplate请求参数结构体
 *
 * @method string getFormat() 获取自适应转码格式，取值范围：
<li>HLS，</li>
<li>MPEG-DASH。</li>
 * @method void setFormat(string $Format) 设置自适应转码格式，取值范围：
<li>HLS，</li>
<li>MPEG-DASH。</li>
 * @method array getStreamInfos() 获取转自适应码流输出子流参数信息，最多输出10路子流。
注意：各个子流的帧率必须保持一致；如果不一致，采用第一个子流的帧率作为输出帧率。
 * @method void setStreamInfos(array $StreamInfos) 设置转自适应码流输出子流参数信息，最多输出10路子流。
注意：各个子流的帧率必须保持一致；如果不一致，采用第一个子流的帧率作为输出帧率。
 * @method string getName() 获取模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置模板名称，长度限制：64 个字符。
 * @method integer getDisableHigherVideoBitrate() 获取是否禁止视频低码率转高码率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
默认为否。
 * @method void setDisableHigherVideoBitrate(integer $DisableHigherVideoBitrate) 设置是否禁止视频低码率转高码率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
默认为否。
 * @method integer getDisableHigherVideoResolution() 获取是否禁止视频分辨率转高分辨率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
默认为否。
 * @method void setDisableHigherVideoResolution(integer $DisableHigherVideoResolution) 设置是否禁止视频分辨率转高分辨率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
默认为否。
 * @method string getComment() 获取模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置模板描述信息，长度限制：256 个字符。
 * @method integer getPureAudio() 获取是否为纯音频，0表示视频模板，1表示纯音频模板
当值为1：
1. StreamInfos.N.RemoveVideo=1
2. StreamInfos.N.RemoveAudio=0
3. StreamInfos.N.Video.Codec=copy
当值为0：
1. StreamInfos.N.Video.Codec不能为copy
2. StreamInfos.N.Video.Fps不能为null
注意：
此值只是区分模板类型，任务使用RemoveAudio和RemoveVideo的值
 * @method void setPureAudio(integer $PureAudio) 设置是否为纯音频，0表示视频模板，1表示纯音频模板
当值为1：
1. StreamInfos.N.RemoveVideo=1
2. StreamInfos.N.RemoveAudio=0
3. StreamInfos.N.Video.Codec=copy
当值为0：
1. StreamInfos.N.Video.Codec不能为copy
2. StreamInfos.N.Video.Fps不能为null
注意：
此值只是区分模板类型，任务使用RemoveAudio和RemoveVideo的值
 * @method string getSegmentType() 获取hls 分片类型，可选值： <li>ts-segment：HLS+TS 切片</li> <li>ts-byterange：HLS+TS byte range</li> <li>mp4-segment：HLS+MP4 切片</li> <li>mp4-byterange：HLS+MP4 byte range</li> <li>ts-packed-audio：TS+Packed Audio</li> <li>mp4-packed-audio：MP4+Packed Audio</li> 默认值：ts-segment 
注：自适应码流的hls分片格式已此字段为准
 * @method void setSegmentType(string $SegmentType) 设置hls 分片类型，可选值： <li>ts-segment：HLS+TS 切片</li> <li>ts-byterange：HLS+TS byte range</li> <li>mp4-segment：HLS+MP4 切片</li> <li>mp4-byterange：HLS+MP4 byte range</li> <li>ts-packed-audio：TS+Packed Audio</li> <li>mp4-packed-audio：MP4+Packed Audio</li> 默认值：ts-segment 
注：自适应码流的hls分片格式已此字段为准
 */
class CreateAdaptiveDynamicStreamingTemplateRequest extends AbstractModel
{
    /**
     * @var string 自适应转码格式，取值范围：
<li>HLS，</li>
<li>MPEG-DASH。</li>
     */
    public $Format;

    /**
     * @var array 转自适应码流输出子流参数信息，最多输出10路子流。
注意：各个子流的帧率必须保持一致；如果不一致，采用第一个子流的帧率作为输出帧率。
     */
    public $StreamInfos;

    /**
     * @var string 模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var integer 是否禁止视频低码率转高码率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
默认为否。
     */
    public $DisableHigherVideoBitrate;

    /**
     * @var integer 是否禁止视频分辨率转高分辨率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
默认为否。
     */
    public $DisableHigherVideoResolution;

    /**
     * @var string 模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var integer 是否为纯音频，0表示视频模板，1表示纯音频模板
当值为1：
1. StreamInfos.N.RemoveVideo=1
2. StreamInfos.N.RemoveAudio=0
3. StreamInfos.N.Video.Codec=copy
当值为0：
1. StreamInfos.N.Video.Codec不能为copy
2. StreamInfos.N.Video.Fps不能为null
注意：
此值只是区分模板类型，任务使用RemoveAudio和RemoveVideo的值
     */
    public $PureAudio;

    /**
     * @var string hls 分片类型，可选值： <li>ts-segment：HLS+TS 切片</li> <li>ts-byterange：HLS+TS byte range</li> <li>mp4-segment：HLS+MP4 切片</li> <li>mp4-byterange：HLS+MP4 byte range</li> <li>ts-packed-audio：TS+Packed Audio</li> <li>mp4-packed-audio：MP4+Packed Audio</li> 默认值：ts-segment 
注：自适应码流的hls分片格式已此字段为准
     */
    public $SegmentType;

    /**
     * @param string $Format 自适应转码格式，取值范围：
<li>HLS，</li>
<li>MPEG-DASH。</li>
     * @param array $StreamInfos 转自适应码流输出子流参数信息，最多输出10路子流。
注意：各个子流的帧率必须保持一致；如果不一致，采用第一个子流的帧率作为输出帧率。
     * @param string $Name 模板名称，长度限制：64 个字符。
     * @param integer $DisableHigherVideoBitrate 是否禁止视频低码率转高码率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
默认为否。
     * @param integer $DisableHigherVideoResolution 是否禁止视频分辨率转高分辨率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
默认为否。
     * @param string $Comment 模板描述信息，长度限制：256 个字符。
     * @param integer $PureAudio 是否为纯音频，0表示视频模板，1表示纯音频模板
当值为1：
1. StreamInfos.N.RemoveVideo=1
2. StreamInfos.N.RemoveAudio=0
3. StreamInfos.N.Video.Codec=copy
当值为0：
1. StreamInfos.N.Video.Codec不能为copy
2. StreamInfos.N.Video.Fps不能为null
注意：
此值只是区分模板类型，任务使用RemoveAudio和RemoveVideo的值
     * @param string $SegmentType hls 分片类型，可选值： <li>ts-segment：HLS+TS 切片</li> <li>ts-byterange：HLS+TS byte range</li> <li>mp4-segment：HLS+MP4 切片</li> <li>mp4-byterange：HLS+MP4 byte range</li> <li>ts-packed-audio：TS+Packed Audio</li> <li>mp4-packed-audio：MP4+Packed Audio</li> 默认值：ts-segment 
注：自适应码流的hls分片格式已此字段为准
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DisableHigherVideoBitrate",$param) and $param["DisableHigherVideoBitrate"] !== null) {
            $this->DisableHigherVideoBitrate = $param["DisableHigherVideoBitrate"];
        }

        if (array_key_exists("DisableHigherVideoResolution",$param) and $param["DisableHigherVideoResolution"] !== null) {
            $this->DisableHigherVideoResolution = $param["DisableHigherVideoResolution"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("PureAudio",$param) and $param["PureAudio"] !== null) {
            $this->PureAudio = $param["PureAudio"];
        }

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }
    }
}
