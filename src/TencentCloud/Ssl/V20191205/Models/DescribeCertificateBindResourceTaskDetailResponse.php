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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertificateBindResourceTaskDetail返回参数结构体
 *
 * @method array getCLB() 获取关联clb资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCLB(array $CLB) 设置关联clb资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCDN() 获取关联cdn资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCDN(array $CDN) 设置关联cdn资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWAF() 获取关联waf资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWAF(array $WAF) 设置关联waf资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDDOS() 获取关联ddos资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDDOS(array $DDOS) 设置关联ddos资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLIVE() 获取关联live资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLIVE(array $LIVE) 设置关联live资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVOD() 获取关联vod资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVOD(array $VOD) 设置关联vod资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTKE() 获取关联tke资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTKE(array $TKE) 设置关联tke资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAPIGATEWAY() 获取关联apigateway资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAPIGATEWAY(array $APIGATEWAY) 设置关联apigateway资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTCB() 获取关联tcb资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTCB(array $TCB) 设置关联tcb资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTEO() 获取关联teo资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTEO(array $TEO) 设置关联teo资源详情	
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取关联云资源异步查询结果： 0表示查询中， 1表示查询成功。 2表示查询异常； 若状态为1，则查看BindResourceResult结果；若状态为2，则查看Error原因
 * @method void setStatus(integer $Status) 设置关联云资源异步查询结果： 0表示查询中， 1表示查询成功。 2表示查询异常； 若状态为1，则查看BindResourceResult结果；若状态为2，则查看Error原因
 * @method string getCacheTime() 获取当前结果缓存时间
 * @method void setCacheTime(string $CacheTime) 设置当前结果缓存时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCertificateBindResourceTaskDetailResponse extends AbstractModel
{
    /**
     * @var array 关联clb资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CLB;

    /**
     * @var array 关联cdn资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CDN;

    /**
     * @var array 关联waf资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WAF;

    /**
     * @var array 关联ddos资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DDOS;

    /**
     * @var array 关联live资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LIVE;

    /**
     * @var array 关联vod资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VOD;

    /**
     * @var array 关联tke资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TKE;

    /**
     * @var array 关联apigateway资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $APIGATEWAY;

    /**
     * @var array 关联tcb资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TCB;

    /**
     * @var array 关联teo资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TEO;

    /**
     * @var integer 关联云资源异步查询结果： 0表示查询中， 1表示查询成功。 2表示查询异常； 若状态为1，则查看BindResourceResult结果；若状态为2，则查看Error原因
     */
    public $Status;

    /**
     * @var string 当前结果缓存时间
     */
    public $CacheTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $CLB 关联clb资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CDN 关联cdn资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WAF 关联waf资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DDOS 关联ddos资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LIVE 关联live资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VOD 关联vod资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TKE 关联tke资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $APIGATEWAY 关联apigateway资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TCB 关联tcb资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TEO 关联teo资源详情	
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 关联云资源异步查询结果： 0表示查询中， 1表示查询成功。 2表示查询异常； 若状态为1，则查看BindResourceResult结果；若状态为2，则查看Error原因
     * @param string $CacheTime 当前结果缓存时间
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
