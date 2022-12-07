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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBackUpSchedule请求参数结构体
 *
 * @method integer getScheduleId() 获取编辑时需要传
 * @method void setScheduleId(integer $ScheduleId) 设置编辑时需要传
 * @method string getWeekDays() 获取选择的星期 逗号分隔，例如 2 代表周二
 * @method void setWeekDays(string $WeekDays) 设置选择的星期 逗号分隔，例如 2 代表周二
 * @method integer getExecuteHour() 获取执行小时
 * @method void setExecuteHour(integer $ExecuteHour) 设置执行小时
 * @method array getBackUpTables() 获取备份表列表
 * @method void setBackUpTables(array $BackUpTables) 设置备份表列表
 */
class CreateBackUpScheduleRequest extends AbstractModel
{
    /**
     * @var integer 编辑时需要传
     */
    public $ScheduleId;

    /**
     * @var string 选择的星期 逗号分隔，例如 2 代表周二
     */
    public $WeekDays;

    /**
     * @var integer 执行小时
     */
    public $ExecuteHour;

    /**
     * @var array 备份表列表
     */
    public $BackUpTables;

    /**
     * @param integer $ScheduleId 编辑时需要传
     * @param string $WeekDays 选择的星期 逗号分隔，例如 2 代表周二
     * @param integer $ExecuteHour 执行小时
     * @param array $BackUpTables 备份表列表
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
        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
        }

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("ExecuteHour",$param) and $param["ExecuteHour"] !== null) {
            $this->ExecuteHour = $param["ExecuteHour"];
        }

        if (array_key_exists("BackUpTables",$param) and $param["BackUpTables"] !== null) {
            $this->BackUpTables = [];
            foreach ($param["BackUpTables"] as $key => $value){
                $obj = new BackupTableContent();
                $obj->deserialize($value);
                array_push($this->BackUpTables, $obj);
            }
        }
    }
}
