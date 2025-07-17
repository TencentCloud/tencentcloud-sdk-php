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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 购买完额外性能之后的值
 *
 * @method string getType() 获取fixed: 最终值固定
 * @method void setType(string $Type) 设置fixed: 最终值固定
 * @method integer getPerformance() 获取额外购买的CFS性能值，单位MB/s。
 * @method void setPerformance(integer $Performance) 设置额外购买的CFS性能值，单位MB/s。
 */
class ExstraPerformanceInfo extends AbstractModel
{
    /**
     * @var string fixed: 最终值固定
     */
    public $Type;

    /**
     * @var integer 额外购买的CFS性能值，单位MB/s。
     */
    public $Performance;

    /**
     * @param string $Type fixed: 最终值固定
     * @param integer $Performance 额外购买的CFS性能值，单位MB/s。
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

        if (array_key_exists("Performance",$param) and $param["Performance"] !== null) {
            $this->Performance = $param["Performance"];
        }
    }
}
