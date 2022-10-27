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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 空间和集群绑定关系
 *
 * @method integer getClusterGroupId() 获取集群 ID
 * @method void setClusterGroupId(integer $ClusterGroupId) 设置集群 ID
 * @method string getClusterGroupSerialId() 获取集群 SerialId
 * @method void setClusterGroupSerialId(string $ClusterGroupSerialId) 设置集群 SerialId
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getWorkSpaceId() 获取工作空间 SerialId
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 SerialId
 * @method string getWorkSpaceName() 获取工作空间名称
 * @method void setWorkSpaceName(string $WorkSpaceName) 设置工作空间名称
 * @method integer getStatus() 获取绑定状态  2 绑定 1  解除绑定
 * @method void setStatus(integer $Status) 设置绑定状态  2 绑定 1  解除绑定
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method string getProjectIdStr() 获取项目ID string类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectIdStr(string $ProjectIdStr) 设置项目ID string类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkSpaceClusterItem extends AbstractModel
{
    /**
     * @var integer 集群 ID
     */
    public $ClusterGroupId;

    /**
     * @var string 集群 SerialId
     */
    public $ClusterGroupSerialId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 工作空间 SerialId
     */
    public $WorkSpaceId;

    /**
     * @var string 工作空间名称
     */
    public $WorkSpaceName;

    /**
     * @var integer 绑定状态  2 绑定 1  解除绑定
     */
    public $Status;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var string 项目ID string类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectIdStr;

    /**
     * @param integer $ClusterGroupId 集群 ID
     * @param string $ClusterGroupSerialId 集群 SerialId
     * @param string $ClusterName 集群名称
     * @param string $WorkSpaceId 工作空间 SerialId
     * @param string $WorkSpaceName 工作空间名称
     * @param integer $Status 绑定状态  2 绑定 1  解除绑定
     * @param integer $ProjectId 项目ID
     * @param string $ProjectIdStr 项目ID string类型
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
        if (array_key_exists("ClusterGroupId",$param) and $param["ClusterGroupId"] !== null) {
            $this->ClusterGroupId = $param["ClusterGroupId"];
        }

        if (array_key_exists("ClusterGroupSerialId",$param) and $param["ClusterGroupSerialId"] !== null) {
            $this->ClusterGroupSerialId = $param["ClusterGroupSerialId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }

        if (array_key_exists("WorkSpaceName",$param) and $param["WorkSpaceName"] !== null) {
            $this->WorkSpaceName = $param["WorkSpaceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectIdStr",$param) and $param["ProjectIdStr"] !== null) {
            $this->ProjectIdStr = $param["ProjectIdStr"];
        }
    }
}
