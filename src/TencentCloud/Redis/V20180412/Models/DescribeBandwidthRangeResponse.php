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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBandwidthRange返回参数结构体
 *
 * @method integer getBaseBandwidth() 获取标准带宽。指购买实例时，系统为每个节点分配的带宽。
 * @method void setBaseBandwidth(integer $BaseBandwidth) 设置标准带宽。指购买实例时，系统为每个节点分配的带宽。
 * @method integer getAddBandwidth() 获取指实例的附加带宽。标准带宽不满足需求的情况下，用户可自行增加的带宽。<ul><li>开启副本只读时，实例总带宽 = 附加带宽 * 分片数 + 标准带宽 * 分片数 * Max ([只读副本数量, 1])，标准架构的分片数 = 1。</li><li>没有开启副本只读时，实例总带宽 = 附加带宽 * 分片数 + 标准带宽 * 分片数，标准架构的分片数 = 1。</li></ul>
 * @method void setAddBandwidth(integer $AddBandwidth) 设置指实例的附加带宽。标准带宽不满足需求的情况下，用户可自行增加的带宽。<ul><li>开启副本只读时，实例总带宽 = 附加带宽 * 分片数 + 标准带宽 * 分片数 * Max ([只读副本数量, 1])，标准架构的分片数 = 1。</li><li>没有开启副本只读时，实例总带宽 = 附加带宽 * 分片数 + 标准带宽 * 分片数，标准架构的分片数 = 1。</li></ul>
 * @method integer getMinAddBandwidth() 获取附加带宽设置下限。
 * @method void setMinAddBandwidth(integer $MinAddBandwidth) 设置附加带宽设置下限。
 * @method integer getMaxAddBandwidth() 获取附加带宽设置上限。
 * @method void setMaxAddBandwidth(integer $MaxAddBandwidth) 设置附加带宽设置上限。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBandwidthRangeResponse extends AbstractModel
{
    /**
     * @var integer 标准带宽。指购买实例时，系统为每个节点分配的带宽。
     */
    public $BaseBandwidth;

    /**
     * @var integer 指实例的附加带宽。标准带宽不满足需求的情况下，用户可自行增加的带宽。<ul><li>开启副本只读时，实例总带宽 = 附加带宽 * 分片数 + 标准带宽 * 分片数 * Max ([只读副本数量, 1])，标准架构的分片数 = 1。</li><li>没有开启副本只读时，实例总带宽 = 附加带宽 * 分片数 + 标准带宽 * 分片数，标准架构的分片数 = 1。</li></ul>
     */
    public $AddBandwidth;

    /**
     * @var integer 附加带宽设置下限。
     */
    public $MinAddBandwidth;

    /**
     * @var integer 附加带宽设置上限。
     */
    public $MaxAddBandwidth;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BaseBandwidth 标准带宽。指购买实例时，系统为每个节点分配的带宽。
     * @param integer $AddBandwidth 指实例的附加带宽。标准带宽不满足需求的情况下，用户可自行增加的带宽。<ul><li>开启副本只读时，实例总带宽 = 附加带宽 * 分片数 + 标准带宽 * 分片数 * Max ([只读副本数量, 1])，标准架构的分片数 = 1。</li><li>没有开启副本只读时，实例总带宽 = 附加带宽 * 分片数 + 标准带宽 * 分片数，标准架构的分片数 = 1。</li></ul>
     * @param integer $MinAddBandwidth 附加带宽设置下限。
     * @param integer $MaxAddBandwidth 附加带宽设置上限。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("BaseBandwidth",$param) and $param["BaseBandwidth"] !== null) {
            $this->BaseBandwidth = $param["BaseBandwidth"];
        }

        if (array_key_exists("AddBandwidth",$param) and $param["AddBandwidth"] !== null) {
            $this->AddBandwidth = $param["AddBandwidth"];
        }

        if (array_key_exists("MinAddBandwidth",$param) and $param["MinAddBandwidth"] !== null) {
            $this->MinAddBandwidth = $param["MinAddBandwidth"];
        }

        if (array_key_exists("MaxAddBandwidth",$param) and $param["MaxAddBandwidth"] !== null) {
            $this->MaxAddBandwidth = $param["MaxAddBandwidth"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
