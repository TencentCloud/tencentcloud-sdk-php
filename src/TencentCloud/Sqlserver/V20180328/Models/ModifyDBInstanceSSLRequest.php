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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceSSL请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getType() 获取操作类型。enable-开启SSL，disable-关闭SSL，renew-更新证书有效期
 * @method void setType(string $Type) 设置操作类型。enable-开启SSL，disable-关闭SSL，renew-更新证书有效期
 * @method integer getWaitSwitch() 获取操作设置。0-立即执行，1- 维护时间内执行，默认取值0。
 * @method void setWaitSwitch(integer $WaitSwitch) 设置操作设置。0-立即执行，1- 维护时间内执行，默认取值0。
 * @method integer getIsKMS() 获取是否被KMS加密保护，0-表示否，1表示被KMS保护，默认取值0
 * @method void setIsKMS(integer $IsKMS) 设置是否被KMS加密保护，0-表示否，1表示被KMS保护，默认取值0
 * @method string getKeyId() 获取IsKMS为1时必填
 * @method void setKeyId(string $KeyId) 设置IsKMS为1时必填
 * @method string getKeyRegion() 获取IsKMS为1时必填
 * @method void setKeyRegion(string $KeyRegion) 设置IsKMS为1时必填
 */
class ModifyDBInstanceSSLRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 操作类型。enable-开启SSL，disable-关闭SSL，renew-更新证书有效期
     */
    public $Type;

    /**
     * @var integer 操作设置。0-立即执行，1- 维护时间内执行，默认取值0。
     */
    public $WaitSwitch;

    /**
     * @var integer 是否被KMS加密保护，0-表示否，1表示被KMS保护，默认取值0
     */
    public $IsKMS;

    /**
     * @var string IsKMS为1时必填
     */
    public $KeyId;

    /**
     * @var string IsKMS为1时必填
     */
    public $KeyRegion;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Type 操作类型。enable-开启SSL，disable-关闭SSL，renew-更新证书有效期
     * @param integer $WaitSwitch 操作设置。0-立即执行，1- 维护时间内执行，默认取值0。
     * @param integer $IsKMS 是否被KMS加密保护，0-表示否，1表示被KMS保护，默认取值0
     * @param string $KeyId IsKMS为1时必填
     * @param string $KeyRegion IsKMS为1时必填
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("WaitSwitch",$param) and $param["WaitSwitch"] !== null) {
            $this->WaitSwitch = $param["WaitSwitch"];
        }

        if (array_key_exists("IsKMS",$param) and $param["IsKMS"] !== null) {
            $this->IsKMS = $param["IsKMS"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyRegion",$param) and $param["KeyRegion"] !== null) {
            $this->KeyRegion = $param["KeyRegion"];
        }
    }
}
