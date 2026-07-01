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
 * 定义进程网络规则内容结构，用于反弹Shell白名单场景，支持进程匹配 + IP/端口过滤
 *
 * @method RuleContentProcessInfo getProcess() 获取<p>当前进程</p>
 * @method void setProcess(RuleContentProcessInfo $Process) 设置<p>当前进程</p>
 * @method string getDstIP() 获取<p>目标IP（必填）: 支持单个IP/IP范围/CIDR, 支持IPv4和IPv6</p>
 * @method void setDstIP(string $DstIP) 设置<p>目标IP（必填）: 支持单个IP/IP范围/CIDR, 支持IPv4和IPv6</p>
 * @method RuleContentProcessInfo getParentProcess() 获取<p>父进程</p>
 * @method void setParentProcess(RuleContentProcessInfo $ParentProcess) 设置<p>父进程</p>
 * @method array getDstPorts() 获取<p>目标端口列表（可选）: 支持1-65535, 为空表示不限端口</p>
 * @method void setDstPorts(array $DstPorts) 设置<p>目标端口列表（可选）: 支持1-65535, 为空表示不限端口</p>
 */
class RuleContentProcessNetwork extends AbstractModel
{
    /**
     * @var RuleContentProcessInfo <p>当前进程</p>
     */
    public $Process;

    /**
     * @var string <p>目标IP（必填）: 支持单个IP/IP范围/CIDR, 支持IPv4和IPv6</p>
     */
    public $DstIP;

    /**
     * @var RuleContentProcessInfo <p>父进程</p>
     */
    public $ParentProcess;

    /**
     * @var array <p>目标端口列表（可选）: 支持1-65535, 为空表示不限端口</p>
     */
    public $DstPorts;

    /**
     * @param RuleContentProcessInfo $Process <p>当前进程</p>
     * @param string $DstIP <p>目标IP（必填）: 支持单个IP/IP范围/CIDR, 支持IPv4和IPv6</p>
     * @param RuleContentProcessInfo $ParentProcess <p>父进程</p>
     * @param array $DstPorts <p>目标端口列表（可选）: 支持1-65535, 为空表示不限端口</p>
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
        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = new RuleContentProcessInfo();
            $this->Process->deserialize($param["Process"]);
        }

        if (array_key_exists("DstIP",$param) and $param["DstIP"] !== null) {
            $this->DstIP = $param["DstIP"];
        }

        if (array_key_exists("ParentProcess",$param) and $param["ParentProcess"] !== null) {
            $this->ParentProcess = new RuleContentProcessInfo();
            $this->ParentProcess->deserialize($param["ParentProcess"]);
        }

        if (array_key_exists("DstPorts",$param) and $param["DstPorts"] !== null) {
            $this->DstPorts = $param["DstPorts"];
        }
    }
}
