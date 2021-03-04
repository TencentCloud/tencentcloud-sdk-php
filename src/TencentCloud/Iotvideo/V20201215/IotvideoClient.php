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

namespace TencentCloud\Iotvideo\V20201215;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Iotvideo\V20201215\Models as Models;

/**
 * @method Models\CheckForwardAuthResponse CheckForwardAuth(Models\CheckForwardAuthRequest $req) 判断是否开启的转发的权限
 * @method Models\CreateBatchResponse CreateBatch(Models\CreateBatchRequest $req) 创建批次
 * @method Models\CreateForwardRuleResponse CreateForwardRule(Models\CreateForwardRuleRequest $req) 创建转发规则
 * @method Models\CreateProductResponse CreateProduct(Models\CreateProductRequest $req) 创建产品
 * @method Models\DeleteDeviceResponse DeleteDevice(Models\DeleteDeviceRequest $req) 删除设备
 * @method Models\DeleteForwardRuleResponse DeleteForwardRule(Models\DeleteForwardRuleRequest $req) 删除转发规则
 * @method Models\DeleteProductResponse DeleteProduct(Models\DeleteProductRequest $req) 删除产品
 * @method Models\DescribeBatchResponse DescribeBatch(Models\DescribeBatchRequest $req) 获取批次详情
 * @method Models\DescribeBatchsResponse DescribeBatchs(Models\DescribeBatchsRequest $req) 获取批次列表
 * @method Models\DescribeCategoryResponse DescribeCategory(Models\DescribeCategoryRequest $req) 获取Category详情
 * @method Models\DescribeDeviceResponse DescribeDevice(Models\DescribeDeviceRequest $req) 查看设备详情
 * @method Models\DescribeDeviceActionHistoryResponse DescribeDeviceActionHistory(Models\DescribeDeviceActionHistoryRequest $req) 为用户提供获取动作历史的能力。
 * @method Models\DescribeDeviceCommLogResponse DescribeDeviceCommLog(Models\DescribeDeviceCommLogRequest $req) 获取设备在指定时间范围内的通讯日志
 * @method Models\DescribeDeviceDataResponse DescribeDeviceData(Models\DescribeDeviceDataRequest $req) 获取设备属性数据
 * @method Models\DescribeDeviceDataHistoryResponse DescribeDeviceDataHistory(Models\DescribeDeviceDataHistoryRequest $req) 获取设备在指定时间范围内上报的历史数据。
 * @method Models\DescribeDeviceEventHistoryResponse DescribeDeviceEventHistory(Models\DescribeDeviceEventHistoryRequest $req) 获取设备的历史事件
 * @method Models\DescribeDevicesResponse DescribeDevices(Models\DescribeDevicesRequest $req) 获取设备列表
 * @method Models\DescribeForwardRuleResponse DescribeForwardRule(Models\DescribeForwardRuleRequest $req) 获取产品转发规则
 * @method Models\DescribeModelDefinitionResponse DescribeModelDefinition(Models\DescribeModelDefinitionRequest $req) 查询产品配置的数据模板信息
 * @method Models\DescribeProductResponse DescribeProduct(Models\DescribeProductRequest $req) 获取产品详情
 * @method Models\DescribeProductsResponse DescribeProducts(Models\DescribeProductsRequest $req) 获取产品列表
 * @method Models\ImportModelDefinitionResponse ImportModelDefinition(Models\ImportModelDefinitionRequest $req) 导入其它产品的数据模板，覆盖现有数据模板的物模型和产品分类信息
 * @method Models\ModifyDeviceResponse ModifyDevice(Models\ModifyDeviceRequest $req) 修改设备信息
 * @method Models\ModifyForwardRuleResponse ModifyForwardRule(Models\ModifyForwardRuleRequest $req) 修改转发规则
 * @method Models\ModifyModelDefinitionResponse ModifyModelDefinition(Models\ModifyModelDefinitionRequest $req) 提供修改产品的数据模板的能力
 * @method Models\ModifyProductResponse ModifyProduct(Models\ModifyProductRequest $req) 修改产品信息
 * @method Models\SetForwardAuthResponse SetForwardAuth(Models\SetForwardAuthRequest $req) 设置转发权限
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
    protected $version = "2020-12-15";

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
        $respClass = "TencentCloud"."\\".ucfirst("iotvideo")."\\"."V20201215\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
