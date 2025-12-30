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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertificateBindResourceTaskDetail返回参数结构体
 *
 * @method array getCLB() 获取<p>关联clb资源详情   </p>
 * @method void setCLB(array $CLB) 设置<p>关联clb资源详情   </p>
 * @method array getCDN() 获取<p>关联cdn资源详情   </p>
 * @method void setCDN(array $CDN) 设置<p>关联cdn资源详情   </p>
 * @method array getWAF() 获取<p>关联waf资源详情   </p>
 * @method void setWAF(array $WAF) 设置<p>关联waf资源详情   </p>
 * @method array getDDOS() 获取<p>关联ddos资源详情  </p>
 * @method void setDDOS(array $DDOS) 设置<p>关联ddos资源详情  </p>
 * @method array getLIVE() 获取<p>关联live资源详情  </p>
 * @method void setLIVE(array $LIVE) 设置<p>关联live资源详情  </p>
 * @method array getVOD() 获取<p>关联vod资源详情   </p>
 * @method void setVOD(array $VOD) 设置<p>关联vod资源详情   </p>
 * @method array getTKE() 获取<p>关联tke资源详情   </p>
 * @method void setTKE(array $TKE) 设置<p>关联tke资源详情   </p>
 * @method array getAPIGATEWAY() 获取<p>关联apigateway资源详情    </p>
 * @method void setAPIGATEWAY(array $APIGATEWAY) 设置<p>关联apigateway资源详情    </p>
 * @method array getTCB() 获取<p>关联tcb资源详情   </p>
 * @method void setTCB(array $TCB) 设置<p>关联tcb资源详情   </p>
 * @method array getTEO() 获取<p>关联teo资源详情   </p>
 * @method void setTEO(array $TEO) 设置<p>关联teo资源详情   </p>
 * @method integer getStatus() 获取<p>关联云资源异步查询结果： 0表示查询中， 1表示查询成功。 2表示查询异常； 若状态为1，则查看BindResourceResult结果；若状态为2，则查看Error原因</p>
 * @method void setStatus(integer $Status) 设置<p>关联云资源异步查询结果： 0表示查询中， 1表示查询成功。 2表示查询异常； 若状态为1，则查看BindResourceResult结果；若状态为2，则查看Error原因</p>
 * @method string getCacheTime() 获取<p>当前结果缓存时间</p>
 * @method void setCacheTime(string $CacheTime) 设置<p>当前结果缓存时间</p>
 * @method array getTSE() 获取<p>关联tse资源详情   </p>
 * @method void setTSE(array $TSE) 设置<p>关联tse资源详情   </p>
 * @method array getCOS() 获取<p>关联的COS资源详情</p>
 * @method void setCOS(array $COS) 设置<p>关联的COS资源详情</p>
 * @method array getTDMQ() 获取<p>关联的TDMQ - Rabbit资源详情</p>
 * @method void setTDMQ(array $TDMQ) 设置<p>关联的TDMQ - Rabbit资源详情</p>
 * @method array getMQTT() 获取<p>关联的MQTT资源详情</p>
 * @method void setMQTT(array $MQTT) 设置<p>关联的MQTT资源详情</p>
 * @method array getGAAP() 获取<p>关联的GAAP资源详情</p>
 * @method void setGAAP(array $GAAP) 设置<p>关联的GAAP资源详情</p>
 * @method array getSCF() 获取<p>关联的SCF资源详情</p>
 * @method void setSCF(array $SCF) 设置<p>关联的SCF资源详情</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCertificateBindResourceTaskDetailResponse extends AbstractModel
{
    /**
     * @var array <p>关联clb资源详情   </p>
     */
    public $CLB;

    /**
     * @var array <p>关联cdn资源详情   </p>
     */
    public $CDN;

    /**
     * @var array <p>关联waf资源详情   </p>
     */
    public $WAF;

    /**
     * @var array <p>关联ddos资源详情  </p>
     */
    public $DDOS;

    /**
     * @var array <p>关联live资源详情  </p>
     */
    public $LIVE;

    /**
     * @var array <p>关联vod资源详情   </p>
     */
    public $VOD;

    /**
     * @var array <p>关联tke资源详情   </p>
     */
    public $TKE;

    /**
     * @var array <p>关联apigateway资源详情    </p>
     */
    public $APIGATEWAY;

    /**
     * @var array <p>关联tcb资源详情   </p>
     */
    public $TCB;

    /**
     * @var array <p>关联teo资源详情   </p>
     */
    public $TEO;

    /**
     * @var integer <p>关联云资源异步查询结果： 0表示查询中， 1表示查询成功。 2表示查询异常； 若状态为1，则查看BindResourceResult结果；若状态为2，则查看Error原因</p>
     */
    public $Status;

    /**
     * @var string <p>当前结果缓存时间</p>
     */
    public $CacheTime;

    /**
     * @var array <p>关联tse资源详情   </p>
     */
    public $TSE;

    /**
     * @var array <p>关联的COS资源详情</p>
     */
    public $COS;

    /**
     * @var array <p>关联的TDMQ - Rabbit资源详情</p>
     */
    public $TDMQ;

    /**
     * @var array <p>关联的MQTT资源详情</p>
     */
    public $MQTT;

    /**
     * @var array <p>关联的GAAP资源详情</p>
     */
    public $GAAP;

    /**
     * @var array <p>关联的SCF资源详情</p>
     */
    public $SCF;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $CLB <p>关联clb资源详情   </p>
     * @param array $CDN <p>关联cdn资源详情   </p>
     * @param array $WAF <p>关联waf资源详情   </p>
     * @param array $DDOS <p>关联ddos资源详情  </p>
     * @param array $LIVE <p>关联live资源详情  </p>
     * @param array $VOD <p>关联vod资源详情   </p>
     * @param array $TKE <p>关联tke资源详情   </p>
     * @param array $APIGATEWAY <p>关联apigateway资源详情    </p>
     * @param array $TCB <p>关联tcb资源详情   </p>
     * @param array $TEO <p>关联teo资源详情   </p>
     * @param integer $Status <p>关联云资源异步查询结果： 0表示查询中， 1表示查询成功。 2表示查询异常； 若状态为1，则查看BindResourceResult结果；若状态为2，则查看Error原因</p>
     * @param string $CacheTime <p>当前结果缓存时间</p>
     * @param array $TSE <p>关联tse资源详情   </p>
     * @param array $COS <p>关联的COS资源详情</p>
     * @param array $TDMQ <p>关联的TDMQ - Rabbit资源详情</p>
     * @param array $MQTT <p>关联的MQTT资源详情</p>
     * @param array $GAAP <p>关联的GAAP资源详情</p>
     * @param array $SCF <p>关联的SCF资源详情</p>
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
        if (array_key_exists("CLB",$param) and $param["CLB"] !== null) {
            $this->CLB = [];
            foreach ($param["CLB"] as $key => $value){
                $obj = new ClbInstanceList();
                $obj->deserialize($value);
                array_push($this->CLB, $obj);
            }
        }

        if (array_key_exists("CDN",$param) and $param["CDN"] !== null) {
            $this->CDN = [];
            foreach ($param["CDN"] as $key => $value){
                $obj = new CdnInstanceList();
                $obj->deserialize($value);
                array_push($this->CDN, $obj);
            }
        }

        if (array_key_exists("WAF",$param) and $param["WAF"] !== null) {
            $this->WAF = [];
            foreach ($param["WAF"] as $key => $value){
                $obj = new WafInstanceList();
                $obj->deserialize($value);
                array_push($this->WAF, $obj);
            }
        }

        if (array_key_exists("DDOS",$param) and $param["DDOS"] !== null) {
            $this->DDOS = [];
            foreach ($param["DDOS"] as $key => $value){
                $obj = new DdosInstanceList();
                $obj->deserialize($value);
                array_push($this->DDOS, $obj);
            }
        }

        if (array_key_exists("LIVE",$param) and $param["LIVE"] !== null) {
            $this->LIVE = [];
            foreach ($param["LIVE"] as $key => $value){
                $obj = new LiveInstanceList();
                $obj->deserialize($value);
                array_push($this->LIVE, $obj);
            }
        }

        if (array_key_exists("VOD",$param) and $param["VOD"] !== null) {
            $this->VOD = [];
            foreach ($param["VOD"] as $key => $value){
                $obj = new VODInstanceList();
                $obj->deserialize($value);
                array_push($this->VOD, $obj);
            }
        }

        if (array_key_exists("TKE",$param) and $param["TKE"] !== null) {
            $this->TKE = [];
            foreach ($param["TKE"] as $key => $value){
                $obj = new TkeInstanceList();
                $obj->deserialize($value);
                array_push($this->TKE, $obj);
            }
        }

        if (array_key_exists("APIGATEWAY",$param) and $param["APIGATEWAY"] !== null) {
            $this->APIGATEWAY = [];
            foreach ($param["APIGATEWAY"] as $key => $value){
                $obj = new ApiGatewayInstanceList();
                $obj->deserialize($value);
                array_push($this->APIGATEWAY, $obj);
            }
        }

        if (array_key_exists("TCB",$param) and $param["TCB"] !== null) {
            $this->TCB = [];
            foreach ($param["TCB"] as $key => $value){
                $obj = new TCBInstanceList();
                $obj->deserialize($value);
                array_push($this->TCB, $obj);
            }
        }

        if (array_key_exists("TEO",$param) and $param["TEO"] !== null) {
            $this->TEO = [];
            foreach ($param["TEO"] as $key => $value){
                $obj = new TeoInstanceList();
                $obj->deserialize($value);
                array_push($this->TEO, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CacheTime",$param) and $param["CacheTime"] !== null) {
            $this->CacheTime = $param["CacheTime"];
        }

        if (array_key_exists("TSE",$param) and $param["TSE"] !== null) {
            $this->TSE = [];
            foreach ($param["TSE"] as $key => $value){
                $obj = new TSEInstanceList();
                $obj->deserialize($value);
                array_push($this->TSE, $obj);
            }
        }

        if (array_key_exists("COS",$param) and $param["COS"] !== null) {
            $this->COS = [];
            foreach ($param["COS"] as $key => $value){
                $obj = new COSInstanceList();
                $obj->deserialize($value);
                array_push($this->COS, $obj);
            }
        }

        if (array_key_exists("TDMQ",$param) and $param["TDMQ"] !== null) {
            $this->TDMQ = [];
            foreach ($param["TDMQ"] as $key => $value){
                $obj = new TDMQInstanceList();
                $obj->deserialize($value);
                array_push($this->TDMQ, $obj);
            }
        }

        if (array_key_exists("MQTT",$param) and $param["MQTT"] !== null) {
            $this->MQTT = [];
            foreach ($param["MQTT"] as $key => $value){
                $obj = new MQTTInstanceList();
                $obj->deserialize($value);
                array_push($this->MQTT, $obj);
            }
        }

        if (array_key_exists("GAAP",$param) and $param["GAAP"] !== null) {
            $this->GAAP = [];
            foreach ($param["GAAP"] as $key => $value){
                $obj = new GAAPInstanceList();
                $obj->deserialize($value);
                array_push($this->GAAP, $obj);
            }
        }

        if (array_key_exists("SCF",$param) and $param["SCF"] !== null) {
            $this->SCF = [];
            foreach ($param["SCF"] as $key => $value){
                $obj = new SCFInstanceList();
                $obj->deserialize($value);
                array_push($this->SCF, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
