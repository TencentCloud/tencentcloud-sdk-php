<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method Models\ConvertDocumentResponse ConvertDocument(Models\ConvertDocumentRequest $req) 产品规划

接口支持图片和PDF转可编辑word格式文件，将文件中的图片、文本、表格等元素识别，并根据位置进行还原。
 * @method Models\CreateAppResponse CreateApp(Models\CreateAppRequest $req) 创建知识引擎应用。
 * @method Models\CreateAttributeLabelResponse CreateAttributeLabel(Models\CreateAttributeLabelRequest $req) 创建标签
 * @method Models\CreateCorpResponse CreateCorp(Models\CreateCorpRequest $req) 创建企业
 * @method Models\CreateDocCateResponse CreateDocCate(Models\CreateDocCateRequest $req) 创建Doc分类
 * @method Models\CreateQAResponse CreateQA(Models\CreateQARequest $req) 录入问答
 * @method Models\CreateQACateResponse CreateQACate(Models\CreateQACateRequest $req) 创建QA分类
 * @method Models\CreateReconstructDocumentFlowResponse CreateReconstructDocumentFlow(Models\CreateReconstructDocumentFlowRequest $req) 本接口为异步接口的发起请求接口，用于发起文档解析任务。
文档解析支持将图片或PDF文件转换成Markdown格式文件，可解析包括表格、公式、图片、标题、段落、页眉、页脚等内容元素，并将内容智能转换成阅读顺序。

体验期间单账号限制qps仅为1，若有正式接入需要请与产研团队沟通开放。
 * @method Models\CreateRejectedQuestionResponse CreateRejectedQuestion(Models\CreateRejectedQuestionRequest $req) 创建拒答问题
 * @method Models\CreateReleaseResponse CreateRelease(Models\CreateReleaseRequest $req) 创建发布
 * @method Models\CreateVarResponse CreateVar(Models\CreateVarRequest $req) 创建变量
 * @method Models\DeleteAppResponse DeleteApp(Models\DeleteAppRequest $req) 删除应用
 * @method Models\DeleteAttributeLabelResponse DeleteAttributeLabel(Models\DeleteAttributeLabelRequest $req) 删除属性标签
 * @method Models\DeleteDocResponse DeleteDoc(Models\DeleteDocRequest $req) 删除文档
 * @method Models\DeleteDocCateResponse DeleteDocCate(Models\DeleteDocCateRequest $req) Doc分类删除
 * @method Models\DeleteQAResponse DeleteQA(Models\DeleteQARequest $req) 删除问答
 * @method Models\DeleteQACateResponse DeleteQACate(Models\DeleteQACateRequest $req) 分类删除
 * @method Models\DeleteRejectedQuestionResponse DeleteRejectedQuestion(Models\DeleteRejectedQuestionRequest $req) 删除拒答问题
 * @method Models\DescribeAppResponse DescribeApp(Models\DescribeAppRequest $req) 获取企业下应用详情
 * @method Models\DescribeAttributeLabelResponse DescribeAttributeLabel(Models\DescribeAttributeLabelRequest $req) 查询属性标签详情
 * @method Models\DescribeCallStatsGraphResponse DescribeCallStatsGraph(Models\DescribeCallStatsGraphRequest $req) 接口调用折线图
 * @method Models\DescribeConcurrencyUsageResponse DescribeConcurrencyUsage(Models\DescribeConcurrencyUsageRequest $req) 并发调用响应
 * @method Models\DescribeConcurrencyUsageGraphResponse DescribeConcurrencyUsageGraph(Models\DescribeConcurrencyUsageGraphRequest $req) 并发调用折线图
 * @method Models\DescribeCorpResponse DescribeCorp(Models\DescribeCorpRequest $req) 企业详情
 * @method Models\DescribeDocResponse DescribeDoc(Models\DescribeDocRequest $req) 文档详情
 * @method Models\DescribeKnowledgeUsageResponse DescribeKnowledgeUsage(Models\DescribeKnowledgeUsageRequest $req) 查询知识库用量
 * @method Models\DescribeKnowledgeUsagePieGraphResponse DescribeKnowledgeUsagePieGraph(Models\DescribeKnowledgeUsagePieGraphRequest $req) 查询企业知识库容量饼图
 * @method Models\DescribeQAResponse DescribeQA(Models\DescribeQARequest $req) 问答详情
 * @method Models\DescribeReferResponse DescribeRefer(Models\DescribeReferRequest $req) 获取来源详情列表
 * @method Models\DescribeReleaseResponse DescribeRelease(Models\DescribeReleaseRequest $req) 发布详情
 * @method Models\DescribeReleaseInfoResponse DescribeReleaseInfo(Models\DescribeReleaseInfoRequest $req) 拉取发布按钮状态、最后发布时间
 * @method Models\DescribeRobotBizIDByAppKeyResponse DescribeRobotBizIDByAppKey(Models\DescribeRobotBizIDByAppKeyRequest $req) 通过appKey获取应用业务ID
 * @method Models\DescribeSearchStatsGraphResponse DescribeSearchStatsGraph(Models\DescribeSearchStatsGraphRequest $req) 查询搜索服务调用折线图
 * @method Models\DescribeSegmentsResponse DescribeSegments(Models\DescribeSegmentsRequest $req) 获取片段详情
 * @method Models\DescribeStorageCredentialResponse DescribeStorageCredential(Models\DescribeStorageCredentialRequest $req) 获取文件上传临时密钥
 * @method Models\DescribeTokenUsageResponse DescribeTokenUsage(Models\DescribeTokenUsageRequest $req) 接口调用token详情
 * @method Models\DescribeTokenUsageGraphResponse DescribeTokenUsageGraph(Models\DescribeTokenUsageGraphRequest $req) 接口调用token折线图
 * @method Models\DescribeUnsatisfiedReplyContextResponse DescribeUnsatisfiedReplyContext(Models\DescribeUnsatisfiedReplyContextRequest $req) 获取不满意回复上下文
 * @method Models\ExportAttributeLabelResponse ExportAttributeLabel(Models\ExportAttributeLabelRequest $req) 导出属性标签
 * @method Models\ExportQAListResponse ExportQAList(Models\ExportQAListRequest $req) 导出QA列表
 * @method Models\ExportUnsatisfiedReplyResponse ExportUnsatisfiedReply(Models\ExportUnsatisfiedReplyRequest $req) 导出不满意回复
 * @method Models\GenerateQAResponse GenerateQA(Models\GenerateQARequest $req) 文档生成问答
 * @method Models\GetAnswerTypeDataCountResponse GetAnswerTypeDataCount(Models\GetAnswerTypeDataCountRequest $req) 回答类型数据统计
 * @method Models\GetAppKnowledgeCountResponse GetAppKnowledgeCount(Models\GetAppKnowledgeCountRequest $req) 获取模型列表
 * @method Models\GetAppSecretResponse GetAppSecret(Models\GetAppSecretRequest $req) 获取应用密钥
 * @method Models\GetDocPreviewResponse GetDocPreview(Models\GetDocPreviewRequest $req) 获取文档预览信息
 * @method Models\GetEmbeddingResponse GetEmbedding(Models\GetEmbeddingRequest $req) 本接口（GetEmbedding）调用文本表示模型，将文本转化为用数值表示的向量形式，可用于文本检索、信息推荐、知识挖掘等场景。
本接口（GetEmbedding）有单账号调用上限控制，如您有提高并发限制的需求请 [联系我们](https://cloud.tencent.com/act/event/Online_service) 。
 * @method Models\GetLikeDataCountResponse GetLikeDataCount(Models\GetLikeDataCountRequest $req) 点赞点踩数据统计
 * @method Models\GetMsgRecordResponse GetMsgRecord(Models\GetMsgRecordRequest $req) 获取聊天历史请求
 * @method Models\GetReconstructDocumentResultResponse GetReconstructDocumentResult(Models\GetReconstructDocumentResultRequest $req) 本接口为异步接口的查询结果接口，用于获取文档解析处理结果。
 * @method Models\GetTaskStatusResponse GetTaskStatus(Models\GetTaskStatusRequest $req) 获取任务状态
 * @method Models\GetVarListResponse GetVarList(Models\GetVarListRequest $req) 查询自定义变量列表
 * @method Models\GetWsTokenResponse GetWsToken(Models\GetWsTokenRequest $req) 获取ws token
 * @method Models\GroupDocResponse GroupDoc(Models\GroupDocRequest $req) Doc分组
 * @method Models\GroupQAResponse GroupQA(Models\GroupQARequest $req) QA分组
 * @method Models\IgnoreUnsatisfiedReplyResponse IgnoreUnsatisfiedReply(Models\IgnoreUnsatisfiedReplyRequest $req) 忽略不满意回复
 * @method Models\IsTransferIntentResponse IsTransferIntent(Models\IsTransferIntentRequest $req) 是否意图转人工
 * @method Models\ListAppResponse ListApp(Models\ListAppRequest $req) 获取企业下应用列表
 * @method Models\ListAppCategoryResponse ListAppCategory(Models\ListAppCategoryRequest $req) 应用类型列表
 * @method Models\ListAppKnowledgeDetailResponse ListAppKnowledgeDetail(Models\ListAppKnowledgeDetailRequest $req) 列表查询知识库容量详情
 * @method Models\ListAttributeLabelResponse ListAttributeLabel(Models\ListAttributeLabelRequest $req) 查询属性标签列表
 * @method Models\ListDocResponse ListDoc(Models\ListDocRequest $req) 文档列表
 * @method Models\ListDocCateResponse ListDocCate(Models\ListDocCateRequest $req) 获取Doc分类
 * @method Models\ListModelResponse ListModel(Models\ListModelRequest $req) 获取模型列表
 * @method Models\ListQAResponse ListQA(Models\ListQARequest $req) 问答列表
 * @method Models\ListQACateResponse ListQACate(Models\ListQACateRequest $req) 获取QA分类
 * @method Models\ListRejectedQuestionResponse ListRejectedQuestion(Models\ListRejectedQuestionRequest $req) 获取拒答问题
 * @method Models\ListRejectedQuestionPreviewResponse ListRejectedQuestionPreview(Models\ListRejectedQuestionPreviewRequest $req) 发布拒答问题预览
 * @method Models\ListReleaseResponse ListRelease(Models\ListReleaseRequest $req) 发布列表
 * @method Models\ListReleaseConfigPreviewResponse ListReleaseConfigPreview(Models\ListReleaseConfigPreviewRequest $req) 发布配置项预览
 * @method Models\ListReleaseDocPreviewResponse ListReleaseDocPreview(Models\ListReleaseDocPreviewRequest $req) 发布文档预览
 * @method Models\ListReleaseQAPreviewResponse ListReleaseQAPreview(Models\ListReleaseQAPreviewRequest $req) 文档列表
 * @method Models\ListSelectDocResponse ListSelectDoc(Models\ListSelectDocRequest $req) 获取账户信息
 * @method Models\ListUnsatisfiedReplyResponse ListUnsatisfiedReply(Models\ListUnsatisfiedReplyRequest $req) 查询不满意回复列表
 * @method Models\ListUsageCallDetailResponse ListUsageCallDetail(Models\ListUsageCallDetailRequest $req) 列表查询单次调用明细
 * @method Models\ModifyAppResponse ModifyApp(Models\ModifyAppRequest $req) 修改应用请求结构体
 * @method Models\ModifyAttributeLabelResponse ModifyAttributeLabel(Models\ModifyAttributeLabelRequest $req) 编辑属性标签
 * @method Models\ModifyDocResponse ModifyDoc(Models\ModifyDocRequest $req) 修改文档
 * @method Models\ModifyDocAttrRangeResponse ModifyDocAttrRange(Models\ModifyDocAttrRangeRequest $req) 批量修改文档适用范围
 * @method Models\ModifyDocCateResponse ModifyDocCate(Models\ModifyDocCateRequest $req) 修改Doc分类
 * @method Models\ModifyQAResponse ModifyQA(Models\ModifyQARequest $req) 更新问答
 * @method Models\ModifyQAAttrRangeResponse ModifyQAAttrRange(Models\ModifyQAAttrRangeRequest $req) 批量修改问答适用范围
 * @method Models\ModifyQACateResponse ModifyQACate(Models\ModifyQACateRequest $req) 更新QA分类
 * @method Models\ModifyRejectedQuestionResponse ModifyRejectedQuestion(Models\ModifyRejectedQuestionRequest $req) 修改拒答问题
 * @method Models\QueryRewriteResponse QueryRewrite(Models\QueryRewriteRequest $req) 多轮改写（QueryRewrite）主要用于多轮对话中，进行指代消解和省略补全。使用本接口，无需输入prompt描述，根据对话历史即可生成更精确的用户查询。在应用场景上，本接口可应用于智能问答、对话式搜索等多种场景。
本接口（QueryRewrite）有单账号调用上限控制，如您有提高并发限制的需求请 [联系我们](https://cloud.tencent.com/act/event/Online_service) 。
 * @method Models\RateMsgRecordResponse RateMsgRecord(Models\RateMsgRecordRequest $req) 点赞点踩消息
 * @method Models\ReconstructDocumentResponse ReconstructDocument(Models\ReconstructDocumentRequest $req) 支持将图片或PDF文件转换成Markdown格式文件，可解析包括表格、公式、图片、标题、段落、页眉、页脚等内容元素，并将内容智能转换成阅读顺序。

体验期间单账号限制qps仅为1，若有正式接入需要请与产研团队沟通开放。
 * @method Models\RenameDocResponse RenameDoc(Models\RenameDocRequest $req) 文档重命名
 * @method Models\RetryDocAuditResponse RetryDocAudit(Models\RetryDocAuditRequest $req) 文档解析重试
 * @method Models\RetryDocParseResponse RetryDocParse(Models\RetryDocParseRequest $req) 文档解析重试
 * @method Models\RetryReleaseResponse RetryRelease(Models\RetryReleaseRequest $req) 发布暂停后重试
 * @method Models\RunReRankResponse RunReRank(Models\RunReRankRequest $req) 基于知识引擎精调模型技术的rerank模型，支持对多路召回的结果进行重排序，根据query与切片内容的相关性，按分数由高到低对切片进行排序，并输出对应的打分结果。（这个接口已下线，请使用新接口，接口文档：https://cloud.tencent.com/document/product/1772/115339）。
 * @method Models\SaveDocResponse SaveDoc(Models\SaveDocRequest $req) 知识库文档问答保存。
将文件存储到应用的知识库内需要三步：
1.获取临时密钥，参考[接口文档](https://cloud.tencent.com/document/product/1759/105050)。获取临时密钥不同参数组合权限不一样，可参考 [知识引擎操作 cos 指南](https://cloud.tencent.com/document/product/1759/116238)
2.调用腾讯云提供的 cos 存储接口，将文件存储到知识引擎 cos 中：具体可参考[ COS SDK 概览](https://cloud.tencent.com/document/product/436/6474), 注意使用的是临时密钥的方式操作 COS 
3.调用本接口，将文件的基础信息存储到知识引擎中。
以上步骤可参考[文档](https://cloud.tencent.com/document/product/1759/108903)，文档最后有[代码demo](https://cloud.tencent.com/document/product/1759/108903#demo)，可作为参考。
 * @method Models\StopDocParseResponse StopDocParse(Models\StopDocParseRequest $req) 终止文档解析
 * @method Models\UploadAttributeLabelResponse UploadAttributeLabel(Models\UploadAttributeLabelRequest $req) 上传导入属性标签
 * @method Models\VerifyQAResponse VerifyQA(Models\VerifyQARequest $req) 校验问答
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
