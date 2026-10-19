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
 * 视频深度估计任务的输入信息。
 *
 * @method string getUrl() 获取<p>输入视频的 URL，支持以下三种形式：</p><li>以 <code>http://</code> 或 <code>https://</code> 开头的网络地址；</li><li><code>vod://</code> 开头的点播媒体文件 ID，例如 <code>vod://5285890815916760123</code>；</li><li><code>data:video/&lt;ext&gt;;base64,</code> 开头的 base64 编码视频数据。</li>
 * @method void setUrl(string $Url) 设置<p>输入视频的 URL，支持以下三种形式：</p><li>以 <code>http://</code> 或 <code>https://</code> 开头的网络地址；</li><li><code>vod://</code> 开头的点播媒体文件 ID，例如 <code>vod://5285890815916760123</code>；</li><li><code>data:video/&lt;ext&gt;;base64,</code> 开头的 base64 编码视频数据。</li>
 * @method string getFileId() 获取<p>输入视频的媒体文件 ID，仅当 Url 以 <code>vod://</code> 开头时有值。</p>
 * @method void setFileId(string $FileId) 设置<p>输入视频的媒体文件 ID，仅当 Url 以 <code>vod://</code> 开头时有值。</p>
 */
class VideoDepthEstimationInput extends AbstractModel
{
    /**
     * @var string <p>输入视频的 URL，支持以下三种形式：</p><li>以 <code>http://</code> 或 <code>https://</code> 开头的网络地址；</li><li><code>vod://</code> 开头的点播媒体文件 ID，例如 <code>vod://5285890815916760123</code>；</li><li><code>data:video/&lt;ext&gt;;base64,</code> 开头的 base64 编码视频数据。</li>
     */
    public $Url;

    /**
     * @var string <p>输入视频的媒体文件 ID，仅当 Url 以 <code>vod://</code> 开头时有值。</p>
     */
    public $FileId;

    /**
     * @param string $Url <p>输入视频的 URL，支持以下三种形式：</p><li>以 <code>http://</code> 或 <code>https://</code> 开头的网络地址；</li><li><code>vod://</code> 开头的点播媒体文件 ID，例如 <code>vod://5285890815916760123</code>；</li><li><code>data:video/&lt;ext&gt;;base64,</code> 开头的 base64 编码视频数据。</li>
     * @param string $FileId <p>输入视频的媒体文件 ID，仅当 Url 以 <code>vod://</code> 开头时有值。</p>
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

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
