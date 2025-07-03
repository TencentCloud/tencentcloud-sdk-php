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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVirtualDeviceGroups请求参数结构体
 *
 * @method string getDomainInstanceId() 获取管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
 * @method void setDomainInstanceId(string $DomainInstanceId) 设置管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
 * @method integer getDeviceVirtualGroupId() 获取添加到的终端自定义分组id。和DeviceVirtualGroupIds互斥，必填其一，优先使用本参数
 * @method void setDeviceVirtualGroupId(integer $DeviceVirtualGroupId) 设置添加到的终端自定义分组id。和DeviceVirtualGroupIds互斥，必填其一，优先使用本参数
 * @method array getDeviceList() 获取必填，操作的设备列表数据
 * @method void setDeviceList(array $DeviceList) 设置必填，操作的设备列表数据
 * @method array getDeviceVirtualGroupIds() 获取要添加的终端自定义分组id列表
 * @method void setDeviceVirtualGroupIds(array $DeviceVirtualGroupIds) 设置要添加的终端自定义分组id列表
 * @method integer getOsType() 获取必填，系统类型（0: win，1：linux，2: mac，3: win_srv，4：android，5：ios   默认值0）
 * @method void setOsType(integer $OsType) 设置必填，系统类型（0: win，1：linux，2: mac，3: win_srv，4：android，5：ios   默认值0）
 */
class ModifyVirtualDeviceGroupsRequest extends AbstractModel
{
    /**
     * @var string 管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
     */
    public $DomainInstanceId;

    /**
     * @var integer 添加到的终端自定义分组id。和DeviceVirtualGroupIds互斥，必填其一，优先使用本参数
     */
    public $DeviceVirtualGroupId;

    /**
     * @var array 必填，操作的设备列表数据
     */
    public $DeviceList;

    /**
     * @var array 要添加的终端自定义分组id列表
     */
    public $DeviceVirtualGroupIds;

    /**
     * @var integer 必填，系统类型（0: win，1：linux，2: mac，3: win_srv，4：android，5：ios   默认值0）
     */
    public $OsType;

    /**
     * @param string $DomainInstanceId 管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
     * @param integer $DeviceVirtualGroupId 添加到的终端自定义分组id。和DeviceVirtualGroupIds互斥，必填其一，优先使用本参数
     * @param array $DeviceList 必填，操作的设备列表数据
     * @param array $DeviceVirtualGroupIds 要添加的终端自定义分组id列表
     * @param integer $OsType 必填，系统类型（0: win，1：linux，2: mac，3: win_srv，4：android，5：ios   默认值0）
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
        if (array_key_exists("DomainInstanceId",$param) and $param["DomainInstanceId"] !== null) {
            $this->DomainInstanceId = $param["DomainInstanceId"];
        }

        if (array_key_exists("DeviceVirtualGroupId",$param) and $param["DeviceVirtualGroupId"] !== null) {
            $this->DeviceVirtualGroupId = $param["DeviceVirtualGroupId"];
        }

        if (array_key_exists("DeviceList",$param) and $param["DeviceList"] !== null) {
            $this->DeviceList = [];
            foreach ($param["DeviceList"] as $key => $value){
                $obj = new ModifyVirtualDeviceGroupsReqItem();
                $obj->deserialize($value);
                array_push($this->DeviceList, $obj);
            }
        }

        if (array_key_exists("DeviceVirtualGroupIds",$param) and $param["DeviceVirtualGroupIds"] !== null) {
            $this->DeviceVirtualGroupIds = $param["DeviceVirtualGroupIds"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }
    }
}
