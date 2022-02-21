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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRoute请求参数结构体
 *
 * @method string getInstanceId() 获取实例唯一id
 * @method void setInstanceId(string $InstanceId) 设置实例唯一id
 * @method integer getVipType() 获取路由网络类型(3:vpc路由;4:标准版支撑路由;7:专业版支撑路由)
 * @method void setVipType(integer $VipType) 设置路由网络类型(3:vpc路由;4:标准版支撑路由;7:专业版支撑路由)
 * @method string getVpcId() 获取vpc网络Id
 * @method void setVpcId(string $VpcId) 设置vpc网络Id
 * @method string getSubnetId() 获取vpc子网id
 * @method void setSubnetId(string $SubnetId) 设置vpc子网id
 * @method integer getAccessType() 获取访问类型
 * @method void setAccessType(integer $AccessType) 设置访问类型
 * @method integer getAuthFlag() 获取是否需要权限管理
 * @method void setAuthFlag(integer $AuthFlag) 设置是否需要权限管理
 * @method integer getCallerAppid() 获取调用方appId
 * @method void setCallerAppid(integer $CallerAppid) 设置调用方appId
 * @method integer getPublicNetwork() 获取公网带宽
 * @method void setPublicNetwork(integer $PublicNetwork) 设置公网带宽
 * @method string getIp() 获取vip地址
 * @method void setIp(string $Ip) 设置vip地址
 */
class CreateRouteRequest extends AbstractModel
{
    /**
     * @var string 实例唯一id
     */
    public $InstanceId;

    /**
     * @var integer 路由网络类型(3:vpc路由;4:标准版支撑路由;7:专业版支撑路由)
     */
    public $VipType;

    /**
     * @var string vpc网络Id
     */
    public $VpcId;

    /**
     * @var string vpc子网id
     */
    public $SubnetId;

    /**
     * @var integer 访问类型
     */
    public $AccessType;

    /**
     * @var integer 是否需要权限管理
     */
    public $AuthFlag;

    /**
     * @var integer 调用方appId
     */
    public $CallerAppid;

    /**
     * @var integer 公网带宽
     */
    public $PublicNetwork;

    /**
     * @var string vip地址
     */
    public $Ip;

    /**
     * @param string $InstanceId 实例唯一id
     * @param integer $VipType 路由网络类型(3:vpc路由;4:标准版支撑路由;7:专业版支撑路由)
     * @param string $VpcId vpc网络Id
     * @param string $SubnetId vpc子网id
     * @param integer $AccessType 访问类型
     * @param integer $AuthFlag 是否需要权限管理
     * @param integer $CallerAppid 调用方appId
     * @param integer $PublicNetwork 公网带宽
     * @param string $Ip vip地址
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

        if (array_key_exists("VipType",$param) and $param["VipType"] !== null) {
            $this->VipType = $param["VipType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("AuthFlag",$param) and $param["AuthFlag"] !== null) {
            $this->AuthFlag = $param["AuthFlag"];
        }

        if (array_key_exists("CallerAppid",$param) and $param["CallerAppid"] !== null) {
            $this->CallerAppid = $param["CallerAppid"];
        }

        if (array_key_exists("PublicNetwork",$param) and $param["PublicNetwork"] !== null) {
            $this->PublicNetwork = $param["PublicNetwork"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }
    }
}
