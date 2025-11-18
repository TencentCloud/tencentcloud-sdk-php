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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteApmSampleConfig请求参数结构体
 *
 * @method string getInstanceId() 获取业务系统ID
 * @method void setInstanceId(string $InstanceId) 设置业务系统ID
 * @method string getSampleName() 获取采样规则名
 * @method void setSampleName(string $SampleName) 设置采样规则名
 */
class DeleteApmSampleConfigRequest extends AbstractModel
{
    /**
     * @var string 业务系统ID
     */
    public $InstanceId;

    /**
     * @var string 采样规则名
     */
    public $SampleName;

    /**
     * @param string $InstanceId 业务系统ID
     * @param string $SampleName 采样规则名
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SampleName",$param) and $param["SampleName"] !== null) {
            $this->SampleName = $param["SampleName"];
        }
    }
}
