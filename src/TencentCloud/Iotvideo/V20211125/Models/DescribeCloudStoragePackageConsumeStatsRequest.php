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
 * DescribeCloudStoragePackageConsumeStats请求参数结构体
 *
 * @method string getStartDate() 获取开始日期
 * @method void setStartDate(string $StartDate) 设置开始日期
 * @method string getEndDate() 获取结束日期，开始与结束日期间隔不可超过一年
 * @method void setEndDate(string $EndDate) 设置结束日期，开始与结束日期间隔不可超过一年
 */
class DescribeCloudStoragePackageConsumeStatsRequest extends AbstractModel
{
    /**
     * @var string 开始日期
     */
    public $StartDate;

    /**
     * @var string 结束日期，开始与结束日期间隔不可超过一年
     */
    public $EndDate;

    /**
     * @param string $StartDate 开始日期
     * @param string $EndDate 结束日期，开始与结束日期间隔不可超过一年
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
    }
}
