<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Iot\V20180123;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Iot\V20180123\Models as Models;

/**
* @method Models\ActivateRuleResponse ActivateRule(Models\ActivateRuleRequest $req) 启用规则
* @method Models\AddDeviceResponse AddDevice(Models\AddDeviceRequest $req) 新增设备
* @method Models\AddProductResponse AddProduct(Models\AddProductRequest $req) 新增产品
* @method Models\AddRuleResponse AddRule(Models\AddRuleRequest $req) 新增规则
* @method Models\AddTopicResponse AddTopic(Models\AddTopicRequest $req) 新增Topic
* @method Models\DeactivateRuleResponse DeactivateRule(Models\DeactivateRuleRequest $req) 禁用规则
* @method Models\DeleteDeviceResponse DeleteDevice(Models\DeleteDeviceRequest $req) 删除设备
* @method Models\DeleteProductResponse DeleteProduct(Models\DeleteProductRequest $req) 删除产品
* @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) 删除规则
* @method Models\DeleteTopicResponse DeleteTopic(Models\DeleteTopicRequest $req) 删除Topic
* @method Models\GetDataHistoryResponse GetDataHistory(Models\GetDataHistoryRequest $req) 获取数据历史
* @method Models\GetDeviceResponse GetDevice(Models\GetDeviceRequest $req) 获取设备信息
* @method Models\GetDeviceDataResponse GetDeviceData(Models\GetDeviceDataRequest $req) 获取设备数据
* @method Models\GetDeviceLogResponse GetDeviceLog(Models\GetDeviceLogRequest $req) 获取设备日志
* @method Models\GetDeviceStatusesResponse GetDeviceStatuses(Models\GetDeviceStatusesRequest $req) 批量获取设备状态
* @method Models\GetDevicesResponse GetDevices(Models\GetDevicesRequest $req) 获取设备列表
* @method Models\GetProductResponse GetProduct(Models\GetProductRequest $req) 获取产品信息
* @method Models\GetProductsResponse GetProducts(Models\GetProductsRequest $req) 获取用户名下的产品列表
* @method Models\GetRuleResponse GetRule(Models\GetRuleRequest $req) 获取转发规则信息
* @method Models\GetRulesResponse GetRules(Models\GetRulesRequest $req) 获取转发规则列表
* @method Models\GetTopicResponse GetTopic(Models\GetTopicRequest $req) 获取Topic信息
* @method Models\GetTopicsResponse GetTopics(Models\GetTopicsRequest $req) 获取Topic列表
* @method Models\GetUserResponse GetUser(Models\GetUserRequest $req) 获取用户信息
* @method Models\IssueDeviceControlResponse IssueDeviceControl(Models\IssueDeviceControlRequest $req) 下发设备控制指令
* @method Models\PublishMsgResponse PublishMsg(Models\PublishMsgRequest $req) 向Topic发布消息
* @method Models\ResetDeviceResponse ResetDevice(Models\ResetDeviceRequest $req) 重置设备
* @method Models\UpdateProductResponse UpdateProduct(Models\UpdateProductRequest $req) 更新产品信息
* @method Models\UpdateRuleResponse UpdateRule(Models\UpdateRuleRequest $req) 更新规则
 */

class IotClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "iot.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-01-23";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("iot")."\\"."V20180123\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
