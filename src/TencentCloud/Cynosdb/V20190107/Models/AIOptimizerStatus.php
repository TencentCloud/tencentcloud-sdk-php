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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 优化器状态
 *
 * @method string getStatus() 获取<p>状态。closing-关闭中，closed-关闭，opening-开启中，training-训练中，trained-训练完成，train_failed-训练失败。</p>
 * @method void setStatus(string $Status) 设置<p>状态。closing-关闭中，closed-关闭，opening-开启中，training-训练中，trained-训练完成，train_failed-训练失败。</p>
 * @method string getOpenTime() 获取<p>开启时间</p>
 * @method void setOpenTime(string $OpenTime) 设置<p>开启时间</p>
 * @method integer getTrainingProgress() 获取<p>训练进度</p>
 * @method void setTrainingProgress(integer $TrainingProgress) 设置<p>训练进度</p>
 */
class AIOptimizerStatus extends AbstractModel
{
    /**
     * @var string <p>状态。closing-关闭中，closed-关闭，opening-开启中，training-训练中，trained-训练完成，train_failed-训练失败。</p>
     */
    public $Status;

    /**
     * @var string <p>开启时间</p>
     */
    public $OpenTime;

    /**
     * @var integer <p>训练进度</p>
     */
    public $TrainingProgress;

    /**
     * @param string $Status <p>状态。closing-关闭中，closed-关闭，opening-开启中，training-训练中，trained-训练完成，train_failed-训练失败。</p>
     * @param string $OpenTime <p>开启时间</p>
     * @param integer $TrainingProgress <p>训练进度</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OpenTime",$param) and $param["OpenTime"] !== null) {
            $this->OpenTime = $param["OpenTime"];
        }

        if (array_key_exists("TrainingProgress",$param) and $param["TrainingProgress"] !== null) {
            $this->TrainingProgress = $param["TrainingProgress"];
        }
    }
}
