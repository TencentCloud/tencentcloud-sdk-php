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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRoute请求参数结构体
 *
 * @method string getInstanceId() 获取ckafka集群实例id,可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例id,可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
 * @method integer getVipType() 获取路由网络类型(3:vpc路由;7:内部支撑路由;1:公网路由)
 * @method void setVipType(integer $VipType) 设置路由网络类型(3:vpc路由;7:内部支撑路由;1:公网路由)
 * @method string getVpcId() 获取vpc网络Id,当vipType为3时必填
 * @method void setVpcId(string $VpcId) 设置vpc网络Id,当vipType为3时必填
 * @method string getSubnetId() 获取vpc子网id,当vipType为3时必填
 * @method void setSubnetId(string $SubnetId) 设置vpc子网id,当vipType为3时必填
 * @method integer getAccessType() 获取访问类型：0-plaintext；1-sasl_plaintext；3-sasl_ssl; 4-sasl_scram_sha_256; 5-sasl_scram_sha_512  默认为0
vipType=3,支持 0,1,3,4,5
vipType=7,支持0,1,3
vipType=1,支持1,3

 * @method void setAccessType(integer $AccessType) 设置访问类型：0-plaintext；1-sasl_plaintext；3-sasl_ssl; 4-sasl_scram_sha_256; 5-sasl_scram_sha_512  默认为0
vipType=3,支持 0,1,3,4,5
vipType=7,支持0,1,3
vipType=1,支持1,3

 * @method integer getAuthFlag() 获取是否需要权限管理,该字段已废弃
 * @method void setAuthFlag(integer $AuthFlag) 设置是否需要权限管理,该字段已废弃
 * @method integer getCallerAppid() 获取调用方appId
 * @method void setCallerAppid(integer $CallerAppid) 设置调用方appId
 * @method integer getPublicNetwork() 获取公网带宽,公网路由必传,且是3的倍数,无默认值
 * @method void setPublicNetwork(integer $PublicNetwork) 设置公网带宽,公网路由必传,且是3的倍数,无默认值
 * @method string getIp() 获取vip地址
 * @method void setIp(string $Ip) 设置vip地址
 * @method string getNote() 获取备注信息
 * @method void setNote(string $Note) 设置备注信息
 */
class CreateRouteRequest extends AbstractModel
{
    /**
     * @var string ckafka集群实例id,可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
     */
    public $InstanceId;

    /**
     * @var integer 路由网络类型(3:vpc路由;7:内部支撑路由;1:公网路由)
     */
    public $VipType;

    /**
     * @var string vpc网络Id,当vipType为3时必填
     */
    public $VpcId;

    /**
     * @var string vpc子网id,当vipType为3时必填
     */
    public $SubnetId;

    /**
     * @var integer 访问类型：0-plaintext；1-sasl_plaintext；3-sasl_ssl; 4-sasl_scram_sha_256; 5-sasl_scram_sha_512  默认为0
vipType=3,支持 0,1,3,4,5
vipType=7,支持0,1,3
vipType=1,支持1,3

     */
    public $AccessType;

    /**
     * @var integer 是否需要权限管理,该字段已废弃
     */
    public $AuthFlag;

    /**
     * @var integer 调用方appId
     */
    public $CallerAppid;

    /**
     * @var integer 公网带宽,公网路由必传,且是3的倍数,无默认值
     */
    public $PublicNetwork;

    /**
     * @var string vip地址
     */
    public $Ip;

    /**
     * @var string 备注信息
     */
    public $Note;

    /**
     * @param string $InstanceId ckafka集群实例id,可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
     * @param integer $VipType 路由网络类型(3:vpc路由;7:内部支撑路由;1:公网路由)
     * @param string $VpcId vpc网络Id,当vipType为3时必填
     * @param string $SubnetId vpc子网id,当vipType为3时必填
     * @param integer $AccessType 访问类型：0-plaintext；1-sasl_plaintext；3-sasl_ssl; 4-sasl_scram_sha_256; 5-sasl_scram_sha_512  默认为0
vipType=3,支持 0,1,3,4,5
vipType=7,支持0,1,3
vipType=1,支持1,3

     * @param integer $AuthFlag 是否需要权限管理,该字段已废弃
     * @param integer $CallerAppid 调用方appId
     * @param integer $PublicNetwork 公网带宽,公网路由必传,且是3的倍数,无默认值
     * @param string $Ip vip地址
     * @param string $Note 备注信息
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

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }
    }
}
