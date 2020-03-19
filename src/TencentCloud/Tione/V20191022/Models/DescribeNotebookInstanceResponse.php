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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getNotebookInstanceName() 获取Notebook实例名称
 * @method void setNotebookInstanceName(string $NotebookInstanceName) 设置Notebook实例名称
 * @method string getInstanceType() 获取Notebook算力资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置Notebook算力资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleArn() 获取角色的资源描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleArn(string $RoleArn) 设置角色的资源描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDirectInternetAccess() 获取外网访问权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDirectInternetAccess(string $DirectInternetAccess) 设置外网访问权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRootAccess() 获取Root用户权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRootAccess(string $RootAccess) 设置Root用户权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecurityGroupIds() 获取安全组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVolumeSizeInGB() 获取数据卷大小(GB)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeSizeInGB(integer $VolumeSizeInGB) 设置数据卷大小(GB)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取Notebook实例链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置Notebook实例链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailureReason() 获取创建失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailureReason(string $FailureReason) 设置创建失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationTime() 获取Notebook实例创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTime(string $CreationTime) 设置Notebook实例创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifiedTime() 获取Notebook实例最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifiedTime(string $LastModifiedTime) 设置Notebook实例最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNetworkInterfaceId() 获取Notebook实例网卡ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置Notebook实例网卡ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogUrl() 获取Notebook实例日志链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogUrl(string $LogUrl) 设置Notebook实例日志链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNotebookInstanceStatus() 获取Notebook实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotebookInstanceStatus(string $NotebookInstanceStatus) 设置Notebook实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取Notebook实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置Notebook实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *DescribeNotebookInstance返回参数结构体
 */
class DescribeNotebookInstanceResponse extends AbstractModel
{
    /**
     * @var string Notebook实例名称
     */
    public $NotebookInstanceName;

    /**
     * @var string Notebook算力资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string 角色的资源描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleArn;

    /**
     * @var string 外网访问权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DirectInternetAccess;

    /**
     * @var string Root用户权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RootAccess;

    /**
     * @var array 安全组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityGroupIds;

    /**
     * @var string 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var integer 数据卷大小(GB)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeSizeInGB;

    /**
     * @var string Notebook实例链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 创建失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailureReason;

    /**
     * @var string Notebook实例创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTime;

    /**
     * @var string Notebook实例最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifiedTime;

    /**
     * @var string Notebook实例网卡ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkInterfaceId;

    /**
     * @var string Notebook实例日志链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogUrl;

    /**
     * @var string Notebook实例状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotebookInstanceStatus;

    /**
     * @var string Notebook实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param string $NotebookInstanceName Notebook实例名称
     * @param string $InstanceType Notebook算力资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleArn 角色的资源描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DirectInternetAccess 外网访问权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RootAccess Root用户权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecurityGroupIds 安全组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VolumeSizeInGB 数据卷大小(GB)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url Notebook实例链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailureReason 创建失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationTime Notebook实例创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifiedTime Notebook实例最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NetworkInterfaceId Notebook实例网卡ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogUrl Notebook实例日志链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NotebookInstanceStatus Notebook实例状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId Notebook实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("NotebookInstanceName",$param) and $param["NotebookInstanceName"] !== null) {
            $this->NotebookInstanceName = $param["NotebookInstanceName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("DirectInternetAccess",$param) and $param["DirectInternetAccess"] !== null) {
            $this->DirectInternetAccess = $param["DirectInternetAccess"];
        }

        if (array_key_exists("RootAccess",$param) and $param["RootAccess"] !== null) {
            $this->RootAccess = $param["RootAccess"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VolumeSizeInGB",$param) and $param["VolumeSizeInGB"] !== null) {
            $this->VolumeSizeInGB = $param["VolumeSizeInGB"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("LastModifiedTime",$param) and $param["LastModifiedTime"] !== null) {
            $this->LastModifiedTime = $param["LastModifiedTime"];
        }

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("LogUrl",$param) and $param["LogUrl"] !== null) {
            $this->LogUrl = $param["LogUrl"];
        }

        if (array_key_exists("NotebookInstanceStatus",$param) and $param["NotebookInstanceStatus"] !== null) {
            $this->NotebookInstanceStatus = $param["NotebookInstanceStatus"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
