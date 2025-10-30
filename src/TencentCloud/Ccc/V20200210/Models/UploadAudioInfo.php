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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 上传音频文件信息
 *
 * @method string getCustomFileName() 获取文件别名（可重复）
 * @method void setCustomFileName(string $CustomFileName) 设置文件别名（可重复）
 * @method string getAudioUrl() 获取音频文件链接。(支持mp3和wav格式，文件不超过5MB)
 * @method void setAudioUrl(string $AudioUrl) 设置音频文件链接。(支持mp3和wav格式，文件不超过5MB)
 */
class UploadAudioInfo extends AbstractModel
{
    /**
     * @var string 文件别名（可重复）
     */
    public $CustomFileName;

    /**
     * @var string 音频文件链接。(支持mp3和wav格式，文件不超过5MB)
     */
    public $AudioUrl;

    /**
     * @param string $CustomFileName 文件别名（可重复）
     * @param string $AudioUrl 音频文件链接。(支持mp3和wav格式，文件不超过5MB)
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
        if (array_key_exists("CustomFileName",$param) and $param["CustomFileName"] !== null) {
            $this->CustomFileName = $param["CustomFileName"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }
    }
}
