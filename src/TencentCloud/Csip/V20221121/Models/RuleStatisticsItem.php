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
 * 规则统计信息
 *
 * @method string getText() 获取<p>名称</p>
 * @method void setText(string $Text) 设置<p>名称</p>
 * @method string getValue() 获取<p>值</p>
 * @method void setValue(string $Value) 设置<p>值</p>
 * @method string getCount() 获取<p>统计信息</p>
 * @method void setCount(string $Count) 设置<p>统计信息</p>
 */
class RuleStatisticsItem extends AbstractModel
{
    /**
     * @var string <p>名称</p>
     */
    public $Text;

    /**
     * @var string <p>值</p>
     */
    public $Value;

    /**
     * @var string <p>统计信息</p>
     */
    public $Count;

    /**
     * @param string $Text <p>名称</p>
     * @param string $Value <p>值</p>
     * @param string $Count <p>统计信息</p>
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
