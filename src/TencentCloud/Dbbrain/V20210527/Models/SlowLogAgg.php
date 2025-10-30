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
 * redis top慢日志聚合详情。
 *
 * @method string getCmd() 获取命令模板。
 * @method void setCmd(string $Cmd) 设置命令模板。
 * @method string getDetail() 获取命令详情。
 * @method void setDetail(string $Detail) 设置命令详情。
 * @method integer getExecTimes() 获取执行次数。
 * @method void setExecTimes(integer $ExecTimes) 设置执行次数。
 * @method float getQueryTime() 获取总耗时。单位：s
 * @method void setQueryTime(float $QueryTime) 设置总耗时。单位：s
 * @method float getQueryTimeAvg() 获取平均执行时间。单位：s
 * @method void setQueryTimeAvg(float $QueryTimeAvg) 设置平均执行时间。单位：s
 * @method float getQueryTimeMax() 获取最大执行时间。单位：s
 * @method void setQueryTimeMax(float $QueryTimeMax) 设置最大执行时间。单位：s
 * @method float getQueryTimeMin() 获取最小执行时间。单位：s
 * @method void setQueryTimeMin(float $QueryTimeMin) 设置最小执行时间。单位：s
 * @method float getQueryTimeRatio() 获取总耗时占比。单位：%
 * @method void setQueryTimeRatio(float $QueryTimeRatio) 设置总耗时占比。单位：%
 */
class SlowLogAgg extends AbstractModel
{
    /**
     * @var string 命令模板。
     */
    public $Cmd;

    /**
     * @var string 命令详情。
     */
    public $Detail;

    /**
     * @var integer 执行次数。
     */
    public $ExecTimes;

    /**
     * @var float 总耗时。单位：s
     */
    public $QueryTime;

    /**
     * @var float 平均执行时间。单位：s
     */
    public $QueryTimeAvg;

    /**
     * @var float 最大执行时间。单位：s
     */
    public $QueryTimeMax;

    /**
     * @var float 最小执行时间。单位：s
     */
    public $QueryTimeMin;

    /**
     * @var float 总耗时占比。单位：%
     */
    public $QueryTimeRatio;

    /**
     * @param string $Cmd 命令模板。
     * @param string $Detail 命令详情。
     * @param integer $ExecTimes 执行次数。
     * @param float $QueryTime 总耗时。单位：s
     * @param float $QueryTimeAvg 平均执行时间。单位：s
     * @param float $QueryTimeMax 最大执行时间。单位：s
     * @param float $QueryTimeMin 最小执行时间。单位：s
     * @param float $QueryTimeRatio 总耗时占比。单位：%
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
        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("ExecTimes",$param) and $param["ExecTimes"] !== null) {
            $this->ExecTimes = $param["ExecTimes"];
        }

        if (array_key_exists("QueryTime",$param) and $param["QueryTime"] !== null) {
            $this->QueryTime = $param["QueryTime"];
        }

        if (array_key_exists("QueryTimeAvg",$param) and $param["QueryTimeAvg"] !== null) {
            $this->QueryTimeAvg = $param["QueryTimeAvg"];
        }

        if (array_key_exists("QueryTimeMax",$param) and $param["QueryTimeMax"] !== null) {
            $this->QueryTimeMax = $param["QueryTimeMax"];
        }

        if (array_key_exists("QueryTimeMin",$param) and $param["QueryTimeMin"] !== null) {
            $this->QueryTimeMin = $param["QueryTimeMin"];
        }

        if (array_key_exists("QueryTimeRatio",$param) and $param["QueryTimeRatio"] !== null) {
            $this->QueryTimeRatio = $param["QueryTimeRatio"];
        }
    }
}
