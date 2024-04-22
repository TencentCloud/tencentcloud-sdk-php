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
 * @method Models\CreateAppResponse CreateApp(Models\CreateAppRequest $req) 创建只是引擎应用，包括：知识管理应用、知识摘要应用、标签提取应用。
 * @method Models\CreateAttributeLabelResponse CreateAttributeLabel(Models\CreateAttributeLabelRequest $req) 创建属性
 * @method Models\CreateCorpResponse CreateCorp(Models\CreateCorpRequest $req) 创建企业
 * @method Models\CreateQAResponse CreateQA(Models\CreateQARequest $req) 录入问答
 * @method Models\CreateQACateResponse CreateQACate(Models\CreateQACateRequest $req) 创建QA分类
 * @method Models\CreateRejectedQuestionResponse CreateRejectedQuestion(Models\CreateRejectedQuestionRequest $req) 创建拒答问题
 * @method Models\CreateReleaseResponse CreateRelease(Models\CreateReleaseRequest $req) 创建发布
 * @method Models\DeleteAppResponse DeleteApp(Models\DeleteAppRequest $req) 删除应用
 * @method Models\DeleteAttributeLabelResponse DeleteAttributeLabel(Models\DeleteAttributeLabelRequest $req) 删除属性标签
 * @method Models\DeleteDocResponse DeleteDoc(Models\DeleteDocRequest $req) 创建企业
 * @method Models\DeleteQAResponse DeleteQA(Models\DeleteQARequest $req) 删除问答
 * @method Models\DeleteQACateResponse DeleteQACate(Models\DeleteQACateRequest $req) 分类删除
 * @method Models\DeleteRejectedQuestionResponse DeleteRejectedQuestion(Models\DeleteRejectedQuestionRequest $req) 删除拒答问题
 * @method Models\DescribeAppResponse DescribeApp(Models\DescribeAppRequest $req) 获取企业下应用详情
 * @method Models\DescribeAttributeLabelResponse DescribeAttributeLabel(Models\DescribeAttributeLabelRequest $req) 查询属性标签详情
 * @method Models\DescribeCorpResponse DescribeCorp(Models\DescribeCorpRequest $req) 企业详情
 * @method Models\DescribeDocResponse DescribeDoc(Models\DescribeDocRequest $req) 文档详情
 * @method Models\DescribeQAResponse DescribeQA(Models\DescribeQARequest $req) 问答详情
 * @method Models\DescribeReferResponse DescribeRefer(Models\DescribeReferRequest $req) 获取来源详情列表
 * @method Models\DescribeReleaseResponse DescribeRelease(Models\DescribeReleaseRequest $req) 发布详情
 * @method Models\DescribeReleaseInfoResponse DescribeReleaseInfo(Models\DescribeReleaseInfoRequest $req) 拉取发布按钮状态、最后发布时间
 * @method Models\DescribeRobotBizIDByAppKeyResponse DescribeRobotBizIDByAppKey(Models\DescribeRobotBizIDByAppKeyRequest $req) 通过appKey获取机器人业务ID
 * @method Models\DescribeStorageCredentialResponse DescribeStorageCredential(Models\DescribeStorageCredentialRequest $req) 获取文件上传临时密钥
 * @method Models\DescribeUnsatisfiedReplyContextResponse DescribeUnsatisfiedReplyContext(Models\DescribeUnsatisfiedReplyContextRequest $req) 获取不满意回复上下文
 * @method Models\ExportAttributeLabelResponse ExportAttributeLabel(Models\ExportAttributeLabelRequest $req) 导出属性标签
 * @method Models\ExportQAListResponse ExportQAList(Models\ExportQAListRequest $req) 导出QA列表
 * @method Models\ExportUnsatisfiedReplyResponse ExportUnsatisfiedReply(Models\ExportUnsatisfiedReplyRequest $req) 导出不满意回复
 * @method Models\GenerateQAResponse GenerateQA(Models\GenerateQARequest $req) 文档生成问答
 * @method Models\GetAppKnowledgeCountResponse GetAppKnowledgeCount(Models\GetAppKnowledgeCountRequest $req) 获取模型列表
 * @method Models\GetAppSecretResponse GetAppSecret(Models\GetAppSecretRequest $req) 获取应用密钥
 * @method Models\GetDocPreviewResponse GetDocPreview(Models\GetDocPreviewRequest $req) 获取文档预览信息
 * @method Models\GetEmbeddingResponse GetEmbedding(Models\GetEmbeddingRequest $req) 获取特征向量
本接口有单账号调用上限控制，如您有提高并发限制的需求请 [联系我们](https://cloud.tencent.com/act/event/Online_service) 。
 * @method Models\GetMsgRecordResponse GetMsgRecord(Models\GetMsgRecordRequest $req) 获取推荐问题
 * @method Models\GetTaskStatusResponse GetTaskStatus(Models\GetTaskStatusRequest $req) 获取任务状态
 * @method Models\GetWsTokenResponse GetWsToken(Models\GetWsTokenRequest $req) 获取ws token
 * @method Models\GroupQAResponse GroupQA(Models\GroupQARequest $req) QA分组
 * @method Models\IgnoreUnsatisfiedReplyResponse IgnoreUnsatisfiedReply(Models\IgnoreUnsatisfiedReplyRequest $req) 忽略不满意回复
 * @method Models\IsTransferIntentResponse IsTransferIntent(Models\IsTransferIntentRequest $req) 是否意图转人工
 * @method Models\ListAppResponse ListApp(Models\ListAppRequest $req) 获取企业下应用列表
 * @method Models\ListAppCategoryResponse ListAppCategory(Models\ListAppCategoryRequest $req) 应用类型列表
 * @method Models\ListAttributeLabelResponse ListAttributeLabel(Models\ListAttributeLabelRequest $req) 查询属性标签列表
 * @method Models\ListDocResponse ListDoc(Models\ListDocRequest $req) 文档列表
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
 * @method Models\ModifyAppResponse ModifyApp(Models\ModifyAppRequest $req) 修改应用请求结构体
 * @method Models\ModifyAttributeLabelResponse ModifyAttributeLabel(Models\ModifyAttributeLabelRequest $req) 编辑属性标签
 * @method Models\ModifyDocResponse ModifyDoc(Models\ModifyDocRequest $req) 修改文档
 * @method Models\ModifyDocAttrRangeResponse ModifyDocAttrRange(Models\ModifyDocAttrRangeRequest $req) 批量修改文档适用范围
 * @method Models\ModifyQAResponse ModifyQA(Models\ModifyQARequest $req) 更新问答
 * @method Models\ModifyQAAttrRangeResponse ModifyQAAttrRange(Models\ModifyQAAttrRangeRequest $req) 批量修改问答适用范围
 * @method Models\ModifyQACateResponse ModifyQACate(Models\ModifyQACateRequest $req) 更新QA分类
 * @method Models\ModifyRejectedQuestionResponse ModifyRejectedQuestion(Models\ModifyRejectedQuestionRequest $req) 修改拒答问题
 * @method Models\ParseDocResponse ParseDoc(Models\ParseDocRequest $req) 解析拆分文件
 * @method Models\QueryParseDocResultResponse QueryParseDocResult(Models\QueryParseDocResultRequest $req) 查询文件解析结果
 * @method Models\QueryRewriteResponse QueryRewrite(Models\QueryRewriteRequest $req) 多轮改写
本接口有单账号调用上限控制，如您有提高并发限制的需求请 [联系我们](https://cloud.tencent.com/act/event/Online_service) 。
 * @method Models\RateMsgRecordResponse RateMsgRecord(Models\RateMsgRecordRequest $req) 是否意图转人工
 * @method Models\ResetSessionResponse ResetSession(Models\ResetSessionRequest $req) 重置会话
 * @method Models\RetryDocAuditResponse RetryDocAudit(Models\RetryDocAuditRequest $req) 文档解析重试
 * @method Models\RetryDocParseResponse RetryDocParse(Models\RetryDocParseRequest $req) 文档解析重试
 * @method Models\RetryReleaseResponse RetryRelease(Models\RetryReleaseRequest $req) 发布暂停后重试
 * @method Models\SaveDocResponse SaveDoc(Models\SaveDocRequest $req) 保存文档
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
