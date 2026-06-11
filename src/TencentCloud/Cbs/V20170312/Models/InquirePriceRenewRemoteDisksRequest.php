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
 * InquirePriceRenewRemoteDisks请求参数结构体
 *
 * @method array getDiskChargePrepaidSet() 获取<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月云盘的购买时长。如果在该参数中指定CurInstanceDeadline，则会按对齐到子机到期时间来续费。如果是批量续费询价，该参数与Disks参数一一对应，元素数量需保持一致。</p>
 * @method void setDiskChargePrepaidSet(array $DiskChargePrepaidSet) 设置<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月云盘的购买时长。如果在该参数中指定CurInstanceDeadline，则会按对齐到子机到期时间来续费。如果是批量续费询价，该参数与Disks参数一一对应，元素数量需保持一致。</p>
 * @method array getRemoteDiskIds() 获取<p>一个或多个单副本SSD硬盘ID。</p>
 * @method void setRemoteDiskIds(array $RemoteDiskIds) 设置<p>一个或多个单副本SSD硬盘ID。</p>
 */
class InquirePriceRenewRemoteDisksRequest extends AbstractModel
{
    /**
     * @var array <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月云盘的购买时长。如果在该参数中指定CurInstanceDeadline，则会按对齐到子机到期时间来续费。如果是批量续费询价，该参数与Disks参数一一对应，元素数量需保持一致。</p>
     */
    public $DiskChargePrepaidSet;

    /**
     * @var array <p>一个或多个单副本SSD硬盘ID。</p>
     */
    public $RemoteDiskIds;

    /**
     * @param array $DiskChargePrepaidSet <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月云盘的购买时长。如果在该参数中指定CurInstanceDeadline，则会按对齐到子机到期时间来续费。如果是批量续费询价，该参数与Disks参数一一对应，元素数量需保持一致。</p>
     * @param array $RemoteDiskIds <p>一个或多个单副本SSD硬盘ID。</p>
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
        if (array_key_exists("DiskChargePrepaidSet",$param) and $param["DiskChargePrepaidSet"] !== null) {
            $this->DiskChargePrepaidSet = [];
            foreach ($param["DiskChargePrepaidSet"] as $key => $value){
                $obj = new RemoteDiskChargePrepaid();
                $obj->deserialize($value);
                array_push($this->DiskChargePrepaidSet, $obj);
            }
        }

        if (array_key_exists("RemoteDiskIds",$param) and $param["RemoteDiskIds"] !== null) {
            $this->RemoteDiskIds = $param["RemoteDiskIds"];
        }
    }
}
