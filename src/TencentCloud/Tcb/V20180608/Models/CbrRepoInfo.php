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
 * 仓库信息
 *
 * @method string getRepo() 获取仓库名称
 * @method void setRepo(string $Repo) 设置仓库名称
 * @method string getRepoType() 获取仓库平台
 * @method void setRepoType(string $RepoType) 设置仓库平台
 * @method string getRepoLanguage() 获取仓库语言
 * @method void setRepoLanguage(string $RepoLanguage) 设置仓库语言
 * @method string getBranch() 获取分支名称
 * @method void setBranch(string $Branch) 设置分支名称
 */
class CbrRepoInfo extends AbstractModel
{
    /**
     * @var string 仓库名称
     */
    public $Repo;

    /**
     * @var string 仓库平台
     */
    public $RepoType;

    /**
     * @var string 仓库语言
     */
    public $RepoLanguage;

    /**
     * @var string 分支名称
     */
    public $Branch;

    /**
     * @param string $Repo 仓库名称
     * @param string $RepoType 仓库平台
     * @param string $RepoLanguage 仓库语言
     * @param string $Branch 分支名称
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
        if (array_key_exists("Repo",$param) and $param["Repo"] !== null) {
            $this->Repo = $param["Repo"];
        }

        if (array_key_exists("RepoType",$param) and $param["RepoType"] !== null) {
            $this->RepoType = $param["RepoType"];
        }

        if (array_key_exists("RepoLanguage",$param) and $param["RepoLanguage"] !== null) {
            $this->RepoLanguage = $param["RepoLanguage"];
        }

        if (array_key_exists("Branch",$param) and $param["Branch"] !== null) {
            $this->Branch = $param["Branch"];
        }
    }
}
