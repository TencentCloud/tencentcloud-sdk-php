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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulLevelCount请求参数结构体
 *
 * @method integer getVulCategory() 获取1:web-cms 漏洞，2.应用漏洞 3:安全基线 4: Linux软件漏洞 5: windows系统漏洞 6:应急漏洞，不填或者填0时返回 1，2，4，5 的总统计数据
 * @method void setVulCategory(integer $VulCategory) 设置1:web-cms 漏洞，2.应用漏洞 3:安全基线 4: Linux软件漏洞 5: windows系统漏洞 6:应急漏洞，不填或者填0时返回 1，2，4，5 的总统计数据
 * @method integer getIsFollowVul() 获取是否仅统计重点关注漏洞 1=仅统计重点关注漏洞, 0=统计全部漏洞
 * @method void setIsFollowVul(integer $IsFollowVul) 设置是否仅统计重点关注漏洞 1=仅统计重点关注漏洞, 0=统计全部漏洞
 */
class DescribeVulLevelCountRequest extends AbstractModel
{
    /**
     * @var integer 1:web-cms 漏洞，2.应用漏洞 3:安全基线 4: Linux软件漏洞 5: windows系统漏洞 6:应急漏洞，不填或者填0时返回 1，2，4，5 的总统计数据
     */
    public $VulCategory;

    /**
     * @var integer 是否仅统计重点关注漏洞 1=仅统计重点关注漏洞, 0=统计全部漏洞
     */
    public $IsFollowVul;

    /**
     * @param integer $VulCategory 1:web-cms 漏洞，2.应用漏洞 3:安全基线 4: Linux软件漏洞 5: windows系统漏洞 6:应急漏洞，不填或者填0时返回 1，2，4，5 的总统计数据
     * @param integer $IsFollowVul 是否仅统计重点关注漏洞 1=仅统计重点关注漏洞, 0=统计全部漏洞
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
        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("IsFollowVul",$param) and $param["IsFollowVul"] !== null) {
            $this->IsFollowVul = $param["IsFollowVul"];
        }
    }
}
