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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 异步任务信息
 *
 * @method string getApiName() 获取操作接口名称。
 * @method void setApiName(string $ApiName) 设置操作接口名称。
 * @method integer getFlowId() 获取任务流Id
 * @method void setFlowId(integer $FlowId) 设置任务流Id
 * @method string getRequestId() 获取任务请求Id。
 * @method void setRequestId(string $RequestId) 设置任务请求Id。
 * @method array getResourceIds() 获取资源ID列表
 * @method void setResourceIds(array $ResourceIds) 设置资源ID列表
 * @method string getStatus() 获取任务状态。取值：Processing、Succeeded、Failed。
 * @method void setStatus(string $Status) 设置任务状态。取值：Processing、Succeeded、Failed。
 */
class Job extends AbstractModel
{
    /**
     * @var string 操作接口名称。
     */
    public $ApiName;

    /**
     * @var integer 任务流Id
     */
    public $FlowId;

    /**
     * @var string 任务请求Id。
     */
    public $RequestId;

    /**
     * @var array 资源ID列表
     */
    public $ResourceIds;

    /**
     * @var string 任务状态。取值：Processing、Succeeded、Failed。
     */
    public $Status;

    /**
     * @param string $ApiName 操作接口名称。
     * @param integer $FlowId 任务流Id
     * @param string $RequestId 任务请求Id。
     * @param array $ResourceIds 资源ID列表
     * @param string $Status 任务状态。取值：Processing、Succeeded、Failed。
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
        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
