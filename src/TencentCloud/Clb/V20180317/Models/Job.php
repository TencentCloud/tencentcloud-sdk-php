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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 异步任务信息
 *
 * @method string getApiName() 获取<p>接口名称</p>
 * @method void setApiName(string $ApiName) 设置<p>接口名称</p>
 * @method string getRequestId() 获取<p>请求ID</p>
 * @method void setRequestId(string $RequestId) 设置<p>请求ID</p>
 * @method string getStatus() 获取<p>异步任务状态</p><p>枚举值：</p><ul><li>Processing： 进行中</li><li>Succeeded： 成功</li><li>Failed： 失败</li></ul>
 * @method void setStatus(string $Status) 设置<p>异步任务状态</p><p>枚举值：</p><ul><li>Processing： 进行中</li><li>Succeeded： 成功</li><li>Failed： 失败</li></ul>
 * @method array getResourceIds() 获取<p>资源ID</p>
 * @method void setResourceIds(array $ResourceIds) 设置<p>资源ID</p>
 */
class Job extends AbstractModel
{
    /**
     * @var string <p>接口名称</p>
     */
    public $ApiName;

    /**
     * @var string <p>请求ID</p>
     */
    public $RequestId;

    /**
     * @var string <p>异步任务状态</p><p>枚举值：</p><ul><li>Processing： 进行中</li><li>Succeeded： 成功</li><li>Failed： 失败</li></ul>
     */
    public $Status;

    /**
     * @var array <p>资源ID</p>
     */
    public $ResourceIds;

    /**
     * @param string $ApiName <p>接口名称</p>
     * @param string $RequestId <p>请求ID</p>
     * @param string $Status <p>异步任务状态</p><p>枚举值：</p><ul><li>Processing： 进行中</li><li>Succeeded： 成功</li><li>Failed： 失败</li></ul>
     * @param array $ResourceIds <p>资源ID</p>
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }
    }
}
