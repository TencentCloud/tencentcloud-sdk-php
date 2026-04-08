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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扩展调度器(Extenders)
 *
 * @method string getFilterVerb() 获取<p>过滤阶段接口</p>
 * @method void setFilterVerb(string $FilterVerb) 设置<p>过滤阶段接口</p>
 * @method string getPrioritizeVerb() 获取<p>打分阶段扩展接口</p>
 * @method void setPrioritizeVerb(string $PrioritizeVerb) 设置<p>打分阶段扩展接口</p>
 * @method integer getWeight() 获取<p>打分阶段节点分数的权重,取值范围限定(0,2】</p>
 * @method void setWeight(integer $Weight) 设置<p>打分阶段节点分数的权重,取值范围限定(0,2】</p>
 * @method array getManagedResources() 获取<p>扩展调度器(Extender)管理的扩展资源</p>
 * @method void setManagedResources(array $ManagedResources) 设置<p>扩展调度器(Extender)管理的扩展资源</p>
 * @method ExtenderClientConfig getExtenderClientConfig() 获取<p>extender客户端配置</p>
 * @method void setExtenderClientConfig(ExtenderClientConfig $ExtenderClientConfig) 设置<p>extender客户端配置</p>
 * @method string getPreemptVerb() 获取<p>抢占接口</p>
 * @method void setPreemptVerb(string $PreemptVerb) 设置<p>抢占接口</p>
 * @method boolean getNodeCacheCapable() 获取<p>节点缓存能力</p>
 * @method void setNodeCacheCapable(boolean $NodeCacheCapable) 设置<p>节点缓存能力</p>
 */
class Extenders extends AbstractModel
{
    /**
     * @var string <p>过滤阶段接口</p>
     */
    public $FilterVerb;

    /**
     * @var string <p>打分阶段扩展接口</p>
     */
    public $PrioritizeVerb;

    /**
     * @var integer <p>打分阶段节点分数的权重,取值范围限定(0,2】</p>
     */
    public $Weight;

    /**
     * @var array <p>扩展调度器(Extender)管理的扩展资源</p>
     */
    public $ManagedResources;

    /**
     * @var ExtenderClientConfig <p>extender客户端配置</p>
     */
    public $ExtenderClientConfig;

    /**
     * @var string <p>抢占接口</p>
     */
    public $PreemptVerb;

    /**
     * @var boolean <p>节点缓存能力</p>
     */
    public $NodeCacheCapable;

    /**
     * @param string $FilterVerb <p>过滤阶段接口</p>
     * @param string $PrioritizeVerb <p>打分阶段扩展接口</p>
     * @param integer $Weight <p>打分阶段节点分数的权重,取值范围限定(0,2】</p>
     * @param array $ManagedResources <p>扩展调度器(Extender)管理的扩展资源</p>
     * @param ExtenderClientConfig $ExtenderClientConfig <p>extender客户端配置</p>
     * @param string $PreemptVerb <p>抢占接口</p>
     * @param boolean $NodeCacheCapable <p>节点缓存能力</p>
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
        if (array_key_exists("FilterVerb",$param) and $param["FilterVerb"] !== null) {
            $this->FilterVerb = $param["FilterVerb"];
        }

        if (array_key_exists("PrioritizeVerb",$param) and $param["PrioritizeVerb"] !== null) {
            $this->PrioritizeVerb = $param["PrioritizeVerb"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("ManagedResources",$param) and $param["ManagedResources"] !== null) {
            $this->ManagedResources = [];
            foreach ($param["ManagedResources"] as $key => $value){
                $obj = new ExtenderManagedResource();
                $obj->deserialize($value);
                array_push($this->ManagedResources, $obj);
            }
        }

        if (array_key_exists("ExtenderClientConfig",$param) and $param["ExtenderClientConfig"] !== null) {
            $this->ExtenderClientConfig = new ExtenderClientConfig();
            $this->ExtenderClientConfig->deserialize($param["ExtenderClientConfig"]);
        }

        if (array_key_exists("PreemptVerb",$param) and $param["PreemptVerb"] !== null) {
            $this->PreemptVerb = $param["PreemptVerb"];
        }

        if (array_key_exists("NodeCacheCapable",$param) and $param["NodeCacheCapable"] !== null) {
            $this->NodeCacheCapable = $param["NodeCacheCapable"];
        }
    }
}
