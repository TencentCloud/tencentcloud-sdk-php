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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateLogstashPipelineDesc请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getPipelineId() 获取实例管道ID
 * @method void setPipelineId(string $PipelineId) 设置实例管道ID
 * @method string getPipelineDesc() 获取管道描述信息
 * @method void setPipelineDesc(string $PipelineDesc) 设置管道描述信息
 */
class UpdateLogstashPipelineDescRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例管道ID
     */
    public $PipelineId;

    /**
     * @var string 管道描述信息
     */
    public $PipelineDesc;

    /**
     * @param string $InstanceId 实例ID
     * @param string $PipelineId 实例管道ID
     * @param string $PipelineDesc 管道描述信息
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

        if (array_key_exists("PipelineId",$param) and $param["PipelineId"] !== null) {
            $this->PipelineId = $param["PipelineId"];
        }

        if (array_key_exists("PipelineDesc",$param) and $param["PipelineDesc"] !== null) {
            $this->PipelineDesc = $param["PipelineDesc"];
        }
    }
}
