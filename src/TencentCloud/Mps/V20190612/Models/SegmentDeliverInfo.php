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
 * SourceLocation垫片配置。
 *
 * @method string getDefaultSegmentUrl() 获取默认内容源地址。
 * @method void setDefaultSegmentUrl(string $DefaultSegmentUrl) 设置默认内容源地址。
 * @method array getNameServers() 获取自定义服务器地址。
 * @method void setNameServers(array $NameServers) 设置自定义服务器地址。
 */
class SegmentDeliverInfo extends AbstractModel
{
    /**
     * @var string 默认内容源地址。
     */
    public $DefaultSegmentUrl;

    /**
     * @var array 自定义服务器地址。
     */
    public $NameServers;

    /**
     * @param string $DefaultSegmentUrl 默认内容源地址。
     * @param array $NameServers 自定义服务器地址。
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
        if (array_key_exists("DefaultSegmentUrl",$param) and $param["DefaultSegmentUrl"] !== null) {
            $this->DefaultSegmentUrl = $param["DefaultSegmentUrl"];
        }

        if (array_key_exists("NameServers",$param) and $param["NameServers"] !== null) {
            $this->NameServers = [];
            foreach ($param["NameServers"] as $key => $value){
                $obj = new NameServer();
                $obj->deserialize($value);
                array_push($this->NameServers, $obj);
            }
        }
    }
}
