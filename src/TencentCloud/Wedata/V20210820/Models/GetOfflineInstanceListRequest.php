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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetOfflineInstanceList请求参数结构体
 *
 * @method string getPageIndex() 获取第几页
 * @method void setPageIndex(string $PageIndex) 设置第几页
 * @method integer getPageSize() 获取每页几条
 * @method void setPageSize(integer $PageSize) 设置每页几条
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method SearchCondition getSearchCondition() 获取无
 * @method void setSearchCondition(SearchCondition $SearchCondition) 设置无
 */
class GetOfflineInstanceListRequest extends AbstractModel
{
    /**
     * @var string 第几页
     */
    public $PageIndex;

    /**
     * @var integer 每页几条
     */
    public $PageSize;

    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var SearchCondition 无
     */
    public $SearchCondition;

    /**
     * @param string $PageIndex 第几页
     * @param integer $PageSize 每页几条
     * @param string $ProjectId 项目Id
     * @param SearchCondition $SearchCondition 无
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
        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SearchCondition",$param) and $param["SearchCondition"] !== null) {
            $this->SearchCondition = new SearchCondition();
            $this->SearchCondition->deserialize($param["SearchCondition"]);
        }
    }
}
