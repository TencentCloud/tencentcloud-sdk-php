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

namespace TencentCloud\Ecm\V20190719;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ecm\V20190719\Models as Models;

/**
 * @method Models\CreateModuleResponse CreateModule(Models\CreateModuleRequest $req) 创建模块
 * @method Models\DeleteImageResponse DeleteImage(Models\DeleteImageRequest $req) 删除镜像
 * @method Models\DeleteModuleResponse DeleteModule(Models\DeleteModuleRequest $req) 删除业务模块
 * @method Models\DescribeBaseOverviewResponse DescribeBaseOverview(Models\DescribeBaseOverviewRequest $req) 获取概览页统计的基本数据
 * @method Models\DescribeConfigResponse DescribeConfig(Models\DescribeConfigRequest $req) 获取带宽硬盘等数据的限制
 * @method Models\DescribeImageResponse DescribeImage(Models\DescribeImageRequest $req) 展示镜像列表
 * @method Models\DescribeInstanceTypeConfigResponse DescribeInstanceTypeConfig(Models\DescribeInstanceTypeConfigRequest $req) 获取机型配置列表
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 获取实例的相关信息。
 * @method Models\DescribeInstancesDeniedActionsResponse DescribeInstancesDeniedActions(Models\DescribeInstancesDeniedActionsRequest $req) 通过实例id获取当前禁止的操作
 * @method Models\DescribeModuleResponse DescribeModule(Models\DescribeModuleRequest $req) 获取模块列表
 * @method Models\DescribeModuleDetailResponse DescribeModuleDetail(Models\DescribeModuleDetailRequest $req) 展示模块详细信息
 * @method Models\DescribeNodeResponse DescribeNode(Models\DescribeNodeRequest $req) 获取节点列表
 * @method Models\DescribePeakBaseOverviewResponse DescribePeakBaseOverview(Models\DescribePeakBaseOverviewRequest $req) CPU 内存 硬盘等基础信息峰值数据
 * @method Models\DescribePeakNetworkOverviewResponse DescribePeakNetworkOverview(Models\DescribePeakNetworkOverviewRequest $req) 获取网络峰值数据
 * @method Models\ImportImageResponse ImportImage(Models\ImportImageRequest $req) 从CVM产品导入镜像到ECM
 * @method Models\ModifyInstancesAttributeResponse ModifyInstancesAttribute(Models\ModifyInstancesAttributeRequest $req) 修改实例的属性。
 * @method Models\ModifyModuleImageResponse ModifyModuleImage(Models\ModifyModuleImageRequest $req) ModifyModuleImage
 * @method Models\ModifyModuleNameResponse ModifyModuleName(Models\ModifyModuleNameRequest $req) 修改模块名称
 * @method Models\ModifyModuleNetworkResponse ModifyModuleNetwork(Models\ModifyModuleNetworkRequest $req) 修改模块默认带宽上限
 * @method Models\RebootInstancesResponse RebootInstances(Models\RebootInstancesRequest $req) 只有状态为RUNNING的实例才可以进行此操作；接口调用成功时，实例会进入REBOOTING状态；重启实例成功时，实例会进入RUNNING状态；支持强制重启，强制重启的效果等同于关闭物理计算机的电源开关再重新启动。强制重启可能会导致数据丢失或文件系统损坏，请仅在服务器不能正常重启时使用。
 * @method Models\ResetInstancesResponse ResetInstances(Models\ResetInstancesRequest $req) 重装实例，若指定了ImageId参数，则使用指定的镜像重装；否则按照当前实例使用的镜像进行重装；若未指定密码，则密码通过站内信形式随后发送。
 * @method Models\ResetInstancesMaxBandwidthResponse ResetInstancesMaxBandwidth(Models\ResetInstancesMaxBandwidthRequest $req) 重置实例的最大带宽上限。
 * @method Models\TerminateInstancesResponse TerminateInstances(Models\TerminateInstancesRequest $req) 销毁实例
 */

class EcmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ecm.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2019-07-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("ecm")."\\"."V20190719\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
