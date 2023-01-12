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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRocketMQTopic请求参数结构体
 *
 * @method string getTopic() 获取主题名称，3-64个字符，只能包含字母、数字、“-”及“_”
 * @method void setTopic(string $Topic) 设置主题名称，3-64个字符，只能包含字母、数字、“-”及“_”
 * @method array getNamespaces() 获取主题所在的命名空间，目前支持在单个命名空间下创建主题
 * @method void setNamespaces(array $Namespaces) 设置主题所在的命名空间，目前支持在单个命名空间下创建主题
 * @method string getType() 获取主题类型，可选值为Normal, PartitionedOrder, Transaction, DelayScheduled。
 * @method void setType(string $Type) 设置主题类型，可选值为Normal, PartitionedOrder, Transaction, DelayScheduled。
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getRemark() 获取主题说明，最大128个字符
 * @method void setRemark(string $Remark) 设置主题说明，最大128个字符
 * @method integer getPartitionNum() 获取分区数，全局顺序无效
 * @method void setPartitionNum(integer $PartitionNum) 设置分区数，全局顺序无效
 */
class CreateRocketMQTopicRequest extends AbstractModel
{
    /**
     * @var string 主题名称，3-64个字符，只能包含字母、数字、“-”及“_”
     */
    public $Topic;

    /**
     * @var array 主题所在的命名空间，目前支持在单个命名空间下创建主题
     */
    public $Namespaces;

    /**
     * @var string 主题类型，可选值为Normal, PartitionedOrder, Transaction, DelayScheduled。
     */
    public $Type;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 主题说明，最大128个字符
     */
    public $Remark;

    /**
     * @var integer 分区数，全局顺序无效
     */
    public $PartitionNum;

    /**
     * @param string $Topic 主题名称，3-64个字符，只能包含字母、数字、“-”及“_”
     * @param array $Namespaces 主题所在的命名空间，目前支持在单个命名空间下创建主题
     * @param string $Type 主题类型，可选值为Normal, PartitionedOrder, Transaction, DelayScheduled。
     * @param string $ClusterId 集群ID
     * @param string $Remark 主题说明，最大128个字符
     * @param integer $PartitionNum 分区数，全局顺序无效
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
        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Namespaces",$param) and $param["Namespaces"] !== null) {
            $this->Namespaces = $param["Namespaces"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }
    }
}
