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
namespace TencentCloud\Irp\V20220805\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReportFeedBehavior请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，在控制台获取
 * @method void setInstanceId(string $InstanceId) 设置实例ID，在控制台获取
 * @method array getFeedBehaviorList() 获取上报的行为数据数组，数量不超过50
 * @method void setFeedBehaviorList(array $FeedBehaviorList) 设置上报的行为数据数组，数量不超过50
 */
class ReportFeedBehaviorRequest extends AbstractModel
{
    /**
     * @var string 实例ID，在控制台获取
     */
    public $InstanceId;

    /**
     * @var array 上报的行为数据数组，数量不超过50
     */
    public $FeedBehaviorList;

    /**
     * @param string $InstanceId 实例ID，在控制台获取
     * @param array $FeedBehaviorList 上报的行为数据数组，数量不超过50
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("FeedBehaviorList",$param) and $param["FeedBehaviorList"] !== null) {
            $this->FeedBehaviorList = [];
            foreach ($param["FeedBehaviorList"] as $key => $value){
                $obj = new FeedBehaviorInfo();
                $obj->deserialize($value);
                array_push($this->FeedBehaviorList, $obj);
            }
        }
    }
}
