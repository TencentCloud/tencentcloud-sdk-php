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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分组列表
 *
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method array getConsumerGroups() 获取消费者分组信息
 * @method void setConsumerGroups(array $ConsumerGroups) 设置消费者分组信息
 */
class CNAPIGwConsumerGroupList extends AbstractModel
{
    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var array 消费者分组信息
     */
    public $ConsumerGroups;

    /**
     * @param integer $TotalCount 总数
     * @param array $ConsumerGroups 消费者分组信息
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ConsumerGroups",$param) and $param["ConsumerGroups"] !== null) {
            $this->ConsumerGroups = [];
            foreach ($param["ConsumerGroups"] as $key => $value){
                $obj = new CNAPIGwConsumerGroup();
                $obj->deserialize($value);
                array_push($this->ConsumerGroups, $obj);
            }
        }
    }
}
