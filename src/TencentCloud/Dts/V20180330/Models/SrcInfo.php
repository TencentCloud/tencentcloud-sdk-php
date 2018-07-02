<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAccessKey() 获取阿里云AccessKey
 * @method void setAccessKey(string $AccessKey) 设置阿里云AccessKey
 * @method string getIp() 获取实例的IP地址
 * @method void setIp(string $Ip) 设置实例的IP地址
 * @method integer getPort() 获取实例的端口
 * @method void setPort(integer $Port) 设置实例的端口
 * @method string getUser() 获取实例的用户名
 * @method void setUser(string $User) 设置实例的用户名
 * @method string getPassword() 获取实例的密码
 * @method void setPassword(string $Password) 设置实例的密码
 * @method string getRdsInstanceId() 获取阿里云rds实例id
 * @method void setRdsInstanceId(string $RdsInstanceId) 设置阿里云rds实例id
 * @method string getCvmInstanceId() 获取CVM实例短ID，格式如：ins-olgl89y8，与云主机控制台页面显示的实例ID相同，如果是CVM自建实例或者通过自建VPN接入的公网实例，需要传递此字段
 * @method void setCvmInstanceId(string $CvmInstanceId) 设置CVM实例短ID，格式如：ins-olgl89y8，与云主机控制台页面显示的实例ID相同，如果是CVM自建实例或者通过自建VPN接入的公网实例，需要传递此字段
 * @method string getUniqDcgId() 获取专线网关ID
 * @method void setUniqDcgId(string $UniqDcgId) 设置专线网关ID
 * @method string getVpcId() 获取私有网络ID，和原来的数字vpcId对应，需要调vpc的接口去转换
 * @method void setVpcId(string $VpcId) 设置私有网络ID，和原来的数字vpcId对应，需要调vpc的接口去转换
 * @method string getSubnetId() 获取私有网络下的子网ID, 和原来的数字子网ID对应，需要调用vpc的接口去转换
 * @method void setSubnetId(string $SubnetId) 设置私有网络下的子网ID, 和原来的数字子网ID对应，需要调用vpc的接口去转换
 * @method string getUniqVpnGwId() 获取系统分配的VPN网关ID
 * @method void setUniqVpnGwId(string $UniqVpnGwId) 设置系统分配的VPN网关ID
 * @method string getInstanceId() 获取实例短Id
 * @method void setInstanceId(string $InstanceId) 设置实例短Id
 * @method string getRegion() 获取地域英文名，如：ap-guangzhou
 * @method void setRegion(string $Region) 设置地域英文名，如：ap-guangzhou
 * @method string getSupplier() 获取服务提供商，如:aliyun,others
 * @method void setSupplier(string $Supplier) 设置服务提供商，如:aliyun,others
 */

/**
 *源实例信息
 */
class SrcInfo extends AbstractModel
{
    /**
     * @var string 阿里云AccessKey
     */
    public $AccessKey;

    /**
     * @var string 实例的IP地址
     */
    public $Ip;

    /**
     * @var integer 实例的端口
     */
    public $Port;

    /**
     * @var string 实例的用户名
     */
    public $User;

    /**
     * @var string 实例的密码
     */
    public $Password;

    /**
     * @var string 阿里云rds实例id
     */
    public $RdsInstanceId;

    /**
     * @var string CVM实例短ID，格式如：ins-olgl89y8，与云主机控制台页面显示的实例ID相同，如果是CVM自建实例或者通过自建VPN接入的公网实例，需要传递此字段
     */
    public $CvmInstanceId;

    /**
     * @var string 专线网关ID
     */
    public $UniqDcgId;

    /**
     * @var string 私有网络ID，和原来的数字vpcId对应，需要调vpc的接口去转换
     */
    public $VpcId;

    /**
     * @var string 私有网络下的子网ID, 和原来的数字子网ID对应，需要调用vpc的接口去转换
     */
    public $SubnetId;

    /**
     * @var string 系统分配的VPN网关ID
     */
    public $UniqVpnGwId;

    /**
     * @var string 实例短Id
     */
    public $InstanceId;

    /**
     * @var string 地域英文名，如：ap-guangzhou
     */
    public $Region;

    /**
     * @var string 服务提供商，如:aliyun,others
     */
    public $Supplier;
    /**
     * @param string $AccessKey 阿里云AccessKey
     * @param string $Ip 实例的IP地址
     * @param integer $Port 实例的端口
     * @param string $User 实例的用户名
     * @param string $Password 实例的密码
     * @param string $RdsInstanceId 阿里云rds实例id
     * @param string $CvmInstanceId CVM实例短ID，格式如：ins-olgl89y8，与云主机控制台页面显示的实例ID相同，如果是CVM自建实例或者通过自建VPN接入的公网实例，需要传递此字段
     * @param string $UniqDcgId 专线网关ID
     * @param string $VpcId 私有网络ID，和原来的数字vpcId对应，需要调vpc的接口去转换
     * @param string $SubnetId 私有网络下的子网ID, 和原来的数字子网ID对应，需要调用vpc的接口去转换
     * @param string $UniqVpnGwId 系统分配的VPN网关ID
     * @param string $InstanceId 实例短Id
     * @param string $Region 地域英文名，如：ap-guangzhou
     * @param string $Supplier 服务提供商，如:aliyun,others
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("RdsInstanceId",$param) and $param["RdsInstanceId"] !== null) {
            $this->RdsInstanceId = $param["RdsInstanceId"];
        }

        if (array_key_exists("CvmInstanceId",$param) and $param["CvmInstanceId"] !== null) {
            $this->CvmInstanceId = $param["CvmInstanceId"];
        }

        if (array_key_exists("UniqDcgId",$param) and $param["UniqDcgId"] !== null) {
            $this->UniqDcgId = $param["UniqDcgId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("UniqVpnGwId",$param) and $param["UniqVpnGwId"] !== null) {
            $this->UniqVpnGwId = $param["UniqVpnGwId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Supplier",$param) and $param["Supplier"] !== null) {
            $this->Supplier = $param["Supplier"];
        }
    }
}
