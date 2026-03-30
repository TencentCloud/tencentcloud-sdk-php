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
 * CreateAdaptiveDynamicStreamingTemplate请求参数结构体
 *
 * @method string getFormat() 获取<p>自适应转码格式，取值范围：</p><li>HLS；</li><li>MPEG-DASH。</li>
 * @method void setFormat(string $Format) 设置<p>自适应转码格式，取值范围：</p><li>HLS；</li><li>MPEG-DASH。</li>
 * @method array getStreamInfos() 获取<p>自适应转码输出子流参数信息，最多输出10路子流。<br>注意：各个子流的帧率必须保持一致；如果不一致，采用第一个子流的帧率作为输出帧率。</p>
 * @method void setStreamInfos(array $StreamInfos) 设置<p>自适应转码输出子流参数信息，最多输出10路子流。<br>注意：各个子流的帧率必须保持一致；如果不一致，采用第一个子流的帧率作为输出帧率。</p>
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getName() 获取<p>模板名称，长度限制：64 个字符。</p>
 * @method void setName(string $Name) 设置<p>模板名称，长度限制：64 个字符。</p>
 * @method string getDrmType() 获取<p>DRM 方案类型，取值范围：</p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>默认值为空字符串，如果取值为空字符串，代表不对视频做 DRM 保护。
 * @method void setDrmType(string $DrmType) 设置<p>DRM 方案类型，取值范围：</p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>默认值为空字符串，如果取值为空字符串，代表不对视频做 DRM 保护。
 * @method string getDrmKeyProvider() 获取<p>DRM 的密钥提供商，取值范围：</p><li>SDMC：华曦达；</li><li>VOD：云点播。</li>默认为 VOD 。<p>华曦达服务后续逐步下线，请使用VOD DRM加密服务。</p>
 * @method void setDrmKeyProvider(string $DrmKeyProvider) 设置<p>DRM 的密钥提供商，取值范围：</p><li>SDMC：华曦达；</li><li>VOD：云点播。</li>默认为 VOD 。<p>华曦达服务后续逐步下线，请使用VOD DRM加密服务。</p>
 * @method string getDrmEncryptType() 获取<p>加密方式，可选值：<br>cbcs：Widevine，FairPlay，WideVine+FairPlay支持；<br>cenc：Widevine支持；   </p><p>若不填<br>FairPlay 默认cbcs;<br>Widevine 默认cenc;<br>WideVine+FairPlay默认cbcs;</p>
 * @method void setDrmEncryptType(string $DrmEncryptType) 设置<p>加密方式，可选值：<br>cbcs：Widevine，FairPlay，WideVine+FairPlay支持；<br>cenc：Widevine支持；   </p><p>若不填<br>FairPlay 默认cbcs;<br>Widevine 默认cenc;<br>WideVine+FairPlay默认cbcs;</p>
 * @method integer getDisableHigherVideoBitrate() 获取<p>是否禁止视频低码率转高码率，取值范围：</p><li>0：否，</li><li>1：是。</li>默认为否。
 * @method void setDisableHigherVideoBitrate(integer $DisableHigherVideoBitrate) 设置<p>是否禁止视频低码率转高码率，取值范围：</p><li>0：否，</li><li>1：是。</li>默认为否。
 * @method integer getDisableHigherVideoResolution() 获取<p>是否禁止视频分辨率转高分辨率，取值范围：</p><li>0：否，</li><li>1：是。</li>默认为否。
 * @method void setDisableHigherVideoResolution(integer $DisableHigherVideoResolution) 设置<p>是否禁止视频分辨率转高分辨率，取值范围：</p><li>0：否，</li><li>1：是。</li>默认为否。
 * @method string getComment() 获取<p>模板描述信息，长度限制：256 个字符。</p>
 * @method void setComment(string $Comment) 设置<p>模板描述信息，长度限制：256 个字符。</p>
 * @method string getSegmentType() 获取<p>切片类型，当 Format 为 HLS 时有效，可选值：</p><li>ts：ts 切片；</li><li>fmp4：fmp4 切片。</li>默认值：ts。
 * @method void setSegmentType(string $SegmentType) 设置<p>切片类型，当 Format 为 HLS 时有效，可选值：</p><li>ts：ts 切片；</li><li>fmp4：fmp4 切片。</li>默认值：ts。
 */
class CreateAdaptiveDynamicStreamingTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>自适应转码格式，取值范围：</p><li>HLS；</li><li>MPEG-DASH。</li>
     */
    public $Format;

    /**
     * @var array <p>自适应转码输出子流参数信息，最多输出10路子流。<br>注意：各个子流的帧率必须保持一致；如果不一致，采用第一个子流的帧率作为输出帧率。</p>
     */
    public $StreamInfos;

    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>模板名称，长度限制：64 个字符。</p>
     */
    public $Name;

    /**
     * @var string <p>DRM 方案类型，取值范围：</p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>默认值为空字符串，如果取值为空字符串，代表不对视频做 DRM 保护。
     */
    public $DrmType;

    /**
     * @var string <p>DRM 的密钥提供商，取值范围：</p><li>SDMC：华曦达；</li><li>VOD：云点播。</li>默认为 VOD 。<p>华曦达服务后续逐步下线，请使用VOD DRM加密服务。</p>
     */
    public $DrmKeyProvider;

    /**
     * @var string <p>加密方式，可选值：<br>cbcs：Widevine，FairPlay，WideVine+FairPlay支持；<br>cenc：Widevine支持；   </p><p>若不填<br>FairPlay 默认cbcs;<br>Widevine 默认cenc;<br>WideVine+FairPlay默认cbcs;</p>
     */
    public $DrmEncryptType;

    /**
     * @var integer <p>是否禁止视频低码率转高码率，取值范围：</p><li>0：否，</li><li>1：是。</li>默认为否。
     */
    public $DisableHigherVideoBitrate;

    /**
     * @var integer <p>是否禁止视频分辨率转高分辨率，取值范围：</p><li>0：否，</li><li>1：是。</li>默认为否。
     */
    public $DisableHigherVideoResolution;

    /**
     * @var string <p>模板描述信息，长度限制：256 个字符。</p>
     */
    public $Comment;

    /**
     * @var string <p>切片类型，当 Format 为 HLS 时有效，可选值：</p><li>ts：ts 切片；</li><li>fmp4：fmp4 切片。</li>默认值：ts。
     */
    public $SegmentType;

    /**
     * @param string $Format <p>自适应转码格式，取值范围：</p><li>HLS；</li><li>MPEG-DASH。</li>
     * @param array $StreamInfos <p>自适应转码输出子流参数信息，最多输出10路子流。<br>注意：各个子流的帧率必须保持一致；如果不一致，采用第一个子流的帧率作为输出帧率。</p>
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $Name <p>模板名称，长度限制：64 个字符。</p>
     * @param string $DrmType <p>DRM 方案类型，取值范围：</p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>默认值为空字符串，如果取值为空字符串，代表不对视频做 DRM 保护。
     * @param string $DrmKeyProvider <p>DRM 的密钥提供商，取值范围：</p><li>SDMC：华曦达；</li><li>VOD：云点播。</li>默认为 VOD 。<p>华曦达服务后续逐步下线，请使用VOD DRM加密服务。</p>
     * @param string $DrmEncryptType <p>加密方式，可选值：<br>cbcs：Widevine，FairPlay，WideVine+FairPlay支持；<br>cenc：Widevine支持；   </p><p>若不填<br>FairPlay 默认cbcs;<br>Widevine 默认cenc;<br>WideVine+FairPlay默认cbcs;</p>
     * @param integer $DisableHigherVideoBitrate <p>是否禁止视频低码率转高码率，取值范围：</p><li>0：否，</li><li>1：是。</li>默认为否。
     * @param integer $DisableHigherVideoResolution <p>是否禁止视频分辨率转高分辨率，取值范围：</p><li>0：否，</li><li>1：是。</li>默认为否。
     * @param string $Comment <p>模板描述信息，长度限制：256 个字符。</p>
     * @param string $SegmentType <p>切片类型，当 Format 为 HLS 时有效，可选值：</p><li>ts：ts 切片；</li><li>fmp4：fmp4 切片。</li>默认值：ts。
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("DrmKeyProvider",$param) and $param["DrmKeyProvider"] !== null) {
            $this->DrmKeyProvider = $param["DrmKeyProvider"];
        }

        if (array_key_exists("DrmEncryptType",$param) and $param["DrmEncryptType"] !== null) {
            $this->DrmEncryptType = $param["DrmEncryptType"];
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

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }
    }
}
