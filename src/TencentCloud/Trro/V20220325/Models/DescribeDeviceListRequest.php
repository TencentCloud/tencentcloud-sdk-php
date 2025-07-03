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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceList请求参数结构体
 *
 * @method string getProjectId() 获取设备所属项目ID
 * @method void setProjectId(string $ProjectId) 设置设备所属项目ID
 * @method string getDeviceType() 获取设备类型筛选，不填默认为全部设备类型
 * @method void setDeviceType(string $DeviceType) 设置设备类型筛选，不填默认为全部设备类型
 * @method string getSearchWords() 获取对设备ID或Name按关键字进行模糊匹配，不填则不进行模糊匹配
 * @method void setSearchWords(string $SearchWords) 设置对设备ID或Name按关键字进行模糊匹配，不填则不进行模糊匹配
 * @method integer getPageSize() 获取每页返回的最大设备数，不填默认为10
 * @method void setPageSize(integer $PageSize) 设置每页返回的最大设备数，不填默认为10
 * @method integer getPageNumber() 获取当前页码，不填默认为1（首页）
 * @method void setPageNumber(integer $PageNumber) 设置当前页码，不填默认为1（首页）
 * @method string getDeviceStatus() 获取设备状态筛选，不填默认为不过滤。取值：["ready","connected","online"]，online代表ready或connected
 * @method void setDeviceStatus(string $DeviceStatus) 设置设备状态筛选，不填默认为不过滤。取值：["ready","connected","online"]，online代表ready或connected
 */
class DescribeDeviceListRequest extends AbstractModel
{
    /**
     * @var string 设备所属项目ID
     */
    public $ProjectId;

    /**
     * @var string 设备类型筛选，不填默认为全部设备类型
     */
    public $DeviceType;

    /**
     * @var string 对设备ID或Name按关键字进行模糊匹配，不填则不进行模糊匹配
     */
    public $SearchWords;

    /**
     * @var integer 每页返回的最大设备数，不填默认为10
     */
    public $PageSize;

    /**
     * @var integer 当前页码，不填默认为1（首页）
     */
    public $PageNumber;

    /**
     * @var string 设备状态筛选，不填默认为不过滤。取值：["ready","connected","online"]，online代表ready或connected
     */
    public $DeviceStatus;

    /**
     * @param string $ProjectId 设备所属项目ID
     * @param string $DeviceType 设备类型筛选，不填默认为全部设备类型
     * @param string $SearchWords 对设备ID或Name按关键字进行模糊匹配，不填则不进行模糊匹配
     * @param integer $PageSize 每页返回的最大设备数，不填默认为10
     * @param integer $PageNumber 当前页码，不填默认为1（首页）
     * @param string $DeviceStatus 设备状态筛选，不填默认为不过滤。取值：["ready","connected","online"]，online代表ready或connected
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("SearchWords",$param) and $param["SearchWords"] !== null) {
            $this->SearchWords = $param["SearchWords"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("DeviceStatus",$param) and $param["DeviceStatus"] !== null) {
            $this->DeviceStatus = $param["DeviceStatus"];
        }
    }
}
