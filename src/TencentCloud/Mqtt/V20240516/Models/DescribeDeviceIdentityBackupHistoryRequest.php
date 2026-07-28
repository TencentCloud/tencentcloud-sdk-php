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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceIdentityBackupHistory请求参数结构体
 *
 * @method string getInstanceId() 获取<p>集群id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>集群id</p>
 * @method string getDestination() 获取<p>灾备集群的集群ID</p>
 * @method void setDestination(string $Destination) 设置<p>灾备集群的集群ID</p>
 * @method string getDeviceId() 获取<p>设备ID</p>
 * @method void setDeviceId(string $DeviceId) 设置<p>设备ID</p>
 * @method integer getModificationTimeStart() 获取<p>同步发生的开始时间</p>
 * @method void setModificationTimeStart(integer $ModificationTimeStart) 设置<p>同步发生的开始时间</p>
 * @method integer getModificationTimeEnd() 获取<p>同步发生的结束时间</p>
 * @method void setModificationTimeEnd(integer $ModificationTimeEnd) 设置<p>同步发生的结束时间</p>
 * @method integer getLimit() 获取<p>查询条数</p>
 * @method void setLimit(integer $Limit) 设置<p>查询条数</p>
 */
class DescribeDeviceIdentityBackupHistoryRequest extends AbstractModel
{
    /**
     * @var string <p>集群id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>灾备集群的集群ID</p>
     */
    public $Destination;

    /**
     * @var string <p>设备ID</p>
     */
    public $DeviceId;

    /**
     * @var integer <p>同步发生的开始时间</p>
     */
    public $ModificationTimeStart;

    /**
     * @var integer <p>同步发生的结束时间</p>
     */
    public $ModificationTimeEnd;

    /**
     * @var integer <p>查询条数</p>
     */
    public $Limit;

    /**
     * @param string $InstanceId <p>集群id</p>
     * @param string $Destination <p>灾备集群的集群ID</p>
     * @param string $DeviceId <p>设备ID</p>
     * @param integer $ModificationTimeStart <p>同步发生的开始时间</p>
     * @param integer $ModificationTimeEnd <p>同步发生的结束时间</p>
     * @param integer $Limit <p>查询条数</p>
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

        if (array_key_exists("Destination",$param) and $param["Destination"] !== null) {
            $this->Destination = $param["Destination"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("ModificationTimeStart",$param) and $param["ModificationTimeStart"] !== null) {
            $this->ModificationTimeStart = $param["ModificationTimeStart"];
        }

        if (array_key_exists("ModificationTimeEnd",$param) and $param["ModificationTimeEnd"] !== null) {
            $this->ModificationTimeEnd = $param["ModificationTimeEnd"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
