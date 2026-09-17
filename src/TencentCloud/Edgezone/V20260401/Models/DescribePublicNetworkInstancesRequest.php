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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePublicNetworkInstances请求参数结构体
 *
 * @method string getNetworkInstanceId() 获取公网实例ID
 * @method void setNetworkInstanceId(string $NetworkInstanceId) 设置公网实例ID
 * @method string getNetworkInstanceName() 获取公网实例名称
 * @method void setNetworkInstanceName(string $NetworkInstanceName) 设置公网实例名称
 * @method string getZoneId() 获取可用区Id
 * @method void setZoneId(string $ZoneId) 设置可用区Id
 * @method integer getOffset() 获取分页偏移量，默认 0
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认 0
 * @method integer getLimit() 获取每页数量，默认 20，最大 100
 * @method void setLimit(integer $Limit) 设置每页数量，默认 20，最大 100
 */
class DescribePublicNetworkInstancesRequest extends AbstractModel
{
    /**
     * @var string 公网实例ID
     */
    public $NetworkInstanceId;

    /**
     * @var string 公网实例名称
     */
    public $NetworkInstanceName;

    /**
     * @var string 可用区Id
     */
    public $ZoneId;

    /**
     * @var integer 分页偏移量，默认 0
     */
    public $Offset;

    /**
     * @var integer 每页数量，默认 20，最大 100
     */
    public $Limit;

    /**
     * @param string $NetworkInstanceId 公网实例ID
     * @param string $NetworkInstanceName 公网实例名称
     * @param string $ZoneId 可用区Id
     * @param integer $Offset 分页偏移量，默认 0
     * @param integer $Limit 每页数量，默认 20，最大 100
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
        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }

        if (array_key_exists("NetworkInstanceName",$param) and $param["NetworkInstanceName"] !== null) {
            $this->NetworkInstanceName = $param["NetworkInstanceName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
