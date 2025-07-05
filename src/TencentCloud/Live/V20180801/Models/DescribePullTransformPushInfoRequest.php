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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePullTransformPushInfo请求参数结构体
 *
 * @method string getStartTime() 获取起始时间点，接口查询支持两种时间格式：
1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I
2）YYYY-MM-DD hh:mm:ss：使用此格式时，默认代表北京时间。
 * @method void setStartTime(string $StartTime) 设置起始时间点，接口查询支持两种时间格式：
1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I
2）YYYY-MM-DD hh:mm:ss：使用此格式时，默认代表北京时间。
 * @method string getEndTime() 获取结束时间点，接口查询支持两种时间格式：
1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I
2）YYYY-MM-DD hh:mm:ss：使用此格式时，默认代表北京时间。
支持最近三年的查询，查询开始和结束时间跨度不支持超过31天。
 * @method void setEndTime(string $EndTime) 设置结束时间点，接口查询支持两种时间格式：
1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I
2）YYYY-MM-DD hh:mm:ss：使用此格式时，默认代表北京时间。
支持最近三年的查询，查询开始和结束时间跨度不支持超过31天。
 * @method string getMainlandOrOversea() 获取可选值：
Mainland：查询国内数据，
Oversea：则查询国外数据，
默认：查询国内+国外的数据。
 * @method void setMainlandOrOversea(string $MainlandOrOversea) 设置可选值：
Mainland：查询国内数据，
Oversea：则查询国外数据，
默认：查询国内+国外的数据。
 * @method string getSourceType() 获取可选值：  PullLivePushLive：拉流源类型为直播  PullVodPushLive：拉流源类型为点播  PullPicPushLive：拉流源类型为图片  默认：查询全部拉流源类型
 * @method void setSourceType(string $SourceType) 设置可选值：  PullLivePushLive：拉流源类型为直播  PullVodPushLive：拉流源类型为点播  PullPicPushLive：拉流源类型为图片  默认：查询全部拉流源类型
 */
class DescribePullTransformPushInfoRequest extends AbstractModel
{
    /**
     * @var string 起始时间点，接口查询支持两种时间格式：
1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I
2）YYYY-MM-DD hh:mm:ss：使用此格式时，默认代表北京时间。
     */
    public $StartTime;

    /**
     * @var string 结束时间点，接口查询支持两种时间格式：
1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I
2）YYYY-MM-DD hh:mm:ss：使用此格式时，默认代表北京时间。
支持最近三年的查询，查询开始和结束时间跨度不支持超过31天。
     */
    public $EndTime;

    /**
     * @var string 可选值：
Mainland：查询国内数据，
Oversea：则查询国外数据，
默认：查询国内+国外的数据。
     */
    public $MainlandOrOversea;

    /**
     * @var string 可选值：  PullLivePushLive：拉流源类型为直播  PullVodPushLive：拉流源类型为点播  PullPicPushLive：拉流源类型为图片  默认：查询全部拉流源类型
     */
    public $SourceType;

    /**
     * @param string $StartTime 起始时间点，接口查询支持两种时间格式：
1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I
2）YYYY-MM-DD hh:mm:ss：使用此格式时，默认代表北京时间。
     * @param string $EndTime 结束时间点，接口查询支持两种时间格式：
1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I
2）YYYY-MM-DD hh:mm:ss：使用此格式时，默认代表北京时间。
支持最近三年的查询，查询开始和结束时间跨度不支持超过31天。
     * @param string $MainlandOrOversea 可选值：
Mainland：查询国内数据，
Oversea：则查询国外数据，
默认：查询国内+国外的数据。
     * @param string $SourceType 可选值：  PullLivePushLive：拉流源类型为直播  PullVodPushLive：拉流源类型为点播  PullPicPushLive：拉流源类型为图片  默认：查询全部拉流源类型
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }
    }
}
