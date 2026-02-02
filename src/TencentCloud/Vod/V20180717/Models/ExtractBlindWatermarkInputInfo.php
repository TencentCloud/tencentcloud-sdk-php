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
 * 提取盲水印输入信息
 *
 * @method string getType() 获取提取数字水印输入类型，可选值：<li>FILEID：文件媒资ID；</li><li>URL：文件url；</li>
 * @method void setType(string $Type) 设置提取数字水印输入类型，可选值：<li>FILEID：文件媒资ID；</li><li>URL：文件url；</li>
 * @method string getFileId() 获取需要提取的文件媒资ID
 * @method void setFileId(string $FileId) 设置需要提取的文件媒资ID
 * @method string getUrl() 获取需要提取的视频文件url
 * @method void setUrl(string $Url) 设置需要提取的视频文件url
 */
class ExtractBlindWatermarkInputInfo extends AbstractModel
{
    /**
     * @var string 提取数字水印输入类型，可选值：<li>FILEID：文件媒资ID；</li><li>URL：文件url；</li>
     */
    public $Type;

    /**
     * @var string 需要提取的文件媒资ID
     */
    public $FileId;

    /**
     * @var string 需要提取的视频文件url
     */
    public $Url;

    /**
     * @param string $Type 提取数字水印输入类型，可选值：<li>FILEID：文件媒资ID；</li><li>URL：文件url；</li>
     * @param string $FileId 需要提取的文件媒资ID
     * @param string $Url 需要提取的视频文件url
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
