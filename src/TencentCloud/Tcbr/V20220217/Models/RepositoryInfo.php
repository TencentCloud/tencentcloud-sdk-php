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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 代码仓库信息
 *
 * @method string getSource() 获取git source
 * @method void setSource(string $Source) 设置git source
 * @method string getRepo() 获取仓库名
 * @method void setRepo(string $Repo) 设置仓库名
 * @method string getBranch() 获取分支名
 * @method void setBranch(string $Branch) 设置分支名
 */
class RepositoryInfo extends AbstractModel
{
    /**
     * @var string git source
     */
    public $Source;

    /**
     * @var string 仓库名
     */
    public $Repo;

    /**
     * @var string 分支名
     */
    public $Branch;

    /**
     * @param string $Source git source
     * @param string $Repo 仓库名
     * @param string $Branch 分支名
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Repo",$param) and $param["Repo"] !== null) {
            $this->Repo = $param["Repo"];
        }

        if (array_key_exists("Branch",$param) and $param["Branch"] !== null) {
            $this->Branch = $param["Branch"];
        }
    }
}
