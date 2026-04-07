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
 * @method string getFilterVerb() 获取过滤阶段接口
 * @method void setFilterVerb(string $FilterVerb) 设置过滤阶段接口
 * @method string getPrioritizeVerb() 获取打分阶段扩展接口
 * @method void setPrioritizeVerb(string $PrioritizeVerb) 设置打分阶段扩展接口
 * @method integer getWeight() 获取打分阶段节点分数的权重,取值范围限定(0,2】
 * @method void setWeight(integer $Weight) 设置打分阶段节点分数的权重,取值范围限定(0,2】
 * @method array getManagedResources() 获取扩展调度器(Extender)管理的扩展资源
 * @method void setManagedResources(array $ManagedResources) 设置扩展调度器(Extender)管理的扩展资源
 * @method ExtenderClientConfig getExtenderClientConfig() 获取extender客户端配置
 * @method void setExtenderClientConfig(ExtenderClientConfig $ExtenderClientConfig) 设置extender客户端配置
 */
class Extenders extends AbstractModel
{
    /**
     * @var string 过滤阶段接口
     */
    public $FilterVerb;

    /**
     * @var string 打分阶段扩展接口
     */
    public $PrioritizeVerb;

    /**
     * @var integer 打分阶段节点分数的权重,取值范围限定(0,2】
     */
    public $Weight;

    /**
     * @var array 扩展调度器(Extender)管理的扩展资源
     */
    public $ManagedResources;

    /**
     * @var ExtenderClientConfig extender客户端配置
     */
    public $ExtenderClientConfig;

    /**
     * @param string $FilterVerb 过滤阶段接口
     * @param string $PrioritizeVerb 打分阶段扩展接口
     * @param integer $Weight 打分阶段节点分数的权重,取值范围限定(0,2】
     * @param array $ManagedResources 扩展调度器(Extender)管理的扩展资源
     * @param ExtenderClientConfig $ExtenderClientConfig extender客户端配置
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
    }
}
