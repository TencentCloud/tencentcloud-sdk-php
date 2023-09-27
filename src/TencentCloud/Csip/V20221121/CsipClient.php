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

namespace TencentCloud\Csip\V20221121;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Csip\V20221121\Models as Models;

/**
 * @method Models\AddNewBindRoleUserResponse AddNewBindRoleUser(Models\AddNewBindRoleUserRequest $req) csip角色授权绑定接口
 * @method Models\CreateDomainAndIpResponse CreateDomainAndIp(Models\CreateDomainAndIpRequest $req) 创建域名、ip相关信息
 * @method Models\CreateRiskCenterScanTaskResponse CreateRiskCenterScanTask(Models\CreateRiskCenterScanTaskRequest $req) 创建风险中心扫描任务
 * @method Models\DeleteDomainAndIpResponse DeleteDomainAndIp(Models\DeleteDomainAndIpRequest $req) 删除域名和ip请求
 * @method Models\DeleteRiskScanTaskResponse DeleteRiskScanTask(Models\DeleteRiskScanTaskRequest $req) 删除风险中心扫描任务
 * @method Models\DescribeCVMAssetInfoResponse DescribeCVMAssetInfo(Models\DescribeCVMAssetInfoRequest $req) cvm详情
 * @method Models\DescribeCVMAssetsResponse DescribeCVMAssets(Models\DescribeCVMAssetsRequest $req) cvm列表
 * @method Models\DescribeClusterPodAssetsResponse DescribeClusterPodAssets(Models\DescribeClusterPodAssetsRequest $req) 集群pod列表
 * @method Models\DescribeDbAssetInfoResponse DescribeDbAssetInfo(Models\DescribeDbAssetInfoRequest $req) db资产详情
 * @method Models\DescribeDbAssetsResponse DescribeDbAssets(Models\DescribeDbAssetsRequest $req) 数据库资产列表
 * @method Models\DescribeDomainAssetsResponse DescribeDomainAssets(Models\DescribeDomainAssetsRequest $req) 域名列表
 * @method Models\DescribeListenerListResponse DescribeListenerList(Models\DescribeListenerListRequest $req) 查询clb监听器列表
 * @method Models\DescribePublicIpAssetsResponse DescribePublicIpAssets(Models\DescribePublicIpAssetsRequest $req) ip公网列表
 * @method Models\DescribeRiskCenterAssetViewCFGRiskListResponse DescribeRiskCenterAssetViewCFGRiskList(Models\DescribeRiskCenterAssetViewCFGRiskListRequest $req) 获取资产视角的配置风险列表
 * @method Models\DescribeRiskCenterAssetViewPortRiskListResponse DescribeRiskCenterAssetViewPortRiskList(Models\DescribeRiskCenterAssetViewPortRiskListRequest $req) 获取资产视角的端口风险列表
 * @method Models\DescribeRiskCenterAssetViewVULRiskListResponse DescribeRiskCenterAssetViewVULRiskList(Models\DescribeRiskCenterAssetViewVULRiskListRequest $req) 获取资产视角的漏洞风险列表
 * @method Models\DescribeRiskCenterAssetViewWeakPasswordRiskListResponse DescribeRiskCenterAssetViewWeakPasswordRiskList(Models\DescribeRiskCenterAssetViewWeakPasswordRiskListRequest $req) 获取资产视角的弱口令风险列表
 * @method Models\DescribeRiskCenterServerRiskListResponse DescribeRiskCenterServerRiskList(Models\DescribeRiskCenterServerRiskListRequest $req) 获取风险服务列表
 * @method Models\DescribeRiskCenterWebsiteRiskListResponse DescribeRiskCenterWebsiteRiskList(Models\DescribeRiskCenterWebsiteRiskListRequest $req) 获取网站风险列表
 * @method Models\DescribeScanReportListResponse DescribeScanReportList(Models\DescribeScanReportListRequest $req) 获取扫描报告列表
 * @method Models\DescribeScanTaskListResponse DescribeScanTaskList(Models\DescribeScanTaskListRequest $req) 获取扫描任务列表
 * @method Models\DescribeSearchBugInfoResponse DescribeSearchBugInfo(Models\DescribeSearchBugInfoRequest $req) 立体防护中心查询漏洞信息
 * @method Models\DescribeSubnetAssetsResponse DescribeSubnetAssets(Models\DescribeSubnetAssetsRequest $req) 获取子网列表
 * @method Models\DescribeTaskLogListResponse DescribeTaskLogList(Models\DescribeTaskLogListRequest $req) 获取任务扫描报告列表
 * @method Models\DescribeTaskLogURLResponse DescribeTaskLogURL(Models\DescribeTaskLogURLRequest $req) 获取报告下载的临时链接
 * @method Models\DescribeVpcAssetsResponse DescribeVpcAssets(Models\DescribeVpcAssetsRequest $req) 获取vpc列表
 * @method Models\StopRiskCenterTaskResponse StopRiskCenterTask(Models\StopRiskCenterTaskRequest $req) 停止扫风险中心扫描任务
 */

class CsipClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "csip.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "csip";

    /**
     * @var string
     */
    protected $version = "2022-11-21";

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
        $respClass = "TencentCloud"."\\".ucfirst("csip")."\\"."V20221121\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
