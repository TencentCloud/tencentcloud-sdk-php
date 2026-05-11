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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于场景化视频生成的参考视频素材。
 *
 * @method string getVideoUrl() 获取<p>参考视频Url，需外网可访问。</p>
 * @method void setVideoUrl(string $VideoUrl) 设置<p>参考视频Url，需外网可访问。</p>
 */
class SceneVideoReferenceVideoInfo extends AbstractModel
{
    /**
     * @var string <p>参考视频Url，需外网可访问。</p>
     */
    public $VideoUrl;

    /**
     * @param string $VideoUrl <p>参考视频Url，需外网可访问。</p>
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
        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }
    }
}
