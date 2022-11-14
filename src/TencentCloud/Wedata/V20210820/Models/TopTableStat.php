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
 * 质量概览表排行结果
 *
 * @method array getAlarmTables() 获取告警表列表
 * @method void setAlarmTables(array $AlarmTables) 设置告警表列表
 * @method array getPipelineTables() 获取阻塞表列表
 * @method void setPipelineTables(array $PipelineTables) 设置阻塞表列表
 */
class TopTableStat extends AbstractModel
{
    /**
     * @var array 告警表列表
     */
    public $AlarmTables;

    /**
     * @var array 阻塞表列表
     */
    public $PipelineTables;

    /**
     * @param array $AlarmTables 告警表列表
     * @param array $PipelineTables 阻塞表列表
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
        if (array_key_exists("AlarmTables",$param) and $param["AlarmTables"] !== null) {
            $this->AlarmTables = [];
            foreach ($param["AlarmTables"] as $key => $value){
                $obj = new TopTableStatItem();
                $obj->deserialize($value);
                array_push($this->AlarmTables, $obj);
            }
        }

        if (array_key_exists("PipelineTables",$param) and $param["PipelineTables"] !== null) {
            $this->PipelineTables = [];
            foreach ($param["PipelineTables"] as $key => $value){
                $obj = new TopTableStatItem();
                $obj->deserialize($value);
                array_push($this->PipelineTables, $obj);
            }
        }
    }
}
