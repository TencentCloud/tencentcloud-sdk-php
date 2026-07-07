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
 * dspm统计项
 *
 * @method string getName() 获取<p>统计项名称</p>
 * @method void setName(string $Name) 设置<p>统计项名称</p>
 * @method integer getValue() 获取<p>统计值</p>
 * @method void setValue(integer $Value) 设置<p>统计值</p>
 * @method string getDesc() 获取<p>描述</p>
 * @method void setDesc(string $Desc) 设置<p>描述</p>
 */
class DspmStatisticsItem extends AbstractModel
{
    /**
     * @var string <p>统计项名称</p>
     */
    public $Name;

    /**
     * @var integer <p>统计值</p>
     */
    public $Value;

    /**
     * @var string <p>描述</p>
     */
    public $Desc;

    /**
     * @param string $Name <p>统计项名称</p>
     * @param integer $Value <p>统计值</p>
     * @param string $Desc <p>描述</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
