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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络攻击top统计数据
 *
 * @method string getValue() 获取top统计数据，如ip、漏洞名等
 * @method void setValue(string $Value) 设置top统计数据，如ip、漏洞名等
 * @method integer getCount() 获取top统计计数
 * @method void setCount(integer $Count) 设置top统计计数
 */
class TopInfo extends AbstractModel
{
    /**
     * @var string top统计数据，如ip、漏洞名等
     */
    public $Value;

    /**
     * @var integer top统计计数
     */
    public $Count;

    /**
     * @param string $Value top统计数据，如ip、漏洞名等
     * @param integer $Count top统计计数
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
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
