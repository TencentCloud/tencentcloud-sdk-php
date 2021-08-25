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
 * ListTopWafData返回参数结构体
 *
 * @method array getTopTypeData() 获取攻击类型统计
 * @method void setTopTypeData(array $TopTypeData) 设置攻击类型统计
 * @method array getTopIpData() 获取IP统计
 * @method void setTopIpData(array $TopIpData) 设置IP统计
 * @method array getTopUrlData() 获取URL统计
 * @method void setTopUrlData(array $TopUrlData) 设置URL统计
 * @method array getTopDomainData() 获取域名统计
 * @method void setTopDomainData(array $TopDomainData) 设置域名统计
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ListTopWafDataResponse extends AbstractModel
{
    /**
     * @var array 攻击类型统计
     */
    public $TopTypeData;

    /**
     * @var array IP统计
     */
    public $TopIpData;

    /**
     * @var array URL统计
     */
    public $TopUrlData;

    /**
     * @var array 域名统计
     */
    public $TopDomainData;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $TopTypeData 攻击类型统计
     * @param array $TopIpData IP统计
     * @param array $TopUrlData URL统计
     * @param array $TopDomainData 域名统计
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
        if (array_key_exists("TopTypeData",$param) and $param["TopTypeData"] !== null) {
            $this->TopTypeData = [];
            foreach ($param["TopTypeData"] as $key => $value){
                $obj = new ScdnTypeData();
                $obj->deserialize($value);
                array_push($this->TopTypeData, $obj);
            }
        }

        if (array_key_exists("TopIpData",$param) and $param["TopIpData"] !== null) {
            $this->TopIpData = [];
            foreach ($param["TopIpData"] as $key => $value){
                $obj = new ScdnTopData();
                $obj->deserialize($value);
                array_push($this->TopIpData, $obj);
            }
        }

        if (array_key_exists("TopUrlData",$param) and $param["TopUrlData"] !== null) {
            $this->TopUrlData = [];
            foreach ($param["TopUrlData"] as $key => $value){
                $obj = new ScdnTopUrlData();
                $obj->deserialize($value);
                array_push($this->TopUrlData, $obj);
            }
        }

        if (array_key_exists("TopDomainData",$param) and $param["TopDomainData"] !== null) {
            $this->TopDomainData = [];
            foreach ($param["TopDomainData"] as $key => $value){
                $obj = new ScdnTopDomainData();
                $obj->deserialize($value);
                array_push($this->TopDomainData, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
