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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMachineRegions返回参数结构体
 *
 * @method array getCVM() 获取CVM 云服务器地域列表
 * @method void setCVM(array $CVM) 设置CVM 云服务器地域列表
 * @method array getBM() 获取BM 黑石机器地域列表
 * @method void setBM(array $BM) 设置BM 黑石机器地域列表
 * @method array getLH() 获取LH 轻量应用服务器地域列表
 * @method void setLH(array $LH) 设置LH 轻量应用服务器地域列表
 * @method array getECM() 获取ECM 边缘计算服务器地域列表
 * @method void setECM(array $ECM) 设置ECM 边缘计算服务器地域列表
 * @method array getOther() 获取Other 混合云地域列表
 * @method void setOther(array $Other) 设置Other 混合云地域列表
 * @method array getALL() 获取所有地域列表(包含以上所有地域)
 * @method void setALL(array $ALL) 设置所有地域列表(包含以上所有地域)
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMachineRegionsResponse extends AbstractModel
{
    /**
     * @var array CVM 云服务器地域列表
     */
    public $CVM;

    /**
     * @var array BM 黑石机器地域列表
     */
    public $BM;

    /**
     * @var array LH 轻量应用服务器地域列表
     */
    public $LH;

    /**
     * @var array ECM 边缘计算服务器地域列表
     */
    public $ECM;

    /**
     * @var array Other 混合云地域列表
     */
    public $Other;

    /**
     * @var array 所有地域列表(包含以上所有地域)
     */
    public $ALL;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $CVM CVM 云服务器地域列表
     * @param array $BM BM 黑石机器地域列表
     * @param array $LH LH 轻量应用服务器地域列表
     * @param array $ECM ECM 边缘计算服务器地域列表
     * @param array $Other Other 混合云地域列表
     * @param array $ALL 所有地域列表(包含以上所有地域)
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
        if (array_key_exists("CVM",$param) and $param["CVM"] !== null) {
            $this->CVM = [];
            foreach ($param["CVM"] as $key => $value){
                $obj = new RegionInfo();
                $obj->deserialize($value);
                array_push($this->CVM, $obj);
            }
        }

        if (array_key_exists("BM",$param) and $param["BM"] !== null) {
            $this->BM = [];
            foreach ($param["BM"] as $key => $value){
                $obj = new RegionInfo();
                $obj->deserialize($value);
                array_push($this->BM, $obj);
            }
        }

        if (array_key_exists("LH",$param) and $param["LH"] !== null) {
            $this->LH = [];
            foreach ($param["LH"] as $key => $value){
                $obj = new RegionInfo();
                $obj->deserialize($value);
                array_push($this->LH, $obj);
            }
        }

        if (array_key_exists("ECM",$param) and $param["ECM"] !== null) {
            $this->ECM = [];
            foreach ($param["ECM"] as $key => $value){
                $obj = new RegionInfo();
                $obj->deserialize($value);
                array_push($this->ECM, $obj);
            }
        }

        if (array_key_exists("Other",$param) and $param["Other"] !== null) {
            $this->Other = [];
            foreach ($param["Other"] as $key => $value){
                $obj = new RegionInfo();
                $obj->deserialize($value);
                array_push($this->Other, $obj);
            }
        }

        if (array_key_exists("ALL",$param) and $param["ALL"] !== null) {
            $this->ALL = [];
            foreach ($param["ALL"] as $key => $value){
                $obj = new RegionInfo();
                $obj->deserialize($value);
                array_push($this->ALL, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
