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
 * ListWorkspaces请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间ID精确匹配</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID精确匹配</p>
 * @method string getWorkspaceKeyword() 获取<p>工作空间名称模糊匹配</p>
 * @method void setWorkspaceKeyword(string $WorkspaceKeyword) 设置<p>工作空间名称模糊匹配</p>
 * @method array getStatusList() 获取<p>工作空间状态过滤（多选）：0=未指定 1=创建中 2=创建失败 3=正常运行中 4=已删除</p>
 * @method void setStatusList(array $StatusList) 设置<p>工作空间状态过滤（多选）：0=未指定 1=创建中 2=创建失败 3=正常运行中 4=已删除</p>
 * @method array getOrderBys() 获取<p>多字段排序，如 [{Name: 'CreateTime', Direction: 'Desc'}]；传入单个即单字段排序，默认按创建时间降序</p>
 * @method void setOrderBys(array $OrderBys) 设置<p>多字段排序，如 [{Name: 'CreateTime', Direction: 'Desc'}]；传入单个即单字段排序，默认按创建时间降序</p>
 * @method integer getPageNumber() 获取<p>页码，从1开始，默认1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，从1开始，默认1</p>
 * @method integer getPageSize() 获取<p>每页大小，默认10，最小10，最大100</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页大小，默认10，最小10，最大100</p>
 * @method array getWorkspaceRegion() 获取<p>工作空间地域过滤（多选），如 ap-guangzhou</p>
 * @method void setWorkspaceRegion(array $WorkspaceRegion) 设置<p>工作空间地域过滤（多选），如 ap-guangzhou</p>
 * @method array getCreator() 获取<p>创建者UIN过滤（多选）</p>
 * @method void setCreator(array $Creator) 设置<p>创建者UIN过滤（多选）</p>
 */
class ListWorkspacesRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间ID精确匹配</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>工作空间名称模糊匹配</p>
     */
    public $WorkspaceKeyword;

    /**
     * @var array <p>工作空间状态过滤（多选）：0=未指定 1=创建中 2=创建失败 3=正常运行中 4=已删除</p>
     */
    public $StatusList;

    /**
     * @var array <p>多字段排序，如 [{Name: 'CreateTime', Direction: 'Desc'}]；传入单个即单字段排序，默认按创建时间降序</p>
     */
    public $OrderBys;

    /**
     * @var integer <p>页码，从1开始，默认1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页大小，默认10，最小10，最大100</p>
     */
    public $PageSize;

    /**
     * @var array <p>工作空间地域过滤（多选），如 ap-guangzhou</p>
     */
    public $WorkspaceRegion;

    /**
     * @var array <p>创建者UIN过滤（多选）</p>
     */
    public $Creator;

    /**
     * @param string $WorkspaceId <p>工作空间ID精确匹配</p>
     * @param string $WorkspaceKeyword <p>工作空间名称模糊匹配</p>
     * @param array $StatusList <p>工作空间状态过滤（多选）：0=未指定 1=创建中 2=创建失败 3=正常运行中 4=已删除</p>
     * @param array $OrderBys <p>多字段排序，如 [{Name: 'CreateTime', Direction: 'Desc'}]；传入单个即单字段排序，默认按创建时间降序</p>
     * @param integer $PageNumber <p>页码，从1开始，默认1</p>
     * @param integer $PageSize <p>每页大小，默认10，最小10，最大100</p>
     * @param array $WorkspaceRegion <p>工作空间地域过滤（多选），如 ap-guangzhou</p>
     * @param array $Creator <p>创建者UIN过滤（多选）</p>
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

        if (array_key_exists("WorkspaceKeyword",$param) and $param["WorkspaceKeyword"] !== null) {
            $this->WorkspaceKeyword = $param["WorkspaceKeyword"];
        }

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }

        if (array_key_exists("OrderBys",$param) and $param["OrderBys"] !== null) {
            $this->OrderBys = [];
            foreach ($param["OrderBys"] as $key => $value){
                $obj = new OrderBy();
                $obj->deserialize($value);
                array_push($this->OrderBys, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("WorkspaceRegion",$param) and $param["WorkspaceRegion"] !== null) {
            $this->WorkspaceRegion = $param["WorkspaceRegion"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }
    }
}
