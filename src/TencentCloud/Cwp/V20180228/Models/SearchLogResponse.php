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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchLog返回参数结构体
 *
 * @method integer getCount() 获取匹配检索条件的原始日志的数量
 * @method void setCount(integer $Count) 设置匹配检索条件的原始日志的数量
 * @method string getContext() 获取透传本次接口返回的Context值，可获取后续更多日志，过期时间1小时
 * @method void setContext(string $Context) 设置透传本次接口返回的Context值，可获取后续更多日志，过期时间1小时
 * @method boolean getListOver() 获取符合检索条件的日志是否已全部返回，如未全部返回可使用Context参数获取后续更多日志
 * @method void setListOver(boolean $ListOver) 设置符合检索条件的日志是否已全部返回，如未全部返回可使用Context参数获取后续更多日志
 * @method boolean getAnalysis() 获取返回的是否为统计分析（即SQL）结果
 * @method void setAnalysis(boolean $Analysis) 设置返回的是否为统计分析（即SQL）结果
 * @method array getData() 获取匹配检索条件的原始日志
 * @method void setData(array $Data) 设置匹配检索条件的原始日志
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class SearchLogResponse extends AbstractModel
{
    /**
     * @var integer 匹配检索条件的原始日志的数量
     */
    public $Count;

    /**
     * @var string 透传本次接口返回的Context值，可获取后续更多日志，过期时间1小时
     */
    public $Context;

    /**
     * @var boolean 符合检索条件的日志是否已全部返回，如未全部返回可使用Context参数获取后续更多日志
     */
    public $ListOver;

    /**
     * @var boolean 返回的是否为统计分析（即SQL）结果
     */
    public $Analysis;

    /**
     * @var array 匹配检索条件的原始日志
     */
    public $Data;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Count 匹配检索条件的原始日志的数量
     * @param string $Context 透传本次接口返回的Context值，可获取后续更多日志，过期时间1小时
     * @param boolean $ListOver 符合检索条件的日志是否已全部返回，如未全部返回可使用Context参数获取后续更多日志
     * @param boolean $Analysis 返回的是否为统计分析（即SQL）结果
     * @param array $Data 匹配检索条件的原始日志
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("ListOver",$param) and $param["ListOver"] !== null) {
            $this->ListOver = $param["ListOver"];
        }

        if (array_key_exists("Analysis",$param) and $param["Analysis"] !== null) {
            $this->Analysis = $param["Analysis"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new LogInfo();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
