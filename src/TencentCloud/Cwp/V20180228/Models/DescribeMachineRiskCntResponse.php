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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMachineRiskCnt返回参数结构体
 *
 * @method integer getHostLogin() 获取异地登录
 * @method void setHostLogin(integer $HostLogin) 设置异地登录
 * @method integer getBruteAttack() 获取密码破解
 * @method void setBruteAttack(integer $BruteAttack) 设置密码破解
 * @method integer getMaliciousRequest() 获取恶意请求
 * @method void setMaliciousRequest(integer $MaliciousRequest) 设置恶意请求
 * @method integer getReverseShell() 获取反弹shell
 * @method void setReverseShell(integer $ReverseShell) 设置反弹shell
 * @method integer getBash() 获取高危命令
 * @method void setBash(integer $Bash) 设置高危命令
 * @method integer getPrivilegeEscalation() 获取本地提权
 * @method void setPrivilegeEscalation(integer $PrivilegeEscalation) 设置本地提权
 * @method integer getMalware() 获取木马
 * @method void setMalware(integer $Malware) 设置木马
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMachineRiskCntResponse extends AbstractModel
{
    /**
     * @var integer 异地登录
     */
    public $HostLogin;

    /**
     * @var integer 密码破解
     */
    public $BruteAttack;

    /**
     * @var integer 恶意请求
     */
    public $MaliciousRequest;

    /**
     * @var integer 反弹shell
     */
    public $ReverseShell;

    /**
     * @var integer 高危命令
     */
    public $Bash;

    /**
     * @var integer 本地提权
     */
    public $PrivilegeEscalation;

    /**
     * @var integer 木马
     */
    public $Malware;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $HostLogin 异地登录
     * @param integer $BruteAttack 密码破解
     * @param integer $MaliciousRequest 恶意请求
     * @param integer $ReverseShell 反弹shell
     * @param integer $Bash 高危命令
     * @param integer $PrivilegeEscalation 本地提权
     * @param integer $Malware 木马
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("HostLogin",$param) and $param["HostLogin"] !== null) {
            $this->HostLogin = $param["HostLogin"];
        }

        if (array_key_exists("BruteAttack",$param) and $param["BruteAttack"] !== null) {
            $this->BruteAttack = $param["BruteAttack"];
        }

        if (array_key_exists("MaliciousRequest",$param) and $param["MaliciousRequest"] !== null) {
            $this->MaliciousRequest = $param["MaliciousRequest"];
        }

        if (array_key_exists("ReverseShell",$param) and $param["ReverseShell"] !== null) {
            $this->ReverseShell = $param["ReverseShell"];
        }

        if (array_key_exists("Bash",$param) and $param["Bash"] !== null) {
            $this->Bash = $param["Bash"];
        }

        if (array_key_exists("PrivilegeEscalation",$param) and $param["PrivilegeEscalation"] !== null) {
            $this->PrivilegeEscalation = $param["PrivilegeEscalation"];
        }

        if (array_key_exists("Malware",$param) and $param["Malware"] !== null) {
            $this->Malware = $param["Malware"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
