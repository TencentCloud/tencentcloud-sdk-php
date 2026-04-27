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
 * AIGC 视频转绘任务的输出信息。
 *
 * @method AigcVideoRedrawOutputFileInfo getFileInfo() 获取<p>AIGC 视频转绘任务的输出文件信息。</p>
 * @method void setFileInfo(AigcVideoRedrawOutputFileInfo $FileInfo) 设置<p>AIGC 视频转绘任务的输出文件信息。</p>
 */
class AigcVideoRedrawTaskOutput extends AbstractModel
{
    /**
     * @var AigcVideoRedrawOutputFileInfo <p>AIGC 视频转绘任务的输出文件信息。</p>
     */
    public $FileInfo;

    /**
     * @param AigcVideoRedrawOutputFileInfo $FileInfo <p>AIGC 视频转绘任务的输出文件信息。</p>
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
            $this->FileInfo = new AigcVideoRedrawOutputFileInfo();
            $this->FileInfo->deserialize($param["FileInfo"]);
        }
    }
}
