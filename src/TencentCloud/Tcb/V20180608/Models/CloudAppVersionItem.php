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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务版本信息
 *
 * @method string getVersionName() 获取<p>版本名</p>
 * @method void setVersionName(string $VersionName) 设置<p>版本名</p>
 * @method string getBuildType() 获取<p>构建方式</p>
 * @method void setBuildType(string $BuildType) 设置<p>构建方式</p>
 * @method string getBuildId() 获取<p>构建Id</p>
 * @method void setBuildId(string $BuildId) 设置<p>构建Id</p>
 * @method string getStatus() 获取<p>构建状态</p>
 * @method void setStatus(string $Status) 设置<p>构建状态</p>
 * @method string getFramework() 获取<p>框架名</p>
 * @method void setFramework(string $Framework) 设置<p>框架名</p>
 * @method StaticConfig getStaticConfig() 获取<p>构建配置</p>
 * @method void setStaticConfig(StaticConfig $StaticConfig) 设置<p>构建配置</p>
 * @method string getBuildTime() 获取<p>构建时间</p>
 * @method void setBuildTime(string $BuildTime) 设置<p>构建时间</p>
 * @method array getSteps() 获取<p>构建步骤</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSteps(array $Steps) 设置<p>构建步骤</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudAppVersionItem extends AbstractModel
{
    /**
     * @var string <p>版本名</p>
     */
    public $VersionName;

    /**
     * @var string <p>构建方式</p>
     */
    public $BuildType;

    /**
     * @var string <p>构建Id</p>
     */
    public $BuildId;

    /**
     * @var string <p>构建状态</p>
     */
    public $Status;

    /**
     * @var string <p>框架名</p>
     */
    public $Framework;

    /**
     * @var StaticConfig <p>构建配置</p>
     */
    public $StaticConfig;

    /**
     * @var string <p>构建时间</p>
     */
    public $BuildTime;

    /**
     * @var array <p>构建步骤</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Steps;

    /**
     * @param string $VersionName <p>版本名</p>
     * @param string $BuildType <p>构建方式</p>
     * @param string $BuildId <p>构建Id</p>
     * @param string $Status <p>构建状态</p>
     * @param string $Framework <p>框架名</p>
     * @param StaticConfig $StaticConfig <p>构建配置</p>
     * @param string $BuildTime <p>构建时间</p>
     * @param array $Steps <p>构建步骤</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("BuildType",$param) and $param["BuildType"] !== null) {
            $this->BuildType = $param["BuildType"];
        }

        if (array_key_exists("BuildId",$param) and $param["BuildId"] !== null) {
            $this->BuildId = $param["BuildId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Framework",$param) and $param["Framework"] !== null) {
            $this->Framework = $param["Framework"];
        }

        if (array_key_exists("StaticConfig",$param) and $param["StaticConfig"] !== null) {
            $this->StaticConfig = new StaticConfig();
            $this->StaticConfig->deserialize($param["StaticConfig"]);
        }

        if (array_key_exists("BuildTime",$param) and $param["BuildTime"] !== null) {
            $this->BuildTime = $param["BuildTime"];
        }

        if (array_key_exists("Steps",$param) and $param["Steps"] !== null) {
            $this->Steps = [];
            foreach ($param["Steps"] as $key => $value){
                $obj = new BuildStepStatus();
                $obj->deserialize($value);
                array_push($this->Steps, $obj);
            }
        }
    }
}
