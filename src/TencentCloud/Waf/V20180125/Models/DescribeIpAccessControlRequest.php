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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIpAccessControl请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getCount() 获取计数标识
 * @method void setCount(integer $Count) 设置计数标识
 * @method integer getActionType() 获取动作
 * @method void setActionType(integer $ActionType) 设置动作
 * @method integer getVtsMin() 获取有效时间最小时间戳
 * @method void setVtsMin(integer $VtsMin) 设置有效时间最小时间戳
 * @method integer getVtsMax() 获取有效时间最大时间戳
 * @method void setVtsMax(integer $VtsMax) 设置有效时间最大时间戳
 * @method integer getCtsMin() 获取创建时间最小时间戳
 * @method void setCtsMin(integer $CtsMin) 设置创建时间最小时间戳
 * @method integer getCtsMax() 获取创建时间最大时间戳
 * @method void setCtsMax(integer $CtsMax) 设置创建时间最大时间戳
 * @method integer getOffSet() 获取偏移
 * @method void setOffSet(integer $OffSet) 设置偏移
 * @method integer getLimit() 获取限制
 * @method void setLimit(integer $Limit) 设置限制
 * @method string getSource() 获取来源
 * @method void setSource(string $Source) 设置来源
 * @method string getSort() 获取排序参数
 * @method void setSort(string $Sort) 设置排序参数
 * @method string getIp() 获取ip
 * @method void setIp(string $Ip) 设置ip
 */
class DescribeIpAccessControlRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 计数标识
     */
    public $Count;

    /**
     * @var integer 动作
     */
    public $ActionType;

    /**
     * @var integer 有效时间最小时间戳
     */
    public $VtsMin;

    /**
     * @var integer 有效时间最大时间戳
     */
    public $VtsMax;

    /**
     * @var integer 创建时间最小时间戳
     */
    public $CtsMin;

    /**
     * @var integer 创建时间最大时间戳
     */
    public $CtsMax;

    /**
     * @var integer 偏移
     */
    public $OffSet;

    /**
     * @var integer 限制
     */
    public $Limit;

    /**
     * @var string 来源
     */
    public $Source;

    /**
     * @var string 排序参数
     */
    public $Sort;

    /**
     * @var string ip
     */
    public $Ip;

    /**
     * @param string $Domain 域名
     * @param integer $Count 计数标识
     * @param integer $ActionType 动作
     * @param integer $VtsMin 有效时间最小时间戳
     * @param integer $VtsMax 有效时间最大时间戳
     * @param integer $CtsMin 创建时间最小时间戳
     * @param integer $CtsMax 创建时间最大时间戳
     * @param integer $OffSet 偏移
     * @param integer $Limit 限制
     * @param string $Source 来源
     * @param string $Sort 排序参数
     * @param string $Ip ip
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("VtsMin",$param) and $param["VtsMin"] !== null) {
            $this->VtsMin = $param["VtsMin"];
        }

        if (array_key_exists("VtsMax",$param) and $param["VtsMax"] !== null) {
            $this->VtsMax = $param["VtsMax"];
        }

        if (array_key_exists("CtsMin",$param) and $param["CtsMin"] !== null) {
            $this->CtsMin = $param["CtsMin"];
        }

        if (array_key_exists("CtsMax",$param) and $param["CtsMax"] !== null) {
            $this->CtsMax = $param["CtsMax"];
        }

        if (array_key_exists("OffSet",$param) and $param["OffSet"] !== null) {
            $this->OffSet = $param["OffSet"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }
    }
}
