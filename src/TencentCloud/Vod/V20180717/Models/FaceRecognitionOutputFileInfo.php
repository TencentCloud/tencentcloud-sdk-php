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
 * 人脸识别输出文件信息
 *
 * @method string getFileType() 获取<p>人脸识别输出文件类型</p><p>枚举值：</p><ul><li>Output： 任务生成的结果输出，文件对应人脸识别任务返回中的结果，以 JSON 格式生成文件。</li></ul>
 * @method void setFileType(string $FileType) 设置<p>人脸识别输出文件类型</p><p>枚举值：</p><ul><li>Output： 任务生成的结果输出，文件对应人脸识别任务返回中的结果，以 JSON 格式生成文件。</li></ul>
 * @method string getUrl() 获取<p>人脸识别输出文件的URL</p>
 * @method void setUrl(string $Url) 设置<p>人脸识别输出文件的URL</p>
 */
class FaceRecognitionOutputFileInfo extends AbstractModel
{
    /**
     * @var string <p>人脸识别输出文件类型</p><p>枚举值：</p><ul><li>Output： 任务生成的结果输出，文件对应人脸识别任务返回中的结果，以 JSON 格式生成文件。</li></ul>
     */
    public $FileType;

    /**
     * @var string <p>人脸识别输出文件的URL</p>
     */
    public $Url;

    /**
     * @param string $FileType <p>人脸识别输出文件类型</p><p>枚举值：</p><ul><li>Output： 任务生成的结果输出，文件对应人脸识别任务返回中的结果，以 JSON 格式生成文件。</li></ul>
     * @param string $Url <p>人脸识别输出文件的URL</p>
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
        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
