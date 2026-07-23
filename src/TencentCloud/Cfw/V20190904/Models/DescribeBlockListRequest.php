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
 * DescribeBlockList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取长度
 * @method void setLimit(integer $Limit) 设置长度
 * @method integer getStatTimeSpan() 获取频率类型
 * @method void setStatTimeSpan(integer $StatTimeSpan) 设置频率类型
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getSearchValue() 获取查询条件
 * @method void setSearchValue(string $SearchValue) 设置查询条件
 * @method string getOrder() 获取升序降序
 * @method void setOrder(string $Order) 设置升序降序
 * @method string getBy() 获取排序字段
 * @method void setBy(string $By) 设置排序字段
 * @method string getDirection() 获取方向 1 入 0出
 * @method void setDirection(string $Direction) 设置方向 1 入 0出
 * @method string getByPass() 获取是否处置 1处置 0不是
 * @method void setByPass(string $ByPass) 设置是否处置 1处置 0不是
 * @method string getSource() 获取来源
 * @method void setSource(string $Source) 设置来源
 * @method string getCountry() 获取国家 1国内
 * @method void setCountry(string $Country) 设置国家 1国内
 * @method string getAssetId() 获取资产id
 * @method void setAssetId(string $AssetId) 设置资产id
 * @method string getLogSource() 获取日志来源 move：vpc间防火墙
 * @method void setLogSource(string $LogSource) 设置日志来源 move：vpc间防火墙
 */
class DescribeBlockListRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 长度
     */
    public $Limit;

    /**
     * @var integer 频率类型
     */
    public $StatTimeSpan;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 查询条件
     */
    public $SearchValue;

    /**
     * @var string 升序降序
     */
    public $Order;

    /**
     * @var string 排序字段
     */
    public $By;

    /**
     * @var string 方向 1 入 0出
     */
    public $Direction;

    /**
     * @var string 是否处置 1处置 0不是
     */
    public $ByPass;

    /**
     * @var string 来源
     */
    public $Source;

    /**
     * @var string 国家 1国内
     */
    public $Country;

    /**
     * @var string 资产id
     */
    public $AssetId;

    /**
     * @var string 日志来源 move：vpc间防火墙
     */
    public $LogSource;

    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit 长度
     * @param integer $StatTimeSpan 频率类型
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $SearchValue 查询条件
     * @param string $Order 升序降序
     * @param string $By 排序字段
     * @param string $Direction 方向 1 入 0出
     * @param string $ByPass 是否处置 1处置 0不是
     * @param string $Source 来源
     * @param string $Country 国家 1国内
     * @param string $AssetId 资产id
     * @param string $LogSource 日志来源 move：vpc间防火墙
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

        if (array_key_exists("StatTimeSpan",$param) and $param["StatTimeSpan"] !== null) {
            $this->StatTimeSpan = $param["StatTimeSpan"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("ByPass",$param) and $param["ByPass"] !== null) {
            $this->ByPass = $param["ByPass"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("LogSource",$param) and $param["LogSource"] !== null) {
            $this->LogSource = $param["LogSource"];
        }
    }
}
