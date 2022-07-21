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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEmrApplicationStatics请求参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method integer getStartTime() 获取起始时间，时间戳（秒）
 * @method void setStartTime(integer $StartTime) 设置起始时间，时间戳（秒）
 * @method integer getEndTime() 获取结束时间，时间戳（秒）
 * @method void setEndTime(integer $EndTime) 设置结束时间，时间戳（秒）
 * @method array getQueues() 获取过滤的队列名
 * @method void setQueues(array $Queues) 设置过滤的队列名
 * @method array getUsers() 获取过滤的用户名
 * @method void setUsers(array $Users) 设置过滤的用户名
 * @method array getApplicationTypes() 获取过滤的作业类型
 * @method void setApplicationTypes(array $ApplicationTypes) 设置过滤的作业类型
 * @method array getGroupBy() 获取分组字段，可选：queue, user, applicationType
 * @method void setGroupBy(array $GroupBy) 设置分组字段，可选：queue, user, applicationType
 * @method string getOrderBy() 获取排序字段，可选：sumMemorySeconds, sumVCoreSeconds, sumHDFSBytesWritten, sumHDFSBytesRead
 * @method void setOrderBy(string $OrderBy) 设置排序字段，可选：sumMemorySeconds, sumVCoreSeconds, sumHDFSBytesWritten, sumHDFSBytesRead
 * @method integer getIsAsc() 获取是否顺序排序，0-逆序，1-正序
 * @method void setIsAsc(integer $IsAsc) 设置是否顺序排序，0-逆序，1-正序
 * @method integer getOffset() 获取页号
 * @method void setOffset(integer $Offset) 设置页号
 * @method integer getLimit() 获取页容量
 * @method void setLimit(integer $Limit) 设置页容量
 */
class DescribeEmrApplicationStaticsRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var integer 起始时间，时间戳（秒）
     */
    public $StartTime;

    /**
     * @var integer 结束时间，时间戳（秒）
     */
    public $EndTime;

    /**
     * @var array 过滤的队列名
     */
    public $Queues;

    /**
     * @var array 过滤的用户名
     */
    public $Users;

    /**
     * @var array 过滤的作业类型
     */
    public $ApplicationTypes;

    /**
     * @var array 分组字段，可选：queue, user, applicationType
     */
    public $GroupBy;

    /**
     * @var string 排序字段，可选：sumMemorySeconds, sumVCoreSeconds, sumHDFSBytesWritten, sumHDFSBytesRead
     */
    public $OrderBy;

    /**
     * @var integer 是否顺序排序，0-逆序，1-正序
     */
    public $IsAsc;

    /**
     * @var integer 页号
     */
    public $Offset;

    /**
     * @var integer 页容量
     */
    public $Limit;

    /**
     * @param string $InstanceId 集群id
     * @param integer $StartTime 起始时间，时间戳（秒）
     * @param integer $EndTime 结束时间，时间戳（秒）
     * @param array $Queues 过滤的队列名
     * @param array $Users 过滤的用户名
     * @param array $ApplicationTypes 过滤的作业类型
     * @param array $GroupBy 分组字段，可选：queue, user, applicationType
     * @param string $OrderBy 排序字段，可选：sumMemorySeconds, sumVCoreSeconds, sumHDFSBytesWritten, sumHDFSBytesRead
     * @param integer $IsAsc 是否顺序排序，0-逆序，1-正序
     * @param integer $Offset 页号
     * @param integer $Limit 页容量
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Queues",$param) and $param["Queues"] !== null) {
            $this->Queues = $param["Queues"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }

        if (array_key_exists("ApplicationTypes",$param) and $param["ApplicationTypes"] !== null) {
            $this->ApplicationTypes = $param["ApplicationTypes"];
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("IsAsc",$param) and $param["IsAsc"] !== null) {
            $this->IsAsc = $param["IsAsc"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
