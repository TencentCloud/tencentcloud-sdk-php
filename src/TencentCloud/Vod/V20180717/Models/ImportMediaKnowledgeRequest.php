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
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。</b></p>
 * @method string getFileId() 获取<p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。</p>
 * @method void setFileId(string $FileId) 设置<p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。</p>
 * @method integer getDefinition() 获取<p>大模型理解模板的唯一标识</p>
 * @method void setDefinition(integer $Definition) 设置<p>大模型理解模板的唯一标识</p>
 * @method array getKnowledgeBaseIds() 获取<p>知识库ID列表，留空时将使用默认知识库</p>
 * @method void setKnowledgeBaseIds(array $KnowledgeBaseIds) 设置<p>知识库ID列表，留空时将使用默认知识库</p>
 * @method array getImportTasks() 获取<p>需要导入知识库任务类型，可选值有：</p><ul><li>AiAnalysis.DescriptionTask</li><li>SmartSubtitle.AsrFullTextTask</li></ul>
 * @method void setImportTasks(array $ImportTasks) 设置<p>需要导入知识库任务类型，可选值有：</p><ul><li>AiAnalysis.DescriptionTask</li><li>SmartSubtitle.AsrFullTextTask</li></ul>
 */
class ImportMediaKnowledgeRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。</p>
     */
    public $FileId;

    /**
     * @var integer <p>大模型理解模板的唯一标识</p>
     */
    public $Definition;

    /**
     * @var array <p>知识库ID列表，留空时将使用默认知识库</p>
     */
    public $KnowledgeBaseIds;

    /**
     * @var array <p>需要导入知识库任务类型，可选值有：</p><ul><li>AiAnalysis.DescriptionTask</li><li>SmartSubtitle.AsrFullTextTask</li></ul>
     * @deprecated
     */
    public $ImportTasks;

    /**
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。</b></p>
     * @param string $FileId <p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。</p>
     * @param integer $Definition <p>大模型理解模板的唯一标识</p>
     * @param array $KnowledgeBaseIds <p>知识库ID列表，留空时将使用默认知识库</p>
     * @param array $ImportTasks <p>需要导入知识库任务类型，可选值有：</p><ul><li>AiAnalysis.DescriptionTask</li><li>SmartSubtitle.AsrFullTextTask</li></ul>
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

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("KnowledgeBaseIds",$param) and $param["KnowledgeBaseIds"] !== null) {
            $this->KnowledgeBaseIds = $param["KnowledgeBaseIds"];
        }

        if (array_key_exists("ImportTasks",$param) and $param["ImportTasks"] !== null) {
            $this->ImportTasks = $param["ImportTasks"];
        }
    }
}
