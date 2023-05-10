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
 * OpenReadOnlyInstanceExclusiveAccess请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getInstanceId() 获取需要开通独有访问的只读实例ID
 * @method void setInstanceId(string $InstanceId) 设置需要开通独有访问的只读实例ID
 * @method string getVpcId() 获取指定的vpc ID
 * @method void setVpcId(string $VpcId) 设置指定的vpc ID
 * @method string getSubnetId() 获取指定的子网ID
 * @method void setSubnetId(string $SubnetId) 设置指定的子网ID
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method array getSecurityGroupIds() 获取安全组
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组
 */
class OpenReadOnlyInstanceExclusiveAccessRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 需要开通独有访问的只读实例ID
     */
    public $InstanceId;

    /**
     * @var string 指定的vpc ID
     */
    public $VpcId;

    /**
     * @var string 指定的子网ID
     */
    public $SubnetId;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var array 安全组
     */
    public $SecurityGroupIds;

    /**
     * @param string $ClusterId 集群ID
     * @param string $InstanceId 需要开通独有访问的只读实例ID
     * @param string $VpcId 指定的vpc ID
     * @param string $SubnetId 指定的子网ID
     * @param integer $Port 端口
     * @param array $SecurityGroupIds 安全组
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
