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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRelatedServicesOnTrace请求参数结构体
 *
 * @method string getInstanceId() 获取业务系统 ID
 * @method void setInstanceId(string $InstanceId) 设置业务系统 ID
 * @method integer getStartTime() 获取查询开始时间
 * @method void setStartTime(integer $StartTime) 设置查询开始时间
 * @method integer getEndTime() 获取查询结束时间
 * @method void setEndTime(integer $EndTime) 设置查询结束时间
 * @method string getServiceName() 获取应用名
 * @method void setServiceName(string $ServiceName) 设置应用名
 * @method boolean getIsServiceTopology() 获取是否为应用拓扑查询
 * @method void setIsServiceTopology(boolean $IsServiceTopology) 设置是否为应用拓扑查询
 */
class DescribeRelatedServicesOnTraceRequest extends AbstractModel
{
    /**
     * @var string 业务系统 ID
     */
    public $InstanceId;

    /**
     * @var integer 查询开始时间
     */
    public $StartTime;

    /**
     * @var integer 查询结束时间
     */
    public $EndTime;

    /**
     * @var string 应用名
     */
    public $ServiceName;

    /**
     * @var boolean 是否为应用拓扑查询
     */
    public $IsServiceTopology;

    /**
     * @param string $InstanceId 业务系统 ID
     * @param integer $StartTime 查询开始时间
     * @param integer $EndTime 查询结束时间
     * @param string $ServiceName 应用名
     * @param boolean $IsServiceTopology 是否为应用拓扑查询
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

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("IsServiceTopology",$param) and $param["IsServiceTopology"] !== null) {
            $this->IsServiceTopology = $param["IsServiceTopology"];
        }
    }
}
