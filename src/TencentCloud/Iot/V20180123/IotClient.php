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
* @method Models\AddDeviceResponse AddDevice(Models\AddDeviceRequest $req) 提供在指定的产品Id下创建一个设备的能力，生成设备名称与设备秘钥。
* @method Models\AddProductResponse AddProduct(Models\AddProductRequest $req) 本接口(AddProduct)用于创建、定义某款硬件产品。
* @method Models\AddRuleResponse AddRule(Models\AddRuleRequest $req) 新增规则
* @method Models\AddTopicResponse AddTopic(Models\AddTopicRequest $req) 新增Topic，用于设备或应用发布消息至该Topic或订阅该Topic的消息。
* @method Models\AddUserResponse AddUser(Models\AddUserRequest $req) 注册用户
* @method Models\AppAddUserResponse AppAddUser(Models\AppAddUserRequest $req) 注册应用用户
* @method Models\DeactivateRuleResponse DeactivateRule(Models\DeactivateRuleRequest $req) 禁用规则
* @method Models\DeleteDeviceResponse DeleteDevice(Models\DeleteDeviceRequest $req) 提供在指定的产品Id下删除一个设备的能力。
* @method Models\DeleteProductResponse DeleteProduct(Models\DeleteProductRequest $req) 删除用户指定的产品Id对应的信息。
* @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) 删除规则
* @method Models\DeleteTopicResponse DeleteTopic(Models\DeleteTopicRequest $req) 删除Topic
* @method Models\GetDataHistoryResponse GetDataHistory(Models\GetDataHistoryRequest $req) 批量获取设备某一段时间范围的设备上报数据。该接口只允许使用数据模板类型的产品通过REST API方式同步设备上报数据至用户的应用系统。
* @method Models\GetDeviceResponse GetDevice(Models\GetDeviceRequest $req) 提供查询某个设备详细信息的能力。
* @method Models\GetDeviceDataResponse GetDeviceData(Models\GetDeviceDataRequest $req) 获取某个设备当前上报到云端的数据，该接口适用于使用数据模板协议的产品。
* @method Models\GetDeviceLogResponse GetDeviceLog(Models\GetDeviceLogRequest $req) 批量获取设备与云端的详细通信日志，该接口适用于使用数据模板类型的产品。
* @method Models\GetDeviceStatusesResponse GetDeviceStatuses(Models\GetDeviceStatusesRequest $req) 批量获取设备的当前状态，状态包括在线、离线或未激活状态。
* @method Models\GetDevicesResponse GetDevices(Models\GetDevicesRequest $req) 提供分页查询某个产品Id下设备信息的能力。
* @method Models\GetProductResponse GetProduct(Models\GetProductRequest $req) 获取产品定义的详细信息，包括产品名称、产品描述，鉴权模式等信息。
* @method Models\GetProductsResponse GetProducts(Models\GetProductsRequest $req) 获取用户在物联网套件所创建的所有产品信息。
* @method Models\GetRuleResponse GetRule(Models\GetRuleRequest $req) 获取转发规则信息
* @method Models\GetRulesResponse GetRules(Models\GetRulesRequest $req) 获取转发规则列表
* @method Models\GetTopicResponse GetTopic(Models\GetTopicRequest $req) 获取Topic信息
* @method Models\GetTopicsResponse GetTopics(Models\GetTopicsRequest $req) 获取Topic列表
* @method Models\GetUserResponse GetUser(Models\GetUserRequest $req) 获取用户信息
* @method Models\IssueDeviceControlResponse IssueDeviceControl(Models\IssueDeviceControlRequest $req) 提供下发控制指令到指定设备的能力，该接口适用于使用数据模板类型的产品。
* @method Models\PublishMsgResponse PublishMsg(Models\PublishMsgRequest $req) 提供向指定的Topic发布消息的能力，常用于向设备下发控制指令；该接口只适用于数据协议为“自定义”类型的产品，使用数据模板类型的产品需使用IssueDeviceControl接口
* @method Models\ResetDeviceResponse ResetDevice(Models\ResetDeviceRequest $req) 重置设备操作，将会为设备生成新的证书及清空最新数据，需谨慎操作。
* @method Models\UpdateProductResponse UpdateProduct(Models\UpdateProductRequest $req) 提供修改产品信息及数据模板的能力。
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
