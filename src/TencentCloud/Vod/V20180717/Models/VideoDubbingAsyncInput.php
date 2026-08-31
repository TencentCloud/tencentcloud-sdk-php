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
 * 视频配音任务输入。
 *
 * @method string getInputUrl() 获取<p>输入视频Url</p>
 * @method void setInputUrl(string $InputUrl) 设置<p>输入视频Url</p>
 * @method string getInputFileId() 获取<p>输入视频FileId</p>
 * @method void setInputFileId(string $InputFileId) 设置<p>输入视频FileId</p>
 * @method string getSrcLanguage() 获取<p>视频源语言，默认zh</p>
 * @method void setSrcLanguage(string $SrcLanguage) 设置<p>视频源语言，默认zh</p>
 * @method string getDstLanguage() 获取<p>视频目标语言，默认en</p>
 * @method void setDstLanguage(string $DstLanguage) 设置<p>视频目标语言，默认en</p>
 * @method string getModel() 获取<p>配音模型</p>
 * @method void setModel(string $Model) 设置<p>配音模型</p>
 */
class VideoDubbingAsyncInput extends AbstractModel
{
    /**
     * @var string <p>输入视频Url</p>
     */
    public $InputUrl;

    /**
     * @var string <p>输入视频FileId</p>
     */
    public $InputFileId;

    /**
     * @var string <p>视频源语言，默认zh</p>
     */
    public $SrcLanguage;

    /**
     * @var string <p>视频目标语言，默认en</p>
     */
    public $DstLanguage;

    /**
     * @var string <p>配音模型</p>
     */
    public $Model;

    /**
     * @param string $InputUrl <p>输入视频Url</p>
     * @param string $InputFileId <p>输入视频FileId</p>
     * @param string $SrcLanguage <p>视频源语言，默认zh</p>
     * @param string $DstLanguage <p>视频目标语言，默认en</p>
     * @param string $Model <p>配音模型</p>
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
        if (array_key_exists("InputUrl",$param) and $param["InputUrl"] !== null) {
            $this->InputUrl = $param["InputUrl"];
        }

        if (array_key_exists("InputFileId",$param) and $param["InputFileId"] !== null) {
            $this->InputFileId = $param["InputFileId"];
        }

        if (array_key_exists("SrcLanguage",$param) and $param["SrcLanguage"] !== null) {
            $this->SrcLanguage = $param["SrcLanguage"];
        }

        if (array_key_exists("DstLanguage",$param) and $param["DstLanguage"] !== null) {
            $this->DstLanguage = $param["DstLanguage"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }
    }
}
