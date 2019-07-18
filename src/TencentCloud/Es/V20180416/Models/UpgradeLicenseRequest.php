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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getLicenseType() 获取License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum
 * @method void setLicenseType(string $LicenseType) 设置License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum
 * @method integer getAutoVoucher() 获取是否自动使用代金券<li>0：不自动使用</li><li>1：自动使用</li>默认值0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券<li>0：不自动使用</li><li>1：自动使用</li>默认值0
 * @method array getVoucherIds() 获取代金券ID列表（目前仅支持指定一张代金券）
 * @method void setVoucherIds(array $VoucherIds) 设置代金券ID列表（目前仅支持指定一张代金券）
 */

/**
 *UpgradeLicense请求参数结构体
 */
class UpgradeLicenseRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum
     */
    public $LicenseType;

    /**
     * @var integer 是否自动使用代金券<li>0：不自动使用</li><li>1：自动使用</li>默认值0
     */
    public $AutoVoucher;

    /**
     * @var array 代金券ID列表（目前仅支持指定一张代金券）
     */
    public $VoucherIds;
    /**
     * @param string $InstanceId 实例ID
     * @param string $LicenseType License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum
     * @param integer $AutoVoucher 是否自动使用代金券<li>0：不自动使用</li><li>1：自动使用</li>默认值0
     * @param array $VoucherIds 代金券ID列表（目前仅支持指定一张代金券）
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }
    }
}
