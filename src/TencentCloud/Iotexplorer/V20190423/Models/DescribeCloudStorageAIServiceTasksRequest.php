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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudStorageAIServiceTasks请求参数结构体
 *
 * @method string getProductId() 获取产品 ID
 * @method void setProductId(string $ProductId) 设置产品 ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getServiceType() 获取云存 AI 服务类型。可选值：
- `RealtimeObjectDetect`：目标检测
- `Highlight`：视频浓缩
- `VideoToText`：视频语义理解
 * @method void setServiceType(string $ServiceType) 设置云存 AI 服务类型。可选值：
- `RealtimeObjectDetect`：目标检测
- `Highlight`：视频浓缩
- `VideoToText`：视频语义理解
 * @method integer getLimit() 获取分页拉取数量
 * @method void setLimit(integer $Limit) 设置分页拉取数量
 * @method integer getOffset() 获取分页拉取偏移
 * @method void setOffset(integer $Offset) 设置分页拉取偏移
 * @method integer getStatus() 获取任务状态。可选值：
- （不传）：查询全部状态的任务
- `1`：失败
- `2`：成功但结果为空
- `3`：成功且结果非空
- `4`：执行中
 * @method void setStatus(integer $Status) 设置任务状态。可选值：
- （不传）：查询全部状态的任务
- `1`：失败
- `2`：成功但结果为空
- `3`：成功且结果非空
- `4`：执行中
 * @method string getUserId() 获取用户 ID
 * @method void setUserId(string $UserId) 设置用户 ID
 * @method integer getChannelId() 获取通道 ID
 * @method void setChannelId(integer $ChannelId) 设置通道 ID
 * @method array getDeviceNames() 获取设备名称列表。

当需要同时查询多台设备的任务列表时传入，优先级高于参数 `DeviceName`
 * @method void setDeviceNames(array $DeviceNames) 设置设备名称列表。

当需要同时查询多台设备的任务列表时传入，优先级高于参数 `DeviceName`
 * @method integer getStartTime() 获取查询任务时间范围的起始时间（秒级 UNIX 时间戳）
 * @method void setStartTime(integer $StartTime) 设置查询任务时间范围的起始时间（秒级 UNIX 时间戳）
 * @method integer getEndTime() 获取查询任务时间范围的结束时间（秒级 UNIX 时间戳）
 * @method void setEndTime(integer $EndTime) 设置查询任务时间范围的结束时间（秒级 UNIX 时间戳）
 * @method integer getFileURLExpireTime() 获取下载 URL 的过期时间。

若传入该参数，则响应中将包含所有文件的下载 URL
 * @method void setFileURLExpireTime(integer $FileURLExpireTime) 设置下载 URL 的过期时间。

若传入该参数，则响应中将包含所有文件的下载 URL
 */
class DescribeCloudStorageAIServiceTasksRequest extends AbstractModel
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
     * @var string 云存 AI 服务类型。可选值：
- `RealtimeObjectDetect`：目标检测
- `Highlight`：视频浓缩
- `VideoToText`：视频语义理解
     */
    public $ServiceType;

    /**
     * @var integer 分页拉取数量
     */
    public $Limit;

    /**
     * @var integer 分页拉取偏移
     */
    public $Offset;

    /**
     * @var integer 任务状态。可选值：
- （不传）：查询全部状态的任务
- `1`：失败
- `2`：成功但结果为空
- `3`：成功且结果非空
- `4`：执行中
     */
    public $Status;

    /**
     * @var string 用户 ID
     */
    public $UserId;

    /**
     * @var integer 通道 ID
     */
    public $ChannelId;

    /**
     * @var array 设备名称列表。

当需要同时查询多台设备的任务列表时传入，优先级高于参数 `DeviceName`
     */
    public $DeviceNames;

    /**
     * @var integer 查询任务时间范围的起始时间（秒级 UNIX 时间戳）
     */
    public $StartTime;

    /**
     * @var integer 查询任务时间范围的结束时间（秒级 UNIX 时间戳）
     */
    public $EndTime;

    /**
     * @var integer 下载 URL 的过期时间。

若传入该参数，则响应中将包含所有文件的下载 URL
     */
    public $FileURLExpireTime;

    /**
     * @param string $ProductId 产品 ID
     * @param string $DeviceName 设备名称
     * @param string $ServiceType 云存 AI 服务类型。可选值：
- `RealtimeObjectDetect`：目标检测
- `Highlight`：视频浓缩
- `VideoToText`：视频语义理解
     * @param integer $Limit 分页拉取数量
     * @param integer $Offset 分页拉取偏移
     * @param integer $Status 任务状态。可选值：
- （不传）：查询全部状态的任务
- `1`：失败
- `2`：成功但结果为空
- `3`：成功且结果非空
- `4`：执行中
     * @param string $UserId 用户 ID
     * @param integer $ChannelId 通道 ID
     * @param array $DeviceNames 设备名称列表。

当需要同时查询多台设备的任务列表时传入，优先级高于参数 `DeviceName`
     * @param integer $StartTime 查询任务时间范围的起始时间（秒级 UNIX 时间戳）
     * @param integer $EndTime 查询任务时间范围的结束时间（秒级 UNIX 时间戳）
     * @param integer $FileURLExpireTime 下载 URL 的过期时间。

若传入该参数，则响应中将包含所有文件的下载 URL
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

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("DeviceNames",$param) and $param["DeviceNames"] !== null) {
            $this->DeviceNames = $param["DeviceNames"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FileURLExpireTime",$param) and $param["FileURLExpireTime"] !== null) {
            $this->FileURLExpireTime = $param["FileURLExpireTime"];
        }
    }
}
