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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Namespace 基础信息
 *
 * @method string getEnvironmentId() 获取ID 信息
 * @method void setEnvironmentId(string $EnvironmentId) 设置ID 信息
 * @method string getNamespaceName() 获取名字（已弃用）
 * @method void setNamespaceName(string $NamespaceName) 设置名字（已弃用）
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getVpcId() 获取vpc id
 * @method void setVpcId(string $VpcId) 设置vpc id
 * @method array getSubnetIds() 获取subnet id 数组
 * @method void setSubnetIds(array $SubnetIds) 设置subnet id 数组
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getCreatedDate() 获取创建时间
 * @method void setCreatedDate(string $CreatedDate) 设置创建时间
 * @method string getEnvironmentName() 获取环境名称
 * @method void setEnvironmentName(string $EnvironmentName) 设置环境名称
 * @method string getApmInstanceId() 获取APM 资源 ID
 * @method void setApmInstanceId(string $ApmInstanceId) 设置APM 资源 ID
 * @method integer getLocked() 获取环境是否上锁，1为上锁，0则未上锁
 * @method void setLocked(integer $Locked) 设置环境是否上锁，1为上锁，0则未上锁
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method string getEnvType() 获取环境类型：test、pre、prod
 * @method void setEnvType(string $EnvType) 设置环境类型：test、pre、prod
 */
class NamespaceInfo extends AbstractModel
{
    /**
     * @var string ID 信息
     */
    public $EnvironmentId;

    /**
     * @var string 名字（已弃用）
     */
    public $NamespaceName;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string vpc id
     */
    public $VpcId;

    /**
     * @var array subnet id 数组
     */
    public $SubnetIds;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 创建时间
     */
    public $CreatedDate;

    /**
     * @var string 环境名称
     */
    public $EnvironmentName;

    /**
     * @var string APM 资源 ID
     */
    public $ApmInstanceId;

    /**
     * @var integer 环境是否上锁，1为上锁，0则未上锁
     */
    public $Locked;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @var string 环境类型：test、pre、prod
     */
    public $EnvType;

    /**
     * @param string $EnvironmentId ID 信息
     * @param string $NamespaceName 名字（已弃用）
     * @param string $Region 地域
     * @param string $VpcId vpc id
     * @param array $SubnetIds subnet id 数组
     * @param string $Description 描述
     * @param string $CreatedDate 创建时间
     * @param string $EnvironmentName 环境名称
     * @param string $ApmInstanceId APM 资源 ID
     * @param integer $Locked 环境是否上锁，1为上锁，0则未上锁
     * @param array $Tags 标签
     * @param string $EnvType 环境类型：test、pre、prod
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("ApmInstanceId",$param) and $param["ApmInstanceId"] !== null) {
            $this->ApmInstanceId = $param["ApmInstanceId"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }
    }
}
