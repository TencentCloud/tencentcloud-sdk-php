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

namespace TencentCloud\Tcbr\V20220217;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tcbr\V20220217\Models as Models;

/**
 * @method Models\CreateCloudRunEnvResponse CreateCloudRunEnv(Models\CreateCloudRunEnvRequest $req) 创建云托管环境，并开通资源。	
 * @method Models\CreateCloudRunServerResponse CreateCloudRunServer(Models\CreateCloudRunServerRequest $req) 创建云托管服务接口
 * @method Models\DescribeCloudRunEnvsResponse DescribeCloudRunEnvs(Models\DescribeCloudRunEnvsRequest $req) 获取环境列表，含环境下的各个资源信息。尤其是各资源的唯一标识，是请求各资源的关键参数
 * @method Models\DescribeCloudRunServerDetailResponse DescribeCloudRunServerDetail(Models\DescribeCloudRunServerDetailRequest $req) 查询云托管服务详情
 * @method Models\DescribeCloudRunServersResponse DescribeCloudRunServers(Models\DescribeCloudRunServersRequest $req) 查询云托管服务列表接口
 * @method Models\DescribeEnvBaseInfoResponse DescribeEnvBaseInfo(Models\DescribeEnvBaseInfoRequest $req) 查询环境基础信息
 * @method Models\DescribeServerManageTaskResponse DescribeServerManageTask(Models\DescribeServerManageTaskRequest $req) 查询服务管理任务信息
 * @method Models\OperateServerManageResponse OperateServerManage(Models\OperateServerManageRequest $req) 操作发布单
 * @method Models\ReleaseGrayResponse ReleaseGray(Models\ReleaseGrayRequest $req) 灰度发布
 * @method Models\UpdateCloudRunServerResponse UpdateCloudRunServer(Models\UpdateCloudRunServerRequest $req) 更新云托管服务
 */

class TcbrClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tcbr.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tcbr";

    /**
     * @var string
     */
    protected $version = "2022-02-17";

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
        $respClass = "TencentCloud"."\\".ucfirst("tcbr")."\\"."V20220217\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
