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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * eBPF 采集规则
 *
 * @method string getRuleName() 获取<p>采集规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>采集规则名称</p>
 * @method integer getTrackTarget() 获取<p>采集对象</p><p>枚举值：</p><ul><li>1： 所有进程</li></ul>
 * @method void setTrackTarget(integer $TrackTarget) 设置<p>采集对象</p><p>枚举值：</p><ul><li>1： 所有进程</li></ul>
 * @method EBPFCollectFilters getFilters() 获取<p>三维过滤器</p>
 * @method void setFilters(EBPFCollectFilters $Filters) 设置<p>三维过滤器</p>
 */
class EBPFCollectRule extends AbstractModel
{
    /**
     * @var string <p>采集规则名称</p>
     */
    public $RuleName;

    /**
     * @var integer <p>采集对象</p><p>枚举值：</p><ul><li>1： 所有进程</li></ul>
     */
    public $TrackTarget;

    /**
     * @var EBPFCollectFilters <p>三维过滤器</p>
     */
    public $Filters;

    /**
     * @param string $RuleName <p>采集规则名称</p>
     * @param integer $TrackTarget <p>采集对象</p><p>枚举值：</p><ul><li>1： 所有进程</li></ul>
     * @param EBPFCollectFilters $Filters <p>三维过滤器</p>
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("TrackTarget",$param) and $param["TrackTarget"] !== null) {
            $this->TrackTarget = $param["TrackTarget"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = new EBPFCollectFilters();
            $this->Filters->deserialize($param["Filters"]);
        }
    }
}
