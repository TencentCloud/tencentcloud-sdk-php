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
 * DescribeApiKeyList请求参数结构体
 *
 * @method string getEnvId() 获取环境 ID，用于标识该密钥归属的云开发环境，不同环境之间的数据相互隔离
 * @method void setEnvId(string $EnvId) 设置环境 ID，用于标识该密钥归属的云开发环境，不同环境之间的数据相互隔离
 * @method integer getPageNumber() 获取分页查询的页码，从 1 开始。与 PageSize 配合使用，不传则默认返回第 1 页
 * @method void setPageNumber(integer $PageNumber) 设置分页查询的页码，从 1 开始。与 PageSize 配合使用，不传则默认返回第 1 页
 * @method integer getPageSize() 获取分页查询每页返回的记录条数。与 PageNumber 配合使用，不传则使用系统默认值
 * @method void setPageSize(integer $PageSize) 设置分页查询每页返回的记录条数。与 PageNumber 配合使用，不传则使用系统默认值
 * @method string getKeyType() 获取密钥类型过滤条件。可选值：api_key（服务端调用使用的 API 密钥，具有完整权限）、publish_key（客户端使用的公开密钥，权限受限）密钥类型过滤条件。不传默认值为api_key
 * @method void setKeyType(string $KeyType) 设置密钥类型过滤条件。可选值：api_key（服务端调用使用的 API 密钥，具有完整权限）、publish_key（客户端使用的公开密钥，权限受限）密钥类型过滤条件。不传默认值为api_key
 */
class DescribeApiKeyListRequest extends AbstractModel
{
    /**
     * @var string 环境 ID，用于标识该密钥归属的云开发环境，不同环境之间的数据相互隔离
     */
    public $EnvId;

    /**
     * @var integer 分页查询的页码，从 1 开始。与 PageSize 配合使用，不传则默认返回第 1 页
     */
    public $PageNumber;

    /**
     * @var integer 分页查询每页返回的记录条数。与 PageNumber 配合使用，不传则使用系统默认值
     */
    public $PageSize;

    /**
     * @var string 密钥类型过滤条件。可选值：api_key（服务端调用使用的 API 密钥，具有完整权限）、publish_key（客户端使用的公开密钥，权限受限）密钥类型过滤条件。不传默认值为api_key
     */
    public $KeyType;

    /**
     * @param string $EnvId 环境 ID，用于标识该密钥归属的云开发环境，不同环境之间的数据相互隔离
     * @param integer $PageNumber 分页查询的页码，从 1 开始。与 PageSize 配合使用，不传则默认返回第 1 页
     * @param integer $PageSize 分页查询每页返回的记录条数。与 PageNumber 配合使用，不传则使用系统默认值
     * @param string $KeyType 密钥类型过滤条件。可选值：api_key（服务端调用使用的 API 密钥，具有完整权限）、publish_key（客户端使用的公开密钥，权限受限）密钥类型过滤条件。不传默认值为api_key
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("KeyType",$param) and $param["KeyType"] !== null) {
            $this->KeyType = $param["KeyType"];
        }
    }
}
