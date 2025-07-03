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
 * QA查询参数
 *
 * @method integer getPageNumber() 获取页码


 * @method void setPageNumber(integer $PageNumber) 设置页码


 * @method integer getPageSize() 获取每页数量

 * @method void setPageSize(integer $PageSize) 设置每页数量

 * @method string getBotBizId() 获取应用ID
 * @method void setBotBizId(string $BotBizId) 设置应用ID
 * @method string getQuery() 获取查询内容

 * @method void setQuery(string $Query) 设置查询内容

 * @method string getCateBizId() 获取分类ID

 * @method void setCateBizId(string $CateBizId) 设置分类ID

 * @method array getAcceptStatus() 获取校验状态

 * @method void setAcceptStatus(array $AcceptStatus) 设置校验状态

 * @method array getReleaseStatus() 获取发布状态

 * @method void setReleaseStatus(array $ReleaseStatus) 设置发布状态

 * @method string getDocBizId() 获取文档ID

 * @method void setDocBizId(string $DocBizId) 设置文档ID

 * @method string getQaBizId() 获取QAID

 * @method void setQaBizId(string $QaBizId) 设置QAID

 * @method integer getSource() 获取来源

 * @method void setSource(integer $Source) 设置来源

 * @method string getQueryAnswer() 获取查询答案

 * @method void setQueryAnswer(string $QueryAnswer) 设置查询答案

 * @method string getQueryType() 获取查询类型 filename 名称、 attribute 标签
 * @method void setQueryType(string $QueryType) 设置查询类型 filename 名称、 attribute 标签
 */
class QAQuery extends AbstractModel
{
    /**
     * @var integer 页码


     */
    public $PageNumber;

    /**
     * @var integer 每页数量

     */
    public $PageSize;

    /**
     * @var string 应用ID
     */
    public $BotBizId;

    /**
     * @var string 查询内容

     */
    public $Query;

    /**
     * @var string 分类ID

     */
    public $CateBizId;

    /**
     * @var array 校验状态

     */
    public $AcceptStatus;

    /**
     * @var array 发布状态

     */
    public $ReleaseStatus;

    /**
     * @var string 文档ID

     */
    public $DocBizId;

    /**
     * @var string QAID

     */
    public $QaBizId;

    /**
     * @var integer 来源

     */
    public $Source;

    /**
     * @var string 查询答案

     */
    public $QueryAnswer;

    /**
     * @var string 查询类型 filename 名称、 attribute 标签
     */
    public $QueryType;

    /**
     * @param integer $PageNumber 页码


     * @param integer $PageSize 每页数量

     * @param string $BotBizId 应用ID
     * @param string $Query 查询内容

     * @param string $CateBizId 分类ID

     * @param array $AcceptStatus 校验状态

     * @param array $ReleaseStatus 发布状态

     * @param string $DocBizId 文档ID

     * @param string $QaBizId QAID

     * @param integer $Source 来源

     * @param string $QueryAnswer 查询答案

     * @param string $QueryType 查询类型 filename 名称、 attribute 标签
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
    }
}
