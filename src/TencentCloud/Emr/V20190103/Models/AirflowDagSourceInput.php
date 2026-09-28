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
 * airflow dag源目录来源
 *
 * @method boolean getEnabled() 获取<p>是否支持dag共享源</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否支持dag共享源</p>
 * @method string getType() 获取<p>dag源类型</p><p>枚举值：</p><ul><li>CFS： CFS</li><li>GIT： Git</li></ul>
 * @method void setType(string $Type) 设置<p>dag源类型</p><p>枚举值：</p><ul><li>CFS： CFS</li><li>GIT： Git</li></ul>
 * @method AirflowCfsSource getCfs() 获取<p>cfs实例DAG源配置</p>
 * @method void setCfs(AirflowCfsSource $Cfs) 设置<p>cfs实例DAG源配置</p>
 * @method AirflowGitSource getGit() 获取<p>Git型DAG源配置</p>
 * @method void setGit(AirflowGitSource $Git) 设置<p>Git型DAG源配置</p>
 */
class AirflowDagSourceInput extends AbstractModel
{
    /**
     * @var boolean <p>是否支持dag共享源</p>
     */
    public $Enabled;

    /**
     * @var string <p>dag源类型</p><p>枚举值：</p><ul><li>CFS： CFS</li><li>GIT： Git</li></ul>
     */
    public $Type;

    /**
     * @var AirflowCfsSource <p>cfs实例DAG源配置</p>
     */
    public $Cfs;

    /**
     * @var AirflowGitSource <p>Git型DAG源配置</p>
     */
    public $Git;

    /**
     * @param boolean $Enabled <p>是否支持dag共享源</p>
     * @param string $Type <p>dag源类型</p><p>枚举值：</p><ul><li>CFS： CFS</li><li>GIT： Git</li></ul>
     * @param AirflowCfsSource $Cfs <p>cfs实例DAG源配置</p>
     * @param AirflowGitSource $Git <p>Git型DAG源配置</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Cfs",$param) and $param["Cfs"] !== null) {
            $this->Cfs = new AirflowCfsSource();
            $this->Cfs->deserialize($param["Cfs"]);
        }

        if (array_key_exists("Git",$param) and $param["Git"] !== null) {
            $this->Git = new AirflowGitSource();
            $this->Git->deserialize($param["Git"]);
        }
    }
}
