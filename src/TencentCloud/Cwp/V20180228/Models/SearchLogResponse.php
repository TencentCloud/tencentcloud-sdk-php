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
 * @method integer getCount() 获取<p>匹配检索条件的原始日志的数量</p>
 * @method void setCount(integer $Count) 设置<p>匹配检索条件的原始日志的数量</p>
 * @method string getContext() 获取<p>透传本次接口返回的Context值，可获取后续更多日志，过期时间1小时</p>
 * @method void setContext(string $Context) 设置<p>透传本次接口返回的Context值，可获取后续更多日志，过期时间1小时</p>
 * @method boolean getListOver() 获取<p>符合检索条件的日志是否已全部返回，如未全部返回可使用Context参数获取后续更多日志</p>
 * @method void setListOver(boolean $ListOver) 设置<p>符合检索条件的日志是否已全部返回，如未全部返回可使用Context参数获取后续更多日志</p>
 * @method boolean getAnalysis() 获取<p>返回的是否为统计分析（即SQL）结果</p>
 * @method void setAnalysis(boolean $Analysis) 设置<p>返回的是否为统计分析（即SQL）结果</p>
 * @method array getData() 获取<p>匹配检索条件的原始日志</p>
 * @method void setData(array $Data) 设置<p>匹配检索条件的原始日志</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class SearchLogResponse extends AbstractModel
{
    /**
     * @var integer <p>匹配检索条件的原始日志的数量</p>
     */
    public $Count;

    /**
     * @var string <p>透传本次接口返回的Context值，可获取后续更多日志，过期时间1小时</p>
     */
    public $Context;

    /**
     * @var boolean <p>符合检索条件的日志是否已全部返回，如未全部返回可使用Context参数获取后续更多日志</p>
     */
    public $ListOver;

    /**
     * @var boolean <p>返回的是否为统计分析（即SQL）结果</p>
     */
    public $Analysis;

    /**
     * @var array <p>匹配检索条件的原始日志</p>
     */
    public $Data;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Count <p>匹配检索条件的原始日志的数量</p>
     * @param string $Context <p>透传本次接口返回的Context值，可获取后续更多日志，过期时间1小时</p>
     * @param boolean $ListOver <p>符合检索条件的日志是否已全部返回，如未全部返回可使用Context参数获取后续更多日志</p>
     * @param boolean $Analysis <p>返回的是否为统计分析（即SQL）结果</p>
     * @param array $Data <p>匹配检索条件的原始日志</p>
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
