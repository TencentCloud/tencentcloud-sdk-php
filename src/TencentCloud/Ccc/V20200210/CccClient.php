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

namespace TencentCloud\Ccc\V20200210;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ccc\V20200210\Models as Models;

/**
 * @method Models\BindStaffSkillGroupListResponse BindStaffSkillGroupList(Models\BindStaffSkillGroupListRequest $req) 绑定坐席所属技能组
 * @method Models\CreateAutoCalloutTaskResponse CreateAutoCalloutTask(Models\CreateAutoCalloutTaskRequest $req) 创建自动外呼任务
 * @method Models\CreateCCCSkillGroupResponse CreateCCCSkillGroup(Models\CreateCCCSkillGroupRequest $req) 创建技能组
 * @method Models\CreateCallOutSessionResponse CreateCallOutSession(Models\CreateCallOutSessionRequest $req) 创建外呼会话，当前仅支持双呼，即先使用平台号码呼出到坐席手机上，坐席接听后，然后再外呼用户，而且由于运营商频率限制，坐席手机号必须先加白名单，避免频控导致外呼失败。
 * @method Models\CreateSDKLoginTokenResponse CreateSDKLoginToken(Models\CreateSDKLoginTokenRequest $req) 创建 SDK 登录 Token。
 * @method Models\CreateStaffResponse CreateStaff(Models\CreateStaffRequest $req) 创建客服账号。
 * @method Models\CreateUserSigResponse CreateUserSig(Models\CreateUserSigRequest $req) 创建用户数据签名
 * @method Models\DeleteStaffResponse DeleteStaff(Models\DeleteStaffRequest $req) 删除坐席信息
 * @method Models\DescribeAutoCalloutTaskResponse DescribeAutoCalloutTask(Models\DescribeAutoCalloutTaskRequest $req) 查询自动外呼任务详情
 * @method Models\DescribeAutoCalloutTasksResponse DescribeAutoCalloutTasks(Models\DescribeAutoCalloutTasksRequest $req) 批量查询自动任务外呼
 * @method Models\DescribeCCCBuyInfoListResponse DescribeCCCBuyInfoList(Models\DescribeCCCBuyInfoListRequest $req) 获取用户购买信息列表
 * @method Models\DescribeCallInMetricsResponse DescribeCallInMetrics(Models\DescribeCallInMetricsRequest $req) 获取呼入实时数据统计指标
 * @method Models\DescribeChatMessagesResponse DescribeChatMessages(Models\DescribeChatMessagesRequest $req) 包括具体聊天内容
 * @method Models\DescribeIMCdrsResponse DescribeIMCdrs(Models\DescribeIMCdrsRequest $req) 包括全媒体和文本两种类型
 * @method Models\DescribePSTNActiveSessionListResponse DescribePSTNActiveSessionList(Models\DescribePSTNActiveSessionListRequest $req) 获取当前正在通话的会话列表
 * @method Models\DescribeProtectedTelCdrResponse DescribeProtectedTelCdr(Models\DescribeProtectedTelCdrRequest $req) 获取主被叫受保护的电话服务记录与录音
 * @method Models\DescribeSkillGroupInfoListResponse DescribeSkillGroupInfoList(Models\DescribeSkillGroupInfoListRequest $req) 获取技能组信息列表
 * @method Models\DescribeStaffInfoListResponse DescribeStaffInfoList(Models\DescribeStaffInfoListRequest $req) 获取坐席信息列表
 * @method Models\DescribeStaffStatusMetricsResponse DescribeStaffStatusMetrics(Models\DescribeStaffStatusMetricsRequest $req) 获取坐席实时状态统计指标
 * @method Models\DescribeTelCallInfoResponse DescribeTelCallInfo(Models\DescribeTelCallInfoRequest $req) 按实例获取电话消耗统计
 * @method Models\DescribeTelCdrResponse DescribeTelCdr(Models\DescribeTelCdrRequest $req) 获取电话服务记录与录音
 * @method Models\DescribeTelSessionResponse DescribeTelSession(Models\DescribeTelSessionRequest $req) 获取 PSTN 会话信息
 * @method Models\ModifyStaffResponse ModifyStaff(Models\ModifyStaffRequest $req) 修改客服账号
 * @method Models\StopAutoCalloutTaskResponse StopAutoCalloutTask(Models\StopAutoCalloutTaskRequest $req) 停止自动外呼任务
 * @method Models\UnbindStaffSkillGroupListResponse UnbindStaffSkillGroupList(Models\UnbindStaffSkillGroupListRequest $req) 解绑坐席所属技能组
 */

class CccClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ccc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ccc";

    /**
     * @var string
     */
    protected $version = "2020-02-10";

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
        $respClass = "TencentCloud"."\\".ucfirst("ccc")."\\"."V20200210\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
