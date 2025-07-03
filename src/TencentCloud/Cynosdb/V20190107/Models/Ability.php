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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群支持的功能
 *
 * @method string getIsSupportSlaveZone() 获取是否支持从可用区
 * @method void setIsSupportSlaveZone(string $IsSupportSlaveZone) 设置是否支持从可用区
 * @method string getNonsupportSlaveZoneReason() 获取不支持从可用区的原因
 * @method void setNonsupportSlaveZoneReason(string $NonsupportSlaveZoneReason) 设置不支持从可用区的原因
 * @method string getIsSupportRo() 获取是否支持RO实例
 * @method void setIsSupportRo(string $IsSupportRo) 设置是否支持RO实例
 * @method string getNonsupportRoReason() 获取不支持RO实例的原因
 * @method void setNonsupportRoReason(string $NonsupportRoReason) 设置不支持RO实例的原因
 * @method string getIsSupportManualSnapshot() 获取是否支持手动发起快照备份
 * @method void setIsSupportManualSnapshot(string $IsSupportManualSnapshot) 设置是否支持手动发起快照备份
 * @method string getIsSupportTransparentDataEncryption() 获取是否支持透明数据加密
 * @method void setIsSupportTransparentDataEncryption(string $IsSupportTransparentDataEncryption) 设置是否支持透明数据加密
 * @method string getNoSupportTransparentDataEncryptionReason() 获取不支持透明数据加密原因
 * @method void setNoSupportTransparentDataEncryptionReason(string $NoSupportTransparentDataEncryptionReason) 设置不支持透明数据加密原因
 * @method string getIsSupportManualLogic() 获取是否支持手动发起逻辑备份
 * @method void setIsSupportManualLogic(string $IsSupportManualLogic) 设置是否支持手动发起逻辑备份
 */
class Ability extends AbstractModel
{
    /**
     * @var string 是否支持从可用区
     */
    public $IsSupportSlaveZone;

    /**
     * @var string 不支持从可用区的原因
     */
    public $NonsupportSlaveZoneReason;

    /**
     * @var string 是否支持RO实例
     */
    public $IsSupportRo;

    /**
     * @var string 不支持RO实例的原因
     */
    public $NonsupportRoReason;

    /**
     * @var string 是否支持手动发起快照备份
     */
    public $IsSupportManualSnapshot;

    /**
     * @var string 是否支持透明数据加密
     */
    public $IsSupportTransparentDataEncryption;

    /**
     * @var string 不支持透明数据加密原因
     */
    public $NoSupportTransparentDataEncryptionReason;

    /**
     * @var string 是否支持手动发起逻辑备份
     */
    public $IsSupportManualLogic;

    /**
     * @param string $IsSupportSlaveZone 是否支持从可用区
     * @param string $NonsupportSlaveZoneReason 不支持从可用区的原因
     * @param string $IsSupportRo 是否支持RO实例
     * @param string $NonsupportRoReason 不支持RO实例的原因
     * @param string $IsSupportManualSnapshot 是否支持手动发起快照备份
     * @param string $IsSupportTransparentDataEncryption 是否支持透明数据加密
     * @param string $NoSupportTransparentDataEncryptionReason 不支持透明数据加密原因
     * @param string $IsSupportManualLogic 是否支持手动发起逻辑备份
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
        if (array_key_exists("IsSupportSlaveZone",$param) and $param["IsSupportSlaveZone"] !== null) {
            $this->IsSupportSlaveZone = $param["IsSupportSlaveZone"];
        }

        if (array_key_exists("NonsupportSlaveZoneReason",$param) and $param["NonsupportSlaveZoneReason"] !== null) {
            $this->NonsupportSlaveZoneReason = $param["NonsupportSlaveZoneReason"];
        }

        if (array_key_exists("IsSupportRo",$param) and $param["IsSupportRo"] !== null) {
            $this->IsSupportRo = $param["IsSupportRo"];
        }

        if (array_key_exists("NonsupportRoReason",$param) and $param["NonsupportRoReason"] !== null) {
            $this->NonsupportRoReason = $param["NonsupportRoReason"];
        }

        if (array_key_exists("IsSupportManualSnapshot",$param) and $param["IsSupportManualSnapshot"] !== null) {
            $this->IsSupportManualSnapshot = $param["IsSupportManualSnapshot"];
        }

        if (array_key_exists("IsSupportTransparentDataEncryption",$param) and $param["IsSupportTransparentDataEncryption"] !== null) {
            $this->IsSupportTransparentDataEncryption = $param["IsSupportTransparentDataEncryption"];
        }

        if (array_key_exists("NoSupportTransparentDataEncryptionReason",$param) and $param["NoSupportTransparentDataEncryptionReason"] !== null) {
            $this->NoSupportTransparentDataEncryptionReason = $param["NoSupportTransparentDataEncryptionReason"];
        }

        if (array_key_exists("IsSupportManualLogic",$param) and $param["IsSupportManualLogic"] !== null) {
            $this->IsSupportManualLogic = $param["IsSupportManualLogic"];
        }
    }
}
