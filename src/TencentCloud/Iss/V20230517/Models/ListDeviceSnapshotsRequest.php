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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListDeviceSnapshots请求参数结构体
 *
 * @method string getChannelId() 获取通道ID
 * @method void setChannelId(string $ChannelId) 设置通道ID
 * @method string getDeviceId() 获取设备ID（该字段暂不生效）
 * @method void setDeviceId(string $DeviceId) 设置设备ID（该字段暂不生效）
 * @method integer getStart() 获取查询开始时间，默认查询当天
 * @method void setStart(integer $Start) 设置查询开始时间，默认查询当天
 * @method integer getEnd() 获取查询结束时间，默认查询当天
 * @method void setEnd(integer $End) 设置查询结束时间，默认查询当天
 * @method integer getPageNumber() 获取分页页码，默认1
 * @method void setPageNumber(integer $PageNumber) 设置分页页码，默认1
 * @method integer getPageSize() 获取分页大小，默认200，最大2000
 * @method void setPageSize(integer $PageSize) 设置分页大小，默认200，最大2000
 */
class ListDeviceSnapshotsRequest extends AbstractModel
{
    /**
     * @var string 通道ID
     */
    public $ChannelId;

    /**
     * @var string 设备ID（该字段暂不生效）
     */
    public $DeviceId;

    /**
     * @var integer 查询开始时间，默认查询当天
     */
    public $Start;

    /**
     * @var integer 查询结束时间，默认查询当天
     */
    public $End;

    /**
     * @var integer 分页页码，默认1
     */
    public $PageNumber;

    /**
     * @var integer 分页大小，默认200，最大2000
     */
    public $PageSize;

    /**
     * @param string $ChannelId 通道ID
     * @param string $DeviceId 设备ID（该字段暂不生效）
     * @param integer $Start 查询开始时间，默认查询当天
     * @param integer $End 查询结束时间，默认查询当天
     * @param integer $PageNumber 分页页码，默认1
     * @param integer $PageSize 分页大小，默认200，最大2000
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
