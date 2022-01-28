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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKTVTopList请求参数结构体
 *
 * @method string getType() 获取榜单类型。默认Hot
<li> Hot, 热歌榜。</li>
 * @method void setType(string $Type) 设置榜单类型。默认Hot
<li> Hot, 热歌榜。</li>
 * @method string getPeriod() 获取榜单周期 默认为Week
<li> Week, 周榜。</li>
<li> Month, 月榜。</li>
 * @method void setPeriod(string $Period) 设置榜单周期 默认为Week
<li> Week, 周榜。</li>
<li> Month, 月榜。</li>
 */
class DescribeKTVTopListRequest extends AbstractModel
{
    /**
     * @var string 榜单类型。默认Hot
<li> Hot, 热歌榜。</li>
     */
    public $Type;

    /**
     * @var string 榜单周期 默认为Week
<li> Week, 周榜。</li>
<li> Month, 月榜。</li>
     */
    public $Period;

    /**
     * @param string $Type 榜单类型。默认Hot
<li> Hot, 热歌榜。</li>
     * @param string $Period 榜单周期 默认为Week
<li> Week, 周榜。</li>
<li> Month, 月榜。</li>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
