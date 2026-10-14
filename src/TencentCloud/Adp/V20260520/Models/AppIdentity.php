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
 * 应用标识
 *
 * @method string getAppId() 获取<p>应用ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用ID</p>
 * @method string getAppName() 获取<p>应用名称</p>
 * @method void setAppName(string $AppName) 设置<p>应用名称</p>
 * @method integer getAppMode() 获取<p>应用模式</p><p>枚举值：</p><ul><li>1： 标准模式</li><li>2： agent模式</li><li>3： 单工作流模式</li><li>4： ClawAgent模式</li></ul>
 * @method void setAppMode(integer $AppMode) 设置<p>应用模式</p><p>枚举值：</p><ul><li>1： 标准模式</li><li>2： agent模式</li><li>3： 单工作流模式</li><li>4： ClawAgent模式</li></ul>
 */
class AppIdentity extends AbstractModel
{
    /**
     * @var string <p>应用ID</p>
     */
    public $AppId;

    /**
     * @var string <p>应用名称</p>
     */
    public $AppName;

    /**
     * @var integer <p>应用模式</p><p>枚举值：</p><ul><li>1： 标准模式</li><li>2： agent模式</li><li>3： 单工作流模式</li><li>4： ClawAgent模式</li></ul>
     */
    public $AppMode;

    /**
     * @param string $AppId <p>应用ID</p>
     * @param string $AppName <p>应用名称</p>
     * @param integer $AppMode <p>应用模式</p><p>枚举值：</p><ul><li>1： 标准模式</li><li>2： agent模式</li><li>3： 单工作流模式</li><li>4： ClawAgent模式</li></ul>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AppMode",$param) and $param["AppMode"] !== null) {
            $this->AppMode = $param["AppMode"];
        }
    }
}
