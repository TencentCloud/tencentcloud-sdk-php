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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMandatoryVulSet请求参数结构体
 *
 * @method integer getYear() 获取漏洞披露所属年份
 * @method void setYear(integer $Year) 设置漏洞披露所属年份
 * @method integer getMonth() 获取漏洞披露所属月份
 * @method void setMonth(integer $Month) 设置漏洞披露所属月份
 */
class DescribeMandatoryVulSetRequest extends AbstractModel
{
    /**
     * @var integer 漏洞披露所属年份
     */
    public $Year;

    /**
     * @var integer 漏洞披露所属月份
     */
    public $Month;

    /**
     * @param integer $Year 漏洞披露所属年份
     * @param integer $Month 漏洞披露所属月份
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
        if (array_key_exists("Year",$param) and $param["Year"] !== null) {
            $this->Year = $param["Year"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }
    }
}
