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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务日志配置关联部署组信息
 *
 * @method string getGroupId() 获取部署组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置部署组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取部署组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置部署组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationId() 获取部署组所属应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationId(string $ApplicationId) 设置部署组所属应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationName() 获取部署组所属应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置部署组所属应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationType() 获取部署组所属应用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationType(string $ApplicationType) 设置部署组所属应用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceId() 获取部署组所属命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceId(string $NamespaceId) 设置部署组所属命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceName() 获取部署组所属命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceName(string $NamespaceName) 设置部署组所属命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取部署组所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置部署组所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取部署组所属集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置部署组所属集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterType() 获取部署组所属集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterType(string $ClusterType) 设置部署组所属集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssociatedTime() 获取部署组关联日志配置时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociatedTime(string $AssociatedTime) 设置部署组关联日志配置时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class BusinesLogConfigAssociatedGroup extends AbstractModel
{
    /**
     * @var string 部署组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 部署组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var string 部署组所属应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationId;

    /**
     * @var string 部署组所属应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationName;

    /**
     * @var string 部署组所属应用类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationType;

    /**
     * @var string 部署组所属命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceId;

    /**
     * @var string 部署组所属命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceName;

    /**
     * @var string 部署组所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 部署组所属集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string 部署组所属集群类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterType;

    /**
     * @var string 部署组关联日志配置时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssociatedTime;

    /**
     * @param string $GroupId 部署组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 部署组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationId 部署组所属应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationName 部署组所属应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationType 部署组所属应用类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceId 部署组所属命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceName 部署组所属命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 部署组所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 部署组所属集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterType 部署组所属集群类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssociatedTime 部署组关联日志配置时间
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("AssociatedTime",$param) and $param["AssociatedTime"] !== null) {
            $this->AssociatedTime = $param["AssociatedTime"];
        }
    }
}
