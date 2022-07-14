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

namespace TencentCloud\Iotvideo\V20211125;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Iotvideo\V20211125\Models as Models;

/**
 * @method Models\CallDeviceActionAsyncResponse CallDeviceActionAsync(Models\CallDeviceActionAsyncRequest $req) 异步调用设备行为
 * @method Models\CallDeviceActionSyncResponse CallDeviceActionSync(Models\CallDeviceActionSyncRequest $req) 同步调用设备行为
 * @method Models\CreateProductResponse CreateProduct(Models\CreateProductRequest $req) 创建产品
 * @method Models\DescribeDeviceDataStatsResponse DescribeDeviceDataStats(Models\DescribeDeviceDataStatsRequest $req) 查询设备数据统计
 * @method Models\DescribeMessageDataStatsResponse DescribeMessageDataStats(Models\DescribeMessageDataStatsRequest $req) 查询设备消息数量统计
 * @method Models\GenSingleDeviceSignatureOfPublicResponse GenSingleDeviceSignatureOfPublic(Models\GenSingleDeviceSignatureOfPublicRequest $req) 获取设备的绑定签名
 */

class IotvideoClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "iotvideo.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "iotvideo";

    /**
     * @var string
     */
    protected $version = "2021-11-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("iotvideo")."\\"."V20211125\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}