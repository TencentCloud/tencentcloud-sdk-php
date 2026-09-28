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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * git配置
 *
 * @method SparseCheckoutConfig getSparseCheckout() 获取<p>检出规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparseCheckout(SparseCheckoutConfig $SparseCheckout) 设置<p>检出规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepoUrl() 获取<p>Git 仓库地址</p>
 * @method void setRepoUrl(string $RepoUrl) 设置<p>Git 仓库地址</p>
 * @method string getBranch() 获取<p>分支名</p>
 * @method void setBranch(string $Branch) 设置<p>分支名</p>
 * @method string getAuthConfigName() 获取<p>关联的 gitAuth 配置名称</p>
 * @method void setAuthConfigName(string $AuthConfigName) 设置<p>关联的 gitAuth 配置名称</p>
 */
class GitRepoConfig extends AbstractModel
{
    /**
     * @var SparseCheckoutConfig <p>检出规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparseCheckout;

    /**
     * @var string <p>Git 仓库地址</p>
     */
    public $RepoUrl;

    /**
     * @var string <p>分支名</p>
     */
    public $Branch;

    /**
     * @var string <p>关联的 gitAuth 配置名称</p>
     */
    public $AuthConfigName;

    /**
     * @param SparseCheckoutConfig $SparseCheckout <p>检出规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepoUrl <p>Git 仓库地址</p>
     * @param string $Branch <p>分支名</p>
     * @param string $AuthConfigName <p>关联的 gitAuth 配置名称</p>
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
        if (array_key_exists("SparseCheckout",$param) and $param["SparseCheckout"] !== null) {
            $this->SparseCheckout = new SparseCheckoutConfig();
            $this->SparseCheckout->deserialize($param["SparseCheckout"]);
        }

        if (array_key_exists("RepoUrl",$param) and $param["RepoUrl"] !== null) {
            $this->RepoUrl = $param["RepoUrl"];
        }

        if (array_key_exists("Branch",$param) and $param["Branch"] !== null) {
            $this->Branch = $param["Branch"];
        }

        if (array_key_exists("AuthConfigName",$param) and $param["AuthConfigName"] !== null) {
            $this->AuthConfigName = $param["AuthConfigName"];
        }
    }
}
