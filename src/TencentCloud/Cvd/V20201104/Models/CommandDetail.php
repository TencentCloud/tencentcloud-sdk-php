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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务详情
 *
 * @method string getUin() 获取租户 Uin
 * @method void setUin(string $Uin) 设置租户 Uin
 * @method integer getAppId() 获取租户 APPID
 * @method void setAppId(integer $AppId) 设置租户 APPID
 * @method string getType() 获取任务类型，取值有：
PowerShellScript
Bat
 * @method void setType(string $Type) 设置任务类型，取值有：
PowerShellScript
Bat
 * @method string getStatus() 获取RUNNING - 执行中；FINISHED - 执行完成
 * @method void setStatus(string $Status) 设置RUNNING - 执行中；FINISHED - 执行完成
 * @method string getCommand() 获取任务脚本，Base64 编码
 * @method void setCommand(string $Command) 设置任务脚本，Base64 编码
 * @method string getCommandId() 获取任务唯一 ID
 * @method void setCommandId(string $CommandId) 设置任务唯一 ID
 * @method string getCreateTime() 获取任务完成时间
 * @method void setCreateTime(string $CreateTime) 设置任务完成时间
 * @method string getFinishTime() 获取任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishTime(string $FinishTime) 设置任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInvocations() 获取各实例运行结果集
 * @method void setInvocations(array $Invocations) 设置各实例运行结果集
 * @method boolean getRunAsBoundUser() 获取是否以绑定用户运行任务，默认 false：system 用户执行
 * @method void setRunAsBoundUser(boolean $RunAsBoundUser) 设置是否以绑定用户运行任务，默认 false：system 用户执行
 * @method boolean getRunForeground() 获取是否前台运行任务，默认 false：后台运行任务
 * @method void setRunForeground(boolean $RunForeground) 设置是否前台运行任务，默认 false：后台运行任务
 */
class CommandDetail extends AbstractModel
{
    /**
     * @var string 租户 Uin
     */
    public $Uin;

    /**
     * @var integer 租户 APPID
     */
    public $AppId;

    /**
     * @var string 任务类型，取值有：
PowerShellScript
Bat
     */
    public $Type;

    /**
     * @var string RUNNING - 执行中；FINISHED - 执行完成
     */
    public $Status;

    /**
     * @var string 任务脚本，Base64 编码
     */
    public $Command;

    /**
     * @var string 任务唯一 ID
     */
    public $CommandId;

    /**
     * @var string 任务完成时间
     */
    public $CreateTime;

    /**
     * @var string 任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishTime;

    /**
     * @var array 各实例运行结果集
     */
    public $Invocations;

    /**
     * @var boolean 是否以绑定用户运行任务，默认 false：system 用户执行
     */
    public $RunAsBoundUser;

    /**
     * @var boolean 是否前台运行任务，默认 false：后台运行任务
     */
    public $RunForeground;

    /**
     * @param string $Uin 租户 Uin
     * @param integer $AppId 租户 APPID
     * @param string $Type 任务类型，取值有：
PowerShellScript
Bat
     * @param string $Status RUNNING - 执行中；FINISHED - 执行完成
     * @param string $Command 任务脚本，Base64 编码
     * @param string $CommandId 任务唯一 ID
     * @param string $CreateTime 任务完成时间
     * @param string $FinishTime 任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Invocations 各实例运行结果集
     * @param boolean $RunAsBoundUser 是否以绑定用户运行任务，默认 false：system 用户执行
     * @param boolean $RunForeground 是否前台运行任务，默认 false：后台运行任务
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("CommandId",$param) and $param["CommandId"] !== null) {
            $this->CommandId = $param["CommandId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("Invocations",$param) and $param["Invocations"] !== null) {
            $this->Invocations = [];
            foreach ($param["Invocations"] as $key => $value){
                $obj = new InvocationDetail();
                $obj->deserialize($value);
                array_push($this->Invocations, $obj);
            }
        }

        if (array_key_exists("RunAsBoundUser",$param) and $param["RunAsBoundUser"] !== null) {
            $this->RunAsBoundUser = $param["RunAsBoundUser"];
        }

        if (array_key_exists("RunForeground",$param) and $param["RunForeground"] !== null) {
            $this->RunForeground = $param["RunForeground"];
        }
    }
}
