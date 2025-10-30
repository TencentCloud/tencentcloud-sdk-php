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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDosageDetailByDate请求参数结构体
 *
 * @method string getStartDate() 获取查询账单开始日期，如 2019-01-01
 * @method void setStartDate(string $StartDate) 设置查询账单开始日期，如 2019-01-01
 * @method string getEndDate() 获取查询账单结束日期，如 2019-01-01， 时间跨度不超过7天
 * @method void setEndDate(string $EndDate) 设置查询账单结束日期，如 2019-01-01， 时间跨度不超过7天
 * @method string getProductCode() 获取互动直播：
10194   互动直播-核心机房           :
10195   互动直播-边缘机房

cdn业务：
102383：CDN静态加速流量(国内)
102384：CDN静态加速带宽(国内)
102385：CDN静态加速流量(海外)
102386：CDN静态加速带宽(海外)

100967：弹性公网IP-按流量计费
101065：公网负载均衡-按流量计费

视频直播
10226 视频直播流量(国内)
10227 视频直播带宽(国内)
100763 视频直播流量(海外)
100762 视频直播宽带(海外)

仅支持以上产品
 * @method void setProductCode(string $ProductCode) 设置互动直播：
10194   互动直播-核心机房           :
10195   互动直播-边缘机房

cdn业务：
102383：CDN静态加速流量(国内)
102384：CDN静态加速带宽(国内)
102385：CDN静态加速流量(海外)
102386：CDN静态加速带宽(海外)

100967：弹性公网IP-按流量计费
101065：公网负载均衡-按流量计费

视频直播
10226 视频直播流量(国内)
10227 视频直播带宽(国内)
100763 视频直播流量(海外)
100762 视频直播宽带(海外)

仅支持以上产品
 * @method string getDomain() 获取查询域名 例如 www.qq.com
非CDN业务查询时传入空字符串，返回的值为空
 * @method void setDomain(string $Domain) 设置查询域名 例如 www.qq.com
非CDN业务查询时传入空字符串，返回的值为空
 * @method string getInstanceID() 获取1、如果为空，则返回EIP或CLB所有实例的明细；
2、如果传入实例名，则返回该实例明细
 * @method void setInstanceID(string $InstanceID) 设置1、如果为空，则返回EIP或CLB所有实例的明细；
2、如果传入实例名，则返回该实例明细
 * @method string getPayerUin() 获取支付者的账号 ID（账号 ID 是用户在腾讯云的唯一账号标识），默认查询本账号账单，如集团管理账号需查询成员账号自付的账单，该字段需入参成员账号UIN
 * @method void setPayerUin(string $PayerUin) 设置支付者的账号 ID（账号 ID 是用户在腾讯云的唯一账号标识），默认查询本账号账单，如集团管理账号需查询成员账号自付的账单，该字段需入参成员账号UIN
 */
class DescribeDosageDetailByDateRequest extends AbstractModel
{
    /**
     * @var string 查询账单开始日期，如 2019-01-01
     */
    public $StartDate;

    /**
     * @var string 查询账单结束日期，如 2019-01-01， 时间跨度不超过7天
     */
    public $EndDate;

    /**
     * @var string 互动直播：
10194   互动直播-核心机房           :
10195   互动直播-边缘机房

cdn业务：
102383：CDN静态加速流量(国内)
102384：CDN静态加速带宽(国内)
102385：CDN静态加速流量(海外)
102386：CDN静态加速带宽(海外)

100967：弹性公网IP-按流量计费
101065：公网负载均衡-按流量计费

视频直播
10226 视频直播流量(国内)
10227 视频直播带宽(国内)
100763 视频直播流量(海外)
100762 视频直播宽带(海外)

仅支持以上产品
     */
    public $ProductCode;

    /**
     * @var string 查询域名 例如 www.qq.com
非CDN业务查询时传入空字符串，返回的值为空
     */
    public $Domain;

    /**
     * @var string 1、如果为空，则返回EIP或CLB所有实例的明细；
2、如果传入实例名，则返回该实例明细
     */
    public $InstanceID;

    /**
     * @var string 支付者的账号 ID（账号 ID 是用户在腾讯云的唯一账号标识），默认查询本账号账单，如集团管理账号需查询成员账号自付的账单，该字段需入参成员账号UIN
     */
    public $PayerUin;

    /**
     * @param string $StartDate 查询账单开始日期，如 2019-01-01
     * @param string $EndDate 查询账单结束日期，如 2019-01-01， 时间跨度不超过7天
     * @param string $ProductCode 互动直播：
10194   互动直播-核心机房           :
10195   互动直播-边缘机房

cdn业务：
102383：CDN静态加速流量(国内)
102384：CDN静态加速带宽(国内)
102385：CDN静态加速流量(海外)
102386：CDN静态加速带宽(海外)

100967：弹性公网IP-按流量计费
101065：公网负载均衡-按流量计费

视频直播
10226 视频直播流量(国内)
10227 视频直播带宽(国内)
100763 视频直播流量(海外)
100762 视频直播宽带(海外)

仅支持以上产品
     * @param string $Domain 查询域名 例如 www.qq.com
非CDN业务查询时传入空字符串，返回的值为空
     * @param string $InstanceID 1、如果为空，则返回EIP或CLB所有实例的明细；
2、如果传入实例名，则返回该实例明细
     * @param string $PayerUin 支付者的账号 ID（账号 ID 是用户在腾讯云的唯一账号标识），默认查询本账号账单，如集团管理账号需查询成员账号自付的账单，该字段需入参成员账号UIN
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
        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }
    }
}
