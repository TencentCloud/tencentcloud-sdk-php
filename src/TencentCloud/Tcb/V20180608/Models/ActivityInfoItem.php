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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 活动信息
 *
 * @method integer getActivityId() 获取活动id
 * @method void setActivityId(integer $ActivityId) 设置活动id
 * @method string getCreateTime() 获取记录插入时间
 * @method void setCreateTime(string $CreateTime) 设置记录插入时间
 * @method string getUpdateTime() 获取记录最后一次变更时间
 * @method void setUpdateTime(string $UpdateTime) 设置记录最后一次变更时间
 * @method string getStartTime() 获取活动开始时间
 * @method void setStartTime(string $StartTime) 设置活动开始时间
 * @method string getExpireTime() 获取活动结束时间
 * @method void setExpireTime(string $ExpireTime) 设置活动结束时间
 * @method string getTag() 获取自定义备注信息
 * @method void setTag(string $Tag) 设置自定义备注信息
 */
class ActivityInfoItem extends AbstractModel
{
    /**
     * @var integer 活动id
     */
    public $ActivityId;

    /**
     * @var string 记录插入时间
     */
    public $CreateTime;

    /**
     * @var string 记录最后一次变更时间
     */
    public $UpdateTime;

    /**
     * @var string 活动开始时间
     */
    public $StartTime;

    /**
     * @var string 活动结束时间
     */
    public $ExpireTime;

    /**
     * @var string 自定义备注信息
     */
    public $Tag;

    /**
     * @param integer $ActivityId 活动id
     * @param string $CreateTime 记录插入时间
     * @param string $UpdateTime 记录最后一次变更时间
     * @param string $StartTime 活动开始时间
     * @param string $ExpireTime 活动结束时间
     * @param string $Tag 自定义备注信息
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
        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
