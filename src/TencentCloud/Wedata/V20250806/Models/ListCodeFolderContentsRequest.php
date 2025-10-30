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
 * ListCodeFolderContents请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getParentFolderPath() 获取父文件夹path，例如/aaa/bbb/ccc，路径头需带斜杠，根目录传/
 * @method void setParentFolderPath(string $ParentFolderPath) 设置父文件夹path，例如/aaa/bbb/ccc，路径头需带斜杠，根目录传/
 * @method string getKeyword() 获取文件夹名称/代码文件名称搜索
 * @method void setKeyword(string $Keyword) 设置文件夹名称/代码文件名称搜索
 * @method boolean getOnlyFolderNode() 获取只查询文件夹
 * @method void setOnlyFolderNode(boolean $OnlyFolderNode) 设置只查询文件夹
 * @method boolean getOnlyUserSelfScript() 获取是否只查询用户自己创建的代码文件
 * @method void setOnlyUserSelfScript(boolean $OnlyUserSelfScript) 设置是否只查询用户自己创建的代码文件
 */
class ListCodeFolderContentsRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 父文件夹path，例如/aaa/bbb/ccc，路径头需带斜杠，根目录传/
     */
    public $ParentFolderPath;

    /**
     * @var string 文件夹名称/代码文件名称搜索
     */
    public $Keyword;

    /**
     * @var boolean 只查询文件夹
     */
    public $OnlyFolderNode;

    /**
     * @var boolean 是否只查询用户自己创建的代码文件
     */
    public $OnlyUserSelfScript;

    /**
     * @param string $ProjectId 项目ID
     * @param string $ParentFolderPath 父文件夹path，例如/aaa/bbb/ccc，路径头需带斜杠，根目录传/
     * @param string $Keyword 文件夹名称/代码文件名称搜索
     * @param boolean $OnlyFolderNode 只查询文件夹
     * @param boolean $OnlyUserSelfScript 是否只查询用户自己创建的代码文件
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("OnlyFolderNode",$param) and $param["OnlyFolderNode"] !== null) {
            $this->OnlyFolderNode = $param["OnlyFolderNode"];
        }

        if (array_key_exists("OnlyUserSelfScript",$param) and $param["OnlyUserSelfScript"] !== null) {
            $this->OnlyUserSelfScript = $param["OnlyUserSelfScript"];
        }
    }
}
