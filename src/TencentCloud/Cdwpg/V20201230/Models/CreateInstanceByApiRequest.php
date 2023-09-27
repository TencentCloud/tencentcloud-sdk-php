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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstanceByApi请求参数结构体
 *
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getUserVPCId() 获取私有网络
 * @method void setUserVPCId(string $UserVPCId) 设置私有网络
 * @method string getUserSubnetId() 获取子网
 * @method void setUserSubnetId(string $UserSubnetId) 设置子网
 * @method ChargeProperties getChargeProperties() 获取计费方式
 * @method void setChargeProperties(ChargeProperties $ChargeProperties) 设置计费方式
 * @method string getAdminPassword() 获取集群密码
 * @method void setAdminPassword(string $AdminPassword) 设置集群密码
 * @method array getResources() 获取资源信息
 * @method void setResources(array $Resources) 设置资源信息
 * @method Tag getTags() 获取标签列表
 * @method void setTags(Tag $Tags) 设置标签列表
 */
class CreateInstanceByApiRequest extends AbstractModel
{
    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 私有网络
     */
    public $UserVPCId;

    /**
     * @var string 子网
     */
    public $UserSubnetId;

    /**
     * @var ChargeProperties 计费方式
     */
    public $ChargeProperties;

    /**
     * @var string 集群密码
     */
    public $AdminPassword;

    /**
     * @var array 资源信息
     */
    public $Resources;

    /**
     * @var Tag 标签列表
     */
    public $Tags;

    /**
     * @param string $InstanceName 实例名称
     * @param string $Zone 可用区
     * @param string $UserVPCId 私有网络
     * @param string $UserSubnetId 子网
     * @param ChargeProperties $ChargeProperties 计费方式
     * @param string $AdminPassword 集群密码
     * @param array $Resources 资源信息
     * @param Tag $Tags 标签列表
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("UserVPCId",$param) and $param["UserVPCId"] !== null) {
            $this->UserVPCId = $param["UserVPCId"];
        }

        if (array_key_exists("UserSubnetId",$param) and $param["UserSubnetId"] !== null) {
            $this->UserSubnetId = $param["UserSubnetId"];
        }

        if (array_key_exists("ChargeProperties",$param) and $param["ChargeProperties"] !== null) {
            $this->ChargeProperties = new ChargeProperties();
            $this->ChargeProperties->deserialize($param["ChargeProperties"]);
        }

        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            $this->AdminPassword = $param["AdminPassword"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new ResourceSpecNew();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = new Tag();
            $this->Tags->deserialize($param["Tags"]);
        }
    }
}
