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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListWorkspaceRoles请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间ID</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID</p>
 * @method string getNameKeyword() 获取<p>关键字，支持按角色名称模糊搜索</p>
 * @method void setNameKeyword(string $NameKeyword) 设置<p>关键字，支持按角色名称模糊搜索</p>
 * @method integer getPageNumber() 获取<p>页码，从1开始，默认1</p><p>默认值：1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，从1开始，默认1</p><p>默认值：1</p>
 * @method integer getPageSize() 获取<p>每页大小，默认10，取值范围为 [1,100]，越界时自动收敛到边界值</p><p>默认值：10</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页大小，默认10，取值范围为 [1,100]，越界时自动收敛到边界值</p><p>默认值：10</p>
 */
class ListWorkspaceRolesRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间ID</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>关键字，支持按角色名称模糊搜索</p>
     */
    public $NameKeyword;

    /**
     * @var integer <p>页码，从1开始，默认1</p><p>默认值：1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页大小，默认10，取值范围为 [1,100]，越界时自动收敛到边界值</p><p>默认值：10</p>
     */
    public $PageSize;

    /**
     * @param string $WorkspaceId <p>工作空间ID</p>
     * @param string $NameKeyword <p>关键字，支持按角色名称模糊搜索</p>
     * @param integer $PageNumber <p>页码，从1开始，默认1</p><p>默认值：1</p>
     * @param integer $PageSize <p>每页大小，默认10，取值范围为 [1,100]，越界时自动收敛到边界值</p><p>默认值：10</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("NameKeyword",$param) and $param["NameKeyword"] !== null) {
            $this->NameKeyword = $param["NameKeyword"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
