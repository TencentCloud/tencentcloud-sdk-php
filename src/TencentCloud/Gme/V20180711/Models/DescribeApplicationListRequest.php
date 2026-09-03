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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationList请求参数结构体
 *
 * @method integer getProjectId() 获取<p>项目ID，0表示默认项目，-1表示所有项目，如果需要查找具体项目下的应用列表，请填入具体项目ID，项目ID在项目管理中查看 https://console.cloud.tencent.com/project</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID，0表示默认项目，-1表示所有项目，如果需要查找具体项目下的应用列表，请填入具体项目ID，项目ID在项目管理中查看 https://console.cloud.tencent.com/project</p>
 * @method integer getPageNo() 获取<p>页码ID，0表示第一页，以此后推。默认填0</p>
 * @method void setPageNo(integer $PageNo) 设置<p>页码ID，0表示第一页，以此后推。默认填0</p>
 * @method integer getPageSize() 获取<p>每页展示应用数量。默认填200</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页展示应用数量。默认填200</p>
 * @method string getSearchText() 获取<p>所查找应用名称的关键字，支持模糊匹配查找。空串表示查询所有应用</p>
 * @method void setSearchText(string $SearchText) 设置<p>所查找应用名称的关键字，支持模糊匹配查找。空串表示查询所有应用</p>
 * @method array getTagSet() 获取<p>标签列表</p>
 * @method void setTagSet(array $TagSet) 设置<p>标签列表</p>
 * @method array getFilters() 获取<p>查找过滤关键字列表</p>
 * @method void setFilters(array $Filters) 设置<p>查找过滤关键字列表</p>
 * @method integer getNewVersion() 获取<p>是否查询GME3.0应用</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
 * @method void setNewVersion(integer $NewVersion) 设置<p>是否查询GME3.0应用</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
 */
class DescribeApplicationListRequest extends AbstractModel
{
    /**
     * @var integer <p>项目ID，0表示默认项目，-1表示所有项目，如果需要查找具体项目下的应用列表，请填入具体项目ID，项目ID在项目管理中查看 https://console.cloud.tencent.com/project</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>页码ID，0表示第一页，以此后推。默认填0</p>
     */
    public $PageNo;

    /**
     * @var integer <p>每页展示应用数量。默认填200</p>
     */
    public $PageSize;

    /**
     * @var string <p>所查找应用名称的关键字，支持模糊匹配查找。空串表示查询所有应用</p>
     */
    public $SearchText;

    /**
     * @var array <p>标签列表</p>
     */
    public $TagSet;

    /**
     * @var array <p>查找过滤关键字列表</p>
     */
    public $Filters;

    /**
     * @var integer <p>是否查询GME3.0应用</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
     */
    public $NewVersion;

    /**
     * @param integer $ProjectId <p>项目ID，0表示默认项目，-1表示所有项目，如果需要查找具体项目下的应用列表，请填入具体项目ID，项目ID在项目管理中查看 https://console.cloud.tencent.com/project</p>
     * @param integer $PageNo <p>页码ID，0表示第一页，以此后推。默认填0</p>
     * @param integer $PageSize <p>每页展示应用数量。默认填200</p>
     * @param string $SearchText <p>所查找应用名称的关键字，支持模糊匹配查找。空串表示查询所有应用</p>
     * @param array $TagSet <p>标签列表</p>
     * @param array $Filters <p>查找过滤关键字列表</p>
     * @param integer $NewVersion <p>是否查询GME3.0应用</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
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

        if (array_key_exists("NewVersion",$param) and $param["NewVersion"] !== null) {
            $this->NewVersion = $param["NewVersion"];
        }
    }
}
