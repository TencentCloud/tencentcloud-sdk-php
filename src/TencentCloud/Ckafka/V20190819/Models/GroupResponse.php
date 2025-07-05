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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGroup的返回
 *
 * @method integer getTotalCount() 获取计数
 * @method void setTotalCount(integer $TotalCount) 设置计数
 * @method array getGroupList() 获取GroupList
 * @method void setGroupList(array $GroupList) 设置GroupList
 * @method integer getGroupCountQuota() 获取消费分组配额
 * @method void setGroupCountQuota(integer $GroupCountQuota) 设置消费分组配额
 */
class GroupResponse extends AbstractModel
{
    /**
     * @var integer 计数
     */
    public $TotalCount;

    /**
     * @var array GroupList
     */
    public $GroupList;

    /**
     * @var integer 消费分组配额
     */
    public $GroupCountQuota;

    /**
     * @param integer $TotalCount 计数
     * @param array $GroupList GroupList
     * @param integer $GroupCountQuota 消费分组配额
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

        if (array_key_exists("GroupList",$param) and $param["GroupList"] !== null) {
            $this->GroupList = [];
            foreach ($param["GroupList"] as $key => $value){
                $obj = new DescribeGroup();
                $obj->deserialize($value);
                array_push($this->GroupList, $obj);
            }
        }

        if (array_key_exists("GroupCountQuota",$param) and $param["GroupCountQuota"] !== null) {
            $this->GroupCountQuota = $param["GroupCountQuota"];
        }
    }
}
