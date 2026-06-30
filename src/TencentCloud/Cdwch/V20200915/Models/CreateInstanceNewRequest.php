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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstanceNew请求参数结构体
 *
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method boolean getHaFlag() 获取<p>是否高可用</p>
 * @method void setHaFlag(boolean $HaFlag) 设置<p>是否高可用</p>
 * @method string getUserVPCId() 获取<p>私有网络</p>
 * @method void setUserVPCId(string $UserVPCId) 设置<p>私有网络</p>
 * @method string getUserSubnetId() 获取<p>子网</p>
 * @method void setUserSubnetId(string $UserSubnetId) 设置<p>子网</p>
 * @method string getProductVersion() 获取<p>系统版本</p>
 * @method void setProductVersion(string $ProductVersion) 设置<p>系统版本</p>
 * @method Charge getChargeProperties() 获取<p>计费方式</p>
 * @method void setChargeProperties(Charge $ChargeProperties) 设置<p>计费方式</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method NodeSpec getDataSpec() 获取<p>数据节点<br>SpecName从DescribeSpec接口中返回的DataSpec.Name获取</p>
 * @method void setDataSpec(NodeSpec $DataSpec) 设置<p>数据节点<br>SpecName从DescribeSpec接口中返回的DataSpec.Name获取</p>
 * @method Tag getTags() 获取<p>标签列表（废弃）</p>
 * @method void setTags(Tag $Tags) 设置<p>标签列表（废弃）</p>
 * @method string getClsLogSetId() 获取<p>日志主题ID</p>
 * @method void setClsLogSetId(string $ClsLogSetId) 设置<p>日志主题ID</p>
 * @method string getCosBucketName() 获取<p>COS桶名称</p>
 * @method void setCosBucketName(string $CosBucketName) 设置<p>COS桶名称</p>
 * @method integer getMountDiskType() 获取<p>是否是裸盘挂载，默认值 0 为 未挂载，1 为挂载。</p>
 * @method void setMountDiskType(integer $MountDiskType) 设置<p>是否是裸盘挂载，默认值 0 为 未挂载，1 为挂载。</p>
 * @method boolean getHAZk() 获取<p>是否是ZK高可用</p>
 * @method void setHAZk(boolean $HAZk) 设置<p>是否是ZK高可用</p>
 * @method NodeSpec getCommonSpec() 获取<p>ZK节点SpecName从DescribeSpec接口中返回的CommonSpec结构体的Name（ZK节点）获取</p>
 * @method void setCommonSpec(NodeSpec $CommonSpec) 设置<p>ZK节点SpecName从DescribeSpec接口中返回的CommonSpec结构体的Name（ZK节点）获取</p>
 * @method array getTagItems() 获取<p>标签列表</p>
 * @method void setTagItems(array $TagItems) 设置<p>标签列表</p>
 * @method array getSecondaryZoneInfo() 获取<p>副可用区信息</p>
 * @method void setSecondaryZoneInfo(array $SecondaryZoneInfo) 设置<p>副可用区信息</p>
 * @method string getCkDefaultUserPwd() 获取<p>default账号登录实例的密码。8-16个字符，至少包含大写字母、小写字母、数字和特殊字符!@#%^*中的三种，第一个字符不能为特殊字符</p>
 * @method void setCkDefaultUserPwd(string $CkDefaultUserPwd) 设置<p>default账号登录实例的密码。8-16个字符，至少包含大写字母、小写字母、数字和特殊字符!@#%^*中的三种，第一个字符不能为特殊字符</p>
 * @method string getClusterType() 获取<p>集群类型</p>
 * @method void setClusterType(string $ClusterType) 设置<p>集群类型</p>
 */
class CreateInstanceNewRequest extends AbstractModel
{
    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var boolean <p>是否高可用</p>
     */
    public $HaFlag;

    /**
     * @var string <p>私有网络</p>
     */
    public $UserVPCId;

    /**
     * @var string <p>子网</p>
     */
    public $UserSubnetId;

    /**
     * @var string <p>系统版本</p>
     */
    public $ProductVersion;

    /**
     * @var Charge <p>计费方式</p>
     */
    public $ChargeProperties;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var NodeSpec <p>数据节点<br>SpecName从DescribeSpec接口中返回的DataSpec.Name获取</p>
     */
    public $DataSpec;

    /**
     * @var Tag <p>标签列表（废弃）</p>
     * @deprecated
     */
    public $Tags;

    /**
     * @var string <p>日志主题ID</p>
     */
    public $ClsLogSetId;

    /**
     * @var string <p>COS桶名称</p>
     */
    public $CosBucketName;

    /**
     * @var integer <p>是否是裸盘挂载，默认值 0 为 未挂载，1 为挂载。</p>
     */
    public $MountDiskType;

    /**
     * @var boolean <p>是否是ZK高可用</p>
     */
    public $HAZk;

    /**
     * @var NodeSpec <p>ZK节点SpecName从DescribeSpec接口中返回的CommonSpec结构体的Name（ZK节点）获取</p>
     */
    public $CommonSpec;

    /**
     * @var array <p>标签列表</p>
     */
    public $TagItems;

    /**
     * @var array <p>副可用区信息</p>
     */
    public $SecondaryZoneInfo;

    /**
     * @var string <p>default账号登录实例的密码。8-16个字符，至少包含大写字母、小写字母、数字和特殊字符!@#%^*中的三种，第一个字符不能为特殊字符</p>
     */
    public $CkDefaultUserPwd;

    /**
     * @var string <p>集群类型</p>
     */
    public $ClusterType;

    /**
     * @param string $Zone <p>可用区</p>
     * @param boolean $HaFlag <p>是否高可用</p>
     * @param string $UserVPCId <p>私有网络</p>
     * @param string $UserSubnetId <p>子网</p>
     * @param string $ProductVersion <p>系统版本</p>
     * @param Charge $ChargeProperties <p>计费方式</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param NodeSpec $DataSpec <p>数据节点<br>SpecName从DescribeSpec接口中返回的DataSpec.Name获取</p>
     * @param Tag $Tags <p>标签列表（废弃）</p>
     * @param string $ClsLogSetId <p>日志主题ID</p>
     * @param string $CosBucketName <p>COS桶名称</p>
     * @param integer $MountDiskType <p>是否是裸盘挂载，默认值 0 为 未挂载，1 为挂载。</p>
     * @param boolean $HAZk <p>是否是ZK高可用</p>
     * @param NodeSpec $CommonSpec <p>ZK节点SpecName从DescribeSpec接口中返回的CommonSpec结构体的Name（ZK节点）获取</p>
     * @param array $TagItems <p>标签列表</p>
     * @param array $SecondaryZoneInfo <p>副可用区信息</p>
     * @param string $CkDefaultUserPwd <p>default账号登录实例的密码。8-16个字符，至少包含大写字母、小写字母、数字和特殊字符!@#%^*中的三种，第一个字符不能为特殊字符</p>
     * @param string $ClusterType <p>集群类型</p>
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

        if (array_key_exists("TagItems",$param) and $param["TagItems"] !== null) {
            $this->TagItems = [];
            foreach ($param["TagItems"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagItems, $obj);
            }
        }

        if (array_key_exists("SecondaryZoneInfo",$param) and $param["SecondaryZoneInfo"] !== null) {
            $this->SecondaryZoneInfo = [];
            foreach ($param["SecondaryZoneInfo"] as $key => $value){
                $obj = new SecondaryZoneInfo();
                $obj->deserialize($value);
                array_push($this->SecondaryZoneInfo, $obj);
            }
        }

        if (array_key_exists("CkDefaultUserPwd",$param) and $param["CkDefaultUserPwd"] !== null) {
            $this->CkDefaultUserPwd = $param["CkDefaultUserPwd"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
