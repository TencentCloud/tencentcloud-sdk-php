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
 * ListWorkspaceGroupUsers请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间id</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间id</p>
 * @method string getGroupId() 获取<p>用户组ID，可通过 ListWorkspaceGroups 接口获取</p>
 * @method void setGroupId(string $GroupId) 设置<p>用户组ID，可通过 ListWorkspaceGroups 接口获取</p>
 * @method string getNameKeywords() 获取<p>关键字，支持按用户名模糊搜索</p>
 * @method void setNameKeywords(string $NameKeywords) 设置<p>关键字，支持按用户名模糊搜索</p>
 * @method array getUserUins() 获取<p>用户UIN列表，按UIN精确筛选</p>
 * @method void setUserUins(array $UserUins) 设置<p>用户UIN列表，按UIN精确筛选</p>
 * @method array getOrderBys() 获取<p>&quot;OrderBys&quot;: [{&quot;Name&quot;: &quot;CreateTime&quot;, &quot;Direction&quot;: &quot;DESC&quot; }]</p>
 * @method void setOrderBys(array $OrderBys) 设置<p>&quot;OrderBys&quot;: [{&quot;Name&quot;: &quot;CreateTime&quot;, &quot;Direction&quot;: &quot;DESC&quot; }]</p>
 * @method integer getPageNumber() 获取<p>页码，从1开始，默认1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，从1开始，默认1</p>
 * @method integer getPageSize() 获取<p>每页大小</p><p>取值范围：[1, 100]</p><p>默认值：10</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页大小</p><p>取值范围：[1, 100]</p><p>默认值：10</p>
 */
class ListWorkspaceGroupUsersRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间id</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>用户组ID，可通过 ListWorkspaceGroups 接口获取</p>
     */
    public $GroupId;

    /**
     * @var string <p>关键字，支持按用户名模糊搜索</p>
     */
    public $NameKeywords;

    /**
     * @var array <p>用户UIN列表，按UIN精确筛选</p>
     */
    public $UserUins;

    /**
     * @var array <p>&quot;OrderBys&quot;: [{&quot;Name&quot;: &quot;CreateTime&quot;, &quot;Direction&quot;: &quot;DESC&quot; }]</p>
     */
    public $OrderBys;

    /**
     * @var integer <p>页码，从1开始，默认1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页大小</p><p>取值范围：[1, 100]</p><p>默认值：10</p>
     */
    public $PageSize;

    /**
     * @param string $WorkspaceId <p>工作空间id</p>
     * @param string $GroupId <p>用户组ID，可通过 ListWorkspaceGroups 接口获取</p>
     * @param string $NameKeywords <p>关键字，支持按用户名模糊搜索</p>
     * @param array $UserUins <p>用户UIN列表，按UIN精确筛选</p>
     * @param array $OrderBys <p>&quot;OrderBys&quot;: [{&quot;Name&quot;: &quot;CreateTime&quot;, &quot;Direction&quot;: &quot;DESC&quot; }]</p>
     * @param integer $PageNumber <p>页码，从1开始，默认1</p>
     * @param integer $PageSize <p>每页大小</p><p>取值范围：[1, 100]</p><p>默认值：10</p>
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("NameKeywords",$param) and $param["NameKeywords"] !== null) {
            $this->NameKeywords = $param["NameKeywords"];
        }

        if (array_key_exists("UserUins",$param) and $param["UserUins"] !== null) {
            $this->UserUins = $param["UserUins"];
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
    }
}
