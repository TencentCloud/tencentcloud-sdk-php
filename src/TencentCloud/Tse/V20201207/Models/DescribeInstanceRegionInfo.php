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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例地域信息描述
 *
 * @method string getEngineRegion() 获取引擎部署地域信息
 * @method void setEngineRegion(string $EngineRegion) 设置引擎部署地域信息
 * @method integer getReplica() 获取引擎在该地域的副本数
 * @method void setReplica(integer $Replica) 设置引擎在该地域的副本数
 * @method string getSpecId() 获取引擎在该地域的规格id
 * @method void setSpecId(string $SpecId) 设置引擎在该地域的规格id
 * @method array getIntranetVpcInfos() 获取客户端内网的网络信息
 * @method void setIntranetVpcInfos(array $IntranetVpcInfos) 设置客户端内网的网络信息
 * @method array getConsoleIntranetVpcInfos() 获取控制台内网的网络信息
 * @method void setConsoleIntranetVpcInfos(array $ConsoleIntranetVpcInfos) 设置控制台内网的网络信息
 * @method boolean getEnableClientInternet() 获取是否开公网
 * @method void setEnableClientInternet(boolean $EnableClientInternet) 设置是否开公网
 * @method array getLimiterIntranetVpcInfos() 获取限流客户端内网的网络信息
 * @method void setLimiterIntranetVpcInfos(array $LimiterIntranetVpcInfos) 设置限流客户端内网的网络信息
 * @method boolean getMainRegion() 获取是否为主地域，仅在服务治理中心多地域有效
 * @method void setMainRegion(boolean $MainRegion) 设置是否为主地域，仅在服务治理中心多地域有效
 * @method string getEKSClusterID() 获取该地域所在的EKS集群
 * @method void setEKSClusterID(string $EKSClusterID) 设置该地域所在的EKS集群
 */
class DescribeInstanceRegionInfo extends AbstractModel
{
    /**
     * @var string 引擎部署地域信息
     */
    public $EngineRegion;

    /**
     * @var integer 引擎在该地域的副本数
     */
    public $Replica;

    /**
     * @var string 引擎在该地域的规格id
     */
    public $SpecId;

    /**
     * @var array 客户端内网的网络信息
     */
    public $IntranetVpcInfos;

    /**
     * @var array 控制台内网的网络信息
     */
    public $ConsoleIntranetVpcInfos;

    /**
     * @var boolean 是否开公网
     */
    public $EnableClientInternet;

    /**
     * @var array 限流客户端内网的网络信息
     */
    public $LimiterIntranetVpcInfos;

    /**
     * @var boolean 是否为主地域，仅在服务治理中心多地域有效
     */
    public $MainRegion;

    /**
     * @var string 该地域所在的EKS集群
     */
    public $EKSClusterID;

    /**
     * @param string $EngineRegion 引擎部署地域信息
     * @param integer $Replica 引擎在该地域的副本数
     * @param string $SpecId 引擎在该地域的规格id
     * @param array $IntranetVpcInfos 客户端内网的网络信息
     * @param array $ConsoleIntranetVpcInfos 控制台内网的网络信息
     * @param boolean $EnableClientInternet 是否开公网
     * @param array $LimiterIntranetVpcInfos 限流客户端内网的网络信息
     * @param boolean $MainRegion 是否为主地域，仅在服务治理中心多地域有效
     * @param string $EKSClusterID 该地域所在的EKS集群
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
        if (array_key_exists("EngineRegion",$param) and $param["EngineRegion"] !== null) {
            $this->EngineRegion = $param["EngineRegion"];
        }

        if (array_key_exists("Replica",$param) and $param["Replica"] !== null) {
            $this->Replica = $param["Replica"];
        }

        if (array_key_exists("SpecId",$param) and $param["SpecId"] !== null) {
            $this->SpecId = $param["SpecId"];
        }

        if (array_key_exists("IntranetVpcInfos",$param) and $param["IntranetVpcInfos"] !== null) {
            $this->IntranetVpcInfos = [];
            foreach ($param["IntranetVpcInfos"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->IntranetVpcInfos, $obj);
            }
        }

        if (array_key_exists("ConsoleIntranetVpcInfos",$param) and $param["ConsoleIntranetVpcInfos"] !== null) {
            $this->ConsoleIntranetVpcInfos = [];
            foreach ($param["ConsoleIntranetVpcInfos"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->ConsoleIntranetVpcInfos, $obj);
            }
        }

        if (array_key_exists("EnableClientInternet",$param) and $param["EnableClientInternet"] !== null) {
            $this->EnableClientInternet = $param["EnableClientInternet"];
        }

        if (array_key_exists("LimiterIntranetVpcInfos",$param) and $param["LimiterIntranetVpcInfos"] !== null) {
            $this->LimiterIntranetVpcInfos = [];
            foreach ($param["LimiterIntranetVpcInfos"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->LimiterIntranetVpcInfos, $obj);
            }
        }

        if (array_key_exists("MainRegion",$param) and $param["MainRegion"] !== null) {
            $this->MainRegion = $param["MainRegion"];
        }

        if (array_key_exists("EKSClusterID",$param) and $param["EKSClusterID"] !== null) {
            $this->EKSClusterID = $param["EKSClusterID"];
        }
    }
}
