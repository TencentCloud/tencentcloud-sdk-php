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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestoreClusterSnapshot请求参数结构体
 *
 * @method string getInstanceId() 获取<p>集群实例Id，格式：es-xxxx</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>集群实例Id，格式：es-xxxx</p>
 * @method string getRepositoryName() 获取<p>仓库名称</p>
 * @method void setRepositoryName(string $RepositoryName) 设置<p>仓库名称</p>
 * @method string getSnapshotName() 获取<p>集群快照名称</p>
 * @method void setSnapshotName(string $SnapshotName) 设置<p>集群快照名称</p>
 * @method string getTargetInstanceId() 获取<p>目标集群实例Id，格式：es-xxxx，如果是恢复到本地，则和InstanceId一致</p>
 * @method void setTargetInstanceId(string $TargetInstanceId) 设置<p>目标集群实例Id，格式：es-xxxx，如果是恢复到本地，则和InstanceId一致</p>
 * @method string getPassword() 获取<p>elastic用户名对应的密码信息</p>
 * @method void setPassword(string $Password) 设置<p>elastic用户名对应的密码信息</p>
 * @method string getIndexSettings() 获取<p>要在所有恢复的索引中添加或更改的设置的逗号分隔列表。使用此参数可以在恢复快照时覆盖索引设置。</p>
 * @method void setIndexSettings(string $IndexSettings) 设置<p>要在所有恢复的索引中添加或更改的设置的逗号分隔列表。使用此参数可以在恢复快照时覆盖索引设置。</p>
 * @method array getIncludeGlobalState() 获取<p>不应从快照还原的以逗号分隔的索引设置列表。</p>
 * @method void setIncludeGlobalState(array $IncludeGlobalState) 设置<p>不应从快照还原的以逗号分隔的索引设置列表。</p>
 * @method string getIndices() 获取<p>需要恢复的索引名称，非必填，为空则表示恢复所有</p><p>支持传多个索引名称</p>
 * @method void setIndices(string $Indices) 设置<p>需要恢复的索引名称，非必填，为空则表示恢复所有</p><p>支持传多个索引名称</p>
 * @method string getPartial() 获取<p>如果为 false，则如果快照中包含的一个或多个索引没有所有主分片可用，则整个恢复操作将失败。默认为 false,</p><p>如果为 true，则允许恢复具有不可用分片的索引的部分快照。只有成功包含在快照中的分片才会被恢复。所有丢失的碎片将被重新创建为空</p>
 * @method void setPartial(string $Partial) 设置<p>如果为 false，则如果快照中包含的一个或多个索引没有所有主分片可用，则整个恢复操作将失败。默认为 false,</p><p>如果为 true，则允许恢复具有不可用分片的索引的部分快照。只有成功包含在快照中的分片才会被恢复。所有丢失的碎片将被重新创建为空</p>
 * @method string getMaxRestorePerSec() 获取<p>快照恢复速率（单位mb）</p>
 * @method void setMaxRestorePerSec(string $MaxRestorePerSec) 设置<p>快照恢复速率（单位mb）</p>
 */
class RestoreClusterSnapshotRequest extends AbstractModel
{
    /**
     * @var string <p>集群实例Id，格式：es-xxxx</p>
     */
    public $InstanceId;

    /**
     * @var string <p>仓库名称</p>
     */
    public $RepositoryName;

    /**
     * @var string <p>集群快照名称</p>
     */
    public $SnapshotName;

    /**
     * @var string <p>目标集群实例Id，格式：es-xxxx，如果是恢复到本地，则和InstanceId一致</p>
     */
    public $TargetInstanceId;

    /**
     * @var string <p>elastic用户名对应的密码信息</p>
     */
    public $Password;

    /**
     * @var string <p>要在所有恢复的索引中添加或更改的设置的逗号分隔列表。使用此参数可以在恢复快照时覆盖索引设置。</p>
     */
    public $IndexSettings;

    /**
     * @var array <p>不应从快照还原的以逗号分隔的索引设置列表。</p>
     */
    public $IncludeGlobalState;

    /**
     * @var string <p>需要恢复的索引名称，非必填，为空则表示恢复所有</p><p>支持传多个索引名称</p>
     */
    public $Indices;

    /**
     * @var string <p>如果为 false，则如果快照中包含的一个或多个索引没有所有主分片可用，则整个恢复操作将失败。默认为 false,</p><p>如果为 true，则允许恢复具有不可用分片的索引的部分快照。只有成功包含在快照中的分片才会被恢复。所有丢失的碎片将被重新创建为空</p>
     */
    public $Partial;

    /**
     * @var string <p>快照恢复速率（单位mb）</p>
     */
    public $MaxRestorePerSec;

    /**
     * @param string $InstanceId <p>集群实例Id，格式：es-xxxx</p>
     * @param string $RepositoryName <p>仓库名称</p>
     * @param string $SnapshotName <p>集群快照名称</p>
     * @param string $TargetInstanceId <p>目标集群实例Id，格式：es-xxxx，如果是恢复到本地，则和InstanceId一致</p>
     * @param string $Password <p>elastic用户名对应的密码信息</p>
     * @param string $IndexSettings <p>要在所有恢复的索引中添加或更改的设置的逗号分隔列表。使用此参数可以在恢复快照时覆盖索引设置。</p>
     * @param array $IncludeGlobalState <p>不应从快照还原的以逗号分隔的索引设置列表。</p>
     * @param string $Indices <p>需要恢复的索引名称，非必填，为空则表示恢复所有</p><p>支持传多个索引名称</p>
     * @param string $Partial <p>如果为 false，则如果快照中包含的一个或多个索引没有所有主分片可用，则整个恢复操作将失败。默认为 false,</p><p>如果为 true，则允许恢复具有不可用分片的索引的部分快照。只有成功包含在快照中的分片才会被恢复。所有丢失的碎片将被重新创建为空</p>
     * @param string $MaxRestorePerSec <p>快照恢复速率（单位mb）</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RepositoryName",$param) and $param["RepositoryName"] !== null) {
            $this->RepositoryName = $param["RepositoryName"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("TargetInstanceId",$param) and $param["TargetInstanceId"] !== null) {
            $this->TargetInstanceId = $param["TargetInstanceId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("IndexSettings",$param) and $param["IndexSettings"] !== null) {
            $this->IndexSettings = $param["IndexSettings"];
        }

        if (array_key_exists("IncludeGlobalState",$param) and $param["IncludeGlobalState"] !== null) {
            $this->IncludeGlobalState = $param["IncludeGlobalState"];
        }

        if (array_key_exists("Indices",$param) and $param["Indices"] !== null) {
            $this->Indices = $param["Indices"];
        }

        if (array_key_exists("Partial",$param) and $param["Partial"] !== null) {
            $this->Partial = $param["Partial"];
        }

        if (array_key_exists("MaxRestorePerSec",$param) and $param["MaxRestorePerSec"] !== null) {
            $this->MaxRestorePerSec = $param["MaxRestorePerSec"];
        }
    }
}
