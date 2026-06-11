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
 * CreateRemoteDisks请求参数结构体
 *
 * @method string getDiskChargeType() 获取<p>单副本SSD硬盘计费类型。 </p><p>枚举值：</p><ul><li>PREPAID： 预付费，即包年包月</li><li>POSTPAID_BY_HOUR： 按小时后付费</li></ul>
 * @method void setDiskChargeType(string $DiskChargeType) 设置<p>单副本SSD硬盘计费类型。 </p><p>枚举值：</p><ul><li>PREPAID： 预付费，即包年包月</li><li>POSTPAID_BY_HOUR： 按小时后付费</li></ul>
 * @method integer getDiskSize() 获取<p>单副本SSD硬盘大小，单位为GiB。</p><p>取值范围：[2000, 7000]</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>单副本SSD硬盘大小，单位为GiB。</p><p>取值范围：[2000, 7000]</p>
 * @method string getInstanceId() 获取<p>待挂载单副本SSD硬盘的CVM实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>待挂载单副本SSD硬盘的CVM实例ID。</p>
 * @method Placement getPlacement() 获取<p>实例所在的位置。通过该参数可以指定实例所属可用区，所属项目。若不指定项目，将在默认项目下进行创建。</p>
 * @method void setPlacement(Placement $Placement) 设置<p>实例所在的位置。通过该参数可以指定实例所属可用区，所属项目。若不指定项目，将在默认项目下进行创建。</p>
 * @method RemoteDiskChargePrepaid getDiskChargePrepaid() 获取<p>预付费模式，即包年包月相关参数设置。通过该参数指定包年包月单副本SSD硬盘的购买时长、是否设置自动续费等属性。 创建预付费单副本SSD硬盘该参数必传，创建按小时后付费单副本SSD硬盘无需传该参数。</p>
 * @method void setDiskChargePrepaid(RemoteDiskChargePrepaid $DiskChargePrepaid) 设置<p>预付费模式，即包年包月相关参数设置。通过该参数指定包年包月单副本SSD硬盘的购买时长、是否设置自动续费等属性。 创建预付费单副本SSD硬盘该参数必传，创建按小时后付费单副本SSD硬盘无需传该参数。</p>
 * @method integer getDiskCount() 获取<p>创建单副本SSD硬盘数量，不传则默认为1。</p>
 * @method void setDiskCount(integer $DiskCount) 设置<p>创建单副本SSD硬盘数量，不传则默认为1。</p>
 * @method string getDiskName() 获取<p>单副本SSD的显示名称。</p>
 * @method void setDiskName(string $DiskName) 设置<p>单副本SSD的显示名称。</p>
 */
class CreateRemoteDisksRequest extends AbstractModel
{
    /**
     * @var string <p>单副本SSD硬盘计费类型。 </p><p>枚举值：</p><ul><li>PREPAID： 预付费，即包年包月</li><li>POSTPAID_BY_HOUR： 按小时后付费</li></ul>
     */
    public $DiskChargeType;

    /**
     * @var integer <p>单副本SSD硬盘大小，单位为GiB。</p><p>取值范围：[2000, 7000]</p>
     */
    public $DiskSize;

    /**
     * @var string <p>待挂载单副本SSD硬盘的CVM实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var Placement <p>实例所在的位置。通过该参数可以指定实例所属可用区，所属项目。若不指定项目，将在默认项目下进行创建。</p>
     */
    public $Placement;

    /**
     * @var RemoteDiskChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数指定包年包月单副本SSD硬盘的购买时长、是否设置自动续费等属性。 创建预付费单副本SSD硬盘该参数必传，创建按小时后付费单副本SSD硬盘无需传该参数。</p>
     */
    public $DiskChargePrepaid;

    /**
     * @var integer <p>创建单副本SSD硬盘数量，不传则默认为1。</p>
     */
    public $DiskCount;

    /**
     * @var string <p>单副本SSD的显示名称。</p>
     */
    public $DiskName;

    /**
     * @param string $DiskChargeType <p>单副本SSD硬盘计费类型。 </p><p>枚举值：</p><ul><li>PREPAID： 预付费，即包年包月</li><li>POSTPAID_BY_HOUR： 按小时后付费</li></ul>
     * @param integer $DiskSize <p>单副本SSD硬盘大小，单位为GiB。</p><p>取值范围：[2000, 7000]</p>
     * @param string $InstanceId <p>待挂载单副本SSD硬盘的CVM实例ID。</p>
     * @param Placement $Placement <p>实例所在的位置。通过该参数可以指定实例所属可用区，所属项目。若不指定项目，将在默认项目下进行创建。</p>
     * @param RemoteDiskChargePrepaid $DiskChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数指定包年包月单副本SSD硬盘的购买时长、是否设置自动续费等属性。 创建预付费单副本SSD硬盘该参数必传，创建按小时后付费单副本SSD硬盘无需传该参数。</p>
     * @param integer $DiskCount <p>创建单副本SSD硬盘数量，不传则默认为1。</p>
     * @param string $DiskName <p>单副本SSD的显示名称。</p>
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("DiskChargePrepaid",$param) and $param["DiskChargePrepaid"] !== null) {
            $this->DiskChargePrepaid = new RemoteDiskChargePrepaid();
            $this->DiskChargePrepaid->deserialize($param["DiskChargePrepaid"]);
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }
    }
}
