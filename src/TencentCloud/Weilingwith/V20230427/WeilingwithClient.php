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

namespace TencentCloud\Weilingwith\V20230427;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Weilingwith\V20230427\Models as Models;

/**
 * @method Models\AddAlarmProcessRecordResponse AddAlarmProcessRecord(Models\AddAlarmProcessRecordRequest $req) 添加告警处理记录
 * @method Models\BatchCreateDeviceResponse BatchCreateDevice(Models\BatchCreateDeviceRequest $req) 单个/批量新增设备
 * @method Models\BatchKillAlarmResponse BatchKillAlarm(Models\BatchKillAlarmRequest $req) 批量消警
 * @method Models\BatchReportAppMessageResponse BatchReportAppMessage(Models\BatchReportAppMessageRequest $req) 批量上报应用消息
 * @method Models\ChangeAlarmStatusResponse ChangeAlarmStatus(Models\ChangeAlarmStatusRequest $req) 变更告警状态
 * @method Models\ControlCameraPTZResponse ControlCameraPTZ(Models\ControlCameraPTZRequest $req) 云台控制
 * @method Models\ControlDeviceResponse ControlDevice(Models\ControlDeviceRequest $req) 设备控制（单个、批量控制）
 * @method Models\CreateApplicationTokenResponse CreateApplicationToken(Models\CreateApplicationTokenRequest $req) 调用方应用，创建调用租户API的授权令牌。
 * @method Models\DescribeActionListResponse DescribeActionList(Models\DescribeActionListRequest $req) 动作列表查询
 * @method Models\DescribeAdministrationByTagResponse DescribeAdministrationByTag(Models\DescribeAdministrationByTagRequest $req) 根据标签获取行政区划列表
 * @method Models\DescribeAlarmLevelListResponse DescribeAlarmLevelList(Models\DescribeAlarmLevelListRequest $req) 告警级别枚举获取
 * @method Models\DescribeAlarmListResponse DescribeAlarmList(Models\DescribeAlarmListRequest $req) 告警列表查询
 * @method Models\DescribeAlarmStatusListResponse DescribeAlarmStatusList(Models\DescribeAlarmStatusListRequest $req) 用来查询系统中的告警状态列表
 * @method Models\DescribeAlarmTypeListResponse DescribeAlarmTypeList(Models\DescribeAlarmTypeListRequest $req) 告警类型获取
 * @method Models\DescribeApplicationListResponse DescribeApplicationList(Models\DescribeApplicationListRequest $req) 查询指定空间关联的应用列表
 * @method Models\DescribeBuildingListResponse DescribeBuildingList(Models\DescribeBuildingListRequest $req) 查询建筑列表
 * @method Models\DescribeBuildingModelResponse DescribeBuildingModel(Models\DescribeBuildingModelRequest $req) 查询建筑三维模型
 * @method Models\DescribeBuildingProfileResponse DescribeBuildingProfile(Models\DescribeBuildingProfileRequest $req) 查询建筑信息
 * @method Models\DescribeCameraExtendInfoResponse DescribeCameraExtendInfo(Models\DescribeCameraExtendInfoRequest $req) 获取视频扩展信息
 * @method Models\DescribeCityWorkspaceListResponse DescribeCityWorkspaceList(Models\DescribeCityWorkspaceListRequest $req) 通过城市id查询工作空间列表
 * @method Models\DescribeDeviceListResponse DescribeDeviceList(Models\DescribeDeviceListRequest $req) 设备列表查询/单个查询（支持通过筛选条件查询，设备类型、标签、PID、空间）
 * @method Models\DescribeDeviceShadowListResponse DescribeDeviceShadowList(Models\DescribeDeviceShadowListRequest $req) 获取设备影子数据
 * @method Models\DescribeDeviceStatusListResponse DescribeDeviceStatusList(Models\DescribeDeviceStatusListRequest $req) 设备状态获取
 * @method Models\DescribeDeviceStatusStatResponse DescribeDeviceStatusStat(Models\DescribeDeviceStatusStatRequest $req) 设备状态统计
 * @method Models\DescribeDeviceTagListResponse DescribeDeviceTagList(Models\DescribeDeviceTagListRequest $req) 标签列表查询
 * @method Models\DescribeDeviceTypeListResponse DescribeDeviceTypeList(Models\DescribeDeviceTypeListRequest $req) 拉取设备的设备类型列表
 * @method Models\DescribeEdgeApplicationTokenResponse DescribeEdgeApplicationToken(Models\DescribeEdgeApplicationTokenRequest $req) 查询边缘应用凭证
 * @method Models\DescribeElementProfilePageResponse DescribeElementProfilePage(Models\DescribeElementProfilePageRequest $req) 查询分页构件信息
 * @method Models\DescribeElementProfileTreeResponse DescribeElementProfileTree(Models\DescribeElementProfileTreeRequest $req) 查询构件树
 * @method Models\DescribeEventListResponse DescribeEventList(Models\DescribeEventListRequest $req) 事件列表查询
 * @method Models\DescribeFileDownloadURLResponse DescribeFileDownloadURL(Models\DescribeFileDownloadURLRequest $req) 获取文件下载URL
 * @method Models\DescribeFileUploadURLResponse DescribeFileUploadURL(Models\DescribeFileUploadURLRequest $req) 文件上传接口
 * @method Models\DescribeInterfaceListResponse DescribeInterfaceList(Models\DescribeInterfaceListRequest $req) 查询接口列表
 * @method Models\DescribeLinkRuleListResponse DescribeLinkRuleList(Models\DescribeLinkRuleListRequest $req) 联动规则列表查询
 * @method Models\DescribeModelListResponse DescribeModelList(Models\DescribeModelListRequest $req) 模型列表查询/单个查询（产品模型/标准模型）
 * @method Models\DescribeProductListResponse DescribeProductList(Models\DescribeProductListRequest $req) 产品列表查询
 * @method Models\DescribePropertyListResponse DescribePropertyList(Models\DescribePropertyListRequest $req) 查询构件属性（详情）
 * @method Models\DescribeRuleDetailResponse DescribeRuleDetail(Models\DescribeRuleDetailRequest $req) 联动规则详情查询
 * @method Models\DescribeSceneListResponse DescribeSceneList(Models\DescribeSceneListRequest $req) 查询场景列表
 * @method Models\DescribeSpaceDeviceIdListResponse DescribeSpaceDeviceIdList(Models\DescribeSpaceDeviceIdListRequest $req) 查询指定空间设备编号列表
 * @method Models\DescribeSpaceDeviceRelationListResponse DescribeSpaceDeviceRelationList(Models\DescribeSpaceDeviceRelationListRequest $req) 查询指定空间下设备与构件绑定关系列表
 * @method Models\DescribeSpaceInfoByDeviceIdResponse DescribeSpaceInfoByDeviceId(Models\DescribeSpaceInfoByDeviceIdRequest $req) 查询设备绑定的空间信息
 * @method Models\DescribeSpaceRelationByDeviceIdResponse DescribeSpaceRelationByDeviceId(Models\DescribeSpaceRelationByDeviceIdRequest $req) 查询设备绑定的空间层级关系
 * @method Models\DescribeSpaceTypeListResponse DescribeSpaceTypeList(Models\DescribeSpaceTypeListRequest $req) 查询空间分类
 * @method Models\DescribeTenantBuildingCountAndAreaResponse DescribeTenantBuildingCountAndArea(Models\DescribeTenantBuildingCountAndAreaRequest $req) 查询租户楼栋数量和楼栋建筑面积
 * @method Models\DescribeTenantDepartmentListResponse DescribeTenantDepartmentList(Models\DescribeTenantDepartmentListRequest $req) 查询租户组织部门列表
 * @method Models\DescribeTenantUserListResponse DescribeTenantUserList(Models\DescribeTenantUserListRequest $req) 查询租户人员列表
 * @method Models\DescribeVideoCloudRecordResponse DescribeVideoCloudRecord(Models\DescribeVideoCloudRecordRequest $req) 云录像接口
 * @method Models\DescribeVideoLiveStreamResponse DescribeVideoLiveStream(Models\DescribeVideoLiveStreamRequest $req) 实时流接口
 * @method Models\DescribeVideoRecordStreamResponse DescribeVideoRecordStream(Models\DescribeVideoRecordStreamRequest $req) 历史流接口
 * @method Models\DescribeWorkSpaceBuildingCountAndAreaResponse DescribeWorkSpaceBuildingCountAndArea(Models\DescribeWorkSpaceBuildingCountAndAreaRequest $req) 查询项目空间楼栋数量与建筑面积
 * @method Models\DescribeWorkspaceListResponse DescribeWorkspaceList(Models\DescribeWorkspaceListRequest $req) 获取租户下的空间列表
 * @method Models\DescribeWorkspaceUserListResponse DescribeWorkspaceUserList(Models\DescribeWorkspaceUserListRequest $req) 查询项目空间人员列表
 * @method Models\ModifyDeviceNameResponse ModifyDeviceName(Models\ModifyDeviceNameRequest $req) 批量修改设备名字
 * @method Models\ReportAppMessageResponse ReportAppMessage(Models\ReportAppMessageRequest $req) 上报应用消息
 * @method Models\StopVideoStreamingResponse StopVideoStreaming(Models\StopVideoStreamingRequest $req) 断流接口
 * @method Models\UpdateWorkspaceParkAttributesResponse UpdateWorkspaceParkAttributes(Models\UpdateWorkspaceParkAttributesRequest $req) 修改工作空间园区属性
 */

class WeilingwithClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "weilingwith.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "weilingwith";

    /**
     * @var string
     */
    protected $version = "2023-04-27";

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
        $respClass = "TencentCloud"."\\".ucfirst("weilingwith")."\\"."V20230427\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
