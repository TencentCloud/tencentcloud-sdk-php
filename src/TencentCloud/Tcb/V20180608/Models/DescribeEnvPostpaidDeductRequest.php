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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEnvPostpaidDeduct请求参数结构体
 *
 * @method array getResourceTypes() 获取资源方列表
 * @method void setResourceTypes(array $ResourceTypes) 设置资源方列表
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method string getStartTime() 获取查询开始时间
 * @method void setStartTime(string $StartTime) 设置查询开始时间
 * @method string getEndTime() 获取查询结束时间
 * @method void setEndTime(string $EndTime) 设置查询结束时间
 */
class DescribeEnvPostpaidDeductRequest extends AbstractModel
{
    /**
     * @var array 资源方列表
     */
    public $ResourceTypes;

    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var string 查询开始时间
     */
    public $StartTime;

    /**
     * @var string 查询结束时间
     */
    public $EndTime;

    /**
     * @param array $ResourceTypes 资源方列表
     * @param string $EnvId 环境id
     * @param string $StartTime 查询开始时间
     * @param string $EndTime 查询结束时间
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
        if (array_key_exists("ResourceTypes",$param) and $param["ResourceTypes"] !== null) {
            $this->ResourceTypes = $param["ResourceTypes"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
