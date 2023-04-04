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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjectList请求参数结构体
 *
 * @method integer getPageSize() 获取每页返回的最大项目数量，不填默认为10
 * @method void setPageSize(integer $PageSize) 设置每页返回的最大项目数量，不填默认为10
 * @method integer getPageNumber() 获取当前页码，不填默认为1（首页）
 * @method void setPageNumber(integer $PageNumber) 设置当前页码，不填默认为1（首页）
 */
class DescribeProjectListRequest extends AbstractModel
{
    /**
     * @var integer 每页返回的最大项目数量，不填默认为10
     */
    public $PageSize;

    /**
     * @var integer 当前页码，不填默认为1（首页）
     */
    public $PageNumber;

    /**
     * @param integer $PageSize 每页返回的最大项目数量，不填默认为10
     * @param integer $PageNumber 当前页码，不填默认为1（首页）
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
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
