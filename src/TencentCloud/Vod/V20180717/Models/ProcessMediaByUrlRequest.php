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
 * ProcessMediaByUrl请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method MediaInputInfo getInputInfo() 获取API 已经<font color='red'>不再维护</font>。推荐使用的替代 API 请参考接口描述。
 * @method void setInputInfo(MediaInputInfo $InputInfo) 设置API 已经<font color='red'>不再维护</font>。推荐使用的替代 API 请参考接口描述。
 * @method MediaOutputInfo getOutputInfo() 获取输出文件 COS 路径信息。
 * @method void setOutputInfo(MediaOutputInfo $OutputInfo) 设置输出文件 COS 路径信息。
 * @method AiContentReviewTaskInput getAiContentReviewTask() 获取视频内容审核类型任务参数。
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) 设置视频内容审核类型任务参数。
 * @method AiAnalysisTaskInput getAiAnalysisTask() 获取视频内容分析类型任务参数。
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) 设置视频内容分析类型任务参数。
 * @method AiRecognitionTaskInput getAiRecognitionTask() 获取视频内容识别类型任务参数。
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) 设置视频内容识别类型任务参数。
 * @method integer getTasksPriority() 获取任务流的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 * @method void setTasksPriority(integer $TasksPriority) 设置任务流的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 * @method string getTasksNotifyMode() 获取任务流状态变更通知模式，可取值有 Finish，Change 和 None，不填代表 Finish。
 * @method void setTasksNotifyMode(string $TasksNotifyMode) 设置任务流状态变更通知模式，可取值有 Finish，Change 和 None，不填代表 Finish。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method string getSessionId() 获取用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 */
class ProcessMediaByUrlRequest extends AbstractModel
{
    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var MediaInputInfo API 已经<font color='red'>不再维护</font>。推荐使用的替代 API 请参考接口描述。
     */
    public $InputInfo;

    /**
     * @var MediaOutputInfo 输出文件 COS 路径信息。
     */
    public $OutputInfo;

    /**
     * @var AiContentReviewTaskInput 视频内容审核类型任务参数。
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput 视频内容分析类型任务参数。
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput 视频内容识别类型任务参数。
     */
    public $AiRecognitionTask;

    /**
     * @var integer 任务流的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
     */
    public $TasksPriority;

    /**
     * @var string 任务流状态变更通知模式，可取值有 Finish，Change 和 None，不填代表 Finish。
     */
    public $TasksNotifyMode;

    /**
     * @var string 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     */
    public $SessionContext;

    /**
     * @var string 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     */
    public $SessionId;

    /**
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param MediaInputInfo $InputInfo API 已经<font color='red'>不再维护</font>。推荐使用的替代 API 请参考接口描述。
     * @param MediaOutputInfo $OutputInfo 输出文件 COS 路径信息。
     * @param AiContentReviewTaskInput $AiContentReviewTask 视频内容审核类型任务参数。
     * @param AiAnalysisTaskInput $AiAnalysisTask 视频内容分析类型任务参数。
     * @param AiRecognitionTaskInput $AiRecognitionTask 视频内容识别类型任务参数。
     * @param integer $TasksPriority 任务流的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
     * @param string $TasksNotifyMode 任务流状态变更通知模式，可取值有 Finish，Change 和 None，不填代表 Finish。
     * @param string $SessionContext 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     * @param string $SessionId 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
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

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("OutputInfo",$param) and $param["OutputInfo"] !== null) {
            $this->OutputInfo = new MediaOutputInfo();
            $this->OutputInfo->deserialize($param["OutputInfo"]);
        }

        if (array_key_exists("AiContentReviewTask",$param) and $param["AiContentReviewTask"] !== null) {
            $this->AiContentReviewTask = new AiContentReviewTaskInput();
            $this->AiContentReviewTask->deserialize($param["AiContentReviewTask"]);
        }

        if (array_key_exists("AiAnalysisTask",$param) and $param["AiAnalysisTask"] !== null) {
            $this->AiAnalysisTask = new AiAnalysisTaskInput();
            $this->AiAnalysisTask->deserialize($param["AiAnalysisTask"]);
        }

        if (array_key_exists("AiRecognitionTask",$param) and $param["AiRecognitionTask"] !== null) {
            $this->AiRecognitionTask = new AiRecognitionTaskInput();
            $this->AiRecognitionTask->deserialize($param["AiRecognitionTask"]);
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("TasksNotifyMode",$param) and $param["TasksNotifyMode"] !== null) {
            $this->TasksNotifyMode = $param["TasksNotifyMode"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
