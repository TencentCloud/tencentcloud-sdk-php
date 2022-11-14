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
 * 概览趋势结果
 *
 * @method string getStatDate() 获取统计日期
 * @method void setStatDate(string $StatDate) 设置统计日期
 * @method integer getAlarmCnt() 获取告警数
 * @method void setAlarmCnt(integer $AlarmCnt) 设置告警数
 * @method integer getPipelineCnt() 获取阻塞数
 * @method void setPipelineCnt(integer $PipelineCnt) 设置阻塞数
 */
class RuleExecDateStat extends AbstractModel
{
    /**
     * @var string 统计日期
     */
    public $StatDate;

    /**
     * @var integer 告警数
     */
    public $AlarmCnt;

    /**
     * @var integer 阻塞数
     */
    public $PipelineCnt;

    /**
     * @param string $StatDate 统计日期
     * @param integer $AlarmCnt 告警数
     * @param integer $PipelineCnt 阻塞数
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
        if (array_key_exists("StatDate",$param) and $param["StatDate"] !== null) {
            $this->StatDate = $param["StatDate"];
        }

        if (array_key_exists("AlarmCnt",$param) and $param["AlarmCnt"] !== null) {
            $this->AlarmCnt = $param["AlarmCnt"];
        }

        if (array_key_exists("PipelineCnt",$param) and $param["PipelineCnt"] !== null) {
            $this->PipelineCnt = $param["PipelineCnt"];
        }
    }
}
