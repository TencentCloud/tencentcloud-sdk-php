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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
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
 * @method string getPackageType() 获取打包类型，取值范围：
<li>hls；</li>
<li>dash。</li>
 * @method void setPackageType(string $PackageType) 设置打包类型，取值范围：
<li>hls；</li>
<li>dash。</li>
 * @method string getDrmType() 获取DRM 类型，取值范围：
<li>FairPlay；</li>
<li>SimpleAES；</li>
<li>Widevine。</li>
如果取值为空字符串，代表不对视频做 DRM 保护。
 * @method void setDrmType(string $DrmType) 设置DRM 类型，取值范围：
<li>FairPlay；</li>
<li>SimpleAES；</li>
<li>Widevine。</li>
如果取值为空字符串，代表不对视频做 DRM 保护。
 * @method array getVideoTrackTemplateSet() 获取视频轨模板列表。
 * @method void setVideoTrackTemplateSet(array $VideoTrackTemplateSet) 设置视频轨模板列表。
 * @method array getAudioTrackTemplateSet() 获取音频轨模板列表。
 * @method void setAudioTrackTemplateSet(array $AudioTrackTemplateSet) 设置音频轨模板列表。
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
 * @method string getCreateTime() 获取模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method void setCreateTime(string $CreateTime) 设置模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method string getUpdateTime() 获取模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method void setUpdateTime(string $UpdateTime) 设置模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 */

/**
 *转自适应码流模板详情
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
     * @var string 打包类型，取值范围：
<li>hls；</li>
<li>dash。</li>
     */
    public $PackageType;

    /**
     * @var string DRM 类型，取值范围：
<li>FairPlay；</li>
<li>SimpleAES；</li>
<li>Widevine。</li>
如果取值为空字符串，代表不对视频做 DRM 保护。
     */
    public $DrmType;

    /**
     * @var array 视频轨模板列表。
     */
    public $VideoTrackTemplateSet;

    /**
     * @var array 音频轨模板列表。
     */
    public $AudioTrackTemplateSet;

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
     * @var string 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    public $CreateTime;

    /**
     * @var string 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    public $UpdateTime;
    /**
     * @param integer $Definition 转自适应码流模板唯一标识。
     * @param string $Type 模板类型，取值范围：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
     * @param string $Name 转自适应码流模板名称。
     * @param string $Comment 转自适应码流模板描述信息。
     * @param string $PackageType 打包类型，取值范围：
<li>hls；</li>
<li>dash。</li>
     * @param string $DrmType DRM 类型，取值范围：
<li>FairPlay；</li>
<li>SimpleAES；</li>
<li>Widevine。</li>
如果取值为空字符串，代表不对视频做 DRM 保护。
     * @param array $VideoTrackTemplateSet 视频轨模板列表。
     * @param array $AudioTrackTemplateSet 音频轨模板列表。
     * @param integer $DisableHigherVideoBitrate 是否禁止视频低码率转高码率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
     * @param integer $DisableHigherVideoResolution 是否禁止视频分辨率转高分辨率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
     * @param string $CreateTime 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     * @param string $UpdateTime 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("VideoTrackTemplateSet",$param) and $param["VideoTrackTemplateSet"] !== null) {
            $this->VideoTrackTemplateSet = [];
            foreach ($param["VideoTrackTemplateSet"] as $key => $value){
                $obj = new VideoTrackTemplateInfo();
                $obj->deserialize($value);
                array_push($this->VideoTrackTemplateSet, $obj);
            }
        }

        if (array_key_exists("AudioTrackTemplateSet",$param) and $param["AudioTrackTemplateSet"] !== null) {
            $this->AudioTrackTemplateSet = [];
            foreach ($param["AudioTrackTemplateSet"] as $key => $value){
                $obj = new AudioTrackTemplateInfo();
                $obj->deserialize($value);
                array_push($this->AudioTrackTemplateSet, $obj);
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
    }
}
