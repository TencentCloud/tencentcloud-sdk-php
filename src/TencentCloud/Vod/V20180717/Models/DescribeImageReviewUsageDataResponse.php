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
 * DescribeImageReviewUsageData返回参数结构体
 *
 * @method array getImageReviewUsageDataSet() 获取图片审核次数统计数据，展示查询时间范围内的图片审核次数的概览数据。
 * @method void setImageReviewUsageDataSet(array $ImageReviewUsageDataSet) 设置图片审核次数统计数据，展示查询时间范围内的图片审核次数的概览数据。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeImageReviewUsageDataResponse extends AbstractModel
{
    /**
     * @var array 图片审核次数统计数据，展示查询时间范围内的图片审核次数的概览数据。
     */
    public $ImageReviewUsageDataSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ImageReviewUsageDataSet 图片审核次数统计数据，展示查询时间范围内的图片审核次数的概览数据。
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
        if (array_key_exists("ImageReviewUsageDataSet",$param) and $param["ImageReviewUsageDataSet"] !== null) {
            $this->ImageReviewUsageDataSet = [];
            foreach ($param["ImageReviewUsageDataSet"] as $key => $value){
                $obj = new ImageReviewUsageDataItem();
                $obj->deserialize($value);
                array_push($this->ImageReviewUsageDataSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
