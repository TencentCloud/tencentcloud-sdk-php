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

namespace TencentCloud\Lke\V20231130;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Lke\V20231130\Models as Models;

/**
 * @method Models\CheckAttributeLabelExistResponse CheckAttributeLabelExist(Models\CheckAttributeLabelExistRequest $req) 检查属性下的标签名是否存在
 * @method Models\CheckAttributeLabelReferResponse CheckAttributeLabelRefer(Models\CheckAttributeLabelReferRequest $req) 检查属性标签引用
 * @method Models\CreateAppResponse CreateApp(Models\CreateAppRequest $req) 创建知识引擎应用。
 * @method Models\CreateAttributeLabelResponse CreateAttributeLabel(Models\CreateAttributeLabelRequest $req) 创建标签
 * @method Models\CreateDocCateResponse CreateDocCate(Models\CreateDocCateRequest $req) 创建Doc分类
 * @method Models\CreateQAResponse CreateQA(Models\CreateQARequest $req) 录入问答
 * @method Models\CreateQACateResponse CreateQACate(Models\CreateQACateRequest $req) 创建QA分类
 * @method Models\CreateRejectedQuestionResponse CreateRejectedQuestion(Models\CreateRejectedQuestionRequest $req) 创建拒答问题
 * @method Models\CreateReleaseResponse CreateRelease(Models\CreateReleaseRequest $req) 创建发布
 * @method Models\CreateSharedKnowledgeResponse CreateSharedKnowledge(Models\CreateSharedKnowledgeRequest $req) 创建共享知识库。
 * @method Models\CreateVarResponse CreateVar(Models\CreateVarRequest $req) 创建变量
 * @method Models\CreateWorkflowRunResponse CreateWorkflowRun(Models\CreateWorkflowRunRequest $req) 本接口用来创建工作流的异步运行实例，创建成功后工作流会在后台异步运行，接口返回工作流运行实例ID（WorkflowRunId）等信息。后面可通过调用DescribeWorkflowRun接口查工作流运行的详情。
注意：工作流的异步运行是基于应用的，需要先把对应的应用配置成“单工作流模式”，并且打开“异步调用”的开关，才能创建成功。
 * @method Models\DeleteAgentResponse DeleteAgent(Models\DeleteAgentRequest $req) 删除Agent
 * @method Models\DeleteAppResponse DeleteApp(Models\DeleteAppRequest $req) 删除应用
 * @method Models\DeleteAttributeLabelResponse DeleteAttributeLabel(Models\DeleteAttributeLabelRequest $req) 删除属性标签
 * @method Models\DeleteDocResponse DeleteDoc(Models\DeleteDocRequest $req) 删除文档
 * @method Models\DeleteDocCateResponse DeleteDocCate(Models\DeleteDocCateRequest $req) Doc分类删除
 * @method Models\DeleteQAResponse DeleteQA(Models\DeleteQARequest $req) 删除问答
 * @method Models\DeleteQACateResponse DeleteQACate(Models\DeleteQACateRequest $req) 分类删除
 * @method Models\DeleteRejectedQuestionResponse DeleteRejectedQuestion(Models\DeleteRejectedQuestionRequest $req) 删除拒答问题
 * @method Models\DeleteSharedKnowledgeResponse DeleteSharedKnowledge(Models\DeleteSharedKnowledgeRequest $req) 删除共享知识库。
 * @method Models\DeleteVarResponse DeleteVar(Models\DeleteVarRequest $req) 删除变量
 * @method Models\DescribeAppResponse DescribeApp(Models\DescribeAppRequest $req) 获取企业下应用详情
 * @method Models\DescribeAppAgentListResponse DescribeAppAgentList(Models\DescribeAppAgentListRequest $req) 查询指定应用下的Agent列表
 * @method Models\DescribeAttributeLabelResponse DescribeAttributeLabel(Models\DescribeAttributeLabelRequest $req) 查询属性标签详情
 * @method Models\DescribeCallStatsGraphResponse DescribeCallStatsGraph(Models\DescribeCallStatsGraphRequest $req) 接口调用折线图
 * @method Models\DescribeConcurrencyUsageResponse DescribeConcurrencyUsage(Models\DescribeConcurrencyUsageRequest $req) 并发调用响应
 * @method Models\DescribeConcurrencyUsageGraphResponse DescribeConcurrencyUsageGraph(Models\DescribeConcurrencyUsageGraphRequest $req) 并发调用折线图
 * @method Models\DescribeDocResponse DescribeDoc(Models\DescribeDocRequest $req) 文档详情
 * @method Models\DescribeKnowledgeUsageResponse DescribeKnowledgeUsage(Models\DescribeKnowledgeUsageRequest $req) 查询知识库用量
 * @method Models\DescribeKnowledgeUsagePieGraphResponse DescribeKnowledgeUsagePieGraph(Models\DescribeKnowledgeUsagePieGraphRequest $req) 查询企业知识库容量饼图
 * @method Models\DescribeNodeRunResponse DescribeNodeRun(Models\DescribeNodeRunRequest $req) 通过DescribeWorkflowRun接口获取了工作流异步运行的整体内容，其中包含了基本的节点信息，再通过本接口可查看节点的运行详情（包括输入、输出、日志等）。
 * @method Models\DescribeQAResponse DescribeQA(Models\DescribeQARequest $req) 问答详情
 * @method Models\DescribeReferResponse DescribeRefer(Models\DescribeReferRequest $req) 获取来源详情列表
 * @method Models\DescribeReleaseResponse DescribeRelease(Models\DescribeReleaseRequest $req) 发布详情
 * @method Models\DescribeReleaseInfoResponse DescribeReleaseInfo(Models\DescribeReleaseInfoRequest $req) 拉取发布按钮状态、最后发布时间
 * @method Models\DescribeRobotBizIDByAppKeyResponse DescribeRobotBizIDByAppKey(Models\DescribeRobotBizIDByAppKeyRequest $req) 通过appKey获取应用业务ID
 * @method Models\DescribeSearchStatsGraphResponse DescribeSearchStatsGraph(Models\DescribeSearchStatsGraphRequest $req) 查询搜索服务调用折线图
 * @method Models\DescribeSegmentsResponse DescribeSegments(Models\DescribeSegmentsRequest $req) 获取片段详情
 * @method Models\DescribeSharedKnowledgeResponse DescribeSharedKnowledge(Models\DescribeSharedKnowledgeRequest $req) 查询共享知识库。
 * @method Models\DescribeStorageCredentialResponse DescribeStorageCredential(Models\DescribeStorageCredentialRequest $req) 获取文件上传临时密钥
 * @method Models\DescribeTokenUsageResponse DescribeTokenUsage(Models\DescribeTokenUsageRequest $req) 接口调用token详情
 * @method Models\DescribeTokenUsageGraphResponse DescribeTokenUsageGraph(Models\DescribeTokenUsageGraphRequest $req) 接口调用token折线图
 * @method Models\DescribeUnsatisfiedReplyContextResponse DescribeUnsatisfiedReplyContext(Models\DescribeUnsatisfiedReplyContextRequest $req) 获取不满意回复上下文
 * @method Models\DescribeWorkflowRunResponse DescribeWorkflowRun(Models\DescribeWorkflowRunRequest $req) 创建了工作流的异步运行实例后，通过本接口可以查询整体的运行详情。
 * @method Models\ExportAttributeLabelResponse ExportAttributeLabel(Models\ExportAttributeLabelRequest $req) 导出标签
 * @method Models\ExportQAListResponse ExportQAList(Models\ExportQAListRequest $req) 导出QA列表
 * @method Models\ExportUnsatisfiedReplyResponse ExportUnsatisfiedReply(Models\ExportUnsatisfiedReplyRequest $req) 导出不满意回复
 * @method Models\GenerateQAResponse GenerateQA(Models\GenerateQARequest $req) 文档生成问答
 * @method Models\GetAnswerTypeDataCountResponse GetAnswerTypeDataCount(Models\GetAnswerTypeDataCountRequest $req) 回答类型数据统计
 * @method Models\GetAppKnowledgeCountResponse GetAppKnowledgeCount(Models\GetAppKnowledgeCountRequest $req) 获取模型列表
 * @method Models\GetAppSecretResponse GetAppSecret(Models\GetAppSecretRequest $req) 获取应用密钥
 * @method Models\GetDocPreviewResponse GetDocPreview(Models\GetDocPreviewRequest $req) 获取文档预览信息
 * @method Models\GetLikeDataCountResponse GetLikeDataCount(Models\GetLikeDataCountRequest $req) 点赞点踩数据统计
 * @method Models\GetMsgRecordResponse GetMsgRecord(Models\GetMsgRecordRequest $req) 获取聊天历史
根据会话session id获取聊天历史（仅保留180天内的历史对话数据）
 * @method Models\GetTaskStatusResponse GetTaskStatus(Models\GetTaskStatusRequest $req) 获取任务状态
 * @method Models\GetVarListResponse GetVarList(Models\GetVarListRequest $req) 查询自定义变量列表
 * @method Models\GetWsTokenResponse GetWsToken(Models\GetWsTokenRequest $req) 获取ws token
 * @method Models\GroupDocResponse GroupDoc(Models\GroupDocRequest $req) Doc分组
 * @method Models\GroupQAResponse GroupQA(Models\GroupQARequest $req) QA分组
 * @method Models\IgnoreUnsatisfiedReplyResponse IgnoreUnsatisfiedReply(Models\IgnoreUnsatisfiedReplyRequest $req) 忽略不满意回复
 * @method Models\IsTransferIntentResponse IsTransferIntent(Models\IsTransferIntentRequest $req) 是否意图转人工
 * @method Models\ListAppResponse ListApp(Models\ListAppRequest $req) 获取企业下应用列表
 * @method Models\ListAppKnowledgeDetailResponse ListAppKnowledgeDetail(Models\ListAppKnowledgeDetailRequest $req) 列表查询知识库容量详情
 * @method Models\ListAttributeLabelResponse ListAttributeLabel(Models\ListAttributeLabelRequest $req) 查询属性标签列表
 * @method Models\ListChannelResponse ListChannel(Models\ListChannelRequest $req) 获取发布渠道列表
 * @method Models\ListDocResponse ListDoc(Models\ListDocRequest $req) 文档列表
 * @method Models\ListDocCateResponse ListDocCate(Models\ListDocCateRequest $req) 获取Doc分类
 * @method Models\ListModelResponse ListModel(Models\ListModelRequest $req) 获取模型列表
 * @method Models\ListQAResponse ListQA(Models\ListQARequest $req) 问答列表
 * @method Models\ListQACateResponse ListQACate(Models\ListQACateRequest $req) 获取QA分类
 * @method Models\ListReferShareKnowledgeResponse ListReferShareKnowledge(Models\ListReferShareKnowledgeRequest $req) 查看应用引用了哪些共享知识库，可以看到共享知识库的基础信息，包括名称，id等
 * @method Models\ListRejectedQuestionResponse ListRejectedQuestion(Models\ListRejectedQuestionRequest $req) 获取拒答问题
 * @method Models\ListRejectedQuestionPreviewResponse ListRejectedQuestionPreview(Models\ListRejectedQuestionPreviewRequest $req) 发布拒答问题预览
 * @method Models\ListReleaseResponse ListRelease(Models\ListReleaseRequest $req) 发布列表
 * @method Models\ListReleaseConfigPreviewResponse ListReleaseConfigPreview(Models\ListReleaseConfigPreviewRequest $req) 发布配置项预览
 * @method Models\ListReleaseDocPreviewResponse ListReleaseDocPreview(Models\ListReleaseDocPreviewRequest $req) 发布文档预览
 * @method Models\ListReleaseQAPreviewResponse ListReleaseQAPreview(Models\ListReleaseQAPreviewRequest $req) 文档列表
 * @method Models\ListSelectDocResponse ListSelectDoc(Models\ListSelectDocRequest $req) 获取文档下拉列表。
 * @method Models\ListSharedKnowledgeResponse ListSharedKnowledge(Models\ListSharedKnowledgeRequest $req) 列举共享知识库。
 * @method Models\ListUnsatisfiedReplyResponse ListUnsatisfiedReply(Models\ListUnsatisfiedReplyRequest $req) 查询不满意回复列表
 * @method Models\ListUsageCallDetailResponse ListUsageCallDetail(Models\ListUsageCallDetailRequest $req) 列表查询单次调用明细
 * @method Models\ListWorkflowRunsResponse ListWorkflowRuns(Models\ListWorkflowRunsRequest $req) 此接口可查询已创建的所有工作流异步运行实例。
 * @method Models\ModifyAppResponse ModifyApp(Models\ModifyAppRequest $req) 修改应用请求结构体
 * @method Models\ModifyAttributeLabelResponse ModifyAttributeLabel(Models\ModifyAttributeLabelRequest $req) 编辑属性标签
 * @method Models\ModifyDocResponse ModifyDoc(Models\ModifyDocRequest $req) 修改文档
 * @method Models\ModifyDocAttrRangeResponse ModifyDocAttrRange(Models\ModifyDocAttrRangeRequest $req) 批量修改文档适用范围
 * @method Models\ModifyDocCateResponse ModifyDocCate(Models\ModifyDocCateRequest $req) 修改Doc分类
 * @method Models\ModifyQAResponse ModifyQA(Models\ModifyQARequest $req) 更新问答
 * @method Models\ModifyQAAttrRangeResponse ModifyQAAttrRange(Models\ModifyQAAttrRangeRequest $req) 批量修改问答适用范围
 * @method Models\ModifyQACateResponse ModifyQACate(Models\ModifyQACateRequest $req) 更新QA分类
 * @method Models\ModifyRejectedQuestionResponse ModifyRejectedQuestion(Models\ModifyRejectedQuestionRequest $req) 修改拒答问题
 * @method Models\RateMsgRecordResponse RateMsgRecord(Models\RateMsgRecordRequest $req) 点赞点踩消息
 * @method Models\ReferShareKnowledgeResponse ReferShareKnowledge(Models\ReferShareKnowledgeRequest $req) 应用引用共享知识库，可以引用一个或多个，每次都是全量覆盖
 * @method Models\RenameDocResponse RenameDoc(Models\RenameDocRequest $req) 文档重命名
 * @method Models\RetryDocAuditResponse RetryDocAudit(Models\RetryDocAuditRequest $req) 文档解析重试
 * @method Models\RetryDocParseResponse RetryDocParse(Models\RetryDocParseRequest $req) 文档解析重试
 * @method Models\RetryReleaseResponse RetryRelease(Models\RetryReleaseRequest $req) 发布暂停后重试
 * @method Models\SaveDocResponse SaveDoc(Models\SaveDocRequest $req) 知识库文档问答保存。
将文件存储到应用的知识库内需要三步：
1.获取临时密钥，参考[接口文档](https://cloud.tencent.com/document/product/1759/105050)。获取临时密钥不同参数组合权限不一样，可参考 [智能体开发平台操作 cos 指南](https://cloud.tencent.com/document/product/1759/116238)
2.调用腾讯云提供的 cos 存储接口，将文件存储到智能体开发平台 cos 中：具体可参考[ COS SDK 概览](https://cloud.tencent.com/document/product/436/6474), 注意使用的是临时密钥的方式操作 COS 
3.调用本接口，将文件的基础信息存储到智能体开发平台中。
以上步骤可参考[文档](https://cloud.tencent.com/document/product/1759/108903)，文档最后有[代码demo](https://cloud.tencent.com/document/product/1759/108903#demo)，可作为参考。
 * @method Models\StopDocParseResponse StopDocParse(Models\StopDocParseRequest $req) 终止文档解析
 * @method Models\StopWorkflowRunResponse StopWorkflowRun(Models\StopWorkflowRunRequest $req) 此接口用来停止正在进行的工作流异步运行实例。
 * @method Models\UpdateSharedKnowledgeResponse UpdateSharedKnowledge(Models\UpdateSharedKnowledgeRequest $req) 更新共享知识库。
 * @method Models\UpdateVarResponse UpdateVar(Models\UpdateVarRequest $req) 更新变量
 * @method Models\UploadAttributeLabelResponse UploadAttributeLabel(Models\UploadAttributeLabelRequest $req) 上传导入属性标签
 * @method Models\VerifyQAResponse VerifyQA(Models\VerifyQARequest $req) 校验问答
知识库相关背景知识介绍
“知识库检索范围”文档：https://cloud.tencent.com/document/product/1759/112704
“标签”文档：https://cloud.tencent.com/document/product/1759/112956
 */

class LkeClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "lke.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "lke";

    /**
     * @var string
     */
    protected $version = "2023-11-30";

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
        $respClass = "TencentCloud"."\\".ucfirst("lke")."\\"."V20231130\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
