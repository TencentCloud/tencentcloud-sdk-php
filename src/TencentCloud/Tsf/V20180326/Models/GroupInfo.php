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
 * 日志投递kafka用，描述部署组信息
 *
 * @method string getGroupId() 获取部署组id
 * @method void setGroupId(string $GroupId) 设置部署组id
 * @method string getGroupName() 获取部署组名称
 * @method void setGroupName(string $GroupName) 设置部署组名称
 * @method string getClusterType() 获取集群类型
 * @method void setClusterType(string $ClusterType) 设置集群类型
 * @method string getClusterId() 获取集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceName() 获取命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssociateTime() 获取绑定时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociateTime(string $AssociateTime) 设置绑定时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var string 部署组id
     */
    public $GroupId;

    /**
     * @var string 部署组名称
     */
    public $GroupName;

    /**
     * @var string 集群类型
     */
    public $ClusterType;

    /**
     * @var string 集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string 命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceName;

    /**
     * @var string 绑定时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssociateTime;

    /**
     * @param string $GroupId 部署组id
     * @param string $GroupName 部署组名称
     * @param string $ClusterType 集群类型
     * @param string $ClusterId 集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceName 命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssociateTime 绑定时间
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

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("AssociateTime",$param) and $param["AssociateTime"] !== null) {
            $this->AssociateTime = $param["AssociateTime"];
        }
    }
}
