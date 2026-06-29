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
 * 知识库媒体分析结果。
 *
 * @method string getTaskType() 获取<p>处理任务类型</p><p>枚举值：</p><ul><li>AiAnalysis.DescriptionTask： 智能摘要任务</li><li>AiAnalysis.VideoComprehensionTask： 视频理解任务</li><li>SmartSubtitle.AsrFullTextTask： 智能语音全文识别任务</li></ul>
 * @method void setTaskType(string $TaskType) 设置<p>处理任务类型</p><p>枚举值：</p><ul><li>AiAnalysis.DescriptionTask： 智能摘要任务</li><li>AiAnalysis.VideoComprehensionTask： 视频理解任务</li><li>SmartSubtitle.AsrFullTextTask： 智能语音全文识别任务</li></ul>
 * @method MPSOutputFileInfo getFile() 获取<p>任务输出文件集合</p>
 * @method void setFile(MPSOutputFileInfo $File) 设置<p>任务输出文件集合</p>
 */
class KnowledgeAnalysisResult extends AbstractModel
{
    /**
     * @var string <p>处理任务类型</p><p>枚举值：</p><ul><li>AiAnalysis.DescriptionTask： 智能摘要任务</li><li>AiAnalysis.VideoComprehensionTask： 视频理解任务</li><li>SmartSubtitle.AsrFullTextTask： 智能语音全文识别任务</li></ul>
     */
    public $TaskType;

    /**
     * @var MPSOutputFileInfo <p>任务输出文件集合</p>
     */
    public $File;

    /**
     * @param string $TaskType <p>处理任务类型</p><p>枚举值：</p><ul><li>AiAnalysis.DescriptionTask： 智能摘要任务</li><li>AiAnalysis.VideoComprehensionTask： 视频理解任务</li><li>SmartSubtitle.AsrFullTextTask： 智能语音全文识别任务</li></ul>
     * @param MPSOutputFileInfo $File <p>任务输出文件集合</p>
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("File",$param) and $param["File"] !== null) {
            $this->File = new MPSOutputFileInfo();
            $this->File->deserialize($param["File"]);
        }
    }
}
