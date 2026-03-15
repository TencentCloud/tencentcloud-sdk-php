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
 * 创建主体输入信息。
 *
 * @method string getSubjectName() 获取<p>主体名称。</p>
 * @method void setSubjectName(string $SubjectName) 设置<p>主体名称。</p>
 * @method array getSubjectImages() 获取<p>主体图片。</p>
 * @method void setSubjectImages(array $SubjectImages) 设置<p>主体图片。</p>
 * @method array getSubjectVideos() 获取<p>主体视频。</p>
 * @method void setSubjectVideos(array $SubjectVideos) 设置<p>主体视频。</p>
 * @method string getVoiceId() 获取<p>主体音色ID。</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>主体音色ID。</p>
 */
class CreateAigcSubjectInput extends AbstractModel
{
    /**
     * @var string <p>主体名称。</p>
     */
    public $SubjectName;

    /**
     * @var array <p>主体图片。</p>
     */
    public $SubjectImages;

    /**
     * @var array <p>主体视频。</p>
     */
    public $SubjectVideos;

    /**
     * @var string <p>主体音色ID。</p>
     */
    public $VoiceId;

    /**
     * @param string $SubjectName <p>主体名称。</p>
     * @param array $SubjectImages <p>主体图片。</p>
     * @param array $SubjectVideos <p>主体视频。</p>
     * @param string $VoiceId <p>主体音色ID。</p>
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
        if (array_key_exists("SubjectName",$param) and $param["SubjectName"] !== null) {
            $this->SubjectName = $param["SubjectName"];
        }

        if (array_key_exists("SubjectImages",$param) and $param["SubjectImages"] !== null) {
            $this->SubjectImages = $param["SubjectImages"];
        }

        if (array_key_exists("SubjectVideos",$param) and $param["SubjectVideos"] !== null) {
            $this->SubjectVideos = $param["SubjectVideos"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }
    }
}
