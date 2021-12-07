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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 后付费详情
 *
 * @method string getPayTime() 获取扣费时间
 * @method void setPayTime(string $PayTime) 设置扣费时间
 * @method integer getCoresCnt() 获取计费核数
 * @method void setCoresCnt(integer $CoresCnt) 设置计费核数
 */
class SoftQuotaDayInfo extends AbstractModel
{
    /**
     * @var string 扣费时间
     */
    public $PayTime;

    /**
     * @var integer 计费核数
     */
    public $CoresCnt;

    /**
     * @param string $PayTime 扣费时间
     * @param integer $CoresCnt 计费核数
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
        if (array_key_exists("PayTime",$param) and $param["PayTime"] !== null) {
            $this->PayTime = $param["PayTime"];
        }

        if (array_key_exists("CoresCnt",$param) and $param["CoresCnt"] !== null) {
            $this->CoresCnt = $param["CoresCnt"];
        }
    }
}
