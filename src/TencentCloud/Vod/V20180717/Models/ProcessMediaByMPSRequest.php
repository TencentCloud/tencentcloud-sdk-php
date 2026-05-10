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
 * ProcessMediaByMPS请求参数结构体
 *
 * @method string getFileId() 获取<p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。</p>
 * @method void setFileId(string $FileId) 设置<p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。</p>
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。</b></p>
 * @method string getMPSProcessMediaParams() 获取<p>可选参数，该参数用于透传至媒体处理服务（MPS），以便从云点播侧发起 MPS 视频处理任务。不同类型的视频处理参数详情请参考 <a href="https://cloud.tencent.com/document/product/266/131209">使用MPS 媒体 AI 能力</a>，可通过<a href="https://cloud.tencent.com/document/product/266/122580">CreateMPSTemplate</a> 接口创建自定义模板。</p>
 * @method void setMPSProcessMediaParams(string $MPSProcessMediaParams) 设置<p>可选参数，该参数用于透传至媒体处理服务（MPS），以便从云点播侧发起 MPS 视频处理任务。不同类型的视频处理参数详情请参考 <a href="https://cloud.tencent.com/document/product/266/131209">使用MPS 媒体 AI 能力</a>，可通过<a href="https://cloud.tencent.com/document/product/266/122580">CreateMPSTemplate</a> 接口创建自定义模板。</p>
 * @method MPSAiAnalysisTaskInput getAiAnalysisTask() 获取<p>视频内容分析类型任务参数，MPSProcessMediaParams为空时有效。</p>
 * @method void setAiAnalysisTask(MPSAiAnalysisTaskInput $AiAnalysisTask) 设置<p>视频内容分析类型任务参数，MPSProcessMediaParams为空时有效。</p>
 * @method MPSSmartSubtitlesTaskInput getSmartSubtitlesTask() 获取<p>智能字幕类型任务参数，MPSProcessMediaParams为空时有效。</p>
 * @method void setSmartSubtitlesTask(MPSSmartSubtitlesTaskInput $SmartSubtitlesTask) 设置<p>智能字幕类型任务参数，MPSProcessMediaParams为空时有效。</p>
 * @method MPSSmartEraseTaskInput getSmartEraseTask() 获取<p>智能擦除类型任务参数，MPSProcessMediaParams为空时有效。</p>
 * @method void setSmartEraseTask(MPSSmartEraseTaskInput $SmartEraseTask) 设置<p>智能擦除类型任务参数，MPSProcessMediaParams为空时有效。</p>
 * @method string getExtInfo() 获取<p>保留字段，特殊用途时使用。</p>
 * @method void setExtInfo(string $ExtInfo) 设置<p>保留字段，特殊用途时使用。</p>
 */
class ProcessMediaByMPSRequest extends AbstractModel
{
    /**
     * @var string <p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。</p>
     */
    public $FileId;

    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>可选参数，该参数用于透传至媒体处理服务（MPS），以便从云点播侧发起 MPS 视频处理任务。不同类型的视频处理参数详情请参考 <a href="https://cloud.tencent.com/document/product/266/131209">使用MPS 媒体 AI 能力</a>，可通过<a href="https://cloud.tencent.com/document/product/266/122580">CreateMPSTemplate</a> 接口创建自定义模板。</p>
     */
    public $MPSProcessMediaParams;

    /**
     * @var MPSAiAnalysisTaskInput <p>视频内容分析类型任务参数，MPSProcessMediaParams为空时有效。</p>
     */
    public $AiAnalysisTask;

    /**
     * @var MPSSmartSubtitlesTaskInput <p>智能字幕类型任务参数，MPSProcessMediaParams为空时有效。</p>
     */
    public $SmartSubtitlesTask;

    /**
     * @var MPSSmartEraseTaskInput <p>智能擦除类型任务参数，MPSProcessMediaParams为空时有效。</p>
     */
    public $SmartEraseTask;

    /**
     * @var string <p>保留字段，特殊用途时使用。</p>
     */
    public $ExtInfo;

    /**
     * @param string $FileId <p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。</p>
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。</b></p>
     * @param string $MPSProcessMediaParams <p>可选参数，该参数用于透传至媒体处理服务（MPS），以便从云点播侧发起 MPS 视频处理任务。不同类型的视频处理参数详情请参考 <a href="https://cloud.tencent.com/document/product/266/131209">使用MPS 媒体 AI 能力</a>，可通过<a href="https://cloud.tencent.com/document/product/266/122580">CreateMPSTemplate</a> 接口创建自定义模板。</p>
     * @param MPSAiAnalysisTaskInput $AiAnalysisTask <p>视频内容分析类型任务参数，MPSProcessMediaParams为空时有效。</p>
     * @param MPSSmartSubtitlesTaskInput $SmartSubtitlesTask <p>智能字幕类型任务参数，MPSProcessMediaParams为空时有效。</p>
     * @param MPSSmartEraseTaskInput $SmartEraseTask <p>智能擦除类型任务参数，MPSProcessMediaParams为空时有效。</p>
     * @param string $ExtInfo <p>保留字段，特殊用途时使用。</p>
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("MPSProcessMediaParams",$param) and $param["MPSProcessMediaParams"] !== null) {
            $this->MPSProcessMediaParams = $param["MPSProcessMediaParams"];
        }

        if (array_key_exists("AiAnalysisTask",$param) and $param["AiAnalysisTask"] !== null) {
            $this->AiAnalysisTask = new MPSAiAnalysisTaskInput();
            $this->AiAnalysisTask->deserialize($param["AiAnalysisTask"]);
        }

        if (array_key_exists("SmartSubtitlesTask",$param) and $param["SmartSubtitlesTask"] !== null) {
            $this->SmartSubtitlesTask = new MPSSmartSubtitlesTaskInput();
            $this->SmartSubtitlesTask->deserialize($param["SmartSubtitlesTask"]);
        }

        if (array_key_exists("SmartEraseTask",$param) and $param["SmartEraseTask"] !== null) {
            $this->SmartEraseTask = new MPSSmartEraseTaskInput();
            $this->SmartEraseTask->deserialize($param["SmartEraseTask"]);
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
