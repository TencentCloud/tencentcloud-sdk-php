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

namespace TencentCloud\Essbasic\V20210526;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Essbasic\V20210526\Models as Models;

/**
 * @method Models\CreateConsoleLoginUrlResponse CreateConsoleLoginUrl(Models\CreateConsoleLoginUrlRequest $req) 此接口（CreateConsoleLoginUrl）用于创建电子签控制台登录链接。若企业未激活，调用同步企业信息、同步经办人信息

 * @method Models\CreateFlowsByTemplatesResponse CreateFlowsByTemplates(Models\CreateFlowsByTemplatesRequest $req) 接口（CreateFlowsByTemplates）用于使用多个模板批量创建流程
 * @method Models\CreateSignUrlsResponse CreateSignUrls(Models\CreateSignUrlsRequest $req) 根据流程Id批量创建签署参与者签署H5链接
 * @method Models\DescribeResourceUrlsByFlowsResponse DescribeResourceUrlsByFlows(Models\DescribeResourceUrlsByFlowsRequest $req) 根据流程信息批量获取资源下载链接
 * @method Models\DescribeTemplatesResponse DescribeTemplates(Models\DescribeTemplatesRequest $req) 通过此接口（DescribeTemplates）查询该企业在电子签渠道版中配置的有效模板列表
 * @method Models\DescribeUsageResponse DescribeUsage(Models\DescribeUsageRequest $req) 此接口（DescribeUsage）用于获取渠道所有合作企业流量消耗情况。
 注: 此接口每日限频2次，若要扩大限制次数,请提前与客服经理或邮件至e-contract@tencent.com进行联系。
 * @method Models\PrepareFlowsResponse PrepareFlows(Models\PrepareFlowsRequest $req) 该接口 (PrepareFlows) 用于创建待发起文件
 * @method Models\SyncProxyOrganizationResponse SyncProxyOrganization(Models\SyncProxyOrganizationRequest $req) 此接口（SyncProxyOrganization）用于同步渠道侧企业信息
 * @method Models\SyncProxyOrganizationOperatorsResponse SyncProxyOrganizationOperators(Models\SyncProxyOrganizationOperatorsRequest $req) 此接口（SyncProxyOrganizationOperators）用于同步渠道合作企业经办人列表
 */

class EssbasicClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "essbasic.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "essbasic";

    /**
     * @var string
     */
    protected $version = "2021-05-26";

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
        $respClass = "TencentCloud"."\\".ucfirst("essbasic")."\\"."V20210526\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
