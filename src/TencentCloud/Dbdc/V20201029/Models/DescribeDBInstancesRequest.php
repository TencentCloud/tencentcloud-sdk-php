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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstances请求参数结构体
 *
 * @method string getInstanceId() 获取独享集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置独享集群实例Id
 * @method string getHostId() 获取独享集群主机Id
 * @method void setHostId(string $HostId) 设置独享集群主机Id
 * @method integer getLimit() 获取分页返回数量
 * @method void setLimit(integer $Limit) 设置分页返回数量
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 * @method array getShardType() 获取实例类型,0:mariadb, 1:tdsql
 * @method void setShardType(array $ShardType) 设置实例类型,0:mariadb, 1:tdsql
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var string 独享集群实例Id
     */
    public $InstanceId;

    /**
     * @var string 独享集群主机Id
     */
    public $HostId;

    /**
     * @var integer 分页返回数量
     */
    public $Limit;

    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @var array 实例类型,0:mariadb, 1:tdsql
     */
    public $ShardType;

    /**
     * @param string $InstanceId 独享集群实例Id
     * @param string $HostId 独享集群主机Id
     * @param integer $Limit 分页返回数量
     * @param integer $Offset 分页偏移量
     * @param array $ShardType 实例类型,0:mariadb, 1:tdsql
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

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ShardType",$param) and $param["ShardType"] !== null) {
            $this->ShardType = $param["ShardType"];
        }
    }
}
