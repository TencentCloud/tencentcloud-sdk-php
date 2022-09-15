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

namespace TencentCloud\Bsca\V20210811;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Bsca\V20210811\Models as Models;

/**
 * @method Models\DescribeKBComponentResponse DescribeKBComponent(Models\DescribeKBComponentRequest $req) 本接口(DescribeKBComponent)用于在知识库中查询开源组件信息。本接口根据用户输入的PURL在知识库中寻找对应的开源组件，其中Name为必填字段。
 * @method Models\DescribeKBComponentVulnerabilityResponse DescribeKBComponentVulnerability(Models\DescribeKBComponentVulnerabilityRequest $req) 本接口(DescribeKBComponentVulnerability)用于在知识库中查询开源组件的漏洞信息。
 * @method Models\DescribeKBLicenseResponse DescribeKBLicense(Models\DescribeKBLicenseRequest $req) 本接口(DescribeKBLicense)用于在知识库中查询许可证信息。
 * @method Models\DescribeKBVulnerabilityResponse DescribeKBVulnerability(Models\DescribeKBVulnerabilityRequest $req) 本接口(DescribeKBVulnerability)用于在知识库中查询漏洞详细信息，支持根据CVE ID查询或者根据Vul ID查询。
 * @method Models\MatchKBPURLListResponse MatchKBPURLList(Models\MatchKBPURLListRequest $req) 本接口(MatchKBPURLList)用于在知识库中匹配与特征对应的开源组件列表。
 */

class BscaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "bsca.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "bsca";

    /**
     * @var string
     */
    protected $version = "2021-08-11";

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
        $respClass = "TencentCloud"."\\".ucfirst("bsca")."\\"."V20210811\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
