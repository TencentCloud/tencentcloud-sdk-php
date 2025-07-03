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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDL任务执行详情
 *
 * @method string getShardSerialId() 获取分片Id
 * @method void setShardSerialId(string $ShardSerialId) 设置分片Id
 * @method string getDbName() 获取数据库
 * @method void setDbName(string $DbName) 设置数据库
 * @method string getTable() 获取表
 * @method void setTable(string $Table) 设置表
 * @method string getAlter() 获取执行的DDL任务内容
 * @method void setAlter(string $Alter) 设置执行的DDL任务内容
 * @method string getBeginTime() 获取开始执行时间
 * @method void setBeginTime(string $BeginTime) 设置开始执行时间
 * @method integer getStatus() 获取当前任务状态。0 成功； 1失败；  2进行中
 * @method void setStatus(integer $Status) 设置当前任务状态。0 成功； 1失败；  2进行中
 * @method string getDesc() 获取任务详细描述信息
 * @method void setDesc(string $Desc) 设置任务详细描述信息
 * @method string getStage() 获取任务当前所处阶段
 * @method void setStage(string $Stage) 设置任务当前所处阶段
 * @method integer getSwitchStatus() 获取切换状态：1: 未到切换阶段；2：正在等待进行表切换；3: 正在进行切换；4: 切换成功；5: 切换失败
 * @method void setSwitchStatus(integer $SwitchStatus) 设置切换状态：1: 未到切换阶段；2：正在等待进行表切换；3: 正在进行切换；4: 切换成功；5: 切换失败
 */
class DDLDetail extends AbstractModel
{
    /**
     * @var string 分片Id
     */
    public $ShardSerialId;

    /**
     * @var string 数据库
     */
    public $DbName;

    /**
     * @var string 表
     */
    public $Table;

    /**
     * @var string 执行的DDL任务内容
     */
    public $Alter;

    /**
     * @var string 开始执行时间
     */
    public $BeginTime;

    /**
     * @var integer 当前任务状态。0 成功； 1失败；  2进行中
     */
    public $Status;

    /**
     * @var string 任务详细描述信息
     */
    public $Desc;

    /**
     * @var string 任务当前所处阶段
     */
    public $Stage;

    /**
     * @var integer 切换状态：1: 未到切换阶段；2：正在等待进行表切换；3: 正在进行切换；4: 切换成功；5: 切换失败
     */
    public $SwitchStatus;

    /**
     * @param string $ShardSerialId 分片Id
     * @param string $DbName 数据库
     * @param string $Table 表
     * @param string $Alter 执行的DDL任务内容
     * @param string $BeginTime 开始执行时间
     * @param integer $Status 当前任务状态。0 成功； 1失败；  2进行中
     * @param string $Desc 任务详细描述信息
     * @param string $Stage 任务当前所处阶段
     * @param integer $SwitchStatus 切换状态：1: 未到切换阶段；2：正在等待进行表切换；3: 正在进行切换；4: 切换成功；5: 切换失败
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
        if (array_key_exists("ShardSerialId",$param) and $param["ShardSerialId"] !== null) {
            $this->ShardSerialId = $param["ShardSerialId"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Alter",$param) and $param["Alter"] !== null) {
            $this->Alter = $param["Alter"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = $param["Stage"];
        }

        if (array_key_exists("SwitchStatus",$param) and $param["SwitchStatus"] !== null) {
            $this->SwitchStatus = $param["SwitchStatus"];
        }
    }
}
