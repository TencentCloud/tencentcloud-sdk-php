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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationList请求参数结构体
 *
 * @method integer getProjectId() 获取项目ID，0表示默认项目，-1表示所有项目，如果需要查找具体项目下的应用列表，请填入具体项目ID，项目ID在项目管理中查看 https://console.cloud.tencent.com/project
 * @method void setProjectId(integer $ProjectId) 设置项目ID，0表示默认项目，-1表示所有项目，如果需要查找具体项目下的应用列表，请填入具体项目ID，项目ID在项目管理中查看 https://console.cloud.tencent.com/project
 * @method integer getPageNo() 获取页码ID，0表示第一页，以此后推。默认填0
 * @method void setPageNo(integer $PageNo) 设置页码ID，0表示第一页，以此后推。默认填0
 * @method integer getPageSize() 获取每页展示应用数量。默认填200
 * @method void setPageSize(integer $PageSize) 设置每页展示应用数量。默认填200
 * @method string getSearchText() 获取所查找应用名称的关键字，支持模糊匹配查找。空串表示查询所有应用
 * @method void setSearchText(string $SearchText) 设置所查找应用名称的关键字，支持模糊匹配查找。空串表示查询所有应用
 * @method array getTagSet() 获取标签列表
 * @method void setTagSet(array $TagSet) 设置标签列表
 * @method array getFilters() 获取查找过滤关键字列表
 * @method void setFilters(array $Filters) 设置查找过滤关键字列表
 */
class DescribeApplicationListRequest extends AbstractModel
{
    /**
     * @var integer 项目ID，0表示默认项目，-1表示所有项目，如果需要查找具体项目下的应用列表，请填入具体项目ID，项目ID在项目管理中查看 https://console.cloud.tencent.com/project
     */
    public $ProjectId;

    /**
     * @var integer 页码ID，0表示第一页，以此后推。默认填0
     */
    public $PageNo;

    /**
     * @var integer 每页展示应用数量。默认填200
     */
    public $PageSize;

    /**
     * @var string 所查找应用名称的关键字，支持模糊匹配查找。空串表示查询所有应用
     */
    public $SearchText;

    /**
     * @var array 标签列表
     */
    public $TagSet;

    /**
     * @var array 查找过滤关键字列表
     */
    public $Filters;

    /**
     * @param integer $ProjectId 项目ID，0表示默认项目，-1表示所有项目，如果需要查找具体项目下的应用列表，请填入具体项目ID，项目ID在项目管理中查看 https://console.cloud.tencent.com/project
     * @param integer $PageNo 页码ID，0表示第一页，以此后推。默认填0
     * @param integer $PageSize 每页展示应用数量。默认填200
     * @param string $SearchText 所查找应用名称的关键字，支持模糊匹配查找。空串表示查询所有应用
     * @param array $TagSet 标签列表
     * @param array $Filters 查找过滤关键字列表
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("SearchText",$param) and $param["SearchText"] !== null) {
            $this->SearchText = $param["SearchText"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
