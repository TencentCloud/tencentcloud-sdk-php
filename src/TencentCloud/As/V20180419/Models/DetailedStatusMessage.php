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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 伸缩活动状态详细描述。
 *
 * @method string getCode() 获取错误类型。
 * @method void setCode(string $Code) 设置错误类型。
 * @method string getZone() 获取可用区信息。
 * @method void setZone(string $Zone) 设置可用区信息。
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getInstanceChargeType() 获取实例计费类型。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费类型。
 * @method string getSubnetId() 获取子网ID。
 * @method void setSubnetId(string $SubnetId) 设置子网ID。
 * @method string getMessage() 获取错误描述。
 * @method void setMessage(string $Message) 设置错误描述。
 * @method string getInstanceType() 获取实例类型。
 * @method void setInstanceType(string $InstanceType) 设置实例类型。
 */
class DetailedStatusMessage extends AbstractModel
{
    /**
     * @var string 错误类型。
     */
    public $Code;

    /**
     * @var string 可用区信息。
     */
    public $Zone;

    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 实例计费类型。
     */
    public $InstanceChargeType;

    /**
     * @var string 子网ID。
     */
    public $SubnetId;

    /**
     * @var string 错误描述。
     */
    public $Message;

    /**
     * @var string 实例类型。
     */
    public $InstanceType;

    /**
     * @param string $Code 错误类型。
     * @param string $Zone 可用区信息。
     * @param string $InstanceId 实例ID。
     * @param string $InstanceChargeType 实例计费类型。
     * @param string $SubnetId 子网ID。
     * @param string $Message 错误描述。
     * @param string $InstanceType 实例类型。
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
