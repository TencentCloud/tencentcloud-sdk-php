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

namespace TencentCloud\Iotcloud\V20210408;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Iotcloud\V20210408\Models as Models;

/**
 * @method Models\CreateDeviceResponse CreateDevice(Models\CreateDeviceRequest $req) 本接口（CreateDevice）用于新建一个物联网通信设备。 
 * @method Models\CreatePrivateCAResponse CreatePrivateCA(Models\CreatePrivateCARequest $req) 创建私有CA证书
 * @method Models\DeleteDeviceResponse DeleteDevice(Models\DeleteDeviceRequest $req) 本接口（DeleteDevice）用于删除物联网通信设备。 
 * @method Models\DeletePrivateCAResponse DeletePrivateCA(Models\DeletePrivateCARequest $req) 删除私有CA证书
 * @method Models\DeleteProductResponse DeleteProduct(Models\DeleteProductRequest $req) 本接口（DeleteProduct）用于删除一个物联网通信产品
 * @method Models\DeleteProductPrivateCAResponse DeleteProductPrivateCA(Models\DeleteProductPrivateCARequest $req) 删除产品的私有CA证书
 * @method Models\DescribeDeviceResponse DescribeDevice(Models\DescribeDeviceRequest $req) 本接口（DescribeDevice）用于查看设备信息
 * @method Models\DescribeDevicesResponse DescribeDevices(Models\DescribeDevicesRequest $req) 本接口（DescribeDevices）用于查询物联网通信设备的设备列表。 
 * @method Models\DescribePrivateCAResponse DescribePrivateCA(Models\DescribePrivateCARequest $req) 查询私有化CA信息
 * @method Models\DescribePrivateCABindedProductsResponse DescribePrivateCABindedProducts(Models\DescribePrivateCABindedProductsRequest $req) 查询私有CA绑定的产品列表
 * @method Models\DescribePrivateCAsResponse DescribePrivateCAs(Models\DescribePrivateCAsRequest $req) 查询私有CA证书列表
 * @method Models\DescribeProductResponse DescribeProduct(Models\DescribeProductRequest $req) 本接口（DescribeProduct）用于查看产品详情
 * @method Models\DescribeProductCAResponse DescribeProductCA(Models\DescribeProductCARequest $req) 查询产品绑定的CA证书
 * @method Models\ListLogResponse ListLog(Models\ListLogRequest $req) 本接口（ListLog）用于查看日志信息 
 * @method Models\ListLogPayloadResponse ListLogPayload(Models\ListLogPayloadRequest $req) 获取日志内容列表
 * @method Models\ListSDKLogResponse ListSDKLog(Models\ListSDKLogRequest $req) 获取设备上报的日志
 * @method Models\PublishBroadcastMessageResponse PublishBroadcastMessage(Models\PublishBroadcastMessageRequest $req) 发布广播消息
 * @method Models\SetProductsForbiddenStatusResponse SetProductsForbiddenStatus(Models\SetProductsForbiddenStatusRequest $req) 批量设置产品禁用状态
 * @method Models\UpdateDeviceLogLevelResponse UpdateDeviceLogLevel(Models\UpdateDeviceLogLevelRequest $req) 设置设备上报的日志级别  
 * @method Models\UpdateDevicePSKResponse UpdateDevicePSK(Models\UpdateDevicePSKRequest $req) 本接口（UpdateDevicePSK）用于更新设备的PSK 
 * @method Models\UpdateDevicesEnableStateResponse UpdateDevicesEnableState(Models\UpdateDevicesEnableStateRequest $req) 批量启用或者禁用设备 
 * @method Models\UpdatePrivateCAResponse UpdatePrivateCA(Models\UpdatePrivateCARequest $req) 更新私有CA证书
 * @method Models\UpdateProductDynamicRegisterResponse UpdateProductDynamicRegister(Models\UpdateProductDynamicRegisterRequest $req) 更新产品动态注册的配置 
 * @method Models\UpdateProductPrivateCAResponse UpdateProductPrivateCA(Models\UpdateProductPrivateCARequest $req) 更新产品的私有CA
 */

class IotcloudClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "iotcloud.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "iotcloud";

    /**
     * @var string
     */
    protected $version = "2021-04-08";

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
        $respClass = "TencentCloud"."\\".ucfirst("iotcloud")."\\"."V20210408\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
