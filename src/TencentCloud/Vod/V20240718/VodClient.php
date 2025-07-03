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

namespace TencentCloud\Vod\V20240718;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Vod\V20240718\Models as Models;

/**
 * @method Models\CreateIncrementalMigrationStrategyResponse CreateIncrementalMigrationStrategy(Models\CreateIncrementalMigrationStrategyRequest $req) 创建增量迁移策略。
 * @method Models\CreateStorageResponse CreateStorage(Models\CreateStorageRequest $req) 该接口用于为专业版应用创建存储桶。

注：
- 本接口仅用于专业版应用；
- 客户创建点播专业版应用时，系统默认为客户开通了部分地域的存储，用户如果需要开通其它地域的存储，可以通过该接口进行开通；
- 通过 [DescribeStorageRegions](https://cloud.tencent.com/document/product/266/72480) 接口可以查询到所有存储地域及已经开通存储桶的地域。
 * @method Models\CreateStorageCredentialsResponse CreateStorageCredentials(Models\CreateStorageCredentialsRequest $req) 用于按指定策略，生成专业版应用的临时访问凭证，比如生成用于客户端上传的临时凭证。
 * @method Models\DeleteIncrementalMigrationStrategyResponse DeleteIncrementalMigrationStrategy(Models\DeleteIncrementalMigrationStrategyRequest $req) 删除增量迁移策略。
 * @method Models\DescribeIncrementalMigrationStrategyInfosResponse DescribeIncrementalMigrationStrategyInfos(Models\DescribeIncrementalMigrationStrategyInfosRequest $req) 查询增量迁移策略信息。
 * @method Models\DescribeStorageResponse DescribeStorage(Models\DescribeStorageRequest $req) 该接口用于查询专业版应用中的存储桶信息，同时支持分页查询。

注：
- 本接口仅用于专业版应用。
 * @method Models\ModifyIncrementalMigrationStrategyResponse ModifyIncrementalMigrationStrategy(Models\ModifyIncrementalMigrationStrategyRequest $req) 创建增量迁移策略。
 */

class VodClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "vod.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "vod";

    /**
     * @var string
     */
    protected $version = "2024-07-18";

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
        $respClass = "TencentCloud"."\\".ucfirst("vod")."\\"."V20240718\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
