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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNetworkConfig请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method string getOperation() 获取指预修改网络的类别，包括：
- changeVip：指切换私有网络，包含其内网IPv4地址及端口。
- changeVpc：指切换私有网络所属子网。
- changeBaseToVpc：指基础网络切换为私有网络。
- changeVPort：指仅修改实例网络端口。
 * @method void setOperation(string $Operation) 设置指预修改网络的类别，包括：
- changeVip：指切换私有网络，包含其内网IPv4地址及端口。
- changeVpc：指切换私有网络所属子网。
- changeBaseToVpc：指基础网络切换为私有网络。
- changeVPort：指仅修改实例网络端口。
 * @method string getVip() 获取指实例私有网络内网 IPv4 地址。当**Operation**为**changeVip**时，需配置该参数。
 * @method void setVip(string $Vip) 设置指实例私有网络内网 IPv4 地址。当**Operation**为**changeVip**时，需配置该参数。
 * @method string getVpcId() 获取指修改后的私有网络 ID，当**Operation**为**changeVpc**或**changeBaseToVpc**时，需配置该参数。
 * @method void setVpcId(string $VpcId) 设置指修改后的私有网络 ID，当**Operation**为**changeVpc**或**changeBaseToVpc**时，需配置该参数。
 * @method string getSubnetId() 获取指修改后的私有网络所属子网 ID，当**Operation**为**changeVpc**或**changeBaseToVpc**时，需配置该参数。
 * @method void setSubnetId(string $SubnetId) 设置指修改后的私有网络所属子网 ID，当**Operation**为**changeVpc**或**changeBaseToVpc**时，需配置该参数。
 * @method integer getRecycle() 获取原内网 IPv4 地址保留时长。
- 单位：天。
- 取值范围：0、1、2、3、7、15。

**说明**：设置原地址保留时长需最新版SDK，否则原地址将立即释放，查看SDK版本，请参见 [SDK中心](https://cloud.tencent.com/document/sdk)。
 * @method void setRecycle(integer $Recycle) 设置原内网 IPv4 地址保留时长。
- 单位：天。
- 取值范围：0、1、2、3、7、15。

**说明**：设置原地址保留时长需最新版SDK，否则原地址将立即释放，查看SDK版本，请参见 [SDK中心](https://cloud.tencent.com/document/sdk)。
 * @method integer getVPort() 获取指修改后的网络端口。当**Operation**为**changeVPort**或**changeVip**时，需配置该参数。取值范围为[1024,65535]。
 * @method void setVPort(integer $VPort) 设置指修改后的网络端口。当**Operation**为**changeVPort**或**changeVip**时，需配置该参数。取值范围为[1024,65535]。
 */
class ModifyNetworkConfigRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 指预修改网络的类别，包括：
- changeVip：指切换私有网络，包含其内网IPv4地址及端口。
- changeVpc：指切换私有网络所属子网。
- changeBaseToVpc：指基础网络切换为私有网络。
- changeVPort：指仅修改实例网络端口。
     */
    public $Operation;

    /**
     * @var string 指实例私有网络内网 IPv4 地址。当**Operation**为**changeVip**时，需配置该参数。
     */
    public $Vip;

    /**
     * @var string 指修改后的私有网络 ID，当**Operation**为**changeVpc**或**changeBaseToVpc**时，需配置该参数。
     */
    public $VpcId;

    /**
     * @var string 指修改后的私有网络所属子网 ID，当**Operation**为**changeVpc**或**changeBaseToVpc**时，需配置该参数。
     */
    public $SubnetId;

    /**
     * @var integer 原内网 IPv4 地址保留时长。
- 单位：天。
- 取值范围：0、1、2、3、7、15。

**说明**：设置原地址保留时长需最新版SDK，否则原地址将立即释放，查看SDK版本，请参见 [SDK中心](https://cloud.tencent.com/document/sdk)。
     */
    public $Recycle;

    /**
     * @var integer 指修改后的网络端口。当**Operation**为**changeVPort**或**changeVip**时，需配置该参数。取值范围为[1024,65535]。
     */
    public $VPort;

    /**
     * @param string $InstanceId 实例 ID。
     * @param string $Operation 指预修改网络的类别，包括：
- changeVip：指切换私有网络，包含其内网IPv4地址及端口。
- changeVpc：指切换私有网络所属子网。
- changeBaseToVpc：指基础网络切换为私有网络。
- changeVPort：指仅修改实例网络端口。
     * @param string $Vip 指实例私有网络内网 IPv4 地址。当**Operation**为**changeVip**时，需配置该参数。
     * @param string $VpcId 指修改后的私有网络 ID，当**Operation**为**changeVpc**或**changeBaseToVpc**时，需配置该参数。
     * @param string $SubnetId 指修改后的私有网络所属子网 ID，当**Operation**为**changeVpc**或**changeBaseToVpc**时，需配置该参数。
     * @param integer $Recycle 原内网 IPv4 地址保留时长。
- 单位：天。
- 取值范围：0、1、2、3、7、15。

**说明**：设置原地址保留时长需最新版SDK，否则原地址将立即释放，查看SDK版本，请参见 [SDK中心](https://cloud.tencent.com/document/sdk)。
     * @param integer $VPort 指修改后的网络端口。当**Operation**为**changeVPort**或**changeVip**时，需配置该参数。取值范围为[1024,65535]。
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

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Recycle",$param) and $param["Recycle"] !== null) {
            $this->Recycle = $param["Recycle"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }
    }
}
