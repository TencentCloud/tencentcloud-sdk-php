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
 * Aigc生音频任务，输出的视频信息。
 *
 * @method string getUrl() 获取<p>视频URL。</p>
 * @method void setUrl(string $Url) 设置<p>视频URL。</p>
 * @method integer getDuration() 获取<p>视频时长。</p>
 * @method void setDuration(integer $Duration) 设置<p>视频时长。</p>
 */
class AigcAudioOutputVideoInfo extends AbstractModel
{
    /**
     * @var string <p>视频URL。</p>
     */
    public $Url;

    /**
     * @var integer <p>视频时长。</p>
     */
    public $Duration;

    /**
     * @param string $Url <p>视频URL。</p>
     * @param integer $Duration <p>视频时长。</p>
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
