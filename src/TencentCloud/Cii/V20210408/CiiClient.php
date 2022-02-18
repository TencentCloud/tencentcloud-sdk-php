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

namespace TencentCloud\Cii\V20210408;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cii\V20210408\Models as Models;

/**
 * @method Models\AddSubStructureTasksResponse AddSubStructureTasks(Models\AddSubStructureTasksRequest $req) 如果主任务下的报告不满足需求，可以基于主任务批量添加子任务
 * @method Models\CreateAutoClassifyStructureTaskResponse CreateAutoClassifyStructureTask(Models\CreateAutoClassifyStructureTaskRequest $req) 本接口(CreateAutoClassifyStructureTask)基于提供的客户及保单信息，创建并启动结构化识别任务。
 * @method Models\CreateStructureTaskResponse CreateStructureTask(Models\CreateStructureTaskRequest $req) 本接口(CreateStructureTask)基于提供的客户及保单信息，创建并启动结构化识别任务。
 * @method Models\CreateUnderwriteTaskByIdResponse CreateUnderwriteTaskById(Models\CreateUnderwriteTaskByIdRequest $req) 本接口(CreateUnderwriteTaskById)用于根据结构化任务ID创建核保任务
 * @method Models\DescribeMachineUnderwriteResponse DescribeMachineUnderwrite(Models\DescribeMachineUnderwriteRequest $req) 本接口(DescribeMachineUnderwrite)用于查询机器核保任务数据
 * @method Models\DescribeQualityScoreResponse DescribeQualityScore(Models\DescribeQualityScoreRequest $req) 获取图片质量分
 * @method Models\DescribeReportClassifyResponse DescribeReportClassify(Models\DescribeReportClassifyRequest $req) 辅助用户对批量报告自动分类
 * @method Models\DescribeStructCompareDataResponse DescribeStructCompareData(Models\DescribeStructCompareDataRequest $req) 结构化对比查询接口，对比结构化复核前后数据差异，查询识别正确率，召回率。
 * @method Models\DescribeStructureDifferenceResponse DescribeStructureDifference(Models\DescribeStructureDifferenceRequest $req) 结构化复核差异查询接口，对比结构化复核前后数据差异，返回差异的部分。
 * @method Models\DescribeStructureResultResponse DescribeStructureResult(Models\DescribeStructureResultRequest $req) 本接口(DescribeStructureResult)用于查询结构化结果接口
 * @method Models\DescribeStructureTaskResultResponse DescribeStructureTaskResult(Models\DescribeStructureTaskResultRequest $req) 依据任务ID获取结构化结果接口。
 * @method Models\DescribeUnderwriteTaskResponse DescribeUnderwriteTask(Models\DescribeUnderwriteTaskRequest $req) 本接口(DescribeUnderwriteTask)用于查询核保任务结果
 * @method Models\UploadMedicalFileResponse UploadMedicalFile(Models\UploadMedicalFileRequest $req) 上传医疗影像文件，可以用来做结构化。
 */

class CiiClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cii.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cii";

    /**
     * @var string
     */
    protected $version = "2021-04-08";

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
        $respClass = "TencentCloud"."\\".ucfirst("cii")."\\"."V20210408\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }

    public function DescribeQualityScore($req)
    {
        $options = array(
            "IsMultipart" => true,
            "BinaryParams" => array("File"),
        );
        return $this->doRequestWithOptions("DescribeQualityScore", $req, $options);
    }

    public function UploadMedicalFile($req)
    {
        $options = array(
            "IsMultipart" => true,
            "BinaryParams" => array("File"),
        );
        return $this->doRequestWithOptions("UploadMedicalFile", $req, $options);
    }
}
