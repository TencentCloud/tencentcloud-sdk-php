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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getExpress() 获取表情
 * @method void setExpress(string $Express) 设置表情
 * @method float getRatio() 获取表情所占比例
 * @method void setRatio(float $Ratio) 设置表情所占比例
 * @method integer getCount() 获取出现次数
 * @method void setCount(integer $Count) 设置出现次数
 */

/**
 *表情比例统计
 */
class ExpressRatioStatistic extends AbstractModel
{
    /**
     * @var string 表情
     */
    public $Express;

    /**
     * @var float 表情所占比例
     */
    public $Ratio;

    /**
     * @var integer 出现次数
     */
    public $Count;
    /**
     * @param string $Express 表情
     * @param float $Ratio 表情所占比例
     * @param integer $Count 出现次数
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Express",$param) and $param["Express"] !== null) {
            $this->Express = $param["Express"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
