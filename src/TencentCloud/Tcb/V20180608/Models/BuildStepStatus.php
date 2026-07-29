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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 步骤构建执行状态
 *
 * @method string getName() 获取<p>构建步骤名称</p>
 * @method void setName(string $Name) 设置<p>构建步骤名称</p>
 * @method string getStatus() 获取<p>构建状态</p>
 * @method void setStatus(string $Status) 设置<p>构建状态</p>
 * @method string getDuration() 获取<p>构建耗时</p>
 * @method void setDuration(string $Duration) 设置<p>构建耗时</p>
 */
class BuildStepStatus extends AbstractModel
{
    /**
     * @var string <p>构建步骤名称</p>
     */
    public $Name;

    /**
     * @var string <p>构建状态</p>
     */
    public $Status;

    /**
     * @var string <p>构建耗时</p>
     */
    public $Duration;

    /**
     * @param string $Name <p>构建步骤名称</p>
     * @param string $Status <p>构建状态</p>
     * @param string $Duration <p>构建耗时</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
