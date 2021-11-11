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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Istiod配置
 *
 * @method WorkloadConfig getWorkload() 获取工作负载配置
 * @method void setWorkload(WorkloadConfig $Workload) 设置工作负载配置
 */
class IstiodConfig extends AbstractModel
{
    /**
     * @var WorkloadConfig 工作负载配置
     */
    public $Workload;

    /**
     * @param WorkloadConfig $Workload 工作负载配置
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
        if (array_key_exists("Workload",$param) and $param["Workload"] !== null) {
            $this->Workload = new WorkloadConfig();
            $this->Workload->deserialize($param["Workload"]);
        }
    }
}
