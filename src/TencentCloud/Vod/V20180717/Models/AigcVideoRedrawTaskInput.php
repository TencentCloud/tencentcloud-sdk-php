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
 * AIGC 视频转绘任务的输入。
 *
 * @method AigcVideoRedrawTaskInputFileInfo getFileInfo() 获取<p>AIGC 视频转绘任务输入文件信息。</p>
 * @method void setFileInfo(AigcVideoRedrawTaskInputFileInfo $FileInfo) 设置<p>AIGC 视频转绘任务输入文件信息。</p>
 * @method AigcVideoRedrawOutputConfig getOutputConfig() 获取<p>AIGC 视频转绘输出配置。</p>
 * @method void setOutputConfig(AigcVideoRedrawOutputConfig $OutputConfig) 设置<p>AIGC 视频转绘输出配置。</p>
 */
class AigcVideoRedrawTaskInput extends AbstractModel
{
    /**
     * @var AigcVideoRedrawTaskInputFileInfo <p>AIGC 视频转绘任务输入文件信息。</p>
     */
    public $FileInfo;

    /**
     * @var AigcVideoRedrawOutputConfig <p>AIGC 视频转绘输出配置。</p>
     */
    public $OutputConfig;

    /**
     * @param AigcVideoRedrawTaskInputFileInfo $FileInfo <p>AIGC 视频转绘任务输入文件信息。</p>
     * @param AigcVideoRedrawOutputConfig $OutputConfig <p>AIGC 视频转绘输出配置。</p>
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
            $this->FileInfo = new AigcVideoRedrawTaskInputFileInfo();
            $this->FileInfo->deserialize($param["FileInfo"]);
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new AigcVideoRedrawOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }
    }
}
