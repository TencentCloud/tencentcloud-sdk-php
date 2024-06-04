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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePreReleaseList请求参数结构体
 *
 * @method string getKeywords() 获取关键词
 * @method void setKeywords(string $Keywords) 设置关键词
 * @method boolean getDomainStart() 获取搜索关键字，开头
 * @method void setDomainStart(boolean $DomainStart) 设置搜索关键字，开头
 * @method boolean getDomainEnd() 获取搜索关键字结尾
 * @method void setDomainEnd(boolean $DomainEnd) 设置搜索关键字结尾
 * @method integer getSort() 获取排序
 * @method void setSort(integer $Sort) 设置排序
 * @method float getPriceStart() 获取起始价格
 * @method void setPriceStart(float $PriceStart) 设置起始价格
 * @method float getPriceEnd() 获取结束价格
 * @method void setPriceEnd(float $PriceEnd) 设置结束价格
 * @method integer getLengthStart() 获取起始域名长度
 * @method void setLengthStart(integer $LengthStart) 设置起始域名长度
 * @method integer getLengthEnd() 获取结束域名长度
 * @method void setLengthEnd(integer $LengthEnd) 设置结束域名长度
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取每页显示数
 * @method void setPageSize(integer $PageSize) 设置每页显示数
 * @method array getSuffix() 获取后缀
 * @method void setSuffix(array $Suffix) 设置后缀
 * @method integer getClassOne() 获取一级分类
 * @method void setClassOne(integer $ClassOne) 设置一级分类
 * @method array getClassTwo() 获取二级分类
 * @method void setClassTwo(array $ClassTwo) 设置二级分类
 * @method array getClassThree() 获取三级分类
 * @method void setClassThree(array $ClassThree) 设置三级分类
 * @method array getClassFour() 获取四级分类
 * @method void setClassFour(array $ClassFour) 设置四级分类
 * @method boolean getFilterStart() 获取排除关键字，开头
 * @method void setFilterStart(boolean $FilterStart) 设置排除关键字，开头
 * @method boolean getFilterEnd() 获取排除关键字，结尾
 * @method void setFilterEnd(boolean $FilterEnd) 设置排除关键字，结尾
 * @method string getFilterWords() 获取排除关键字
 * @method void setFilterWords(string $FilterWords) 设置排除关键字
 * @method integer getTransType() 获取交易类型
 * @method void setTransType(integer $TransType) 设置交易类型
 * @method boolean getIsTop() 获取搜索白金域名
 * @method void setIsTop(boolean $IsTop) 设置搜索白金域名
 * @method string getEndTimeSort() 获取结束时间排序啊 desc:倒序 asc:正序
 * @method void setEndTimeSort(string $EndTimeSort) 设置结束时间排序啊 desc:倒序 asc:正序
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 */
class DescribePreReleaseListRequest extends AbstractModel
{
    /**
     * @var string 关键词
     */
    public $Keywords;

    /**
     * @var boolean 搜索关键字，开头
     */
    public $DomainStart;

    /**
     * @var boolean 搜索关键字结尾
     */
    public $DomainEnd;

    /**
     * @var integer 排序
     */
    public $Sort;

    /**
     * @var float 起始价格
     */
    public $PriceStart;

    /**
     * @var float 结束价格
     */
    public $PriceEnd;

    /**
     * @var integer 起始域名长度
     */
    public $LengthStart;

    /**
     * @var integer 结束域名长度
     */
    public $LengthEnd;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 每页显示数
     */
    public $PageSize;

    /**
     * @var array 后缀
     */
    public $Suffix;

    /**
     * @var integer 一级分类
     */
    public $ClassOne;

    /**
     * @var array 二级分类
     */
    public $ClassTwo;

    /**
     * @var array 三级分类
     */
    public $ClassThree;

    /**
     * @var array 四级分类
     */
    public $ClassFour;

    /**
     * @var boolean 排除关键字，开头
     */
    public $FilterStart;

    /**
     * @var boolean 排除关键字，结尾
     */
    public $FilterEnd;

    /**
     * @var string 排除关键字
     */
    public $FilterWords;

    /**
     * @var integer 交易类型
     */
    public $TransType;

    /**
     * @var boolean 搜索白金域名
     */
    public $IsTop;

    /**
     * @var string 结束时间排序啊 desc:倒序 asc:正序
     */
    public $EndTimeSort;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @param string $Keywords 关键词
     * @param boolean $DomainStart 搜索关键字，开头
     * @param boolean $DomainEnd 搜索关键字结尾
     * @param integer $Sort 排序
     * @param float $PriceStart 起始价格
     * @param float $PriceEnd 结束价格
     * @param integer $LengthStart 起始域名长度
     * @param integer $LengthEnd 结束域名长度
     * @param integer $PageNumber 页码
     * @param integer $PageSize 每页显示数
     * @param array $Suffix 后缀
     * @param integer $ClassOne 一级分类
     * @param array $ClassTwo 二级分类
     * @param array $ClassThree 三级分类
     * @param array $ClassFour 四级分类
     * @param boolean $FilterStart 排除关键字，开头
     * @param boolean $FilterEnd 排除关键字，结尾
     * @param string $FilterWords 排除关键字
     * @param integer $TransType 交易类型
     * @param boolean $IsTop 搜索白金域名
     * @param string $EndTimeSort 结束时间排序啊 desc:倒序 asc:正序
     * @param string $EndTime 结束时间
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
        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("DomainStart",$param) and $param["DomainStart"] !== null) {
            $this->DomainStart = $param["DomainStart"];
        }

        if (array_key_exists("DomainEnd",$param) and $param["DomainEnd"] !== null) {
            $this->DomainEnd = $param["DomainEnd"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("PriceStart",$param) and $param["PriceStart"] !== null) {
            $this->PriceStart = $param["PriceStart"];
        }

        if (array_key_exists("PriceEnd",$param) and $param["PriceEnd"] !== null) {
            $this->PriceEnd = $param["PriceEnd"];
        }

        if (array_key_exists("LengthStart",$param) and $param["LengthStart"] !== null) {
            $this->LengthStart = $param["LengthStart"];
        }

        if (array_key_exists("LengthEnd",$param) and $param["LengthEnd"] !== null) {
            $this->LengthEnd = $param["LengthEnd"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Suffix",$param) and $param["Suffix"] !== null) {
            $this->Suffix = $param["Suffix"];
        }

        if (array_key_exists("ClassOne",$param) and $param["ClassOne"] !== null) {
            $this->ClassOne = $param["ClassOne"];
        }

        if (array_key_exists("ClassTwo",$param) and $param["ClassTwo"] !== null) {
            $this->ClassTwo = $param["ClassTwo"];
        }

        if (array_key_exists("ClassThree",$param) and $param["ClassThree"] !== null) {
            $this->ClassThree = $param["ClassThree"];
        }

        if (array_key_exists("ClassFour",$param) and $param["ClassFour"] !== null) {
            $this->ClassFour = $param["ClassFour"];
        }

        if (array_key_exists("FilterStart",$param) and $param["FilterStart"] !== null) {
            $this->FilterStart = $param["FilterStart"];
        }

        if (array_key_exists("FilterEnd",$param) and $param["FilterEnd"] !== null) {
            $this->FilterEnd = $param["FilterEnd"];
        }

        if (array_key_exists("FilterWords",$param) and $param["FilterWords"] !== null) {
            $this->FilterWords = $param["FilterWords"];
        }

        if (array_key_exists("TransType",$param) and $param["TransType"] !== null) {
            $this->TransType = $param["TransType"];
        }

        if (array_key_exists("IsTop",$param) and $param["IsTop"] !== null) {
            $this->IsTop = $param["IsTop"];
        }

        if (array_key_exists("EndTimeSort",$param) and $param["EndTimeSort"] !== null) {
            $this->EndTimeSort = $param["EndTimeSort"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
