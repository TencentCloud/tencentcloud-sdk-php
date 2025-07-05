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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动作策略的一条分数段实体
 *
 * @method string getUpper() 获取分数区间上限
 * @method void setUpper(string $Upper) 设置分数区间上限
 * @method string getLower() 获取分数区间下限
 * @method void setLower(string $Lower) 设置分数区间下限
 * @method string getAction() 获取处置动作
 * @method void setAction(string $Action) 设置处置动作
 * @method string getLabel() 获取流量标签
 * @method void setLabel(string $Label) 设置流量标签
 * @method string getRedirect() 获取重定向
 * @method void setRedirect(string $Redirect) 设置重定向
 */
class BotScoreRuleEntry extends AbstractModel
{
    /**
     * @var string 分数区间上限
     */
    public $Upper;

    /**
     * @var string 分数区间下限
     */
    public $Lower;

    /**
     * @var string 处置动作
     */
    public $Action;

    /**
     * @var string 流量标签
     */
    public $Label;

    /**
     * @var string 重定向
     */
    public $Redirect;

    /**
     * @param string $Upper 分数区间上限
     * @param string $Lower 分数区间下限
     * @param string $Action 处置动作
     * @param string $Label 流量标签
     * @param string $Redirect 重定向
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
        if (array_key_exists("Upper",$param) and $param["Upper"] !== null) {
            $this->Upper = $param["Upper"];
        }

        if (array_key_exists("Lower",$param) and $param["Lower"] !== null) {
            $this->Lower = $param["Lower"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Redirect",$param) and $param["Redirect"] !== null) {
            $this->Redirect = $param["Redirect"];
        }
    }
}
