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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFlowDetailList请求参数结构体
 *
 * @method string getPartitionCode() 获取分区编码
 * @method void setPartitionCode(string $PartitionCode) 设置分区编码
 * @method integer getPage() 获取页码，从1开始，默认为1
 * @method void setPage(integer $Page) 设置页码，从1开始，默认为1
 * @method integer getPageSize() 获取每页返回数量，默认为10
 * @method void setPageSize(integer $PageSize) 设置每页返回数量，默认为10
 */
class DescribeFlowDetailListRequest extends AbstractModel
{
    /**
     * @var string 分区编码
     */
    public $PartitionCode;

    /**
     * @var integer 页码，从1开始，默认为1
     */
    public $Page;

    /**
     * @var integer 每页返回数量，默认为10
     */
    public $PageSize;

    /**
     * @param string $PartitionCode 分区编码
     * @param integer $Page 页码，从1开始，默认为1
     * @param integer $PageSize 每页返回数量，默认为10
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
        if (array_key_exists("PartitionCode",$param) and $param["PartitionCode"] !== null) {
            $this->PartitionCode = $param["PartitionCode"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
