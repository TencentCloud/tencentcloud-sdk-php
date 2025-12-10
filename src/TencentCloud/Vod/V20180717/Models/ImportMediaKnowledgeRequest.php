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
 * ImportMediaKnowledge请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。</b>
 * @method string getFileId() 获取媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。
 * @method void setFileId(string $FileId) 设置媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。
 * @method array getImportTasks() 获取需要导入知识库任务类型，可选值有：
- AiAnalysis.DescriptionTask
- SmartSubtitle.AsrFullTextTask
 * @method void setImportTasks(array $ImportTasks) 设置需要导入知识库任务类型，可选值有：
- AiAnalysis.DescriptionTask
- SmartSubtitle.AsrFullTextTask
 */
class ImportMediaKnowledgeRequest extends AbstractModel
{
    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。
     */
    public $FileId;

    /**
     * @var array 需要导入知识库任务类型，可选值有：
- AiAnalysis.DescriptionTask
- SmartSubtitle.AsrFullTextTask
     */
    public $ImportTasks;

    /**
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。</b>
     * @param string $FileId 媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。
     * @param array $ImportTasks 需要导入知识库任务类型，可选值有：
- AiAnalysis.DescriptionTask
- SmartSubtitle.AsrFullTextTask
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("ImportTasks",$param) and $param["ImportTasks"] !== null) {
            $this->ImportTasks = $param["ImportTasks"];
        }
    }
}
