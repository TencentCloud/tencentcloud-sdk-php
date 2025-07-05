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

namespace TencentCloud\Aca\V20210323;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Aca\V20210323\Models as Models;

/**
 * @method Models\GetDrugIndicationsResponse GetDrugIndications(Models\GetDrugIndicationsRequest $req) 药品适应症接口
 * @method Models\LoginHisToolResponse LoginHisTool(Models\LoginHisToolRequest $req) 登录获取token
 * @method Models\LoginOutHisToolResponse LoginOutHisTool(Models\LoginOutHisToolRequest $req) 登出
 * @method Models\SmartDrugInfoResponse SmartDrugInfo(Models\SmartDrugInfoRequest $req) 智能用药接口
 * @method Models\SmartPredictResponse SmartPredict(Models\SmartPredictRequest $req) 辅诊智能预测接口
 * @method Models\SyncDepartmentResponse SyncDepartment(Models\SyncDepartmentRequest $req) 用于院方科室管理，获取科室列表和状态、新增或修改科室信息、删除科室。
 * @method Models\SyncStandardDictResponse SyncStandardDict(Models\SyncStandardDictRequest $req) 同步标准字典，如给药频次、给药途径、科室、诊断等
 * @method Models\UploadDrugsResponse UploadDrugs(Models\UploadDrugsRequest $req) 药品同步，一次同步数据不要超过500个
 */

class AcaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "aca.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "aca";

    /**
     * @var string
     */
    protected $version = "2021-03-23";

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
        $respClass = "TencentCloud"."\\".ucfirst("aca")."\\"."V20210323\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
