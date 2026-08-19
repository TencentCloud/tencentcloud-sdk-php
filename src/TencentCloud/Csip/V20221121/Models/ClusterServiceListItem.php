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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群service列表项
 *
 * @method integer getAppID() 获取<p>appid</p>
 * @method void setAppID(integer $AppID) 设置<p>appid</p>
 * @method string getAssetId() 获取<p>资产id</p>
 * @method void setAssetId(string $AssetId) 设置<p>资产id</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method array getSelectorLabel() 获取<p>selector标签</p>
 * @method void setSelectorLabel(array $SelectorLabel) 设置<p>selector标签</p>
 * @method string getNamespace() 获取<p>命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>命名空间</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getServiceUniqueID() 获取<p>service 唯一 ID</p>
 * @method void setServiceUniqueID(string $ServiceUniqueID) 设置<p>service 唯一 ID</p>
 * @method string getServiceType() 获取<p>service 类型</p>
 * @method void setServiceType(string $ServiceType) 设置<p>service 类型</p>
 * @method string getClusterIP() 获取<p>集群IP</p>
 * @method void setClusterIP(string $ClusterIP) 设置<p>集群IP</p>
 * @method array getExternalIP() 获取<p>外网IP</p>
 * @method void setExternalIP(array $ExternalIP) 设置<p>外网IP</p>
 * @method array getPorts() 获取<p>端口</p>
 * @method void setPorts(array $Ports) 设置<p>端口</p>
 */
class ClusterServiceListItem extends AbstractModel
{
    /**
     * @var integer <p>appid</p>
     */
    public $AppID;

    /**
     * @var string <p>资产id</p>
     * @deprecated
     */
    public $AssetId;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var array <p>selector标签</p>
     */
    public $SelectorLabel;

    /**
     * @var string <p>命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>service 唯一 ID</p>
     */
    public $ServiceUniqueID;

    /**
     * @var string <p>service 类型</p>
     */
    public $ServiceType;

    /**
     * @var string <p>集群IP</p>
     */
    public $ClusterIP;

    /**
     * @var array <p>外网IP</p>
     */
    public $ExternalIP;

    /**
     * @var array <p>端口</p>
     */
    public $Ports;

    /**
     * @param integer $AppID <p>appid</p>
     * @param string $AssetId <p>资产id</p>
     * @param string $Name <p>名称</p>
     * @param array $SelectorLabel <p>selector标签</p>
     * @param string $Namespace <p>命名空间</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $ServiceUniqueID <p>service 唯一 ID</p>
     * @param string $ServiceType <p>service 类型</p>
     * @param string $ClusterIP <p>集群IP</p>
     * @param array $ExternalIP <p>外网IP</p>
     * @param array $Ports <p>端口</p>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SelectorLabel",$param) and $param["SelectorLabel"] !== null) {
            $this->SelectorLabel = [];
            foreach ($param["SelectorLabel"] as $key => $value){
                $obj = new AssetTag();
                $obj->deserialize($value);
                array_push($this->SelectorLabel, $obj);
            }
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ServiceUniqueID",$param) and $param["ServiceUniqueID"] !== null) {
            $this->ServiceUniqueID = $param["ServiceUniqueID"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ClusterIP",$param) and $param["ClusterIP"] !== null) {
            $this->ClusterIP = $param["ClusterIP"];
        }

        if (array_key_exists("ExternalIP",$param) and $param["ExternalIP"] !== null) {
            $this->ExternalIP = $param["ExternalIP"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = $param["Ports"];
        }
    }
}
