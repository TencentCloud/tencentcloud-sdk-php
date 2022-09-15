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
 * SaveAndDeployLogstashPipeline请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method LogstashPipeline getPipeline() 获取实例管道信息
 * @method void setPipeline(LogstashPipeline $Pipeline) 设置实例管道信息
 * @method integer getOpType() 获取操作类型<li>1：只保存</li><li>2：保存并部署</li>
 * @method void setOpType(integer $OpType) 设置操作类型<li>1：只保存</li><li>2：保存并部署</li>
 */
class SaveAndDeployLogstashPipelineRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var LogstashPipeline 实例管道信息
     */
    public $Pipeline;

    /**
     * @var integer 操作类型<li>1：只保存</li><li>2：保存并部署</li>
     */
    public $OpType;

    /**
     * @param string $InstanceId 实例ID
     * @param LogstashPipeline $Pipeline 实例管道信息
     * @param integer $OpType 操作类型<li>1：只保存</li><li>2：保存并部署</li>
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

        if (array_key_exists("Pipeline",$param) and $param["Pipeline"] !== null) {
            $this->Pipeline = new LogstashPipeline();
            $this->Pipeline->deserialize($param["Pipeline"]);
        }

        if (array_key_exists("OpType",$param) and $param["OpType"] !== null) {
            $this->OpType = $param["OpType"];
        }
    }
}
