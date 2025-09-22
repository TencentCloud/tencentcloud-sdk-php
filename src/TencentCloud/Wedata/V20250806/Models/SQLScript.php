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
 * @method string getScriptId() 获取脚本id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptId(string $ScriptId) 设置脚本id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScriptName() 获取脚本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptName(string $ScriptName) 设置脚本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取脚本所有者 uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置脚本所有者 uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentFolderPath() 获取父文件夹path，/aaa/bbb/ccc
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentFolderPath(string $ParentFolderPath) 设置父文件夹path，/aaa/bbb/ccc
注意：此字段可能返回 null，表示取不到有效值。
 * @method SQLScriptConfig getScriptConfig() 获取脚本配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptConfig(SQLScriptConfig $ScriptConfig) 设置脚本配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScriptContent() 获取脚本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptContent(string $ScriptContent) 设置脚本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUserUin() 获取最近一次操作人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserUin(string $UpdateUserUin) 设置最近一次操作人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间 yyyy-MM-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间 yyyy-MM-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间 yyyy-MM-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间 yyyy-MM-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessScope() 获取权限范围：SHARED, PRIVATE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessScope(string $AccessScope) 设置权限范围：SHARED, PRIVATE
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取节点全路径，/aaa/bbb/ccc.ipynb，由各个节点的名称组成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置节点全路径，/aaa/bbb/ccc.ipynb，由各个节点的名称组成
注意：此字段可能返回 null，表示取不到有效值。
 */
class SQLScript extends AbstractModel
{
    /**
     * @var string 脚本id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptId;

    /**
     * @var string 脚本名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptName;

    /**
     * @var string 脚本所有者 uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 父文件夹path，/aaa/bbb/ccc
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentFolderPath;

    /**
     * @var SQLScriptConfig 脚本配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptConfig;

    /**
     * @var string 脚本内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptContent;

    /**
     * @var string 最近一次操作人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserUin;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 更新时间 yyyy-MM-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 创建时间 yyyy-MM-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 权限范围：SHARED, PRIVATE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessScope;

    /**
     * @var string 节点全路径，/aaa/bbb/ccc.ipynb，由各个节点的名称组成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @param string $ScriptId 脚本id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScriptName 脚本名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 脚本所有者 uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentFolderPath 父文件夹path，/aaa/bbb/ccc
注意：此字段可能返回 null，表示取不到有效值。
     * @param SQLScriptConfig $ScriptConfig 脚本配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScriptContent 脚本内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUserUin 最近一次操作人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间 yyyy-MM-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间 yyyy-MM-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessScope 权限范围：SHARED, PRIVATE
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path 节点全路径，/aaa/bbb/ccc.ipynb，由各个节点的名称组成
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
        if (array_key_exists("ScriptId",$param) and $param["ScriptId"] !== null) {
            $this->ScriptId = $param["ScriptId"];
        }

        if (array_key_exists("ScriptName",$param) and $param["ScriptName"] !== null) {
            $this->ScriptName = $param["ScriptName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("ScriptConfig",$param) and $param["ScriptConfig"] !== null) {
            $this->ScriptConfig = new SQLScriptConfig();
            $this->ScriptConfig->deserialize($param["ScriptConfig"]);
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
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
    }
}
