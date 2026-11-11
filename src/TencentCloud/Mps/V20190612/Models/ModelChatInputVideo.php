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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频输入配置。
 *
 * @method ModelChatMediaInputInfo getInputInfo() 获取<p>媒体文件输入</p>
 * @method void setInputInfo(ModelChatMediaInputInfo $InputInfo) 设置<p>媒体文件输入</p>
 */
class ModelChatInputVideo extends AbstractModel
{
    /**
     * @var ModelChatMediaInputInfo <p>媒体文件输入</p>
     */
    public $InputInfo;

    /**
     * @param ModelChatMediaInputInfo $InputInfo <p>媒体文件输入</p>
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
        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new ModelChatMediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }
    }
}
