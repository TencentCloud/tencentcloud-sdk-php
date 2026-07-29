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
 * 云应用静态托管配置
 *
 * @method string getFramework() 获取框架类型：vue、react、nextjs 等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFramework(string $Framework) 设置框架类型：vue、react、nextjs 等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeJsVersion() 获取Node.js 版本，默认 20
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeJsVersion(string $NodeJsVersion) 设置Node.js 版本，默认 20
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppPath() 获取访问路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppPath(string $AppPath) 设置访问路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBuildPath() 获取构建目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuildPath(string $BuildPath) 设置构建目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZipFileUrl() 获取ZIP 文件地址（BuildType=ZIP/TEMPLATE 时使用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZipFileUrl(string $ZipFileUrl) 设置ZIP 文件地址（BuildType=ZIP/TEMPLATE 时使用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosTimestamp() 获取COS 时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosTimestamp(string $CosTimestamp) 设置COS 时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosSuffix() 获取COS 文件后缀
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosSuffix(string $CosSuffix) 设置COS 文件后缀
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeSource() 获取代码源平台：github、gitlab、gitee
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeSource(string $CodeSource) 设置代码源平台：github、gitlab、gitee
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeRepo() 获取代码仓库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeRepo(string $CodeRepo) 设置代码仓库
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeBranch() 获取代码分支
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeBranch(string $CodeBranch) 设置代码分支
注意：此字段可能返回 null，表示取不到有效值。
 * @method StaticCmd getStaticCmd() 获取构建参数 JSON 字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStaticCmd(StaticCmd $StaticCmd) 设置构建参数 JSON 字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method StaticEnvironment getStaticEnv() 获取构建环境变量 JSON 字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStaticEnv(StaticEnvironment $StaticEnv) 设置构建环境变量 JSON 字符串
注意：此字段可能返回 null，表示取不到有效值。
 */
class StaticConfig extends AbstractModel
{
    /**
     * @var string 框架类型：vue、react、nextjs 等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Framework;

    /**
     * @var string Node.js 版本，默认 20
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeJsVersion;

    /**
     * @var string 访问路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppPath;

    /**
     * @var string 构建目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuildPath;

    /**
     * @var string ZIP 文件地址（BuildType=ZIP/TEMPLATE 时使用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZipFileUrl;

    /**
     * @var string COS 时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosTimestamp;

    /**
     * @var string COS 文件后缀
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosSuffix;

    /**
     * @var string 代码源平台：github、gitlab、gitee
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeSource;

    /**
     * @var string 代码仓库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeRepo;

    /**
     * @var string 代码分支
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeBranch;

    /**
     * @var StaticCmd 构建参数 JSON 字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StaticCmd;

    /**
     * @var StaticEnvironment 构建环境变量 JSON 字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StaticEnv;

    /**
     * @param string $Framework 框架类型：vue、react、nextjs 等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeJsVersion Node.js 版本，默认 20
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppPath 访问路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BuildPath 构建目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZipFileUrl ZIP 文件地址（BuildType=ZIP/TEMPLATE 时使用）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosTimestamp COS 时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosSuffix COS 文件后缀
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeSource 代码源平台：github、gitlab、gitee
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeRepo 代码仓库
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeBranch 代码分支
注意：此字段可能返回 null，表示取不到有效值。
     * @param StaticCmd $StaticCmd 构建参数 JSON 字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param StaticEnvironment $StaticEnv 构建环境变量 JSON 字符串
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
        if (array_key_exists("Framework",$param) and $param["Framework"] !== null) {
            $this->Framework = $param["Framework"];
        }

        if (array_key_exists("NodeJsVersion",$param) and $param["NodeJsVersion"] !== null) {
            $this->NodeJsVersion = $param["NodeJsVersion"];
        }

        if (array_key_exists("AppPath",$param) and $param["AppPath"] !== null) {
            $this->AppPath = $param["AppPath"];
        }

        if (array_key_exists("BuildPath",$param) and $param["BuildPath"] !== null) {
            $this->BuildPath = $param["BuildPath"];
        }

        if (array_key_exists("ZipFileUrl",$param) and $param["ZipFileUrl"] !== null) {
            $this->ZipFileUrl = $param["ZipFileUrl"];
        }

        if (array_key_exists("CosTimestamp",$param) and $param["CosTimestamp"] !== null) {
            $this->CosTimestamp = $param["CosTimestamp"];
        }

        if (array_key_exists("CosSuffix",$param) and $param["CosSuffix"] !== null) {
            $this->CosSuffix = $param["CosSuffix"];
        }

        if (array_key_exists("CodeSource",$param) and $param["CodeSource"] !== null) {
            $this->CodeSource = $param["CodeSource"];
        }

        if (array_key_exists("CodeRepo",$param) and $param["CodeRepo"] !== null) {
            $this->CodeRepo = $param["CodeRepo"];
        }

        if (array_key_exists("CodeBranch",$param) and $param["CodeBranch"] !== null) {
            $this->CodeBranch = $param["CodeBranch"];
        }

        if (array_key_exists("StaticCmd",$param) and $param["StaticCmd"] !== null) {
            $this->StaticCmd = new StaticCmd();
            $this->StaticCmd->deserialize($param["StaticCmd"]);
        }

        if (array_key_exists("StaticEnv",$param) and $param["StaticEnv"] !== null) {
            $this->StaticEnv = new StaticEnvironment();
            $this->StaticEnv->deserialize($param["StaticEnv"]);
        }
    }
}
