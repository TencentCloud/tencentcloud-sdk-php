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
 * DescribeAgentReleasePreviewList请求参数结构体
 *
 * @method string getAppId() 获取<p>应用Id</p>
 * @method void setAppId(string $AppId) 设置<p>应用Id</p>
 * @method integer getPageNumber() 获取<p>页码</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码</p>
 * @method integer getPageSize() 获取<p>每页数量在1到200之间</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量在1到200之间</p>
 * @method string getQuery() 获取<p>查询关键字, 用于模糊匹配标题</p>
 * @method void setQuery(string $Query) 设置<p>查询关键字, 用于模糊匹配标题</p>
 * @method array getFilterList() 获取<p>过滤条件</p><p>入参限制：支持 StartTime、EndTime、ActionList、ReleaseStatusList</p>
 * @method void setFilterList(array $FilterList) 设置<p>过滤条件</p><p>入参限制：支持 StartTime、EndTime、ActionList、ReleaseStatusList</p>
 */
class DescribeAgentReleasePreviewListRequest extends AbstractModel
{
    /**
     * @var string <p>应用Id</p>
     */
    public $AppId;

    /**
     * @var integer <p>页码</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页数量在1到200之间</p>
     */
    public $PageSize;

    /**
     * @var string <p>查询关键字, 用于模糊匹配标题</p>
     */
    public $Query;

    /**
     * @var array <p>过滤条件</p><p>入参限制：支持 StartTime、EndTime、ActionList、ReleaseStatusList</p>
     */
    public $FilterList;

    /**
     * @param string $AppId <p>应用Id</p>
     * @param integer $PageNumber <p>页码</p>
     * @param integer $PageSize <p>每页数量在1到200之间</p>
     * @param string $Query <p>查询关键字, 用于模糊匹配标题</p>
     * @param array $FilterList <p>过滤条件</p><p>入参限制：支持 StartTime、EndTime、ActionList、ReleaseStatusList</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }
    }
}
