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

namespace TencentCloud\Ctem\V20231128;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ctem\V20231128\Models as Models;

/**
 * @method Models\CreateAppResponse CreateApp(Models\CreateAppRequest $req) 添加APP资产
 * @method Models\CreateAssetResponse CreateAsset(Models\CreateAssetRequest $req) 添加主机资产
 * @method Models\CreateCustomerResponse CreateCustomer(Models\CreateCustomerRequest $req) 创建企业
 * @method Models\CreateDomainResponse CreateDomain(Models\CreateDomainRequest $req) 添加主域名数据
 * @method Models\CreateEnterpriseResponse CreateEnterprise(Models\CreateEnterpriseRequest $req) 添加企业架构资产
 * @method Models\CreateHttpResponse CreateHttp(Models\CreateHttpRequest $req) 添加网站资产
 * @method Models\CreateJobRecordResponse CreateJobRecord(Models\CreateJobRecordRequest $req) 启动测绘
 * @method Models\CreateManageResponse CreateManage(Models\CreateManageRequest $req) 添加后台数据
 * @method Models\CreatePortResponse CreatePort(Models\CreatePortRequest $req) 添加端口服务资产
 * @method Models\CreateSeedsResponse CreateSeeds(Models\CreateSeedsRequest $req) 创建种子
 * @method Models\CreateSubDomainResponse CreateSubDomain(Models\CreateSubDomainRequest $req) 添加子域名数据
 * @method Models\CreateSuspiciousAssetResponse CreateSuspiciousAsset(Models\CreateSuspiciousAssetRequest $req) 添加影子资产
 * @method Models\CreateWechatAppletResponse CreateWechatApplet(Models\CreateWechatAppletRequest $req) 添加微信小程序资产
 * @method Models\CreateWechatOfficialAccountResponse CreateWechatOfficialAccount(Models\CreateWechatOfficialAccountRequest $req) 添加微信公众号资产
 * @method Models\DeleteAppsResponse DeleteApps(Models\DeleteAppsRequest $req) 删除APP数据
 * @method Models\DeleteAssetsResponse DeleteAssets(Models\DeleteAssetsRequest $req) 删除主机资产数据
 * @method Models\DeleteDomainsResponse DeleteDomains(Models\DeleteDomainsRequest $req) 删除主域名数据
 * @method Models\DeleteEnterprisesResponse DeleteEnterprises(Models\DeleteEnterprisesRequest $req) 删除企业架构数据
 * @method Models\DeleteHttpsResponse DeleteHttps(Models\DeleteHttpsRequest $req) 删除网站资产数据
 * @method Models\DeleteManagesResponse DeleteManages(Models\DeleteManagesRequest $req) 删除后台数据
 * @method Models\DeletePortsResponse DeletePorts(Models\DeletePortsRequest $req) 删除端口数据
 * @method Models\DeleteSeedsResponse DeleteSeeds(Models\DeleteSeedsRequest $req) 删除种子
 * @method Models\DeleteSubDomainsResponse DeleteSubDomains(Models\DeleteSubDomainsRequest $req) 删除子域名数据
 * @method Models\DeleteSuspiciousAssetsResponse DeleteSuspiciousAssets(Models\DeleteSuspiciousAssetsRequest $req) 删除影子资产数据
 * @method Models\DeleteWechatAppletsResponse DeleteWechatApplets(Models\DeleteWechatAppletsRequest $req) 删除微信小程序数据
 * @method Models\DeleteWechatOfficialAccountsResponse DeleteWechatOfficialAccounts(Models\DeleteWechatOfficialAccountsRequest $req) 删除微信公众号数据
 * @method Models\DescribeApiSecsResponse DescribeApiSecs(Models\DescribeApiSecsRequest $req) 查看API安全数据
 * @method Models\DescribeAppsResponse DescribeApps(Models\DescribeAppsRequest $req) 查看移动端资产
 * @method Models\DescribeAssetsResponse DescribeAssets(Models\DescribeAssetsRequest $req) 查看主机资产
 * @method Models\DescribeConfigsResponse DescribeConfigs(Models\DescribeConfigsRequest $req) 查看目录爆破数据
 * @method Models\DescribeCustomersResponse DescribeCustomers(Models\DescribeCustomersRequest $req) 查看企业列表
 * @method Models\DescribeDarkWebsResponse DescribeDarkWebs(Models\DescribeDarkWebsRequest $req) 查看暗网数据
 * @method Models\DescribeDomainsResponse DescribeDomains(Models\DescribeDomainsRequest $req) 查看主域名数据
 * @method Models\DescribeEnterprisesResponse DescribeEnterprises(Models\DescribeEnterprisesRequest $req) 查看企业架构数据
 * @method Models\DescribeFakeAppsResponse DescribeFakeApps(Models\DescribeFakeAppsRequest $req) 查询仿冒应用
 * @method Models\DescribeFakeMiniProgramsResponse DescribeFakeMiniPrograms(Models\DescribeFakeMiniProgramsRequest $req) 查询仿冒小程序
 * @method Models\DescribeFakeWebsitesResponse DescribeFakeWebsites(Models\DescribeFakeWebsitesRequest $req) 查询仿冒网站
 * @method Models\DescribeFakeWechatOfficialsResponse DescribeFakeWechatOfficials(Models\DescribeFakeWechatOfficialsRequest $req) 查询仿冒公众号
 * @method Models\DescribeGithubsResponse DescribeGithubs(Models\DescribeGithubsRequest $req) 查看Github泄露数据
 * @method Models\DescribeHttpsResponse DescribeHttps(Models\DescribeHttpsRequest $req) 查看http数据
 * @method Models\DescribeJobRecordDetailsResponse DescribeJobRecordDetails(Models\DescribeJobRecordDetailsRequest $req) 查看链路详情
 * @method Models\DescribeJobRecordsResponse DescribeJobRecords(Models\DescribeJobRecordsRequest $req) 查看任务运行记录列表
 * @method Models\DescribeLeakageCodesResponse DescribeLeakageCodes(Models\DescribeLeakageCodesRequest $req) 获取代码泄露数据
 * @method Models\DescribeLeakageDatasResponse DescribeLeakageDatas(Models\DescribeLeakageDatasRequest $req) 获取数据泄露事件
 * @method Models\DescribeLeakageEmailsResponse DescribeLeakageEmails(Models\DescribeLeakageEmailsRequest $req) 获取邮箱泄露数据
 * @method Models\DescribeManagesResponse DescribeManages(Models\DescribeManagesRequest $req) 查看后台管理数据
 * @method Models\DescribeNetDisksResponse DescribeNetDisks(Models\DescribeNetDisksRequest $req) 查看网盘泄露数据
 * @method Models\DescribePortsResponse DescribePorts(Models\DescribePortsRequest $req) 查看端口数据
 * @method Models\DescribeSeedsResponse DescribeSeeds(Models\DescribeSeedsRequest $req) 查看种子列表
 * @method Models\DescribeSensitiveInfosResponse DescribeSensitiveInfos(Models\DescribeSensitiveInfosRequest $req) 查看敏感信息泄露数据
 * @method Models\DescribeSubDomainsResponse DescribeSubDomains(Models\DescribeSubDomainsRequest $req) 查看子域名数据
 * @method Models\DescribeSuspiciousAssetsResponse DescribeSuspiciousAssets(Models\DescribeSuspiciousAssetsRequest $req) 查看影子资产
 * @method Models\DescribeVulsResponse DescribeVuls(Models\DescribeVulsRequest $req) 查看漏洞数据
 * @method Models\DescribeWeakPasswordsResponse DescribeWeakPasswords(Models\DescribeWeakPasswordsRequest $req) 查看弱口令数据
 * @method Models\DescribeWechatAppletsResponse DescribeWechatApplets(Models\DescribeWechatAppletsRequest $req) 查看微信小程序
 * @method Models\DescribeWechatOfficialAccountsResponse DescribeWechatOfficialAccounts(Models\DescribeWechatOfficialAccountsRequest $req) 查看公众号数据
 * @method Models\IgnoreDataResponse IgnoreData(Models\IgnoreDataRequest $req) 忽略数据
 * @method Models\ModifyCustomerResponse ModifyCustomer(Models\ModifyCustomerRequest $req) 编辑企业
 * @method Models\ModifyLabelResponse ModifyLabel(Models\ModifyLabelRequest $req) 修改标签
 * @method Models\ModifySeedStatusResponse ModifySeedStatus(Models\ModifySeedStatusRequest $req) 修改种子状态
 * @method Models\StopJobRecordResponse StopJobRecord(Models\StopJobRecordRequest $req) 停止扫描
 */

class CtemClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ctem.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ctem";

    /**
     * @var string
     */
    protected $version = "2023-11-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("ctem")."\\"."V20231128\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
