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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 调度拓扑分布
 *
 * @method integer getMaxSkew() 获取<p>最大偏差值</p>
 * @method void setMaxSkew(integer $MaxSkew) 设置<p>最大偏差值</p>
 * @method string getTopologyKey() 获取<p>拓扑域键</p>
 * @method void setTopologyKey(string $TopologyKey) 设置<p>拓扑域键</p>
 * @method string getWhenUnsatisfiable() 获取<p>不满足约束时的处理策略</p>
 * @method void setWhenUnsatisfiable(string $WhenUnsatisfiable) 设置<p>不满足约束时的处理策略</p>
 * @method LabelSelector getLabelSelector() 获取<p>标签选择器</p>
 * @method void setLabelSelector(LabelSelector $LabelSelector) 设置<p>标签选择器</p>
 * @method integer getMinDomains() 获取<p>最小拓扑域数量</p>
 * @method void setMinDomains(integer $MinDomains) 设置<p>最小拓扑域数量</p>
 * @method string getNodeAffinityPolicy() 获取<p>节点亲和性策略</p>
 * @method void setNodeAffinityPolicy(string $NodeAffinityPolicy) 设置<p>节点亲和性策略</p>
 * @method string getNodeTaintsPolicy() 获取<p>节点污点策略</p>
 * @method void setNodeTaintsPolicy(string $NodeTaintsPolicy) 设置<p>节点污点策略</p>
 * @method array getMatchLabelKeys() 获取<p>匹配标签键列表</p>
 * @method void setMatchLabelKeys(array $MatchLabelKeys) 设置<p>匹配标签键列表</p>
 */
class TopologySpreadConstraint extends AbstractModel
{
    /**
     * @var integer <p>最大偏差值</p>
     */
    public $MaxSkew;

    /**
     * @var string <p>拓扑域键</p>
     */
    public $TopologyKey;

    /**
     * @var string <p>不满足约束时的处理策略</p>
     */
    public $WhenUnsatisfiable;

    /**
     * @var LabelSelector <p>标签选择器</p>
     */
    public $LabelSelector;

    /**
     * @var integer <p>最小拓扑域数量</p>
     */
    public $MinDomains;

    /**
     * @var string <p>节点亲和性策略</p>
     */
    public $NodeAffinityPolicy;

    /**
     * @var string <p>节点污点策略</p>
     */
    public $NodeTaintsPolicy;

    /**
     * @var array <p>匹配标签键列表</p>
     */
    public $MatchLabelKeys;

    /**
     * @param integer $MaxSkew <p>最大偏差值</p>
     * @param string $TopologyKey <p>拓扑域键</p>
     * @param string $WhenUnsatisfiable <p>不满足约束时的处理策略</p>
     * @param LabelSelector $LabelSelector <p>标签选择器</p>
     * @param integer $MinDomains <p>最小拓扑域数量</p>
     * @param string $NodeAffinityPolicy <p>节点亲和性策略</p>
     * @param string $NodeTaintsPolicy <p>节点污点策略</p>
     * @param array $MatchLabelKeys <p>匹配标签键列表</p>
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
        if (array_key_exists("MaxSkew",$param) and $param["MaxSkew"] !== null) {
            $this->MaxSkew = $param["MaxSkew"];
        }

        if (array_key_exists("TopologyKey",$param) and $param["TopologyKey"] !== null) {
            $this->TopologyKey = $param["TopologyKey"];
        }

        if (array_key_exists("WhenUnsatisfiable",$param) and $param["WhenUnsatisfiable"] !== null) {
            $this->WhenUnsatisfiable = $param["WhenUnsatisfiable"];
        }

        if (array_key_exists("LabelSelector",$param) and $param["LabelSelector"] !== null) {
            $this->LabelSelector = new LabelSelector();
            $this->LabelSelector->deserialize($param["LabelSelector"]);
        }

        if (array_key_exists("MinDomains",$param) and $param["MinDomains"] !== null) {
            $this->MinDomains = $param["MinDomains"];
        }

        if (array_key_exists("NodeAffinityPolicy",$param) and $param["NodeAffinityPolicy"] !== null) {
            $this->NodeAffinityPolicy = $param["NodeAffinityPolicy"];
        }

        if (array_key_exists("NodeTaintsPolicy",$param) and $param["NodeTaintsPolicy"] !== null) {
            $this->NodeTaintsPolicy = $param["NodeTaintsPolicy"];
        }

        if (array_key_exists("MatchLabelKeys",$param) and $param["MatchLabelKeys"] !== null) {
            $this->MatchLabelKeys = $param["MatchLabelKeys"];
        }
    }
}
