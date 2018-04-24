<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getImportImageOsListSupported() 获取支持的导入镜像的操作系统类型
 * @method void setImportImageOsListSupported(array $ImportImageOsListSupported) 设置支持的导入镜像的操作系统类型
 * @method array getImportImageOsVersionSupported() 获取支持的导入镜像的操作系统版本
 * @method void setImportImageOsVersionSupported(array $ImportImageOsVersionSupported) 设置支持的导入镜像的操作系统版本
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeImportImageOs返回参数结构体
 */
class DescribeImportImageOsResponse extends AbstractModel
{
    /**
     * @var array 支持的导入镜像的操作系统类型
     */
    public $ImportImageOsListSupported;

    /**
     * @var array 支持的导入镜像的操作系统版本
     */
    public $ImportImageOsVersionSupported;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param array $ImportImageOsListSupported 支持的导入镜像的操作系统类型
     * @param array $ImportImageOsVersionSupported 支持的导入镜像的操作系统版本
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ImportImageOsListSupported",$param) and $param["ImportImageOsListSupported"] !== null) {
            $this->ImportImageOsListSupported = $param["ImportImageOsListSupported"];
        }

        if (array_key_exists("ImportImageOsVersionSupported",$param) and $param["ImportImageOsVersionSupported"] !== null) {
            $this->ImportImageOsVersionSupported = $param["ImportImageOsVersionSupported"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
