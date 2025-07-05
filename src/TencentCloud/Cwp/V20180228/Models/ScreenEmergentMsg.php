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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大屏可视化紧急通知
 *
 * @method string getTitle() 获取通知标签/标题
 * @method void setTitle(string $Title) 设置通知标签/标题
 * @method string getText() 获取通知内容
 * @method void setText(string $Text) 设置通知内容
 * @method integer getType() 获取跳转类型：0=漏洞管理
 * @method void setType(integer $Type) 设置跳转类型：0=漏洞管理
 */
class ScreenEmergentMsg extends AbstractModel
{
    /**
     * @var string 通知标签/标题
     */
    public $Title;

    /**
     * @var string 通知内容
     */
    public $Text;

    /**
     * @var integer 跳转类型：0=漏洞管理
     */
    public $Type;

    /**
     * @param string $Title 通知标签/标题
     * @param string $Text 通知内容
     * @param integer $Type 跳转类型：0=漏洞管理
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
