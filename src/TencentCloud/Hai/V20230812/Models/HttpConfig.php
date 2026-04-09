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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * http配置信息
 *
 * @method string getPath() 获取<p>指定健康检查的URL路径</p>
 * @method void setPath(string $Path) 设置<p>指定健康检查的URL路径</p>
 * @method integer getPort() 获取<p>指定健康检查的端口</p>
 * @method void setPort(integer $Port) 设置<p>指定健康检查的端口</p>
 */
class HttpConfig extends AbstractModel
{
    /**
     * @var string <p>指定健康检查的URL路径</p>
     */
    public $Path;

    /**
     * @var integer <p>指定健康检查的端口</p>
     */
    public $Port;

    /**
     * @param string $Path <p>指定健康检查的URL路径</p>
     * @param integer $Port <p>指定健康检查的端口</p>
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
