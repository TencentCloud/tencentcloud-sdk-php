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
 * 主机漏洞组件
 *
 * @method HostBriefInfo getHostInfo() 获取<p>主机简要信息</p>
 * @method void setHostInfo(HostBriefInfo $HostInfo) 设置<p>主机简要信息</p>
 * @method string getEffectVersion() 获取<p>受影响组件版本</p>
 * @method void setEffectVersion(string $EffectVersion) 设置<p>受影响组件版本</p>
 * @method string getPath() 获取<p>组件在主机上的安装路径</p>
 * @method void setPath(string $Path) 设置<p>组件在主机上的安装路径</p>
 * @method string getProcessID() 获取<p>关联进程 ID</p>
 * @method void setProcessID(string $ProcessID) 设置<p>关联进程 ID</p>
 * @method string getFixCommand() 获取<p>修复命令（仅展示）</p>
 * @method void setFixCommand(string $FixCommand) 设置<p>修复命令（仅展示）</p>
 * @method string getName() 获取<p>组件名字</p>
 * @method void setName(string $Name) 设置<p>组件名字</p>
 */
class HostVulComponent extends AbstractModel
{
    /**
     * @var HostBriefInfo <p>主机简要信息</p>
     */
    public $HostInfo;

    /**
     * @var string <p>受影响组件版本</p>
     */
    public $EffectVersion;

    /**
     * @var string <p>组件在主机上的安装路径</p>
     */
    public $Path;

    /**
     * @var string <p>关联进程 ID</p>
     */
    public $ProcessID;

    /**
     * @var string <p>修复命令（仅展示）</p>
     */
    public $FixCommand;

    /**
     * @var string <p>组件名字</p>
     */
    public $Name;

    /**
     * @param HostBriefInfo $HostInfo <p>主机简要信息</p>
     * @param string $EffectVersion <p>受影响组件版本</p>
     * @param string $Path <p>组件在主机上的安装路径</p>
     * @param string $ProcessID <p>关联进程 ID</p>
     * @param string $FixCommand <p>修复命令（仅展示）</p>
     * @param string $Name <p>组件名字</p>
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
        if (array_key_exists("HostInfo",$param) and $param["HostInfo"] !== null) {
            $this->HostInfo = new HostBriefInfo();
            $this->HostInfo->deserialize($param["HostInfo"]);
        }

        if (array_key_exists("EffectVersion",$param) and $param["EffectVersion"] !== null) {
            $this->EffectVersion = $param["EffectVersion"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("ProcessID",$param) and $param["ProcessID"] !== null) {
            $this->ProcessID = $param["ProcessID"];
        }

        if (array_key_exists("FixCommand",$param) and $param["FixCommand"] !== null) {
            $this->FixCommand = $param["FixCommand"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
