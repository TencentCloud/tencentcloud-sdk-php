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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentSummaryList请求参数结构体
 *
 * @method integer getScope() 获取<p>查询范围；0-单应用查询；1-跨应用查询</p>
 * @method void setScope(integer $Scope) 设置<p>查询范围；0-单应用查询；1-跨应用查询</p>
 * @method string getAppId() 获取<p>应用Id，Scope=0 时为目标应用ID（必填）；scope=1 时无需填写</p>
 * @method void setAppId(string $AppId) 设置<p>应用Id，Scope=0 时为目标应用ID（必填）；scope=1 时无需填写</p>
 * @method array getFilterList() 获取<p>过滤条件（name: "SearchWord", "SpaceId", "AgentSource", "AppId"）</p>
 * @method void setFilterList(array $FilterList) 设置<p>过滤条件（name: "SearchWord", "SpaceId", "AgentSource", "AppId"）</p>
 * @method integer getPageSize() 获取<p>每页数目</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数目</p>
 * @method integer getPageNumber() 获取<p>页码</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码</p>
 */
class DescribeAgentSummaryListRequest extends AbstractModel
{
    /**
     * @var integer <p>查询范围；0-单应用查询；1-跨应用查询</p>
     */
    public $Scope;

    /**
     * @var string <p>应用Id，Scope=0 时为目标应用ID（必填）；scope=1 时无需填写</p>
     */
    public $AppId;

    /**
     * @var array <p>过滤条件（name: "SearchWord", "SpaceId", "AgentSource", "AppId"）</p>
     */
    public $FilterList;

    /**
     * @var integer <p>每页数目</p>
     */
    public $PageSize;

    /**
     * @var integer <p>页码</p>
     */
    public $PageNumber;

    /**
     * @param integer $Scope <p>查询范围；0-单应用查询；1-跨应用查询</p>
     * @param string $AppId <p>应用Id，Scope=0 时为目标应用ID（必填）；scope=1 时无需填写</p>
     * @param array $FilterList <p>过滤条件（name: "SearchWord", "SpaceId", "AgentSource", "AppId"）</p>
     * @param integer $PageSize <p>每页数目</p>
     * @param integer $PageNumber <p>页码</p>
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
        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
