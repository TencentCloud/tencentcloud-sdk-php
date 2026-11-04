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
 * DescribeWorkspace返回参数结构体
 *
 * @method string getTiProjectId() 获取<p>项目ID</p>
 * @method void setTiProjectId(string $TiProjectId) 设置<p>项目ID</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method array getRunningTasks() 获取<p>运行中的任务信息</p>
 * @method void setRunningTasks(array $RunningTasks) 设置<p>运行中的任务信息</p>
 * @method UserBriefInfo getCreator() 获取<p>空间创建人信息</p>
 * @method void setCreator(UserBriefInfo $Creator) 设置<p>空间创建人信息</p>
 * @method array getOwnedRoles() 获取<p>当前空间拥有的角色信息</p>
 * @method void setOwnedRoles(array $OwnedRoles) 设置<p>当前空间拥有的角色信息</p>
 * @method MemberInfo getMemberInfo() 获取<p>空间成员信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberInfo(MemberInfo $MemberInfo) 设置<p>空间成员信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeWorkspaceResponse extends AbstractModel
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
     * @var array <p>运行中的任务信息</p>
     */
    public $RunningTasks;

    /**
     * @var UserBriefInfo <p>空间创建人信息</p>
     */
    public $Creator;

    /**
     * @var array <p>当前空间拥有的角色信息</p>
     */
    public $OwnedRoles;

    /**
     * @var MemberInfo <p>空间成员信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TiProjectId <p>项目ID</p>
     * @param string $Name <p>名称</p>
     * @param string $Description <p>描述</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param array $RunningTasks <p>运行中的任务信息</p>
     * @param UserBriefInfo $Creator <p>空间创建人信息</p>
     * @param array $OwnedRoles <p>当前空间拥有的角色信息</p>
     * @param MemberInfo $MemberInfo <p>空间成员信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("RunningTasks",$param) and $param["RunningTasks"] !== null) {
            $this->RunningTasks = [];
            foreach ($param["RunningTasks"] as $key => $value){
                $obj = new WorkspaceTaskInfo();
                $obj->deserialize($value);
                array_push($this->RunningTasks, $obj);
            }
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = new UserBriefInfo();
            $this->Creator->deserialize($param["Creator"]);
        }

        if (array_key_exists("OwnedRoles",$param) and $param["OwnedRoles"] !== null) {
            $this->OwnedRoles = [];
            foreach ($param["OwnedRoles"] as $key => $value){
                $obj = new RoleBriefInfo();
                $obj->deserialize($value);
                array_push($this->OwnedRoles, $obj);
            }
        }

        if (array_key_exists("MemberInfo",$param) and $param["MemberInfo"] !== null) {
            $this->MemberInfo = new MemberInfo();
            $this->MemberInfo->deserialize($param["MemberInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
