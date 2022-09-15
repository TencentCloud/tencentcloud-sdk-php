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

namespace TencentCloud\Wav\V20210129;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Wav\V20210129\Models as Models;

/**
 * @method Models\CreateChannelCodeResponse CreateChannelCode(Models\CreateChannelCodeRequest $req) 新增渠道活码接口
 * @method Models\CreateCorpTagResponse CreateCorpTag(Models\CreateCorpTagRequest $req) 该接口用户设置标签库, 每个企业最多可配置3000个企业标签。
 * @method Models\CreateLeadResponse CreateLead(Models\CreateLeadRequest $req) 线索回收接口
 * @method Models\QueryActivityJoinListResponse QueryActivityJoinList(Models\QueryActivityJoinListRequest $req) 根据游标拉取活动参与列表信息
 * @method Models\QueryActivityListResponse QueryActivityList(Models\QueryActivityListRequest $req) 根据游标拉取活动列表信息
 * @method Models\QueryActivityLiveCodeListResponse QueryActivityLiveCodeList(Models\QueryActivityLiveCodeListRequest $req) 根据游标拉取活动活码列表信息
 * @method Models\QueryChannelCodeListResponse QueryChannelCodeList(Models\QueryChannelCodeListRequest $req) 根据游标拉取渠道活码列表信息
 * @method Models\QueryChatArchivingListResponse QueryChatArchivingList(Models\QueryChatArchivingListRequest $req) 根据游标拉取会话存档列表信息
 * @method Models\QueryClueInfoListResponse QueryClueInfoList(Models\QueryClueInfoListRequest $req) 企业可通过此接口获取线索列表。
 * @method Models\QueryCrmStatisticsResponse QueryCrmStatistics(Models\QueryCrmStatisticsRequest $req) 通过接口拉取租户/指定成员/部门在指定日期范围内的CRM跟进统计数据
 * @method Models\QueryCustomerEventDetailStatisticsResponse QueryCustomerEventDetailStatistics(Models\QueryCustomerEventDetailStatisticsRequest $req) 通过接口拉取SaaS内C端外部联系人在指定时间范围内的行为事件明细。此接口提供的数据以天为维度，查询的时间范围为[start_time,end_time]，即前后均为闭区间，支持的最大查询跨度为365天。
 * @method Models\QueryDealerInfoListResponse QueryDealerInfoList(Models\QueryDealerInfoListRequest $req) 企业可通过此接口获取录入在企微SaaS平台上的经销商信息。
 * @method Models\QueryExternalContactDetailResponse QueryExternalContactDetail(Models\QueryExternalContactDetailRequest $req) 企业可通过此接口，根据外部联系人的userid，拉取外部联系人详情
 * @method Models\QueryExternalContactListResponse QueryExternalContactList(Models\QueryExternalContactListRequest $req) 企业可通过此接口基于外部联系人获取指定成员添加的客户列表。客户是指配置了客户联系功能的成员所添加的外部联系人。没有配置客户联系功能的成员，所添加的外部联系人将不会作为客户返回。
 * @method Models\QueryExternalUserEventListResponse QueryExternalUserEventList(Models\QueryExternalUserEventListRequest $req) 通过接口拉取租户在指定时间范围内的外部联系人添加/删除明细，此接口提供的数据以天为维度，查询的时间范围为[StarTime, EndTime]，即前后均为闭区间，支持的最大查询跨度为365天；
 * @method Models\QueryExternalUserMappingInfoResponse QueryExternalUserMappingInfo(Models\QueryExternalUserMappingInfoRequest $req) 企业可通过此接口将企业主体对应的外部联系人id转换为乐销车应用主体对应的外部联系人。
 * @method Models\QueryLicenseInfoResponse QueryLicenseInfo(Models\QueryLicenseInfoRequest $req) 该接口获取license对应的详细信息
 * @method Models\QueryMaterialListResponse QueryMaterialList(Models\QueryMaterialListRequest $req) 通过接口按类型拉取租户当前的素材列表及关键信息
 * @method Models\QueryMiniAppCodeListResponse QueryMiniAppCodeList(Models\QueryMiniAppCodeListRequest $req) 查询小程序码列表接口
 * @method Models\QueryStaffEventDetailStatisticsResponse QueryStaffEventDetailStatistics(Models\QueryStaffEventDetailStatisticsRequest $req) 通过接口拉取SaaS内企业成员在指定时间范围内的行为事件明细。此接口提供的数据以天为维度，查询的时间范围为[start_time,end_time]，即前后均为闭区间，支持的最大查询跨度为365天。
 * @method Models\QueryUserInfoListResponse QueryUserInfoList(Models\QueryUserInfoListRequest $req) 查询企业成员信息列表接口
 * @method Models\QueryVehicleInfoListResponse QueryVehicleInfoList(Models\QueryVehicleInfoListRequest $req) 企业可通过此接口获取企微SaaS平台上的车系车型信息。
 */

class WavClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "wav.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "wav";

    /**
     * @var string
     */
    protected $version = "2021-01-29";

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
        $respClass = "TencentCloud"."\\".ucfirst("wav")."\\"."V20210129\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
