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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 待处理异常进程事件趋势
 *
 * @method string getDate() 获取日期
 * @method void setDate(string $Date) 设置日期
 * @method integer getProxyToolEventCount() 获取待处理代理软件事件数
 * @method void setProxyToolEventCount(integer $ProxyToolEventCount) 设置待处理代理软件事件数
 * @method integer getTransferControlEventCount() 获取待处理横向参透事件数
 * @method void setTransferControlEventCount(integer $TransferControlEventCount) 设置待处理横向参透事件数
 * @method integer getAttackCmdEventCount() 获取待处理恶意命令事件数
 * @method void setAttackCmdEventCount(integer $AttackCmdEventCount) 设置待处理恶意命令事件数
 * @method integer getReverseShellEventCount() 获取待处理反弹shell事件数
 * @method void setReverseShellEventCount(integer $ReverseShellEventCount) 设置待处理反弹shell事件数
 * @method integer getFilelessEventCount() 获取待处理无文件程序执行事件数
 * @method void setFilelessEventCount(integer $FilelessEventCount) 设置待处理无文件程序执行事件数
 * @method integer getRiskCmdEventCount() 获取待处理高危命令事件数
 * @method void setRiskCmdEventCount(integer $RiskCmdEventCount) 设置待处理高危命令事件数
 * @method integer getAbnormalChildProcessEventCount() 获取待处理敏感服务异常子进程启动事件数
 * @method void setAbnormalChildProcessEventCount(integer $AbnormalChildProcessEventCount) 设置待处理敏感服务异常子进程启动事件数
 * @method integer getUserDefinedRuleEventCount() 获取待处理自定义规则事件数
 * @method void setUserDefinedRuleEventCount(integer $UserDefinedRuleEventCount) 设置待处理自定义规则事件数
 */
class AbnormalProcessEventTendencyInfo extends AbstractModel
{
    /**
     * @var string 日期
     */
    public $Date;

    /**
     * @var integer 待处理代理软件事件数
     */
    public $ProxyToolEventCount;

    /**
     * @var integer 待处理横向参透事件数
     */
    public $TransferControlEventCount;

    /**
     * @var integer 待处理恶意命令事件数
     */
    public $AttackCmdEventCount;

    /**
     * @var integer 待处理反弹shell事件数
     */
    public $ReverseShellEventCount;

    /**
     * @var integer 待处理无文件程序执行事件数
     */
    public $FilelessEventCount;

    /**
     * @var integer 待处理高危命令事件数
     */
    public $RiskCmdEventCount;

    /**
     * @var integer 待处理敏感服务异常子进程启动事件数
     */
    public $AbnormalChildProcessEventCount;

    /**
     * @var integer 待处理自定义规则事件数
     */
    public $UserDefinedRuleEventCount;

    /**
     * @param string $Date 日期
     * @param integer $ProxyToolEventCount 待处理代理软件事件数
     * @param integer $TransferControlEventCount 待处理横向参透事件数
     * @param integer $AttackCmdEventCount 待处理恶意命令事件数
     * @param integer $ReverseShellEventCount 待处理反弹shell事件数
     * @param integer $FilelessEventCount 待处理无文件程序执行事件数
     * @param integer $RiskCmdEventCount 待处理高危命令事件数
     * @param integer $AbnormalChildProcessEventCount 待处理敏感服务异常子进程启动事件数
     * @param integer $UserDefinedRuleEventCount 待处理自定义规则事件数
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("ProxyToolEventCount",$param) and $param["ProxyToolEventCount"] !== null) {
            $this->ProxyToolEventCount = $param["ProxyToolEventCount"];
        }

        if (array_key_exists("TransferControlEventCount",$param) and $param["TransferControlEventCount"] !== null) {
            $this->TransferControlEventCount = $param["TransferControlEventCount"];
        }

        if (array_key_exists("AttackCmdEventCount",$param) and $param["AttackCmdEventCount"] !== null) {
            $this->AttackCmdEventCount = $param["AttackCmdEventCount"];
        }

        if (array_key_exists("ReverseShellEventCount",$param) and $param["ReverseShellEventCount"] !== null) {
            $this->ReverseShellEventCount = $param["ReverseShellEventCount"];
        }

        if (array_key_exists("FilelessEventCount",$param) and $param["FilelessEventCount"] !== null) {
            $this->FilelessEventCount = $param["FilelessEventCount"];
        }

        if (array_key_exists("RiskCmdEventCount",$param) and $param["RiskCmdEventCount"] !== null) {
            $this->RiskCmdEventCount = $param["RiskCmdEventCount"];
        }

        if (array_key_exists("AbnormalChildProcessEventCount",$param) and $param["AbnormalChildProcessEventCount"] !== null) {
            $this->AbnormalChildProcessEventCount = $param["AbnormalChildProcessEventCount"];
        }

        if (array_key_exists("UserDefinedRuleEventCount",$param) and $param["UserDefinedRuleEventCount"] !== null) {
            $this->UserDefinedRuleEventCount = $param["UserDefinedRuleEventCount"];
        }
    }
}
