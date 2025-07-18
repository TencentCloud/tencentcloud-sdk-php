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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命名空间
 *
 * @method string getNamespaceId() 获取命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
 * @method string getNamespaceCode() 获取命名空间编码
 * @method void setNamespaceCode(string $NamespaceCode) 设置命名空间编码
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method string getNamespaceDesc() 获取命名空间描述
 * @method void setNamespaceDesc(string $NamespaceDesc) 设置命名空间描述
 * @method string getIsDefault() 获取默认命名空间
 * @method void setIsDefault(string $IsDefault) 设置默认命名空间
 * @method string getNamespaceStatus() 获取命名空间状态
 * @method void setNamespaceStatus(string $NamespaceStatus) 设置命名空间状态
 * @method boolean getDeleteFlag() 获取删除标识
 * @method void setDeleteFlag(boolean $DeleteFlag) 设置删除标识
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method array getClusterList() 获取集群数组，仅携带集群ID，集群名称，集群类型等基础信息。
 * @method void setClusterList(array $ClusterList) 设置集群数组，仅携带集群ID，集群名称，集群类型等基础信息。
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getNamespaceResourceType() 获取集群资源类型
 * @method void setNamespaceResourceType(string $NamespaceResourceType) 设置集群资源类型
 * @method string getNamespaceType() 获取命名空间类型
 * @method void setNamespaceType(string $NamespaceType) 设置命名空间类型
 * @method string getIsHaEnable() 获取是否开启高可用
 * @method void setIsHaEnable(string $IsHaEnable) 设置是否开启高可用
 * @method boolean getKubeInjectEnable() 获取KubeInjectEnable值
 * @method void setKubeInjectEnable(boolean $KubeInjectEnable) 设置KubeInjectEnable值
 */
class NamespaceInfo extends AbstractModel
{
    /**
     * @var string 命名空间ID
     */
    public $NamespaceId;

    /**
     * @var string 命名空间编码
     */
    public $NamespaceCode;

    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @var string 命名空间描述
     */
    public $NamespaceDesc;

    /**
     * @var string 默认命名空间
     */
    public $IsDefault;

    /**
     * @var string 命名空间状态
     */
    public $NamespaceStatus;

    /**
     * @var boolean 删除标识
     */
    public $DeleteFlag;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var array 集群数组，仅携带集群ID，集群名称，集群类型等基础信息。
     */
    public $ClusterList;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群资源类型
     */
    public $NamespaceResourceType;

    /**
     * @var string 命名空间类型
     */
    public $NamespaceType;

    /**
     * @var string 是否开启高可用
     */
    public $IsHaEnable;

    /**
     * @var boolean KubeInjectEnable值
     */
    public $KubeInjectEnable;

    /**
     * @param string $NamespaceId 命名空间ID
     * @param string $NamespaceCode 命名空间编码
     * @param string $NamespaceName 命名空间名称
     * @param string $NamespaceDesc 命名空间描述
     * @param string $IsDefault 默认命名空间
     * @param string $NamespaceStatus 命名空间状态
     * @param boolean $DeleteFlag 删除标识
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param array $ClusterList 集群数组，仅携带集群ID，集群名称，集群类型等基础信息。
     * @param string $ClusterId 集群ID
     * @param string $NamespaceResourceType 集群资源类型
     * @param string $NamespaceType 命名空间类型
     * @param string $IsHaEnable 是否开启高可用
     * @param boolean $KubeInjectEnable KubeInjectEnable值
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceCode",$param) and $param["NamespaceCode"] !== null) {
            $this->NamespaceCode = $param["NamespaceCode"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("NamespaceDesc",$param) and $param["NamespaceDesc"] !== null) {
            $this->NamespaceDesc = $param["NamespaceDesc"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("NamespaceStatus",$param) and $param["NamespaceStatus"] !== null) {
            $this->NamespaceStatus = $param["NamespaceStatus"];
        }

        if (array_key_exists("DeleteFlag",$param) and $param["DeleteFlag"] !== null) {
            $this->DeleteFlag = $param["DeleteFlag"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ClusterList",$param) and $param["ClusterList"] !== null) {
            $this->ClusterList = [];
            foreach ($param["ClusterList"] as $key => $value){
                $obj = new Cluster();
                $obj->deserialize($value);
                array_push($this->ClusterList, $obj);
            }
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NamespaceResourceType",$param) and $param["NamespaceResourceType"] !== null) {
            $this->NamespaceResourceType = $param["NamespaceResourceType"];
        }

        if (array_key_exists("NamespaceType",$param) and $param["NamespaceType"] !== null) {
            $this->NamespaceType = $param["NamespaceType"];
        }

        if (array_key_exists("IsHaEnable",$param) and $param["IsHaEnable"] !== null) {
            $this->IsHaEnable = $param["IsHaEnable"];
        }

        if (array_key_exists("KubeInjectEnable",$param) and $param["KubeInjectEnable"] !== null) {
            $this->KubeInjectEnable = $param["KubeInjectEnable"];
        }
    }
}
