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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义线路数量信息
 *
 * @method integer getNowTotal() 获取本次请求返回自定义线路分组个数
 * @method void setNowTotal(integer $NowTotal) 设置本次请求返回自定义线路分组个数
 * @method integer getTotal() 获取自定义线路分组总数
 * @method void setTotal(integer $Total) 设置自定义线路分组总数
 * @method integer getAvailableCount() 获取还可允许添加的自定义线路分组个数
 * @method void setAvailableCount(integer $AvailableCount) 设置还可允许添加的自定义线路分组个数
 */
class LineGroupSum extends AbstractModel
{
    /**
     * @var integer 本次请求返回自定义线路分组个数
     */
    public $NowTotal;

    /**
     * @var integer 自定义线路分组总数
     */
    public $Total;

    /**
     * @var integer 还可允许添加的自定义线路分组个数
     */
    public $AvailableCount;

    /**
     * @param integer $NowTotal 本次请求返回自定义线路分组个数
     * @param integer $Total 自定义线路分组总数
     * @param integer $AvailableCount 还可允许添加的自定义线路分组个数
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
        if (array_key_exists("NowTotal",$param) and $param["NowTotal"] !== null) {
            $this->NowTotal = $param["NowTotal"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("AvailableCount",$param) and $param["AvailableCount"] !== null) {
            $this->AvailableCount = $param["AvailableCount"];
        }
    }
}
