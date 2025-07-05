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
 * DescribeLiveEnhanceInfoList请求参数结构体
 *
 * @method string getStartTime() 获取起始时间点，使用ISO格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见[ISO 日期格式说明](https://cloud.tencent.com/document/product/267/38543#:~:text=I-,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)。
接口支持最近三个月的查询，开始时间和结束时间查询跨度不能超过三十天。
 * @method void setStartTime(string $StartTime) 设置起始时间点，使用ISO格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见[ISO 日期格式说明](https://cloud.tencent.com/document/product/267/38543#:~:text=I-,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)。
接口支持最近三个月的查询，开始时间和结束时间查询跨度不能超过三十天。
 * @method string getEndTime() 获取结束时间点，使用ISO格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见[ISO 日期格式说明](https://cloud.tencent.com/document/product/267/38543#:~:text=I-,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)。
接口支持最近三个月的查询，开始时间和结束时间查询跨度不能超过三十天。
 * @method void setEndTime(string $EndTime) 设置结束时间点，使用ISO格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见[ISO 日期格式说明](https://cloud.tencent.com/document/product/267/38543#:~:text=I-,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)。
接口支持最近三个月的查询，开始时间和结束时间查询跨度不能超过三十天。
 * @method integer getGranularity() 获取查询粒度，支持5，60分钟。
 * @method void setGranularity(integer $Granularity) 设置查询粒度，支持5，60分钟。
 * @method array getDomainNames() 获取查询域名，如果不填则默认查全部的数据。
 * @method void setDomainNames(array $DomainNames) 设置查询域名，如果不填则默认查全部的数据。
 * @method array getType() 获取增强服务类型，如果不填则默认查全部的数据。
 * @method void setType(array $Type) 设置增强服务类型，如果不填则默认查全部的数据。
 * @method array getResolution() 获取分辨率，如果不填则默认查全部的数据。
 * @method void setResolution(array $Resolution) 设置分辨率，如果不填则默认查全部的数据。
 * @method array getFps() 获取帧率，如果不填则默认查全部的数据。
 * @method void setFps(array $Fps) 设置帧率，如果不填则默认查全部的数据。
 */
class DescribeLiveEnhanceInfoListRequest extends AbstractModel
{
    /**
     * @var string 起始时间点，使用ISO格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见[ISO 日期格式说明](https://cloud.tencent.com/document/product/267/38543#:~:text=I-,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)。
接口支持最近三个月的查询，开始时间和结束时间查询跨度不能超过三十天。
     */
    public $StartTime;

    /**
     * @var string 结束时间点，使用ISO格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见[ISO 日期格式说明](https://cloud.tencent.com/document/product/267/38543#:~:text=I-,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)。
接口支持最近三个月的查询，开始时间和结束时间查询跨度不能超过三十天。
     */
    public $EndTime;

    /**
     * @var integer 查询粒度，支持5，60分钟。
     */
    public $Granularity;

    /**
     * @var array 查询域名，如果不填则默认查全部的数据。
     */
    public $DomainNames;

    /**
     * @var array 增强服务类型，如果不填则默认查全部的数据。
     */
    public $Type;

    /**
     * @var array 分辨率，如果不填则默认查全部的数据。
     */
    public $Resolution;

    /**
     * @var array 帧率，如果不填则默认查全部的数据。
     */
    public $Fps;

    /**
     * @param string $StartTime 起始时间点，使用ISO格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见[ISO 日期格式说明](https://cloud.tencent.com/document/product/267/38543#:~:text=I-,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)。
接口支持最近三个月的查询，开始时间和结束时间查询跨度不能超过三十天。
     * @param string $EndTime 结束时间点，使用ISO格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见[ISO 日期格式说明](https://cloud.tencent.com/document/product/267/38543#:~:text=I-,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)。
接口支持最近三个月的查询，开始时间和结束时间查询跨度不能超过三十天。
     * @param integer $Granularity 查询粒度，支持5，60分钟。
     * @param array $DomainNames 查询域名，如果不填则默认查全部的数据。
     * @param array $Type 增强服务类型，如果不填则默认查全部的数据。
     * @param array $Resolution 分辨率，如果不填则默认查全部的数据。
     * @param array $Fps 帧率，如果不填则默认查全部的数据。
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

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }

        if (array_key_exists("DomainNames",$param) and $param["DomainNames"] !== null) {
            $this->DomainNames = $param["DomainNames"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }
    }
}
