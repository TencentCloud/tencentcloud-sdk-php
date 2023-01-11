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
namespace TencentCloud\Thpc\V20220401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扩容队列配置概览。
 *
 * @method string getQueueName() 获取队列名称。
 * @method void setQueueName(string $QueueName) 设置队列名称。
 * @method integer getMinSize() 获取队列中弹性节点数量最小值。取值范围0～200。
 * @method void setMinSize(integer $MinSize) 设置队列中弹性节点数量最小值。取值范围0～200。
 * @method integer getMaxSize() 获取队列中弹性节点数量最大值。取值范围0～200。
 * @method void setMaxSize(integer $MaxSize) 设置队列中弹性节点数量最大值。取值范围0～200。
 * @method boolean getEnableAutoExpansion() 获取是否开启自动扩容。
 * @method void setEnableAutoExpansion(boolean $EnableAutoExpansion) 设置是否开启自动扩容。
 * @method boolean getEnableAutoShrink() 获取是否开启自动缩容。
 * @method void setEnableAutoShrink(boolean $EnableAutoShrink) 设置是否开启自动缩容。
 * @method array getExpansionNodeConfigs() 获取扩容节点配置信息。
 * @method void setExpansionNodeConfigs(array $ExpansionNodeConfigs) 设置扩容节点配置信息。
 */
class QueueConfigOverview extends AbstractModel
{
    /**
     * @var string 队列名称。
     */
    public $QueueName;

    /**
     * @var integer 队列中弹性节点数量最小值。取值范围0～200。
     */
    public $MinSize;

    /**
     * @var integer 队列中弹性节点数量最大值。取值范围0～200。
     */
    public $MaxSize;

    /**
     * @var boolean 是否开启自动扩容。
     */
    public $EnableAutoExpansion;

    /**
     * @var boolean 是否开启自动缩容。
     */
    public $EnableAutoShrink;

    /**
     * @var array 扩容节点配置信息。
     */
    public $ExpansionNodeConfigs;

    /**
     * @param string $QueueName 队列名称。
     * @param integer $MinSize 队列中弹性节点数量最小值。取值范围0～200。
     * @param integer $MaxSize 队列中弹性节点数量最大值。取值范围0～200。
     * @param boolean $EnableAutoExpansion 是否开启自动扩容。
     * @param boolean $EnableAutoShrink 是否开启自动缩容。
     * @param array $ExpansionNodeConfigs 扩容节点配置信息。
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
        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("EnableAutoExpansion",$param) and $param["EnableAutoExpansion"] !== null) {
            $this->EnableAutoExpansion = $param["EnableAutoExpansion"];
        }

        if (array_key_exists("EnableAutoShrink",$param) and $param["EnableAutoShrink"] !== null) {
            $this->EnableAutoShrink = $param["EnableAutoShrink"];
        }

        if (array_key_exists("ExpansionNodeConfigs",$param) and $param["ExpansionNodeConfigs"] !== null) {
            $this->ExpansionNodeConfigs = [];
            foreach ($param["ExpansionNodeConfigs"] as $key => $value){
                $obj = new ExpansionNodeConfigOverview();
                $obj->deserialize($value);
                array_push($this->ExpansionNodeConfigs, $obj);
            }
        }
    }
}
