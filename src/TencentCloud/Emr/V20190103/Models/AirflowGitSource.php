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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * airflow dag目录git源配置
 *
 * @method string getRepositoryUrl() 获取<p>git仓库URL</p>
 * @method void setRepositoryUrl(string $RepositoryUrl) 设置<p>git仓库URL</p>
 * @method string getRef() 获取<p>DAG跟踪分支/TAG</p>
 * @method void setRef(string $Ref) 设置<p>DAG跟踪分支/TAG</p>
 * @method string getDirectory() 获取<p>DAG挂载目录</p>
 * @method void setDirectory(string $Directory) 设置<p>DAG挂载目录</p>
 */
class AirflowGitSource extends AbstractModel
{
    /**
     * @var string <p>git仓库URL</p>
     */
    public $RepositoryUrl;

    /**
     * @var string <p>DAG跟踪分支/TAG</p>
     */
    public $Ref;

    /**
     * @var string <p>DAG挂载目录</p>
     */
    public $Directory;

    /**
     * @param string $RepositoryUrl <p>git仓库URL</p>
     * @param string $Ref <p>DAG跟踪分支/TAG</p>
     * @param string $Directory <p>DAG挂载目录</p>
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
        if (array_key_exists("RepositoryUrl",$param) and $param["RepositoryUrl"] !== null) {
            $this->RepositoryUrl = $param["RepositoryUrl"];
        }

        if (array_key_exists("Ref",$param) and $param["Ref"] !== null) {
            $this->Ref = $param["Ref"];
        }

        if (array_key_exists("Directory",$param) and $param["Directory"] !== null) {
            $this->Directory = $param["Directory"];
        }
    }
}
