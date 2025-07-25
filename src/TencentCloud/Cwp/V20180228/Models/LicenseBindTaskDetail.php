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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 授权绑定任务详情
 *
 * @method string getQuuid() 获取云服务器UUID
 * @method void setQuuid(string $Quuid) 设置云服务器UUID
 * @method string getErrMsg() 获取错误信息
 * @method void setErrMsg(string $ErrMsg) 设置错误信息
 * @method integer getStatus() 获取0 执行中, 1 成功,2失败
 * @method void setStatus(integer $Status) 设置0 执行中, 1 成功,2失败
 * @method string getFixMessage() 获取修复建议
 * @method void setFixMessage(string $FixMessage) 设置修复建议
 * @method MachineExtraInfo getMachineExtraInfo() 获取机器额外信息
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置机器额外信息
 */
class LicenseBindTaskDetail extends AbstractModel
{
    /**
     * @var string 云服务器UUID
     */
    public $Quuid;

    /**
     * @var string 错误信息
     */
    public $ErrMsg;

    /**
     * @var integer 0 执行中, 1 成功,2失败
     */
    public $Status;

    /**
     * @var string 修复建议
     */
    public $FixMessage;

    /**
     * @var MachineExtraInfo 机器额外信息
     */
    public $MachineExtraInfo;

    /**
     * @param string $Quuid 云服务器UUID
     * @param string $ErrMsg 错误信息
     * @param integer $Status 0 执行中, 1 成功,2失败
     * @param string $FixMessage 修复建议
     * @param MachineExtraInfo $MachineExtraInfo 机器额外信息
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FixMessage",$param) and $param["FixMessage"] !== null) {
            $this->FixMessage = $param["FixMessage"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
