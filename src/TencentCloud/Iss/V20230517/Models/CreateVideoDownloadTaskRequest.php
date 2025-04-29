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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVideoDownloadTask请求参数结构体
 *
 * @method string getChannelId() 获取通道ID
 * @method void setChannelId(string $ChannelId) 设置通道ID
 * @method integer getBeginTime() 获取开始时间
 * @method void setBeginTime(integer $BeginTime) 设置开始时间
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 * @method integer getScale() 获取默认1倍速，支持（1,2,4,8）倍速
 * @method void setScale(integer $Scale) 设置默认1倍速，支持（1,2,4,8）倍速
 * @method integer getExpire() 获取转码后的mp4文件过期时间（支持7,15,30,60,90,180,365）
 * @method void setExpire(integer $Expire) 设置转码后的mp4文件过期时间（支持7,15,30,60,90,180,365）
 * @method integer getFileType() 获取下载文件格式，当前仅支持（1：mp4）
 * @method void setFileType(integer $FileType) 设置下载文件格式，当前仅支持（1：mp4）
 * @method integer getCompletionPolicy() 获取完成策略（0：拉流失败但是录像不完整则认为任务失败，不生成 MP4；1：拉流失败但是录像不完整则认为任务成功，生成 mp4）
 * @method void setCompletionPolicy(integer $CompletionPolicy) 设置完成策略（0：拉流失败但是录像不完整则认为任务失败，不生成 MP4；1：拉流失败但是录像不完整则认为任务成功，生成 mp4）
 */
class CreateVideoDownloadTaskRequest extends AbstractModel
{
    /**
     * @var string 通道ID
     */
    public $ChannelId;

    /**
     * @var integer 开始时间
     */
    public $BeginTime;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @var integer 默认1倍速，支持（1,2,4,8）倍速
     */
    public $Scale;

    /**
     * @var integer 转码后的mp4文件过期时间（支持7,15,30,60,90,180,365）
     */
    public $Expire;

    /**
     * @var integer 下载文件格式，当前仅支持（1：mp4）
     */
    public $FileType;

    /**
     * @var integer 完成策略（0：拉流失败但是录像不完整则认为任务失败，不生成 MP4；1：拉流失败但是录像不完整则认为任务成功，生成 mp4）
     */
    public $CompletionPolicy;

    /**
     * @param string $ChannelId 通道ID
     * @param integer $BeginTime 开始时间
     * @param integer $EndTime 结束时间
     * @param integer $Scale 默认1倍速，支持（1,2,4,8）倍速
     * @param integer $Expire 转码后的mp4文件过期时间（支持7,15,30,60,90,180,365）
     * @param integer $FileType 下载文件格式，当前仅支持（1：mp4）
     * @param integer $CompletionPolicy 完成策略（0：拉流失败但是录像不完整则认为任务失败，不生成 MP4；1：拉流失败但是录像不完整则认为任务成功，生成 mp4）
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }

        if (array_key_exists("Expire",$param) and $param["Expire"] !== null) {
            $this->Expire = $param["Expire"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("CompletionPolicy",$param) and $param["CompletionPolicy"] !== null) {
            $this->CompletionPolicy = $param["CompletionPolicy"];
        }
    }
}
