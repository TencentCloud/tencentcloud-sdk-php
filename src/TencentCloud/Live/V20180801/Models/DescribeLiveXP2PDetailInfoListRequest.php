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
 * DescribeLiveXP2PDetailInfoList请求参数结构体
 *
 * @method string getQueryTime() 获取utc分钟粒度查询时间，查询某一分钟的用量数据，格式为：yyyy-mm-ddTHH:MM:00Z，参考https://cloud.tencent.com/document/product/266/11732#I，
例如：北京时间2019-01-08 10:00:00，对应utc时间为：2019-01-08T10:00:00+08:00。

支持最近六个月的查询。
 * @method void setQueryTime(string $QueryTime) 设置utc分钟粒度查询时间，查询某一分钟的用量数据，格式为：yyyy-mm-ddTHH:MM:00Z，参考https://cloud.tencent.com/document/product/266/11732#I，
例如：北京时间2019-01-08 10:00:00，对应utc时间为：2019-01-08T10:00:00+08:00。

支持最近六个月的查询。
 * @method array getType() 获取类型数组，分直播live和点播vod，不传默认查全部。
 * @method void setType(array $Type) 设置类型数组，分直播live和点播vod，不传默认查全部。
 * @method array getStreamNames() 获取查询流数组，不传默认查所有流。
 * @method void setStreamNames(array $StreamNames) 设置查询流数组，不传默认查所有流。
 * @method array getDimension() 获取查询维度，不传该参数则默认查询流维度的数据，传递该参数则只查对应维度的数据，和返回值的字段相关，目前支持AppId维度查询。
 * @method void setDimension(array $Dimension) 设置查询维度，不传该参数则默认查询流维度的数据，传递该参数则只查对应维度的数据，和返回值的字段相关，目前支持AppId维度查询。
 */
class DescribeLiveXP2PDetailInfoListRequest extends AbstractModel
{
    /**
     * @var string utc分钟粒度查询时间，查询某一分钟的用量数据，格式为：yyyy-mm-ddTHH:MM:00Z，参考https://cloud.tencent.com/document/product/266/11732#I，
例如：北京时间2019-01-08 10:00:00，对应utc时间为：2019-01-08T10:00:00+08:00。

支持最近六个月的查询。
     */
    public $QueryTime;

    /**
     * @var array 类型数组，分直播live和点播vod，不传默认查全部。
     */
    public $Type;

    /**
     * @var array 查询流数组，不传默认查所有流。
     */
    public $StreamNames;

    /**
     * @var array 查询维度，不传该参数则默认查询流维度的数据，传递该参数则只查对应维度的数据，和返回值的字段相关，目前支持AppId维度查询。
     */
    public $Dimension;

    /**
     * @param string $QueryTime utc分钟粒度查询时间，查询某一分钟的用量数据，格式为：yyyy-mm-ddTHH:MM:00Z，参考https://cloud.tencent.com/document/product/266/11732#I，
例如：北京时间2019-01-08 10:00:00，对应utc时间为：2019-01-08T10:00:00+08:00。

支持最近六个月的查询。
     * @param array $Type 类型数组，分直播live和点播vod，不传默认查全部。
     * @param array $StreamNames 查询流数组，不传默认查所有流。
     * @param array $Dimension 查询维度，不传该参数则默认查询流维度的数据，传递该参数则只查对应维度的数据，和返回值的字段相关，目前支持AppId维度查询。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StreamNames",$param) and $param["StreamNames"] !== null) {
            $this->StreamNames = $param["StreamNames"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }
    }
}
