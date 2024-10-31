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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEndPointAndEndPointService请求参数结构体
 *
 * @method string getVpcId() 获取VPC实例ID
 * @method void setVpcId(string $VpcId) 设置VPC实例ID
 * @method boolean getAutoAcceptFlag() 获取是否自动接受
 * @method void setAutoAcceptFlag(boolean $AutoAcceptFlag) 设置是否自动接受
 * @method string getServiceInstanceId() 获取后端服务ID
 * @method void setServiceInstanceId(string $ServiceInstanceId) 设置后端服务ID
 * @method string getEndPointName() 获取终端节点名称
 * @method void setEndPointName(string $EndPointName) 设置终端节点名称
 * @method string getEndPointRegion() 获取终端节点地域，必须要和终端节点服务所属地域一致
 * @method void setEndPointRegion(string $EndPointRegion) 设置终端节点地域，必须要和终端节点服务所属地域一致
 * @method string getEndPointServiceName() 获取终端节点服务名称
 * @method void setEndPointServiceName(string $EndPointServiceName) 设置终端节点服务名称
 * @method string getServiceType() 获取挂载的PAAS服务类型，CLB,CDB,CRS
 * @method void setServiceType(string $ServiceType) 设置挂载的PAAS服务类型，CLB,CDB,CRS
 * @method integer getIpNum() 获取终端节点ip数量
 * @method void setIpNum(integer $IpNum) 设置终端节点ip数量
 */
class CreateEndPointAndEndPointServiceRequest extends AbstractModel
{
    /**
     * @var string VPC实例ID
     */
    public $VpcId;

    /**
     * @var boolean 是否自动接受
     */
    public $AutoAcceptFlag;

    /**
     * @var string 后端服务ID
     */
    public $ServiceInstanceId;

    /**
     * @var string 终端节点名称
     */
    public $EndPointName;

    /**
     * @var string 终端节点地域，必须要和终端节点服务所属地域一致
     */
    public $EndPointRegion;

    /**
     * @var string 终端节点服务名称
     */
    public $EndPointServiceName;

    /**
     * @var string 挂载的PAAS服务类型，CLB,CDB,CRS
     */
    public $ServiceType;

    /**
     * @var integer 终端节点ip数量
     */
    public $IpNum;

    /**
     * @param string $VpcId VPC实例ID
     * @param boolean $AutoAcceptFlag 是否自动接受
     * @param string $ServiceInstanceId 后端服务ID
     * @param string $EndPointName 终端节点名称
     * @param string $EndPointRegion 终端节点地域，必须要和终端节点服务所属地域一致
     * @param string $EndPointServiceName 终端节点服务名称
     * @param string $ServiceType 挂载的PAAS服务类型，CLB,CDB,CRS
     * @param integer $IpNum 终端节点ip数量
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

        if (array_key_exists("AutoAcceptFlag",$param) and $param["AutoAcceptFlag"] !== null) {
            $this->AutoAcceptFlag = $param["AutoAcceptFlag"];
        }

        if (array_key_exists("ServiceInstanceId",$param) and $param["ServiceInstanceId"] !== null) {
            $this->ServiceInstanceId = $param["ServiceInstanceId"];
        }

        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("EndPointRegion",$param) and $param["EndPointRegion"] !== null) {
            $this->EndPointRegion = $param["EndPointRegion"];
        }

        if (array_key_exists("EndPointServiceName",$param) and $param["EndPointServiceName"] !== null) {
            $this->EndPointServiceName = $param["EndPointServiceName"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("IpNum",$param) and $param["IpNum"] !== null) {
            $this->IpNum = $param["IpNum"];
        }
    }
}
