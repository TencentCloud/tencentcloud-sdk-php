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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Topic 副本及详情数据集合
 *
 * @method array getTopicInSyncReplicaList() 获取Topic详情及副本合集
 * @method void setTopicInSyncReplicaList(array $TopicInSyncReplicaList) 设置Topic详情及副本合集
 * @method integer getTotalCount() 获取总计个数
 * @method void setTotalCount(integer $TotalCount) 设置总计个数
 */
class TopicInSyncReplicaResult extends AbstractModel
{
    /**
     * @var array Topic详情及副本合集
     */
    public $TopicInSyncReplicaList;

    /**
     * @var integer 总计个数
     */
    public $TotalCount;

    /**
     * @param array $TopicInSyncReplicaList Topic详情及副本合集
     * @param integer $TotalCount 总计个数
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
        if (array_key_exists("TopicInSyncReplicaList",$param) and $param["TopicInSyncReplicaList"] !== null) {
            $this->TopicInSyncReplicaList = [];
            foreach ($param["TopicInSyncReplicaList"] as $key => $value){
                $obj = new TopicInSyncReplicaInfo();
                $obj->deserialize($value);
                array_push($this->TopicInSyncReplicaList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
