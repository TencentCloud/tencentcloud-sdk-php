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

namespace TencentCloud\Tccatalog\V20241024;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tccatalog\V20241024\Models as Models;

/**
 * @method Models\AcceptTccVpcEndPointConnectResponse AcceptTccVpcEndPointConnect(Models\AcceptTccVpcEndPointConnectRequest $req) 接受终端节点连接
 * @method Models\BindTccVpcEndPointServiceWhiteListResponse BindTccVpcEndPointServiceWhiteList(Models\BindTccVpcEndPointServiceWhiteListRequest $req) 绑定终端节点服务白名单用户
 * @method Models\DescribeTccCatalogResponse DescribeTccCatalog(Models\DescribeTccCatalogRequest $req) 获取Tcc数据目录详情
 * @method Models\DescribeTccCatalogsResponse DescribeTccCatalogs(Models\DescribeTccCatalogsRequest $req) 获取Tcc数据目录列表
 */

class TccatalogClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tccatalog.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tccatalog";

    /**
     * @var string
     */
    protected $version = "2024-10-24";

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
        $respClass = "TencentCloud"."\\".ucfirst("tccatalog")."\\"."V20241024\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
