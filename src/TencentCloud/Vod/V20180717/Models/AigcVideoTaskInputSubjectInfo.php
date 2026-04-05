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
 * AIGC 固定主体输入信息。
 *
 * @method string getId() 获取<p>固定主体Id。</p><ul><li>Kling主体<strong>必选</strong>；</li><li>Vidu主体可选。</li></ul>
 * @method void setId(string $Id) 设置<p>固定主体Id。</p><ul><li>Kling主体<strong>必选</strong>；</li><li>Vidu主体可选。</li></ul>
 * @method string getName() 获取<p>固定名称。</p><ul><li>Vidu主体<strong>必选</strong>，可在 prompt 中加入 [@name] 使用。如 name 为小明时，prompt 中描述为 [@小明] 。</li><li>Kling主体可选。</li></ul>
 * @method void setName(string $Name) 设置<p>固定名称。</p><ul><li>Vidu主体<strong>必选</strong>，可在 prompt 中加入 [@name] 使用。如 name 为小明时，prompt 中描述为 [@小明] 。</li><li>Kling主体可选。</li></ul>
 * @method string getVoiceId() 获取<p><strong>仅Vidu有效。</strong>音色ID用来决定视频中的声音音色，为空时系统会自动推荐。</p>
 * @method void setVoiceId(string $VoiceId) 设置<p><strong>仅Vidu有效。</strong>音色ID用来决定视频中的声音音色，为空时系统会自动推荐。</p>
 * @method array getImageUrls() 获取<p><strong>仅Vidu有效。</strong>临时主体图片，最多3张图片<br>注1：支持传入图片URL（确保可访问）；<br>注2：图片支持 png、jpeg、jpg、webp格式；<br>注3：图片像素不能小于 128*128，且比例需要小于1:4或者4:1。</p>
 * @method void setImageUrls(array $ImageUrls) 设置<p><strong>仅Vidu有效。</strong>临时主体图片，最多3张图片<br>注1：支持传入图片URL（确保可访问）；<br>注2：图片支持 png、jpeg、jpg、webp格式；<br>注3：图片像素不能小于 128*128，且比例需要小于1:4或者4:1。</p>
 * @method array getVideoUrls() 获取<p><strong>仅Vidu有效。</strong>临时主体视频，最多1个5秒视频注1：仅参考生viduq2-pro模型支持使用视频主体；注2：最多支持上传 1个5秒 的视频；注3：视频支持 mp4、avi、mov格式；注4：视频像素不能小于 128*128，且比例需要小于1:4或者4:1；</p>
 * @method void setVideoUrls(array $VideoUrls) 设置<p><strong>仅Vidu有效。</strong>临时主体视频，最多1个5秒视频注1：仅参考生viduq2-pro模型支持使用视频主体；注2：最多支持上传 1个5秒 的视频；注3：视频支持 mp4、avi、mov格式；注4：视频像素不能小于 128*128，且比例需要小于1:4或者4:1；</p>
 */
class AigcVideoTaskInputSubjectInfo extends AbstractModel
{
    /**
     * @var string <p>固定主体Id。</p><ul><li>Kling主体<strong>必选</strong>；</li><li>Vidu主体可选。</li></ul>
     */
    public $Id;

    /**
     * @var string <p>固定名称。</p><ul><li>Vidu主体<strong>必选</strong>，可在 prompt 中加入 [@name] 使用。如 name 为小明时，prompt 中描述为 [@小明] 。</li><li>Kling主体可选。</li></ul>
     */
    public $Name;

    /**
     * @var string <p><strong>仅Vidu有效。</strong>音色ID用来决定视频中的声音音色，为空时系统会自动推荐。</p>
     */
    public $VoiceId;

    /**
     * @var array <p><strong>仅Vidu有效。</strong>临时主体图片，最多3张图片<br>注1：支持传入图片URL（确保可访问）；<br>注2：图片支持 png、jpeg、jpg、webp格式；<br>注3：图片像素不能小于 128*128，且比例需要小于1:4或者4:1。</p>
     */
    public $ImageUrls;

    /**
     * @var array <p><strong>仅Vidu有效。</strong>临时主体视频，最多1个5秒视频注1：仅参考生viduq2-pro模型支持使用视频主体；注2：最多支持上传 1个5秒 的视频；注3：视频支持 mp4、avi、mov格式；注4：视频像素不能小于 128*128，且比例需要小于1:4或者4:1；</p>
     */
    public $VideoUrls;

    /**
     * @param string $Id <p>固定主体Id。</p><ul><li>Kling主体<strong>必选</strong>；</li><li>Vidu主体可选。</li></ul>
     * @param string $Name <p>固定名称。</p><ul><li>Vidu主体<strong>必选</strong>，可在 prompt 中加入 [@name] 使用。如 name 为小明时，prompt 中描述为 [@小明] 。</li><li>Kling主体可选。</li></ul>
     * @param string $VoiceId <p><strong>仅Vidu有效。</strong>音色ID用来决定视频中的声音音色，为空时系统会自动推荐。</p>
     * @param array $ImageUrls <p><strong>仅Vidu有效。</strong>临时主体图片，最多3张图片<br>注1：支持传入图片URL（确保可访问）；<br>注2：图片支持 png、jpeg、jpg、webp格式；<br>注3：图片像素不能小于 128*128，且比例需要小于1:4或者4:1。</p>
     * @param array $VideoUrls <p><strong>仅Vidu有效。</strong>临时主体视频，最多1个5秒视频注1：仅参考生viduq2-pro模型支持使用视频主体；注2：最多支持上传 1个5秒 的视频；注3：视频支持 mp4、avi、mov格式；注4：视频像素不能小于 128*128，且比例需要小于1:4或者4:1；</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("ImageUrls",$param) and $param["ImageUrls"] !== null) {
            $this->ImageUrls = $param["ImageUrls"];
        }

        if (array_key_exists("VideoUrls",$param) and $param["VideoUrls"] !== null) {
            $this->VideoUrls = $param["VideoUrls"];
        }
    }
}
