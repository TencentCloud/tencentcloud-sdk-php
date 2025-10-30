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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTaskInstanceLog请求参数结构体
 *
 * @method string getProjectId() 获取**项目ID**
 * @method void setProjectId(string $ProjectId) 设置**项目ID**
 * @method string getInstanceKey() 获取**实例唯一标识**
 * @method void setInstanceKey(string $InstanceKey) 设置**实例唯一标识**
 * @method integer getLifeRoundNum() 获取**实例生命周期编号，标识实例的某一次执行**例如：周期实例第一次运行的编号为0，用户后期又重跑了该实例，第二次执行的编号为1; 默认最新一次
 * @method void setLifeRoundNum(integer $LifeRoundNum) 设置**实例生命周期编号，标识实例的某一次执行**例如：周期实例第一次运行的编号为0，用户后期又重跑了该实例，第二次执行的编号为1; 默认最新一次
 * @method string getLogLevel() 获取**日志级别** 默认All - Info - Debug - Warn - Error - All
 * @method void setLogLevel(string $LogLevel) 设置**日志级别** 默认All - Info - Debug - Warn - Error - All
 * @method string getNextCursor() 获取**分页查询日志时使用，无具体业务含义** 第一次查询时值为null 第二次及以后查询时使用上一次查询返回信息中的NextCursor字段值即可
 * @method void setNextCursor(string $NextCursor) 设置**分页查询日志时使用，无具体业务含义** 第一次查询时值为null 第二次及以后查询时使用上一次查询返回信息中的NextCursor字段值即可
 */
class GetTaskInstanceLogRequest extends AbstractModel
{
    /**
     * @var string **项目ID**
     */
    public $ProjectId;

    /**
     * @var string **实例唯一标识**
     */
    public $InstanceKey;

    /**
     * @var integer **实例生命周期编号，标识实例的某一次执行**例如：周期实例第一次运行的编号为0，用户后期又重跑了该实例，第二次执行的编号为1; 默认最新一次
     */
    public $LifeRoundNum;

    /**
     * @var string **日志级别** 默认All - Info - Debug - Warn - Error - All
     */
    public $LogLevel;

    /**
     * @var string **分页查询日志时使用，无具体业务含义** 第一次查询时值为null 第二次及以后查询时使用上一次查询返回信息中的NextCursor字段值即可
     */
    public $NextCursor;

    /**
     * @param string $ProjectId **项目ID**
     * @param string $InstanceKey **实例唯一标识**
     * @param integer $LifeRoundNum **实例生命周期编号，标识实例的某一次执行**例如：周期实例第一次运行的编号为0，用户后期又重跑了该实例，第二次执行的编号为1; 默认最新一次
     * @param string $LogLevel **日志级别** 默认All - Info - Debug - Warn - Error - All
     * @param string $NextCursor **分页查询日志时使用，无具体业务含义** 第一次查询时值为null 第二次及以后查询时使用上一次查询返回信息中的NextCursor字段值即可
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("LifeRoundNum",$param) and $param["LifeRoundNum"] !== null) {
            $this->LifeRoundNum = $param["LifeRoundNum"];
        }

        if (array_key_exists("LogLevel",$param) and $param["LogLevel"] !== null) {
            $this->LogLevel = $param["LogLevel"];
        }

        if (array_key_exists("NextCursor",$param) and $param["NextCursor"] !== null) {
            $this->NextCursor = $param["NextCursor"];
        }
    }
}
