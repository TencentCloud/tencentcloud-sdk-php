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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAdaptiveDynamicStreamingTemplate请求参数结构体
 *
 * @method integer getDefinition() 获取<p>自适应转码模板唯一标识。</p>
 * @method void setDefinition(integer $Definition) 设置<p>自适应转码模板唯一标识。</p>
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getName() 获取<p>模板名称，长度限制：64 个字符。</p>
 * @method void setName(string $Name) 设置<p>模板名称，长度限制：64 个字符。</p>
 * @method string getFormat() 获取<p>自适应转码格式，取值范围：</p><li>HLS；</li><li>MPEG-DASH。</li>
 * @method void setFormat(string $Format) 设置<p>自适应转码格式，取值范围：</p><li>HLS；</li><li>MPEG-DASH。</li>
 * @method integer getDisableHigherVideoBitrate() 获取<p>是否禁止视频低码率转高码率，取值范围：</p><li>0：否，</li><li>1：是。</li>
 * @method void setDisableHigherVideoBitrate(integer $DisableHigherVideoBitrate) 设置<p>是否禁止视频低码率转高码率，取值范围：</p><li>0：否，</li><li>1：是。</li>
 * @method integer getDisableHigherVideoResolution() 获取<p>是否禁止视频分辨率转高分辨率，取值范围：</p><li>0：否，</li><li>1：是。</li>
 * @method void setDisableHigherVideoResolution(integer $DisableHigherVideoResolution) 设置<p>是否禁止视频分辨率转高分辨率，取值范围：</p><li>0：否，</li><li>1：是。</li>
 * @method array getStreamInfos() 获取<p>自适应转码输入流参数信息，最多输入10路流。<br>注意：各个流的帧率必须保持一致；如果不一致，采用第一个流的帧率作为输出帧率。</p>
 * @method void setStreamInfos(array $StreamInfos) 设置<p>自适应转码输入流参数信息，最多输入10路流。<br>注意：各个流的帧率必须保持一致；如果不一致，采用第一个流的帧率作为输出帧率。</p>
 * @method string getComment() 获取<p>模板描述信息，长度限制：256 个字符。</p>
 * @method void setComment(string $Comment) 设置<p>模板描述信息，长度限制：256 个字符。</p>
 * @method string getSegmentType() 获取<p>分片类型，可选值：<br>ts: HLS，内部映射为ts-segment</p><p>mp4: HLS/DASH，HLS情况下内部映射为mp4-mp4-segment，DASH情况下内部映射为mp4-mp4-byterange</p><p>ts-segment：HLS+TS 切片</p><p>ts-byterange：HLS+TS byte range</p><p>mp4-segment：HLS+MP4 切片</p><p>mp4-byterange：HLS+MP4 byte range</p><p>ts-packed-audio：HLS+TS+Packed Audio 切片</p><p>mp4-packed-audio：HLS+MP4+Packed Audio 切片</p><p>ts-ts-segment：HLS+TS+TS 切片</p><p>ts-ts-byterange：HLS+TS+TS byte range</p><p>mp4-mp4-segment：HLS+MP4+MP4 切片</p><p>mp4-mp4-byterange：HLS/DASH+MP4+MP4 byte range</p><p>ts-packed-audio-byterange：HLS+TS+Packed Audio byte range</p><p>mp4-packed-audio-byterange：HLS+MP4+Packed Audio byte range<br> 默认值：ts-segment 注：自适应码流的分片格式以此字段为准。DASH格式下SegmentType只能为mp4-mp4-byterange。</p><p>FairPlay：只能用于HLS，切片格式只能是mp4或mp4-mp4-segment Widevine：可以用于HLS和DASH，HLS下切片格式只能是mp4或mp4-mp4-segment，DASH下切片格式只能是mp4或mp4-mp4-byterange Widevine+FairPlay: 只能用于HLS，切片格式只能是mp4或mp4-mp4-segment</p>
 * @method void setSegmentType(string $SegmentType) 设置<p>分片类型，可选值：<br>ts: HLS，内部映射为ts-segment</p><p>mp4: HLS/DASH，HLS情况下内部映射为mp4-mp4-segment，DASH情况下内部映射为mp4-mp4-byterange</p><p>ts-segment：HLS+TS 切片</p><p>ts-byterange：HLS+TS byte range</p><p>mp4-segment：HLS+MP4 切片</p><p>mp4-byterange：HLS+MP4 byte range</p><p>ts-packed-audio：HLS+TS+Packed Audio 切片</p><p>mp4-packed-audio：HLS+MP4+Packed Audio 切片</p><p>ts-ts-segment：HLS+TS+TS 切片</p><p>ts-ts-byterange：HLS+TS+TS byte range</p><p>mp4-mp4-segment：HLS+MP4+MP4 切片</p><p>mp4-mp4-byterange：HLS/DASH+MP4+MP4 byte range</p><p>ts-packed-audio-byterange：HLS+TS+Packed Audio byte range</p><p>mp4-packed-audio-byterange：HLS+MP4+Packed Audio byte range<br> 默认值：ts-segment 注：自适应码流的分片格式以此字段为准。DASH格式下SegmentType只能为mp4-mp4-byterange。</p><p>FairPlay：只能用于HLS，切片格式只能是mp4或mp4-mp4-segment Widevine：可以用于HLS和DASH，HLS下切片格式只能是mp4或mp4-mp4-segment，DASH下切片格式只能是mp4或mp4-mp4-byterange Widevine+FairPlay: 只能用于HLS，切片格式只能是mp4或mp4-mp4-segment</p>
 * @method integer getSegmentDuration() 获取<p>切片平均时长。</p><p>取值范围：[1, 10]</p><p>单位：秒</p>
 * @method void setSegmentDuration(integer $SegmentDuration) 设置<p>切片平均时长。</p><p>取值范围：[1, 10]</p><p>单位：秒</p>
 */
class ModifyAdaptiveDynamicStreamingTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p>自适应转码模板唯一标识。</p>
     */
    public $Definition;

    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>模板名称，长度限制：64 个字符。</p>
     */
    public $Name;

    /**
     * @var string <p>自适应转码格式，取值范围：</p><li>HLS；</li><li>MPEG-DASH。</li>
     */
    public $Format;

    /**
     * @var integer <p>是否禁止视频低码率转高码率，取值范围：</p><li>0：否，</li><li>1：是。</li>
     */
    public $DisableHigherVideoBitrate;

    /**
     * @var integer <p>是否禁止视频分辨率转高分辨率，取值范围：</p><li>0：否，</li><li>1：是。</li>
     */
    public $DisableHigherVideoResolution;

    /**
     * @var array <p>自适应转码输入流参数信息，最多输入10路流。<br>注意：各个流的帧率必须保持一致；如果不一致，采用第一个流的帧率作为输出帧率。</p>
     */
    public $StreamInfos;

    /**
     * @var string <p>模板描述信息，长度限制：256 个字符。</p>
     */
    public $Comment;

    /**
     * @var string <p>分片类型，可选值：<br>ts: HLS，内部映射为ts-segment</p><p>mp4: HLS/DASH，HLS情况下内部映射为mp4-mp4-segment，DASH情况下内部映射为mp4-mp4-byterange</p><p>ts-segment：HLS+TS 切片</p><p>ts-byterange：HLS+TS byte range</p><p>mp4-segment：HLS+MP4 切片</p><p>mp4-byterange：HLS+MP4 byte range</p><p>ts-packed-audio：HLS+TS+Packed Audio 切片</p><p>mp4-packed-audio：HLS+MP4+Packed Audio 切片</p><p>ts-ts-segment：HLS+TS+TS 切片</p><p>ts-ts-byterange：HLS+TS+TS byte range</p><p>mp4-mp4-segment：HLS+MP4+MP4 切片</p><p>mp4-mp4-byterange：HLS/DASH+MP4+MP4 byte range</p><p>ts-packed-audio-byterange：HLS+TS+Packed Audio byte range</p><p>mp4-packed-audio-byterange：HLS+MP4+Packed Audio byte range<br> 默认值：ts-segment 注：自适应码流的分片格式以此字段为准。DASH格式下SegmentType只能为mp4-mp4-byterange。</p><p>FairPlay：只能用于HLS，切片格式只能是mp4或mp4-mp4-segment Widevine：可以用于HLS和DASH，HLS下切片格式只能是mp4或mp4-mp4-segment，DASH下切片格式只能是mp4或mp4-mp4-byterange Widevine+FairPlay: 只能用于HLS，切片格式只能是mp4或mp4-mp4-segment</p>
     */
    public $SegmentType;

    /**
     * @var integer <p>切片平均时长。</p><p>取值范围：[1, 10]</p><p>单位：秒</p>
     */
    public $SegmentDuration;

    /**
     * @param integer $Definition <p>自适应转码模板唯一标识。</p>
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $Name <p>模板名称，长度限制：64 个字符。</p>
     * @param string $Format <p>自适应转码格式，取值范围：</p><li>HLS；</li><li>MPEG-DASH。</li>
     * @param integer $DisableHigherVideoBitrate <p>是否禁止视频低码率转高码率，取值范围：</p><li>0：否，</li><li>1：是。</li>
     * @param integer $DisableHigherVideoResolution <p>是否禁止视频分辨率转高分辨率，取值范围：</p><li>0：否，</li><li>1：是。</li>
     * @param array $StreamInfos <p>自适应转码输入流参数信息，最多输入10路流。<br>注意：各个流的帧率必须保持一致；如果不一致，采用第一个流的帧率作为输出帧率。</p>
     * @param string $Comment <p>模板描述信息，长度限制：256 个字符。</p>
     * @param string $SegmentType <p>分片类型，可选值：<br>ts: HLS，内部映射为ts-segment</p><p>mp4: HLS/DASH，HLS情况下内部映射为mp4-mp4-segment，DASH情况下内部映射为mp4-mp4-byterange</p><p>ts-segment：HLS+TS 切片</p><p>ts-byterange：HLS+TS byte range</p><p>mp4-segment：HLS+MP4 切片</p><p>mp4-byterange：HLS+MP4 byte range</p><p>ts-packed-audio：HLS+TS+Packed Audio 切片</p><p>mp4-packed-audio：HLS+MP4+Packed Audio 切片</p><p>ts-ts-segment：HLS+TS+TS 切片</p><p>ts-ts-byterange：HLS+TS+TS byte range</p><p>mp4-mp4-segment：HLS+MP4+MP4 切片</p><p>mp4-mp4-byterange：HLS/DASH+MP4+MP4 byte range</p><p>ts-packed-audio-byterange：HLS+TS+Packed Audio byte range</p><p>mp4-packed-audio-byterange：HLS+MP4+Packed Audio byte range<br> 默认值：ts-segment 注：自适应码流的分片格式以此字段为准。DASH格式下SegmentType只能为mp4-mp4-byterange。</p><p>FairPlay：只能用于HLS，切片格式只能是mp4或mp4-mp4-segment Widevine：可以用于HLS和DASH，HLS下切片格式只能是mp4或mp4-mp4-segment，DASH下切片格式只能是mp4或mp4-mp4-byterange Widevine+FairPlay: 只能用于HLS，切片格式只能是mp4或mp4-mp4-segment</p>
     * @param integer $SegmentDuration <p>切片平均时长。</p><p>取值范围：[1, 10]</p><p>单位：秒</p>
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("DisableHigherVideoBitrate",$param) and $param["DisableHigherVideoBitrate"] !== null) {
            $this->DisableHigherVideoBitrate = $param["DisableHigherVideoBitrate"];
        }

        if (array_key_exists("DisableHigherVideoResolution",$param) and $param["DisableHigherVideoResolution"] !== null) {
            $this->DisableHigherVideoResolution = $param["DisableHigherVideoResolution"];
        }

        if (array_key_exists("StreamInfos",$param) and $param["StreamInfos"] !== null) {
            $this->StreamInfos = [];
            foreach ($param["StreamInfos"] as $key => $value){
                $obj = new AdaptiveStreamTemplate();
                $obj->deserialize($value);
                array_push($this->StreamInfos, $obj);
            }
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }

        if (array_key_exists("SegmentDuration",$param) and $param["SegmentDuration"] !== null) {
            $this->SegmentDuration = $param["SegmentDuration"];
        }
    }
}
