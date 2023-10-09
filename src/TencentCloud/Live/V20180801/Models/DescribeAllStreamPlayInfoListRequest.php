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
 * DescribeAllStreamPlayInfoList请求参数结构体
 *
 * @method string getQueryTime() 获取查询时间点，精确到分钟粒度，接口查询支持两种时间格式：
1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/267/38543#:~:text=I-,ISO%20%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F,-ISO%20%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F
2）YYYY-MM-DD hh:mm:ss：使用此格式时，默认代表北京时间。
支持最近1个月的数据查询，数据延迟为5分钟左右，如果要查询实时的数据，建议传递5分钟前的整点时间点。
 * @method void setQueryTime(string $QueryTime) 设置查询时间点，精确到分钟粒度，接口查询支持两种时间格式：
1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/267/38543#:~:text=I-,ISO%20%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F,-ISO%20%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F
2）YYYY-MM-DD hh:mm:ss：使用此格式时，默认代表北京时间。
支持最近1个月的数据查询，数据延迟为5分钟左右，如果要查询实时的数据，建议传递5分钟前的整点时间点。
 * @method array getPlayDomains() 获取播放域名列表，若不填，表示总体数据。
 * @method void setPlayDomains(array $PlayDomains) 设置播放域名列表，若不填，表示总体数据。
 */
class DescribeAllStreamPlayInfoListRequest extends AbstractModel
{
    /**
     * @var string 查询时间点，精确到分钟粒度，接口查询支持两种时间格式：
1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/267/38543#:~:text=I-,ISO%20%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F,-ISO%20%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F
2）YYYY-MM-DD hh:mm:ss：使用此格式时，默认代表北京时间。
支持最近1个月的数据查询，数据延迟为5分钟左右，如果要查询实时的数据，建议传递5分钟前的整点时间点。
     */
    public $QueryTime;

    /**
     * @var array 播放域名列表，若不填，表示总体数据。
     */
    public $PlayDomains;

    /**
     * @param string $QueryTime 查询时间点，精确到分钟粒度，接口查询支持两种时间格式：
1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/267/38543#:~:text=I-,ISO%20%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F,-ISO%20%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F
2）YYYY-MM-DD hh:mm:ss：使用此格式时，默认代表北京时间。
支持最近1个月的数据查询，数据延迟为5分钟左右，如果要查询实时的数据，建议传递5分钟前的整点时间点。
     * @param array $PlayDomains 播放域名列表，若不填，表示总体数据。
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
        if (array_key_exists("QueryTime",$param) and $param["QueryTime"] !== null) {
            $this->QueryTime = $param["QueryTime"];
        }

        if (array_key_exists("PlayDomains",$param) and $param["PlayDomains"] !== null) {
            $this->PlayDomains = $param["PlayDomains"];
        }
    }
}
