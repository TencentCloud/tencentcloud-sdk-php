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
namespace TencentCloud\Eis\V20210601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运行时部署的应用实例详情
 *
 * @method integer getGroupId() 获取项目id
 * @method void setGroupId(integer $GroupId) 设置项目id
 * @method string getGroupName() 获取项目名称
 * @method void setGroupName(string $GroupName) 设置项目名称
 * @method integer getProjectId() 获取应用id
 * @method void setProjectId(integer $ProjectId) 设置应用id
 * @method string getProjectName() 获取应用名称
 * @method void setProjectName(string $ProjectName) 设置应用名称
 * @method integer getInstanceId() 获取应用实例id
 * @method void setInstanceId(integer $InstanceId) 设置应用实例id
 * @method integer getInstanceVersion() 获取应用实例版本
 * @method void setInstanceVersion(integer $InstanceVersion) 设置应用实例版本
 * @method integer getInstanceCreatedAt() 获取应用实例创建时间
 * @method void setInstanceCreatedAt(integer $InstanceCreatedAt) 设置应用实例创建时间
 * @method integer getStatus() 获取应用实例部署状态. 0:running, 1:deleting
 * @method void setStatus(integer $Status) 设置应用实例部署状态. 0:running, 1:deleting
 * @method integer getCreatedAt() 获取应用实例部署创建时间
 * @method void setCreatedAt(integer $CreatedAt) 设置应用实例部署创建时间
 * @method integer getUpdatedAt() 获取应用实例部署更新时间
 * @method void setUpdatedAt(integer $UpdatedAt) 设置应用实例部署更新时间
 * @method integer getProjectType() 获取应用类型：0:NormalApp普通应用 1:TemplateApp模板应用 2:LightApp轻应用 3:MicroConnTemplate微连接模板 4:MicroConnApp微连接应用
 * @method void setProjectType(integer $ProjectType) 设置应用类型：0:NormalApp普通应用 1:TemplateApp模板应用 2:LightApp轻应用 3:MicroConnTemplate微连接模板 4:MicroConnApp微连接应用
 * @method integer getProjectVersion() 获取应用版本：0:旧版 1:3.0新控制台
 * @method void setProjectVersion(integer $ProjectVersion) 设置应用版本：0:旧版 1:3.0新控制台
 */
class RuntimeDeployedInstanceMC extends AbstractModel
{
    /**
     * @var integer 项目id
     */
    public $GroupId;

    /**
     * @var string 项目名称
     */
    public $GroupName;

    /**
     * @var integer 应用id
     */
    public $ProjectId;

    /**
     * @var string 应用名称
     */
    public $ProjectName;

    /**
     * @var integer 应用实例id
     */
    public $InstanceId;

    /**
     * @var integer 应用实例版本
     */
    public $InstanceVersion;

    /**
     * @var integer 应用实例创建时间
     */
    public $InstanceCreatedAt;

    /**
     * @var integer 应用实例部署状态. 0:running, 1:deleting
     */
    public $Status;

    /**
     * @var integer 应用实例部署创建时间
     */
    public $CreatedAt;

    /**
     * @var integer 应用实例部署更新时间
     */
    public $UpdatedAt;

    /**
     * @var integer 应用类型：0:NormalApp普通应用 1:TemplateApp模板应用 2:LightApp轻应用 3:MicroConnTemplate微连接模板 4:MicroConnApp微连接应用
     */
    public $ProjectType;

    /**
     * @var integer 应用版本：0:旧版 1:3.0新控制台
     */
    public $ProjectVersion;

    /**
     * @param integer $GroupId 项目id
     * @param string $GroupName 项目名称
     * @param integer $ProjectId 应用id
     * @param string $ProjectName 应用名称
     * @param integer $InstanceId 应用实例id
     * @param integer $InstanceVersion 应用实例版本
     * @param integer $InstanceCreatedAt 应用实例创建时间
     * @param integer $Status 应用实例部署状态. 0:running, 1:deleting
     * @param integer $CreatedAt 应用实例部署创建时间
     * @param integer $UpdatedAt 应用实例部署更新时间
     * @param integer $ProjectType 应用类型：0:NormalApp普通应用 1:TemplateApp模板应用 2:LightApp轻应用 3:MicroConnTemplate微连接模板 4:MicroConnApp微连接应用
     * @param integer $ProjectVersion 应用版本：0:旧版 1:3.0新控制台
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("InstanceCreatedAt",$param) and $param["InstanceCreatedAt"] !== null) {
            $this->InstanceCreatedAt = $param["InstanceCreatedAt"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("ProjectType",$param) and $param["ProjectType"] !== null) {
            $this->ProjectType = $param["ProjectType"];
        }

        if (array_key_exists("ProjectVersion",$param) and $param["ProjectVersion"] !== null) {
            $this->ProjectVersion = $param["ProjectVersion"];
        }
    }
}
