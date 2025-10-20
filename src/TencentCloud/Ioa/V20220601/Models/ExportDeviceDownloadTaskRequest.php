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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportDeviceDownloadTask请求参数结构体
 *
 * @method integer getOsType() 获取系统类型（0: win，1：linux，2: mac，4：android，5：ios；默认值0）
 * @method void setOsType(integer $OsType) 设置系统类型（0: win，1：linux，2: mac，4：android，5：ios；默认值0）
 * @method string getDomainInstanceId() 获取管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
 * @method void setDomainInstanceId(string $DomainInstanceId) 设置管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
 * @method integer getGroupId() 获取分组id
 * @method void setGroupId(integer $GroupId) 设置分组id
 * @method integer getOnlineStatus() 获取 在线状态 2 在线 0，1 离线
 * @method void setOnlineStatus(integer $OnlineStatus) 设置 在线状态 2 在线 0，1 离线
 * @method string getExportOrder() 获取导出顺序，接口返回的数据字段
 * @method void setExportOrder(string $ExportOrder) 设置导出顺序，接口返回的数据字段
 * @method integer getExportType() 获取 导出类型， 0：终端树；7:硬件信息列表导出；
 * @method void setExportType(integer $ExportType) 设置 导出类型， 0：终端树；7:硬件信息列表导出；
 * @method Condition getCondition() 获取过滤条件。同DescribeDevices接口
 * @method void setCondition(Condition $Condition) 设置过滤条件。同DescribeDevices接口
 */
class ExportDeviceDownloadTaskRequest extends AbstractModel
{
    /**
     * @var integer 系统类型（0: win，1：linux，2: mac，4：android，5：ios；默认值0）
     */
    public $OsType;

    /**
     * @var string 管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
     */
    public $DomainInstanceId;

    /**
     * @var integer 分组id
     */
    public $GroupId;

    /**
     * @var integer  在线状态 2 在线 0，1 离线
     */
    public $OnlineStatus;

    /**
     * @var string 导出顺序，接口返回的数据字段
     */
    public $ExportOrder;

    /**
     * @var integer  导出类型， 0：终端树；7:硬件信息列表导出；
     */
    public $ExportType;

    /**
     * @var Condition 过滤条件。同DescribeDevices接口
     */
    public $Condition;

    /**
     * @param integer $OsType 系统类型（0: win，1：linux，2: mac，4：android，5：ios；默认值0）
     * @param string $DomainInstanceId 管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
     * @param integer $GroupId 分组id
     * @param integer $OnlineStatus  在线状态 2 在线 0，1 离线
     * @param string $ExportOrder 导出顺序，接口返回的数据字段
     * @param integer $ExportType  导出类型， 0：终端树；7:硬件信息列表导出；
     * @param Condition $Condition 过滤条件。同DescribeDevices接口
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
        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("DomainInstanceId",$param) and $param["DomainInstanceId"] !== null) {
            $this->DomainInstanceId = $param["DomainInstanceId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("OnlineStatus",$param) and $param["OnlineStatus"] !== null) {
            $this->OnlineStatus = $param["OnlineStatus"];
        }

        if (array_key_exists("ExportOrder",$param) and $param["ExportOrder"] !== null) {
            $this->ExportOrder = $param["ExportOrder"];
        }

        if (array_key_exists("ExportType",$param) and $param["ExportType"] !== null) {
            $this->ExportType = $param["ExportType"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new Condition();
            $this->Condition->deserialize($param["Condition"]);
        }
    }
}
