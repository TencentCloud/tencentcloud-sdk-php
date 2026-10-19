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
 * DescribeGeneralApmApplicationConfig请求参数结构体
 *
 * @method string getServiceName() 获取<p>应用名</p>
 * @method void setServiceName(string $ServiceName) 设置<p>应用名</p>
 * @method string getInstanceId() 获取<p>业务系统ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>业务系统ID</p>
 */
class DescribeGeneralApmApplicationConfigRequest extends AbstractModel
{
    /**
     * @var string <p>应用名</p>
     */
    public $ServiceName;

    /**
     * @var string <p>业务系统ID</p>
     */
    public $InstanceId;

    /**
     * @param string $ServiceName <p>应用名</p>
     * @param string $InstanceId <p>业务系统ID</p>
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
