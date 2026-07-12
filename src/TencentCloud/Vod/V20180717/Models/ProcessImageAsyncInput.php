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
 * 图片异步处理任务信息。
 *
 * @method string getFileId() 获取<p>图片处理的FileId。</p>
 * @method void setFileId(string $FileId) 设置<p>图片处理的FileId。</p>
 * @method string getUrl() 获取<p>图片URL。</p>
 * @method void setUrl(string $Url) 设置<p>图片URL。</p>
 * @method ProcessImageAsyncTaskInput getImageTaskInput() 获取<p>图片处理参数。</p>
 * @method void setImageTaskInput(ProcessImageAsyncTaskInput $ImageTaskInput) 设置<p>图片处理参数。</p>
 * @method ProcessImageAsyncOutputConfig getOutputConfig() 获取<p>图片处理任务的输出媒体文件配置。</p>
 * @method void setOutputConfig(ProcessImageAsyncOutputConfig $OutputConfig) 设置<p>图片处理任务的输出媒体文件配置。</p>
 */
class ProcessImageAsyncInput extends AbstractModel
{
    /**
     * @var string <p>图片处理的FileId。</p>
     */
    public $FileId;

    /**
     * @var string <p>图片URL。</p>
     */
    public $Url;

    /**
     * @var ProcessImageAsyncTaskInput <p>图片处理参数。</p>
     */
    public $ImageTaskInput;

    /**
     * @var ProcessImageAsyncOutputConfig <p>图片处理任务的输出媒体文件配置。</p>
     */
    public $OutputConfig;

    /**
     * @param string $FileId <p>图片处理的FileId。</p>
     * @param string $Url <p>图片URL。</p>
     * @param ProcessImageAsyncTaskInput $ImageTaskInput <p>图片处理参数。</p>
     * @param ProcessImageAsyncOutputConfig $OutputConfig <p>图片处理任务的输出媒体文件配置。</p>
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ImageTaskInput",$param) and $param["ImageTaskInput"] !== null) {
            $this->ImageTaskInput = new ProcessImageAsyncTaskInput();
            $this->ImageTaskInput->deserialize($param["ImageTaskInput"]);
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new ProcessImageAsyncOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }
    }
}
