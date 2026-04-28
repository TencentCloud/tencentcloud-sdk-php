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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作空间
 *
 * @method string getTiProjectId() 获取<p>项目ID</p>
 * @method void setTiProjectId(string $TiProjectId) 设置<p>项目ID</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method array getResourceGroups() 获取<p>绑定的资源组信息</p>
 * @method void setResourceGroups(array $ResourceGroups) 设置<p>绑定的资源组信息</p>
 * @method array getActionType() 获取<p>当前用户对此空间拥有的权限</p>
 * @method void setActionType(array $ActionType) 设置<p>当前用户对此空间拥有的权限</p>
 * @method string getStatus() 获取<p>工作空间状态</p>
 * @method void setStatus(string $Status) 设置<p>工作空间状态</p>
 */
class Workspace extends AbstractModel
{
    /**
     * @var string <p>项目ID</p>
     */
    public $TiProjectId;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var array <p>绑定的资源组信息</p>
     */
    public $ResourceGroups;

    /**
     * @var array <p>当前用户对此空间拥有的权限</p>
     */
    public $ActionType;

    /**
     * @var string <p>工作空间状态</p>
     */
    public $Status;

    /**
     * @param string $TiProjectId <p>项目ID</p>
     * @param string $Name <p>名称</p>
     * @param string $Description <p>描述</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param array $ResourceGroups <p>绑定的资源组信息</p>
     * @param array $ActionType <p>当前用户对此空间拥有的权限</p>
     * @param string $Status <p>工作空间状态</p>
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
        if (array_key_exists("TiProjectId",$param) and $param["TiProjectId"] !== null) {
            $this->TiProjectId = $param["TiProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ResourceGroups",$param) and $param["ResourceGroups"] !== null) {
            $this->ResourceGroups = [];
            foreach ($param["ResourceGroups"] as $key => $value){
                $obj = new ResourceGroupInWorkspace();
                $obj->deserialize($value);
                array_push($this->ResourceGroups, $obj);
            }
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
