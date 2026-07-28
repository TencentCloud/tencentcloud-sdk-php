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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 训练诊断工具配置
 *
 * @method boolean getEnableHangMonitor() 获取<p>是否开启 Hang 检测</p><p>默认值：false</p>
 * @method void setEnableHangMonitor(boolean $EnableHangMonitor) 设置<p>是否开启 Hang 检测</p><p>默认值：false</p>
 * @method array getHangMonitorNodes() 获取<p>Hang 检测的节点列表</p>
 * @method void setHangMonitorNodes(array $HangMonitorNodes) 设置<p>Hang 检测的节点列表</p>
 * @method integer getLogHangTimeoutInMinute() 获取<p>Hang 超时时间</p><p>取值范围：[1, 14400]</p><p>单位：分</p>
 * @method void setLogHangTimeoutInMinute(integer $LogHangTimeoutInMinute) 设置<p>Hang 超时时间</p><p>取值范围：[1, 14400]</p><p>单位：分</p>
 */
class TrainToolConfig extends AbstractModel
{
    /**
     * @var boolean <p>是否开启 Hang 检测</p><p>默认值：false</p>
     */
    public $EnableHangMonitor;

    /**
     * @var array <p>Hang 检测的节点列表</p>
     */
    public $HangMonitorNodes;

    /**
     * @var integer <p>Hang 超时时间</p><p>取值范围：[1, 14400]</p><p>单位：分</p>
     */
    public $LogHangTimeoutInMinute;

    /**
     * @param boolean $EnableHangMonitor <p>是否开启 Hang 检测</p><p>默认值：false</p>
     * @param array $HangMonitorNodes <p>Hang 检测的节点列表</p>
     * @param integer $LogHangTimeoutInMinute <p>Hang 超时时间</p><p>取值范围：[1, 14400]</p><p>单位：分</p>
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
        if (array_key_exists("EnableHangMonitor",$param) and $param["EnableHangMonitor"] !== null) {
            $this->EnableHangMonitor = $param["EnableHangMonitor"];
        }

        if (array_key_exists("HangMonitorNodes",$param) and $param["HangMonitorNodes"] !== null) {
            $this->HangMonitorNodes = $param["HangMonitorNodes"];
        }

        if (array_key_exists("LogHangTimeoutInMinute",$param) and $param["LogHangTimeoutInMinute"] !== null) {
            $this->LogHangTimeoutInMinute = $param["LogHangTimeoutInMinute"];
        }
    }
}
