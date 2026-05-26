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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTWeSeeTasks请求参数结构体
 *
 * @method string getProductId() 获取产品 ID
 * @method void setProductId(string $ProductId) 设置产品 ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getServiceCategory() 获取算法类目。可能取值：
- `COMPREHENSION`：视觉理解
 * @method void setServiceCategory(string $ServiceCategory) 设置算法类目。可能取值：
- `COMPREHENSION`：视觉理解
 * @method integer getLimit() 获取分页拉取数量
 * @method void setLimit(integer $Limit) 设置分页拉取数量
 * @method integer getOffset() 获取分页拉取偏移
 * @method void setOffset(integer $Offset) 设置分页拉取偏移
 * @method integer getChannelId() 获取通道 ID
 * @method void setChannelId(integer $ChannelId) 设置通道 ID
 * @method integer getStartTimeMs() 获取查询任务时间范围的起始时间（毫秒级 UNIX 时间戳）。不传则不生效时间范围条件。
 * @method void setStartTimeMs(integer $StartTimeMs) 设置查询任务时间范围的起始时间（毫秒级 UNIX 时间戳）。不传则不生效时间范围条件。
 * @method integer getEndTimeMs() 获取查询任务时间范围的结束时间（毫秒级 UNIX 时间戳）。不传则不生效时间范围条件。
 * @method void setEndTimeMs(integer $EndTimeMs) 设置查询任务时间范围的结束时间（毫秒级 UNIX 时间戳）。不传则不生效时间范围条件。
 * @method integer getStatus() 获取要查询的任务的状态条件。不传则不按照状态过滤，可选值：

- `1`：失败
- `2`：空结果
- `3`：有效结果
 * @method void setStatus(integer $Status) 设置要查询的任务的状态条件。不传则不按照状态过滤，可选值：

- `1`：失败
- `2`：空结果
- `3`：有效结果
 */
class ListTWeSeeTasksRequest extends AbstractModel
{
    /**
     * @var string 产品 ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 算法类目。可能取值：
- `COMPREHENSION`：视觉理解
     */
    public $ServiceCategory;

    /**
     * @var integer 分页拉取数量
     */
    public $Limit;

    /**
     * @var integer 分页拉取偏移
     */
    public $Offset;

    /**
     * @var integer 通道 ID
     */
    public $ChannelId;

    /**
     * @var integer 查询任务时间范围的起始时间（毫秒级 UNIX 时间戳）。不传则不生效时间范围条件。
     */
    public $StartTimeMs;

    /**
     * @var integer 查询任务时间范围的结束时间（毫秒级 UNIX 时间戳）。不传则不生效时间范围条件。
     */
    public $EndTimeMs;

    /**
     * @var integer 要查询的任务的状态条件。不传则不按照状态过滤，可选值：

- `1`：失败
- `2`：空结果
- `3`：有效结果
     */
    public $Status;

    /**
     * @param string $ProductId 产品 ID
     * @param string $DeviceName 设备名称
     * @param string $ServiceCategory 算法类目。可能取值：
- `COMPREHENSION`：视觉理解
     * @param integer $Limit 分页拉取数量
     * @param integer $Offset 分页拉取偏移
     * @param integer $ChannelId 通道 ID
     * @param integer $StartTimeMs 查询任务时间范围的起始时间（毫秒级 UNIX 时间戳）。不传则不生效时间范围条件。
     * @param integer $EndTimeMs 查询任务时间范围的结束时间（毫秒级 UNIX 时间戳）。不传则不生效时间范围条件。
     * @param integer $Status 要查询的任务的状态条件。不传则不按照状态过滤，可选值：

- `1`：失败
- `2`：空结果
- `3`：有效结果
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ServiceCategory",$param) and $param["ServiceCategory"] !== null) {
            $this->ServiceCategory = $param["ServiceCategory"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("StartTimeMs",$param) and $param["StartTimeMs"] !== null) {
            $this->StartTimeMs = $param["StartTimeMs"];
        }

        if (array_key_exists("EndTimeMs",$param) and $param["EndTimeMs"] !== null) {
            $this->EndTimeMs = $param["EndTimeMs"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
