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

namespace TencentCloud\Smh\V20210712;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Smh\V20210712\Models as Models;

/**
 * @method Models\CreateLibraryResponse CreateLibrary(Models\CreateLibraryRequest $req) 创建 PaaS 服务媒体库
 * @method Models\DeleteLibraryResponse DeleteLibrary(Models\DeleteLibraryRequest $req) 删除 PaaS 服务媒体库
 * @method Models\DescribeLibrariesResponse DescribeLibraries(Models\DescribeLibrariesRequest $req) 查询 PaaS 服务媒体库列表
 * @method Models\DescribeLibrarySecretResponse DescribeLibrarySecret(Models\DescribeLibrarySecretRequest $req) 查询 PaaS 服务媒体库密钥
 * @method Models\DescribeOfficialInstancesResponse DescribeOfficialInstances(Models\DescribeOfficialInstancesRequest $req) 查询官方云盘实例
 * @method Models\DescribeOfficialOverviewResponse DescribeOfficialOverview(Models\DescribeOfficialOverviewRequest $req) 查询官方云盘实例概览数据
 * @method Models\DescribeTrafficPackagesResponse DescribeTrafficPackages(Models\DescribeTrafficPackagesRequest $req) 查询流量资源包
 * @method Models\ModifyLibraryResponse ModifyLibrary(Models\ModifyLibraryRequest $req) 修改 PaaS 服务媒体库配置项
 * @method Models\SendSmsCodeResponse SendSmsCode(Models\SendSmsCodeRequest $req) 发送用于换绑官方云盘实例的超级管理员账号的短信验证码
 * @method Models\VerifySmsCodeResponse VerifySmsCode(Models\VerifySmsCodeRequest $req) 验证短信验证码以换绑官方云盘实例的超级管理员账号
 */

class SmhClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "smh.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "smh";

    /**
     * @var string
     */
    protected $version = "2021-07-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("smh")."\\"."V20210712\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
