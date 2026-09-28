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
 * 文件节点
 *
 * @method FileMeta getNode() 获取<p>当前节点</p>
 * @method void setNode(FileMeta $Node) 设置<p>当前节点</p>
 * @method FileMeta getParent() 获取<p>父节点</p>
 * @method void setParent(FileMeta $Parent) 设置<p>父节点</p>
 * @method UserInfo getCreator() 获取<p>创建人</p>
 * @method void setCreator(UserInfo $Creator) 设置<p>创建人</p>
 * @method UserInfo getOwner() 获取<p>拥有者</p>
 * @method void setOwner(UserInfo $Owner) 设置<p>拥有者</p>
 * @method string getNodeType() 获取<p>节点类型</p>
 * @method void setNodeType(string $NodeType) 设置<p>节点类型</p>
 * @method string getOriginPath() 获取<p>原始路径</p>
 * @method void setOriginPath(string $OriginPath) 设置<p>原始路径</p>
 * @method string getDeleteTime() 获取<p>回收时间</p>
 * @method void setDeleteTime(string $DeleteTime) 设置<p>回收时间</p>
 * @method GitRepoConfig getGitConfig() 获取<p>文件git配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGitConfig(GitRepoConfig $GitConfig) 设置<p>文件git配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class FileNode extends AbstractModel
{
    /**
     * @var FileMeta <p>当前节点</p>
     */
    public $Node;

    /**
     * @var FileMeta <p>父节点</p>
     */
    public $Parent;

    /**
     * @var UserInfo <p>创建人</p>
     */
    public $Creator;

    /**
     * @var UserInfo <p>拥有者</p>
     */
    public $Owner;

    /**
     * @var string <p>节点类型</p>
     */
    public $NodeType;

    /**
     * @var string <p>原始路径</p>
     */
    public $OriginPath;

    /**
     * @var string <p>回收时间</p>
     */
    public $DeleteTime;

    /**
     * @var GitRepoConfig <p>文件git配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GitConfig;

    /**
     * @param FileMeta $Node <p>当前节点</p>
     * @param FileMeta $Parent <p>父节点</p>
     * @param UserInfo $Creator <p>创建人</p>
     * @param UserInfo $Owner <p>拥有者</p>
     * @param string $NodeType <p>节点类型</p>
     * @param string $OriginPath <p>原始路径</p>
     * @param string $DeleteTime <p>回收时间</p>
     * @param GitRepoConfig $GitConfig <p>文件git配置</p>
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
        if (array_key_exists("Node",$param) and $param["Node"] !== null) {
            $this->Node = new FileMeta();
            $this->Node->deserialize($param["Node"]);
        }

        if (array_key_exists("Parent",$param) and $param["Parent"] !== null) {
            $this->Parent = new FileMeta();
            $this->Parent->deserialize($param["Parent"]);
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = new UserInfo();
            $this->Creator->deserialize($param["Creator"]);
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new UserInfo();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("OriginPath",$param) and $param["OriginPath"] !== null) {
            $this->OriginPath = $param["OriginPath"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }

        if (array_key_exists("GitConfig",$param) and $param["GitConfig"] !== null) {
            $this->GitConfig = new GitRepoConfig();
            $this->GitConfig->deserialize($param["GitConfig"]);
        }
    }
}
