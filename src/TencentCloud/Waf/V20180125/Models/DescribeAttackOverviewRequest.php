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
 * DescribeAttackOverview请求参数结构体
 *
 * @method string getFromTime() 获取查询开始时间
 * @method void setFromTime(string $FromTime) 设置查询开始时间
 * @method string getToTime() 获取查询结束时间
 * @method void setToTime(string $ToTime) 设置查询结束时间
 * @method integer getAppid() 获取客户的Appid
 * @method void setAppid(integer $Appid) 设置客户的Appid
 * @method string getDomain() 获取被查询的域名
 * @method void setDomain(string $Domain) 设置被查询的域名
 * @method string getEdition() 获取只有两个值有效，sparta-waf，clb-waf，不传则不过滤
 * @method void setEdition(string $Edition) 设置只有两个值有效，sparta-waf，clb-waf，不传则不过滤
 * @method string getInstanceID() 获取WAF实例ID，不传则不过滤
 * @method void setInstanceID(string $InstanceID) 设置WAF实例ID，不传则不过滤
 */
class DescribeAttackOverviewRequest extends AbstractModel
{
    /**
     * @var string 查询开始时间
     */
    public $FromTime;

    /**
     * @var string 查询结束时间
     */
    public $ToTime;

    /**
     * @var integer 客户的Appid
     */
    public $Appid;

    /**
     * @var string 被查询的域名
     */
    public $Domain;

    /**
     * @var string 只有两个值有效，sparta-waf，clb-waf，不传则不过滤
     */
    public $Edition;

    /**
     * @var string WAF实例ID，不传则不过滤
     */
    public $InstanceID;

    /**
     * @param string $FromTime 查询开始时间
     * @param string $ToTime 查询结束时间
     * @param integer $Appid 客户的Appid
     * @param string $Domain 被查询的域名
     * @param string $Edition 只有两个值有效，sparta-waf，clb-waf，不传则不过滤
     * @param string $InstanceID WAF实例ID，不传则不过滤
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
        if (array_key_exists("FromTime",$param) and $param["FromTime"] !== null) {
            $this->FromTime = $param["FromTime"];
        }

        if (array_key_exists("ToTime",$param) and $param["ToTime"] !== null) {
            $this->ToTime = $param["ToTime"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }
    }
}
