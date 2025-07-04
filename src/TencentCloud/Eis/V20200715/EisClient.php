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

namespace TencentCloud\Eis\V20200715;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Eis\V20200715\Models as Models;

/**
 * @method Models\DescribeEisConnectorConfigResponse DescribeEisConnectorConfig(Models\DescribeEisConnectorConfigRequest $req) 获取连接器配置参数
 * @method Models\ListEisConnectorOperationsResponse ListEisConnectorOperations(Models\ListEisConnectorOperationsRequest $req) 获取连接器操作列表
 * @method Models\ListEisConnectorsResponse ListEisConnectors(Models\ListEisConnectorsRequest $req) 连接器列表
 */

class EisClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "eis.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "eis";

    /**
     * @var string
     */
    protected $version = "2020-07-15";

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
        $respClass = "TencentCloud"."\\".ucfirst("eis")."\\"."V20200715\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
