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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstanceNew请求参数结构体
 *
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method boolean getHaFlag() 获取是否高可用
 * @method void setHaFlag(boolean $HaFlag) 设置是否高可用
 * @method string getUserVPCId() 获取私有网络
 * @method void setUserVPCId(string $UserVPCId) 设置私有网络
 * @method string getUserSubnetId() 获取子网
 * @method void setUserSubnetId(string $UserSubnetId) 设置子网
 * @method string getProductVersion() 获取版本
 * @method void setProductVersion(string $ProductVersion) 设置版本
 * @method Charge getChargeProperties() 获取计费方式
 * @method void setChargeProperties(Charge $ChargeProperties) 设置计费方式
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method NodeSpec getDataSpec() 获取数据节点
 * @method void setDataSpec(NodeSpec $DataSpec) 设置数据节点
 * @method Tag getTags() 获取标签列表
 * @method void setTags(Tag $Tags) 设置标签列表
 * @method string getClsLogSetId() 获取日志主题ID
 * @method void setClsLogSetId(string $ClsLogSetId) 设置日志主题ID
 * @method string getCosBucketName() 获取COS桶名称
 * @method void setCosBucketName(string $CosBucketName) 设置COS桶名称
 * @method integer getMountDiskType() 获取是否是裸盘挂载
 * @method void setMountDiskType(integer $MountDiskType) 设置是否是裸盘挂载
 * @method boolean getHAZk() 获取是否是ZK高可用
 * @method void setHAZk(boolean $HAZk) 设置是否是ZK高可用
 * @method NodeSpec getCommonSpec() 获取ZK节点
 * @method void setCommonSpec(NodeSpec $CommonSpec) 设置ZK节点
 */
class CreateInstanceNewRequest extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var boolean 是否高可用
     */
    public $HaFlag;

    /**
     * @var string 私有网络
     */
    public $UserVPCId;

    /**
     * @var string 子网
     */
    public $UserSubnetId;

    /**
     * @var string 版本
     */
    public $ProductVersion;

    /**
     * @var Charge 计费方式
     */
    public $ChargeProperties;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var NodeSpec 数据节点
     */
    public $DataSpec;

    /**
     * @var Tag 标签列表
     */
    public $Tags;

    /**
     * @var string 日志主题ID
     */
    public $ClsLogSetId;

    /**
     * @var string COS桶名称
     */
    public $CosBucketName;

    /**
     * @var integer 是否是裸盘挂载
     */
    public $MountDiskType;

    /**
     * @var boolean 是否是ZK高可用
     */
    public $HAZk;

    /**
     * @var NodeSpec ZK节点
     */
    public $CommonSpec;

    /**
     * @param string $Zone 可用区
     * @param boolean $HaFlag 是否高可用
     * @param string $UserVPCId 私有网络
     * @param string $UserSubnetId 子网
     * @param string $ProductVersion 版本
     * @param Charge $ChargeProperties 计费方式
     * @param string $InstanceName 实例名称
     * @param NodeSpec $DataSpec 数据节点
     * @param Tag $Tags 标签列表
     * @param string $ClsLogSetId 日志主题ID
     * @param string $CosBucketName COS桶名称
     * @param integer $MountDiskType 是否是裸盘挂载
     * @param boolean $HAZk 是否是ZK高可用
     * @param NodeSpec $CommonSpec ZK节点
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("HaFlag",$param) and $param["HaFlag"] !== null) {
            $this->HaFlag = $param["HaFlag"];
        }

        if (array_key_exists("UserVPCId",$param) and $param["UserVPCId"] !== null) {
            $this->UserVPCId = $param["UserVPCId"];
        }

        if (array_key_exists("UserSubnetId",$param) and $param["UserSubnetId"] !== null) {
            $this->UserSubnetId = $param["UserSubnetId"];
        }

        if (array_key_exists("ProductVersion",$param) and $param["ProductVersion"] !== null) {
            $this->ProductVersion = $param["ProductVersion"];
        }

        if (array_key_exists("ChargeProperties",$param) and $param["ChargeProperties"] !== null) {
            $this->ChargeProperties = new Charge();
            $this->ChargeProperties->deserialize($param["ChargeProperties"]);
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("DataSpec",$param) and $param["DataSpec"] !== null) {
            $this->DataSpec = new NodeSpec();
            $this->DataSpec->deserialize($param["DataSpec"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = new Tag();
            $this->Tags->deserialize($param["Tags"]);
        }

        if (array_key_exists("ClsLogSetId",$param) and $param["ClsLogSetId"] !== null) {
            $this->ClsLogSetId = $param["ClsLogSetId"];
        }

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("MountDiskType",$param) and $param["MountDiskType"] !== null) {
            $this->MountDiskType = $param["MountDiskType"];
        }

        if (array_key_exists("HAZk",$param) and $param["HAZk"] !== null) {
            $this->HAZk = $param["HAZk"];
        }

        if (array_key_exists("CommonSpec",$param) and $param["CommonSpec"] !== null) {
            $this->CommonSpec = new NodeSpec();
            $this->CommonSpec->deserialize($param["CommonSpec"]);
        }
    }
}
