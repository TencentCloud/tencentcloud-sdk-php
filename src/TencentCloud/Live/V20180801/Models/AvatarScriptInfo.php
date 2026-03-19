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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数字人直播间话术信息。
 *
 * @method string getScriptId() 获取数字人直播间话术 ID。
 * @method void setScriptId(string $ScriptId) 设置数字人直播间话术 ID。
 * @method string getTitle() 获取话术标题。
 * @method void setTitle(string $Title) 设置话术标题。
 * @method string getContent() 获取话术内容。
 * @method void setContent(string $Content) 设置话术内容。
 * @method string getStatus() 获取话术状态。
PENDING --未生成。
PROCESSING --生成中。
READY --已生成。
 * @method void setStatus(string $Status) 设置话术状态。
PENDING --未生成。
PROCESSING --生成中。
READY --已生成。
 * @method integer getDuration() 获取时长。单位：毫秒。
 * @method void setDuration(integer $Duration) 设置时长。单位：毫秒。
 * @method integer getPosition() 获取话术位置。
 * @method void setPosition(integer $Position) 设置话术位置。
 * @method string getCreateTime() 获取话术创建时间，UTC时间。
注意：UTC时间和北京时间相差八小时。
 * @method void setCreateTime(string $CreateTime) 设置话术创建时间，UTC时间。
注意：UTC时间和北京时间相差八小时。
 * @method string getUpdateTime() 获取话术最后更新时间，UTC时间。
注意：UTC时间和北京时间相差八小时。
 * @method void setUpdateTime(string $UpdateTime) 设置话术最后更新时间，UTC时间。
注意：UTC时间和北京时间相差八小时。
 */
class AvatarScriptInfo extends AbstractModel
{
    /**
     * @var string 数字人直播间话术 ID。
     */
    public $ScriptId;

    /**
     * @var string 话术标题。
     */
    public $Title;

    /**
     * @var string 话术内容。
     */
    public $Content;

    /**
     * @var string 话术状态。
PENDING --未生成。
PROCESSING --生成中。
READY --已生成。
     */
    public $Status;

    /**
     * @var integer 时长。单位：毫秒。
     */
    public $Duration;

    /**
     * @var integer 话术位置。
     */
    public $Position;

    /**
     * @var string 话术创建时间，UTC时间。
注意：UTC时间和北京时间相差八小时。
     */
    public $CreateTime;

    /**
     * @var string 话术最后更新时间，UTC时间。
注意：UTC时间和北京时间相差八小时。
     */
    public $UpdateTime;

    /**
     * @param string $ScriptId 数字人直播间话术 ID。
     * @param string $Title 话术标题。
     * @param string $Content 话术内容。
     * @param string $Status 话术状态。
PENDING --未生成。
PROCESSING --生成中。
READY --已生成。
     * @param integer $Duration 时长。单位：毫秒。
     * @param integer $Position 话术位置。
     * @param string $CreateTime 话术创建时间，UTC时间。
注意：UTC时间和北京时间相差八小时。
     * @param string $UpdateTime 话术最后更新时间，UTC时间。
注意：UTC时间和北京时间相差八小时。
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
        if (array_key_exists("ScriptId",$param) and $param["ScriptId"] !== null) {
            $this->ScriptId = $param["ScriptId"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
