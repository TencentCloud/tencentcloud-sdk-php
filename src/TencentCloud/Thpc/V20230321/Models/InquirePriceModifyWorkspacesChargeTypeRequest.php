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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceModifyWorkspacesChargeType请求参数结构体
 *
 * @method array getSpaceIds() 获取<p>工作空间 ID 列表。每次请求的工作空间计费模式必须一致。</p>
 * @method void setSpaceIds(array $SpaceIds) 设置<p>工作空间 ID 列表。每次请求的工作空间计费模式必须一致。</p>
 * @method string getSpaceChargeType() 获取<p>转换的目标计费模式。当前仅支持 PREPAID（按量计费转包年包月）。</p>
 * @method void setSpaceChargeType(string $SpaceChargeType) 设置<p>转换的目标计费模式。当前仅支持 PREPAID（按量计费转包年包月）。</p>
 * @method boolean getDryRun() 获取<p>是否只进行参数和资源预检。true：不发起询价、组单或正式下单；false：执行对应操作。默认为 false。</p>
 * @method void setDryRun(boolean $DryRun) 设置<p>是否只进行参数和资源预检。true：不发起询价、组单或正式下单；false：执行对应操作。默认为 false。</p>
 * @method SpaceChargePrepaid getSpaceChargePrepaid() 获取<p>预付费参数。Period 和 RenewFlag 均为可选字段；未传入时后端使用默认值 Period=1、RenewFlag=NOTIFY_AND_MANUAL_RENEW。</p>
 * @method void setSpaceChargePrepaid(SpaceChargePrepaid $SpaceChargePrepaid) 设置<p>预付费参数。Period 和 RenewFlag 均为可选字段；未传入时后端使用默认值 Period=1、RenewFlag=NOTIFY_AND_MANUAL_RENEW。</p>
 */
class InquirePriceModifyWorkspacesChargeTypeRequest extends AbstractModel
{
    /**
     * @var array <p>工作空间 ID 列表。每次请求的工作空间计费模式必须一致。</p>
     */
    public $SpaceIds;

    /**
     * @var string <p>转换的目标计费模式。当前仅支持 PREPAID（按量计费转包年包月）。</p>
     */
    public $SpaceChargeType;

    /**
     * @var boolean <p>是否只进行参数和资源预检。true：不发起询价、组单或正式下单；false：执行对应操作。默认为 false。</p>
     */
    public $DryRun;

    /**
     * @var SpaceChargePrepaid <p>预付费参数。Period 和 RenewFlag 均为可选字段；未传入时后端使用默认值 Period=1、RenewFlag=NOTIFY_AND_MANUAL_RENEW。</p>
     */
    public $SpaceChargePrepaid;

    /**
     * @param array $SpaceIds <p>工作空间 ID 列表。每次请求的工作空间计费模式必须一致。</p>
     * @param string $SpaceChargeType <p>转换的目标计费模式。当前仅支持 PREPAID（按量计费转包年包月）。</p>
     * @param boolean $DryRun <p>是否只进行参数和资源预检。true：不发起询价、组单或正式下单；false：执行对应操作。默认为 false。</p>
     * @param SpaceChargePrepaid $SpaceChargePrepaid <p>预付费参数。Period 和 RenewFlag 均为可选字段；未传入时后端使用默认值 Period=1、RenewFlag=NOTIFY_AND_MANUAL_RENEW。</p>
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
        if (array_key_exists("SpaceIds",$param) and $param["SpaceIds"] !== null) {
            $this->SpaceIds = $param["SpaceIds"];
        }

        if (array_key_exists("SpaceChargeType",$param) and $param["SpaceChargeType"] !== null) {
            $this->SpaceChargeType = $param["SpaceChargeType"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("SpaceChargePrepaid",$param) and $param["SpaceChargePrepaid"] !== null) {
            $this->SpaceChargePrepaid = new SpaceChargePrepaid();
            $this->SpaceChargePrepaid->deserialize($param["SpaceChargePrepaid"]);
        }
    }
}
