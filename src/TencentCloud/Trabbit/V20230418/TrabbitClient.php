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

namespace TencentCloud\Trabbit\V20230418;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Trabbit\V20230418\Models as Models;

/**
 * @method Models\CreateRabbitMQServerlessBindingResponse CreateRabbitMQServerlessBinding(Models\CreateRabbitMQServerlessBindingRequest $req) 创建RabbitMQ路由关系
 * @method Models\CreateRabbitMQServerlessExchangeResponse CreateRabbitMQServerlessExchange(Models\CreateRabbitMQServerlessExchangeRequest $req) 创建RabbitMQ exchange
 * @method Models\CreateRabbitMQServerlessQueueResponse CreateRabbitMQServerlessQueue(Models\CreateRabbitMQServerlessQueueRequest $req) 创建RabbitMQ队列
 * @method Models\CreateRabbitMQServerlessUserResponse CreateRabbitMQServerlessUser(Models\CreateRabbitMQServerlessUserRequest $req) 创建RabbitMQ的用户
 * @method Models\CreateRabbitMQServerlessVirtualHostResponse CreateRabbitMQServerlessVirtualHost(Models\CreateRabbitMQServerlessVirtualHostRequest $req) 创建RabbitMQ的vhost
 * @method Models\DeleteRabbitMQServerlessBindingResponse DeleteRabbitMQServerlessBinding(Models\DeleteRabbitMQServerlessBindingRequest $req) 解绑RabbitMQ路由关系
 * @method Models\DeleteRabbitMQServerlessExchangeResponse DeleteRabbitMQServerlessExchange(Models\DeleteRabbitMQServerlessExchangeRequest $req) 删除RabbitMQ exchange
 * @method Models\DeleteRabbitMQServerlessPermissionResponse DeleteRabbitMQServerlessPermission(Models\DeleteRabbitMQServerlessPermissionRequest $req) 删除RabbitMQ的权限
 * @method Models\DeleteRabbitMQServerlessQueueResponse DeleteRabbitMQServerlessQueue(Models\DeleteRabbitMQServerlessQueueRequest $req) 删除RabbitMQ队列
 * @method Models\DeleteRabbitMQServerlessUserResponse DeleteRabbitMQServerlessUser(Models\DeleteRabbitMQServerlessUserRequest $req) 删除RabbitMQ的用户
 * @method Models\DeleteRabbitMQServerlessVirtualHostResponse DeleteRabbitMQServerlessVirtualHost(Models\DeleteRabbitMQServerlessVirtualHostRequest $req) 删除RabbitMQ的vhost
 * @method Models\DescribeRabbitMQServerlessBindingsResponse DescribeRabbitMQServerlessBindings(Models\DescribeRabbitMQServerlessBindingsRequest $req) 获取路由关系列表
 * @method Models\DescribeRabbitMQServerlessConnectionResponse DescribeRabbitMQServerlessConnection(Models\DescribeRabbitMQServerlessConnectionRequest $req) 查询RabbitMQ连接列表
 * @method Models\DescribeRabbitMQServerlessConsumersResponse DescribeRabbitMQServerlessConsumers(Models\DescribeRabbitMQServerlessConsumersRequest $req) 查询RabbitMQ队列消费者列表
 * @method Models\DescribeRabbitMQServerlessExchangeDetailResponse DescribeRabbitMQServerlessExchangeDetail(Models\DescribeRabbitMQServerlessExchangeDetailRequest $req) 查询RabbitMQ exchange 详情
 * @method Models\DescribeRabbitMQServerlessExchangesResponse DescribeRabbitMQServerlessExchanges(Models\DescribeRabbitMQServerlessExchangesRequest $req) 查询RabbitMQ exchange 列表
 * @method Models\DescribeRabbitMQServerlessInstanceResponse DescribeRabbitMQServerlessInstance(Models\DescribeRabbitMQServerlessInstanceRequest $req) 获取单个RabbitMQ专享实例信息
 * @method Models\DescribeRabbitMQServerlessPermissionResponse DescribeRabbitMQServerlessPermission(Models\DescribeRabbitMQServerlessPermissionRequest $req) 查询RabbitMQ权限列表
 * @method Models\DescribeRabbitMQServerlessQueueDetailResponse DescribeRabbitMQServerlessQueueDetail(Models\DescribeRabbitMQServerlessQueueDetailRequest $req) 查询RabbitMQ队列详情
 * @method Models\DescribeRabbitMQServerlessQueuesResponse DescribeRabbitMQServerlessQueues(Models\DescribeRabbitMQServerlessQueuesRequest $req) 查询RabbitMQ队列列表
 * @method Models\DescribeRabbitMQServerlessUserResponse DescribeRabbitMQServerlessUser(Models\DescribeRabbitMQServerlessUserRequest $req) 查询RabbitMQ用户列表
 * @method Models\DescribeRabbitMQServerlessVirtualHostResponse DescribeRabbitMQServerlessVirtualHost(Models\DescribeRabbitMQServerlessVirtualHostRequest $req) 查询RabbitMQ vhost列表
 * @method Models\ListRabbitMQServerlessInstancesResponse ListRabbitMQServerlessInstances(Models\ListRabbitMQServerlessInstancesRequest $req) 获取实例列表
 * @method Models\ModifyRabbitMQServerlessExchangeResponse ModifyRabbitMQServerlessExchange(Models\ModifyRabbitMQServerlessExchangeRequest $req) 修改RabbitMQ exchange
 * @method Models\ModifyRabbitMQServerlessInstanceResponse ModifyRabbitMQServerlessInstance(Models\ModifyRabbitMQServerlessInstanceRequest $req) 修改集群信息
 * @method Models\ModifyRabbitMQServerlessPermissionResponse ModifyRabbitMQServerlessPermission(Models\ModifyRabbitMQServerlessPermissionRequest $req) 修改RabbitMQ的权限
 * @method Models\ModifyRabbitMQServerlessQueueResponse ModifyRabbitMQServerlessQueue(Models\ModifyRabbitMQServerlessQueueRequest $req) 修改RabbitMQ队列
 * @method Models\ModifyRabbitMQServerlessUserResponse ModifyRabbitMQServerlessUser(Models\ModifyRabbitMQServerlessUserRequest $req) 修改RabbitMQ的用户
 * @method Models\ModifyRabbitMQServerlessVirtualHostResponse ModifyRabbitMQServerlessVirtualHost(Models\ModifyRabbitMQServerlessVirtualHostRequest $req) 修改RabbitMQ的vhost
 */

class TrabbitClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "trabbit.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "trabbit";

    /**
     * @var string
     */
    protected $version = "2023-04-18";

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
        $respClass = "TencentCloud"."\\".ucfirst("trabbit")."\\"."V20230418\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
