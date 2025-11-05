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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审核结果明细（对外）
 *
 * @method string getTaskId() 获取任务 ID
 * @method void setTaskId(string $TaskId) 设置任务 ID
 * @method string getRoomId() 获取房间 ID
 * @method void setRoomId(string $RoomId) 设置房间 ID
 * @method string getOpenId() 获取UserID
 * @method void setOpenId(string $OpenId) 设置UserID
 * @method string getLabel() 获取标签
 * @method void setLabel(string $Label) 设置标签
 * @method float getRate() 获取恶意分数
 * @method void setRate(float $Rate) 设置恶意分数
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method string getUrl() 获取音频 Url
 * @method void setUrl(string $Url) 设置音频 Url
 * @method string getFileId() 获取文件Id
 * @method void setFileId(string $FileId) 设置文件Id
 * @method string getInfo() 获取ASR结果
 * @method void setInfo(string $Info) 设置ASR结果
 */
class AuditResultDetailExternal extends AbstractModel
{
    /**
     * @var string 任务 ID
     */
    public $TaskId;

    /**
     * @var string 房间 ID
     */
    public $RoomId;

    /**
     * @var string UserID
     */
    public $OpenId;

    /**
     * @var string 标签
     */
    public $Label;

    /**
     * @var float 恶意分数
     */
    public $Rate;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var string 音频 Url
     */
    public $Url;

    /**
     * @var string 文件Id
     */
    public $FileId;

    /**
     * @var string ASR结果
     */
    public $Info;

    /**
     * @param string $TaskId 任务 ID
     * @param string $RoomId 房间 ID
     * @param string $OpenId UserID
     * @param string $Label 标签
     * @param float $Rate 恶意分数
     * @param integer $CreateTime 创建时间
     * @param string $Url 音频 Url
     * @param string $FileId 文件Id
     * @param string $Info ASR结果
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }
    }
}
