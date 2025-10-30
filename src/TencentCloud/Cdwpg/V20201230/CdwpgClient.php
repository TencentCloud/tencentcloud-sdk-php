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

namespace TencentCloud\Cdwpg\V20201230;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdwpg\V20201230\Models as Models;

/**
 * @method Models\CreateInstanceByApiResponse CreateInstanceByApi(Models\CreateInstanceByApiRequest $req) 创建集群
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) 获取云原生实例对应的账号列表
 * @method Models\DescribeDBConfigHistoryResponse DescribeDBConfigHistory(Models\DescribeDBConfigHistoryRequest $req) DescribeDBConfigHistory1
 * @method Models\DescribeDBParamsResponse DescribeDBParams(Models\DescribeDBParamsRequest $req) 配置描述
 * @method Models\DescribeErrorLogResponse DescribeErrorLog(Models\DescribeErrorLogRequest $req) 查询错误日志
 * @method Models\DescribeInstanceResponse DescribeInstance(Models\DescribeInstanceRequest $req) 根据实例ID查询某个实例的具体信息
 * @method Models\DescribeInstanceInfoResponse DescribeInstanceInfo(Models\DescribeInstanceInfoRequest $req) 获取集群信息
 * @method Models\DescribeInstanceNodesResponse DescribeInstanceNodes(Models\DescribeInstanceNodesRequest $req) 节点list
 * @method Models\DescribeInstanceOperationsResponse DescribeInstanceOperations(Models\DescribeInstanceOperationsRequest $req) 在集群详情页面，拉取该集群的操作
 * @method Models\DescribeInstanceStateResponse DescribeInstanceState(Models\DescribeInstanceStateRequest $req) 集群详情页中显示集群状态、流程进度等
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 获取云原生实例列表
 * @method Models\DescribeSimpleInstancesResponse DescribeSimpleInstances(Models\DescribeSimpleInstancesRequest $req) 获取集群实例列表
 * @method Models\DescribeSlowLogResponse DescribeSlowLog(Models\DescribeSlowLogRequest $req) 查询慢SQL日志
 * @method Models\DescribeUpgradeListResponse DescribeUpgradeList(Models\DescribeUpgradeListRequest $req) 升级记录
 * @method Models\DescribeUserHbaConfigResponse DescribeUserHbaConfig(Models\DescribeUserHbaConfigRequest $req) user_hba
 * @method Models\DestroyInstanceByApiResponse DestroyInstanceByApi(Models\DestroyInstanceByApiRequest $req) 销毁集群
 * @method Models\ModifyDBParametersResponse ModifyDBParameters(Models\ModifyDBParametersRequest $req) 集群配置下发
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) 修改实例信息，目前为实例名称
 * @method Models\ModifyUserHbaResponse ModifyUserHba(Models\ModifyUserHbaRequest $req) 修改用户Hba配置
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) 修改账号密码
 * @method Models\RestartInstanceResponse RestartInstance(Models\RestartInstanceRequest $req) 用户在控制台主动发起重启实例
 * @method Models\ScaleOutInstanceResponse ScaleOutInstance(Models\ScaleOutInstanceRequest $req) 水平扩容
 * @method Models\ScaleUpInstanceResponse ScaleUpInstance(Models\ScaleUpInstanceRequest $req) 控制台垂直变配集群
 * @method Models\UpgradeInstanceResponse UpgradeInstance(Models\UpgradeInstanceRequest $req) 在线升级
 */

class CdwpgClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cdwpg.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cdwpg";

    /**
     * @var string
     */
    protected $version = "2020-12-30";

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
        $respClass = "TencentCloud"."\\".ucfirst("cdwpg")."\\"."V20201230\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
