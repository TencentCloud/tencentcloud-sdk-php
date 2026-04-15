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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参考主体，主要用作参考图生视频。由主体id、主体图（三视图）以及声音组成。
 *
 * @method string getId() 获取<p>主体id，后续生成时在提示词中可以通过@主体id的方式使用。</p>
 * @method void setId(string $Id) 设置<p>主体id，后续生成时在提示词中可以通过@主体id的方式使用。</p>
 * @method array getImages() 获取<p>该主体对应的图片url，每个主体最多支持3张图片<br>注1：支持传入图片URL（确保可访问）<br>注2：图片支持 png、jpeg、jpg、webp格式<br>注3：图片像素不能小于 128*128，且比例需要小于1:4或者4:1，且大小不超过50M。</p>
 * @method void setImages(array $Images) 设置<p>该主体对应的图片url，每个主体最多支持3张图片<br>注1：支持传入图片URL（确保可访问）<br>注2：图片支持 png、jpeg、jpg、webp格式<br>注3：图片像素不能小于 128*128，且比例需要小于1:4或者4:1，且大小不超过50M。</p>
 * @method string getName() 获取<p>主体id，后续生成时可以通过@主体id的方式使用</p>
 * @method void setName(string $Name) 设置<p>主体id，后续生成时可以通过@主体id的方式使用</p>
 * @method array getVideos() 获取<p>主体视频，该主体对应的视频url，与videos必填一个<br>注1： 仅viduq2-pro模型支持使用视频主体<br>注2：每个主体中的图片和视频，共享3个槽位<br>注3：支持1个5秒视频<br>注4：支持传入视频 URL（确保可访问）<br>注5：视频支持 mp4、avi、mov格式<br>注6：视频像素不能小于 128*128，且比例需要小于1:4或者4:1<br>注7：请注意，base64 decode之后的字节长度需要小于20M，且编码必须包含适当的内容类型字符串</p>
 * @method void setVideos(array $Videos) 设置<p>主体视频，该主体对应的视频url，与videos必填一个<br>注1： 仅viduq2-pro模型支持使用视频主体<br>注2：每个主体中的图片和视频，共享3个槽位<br>注3：支持1个5秒视频<br>注4：支持传入视频 URL（确保可访问）<br>注5：视频支持 mp4、avi、mov格式<br>注6：视频像素不能小于 128*128，且比例需要小于1:4或者4:1<br>注7：请注意，base64 decode之后的字节长度需要小于20M，且编码必须包含适当的内容类型字符串</p>
 * @method string getVoiceId() 获取<p>音色ID用来决定视频中的声音音色，为空时系统会自动推荐，可选枚举值参考列表：[音色列表](URL https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg)</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>音色ID用来决定视频中的声音音色，为空时系统会自动推荐，可选枚举值参考列表：[音色列表](URL https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg)</p>
 */
class ReferenceSubject extends AbstractModel
{
    /**
     * @var string <p>主体id，后续生成时在提示词中可以通过@主体id的方式使用。</p>
     */
    public $Id;

    /**
     * @var array <p>该主体对应的图片url，每个主体最多支持3张图片<br>注1：支持传入图片URL（确保可访问）<br>注2：图片支持 png、jpeg、jpg、webp格式<br>注3：图片像素不能小于 128*128，且比例需要小于1:4或者4:1，且大小不超过50M。</p>
     */
    public $Images;

    /**
     * @var string <p>主体id，后续生成时可以通过@主体id的方式使用</p>
     */
    public $Name;

    /**
     * @var array <p>主体视频，该主体对应的视频url，与videos必填一个<br>注1： 仅viduq2-pro模型支持使用视频主体<br>注2：每个主体中的图片和视频，共享3个槽位<br>注3：支持1个5秒视频<br>注4：支持传入视频 URL（确保可访问）<br>注5：视频支持 mp4、avi、mov格式<br>注6：视频像素不能小于 128*128，且比例需要小于1:4或者4:1<br>注7：请注意，base64 decode之后的字节长度需要小于20M，且编码必须包含适当的内容类型字符串</p>
     */
    public $Videos;

    /**
     * @var string <p>音色ID用来决定视频中的声音音色，为空时系统会自动推荐，可选枚举值参考列表：[音色列表](URL https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg)</p>
     */
    public $VoiceId;

    /**
     * @param string $Id <p>主体id，后续生成时在提示词中可以通过@主体id的方式使用。</p>
     * @param array $Images <p>该主体对应的图片url，每个主体最多支持3张图片<br>注1：支持传入图片URL（确保可访问）<br>注2：图片支持 png、jpeg、jpg、webp格式<br>注3：图片像素不能小于 128*128，且比例需要小于1:4或者4:1，且大小不超过50M。</p>
     * @param string $Name <p>主体id，后续生成时可以通过@主体id的方式使用</p>
     * @param array $Videos <p>主体视频，该主体对应的视频url，与videos必填一个<br>注1： 仅viduq2-pro模型支持使用视频主体<br>注2：每个主体中的图片和视频，共享3个槽位<br>注3：支持1个5秒视频<br>注4：支持传入视频 URL（确保可访问）<br>注5：视频支持 mp4、avi、mov格式<br>注6：视频像素不能小于 128*128，且比例需要小于1:4或者4:1<br>注7：请注意，base64 decode之后的字节长度需要小于20M，且编码必须包含适当的内容类型字符串</p>
     * @param string $VoiceId <p>音色ID用来决定视频中的声音音色，为空时系统会自动推荐，可选枚举值参考列表：[音色列表](URL https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg)</p>
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

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Videos",$param) and $param["Videos"] !== null) {
            $this->Videos = $param["Videos"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }
    }
}
