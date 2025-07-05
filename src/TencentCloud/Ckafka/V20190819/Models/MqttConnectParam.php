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
 * MQTT连接源参数
 *
 * @method string getUserName() 获取MQTT连接源的用户名
 * @method void setUserName(string $UserName) 设置MQTT连接源的用户名
 * @method string getPassword() 获取MQTT连接源的密码
 * @method void setPassword(string $Password) 设置MQTT连接源的密码
 * @method string getResource() 获取MQTT连接源的实例资源
 * @method void setResource(string $Resource) 设置MQTT连接源的实例资源
 * @method string getUniqVpcId() 获取MQTT Instance vpc-id
 * @method void setUniqVpcId(string $UniqVpcId) 设置MQTT Instance vpc-id
 * @method boolean getSelfBuilt() 获取是否为自建集群
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置是否为自建集群
 * @method boolean getIsUpdate() 获取是否更新到关联的Dip任务
 * @method void setIsUpdate(boolean $IsUpdate) 设置是否更新到关联的Dip任务
 * @method string getRegion() 获取MQTT连接源的实例资源地域, 跨地域时必填
 * @method void setRegion(string $Region) 设置MQTT连接源的实例资源地域, 跨地域时必填
 */
class MqttConnectParam extends AbstractModel
{
    /**
     * @var string MQTT连接源的用户名
     */
    public $UserName;

    /**
     * @var string MQTT连接源的密码
     */
    public $Password;

    /**
     * @var string MQTT连接源的实例资源
     */
    public $Resource;

    /**
     * @var string MQTT Instance vpc-id
     */
    public $UniqVpcId;

    /**
     * @var boolean 是否为自建集群
     */
    public $SelfBuilt;

    /**
     * @var boolean 是否更新到关联的Dip任务
     */
    public $IsUpdate;

    /**
     * @var string MQTT连接源的实例资源地域, 跨地域时必填
     */
    public $Region;

    /**
     * @param string $UserName MQTT连接源的用户名
     * @param string $Password MQTT连接源的密码
     * @param string $Resource MQTT连接源的实例资源
     * @param string $UniqVpcId MQTT Instance vpc-id
     * @param boolean $SelfBuilt 是否为自建集群
     * @param boolean $IsUpdate 是否更新到关联的Dip任务
     * @param string $Region MQTT连接源的实例资源地域, 跨地域时必填
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("SelfBuilt",$param) and $param["SelfBuilt"] !== null) {
            $this->SelfBuilt = $param["SelfBuilt"];
        }

        if (array_key_exists("IsUpdate",$param) and $param["IsUpdate"] !== null) {
            $this->IsUpdate = $param["IsUpdate"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
