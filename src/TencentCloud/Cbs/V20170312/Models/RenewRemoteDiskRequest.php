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
 * RenewRemoteDisk请求参数结构体
 *
 * @method RemoteDiskChargePrepaid getDiskChargePrepaid() 获取<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月单副本SSD硬盘的续费时长。 在云硬盘与挂载的实例一起续费的场景下，可以指定参数CurInstanceDeadline，此时单副本SSD硬盘会按对齐到实例续费后的到期时间来续费。</p>
 * @method void setDiskChargePrepaid(RemoteDiskChargePrepaid $DiskChargePrepaid) 设置<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月单副本SSD硬盘的续费时长。 在云硬盘与挂载的实例一起续费的场景下，可以指定参数CurInstanceDeadline，此时单副本SSD硬盘会按对齐到实例续费后的到期时间来续费。</p>
 * @method string getRemoteDiskId() 获取<p>单副本SSD硬盘ID。</p>
 * @method void setRemoteDiskId(string $RemoteDiskId) 设置<p>单副本SSD硬盘ID。</p>
 */
class RenewRemoteDiskRequest extends AbstractModel
{
    /**
     * @var RemoteDiskChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月单副本SSD硬盘的续费时长。 在云硬盘与挂载的实例一起续费的场景下，可以指定参数CurInstanceDeadline，此时单副本SSD硬盘会按对齐到实例续费后的到期时间来续费。</p>
     */
    public $DiskChargePrepaid;

    /**
     * @var string <p>单副本SSD硬盘ID。</p>
     */
    public $RemoteDiskId;

    /**
     * @param RemoteDiskChargePrepaid $DiskChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月单副本SSD硬盘的续费时长。 在云硬盘与挂载的实例一起续费的场景下，可以指定参数CurInstanceDeadline，此时单副本SSD硬盘会按对齐到实例续费后的到期时间来续费。</p>
     * @param string $RemoteDiskId <p>单副本SSD硬盘ID。</p>
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
        if (array_key_exists("DiskChargePrepaid",$param) and $param["DiskChargePrepaid"] !== null) {
            $this->DiskChargePrepaid = new RemoteDiskChargePrepaid();
            $this->DiskChargePrepaid->deserialize($param["DiskChargePrepaid"]);
        }

        if (array_key_exists("RemoteDiskId",$param) and $param["RemoteDiskId"] !== null) {
            $this->RemoteDiskId = $param["RemoteDiskId"];
        }
    }
}
