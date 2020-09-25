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
 * @method Models\AttachCcnInstancesResponse AttachCcnInstances(Models\AttachCcnInstancesRequest $req) 本接口（AttachCcnInstances）用于关联云联网实例
 * @method Models\CreateAliasResponse CreateAlias(Models\CreateAliasRequest $req) 本接口（CreateAlias）用于创建别名
 * @method Models\CreateAssetResponse CreateAsset(Models\CreateAssetRequest $req) 本接口（CreateAsset）用于创建生成包。
通过获取上传cos的临时秘钥，将文件上传至cos，然后将生成包的zip名称下发给[CreateAsset](https://tcloud-dev.oa.com/document/product/1139/46582?!preview&!document=1)完成接口创建。上传文件至 cos支持俩种方式：

 a.获取预签名， cos 调用上传 （小的文件 5G以内， 前端 1G 以内）  
  1). [GetUploadCredentials](https://tcloud-dev.oa.com/document/product/1139/39889?!preview&!document=1)  
  2). 使用 cos API 上传 （cos sdk ）  
 b.新的方式，适用场景，（大文件）  
  1). [GetUploadCredentials](https://tcloud-dev.oa.com/document/product/1139/39889?!preview&!document=1) （获取上传 bucket  第一次调用需要，后续可以不用调用 ）  
  2). GetUploadFederationToken（获取临时密钥）  
  3). 分块上传 API （cos sdk 有集成 upload_file）  
 * @method Models\CreateGameServerSessionResponse CreateGameServerSession(Models\CreateGameServerSessionRequest $req) 本接口（CreateGameServerSession）用于创建游戏服务会话
 * @method Models\DeleteAliasResponse DeleteAlias(Models\DeleteAliasRequest $req) 本接口（DeleteAlias）用于删除别名
 * @method Models\DeleteAssetResponse DeleteAsset(Models\DeleteAssetRequest $req) 本接口（DeleteAsset）用于删除生成包
 * @method Models\DeleteFleetResponse DeleteFleet(Models\DeleteFleetRequest $req) 本接口（DeleteFleet）用于删除服务器舰队
 * @method Models\DeleteScalingPolicyResponse DeleteScalingPolicy(Models\DeleteScalingPolicyRequest $req) 本接口（DeleteScalingPolicy）用于删除扩缩容配置
 * @method Models\DescribeAliasResponse DescribeAlias(Models\DescribeAliasRequest $req) 本接口（DescribeAlias）用于获取别名详情
 * @method Models\DescribeAssetResponse DescribeAsset(Models\DescribeAssetRequest $req) 本接口（DescribeAsset）获取生成包信息
 * @method Models\DescribeAssetsResponse DescribeAssets(Models\DescribeAssetsRequest $req) 本接口（DescribeAssets）用于获取生成包列表
 * @method Models\DescribeCcnInstancesResponse DescribeCcnInstances(Models\DescribeCcnInstancesRequest $req) 本接口（DescribeCcnInstances）用于查询云联网实例
 * @method Models\DescribeFleetAttributesResponse DescribeFleetAttributes(Models\DescribeFleetAttributesRequest $req) 本接口（DescribeFleetAttributes）用于查询服务器舰队属性
 * @method Models\DescribeFleetEventsResponse DescribeFleetEvents(Models\DescribeFleetEventsRequest $req) 本接口（DescribeFleetEvents）用于查询部署服务器舰队相关的事件列表
 * @method Models\DescribeFleetPortSettingsResponse DescribeFleetPortSettings(Models\DescribeFleetPortSettingsRequest $req) 本接口（DescribeFleetPortSettings）用于获取服务器舰队安全组信息
 * @method Models\DescribeFleetUtilizationResponse DescribeFleetUtilization(Models\DescribeFleetUtilizationRequest $req) 本接口（DescribeFleetUtilization）用于查询服务器舰队的利用率信息
 * @method Models\DescribeGameServerSessionDetailsResponse DescribeGameServerSessionDetails(Models\DescribeGameServerSessionDetailsRequest $req) 本接口（DescribeGameServerSessionDetails）用于查询游戏服务器会话详情列表
 * @method Models\DescribeGameServerSessionPlacementResponse DescribeGameServerSessionPlacement(Models\DescribeGameServerSessionPlacementRequest $req) 本接口（DescribeGameServerSessionPlacement）用于查询游戏服务器会话的放置
 * @method Models\DescribeGameServerSessionQueuesResponse DescribeGameServerSessionQueues(Models\DescribeGameServerSessionQueuesRequest $req) 本接口（DescribeGameServerSessionQueues）用于查询游戏服务器会话队列
 * @method Models\DescribeGameServerSessionsResponse DescribeGameServerSessions(Models\DescribeGameServerSessionsRequest $req) 本接口（DescribeGameServerSessions）用于查询游戏服务器会话列表
 * @method Models\DescribeInstanceTypesResponse DescribeInstanceTypes(Models\DescribeInstanceTypesRequest $req) 本接口（DescribeInstanceTypes）用于获取服务器实例类型列表
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 本接口（DescribeInstances）用于查询服务器实例列表
 * @method Models\DescribePlayerSessionsResponse DescribePlayerSessions(Models\DescribePlayerSessionsRequest $req) 本接口（DescribePlayerSessions）用于获取玩家会话列表
 * @method Models\DescribeRuntimeConfigurationResponse DescribeRuntimeConfiguration(Models\DescribeRuntimeConfigurationRequest $req) 本接口（DescribeRuntimeConfiguration）用于获取服务器舰队运行配置
 * @method Models\DescribeScalingPoliciesResponse DescribeScalingPolicies(Models\DescribeScalingPoliciesRequest $req) 本接口（DescribeScalingPolicies）用于查询服务部署的动态扩缩容配置
 * @method Models\DescribeUserQuotaResponse DescribeUserQuota(Models\DescribeUserQuotaRequest $req) 本接口（DescribeUserQuota）获取用户单个模块配额
 * @method Models\DescribeUserQuotasResponse DescribeUserQuotas(Models\DescribeUserQuotasRequest $req) 本接口（DescribeUserQuotas）用于获取用户配额
 * @method Models\DetachCcnInstancesResponse DetachCcnInstances(Models\DetachCcnInstancesRequest $req) 本接口（DetachCcnInstances）用于解关联云联网实例
 * @method Models\GetGameServerSessionLogUrlResponse GetGameServerSessionLogUrl(Models\GetGameServerSessionLogUrlRequest $req) 本接口（GetGameServerSessionLogUrl）用于获取游戏服务器会话的日志URL
 * @method Models\GetInstanceAccessResponse GetInstanceAccess(Models\GetInstanceAccessRequest $req) 本接口（GetInstanceAccess）用于获取实例登录所需要的凭据
 * @method Models\GetUploadCredentialsResponse GetUploadCredentials(Models\GetUploadCredentialsRequest $req) 本接口（GetUploadCredentials）获取上传文件授权信息。
详细描述：通过[GetUploadCredentials](https://tcloud-dev.oa.com/document/product/1139/39889?!preview&!document=1)接口获取临时秘钥后，使用http put请求将数据上传至cos，然后将生成的生成包zip名称下发给[CreateAsset](https://tcloud-dev.oa.com/document/product/1139/46582?!preview&!document=1)接口进行asset创建
 * @method Models\GetUploadFederationTokenResponse GetUploadFederationToken(Models\GetUploadFederationTokenRequest $req) 本接口（GetUploadFederationToken）用于 获取生成包上传所需要的临时密钥
 * @method Models\JoinGameServerSessionResponse JoinGameServerSession(Models\JoinGameServerSessionRequest $req) 本接口（JoinGameServerSession）用于加入游戏服务器会话
 * @method Models\ListAliasesResponse ListAliases(Models\ListAliasesRequest $req) 本接口（ListAliases）用于检索帐户下的所有别名
 * @method Models\ListFleetsResponse ListFleets(Models\ListFleetsRequest $req) 本接口（ListFleets）用于获取服务器舰队列表
 * @method Models\PutScalingPolicyResponse PutScalingPolicy(Models\PutScalingPolicyRequest $req) 本接口（PutScalingPolicy）用于设置动态扩缩容配置
 * @method Models\ResolveAliasResponse ResolveAlias(Models\ResolveAliasRequest $req) 本接口（ResolveAlias）用于获取别名当前指向的fleetId
 * @method Models\SearchGameServerSessionsResponse SearchGameServerSessions(Models\SearchGameServerSessionsRequest $req) 本接口（SearchGameServerSessions）用于搜索游戏服务器会话列表
 * @method Models\SetServerWeightResponse SetServerWeight(Models\SetServerWeightRequest $req) 设置服务器权重
 * @method Models\StartFleetActionsResponse StartFleetActions(Models\StartFleetActionsRequest $req) 本接口（StartFleetActions）用于启用服务器舰队自动扩缩容
 * @method Models\StartGameServerSessionPlacementResponse StartGameServerSessionPlacement(Models\StartGameServerSessionPlacementRequest $req) 本接口（StartGameServerSessionPlacement）用于开始放置游戏服务器会话
 * @method Models\StartMatchPlacementResponse StartMatchPlacement(Models\StartMatchPlacementRequest $req) 本接口（StartMatchPlacement）用于开始匹配放置游戏服务器会话
 * @method Models\StopFleetActionsResponse StopFleetActions(Models\StopFleetActionsRequest $req) 本接口（StopFleetActions）用于停止服务器舰队自动扩缩容，改为手动扩缩容
 * @method Models\StopGameServerSessionPlacementResponse StopGameServerSessionPlacement(Models\StopGameServerSessionPlacementRequest $req) 本接口（StopGameServerSessionPlacement）用于停止放置游戏服务器会话
 * @method Models\UpdateAliasResponse UpdateAlias(Models\UpdateAliasRequest $req) 本接口（UpdateAlias）用于更新别名的属性
 * @method Models\UpdateAssetResponse UpdateAsset(Models\UpdateAssetRequest $req) 本接口（UpdateAsset）用于修改生成包信息
 * @method Models\UpdateFleetAttributesResponse UpdateFleetAttributes(Models\UpdateFleetAttributesRequest $req) 本接口（UpdateFleetAttributes）用于更新服务器舰队属性
 * @method Models\UpdateFleetPortSettingsResponse UpdateFleetPortSettings(Models\UpdateFleetPortSettingsRequest $req) 本接口（UpdateFleetPortSettings）用于更新服务器舰队安全组
 * @method Models\UpdateGameServerSessionResponse UpdateGameServerSession(Models\UpdateGameServerSessionRequest $req) 本接口（UpdateGameServerSession）用于更新游戏服务器会话
 * @method Models\UpdateRuntimeConfigurationResponse UpdateRuntimeConfiguration(Models\UpdateRuntimeConfigurationRequest $req) 本接口（UpdateRuntimeConfiguration）用于更新服务器舰队配置
 */

class GseClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "gse.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2019-11-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("gse")."\\"."V20191112\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
