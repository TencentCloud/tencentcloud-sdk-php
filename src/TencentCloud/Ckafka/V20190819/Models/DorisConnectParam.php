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
 * Doris 连接源参数
 *
 * @method integer getPort() 获取Doris jdbc 负载均衡连接 port，通常映射到 fe 的 9030 端口
 * @method void setPort(integer $Port) 设置Doris jdbc 负载均衡连接 port，通常映射到 fe 的 9030 端口
 * @method string getUserName() 获取Doris 连接源的用户名
 * @method void setUserName(string $UserName) 设置Doris 连接源的用户名
 * @method string getPassword() 获取Doris 连接源的密码
 * @method void setPassword(string $Password) 设置Doris 连接源的密码
 * @method string getResource() 获取Doris 连接源的实例资源
 * @method void setResource(string $Resource) 设置Doris 连接源的实例资源
 * @method string getServiceVip() 获取Doris 连接源的实例vip，当为腾讯云实例时，必填
 * @method void setServiceVip(string $ServiceVip) 设置Doris 连接源的实例vip，当为腾讯云实例时，必填
 * @method string getUniqVpcId() 获取Doris 连接源的vpcId，当为腾讯云实例时，必填
 * @method void setUniqVpcId(string $UniqVpcId) 设置Doris 连接源的vpcId，当为腾讯云实例时，必填
 * @method boolean getIsUpdate() 获取是否更新到关联的Datahub任务
 * @method void setIsUpdate(boolean $IsUpdate) 设置是否更新到关联的Datahub任务
 * @method boolean getSelfBuilt() 获取Doris 连接源是否为自建集群
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置Doris 连接源是否为自建集群
 * @method integer getBePort() 获取Doris 的 http 负载均衡连接 port，通常映射到 be 的 8040 端口
 * @method void setBePort(integer $BePort) 设置Doris 的 http 负载均衡连接 port，通常映射到 be 的 8040 端口
 */
class DorisConnectParam extends AbstractModel
{
    /**
     * @var integer Doris jdbc 负载均衡连接 port，通常映射到 fe 的 9030 端口
     */
    public $Port;

    /**
     * @var string Doris 连接源的用户名
     */
    public $UserName;

    /**
     * @var string Doris 连接源的密码
     */
    public $Password;

    /**
     * @var string Doris 连接源的实例资源
     */
    public $Resource;

    /**
     * @var string Doris 连接源的实例vip，当为腾讯云实例时，必填
     */
    public $ServiceVip;

    /**
     * @var string Doris 连接源的vpcId，当为腾讯云实例时，必填
     */
    public $UniqVpcId;

    /**
     * @var boolean 是否更新到关联的Datahub任务
     */
    public $IsUpdate;

    /**
     * @var boolean Doris 连接源是否为自建集群
     */
    public $SelfBuilt;

    /**
     * @var integer Doris 的 http 负载均衡连接 port，通常映射到 be 的 8040 端口
     */
    public $BePort;

    /**
     * @param integer $Port Doris jdbc 负载均衡连接 port，通常映射到 fe 的 9030 端口
     * @param string $UserName Doris 连接源的用户名
     * @param string $Password Doris 连接源的密码
     * @param string $Resource Doris 连接源的实例资源
     * @param string $ServiceVip Doris 连接源的实例vip，当为腾讯云实例时，必填
     * @param string $UniqVpcId Doris 连接源的vpcId，当为腾讯云实例时，必填
     * @param boolean $IsUpdate 是否更新到关联的Datahub任务
     * @param boolean $SelfBuilt Doris 连接源是否为自建集群
     * @param integer $BePort Doris 的 http 负载均衡连接 port，通常映射到 be 的 8040 端口
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("ServiceVip",$param) and $param["ServiceVip"] !== null) {
            $this->ServiceVip = $param["ServiceVip"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("IsUpdate",$param) and $param["IsUpdate"] !== null) {
            $this->IsUpdate = $param["IsUpdate"];
        }

        if (array_key_exists("SelfBuilt",$param) and $param["SelfBuilt"] !== null) {
            $this->SelfBuilt = $param["SelfBuilt"];
        }

        if (array_key_exists("BePort",$param) and $param["BePort"] !== null) {
            $this->BePort = $param["BePort"];
        }
    }
}
