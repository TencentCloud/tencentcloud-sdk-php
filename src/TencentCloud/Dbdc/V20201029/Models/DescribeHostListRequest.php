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
 * DescribeHostList请求参数结构体
 *
 * @method string getInstanceId() 获取独享集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置独享集群实例Id
 * @method integer getLimit() 获取分页返回数量
 * @method void setLimit(integer $Limit) 设置分页返回数量
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 * @method array getAssignStatus() 获取分配状态过滤，0-可分配，1-禁止分配
 * @method void setAssignStatus(array $AssignStatus) 设置分配状态过滤，0-可分配，1-禁止分配
 */
class DescribeHostListRequest extends AbstractModel
{
    /**
     * @var string 独享集群实例Id
     */
    public $InstanceId;

    /**
     * @var integer 分页返回数量
     */
    public $Limit;

    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @var array 分配状态过滤，0-可分配，1-禁止分配
     */
    public $AssignStatus;

    /**
     * @param string $InstanceId 独享集群实例Id
     * @param integer $Limit 分页返回数量
     * @param integer $Offset 分页偏移量
     * @param array $AssignStatus 分配状态过滤，0-可分配，1-禁止分配
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("AssignStatus",$param) and $param["AssignStatus"] !== null) {
            $this->AssignStatus = $param["AssignStatus"];
        }
    }
}
