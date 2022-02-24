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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SSL-VPN-CLIENT 出参
 *
 * @method string getVpcId() 获取VPC实例ID
 * @method void setVpcId(string $VpcId) 设置VPC实例ID
 * @method string getSslVpnServerId() 获取SSL-VPN-SERVER 实例ID
 * @method void setSslVpnServerId(string $SslVpnServerId) 设置SSL-VPN-SERVER 实例ID
 * @method integer getCertStatus() 获取证书状态. 
0:创建中
1:正常
2:已停用
3.已过期
4.创建出错
 * @method void setCertStatus(integer $CertStatus) 设置证书状态. 
0:创建中
1:正常
2:已停用
3.已过期
4.创建出错
 * @method string getSslVpnClientId() 获取SSL-VPN-CLIENT 实例ID
 * @method void setSslVpnClientId(string $SslVpnClientId) 设置SSL-VPN-CLIENT 实例ID
 * @method string getCertBeginTime() 获取证书开始时间
 * @method void setCertBeginTime(string $CertBeginTime) 设置证书开始时间
 * @method string getCertEndTime() 获取证书到期时间
 * @method void setCertEndTime(string $CertEndTime) 设置证书到期时间
 * @method string getName() 获取CLIENT NAME
 * @method void setName(string $Name) 设置CLIENT NAME
 * @method string getState() 获取创建CLIENT 状态。
0 创建中
1 创建出错
2 更新中
3 更新出错
4 销毁中
5 销毁出粗
6 已连通
7 未知
 * @method void setState(string $State) 设置创建CLIENT 状态。
0 创建中
1 创建出错
2 更新中
3 更新出错
4 销毁中
5 销毁出粗
6 已连通
7 未知
 */
class SslVpnClient extends AbstractModel
{
    /**
     * @var string VPC实例ID
     */
    public $VpcId;

    /**
     * @var string SSL-VPN-SERVER 实例ID
     */
    public $SslVpnServerId;

    /**
     * @var integer 证书状态. 
0:创建中
1:正常
2:已停用
3.已过期
4.创建出错
     */
    public $CertStatus;

    /**
     * @var string SSL-VPN-CLIENT 实例ID
     */
    public $SslVpnClientId;

    /**
     * @var string 证书开始时间
     */
    public $CertBeginTime;

    /**
     * @var string 证书到期时间
     */
    public $CertEndTime;

    /**
     * @var string CLIENT NAME
     */
    public $Name;

    /**
     * @var string 创建CLIENT 状态。
0 创建中
1 创建出错
2 更新中
3 更新出错
4 销毁中
5 销毁出粗
6 已连通
7 未知
     */
    public $State;

    /**
     * @param string $VpcId VPC实例ID
     * @param string $SslVpnServerId SSL-VPN-SERVER 实例ID
     * @param integer $CertStatus 证书状态. 
0:创建中
1:正常
2:已停用
3.已过期
4.创建出错
     * @param string $SslVpnClientId SSL-VPN-CLIENT 实例ID
     * @param string $CertBeginTime 证书开始时间
     * @param string $CertEndTime 证书到期时间
     * @param string $Name CLIENT NAME
     * @param string $State 创建CLIENT 状态。
0 创建中
1 创建出错
2 更新中
3 更新出错
4 销毁中
5 销毁出粗
6 已连通
7 未知
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SslVpnServerId",$param) and $param["SslVpnServerId"] !== null) {
            $this->SslVpnServerId = $param["SslVpnServerId"];
        }

        if (array_key_exists("CertStatus",$param) and $param["CertStatus"] !== null) {
            $this->CertStatus = $param["CertStatus"];
        }

        if (array_key_exists("SslVpnClientId",$param) and $param["SslVpnClientId"] !== null) {
            $this->SslVpnClientId = $param["SslVpnClientId"];
        }

        if (array_key_exists("CertBeginTime",$param) and $param["CertBeginTime"] !== null) {
            $this->CertBeginTime = $param["CertBeginTime"];
        }

        if (array_key_exists("CertEndTime",$param) and $param["CertEndTime"] !== null) {
            $this->CertEndTime = $param["CertEndTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
