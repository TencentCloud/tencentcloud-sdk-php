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
 * MongoDB连接源参数
 *
 * @method integer getPort() 获取MongoDB的连接port
 * @method void setPort(integer $Port) 设置MongoDB的连接port
 * @method string getUserName() 获取MongoDB连接源的用户名
 * @method void setUserName(string $UserName) 设置MongoDB连接源的用户名
 * @method string getPassword() 获取MongoDB连接源的密码
 * @method void setPassword(string $Password) 设置MongoDB连接源的密码
 * @method string getResource() 获取MongoDB连接源的实例资源
 * @method void setResource(string $Resource) 设置MongoDB连接源的实例资源
 * @method boolean getSelfBuilt() 获取MongoDB连接源是否为自建集群
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置MongoDB连接源是否为自建集群
 * @method string getServiceVip() 获取MongoDB连接源的实例vip，当为腾讯云实例时，必填
 * @method void setServiceVip(string $ServiceVip) 设置MongoDB连接源的实例vip，当为腾讯云实例时，必填
 * @method string getUniqVpcId() 获取MongoDB连接源的vpcId，当为腾讯云实例时，必填
 * @method void setUniqVpcId(string $UniqVpcId) 设置MongoDB连接源的vpcId，当为腾讯云实例时，必填
 * @method boolean getIsUpdate() 获取是否更新到关联的Datahub任务
 * @method void setIsUpdate(boolean $IsUpdate) 设置是否更新到关联的Datahub任务
 */
class MongoDBConnectParam extends AbstractModel
{
    /**
     * @var integer MongoDB的连接port
     */
    public $Port;

    /**
     * @var string MongoDB连接源的用户名
     */
    public $UserName;

    /**
     * @var string MongoDB连接源的密码
     */
    public $Password;

    /**
     * @var string MongoDB连接源的实例资源
     */
    public $Resource;

    /**
     * @var boolean MongoDB连接源是否为自建集群
     */
    public $SelfBuilt;

    /**
     * @var string MongoDB连接源的实例vip，当为腾讯云实例时，必填
     */
    public $ServiceVip;

    /**
     * @var string MongoDB连接源的vpcId，当为腾讯云实例时，必填
     */
    public $UniqVpcId;

    /**
     * @var boolean 是否更新到关联的Datahub任务
     */
    public $IsUpdate;

    /**
     * @param integer $Port MongoDB的连接port
     * @param string $UserName MongoDB连接源的用户名
     * @param string $Password MongoDB连接源的密码
     * @param string $Resource MongoDB连接源的实例资源
     * @param boolean $SelfBuilt MongoDB连接源是否为自建集群
     * @param string $ServiceVip MongoDB连接源的实例vip，当为腾讯云实例时，必填
     * @param string $UniqVpcId MongoDB连接源的vpcId，当为腾讯云实例时，必填
     * @param boolean $IsUpdate 是否更新到关联的Datahub任务
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

        if (array_key_exists("SelfBuilt",$param) and $param["SelfBuilt"] !== null) {
            $this->SelfBuilt = $param["SelfBuilt"];
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
    }
}
