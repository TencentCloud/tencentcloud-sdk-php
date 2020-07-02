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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReviewDetails返回参数结构体
 *
 * @method integer getTotalCount() 获取发起内容审核次数。
 * @method void setTotalCount(integer $TotalCount) 设置发起内容审核次数。
 * @method integer getTotalDuration() 获取内容审核总时长。
 * @method void setTotalDuration(integer $TotalDuration) 设置内容审核总时长。
 * @method array getData() 获取内容审核时长统计数据，每天一个数据。
 * @method void setData(array $Data) 设置内容审核时长统计数据，每天一个数据。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeReviewDetailsResponse extends AbstractModel
{
    /**
     * @var integer 发起内容审核次数。
     */
    public $TotalCount;

    /**
     * @var integer 内容审核总时长。
     */
    public $TotalDuration;

    /**
     * @var array 内容审核时长统计数据，每天一个数据。
     */
    public $Data;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 发起内容审核次数。
     * @param integer $TotalDuration 内容审核总时长。
     * @param array $Data 内容审核时长统计数据，每天一个数据。
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
        if (array_key_exists('TotalCount',$param) and $param['TotalCount'] !== null) {
            $this->TotalCount = $param['TotalCount'];
        }

        if (array_key_exists('TotalDuration',$param) and $param['TotalDuration'] !== null) {
            $this->TotalDuration = $param['TotalDuration'];
        }

        if (array_key_exists('Data',$param) and $param['Data'] !== null) {
            $this->Data = [];
            foreach ($param['Data'] as $key => $value){
                $obj = new StatDataItem();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists('RequestId',$param) and $param['RequestId'] !== null) {
            $this->RequestId = $param['RequestId'];
        }
    }
}
