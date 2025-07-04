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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjects请求参数结构体
 *
 * @method integer getAllList() 获取传1拉取所有项目（包括隐藏项目），传0拉取显示项目
 * @method void setAllList(integer $AllList) 设置传1拉取所有项目（包括隐藏项目），传0拉取显示项目
 * @method integer getLimit() 获取分页条数，固定值1000。
 * @method void setLimit(integer $Limit) 设置分页条数，固定值1000。
 * @method integer getOffset() 获取分页偏移量。
 * @method void setOffset(integer $Offset) 设置分页偏移量。
 * @method integer getProjectId() 获取按项目ID筛选，大于0
 * @method void setProjectId(integer $ProjectId) 设置按项目ID筛选，大于0
 * @method string getProjectName() 获取按项目名称筛选
 * @method void setProjectName(string $ProjectName) 设置按项目名称筛选
 */
class DescribeProjectsRequest extends AbstractModel
{
    /**
     * @var integer 传1拉取所有项目（包括隐藏项目），传0拉取显示项目
     */
    public $AllList;

    /**
     * @var integer 分页条数，固定值1000。
     */
    public $Limit;

    /**
     * @var integer 分页偏移量。
     */
    public $Offset;

    /**
     * @var integer 按项目ID筛选，大于0
     */
    public $ProjectId;

    /**
     * @var string 按项目名称筛选
     */
    public $ProjectName;

    /**
     * @param integer $AllList 传1拉取所有项目（包括隐藏项目），传0拉取显示项目
     * @param integer $Limit 分页条数，固定值1000。
     * @param integer $Offset 分页偏移量。
     * @param integer $ProjectId 按项目ID筛选，大于0
     * @param string $ProjectName 按项目名称筛选
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
        if (array_key_exists("AllList",$param) and $param["AllList"] !== null) {
            $this->AllList = $param["AllList"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }
    }
}
