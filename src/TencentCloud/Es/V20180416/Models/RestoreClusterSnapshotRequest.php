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
 * @method string getInstanceId() 获取集群实例Id，格式：es-xxxx
 * @method void setInstanceId(string $InstanceId) 设置集群实例Id，格式：es-xxxx
 * @method string getRepositoryName() 获取仓库名称
 * @method void setRepositoryName(string $RepositoryName) 设置仓库名称
 * @method string getSnapshotName() 获取集群快照名称
 * @method void setSnapshotName(string $SnapshotName) 设置集群快照名称
 * @method string getTargetInstanceId() 获取目标集群实例Id，格式：es-xxxx，如果是恢复到本地，则和InstanceId一致
 * @method void setTargetInstanceId(string $TargetInstanceId) 设置目标集群实例Id，格式：es-xxxx，如果是恢复到本地，则和InstanceId一致
 * @method string getPassword() 获取elastic用户名对应的密码信息
 * @method void setPassword(string $Password) 设置elastic用户名对应的密码信息
 * @method string getIndexSettings() 获取要在所有恢复的索引中添加或更改的设置的逗号分隔列表。使用此参数可以在恢复快照时覆盖索引设置。
 * @method void setIndexSettings(string $IndexSettings) 设置要在所有恢复的索引中添加或更改的设置的逗号分隔列表。使用此参数可以在恢复快照时覆盖索引设置。
 * @method array getIncludeGlobalState() 获取不应从快照还原的以逗号分隔的索引设置列表。
 * @method void setIncludeGlobalState(array $IncludeGlobalState) 设置不应从快照还原的以逗号分隔的索引设置列表。
 * @method string getIndices() 获取需要恢复的索引名称，非必填，为空则表示恢复所有

支持传多个索引名称
 * @method void setIndices(string $Indices) 设置需要恢复的索引名称，非必填，为空则表示恢复所有

支持传多个索引名称
 * @method string getPartial() 获取如果为 false，则如果快照中包含的一个或多个索引没有所有主分片可用，则整个恢复操作将失败。默认为 false,

如果为 true，则允许恢复具有不可用分片的索引的部分快照。只有成功包含在快照中的分片才会被恢复。所有丢失的碎片将被重新创建为空
 * @method void setPartial(string $Partial) 设置如果为 false，则如果快照中包含的一个或多个索引没有所有主分片可用，则整个恢复操作将失败。默认为 false,

如果为 true，则允许恢复具有不可用分片的索引的部分快照。只有成功包含在快照中的分片才会被恢复。所有丢失的碎片将被重新创建为空
 */
class RestoreClusterSnapshotRequest extends AbstractModel
{
    /**
     * @var string 集群实例Id，格式：es-xxxx
     */
    public $InstanceId;

    /**
     * @var string 仓库名称
     */
    public $RepositoryName;

    /**
     * @var string 集群快照名称
     */
    public $SnapshotName;

    /**
     * @var string 目标集群实例Id，格式：es-xxxx，如果是恢复到本地，则和InstanceId一致
     */
    public $TargetInstanceId;

    /**
     * @var string elastic用户名对应的密码信息
     */
    public $Password;

    /**
     * @var string 要在所有恢复的索引中添加或更改的设置的逗号分隔列表。使用此参数可以在恢复快照时覆盖索引设置。
     */
    public $IndexSettings;

    /**
     * @var array 不应从快照还原的以逗号分隔的索引设置列表。
     */
    public $IncludeGlobalState;

    /**
     * @var string 需要恢复的索引名称，非必填，为空则表示恢复所有

支持传多个索引名称
     */
    public $Indices;

    /**
     * @var string 如果为 false，则如果快照中包含的一个或多个索引没有所有主分片可用，则整个恢复操作将失败。默认为 false,

如果为 true，则允许恢复具有不可用分片的索引的部分快照。只有成功包含在快照中的分片才会被恢复。所有丢失的碎片将被重新创建为空
     */
    public $Partial;

    /**
     * @param string $InstanceId 集群实例Id，格式：es-xxxx
     * @param string $RepositoryName 仓库名称
     * @param string $SnapshotName 集群快照名称
     * @param string $TargetInstanceId 目标集群实例Id，格式：es-xxxx，如果是恢复到本地，则和InstanceId一致
     * @param string $Password elastic用户名对应的密码信息
     * @param string $IndexSettings 要在所有恢复的索引中添加或更改的设置的逗号分隔列表。使用此参数可以在恢复快照时覆盖索引设置。
     * @param array $IncludeGlobalState 不应从快照还原的以逗号分隔的索引设置列表。
     * @param string $Indices 需要恢复的索引名称，非必填，为空则表示恢复所有

支持传多个索引名称
     * @param string $Partial 如果为 false，则如果快照中包含的一个或多个索引没有所有主分片可用，则整个恢复操作将失败。默认为 false,

如果为 true，则允许恢复具有不可用分片的索引的部分快照。只有成功包含在快照中的分片才会被恢复。所有丢失的碎片将被重新创建为空
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
    }
}
