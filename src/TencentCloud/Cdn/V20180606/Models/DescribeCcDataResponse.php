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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCcData返回参数结构体
 *
 * @method array getData() 获取指定执行动作的请求数数据，如果指定类型为空，表示所有类型的请求总数
 * @method void setData(array $Data) 设置指定执行动作的请求数数据，如果指定类型为空，表示所有类型的请求总数
 * @method string getInterval() 获取粒度
 * @method void setInterval(string $Interval) 设置粒度
 * @method array getInterceptQpsData() 获取执行动作为拦截类型QPS统计数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterceptQpsData(array $InterceptQpsData) 设置执行动作为拦截类型QPS统计数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRedirectQpsData() 获取执行动作为重定向类型QPS统计数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedirectQpsData(array $RedirectQpsData) 设置执行动作为重定向类型QPS统计数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getObserveQpsData() 获取执行动作为观察类型QPS统计数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObserveQpsData(array $ObserveQpsData) 设置执行动作为观察类型QPS统计数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCcDataResponse extends AbstractModel
{
    /**
     * @var array 指定执行动作的请求数数据，如果指定类型为空，表示所有类型的请求总数
     */
    public $Data;

    /**
     * @var string 粒度
     */
    public $Interval;

    /**
     * @var array 执行动作为拦截类型QPS统计数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InterceptQpsData;

    /**
     * @var array 执行动作为重定向类型QPS统计数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedirectQpsData;

    /**
     * @var array 执行动作为观察类型QPS统计数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObserveQpsData;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data 指定执行动作的请求数数据，如果指定类型为空，表示所有类型的请求总数
     * @param string $Interval 粒度
     * @param array $InterceptQpsData 执行动作为拦截类型QPS统计数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RedirectQpsData 执行动作为重定向类型QPS统计数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ObserveQpsData 执行动作为观察类型QPS统计数据
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new TimestampData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("InterceptQpsData",$param) and $param["InterceptQpsData"] !== null) {
            $this->InterceptQpsData = [];
            foreach ($param["InterceptQpsData"] as $key => $value){
                $obj = new TimestampData();
                $obj->deserialize($value);
                array_push($this->InterceptQpsData, $obj);
            }
        }

        if (array_key_exists("RedirectQpsData",$param) and $param["RedirectQpsData"] !== null) {
            $this->RedirectQpsData = [];
            foreach ($param["RedirectQpsData"] as $key => $value){
                $obj = new TimestampData();
                $obj->deserialize($value);
                array_push($this->RedirectQpsData, $obj);
            }
        }

        if (array_key_exists("ObserveQpsData",$param) and $param["ObserveQpsData"] !== null) {
            $this->ObserveQpsData = [];
            foreach ($param["ObserveQpsData"] as $key => $value){
                $obj = new TimestampData();
                $obj->deserialize($value);
                array_push($this->ObserveQpsData, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
