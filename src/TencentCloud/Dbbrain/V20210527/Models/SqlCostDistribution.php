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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分段耗时 SQL 分布
 *
 * @method integer getCount() 获取sql条数。
 * @method void setCount(integer $Count) 设置sql条数。
 * @method float getFrom() 获取分段耗时下边界，单位是秒。
 * @method void setFrom(float $From) 设置分段耗时下边界，单位是秒。
 * @method float getTo() 获取分段耗时上边界，单位是秒。
 * @method void setTo(float $To) 设置分段耗时上边界，单位是秒。
 * @method float getRatio() 获取耗时占比。单位（%）
 * @method void setRatio(float $Ratio) 设置耗时占比。单位（%）
 */
class SqlCostDistribution extends AbstractModel
{
    /**
     * @var integer sql条数。
     */
    public $Count;

    /**
     * @var float 分段耗时下边界，单位是秒。
     */
    public $From;

    /**
     * @var float 分段耗时上边界，单位是秒。
     */
    public $To;

    /**
     * @var float 耗时占比。单位（%）
     */
    public $Ratio;

    /**
     * @param integer $Count sql条数。
     * @param float $From 分段耗时下边界，单位是秒。
     * @param float $To 分段耗时上边界，单位是秒。
     * @param float $Ratio 耗时占比。单位（%）
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }
    }
}
