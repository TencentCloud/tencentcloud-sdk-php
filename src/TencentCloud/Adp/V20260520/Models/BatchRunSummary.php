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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchRunSummary
 *
 * @method integer getFailedCount() 获取	失败数量
 * @method void setFailedCount(integer $FailedCount) 设置	失败数量
 * @method integer getSuccessCount() 获取	成功数量
 * @method void setSuccessCount(integer $SuccessCount) 设置	成功数量
 * @method integer getTotalCount() 获取总批次
 * @method void setTotalCount(integer $TotalCount) 设置总批次
 * @method array getFailedIndexList() 获取失败的下标
 * @method void setFailedIndexList(array $FailedIndexList) 设置失败的下标
 * @method array getJustCompletedIndexList() 获取	上一轮完成的批次
 * @method void setJustCompletedIndexList(array $JustCompletedIndexList) 设置	上一轮完成的批次
 * @method array getRunningIndexList() 获取运行中的下标
 * @method void setRunningIndexList(array $RunningIndexList) 设置运行中的下标
 * @method array getSuccessIndexList() 获取成功的下标
 * @method void setSuccessIndexList(array $SuccessIndexList) 设置成功的下标
 */
class BatchRunSummary extends AbstractModel
{
    /**
     * @var integer 	失败数量
     */
    public $FailedCount;

    /**
     * @var integer 	成功数量
     */
    public $SuccessCount;

    /**
     * @var integer 总批次
     */
    public $TotalCount;

    /**
     * @var array 失败的下标
     */
    public $FailedIndexList;

    /**
     * @var array 	上一轮完成的批次
     */
    public $JustCompletedIndexList;

    /**
     * @var array 运行中的下标
     */
    public $RunningIndexList;

    /**
     * @var array 成功的下标
     */
    public $SuccessIndexList;

    /**
     * @param integer $FailedCount 	失败数量
     * @param integer $SuccessCount 	成功数量
     * @param integer $TotalCount 总批次
     * @param array $FailedIndexList 失败的下标
     * @param array $JustCompletedIndexList 	上一轮完成的批次
     * @param array $RunningIndexList 运行中的下标
     * @param array $SuccessIndexList 成功的下标
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
        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("FailedIndexList",$param) and $param["FailedIndexList"] !== null) {
            $this->FailedIndexList = $param["FailedIndexList"];
        }

        if (array_key_exists("JustCompletedIndexList",$param) and $param["JustCompletedIndexList"] !== null) {
            $this->JustCompletedIndexList = $param["JustCompletedIndexList"];
        }

        if (array_key_exists("RunningIndexList",$param) and $param["RunningIndexList"] !== null) {
            $this->RunningIndexList = $param["RunningIndexList"];
        }

        if (array_key_exists("SuccessIndexList",$param) and $param["SuccessIndexList"] !== null) {
            $this->SuccessIndexList = $param["SuccessIndexList"];
        }
    }
}
