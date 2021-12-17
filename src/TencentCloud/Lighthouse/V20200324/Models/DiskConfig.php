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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云硬盘配置
 *
 * @method string getZone() 获取可用区。
 * @method void setZone(string $Zone) 设置可用区。
 * @method string getDiskType() 获取云硬盘类型。
 * @method void setDiskType(string $DiskType) 设置云硬盘类型。
 * @method string getDiskSalesState() 获取云硬盘可售卖状态。
 * @method void setDiskSalesState(string $DiskSalesState) 设置云硬盘可售卖状态。
 * @method integer getMaxDiskSize() 获取最大云硬盘大小。
 * @method void setMaxDiskSize(integer $MaxDiskSize) 设置最大云硬盘大小。
 * @method integer getMinDiskSize() 获取最小云硬盘大小。
 * @method void setMinDiskSize(integer $MinDiskSize) 设置最小云硬盘大小。
 * @method integer getDiskStepSize() 获取云硬盘步长。
 * @method void setDiskStepSize(integer $DiskStepSize) 设置云硬盘步长。
 */
class DiskConfig extends AbstractModel
{
    /**
     * @var string 可用区。
     */
    public $Zone;

    /**
     * @var string 云硬盘类型。
     */
    public $DiskType;

    /**
     * @var string 云硬盘可售卖状态。
     */
    public $DiskSalesState;

    /**
     * @var integer 最大云硬盘大小。
     */
    public $MaxDiskSize;

    /**
     * @var integer 最小云硬盘大小。
     */
    public $MinDiskSize;

    /**
     * @var integer 云硬盘步长。
     */
    public $DiskStepSize;

    /**
     * @param string $Zone 可用区。
     * @param string $DiskType 云硬盘类型。
     * @param string $DiskSalesState 云硬盘可售卖状态。
     * @param integer $MaxDiskSize 最大云硬盘大小。
     * @param integer $MinDiskSize 最小云硬盘大小。
     * @param integer $DiskStepSize 云硬盘步长。
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSalesState",$param) and $param["DiskSalesState"] !== null) {
            $this->DiskSalesState = $param["DiskSalesState"];
        }

        if (array_key_exists("MaxDiskSize",$param) and $param["MaxDiskSize"] !== null) {
            $this->MaxDiskSize = $param["MaxDiskSize"];
        }

        if (array_key_exists("MinDiskSize",$param) and $param["MinDiskSize"] !== null) {
            $this->MinDiskSize = $param["MinDiskSize"];
        }

        if (array_key_exists("DiskStepSize",$param) and $param["DiskStepSize"] !== null) {
            $this->DiskStepSize = $param["DiskStepSize"];
        }
    }
}
