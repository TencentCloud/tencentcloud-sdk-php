<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveStreamMonitorList请求参数结构体
 *
 * @method integer getIndex() 获取查询列表时的起始偏移。
 * @method void setIndex(integer $Index) 设置查询列表时的起始偏移。
 * @method integer getCount() 获取本次查询的记录个数。最小值为1。
 * @method void setCount(integer $Count) 设置本次查询的记录个数。最小值为1。
 */
class DescribeLiveStreamMonitorListRequest extends AbstractModel
{
    /**
     * @var integer 查询列表时的起始偏移。
     */
    public $Index;

    /**
     * @var integer 本次查询的记录个数。最小值为1。
     */
    public $Count;

    /**
     * @param integer $Index 查询列表时的起始偏移。
     * @param integer $Count 本次查询的记录个数。最小值为1。
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
