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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDutyScheduleList请求参数结构体
 *
 * @method integer getPageNumber() 获取页码，默认1
 * @method void setPageNumber(integer $PageNumber) 设置页码，默认1
 * @method integer getPageSize() 获取页大小，默认10
 * @method void setPageSize(integer $PageSize) 设置页大小，默认10
 * @method string getName() 获取值班表名称
 * @method void setName(string $Name) 设置值班表名称
 */
class DescribeDutyScheduleListRequest extends AbstractModel
{
    /**
     * @var integer 页码，默认1
     */
    public $PageNumber;

    /**
     * @var integer 页大小，默认10
     */
    public $PageSize;

    /**
     * @var string 值班表名称
     */
    public $Name;

    /**
     * @param integer $PageNumber 页码，默认1
     * @param integer $PageSize 页大小，默认10
     * @param string $Name 值班表名称
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
