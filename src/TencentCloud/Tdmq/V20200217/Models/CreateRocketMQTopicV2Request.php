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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRocketMQTopicV2请求参数结构体
 *
 * @method string getTopic() 获取主题名称
 * @method void setTopic(string $Topic) 设置主题名称
 * @method string getType() 获取主题类型，可选值为Normal, GlobalOrder, PartitionedOrder, Transaction, DelayScheduled。Transaction仅在专享版支持。
 * @method void setType(string $Type) 设置主题类型，可选值为Normal, GlobalOrder, PartitionedOrder, Transaction, DelayScheduled。Transaction仅在专享版支持。
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getNamespace() 获取主题所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method void setNamespace(string $Namespace) 设置主题所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getPartitionNum() 获取分区数，全局顺序无效
 * @method void setPartitionNum(integer $PartitionNum) 设置分区数，全局顺序无效
 * @method array getTagList() 获取标签列表
 * @method void setTagList(array $TagList) 设置标签列表
 */
class CreateRocketMQTopicV2Request extends AbstractModel
{
    /**
     * @var string 主题名称
     */
    public $Topic;

    /**
     * @var string 主题类型，可选值为Normal, GlobalOrder, PartitionedOrder, Transaction, DelayScheduled。Transaction仅在专享版支持。
     */
    public $Type;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 主题所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
     */
    public $Namespace;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 分区数，全局顺序无效
     */
    public $PartitionNum;

    /**
     * @var array 标签列表
     */
    public $TagList;

    /**
     * @param string $Topic 主题名称
     * @param string $Type 主题类型，可选值为Normal, GlobalOrder, PartitionedOrder, Transaction, DelayScheduled。Transaction仅在专享版支持。
     * @param string $ClusterId 集群ID
     * @param string $Namespace 主题所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
     * @param string $Remark 备注
     * @param integer $PartitionNum 分区数，全局顺序无效
     * @param array $TagList 标签列表
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
