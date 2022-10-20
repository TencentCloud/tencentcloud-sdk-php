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

namespace TencentCloud\Bma\V20210624;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Bma\V20210624\Models as Models;

/**
 * @method Models\CreateBPFakeURLResponse CreateBPFakeURL(Models\CreateBPFakeURLRequest $req) 添加仿冒链接（举报）
 * @method Models\CreateBPFalseTicketResponse CreateBPFalseTicket(Models\CreateBPFalseTicketRequest $req) 添加误报工单
 * @method Models\CreateBPOfflineAttachmentResponse CreateBPOfflineAttachment(Models\CreateBPOfflineAttachmentRequest $req) 添加下线材料
 * @method Models\CreateBPOfflineTicketResponse CreateBPOfflineTicket(Models\CreateBPOfflineTicketRequest $req) 添加下线工单
 * @method Models\CreateBPProtectURLsResponse CreateBPProtectURLs(Models\CreateBPProtectURLsRequest $req) 添加保护网站
 * @method Models\CreateCRBlockResponse CreateCRBlock(Models\CreateCRBlockRequest $req) 新建协查处置

 * @method Models\CreateCRCompanyVerifyResponse CreateCRCompanyVerify(Models\CreateCRCompanyVerifyRequest $req) 本接口用于企业认证，新接入用户必须认证后才可以进行后续操作（个人认证和企业认证二选一），只需认证一次即可
 * @method Models\CreateCRDesktopCodeResponse CreateCRDesktopCode(Models\CreateCRDesktopCodeRequest $req) 新建过程取证码
 * @method Models\CreateCRObtainResponse CreateCRObtain(Models\CreateCRObtainRequest $req) 版权保护-新建取证接口
 * @method Models\CreateCRRightResponse CreateCRRight(Models\CreateCRRightRequest $req) 版权保护-新建发函接口
 * @method Models\CreateCRRightFileResponse CreateCRRightFile(Models\CreateCRRightFileRequest $req) 权属文件添加
 * @method Models\CreateCRTortResponse CreateCRTort(Models\CreateCRTortRequest $req) 举报侵权链接
 * @method Models\CreateCRUserVerifyResponse CreateCRUserVerify(Models\CreateCRUserVerifyRequest $req) 本接口用于个人认证，新接入用户必须认证后才可以进行后续操作（个人认证和企业认证二选一），只需认证一次即可
 * @method Models\CreateCRWorkResponse CreateCRWork(Models\CreateCRWorkRequest $req) 新建作品
 * @method Models\DescribeBPCompanyInfoResponse DescribeBPCompanyInfo(Models\DescribeBPCompanyInfoRequest $req) 查询企业信息
 * @method Models\DescribeBPFakeURLsResponse DescribeBPFakeURLs(Models\DescribeBPFakeURLsRequest $req) 查询仿冒链接
 * @method Models\DescribeBPProtectURLsResponse DescribeBPProtectURLs(Models\DescribeBPProtectURLsRequest $req) 查询保护网站
 * @method Models\DescribeBPReportFakeURLsResponse DescribeBPReportFakeURLs(Models\DescribeBPReportFakeURLsRequest $req) 查询举报列表
 * @method Models\DescribeCRMonitorDetailResponse DescribeCRMonitorDetail(Models\DescribeCRMonitorDetailRequest $req) 版权保护-查询作品监测详情接口
 * @method Models\DescribeCRMonitorsResponse DescribeCRMonitors(Models\DescribeCRMonitorsRequest $req) 版权保护-查询监测列表接口
 * @method Models\DescribeCRObtainDetailResponse DescribeCRObtainDetail(Models\DescribeCRObtainDetailRequest $req) 查询取证详情
 * @method Models\DescribeCRWorkInfoResponse DescribeCRWorkInfo(Models\DescribeCRWorkInfoRequest $req) 查询作品基本信息
 * @method Models\ModifyBPOfflineAttachmentResponse ModifyBPOfflineAttachment(Models\ModifyBPOfflineAttachmentRequest $req) 修改下线材料
 * @method Models\ModifyCRBlockStatusResponse ModifyCRBlockStatus(Models\ModifyCRBlockStatusRequest $req) 协查处置申请
 * @method Models\ModifyCRMonitorResponse ModifyCRMonitor(Models\ModifyCRMonitorRequest $req) 开启/关闭监测
 * @method Models\ModifyCRObtainStatusResponse ModifyCRObtainStatus(Models\ModifyCRObtainStatusRequest $req) 取证申请
 * @method Models\ModifyCRRightStatusResponse ModifyCRRightStatus(Models\ModifyCRRightStatusRequest $req) 发函申请
 * @method Models\ModifyCRWhiteListResponse ModifyCRWhiteList(Models\ModifyCRWhiteListRequest $req) 修改白名单列表
 * @method Models\UpdateCRWorkResponse UpdateCRWork(Models\UpdateCRWorkRequest $req) 更新作品
 */

class BmaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "bma.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "bma";

    /**
     * @var string
     */
    protected $version = "2021-06-24";

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
        $respClass = "TencentCloud"."\\".ucfirst("bma")."\\"."V20210624\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
