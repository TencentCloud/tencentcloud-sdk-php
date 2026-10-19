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
 * 纯按量计费版本使用详情
 *
 * @method integer getPublicIpUsed() 获取<p>防护IP数</p><p>默认值：0</p>
 * @method void setPublicIpUsed(integer $PublicIpUsed) 设置<p>防护IP数</p><p>默认值：0</p>
 * @method integer getInstanceUsed() 获取<p>防护实例数</p><p>默认值：0</p>
 * @method void setInstanceUsed(integer $InstanceUsed) 设置<p>防护实例数</p><p>默认值：0</p>
 * @method string getStatDate() 获取<p>统计日期</p>
 * @method void setStatDate(string $StatDate) 设置<p>统计日期</p>
 * @method float getTodayTrafficGB() 获取<p>处理流量</p>
 * @method void setTodayTrafficGB(float $TodayTrafficGB) 设置<p>处理流量</p>
 * @method integer getProtectDays() 获取<p>防护天数</p>
 * @method void setProtectDays(integer $ProtectDays) 设置<p>防护天数</p>
 */
class VolumeUsageDetail extends AbstractModel
{
    /**
     * @var integer <p>防护IP数</p><p>默认值：0</p>
     */
    public $PublicIpUsed;

    /**
     * @var integer <p>防护实例数</p><p>默认值：0</p>
     */
    public $InstanceUsed;

    /**
     * @var string <p>统计日期</p>
     */
    public $StatDate;

    /**
     * @var float <p>处理流量</p>
     */
    public $TodayTrafficGB;

    /**
     * @var integer <p>防护天数</p>
     */
    public $ProtectDays;

    /**
     * @param integer $PublicIpUsed <p>防护IP数</p><p>默认值：0</p>
     * @param integer $InstanceUsed <p>防护实例数</p><p>默认值：0</p>
     * @param string $StatDate <p>统计日期</p>
     * @param float $TodayTrafficGB <p>处理流量</p>
     * @param integer $ProtectDays <p>防护天数</p>
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
        if (array_key_exists("PublicIpUsed",$param) and $param["PublicIpUsed"] !== null) {
            $this->PublicIpUsed = $param["PublicIpUsed"];
        }

        if (array_key_exists("InstanceUsed",$param) and $param["InstanceUsed"] !== null) {
            $this->InstanceUsed = $param["InstanceUsed"];
        }

        if (array_key_exists("StatDate",$param) and $param["StatDate"] !== null) {
            $this->StatDate = $param["StatDate"];
        }

        if (array_key_exists("TodayTrafficGB",$param) and $param["TodayTrafficGB"] !== null) {
            $this->TodayTrafficGB = $param["TodayTrafficGB"];
        }

        if (array_key_exists("ProtectDays",$param) and $param["ProtectDays"] !== null) {
            $this->ProtectDays = $param["ProtectDays"];
        }
    }
}
