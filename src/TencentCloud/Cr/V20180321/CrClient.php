<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Cr\V20180321;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cr\V20180321\Models as Models;

/**
* @method Models\DescribeTaskStatusResponse DescribeTaskStatus(Models\DescribeTaskStatusRequest $req) 客户调用该接口查看任务执行状态。输入任务ID，输出任务执行状态或者结果
* @method Models\DownloadReportResponse DownloadReport(Models\DownloadReportRequest $req) 客户调用该接口下载指定日期的催收报告
* @method Models\UploadFileResponse UploadFile(Models\UploadFileRequest $req) 客户通过调用该接口上传需催收文档，格式需为csv或者excel格式。接口返回任务ID。
 */

class CrClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "cr.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-03-21";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("cr")."\\"."V20180321\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
