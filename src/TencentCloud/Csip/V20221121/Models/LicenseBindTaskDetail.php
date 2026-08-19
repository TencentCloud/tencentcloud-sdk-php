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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 授权绑定任务详情
 *
 * @method string getQuuid() 获取<p>云服务器UUID</p>
 * @method void setQuuid(string $Quuid) 设置<p>云服务器UUID</p>
 * @method string getErrMsg() 获取<p>错误信息</p>
 * @method void setErrMsg(string $ErrMsg) 设置<p>错误信息</p>
 * @method integer getStatus() 获取<p>0 执行中, 1 成功,2失败</p>
 * @method void setStatus(integer $Status) 设置<p>0 执行中, 1 成功,2失败</p>
 * @method string getFixMessage() 获取<p>修复建议</p>
 * @method void setFixMessage(string $FixMessage) 设置<p>修复建议</p>
 * @method MachineExtraInfo getMachineExtraInfo() 获取<p>机器额外信息</p>
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置<p>机器额外信息</p>
 */
class LicenseBindTaskDetail extends AbstractModel
{
    /**
     * @var string <p>云服务器UUID</p>
     */
    public $Quuid;

    /**
     * @var string <p>错误信息</p>
     */
    public $ErrMsg;

    /**
     * @var integer <p>0 执行中, 1 成功,2失败</p>
     */
    public $Status;

    /**
     * @var string <p>修复建议</p>
     */
    public $FixMessage;

    /**
     * @var MachineExtraInfo <p>机器额外信息</p>
     */
    public $MachineExtraInfo;

    /**
     * @param string $Quuid <p>云服务器UUID</p>
     * @param string $ErrMsg <p>错误信息</p>
     * @param integer $Status <p>0 执行中, 1 成功,2失败</p>
     * @param string $FixMessage <p>修复建议</p>
     * @param MachineExtraInfo $MachineExtraInfo <p>机器额外信息</p>
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
