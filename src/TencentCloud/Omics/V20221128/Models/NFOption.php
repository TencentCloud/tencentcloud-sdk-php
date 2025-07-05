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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Nextflow选项。
 *
 * @method string getConfig() 获取Config。
 * @method void setConfig(string $Config) 设置Config。
 * @method string getProfile() 获取Profile。
 * @method void setProfile(string $Profile) 设置Profile。
 * @method boolean getReport() 获取Report。
 * @method void setReport(boolean $Report) 设置Report。
 * @method boolean getResume() 获取Resume。
 * @method void setResume(boolean $Resume) 设置Resume。
 * @method string getNFVersion() 获取Nextflow引擎版本，取值范围：
- 22.10.7
- 23.10.1
 * @method void setNFVersion(string $NFVersion) 设置Nextflow引擎版本，取值范围：
- 22.10.7
- 23.10.1
 * @method string getLaunchDir() 获取启动路径。可填写指定缓存卷内的绝对路径，nextflow run 命令将在此路径执行。当WorkDir为COS路径时必填；当WorkDir为缓存卷路径时选填，不填默认使用WorkDir作为LaunchDir。
 * @method void setLaunchDir(string $LaunchDir) 设置启动路径。可填写指定缓存卷内的绝对路径，nextflow run 命令将在此路径执行。当WorkDir为COS路径时必填；当WorkDir为缓存卷路径时选填，不填默认使用WorkDir作为LaunchDir。
 */
class NFOption extends AbstractModel
{
    /**
     * @var string Config。
     */
    public $Config;

    /**
     * @var string Profile。
     */
    public $Profile;

    /**
     * @var boolean Report。
     */
    public $Report;

    /**
     * @var boolean Resume。
     */
    public $Resume;

    /**
     * @var string Nextflow引擎版本，取值范围：
- 22.10.7
- 23.10.1
     */
    public $NFVersion;

    /**
     * @var string 启动路径。可填写指定缓存卷内的绝对路径，nextflow run 命令将在此路径执行。当WorkDir为COS路径时必填；当WorkDir为缓存卷路径时选填，不填默认使用WorkDir作为LaunchDir。
     */
    public $LaunchDir;

    /**
     * @param string $Config Config。
     * @param string $Profile Profile。
     * @param boolean $Report Report。
     * @param boolean $Resume Resume。
     * @param string $NFVersion Nextflow引擎版本，取值范围：
- 22.10.7
- 23.10.1
     * @param string $LaunchDir 启动路径。可填写指定缓存卷内的绝对路径，nextflow run 命令将在此路径执行。当WorkDir为COS路径时必填；当WorkDir为缓存卷路径时选填，不填默认使用WorkDir作为LaunchDir。
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
        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("Report",$param) and $param["Report"] !== null) {
            $this->Report = $param["Report"];
        }

        if (array_key_exists("Resume",$param) and $param["Resume"] !== null) {
            $this->Resume = $param["Resume"];
        }

        if (array_key_exists("NFVersion",$param) and $param["NFVersion"] !== null) {
            $this->NFVersion = $param["NFVersion"];
        }

        if (array_key_exists("LaunchDir",$param) and $param["LaunchDir"] !== null) {
            $this->LaunchDir = $param["LaunchDir"];
        }
    }
}
