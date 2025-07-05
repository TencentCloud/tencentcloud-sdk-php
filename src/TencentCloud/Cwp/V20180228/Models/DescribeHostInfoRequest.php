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
 * DescribeHostInfo请求参数结构体
 *
 * @method array getQuuidList() 获取主机Quuid数组
 * @method void setQuuidList(array $QuuidList) 设置主机Quuid数组
 * @method array getUuids() 获取Uuids 查询，Quuid查询时填空
 * @method void setUuids(array $Uuids) 设置Uuids 查询，Quuid查询时填空
 */
class DescribeHostInfoRequest extends AbstractModel
{
    /**
     * @var array 主机Quuid数组
     */
    public $QuuidList;

    /**
     * @var array Uuids 查询，Quuid查询时填空
     */
    public $Uuids;

    /**
     * @param array $QuuidList 主机Quuid数组
     * @param array $Uuids Uuids 查询，Quuid查询时填空
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
        if (array_key_exists("QuuidList",$param) and $param["QuuidList"] !== null) {
            $this->QuuidList = $param["QuuidList"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }
    }
}
