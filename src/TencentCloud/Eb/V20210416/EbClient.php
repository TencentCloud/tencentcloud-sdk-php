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

namespace TencentCloud\Eb\V20210416;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Eb\V20210416\Models as Models;

/**
 * @method Models\CheckRuleResponse CheckRule(Models\CheckRuleRequest $req) 检验规则
 * @method Models\CheckTransformationResponse CheckTransformation(Models\CheckTransformationRequest $req) 用于在ETL配置页面, 测试规则和数据.
 * @method Models\CreateConnectionResponse CreateConnection(Models\CreateConnectionRequest $req) 创建事件连接器
 * @method Models\CreateEventBusResponse CreateEventBus(Models\CreateEventBusRequest $req) 用于创建事件集
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) 创建事件规则
 * @method Models\CreateTargetResponse CreateTarget(Models\CreateTargetRequest $req) 创建事件目标
 * @method Models\CreateTransformationResponse CreateTransformation(Models\CreateTransformationRequest $req) 用于创建转换器
 * @method Models\DeleteConnectionResponse DeleteConnection(Models\DeleteConnectionRequest $req) 删除事件连接器
 * @method Models\DeleteEventBusResponse DeleteEventBus(Models\DeleteEventBusRequest $req) 删除事件集
 * @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) 删除事件规则
 * @method Models\DeleteTargetResponse DeleteTarget(Models\DeleteTargetRequest $req) 删除事件目标
 * @method Models\DeleteTransformationResponse DeleteTransformation(Models\DeleteTransformationRequest $req) 用于删除转换器
 * @method Models\DescribeLogTagValueResponse DescribeLogTagValue(Models\DescribeLogTagValueRequest $req) 查询日志索引维度值
 * @method Models\GetEventBusResponse GetEventBus(Models\GetEventBusRequest $req) 获取事件集详情
 * @method Models\GetRuleResponse GetRule(Models\GetRuleRequest $req) 获取事件规则详情
 * @method Models\GetTransformationResponse GetTransformation(Models\GetTransformationRequest $req) 用于获取转换器详情
 * @method Models\ListConnectionsResponse ListConnections(Models\ListConnectionsRequest $req) 获取事件连接器列表
 * @method Models\ListEventBusesResponse ListEventBuses(Models\ListEventBusesRequest $req) 获取事件集列表
 * @method Models\ListRulesResponse ListRules(Models\ListRulesRequest $req) 获取事件规则列表
 * @method Models\ListTargetsResponse ListTargets(Models\ListTargetsRequest $req) 获取事件目标列表
 * @method Models\PublishEventResponse PublishEvent(Models\PublishEventRequest $req) （已废弃）用于Event事件投递
 * @method Models\PutEventsResponse PutEvents(Models\PutEventsRequest $req) 用于Event事件投递
 * @method Models\SearchLogResponse SearchLog(Models\SearchLogRequest $req) 日志检索
 * @method Models\UpdateConnectionResponse UpdateConnection(Models\UpdateConnectionRequest $req) 更新事件连接器
 * @method Models\UpdateEventBusResponse UpdateEventBus(Models\UpdateEventBusRequest $req) 更新事件集
 * @method Models\UpdateRuleResponse UpdateRule(Models\UpdateRuleRequest $req) 更新事件规则
 * @method Models\UpdateTargetResponse UpdateTarget(Models\UpdateTargetRequest $req) 更新事件目标
 * @method Models\UpdateTransformationResponse UpdateTransformation(Models\UpdateTransformationRequest $req) 用于更新转换器
 */

class EbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "eb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "eb";

    /**
     * @var string
     */
    protected $version = "2021-04-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("eb")."\\"."V20210416\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
