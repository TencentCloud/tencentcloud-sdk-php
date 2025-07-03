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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReportTaskDetail请求参数结构体
 *
 * @method string getTenantId() 获取租户id
 * @method void setTenantId(string $TenantId) 设置租户id
 * @method string getEngineTaskId() 获取引擎任务id
 * @method void setEngineTaskId(string $EngineTaskId) 设置引擎任务id
 */
class DescribeReportTaskDetailRequest extends AbstractModel
{
    /**
     * @var string 租户id
     */
    public $TenantId;

    /**
     * @var string 引擎任务id
     */
    public $EngineTaskId;

    /**
     * @param string $TenantId 租户id
     * @param string $EngineTaskId 引擎任务id
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("EngineTaskId",$param) and $param["EngineTaskId"] !== null) {
            $this->EngineTaskId = $param["EngineTaskId"];
        }
    }
}
