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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBoardSDKLog返回参数结构体
 *
 * @method integer getTotal() 获取总共能查到日志条数
 * @method void setTotal(integer $Total) 设置总共能查到日志条数
 * @method array getSources() 获取日志详细内容
 * @method void setSources(array $Sources) 设置日志详细内容
 * @method array getBuckets() 获取按时间段聚合后每个时间段的日志条数
 * @method void setBuckets(array $Buckets) 设置按时间段聚合后每个时间段的日志条数
 * @method string getContext() 获取用于递归拉取的上下文Key，下一次请求的时候带上
 * @method void setContext(string $Context) 设置用于递归拉取的上下文Key，下一次请求的时候带上
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBoardSDKLogResponse extends AbstractModel
{
    /**
     * @var integer 总共能查到日志条数
     */
    public $Total;

    /**
     * @var array 日志详细内容
     */
    public $Sources;

    /**
     * @var array 按时间段聚合后每个时间段的日志条数
     */
    public $Buckets;

    /**
     * @var string 用于递归拉取的上下文Key，下一次请求的时候带上
     */
    public $Context;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total 总共能查到日志条数
     * @param array $Sources 日志详细内容
     * @param array $Buckets 按时间段聚合后每个时间段的日志条数
     * @param string $Context 用于递归拉取的上下文Key，下一次请求的时候带上
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Sources",$param) and $param["Sources"] !== null) {
            $this->Sources = $param["Sources"];
        }

        if (array_key_exists("Buckets",$param) and $param["Buckets"] !== null) {
            $this->Buckets = $param["Buckets"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
