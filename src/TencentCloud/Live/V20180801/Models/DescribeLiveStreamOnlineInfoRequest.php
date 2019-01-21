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
 * @method integer getPageNum() 获取取得第几页。
默认值：1。
 * @method void setPageNum(integer $PageNum) 设置取得第几页。
默认值：1。
 * @method integer getPageSize() 获取分页大小。
最大值：100。
取值范围：1~100 之前的任意整数。
默认值：10。
 * @method void setPageSize(integer $PageSize) 设置分页大小。
最大值：100。
取值范围：1~100 之前的任意整数。
默认值：10。
 * @method integer getStatus() 获取0:未开始推流 1:正在推流
 * @method void setStatus(integer $Status) 设置0:未开始推流 1:正在推流
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 */

/**
 *DescribeLiveStreamOnlineInfo请求参数结构体
 */
class DescribeLiveStreamOnlineInfoRequest extends AbstractModel
{
    /**
     * @var integer 取得第几页。
默认值：1。
     */
    public $PageNum;

    /**
     * @var integer 分页大小。
最大值：100。
取值范围：1~100 之前的任意整数。
默认值：10。
     */
    public $PageSize;

    /**
     * @var integer 0:未开始推流 1:正在推流
     */
    public $Status;

    /**
     * @var string 流名称。
     */
    public $StreamName;
    /**
     * @param integer $PageNum 取得第几页。
默认值：1。
     * @param integer $PageSize 分页大小。
最大值：100。
取值范围：1~100 之前的任意整数。
默认值：10。
     * @param integer $Status 0:未开始推流 1:正在推流
     * @param string $StreamName 流名称。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }
    }
}
