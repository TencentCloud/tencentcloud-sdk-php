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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceDetailInfo请求参数结构体
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getCurRunDate() 获取实例数据时间
 * @method void setCurRunDate(string $CurRunDate) 设置实例数据时间
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getLifeRound() 获取实例的第几次执行
 * @method void setLifeRound(integer $LifeRound) 设置实例的第几次执行
 * @method integer getLifeRoundStartIndex() 获取生命周期查询起始index
 * @method void setLifeRoundStartIndex(integer $LifeRoundStartIndex) 设置生命周期查询起始index
 * @method integer getLifeRoundSize() 获取生命周期查询批次数量
 * @method void setLifeRoundSize(integer $LifeRoundSize) 设置生命周期查询批次数量
 * @method string getTotalLifeRound() 获取生命周期总数，可省略
 * @method void setTotalLifeRound(string $TotalLifeRound) 设置生命周期总数，可省略
 * @method boolean getDynamic() 获取动态加载日志标识
 * @method void setDynamic(boolean $Dynamic) 设置动态加载日志标识
 */
class DescribeInstanceDetailInfoRequest extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 实例数据时间
     */
    public $CurRunDate;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 实例的第几次执行
     */
    public $LifeRound;

    /**
     * @var integer 生命周期查询起始index
     */
    public $LifeRoundStartIndex;

    /**
     * @var integer 生命周期查询批次数量
     */
    public $LifeRoundSize;

    /**
     * @var string 生命周期总数，可省略
     */
    public $TotalLifeRound;

    /**
     * @var boolean 动态加载日志标识
     */
    public $Dynamic;

    /**
     * @param string $TaskId 任务ID
     * @param string $CurRunDate 实例数据时间
     * @param string $ProjectId 项目id
     * @param integer $LifeRound 实例的第几次执行
     * @param integer $LifeRoundStartIndex 生命周期查询起始index
     * @param integer $LifeRoundSize 生命周期查询批次数量
     * @param string $TotalLifeRound 生命周期总数，可省略
     * @param boolean $Dynamic 动态加载日志标识
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("LifeRound",$param) and $param["LifeRound"] !== null) {
            $this->LifeRound = $param["LifeRound"];
        }

        if (array_key_exists("LifeRoundStartIndex",$param) and $param["LifeRoundStartIndex"] !== null) {
            $this->LifeRoundStartIndex = $param["LifeRoundStartIndex"];
        }

        if (array_key_exists("LifeRoundSize",$param) and $param["LifeRoundSize"] !== null) {
            $this->LifeRoundSize = $param["LifeRoundSize"];
        }

        if (array_key_exists("TotalLifeRound",$param) and $param["TotalLifeRound"] !== null) {
            $this->TotalLifeRound = $param["TotalLifeRound"];
        }

        if (array_key_exists("Dynamic",$param) and $param["Dynamic"] !== null) {
            $this->Dynamic = $param["Dynamic"];
        }
    }
}
