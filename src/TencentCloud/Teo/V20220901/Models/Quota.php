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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 刷新/预热 可用量及配额
 *
 * @method integer getBatch() 获取单次批量提交配额上限。
 * @method void setBatch(integer $Batch) 设置单次批量提交配额上限。
 * @method integer getDaily() 获取每日提交配额上限。
 * @method void setDaily(integer $Daily) 设置每日提交配额上限。
 * @method integer getDailyAvailable() 获取每日剩余的可提交配额。
 * @method void setDailyAvailable(integer $DailyAvailable) 设置每日剩余的可提交配额。
 * @method string getType() 获取刷新预热缓存类型，取值有：
<li> purge_prefix：按前缀刷新；</li>
<li> purge_url：按URL刷新；</li>
<li> purge_host：按Hostname刷新；</li>
<li> purge_all：刷新全部缓存内容；</li>
<li> purge_cache_tag：按CacheTag刷新；</li><li> prefetch_url：按URL预热。</li>
 * @method void setType(string $Type) 设置刷新预热缓存类型，取值有：
<li> purge_prefix：按前缀刷新；</li>
<li> purge_url：按URL刷新；</li>
<li> purge_host：按Hostname刷新；</li>
<li> purge_all：刷新全部缓存内容；</li>
<li> purge_cache_tag：按CacheTag刷新；</li><li> prefetch_url：按URL预热。</li>
 */
class Quota extends AbstractModel
{
    /**
     * @var integer 单次批量提交配额上限。
     */
    public $Batch;

    /**
     * @var integer 每日提交配额上限。
     */
    public $Daily;

    /**
     * @var integer 每日剩余的可提交配额。
     */
    public $DailyAvailable;

    /**
     * @var string 刷新预热缓存类型，取值有：
<li> purge_prefix：按前缀刷新；</li>
<li> purge_url：按URL刷新；</li>
<li> purge_host：按Hostname刷新；</li>
<li> purge_all：刷新全部缓存内容；</li>
<li> purge_cache_tag：按CacheTag刷新；</li><li> prefetch_url：按URL预热。</li>
     */
    public $Type;

    /**
     * @param integer $Batch 单次批量提交配额上限。
     * @param integer $Daily 每日提交配额上限。
     * @param integer $DailyAvailable 每日剩余的可提交配额。
     * @param string $Type 刷新预热缓存类型，取值有：
<li> purge_prefix：按前缀刷新；</li>
<li> purge_url：按URL刷新；</li>
<li> purge_host：按Hostname刷新；</li>
<li> purge_all：刷新全部缓存内容；</li>
<li> purge_cache_tag：按CacheTag刷新；</li><li> prefetch_url：按URL预热。</li>
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
        if (array_key_exists("Batch",$param) and $param["Batch"] !== null) {
            $this->Batch = $param["Batch"];
        }

        if (array_key_exists("Daily",$param) and $param["Daily"] !== null) {
            $this->Daily = $param["Daily"];
        }

        if (array_key_exists("DailyAvailable",$param) and $param["DailyAvailable"] !== null) {
            $this->DailyAvailable = $param["DailyAvailable"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
