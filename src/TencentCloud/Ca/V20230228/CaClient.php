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

namespace TencentCloud\Ca\V20230228;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ca\V20230228\Models as Models;

/**
 * @method Models\CreateVerifyReportResponse CreateVerifyReport(Models\CreateVerifyReportRequest $req) 创建签名验证报告任务，此接口为异步盖章接口，盖章时效24小时。
 * @method Models\DescribeVerifyReportResponse DescribeVerifyReport(Models\DescribeVerifyReportRequest $req) 下载验签报告url，url有效期默认12小时
 * @method Models\UploadFileResponse UploadFile(Models\UploadFileRequest $req) 文件上传接口
 */

class CaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ca.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ca";

    /**
     * @var string
     */
    protected $version = "2023-02-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("ca")."\\"."V20230228\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
