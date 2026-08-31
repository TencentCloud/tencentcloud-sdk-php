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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AIGC 混元 3D 任务的输出媒体文件配置。
 *
 * @method string getStorageMode() 获取<p>存储模式。取值有： <li>Temporary：临时存储；</li>默认值：Temporary</p>
 * @method void setStorageMode(string $StorageMode) 设置<p>存储模式。取值有： <li>Temporary：临时存储；</li>默认值：Temporary</p>
 */
class AigcHunyuan3DOutputConfig extends AbstractModel
{
    /**
     * @var string <p>存储模式。取值有： <li>Temporary：临时存储；</li>默认值：Temporary</p>
     */
    public $StorageMode;

    /**
     * @param string $StorageMode <p>存储模式。取值有： <li>Temporary：临时存储；</li>默认值：Temporary</p>
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
        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }
    }
}
