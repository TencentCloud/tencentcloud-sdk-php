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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCertificatesExpiringNotificationSwitch请求参数结构体
 *
 * @method array getCertificateIds() 获取证书ID列表。最多50个
 * @method void setCertificateIds(array $CertificateIds) 设置证书ID列表。最多50个
 * @method integer getSwitchStatus() 获取0:不忽略通知。1:忽略通知
 * @method void setSwitchStatus(integer $SwitchStatus) 设置0:不忽略通知。1:忽略通知
 */
class ModifyCertificatesExpiringNotificationSwitchRequest extends AbstractModel
{
    /**
     * @var array 证书ID列表。最多50个
     */
    public $CertificateIds;

    /**
     * @var integer 0:不忽略通知。1:忽略通知
     */
    public $SwitchStatus;

    /**
     * @param array $CertificateIds 证书ID列表。最多50个
     * @param integer $SwitchStatus 0:不忽略通知。1:忽略通知
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
        if (array_key_exists("CertificateIds",$param) and $param["CertificateIds"] !== null) {
            $this->CertificateIds = $param["CertificateIds"];
        }

        if (array_key_exists("SwitchStatus",$param) and $param["SwitchStatus"] !== null) {
            $this->SwitchStatus = $param["SwitchStatus"];
        }
    }
}
