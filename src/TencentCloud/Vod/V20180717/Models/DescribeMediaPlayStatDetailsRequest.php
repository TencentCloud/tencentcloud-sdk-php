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
 * DescribeMediaPlayStatDetails请求参数结构体
 *
 * @method string getFileId() 获取媒体文件 ID。
 * @method void setFileId(string $FileId) 设置媒体文件 ID。
 * @method string getStartTime() 获取起始时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setStartTime(string $StartTime) 设置起始时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getEndTime() 获取结束时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setEndTime(string $EndTime) 设置结束时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method integer getSubAppId() 获取<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method string getInterval() 获取统计时间粒度，有效值：
<li>Hour：以小时为粒度。</li>
<li>Day：以天为粒度。</li>
默认按时间跨度决定，小于1天以小时为粒度，大于等于1天则以天为粒度。
 * @method void setInterval(string $Interval) 设置统计时间粒度，有效值：
<li>Hour：以小时为粒度。</li>
<li>Day：以天为粒度。</li>
默认按时间跨度决定，小于1天以小时为粒度，大于等于1天则以天为粒度。
 */
class DescribeMediaPlayStatDetailsRequest extends AbstractModel
{
    /**
     * @var string 媒体文件 ID。
     */
    public $FileId;

    /**
     * @var string 起始时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $StartTime;

    /**
     * @var string 结束时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $EndTime;

    /**
     * @var integer <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     */
    public $SubAppId;

    /**
     * @var string 统计时间粒度，有效值：
<li>Hour：以小时为粒度。</li>
<li>Day：以天为粒度。</li>
默认按时间跨度决定，小于1天以小时为粒度，大于等于1天则以天为粒度。
     */
    public $Interval;

    /**
     * @param string $FileId 媒体文件 ID。
     * @param string $StartTime 起始时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $EndTime 结束时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param integer $SubAppId <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     * @param string $Interval 统计时间粒度，有效值：
<li>Hour：以小时为粒度。</li>
<li>Day：以天为粒度。</li>
默认按时间跨度决定，小于1天以小时为粒度，大于等于1天则以天为粒度。
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}
