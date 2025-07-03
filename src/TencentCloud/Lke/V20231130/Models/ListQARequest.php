<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * ListQA请求参数结构体
 *
 * @method string getBotBizId() 获取应用ID
 * @method void setBotBizId(string $BotBizId) 设置应用ID
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取每页大小
 * @method void setPageSize(integer $PageSize) 设置每页大小
 * @method string getQuery() 获取查询问题

输入特定标识 lke:system:untagged  将查询所有未关联标签的问答
 * @method void setQuery(string $Query) 设置查询问题

输入特定标识 lke:system:untagged  将查询所有未关联标签的问答
 * @method array getAcceptStatus() 获取校验状态(1未校验2采纳3不采纳)
 * @method void setAcceptStatus(array $AcceptStatus) 设置校验状态(1未校验2采纳3不采纳)
 * @method array getReleaseStatus() 获取发布状态(2待发布 3发布中 4已发布 7审核中 8审核失败 9人工申述中 11人工申述失败 12已过期 13超量失效 14超量失效恢复)
 * @method void setReleaseStatus(array $ReleaseStatus) 设置发布状态(2待发布 3发布中 4已发布 7审核中 8审核失败 9人工申述中 11人工申述失败 12已过期 13超量失效 14超量失效恢复)
 * @method string getDocBizId() 获取文档ID
 * @method void setDocBizId(string $DocBizId) 设置文档ID
 * @method integer getSource() 获取来源(1 文档生成 2 批量导入 3 手动添加)
 * @method void setSource(integer $Source) 设置来源(1 文档生成 2 批量导入 3 手动添加)
 * @method string getQueryAnswer() 获取查询答案
 * @method void setQueryAnswer(string $QueryAnswer) 设置查询答案
 * @method string getCateBizId() 获取分类ID
 * @method void setCateBizId(string $CateBizId) 设置分类ID
 * @method array getQaBizIds() 获取QA业务ID列表
 * @method void setQaBizIds(array $QaBizIds) 设置QA业务ID列表
 * @method string getQueryType() 获取查询类型 filename 名称、 attribute 标签
 * @method void setQueryType(string $QueryType) 设置查询类型 filename 名称、 attribute 标签
 * @method integer getShowCurrCate() 获取是否只展示当前分类的数据 0不是，1是
 * @method void setShowCurrCate(integer $ShowCurrCate) 设置是否只展示当前分类的数据 0不是，1是
 */
class ListQARequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $BotBizId;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 每页大小
     */
    public $PageSize;

    /**
     * @var string 查询问题

输入特定标识 lke:system:untagged  将查询所有未关联标签的问答
     */
    public $Query;

    /**
     * @var array 校验状态(1未校验2采纳3不采纳)
     */
    public $AcceptStatus;

    /**
     * @var array 发布状态(2待发布 3发布中 4已发布 7审核中 8审核失败 9人工申述中 11人工申述失败 12已过期 13超量失效 14超量失效恢复)
     */
    public $ReleaseStatus;

    /**
     * @var string 文档ID
     */
    public $DocBizId;

    /**
     * @var integer 来源(1 文档生成 2 批量导入 3 手动添加)
     */
    public $Source;

    /**
     * @var string 查询答案
     */
    public $QueryAnswer;

    /**
     * @var string 分类ID
     */
    public $CateBizId;

    /**
     * @var array QA业务ID列表
     */
    public $QaBizIds;

    /**
     * @var string 查询类型 filename 名称、 attribute 标签
     */
    public $QueryType;

    /**
     * @var integer 是否只展示当前分类的数据 0不是，1是
     */
    public $ShowCurrCate;

    /**
     * @param string $BotBizId 应用ID
     * @param integer $PageNumber 页码
     * @param integer $PageSize 每页大小
     * @param string $Query 查询问题

输入特定标识 lke:system:untagged  将查询所有未关联标签的问答
     * @param array $AcceptStatus 校验状态(1未校验2采纳3不采纳)
     * @param array $ReleaseStatus 发布状态(2待发布 3发布中 4已发布 7审核中 8审核失败 9人工申述中 11人工申述失败 12已过期 13超量失效 14超量失效恢复)
     * @param string $DocBizId 文档ID
     * @param integer $Source 来源(1 文档生成 2 批量导入 3 手动添加)
     * @param string $QueryAnswer 查询答案
     * @param string $CateBizId 分类ID
     * @param array $QaBizIds QA业务ID列表
     * @param string $QueryType 查询类型 filename 名称、 attribute 标签
     * @param integer $ShowCurrCate 是否只展示当前分类的数据 0不是，1是
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
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

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("QueryAnswer",$param) and $param["QueryAnswer"] !== null) {
            $this->QueryAnswer = $param["QueryAnswer"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("QaBizIds",$param) and $param["QaBizIds"] !== null) {
            $this->QaBizIds = $param["QaBizIds"];
        }

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("ShowCurrCate",$param) and $param["ShowCurrCate"] !== null) {
            $this->ShowCurrCate = $param["ShowCurrCate"];
        }
    }
}
