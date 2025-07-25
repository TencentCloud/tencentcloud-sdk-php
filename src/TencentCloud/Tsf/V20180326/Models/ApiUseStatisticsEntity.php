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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API 日统计数据点
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getCount() 获取次数
 * @method void setCount(string $Count) 设置次数
 * @method string getRatio() 获取比率
 * @method void setRatio(string $Ratio) 设置比率
 */
class ApiUseStatisticsEntity extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 次数
     */
    public $Count;

    /**
     * @var string 比率
     */
    public $Ratio;

    /**
     * @param string $Name 名称
     * @param string $Count 次数
     * @param string $Ratio 比率
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

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }
    }
}
