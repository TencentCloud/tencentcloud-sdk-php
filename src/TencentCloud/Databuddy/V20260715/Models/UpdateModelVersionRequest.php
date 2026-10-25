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
 * UpdateModelVersion请求参数结构体
 *
 * @method string getCatalogName() 获取<p>目录名称，必填</p>
 * @method void setCatalogName(string $CatalogName) 设置<p>目录名称，必填</p>
 * @method string getSchemaName() 获取<p>模式名称，必填</p>
 * @method void setSchemaName(string $SchemaName) 设置<p>模式名称，必填</p>
 * @method string getModelName() 获取<p>模型名称，必填</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称，必填</p>
 * @method integer getModelVersion() 获取<p>模型版本号，必填</p>
 * @method void setModelVersion(integer $ModelVersion) 设置<p>模型版本号，必填</p>
 * @method string getWorkspaceId() 获取<p>调用时所在workspace唯一id，必填</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>调用时所在workspace唯一id，必填</p>
 * @method array getAddedAliases() 获取<p>要添加的别名，可选</p>
 * @method void setAddedAliases(array $AddedAliases) 设置<p>要添加的别名，可选</p>
 * @method array getRemovedAliases() 获取<p>要移除的别名，可选</p>
 * @method void setRemovedAliases(array $RemovedAliases) 设置<p>要移除的别名，可选</p>
 * @method string getNewComment() 获取<p>新注释，可选，为空表示不修改注释</p>
 * @method void setNewComment(string $NewComment) 设置<p>新注释，可选，为空表示不修改注释</p>
 */
class UpdateModelVersionRequest extends AbstractModel
{
    /**
     * @var string <p>目录名称，必填</p>
     */
    public $CatalogName;

    /**
     * @var string <p>模式名称，必填</p>
     */
    public $SchemaName;

    /**
     * @var string <p>模型名称，必填</p>
     */
    public $ModelName;

    /**
     * @var integer <p>模型版本号，必填</p>
     */
    public $ModelVersion;

    /**
     * @var string <p>调用时所在workspace唯一id，必填</p>
     */
    public $WorkspaceId;

    /**
     * @var array <p>要添加的别名，可选</p>
     */
    public $AddedAliases;

    /**
     * @var array <p>要移除的别名，可选</p>
     */
    public $RemovedAliases;

    /**
     * @var string <p>新注释，可选，为空表示不修改注释</p>
     */
    public $NewComment;

    /**
     * @param string $CatalogName <p>目录名称，必填</p>
     * @param string $SchemaName <p>模式名称，必填</p>
     * @param string $ModelName <p>模型名称，必填</p>
     * @param integer $ModelVersion <p>模型版本号，必填</p>
     * @param string $WorkspaceId <p>调用时所在workspace唯一id，必填</p>
     * @param array $AddedAliases <p>要添加的别名，可选</p>
     * @param array $RemovedAliases <p>要移除的别名，可选</p>
     * @param string $NewComment <p>新注释，可选，为空表示不修改注释</p>
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
        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("AddedAliases",$param) and $param["AddedAliases"] !== null) {
            $this->AddedAliases = $param["AddedAliases"];
        }

        if (array_key_exists("RemovedAliases",$param) and $param["RemovedAliases"] !== null) {
            $this->RemovedAliases = $param["RemovedAliases"];
        }

        if (array_key_exists("NewComment",$param) and $param["NewComment"] !== null) {
            $this->NewComment = $param["NewComment"];
        }
    }
}
