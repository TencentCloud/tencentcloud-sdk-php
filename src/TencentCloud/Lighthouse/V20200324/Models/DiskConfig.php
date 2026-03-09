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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云硬盘配置
 *
 * @method string getZone() 获取<p>可用区。</p>
 * @method void setZone(string $Zone) 设置<p>可用区。</p>
 * @method string getDiskType() 获取<p>云硬盘类型。枚举值如下：</p><li>CLOUD_BASIC：普通云硬盘</li><li>CLOUD_PREMIUM：高性能云硬盘</li><li>CLOUD_SSD：SSD云硬盘</li>
 * @method void setDiskType(string $DiskType) 设置<p>云硬盘类型。枚举值如下：</p><li>CLOUD_BASIC：普通云硬盘</li><li>CLOUD_PREMIUM：高性能云硬盘</li><li>CLOUD_SSD：SSD云硬盘</li>
 * @method string getDiskSalesState() 获取<p>云硬盘可售卖状态。</p>
 * @method void setDiskSalesState(string $DiskSalesState) 设置<p>云硬盘可售卖状态。</p>
 * @method integer getMaxDiskSize() 获取<p>最大云硬盘大小。</p><p>单位：GB</p>
 * @method void setMaxDiskSize(integer $MaxDiskSize) 设置<p>最大云硬盘大小。</p><p>单位：GB</p>
 * @method integer getMinDiskSize() 获取<p>最小云硬盘大小。</p><p>单位：GB</p>
 * @method void setMinDiskSize(integer $MinDiskSize) 设置<p>最小云硬盘大小。</p><p>单位：GB</p>
 * @method integer getDiskStepSize() 获取<p>云硬盘步长。</p><p>单位：GB</p>
 * @method void setDiskStepSize(integer $DiskStepSize) 设置<p>云硬盘步长。</p><p>单位：GB</p>
 */
class DiskConfig extends AbstractModel
{
    /**
     * @var string <p>可用区。</p>
     */
    public $Zone;

    /**
     * @var string <p>云硬盘类型。枚举值如下：</p><li>CLOUD_BASIC：普通云硬盘</li><li>CLOUD_PREMIUM：高性能云硬盘</li><li>CLOUD_SSD：SSD云硬盘</li>
     */
    public $DiskType;

    /**
     * @var string <p>云硬盘可售卖状态。</p>
     */
    public $DiskSalesState;

    /**
     * @var integer <p>最大云硬盘大小。</p><p>单位：GB</p>
     */
    public $MaxDiskSize;

    /**
     * @var integer <p>最小云硬盘大小。</p><p>单位：GB</p>
     */
    public $MinDiskSize;

    /**
     * @var integer <p>云硬盘步长。</p><p>单位：GB</p>
     */
    public $DiskStepSize;

    /**
     * @param string $Zone <p>可用区。</p>
     * @param string $DiskType <p>云硬盘类型。枚举值如下：</p><li>CLOUD_BASIC：普通云硬盘</li><li>CLOUD_PREMIUM：高性能云硬盘</li><li>CLOUD_SSD：SSD云硬盘</li>
     * @param string $DiskSalesState <p>云硬盘可售卖状态。</p>
     * @param integer $MaxDiskSize <p>最大云硬盘大小。</p><p>单位：GB</p>
     * @param integer $MinDiskSize <p>最小云硬盘大小。</p><p>单位：GB</p>
     * @param integer $DiskStepSize <p>云硬盘步长。</p><p>单位：GB</p>
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
