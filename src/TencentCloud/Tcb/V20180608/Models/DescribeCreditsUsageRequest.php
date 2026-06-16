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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCreditsUsage请求参数结构体
 *
 * @method string getStartDate() 获取<p>开始日期</p>
 * @method void setStartDate(string $StartDate) 设置<p>开始日期</p>
 * @method string getEndDate() 获取<p>结束日期</p>
 * @method void setEndDate(string $EndDate) 设置<p>结束日期</p>
 * @method string getEnvId() 获取<p>环境id</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境id</p>
 */
class DescribeCreditsUsageRequest extends AbstractModel
{
    /**
     * @var string <p>开始日期</p>
     */
    public $StartDate;

    /**
     * @var string <p>结束日期</p>
     */
    public $EndDate;

    /**
     * @var string <p>环境id</p>
     */
    public $EnvId;

    /**
     * @param string $StartDate <p>开始日期</p>
     * @param string $EndDate <p>结束日期</p>
     * @param string $EnvId <p>环境id</p>
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

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }
    }
}
