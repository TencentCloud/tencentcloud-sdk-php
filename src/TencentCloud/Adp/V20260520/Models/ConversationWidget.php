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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Widget 组件内容信息
 *
 * @method string getEncodedWidget() 获取<p>Base64 编码的原始 widget 数据</p>
 * @method void setEncodedWidget(string $EncodedWidget) 设置<p>Base64 编码的原始 widget 数据</p>
 * @method string getPayload() 获取<p>用户上次提交的 payload</p>
 * @method void setPayload(string $Payload) 设置<p>用户上次提交的 payload</p>
 * @method integer getPosition() 获取<p>widget 在正文中的位置</p>
 * @method void setPosition(integer $Position) 设置<p>widget 在正文中的位置</p>
 * @method string getState() 获取<p>widget 状态 JSON 数据</p>
 * @method void setState(string $State) 设置<p>widget 状态 JSON 数据</p>
 * @method string getView() 获取<p>widget 视图数据</p>
 * @method void setView(string $View) 设置<p>widget 视图数据</p>
 * @method string getWidgetId() 获取<p>组件 ID</p>
 * @method void setWidgetId(string $WidgetId) 设置<p>组件 ID</p>
 * @method string getWidgetRunId() 获取<p>组件运行 ID</p>
 * @method void setWidgetRunId(string $WidgetRunId) 设置<p>组件运行 ID</p>
 */
class ConversationWidget extends AbstractModel
{
    /**
     * @var string <p>Base64 编码的原始 widget 数据</p>
     */
    public $EncodedWidget;

    /**
     * @var string <p>用户上次提交的 payload</p>
     */
    public $Payload;

    /**
     * @var integer <p>widget 在正文中的位置</p>
     */
    public $Position;

    /**
     * @var string <p>widget 状态 JSON 数据</p>
     */
    public $State;

    /**
     * @var string <p>widget 视图数据</p>
     */
    public $View;

    /**
     * @var string <p>组件 ID</p>
     */
    public $WidgetId;

    /**
     * @var string <p>组件运行 ID</p>
     */
    public $WidgetRunId;

    /**
     * @param string $EncodedWidget <p>Base64 编码的原始 widget 数据</p>
     * @param string $Payload <p>用户上次提交的 payload</p>
     * @param integer $Position <p>widget 在正文中的位置</p>
     * @param string $State <p>widget 状态 JSON 数据</p>
     * @param string $View <p>widget 视图数据</p>
     * @param string $WidgetId <p>组件 ID</p>
     * @param string $WidgetRunId <p>组件运行 ID</p>
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
        if (array_key_exists("EncodedWidget",$param) and $param["EncodedWidget"] !== null) {
            $this->EncodedWidget = $param["EncodedWidget"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("View",$param) and $param["View"] !== null) {
            $this->View = $param["View"];
        }

        if (array_key_exists("WidgetId",$param) and $param["WidgetId"] !== null) {
            $this->WidgetId = $param["WidgetId"];
        }

        if (array_key_exists("WidgetRunId",$param) and $param["WidgetRunId"] !== null) {
            $this->WidgetRunId = $param["WidgetRunId"];
        }
    }
}
