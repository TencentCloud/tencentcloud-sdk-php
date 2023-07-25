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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDockerActivities请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method array getActivityIds() 获取Docker活动ID列表。
 * @method void setActivityIds(array $ActivityIds) 设置Docker活动ID列表。
 * @method integer getOffset() 获取偏移量，默认为 0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0。
 * @method integer getLimit() 获取返回数量，默认为 20，最大值为 100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，最大值为 100。
 * @method integer getCreatedTimeBegin() 获取活动创建时间的起始值，时间戳秒数。
 * @method void setCreatedTimeBegin(integer $CreatedTimeBegin) 设置活动创建时间的起始值，时间戳秒数。
 * @method integer getCreatedTimeEnd() 获取活动创建时间的结束值，时间戳秒数。
 * @method void setCreatedTimeEnd(integer $CreatedTimeEnd) 设置活动创建时间的结束值，时间戳秒数。
 */
class DescribeDockerActivitiesRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var array Docker活动ID列表。
     */
    public $ActivityIds;

    /**
     * @var integer 偏移量，默认为 0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为 20，最大值为 100。
     */
    public $Limit;

    /**
     * @var integer 活动创建时间的起始值，时间戳秒数。
     */
    public $CreatedTimeBegin;

    /**
     * @var integer 活动创建时间的结束值，时间戳秒数。
     */
    public $CreatedTimeEnd;

    /**
     * @param string $InstanceId 实例ID。
     * @param array $ActivityIds Docker活动ID列表。
     * @param integer $Offset 偏移量，默认为 0。
     * @param integer $Limit 返回数量，默认为 20，最大值为 100。
     * @param integer $CreatedTimeBegin 活动创建时间的起始值，时间戳秒数。
     * @param integer $CreatedTimeEnd 活动创建时间的结束值，时间戳秒数。
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

        if (array_key_exists("ActivityIds",$param) and $param["ActivityIds"] !== null) {
            $this->ActivityIds = $param["ActivityIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CreatedTimeBegin",$param) and $param["CreatedTimeBegin"] !== null) {
            $this->CreatedTimeBegin = $param["CreatedTimeBegin"];
        }

        if (array_key_exists("CreatedTimeEnd",$param) and $param["CreatedTimeEnd"] !== null) {
            $this->CreatedTimeEnd = $param["CreatedTimeEnd"];
        }
    }
}
