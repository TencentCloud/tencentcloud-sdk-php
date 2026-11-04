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
 * DescribeWorkspace请求参数结构体
 *
 * @method string getTiProjectId() 获取<p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
 * @method void setTiProjectId(string $TiProjectId) 设置<p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
 * @method boolean getWithRunningTasks() 获取<p>是否包含运行中的任务</p>
 * @method void setWithRunningTasks(boolean $WithRunningTasks) 设置<p>是否包含运行中的任务</p>
 * @method boolean getWithMembers() 获取<p>是否包含有管理权限的人员信息</p>
 * @method void setWithMembers(boolean $WithMembers) 设置<p>是否包含有管理权限的人员信息</p>
 */
class DescribeWorkspaceRequest extends AbstractModel
{
    /**
     * @var string <p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
     */
    public $TiProjectId;

    /**
     * @var boolean <p>是否包含运行中的任务</p>
     */
    public $WithRunningTasks;

    /**
     * @var boolean <p>是否包含有管理权限的人员信息</p>
     */
    public $WithMembers;

    /**
     * @param string $TiProjectId <p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
     * @param boolean $WithRunningTasks <p>是否包含运行中的任务</p>
     * @param boolean $WithMembers <p>是否包含有管理权限的人员信息</p>
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

        if (array_key_exists("WithRunningTasks",$param) and $param["WithRunningTasks"] !== null) {
            $this->WithRunningTasks = $param["WithRunningTasks"];
        }

        if (array_key_exists("WithMembers",$param) and $param["WithMembers"] !== null) {
            $this->WithMembers = $param["WithMembers"];
        }
    }
}
