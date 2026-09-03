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
 * 参考主体信息。
对于Vidu模型：
Id -> server_id， 通过主体创建接口获取的主体ID。
name -> 主体ID， 后续通过@主体ID方式使用。

对于Kling模型:
id -> element_id， 主体ID, 通过主体创建接口获取的主体ID。
 *
 * @method string getId() 获取<p>参考主体的 ID。</p>
 * @method void setId(string $Id) 设置<p>参考主体的 ID。</p>
 * @method string getName() 获取<p>主体名称。</p>
 * @method void setName(string $Name) 设置<p>主体名称。</p>
 * @method string getVoiceId() 获取<p>主体音色ID。</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>主体音色ID。</p>
 * @method array getImageUrls() 获取<p>主体图片列表。</p>
 * @method void setImageUrls(array $ImageUrls) 设置<p>主体图片列表。</p>
 * @method array getVideoUrls() 获取<p>主体视频列表。</p>
 * @method void setVideoUrls(array $VideoUrls) 设置<p>主体视频列表。</p>
 */
class AigcVideoReferenceSubjectInfo extends AbstractModel
{
    /**
     * @var string <p>参考主体的 ID。</p>
     */
    public $Id;

    /**
     * @var string <p>主体名称。</p>
     */
    public $Name;

    /**
     * @var string <p>主体音色ID。</p>
     */
    public $VoiceId;

    /**
     * @var array <p>主体图片列表。</p>
     */
    public $ImageUrls;

    /**
     * @var array <p>主体视频列表。</p>
     */
    public $VideoUrls;

    /**
     * @param string $Id <p>参考主体的 ID。</p>
     * @param string $Name <p>主体名称。</p>
     * @param string $VoiceId <p>主体音色ID。</p>
     * @param array $ImageUrls <p>主体图片列表。</p>
     * @param array $VideoUrls <p>主体视频列表。</p>
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
