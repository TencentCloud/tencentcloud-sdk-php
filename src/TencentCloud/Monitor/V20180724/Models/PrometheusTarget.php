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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * prometheus一个抓取目标的信息
 *
 * @method string getUrl() 获取抓取目标的URL
 * @method void setUrl(string $Url) 设置抓取目标的URL
 * @method string getState() 获取target当前状态,当前支持
up = 健康
down = 不健康
unknown = 未知
 * @method void setState(string $State) 设置target当前状态,当前支持
up = 健康
down = 不健康
unknown = 未知
 */
class PrometheusTarget extends AbstractModel
{
    /**
     * @var string 抓取目标的URL
     */
    public $Url;

    /**
     * @var string target当前状态,当前支持
up = 健康
down = 不健康
unknown = 未知
     */
    public $State;

    /**
     * @param string $Url 抓取目标的URL
     * @param string $State target当前状态,当前支持
up = 健康
down = 不健康
unknown = 未知
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
