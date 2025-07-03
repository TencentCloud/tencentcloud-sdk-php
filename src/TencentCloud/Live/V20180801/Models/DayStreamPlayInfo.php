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
 * 流播放信息
 *
 * @method string getTime() 获取数据时间点，接口返回支持两种时间格式：
1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见ISO日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I
2）yyyy-MM-dd HH:mm:ss：使用此格式时，默认代表北京时间。
接口返回的时间格式和查询请求传入的时间格式一致。
 * @method void setTime(string $Time) 设置数据时间点，接口返回支持两种时间格式：
1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见ISO日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I
2）yyyy-MM-dd HH:mm:ss：使用此格式时，默认代表北京时间。
接口返回的时间格式和查询请求传入的时间格式一致。
 * @method float getBandwidth() 获取带宽（单位Mbps）。
 * @method void setBandwidth(float $Bandwidth) 设置带宽（单位Mbps）。
 * @method float getFlux() 获取流量 （单位MB）。
 * @method void setFlux(float $Flux) 设置流量 （单位MB）。
 * @method integer getRequest() 获取请求数。
 * @method void setRequest(integer $Request) 设置请求数。
 * @method integer getOnline() 获取在线人数。当前后端接口数据的统计方式与客户端侧不同，该数据仅供参考，具体数据请以业务客户端侧统计数据为准。
 * @method void setOnline(integer $Online) 设置在线人数。当前后端接口数据的统计方式与客户端侧不同，该数据仅供参考，具体数据请以业务客户端侧统计数据为准。
 */
class DayStreamPlayInfo extends AbstractModel
{
    /**
     * @var string 数据时间点，接口返回支持两种时间格式：
1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见ISO日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I
2）yyyy-MM-dd HH:mm:ss：使用此格式时，默认代表北京时间。
接口返回的时间格式和查询请求传入的时间格式一致。
     */
    public $Time;

    /**
     * @var float 带宽（单位Mbps）。
     */
    public $Bandwidth;

    /**
     * @var float 流量 （单位MB）。
     */
    public $Flux;

    /**
     * @var integer 请求数。
     */
    public $Request;

    /**
     * @var integer 在线人数。当前后端接口数据的统计方式与客户端侧不同，该数据仅供参考，具体数据请以业务客户端侧统计数据为准。
     */
    public $Online;

    /**
     * @param string $Time 数据时间点，接口返回支持两种时间格式：
1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见ISO日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I
2）yyyy-MM-dd HH:mm:ss：使用此格式时，默认代表北京时间。
接口返回的时间格式和查询请求传入的时间格式一致。
     * @param float $Bandwidth 带宽（单位Mbps）。
     * @param float $Flux 流量 （单位MB）。
     * @param integer $Request 请求数。
     * @param integer $Online 在线人数。当前后端接口数据的统计方式与客户端侧不同，该数据仅供参考，具体数据请以业务客户端侧统计数据为准。
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Flux",$param) and $param["Flux"] !== null) {
            $this->Flux = $param["Flux"];
        }

        if (array_key_exists("Request",$param) and $param["Request"] !== null) {
            $this->Request = $param["Request"];
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }
    }
}
