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
 * @method string getInstanceType() 获取Notebook算力类型
 * @method void setInstanceType(string $InstanceType) 设置Notebook算力类型
 * @method string getRoleArn() 获取角色的资源描述
 * @method void setRoleArn(string $RoleArn) 设置角色的资源描述
 * @method string getDirectInternetAccess() 获取外网访问权限，可取值Enabled/Disabled
 * @method void setDirectInternetAccess(string $DirectInternetAccess) 设置外网访问权限，可取值Enabled/Disabled
 * @method string getRootAccess() 获取Root用户权限，可取值Enabled/Disabled
 * @method void setRootAccess(string $RootAccess) 设置Root用户权限，可取值Enabled/Disabled
 * @method array getSecurityGroupIds() 获取安全组ID
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method integer getVolumeSizeInGB() 获取数据卷大小(GB)
 * @method void setVolumeSizeInGB(integer $VolumeSizeInGB) 设置数据卷大小(GB)
 * @method array getTags() 获取Notebook标签
 * @method void setTags(array $Tags) 设置Notebook标签
 */

/**
 *CreateNotebookInstance请求参数结构体
 */
class CreateNotebookInstanceRequest extends AbstractModel
{
    /**
     * @var string Notebook实例名称
     */
    public $NotebookInstanceName;

    /**
     * @var string Notebook算力类型
     */
    public $InstanceType;

    /**
     * @var string 角色的资源描述
     */
    public $RoleArn;

    /**
     * @var string 外网访问权限，可取值Enabled/Disabled
     */
    public $DirectInternetAccess;

    /**
     * @var string Root用户权限，可取值Enabled/Disabled
     */
    public $RootAccess;

    /**
     * @var array 安全组ID
     */
    public $SecurityGroupIds;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var integer 数据卷大小(GB)
     */
    public $VolumeSizeInGB;

    /**
     * @var array Notebook标签
     */
    public $Tags;
    /**
     * @param string $NotebookInstanceName Notebook实例名称
     * @param string $InstanceType Notebook算力类型
     * @param string $RoleArn 角色的资源描述
     * @param string $DirectInternetAccess 外网访问权限，可取值Enabled/Disabled
     * @param string $RootAccess Root用户权限，可取值Enabled/Disabled
     * @param array $SecurityGroupIds 安全组ID
     * @param string $SubnetId 子网ID
     * @param integer $VolumeSizeInGB 数据卷大小(GB)
     * @param array $Tags Notebook标签
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
