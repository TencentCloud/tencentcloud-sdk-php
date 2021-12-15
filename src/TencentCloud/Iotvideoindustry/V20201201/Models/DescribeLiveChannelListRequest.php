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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveChannelList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取最大数
 * @method void setLimit(integer $Limit) 设置最大数
 * @method integer getLiveChannelType() 获取直播频道类型，1：固定直播；2：移动直播
 * @method void setLiveChannelType(integer $LiveChannelType) 设置直播频道类型，1：固定直播；2：移动直播
 * @method string getRecordPlanId() 获取直播录制计划ID, null: 直播录制计划为空
 * @method void setRecordPlanId(string $RecordPlanId) 设置直播录制计划ID, null: 直播录制计划为空
 * @method string getLiveChannelName() 获取频道名称 (支持模糊搜索)
 * @method void setLiveChannelName(string $LiveChannelName) 设置频道名称 (支持模糊搜索)
 */
class DescribeLiveChannelListRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 最大数
     */
    public $Limit;

    /**
     * @var integer 直播频道类型，1：固定直播；2：移动直播
     */
    public $LiveChannelType;

    /**
     * @var string 直播录制计划ID, null: 直播录制计划为空
     */
    public $RecordPlanId;

    /**
     * @var string 频道名称 (支持模糊搜索)
     */
    public $LiveChannelName;

    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit 最大数
     * @param integer $LiveChannelType 直播频道类型，1：固定直播；2：移动直播
     * @param string $RecordPlanId 直播录制计划ID, null: 直播录制计划为空
     * @param string $LiveChannelName 频道名称 (支持模糊搜索)
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("LiveChannelType",$param) and $param["LiveChannelType"] !== null) {
            $this->LiveChannelType = $param["LiveChannelType"];
        }

        if (array_key_exists("RecordPlanId",$param) and $param["RecordPlanId"] !== null) {
            $this->RecordPlanId = $param["RecordPlanId"];
        }

        if (array_key_exists("LiveChannelName",$param) and $param["LiveChannelName"] !== null) {
            $this->LiveChannelName = $param["LiveChannelName"];
        }
    }
}
