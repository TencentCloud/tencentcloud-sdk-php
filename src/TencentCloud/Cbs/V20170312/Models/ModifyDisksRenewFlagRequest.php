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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDisksRenewFlag请求参数结构体
 *
 * @method array getDiskIds() 获取一个或多个待操作的云硬盘ID，该参数可以通过[DescribeDisks](/document/product/362/16315)接口查询。
 * @method void setDiskIds(array $DiskIds) 设置一个或多个待操作的云硬盘ID，该参数可以通过[DescribeDisks](/document/product/362/16315)接口查询。
 * @method string getRenewFlag() 获取云硬盘的自动续费标识。取值范围：<ul><li>NOTIFY_AND_AUTO_RENEW：通知过期且自动续费</li><li>NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费</li></ul>
 * @method void setRenewFlag(string $RenewFlag) 设置云硬盘的自动续费标识。取值范围：<ul><li>NOTIFY_AND_AUTO_RENEW：通知过期且自动续费</li><li>NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费</li></ul>
 * @method integer getAutoRenewPeriod() 获取该参数支持设置云硬盘的自动续费周期，单位为月。取值范围：[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36]
 * @method void setAutoRenewPeriod(integer $AutoRenewPeriod) 设置该参数支持设置云硬盘的自动续费周期，单位为月。取值范围：[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36]
 */
class ModifyDisksRenewFlagRequest extends AbstractModel
{
    /**
     * @var array 一个或多个待操作的云硬盘ID，该参数可以通过[DescribeDisks](/document/product/362/16315)接口查询。
     */
    public $DiskIds;

    /**
     * @var string 云硬盘的自动续费标识。取值范围：<ul><li>NOTIFY_AND_AUTO_RENEW：通知过期且自动续费</li><li>NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费</li></ul>
     */
    public $RenewFlag;

    /**
     * @var integer 该参数支持设置云硬盘的自动续费周期，单位为月。取值范围：[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36]
     */
    public $AutoRenewPeriod;

    /**
     * @param array $DiskIds 一个或多个待操作的云硬盘ID，该参数可以通过[DescribeDisks](/document/product/362/16315)接口查询。
     * @param string $RenewFlag 云硬盘的自动续费标识。取值范围：<ul><li>NOTIFY_AND_AUTO_RENEW：通知过期且自动续费</li><li>NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费</li></ul>
     * @param integer $AutoRenewPeriod 该参数支持设置云硬盘的自动续费周期，单位为月。取值范围：[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36]
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

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("AutoRenewPeriod",$param) and $param["AutoRenewPeriod"] !== null) {
            $this->AutoRenewPeriod = $param["AutoRenewPeriod"];
        }
    }
}
