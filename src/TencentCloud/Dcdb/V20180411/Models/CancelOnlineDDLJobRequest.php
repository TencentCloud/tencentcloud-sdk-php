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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CancelOnlineDDLJob请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method integer getFlowId() 获取要暂停的 Online DDL 任务对应的流程Id。创建任务时，CreateOnlineDDLJob 会返回此流程Id
 * @method void setFlowId(integer $FlowId) 设置要暂停的 Online DDL 任务对应的流程Id。创建任务时，CreateOnlineDDLJob 会返回此流程Id
 */
class CancelOnlineDDLJobRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var integer 要暂停的 Online DDL 任务对应的流程Id。创建任务时，CreateOnlineDDLJob 会返回此流程Id
     */
    public $FlowId;

    /**
     * @param string $InstanceId 实例Id
     * @param integer $FlowId 要暂停的 Online DDL 任务对应的流程Id。创建任务时，CreateOnlineDDLJob 会返回此流程Id
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

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }
    }
}
