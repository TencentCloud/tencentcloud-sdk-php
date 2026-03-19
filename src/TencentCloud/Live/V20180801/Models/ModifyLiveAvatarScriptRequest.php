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
 * ModifyLiveAvatarScript请求参数结构体
 *
 * @method string getScriptId() 获取数字人直播间话术 ID。
 * @method void setScriptId(string $ScriptId) 设置数字人直播间话术 ID。
 * @method string getTitle() 获取话术标题，限制500字节。
 * @method void setTitle(string $Title) 设置话术标题，限制500字节。
 * @method string getContent() 获取话术内容，限制1000字节。
 * @method void setContent(string $Content) 设置话术内容，限制1000字节。
 * @method integer getSpecifyPosition() 获取修改已有话术的位置。
比如已有话术三条，位置分别为100，200，300。
可将第三条话术改到第一条和第二条中间，则可指定第三条话术的位置为 150。
每次指定尽量取两条话术的中间位置，如50,150等，为后面顺序调整预留位置。
 * @method void setSpecifyPosition(integer $SpecifyPosition) 设置修改已有话术的位置。
比如已有话术三条，位置分别为100，200，300。
可将第三条话术改到第一条和第二条中间，则可指定第三条话术的位置为 150。
每次指定尽量取两条话术的中间位置，如50,150等，为后面顺序调整预留位置。
 * @method string getOperator() 获取操作者。
 * @method void setOperator(string $Operator) 设置操作者。
 */
class ModifyLiveAvatarScriptRequest extends AbstractModel
{
    /**
     * @var string 数字人直播间话术 ID。
     */
    public $ScriptId;

    /**
     * @var string 话术标题，限制500字节。
     */
    public $Title;

    /**
     * @var string 话术内容，限制1000字节。
     */
    public $Content;

    /**
     * @var integer 修改已有话术的位置。
比如已有话术三条，位置分别为100，200，300。
可将第三条话术改到第一条和第二条中间，则可指定第三条话术的位置为 150。
每次指定尽量取两条话术的中间位置，如50,150等，为后面顺序调整预留位置。
     */
    public $SpecifyPosition;

    /**
     * @var string 操作者。
     */
    public $Operator;

    /**
     * @param string $ScriptId 数字人直播间话术 ID。
     * @param string $Title 话术标题，限制500字节。
     * @param string $Content 话术内容，限制1000字节。
     * @param integer $SpecifyPosition 修改已有话术的位置。
比如已有话术三条，位置分别为100，200，300。
可将第三条话术改到第一条和第二条中间，则可指定第三条话术的位置为 150。
每次指定尽量取两条话术的中间位置，如50,150等，为后面顺序调整预留位置。
     * @param string $Operator 操作者。
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

        if (array_key_exists("SpecifyPosition",$param) and $param["SpecifyPosition"] !== null) {
            $this->SpecifyPosition = $param["SpecifyPosition"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
