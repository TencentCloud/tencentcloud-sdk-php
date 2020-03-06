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

namespace TencentCloud\Gse\V20191112;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Gse\V20191112\Models as Models;

/**
* @method Models\CreateGameServerSessionResponse CreateGameServerSession(Models\CreateGameServerSessionRequest $req) 本接口（CreateGameServerSession）用于创建游戏服务会话
* @method Models\DeleteScalingPolicyResponse DeleteScalingPolicy(Models\DeleteScalingPolicyRequest $req) 用于删除扩缩容配置
* @method Models\DescribeFleetCapacityResponse DescribeFleetCapacity(Models\DescribeFleetCapacityRequest $req) 用于查询服务部署容量配置
* @method Models\DescribeGameServerSessionDetailsResponse DescribeGameServerSessionDetails(Models\DescribeGameServerSessionDetailsRequest $req) 本接口（DescribeGameServerSessionDetails）用于查询游戏服务器会话详情列表
* @method Models\DescribeGameServerSessionPlacementResponse DescribeGameServerSessionPlacement(Models\DescribeGameServerSessionPlacementRequest $req) 本接口（DescribeGameServerSessionPlacement）用于查询游戏服务器会话的放置
* @method Models\DescribeGameServerSessionsResponse DescribeGameServerSessions(Models\DescribeGameServerSessionsRequest $req) 本接口（DescribeGameServerSessions）用于查询游戏服务器会话列表
* @method Models\DescribePlayerSessionsResponse DescribePlayerSessions(Models\DescribePlayerSessionsRequest $req) 本接口（DescribePlayerSessions）用于获取玩家会话列表
* @method Models\DescribeScalingPoliciesResponse DescribeScalingPolicies(Models\DescribeScalingPoliciesRequest $req) 用于查询服务部署的动态扩缩容配置
* @method Models\GetGameServerSessionLogUrlResponse GetGameServerSessionLogUrl(Models\GetGameServerSessionLogUrlRequest $req) 本接口（GetGameServerSessionLogUrl）用于获取游戏服务器会话的日志URL
* @method Models\JoinGameServerSessionResponse JoinGameServerSession(Models\JoinGameServerSessionRequest $req) 本接口（JoinGameServerSession）用于加入游戏服务器会话
* @method Models\PutScalingPolicyResponse PutScalingPolicy(Models\PutScalingPolicyRequest $req) 用于设置动态扩缩容配置
* @method Models\StartGameServerSessionPlacementResponse StartGameServerSessionPlacement(Models\StartGameServerSessionPlacementRequest $req) 本接口（StartGameServerSessionPlacement）用于开始放置游戏服务器会话
* @method Models\StopGameServerSessionPlacementResponse StopGameServerSessionPlacement(Models\StopGameServerSessionPlacementRequest $req) 本接口（StopGameServerSessionPlacement）用于停止放置游戏服务器会话
* @method Models\UpdateFleetCapacityResponse UpdateFleetCapacity(Models\UpdateFleetCapacityRequest $req) 用于更新服务部署容量配置
* @method Models\UpdateGameServerSessionResponse UpdateGameServerSession(Models\UpdateGameServerSessionRequest $req) 本接口（UpdateGameServerSession）用于更新游戏服务器会话
 */

class GseClient extends AbstractClient
{
    protected $endpoint = "gse.tencentcloudapi.com";

    protected $version = "2019-11-12";

    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("gse")."\\"."V20191112\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
