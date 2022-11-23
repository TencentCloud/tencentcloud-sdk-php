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
namespace TencentCloud\Advisor\V20200721\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskStrategyRisks请求参数结构体
 *
 * @method integer getStrategyId() 获取评估项ID
 * @method void setStrategyId(integer $StrategyId) 设置评估项ID
 * @method integer getLimit() 获取返回数量,默认值为100,最大值为200
 * @method void setLimit(integer $Limit) 设置返回数量,默认值为100,最大值为200
 * @method integer getOffset() 获取偏移量,默认0
 * @method void setOffset(integer $Offset) 设置偏移量,默认0
 * @method string getEnv() 获取环境
 * @method void setEnv(string $Env) 设置环境
 * @method string getTaskType() 获取任务类型
 * @method void setTaskType(string $TaskType) 设置任务类型
 */
class DescribeTaskStrategyRisksRequest extends AbstractModel
{
    /**
     * @var integer 评估项ID
     */
    public $StrategyId;

    /**
     * @var integer 返回数量,默认值为100,最大值为200
     */
    public $Limit;

    /**
     * @var integer 偏移量,默认0
     */
    public $Offset;

    /**
     * @var string 环境
     */
    public $Env;

    /**
     * @var string 任务类型
     */
    public $TaskType;

    /**
     * @param integer $StrategyId 评估项ID
     * @param integer $Limit 返回数量,默认值为100,最大值为200
     * @param integer $Offset 偏移量,默认0
     * @param string $Env 环境
     * @param string $TaskType 任务类型
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
