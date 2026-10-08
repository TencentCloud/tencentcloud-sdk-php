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
 * @method string getTime() 获取<p>时间</p>
 * @method void setTime(string $Time) 设置<p>时间</p>
 * @method integer getCount() 获取<p>任务数量</p>
 * @method void setCount(integer $Count) 设置<p>任务数量</p>
 * @method integer getCostBasic() 获取<p>基础能力后付费用量</p>
 * @method void setCostBasic(integer $CostBasic) 设置<p>基础能力后付费用量</p>
 * @method integer getCostAdvanced() 获取<p>高级能力后付费用量</p>
 * @method void setCostAdvanced(integer $CostAdvanced) 设置<p>高级能力后付费用量</p>
 * @method float getCostCredits() 获取<p>预付费额度用量</p>
 * @method void setCostCredits(float $CostCredits) 设置<p>预付费额度用量</p>
 */
class SeeStatItem extends AbstractModel
{
    /**
     * @var string <p>时间</p>
     */
    public $Time;

    /**
     * @var integer <p>任务数量</p>
     */
    public $Count;

    /**
     * @var integer <p>基础能力后付费用量</p>
     */
    public $CostBasic;

    /**
     * @var integer <p>高级能力后付费用量</p>
     */
    public $CostAdvanced;

    /**
     * @var float <p>预付费额度用量</p>
     */
    public $CostCredits;

    /**
     * @param string $Time <p>时间</p>
     * @param integer $Count <p>任务数量</p>
     * @param integer $CostBasic <p>基础能力后付费用量</p>
     * @param integer $CostAdvanced <p>高级能力后付费用量</p>
     * @param float $CostCredits <p>预付费额度用量</p>
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

        if (array_key_exists("CostCredits",$param) and $param["CostCredits"] !== null) {
            $this->CostCredits = $param["CostCredits"];
        }
    }
}
