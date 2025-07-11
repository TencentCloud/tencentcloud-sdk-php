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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableCaches请求参数结构体
 *
 * @method array getUrls() 获取解封 URL 列表
 * @method void setUrls(array $Urls) 设置解封 URL 列表
 * @method string getDate() 获取URL封禁日期
 * @method void setDate(string $Date) 设置URL封禁日期
 */
class EnableCachesRequest extends AbstractModel
{
    /**
     * @var array 解封 URL 列表
     */
    public $Urls;

    /**
     * @var string URL封禁日期
     */
    public $Date;

    /**
     * @param array $Urls 解封 URL 列表
     * @param string $Date URL封禁日期
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
        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            $this->Urls = $param["Urls"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
