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

namespace TencentCloud\Lcic\V20220817;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Lcic\V20220817\Models as Models;

/**
 * @method Models\AddGroupMemberResponse AddGroupMember(Models\AddGroupMemberRequest $req) 此接口用于添加成员列表到指定群组
 * @method Models\BatchAddGroupMemberResponse BatchAddGroupMember(Models\BatchAddGroupMemberRequest $req) 此接口用于批量添加成员列表到指定群组
 * @method Models\BatchCreateGroupWithMembersResponse BatchCreateGroupWithMembers(Models\BatchCreateGroupWithMembersRequest $req) 此接口用于批量创建群组
 * @method Models\BatchCreateRoomResponse BatchCreateRoom(Models\BatchCreateRoomRequest $req) 批量创建房间接口
 * @method Models\BatchDeleteGroupMemberResponse BatchDeleteGroupMember(Models\BatchDeleteGroupMemberRequest $req) 此接口用于批量删除成员列表到指定群组列表
 * @method Models\BatchDeleteRecordResponse BatchDeleteRecord(Models\BatchDeleteRecordRequest $req) 批量删除多个房间的录制文件
 * @method Models\BatchDescribeDocumentResponse BatchDescribeDocument(Models\BatchDescribeDocumentRequest $req) 批量获取文档详情
 * @method Models\BatchRegisterResponse BatchRegister(Models\BatchRegisterRequest $req) 如果批量注册的用户已存在，则会被覆盖。一次最多注册1000个用户。默认请求频率限制：10次/秒
 * @method Models\BindDocumentToRoomResponse BindDocumentToRoom(Models\BindDocumentToRoomRequest $req) 功能概述
本接口提供教学场景下的课程文档预绑定能力，支持将课件课堂ID进行关联映射，实现课件的自动化预加载。

应用场景建议

绑定时机
推荐在创建课堂预约阶段同步完成文档绑定操作，确保课件资源在课堂开始前完成上传。

接口限制与频控策略

频控维度
开发者账号维度限频
默认频控阈值为20 QPS（每秒请求次数）

最佳实践建议

重试策略
当触发限频错误时，建议采用以下策略：
启用退避重试机制（建议使用指数退避算法）
初始重试间隔不低于500ms
最大重试次数不超过3次
 * @method Models\CreateDocumentResponse CreateDocument(Models\CreateDocumentRequest $req) 创建房间内可以使用的文档。
 * @method Models\CreateGroupWithMembersResponse CreateGroupWithMembers(Models\CreateGroupWithMembersRequest $req) 此接口根据成员列表创建群组
 * @method Models\CreateGroupWithSubGroupResponse CreateGroupWithSubGroup(Models\CreateGroupWithSubGroupRequest $req) 此接口会聚合子群组创建联合群组
 * @method Models\CreateRoomResponse CreateRoom(Models\CreateRoomRequest $req) 创建课堂
 * @method Models\CreateSupervisorResponse CreateSupervisor(Models\CreateSupervisorRequest $req) 创建巡课
 * @method Models\DeleteAppCustomContentResponse DeleteAppCustomContent(Models\DeleteAppCustomContentRequest $req) 删除设置自定义元素。如果参数scenes为空则删除所有自定义元素，否则删除指定的scene自定义元素。
 * @method Models\DeleteDocumentResponse DeleteDocument(Models\DeleteDocumentRequest $req) 删除文档
 * @method Models\DeleteGroupResponse DeleteGroup(Models\DeleteGroupRequest $req) 此接口用于删除指定群组，支持批量操作。
 * @method Models\DeleteGroupMemberResponse DeleteGroupMember(Models\DeleteGroupMemberRequest $req) 此接口用于删除群组中指定成员
 * @method Models\DeleteRecordResponse DeleteRecord(Models\DeleteRecordRequest $req) 删除指定房间的录制文件
 * @method Models\DeleteRoomResponse DeleteRoom(Models\DeleteRoomRequest $req) 删除房间
 * @method Models\DeleteSupervisorResponse DeleteSupervisor(Models\DeleteSupervisorRequest $req) 删除巡课
 * @method Models\DeleteUserResponse DeleteUser(Models\DeleteUserRequest $req) 删除已注册用户。注：如果该成员已被添加到群组，请先在群组中删除该成员。
 * @method Models\DeleteWhiteBoardSnapshotResponse DeleteWhiteBoardSnapshot(Models\DeleteWhiteBoardSnapshotRequest $req) 删除白板板书截图
 * @method Models\DescribeAnswerListResponse DescribeAnswerList(Models\DescribeAnswerListRequest $req) 获取房间答题详情
 * @method Models\DescribeAppDetailResponse DescribeAppDetail(Models\DescribeAppDetailRequest $req) 获取应用详情
 * @method Models\DescribeCurrentMemberListResponse DescribeCurrentMemberList(Models\DescribeCurrentMemberListRequest $req) 获取当前房间的成员列表，房间结束或过期后无法使用。
 * @method Models\DescribeDeveloperResponse DescribeDeveloper(Models\DescribeDeveloperRequest $req) 开发商信息获取
 * @method Models\DescribeDocumentResponse DescribeDocument(Models\DescribeDocumentRequest $req) 获取文档信息
 * @method Models\DescribeDocumentsResponse DescribeDocuments(Models\DescribeDocumentsRequest $req) 有新接口替换

批量获取文档信息（已废弃，替代接口BatchDescribeDocument）
 * @method Models\DescribeDocumentsByRoomResponse DescribeDocumentsByRoom(Models\DescribeDocumentsByRoomRequest $req) 此接口获取指定房间下课件列表
 * @method Models\DescribeGroupResponse DescribeGroup(Models\DescribeGroupRequest $req) 此接口用于获取群组详情
 * @method Models\DescribeGroupListResponse DescribeGroupList(Models\DescribeGroupListRequest $req) 获取群组列表
 * @method Models\DescribeGroupMemberListResponse DescribeGroupMemberList(Models\DescribeGroupMemberListRequest $req) 此接口用于获取群组成员列表
 * @method Models\DescribeMarqueeResponse DescribeMarquee(Models\DescribeMarqueeRequest $req) 查询跑马灯配置
 * @method Models\DescribeQuestionListResponse DescribeQuestionList(Models\DescribeQuestionListRequest $req) 获取房间提问列表
 * @method Models\DescribeRecordResponse DescribeRecord(Models\DescribeRecordRequest $req) 查询录制信息
 * @method Models\DescribeRecordStreamResponse DescribeRecordStream(Models\DescribeRecordStreamRequest $req) 录制流查询
 * @method Models\DescribeRecordTaskResponse DescribeRecordTask(Models\DescribeRecordTaskRequest $req) 查询录制任务ID
 * @method Models\DescribeRoomResponse DescribeRoom(Models\DescribeRoomRequest $req) 获取房间配置信息
 * @method Models\DescribeRoomForbiddenUserResponse DescribeRoomForbiddenUser(Models\DescribeRoomForbiddenUserRequest $req) 根据房间ID获取群组中被禁言的用户列表。
 * @method Models\DescribeRoomStatisticsResponse DescribeRoomStatistics(Models\DescribeRoomStatisticsRequest $req) 获取房间统计信息，仅可在房间结束后调用。
 * @method Models\DescribeScoreListResponse DescribeScoreList(Models\DescribeScoreListRequest $req) 获取课堂评分列表
 * @method Models\DescribeSdkAppIdUsersResponse DescribeSdkAppIdUsers(Models\DescribeSdkAppIdUsersRequest $req) 此接口用于获取指定应用ID下用户列表
 * @method Models\DescribeSupervisorsResponse DescribeSupervisors(Models\DescribeSupervisorsRequest $req) 获取巡课列表
 * @method Models\DescribeUserResponse DescribeUser(Models\DescribeUserRequest $req) 获取用户信息
 * @method Models\DescribeWhiteBoardSnapshotResponse DescribeWhiteBoardSnapshot(Models\DescribeWhiteBoardSnapshotRequest $req) 查询白板板书截图
 * @method Models\EndRoomResponse EndRoom(Models\EndRoomRequest $req) 结束房间的直播
 * @method Models\ForbidSendMsgResponse ForbidSendMsg(Models\ForbidSendMsgRequest $req) 禁止指定房间中某些用户在一段时间内发言。
取消对某些用户的禁言。
被禁言用户退出房间之后再进入同一房间，禁言仍然有效。
 * @method Models\GetRoomEventResponse GetRoomEvent(Models\GetRoomEventRequest $req) 获取房间事件,仅在课堂结束1小时内有效。
 * @method Models\GetRoomMessageResponse GetRoomMessage(Models\GetRoomMessageRequest $req) 获取房间历史消息(房间历史消息保存7天)
 * @method Models\GetRoomsResponse GetRooms(Models\GetRoomsRequest $req) 获取房间列表
 * @method Models\GetWatermarkResponse GetWatermark(Models\GetWatermarkRequest $req) 获取水印设置
 * @method Models\KickUserFromRoomResponse KickUserFromRoom(Models\KickUserFromRoomRequest $req) 从房间里面踢出用户
 * @method Models\LoginOriginIdResponse LoginOriginId(Models\LoginOriginIdRequest $req) 使用源账号登录，源账号为注册时填入的originId
 * @method Models\LoginUserResponse LoginUser(Models\LoginUserRequest $req) 登录
 * @method Models\ModifyAppResponse ModifyApp(Models\ModifyAppRequest $req) 修改应用
 * @method Models\ModifyGroupResponse ModifyGroup(Models\ModifyGroupRequest $req) 此接口修改群组信息
 * @method Models\ModifyRoomResponse ModifyRoom(Models\ModifyRoomRequest $req) 修改房间
 * @method Models\ModifyUserProfileResponse ModifyUserProfile(Models\ModifyUserProfileRequest $req) 此接口用于修改用户信息，例如头像、昵称（用户名）等。注意，课中的用户信息不会立即同步修改，需待下次上课时，修改后的信息才会更新显示。
 * @method Models\RegisterUserResponse RegisterUser(Models\RegisterUserRequest $req) 注册用户
 * @method Models\SendRoomNormalMessageResponse SendRoomNormalMessage(Models\SendRoomNormalMessageRequest $req) 1、按照指定身份发送消息，目前支持表情消息、图片消息、文本消息。
 * @method Models\SendRoomNotificationMessageResponse SendRoomNotificationMessage(Models\SendRoomNotificationMessageRequest $req) App 管理员可以通过该接口在群组中发送通知、公告等。目前仅支持文本消息。
 * @method Models\SetAppCustomContentResponse SetAppCustomContent(Models\SetAppCustomContentRequest $req) 设置应用的自定义内容，包括应用图标，自定义的代码等。如果已存在，则为更新。更新js、css内容后，要生效也需要调用该接口
 * @method Models\SetMarqueeResponse SetMarquee(Models\SetMarqueeRequest $req) 设置跑马灯参数设置
 * @method Models\SetWatermarkResponse SetWatermark(Models\SetWatermarkRequest $req) 设置水印
 * @method Models\StartRecordResponse StartRecord(Models\StartRecordRequest $req) 开始录制
 * @method Models\StartRoomResponse StartRoom(Models\StartRoomRequest $req) 开始房间的直播。 说明：开始房间接口调用之前需要有用户进入课堂初始化课堂信息。
 * @method Models\StopRecordResponse StopRecord(Models\StopRecordRequest $req) 停止录制
 * @method Models\UnbindDocumentFromRoomResponse UnbindDocumentFromRoom(Models\UnbindDocumentFromRoomRequest $req) 文档从房间解绑
 * @method Models\UnblockKickedUserResponse UnblockKickedUser(Models\UnblockKickedUserRequest $req) 解禁从房间里面踢出的用户
 */

class LcicClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "lcic.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "lcic";

    /**
     * @var string
     */
    protected $version = "2022-08-17";

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
        $respClass = "TencentCloud"."\\".ucfirst("lcic")."\\"."V20220817\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
