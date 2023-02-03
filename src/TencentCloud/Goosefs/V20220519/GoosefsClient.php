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

namespace TencentCloud\Goosefs\V20220519;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Goosefs\V20220519\Models as Models;

/**
 * @method Models\CreateDataRepositoryTaskResponse CreateDataRepositoryTask(Models\CreateDataRepositoryTaskRequest $req) 创建数据流通任务,包括从将文件系统的数据上传到存储桶下, 以及从存储桶下载到文件系统里。
 * @method Models\DescribeDataRepositoryTaskStatusResponse DescribeDataRepositoryTaskStatus(Models\DescribeDataRepositoryTaskStatusRequest $req) 获取数据流通任务实时状态，用作客户端控制
 */

class GoosefsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "goosefs.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "goosefs";

    /**
     * @var string
     */
    protected $version = "2022-05-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("goosefs")."\\"."V20220519\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
