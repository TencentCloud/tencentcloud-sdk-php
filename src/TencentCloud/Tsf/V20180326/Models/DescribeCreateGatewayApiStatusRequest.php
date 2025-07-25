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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCreateGatewayApiStatus请求参数结构体
 *
 * @method string getGroupId() 获取所属分组ID
 * @method void setGroupId(string $GroupId) 设置所属分组ID
 * @method string getMicroserviceId() 获取微服务ID
 * @method void setMicroserviceId(string $MicroserviceId) 设置微服务ID
 */
class DescribeCreateGatewayApiStatusRequest extends AbstractModel
{
    /**
     * @var string 所属分组ID
     */
    public $GroupId;

    /**
     * @var string 微服务ID
     */
    public $MicroserviceId;

    /**
     * @param string $GroupId 所属分组ID
     * @param string $MicroserviceId 微服务ID
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("MicroserviceId",$param) and $param["MicroserviceId"] !== null) {
            $this->MicroserviceId = $param["MicroserviceId"];
        }
    }
}
