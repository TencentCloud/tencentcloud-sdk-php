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
 * @method Models\BatchUpdateFirmwareResponse BatchUpdateFirmware(Models\BatchUpdateFirmwareRequest $req) 本接口（BatchUpdateFirmware）用于批量更新设备固件 
 * @method Models\BindDevicesResponse BindDevices(Models\BindDevicesRequest $req) 本接口（BindDevices）用于网关设备批量绑定子设备 
 * @method Models\CancelDeviceFirmwareTaskResponse CancelDeviceFirmwareTask(Models\CancelDeviceFirmwareTaskRequest $req) 取消设备升级任务
 * @method Models\CreateDeviceResponse CreateDevice(Models\CreateDeviceRequest $req) 本接口（CreateDevice）用于新建一个物联网通信设备。 
 * @method Models\CreateMultiDevicesTaskResponse CreateMultiDevicesTask(Models\CreateMultiDevicesTaskRequest $req) 本接口（CreateMultiDevicesTask）用于创建产品级别的批量创建设备任务
 * @method Models\CreatePrivateCAResponse CreatePrivateCA(Models\CreatePrivateCARequest $req) 创建私有CA证书
 * @method Models\CreateProductResponse CreateProduct(Models\CreateProductRequest $req) 本接口（CreateProduct）用于创建一个新的物联网通信产品 
 * @method Models\CreateTaskFileUrlResponse CreateTaskFileUrl(Models\CreateTaskFileUrlRequest $req) 本接口（CreateTaskFileUrl）用于获取产品级任务文件上传链接
 * @method Models\CreateTopicPolicyResponse CreateTopicPolicy(Models\CreateTopicPolicyRequest $req) 本接口（CreateTopicPolicy）用于创建一个Topic 
 * @method Models\CreateTopicRuleResponse CreateTopicRule(Models\CreateTopicRuleRequest $req) 本接口（CreateTopicRule）用于创建一个规则 
 * @method Models\DeleteDeviceResponse DeleteDevice(Models\DeleteDeviceRequest $req) 本接口（DeleteDevice）用于删除物联网通信设备。 
 * @method Models\DeleteDeviceResourceResponse DeleteDeviceResource(Models\DeleteDeviceResourceRequest $req) 本接口（DeleteDeviceResource）用于删除设备资源
 * @method Models\DeleteDeviceShadowResponse DeleteDeviceShadow(Models\DeleteDeviceShadowRequest $req) 本接口（DeleteDeviceShadow）用于删除设备影子 
 * @method Models\DeletePrivateCAResponse DeletePrivateCA(Models\DeletePrivateCARequest $req) 删除私有CA证书
 * @method Models\DeleteProductResponse DeleteProduct(Models\DeleteProductRequest $req) 本接口（DeleteProduct）用于删除一个物联网通信产品
 * @method Models\DeleteProductPrivateCAResponse DeleteProductPrivateCA(Models\DeleteProductPrivateCARequest $req) 删除产品的私有CA证书
 * @method Models\DeleteTopicRuleResponse DeleteTopicRule(Models\DeleteTopicRuleRequest $req) 本接口（DeleteTopicRule）用于删除规则
 * @method Models\DescribeDeviceResponse DescribeDevice(Models\DescribeDeviceRequest $req) 本接口（DescribeDevice）用于查看设备信息
 * @method Models\DescribeDeviceClientKeyResponse DescribeDeviceClientKey(Models\DescribeDeviceClientKeyRequest $req) 获取证书认证类型设备的私钥，刚生成或者重置设备后仅可调用一次 
 * @method Models\DescribeDeviceResourceResponse DescribeDeviceResource(Models\DescribeDeviceResourceRequest $req) 本接口（DescribeDeviceResource）用于查询设备资源详情。 
 * @method Models\DescribeDeviceResourcesResponse DescribeDeviceResources(Models\DescribeDeviceResourcesRequest $req) 本接口（DescribeDeviceResources）用于查询设备资源列表。 
 * @method Models\DescribeDeviceShadowResponse DescribeDeviceShadow(Models\DescribeDeviceShadowRequest $req) 本接口（DescribeDeviceShadow）用于查询虚拟设备信息。 
 * @method Models\DescribeDevicesResponse DescribeDevices(Models\DescribeDevicesRequest $req) 本接口（DescribeDevices）用于查询物联网通信设备的设备列表。 
 * @method Models\DescribeFirmwareResponse DescribeFirmware(Models\DescribeFirmwareRequest $req) 查询固件信息
 * @method Models\DescribeFirmwareTaskResponse DescribeFirmwareTask(Models\DescribeFirmwareTaskRequest $req) 查询固件升级任务详情
 * @method Models\DescribeFirmwareTaskDevicesResponse DescribeFirmwareTaskDevices(Models\DescribeFirmwareTaskDevicesRequest $req) 查询固件升级任务的设备列表
 * @method Models\DescribeFirmwareTaskDistributionResponse DescribeFirmwareTaskDistribution(Models\DescribeFirmwareTaskDistributionRequest $req) 查询固件升级任务状态分布
 * @method Models\DescribeFirmwareTaskStatisticsResponse DescribeFirmwareTaskStatistics(Models\DescribeFirmwareTaskStatisticsRequest $req) 查询固件升级任务统计信息
 * @method Models\DescribeFirmwareTasksResponse DescribeFirmwareTasks(Models\DescribeFirmwareTasksRequest $req) 查询固件升级任务列表
 * @method Models\DescribeGatewayBindDevicesResponse DescribeGatewayBindDevices(Models\DescribeGatewayBindDevicesRequest $req) 本接口（DescribeGatewayBindDevices）用于获取网关绑定的子设备列表 
 * @method Models\DescribePrivateCAResponse DescribePrivateCA(Models\DescribePrivateCARequest $req) 查询私有化CA信息
 * @method Models\DescribePrivateCABindedProductsResponse DescribePrivateCABindedProducts(Models\DescribePrivateCABindedProductsRequest $req) 查询私有CA绑定的产品列表
 * @method Models\DescribePrivateCAsResponse DescribePrivateCAs(Models\DescribePrivateCAsRequest $req) 查询私有CA证书列表
 * @method Models\DescribeProductResponse DescribeProduct(Models\DescribeProductRequest $req) 本接口（DescribeProduct）用于查看产品详情
 * @method Models\DescribeProductCAResponse DescribeProductCA(Models\DescribeProductCARequest $req) 查询产品绑定的CA证书
 * @method Models\DescribeProductResourceResponse DescribeProductResource(Models\DescribeProductResourceRequest $req) 本接口（DescribeProductResource）用于查询产品资源详情。 
 * @method Models\DescribeProductResourcesResponse DescribeProductResources(Models\DescribeProductResourcesRequest $req) 本接口（DescribeProductResources）用于查询产品资源列表。 
 * @method Models\DescribeProductTaskResponse DescribeProductTask(Models\DescribeProductTaskRequest $req) 本接口（DescribeProductTask）用于查看产品级别的任务信息
 * @method Models\DescribeProductTasksResponse DescribeProductTasks(Models\DescribeProductTasksRequest $req) 本接口（DescribeProductTasks）用于查看产品级别的任务列表
 * @method Models\DescribeProductsResponse DescribeProducts(Models\DescribeProductsRequest $req) 本接口（DescribeProducts）用于列出产品列表。 
 * @method Models\DescribePushResourceTaskStatisticsResponse DescribePushResourceTaskStatistics(Models\DescribePushResourceTaskStatisticsRequest $req) 查询推送资源任务统计信息
 * @method Models\DescribeResourceTasksResponse DescribeResourceTasks(Models\DescribeResourceTasksRequest $req) 查询资源推送任务列表
 * @method Models\DisableTopicRuleResponse DisableTopicRule(Models\DisableTopicRuleRequest $req) 本接口（DisableTopicRule）用于禁用规则
 * @method Models\DownloadDeviceResourceResponse DownloadDeviceResource(Models\DownloadDeviceResourceRequest $req) 本接口（DownloadDeviceResource）用于下载设备资源
 * @method Models\EditFirmwareResponse EditFirmware(Models\EditFirmwareRequest $req) 编辑固件信息
 * @method Models\EnableTopicRuleResponse EnableTopicRule(Models\EnableTopicRuleRequest $req) 本接口（EnableTopicRule）用于启用规则 
 * @method Models\GetAllVersionResponse GetAllVersion(Models\GetAllVersionRequest $req) 本接口（GetAllVersion）用于获取所有的版本列表 
 * @method Models\GetCOSURLResponse GetCOSURL(Models\GetCOSURLRequest $req) 本接口（GetCOSURL）用于获取固件存储在COS的URL 
 * @method Models\GetUserResourceInfoResponse GetUserResourceInfo(Models\GetUserResourceInfoRequest $req) 本接口（GetUserResourceInfo）用于查询用户资源使用信息。
 * @method Models\ListFirmwaresResponse ListFirmwares(Models\ListFirmwaresRequest $req) 本接口（ListFirmwares）用于获取固件列表 
 * @method Models\ListLogResponse ListLog(Models\ListLogRequest $req) 本接口（ListLog）用于查看日志信息 
 * @method Models\ListLogPayloadResponse ListLogPayload(Models\ListLogPayloadRequest $req) 获取日志内容列表
 * @method Models\ListSDKLogResponse ListSDKLog(Models\ListSDKLogRequest $req) 获取设备上报的日志
 * @method Models\ListTopicRulesResponse ListTopicRules(Models\ListTopicRulesRequest $req) 本接口（ListTopicRules）用于分页获取规则列表
 * @method Models\PublishBroadcastMessageResponse PublishBroadcastMessage(Models\PublishBroadcastMessageRequest $req) 发布广播消息
 * @method Models\PublishMessageResponse PublishMessage(Models\PublishMessageRequest $req) 本接口（PublishMessage）用于向某个主题发消息。 
 * @method Models\PublishRRPCMessageResponse PublishRRPCMessage(Models\PublishRRPCMessageRequest $req) 发布RRPC消息
 * @method Models\ReplaceTopicRuleResponse ReplaceTopicRule(Models\ReplaceTopicRuleRequest $req) 本接口（ReplaceTopicRule）用于修改替换规则 
 * @method Models\ResetDeviceStateResponse ResetDeviceState(Models\ResetDeviceStateRequest $req) 重置设备的连接状态 
 * @method Models\RetryDeviceFirmwareTaskResponse RetryDeviceFirmwareTask(Models\RetryDeviceFirmwareTaskRequest $req) 重试设备升级任务
 * @method Models\SetProductsForbiddenStatusResponse SetProductsForbiddenStatus(Models\SetProductsForbiddenStatusRequest $req) 批量设置产品禁用状态
 * @method Models\UnbindDevicesResponse UnbindDevices(Models\UnbindDevicesRequest $req) 本接口（UnbindDevices）用于网关设备批量解绑子设备 
 * @method Models\UpdateDeviceAvailableStateResponse UpdateDeviceAvailableState(Models\UpdateDeviceAvailableStateRequest $req) 启用或者禁用设备 
 * @method Models\UpdateDeviceLogLevelResponse UpdateDeviceLogLevel(Models\UpdateDeviceLogLevelRequest $req) 设置设备上报的日志级别  
 * @method Models\UpdateDevicePSKResponse UpdateDevicePSK(Models\UpdateDevicePSKRequest $req) 本接口（UpdateDevicePSK）用于更新设备的PSK 
 * @method Models\UpdateDeviceShadowResponse UpdateDeviceShadow(Models\UpdateDeviceShadowRequest $req) 本接口（UpdateDeviceShadow）用于更新虚拟设备信息。
 * @method Models\UpdateDevicesEnableStateResponse UpdateDevicesEnableState(Models\UpdateDevicesEnableStateRequest $req) 批量启用或者禁用设备 
 * @method Models\UpdatePrivateCAResponse UpdatePrivateCA(Models\UpdatePrivateCARequest $req) 更新私有CA证书
 * @method Models\UpdateProductDynamicRegisterResponse UpdateProductDynamicRegister(Models\UpdateProductDynamicRegisterRequest $req) 更新产品动态注册的配置 
 * @method Models\UpdateProductPrivateCAResponse UpdateProductPrivateCA(Models\UpdateProductPrivateCARequest $req) 更新产品的私有CA
 * @method Models\UpdateTopicPolicyResponse UpdateTopicPolicy(Models\UpdateTopicPolicyRequest $req) 本接口（UpdateTopicPolicy）用于更新Topic信息
 * @method Models\UploadFirmwareResponse UploadFirmware(Models\UploadFirmwareRequest $req) 本接口（UploadFirmware）用于上传设备固件信息 
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
