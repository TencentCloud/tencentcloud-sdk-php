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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyContainerGroup请求参数结构体
 *
 * @method string getGroupId() 获取部署组ID，可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/api/649/36068)查询已创建的部署组列表或登录控制台进行查看；也可以调用[CreateContainGroup](https://cloud.tencent.com/document/api/649/36075)创建新的部署组。
 * @method void setGroupId(string $GroupId) 设置部署组ID，可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/api/649/36068)查询已创建的部署组列表或登录控制台进行查看；也可以调用[CreateContainGroup](https://cloud.tencent.com/document/api/649/36075)创建新的部署组。
 * @method integer getAccessType() 获取0:公网 1:集群内访问 2：NodePort
 * @method void setAccessType(integer $AccessType) 设置0:公网 1:集群内访问 2：NodePort
 * @method array getProtocolPorts() 获取ProtocolPorts数组
 * @method void setProtocolPorts(array $ProtocolPorts) 设置ProtocolPorts数组
 * @method integer getUpdateType() 获取更新方式：0:快速更新 1:滚动更新
 * @method void setUpdateType(integer $UpdateType) 设置更新方式：0:快速更新 1:滚动更新
 * @method integer getUpdateIvl() 获取更新间隔,单位秒
 * @method void setUpdateIvl(integer $UpdateIvl) 设置更新间隔,单位秒
 * @method string getSubnetId() 获取子网ID，可通过调用[DescribeSubnets](https://cloud.tencent.com/document/product/215/15784)查询已创建的子网列表或登录控制台进行查看；也可以调用[CreateSubnet](https://cloud.tencent.com/document/product/1108/43594)创建新的子网。
 * @method void setSubnetId(string $SubnetId) 设置子网ID，可通过调用[DescribeSubnets](https://cloud.tencent.com/document/product/215/15784)查询已创建的子网列表或登录控制台进行查看；也可以调用[CreateSubnet](https://cloud.tencent.com/document/product/1108/43594)创建新的子网。
 * @method string getAlias() 获取部署组备注
 * @method void setAlias(string $Alias) 设置部署组备注
 */
class ModifyContainerGroupRequest extends AbstractModel
{
    /**
     * @var string 部署组ID，可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/api/649/36068)查询已创建的部署组列表或登录控制台进行查看；也可以调用[CreateContainGroup](https://cloud.tencent.com/document/api/649/36075)创建新的部署组。
     */
    public $GroupId;

    /**
     * @var integer 0:公网 1:集群内访问 2：NodePort
     */
    public $AccessType;

    /**
     * @var array ProtocolPorts数组
     */
    public $ProtocolPorts;

    /**
     * @var integer 更新方式：0:快速更新 1:滚动更新
     */
    public $UpdateType;

    /**
     * @var integer 更新间隔,单位秒
     */
    public $UpdateIvl;

    /**
     * @var string 子网ID，可通过调用[DescribeSubnets](https://cloud.tencent.com/document/product/215/15784)查询已创建的子网列表或登录控制台进行查看；也可以调用[CreateSubnet](https://cloud.tencent.com/document/product/1108/43594)创建新的子网。
     */
    public $SubnetId;

    /**
     * @var string 部署组备注
     */
    public $Alias;

    /**
     * @param string $GroupId 部署组ID，可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/api/649/36068)查询已创建的部署组列表或登录控制台进行查看；也可以调用[CreateContainGroup](https://cloud.tencent.com/document/api/649/36075)创建新的部署组。
     * @param integer $AccessType 0:公网 1:集群内访问 2：NodePort
     * @param array $ProtocolPorts ProtocolPorts数组
     * @param integer $UpdateType 更新方式：0:快速更新 1:滚动更新
     * @param integer $UpdateIvl 更新间隔,单位秒
     * @param string $SubnetId 子网ID，可通过调用[DescribeSubnets](https://cloud.tencent.com/document/product/215/15784)查询已创建的子网列表或登录控制台进行查看；也可以调用[CreateSubnet](https://cloud.tencent.com/document/product/1108/43594)创建新的子网。
     * @param string $Alias 部署组备注
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("ProtocolPorts",$param) and $param["ProtocolPorts"] !== null) {
            $this->ProtocolPorts = [];
            foreach ($param["ProtocolPorts"] as $key => $value){
                $obj = new ProtocolPort();
                $obj->deserialize($value);
                array_push($this->ProtocolPorts, $obj);
            }
        }

        if (array_key_exists("UpdateType",$param) and $param["UpdateType"] !== null) {
            $this->UpdateType = $param["UpdateType"];
        }

        if (array_key_exists("UpdateIvl",$param) and $param["UpdateIvl"] !== null) {
            $this->UpdateIvl = $param["UpdateIvl"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
