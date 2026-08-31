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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAddressTemplateList请求参数结构体
 *
 * @method integer getOffset() 获取<p>偏移量，分页用</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，分页用</p>
 * @method integer getLimit() 获取<p>条数，分页用</p>
 * @method void setLimit(integer $Limit) 设置<p>条数，分页用</p>
 * @method string getBy() 获取<p>排序字段，取值：UpdateTime最近更新时间，RulesNum关联规则数</p>
 * @method void setBy(string $By) 设置<p>排序字段，取值：UpdateTime最近更新时间，RulesNum关联规则数</p>
 * @method string getOrder() 获取<p>排序，取值 ：asc正序，desc逆序</p>
 * @method void setOrder(string $Order) 设置<p>排序，取值 ：asc正序，desc逆序</p>
 * @method string getSearchValue() 获取<p>搜索值</p>
 * @method void setSearchValue(string $SearchValue) 设置<p>搜索值</p>
 * @method string getUuid() 获取<p>检索地址模板唯一id</p>
 * @method void setUuid(string $Uuid) 设置<p>检索地址模板唯一id</p>
 * @method string getTemplateType() 获取<p>模板类型，取值：1：ip模板，5：域名模板，6：协议端口模板</p>
 * @method void setTemplateType(string $TemplateType) 设置<p>模板类型，取值：1：ip模板，5：域名模板，6：协议端口模板</p>
 * @method string getTemplateId() 获取<p>模板Id</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>模板Id</p>
 * @method string getSourceType() 获取<p>模板来源</p>
 * @method void setSourceType(string $SourceType) 设置<p>模板来源</p>
 */
class DescribeAddressTemplateListRequest extends AbstractModel
{
    /**
     * @var integer <p>偏移量，分页用</p>
     */
    public $Offset;

    /**
     * @var integer <p>条数，分页用</p>
     */
    public $Limit;

    /**
     * @var string <p>排序字段，取值：UpdateTime最近更新时间，RulesNum关联规则数</p>
     */
    public $By;

    /**
     * @var string <p>排序，取值 ：asc正序，desc逆序</p>
     */
    public $Order;

    /**
     * @var string <p>搜索值</p>
     */
    public $SearchValue;

    /**
     * @var string <p>检索地址模板唯一id</p>
     */
    public $Uuid;

    /**
     * @var string <p>模板类型，取值：1：ip模板，5：域名模板，6：协议端口模板</p>
     */
    public $TemplateType;

    /**
     * @var string <p>模板Id</p>
     */
    public $TemplateId;

    /**
     * @var string <p>模板来源</p>
     */
    public $SourceType;

    /**
     * @param integer $Offset <p>偏移量，分页用</p>
     * @param integer $Limit <p>条数，分页用</p>
     * @param string $By <p>排序字段，取值：UpdateTime最近更新时间，RulesNum关联规则数</p>
     * @param string $Order <p>排序，取值 ：asc正序，desc逆序</p>
     * @param string $SearchValue <p>搜索值</p>
     * @param string $Uuid <p>检索地址模板唯一id</p>
     * @param string $TemplateType <p>模板类型，取值：1：ip模板，5：域名模板，6：协议端口模板</p>
     * @param string $TemplateId <p>模板Id</p>
     * @param string $SourceType <p>模板来源</p>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }
    }
}
