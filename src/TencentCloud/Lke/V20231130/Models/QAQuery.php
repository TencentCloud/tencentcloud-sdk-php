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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QA查询参数
 *
 * @method integer getPageNumber() 获取<p>页码 从1开始</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码 从1开始</p>
 * @method integer getPageSize() 获取<p>页大小 默认15 最大100</p>
 * @method void setPageSize(integer $PageSize) 设置<p>页大小 默认15 最大100</p>
 * @method string getBotBizId() 获取<p>应用ID</p>
 * @method void setBotBizId(string $BotBizId) 设置<p>应用ID</p>
 * @method string getQuery() 获取<p>查询内容</p>
 * @method void setQuery(string $Query) 设置<p>查询内容</p>
 * @method string getCateBizId() 获取<p>分类ID</p>
 * @method void setCateBizId(string $CateBizId) 设置<p>分类ID</p>
 * @method array getAcceptStatus() 获取<p>校验状态的枚举值</p>
 * @method void setAcceptStatus(array $AcceptStatus) 设置<p>校验状态的枚举值</p>
 * @method array getReleaseStatus() 获取<p>发布状态的枚举值</p>
 * @method void setReleaseStatus(array $ReleaseStatus) 设置<p>发布状态的枚举值</p>
 * @method string getDocBizId() 获取<p>文档ID</p>
 * @method void setDocBizId(string $DocBizId) 设置<p>文档ID</p>
 * @method string getQaBizId() 获取<p>QAID</p>
 * @method void setQaBizId(string $QaBizId) 设置<p>QAID</p>
 * @method integer getSource() 获取<p>来源</p>
 * @method void setSource(integer $Source) 设置<p>来源</p>
 * @method string getQueryAnswer() 获取<p>查询答案</p>
 * @method void setQueryAnswer(string $QueryAnswer) 设置<p>查询答案</p>
 * @method string getQueryType() 获取<p>查询类型 filename 名称、 attribute 标签</p>
 * @method void setQueryType(string $QueryType) 设置<p>查询类型 filename 名称、 attribute 标签</p>
 * @method integer getEnableScope() 获取<p>问答生效域检索，不检索不传。枚举值如下：<br>1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效。</p>
 * @method void setEnableScope(integer $EnableScope) 设置<p>问答生效域检索，不检索不传。枚举值如下：<br>1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效。</p>
 * @method TimeRange getCreateTime() 获取<p>创建时间范围</p>
 * @method void setCreateTime(TimeRange $CreateTime) 设置<p>创建时间范围</p>
 * @method TimeRange getUpdateTime() 获取<p>更新时间范围</p>
 * @method void setUpdateTime(TimeRange $UpdateTime) 设置<p>更新时间范围</p>
 */
class QAQuery extends AbstractModel
{
    /**
     * @var integer <p>页码 从1开始</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>页大小 默认15 最大100</p>
     */
    public $PageSize;

    /**
     * @var string <p>应用ID</p>
     */
    public $BotBizId;

    /**
     * @var string <p>查询内容</p>
     */
    public $Query;

    /**
     * @var string <p>分类ID</p>
     */
    public $CateBizId;

    /**
     * @var array <p>校验状态的枚举值</p>
     */
    public $AcceptStatus;

    /**
     * @var array <p>发布状态的枚举值</p>
     */
    public $ReleaseStatus;

    /**
     * @var string <p>文档ID</p>
     */
    public $DocBizId;

    /**
     * @var string <p>QAID</p>
     */
    public $QaBizId;

    /**
     * @var integer <p>来源</p>
     */
    public $Source;

    /**
     * @var string <p>查询答案</p>
     */
    public $QueryAnswer;

    /**
     * @var string <p>查询类型 filename 名称、 attribute 标签</p>
     */
    public $QueryType;

    /**
     * @var integer <p>问答生效域检索，不检索不传。枚举值如下：<br>1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效。</p>
     */
    public $EnableScope;

    /**
     * @var TimeRange <p>创建时间范围</p>
     */
    public $CreateTime;

    /**
     * @var TimeRange <p>更新时间范围</p>
     */
    public $UpdateTime;

    /**
     * @param integer $PageNumber <p>页码 从1开始</p>
     * @param integer $PageSize <p>页大小 默认15 最大100</p>
     * @param string $BotBizId <p>应用ID</p>
     * @param string $Query <p>查询内容</p>
     * @param string $CateBizId <p>分类ID</p>
     * @param array $AcceptStatus <p>校验状态的枚举值</p>
     * @param array $ReleaseStatus <p>发布状态的枚举值</p>
     * @param string $DocBizId <p>文档ID</p>
     * @param string $QaBizId <p>QAID</p>
     * @param integer $Source <p>来源</p>
     * @param string $QueryAnswer <p>查询答案</p>
     * @param string $QueryType <p>查询类型 filename 名称、 attribute 标签</p>
     * @param integer $EnableScope <p>问答生效域检索，不检索不传。枚举值如下：<br>1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效。</p>
     * @param TimeRange $CreateTime <p>创建时间范围</p>
     * @param TimeRange $UpdateTime <p>更新时间范围</p>
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("AcceptStatus",$param) and $param["AcceptStatus"] !== null) {
            $this->AcceptStatus = $param["AcceptStatus"];
        }

        if (array_key_exists("ReleaseStatus",$param) and $param["ReleaseStatus"] !== null) {
            $this->ReleaseStatus = $param["ReleaseStatus"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("QaBizId",$param) and $param["QaBizId"] !== null) {
            $this->QaBizId = $param["QaBizId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("QueryAnswer",$param) and $param["QueryAnswer"] !== null) {
            $this->QueryAnswer = $param["QueryAnswer"];
        }

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("EnableScope",$param) and $param["EnableScope"] !== null) {
            $this->EnableScope = $param["EnableScope"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = new TimeRange();
            $this->CreateTime->deserialize($param["CreateTime"]);
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = new TimeRange();
            $this->UpdateTime->deserialize($param["UpdateTime"]);
        }
    }
}
