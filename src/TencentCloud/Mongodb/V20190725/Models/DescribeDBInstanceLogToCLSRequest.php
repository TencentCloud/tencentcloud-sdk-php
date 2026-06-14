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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceLogToCLS请求参数结构体
 *
 * @method string getInstanceId() 获取<p>指定实例ID。例如：cmgo-p8vn****。请登录 MongoDB 控制台在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定实例ID。例如：cmgo-p8vn****。请登录 MongoDB 控制台在实例列表复制实例 ID。</p>
 * @method string getCLSRegion() 获取<p>CLS服务所在地域</p>
 * @method void setCLSRegion(string $CLSRegion) 设置<p>CLS服务所在地域</p>
 */
class DescribeDBInstanceLogToCLSRequest extends AbstractModel
{
    /**
     * @var string <p>指定实例ID。例如：cmgo-p8vn****。请登录 MongoDB 控制台在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>CLS服务所在地域</p>
     */
    public $CLSRegion;

    /**
     * @param string $InstanceId <p>指定实例ID。例如：cmgo-p8vn****。请登录 MongoDB 控制台在实例列表复制实例 ID。</p>
     * @param string $CLSRegion <p>CLS服务所在地域</p>
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

        if (array_key_exists("CLSRegion",$param) and $param["CLSRegion"] !== null) {
            $this->CLSRegion = $param["CLSRegion"];
        }
    }
}
