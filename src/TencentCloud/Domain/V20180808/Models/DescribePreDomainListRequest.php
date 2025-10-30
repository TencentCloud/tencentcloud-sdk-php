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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePreDomainList请求参数结构体
 *
 * @method integer getPage() 获取页码，默认为1
 * @method void setPage(integer $Page) 设置页码，默认为1
 * @method integer getSize() 获取条数，默认为20
 * @method void setSize(integer $Size) 设置条数，默认为20
 * @method string getEndTime() 获取用于结束时间筛选
 * @method void setEndTime(string $EndTime) 设置用于结束时间筛选
 * @method string getUpTime() 获取用户指定上架时间筛选
 * @method void setUpTime(string $UpTime) 设置用户指定上架时间筛选
 */
class DescribePreDomainListRequest extends AbstractModel
{
    /**
     * @var integer 页码，默认为1
     */
    public $Page;

    /**
     * @var integer 条数，默认为20
     */
    public $Size;

    /**
     * @var string 用于结束时间筛选
     */
    public $EndTime;

    /**
     * @var string 用户指定上架时间筛选
     */
    public $UpTime;

    /**
     * @param integer $Page 页码，默认为1
     * @param integer $Size 条数，默认为20
     * @param string $EndTime 用于结束时间筛选
     * @param string $UpTime 用户指定上架时间筛选
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
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("UpTime",$param) and $param["UpTime"] !== null) {
            $this->UpTime = $param["UpTime"];
        }
    }
}
