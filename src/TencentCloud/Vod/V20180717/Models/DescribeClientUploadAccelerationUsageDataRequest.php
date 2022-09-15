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
 * DescribeClientUploadAccelerationUsageData请求参数结构体
 *
 * @method string getStartTime() 获取起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method void setStartTime(string $StartTime) 设置起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method string getEndTime() 获取结束日期，需大于等于起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method void setEndTime(string $EndTime) 设置结束日期，需大于等于起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method integer getSubAppId() 获取<b>点播 [子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播 [子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method string getType() 获取客户端上传加速类型，取值有：
<li> AccelerationWithHTTP：HTTP 传输方式的上传加速。</li>
<li> AccelerationWithQUIC：QUIC 传输方式的上传加速。</li>
默认查询所有加速类型的用量 。
 * @method void setType(string $Type) 设置客户端上传加速类型，取值有：
<li> AccelerationWithHTTP：HTTP 传输方式的上传加速。</li>
<li> AccelerationWithQUIC：QUIC 传输方式的上传加速。</li>
默认查询所有加速类型的用量 。
 */
class DescribeClientUploadAccelerationUsageDataRequest extends AbstractModel
{
    /**
     * @var string 起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
     */
    public $StartTime;

    /**
     * @var string 结束日期，需大于等于起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
     */
    public $EndTime;

    /**
     * @var integer <b>点播 [子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     */
    public $SubAppId;

    /**
     * @var string 客户端上传加速类型，取值有：
<li> AccelerationWithHTTP：HTTP 传输方式的上传加速。</li>
<li> AccelerationWithQUIC：QUIC 传输方式的上传加速。</li>
默认查询所有加速类型的用量 。
     */
    public $Type;

    /**
     * @param string $StartTime 起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
     * @param string $EndTime 结束日期，需大于等于起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
     * @param integer $SubAppId <b>点播 [子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     * @param string $Type 客户端上传加速类型，取值有：
<li> AccelerationWithHTTP：HTTP 传输方式的上传加速。</li>
<li> AccelerationWithQUIC：QUIC 传输方式的上传加速。</li>
默认查询所有加速类型的用量 。
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
