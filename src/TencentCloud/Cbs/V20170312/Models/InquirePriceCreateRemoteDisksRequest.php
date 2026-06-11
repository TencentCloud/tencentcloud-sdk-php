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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceCreateRemoteDisks请求参数结构体
 *
 * @method string getDiskChargeType() 获取<p>单副本SSD硬盘计费类型。</p><p>枚举值：</p><ul><li>PREPAID： 预付费，即包年包月</li><li>POSTPAID_BY_HOUR： 按小时后付费</li></ul>
 * @method void setDiskChargeType(string $DiskChargeType) 设置<p>单副本SSD硬盘计费类型。</p><p>枚举值：</p><ul><li>PREPAID： 预付费，即包年包月</li><li>POSTPAID_BY_HOUR： 按小时后付费</li></ul>
 * @method integer getDiskSize() 获取<p>单副本SSD硬盘大小，单位为GiB。</p><p>取值范围：[2000, 7000]</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>单副本SSD硬盘大小，单位为GiB。</p><p>取值范围：[2000, 7000]</p>
 * @method RemoteDiskChargePrepaid getDiskChargePrepaid() 获取<p>预付费模式，即包年包月相关参数设置。通过该参数指定包年包月云盘的购买时长、是否设置自动续费等属性。 创建预付费云盘该参数必传，创建按小时后付费云盘无需传该参数。</p>
 * @method void setDiskChargePrepaid(RemoteDiskChargePrepaid $DiskChargePrepaid) 设置<p>预付费模式，即包年包月相关参数设置。通过该参数指定包年包月云盘的购买时长、是否设置自动续费等属性。 创建预付费云盘该参数必传，创建按小时后付费云盘无需传该参数。</p>
 * @method integer getDiskCount() 获取<p>购买单副本SSD硬盘的数量。不填则默认为1。</p>
 * @method void setDiskCount(integer $DiskCount) 设置<p>购买单副本SSD硬盘的数量。不填则默认为1。</p>
 */
class InquirePriceCreateRemoteDisksRequest extends AbstractModel
{
    /**
     * @var string <p>单副本SSD硬盘计费类型。</p><p>枚举值：</p><ul><li>PREPAID： 预付费，即包年包月</li><li>POSTPAID_BY_HOUR： 按小时后付费</li></ul>
     */
    public $DiskChargeType;

    /**
     * @var integer <p>单副本SSD硬盘大小，单位为GiB。</p><p>取值范围：[2000, 7000]</p>
     */
    public $DiskSize;

    /**
     * @var RemoteDiskChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数指定包年包月云盘的购买时长、是否设置自动续费等属性。 创建预付费云盘该参数必传，创建按小时后付费云盘无需传该参数。</p>
     */
    public $DiskChargePrepaid;

    /**
     * @var integer <p>购买单副本SSD硬盘的数量。不填则默认为1。</p>
     */
    public $DiskCount;

    /**
     * @param string $DiskChargeType <p>单副本SSD硬盘计费类型。</p><p>枚举值：</p><ul><li>PREPAID： 预付费，即包年包月</li><li>POSTPAID_BY_HOUR： 按小时后付费</li></ul>
     * @param integer $DiskSize <p>单副本SSD硬盘大小，单位为GiB。</p><p>取值范围：[2000, 7000]</p>
     * @param RemoteDiskChargePrepaid $DiskChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数指定包年包月云盘的购买时长、是否设置自动续费等属性。 创建预付费云盘该参数必传，创建按小时后付费云盘无需传该参数。</p>
     * @param integer $DiskCount <p>购买单副本SSD硬盘的数量。不填则默认为1。</p>
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
        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskChargePrepaid",$param) and $param["DiskChargePrepaid"] !== null) {
            $this->DiskChargePrepaid = new RemoteDiskChargePrepaid();
            $this->DiskChargePrepaid->deserialize($param["DiskChargePrepaid"]);
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }
    }
}
