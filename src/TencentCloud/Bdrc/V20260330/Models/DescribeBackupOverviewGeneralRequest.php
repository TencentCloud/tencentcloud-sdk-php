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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupOverviewGeneral请求参数结构体
 *
 * @method boolean getAllRegions() 获取<p>是否查询全部地域。false-仅当前地域（默认），true-全部地域汇总</p>
 * @method void setAllRegions(boolean $AllRegions) 设置<p>是否查询全部地域。false-仅当前地域（默认），true-全部地域汇总</p>
 */
class DescribeBackupOverviewGeneralRequest extends AbstractModel
{
    /**
     * @var boolean <p>是否查询全部地域。false-仅当前地域（默认），true-全部地域汇总</p>
     */
    public $AllRegions;

    /**
     * @param boolean $AllRegions <p>是否查询全部地域。false-仅当前地域（默认），true-全部地域汇总</p>
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
        if (array_key_exists("AllRegions",$param) and $param["AllRegions"] !== null) {
            $this->AllRegions = $param["AllRegions"];
        }
    }
}
