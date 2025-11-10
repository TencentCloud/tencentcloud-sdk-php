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
 * @method string getInstanceId() 获取<p>ckafka集群实例id,可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ckafka集群实例id,可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
 * @method integer getVipType() 获取<p>路由网络类型(3:vpc路由;7:内部支撑路由;1:公网路由)</p>
 * @method void setVipType(integer $VipType) 设置<p>路由网络类型(3:vpc路由;7:内部支撑路由;1:公网路由)</p>
 * @method string getVpcId() 获取<p>vpc网络Id,当vipType为3时必填</p>
 * @method void setVpcId(string $VpcId) 设置<p>vpc网络Id,当vipType为3时必填</p>
 * @method string getSubnetId() 获取<p>vpc子网id,当vipType为3时必填</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>vpc子网id,当vipType为3时必填</p>
 * @method integer getAccessType() 获取<p>访问类型：0-plaintext；1-sasl_plaintext；3-sasl_ssl; 4-sasl_scram_sha_256; 5-sasl_scram_sha_512  默认为0vipType=3,支持 0,1,3,4,5vipType=7,支持0,1,3vipType=1,支持1,3</p>
 * @method void setAccessType(integer $AccessType) 设置<p>访问类型：0-plaintext；1-sasl_plaintext；3-sasl_ssl; 4-sasl_scram_sha_256; 5-sasl_scram_sha_512  默认为0vipType=3,支持 0,1,3,4,5vipType=7,支持0,1,3vipType=1,支持1,3</p>
 * @method integer getAuthFlag() 获取<p>是否需要权限管理,该字段已废弃</p>
 * @method void setAuthFlag(integer $AuthFlag) 设置<p>是否需要权限管理,该字段已废弃</p>
 * @method integer getCallerAppid() 获取<p>调用方appId</p>
 * @method void setCallerAppid(integer $CallerAppid) 设置<p>调用方appId</p>
 * @method integer getPublicNetwork() 获取<p>公网带宽,公网路由必传,且是3的倍数,无默认值</p>
 * @method void setPublicNetwork(integer $PublicNetwork) 设置<p>公网带宽,公网路由必传,且是3的倍数,无默认值</p>
 * @method string getIp() 获取<p>vip地址</p>
 * @method void setIp(string $Ip) 设置<p>vip地址</p>
 * @method string getNote() 获取<p>备注信息</p>
 * @method void setNote(string $Note) 设置<p>备注信息</p>
 * @method array getSecurityGroupIds() 获取<p>关联安全组有序列表</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>关联安全组有序列表</p>
 */
class CreateRouteRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka集群实例id,可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>路由网络类型(3:vpc路由;7:内部支撑路由;1:公网路由)</p>
     */
    public $VipType;

    /**
     * @var string <p>vpc网络Id,当vipType为3时必填</p>
     */
    public $VpcId;

    /**
     * @var string <p>vpc子网id,当vipType为3时必填</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>访问类型：0-plaintext；1-sasl_plaintext；3-sasl_ssl; 4-sasl_scram_sha_256; 5-sasl_scram_sha_512  默认为0vipType=3,支持 0,1,3,4,5vipType=7,支持0,1,3vipType=1,支持1,3</p>
     */
    public $AccessType;

    /**
     * @var integer <p>是否需要权限管理,该字段已废弃</p>
     */
    public $AuthFlag;

    /**
     * @var integer <p>调用方appId</p>
     */
    public $CallerAppid;

    /**
     * @var integer <p>公网带宽,公网路由必传,且是3的倍数,无默认值</p>
     */
    public $PublicNetwork;

    /**
     * @var string <p>vip地址</p>
     */
    public $Ip;

    /**
     * @var string <p>备注信息</p>
     */
    public $Note;

    /**
     * @var array <p>关联安全组有序列表</p>
     */
    public $SecurityGroupIds;

    /**
     * @param string $InstanceId <p>ckafka集群实例id,可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
     * @param integer $VipType <p>路由网络类型(3:vpc路由;7:内部支撑路由;1:公网路由)</p>
     * @param string $VpcId <p>vpc网络Id,当vipType为3时必填</p>
     * @param string $SubnetId <p>vpc子网id,当vipType为3时必填</p>
     * @param integer $AccessType <p>访问类型：0-plaintext；1-sasl_plaintext；3-sasl_ssl; 4-sasl_scram_sha_256; 5-sasl_scram_sha_512  默认为0vipType=3,支持 0,1,3,4,5vipType=7,支持0,1,3vipType=1,支持1,3</p>
     * @param integer $AuthFlag <p>是否需要权限管理,该字段已废弃</p>
     * @param integer $CallerAppid <p>调用方appId</p>
     * @param integer $PublicNetwork <p>公网带宽,公网路由必传,且是3的倍数,无默认值</p>
     * @param string $Ip <p>vip地址</p>
     * @param string $Note <p>备注信息</p>
     * @param array $SecurityGroupIds <p>关联安全组有序列表</p>
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

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
