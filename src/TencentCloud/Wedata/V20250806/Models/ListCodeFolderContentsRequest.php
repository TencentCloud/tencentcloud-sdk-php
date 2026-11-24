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
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method string getParentFolderPath() 获取<p>父文件夹path，例如/aaa/bbb/ccc，路径头需带斜杠，根目录传/</p>
 * @method void setParentFolderPath(string $ParentFolderPath) 设置<p>父文件夹path，例如/aaa/bbb/ccc，路径头需带斜杠，根目录传/</p>
 * @method string getKeyword() 获取<p>文件夹名称/代码文件名称搜索</p>
 * @method void setKeyword(string $Keyword) 设置<p>文件夹名称/代码文件名称搜索</p>
 * @method boolean getOnlyFolderNode() 获取<p>只查询文件夹</p>
 * @method void setOnlyFolderNode(boolean $OnlyFolderNode) 设置<p>只查询文件夹</p>
 * @method boolean getOnlyUserSelfScript() 获取<p>是否只查询用户自己创建的代码文件</p>
 * @method void setOnlyUserSelfScript(boolean $OnlyUserSelfScript) 设置<p>是否只查询用户自己创建的代码文件</p>
 * @method boolean getSubmitStatusFilter() 获取<p>是否只查询提交状态为提交成功的文件</p><p>默认值：false</p>
 * @method void setSubmitStatusFilter(boolean $SubmitStatusFilter) 设置<p>是否只查询提交状态为提交成功的文件</p><p>默认值：false</p>
 */
class ListCodeFolderContentsRequest extends AbstractModel
{
    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>父文件夹path，例如/aaa/bbb/ccc，路径头需带斜杠，根目录传/</p>
     */
    public $ParentFolderPath;

    /**
     * @var string <p>文件夹名称/代码文件名称搜索</p>
     */
    public $Keyword;

    /**
     * @var boolean <p>只查询文件夹</p>
     */
    public $OnlyFolderNode;

    /**
     * @var boolean <p>是否只查询用户自己创建的代码文件</p>
     */
    public $OnlyUserSelfScript;

    /**
     * @var boolean <p>是否只查询提交状态为提交成功的文件</p><p>默认值：false</p>
     */
    public $SubmitStatusFilter;

    /**
     * @param string $ProjectId <p>项目ID</p>
     * @param string $ParentFolderPath <p>父文件夹path，例如/aaa/bbb/ccc，路径头需带斜杠，根目录传/</p>
     * @param string $Keyword <p>文件夹名称/代码文件名称搜索</p>
     * @param boolean $OnlyFolderNode <p>只查询文件夹</p>
     * @param boolean $OnlyUserSelfScript <p>是否只查询用户自己创建的代码文件</p>
     * @param boolean $SubmitStatusFilter <p>是否只查询提交状态为提交成功的文件</p><p>默认值：false</p>
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

        if (array_key_exists("SubmitStatusFilter",$param) and $param["SubmitStatusFilter"] !== null) {
            $this->SubmitStatusFilter = $param["SubmitStatusFilter"];
        }
    }
}
