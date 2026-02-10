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
 * 图片异步处理任务的输出。
 *
 * @method ProcessImageAsyncOutputFileInfo getFileInfo() 获取图片异步处理任务的输出文件信息。
 * @method void setFileInfo(ProcessImageAsyncOutputFileInfo $FileInfo) 设置图片异步处理任务的输出文件信息。
 * @method string getOutputText() 获取图片理解结果。
 * @method void setOutputText(string $OutputText) 设置图片理解结果。
 */
class ProcessImageAsyncOutput extends AbstractModel
{
    /**
     * @var ProcessImageAsyncOutputFileInfo 图片异步处理任务的输出文件信息。
     */
    public $FileInfo;

    /**
     * @var string 图片理解结果。
     */
    public $OutputText;

    /**
     * @param ProcessImageAsyncOutputFileInfo $FileInfo 图片异步处理任务的输出文件信息。
     * @param string $OutputText 图片理解结果。
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
        if (array_key_exists("FileInfo",$param) and $param["FileInfo"] !== null) {
            $this->FileInfo = new ProcessImageAsyncOutputFileInfo();
            $this->FileInfo->deserialize($param["FileInfo"]);
        }

        if (array_key_exists("OutputText",$param) and $param["OutputText"] !== null) {
            $this->OutputText = $param["OutputText"];
        }
    }
}
