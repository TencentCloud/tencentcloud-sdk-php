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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 后端服务输出参数。
 *
 * @method string getEniId() 获取弹性网卡 ID。
 * @method void setEniId(string $EniId) 设置弹性网卡 ID。
 * @method integer getPort() 获取后端服务器使用的端口。取值范围：**1 - 65535**。
 * @method void setPort(integer $Port) 设置后端服务器使用的端口。取值范围：**1 - 65535**。
 * @method string getTargetId() 获取后端服务实例 ID，CVM 实例格式为 ins- 后接 8 位字母数字。
 * @method void setTargetId(string $TargetId) 设置后端服务实例 ID，CVM 实例格式为 ins- 后接 8 位字母数字。
 * @method string getTargetIp() 获取后端服务IP。**TargetIp**和**TargetId**需要至少传一个。

- 当服务器组为 **Instance** 类型时，该参数为 **Eni** 的主内网 IP 或辅助内网 IP。

 * @method void setTargetIp(string $TargetIp) 设置后端服务IP。**TargetIp**和**TargetId**需要至少传一个。

- 当服务器组为 **Instance** 类型时，该参数为 **Eni** 的主内网 IP 或辅助内网 IP。

 * @method string getTargetName() 获取后端服务名称。当前只有CVM后端类型后端服务返回有效名称。
 * @method void setTargetName(string $TargetName) 设置后端服务名称。当前只有CVM后端类型后端服务返回有效名称。
 * @method string getTargetStatus() 获取后端服务的状态。取值：
- **Adding**：添加中。
- **Active**：正常可用状态。
- **Configuring**：配置中。
- **Removing**：移除中。
 * @method void setTargetStatus(string $TargetStatus) 设置后端服务的状态。取值：
- **Adding**：添加中。
- **Active**：正常可用状态。
- **Configuring**：配置中。
- **Removing**：移除中。
 * @method string getTargetType() 获取后端服务类型。
 * @method void setTargetType(string $TargetType) 设置后端服务类型。
 * @method integer getWeight() 获取后端服务的权重，取值范围：**0 - 100**。默认值为**100**。如果设置权重为**0**，则不会将请求转发给该后端服务。
 * @method void setWeight(integer $Weight) 设置后端服务的权重，取值范围：**0 - 100**。默认值为**100**。如果设置权重为**0**，则不会将请求转发给该后端服务。
 */
class TargetOutput extends AbstractModel
{
    /**
     * @var string 弹性网卡 ID。
     */
    public $EniId;

    /**
     * @var integer 后端服务器使用的端口。取值范围：**1 - 65535**。
     */
    public $Port;

    /**
     * @var string 后端服务实例 ID，CVM 实例格式为 ins- 后接 8 位字母数字。
     */
    public $TargetId;

    /**
     * @var string 后端服务IP。**TargetIp**和**TargetId**需要至少传一个。

- 当服务器组为 **Instance** 类型时，该参数为 **Eni** 的主内网 IP 或辅助内网 IP。

     */
    public $TargetIp;

    /**
     * @var string 后端服务名称。当前只有CVM后端类型后端服务返回有效名称。
     */
    public $TargetName;

    /**
     * @var string 后端服务的状态。取值：
- **Adding**：添加中。
- **Active**：正常可用状态。
- **Configuring**：配置中。
- **Removing**：移除中。
     */
    public $TargetStatus;

    /**
     * @var string 后端服务类型。
     */
    public $TargetType;

    /**
     * @var integer 后端服务的权重，取值范围：**0 - 100**。默认值为**100**。如果设置权重为**0**，则不会将请求转发给该后端服务。
     */
    public $Weight;

    /**
     * @param string $EniId 弹性网卡 ID。
     * @param integer $Port 后端服务器使用的端口。取值范围：**1 - 65535**。
     * @param string $TargetId 后端服务实例 ID，CVM 实例格式为 ins- 后接 8 位字母数字。
     * @param string $TargetIp 后端服务IP。**TargetIp**和**TargetId**需要至少传一个。

- 当服务器组为 **Instance** 类型时，该参数为 **Eni** 的主内网 IP 或辅助内网 IP。

     * @param string $TargetName 后端服务名称。当前只有CVM后端类型后端服务返回有效名称。
     * @param string $TargetStatus 后端服务的状态。取值：
- **Adding**：添加中。
- **Active**：正常可用状态。
- **Configuring**：配置中。
- **Removing**：移除中。
     * @param string $TargetType 后端服务类型。
     * @param integer $Weight 后端服务的权重，取值范围：**0 - 100**。默认值为**100**。如果设置权重为**0**，则不会将请求转发给该后端服务。
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
        if (array_key_exists("EniId",$param) and $param["EniId"] !== null) {
            $this->EniId = $param["EniId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("TargetIp",$param) and $param["TargetIp"] !== null) {
            $this->TargetIp = $param["TargetIp"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("TargetStatus",$param) and $param["TargetStatus"] !== null) {
            $this->TargetStatus = $param["TargetStatus"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
