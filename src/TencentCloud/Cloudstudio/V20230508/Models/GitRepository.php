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
namespace TencentCloud\Cloudstudio\V20230508\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Git 仓库
 *
 * @method string getUrl() 获取Git 仓库地址
 * @method void setUrl(string $Url) 设置Git 仓库地址
 * @method string getBranch() 获取Git 仓库分支名或 Tag 名
 * @method void setBranch(string $Branch) 设置Git 仓库分支名或 Tag 名
 */
class GitRepository extends AbstractModel
{
    /**
     * @var string Git 仓库地址
     */
    public $Url;

    /**
     * @var string Git 仓库分支名或 Tag 名
     */
    public $Branch;

    /**
     * @param string $Url Git 仓库地址
     * @param string $Branch Git 仓库分支名或 Tag 名
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Branch",$param) and $param["Branch"] !== null) {
            $this->Branch = $param["Branch"];
        }
    }
}
