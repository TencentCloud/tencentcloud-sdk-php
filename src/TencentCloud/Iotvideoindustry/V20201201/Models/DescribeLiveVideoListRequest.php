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
 * DescribeLiveVideoList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取分页的每页数量
 * @method void setLimit(integer $Limit) 设置分页的每页数量
 * @method string getLiveChannelId() 获取直播频道ID
 * @method void setLiveChannelId(string $LiveChannelId) 设置直播频道ID
 * @method integer getStartRecordTime() 获取开始录制开始时间
 * @method void setStartRecordTime(integer $StartRecordTime) 设置开始录制开始时间
 * @method integer getEndRecordTime() 获取开始录制结束时间
 * @method void setEndRecordTime(integer $EndRecordTime) 设置开始录制结束时间
 * @method integer getStartExpireTime() 获取过期开始时间
 * @method void setStartExpireTime(integer $StartExpireTime) 设置过期开始时间
 * @method integer getEndExpireTime() 获取过期结束时间
 * @method void setEndExpireTime(integer $EndExpireTime) 设置过期结束时间
 * @method integer getStartFileSize() 获取文件大小范围 Byte
 * @method void setStartFileSize(integer $StartFileSize) 设置文件大小范围 Byte
 * @method integer getEndFileSize() 获取文件大小范围 Byte
 * @method void setEndFileSize(integer $EndFileSize) 设置文件大小范围 Byte
 * @method integer getIsRecording() 获取录制状态，5: 录制回写完
 * @method void setIsRecording(integer $IsRecording) 设置录制状态，5: 录制回写完
 */
class DescribeLiveVideoListRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 分页的每页数量
     */
    public $Limit;

    /**
     * @var string 直播频道ID
     */
    public $LiveChannelId;

    /**
     * @var integer 开始录制开始时间
     */
    public $StartRecordTime;

    /**
     * @var integer 开始录制结束时间
     */
    public $EndRecordTime;

    /**
     * @var integer 过期开始时间
     */
    public $StartExpireTime;

    /**
     * @var integer 过期结束时间
     */
    public $EndExpireTime;

    /**
     * @var integer 文件大小范围 Byte
     */
    public $StartFileSize;

    /**
     * @var integer 文件大小范围 Byte
     */
    public $EndFileSize;

    /**
     * @var integer 录制状态，5: 录制回写完
     */
    public $IsRecording;

    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit 分页的每页数量
     * @param string $LiveChannelId 直播频道ID
     * @param integer $StartRecordTime 开始录制开始时间
     * @param integer $EndRecordTime 开始录制结束时间
     * @param integer $StartExpireTime 过期开始时间
     * @param integer $EndExpireTime 过期结束时间
     * @param integer $StartFileSize 文件大小范围 Byte
     * @param integer $EndFileSize 文件大小范围 Byte
     * @param integer $IsRecording 录制状态，5: 录制回写完
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

        if (array_key_exists("LiveChannelId",$param) and $param["LiveChannelId"] !== null) {
            $this->LiveChannelId = $param["LiveChannelId"];
        }

        if (array_key_exists("StartRecordTime",$param) and $param["StartRecordTime"] !== null) {
            $this->StartRecordTime = $param["StartRecordTime"];
        }

        if (array_key_exists("EndRecordTime",$param) and $param["EndRecordTime"] !== null) {
            $this->EndRecordTime = $param["EndRecordTime"];
        }

        if (array_key_exists("StartExpireTime",$param) and $param["StartExpireTime"] !== null) {
            $this->StartExpireTime = $param["StartExpireTime"];
        }

        if (array_key_exists("EndExpireTime",$param) and $param["EndExpireTime"] !== null) {
            $this->EndExpireTime = $param["EndExpireTime"];
        }

        if (array_key_exists("StartFileSize",$param) and $param["StartFileSize"] !== null) {
            $this->StartFileSize = $param["StartFileSize"];
        }

        if (array_key_exists("EndFileSize",$param) and $param["EndFileSize"] !== null) {
            $this->EndFileSize = $param["EndFileSize"];
        }

        if (array_key_exists("IsRecording",$param) and $param["IsRecording"] !== null) {
            $this->IsRecording = $param["IsRecording"];
        }
    }
}
