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
namespace TencentCloud\Iotvideo\V20211125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMessageDataStats请求参数结构体
 *
 * @method string getStartDate() 获取统计开始日期
 * @method void setStartDate(string $StartDate) 设置统计开始日期
 * @method string getEndDate() 获取统计结束日期
 * @method void setEndDate(string $EndDate) 设置统计结束日期
 * @method string getProductId() 获取产品id
 * @method void setProductId(string $ProductId) 设置产品id
 */
class DescribeMessageDataStatsRequest extends AbstractModel
{
    /**
     * @var string 统计开始日期
     */
    public $StartDate;

    /**
     * @var string 统计结束日期
     */
    public $EndDate;

    /**
     * @var string 产品id
     */
    public $ProductId;

    /**
     * @param string $StartDate 统计开始日期
     * @param string $EndDate 统计结束日期
     * @param string $ProductId 产品id
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
        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }
    }
}
