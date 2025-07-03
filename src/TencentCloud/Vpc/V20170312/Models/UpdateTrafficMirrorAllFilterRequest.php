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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateTrafficMirrorAllFilter请求参数结构体
 *
 * @method string getTrafficMirrorId() 获取流量镜像实例ID
 * @method void setTrafficMirrorId(string $TrafficMirrorId) 设置流量镜像实例ID
 * @method string getDirection() 获取流量镜像采集方向
 * @method void setDirection(string $Direction) 设置流量镜像采集方向
 * @method array getCollectorSrcs() 获取流量镜像采集对象
 * @method void setCollectorSrcs(array $CollectorSrcs) 设置流量镜像采集对象
 * @method string getNatId() 获取流量镜像需要过滤的natgw实例
 * @method void setNatId(string $NatId) 设置流量镜像需要过滤的natgw实例
 * @method array getCollectorNormalFilters() 获取流量镜像需要过滤的五元组规则
 * @method void setCollectorNormalFilters(array $CollectorNormalFilters) 设置流量镜像需要过滤的五元组规则
 */
class UpdateTrafficMirrorAllFilterRequest extends AbstractModel
{
    /**
     * @var string 流量镜像实例ID
     */
    public $TrafficMirrorId;

    /**
     * @var string 流量镜像采集方向
     */
    public $Direction;

    /**
     * @var array 流量镜像采集对象
     */
    public $CollectorSrcs;

    /**
     * @var string 流量镜像需要过滤的natgw实例
     */
    public $NatId;

    /**
     * @var array 流量镜像需要过滤的五元组规则
     */
    public $CollectorNormalFilters;

    /**
     * @param string $TrafficMirrorId 流量镜像实例ID
     * @param string $Direction 流量镜像采集方向
     * @param array $CollectorSrcs 流量镜像采集对象
     * @param string $NatId 流量镜像需要过滤的natgw实例
     * @param array $CollectorNormalFilters 流量镜像需要过滤的五元组规则
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
        if (array_key_exists("TrafficMirrorId",$param) and $param["TrafficMirrorId"] !== null) {
            $this->TrafficMirrorId = $param["TrafficMirrorId"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("CollectorSrcs",$param) and $param["CollectorSrcs"] !== null) {
            $this->CollectorSrcs = $param["CollectorSrcs"];
        }

        if (array_key_exists("NatId",$param) and $param["NatId"] !== null) {
            $this->NatId = $param["NatId"];
        }

        if (array_key_exists("CollectorNormalFilters",$param) and $param["CollectorNormalFilters"] !== null) {
            $this->CollectorNormalFilters = [];
            foreach ($param["CollectorNormalFilters"] as $key => $value){
                $obj = new TrafficMirrorFilter();
                $obj->deserialize($value);
                array_push($this->CollectorNormalFilters, $obj);
            }
        }
    }
}
