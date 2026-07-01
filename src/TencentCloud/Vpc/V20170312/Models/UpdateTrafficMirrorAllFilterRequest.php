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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateTrafficMirrorAllFilter请求参数结构体
 *
 * @method string getTrafficMirrorId() 获取<p>流量镜像实例ID</p>
 * @method void setTrafficMirrorId(string $TrafficMirrorId) 设置<p>流量镜像实例ID</p>
 * @method string getDirection() 获取<p>流量镜像采集方向</p>
 * @method void setDirection(string $Direction) 设置<p>流量镜像采集方向</p>
 * @method array getCollectorSrcs() 获取<p>流量镜像采集对象</p>
 * @method void setCollectorSrcs(array $CollectorSrcs) 设置<p>流量镜像采集对象</p>
 * @method string getNatId() 获取<p>流量镜像需要过滤的natgw实例</p>
 * @method void setNatId(string $NatId) 设置<p>流量镜像需要过滤的natgw实例</p>
 * @method array getCollectorNormalFilters() 获取<p>流量镜像需要过滤的五元组规则</p>
 * @method void setCollectorNormalFilters(array $CollectorNormalFilters) 设置<p>流量镜像需要过滤的五元组规则</p>
 * @method array getIngressFilterRules() 获取<p>流量镜像入站过滤规则。</p>
 * @method void setIngressFilterRules(array $IngressFilterRules) 设置<p>流量镜像入站过滤规则。</p>
 * @method array getEgressFilterRules() 获取<p>流量镜像出站过滤规则。</p>
 * @method void setEgressFilterRules(array $EgressFilterRules) 设置<p>流量镜像出站过滤规则。</p>
 */
class UpdateTrafficMirrorAllFilterRequest extends AbstractModel
{
    /**
     * @var string <p>流量镜像实例ID</p>
     */
    public $TrafficMirrorId;

    /**
     * @var string <p>流量镜像采集方向</p>
     */
    public $Direction;

    /**
     * @var array <p>流量镜像采集对象</p>
     */
    public $CollectorSrcs;

    /**
     * @var string <p>流量镜像需要过滤的natgw实例</p>
     */
    public $NatId;

    /**
     * @var array <p>流量镜像需要过滤的五元组规则</p>
     */
    public $CollectorNormalFilters;

    /**
     * @var array <p>流量镜像入站过滤规则。</p>
     */
    public $IngressFilterRules;

    /**
     * @var array <p>流量镜像出站过滤规则。</p>
     */
    public $EgressFilterRules;

    /**
     * @param string $TrafficMirrorId <p>流量镜像实例ID</p>
     * @param string $Direction <p>流量镜像采集方向</p>
     * @param array $CollectorSrcs <p>流量镜像采集对象</p>
     * @param string $NatId <p>流量镜像需要过滤的natgw实例</p>
     * @param array $CollectorNormalFilters <p>流量镜像需要过滤的五元组规则</p>
     * @param array $IngressFilterRules <p>流量镜像入站过滤规则。</p>
     * @param array $EgressFilterRules <p>流量镜像出站过滤规则。</p>
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

        if (array_key_exists("IngressFilterRules",$param) and $param["IngressFilterRules"] !== null) {
            $this->IngressFilterRules = [];
            foreach ($param["IngressFilterRules"] as $key => $value){
                $obj = new TrafficMirrorFilter();
                $obj->deserialize($value);
                array_push($this->IngressFilterRules, $obj);
            }
        }

        if (array_key_exists("EgressFilterRules",$param) and $param["EgressFilterRules"] !== null) {
            $this->EgressFilterRules = [];
            foreach ($param["EgressFilterRules"] as $key => $value){
                $obj = new TrafficMirrorFilter();
                $obj->deserialize($value);
                array_push($this->EgressFilterRules, $obj);
            }
        }
    }
}
