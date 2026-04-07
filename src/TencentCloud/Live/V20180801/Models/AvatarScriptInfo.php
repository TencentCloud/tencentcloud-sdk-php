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
 * @method string getScriptId() 获取<p>数字人直播间话术 ID。</p>
 * @method void setScriptId(string $ScriptId) 设置<p>数字人直播间话术 ID。</p>
 * @method string getProductId() 获取<p>数字人直播间产品 ID。</p>
 * @method void setProductId(string $ProductId) 设置<p>数字人直播间产品 ID。</p>
 * @method string getTitle() 获取<p>话术标题。</p>
 * @method void setTitle(string $Title) 设置<p>话术标题。</p>
 * @method string getContent() 获取<p>话术内容。</p>
 * @method void setContent(string $Content) 设置<p>话术内容。</p>
 * @method string getStatus() 获取<p>话术状态。PENDING --未生成。PROCESSING --生成中。READY --已生成。FAILED-失败</p><p>枚举值：</p><ul><li>FAILED： 失败</li></ul>
 * @method void setStatus(string $Status) 设置<p>话术状态。PENDING --未生成。PROCESSING --生成中。READY --已生成。FAILED-失败</p><p>枚举值：</p><ul><li>FAILED： 失败</li></ul>
 * @method integer getDuration() 获取<p>时长。单位：毫秒。</p>
 * @method void setDuration(integer $Duration) 设置<p>时长。单位：毫秒。</p>
 * @method integer getPosition() 获取<p>话术位置。</p>
 * @method void setPosition(integer $Position) 设置<p>话术位置。</p>
 * @method string getCreateTime() 获取<p>话术创建时间，UTC时间。<br>注意：UTC时间和北京时间相差八小时。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>话术创建时间，UTC时间。<br>注意：UTC时间和北京时间相差八小时。</p>
 * @method string getUpdateTime() 获取<p>话术最后更新时间，UTC时间。<br>注意：UTC时间和北京时间相差八小时。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>话术最后更新时间，UTC时间。<br>注意：UTC时间和北京时间相差八小时。</p>
 */
class AvatarScriptInfo extends AbstractModel
{
    /**
     * @var string <p>数字人直播间话术 ID。</p>
     */
    public $ScriptId;

    /**
     * @var string <p>数字人直播间产品 ID。</p>
     */
    public $ProductId;

    /**
     * @var string <p>话术标题。</p>
     */
    public $Title;

    /**
     * @var string <p>话术内容。</p>
     */
    public $Content;

    /**
     * @var string <p>话术状态。PENDING --未生成。PROCESSING --生成中。READY --已生成。FAILED-失败</p><p>枚举值：</p><ul><li>FAILED： 失败</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>时长。单位：毫秒。</p>
     */
    public $Duration;

    /**
     * @var integer <p>话术位置。</p>
     */
    public $Position;

    /**
     * @var string <p>话术创建时间，UTC时间。<br>注意：UTC时间和北京时间相差八小时。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>话术最后更新时间，UTC时间。<br>注意：UTC时间和北京时间相差八小时。</p>
     */
    public $UpdateTime;

    /**
     * @param string $ScriptId <p>数字人直播间话术 ID。</p>
     * @param string $ProductId <p>数字人直播间产品 ID。</p>
     * @param string $Title <p>话术标题。</p>
     * @param string $Content <p>话术内容。</p>
     * @param string $Status <p>话术状态。PENDING --未生成。PROCESSING --生成中。READY --已生成。FAILED-失败</p><p>枚举值：</p><ul><li>FAILED： 失败</li></ul>
     * @param integer $Duration <p>时长。单位：毫秒。</p>
     * @param integer $Position <p>话术位置。</p>
     * @param string $CreateTime <p>话术创建时间，UTC时间。<br>注意：UTC时间和北京时间相差八小时。</p>
     * @param string $UpdateTime <p>话术最后更新时间，UTC时间。<br>注意：UTC时间和北京时间相差八小时。</p>
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

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
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
