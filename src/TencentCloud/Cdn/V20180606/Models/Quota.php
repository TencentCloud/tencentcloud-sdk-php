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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 刷新/预热 可用量及配额
 *
 * @method integer getBatch() 获取单次批量提交配额上限。
 * @method void setBatch(integer $Batch) 设置单次批量提交配额上限。
 * @method integer getTotal() 获取每日提交配额上限。
 * @method void setTotal(integer $Total) 设置每日提交配额上限。
 * @method integer getAvailable() 获取每日剩余的可提交配额。
 * @method void setAvailable(integer $Available) 设置每日剩余的可提交配额。
 * @method string getArea() 获取配额的区域。
 * @method void setArea(string $Area) 设置配额的区域。
 */
class Quota extends AbstractModel
{
    /**
     * @var integer 单次批量提交配额上限。
     */
    public $Batch;

    /**
     * @var integer 每日提交配额上限。
     */
    public $Total;

    /**
     * @var integer 每日剩余的可提交配额。
     */
    public $Available;

    /**
     * @var string 配额的区域。
     */
    public $Area;

    /**
     * @param integer $Batch 单次批量提交配额上限。
     * @param integer $Total 每日提交配额上限。
     * @param integer $Available 每日剩余的可提交配额。
     * @param string $Area 配额的区域。
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
        if (array_key_exists("Batch",$param) and $param["Batch"] !== null) {
            $this->Batch = $param["Batch"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
