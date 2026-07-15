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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 代码泄露详情
 *
 * @method integer getId() 获取<p>主键ID</p>
 * @method void setId(integer $Id) 设置<p>主键ID</p>
 * @method DisplayToolCommon getDisplayToolCommon() 获取<p>公共字段</p>
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置<p>公共字段</p>
 * @method string getName() 获取<p>事件名称</p>
 * @method void setName(string $Name) 设置<p>事件名称</p>
 * @method string getDescription() 获取<p>事件描述</p>
 * @method void setDescription(string $Description) 设置<p>事件描述</p>
 * @method string getSource() 获取<p>数据源</p>
 * @method void setSource(string $Source) 设置<p>数据源</p>
 * @method integer getRiskLevel() 获取<p>风险等级：1-低危 2-中危 3-高危 4-严重 5-误报</p>
 * @method void setRiskLevel(integer $RiskLevel) 设置<p>风险等级：1-低危 2-中危 3-高危 4-严重 5-误报</p>
 * @method string getHubName() 获取<p>仓库名称</p>
 * @method void setHubName(string $HubName) 设置<p>仓库名称</p>
 * @method string getUrl() 获取<p>链接</p>
 * @method void setUrl(string $Url) 设置<p>链接</p>
 * @method string getScreenshot() 获取<p>截图</p>
 * @method void setScreenshot(string $Screenshot) 设置<p>截图</p>
 * @method string getSuggestion() 获取<p>建议</p>
 * @method void setSuggestion(string $Suggestion) 设置<p>建议</p>
 * @method string getKeyword() 获取<p>关键词</p>
 * @method void setKeyword(string $Keyword) 设置<p>关键词</p>
 * @method integer getHandlingStatus() 获取<p>处置状态</p><p>枚举值：</p><ul><li>0： 待处理</li><li>1： 处理中</li><li>2： 已处理</li><li>3： 误报</li></ul>
 * @method void setHandlingStatus(integer $HandlingStatus) 设置<p>处置状态</p><p>枚举值：</p><ul><li>0： 待处理</li><li>1： 处理中</li><li>2： 已处理</li><li>3： 误报</li></ul>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getRepoNamespace() 获取<p>仓库命名空间</p>
 * @method void setRepoNamespace(string $RepoNamespace) 设置<p>仓库命名空间</p>
 * @method string getRepoName() 获取<p>仓库名称</p>
 * @method void setRepoName(string $RepoName) 设置<p>仓库名称</p>
 * @method string getAuthorName() 获取<p>作者名称</p>
 * @method void setAuthorName(string $AuthorName) 设置<p>作者名称</p>
 */
class DisplayLeakageCode extends AbstractModel
{
    /**
     * @var integer <p>主键ID</p>
     */
    public $Id;

    /**
     * @var DisplayToolCommon <p>公共字段</p>
     */
    public $DisplayToolCommon;

    /**
     * @var string <p>事件名称</p>
     */
    public $Name;

    /**
     * @var string <p>事件描述</p>
     */
    public $Description;

    /**
     * @var string <p>数据源</p>
     */
    public $Source;

    /**
     * @var integer <p>风险等级：1-低危 2-中危 3-高危 4-严重 5-误报</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>仓库名称</p>
     */
    public $HubName;

    /**
     * @var string <p>链接</p>
     */
    public $Url;

    /**
     * @var string <p>截图</p>
     */
    public $Screenshot;

    /**
     * @var string <p>建议</p>
     */
    public $Suggestion;

    /**
     * @var string <p>关键词</p>
     */
    public $Keyword;

    /**
     * @var integer <p>处置状态</p><p>枚举值：</p><ul><li>0： 待处理</li><li>1： 处理中</li><li>2： 已处理</li><li>3： 误报</li></ul>
     */
    public $HandlingStatus;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>仓库命名空间</p>
     */
    public $RepoNamespace;

    /**
     * @var string <p>仓库名称</p>
     */
    public $RepoName;

    /**
     * @var string <p>作者名称</p>
     */
    public $AuthorName;

    /**
     * @param integer $Id <p>主键ID</p>
     * @param DisplayToolCommon $DisplayToolCommon <p>公共字段</p>
     * @param string $Name <p>事件名称</p>
     * @param string $Description <p>事件描述</p>
     * @param string $Source <p>数据源</p>
     * @param integer $RiskLevel <p>风险等级：1-低危 2-中危 3-高危 4-严重 5-误报</p>
     * @param string $HubName <p>仓库名称</p>
     * @param string $Url <p>链接</p>
     * @param string $Screenshot <p>截图</p>
     * @param string $Suggestion <p>建议</p>
     * @param string $Keyword <p>关键词</p>
     * @param integer $HandlingStatus <p>处置状态</p><p>枚举值：</p><ul><li>0： 待处理</li><li>1： 处理中</li><li>2： 已处理</li><li>3： 误报</li></ul>
     * @param string $Remark <p>备注</p>
     * @param string $RepoNamespace <p>仓库命名空间</p>
     * @param string $RepoName <p>仓库名称</p>
     * @param string $AuthorName <p>作者名称</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DisplayToolCommon",$param) and $param["DisplayToolCommon"] !== null) {
            $this->DisplayToolCommon = new DisplayToolCommon();
            $this->DisplayToolCommon->deserialize($param["DisplayToolCommon"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("HubName",$param) and $param["HubName"] !== null) {
            $this->HubName = $param["HubName"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Screenshot",$param) and $param["Screenshot"] !== null) {
            $this->Screenshot = $param["Screenshot"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("HandlingStatus",$param) and $param["HandlingStatus"] !== null) {
            $this->HandlingStatus = $param["HandlingStatus"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RepoNamespace",$param) and $param["RepoNamespace"] !== null) {
            $this->RepoNamespace = $param["RepoNamespace"];
        }

        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("AuthorName",$param) and $param["AuthorName"] !== null) {
            $this->AuthorName = $param["AuthorName"];
        }
    }
}
