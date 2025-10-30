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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备类型概览信息
 *
 * @method string getDeviceType() 获取设备类型值
 * @method void setDeviceType(string $DeviceType) 设置设备类型值
 * @method string getName() 获取设备类型名称
 * @method void setName(string $Name) 设置设备类型名称
 * @method integer getTotal() 获取汇总数。在线（正常+故障） + 离线
 * @method void setTotal(integer $Total) 设置汇总数。在线（正常+故障） + 离线
 * @method integer getNormal() 获取正常数
 * @method void setNormal(integer $Normal) 设置正常数
 * @method integer getOffline() 获取离线数
 * @method void setOffline(integer $Offline) 设置离线数
 * @method integer getFault() 获取故障数
 * @method void setFault(integer $Fault) 设置故障数
 */
class DeviceTypeOverview extends AbstractModel
{
    /**
     * @var string 设备类型值
     */
    public $DeviceType;

    /**
     * @var string 设备类型名称
     */
    public $Name;

    /**
     * @var integer 汇总数。在线（正常+故障） + 离线
     */
    public $Total;

    /**
     * @var integer 正常数
     */
    public $Normal;

    /**
     * @var integer 离线数
     */
    public $Offline;

    /**
     * @var integer 故障数
     */
    public $Fault;

    /**
     * @param string $DeviceType 设备类型值
     * @param string $Name 设备类型名称
     * @param integer $Total 汇总数。在线（正常+故障） + 离线
     * @param integer $Normal 正常数
     * @param integer $Offline 离线数
     * @param integer $Fault 故障数
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
        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Normal",$param) and $param["Normal"] !== null) {
            $this->Normal = $param["Normal"];
        }

        if (array_key_exists("Offline",$param) and $param["Offline"] !== null) {
            $this->Offline = $param["Offline"];
        }

        if (array_key_exists("Fault",$param) and $param["Fault"] !== null) {
            $this->Fault = $param["Fault"];
        }
    }
}
