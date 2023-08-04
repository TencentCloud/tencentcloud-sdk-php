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
 * ListRecordPlanDevices请求参数结构体
 *
 * @method string getPlanId() 获取上云计划ID
 * @method void setPlanId(string $PlanId) 设置上云计划ID
 * @method integer getPageSize() 获取每页最大数量
 * @method void setPageSize(integer $PageSize) 设置每页最大数量
 * @method integer getPageNumber() 获取第几页
 * @method void setPageNumber(integer $PageNumber) 设置第几页
 * @method string getDeviceName() 获取按照设备名称查询，为空时，不参考该参数
通道名称、设备名称、组织名称同时只有一个有效，如果同时多个字段有值，按照通道名称、设备名称、组织名称的优先级顺序查询，如果都为空，则全量查询。长度不超过32字节
 * @method void setDeviceName(string $DeviceName) 设置按照设备名称查询，为空时，不参考该参数
通道名称、设备名称、组织名称同时只有一个有效，如果同时多个字段有值，按照通道名称、设备名称、组织名称的优先级顺序查询，如果都为空，则全量查询。长度不超过32字节
 * @method string getChannelName() 获取按照通道名称查询，为空时，不参考该参数
通道名称、设备名称、组织名称同时只有一个有效，如果同时多个字段有值，按照通道名称、设备名称、组织名称的优先级顺序查询，如果都为空，则全量查询。长度不超过32字节
 * @method void setChannelName(string $ChannelName) 设置按照通道名称查询，为空时，不参考该参数
通道名称、设备名称、组织名称同时只有一个有效，如果同时多个字段有值，按照通道名称、设备名称、组织名称的优先级顺序查询，如果都为空，则全量查询。长度不超过32字节
 * @method string getOrganizationName() 获取按照组织名称查询|，为空时，不参考该参数
通道名称、设备名称、组织名称同时只有一个有效，如果同时多个字段有值，按照通道名称、设备名称、组织名称的优先级顺序查询，如果都为空，则全量查询。长度不超过32字节
 * @method void setOrganizationName(string $OrganizationName) 设置按照组织名称查询|，为空时，不参考该参数
通道名称、设备名称、组织名称同时只有一个有效，如果同时多个字段有值，按照通道名称、设备名称、组织名称的优先级顺序查询，如果都为空，则全量查询。长度不超过32字节
 */
class ListRecordPlanDevicesRequest extends AbstractModel
{
    /**
     * @var string 上云计划ID
     */
    public $PlanId;

    /**
     * @var integer 每页最大数量
     */
    public $PageSize;

    /**
     * @var integer 第几页
     */
    public $PageNumber;

    /**
     * @var string 按照设备名称查询，为空时，不参考该参数
通道名称、设备名称、组织名称同时只有一个有效，如果同时多个字段有值，按照通道名称、设备名称、组织名称的优先级顺序查询，如果都为空，则全量查询。长度不超过32字节
     */
    public $DeviceName;

    /**
     * @var string 按照通道名称查询，为空时，不参考该参数
通道名称、设备名称、组织名称同时只有一个有效，如果同时多个字段有值，按照通道名称、设备名称、组织名称的优先级顺序查询，如果都为空，则全量查询。长度不超过32字节
     */
    public $ChannelName;

    /**
     * @var string 按照组织名称查询|，为空时，不参考该参数
通道名称、设备名称、组织名称同时只有一个有效，如果同时多个字段有值，按照通道名称、设备名称、组织名称的优先级顺序查询，如果都为空，则全量查询。长度不超过32字节
     */
    public $OrganizationName;

    /**
     * @param string $PlanId 上云计划ID
     * @param integer $PageSize 每页最大数量
     * @param integer $PageNumber 第几页
     * @param string $DeviceName 按照设备名称查询，为空时，不参考该参数
通道名称、设备名称、组织名称同时只有一个有效，如果同时多个字段有值，按照通道名称、设备名称、组织名称的优先级顺序查询，如果都为空，则全量查询。长度不超过32字节
     * @param string $ChannelName 按照通道名称查询，为空时，不参考该参数
通道名称、设备名称、组织名称同时只有一个有效，如果同时多个字段有值，按照通道名称、设备名称、组织名称的优先级顺序查询，如果都为空，则全量查询。长度不超过32字节
     * @param string $OrganizationName 按照组织名称查询|，为空时，不参考该参数
通道名称、设备名称、组织名称同时只有一个有效，如果同时多个字段有值，按照通道名称、设备名称、组织名称的优先级顺序查询，如果都为空，则全量查询。长度不超过32字节
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }
    }
}
