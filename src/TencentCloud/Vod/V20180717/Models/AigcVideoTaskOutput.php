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
 * AIGC 生视频任务的输出信息。
 *
 * @method array getFileInfos() 获取<p>AIGC 生视频任务的输出文件信息。</p>
 * @method void setFileInfos(array $FileInfos) 设置<p>AIGC 生视频任务的输出文件信息。</p>
 * @method array getProcedureTaskIds() 获取<p>任务类型为 Procedure 的任务 ID。若发起<a href="https://cloud.tencent.com/document/product/266/126239">创建 AIGC 生视频任务</a>时指定了任务流模板(Procedure)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。</p>
 * @method void setProcedureTaskIds(array $ProcedureTaskIds) 设置<p>任务类型为 Procedure 的任务 ID。若发起<a href="https://cloud.tencent.com/document/product/266/126239">创建 AIGC 生视频任务</a>时指定了任务流模板(Procedure)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。</p>
 * @method AigcVideoTaskUsage getUsage() 获取<p>AIGC 生视频任务的用量信息。</p>
 * @method void setUsage(AigcVideoTaskUsage $Usage) 设置<p>AIGC 生视频任务的用量信息。</p>
 */
class AigcVideoTaskOutput extends AbstractModel
{
    /**
     * @var array <p>AIGC 生视频任务的输出文件信息。</p>
     */
    public $FileInfos;

    /**
     * @var array <p>任务类型为 Procedure 的任务 ID。若发起<a href="https://cloud.tencent.com/document/product/266/126239">创建 AIGC 生视频任务</a>时指定了任务流模板(Procedure)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。</p>
     */
    public $ProcedureTaskIds;

    /**
     * @var AigcVideoTaskUsage <p>AIGC 生视频任务的用量信息。</p>
     */
    public $Usage;

    /**
     * @param array $FileInfos <p>AIGC 生视频任务的输出文件信息。</p>
     * @param array $ProcedureTaskIds <p>任务类型为 Procedure 的任务 ID。若发起<a href="https://cloud.tencent.com/document/product/266/126239">创建 AIGC 生视频任务</a>时指定了任务流模板(Procedure)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。</p>
     * @param AigcVideoTaskUsage $Usage <p>AIGC 生视频任务的用量信息。</p>
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
        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new AigcVideoTaskOutputFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("ProcedureTaskIds",$param) and $param["ProcedureTaskIds"] !== null) {
            $this->ProcedureTaskIds = $param["ProcedureTaskIds"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new AigcVideoTaskUsage();
            $this->Usage->deserialize($param["Usage"]);
        }
    }
}
