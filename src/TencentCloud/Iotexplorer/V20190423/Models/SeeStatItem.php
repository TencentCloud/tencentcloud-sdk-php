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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeSee 统计数据点
 *
 * @method string getTime() 获取时间
 * @method void setTime(string $Time) 设置时间
 * @method integer getCount() 获取任务数量
 * @method void setCount(integer $Count) 设置任务数量
 * @method integer getCostBasic() 获取基础能力用量
 * @method void setCostBasic(integer $CostBasic) 设置基础能力用量
 * @method integer getCostAdvanced() 获取高级能力用量
 * @method void setCostAdvanced(integer $CostAdvanced) 设置高级能力用量
 */
class SeeStatItem extends AbstractModel
{
    /**
     * @var string 时间
     */
    public $Time;

    /**
     * @var integer 任务数量
     */
    public $Count;

    /**
     * @var integer 基础能力用量
     */
    public $CostBasic;

    /**
     * @var integer 高级能力用量
     */
    public $CostAdvanced;

    /**
     * @param string $Time 时间
     * @param integer $Count 任务数量
     * @param integer $CostBasic 基础能力用量
     * @param integer $CostAdvanced 高级能力用量
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("CostBasic",$param) and $param["CostBasic"] !== null) {
            $this->CostBasic = $param["CostBasic"];
        }

        if (array_key_exists("CostAdvanced",$param) and $param["CostAdvanced"] !== null) {
            $this->CostAdvanced = $param["CostAdvanced"];
        }
    }
}
