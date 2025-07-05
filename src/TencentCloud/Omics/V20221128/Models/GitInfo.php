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
 * Git信息。
 *
 * @method string getGitHttpPath() 获取Git地址。
 * @method void setGitHttpPath(string $GitHttpPath) 设置Git地址。
 * @method string getGitUserName() 获取Git用户名。
 * @method void setGitUserName(string $GitUserName) 设置Git用户名。
 * @method string getGitTokenOrPassword() 获取Git密码或者Token。
 * @method void setGitTokenOrPassword(string $GitTokenOrPassword) 设置Git密码或者Token。
 * @method string getBranch() 获取分支。
 * @method void setBranch(string $Branch) 设置分支。
 * @method string getTag() 获取标签。
 * @method void setTag(string $Tag) 设置标签。
 */
class GitInfo extends AbstractModel
{
    /**
     * @var string Git地址。
     */
    public $GitHttpPath;

    /**
     * @var string Git用户名。
     */
    public $GitUserName;

    /**
     * @var string Git密码或者Token。
     */
    public $GitTokenOrPassword;

    /**
     * @var string 分支。
     */
    public $Branch;

    /**
     * @var string 标签。
     */
    public $Tag;

    /**
     * @param string $GitHttpPath Git地址。
     * @param string $GitUserName Git用户名。
     * @param string $GitTokenOrPassword Git密码或者Token。
     * @param string $Branch 分支。
     * @param string $Tag 标签。
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
        if (array_key_exists("GitHttpPath",$param) and $param["GitHttpPath"] !== null) {
            $this->GitHttpPath = $param["GitHttpPath"];
        }

        if (array_key_exists("GitUserName",$param) and $param["GitUserName"] !== null) {
            $this->GitUserName = $param["GitUserName"];
        }

        if (array_key_exists("GitTokenOrPassword",$param) and $param["GitTokenOrPassword"] !== null) {
            $this->GitTokenOrPassword = $param["GitTokenOrPassword"];
        }

        if (array_key_exists("Branch",$param) and $param["Branch"] !== null) {
            $this->Branch = $param["Branch"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
