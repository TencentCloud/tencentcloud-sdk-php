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
 * @method string getRoleArn() 获取角色的资源描述
 * @method void setRoleArn(string $RoleArn) 设置角色的资源描述
 * @method string getRootAccess() 获取Root访问权限
 * @method void setRootAccess(string $RootAccess) 设置Root访问权限
 * @method integer getVolumeSizeInGB() 获取数据卷大小(GB)
 * @method void setVolumeSizeInGB(integer $VolumeSizeInGB) 设置数据卷大小(GB)
 * @method string getInstanceType() 获取算力资源类型
 * @method void setInstanceType(string $InstanceType) 设置算力资源类型
 */

/**
 *UpdateNotebookInstance请求参数结构体
 */
class UpdateNotebookInstanceRequest extends AbstractModel
{
    /**
     * @var string Notebook实例名称
     */
    public $NotebookInstanceName;

    /**
     * @var string 角色的资源描述
     */
    public $RoleArn;

    /**
     * @var string Root访问权限
     */
    public $RootAccess;

    /**
     * @var integer 数据卷大小(GB)
     */
    public $VolumeSizeInGB;

    /**
     * @var string 算力资源类型
     */
    public $InstanceType;
    /**
     * @param string $NotebookInstanceName Notebook实例名称
     * @param string $RoleArn 角色的资源描述
     * @param string $RootAccess Root访问权限
     * @param integer $VolumeSizeInGB 数据卷大小(GB)
     * @param string $InstanceType 算力资源类型
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

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("RootAccess",$param) and $param["RootAccess"] !== null) {
            $this->RootAccess = $param["RootAccess"];
        }

        if (array_key_exists("VolumeSizeInGB",$param) and $param["VolumeSizeInGB"] !== null) {
            $this->VolumeSizeInGB = $param["VolumeSizeInGB"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
