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
 * ModifyRocketMQTopic请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getNamespaceId() 获取命名空间名称
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间名称
 * @method string getTopic() 获取主题名称
 * @method void setTopic(string $Topic) 设置主题名称
 * @method string getRemark() 获取说明信息，最大128个字符
 * @method void setRemark(string $Remark) 设置说明信息，最大128个字符
 * @method integer getPartitionNum() 获取分区数，全局类型无效，不可小于当前分区数
 * @method void setPartitionNum(integer $PartitionNum) 设置分区数，全局类型无效，不可小于当前分区数
 */
class ModifyRocketMQTopicRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 命名空间名称
     */
    public $NamespaceId;

    /**
     * @var string 主题名称
     */
    public $Topic;

    /**
     * @var string 说明信息，最大128个字符
     */
    public $Remark;

    /**
     * @var integer 分区数，全局类型无效，不可小于当前分区数
     */
    public $PartitionNum;

    /**
     * @param string $ClusterId 集群ID
     * @param string $NamespaceId 命名空间名称
     * @param string $Topic 主题名称
     * @param string $Remark 说明信息，最大128个字符
     * @param integer $PartitionNum 分区数，全局类型无效，不可小于当前分区数
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }
    }
}
