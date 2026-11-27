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

namespace TencentCloud\Antiddos\V20250903;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Antiddos\V20250903\Models as Models;

/**
 * @method Models\CreateProtectionResponse CreateProtection(Models\CreateProtectionRequest $req) <p>创建 DDoS 高防服务防护实例。</p>
<p>防护实例是高防服务下承载防护策略与防护资源的基本单元。创建后，您可以在实例中配置防护策略，并绑定需要防护的云资源。</p>
<p><strong>前提条件：</strong>当前腾讯云主账号已订阅 DDoS 高防套餐，具体操作请参见 <a href="https://cloud.tencent.com/document/product/297/137989">购买指引</a>。</p>
 * @method Models\DeleteProtectionResponse DeleteProtection(Models\DeleteProtectionRequest $req) <p>删除防护实例。</p>
<p>删除后，该实例及其绑定的防护策略将不再生效。请确保实例中没有正在使用的防护资源，或已提前将防护资源换绑至其他实例。</p>
 * @method Models\DescribeDDoSBlockRecordsResponse DescribeDDoSBlockRecords(Models\DescribeDDoSBlockRecordsRequest $req) 查询封堵解封记录和解封配额信息。
 * @method Models\DescribeDDoSProtectionPolicyResponse DescribeDDoSProtectionPolicy(Models\DescribeDDoSProtectionPolicyRequest $req) <p>按防护实例 ID 查询该实例下的 L3/4 DDoS 防护策略详情。</p>
 * @method Models\DescribeProtectionResourcesResponse DescribeProtectionResources(Models\DescribeProtectionResourcesRequest $req) <p>按防护实例 ID 查询该实例下绑定的防护资源，支持分页与按资源类型过滤。</p>
 * @method Models\DescribeProtectionsResponse DescribeProtections(Models\DescribeProtectionsRequest $req) <p>按过滤条件查询当前账号下有权限访问的 DDoS 高防服务防护实例，支持分页返回。</p>
 * @method Models\DescribeResourceProtectionsResponse DescribeResourceProtections(Models\DescribeResourceProtectionsRequest $req) <p>按资源六段式查询云资源当前绑定的 DDoS 高防服务防护实例。</p>
 * @method Models\ModifyDDoSProtectionPolicyResponse ModifyDDoSProtectionPolicy(Models\ModifyDDoSProtectionPolicyRequest $req) <p>按防护实例 ID 修改该实例下的 L3/4 DDoS 防护策略。</p>
 * @method Models\ModifyProtectionResponse ModifyProtection(Models\ModifyProtectionRequest $req) 修改防护实例。支持修改防护实例的名称。
 * @method Models\ModifyProtectionResourceResponse ModifyProtectionResource(Models\ModifyProtectionResourceRequest $req) <p>修改防护实例的防护资源。</p>
<p>向防护实例中添加、替换或移除防护对象（即绑定到该实例进行防护的云资源）。</p>
 * @method Models\UnblockResourcesResponse UnblockResources(Models\UnblockResourcesRequest $req) 申请解封资源，可通过 DescribeDDoSBlockRecords 接口获取资源的封堵解封状态。
 */

class AntiddosClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "antiddos.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "antiddos";

    /**
     * @var string
     */
    protected $version = "2025-09-03";

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
        $respClass = "TencentCloud"."\\".ucfirst("antiddos")."\\"."V20250903\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
