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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetVsmMonitorInfo请求参数结构体
 *
 * @method string getResourceId() 获取<p>资源Id</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源Id</p>
 * @method string getResourceName() 获取<p>资源名称</p>
 * @method void setResourceName(string $ResourceName) 设置<p>资源名称</p>
 */
class GetVsmMonitorInfoRequest extends AbstractModel
{
    /**
     * @var string <p>资源Id</p>
     */
    public $ResourceId;

    /**
     * @var string <p>资源名称</p>
     */
    public $ResourceName;

    /**
     * @param string $ResourceId <p>资源Id</p>
     * @param string $ResourceName <p>资源名称</p>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }
    }
}
