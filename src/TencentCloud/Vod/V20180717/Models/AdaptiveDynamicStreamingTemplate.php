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
 * 转自适应码流模板详情
 *
 * @method integer getDefinition() 获取<p>转自适应码流模板唯一标识。</p>
 * @method void setDefinition(integer $Definition) 设置<p>转自适应码流模板唯一标识。</p>
 * @method string getType() 获取<p>模板类型，取值范围：</p><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li>
 * @method void setType(string $Type) 设置<p>模板类型，取值范围：</p><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li>
 * @method string getName() 获取<p>转自适应码流模板名称。</p>
 * @method void setName(string $Name) 设置<p>转自适应码流模板名称。</p>
 * @method string getComment() 获取<p>转自适应码流模板描述信息。</p>
 * @method void setComment(string $Comment) 设置<p>转自适应码流模板描述信息。</p>
 * @method string getFormat() 获取<p>自适应转码格式，取值范围：</p><li>HLS。</li>
 * @method void setFormat(string $Format) 设置<p>自适应转码格式，取值范围：</p><li>HLS。</li>
 * @method string getDrmType() 获取<p>DRM 类型，取值范围：</p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>如果取值为空字符串，代表不对视频做 DRM 保护。
 * @method void setDrmType(string $DrmType) 设置<p>DRM 类型，取值范围：</p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>如果取值为空字符串，代表不对视频做 DRM 保护。
 * @method string getDrmKeyProvider() 获取<p>DRM 的密钥提供商，取值范围：</p><li>SDMC：华曦达；</li><li>VOD：云点播。</li>默认值为 VOD 。<p>华曦达服务后续逐步下线，请使用VOD DRM加密服务。</p>
 * @method void setDrmKeyProvider(string $DrmKeyProvider) 设置<p>DRM 的密钥提供商，取值范围：</p><li>SDMC：华曦达；</li><li>VOD：云点播。</li>默认值为 VOD 。<p>华曦达服务后续逐步下线，请使用VOD DRM加密服务。</p>
 * @method string getDrmEncryptType() 获取<p>DRM的加密类型，取值范围：{&quot;cbcs&quot;, &quot;cenc&quot;}</p>
 * @method void setDrmEncryptType(string $DrmEncryptType) 设置<p>DRM的加密类型，取值范围：{&quot;cbcs&quot;, &quot;cenc&quot;}</p>
 * @method array getStreamInfos() 获取<p>自适应转码输入流参数信息，最多输入10路流。</p>
 * @method void setStreamInfos(array $StreamInfos) 设置<p>自适应转码输入流参数信息，最多输入10路流。</p>
 * @method integer getDisableHigherVideoBitrate() 获取<p>是否禁止视频低码率转高码率，取值范围：</p><li>0：否，</li><li>1：是。</li>
 * @method void setDisableHigherVideoBitrate(integer $DisableHigherVideoBitrate) 设置<p>是否禁止视频低码率转高码率，取值范围：</p><li>0：否，</li><li>1：是。</li>
 * @method integer getDisableHigherVideoResolution() 获取<p>是否禁止视频分辨率转高分辨率，取值范围：</p><li>0：否，</li><li>1：是。</li>
 * @method void setDisableHigherVideoResolution(integer $DisableHigherVideoResolution) 设置<p>是否禁止视频分辨率转高分辨率，取值范围：</p><li>0：否，</li><li>1：是。</li>
 * @method string getCreateTime() 获取<p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method string getUpdateTime() 获取<p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method string getSegmentType() 获取<p>切片类型，仅当 Format 为 HLS 时有效。</p>
 * @method void setSegmentType(string $SegmentType) 设置<p>切片类型，仅当 Format 为 HLS 时有效。</p>
 */
class AdaptiveDynamicStreamingTemplate extends AbstractModel
{
    /**
     * @var integer <p>转自适应码流模板唯一标识。</p>
     */
    public $Definition;

    /**
     * @var string <p>模板类型，取值范围：</p><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li>
     */
    public $Type;

    /**
     * @var string <p>转自适应码流模板名称。</p>
     */
    public $Name;

    /**
     * @var string <p>转自适应码流模板描述信息。</p>
     */
    public $Comment;

    /**
     * @var string <p>自适应转码格式，取值范围：</p><li>HLS。</li>
     */
    public $Format;

    /**
     * @var string <p>DRM 类型，取值范围：</p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>如果取值为空字符串，代表不对视频做 DRM 保护。
     */
    public $DrmType;

    /**
     * @var string <p>DRM 的密钥提供商，取值范围：</p><li>SDMC：华曦达；</li><li>VOD：云点播。</li>默认值为 VOD 。<p>华曦达服务后续逐步下线，请使用VOD DRM加密服务。</p>
     */
    public $DrmKeyProvider;

    /**
     * @var string <p>DRM的加密类型，取值范围：{&quot;cbcs&quot;, &quot;cenc&quot;}</p>
     */
    public $DrmEncryptType;

    /**
     * @var array <p>自适应转码输入流参数信息，最多输入10路流。</p>
     */
    public $StreamInfos;

    /**
     * @var integer <p>是否禁止视频低码率转高码率，取值范围：</p><li>0：否，</li><li>1：是。</li>
     */
    public $DisableHigherVideoBitrate;

    /**
     * @var integer <p>是否禁止视频分辨率转高分辨率，取值范围：</p><li>0：否，</li><li>1：是。</li>
     */
    public $DisableHigherVideoResolution;

    /**
     * @var string <p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>切片类型，仅当 Format 为 HLS 时有效。</p>
     */
    public $SegmentType;

    /**
     * @param integer $Definition <p>转自适应码流模板唯一标识。</p>
     * @param string $Type <p>模板类型，取值范围：</p><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li>
     * @param string $Name <p>转自适应码流模板名称。</p>
     * @param string $Comment <p>转自适应码流模板描述信息。</p>
     * @param string $Format <p>自适应转码格式，取值范围：</p><li>HLS。</li>
     * @param string $DrmType <p>DRM 类型，取值范围：</p><li>SimpleAES</li><li>Widevine</li><li>FairPlay</li><li>Widevine+FairPlay</li>如果取值为空字符串，代表不对视频做 DRM 保护。
     * @param string $DrmKeyProvider <p>DRM 的密钥提供商，取值范围：</p><li>SDMC：华曦达；</li><li>VOD：云点播。</li>默认值为 VOD 。<p>华曦达服务后续逐步下线，请使用VOD DRM加密服务。</p>
     * @param string $DrmEncryptType <p>DRM的加密类型，取值范围：{&quot;cbcs&quot;, &quot;cenc&quot;}</p>
     * @param array $StreamInfos <p>自适应转码输入流参数信息，最多输入10路流。</p>
     * @param integer $DisableHigherVideoBitrate <p>是否禁止视频低码率转高码率，取值范围：</p><li>0：否，</li><li>1：是。</li>
     * @param integer $DisableHigherVideoResolution <p>是否禁止视频分辨率转高分辨率，取值范围：</p><li>0：否，</li><li>1：是。</li>
     * @param string $CreateTime <p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param string $UpdateTime <p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param string $SegmentType <p>切片类型，仅当 Format 为 HLS 时有效。</p>
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

        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("DrmKeyProvider",$param) and $param["DrmKeyProvider"] !== null) {
            $this->DrmKeyProvider = $param["DrmKeyProvider"];
        }

        if (array_key_exists("DrmEncryptType",$param) and $param["DrmEncryptType"] !== null) {
            $this->DrmEncryptType = $param["DrmEncryptType"];
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

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }
    }
}
