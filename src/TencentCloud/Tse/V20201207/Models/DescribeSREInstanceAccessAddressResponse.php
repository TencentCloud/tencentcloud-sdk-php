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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSREInstanceAccessAddress返回参数结构体
 *
 * @method string getIntranetAddress() 获取内网访问地址
 * @method void setIntranetAddress(string $IntranetAddress) 设置内网访问地址
 * @method string getInternetAddress() 获取公网访问地址
 * @method void setInternetAddress(string $InternetAddress) 设置公网访问地址
 * @method array getEnvAddressInfos() 获取apollo多环境公网ip
 * @method void setEnvAddressInfos(array $EnvAddressInfos) 设置apollo多环境公网ip
 * @method string getConsoleInternetAddress() 获取控制台公网访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsoleInternetAddress(string $ConsoleInternetAddress) 设置控制台公网访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsoleIntranetAddress() 获取控制台内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsoleIntranetAddress(string $ConsoleIntranetAddress) 设置控制台内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInternetBandWidth() 获取客户端公网带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternetBandWidth(integer $InternetBandWidth) 设置客户端公网带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConsoleInternetBandWidth() 获取控制台公网带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsoleInternetBandWidth(integer $ConsoleInternetBandWidth) 设置控制台公网带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLimiterAddressInfos() 获取北极星限流server节点接入IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimiterAddressInfos(array $LimiterAddressInfos) 设置北极星限流server节点接入IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSREInstanceAccessAddressResponse extends AbstractModel
{
    /**
     * @var string 内网访问地址
     */
    public $IntranetAddress;

    /**
     * @var string 公网访问地址
     */
    public $InternetAddress;

    /**
     * @var array apollo多环境公网ip
     */
    public $EnvAddressInfos;

    /**
     * @var string 控制台公网访问地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsoleInternetAddress;

    /**
     * @var string 控制台内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsoleIntranetAddress;

    /**
     * @var integer 客户端公网带宽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternetBandWidth;

    /**
     * @var integer 控制台公网带宽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsoleInternetBandWidth;

    /**
     * @var array 北极星限流server节点接入IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LimiterAddressInfos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $IntranetAddress 内网访问地址
     * @param string $InternetAddress 公网访问地址
     * @param array $EnvAddressInfos apollo多环境公网ip
     * @param string $ConsoleInternetAddress 控制台公网访问地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsoleIntranetAddress 控制台内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InternetBandWidth 客户端公网带宽
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConsoleInternetBandWidth 控制台公网带宽
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LimiterAddressInfos 北极星限流server节点接入IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("IntranetAddress",$param) and $param["IntranetAddress"] !== null) {
            $this->IntranetAddress = $param["IntranetAddress"];
        }

        if (array_key_exists("InternetAddress",$param) and $param["InternetAddress"] !== null) {
            $this->InternetAddress = $param["InternetAddress"];
        }

        if (array_key_exists("EnvAddressInfos",$param) and $param["EnvAddressInfos"] !== null) {
            $this->EnvAddressInfos = [];
            foreach ($param["EnvAddressInfos"] as $key => $value){
                $obj = new EnvAddressInfo();
                $obj->deserialize($value);
                array_push($this->EnvAddressInfos, $obj);
            }
        }

        if (array_key_exists("ConsoleInternetAddress",$param) and $param["ConsoleInternetAddress"] !== null) {
            $this->ConsoleInternetAddress = $param["ConsoleInternetAddress"];
        }

        if (array_key_exists("ConsoleIntranetAddress",$param) and $param["ConsoleIntranetAddress"] !== null) {
            $this->ConsoleIntranetAddress = $param["ConsoleIntranetAddress"];
        }

        if (array_key_exists("InternetBandWidth",$param) and $param["InternetBandWidth"] !== null) {
            $this->InternetBandWidth = $param["InternetBandWidth"];
        }

        if (array_key_exists("ConsoleInternetBandWidth",$param) and $param["ConsoleInternetBandWidth"] !== null) {
            $this->ConsoleInternetBandWidth = $param["ConsoleInternetBandWidth"];
        }

        if (array_key_exists("LimiterAddressInfos",$param) and $param["LimiterAddressInfos"] !== null) {
            $this->LimiterAddressInfos = [];
            foreach ($param["LimiterAddressInfos"] as $key => $value){
                $obj = new PolarisLimiterAddress();
                $obj->deserialize($value);
                array_push($this->LimiterAddressInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
