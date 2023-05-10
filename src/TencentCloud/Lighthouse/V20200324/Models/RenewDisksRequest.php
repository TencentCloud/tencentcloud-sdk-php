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
 * RenewDisks请求参数结构体
 *
 * @method array getDiskIds() 获取云硬盘ID列表。一个或多个待操作的云硬盘ID。可通过[DescribeDisks](https://cloud.tencent.com/document/product/1207/66093)接口返回值中的DiskId获取。每次请求续费数据盘数量总计上限为50。
 * @method void setDiskIds(array $DiskIds) 设置云硬盘ID列表。一个或多个待操作的云硬盘ID。可通过[DescribeDisks](https://cloud.tencent.com/document/product/1207/66093)接口返回值中的DiskId获取。每次请求续费数据盘数量总计上限为50。
 * @method RenewDiskChargePrepaid getRenewDiskChargePrepaid() 获取续费云硬盘包年包月相关参数设置。
 * @method void setRenewDiskChargePrepaid(RenewDiskChargePrepaid $RenewDiskChargePrepaid) 设置续费云硬盘包年包月相关参数设置。
 * @method boolean getAutoVoucher() 获取是否自动使用代金券。默认不使用。
 * @method void setAutoVoucher(boolean $AutoVoucher) 设置是否自动使用代金券。默认不使用。
 */
class RenewDisksRequest extends AbstractModel
{
    /**
     * @var array 云硬盘ID列表。一个或多个待操作的云硬盘ID。可通过[DescribeDisks](https://cloud.tencent.com/document/product/1207/66093)接口返回值中的DiskId获取。每次请求续费数据盘数量总计上限为50。
     */
    public $DiskIds;

    /**
     * @var RenewDiskChargePrepaid 续费云硬盘包年包月相关参数设置。
     */
    public $RenewDiskChargePrepaid;

    /**
     * @var boolean 是否自动使用代金券。默认不使用。
     */
    public $AutoVoucher;

    /**
     * @param array $DiskIds 云硬盘ID列表。一个或多个待操作的云硬盘ID。可通过[DescribeDisks](https://cloud.tencent.com/document/product/1207/66093)接口返回值中的DiskId获取。每次请求续费数据盘数量总计上限为50。
     * @param RenewDiskChargePrepaid $RenewDiskChargePrepaid 续费云硬盘包年包月相关参数设置。
     * @param boolean $AutoVoucher 是否自动使用代金券。默认不使用。
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("RenewDiskChargePrepaid",$param) and $param["RenewDiskChargePrepaid"] !== null) {
            $this->RenewDiskChargePrepaid = new RenewDiskChargePrepaid();
            $this->RenewDiskChargePrepaid->deserialize($param["RenewDiskChargePrepaid"]);
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }
    }
}
