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
 * @method Models\CreateCustomerResponse CreateCustomer(Models\CreateCustomerRequest $req) 创建企业
 * @method Models\CreateEnterpriseResponse CreateEnterprise(Models\CreateEnterpriseRequest $req) 添加企业架构数据
 * @method Models\CreateJobRecordResponse CreateJobRecord(Models\CreateJobRecordRequest $req) 启动测绘
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
 * @method Models\DescribeSensitiveInfosResponse DescribeSensitiveInfos(Models\DescribeSensitiveInfosRequest $req) 查看敏感信息泄露数据
 * @method Models\DescribeSubDomainsResponse DescribeSubDomains(Models\DescribeSubDomainsRequest $req) 查看子域名数据
 * @method Models\DescribeSuspiciousAssetsResponse DescribeSuspiciousAssets(Models\DescribeSuspiciousAssetsRequest $req) 查看影子资产
 * @method Models\DescribeVulsResponse DescribeVuls(Models\DescribeVulsRequest $req) 查看漏洞数据
 * @method Models\DescribeWeakPasswordsResponse DescribeWeakPasswords(Models\DescribeWeakPasswordsRequest $req) 查看弱口令数据
 * @method Models\DescribeWechatAppletsResponse DescribeWechatApplets(Models\DescribeWechatAppletsRequest $req) 查看微信小程序
 * @method Models\DescribeWechatOfficialAccountsResponse DescribeWechatOfficialAccounts(Models\DescribeWechatOfficialAccountsRequest $req) 查看公众号数据
 * @method Models\ModifyCustomerResponse ModifyCustomer(Models\ModifyCustomerRequest $req) 编辑企业
 * @method Models\ModifyLabelResponse ModifyLabel(Models\ModifyLabelRequest $req) 修改标签
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
