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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 沙箱工具日志采集相关配置
 *
 * @method CLSConfig getCLSConfig() 获取日志推送CLS的配置。
 * @method void setCLSConfig(CLSConfig $CLSConfig) 设置日志推送CLS的配置。
 */
class LogConfiguration extends AbstractModel
{
    /**
     * @var CLSConfig 日志推送CLS的配置。
     */
    public $CLSConfig;

    /**
     * @param CLSConfig $CLSConfig 日志推送CLS的配置。
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
        if (array_key_exists("CLSConfig",$param) and $param["CLSConfig"] !== null) {
            $this->CLSConfig = new CLSConfig();
            $this->CLSConfig->deserialize($param["CLSConfig"]);
        }
    }
}
