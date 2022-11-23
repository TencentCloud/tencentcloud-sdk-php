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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHpcClusters请求参数结构体
 *
 * @method array getHpcClusterIds() 获取高性能计算集群ID数组。
 * @method void setHpcClusterIds(array $HpcClusterIds) 设置高性能计算集群ID数组。
 * @method string getName() 获取高性能计算集群名称。
 * @method void setName(string $Name) 设置高性能计算集群名称。
 * @method string getZone() 获取可用区。
 * @method void setZone(string $Zone) 设置可用区。
 * @method integer getOffset() 获取偏移量, 默认值0。
 * @method void setOffset(integer $Offset) 设置偏移量, 默认值0。
 * @method integer getLimit() 获取本次请求量, 默认值20。
 * @method void setLimit(integer $Limit) 设置本次请求量, 默认值20。
 */
class DescribeHpcClustersRequest extends AbstractModel
{
    /**
     * @var array 高性能计算集群ID数组。
     */
    public $HpcClusterIds;

    /**
     * @var string 高性能计算集群名称。
     */
    public $Name;

    /**
     * @var string 可用区。
     */
    public $Zone;

    /**
     * @var integer 偏移量, 默认值0。
     */
    public $Offset;

    /**
     * @var integer 本次请求量, 默认值20。
     */
    public $Limit;

    /**
     * @param array $HpcClusterIds 高性能计算集群ID数组。
     * @param string $Name 高性能计算集群名称。
     * @param string $Zone 可用区。
     * @param integer $Offset 偏移量, 默认值0。
     * @param integer $Limit 本次请求量, 默认值20。
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
        if (array_key_exists("HpcClusterIds",$param) and $param["HpcClusterIds"] !== null) {
            $this->HpcClusterIds = $param["HpcClusterIds"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
