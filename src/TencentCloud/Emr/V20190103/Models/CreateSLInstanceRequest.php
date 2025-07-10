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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSLInstance请求参数结构体
 *
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method integer getPayMode() 获取实例计费模式，0表示后付费，即按量计费，1表示预付费，即包年包月。
 * @method void setPayMode(integer $PayMode) 设置实例计费模式，0表示后付费，即按量计费，1表示预付费，即包年包月。
 * @method string getDiskType() 获取实例存储类型，CLOUD_HSSD表示性能云存储， CLOUD_BSSD表示标准云存储。
 * @method void setDiskType(string $DiskType) 设置实例存储类型，CLOUD_HSSD表示性能云存储， CLOUD_BSSD表示标准云存储。
 * @method integer getDiskSize() 获取实例单节点磁盘容量，单位GB，单节点磁盘容量需大于等于100，小于等于250*CPU核心数，容量调整步长为100。
 * @method void setDiskSize(integer $DiskSize) 设置实例单节点磁盘容量，单位GB，单节点磁盘容量需大于等于100，小于等于250*CPU核心数，容量调整步长为100。
 * @method string getNodeType() 获取实例节点规格，可填写4C16G、8C32G、16C64G、32C128G，不区分大小写。
 * @method void setNodeType(string $NodeType) 设置实例节点规格，可填写4C16G、8C32G、16C64G、32C128G，不区分大小写。
 * @method array getZoneSettings() 获取实例可用区详细配置，当前支持多可用区，可用区数量只能为1或3，包含区域名称，VPC信息、节点数量，其中所有区域节点总数需大于等于3，小于等于50。
 * @method void setZoneSettings(array $ZoneSettings) 设置实例可用区详细配置，当前支持多可用区，可用区数量只能为1或3，包含区域名称，VPC信息、节点数量，其中所有区域节点总数需大于等于3，小于等于50。
 * @method array getTags() 获取实例要绑定的标签列表。
 * @method void setTags(array $Tags) 设置实例要绑定的标签列表。
 * @method PrePaySetting getPrePaySetting() 获取预付费参数
 * @method void setPrePaySetting(PrePaySetting $PrePaySetting) 设置预付费参数
 * @method string getClientToken() 获取唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-****-****-****-fae360632808	
 * @method void setClientToken(string $ClientToken) 设置唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-****-****-****-fae360632808	
 * @method string getDeploymentMode() 获取部署模式
 * @method void setDeploymentMode(string $DeploymentMode) 设置部署模式
 */
class CreateSLInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var integer 实例计费模式，0表示后付费，即按量计费，1表示预付费，即包年包月。
     */
    public $PayMode;

    /**
     * @var string 实例存储类型，CLOUD_HSSD表示性能云存储， CLOUD_BSSD表示标准云存储。
     */
    public $DiskType;

    /**
     * @var integer 实例单节点磁盘容量，单位GB，单节点磁盘容量需大于等于100，小于等于250*CPU核心数，容量调整步长为100。
     */
    public $DiskSize;

    /**
     * @var string 实例节点规格，可填写4C16G、8C32G、16C64G、32C128G，不区分大小写。
     */
    public $NodeType;

    /**
     * @var array 实例可用区详细配置，当前支持多可用区，可用区数量只能为1或3，包含区域名称，VPC信息、节点数量，其中所有区域节点总数需大于等于3，小于等于50。
     */
    public $ZoneSettings;

    /**
     * @var array 实例要绑定的标签列表。
     */
    public $Tags;

    /**
     * @var PrePaySetting 预付费参数
     */
    public $PrePaySetting;

    /**
     * @var string 唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-****-****-****-fae360632808	
     */
    public $ClientToken;

    /**
     * @var string 部署模式
     */
    public $DeploymentMode;

    /**
     * @param string $InstanceName 实例名称。
     * @param integer $PayMode 实例计费模式，0表示后付费，即按量计费，1表示预付费，即包年包月。
     * @param string $DiskType 实例存储类型，CLOUD_HSSD表示性能云存储， CLOUD_BSSD表示标准云存储。
     * @param integer $DiskSize 实例单节点磁盘容量，单位GB，单节点磁盘容量需大于等于100，小于等于250*CPU核心数，容量调整步长为100。
     * @param string $NodeType 实例节点规格，可填写4C16G、8C32G、16C64G、32C128G，不区分大小写。
     * @param array $ZoneSettings 实例可用区详细配置，当前支持多可用区，可用区数量只能为1或3，包含区域名称，VPC信息、节点数量，其中所有区域节点总数需大于等于3，小于等于50。
     * @param array $Tags 实例要绑定的标签列表。
     * @param PrePaySetting $PrePaySetting 预付费参数
     * @param string $ClientToken 唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-****-****-****-fae360632808	
     * @param string $DeploymentMode 部署模式
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

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("ZoneSettings",$param) and $param["ZoneSettings"] !== null) {
            $this->ZoneSettings = [];
            foreach ($param["ZoneSettings"] as $key => $value){
                $obj = new ZoneSetting();
                $obj->deserialize($value);
                array_push($this->ZoneSettings, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("PrePaySetting",$param) and $param["PrePaySetting"] !== null) {
            $this->PrePaySetting = new PrePaySetting();
            $this->PrePaySetting->deserialize($param["PrePaySetting"]);
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("DeploymentMode",$param) and $param["DeploymentMode"] !== null) {
            $this->DeploymentMode = $param["DeploymentMode"];
        }
    }
}
