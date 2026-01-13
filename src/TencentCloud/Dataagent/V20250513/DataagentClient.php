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

namespace TencentCloud\Dataagent\V20250513;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dataagent\V20250513\Models as Models;

/**
 * @method Models\AddChunkResponse AddChunk(Models\AddChunkRequest $req) 文档切片新增
 * @method Models\AddSceneResponse AddScene(Models\AddSceneRequest $req) 新增场景
 * @method Models\ChatAIResponse ChatAI(Models\ChatAIRequest $req) 提供DataAgent 产品服务API
 * @method Models\CreateDataAgentSessionResponse CreateDataAgentSession(Models\CreateDataAgentSessionRequest $req) 生成DataAgent 会话ID
 * @method Models\DeleteChunkResponse DeleteChunk(Models\DeleteChunkRequest $req) 文档切片删除
 * @method Models\DeleteDataAgentSessionResponse DeleteDataAgentSession(Models\DeleteDataAgentSessionRequest $req) 删除会话
 * @method Models\DeleteSceneResponse DeleteScene(Models\DeleteSceneRequest $req) 删除场景
 * @method Models\GetJobsByKnowledgeBaseIdResponse GetJobsByKnowledgeBaseId(Models\GetJobsByKnowledgeBaseIdRequest $req) 根据知识库id查询jobs 列表
 * @method Models\GetKnowledgeBaseFileListResponse GetKnowledgeBaseFileList(Models\GetKnowledgeBaseFileListRequest $req) 获取知识库文件信息列表
 * @method Models\GetKnowledgeBaseListResponse GetKnowledgeBaseList(Models\GetKnowledgeBaseListRequest $req) 获取知识库列表
 * @method Models\GetSessionDetailsResponse GetSessionDetails(Models\GetSessionDetailsRequest $req) 获取用户会话记录详情列表
 * @method Models\GetUploadJobDetailsResponse GetUploadJobDetails(Models\GetUploadJobDetailsRequest $req) 查询上传任务
 * @method Models\ModifyChunkResponse ModifyChunk(Models\ModifyChunkRequest $req) 编辑修改分片
 * @method Models\ModifyKnowledgeBaseResponse ModifyKnowledgeBase(Models\ModifyKnowledgeBaseRequest $req) 操作知识库
 * @method Models\ModifyUserAuthorityResponse ModifyUserAuthority(Models\ModifyUserAuthorityRequest $req) 修改对象权限
 * @method Models\QueryChunkListResponse QueryChunkList(Models\QueryChunkListRequest $req) 文档切片查询
 * @method Models\QuerySceneListResponse QuerySceneList(Models\QuerySceneListRequest $req) 查询场景列表
 * @method Models\QueryUserAuthorityResponse QueryUserAuthority(Models\QueryUserAuthorityRequest $req) 查询对象权限
 * @method Models\StopChatAIResponse StopChatAI(Models\StopChatAIRequest $req) 中断DataAgent的回答输出
 * @method Models\UpdateSceneResponse UpdateScene(Models\UpdateSceneRequest $req) 更新场景
 * @method Models\UploadAndCommitFileResponse UploadAndCommitFile(Models\UploadAndCommitFileRequest $req) 上传提交文件
 */

class DataagentClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dataagent.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dataagent";

    /**
     * @var string
     */
    protected $version = "2025-05-13";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("dataagent")."\\"."V20250513\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
