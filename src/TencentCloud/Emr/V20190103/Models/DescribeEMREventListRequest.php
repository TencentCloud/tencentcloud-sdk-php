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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEMREventList请求参数结构体
 *
 * @method string getInstanceId() 获取集群ID
 * @method void setInstanceId(string $InstanceId) 设置集群ID
 * @method integer getStartTime() 获取查询事件的开始时间
 * @method void setStartTime(integer $StartTime) 设置查询事件的开始时间
 * @method integer getEndTime() 获取查询事件的结束时间
 * @method void setEndTime(integer $EndTime) 设置查询事件的结束时间
 * @method string getHost() 获取事件触发的IP
 * @method void setHost(string $Host) 设置事件触发的IP
 * @method string getRole() 获取事件受影响服务角色
 * @method void setRole(string $Role) 设置事件受影响服务角色
 * @method string getName() 获取事件名称
 * @method void setName(string $Name) 设置事件名称
 * @method integer getOffset() 获取事件列表的偏移量
 * @method void setOffset(integer $Offset) 设置事件列表的偏移量
 * @method integer getLimit() 获取事件列表的Limit
 * @method void setLimit(integer $Limit) 设置事件列表的Limit
 */
class DescribeEMREventListRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $InstanceId;

    /**
     * @var integer 查询事件的开始时间
     */
    public $StartTime;

    /**
     * @var integer 查询事件的结束时间
     */
    public $EndTime;

    /**
     * @var string 事件触发的IP
     */
    public $Host;

    /**
     * @var string 事件受影响服务角色
     */
    public $Role;

    /**
     * @var string 事件名称
     */
    public $Name;

    /**
     * @var integer 事件列表的偏移量
     */
    public $Offset;

    /**
     * @var integer 事件列表的Limit
     */
    public $Limit;

    /**
     * @param string $InstanceId 集群ID
     * @param integer $StartTime 查询事件的开始时间
     * @param integer $EndTime 查询事件的结束时间
     * @param string $Host 事件触发的IP
     * @param string $Role 事件受影响服务角色
     * @param string $Name 事件名称
     * @param integer $Offset 事件列表的偏移量
     * @param integer $Limit 事件列表的Limit
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

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
