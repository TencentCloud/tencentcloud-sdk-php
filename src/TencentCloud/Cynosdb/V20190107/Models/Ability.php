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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群支持的功能
 *
 * @method string getIsSupportSlaveZone() 获取<p>是否支持从可用区</p>
 * @method void setIsSupportSlaveZone(string $IsSupportSlaveZone) 设置<p>是否支持从可用区</p>
 * @method string getNonsupportSlaveZoneReason() 获取<p>不支持从可用区的原因</p>
 * @method void setNonsupportSlaveZoneReason(string $NonsupportSlaveZoneReason) 设置<p>不支持从可用区的原因</p>
 * @method string getIsSupportRo() 获取<p>是否支持RO实例</p>
 * @method void setIsSupportRo(string $IsSupportRo) 设置<p>是否支持RO实例</p>
 * @method string getNonsupportRoReason() 获取<p>不支持RO实例的原因</p>
 * @method void setNonsupportRoReason(string $NonsupportRoReason) 设置<p>不支持RO实例的原因</p>
 * @method string getIsSupportManualSnapshot() 获取<p>是否支持手动发起快照备份</p>
 * @method void setIsSupportManualSnapshot(string $IsSupportManualSnapshot) 设置<p>是否支持手动发起快照备份</p>
 * @method string getIsSupportTransparentDataEncryption() 获取<p>是否支持透明数据加密</p>
 * @method void setIsSupportTransparentDataEncryption(string $IsSupportTransparentDataEncryption) 设置<p>是否支持透明数据加密</p>
 * @method string getNoSupportTransparentDataEncryptionReason() 获取<p>不支持透明数据加密原因</p>
 * @method void setNoSupportTransparentDataEncryptionReason(string $NoSupportTransparentDataEncryptionReason) 设置<p>不支持透明数据加密原因</p>
 * @method string getIsSupportManualLogic() 获取<p>是否支持手动发起逻辑备份</p>
 * @method void setIsSupportManualLogic(string $IsSupportManualLogic) 设置<p>是否支持手动发起逻辑备份</p>
 * @method string getIsSupportGlobalEncryption() 获取<p>是否支持开启全局加密</p>
 * @method void setIsSupportGlobalEncryption(string $IsSupportGlobalEncryption) 设置<p>是否支持开启全局加密</p>
 * @method string getNoSupportGlobalEncryptionReason() 获取<p>不支持全局加密的原因</p>
 * @method void setNoSupportGlobalEncryptionReason(string $NoSupportGlobalEncryptionReason) 设置<p>不支持全局加密的原因</p>
 * @method string getNoSupportTransparentDataEncryptionReasonCode() 获取<p>不支持透明加密原因状态码</p>
 * @method void setNoSupportTransparentDataEncryptionReasonCode(string $NoSupportTransparentDataEncryptionReasonCode) 设置<p>不支持透明加密原因状态码</p>
 * @method string getNoSupportGlobalEncryptionReasonCode() 获取<p>不支持全局加密原因状态码</p>
 * @method void setNoSupportGlobalEncryptionReasonCode(string $NoSupportGlobalEncryptionReasonCode) 设置<p>不支持全局加密原因状态码</p>
 */
class Ability extends AbstractModel
{
    /**
     * @var string <p>是否支持从可用区</p>
     */
    public $IsSupportSlaveZone;

    /**
     * @var string <p>不支持从可用区的原因</p>
     */
    public $NonsupportSlaveZoneReason;

    /**
     * @var string <p>是否支持RO实例</p>
     */
    public $IsSupportRo;

    /**
     * @var string <p>不支持RO实例的原因</p>
     */
    public $NonsupportRoReason;

    /**
     * @var string <p>是否支持手动发起快照备份</p>
     */
    public $IsSupportManualSnapshot;

    /**
     * @var string <p>是否支持透明数据加密</p>
     */
    public $IsSupportTransparentDataEncryption;

    /**
     * @var string <p>不支持透明数据加密原因</p>
     */
    public $NoSupportTransparentDataEncryptionReason;

    /**
     * @var string <p>是否支持手动发起逻辑备份</p>
     */
    public $IsSupportManualLogic;

    /**
     * @var string <p>是否支持开启全局加密</p>
     */
    public $IsSupportGlobalEncryption;

    /**
     * @var string <p>不支持全局加密的原因</p>
     */
    public $NoSupportGlobalEncryptionReason;

    /**
     * @var string <p>不支持透明加密原因状态码</p>
     */
    public $NoSupportTransparentDataEncryptionReasonCode;

    /**
     * @var string <p>不支持全局加密原因状态码</p>
     */
    public $NoSupportGlobalEncryptionReasonCode;

    /**
     * @param string $IsSupportSlaveZone <p>是否支持从可用区</p>
     * @param string $NonsupportSlaveZoneReason <p>不支持从可用区的原因</p>
     * @param string $IsSupportRo <p>是否支持RO实例</p>
     * @param string $NonsupportRoReason <p>不支持RO实例的原因</p>
     * @param string $IsSupportManualSnapshot <p>是否支持手动发起快照备份</p>
     * @param string $IsSupportTransparentDataEncryption <p>是否支持透明数据加密</p>
     * @param string $NoSupportTransparentDataEncryptionReason <p>不支持透明数据加密原因</p>
     * @param string $IsSupportManualLogic <p>是否支持手动发起逻辑备份</p>
     * @param string $IsSupportGlobalEncryption <p>是否支持开启全局加密</p>
     * @param string $NoSupportGlobalEncryptionReason <p>不支持全局加密的原因</p>
     * @param string $NoSupportTransparentDataEncryptionReasonCode <p>不支持透明加密原因状态码</p>
     * @param string $NoSupportGlobalEncryptionReasonCode <p>不支持全局加密原因状态码</p>
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

        if (array_key_exists("IsSupportGlobalEncryption",$param) and $param["IsSupportGlobalEncryption"] !== null) {
            $this->IsSupportGlobalEncryption = $param["IsSupportGlobalEncryption"];
        }

        if (array_key_exists("NoSupportGlobalEncryptionReason",$param) and $param["NoSupportGlobalEncryptionReason"] !== null) {
            $this->NoSupportGlobalEncryptionReason = $param["NoSupportGlobalEncryptionReason"];
        }

        if (array_key_exists("NoSupportTransparentDataEncryptionReasonCode",$param) and $param["NoSupportTransparentDataEncryptionReasonCode"] !== null) {
            $this->NoSupportTransparentDataEncryptionReasonCode = $param["NoSupportTransparentDataEncryptionReasonCode"];
        }

        if (array_key_exists("NoSupportGlobalEncryptionReasonCode",$param) and $param["NoSupportGlobalEncryptionReasonCode"] !== null) {
            $this->NoSupportGlobalEncryptionReasonCode = $param["NoSupportGlobalEncryptionReasonCode"];
        }
    }
}
