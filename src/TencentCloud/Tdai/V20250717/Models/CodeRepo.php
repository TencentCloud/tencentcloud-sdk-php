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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 仓库信息
 *
 * @method string getRepoUrl() 获取代码仓库地址
 * @method void setRepoUrl(string $RepoUrl) 设置代码仓库地址
 * @method string getBranch() 获取分支名
 * @method void setBranch(string $Branch) 设置分支名
 * @method array getGitCommitPipelines() 获取Commit信息
 * @method void setGitCommitPipelines(array $GitCommitPipelines) 设置Commit信息
 * @method string getGitORMType() 获取数据库ORM类型
 * @method void setGitORMType(string $GitORMType) 设置数据库ORM类型
 * @method string getGitCodeLanguage() 获取代码编写语言
 * @method void setGitCodeLanguage(string $GitCodeLanguage) 设置代码编写语言
 */
class CodeRepo extends AbstractModel
{
    /**
     * @var string 代码仓库地址
     */
    public $RepoUrl;

    /**
     * @var string 分支名
     */
    public $Branch;

    /**
     * @var array Commit信息
     */
    public $GitCommitPipelines;

    /**
     * @var string 数据库ORM类型
     */
    public $GitORMType;

    /**
     * @var string 代码编写语言
     */
    public $GitCodeLanguage;

    /**
     * @param string $RepoUrl 代码仓库地址
     * @param string $Branch 分支名
     * @param array $GitCommitPipelines Commit信息
     * @param string $GitORMType 数据库ORM类型
     * @param string $GitCodeLanguage 代码编写语言
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
        if (array_key_exists("RepoUrl",$param) and $param["RepoUrl"] !== null) {
            $this->RepoUrl = $param["RepoUrl"];
        }

        if (array_key_exists("Branch",$param) and $param["Branch"] !== null) {
            $this->Branch = $param["Branch"];
        }

        if (array_key_exists("GitCommitPipelines",$param) and $param["GitCommitPipelines"] !== null) {
            $this->GitCommitPipelines = $param["GitCommitPipelines"];
        }

        if (array_key_exists("GitORMType",$param) and $param["GitORMType"] !== null) {
            $this->GitORMType = $param["GitORMType"];
        }

        if (array_key_exists("GitCodeLanguage",$param) and $param["GitCodeLanguage"] !== null) {
            $this->GitCodeLanguage = $param["GitCodeLanguage"];
        }
    }
}
