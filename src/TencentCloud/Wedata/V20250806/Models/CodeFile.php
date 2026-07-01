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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据探索脚本业务处理实体
 *
 * @method string getCodeFileId() 获取<p>脚本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeFileId(string $CodeFileId) 设置<p>脚本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeFileName() 获取<p>脚本名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeFileName(string $CodeFileName) 设置<p>脚本名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取<p>脚本所有者 uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置<p>脚本所有者 uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CodeFileConfig getCodeFileConfig() 获取<p>脚本配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeFileConfig(CodeFileConfig $CodeFileConfig) 设置<p>脚本配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeFileContent() 获取<p>脚本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeFileContent(string $CodeFileContent) 设置<p>脚本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUserUin() 获取<p>最近一次操作人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserUin(string $UpdateUserUin) 设置<p>最近一次操作人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间 yyyy-MM-dd hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间 yyyy-MM-dd hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间 yyyy-MM-dd hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间 yyyy-MM-dd hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessScope() 获取<p>权限范围：SHARED, PRIVATE</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessScope(string $AccessScope) 设置<p>权限范围：SHARED, PRIVATE</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取<p>节点全路径，/aaa/bbb/ccc.ipynb，由各个节点的名称组成</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置<p>节点全路径，/aaa/bbb/ccc.ipynb，由各个节点的名称组成</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentFolderPath() 获取<p>父文件夹路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentFolderPath(string $ParentFolderPath) 设置<p>父文件夹路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionId() 获取<p>返回保存后的versionId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(string $VersionId) 设置<p>返回保存后的versionId</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CodeFile extends AbstractModel
{
    /**
     * @var string <p>脚本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeFileId;

    /**
     * @var string <p>脚本名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeFileName;

    /**
     * @var string <p>脚本所有者 uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var CodeFileConfig <p>脚本配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeFileConfig;

    /**
     * @var string <p>脚本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeFileContent;

    /**
     * @var string <p>最近一次操作人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserUin;

    /**
     * @var string <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>更新时间 yyyy-MM-dd hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>创建时间 yyyy-MM-dd hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>权限范围：SHARED, PRIVATE</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessScope;

    /**
     * @var string <p>节点全路径，/aaa/bbb/ccc.ipynb，由各个节点的名称组成</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string <p>父文件夹路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentFolderPath;

    /**
     * @var string <p>返回保存后的versionId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionId;

    /**
     * @param string $CodeFileId <p>脚本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeFileName <p>脚本名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin <p>脚本所有者 uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CodeFileConfig $CodeFileConfig <p>脚本配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeFileContent <p>脚本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUserUin <p>最近一次操作人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间 yyyy-MM-dd hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间 yyyy-MM-dd hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessScope <p>权限范围：SHARED, PRIVATE</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path <p>节点全路径，/aaa/bbb/ccc.ipynb，由各个节点的名称组成</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentFolderPath <p>父文件夹路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionId <p>返回保存后的versionId</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("CodeFileId",$param) and $param["CodeFileId"] !== null) {
            $this->CodeFileId = $param["CodeFileId"];
        }

        if (array_key_exists("CodeFileName",$param) and $param["CodeFileName"] !== null) {
            $this->CodeFileName = $param["CodeFileName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CodeFileConfig",$param) and $param["CodeFileConfig"] !== null) {
            $this->CodeFileConfig = new CodeFileConfig();
            $this->CodeFileConfig->deserialize($param["CodeFileConfig"]);
        }

        if (array_key_exists("CodeFileContent",$param) and $param["CodeFileContent"] !== null) {
            $this->CodeFileContent = $param["CodeFileContent"];
        }

        if (array_key_exists("UpdateUserUin",$param) and $param["UpdateUserUin"] !== null) {
            $this->UpdateUserUin = $param["UpdateUserUin"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AccessScope",$param) and $param["AccessScope"] !== null) {
            $this->AccessScope = $param["AccessScope"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }
    }
}
