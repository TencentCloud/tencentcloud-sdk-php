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

namespace TencentCloud\Igtm\V20231024;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Igtm\V20231024\Models as Models;

/**
 * @method Models\CreateAddressPoolResponse CreateAddressPool(Models\CreateAddressPoolRequest $req) 创建地址池
 * @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) 创建实例接口，仅供免费实例使用
 * @method Models\CreateMonitorResponse CreateMonitor(Models\CreateMonitorRequest $req) 新增监控器
 * @method Models\CreatePackageAndPayResponse CreatePackageAndPay(Models\CreatePackageAndPayRequest $req) 购买套餐并支付，此接口会在余额扣费，谨慎调用
 * @method Models\CreateStrategyResponse CreateStrategy(Models\CreateStrategyRequest $req) 新建策略接口
 * @method Models\DeleteAddressPoolResponse DeleteAddressPool(Models\DeleteAddressPoolRequest $req) 删除地址池
 * @method Models\DeleteMonitorResponse DeleteMonitor(Models\DeleteMonitorRequest $req) 删除监控器
 * @method Models\DeleteStrategyResponse DeleteStrategy(Models\DeleteStrategyRequest $req) 删除策略接口
 * @method Models\DescribeAddressLocationResponse DescribeAddressLocation(Models\DescribeAddressLocationRequest $req) 获取地址所属地域
 * @method Models\DescribeAddressPoolDetailResponse DescribeAddressPoolDetail(Models\DescribeAddressPoolDetailRequest $req) 地址池详情
 * @method Models\DescribeAddressPoolListResponse DescribeAddressPoolList(Models\DescribeAddressPoolListRequest $req) 地址池列表
 * @method Models\DescribeDetectPackageDetailResponse DescribeDetectPackageDetail(Models\DescribeDetectPackageDetailRequest $req) 探测任务包详情
 * @method Models\DescribeDetectTaskPackageListResponse DescribeDetectTaskPackageList(Models\DescribeDetectTaskPackageListRequest $req) 探测任务套餐列表
 * @method Models\DescribeDetectorsResponse DescribeDetectors(Models\DescribeDetectorsRequest $req) 获取探测节点列表接口
 * @method Models\DescribeDnsLineListResponse DescribeDnsLineList(Models\DescribeDnsLineListRequest $req) 查询分组线路列表接口
 * @method Models\DescribeInstanceDetailResponse DescribeInstanceDetail(Models\DescribeInstanceDetailRequest $req) 实例详情
 * @method Models\DescribeInstanceListResponse DescribeInstanceList(Models\DescribeInstanceListRequest $req) 实例列表
 * @method Models\DescribeInstancePackageListResponse DescribeInstancePackageList(Models\DescribeInstancePackageListRequest $req) 实例套餐列表
 * @method Models\DescribeMonitorDetailResponse DescribeMonitorDetail(Models\DescribeMonitorDetailRequest $req) 查询监控器详情接口
 * @method Models\DescribeMonitorsResponse DescribeMonitors(Models\DescribeMonitorsRequest $req) 获取所有监控器
 * @method Models\DescribeQuotasResponse DescribeQuotas(Models\DescribeQuotasRequest $req) 配额查询
 * @method Models\DescribeStrategyDetailResponse DescribeStrategyDetail(Models\DescribeStrategyDetailRequest $req) 策略详情
 * @method Models\DescribeStrategyListResponse DescribeStrategyList(Models\DescribeStrategyListRequest $req) 策略列表接口
 * @method Models\ModifyAddressPoolResponse ModifyAddressPool(Models\ModifyAddressPoolRequest $req) 修改地址池
 * @method Models\ModifyInstanceConfigResponse ModifyInstanceConfig(Models\ModifyInstanceConfigRequest $req) 修改实例配置
 * @method Models\ModifyMonitorResponse ModifyMonitor(Models\ModifyMonitorRequest $req) 修改监控器
 * @method Models\ModifyPackageAutoRenewResponse ModifyPackageAutoRenew(Models\ModifyPackageAutoRenewRequest $req) 设置自动续费接口
 * @method Models\ModifyStrategyResponse ModifyStrategy(Models\ModifyStrategyRequest $req) 修改策略接口
 */

class IgtmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "igtm.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "igtm";

    /**
     * @var string
     */
    protected $version = "2023-10-24";

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
        $respClass = "TencentCloud"."\\".ucfirst("igtm")."\\"."V20231024\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
